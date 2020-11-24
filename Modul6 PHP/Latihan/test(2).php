<?php
/** 
passing parameter by reference
**/
funtion increment(&$value){
	$value++;
}
$x = 0;
increment($x);
echo $X;
?>
