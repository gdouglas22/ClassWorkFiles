<?php

// Разрешим принимать и отправлять запросы на сервер
header('Access-Control-Allow-Origin: *');

// Установим типы запросов, которые следует разрешить (все неуказанные будут отклоняться)
header('Access-Control-Allow-Methods: GET, POST, PUT, DELETE');

// Разрешим передавать Cookie и Authorization заголовки для указанного в Origin домена
header('Access-Control-Allow-Credentials: true');

// Установим заголовки, которые можно будет обрабатывать
header('Access-Control-Allow-Headers: Authorization, Origin, X-Requested-With, Accept, X-PINGOTHER, Content-Type');

// Проверяем, получены ли координаты x и y в GET-параметрах
if (isset($_GET['x']) && isset($_GET['y'])) {
    // Получаем координаты из GET-параметров
    $x = $_GET['x'];
    $y = $_GET['y'];

    // Создаем новую точку в виде ассоциативного массива
    $newPoint = [
        'x' => $x,
        'y' => $y,
        'color' => 'black', // Черный цвет (или другой по вашему усмотрению)
    ];

    // Читаем содержимое файла points.json
    $pointsJson = file_get_contents('points.json');

    // Преобразуем JSON-строку в массив
    $pointsArray = json_decode($pointsJson, true);

    // Добавляем новую точку в массив
    $pointsArray[] = $newPoint;

    // Преобразуем массив обратно в JSON-строку
    $updatedPointsJson = json_encode($pointsArray);

    // Перезаписываем файл points.json обновленным массивом
    file_put_contents('points.json', $updatedPointsJson);

    // Выводим обновленный массив в поток
    echo $updatedPointsJson;
} else {
    // Выводим сообщение об ошибке, если координаты не были переданы
    echo "Ошибка: Координаты x и y не были переданы.";
}
