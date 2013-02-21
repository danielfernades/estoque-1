<?php
session_start();
ob_start();
require_once "config_front.php";

?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>

<title>Saida de Produtos</title>
<script type="text/javascript" src="js/jquery.js"></script>
<script type='text/javascript' src='js/jquery.autocomplete.js'></script>
<link rel="stylesheet" type="text/css" href="css/jquery.autocomplete.css" />
<!-- Campo de Busca dos produtos -->
<style type="text/css">
.resizedTextbox {width: 250px;  height: 40px; padding: 1px;padding:10px;border:1px solid blue; border-radius: 10px; font-size: 26px;}
</style>
<!-- Fim do estilo de campo de Busca -->
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
</head>
<body>

<div id="content">
	<form autocomplete="off">
		<p>
			Course Name <label>:</label>
			<input tye="text" name="course" id="course"  class="resizedTextbox" />
		 <input type="text" name="tara" id="tara" class="resizedTextbox" /> 
			<!--input type="button" value="Get Value" /-->
		</p>
		<input type="submit" value="Submit" />
	</form>
</div>

</body>
</html>
