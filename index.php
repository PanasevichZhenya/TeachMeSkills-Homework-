<?php
//Домашнее задание 1 на 19.10.2020
//Задача 1
//Переменная x попадает в диапазон от –2 до 1
echo ("Задача 1: ");

$x = 1; //введите любое значение $x

if ($x >= -2 && $x <= 1){
    echo "true"."<br>";
}
else{
    echo "false"."<br>";
}

//Задача 2
//Переменная x лежит за пределами диапазона от –2 до 1

echo ("Задача 2: ");

$x2 = -130; //введите любое значение $x2

if ($x2 <= -2 || $x2 >= 1){
    echo ("true")."<br>";
}
else{
    echo ("false")."<br>";
}

//Задача 3
//Переменная x лежит в одном из диапазонах от минус бесконечности до -2 или от 1 до 3

echo ("Задача 3: ");

$x3 = 1;  //введите любое значение $x3

if ($x3 <= -2 || ($x3 >= 1 && $x3 <= 3)){
    echo ("true")."<br>";
}
else{
    echo ("false")."<br>";
}

//Задача 4а
//Записать условие, когда точка лежит на прямой
echo ("Задача 4a: ");

$x4 = 2;
$y4 = 2;
$tmp1 = 0.5*$x4+1;
if ($tmp1 == $y4){
    echo "true"."<br>";
}
else{
    echo "false"."<br>";
}

//Задача 4б
//Записать условие, когда точка лежит выше прямой
echo ("Задача 4б: ");
$x5 = 4;
$y5 = 6;
$tmp1 = 0.5*$x5+1;
if ($y5 > $tmp1){
    echo "true"."<br>";
}
else {
    echo "false"."<br>";
}


//Массив интернет-магазина
$products = [
    'Мебель для гостинной' => [
        ['name' => 'Диван', 'price' => '800', 'active' => true],
        ['name' => 'Кровать', 'price' => '900', 'active' => false],
        ['name' => 'Журнальный столик', 'price' => '300', 'active' => true],
        ['name' => 'Тумба', 'price' => '800', 'active' => true],
        ['name' => 'Стеллаж', 'price' => '600', 'active' => false],
        ['name' => 'Книжный шкаф', 'price' => '600', 'active' => false]
    ],
    'Мебель для спальни' => [
        ['name' => 'Кровать односпальная', 'price' => '1000', 'active' => true],
        ['name' => 'Кровать двуспальная', 'price' => '2000', 'active' => true],
        ['name' => 'Матрас', 'price' => '400', 'active' => false],
        ['name' => 'Прикроватная тумба', 'price' => '200', 'active' => true],
        ['name' => 'Комод', 'price' => '300', 'active' => true]
    ],
    'Мебель для прихожей' => [
        ['name' => 'Прихожая', 'price' => '400', 'active' => true],
        ['name' => 'Шкаф-купе двухстворчатый', 'price' => '1000', 'active' => true],
        ['name' => 'Шкаф-купе двухстворчатый с зеркалом', 'price' => '1300', 'active' => false],
        ['name' => 'Шкаф-купе трехстворчатый', 'price' => '1300', 'active' => false],
        ['name' => 'Шкаф-купе трехстворчатый с зеркалом', 'price' => '1500', 'active' => false],
        ['name' => 'Вешалка напольная', 'price' => '150', 'active' => false],
        ['name' => 'Вешалка настенная', 'price' => '100', 'active' => true],
        ['name' => 'Пуф в прихожую', 'price' => '50', 'active' => true],
    ],
    'Мебель для кухни' => [
        ['name' => 'Современная кухня', 'price' => '1650', 'active' => true],
        ['name' => 'Классическая кухня', 'price' => '1650', 'active' => true],
        ['name' => 'Стол обеденный', 'price' => '300', 'active' => true],
        ['name' => 'Стол барный', 'price' => '350', 'active' => false],
        ['name' => 'Стул обеденный', 'price' => '60', 'active' => true],
        ['name' => 'Стул барный', 'price' => '80', 'active' => false],
        ['name' => 'Кухонный уголок', 'price' => '800', 'active' => true],
        ['name' => 'Пуф в прихожую', 'price' => '50', 'active' => true],
    ],
    'Мебель для домашнего кабинета' => [
        ['name' => 'Стеллаж', 'price' => '800', 'active' => true],
        ['name' => 'Стол письменный', 'price' => '200', 'active' => true],
        ['name' => 'Стол компьютерный', 'price' => '150', 'active' => true],
        ['name' => 'Кресло компьютерное', 'price' => '200', 'active' => true]
    ]
];
foreach ($products as $key => $product){
    echo "<br>";
    echo $key.":"."<br>"."<br>";
    foreach ($product as $key2 => $good){
        if ($good['active']){
            echo $good['name']." ";
            echo $good['price']."<br>";
            echo 'Есть в наличии'."<br>";
        }
    }
}


//Задание: написать индексный массив
//Вывести последний и предпоследний элемент
echo "<br>";
echo ("Индексный массив:")."<br>";
$arr = [1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16];
echo ("Последний элемент массива: ");
echo end($arr)."<br>";
echo ("Предпоследний элемент массива: ");
echo prev($arr)."<br>";






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


//Домашнее задание 3 на 26.10.2020
//Записать 5 любых функций

$arr = [100, -2, 32, 43, 15, 66, -7, -68, 94, 10, 121, -112, 122];
$arr2 = [-46, 'Диван', 'Кровать', 1, 2, 3, 'Шкаф', 'Стул', 40, -400];



echo count($arr) . "<br>";//отсчитывает количество элементов в массиве
echo min($arr) . "<br>";//выводит минимальный элемент
echo max($arr) . "<br>";//выводит максимальный элемент

echo "<pre>";
print_r($arr);
echo "</pre>";

echo "<pre>";
print_r($arr2);
echo "</pre>";

// берет все элементы массива(как правило одномерный) объединяет всеэлементы массива в строку и между элементами вставляет стору разделитель
$tmp = implode(' ; ', $arr2);
echo $tmp;

array_push($arr,'Стеллаж');//добавлет элемент в массив
echo "<br>";
print_r(end($arr));//выводит последний элемент массива
echo "<pre>";
print_r($arr);
echo "</pre>";
