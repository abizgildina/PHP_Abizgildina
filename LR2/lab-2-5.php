<?php
    echo '<title>Абизгильдина Д.Р.</title>';
    
    $a=rand(-10,10);
    $b=rand(-10,10);
      echo 'a='.$a.', '. 'b='.$b;
    echo '<h2>Вариант 1</h2>';
    function f($u,$t) {
    if ($t>0) {
        $f=$u*$u+$t;
    }
        else if ($t<=0 AND $u<=0){
            $f=$u+$t*$t;
        }
        else {
             $f=$u+$t;
        }
     return $f;
    }
    
        $z=f($a-$b,$b*$b-$a) + f($a*$a*$b,$b*$b);
        echo 'z='.$z;
        
        
         echo '<h2>Вариант 6 </h2>';
    function f2($u,$t) {
    if ($t>=0 AND $u>=0) {
        $f=$u+$t;
    }
        else if ($t>=0 AND $u<0){
            $f=$u*$u+$t;
        }
        else if ($u>=0 AND $t<0){
             $f=$u-2*$t;
        }
        else if($u<0 AND $t<0){
            $f=($t+3*$u)/($u*$t);
        }
        return $f;
    }
     $z=f2($a, pow($b,8)-pow($a,7))+f2(pow($a,10)-pow($b,11), $b);
        echo 'z='.$z.'<br>';

?>
 <ul id = "menu">
	<li> <a href="/"> Главная </a> </li>
</ul>