<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

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
	<script language="JavaScript" type="text/JavaScript">
		$(document).ready(function() {
			$().UItoTop({ easingType: 'easeOutQuart' });
		});
	</script>
    
    
    
    
    

<title>Documento sem título</title>

</head>

<body>
<?php 
$acao=$_GET['acao'];
switch ($acao){ 
case "cadastrar" :
$nome=$_POST['cadastro'];


break;

}


?>
<!-- include ('bebidas_formulario.php'); -->
<div class="row">
	<div class="grid_12">
    <hr />
		<a name="forms-tables"></a>
        <div id="stylized-form">
<form action="insere_produto.php?acao=cadastrar" method="post" >
	<input type="hidden" name="tipo" value="<?php echo $nome ;?>" />
    
        	<h2>Descrição do Produto</h2>
            <div class="wrapper-block">
        	<label for="marca">Marca:</label>
            <input type="text" name="marca" id="marca" size="32" maxlength="128" /><br/>
           </div>
           <div class="wrapper-block">
           <label for="tara">Tamanho:</label>
            <input type="text" name="tara" id="tara" size="20" maxlength="128" />
           </div>
           <div class="wrapper-block">
            <label for="quantidade">Quantidade:</label>
            <input type="text" name="quantidade" id="quantidade" size="8" maxlength="128" /> 
            </div>
            <div class="wrapper-block">
            <label for="nf">Nota Fiscal:</label>
            <input type="text" name="nf" id="nf" size="11" maxlength="128" />
       </div> 
            
     
<div class="wrapper-block">
    	<input type="submit" name="submit"  value="Cadastrar" class="submit btn-form" />
        </div>
   </div>
</div>
</div>

</form>
<span class="example"><a href="index.php" class="btn">Voltar</a> </span>




</body>
</html>