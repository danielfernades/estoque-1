<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sem título</title>
</head>

<body>
<?php 

$id=$_GET['id'];echo "$id";
include ('conexao.php');
 $db_selected = mysql_select_db('estoque', $link);
if (!$db_selected) {
    die ('Can\'t use foo : ' . mysql_error());
}

$result= mysql_query("SELECT * from produtos WHERE idprodutos = $id");

?>
<form enctype="multipart/form-data"  method="POST" action="atualiza_produto.php" />
<table width="200" border="1">
  <tr>
    <td colspan="3">&nbsp;</td>
  </tr>
  <tr>
    <td>Produto</td>
    <td>Descricaoo</td>
    <td>Quantidade</td>
  </tr>
  <tr><?php 
  while($mostrar = mysql_fetch_array($result))
{ 
$idproduto = $mostrar['idprodutos'];
$marca = $mostrar['produto_marca'];
$tara = $mostrar['produto_tara'] ;
$quantidade = $mostrar['produto_quantidade']

?>
<input type="hidden" name="idproduto" value="<?php echo "$idproduto" ; ?>"/>
    <td><input type="text" name="marca" value="<?php echo "$marca"; ?>" /></td>
    <td><input type="text" name="tara" value="<?php echo "$tara"; ?>" /></td>
    <td><input type="text" name="quantidade" value="<?php echo "$quantidade"; ?>" /></td>
<?php } ?>  </tr> <!-- 
<input type="hidden" name="idproduto" value="<?php echo "$idproduto" ; ?>"/>
<input type="hidden" name="marca" value="<?php echo "$marca" ; ?>"/>
<input type="hidden" name="tara" value="<?php echo "$tara" ; ?>"/>
<input type="hidden" name="quantidade" value="<?php echo "$quantidade" ; ?>"/>
-->
</table>
<input type="submit" value="Atualizar Produto"/>
</form>



</body>
</html>