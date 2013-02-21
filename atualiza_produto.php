<?php
//include ('temp/ooo.php');
ini_set( 'display_errors', 1 );
error_reporting( E_ALL | E_STRICT );
$link = mysql_connect('localhost', 'root', '123');
if (!$link) {
     die('Could not connect: ' . mysql_error());
}
//mysql_select_db('estoque');

		$id=$_POST['idproduto'];
		$marca=$_POST['marca'];
		$tara=$_POST['tara'];
		$quantidade=$_POST['quantidade'];
		


$sql = "UPDATE produtos SET produto_quantidade = $quantidade  WHERE idprodutos = $id";
//echo $sql;

mysql_select_db('estoque');
$retval = mysql_query($sql, $link);
if (!$retval) {

	die ('Nada inserido na base: ' .mysql_error() );
} ?>
<SCRIPT LANGUAGE='JavaScript' TYPE='text/javascript'>
 alert ('Informações atualizadas com Sucesso')
</SCRIPT>

 <a href="./editar"  />Voltar</a>
<?php

mysql_close($link);


?>