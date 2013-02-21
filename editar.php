<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sem título</title>
</head>

<body>
<?php include 'inc_edita.php' ;?><!-- ARQUIVO DE PAGINACAO -->
<?php include 'conexao.php'; ?>
<?php $db_selected = mysql_select_db('estoque', $link);
if (!$db_selected) {
    die ('Can\'t use foo : ' . mysql_error());
}
$sql = "SELECT * FROM produtos";
$result = mysql_query($sql);?>

<form enctype="multipart/form-data"  method="POST" action="" />
<table width="282" border="1">
  <tr>
    <td colspan="6">&nbsp;</td>
  </tr>
  <tr>
    <td width="48">produto</td>
    <td width="58">descricao</td>
    <td width="66">quantidade</td>
    <td width="27">nf</td>
    <td width="49">&nbsp;</td>
     <td width="49">&nbsp;</td>
  </tr>
  <tr><?php
  //while($mostrar = mysql_fetch_array($link))
	while($mostrar = mysql_fetch_array($query))
{ 
$identificacao = $mostrar['idprodutos']; ?>
    <td><?php echo $mostrar['produto_marca']."<br/>"; ?></td>
    <td><?php echo $mostrar['produto_tara']."<br/>"; ?></td>
    <td><?php echo $mostrar['produto_quantidade']."<br/>"; ?></td>
    <td><?php echo $mostrar['idprodutos']?></td> 
    <td><a href="get_produto.php?id=<?php echo $mostrar['idprodutos']; ?>">Editar</a></td>
    <td><a href="getr_produto.php?id=<?php echo $mostrar['idprodutos']; ?>">Remover</a></td>
  </tr><?php }  ?>
</table>
<!-- INICIA Conteúdo do script de paginação  -->
<?php 

for($i=1; $i <= $total_paginas; $i++)
{
    if($pagina == $i)
    {
        echo " ".$i." "; // Escreve somente o número da página sem ação alguma
    }
     else
     {
        echo '<a href="editar.php?pag='.$i.'"> '.$i.'</a>'; // Escreve o número e o link da página

     }
}


?>
<!-- FIM Conteúdo do script de paginação  -->
</form>







</body>
</html>