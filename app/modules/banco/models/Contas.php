<?php
namespace App\Bancos\Models;

class Contas extends \App\Models\BaseModel
{
    protected $idConta;

    protected $cNumeroConta;

    protected $saldoConta;

    protected $limiteConta;

    public function getIdConta()
    {
        return $this->idConta;
    }

    public function setIdConta($idConta)
    {
        $this->idConta = $idConta;
        return $this;
    }

    public function getcNumeroConta()
    {
        return $this->cNumeroConta;
    }

    public function setcNumeroConta($setNumeroConta)
    {
        if (null === $setNumeroConta) {
            return $this;
        }
        $this->cNumeroConta = $setNumeroConta;
        return $this;
    }

    public function getSaldoConta()
    {
        return $this->saldoConta;
    }

    public function setSaldoConta($setSaldoConta)
    {
        if (null === $setSaldoConta) {
            return $this;
        }
        $this->saldoConta = $setSaldoConta;
        return $this;
    }

    public function getLimiteConta()
    {
        return $this->limiteConta;
    }

    public function setLimiteConta($setLimiteConta)
    {
        if (null === $setLimiteConta) {
            return $this;
        }
        $this->limiteConta = $setLimiteConta;
        return $this;
    }

    public function depositar($valor)
    {
        $this->setSaldoConta($this->getSaldoConta() + $valor);
    }
}
