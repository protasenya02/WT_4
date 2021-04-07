<?php

include ('config.php');
include ('var.php');

function LoadData($id) {

    $host = 'localhost';
    $user = 'root';
    $password = 'root';
    $database = 'my_data';

    // подключение к базе данных
    $mysqli = new mysqli($host, $user, $password, $database);
    // проверка соединения
    if ($mysqli->connect_errno) {
        printf("Connection failed: %s\n", $mysqli->connect_error);
        exit();
    }

    // текс SQL запроса
    $query = "SELECT `name` FROM menu_items WHERE id = $id";
    // запрос к БД
    $result = $mysqli->query($query);
    // извлечение результуреющего массива
    $data = $result->fetch_assoc();

    // удаление выборки
    $result->free();
    // закрытие соединения
    $mysqli->close();

    return $data['name'];
}

// шаблонизатор
$file = file_get_contents("template.tpl"); // путь к шаблону

// основные замены
$file = preg_replace("/({CONFIG=\")([a-zA-z.0-9_]*)(\"})/ui", "<?=$$2?>", $file);
$file = preg_replace("/{FILE=(\"[a-zA-z.\-0-9_]*\")}/ui", "<?php include $1;?>", $file);
$file = preg_replace("/({VAR=\")([a-zA-z.\-0-9_]*)(\"})/ui", "<?=\$VARS['$2']?>", $file);

// замена условия
$file = preg_replace("/({IF \")([a-zA-z.\-0-9_]*)(\")([><=!]*)(\")([a-zA-z.\-0-9_]*)(\"})/ui",
    "<?php if($2 $4 $6): ?>", $file);
$file = preg_replace("/({ELSE})/ui", "<?php else: ?>", $file);
$file = preg_replace("/({ENDIF})/ui", "<?php endif; ?>", $file);

// замена из БД
$file = preg_replace("/({DB=\")([a-zA-z.\-0-9_]*)(\"})/u",
    "<?=LoadData($2)?>", $file);

// подключение результирующего файла
file_put_contents("result", $file);
include "result";
unlink("result");