<?php
class Gerente extends ContaBanco
{
    public $dono;

    public $tipo;

    public $numConta;

    public function abrirConta($t)
    {
        $this->setTipo($t);
        $this->setStatus(true);
        if ($t == 'CC') {
            $this->setSaldo(50);
        }
        if ($t == 'CP') {
            $this->setSaldo(150);
        }
    }

    public function fecharConta()
    {
        $this->setStatus(false);
    }

    public function mensalidade()
    {
        if ($this->getTipo() == 'CC') {
            $v = 12;
        }
        if ($this->getTipo() == 'CP') {
            $v = 20;
        }
        if ($this->getStatus()===true && $this->getSaldo()>$v) {
            $this->setSaldo($this->getSaldo() - $v);
            return;
        }
            echo 'Impossível efetuar o pagamento' . '<br>';

        //Conta poupança paga 20 reais por mês
        //Conta corrente paga 12 reais por mês
        //conferir tipo
        //Conferir status
            //conferir há saldo
    }

    public function getDono()
    {
        return $this->dono;
    }

    public function setDono($setOwner)
    {
        $this->dono = $setOwner;
    }

    public function getTipo()
    {
        return $this->tipo;
    }

    public function setTipo($setType)
    {
        $this->tipo = $setType;
    }
    public function getNumConta()
    {
        return $this->numConta;
    }

    public function setNumConta($setAccount)
    {
        $this->numConta = $setAccount;
    }
}
