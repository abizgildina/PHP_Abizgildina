<?php
function outputvar1() {
    echo 'В матрице Z(n,n) каждый элемент столбца разделить на диагональный, стоящий в том же столбце. Исходный и скорректированный массивы вывести на экран. <br>';
}

function outputvar6() {
    echo 'Дана квадратная матрица порядка N. Для каждого столбца матрицы найти наименьший
элемент. Вычислить и напечатать произведение найденных наименьших элементов. <br>';
}

function create_matrix($n)
{
    $m = array();

    for ($i = 0; $i < $n; $i++) {
        array_push($m, array());
        for ($j = 0; $j < $n; $j++) {
            array_push($m[$i], rand(1, 20));
        }
    }

    return $m;
}

function print_matrix($m)
{
    foreach ($m as $sm)
    $temp[] = implode(' ', $sm);
    $result = implode('<br>', $temp);
    echo $result;
}
function handle_arr_var1($m, $n)
{
    for ($i = 0; $i < $n; $i++) {
        for ($j = 0; $j < $n; $j++) {
            $d = $m[$i][$i];
            $a = $m[$i][$j];
            $m[$i][$j] = $a / $d;
        }
    }
    return $m;
}
function handle_arr_var6($m, $n)
{
    $mins = [];
    for ($i = 0; $i < $n; $i++) {
       $colums = array_column($m, $i);
        array_push($mins, min($colums));
    }
    $result = 1;
    foreach ($mins as $min)
        $result *= $min;
        return $result;
}

?>
