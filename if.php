<h2>Desvio condicional (IF ELSE)</h2>
<?php
/*
Sintaxe - Desvio condicional simples

if (expr)
  statement

  caso tenha somente uma linha de comando abaixo do if
  não há necessidade de usar { }

  Para a estrutura abaixo é obrigatório o uso de { }
if (expr){
  código1
  código2
}

 */
echo "<h3>Exemplos</h3>";
echo "<h4>Desvio condicional Simples</h4>";
$idade = 20;

if ($idade >= 18)
    echo "Você tem " . $idade. " anos, então é maior de idade!";

echo "<p>";
if ($idade >= 18){
    echo "Você tem " . $idade. " anos, então é maior de idade!";
    echo "<br>Se for preso, vai dormir na cadeia!";
}
echo "<h4>Desvio condicional Composto</h4>";
$idade = 15;

if ($idade >= 18)
    echo "Você tem " . $idade. " anos, então é maior de idade!";
else
    echo "Você tem " . $idade. " anos, então é nemor de idade!";

echo "<p>";
if ($idade >= 18){
    echo "Você tem " . $idade. " anos, então é maior de idade!";
    echo "<br>Se for preso, vai dormir na cadeia!";
}else{
    echo "Você tem " . $idade. " anos, então é menor de idade!";
    echo "<br>Se for preso, não pode dormir na cadeia!";
}

echo "<h4>Desvio condicional Encadeado</h4>";
$idade = 5;

if ($idade >= 18)
    echo "Você tem " . $idade. " anos, então é maior de idade!";
else if ($idade >=6)
    echo "Você tem " . $idade. " anos, então é menor de idade!";
else
    echo "Você é bebê!!!";

echo "<p>";
if ($idade >= 18){
    echo "Você tem " . $idade. " anos, então é maior de idade!";
    echo "<br>Se for preso, vai dormir na cadeia!";
}else if ($idade >=6){
    echo "Você tem " . $idade. " anos, então é menor de idade!";
    echo "<br>Se for preso, não pode dormir na cadeia!";
}else{
    echo "Você é bebê!!!";
}

echo "<h4>Operador Ternário</h4>";
echo "<p>O operador ternário é uma forma resumida de utilizar o IF</p>";
$idade = 6;

echo $idade<=5 ? "Você é bebê" : "Você é Xovem...";
//    condição ?  verdadeiro   :  falso 

?>



