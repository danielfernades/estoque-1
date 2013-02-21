
<?php
include('config.php');
$per_page = 9; 

//getting number of rows and calculating no of pages
$sql = "select * from produtos";
$rsd = mysql_query($sql);
$count = mysql_num_rows($rsd);
$pages = ceil($count/$per_page)
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<title>Listagem Geral</title>
  
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
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
    
    
    
	<script type="text/javascript" src="jquery.min.js"></script>
	<script type="text/javascript">
	
	$(document).ready(function(){
		
	//Display Loading Image
	function Display_Load()
	{
	    $("#loading").fadeIn(900,0);
		$("#loading").html("<img src='bigLoader.gif' />");
	}
	//Hide Loading Image
	function Hide_Load()
	{
		$("#loading").fadeOut('slow');
	};
	

   //Default Starting Page Results
   
	$("#pagination li:first").css({'color' : '#FF0084'}).css({'border' : 'none'});
	
	Display_Load();
	
	$("#content").load("cobaia.php?page=1", Hide_Load());



	//Pagination Click
	$("#pagination li").click(function(){
			
		Display_Load();
		
		//CSS Styles
		$("#pagination li")
		.css({'border' : 'solid #dddddd 1px'})
		.css({'color' : '#0063DC'});
		
		$(this)
		.css({'color' : '#FF0084'})
		.css({'border' : 'none'});

		//Loading Data
		var pageNum = this.id;
		
		$("#content").load("cobaia.php?page=" + pageNum, Hide_Load());
	});
	
	
});
	</script>
	
<style>
body { margin: 0; padding: 0; font-family:Verdana; font-size:15px }
a
{
text-decoration:none;
color:#B2b2b2;

}

a:hover
{

color:#DF3D82;
text-decoration:underline;

}
#loading { 
width: 100%; 
position: absolute;
}

#pagination
{
text-align:center;
margin-left:120px;

}
li{	
list-style: none; 
float: left; 
margin-right: 16px; 
padding:5px; 
border:solid 1px #dddddd;
color:#0063DC; 
}
li:hover
{ 
color:#FF0084; 
cursor: pointer; 
}


</style>
</head>
<body>
<!--  <div> <iframe src="ads.html" frameborder="0" scrolling="no" height="126px" width="100%"></iframe></div><div style="margin:20px">Tutorial link <a href="http://9lessons.blogspot.com/2009/09/pagination-with-jquery-mysql-and-php.html" style="color:#0033CC">click here</a></div> -->
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
     </div>
        </div>
        </div>
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    <div align="center">
		
				
	<div id="loading" ></div>
	<div id="content" ></div>
			<div class="row">
	<div class="grid_12">	
	
	<table>
	<tr><th>
			<ul class="square" id="pagination">
            
				<?php
				//Show page links
				for($i=1; $i<=$pages; $i++)
				{
					echo '<li id="'.$i.'"> '.$i.'</li>';
				}
				?>
	</ul>	
	</th></tr></table>
	
	</div></div>
	 


 
</body></html>