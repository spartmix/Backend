<?php
namespace App\Bancos\Controllers;

use App\Controllers\RESTController;
use App\Bancos\Models\Contas;

class ContasController extends RESTController
{
    public function getContas()
    {
        try {
            $contas = (new Contas())->find(
                [
                    'conditions' => 'true ' . $this->getConditions(),
                    'columns' => $this->partialFields,
                    'limit' => $this->limit
                ]
            );
            return $contas;
        } catch (\Exception $e) {
            throw new \Exception($e->getMessage(), $e->getCode());
        }
    }

    public function getConta($idConta)
    {
        try {
            $conta = (new Contas())->findFirst(
                [
                    'conditions' => "idConta = '$idConta'",
                    'columns' => $this->partialFields
                ]
            );
            return $conta;
        } catch (\Exception $e) {
            throw new \Exception($e->getMessage(), $e->getCode());
        }
    }

    public function editConta($idConta)
    {
        try {
            $conta = (new Contas())->findFirst(
                    [
                        'conditions' => "idConta = '$idConta'",
                        'columns' => $this->partialFields
                    ]
                );

            if (false === $conta) {
                throw new Exception("Error Processing Request", 1);
            }

            $conta->setcNumeroConta($this->di->get('request')->getPut('cNumeroConta'))
            ->setSaldoConta($this->di->get('request')->getPut('saldoConta'))
            ->setLimiteConta($this->di->get('request')->getPut('limiteConta'));

            $conta->saveDB();

            return $conta;
        } catch (\Exception $e) {
            throw new \Exception($e->getMessage(), $e->getCode());
        }
    }

    public function depositar($idConta)
    {
        try {
            $conta = (new Contas())->findFirst(
                    [
                        'conditions' => "idConta = '$idConta'",
                        'columns' => $this->partialFields
                    ]
                );

            if (false === $conta) {
                throw new Exception("Error Processing Request", 1);
            }

            $conta->setSaldoConta($this->di->get('request')->getPost('depositarValor') + $conta->getSaldoConta());

            $conta->saveDB();

            return $conta;
        } catch (\Exception $e) {
            throw new \Exception($e->getMessage(), $e->getCode());
        }
    }

    public function sacar($idConta)
    {
        try {
            $conta = (new Contas())->findFirst(
                    [
                        'conditions' => "idConta = '$idConta'",
                        'columns' => $this->partialFields
                    ]
                );

            if (false === $conta) {
                throw new Exception("Error Processing Request", 1);
            }
            if ($conta->getSaldoConta() < $this->di->get('request')->getPost('sacarValor')) {
                throw new Exception("Saldo insuficiente", 3);
            }
            if ($conta->getLimiteConta() < $this->di->get('request')->getPost('sacarValor')) {
                throw new Exception("Limite insuficiente", 4);
            }
            $conta->setSaldoConta($conta->getSaldoConta() - $this->di->get('request')->getPost('sacarValor'));

            $conta->saveDB();

            return $conta;
        } catch (\Exception $e) {
            throw new \Exception($e->getMessage(), $e->getCode());
        }
    }


    public function transferir()
    {
        try {
            $contaAtual = (new Contas())->findFirst(
                    [
                        'conditions' => "cNumeroConta = '".$this->di->get('request')->getPost('contaAtual')."'",
                        'columns' => $this->partialFields
                    ]
                );

            if (false === $contaAtual) {
                throw new Exception("Error Processing Request", 1);
            }

            $contaDestino = (new Contas())->findFirst(
                    [
                        'conditions' => "cNumeroConta = '".$this->di->get('request')->getPost('contaDestino')."'",
                        'columns' => $this->partialFields
                    ]
                );

            if (false === $contaDestino) {
                throw new Exception("Error Processing Request", 1);
            }

            if ($contaAtual->getSaldoConta() < $this->di->get('request')->getPost('valorTransferencia')) {
                throw new Exception("Saldo insuficiente", 3);
            }
            if ($contaAtual->getLimiteConta() < $this->di->get('request')->getPost('valorTransferencia')) {
                throw new Exception("Limite insuficiente", 4);
            }

            $contaAtual->setSaldoConta($contaAtual->getSaldoConta() - $this->di->get('request')->getPost('valorTransferencia'));
            $contaDestino->setSaldoConta($contaDestino->getSaldoConta() + $this->di->get('request')->getPost('valorTransferencia'));

            $contaAtual->saveDB();
            $contaDestino->saveDB();

            return ['Atual'=> $contaAtual, 'Destino'=> $contaDestino];
        } catch (\Exception $e) {
            throw new \Exception($e->getMessage(), $e->getCode());
        }
    }



    public function addConta()
    {
        try {
            $conta = new Contas();
            $conta->setcNumeroConta($this->di->get('request')->getPost('cNumeroConta'))
            ->setSaldoConta($this->di->get('request')->getPost('saldoConta'))
            ->setLimiteConta($this->di->get('request')->getPost('limiteConta'));
            $conta->saveDB();

            return $conta;
        } catch (\Exception $e) {
            throw new \Exception($e->getMessage(), $e->getCode());
        }
    }



    public function deleteConta($idConta)
    {
        try {
            $conta = (new Contas())->findFirst($idConta);
            if (false === $conta) {
                throw new Exception("Error Processing Request", 2);
            }
            return ['sucesso' => $conta->delete()];
        } catch (\Exception $e) {
            throw new \Exception($e->getMessage(), $e->getCode());
        }
    }
}
