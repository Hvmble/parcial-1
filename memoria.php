<?php

$numero1= $_POST['numero1'];
$origen=  $_POST['origen'];
$destino= $_POST['destino'];


switch($origen){
        case 'kb';
        kilobyte($numero1,$destino,$origen);
        // echo suma($numero1,$numero2);
        break;
        case 'mb';
        megabyte($numero1,$destino,$origen);
        break;
        case 'gb';
        gigabyte($numero1,$destino,$origen);
        break;
        case 'tb';
        terabyte($numero1,$destino,$origen);
        break;
    case 'pb':
        petabyte($numero1,$destino,$origen);
        break;
    case 'eb':
        exabyte($numero1,$destino,$origen);
        break;
    case 'zb':
        zettabyte($numero1, $destino,$origen);
        break;
    case 'yb':
        yottabyte($numero1, $destino,$origen);
        break;
    default:
        echo "no es una operacion valida.";
}


function kilobyte ($numero1, $destino,$origen){
    echo "\n";
    if($destino == 'mb'){
        $resultado=$numero1/1048576;
        echo "{$numero1} / 1048576  = {$resultado}MB";
    }elseif($destino == 'gb'){
        $resultado=$numero1/1073741824;
        echo "{$numero1} / 1073741824  = {$resultado}GB";
    }elseif($destino == 'tb'){
        $resultado=$numero1/1099511627776;
        echo "{$numero1} / 1099511627776 = {$resultado}TB";
    }elseif($destino== 'pb'){
        $resultado=$numero1/1125899906842624;
        echo "{$numero1} / 1125899906842624 = {$resultado}PB";
    }elseif($destino == 'eb'){
        $resultado=$numero/1152921504606846976;
        echo "{$numero1} / 1152921504606846976 = {$resultado}EB";
    }elseif($destino == 'zb'){
        $resultado=$numero1 /1180591620717411303424;
        echo "{$numero1} /  1180591620717411303424 = {$resultado}ZB";
    }elseif($destino == 'yb'){
        $resultado=$numero1 / 1208925819614629174706176;
        echo "{$numero1} /  1208925819614629174706176 = {$resultado}YB";
    }
}
function megabyte ($numero1, $destino, $origen){
    if($destino == 'kb'){
        $resultado=$numero1 * 1024;
        echo "{$numero1} * 1024 = {$resultado}KB";
    }elseif($destino == 'gb'){
        $resultado=$numero1/1073741824;
        echo "{$numero1} / 1073741824  = {$resultado}GB";
    }elseif($destino == 'tb'){
        $resultado=$numero1/1099511627776;
        echo "{$numero1} / 1099511627776 = {$resultado}TB";
    }elseif($destino== 'pb'){
        $resultado=$numero1/1125899906842624;
        echo "{$numero1} / 1125899906842624 = {$resultado}PB";
    }elseif($destino == 'eb'){
        $resultado=$numero/1152921504606846976;
        echo "{$numero1} / 1152921504606846976 = {$resultado}EB";
    }elseif($destino == 'zb'){
        $resultado=$numero1 /1180591620717411303424;
        echo "{$numero1} /  1180591620717411303424 = {$resultado}ZB";
    }elseif($destino == 'yb'){
        $resultado=$numero1 / 1208925819614629174706176;
        echo "{$numero1} /  1208925819614629174706176 = {$resultado}YB";
    }
}
function gigabyte ($numero1, $destino, $origen){
    if($destino == 'kb'){
        $resultado=$numero1 * 1024;
        echo "{$numero1} * 1024  = {$resultado}KB";
    }elseif($destino  == 'mb'){
        $resultado=$numero1*1048576;
        echo "{$numero1} * 1048576  = {$resultado}MB";
    }elseif($destino  == 'tb'){
        $resultado=$numero1/1099511627776;
        echo "{$numero1} / 1099511627776 = {$resultado}TB";
    }elseif($destino == 'pb'){
        $resultado=$numero1/1125899906842624;
        echo "{$numero1} / 1125899906842624 = {$resultado}PB";
    }elseif($destino  == 'eb'){
        $resultado=$numero/1152921504606846976;
        echo "{$numero1} / 1152921504606846976 = {$resultado}EB";
    }elseif($destino  == 'zb'){
        $resultado=$numero1 /1180591620717411303424;
        echo "{$numero1} /  1180591620717411303424 = {$resultado}ZB";
    }elseif($destino  == 'yb'){
        $resultado=$numero1 / 1208925819614629174706176;
        echo "{$numero1} /  1208925819614629174706176 = {$resultado}YB";
    }
}
function terabyte ($numero1, $destino, $origen){
    if($destino  == 'kb'){
        $resultado=$numero1 * 1024;
        echo "{$numero1} * 1024  = {$resultado}KB";
    }elseif($destino  == 'mb'){
        $resultado=$numero1*1048576;
        echo "{$numero1} * 1048576  = {$resultado}MB";
    }elseif($destino  == 'gb'){
        $resultado=$numero1*1073741824;
        echo "{$numero1} * 1073741824 = {$resultado}GB";
    }elseif($destino == 'pb'){
        $resultado=$numero1/1125899906842624;
        echo "{$numero1} / 1125899906842624 = {$resultado}PB";
    }elseif($destino  == 'eb'){
        $resultado=$numero/1152921504606846976;
        echo "{$numero1} / 1152921504606846976 = {$resultado}EB";
    }elseif($destino  == 'zb'){
        $resultado=$numero1 /1180591620717411303424;
        echo "{$numero1} /  1180591620717411303424 = {$resultado}ZB";
    }elseif($destino  == 'yb'){
        $resultado=$numero1 / 1208925819614629174706176;
        echo "{$numero1} /  1208925819614629174706176 = {$resultado}YB";
    }
}
function petabyte($numero1, $destino, $origen){
    if($destino  == 'kb'){
        $resultado=$numero1 * 1024;
        echo "{$numero1} * 1024  = {$resultado}KB";
    }elseif($destino  == 'mb'){
        $resultado=$numero1*1048576;
        echo "{$numero1} * 1048576  = {$resultado}MB";
    }elseif($destino  == 'gb'){
        $resultado=$numero1*1073741824;
        echo "{$numero1} * 1073741824 = {$resultado}GB";
    }elseif($destino == 'tb'){
        $resultado=$numero1*1099511627776;
        echo "{$numero1} * 1099511627776 = {$resultado}TB";
    }elseif($destino  == 'eb'){
        $resultado=$numero/1152921504606846976;
        echo "{$numero1} / 1152921504606846976 = {$resultado}EB";
    }elseif($destino  == 'zb'){
        $resultado=$numero1 /1180591620717411303424;
        echo "{$numero1} /  1180591620717411303424 = {$resultado}ZB";
    }elseif($destino  == 'yb'){
        $resultado=$numero1 / 1208925819614629174706176;
        echo "{$numero1} /  1208925819614629174706176 = {$resultado}YB";
    }
}
function exabyte($numero1, $destino, $origen){
    if($destino  == 'kb'){
        $resultado=$numero1 * 1024;
        echo "{$numero1} * 1024  = {$resultado}KB";
    }elseif($destino  == 'mb'){
        $resultado=$numero1*1048576;
        echo "{$numero1} * 1048576  = {$resultado}MB";
    }elseif($destino  == 'gb'){
        $resultado=$numero1*1073741824;
        echo "{$numero1} * 1073741824 = {$resultado}GB";
    }elseif($destino == 'tb'){
        $resultado=$numero1*1099511627776;
        echo "{$numero1} * 1099511627776 = {$resultado}TB";
    }elseif($destino  == 'pb'){
        $resultado=$numero*1125899906842624;
        echo "{$numero1} * 1125899906842624 = {$resultado}PB";
    }elseif($destino  == 'zb'){
        $resultado=$numero1 /1180591620717411303424;
        echo "{$numero1} /  1180591620717411303424 = {$resultado}ZB";
    }elseif($destino  == 'yb'){
        $resultado=$numero1 / 1208925819614629174706176;
        echo "{$numero1} /  1208925819614629174706176 = {$resultado}YB";
    }
    
}
function zettabyte($numero1,$destino, $origen){
    if($destino  == 'kb'){
        $resultado=$numero1 * 1024;
        echo "{$numero1} * 1024  = {$resultado}KB";
    }elseif($destino  == 'mb'){
        $resultado=$numero1*1048576;
        echo "{$numero1} * 1048576  = {$resultado}MB";
    }elseif($destino  == 'gb'){
        $resultado=$numero1*1073741824;
        echo "{$numero1} * 1073741824 = {$resultado}GB";
    }elseif($destino == 'tb'){
        $resultado=$numero1*1099511627776;
        echo "{$numero1} * 1099511627776 = {$resultado}TB";
    }elseif($destino  == 'pb'){
        $resultado=$numero*1125899906842624;
        echo "{$numero1} * 1125899906842624 = {$resultado}PB";
    }elseif($destino  == 'eb'){
        $resultado=$numero1 *1152921504606846976;
        echo "{$numero1} *  1152921504606846976 = {$resultado}EB";
    }elseif($destino  == 'yb'){
        $resultado=$numero1 / 1208925819614629174706176;
        echo "{$numero1} /  1208925819614629174706176 = {$resultado}YB";
    }
}
function yottabyte($numero1,$destino, $origen){
    if($destino  == 'kb'){
        $resultado=$numero1 * 1024;
        echo "{$numero1} * 1024  = {$resultado}KB";
    }elseif($destino  == 'mb'){
        $resultado=$numero1*1048576;
        echo "{$numero1} * 1048576  = {$resultado}MB";
    }elseif($destino  == 'gb'){
        $resultado=$numero1*1073741824;
        echo "{$numero1} * 1073741824 = {$resultado}GB";
    }elseif($destino == 'tb'){
        $resultado=$numero1*1099511627776;
        echo "{$numero1} * 1099511627776 = {$resultado}TB";
    }elseif($destino  == 'pb'){
        $resultado=$numero*1125899906842624;
        echo "{$numero1} * 1125899906842624 = {$resultado}PB";
    }elseif($destino == 'eb'){
        $resultado=$numero1 *1152921504606846976;
        echo "{$numero1} *  1152921504606846976 = {$resultado}EB";
    }elseif($destino  == 'zb'){
        $resultado=$numero1 * 1180591620717411303424;
        echo "{$numero1} *  1180591620717411303424 = {$resultado}zb";
    }
}
?>