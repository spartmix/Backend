<?php

class ContaBanco
{
    private $saldo;

    public $status;

    public $advertencias;

    public function depositar($v)
    {
        if ($this->getStatus()===true) {
            $this->setSaldo($this->getSaldo() + $v);
        }
        if ($this->getStatus()===false) {
            echo 'Conta inativa ou inexistente' . '<br>';
        }
    }


    // public function transferir(){
    //     //Verificar se a conta tem dinheiro
    //     //Verificar se a conta ta ativa
    //     //Passar o valor da conta A para Conta B

    // }


    public function sacar($v)
    {
        if ($this->getStatus()===true) {
            if ($this->getSaldo()>=$v) {
                $this->setSaldo($this->getSaldo() - $v);
                echo '<b>' . $this->getDono() . ',</b>' . ' Você sacou ' . '<b>' . $v .'R$,' . '</b>' . ' Restaram ' . '<b>' .
                $this->getSaldo() . 'R$</b>' . ' em sua conta' . '<br>';
            }
            if ($this->getSaldo()<$v) {
                    echo 'Seu saque de: ' . $v . 'R$.' . ' Foi superiar ao seu sado. E seu saldo atual é: ' . $this->getSaldo() . 'R$' .
                    '<br>';
            }
        }
        if ($this->getStatus()===false) {
                echo 'Conta inexistente' . '<br>';
        }
    }


    public function requisitarFechamento()
    {
        if ($this->getStatus()===true) {
            if ($this->getSaldo()==0) {
                $this->fecharConta();
            }
            if ($this->getSaldo()>0) {
                echo 'Você não pode fazer essa requisição enquanto sua conta possuir saldo, por favor, efetue um saque' . '<br>';
            }
            if ($this->getSaldo()<0) {
                echo 'Você não pode fazer essa requisição pois existe débitos em sua conta, por favor, efetue o pagamento' . '<br>';
            }
        }
        if ($this->getStatus()===false) {
            echo 'Conta inativa ou inexistente' . '<br>';
        }
    }

    public function __construct()
    {
        $this->setSaldo(0);
        $this->setStatus(false);

    //saldo 0
    //status false
    }

    public function getSaldo()
    {
        return $this->saldo;
    }

    public function setSaldo($setValue)
    {
        $this->saldo = $setValue;
    }

    public function getStatus()
    {
        return $this->status;
    }

    public function setStatus($setStatus)
    {
        $this->status = $setStatus;
    }
}
