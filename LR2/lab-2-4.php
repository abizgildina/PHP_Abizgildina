<?php
    echo '<title>Абизгильдина Д.Р.</title>';
    echo '<h2>Вариант 1</h2> В массиве А(N) каждый элемент, кроме первого, заменить суммой всех предыдущих
элементов исходного массива.<br>';
    $arr = range(1, 10); //задаем массив с элементами от 1 до 10
    echo ' Исходный массив: ';
        echo '<pre>';
        print_r($arr); //вывод массива
        echo '</pre>';
    echo '<br>';
    for($i = 1, $end = count($arr); $i < $end; ++$i) {
        $arr[$i] = array_sum(array_slice($arr, 0, $i));
    }
        echo 'Измененный массив: ';
        echo '<pre>';
        print_r($arr); //вывод массива
        echo '</pre>';
        
  


?>
 <ul id = "menu">
	<li> <a href="/"> Главная </a> </li>
</ul>