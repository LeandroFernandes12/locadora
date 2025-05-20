<?php
namespace Models;

// interface locavel incorporada diretamente no arquivo. define os metodos necessarios para um veiculo ser locavel

interface Locavel {
    public function alugar(): string;
    public function devolver(): string;
    public function isDisponivel(): bool;

}

// classe abstrata base para todos os tipos de veiculos
abstract class Veiculo {
    protected string $modelo;
    protected string $placa;
    protected string $disponivel;
    protected ?int $id = null;

    // ocnstrutor da classe veiculo
    public function __construct(string $modelo, string $placa, bool $disponivel = true, ?int $id = null) {
        $this->modelo = $modelo;
        $this->placa = $placa;
        $this->disponivel = $disponivel;
        $this->id = $id;
    }
    
    // calcula o valor do aluguel baseado na quantidade de dias. metodo abstrato a ser implementado pelas classes filhas
    abstract public function calcularAluguel(int $dias): float;

    // verifica se o veiculoesta disponivel para aluguel
    public function isDisponivel(): bool {
        return $this->disponivel;
    }

    public function getModelo(): string {
        return $this->modelo;
    }

    // placa do veiculo
    public function getPlaca(): string {
        return $this->placa;
    }

    // id do veiculo
    public function getId(): ?int {
        return $this->id;
    }

    // status de disponibilidade do veiculo
    public function setDisponivel(bool $disponivel): void {
        $this->disponivel = $disponivel;
    }

    // define o id do veiculo
    public function setId(int $id): void {
        $this->id = $id;
    }
}
?>