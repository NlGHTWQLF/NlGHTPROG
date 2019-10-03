<?php

$array = array(); //Объявление массива
$count = 0; //Переменная-счетчик одинаковых пар элементов
$elements = ""; //Переменная для хранения индексов одинаковых пар элементов
for($i = 0;$i<100;$i++) $array[$i] = rand(0,50); //Цикл заполнаяющий элементы массива случайным значением
for($i = 0;$i<99;$i++) //Цикл для проверки пар на идентичность
if($array[$i] == $array[$i+1]) //Цикл делает на один шаг меньше, чтобы не проверять последнее число, т. е. избегает переполнения
{
    $count++;
    $elements = $elements.$i."&".($i+1)."\t";
};
if($count == 0) echo "Похожих пар элементов не найдено."; //Вывод текста, в случае, если одинаковых пар нет
else //Вывод количества пар и их индексов
{
    echo "Количество похожих элементов = ".$count."\n";
    echo $elements."\n";
};
foreach( $array as $key => $value ) //Вывод массива
{
    echo $key."\t=>\t".$value."\n";
};

?>
