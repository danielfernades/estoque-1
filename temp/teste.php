<?php 
function conecta(){
include ('./conexao.php');
$db_selected = mysql_select_db('estoque', $link);
if (!$db_selected) {
    die ('Can\'t use foo : ' . mysql_error());
}
}

function teste(){
$acao=$_GET['acao'];

switch ($acao) {
    case "atualizar":
        echo "atualiza";



        break;
    
    default:
        echo "erro";
        break;


}


}


?>