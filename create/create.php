<?php

function getConnection($host = 'localhost', $user = 'root', $password = '', $database = 'test-local')
{
    static $connection;
    if (null === $connection) {
        $connection = mysqli_connect($host, $user, $password, $database);
    }
    return $connection;
}

if (!getConnection()) {
    print("Ошибка: Невозможно подключиться к MySQL " . mysqli_connect_error());
} else {
    print ("Соединение установлено успешно") . '<br>';
}

function createTable($name, $query): void
{
    getConnection()->query("CREATE TABLE IF NOT EXISTS " . $name . " (" . $query . ")");
    echo "Таблица '$name' создана или уже существовала<br>";
}

function queryMysql($query)
{
    $link = getConnection();
    $result = $link->query($query);
    if (!$result) {
        die("Fatal Error");
    }
    return $result;
}

createTable(
    'applications',
    ' id INT(32) AUTO_INCREMENT,
    name VARCHAR(255) NOT NULL,
    number VARCHAR(255) NOT NULL,
    mail VARCHAR(255),
    city VARCHAR(255) NOT NULL,
    date DATETIME DEFAULT CURRENT_TIMESTAMP,
    PRIMARY KEY (id)'
);
