<?php
return call_user_func(
    function () {
        $clienteCollection = new \Phalcon\Mvc\Micro\Collection();

        $clienteCollection
            ->setPrefix('/v1/extratos')
            ->setHandler('\App\Bancos\Controllers\ExtratosController')
            ->setLazy(true);

        $clienteCollection->get('/', 'getExtratos');
        $clienteCollection->get('/{id:\d+}', 'getExtrato');

        $clienteCollection->post('/', 'addExtrato');

        $clienteCollection->put('/{id:\d+}', 'editExtrato');

        $clienteCollection->delete('/{id:\d+}', 'deleteExtrato');

        return $clienteCollection;
    }
);
