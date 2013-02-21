
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
	
	$("#content").load("pagination_data.php?page=1", Hide_Load());



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
		
		$("#content").load("pagination_data.php?page=" + pageNum, Hide_Load());
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
	<p><a href="../index.php" class="btn">Voltar</a></p>
	</div></div>
	 


 
</body></html>