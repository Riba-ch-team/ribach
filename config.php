<?php
    session_start();

    $dbconn = array(
        'server' => 'Сервер',
        'user' => 'Пользователь',
        'pass' => 'Пароль',
        'db' => 'Ri4'
    );

    $db = new PDO("mysql:host=" .$dbconn['server']. ";dbname=" .$dbconn['db'],
        $dbconn['user'],
        $dbconn['pass']
    );

    $db->exec("set names utf8mb4");

    if($db == false){
        echo('Ошибка подключение базы данных');
    }
?>
