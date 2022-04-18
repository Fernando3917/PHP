<!DOCTYPE html>
<html>
<body>
<h1>Aula de operadores aritimeticos</h1>
<h3>n1 = 15  n2 = 10</h3>




<?php
		
$n1 = 15; // $_GET["a"];  -- vc pode usar o get para procurar variaveis 
$n2 = 10;
$x = 20;


echo "adição: ";
$resultado = $n1+$n2;
echo $resultado;

echo "<br>subtração: ";
$r = $n1-$n2;
echo $r;

echo "<br>divisão: ";
$r = $n1/$n2;
echo $r;

echo "<br>modulo(resto da divisão): ";
$r = $n1%$n2;
echo $r;

//---------------------------//-------------//Funções prontas no php-----

//valor absoluto: 
$a = -3;
echo "<br>O valor absoluto de $a e". abs($a);

//Potenciação: 
$a = 4; 
$b = 3;
echo "<br>A potenciação de $a e ". pow($a, $b);

//raiz quadrada: 
$a = 3;
$b = 4;
echo "<br> Raiz quadrada de $a e ".sqrt($a);

//arredondamento de valores reais:
$a = 3;
$b = 4;
echo "<br> O valor redondo de $a e ".round($a); //ceil --> arredonda sempre pra cima , floor ___> arredonda sempre para baixo.


//raiz quadrada: 
$a = 3;
$b = 4;
echo "<br> Raiz quadrada de $a e ".sqrt($a);

//inteiro de um numero real
$a = 3;
$b = 4;
echo "<br> Pega a parte inteira de $a e ".intval($a);

//Formatar um numero em algum valor
$a = 4;
$b = 4;
echo "<br> formatar com 4 casas cecimais $a e ".number_format($a,4);



?>
</body>
</html>
