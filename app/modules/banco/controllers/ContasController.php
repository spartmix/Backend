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

            $conta->setNumeroConta($this->di->get('request')->getPut('numeroConta'))
            ->setSaldoConta($this->di->get('request')->getPut('saldoConta'))
            ->setLimiteConta($this->di->get('request')->getPut('limiteConta'));

            $conta->saveDB();

            return $conta;
        } catch (\Exception $e) {
            throw new \Exception($e->getMessage(), $e->getCode());
        }
    }

    public function addConta()
    {
        try {
            $conta = new Contas();
            $conta->setNumeroConta($this->di->get('request')->getPost('numeroConta'))
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
