<HTML>
<TITLE> Абизгильдина Д.Р. </TITLE>
<BODY>
<TABLE border=1>
<?php
$i=1;
while ($i<101 ) {
	
	if ($i%10==1) {
		echo ("<tr>"); // начало строки таблицы
	}
	echo ("<td align=center>"); // открываем ячейку таблицы
	 if ($i%2!=0) {
			echo ($i); // выводим его,
			echo ("</td>"); // а потом закрываем ячейку
		} 
		else {
			 echo ('<font color="red">' .$i. '</font>'); // выводим его,
			 echo ("</td>"); // а потом закрываем ячейку
		}
		$i++;
	}
	echo ("</tr>"); // конец строки таблицы
	
?>
</TABLE>
  <ul id = "menu">
	<li> <a href="/"> Главная </a> </li>
</ul>

</BODY>
</HTML>

