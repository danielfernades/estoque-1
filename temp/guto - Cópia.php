﻿<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sem título</title>
</head>

<body>
<?php
$conexao = mysql_connect("localhost","root","123"); // Faz a conexão com o servidor local
$banco = mysql_select_db("estoque", $conexao); // Seleciona o banco de dados 'loja'

$limite = 5; // Define o limite de registros a serem exibidos com o valor cinco
// Captura os dados da variável 'pag' vindo da url, onde contém o número da página atual
$pagina = @$_GET['pag'];

/* Se a variável $pagina não conter nenhum valor,
então por padrão ela será posta com o valor 1 (primeira página) */
if(!$pagina)
{
    $pagina = 3;
}
/* Operação matemática que resulta no registro inicial
a ser selecionado no banco de dados baseado na página atual */
$inicio = ($pagina * $limite) - $limite;
$query = mysql_query("SELECT *  FROM produtos LIMIT $inicio,$limite");
//$rsd = mysql_query($sql); ?>
<form enctype="multipart/form-data"  method="POST" action="edita_produto.php?acao=editar" />
<table width="282" border="1">
  <tr>
    <td colspan="5">&nbsp;</td>
  </tr>
  <tr>
    <td width="48">produto</td>
    <td width="58">descricao</td>
    <td width="66">quantidade</td>
    <td width="27">nf</td>
    <td width="49">&nbsp;</td>
  </tr>
  <tr><?php
  while($mostrar = mysql_fetch_array($query))
{ 

$identificacao = $mostrar['idprodutos'];


?>


    <td><?php echo $mostrar['produto_marca']."<br/>"; ?></td>
    <td><?php echo $mostrar['produto_tara']."<br/>"; ?></td>
    <td><?php echo $mostrar['produto_quantidade']."<br/>"; ?></td>
    <td><?php echo "$identificacao" ;?></td> 
    <td><input type="submit" name="Editar" id="Editar" value="Editar" /></td>
  </tr><?php } ?><input type="hidden" name="identificao" value="<?php echo "$identificacao"; ?>" />
</table>
</form>
<?php
$consulta = mysql_query("SELECT idprodutos FROM produtos"); // Seleciona o campo id da nossa tabela produtos

// Captura o número do total de registros no nosso banco a partir da nossa consulta
$total_registros = mysql_num_rows($consulta);

?>

<?php
/* Define o total de páginas a serem mostradas baseada
na divisão do total de registros pelo limite de registros a serem mostrados */
$total_paginas = Ceil($total_registros / $limite);

for($i=1; $i <= $total_paginas; $i++)
{
    if($pagina == $i)
    {
        echo " ".$i." "; // Escreve somente o número da página sem ação alguma
    }
     else
     {
        echo '<a href="guto.php?pag='.$i.'"> '.$i.'</a>'; // Escreve o número e o link da página

     }
}
?>








</body>
</html>