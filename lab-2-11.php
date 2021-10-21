<?php
echo '<title>Абизгильдина Д.Р.</title>';
$n=rand(1,32500);
echo 'Вариант №1 '. '<br>';
echo 'Натуральное число = ' . $n . '<br> Делители: ';
for ($i=1; $i<=$n; $i++) {
	if ($n%$i==0){
	echo $i.' ';}
}
?>
  <ul id = "menu">
	<li> <a href="/"> Главная </a> </li>
</ul>