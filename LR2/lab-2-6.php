<?php
    include_once('library.php');
    echo '<title>Абизгильдина Д.Р.</title>';
    
    echo '<h2>Вариант 1</h2>';
    outputvar1();
    $n = rand(3, 6);
    $m = create_matrix($n);
    echo 'Исходный массив: <br>';
    print_matrix($m);
    echo '<br>Скорректированный массив: <br>';
    $m=handle_arr_var1($m, $n);
    print_matrix($m);
              echo '<br>';
        echo '<br>';
        
        
    echo '<h2>Вариант 6 </h2>';
    outputvar6();
    $n1 = rand(3, 6);
    $m1 = create_matrix($n1);
    echo 'Исходный массив: <br>';
    print_matrix($m1);    
    echo '<br>Произведение найденных наименьших эл-в: <br>';
    $result = handle_arr_var6($m1, $n1);
    echo $result;
?>
 <ul id = "menu">
	<li> <a href="/"> Главная </a> </li>
</ul>