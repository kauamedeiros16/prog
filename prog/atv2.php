<?php
require_once "atv1.php";

$f = new Funcionario();

$f->setNome("");
$f->setIdade(-10);
$f->setSalario(0);

echo "<hr>";


$f->setNome("Ana");
$f->setIdade(25);
$f->setSalario(3000);

echo "Nome: " . $f->getNome() . "<br>";
echo "Idade: " . $f->getIdade() . "<br>";
echo "Salário: R$ " . $f->getSalario();
?>