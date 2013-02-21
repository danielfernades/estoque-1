<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sem título</title>
<script type="text/javascript">
function checkAll(bx) {
  var cbs = document.getElementsByTagName('input');
  for(var i=0; i < cbs.length; i++) {
    if(cbs[i].type == 'checkbox') {
      cbs[i].checked = bx.checked;
    }
  }
}
</script>
</head>

<body>

<?php include '../conexao.php' ; ?>
<?php $db_selected = mysql_select_db('estoque', $link);
if (!$db_selected) {
    die ('Can\'t use foo : ' . mysql_error());
}




	

?>

<table width="394" border="1">
  <tr>
    <th colspan="5">&nbsp;</th>
  </tr>
             <?php 
$sql = "SELECT * FROM produtos";
$result = mysql_query($sql);

if (!$result) {
    echo "Não foi possível executar a consulta ($sql) no banco de dados: " . mysql_error();
    exit;
}

if (mysql_num_rows($result) == 0) {
    echo "Não foram encontradas linhas, nada para mostrar, assim eu estou saindo";
    exit;
}
  
?> 
  <tr>
  
    <th width="49"><input type="checkbox" onclick="checkAll(this)"></th>
    <th width="70">Produto</th>
    <th width="61">Descrição</th>
    <th width="74">Quantidade</th>
    <th width="106">NF</th>
  </tr>
 <?php while ($row = mysql_fetch_assoc($result)) { ?>
  <tr>
  
    <th><input type="checkbox" name="checkbox" value="<?php echo $row["idprodutos"];?>"></th>
    <th><?php echo $row["produto_marca"];?></th>
    <th><?php echo $row["produto_tara"];?></th>
    <th><?php echo $row["produto_quantidade"];?></th>
    <th>&nbsp;</th>
  </tr><?php } ?>
</table>
<?php 
///////////PAGINAÇÃo\\\\\\\\\\\\\\\\\\\\\\\\

?>
</body>
</html>