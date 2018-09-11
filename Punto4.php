<?php
$a = $_POST['a'];
$b =  $_POST['b'];
$c = $_POST['c'];
$d = $_POST['d'];
$operacion=  $_POST['operacion'];
switch($operacion){
        case '+';
        suma($a,$b,$c,$d);
        // echo suma($numero1,$numero2);
        break;
        case '-';
        resta($a,$b,$c,$d);
        break;
        case '*';
        multiplicacion($a,$b,$c,$d);
        break;
        case '/';
        division($a,$b,$c,$d);
        break;
    case '%':
        Radicacion($a,$b,$c,$d);
        break;
    case '^':
        potencia($a,$b,$c,$d);
        break;
    default:
        echo "no es una operacion valida.";
}
function suma ($a,$b,$c,$d){
    $resulsuperior = $a * $d + $b * $c;
    $resulinferior= $b * $d;
    echo "{$a}.{$d} + {$b}.{$c} / {$b}.{$d}";
    echo "<br><br> {$resulsuperior} / {$resulinferior}";
   /*echo "<br>"
    $numeros =range(0,10);
    var_dump($numeros);
    echo "<br>";*/
    //var_dump($resultado);
}
function resta ($a,$b,$c,$d){
    $resulsuperior = $a * $d - $b * $c;
    $resulinferior= $b * $d;
    echo "{$a}.{$d} - {$b}.{$c} / {$b}.{$d}";
    echo "<br><br> {$resulsuperior} / {$resulinferior}";
}
function multiplicacion ($a,$b,$c,$d){
    $resulsuperior = $a * $c;
    $resulinferior= $b * $d;
    echo "{$a}.{$c} / {$b}.{$d}";
    echo "<br><br> {$resulsuperior} / {$resulinferior}";
}
function division ($a,$b,$c,$d){
    $resulsuperior = $a * $d;
    $resulinferior= $b * $c;
    echo "{$a}.{$d} / {$b}.{$c}";
    echo "<br><br> {$resulsuperior} / {$resulinferior}";
}
function radicacion($a,$b,$c,$d){
    $resulsuperior = sqrt($a);
    $resulinferior = sqrt($b);
    echo "Raiz {$a} / {$b}";
    echo "Raiz {$resulsuperior} / {$resulinferior}";
}
function potencia($a,$b,$c,$d){
    $resulsuperior = pow($a,2);
    $resulinferior= pow($b,2);
    echo "{$a}^2 / {$b}^2";
    echo "<br><br> {$resulsuperior} / {$resulinferior}";
    
}


?>