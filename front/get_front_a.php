<?php
require_once "config_front.php";
$q = strtolower($_GET["q"]);
if (!$q) return;

$sql = "select DISTINCT produto_marca as produto_marca from produtos where produto_marca LIKE '%$q%'";
$rsd = mysql_query($sql);
while($rs = mysql_fetch_array($rsd)) {
	$cname = $rs['produto_marca'];
	echo "$cname\n";
}










?>