<?php 
/*
include ('../conexao.php');
$db_selected = mysql_select_db('estoque', $link);
if (!$db_selected) {
    die ('Can\'t use foo : ' . mysql_error());
}
*/

if(isset($_POST['course'])){
$produto 	= $_POST['course'];echo "$produto";
$tara 		= $_POST['tara'];echo "$tara";
$quantidade = $_POST['quantidade'];echo "$quantidade";
$idprodutos = $_POST['idprodutos'];echo "o id e $idprodutos";
}

/*
$produto = $_POST['course'];
$tara = $_POST['tara'];
$quantidade = $_POST['quantidade'];
echo "$produto $tara quantidade:$quantidade";
*/

?>