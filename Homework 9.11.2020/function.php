<?php
function withoutSpaces($str) // Сжать текст, чтобы между словами остался только один пробел.
{
    $str = preg_replace('/[^\S\r\n]+/', ' ', $str);
    return $str;
}
function wordSize($str) // В произвольном тексте найти и вывести на экран все слова длина которых не менее трёх символов и не более пяти.

{
    $str = explode(" ", $str);
    $count = count($str);
    for ($i = 0; $i < $count; $i++)
    {
        if (mb_strlen($str[$i]) >= 3 && mb_strlen($str[$i]) <= 5) {
            $word = $str[$i]." ";
        }else{
            $word = "Таких слов нет";
        }
    }return $word;

}

function palindrom($str) //Определить, является ли строка палиндромом
{
    $str = str_replace(" ", "", $str);  //Убрать из текста все пробелы
    $palindrom = strrev($str);   //Перевернуть текст и записать его в другую переменную

    if ($str == $palindrom) {
        $palindrom2 = "является" . "<br>";
    } else {
        $palindrom2 = "не является" . "<br>";
    }
    return $palindrom2;
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
    return $max . "<br>";
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
    echo "Количество строчных букв: <b> $cnt </b>" . "<br>";
    echo "Количество прописных букв: <b> $cnt1 </b>" . "<br>";
}
