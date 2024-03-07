<?php

$notas = array("Prova 1" => 10);

echo $notas["Prova 1" => 10 => "Matemática"];

$numero1 = 10;

$numero2 = "10";

if($numero1 == $numero2){
    echo "<br>";
    echo "Teste";
} else{
    echo "<br>";
    echo "Teste falhou";
}

if($numero1 === $numero2){
    echo "<br>";
    echo "Identico";
} else {
    echo "<br>";
    echo "Não identico";
}

$teste = 5;

for ($i = 0;  $i < $teste; $i++){
    echo "Teste";
    echo "<br>";
}

?>