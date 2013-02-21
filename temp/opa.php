<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sem título</title>
</head>

<body>

<?php

$conn = mysql_connect("localhost", "root", "123");

if (!$conn) {
    echo "Não foi possível conectar ao banco de dados: " . mysql_error();
    exit;
}

if (!mysql_select_db("estoque")) {
    echo "Não foi possível selecionar mydbname: " . mysql_error();
    exit;
}

$row = mysql_fetch_row($result);

echo $row[0]; // 42
echo $row[1]; // o valor do emai

?>

</body>
</html>