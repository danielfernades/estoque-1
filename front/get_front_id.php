<?php
require_once "config_front.php";
$q = strtolower($_GET["q"]);
if (!$q) return;

$sql = "select DISTINCT idprodutos as idprodutos from produtos where idprodutos LIKE '%$q%'";
$rsd = mysql_query($sql);
while($rs = mysql_fetch_array($rsd)) {
	$cname = $rs['idprodutos'];
	echo "$cname\n";
}