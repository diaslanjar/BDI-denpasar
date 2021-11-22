<?php
$ar = 1;
$sar = 2;
for ($a = 1; $a <= 5; $a++){
	for ($b = 1; $b <= 5 - $a; $b++){
		echo ($ar);
	}
	for ($c = 1; $c <= $a; $c++){
		echo ($sar);
	}
	echo "<br/>";
}
?>
