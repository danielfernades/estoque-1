<?php

include('config.php');

$per_page = 9; 

if($_GET)
{
$page=$_GET['page'];
}



//get table contents
$start = ($page-1)*$per_page;
$sql = "select * from produtos order by id_produto_tipo limit $start,$per_page";
$rsd = mysql_query($sql);
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
<!-- Inicio Componentes do layout da tabela e Pagina-->
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
    <!-- FIM Componentes do layout da tabela e Pagina-->





	<!--<table width="800px">
		
		
		<tr><td style="color:#B2b2b2; padding-left:4px" width="30px"></td><td></td></tr>
		
	</table> -->


</head>
<body>


<div class="row">
	<div class="grid_12">
		<div id="stylized-form">
		<a name="forms-tables"></a>
<table border="1">
  <tr>
    <th colspan="4" class="first">Listagem Geral</th>
  </tr>
  <tr>
    <th>Produto</th>
    <th>Descrição</th>
    <th>Quantidade</th>
    <th>nf</th>
  </tr>
  <?php
		//Print the contents
		
		while($row = mysql_fetch_array($rsd))
		{
			$notafiscal = $row['produto_nf'];
			$quantidade = $row['produto_quantidade'];
			$id=$row['produto_marca'];
$msg=$row['produto_tara'];

		?>
   <tr>
    <th><?php echo $id; ?></th>
    <th><?php echo $msg; ?></td>
    <th><?php echo $quantidade; ?></th>
    <th><?php echo $notafiscal; ?></th>
  </tr>
 <?php
		} //while
		?> </table>
        </div>
        </div>
        </div>
        
</body>
</html>


















