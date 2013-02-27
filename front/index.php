<DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Controle de Estoque !</title>
<!-- inicio do arquivo dos controles de layout -->

<meta charset="utf-8" />

<style type="text/css">
#bg {
	position:fixed; 
	top:-50%; 
	left:-50%; 
	width:200%; 
	height:200%;
}
#bg img {
	position:absolute; 
	top:0; 
	left:0; 
	right:0; 
	bottom:0; 
	margin:auto; 
	min-width:50%;
	min-height:50%;
}
#transparente {
	background-color: transparent;
	opacity: 1.0;

	border: 1px solid #000000;
}
	
</style>
<link rel="stylesheet" href="../amazium/includes/base.css">
<link rel="stylesheet" href="../amazium/includes/amazium.css">
<link rel="stylesheet" href="../amazium/includes/layout.css">
<!-- Favicons -->
	<link rel="shortcut icon" href="../amazium/images/favicon.ico">
	<link rel="apple-touch-icon-precomposed" href="../amazium/images/apple-touch-icon.png">
	<link rel="apple-touch-icon-precomposed" sizes="72x72" href="../amazium/images/apple-touch-icon-72x72.png" />
	<link rel="apple-touch-icon-precomposed" sizes="114x114" href="../amazium/images/apple-touch-icon-114x114.png" />
	
	<!-- To Top scripts -->
	<script src="../amazium/includes/smoothscroll.js"type="text/javascript" ></script>
	<script src="../amazium/includes/jquery-1.3.js" type="text/javascript"></script>
	<script src="../amazium/includes/jquery.easing.1.3.js" type="text/javascript"></script>
	<script src="../amazium/includes/jquery.ui.totop.js" type="text/javascript"></script>
	<script type="text/javascript">
		$(document).ready(function() {
			$().UItoTop({ easingType: 'easeOutQuart' });
		});
	</script>

<!-- Fim de controles de layout -->
<!-- Arquivos de controle de campo de saida de produto-->
<script type="text/javascript" src="../js/jquery.js"></script>
<script type='text/javascript' src='../js/jquery.autocomplete.js'></script>
<link rel="stylesheet" type="text/css" href="../css/jquery.autocomplete.css" />
<!-- Fim do control de campo de saida de produto -->
<!-- Campo de Busca dos produtos -->
<style type="text/css">
.resizedTextbox {width: 250px;  height: 40px; padding: 1px;padding:10px;border:1px solid blue; border-radius: 10px; font-size: 26px;}
.resizedQuantidade {width: 100px;  height: 40px; padding: 1px;padding:10px;border:1px solid blue; border-radius: 10px; font-size: 26px;}
</style>
<!-- Fim do estilo de campo de Busca -->
<!-- Script principal de Busca dinamicao do campo saida de produto -->
<!-- Script para executar o form e recarregar mesma pagina -->
<script type="text/javascript" src="js/script.js"></script>

<!-- fim script ajax carregar mesma página -->
<script type="text/javascript">
$().ready(function() {
	$("#course").autocomplete("get_front_a.php", {
		width: 260,
		matchContains: true,
		//mustMatch: true,
		//minChars: 0,
		//multiple: true,
		//highlight: false,
		//multipleSeparator: ",",
		selectFirst: false
	});
});
$().ready(function() {
	$("#tara").autocomplete("get_front.php", {
		width: 260,
		matchContains: true,
		//mustMatch: true,
		//minChars: 0,
		//multiple: true,
		//highlight: false,
		//multipleSeparator: ",",
		selectFirst: false
	});
});
</script>

<!-- FIM do script principal de busca dinamica -->

</head>
<body>
	<div id="transparente">
<div id="bg">
<img src="images/copocerv.jpg" alt="">
</div>



<div id="teste" style="width:100%;top:0px;left:0px;position:absolute;">
<div class="row" ><!-- INICIO DA LINHA 1 -->
	<div class="grid_12">
		<span class="example">
			<div class="wrapper-block" >
    			<img src="images/skol_simbolo.jpg" height="42" width="42">
    			<img src="images/antartica.jpg" height="42" width="42">
    			<img src="images/bavaria.jpg" height="42" width="42">
    			<img src="images/bohemia.jpg" height="42" width="42">
    			<img src="images/brahma2.jpg" height="42" width="42">
    			<img src="images/caracu.jpg" height="42" width="42">
    			<img src="images/itaipava.jpg" height="42" width="42">
    			<img src="images/kaiser.jpg" height="42" width="42">
    			<img src="images/kronenbier.jpg" height="42" width="42">
    			<img src="images/liber.jpg" height="42" width="42">
    			<img src="images/schin.jpg" height="42" width="42">
    			<img src="images/serra.jpg" height="42" width="42">
    			<img src="images/6851682_r1.jpg" height="42" width="42">
    		
    		</div>
  		</span> 
  	</div>
</div> <!-- FIM DA LINHA NUMERO 1 -->


<div class="row"> <!--Linha NUMERO 2 -->
	<div class="grid_10"><!-- Inicio da Grid 10 -->
		<span class="example">
					<?php $data=date("d/m/Y H:i:s"); echo "$data";  ?><br/>
					Sistema: Versão<br/>
					Data 05/05/2012<br>
					Usuario: Fulano de Tal<br/><br><br/><br/>
		</span>
	</div><!-- FIM DA GRID 10 -->

		<div class="grid_2">
			<span class="example">
				<img src="images/logo.jpg" height="100" width="100">
			</span>
		</div><!--FIM DA GRID 2 -->

</div><!--FIM DA LINHA 2 -->



<!-- INICIO DA LINHA 3 -->
<div class="row">
	<div class="grid_12">
		<span class="example" >

		<div id="content">
	<form autocomplete="off" name="atualiza" method="POST"  action="atualiza.php"  >
	
			
			<input tye="text" name="course" id="course"  class="resizedTextbox" /><!-- propriedade no corpo/Nesta Página mesmo -->
		 <input type="text" name="tara" id="tara" class="resizedTextbox" /> <!-- propriedade no corpo/Nesta Página mesmo -->
		 <input type="text"   width="1px"   name="quantidade" id="quantidade" class="resizedQuantidade" /> <!-- propriedade no corpo/Nesta Página mesmo -->
		<div id="response"></div>
		<input type="submit" value="Submit"  name="course" id="sendform" />
	</form>
</div>
		</span>	


	</div>
</div>

<!-- FIM DA LINHA 3 -- >

</div>

</div>
	</body>
</html>