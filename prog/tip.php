<?php
    class Produto {
        public string $nome;
        public float $preco;
        public int $quantidade;

    public function adicionarEstoque(int $qtd): void {
        $this->quantidade += $qtd;
    }

    public function removerEstoque(int $qtd): bool {
        if ($qtd <= $this->quantidade) {
            $this->quantidade -= $qtd;
            return true;
        }

        return false;
    }

    public function calcularValorTotal(): float {
        return $this->preco * $this->quantidade;
    }
}

$produto = new Produto();

$produto->nome = "Arroz";
$produto->preco = 25.50;
$produto->quantidade = 8;

$produto->adicionarEstoque(0);

$produto->removerEstoque(10);

echo $produto->calcularValorTotal();