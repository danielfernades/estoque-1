<?php
require_once "config_front.php";
$q = strtolower($_GET["q"]);
if (!$q) return;

$sql = "select DISTINCT produto_tara as produto_tara from produtos where produto_tara LIKE '%$q%'";
$rsd = mysql_query($sql);
while($rs = mysql_fetch_array($rsd)) {
	$cname = $rs['produto_tara'];
	echo "$cname\n";
}










?>