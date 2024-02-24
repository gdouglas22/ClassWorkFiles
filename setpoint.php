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

    // Выводим параметры в консоль браузера через error_log
    error_log("Параметры x и y: $x, $y");

    // Выводим параметры в echo
    echo "Параметры x и y: $x, $y";
} else {
    // Выводим сообщение об ошибке, если координаты не были переданы
    echo "Ошибка: Координаты x и y не были переданы.";
}
