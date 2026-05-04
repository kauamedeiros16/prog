<?php
class Pessoa {
    private $nome;
    private $idade;
    
    public function setNome($nome) { 
        if (!empty($nome)) {
            $this->nome = $nome;
        } else {
            echo "Nome inválido!";
        }
    }

    public function getNome() {
        echo $this->nome;
    }

    public function setIdade($idade) { 
        if ($idade >= 0 && $idade <= 120) {
            $this->idade = $idade;
        } else {
            echo "A idade não pode ser negativa ou maior que 120.";
        } 
    }

    public function getIdade() {
        echo $this->idade;
    }
}

$p = new Pessoa();
$p->setNome("ANA");
$p->getNome();

echo "<br>";

$p->setIdade(-5);
$p->getIdade();
?>