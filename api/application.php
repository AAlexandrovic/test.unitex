<?php
//Подключаем бд
include $_SERVER['DOCUMENT_ROOT'] . '/src/core.php';
$link = sqlConnect();

//Получаем все заявки из бд
$result = mysqli_query($link, "SELECT 
        id, 
        name , 
        DATE_FORMAT(date, '%d.%m.%Y') AS date , 
        mail, number, city  
    FROM applications");
$data = [];
while ($row = mysqli_fetch_array($result)) {
    $data[] = $row;
}

//Выводим все заявки в формате json
echo json_encode($data);

//Удаляем заявку из бд если пришел запрос delete
if (isset($_POST['delete'])) {
    $id = mysqli_real_escape_string($link, $_POST["id"]);
    $sql = "DELETE FROM applications WHERE id = '$id'";
    mysqli_query($link, $sql);
}

//Добавляем заявку если пришел запрос create
if (isset($_POST['create'])) {
    // получаем данные удаляя пробелы и проверяя на инъекцию
    $name = trim(mysqli_real_escape_string($link, $_POST["name"]));
    $mail = trim(mysqli_real_escape_string($link, $_POST["mail"]));
    $number = trim(mysqli_real_escape_string($link, $_POST["number"]));
    $city = trim(mysqli_real_escape_string($link, $_POST["city"]));

    // создаем SQL-запрос для добавления данных в таблицу 
    $sql = "INSERT INTO applications (name, mail, number, city) VALUES ('$name', '$mail', '$number', '$city')";
    mysqli_query($link, $sql);
}