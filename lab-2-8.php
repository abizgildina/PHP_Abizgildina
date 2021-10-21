<?php
echo '<title>Абизгильдина Д.Р.</title>';
$a=rand(1,10);
$b=rand(10,20);
print ("<p> Числа из отрезка [".$a.",".$b."]: <br>");
for ($i=$a; $i<=$b; ++$i) {
 echo($a . "<br>");
 $a=++$a; }
?>
  <ul id = "menu">
	<li> <a href="/"> Главная </a> </li>
</ul>