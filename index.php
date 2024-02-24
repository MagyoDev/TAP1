<?php
$nome = "MagyoDev";
$idade = "18";
$idade2 = 18;
$lista = ["banana", "maça", "Manga"];

echo $nome ."<br>";
echo $idade ."<br>";
echo $lista ."<br>";
echo "<br>";
var_dump($nome);
echo "<br>";
var_dump($idade);
echo "<br>";
var_dump($lista);

if($idade === $idade2){
    echo "sim";
}else{
    echo "<br> Dentro do else ";
    echo "<br>";
    var_dump($idade);
    echo "<br>";
    var_dump($idade2);
}