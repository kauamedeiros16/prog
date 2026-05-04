<?php
class Funcionario {
    private $nome;
    private $idade;
    private $salario;

    public function setNome($nome) {
        if (!empty($nome)) {
            $this->nome = $nome;
        }
    }

    public function getNome() {
        return $this->nome;
    }

    public function setIdade($idade) {
        if ($idade >= 0 && $idade <= 120) {
            $this->idade = $idade;
        }
    }

    public function getIdade() {
        return $this->idade;
    }

    public function setSalario($salario) {
        if ($salario > 0) {
            $this->salario = $salario;
        }
    }

    public function getSalario() {
        return $this->salario;
    }

    public function aumentarSalario($valor) {
        if ($valor > 0) {
            $this->salario += $valor;
        } else {
            echo "Aumento inválido!<br>";
        }
    }
}

$f = new Funcionario();
$f->setNome("Maria");
$f->setIdade(35);
$f->setSalario(3000);

$f->aumentarSalario(500);
$f->aumentarSalario(-100); 

echo $f->getNome() . "<br>";
echo $f->getSalario();
?>