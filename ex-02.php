<?php 

//$ts = strtotime("2001-09-11");
//$ts = strtotime("now"); Hoje
//$ts = strtotime("+1 day"); Amanhã
$ts = strtotime("+1 week");
echo date("l, d/m/Y",$ts);
 ?>