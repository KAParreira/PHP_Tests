<?php
/*****ESCALAR****/
$nome = "Konbanwa sekai 22:17 ";
var_dump($nome);

if (is_string($nome)):
     echo "É uma string";
else:
     echo "Não é uma string";
endif;	 
echo "<hr>";

$idade = 27;
var_dump($idade);

if (is_int($idade)):
     echo "É um inteiro";
else:	
     echo "Não é um inteiro";
endif;	 
echo "<hr>";

$altura = 1.73;
var_dump($altura);

if (is_float($altura)):
     echo "É um float";
else:
     echo "Não é um float";
endif;
echo "<hr>";	 

$admin = false;
var_dump($admin);

if (is_bool($admin)):
     echo "É um booleano";
else:
     echo "Não é um booleano";
endif;	 
echo "<hr>";

/****Composto****/
$carros = array("Gol","Uno","Camaro",12,20.6,true);
var_dump($carros);

if (is_array($carros)):
     echo "É um array";
else: 
     echo "Não é um array";
endif;
echo "<hr>";	 
class Cliente {
	public $nome;
	public function atribuirNome($nome){
     $this->$nome = $nome;		
	}
}

$cliente = new Cliente();
$cliente->atribuirNome("Kauan");
var_dump($cliente);

if (is_object($cliente)):
     echo "É um objeto";
else: 
     echo "Não é um objeto";
endif;
echo "<hr>";

$cidade = NULL;
var_dump($cidade);
echo "<hr>";

/**aspas**/

$nome = 'VampVamp';
 echo 'Meu nome é '.$nome.' e minha idade é 119 anos.';
 echo '<hr>';
 echo "Meu nome é $nome!";
 echo "<hr>";
 
/**Escopo**/

$nome = "Sara-chan";
$a = 1;
$b = 3;
$c = 5;

function exibeNome(){
	global $nome;
	echo $nome;
}

 exibeNome();
 echo"<hr>";
 ////////////////////
 
 function exibeCidade(){
	 global $cidade;
	 $cidade = "São paulo";
 }
 exibeCidade();
 echo $cidade;
 echo "<hr>";
 //////////////////
 
 function soma(){
	 
	 echo $GLOBALS['a'] + $GLOBALS['b'] + $GLOBALS['c']; 
	 
 }
soma();

?>
 