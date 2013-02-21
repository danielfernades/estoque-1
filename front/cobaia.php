<html>
<title></title>
<head>

<style type="text/css">
.resizedTextbox {width: 250px;  height: 40px; padding: 1px;padding:10px;border:1px solid blue; border-radius: 10px; font-size: 26px;}
</style>
<script type="text/javascript">

function processForm(form) { 
    $.ajax( {
        type: 'POST',
        url: form_process.php,
        data: $(form).serialize(),
        success: function(data) {
            $('#message').html(data);
        }
    } );
    return false;
}
</script>


</head>
	<body>
	
<input tye="text" name="cobaia"  class="resizedTextbox" />

	<br/>
<form action="" method="post" onsubmit="processForm(this)">
  <input type="text" name="user_name" id="user_name1" value="">
  <input type="submit" name="submit" value="submit" >
</form>
<form action="" method="post" onsubmit="processForm(this)">
  <input type="text" name="user_name" id="user_name2" value="">
  <input type="submit" name="submit" value="submit" >
</form>
<div id='message'></div>

	</body>



</html>