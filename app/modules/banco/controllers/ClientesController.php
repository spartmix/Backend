<?php
namespace App\Bancos\Controllers;

use App\Controllers\RESTController;
use App\Bancos\Models\Clientes;

class ClientesController extends RESTController
{
    public function getClientes()
    {
        try {
            $query = new \Phalcon\Mvc\Model\Query\Builder();
            $query->addFrom('\App\Bancos\Models\Clientes', 'Clientes')
            ->columns(
                [
                    'Clientes.*'
                ]
            )
            ->where('true' . $this->getConditions());

            return $query
            ->getQuery()
            ->execute();
        } catch (\Exception $e) {
            throw new \Exception($e->getMessage(), $e->getCode());
        }
    }

    public function getCliente($idCliente)
    {
        try {
            $cliente = (new Clientes())->findFirst(
                [
                    'conditions' => "idCliente = '$idCliente'",
                    'columns' => $this->partialFields,
                ]
            );
            return $cliente;
        } catch (\Exception $e) {
            throw new \Exception($e->getMessage(), $e->getCode());
        }
    }

    public function addCliente()
    {
        try {
            $cliente = new Clientes();
            $cliente->setNomeCliente($this->di->get('request')->getPost('nomeCliente'))
            ->setNumeroConta($this->di->get('request')->getPost('numeroConta'))
            ->setTipoConta($this->di->get('request')->getPost('tipoConta'));

            $cliente->saveDB();

            return $cliente;
        } catch (\Exception $e) {
            throw new \Exception($e->getMessage(), $e->getCode());
        }
    }

    public function editCliente($idCliente)
    {
        try {
            $put = $this->di->get('request')->getPut();

            $cliente = (new Clientes())->findFirst($idCliente);

            if (false === $cliente) {
                throw new Exception("This record doesn't exist", 1);
            }

            $cliente->setNomeCliente(isset($put['nomeCliente']) ? $put['nomeCliente'] : $cliente->getNomeCliente())
            ->setNumeroConta(isset($put['numeroConta']) ? $put['numeroConta'] : $cliente->getNumeroConta())
            ->setTipoConta(isset($put['tipoConta']) ? $put['tipoConta'] : $cliente->getTipoConta());

            $cliente->saveDB();

            return $cliente;
        } catch (\Exception $e) {
            throw new \Exception($e->getMessage(), $e->getCode());
        }
    }

    public function deleteCliente($idCliente)
    {
        try {
            $cliente = (new Clientes())->findFirst($idCliente);
            if (false === $cliente) {
                throw new Exception("Esse id não existe", 2);
            }
            return ['sucesso' => $cliente->delete()];
        } catch (\Exception $e) {
            throw new \Exception($e->getMessage(), $e->getCode());
        }
    }
}
