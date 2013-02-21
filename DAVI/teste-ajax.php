<?php
if(isset($_POST['teste'])){
if($_POST['teste']!="nada"){
echo "Você disse: <b>".$_POST['teste']."</b>";
}else{
echo "Você não pode dizer NADA";
}
}else{
echo "Nada enviado";
}
?>