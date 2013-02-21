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


<script language="JavaScript" type="text/JavaScript">
<!--
function sair(){
	 conf = confirm("Cadastrar um novo item?");
	if (conf==true)
	{
		window.location.href="cadastro.php";
	}
	else
	{
		return false;
	}
}
//-->
</script>

<title>Documento sem título</title>

</head>

<body  onload="sair();">
<?php
include ('conexao.php') ;
$acao=$_GET['acao'];
switch ($acao){ 
case "cadastrar" :
$marca=$_POST['marca'];
$tara=$_POST['tara'];
$quantidade=$_POST['quantidade'];
$nf=$_POST['nf'];
$tipo = $_POST['tipo'];
//echo $tara;
//echo "<br/> $tipo" ;


break;




}




 $db_selected = mysql_select_db('estoque', $link);
if (!$db_selected) {
    die ('Can\'t use foo : ' . mysql_error());
}
$sql = "INSERT INTO produtos (id_produto_tipo, produto_marca, produto_tara, produto_quantidade, produto_nf) VALUES ( '$tipo','$marca','$tara','$quantidade','$nf') ";

if (!mysql_query($sql,$link))
  {
  die('Error: ' . mysql_error());
  }
?>
<div class="row">
	<div class="grid_12">
    <hr />
		<a name="forms-tables"></a>
        <div id="stylized-form">
Dados inseridos com sucesso

</div>
<div class="wrapper-block">
<p><a href="cadastro.php" class="btn">Voltar</a></p>

</div>



</div>
</div>


<?php
mysql_close($link);
?>



</body>
</html>
<?php
/*
$con = mysql_connect("localhost","peter","abc123");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("my_db", $con);

$sql="INSERT INTO Persons (FirstName, LastName, Age)
VALUES
('$_POST[firstname]','$_POST[lastname]','$_POST[age]')";

if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }
echo "1 record added";

mysql_close($con); */
?>