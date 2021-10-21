<p> Наибольшее число:
<p>
<?php
echo '<title>Абизгильдина Д.Р.</title>';
$x=rand(1,10);
$y=rand(1,10);
print ('$x =' . $x . "<br>");
print ('$y =' . $y . "<br>");
if ($x>$y) echo("Наибольшее =" . $x);
elseif ($x<$y) echo ("Наибольшее =" . $y);
else print ("Наибольшего нет");
?>

  <ul id = "menu">
	<li> <a href="/"> Главная </a> </li>
</ul>