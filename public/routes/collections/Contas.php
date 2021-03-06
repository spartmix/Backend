<?php
return call_user_func(
    function () {
        $clienteCollection = new \Phalcon\Mvc\Micro\Collection();

        $clienteCollection
            ->setPrefix('/v1/contas')
            ->setHandler('\App\Bancos\Controllers\ContasController')
            ->setLazy(true);

        $clienteCollection->get('/', 'getContas');
        $clienteCollection->get('/{id:\d+}', 'getConta');

        $clienteCollection->post('/', 'addConta');
        $clienteCollection->post('/depositar/{id:\d+}', 'depositar');
        $clienteCollection->post('/sacar/{id:\d+}', 'sacar');
        $clienteCollection->post('/transferir', 'transferir');

        $clienteCollection->put('/{id:\d+}', 'editConta');

        $clienteCollection->delete('/{id:\d+}', 'deleteConta');

        return $clienteCollection;
    }
);
