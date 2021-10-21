<HTML>
<TITLE> Абизгильдина Д.Р. </TITLE>
<BODY>
<TABLE border=1>
<?php
for ($i = 0; $i < 10; $i++) {
    echo '<tr>'; //начало строки таблицы
    for ($k = 1; $k < 11; $k++) {
        echo '<td align=center style="color:'.($k%2?'black':'red').'">'.($i*10+$k).'</td>'; //открываем ячейку, проверка условия+вычисление. закрываем ячейку
    }
    echo '</tr>'; //конец строки таблицы
}
?>
</TABLE>
  <ul id = "menu">
	<li> <a href="/"> Главная </a> </li>
</ul>

</BODY>
</HTML>

