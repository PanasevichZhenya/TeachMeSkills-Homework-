<?php

function withoutSpaces($text) // Сжать текст, чтобы между словами остался только один пробел.
{
    $text2 = preg_replace('/[^\S\r\n]+/', ' ', $text);
    echo $text2;
    return $text2;
}


function wordSize($string) // В произвольном тексте найти и вывести на экран все слова длина которых не менее трёх символов и не более пяти.

{
    $string1 = explode(" ", $string);
    $count = count($string1);
    for ($i = 0; $i < $count; $i++)
    {
        if (mb_strlen($string1[$i]) >= 3 && mb_strlen($string1[$i]) <= 5) {
            echo  $string1[$i]." ";
        }
    }
    echo "<br>";
}



function palindrom($str) //Определить, является ли строка палиндромом
{
    $str1 = str_replace(" ", "", $str);  //Убрать из текста все пробелы
    $palindrom = strrev($str1);   //Перевернуть текст и записать его в другую переменную

    if ($str1 == $palindrom) {
        echo "является" . "<br>";
    } else {
        echo "не является" . "<br>";
    }
}

function longestWord($text3) //Найти самое длинное слово и вывести его на экран
{
    $text4 = explode(" ", $text3);
    $max = $text4[0];
    for ($i = 0; $i < count($text4); $i++) {
        if (mb_strlen($text4[$i]) > mb_strlen($max)) {
            $max = $text4[$i];
        }
    }
    echo $max . "<br>";
}





function lowUpCase($str2) //Посчитать количество строчных и прописных букв в строке.
{
    $cnt = 0;
    $cnt1 = 0;
    $strlen = mb_strlen($str2);
    for ($i = 0; $i < $strlen; $i++) {
        if ($str2[$i] >= 'A' && $str2[$i] <= 'Z') {
            $cnt++;
        }elseif (($str2[$i] >= 'a' && $str2[$i] <= 'z')){
            $cnt1++;
        }
    }
    echo "Количество строчных букв: $cnt" . "<br>";
    echo "Количество прописных букв: $cnt1" . "<br>";
}
