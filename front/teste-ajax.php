<?php
if(isset($_POST['course'])){
if($_POST['course']!="nada"){
echo "Você disse: <b>".$_POST['course']."</b>";
}else{
echo "Você não pode dizer NADA";
}
}else{
echo "Nada enviado";
}
?>