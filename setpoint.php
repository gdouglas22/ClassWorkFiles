<?php

// Разрешим принимать и отправлять запросы на сервер
header('Access-Control-Allow-Origin: *');

// Установим типы запросов, которые следует разрешить (все неуказанные будут отклоняться)
header('Access-Control-Allow-Methods: GET, POST, PUT, DELETE');

// Разрешим передавать Cookie и Authorization заголовки для указанного в Origin домена
header('Access-Control-Allow-Credentials: true');

// Установим заголовки, которые можно будет обрабатывать
header('Access-Control-Allow-Headers: Authorization, Origin, X-Requested-With, Accept, X-PINGOTHER, Content-Type');

// Проверяем, получены ли данные в POST-запросе
$data = json_decode(file_get_contents('php://input'), true);

if (!empty($data['x']) && !empty($data['y'])) {
    // Получаем координаты из POST-данных
    $x = $data['x'];
    $y = $data['y'];

    // Читаем содержимое файла points.json
    $pointsJson = file_get_contents('points.json');

    // Проверяем успешность чтения файла
    if ($pointsJson === false) {
        // Ошибка чтения файла
        echo "Ошибка чтения файла points.json.";
        exit;  // Прерываем выполнение скрипта, чтобы не продолжать с некорректными данными
    }

    // Преобразуем JSON-строку в массив
    $pointsArray = json_decode($pointsJson, true);

    // Добавляем новую точку в массив
    $newPoint = [
        'x' => $x,
        'y' => $y,
        'color' => 'black', // Черный цвет (или другой по вашему усмотрению)
    ];

    $pointsArray[] = $newPoint;

    // Преобразуем массив обратно в JSON-строку
    $updatedPointsJson = json_encode($pointsArray);

    // Проверяем успешность записи в файл
    if (file_put_contents('points.json', $updatedPointsJson)) {
        // Успешно записано
        echo $updatedPointsJson;
    } else {
        // Ошибка записи в файл
        echo "Ошибка записи в файл points.json.";
    }
} else {
    // Выводим сообщение об ошибке, если данные не были переданы
    echo "Ошибка: Данные не были переданы.";
}
