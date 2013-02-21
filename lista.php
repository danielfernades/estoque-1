<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<title>Amazium - The responsive web framework..!</title>
	<meta name="description" content="">
	<meta name="author" content="">
	<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	
	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" /> 
	
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
	<script src="includes/smoothscroll.js"type="text/javascript" ></script>
	<script src="http://jqueryjs.googlecode.com/files/jquery-1.3.js" type="text/javascript"></script>
	<script src="amazium/includes/jquery.easing.1.3.js" type="text/javascript"></script>
	<script src="amazium/includes/jquery.ui.totop.js" type="text/javascript"></script>
	<script type="text/javascript">
		$(document).ready(function() {
			$().UItoTop({ easingType: 'easeOutQuart' });
		});
	</script>
</head>
<body>
<div class="row">
	<div class="grid_12">
		<hr />
		<a name="forms-tables"></a>
        
        <div class="grid_12">
        <div id="stylized-form">
        <table >
  <tr>
    <th class="first last" colspan="4">Listagem Geral</th>
  </tr>
  <tr>
    <th class="first">Produto</th>
    <th>Descrição</th>
    <th>Quantidade</th>
    <th>nf</td>
  </tr>
   <tr>
    <th>&nbsp;</th>
    <th>&nbsp;</th>
    <th>&nbsp;</th>
    <th>&nbsp;</th>
  </tr>
  
  
  
  <tr>
    <th colspan="4">
    
    </th>
  </tr>
</table>
</div>
</div>
        
        
        
        
        </div>
        </div>




</body>
</html>
