
<?php
class Foo
{
    
public $server = "localhost";
public $user = "root";
public $pass = "123";
public $tabela = "estoque";


    function FazConecao()
    {
        $name = 'conecta';
        $this->$name(); // Isto chama o método Bar()
        


    }

    function conecta() {
        $link = mysql_connect($server, $user, $pass);
		if (!$link) {	
    	die('Não foi possível conectar: ' . mysql_error());
		}
		echo 'Conexão bem sucedida';
}


}
/*
$foo = new Foo();
$f = "FazConecao";
$foo->$f();  // Isto chama $foo->MetodoVariavel()
*/


?>
