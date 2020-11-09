<link rel="stylesheet" type="text/css" href="style.css">
<p>Функция 1: Сжимает текст, чтобы между словами остался только один пробел.</p>
<p>Функция 2: Находит и выводит на экран все слова длина которых не менее трёх и не более пяти символов.</p>
<p>Функция 3: Определяет, является ли текст палиндромом.</p>
<p>Функция 4: Находит самое длинное слово и выводит его на экран.</p>
<p>Функция 5: Считает количество строчных и прописных букв в строке.</p>
<form action="" method="post">
    <input class="text" type="text" name="string" placeholder="Введите текст">
    <select name="funcName" id="">
        <option value="withoutSpaces">Функция 1</option>
        <option value="wordSize">Функция 2</option>
        <option value="palindrom">Функция 3</option>
        <option value="longestWord">Функция 4</option>
        <option value="lowUpCase">Функция 5</option>
    </select>
    <input class="submit" type="submit" value="Проверить">
</form>
<h3>Ответ:</h3>


<?php
include_once './function.php';
if (!empty($_POST)){
    $str = $_POST['string'];
    $funcName = $_POST['funcName'];
    //Задание 1: В строке текста записаны слова, разделенные пробелами в произвольном количестве.
    //Сжать текст, чтобы между словами остался только один пробел.
    if ($funcName == 'withoutSpaces') {
        echo "Строка без лишних пробелов: "."<br>";
        echo "<b>".withoutSpaces($str)."</b>";
    }
    //Задание 2:
    // В произвольном тексте найти и вывести на экран все слова длина которых не менее трёх символов и не более пяти.
    elseif ($funcName == 'wordSize'){
        echo "Слова, которые не меньше 3-ех, но не больше 5-ти символов: "."<br>";
        echo "<b>".wordSize($str)."</b>";
    }
    //Задание 3:  Вводится строка. Удалить из нее все пробелы.
    //После этого определить, является ли она палиндромом (перевертышем), т.е. одинаково пишется как с начала, так и с конца.
    elseif ($funcName == 'palindrom'){
        echo 'Строка является палиндромом: '."<br>";
        echo "<b>".palindrom($str)."</b>";
    }
    //Задание 4: Найти самое длинное слово и вывести его на экран.
    elseif ($funcName == 'longestWord'){
        echo 'Самое длинное слово: '."<br>";
        echo "<b>".longestWord($str)."</b>";
    }
    //Задание 5: Посчитать количество строчных и прописных букв в строке.
    elseif ($funcName == 'lowUpCase'){
        echo lowUpCase($str);
    }
}
