<?php
//Домашнее задание 2 на 21.10.2020
//Записать массив и вывести товар. Если есть в наличии, то с ценой.
echo "<br>";
$products = [
    ["name" => "диван", "active" => true, "price" => "800"],
    ["name" => "тумба", "active" => true, "price" => "200"],
    ["name" => "стеллаж", "active" => false, "price" => "400"],
    ["name" => "кровать", "active" => true, "price" => "100"],
    ["name" => "шкаф", "active" => true, "price" => "900"],
    ["name" => "комод", "active" => false, "price" => "300"],
    ["name" => "стол", "active" => true, "price" => "400"],
    ["name" => "стул", "active" => true, "price" => "40"],
    ["name" => "прихожая", "active" => false, "price" => "400"],
    ["name" => "шкаф-купе", "active" => true, "price" => "350"],
    ["name" => "пуф", "active" => false, "price" => "40"],
    ["name" => "матрас", "active" => true, "price" => "400"],
    ["name" => "кресло", "active" => true, "price" => "200"],
    ["name" => "картина", "active" => true, "price" => "100"],
    ["name" => "лампа", "active" => false, "price" => "50"]
];

foreach ($products as $product) {
    echo $product["name"] . ":" . " ";
    if ($product["active"]) {
        echo $message = "Есть в наличии. Цена:";
        echo $product["price"] . "<br>";

    } else {
        echo $message = "Нет в наличии." . "<br>";
    }
}

//Таблица умножения

$rows = 10;
$columns = 10;
echo "<table>";
for ($i = 1; $i <= $rows; $i++) {
    echo "<tr>";
    for ($q = 1; $q <= $columns; $q++) {
        if ($q == 1 || $i == 1)
            echo "<th>".$i * $q."</th>"."<br>";
        else
            echo "<td>".$i * $q."</td>"."<br>";
    }
    echo "</tr>";
}
echo "</table>";
