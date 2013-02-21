<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script language="javascript" type="text/javascript" src="form/niceforms.js"></script>
<link rel="stylesheet" type="text/css" media="all" href="form/niceforms-default.css" />
<title>Documento sem título</title>
</head>

<body>
<div id="container">
<form action="insere_produto.php?acao=cadastrar" method="post" class="niceform">
	<fieldset>
    	<legend>Cadastro de Bebidas</legend>
        <dl>
        	<dt><label for="marca">Marca:</label></dt>
            <dd><input type="text" name="marca" id="marca" size="32" maxlength="128" /></dd><br/>
        </dl>   
        <dl>   
            <dt><label for="tara">Tamanho:</label></dt>
            <dd><input type="text" name="tara" id="tara" size="20" maxlength="128" /></dd>
        </dl>
        <dl>   
            <dt><label for="quantidade">Quantidade:</label></dt>
            <dd><input type="text" name="quantidade" id="quantidade" size="8" maxlength="128" /></dd>
        </dl>
        <dl>   
            <dt><label for="nf">Nota Fiscal:</label></dt>
            <dd><input type="text" name="nf" id="nf" size="11" maxlength="128" /></dd>
        </dl>
            
      </fieldset>
<fieldset class="action">
    	<input type="submit" name="submit" id="submit" value="Cadastrar" />
    </fieldset>


</form>
</body>
</html>