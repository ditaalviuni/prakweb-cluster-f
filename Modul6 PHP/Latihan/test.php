<?php
/**
deafault parameter
**/
funtion bar($color="black"){
	echo '<font color=" '.$color.' ">This is some text!</font><br>';
}

bar();
bar('red');
bar('green');
bar('blue');
?>