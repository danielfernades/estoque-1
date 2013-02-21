<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sem título</title>

	<script type="text/javascript">
		var browser			= navigator.userAgent;
		var browserRegex	= /(Android|BlackBerry|IEMobile|Nokia|iP(ad|hone|od)|Opera M(obi|ini))/;
		var isMobile		= false;
		if(browser.match(browserRegex)) {
			isMobile			= true;
			addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
			function hideURLbar(){
				window.scrollTo(0,1);
			}
		}
	</script>
	
	<!-- CSS -->
	<link rel="stylesheet" href="amazium/includes/base.css">
	<link rel="stylesheet" href="amazium/includes/amazium.css">
	<link rel="stylesheet" href="amazium/includes/layout.css">
	
	<!-- Favicons -->
	<link rel="shortcut icon" href="amazium/images/favicon.ico">
	<link rel="apple-touch-icon-precomposed" href="amazium/images/apple-touch-icon.png">
	<link rel="apple-touch-icon-precomposed" sizes="72x72" href="amazium/images/apple-touch-icon-72x72.png" />
	<link rel="apple-touch-icon-precomposed" sizes="114x114" href="amazium/images/apple-touch-icon-114x114.png" />
	
	<!-- To Top scripts -->
	<script src="amazium/includes/smoothscroll.js"type="text/javascript" ></script>
	<script src="amazium/includes/jquery-1.3.js" type="text/javascript"></script>
	<script src="amazium/includes/jquery.easing.1.3.js" type="text/javascript"></script>
	<script src="amazium/includes/jquery.ui.totop.js" type="text/javascript"></script>
	<script type="text/javascript">
		$(document).ready(function() {
			$().UItoTop({ easingType: 'easeOutQuart' });
		});
	</script>

</head>

<body>

<?php include 'conexao.php' ; ?>
<?php $db_selected = mysql_select_db('estoque', $link);
if (!$db_selected) {
    die ('Can\'t use foo : ' . mysql_error());
}
?>


	<div class="row">
	<div class="grid_12">
    <div id="stylized-form">
		<hr />
<div id="stylized-form">
<form enctype="multipart/form-data"  method="POST" action="insere_cadastro.php?acao=cadastrar" method="post">
  
    	<h1>Cadastro de Produtos</h1>
        
    <div class="wrapper-block">    
    <label>Selecione o tipo de produto para Cadastrar:</label>    <br/>
    <div/>    
            
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
	




            
            	<div class="wrapper-block">
                <select size="1" name="cadastro" id="dropdown">
                 <?php while ($row = mysql_fetch_assoc($result)) { ?>
                    <option value=" <?php echo $row["idproduto_tipo"];?>"  <?php if ($row["idproduto_tipo"]== $result['cadastro']) ?>  selected="selected" />  <?php echo $row["produto_tipo_desc"]; ?> </option> <?php } ?>
					
  
            	 </select> 
       			</div>
    
          
    	
   
    
    
    
    
    
     <div class="wrapper-block">
    <input type="submit" name="submit" id="submit" value="Cadastrar" class="submit btn-form" />
    </div>
    </div>
 </div></div></div></div>
 
 </form>
<span class="example"><a href="index.php" class="btn">Voltar</a> </span>
<?php
mysql_free_result($result);

?>

</body>
</html>