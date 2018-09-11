
<?php
$matriz1 = array(1,3,4,1);
$matriz2 = array(3,1,2,3);
$resultados = array();
foreach ($matriz1 as $key => $value) {
		$a =$value;
		$b =$matriz2[$key];
		$resultados[$key] = $a*$b;
		unset($a,$b);
	}	



