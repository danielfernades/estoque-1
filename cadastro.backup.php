<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sem título</title>
<script language="javascript" type="text/javascript" src="form/niceforms.js"></script>
<link rel="stylesheet" type="text/css" media="all" href="form/niceforms-default.css" />
</head>

<body>
<body><div id="container">
<?php include 'conexao.php' ; ?>
<?php $db_selected = mysql_select_db('estoque', $link);
if (!$db_selected) {
    die ('Can\'t use foo : ' . mysql_error());
}
?>
<form enctype="multipart/form-data"  method="POST" action="insere_cadastro.php?acao=cadastrar" method="post" class="niceform">
	<fieldset>
    	<legend>Cadastro de Produtos</legend>
        <p>Selecione o tipo de produto para Cadastrar:</p> <br/><br/>
        <dt><label for="tipo">Produto</label></dt>
            <dd>
            
            <?php 
$sql = "SELECT idproduto_tipo, produto_tipo_desc FROM produto_tipo";
$result = mysql_query($sql);

if (!$result) {
    echo "Não foi possível executar a consulta ($sql) no banco de dados: " . mysql_error();
    exit;
}

if (mysql_num_rows($result) == 0) {
    echo "Não foram encontradas linhas, nada para mostrar, assim eu estou saindo";
    exit;
}
/*
while ($row = mysql_fetch_assoc($result)) {
    echo $row["idproduto_tipo"];
    echo $row["produto_tipo_desc"];
    echo $row["produto_tipo_tara"];
}

mysql_free_result($result);
*/   

?>	
	




            
            	
                <select size="1" name="cadastro" id="cadastro">
                 <?php while ($row = mysql_fetch_assoc($result)) { ?>
                    <option value=" <?php echo $row["idproduto_tipo"];?>"  <?php if ($row["idproduto_tipo"]== $result['cadastro']) ?>  selected="selected" />  <?php echo $row["produto_tipo_desc"]; ?> </option> <?php } ?>
					
  
            	 </select> 
          
            </dd>
        </dl>
       
    
    </fieldset>
<fieldset class="action">
    	<input type="submit" name="submit" id="submit" value="Cadastrar" />
    </fieldset>
</form> 
 

<?php
mysql_free_result($result);

?>

</body>
</html>