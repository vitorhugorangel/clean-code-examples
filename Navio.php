<?php

//Implementação de código limpo.

class Navio implements JsonSerializable
{
    private $anoLancamento;
    private $modelo;
    private $preco;

    public function __construct($modelo = '', $anoLancamento = '', $preco = '')
    {
        $this->setModelo($modelo);
        $this->setAnoLancamento($anoLancamento);
        $this->setPreco($preco);
    }

    public function getModelo()
    {
        return $this->modelo;
    }
    public function setModelo($valor)
    {
        $this->modelo = $valor;
    }

    public function getAnoLancamento()
    {
        return $this->anoLancamento;
    }
    public function setAnoLancamento($valor)
    {
        $this->anoLancamento = $valor;
    }

    public function getPreco()
    {
        return $this->preco;
    }
    public function setPreco($valor)
    {
        $this->preco = $valor;
    }

    public function jsonSerialize()
    {
        return [
            'Modelo: ' => $this->getModelo(),
            'Ano de lançamento: ' => $this->getAnoLancamento(),
            'Preço: ' => $this->getPreco(),
        ];
    }
}
?>
