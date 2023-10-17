<?php
//Подключаем бд
include $_SERVER['DOCUMENT_ROOT'] . '/src/core.php';
$link = sqlConnect();

//Запрос на получение количества заявок за последние 6 месяцев к бд
$result = mysqli_query($link, "SELECT COUNT(*) AS message_count, DATE_FORMAT(date, '%m') AS month_year
FROM applications
WHERE date >= DATE_SUB(NOW(), INTERVAL 6 MONTH)
GROUP BY month_year
ORDER BY month_year ASC;");
$data = [];
while ($row = mysqli_fetch_array($result)) {
    $data[] = $row;
}

//Массив нужен для замены числа месяца на его название
$months = [
    1 => 'Январь',
    2 => 'Февраль',
    3 => 'Март',
    4 => 'Апрель',
    5 => 'Май',
    6 => 'Июнь',
    7 => 'Июль',
    8 => 'Август',
    9 => 'Сентябрь',
    10 => 'Октябрь',
    11 => 'Ноябрь',
    12 => 'Декабрь'
];

//Варианты окончания слова заявка
$endingArray = [
    'заявка',
    'заявки',
    'заявок'
];

//Функция получет нужное окончание слова и заменяет цифру в mysql запросе на название месяца
function getNumEnding($number, $endingArray)
{
    $number = $number % 100;
    if ($number >= 11 && $number <= 19) {
        $ending = $endingArray[2];
    } else {
        $i = $number % 10;
        switch ($i) {
            case (1):
                $ending = $endingArray[0];
                break;
            case (2):
            case (3):
            case (4):
                $ending = $endingArray[1];
                break;
            default:
                $ending = $endingArray[2];
        }
    }
    return $ending;
}

foreach ($data as $k => $value) {
    foreach ($months as $key => $val) {
        if ($value['month_year'] == $key) {
            $data[$k]['month_year'] = $val;
            $data[$k]['end'] = getNumEnding($value['message_count'], $endingArray);
        }
    }
}

//Выводим всю информацию в формате json
echo json_encode($data);
