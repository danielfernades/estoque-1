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

<script language="JavaScript">  
function checkAll(bx) {
  var cbs = document.getElementsByTagName('input');
  for(var i=0; i < cbs.length; i++) {
    if(cbs[i].type == 'checkbox') {
      cbs[i].checked = bx.checked;
    }
  }
}
</script>



	<!--<table width="800px">
		
		
		<tr><td style="color:#B2b2b2; padding-left:4px" width="30px"></td><td></td></tr>
		
	</table> -->


</head>
<body>


<div class="row">
	<div class="grid_12">
		<div id="stylized-form">
		<a name="forms-tables"></a>
<form  name="myform" action="" method="post" OnSubmit="return onDelete();" />
<table border="1">

  <tr>
    <th colspan="5" class="first">Listagem Geral</th>
  </tr>
  <tr>
  <th><input type="checkbox" onclick="checkAll(this)"></th>
    <th>Produto</th>
    <th>Descrição</th>
    <th>Quantidade</th>
    <th>nf</th>
  </tr>
  <?php
		//Print the contents
		
		while($row = mysql_fetch_array($rsd))
		{
			$idprodutos = $row['idprodutos'];
			$notafiscal = $row['produto_nf'];
			$quantidade = $row['produto_quantidade'];
			$id=$row['produto_marca'];
$msg=$row['produto_tara'];

		?>
   <tr>
   <th><div class="wrapper-block"><input type="checkbox" name="chkDel[]" id="checkbox[]" value="<?php echo $idprodutos; ?>" /></div></th>
    <th><?php echo $id; ?></th>
    <th><?php echo $msg; ?></td>
    <th><?php echo $quantidade; ?></th>
    <th><?php echo $notafiscal; ?></th>
  </tr>
 <?php
		} //while
		?> </table>
        
        
        </form>
<?php /*
		if(isset($_POST['submit'])) {
			for ($i=0;$i<$cont;$i++){
				$del_id = $checkbox[$i];
				$sql = "DELETE FROM produtos WHERE $idprodutos ='$del_id'";
				$rsd = mysql_query($sql);
				}
			if ($rsd){
				echo "<meta http-equiv=\"refresh\" content=\"0;URL=cobaia_data.php\">";
				}
			
			}
		
		*/
		if(isset($_POST['delete'])){
			$delete_id = $_POST['chkDel'];
			$id = count($delete_id );
			if (count($id) > 0){
				foreach ($delete_id as $id_d){
				$sql = "DELETE FROM produtos WHERE $idprodutos ='$delete_id'";	
					$delete = mysql_query($sql);
					}
				}
				
				if ($delete){
					echo $id." Records deleted Successfully.";
					}
				
				
			}
		?>
        </div>
        </div>
        </div>
        
</body>
</html>


















