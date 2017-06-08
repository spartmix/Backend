<?php

require_once('ContaBanco.php');
require_once('GerenciamentoContas.php');
require_once('conexao.php');

//Gerente
$gerente = array(new Gerente());

$gerente[0]->abrirConta('CC');
$gerente[0]->setDono('Eder Deivid');
$gerente[0]->setNumConta(35214);

//Account 2
$gerente[1] = new Gerente();

$gerente[1]->abrirConta('CP');
$gerente[1]->setDono('Deivid Shuahrarg');
$gerente[1]->setNumConta(31250);

//Account 3
$gerente[2] = new Gerente();
$gerente[2]->abrirConta('CC');
$gerente[2]->setDono('Lew Duegf');
$gerente[2]->setNumConta(31580);

//############################################################//

//Clientes
$clientes = array(new ContaBanco());
$clientes = $gerente;

//Cliente 1
$clientes[0]->depositar();
$clientes[0]->sacar(50);
$clientes[0]->requisitarFechamento();

//Cliente 2
$clientes[1]->depositar(1);
$clientes[1]->sacar(2);

//Cliente 3
$clientes[2]->depositar(0);
$clientes[2]->sacar(1);

//Método delete
$clientes = accountDelete($clientes);

function accountDelete($clientes)
{
    if ($clientes[0]->getStatus()===false) {
        unset($clientes[0]);
    }
    return $clientes;
}

var_dump($clientes);
