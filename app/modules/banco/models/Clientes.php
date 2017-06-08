<?php
namespace App\Bancos\Models;

class Clientes extends \App\Models\BaseModel
{
    protected $idCliente;

    protected $nomeCliente;

    protected $numeroConta;

    protected $tipoConta;

    public function getIdCliente()
    {
        return $this->idCliente;
    }

    public function setIdCliente($idCliente)
    {
        $this->idCliente = $idCliente;
        return $this;
    }

    public function getNomeCliente()
    {
        return $this->nomeCliente;
    }

    public function setNomeCliente($setNomeCliente)
    {
        $this->nomeCliente = $setNomeCliente;
        return $this;
    }

    public function getNumeroConta()
    {
        return $this->numeroConta;
    }

    public function setNumeroConta($setNumeroConta)
    {
        $this->numeroConta = $setNumeroConta;
        return $this;
    }

    public function getTipoConta()
    {
        return $this->tipoConta;
    }

    public function setTipoConta($setTipoConta)
    {
        $this->tipoConta = $setTipoConta;
        return $this;
    }
}
