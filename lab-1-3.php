<p> Число е равно:
<p>
<?php
echo '<title>Абизгильдина Д.Р.</title>';
 const NUM_E=2.71828;
 $num_el=NUM_E;
 
 echo '$num_el' . ' = ' . $num_el . ' - ' . gettype($num_el) . '<br>';
 
//стороковый
 $num_el= (string) $num_el;
  echo '$num_el' . ' = ' . $num_el . ' - ' . gettype($num_el) . '<br>';
  //целый
 $num_el= (int) $num_el;
  echo '$num_el' . ' = ' . $num_el . ' - ' . gettype($num_el) . '<br>';
    //булевый
 $num_el= (boolean) $num_el;
  echo '$num_el' . ' = ' . $num_el . ' - ' . gettype($num_el) . '<br>';
 
?>

  <ul id = "menu">
	<li> <a href="/"> Главная </a> </li>
</ul>