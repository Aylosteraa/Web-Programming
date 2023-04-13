<?php
    $var1 = 34;
    $var2 = '34';
    $var3 = '000001';
    $var_float = 0.12;


    $var4 = ($var1 == $var2);
    echo "var1 == var2: " .$var4;

    echo "<br>";
    $var4 = ($var1 === $var2);
    echo "var1 === var2: " .$var4;


    echo "<br><br> Додавання та конкатинація: <br> ";
    echo "var1 + var3: " .($var1 + $var3);

    echo "<br>";
    echo "var1.var3: " .$var1.$var3;


    echo "<br><br>Функції: <br> ";
    function sayHello(){
        echo "Hello!!!";
    }
    sayHello();


    echo "<br><br> Арифметика: <br> ";
    $a = 10;
    $b = 15;
    echo (($b+$a)*$a%4)**2;


    echo "<br><br> if: <br> ";
    if ($var3 <= -2){
        echo "var3 less than -2 and equal " .intval($var3);
    }
    elseif ($var3 >= 5) {
        echo "var3 large than 5 and equal " .intval($var3);
    }
    else{
        echo "var3 is in (-2; 5) and equal " .intval($var3);
    }


    echo "<br><br> endif: <br> ";

    if ($var1 <= 22):
        echo "var1 less than 22 and equal " .$var1;
    elseif ($var1 >= 30):
        echo "var1 large than 30 and equal " .$var1;
    else:
        echo "var1 is in (22; 30) and equal " .$var1;
    endif;


    echo "<br><br> array and associative array: <br> ";

    $arr2 = array('A', 'B', 'C', 'D', 'E');
    echo $arr2[0];
    $arr1 = array('A'=>'100', 'B'=>'95', 'C'=>'85', 'D'=>'65');
    echo $arr1['A'];


    echo "<br><br> for and foreach: <br> ";

    for ($i = 0; $i<count($arr2); $i++) {
        echo "$i : $arr2[$i]";
        echo "<br>";
    }


    foreach ($arr1 as $item=>$item_value) {
        echo "$item : $item_value";
        echo "<br>";
    }


    echo "<br> explode and implode: <br> ";
    $str1 = 'PHP C++ Python Java JavaScript';
    echo $str1;
    $arr3 = (explode(' ', $str1));
    echo "<br>" .$arr3[3]. "<br>" ;
    echo (implode("; ", $arr3));
?>