<?php
    echo '<title>Абизгильдина Д.Р.</title>';
echo 'Ассоциативный массив: <br>';
    $cust = array(
        "cnum" => "2001",
        "cname" => "Hoffman",
        "city" => "London",
        "snum" => "1001"
    );
    
  var_export($cust);

    echo'<br> Добавление в массив ключа rating со значением 100: <br>';
    $cust["rating"] = 100;
    var_export($cust);
    
    echo '<br> Сортировка по значениям: <br>';
    asort($cust);
    var_export($cust);

    echo '<br> Сортировка по ключам: <br>';
    ksort($cust);
    var_export($cust);

    echo '<br> Сортировка с помощью sort(): <br>';
    sort($cust);
    var_export($cust);
?>
 <ul id = "menu">
	<li> <a href="/"> Главная </a> </li>
</ul>