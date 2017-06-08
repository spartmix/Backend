<!-- <?php
// namespace App\Bancos\Controllers;

// use App\Controllers\RESTController;
// use App\Bancos\Models\Extratos;

// class Extratos extends RESTController
// {
//     public function getExtratos()
//     {
//         try {
//             $query = new \Phalcon\Mvc\Model\Query\Builder();
//             $query->addFrom('\App\Bancos\Models\Extratos', 'Extratos')
//                 ->columns(
//                     [
//                         'Contas.idConta',
//                         'Contas.numeroConta',
//                         'Contas.saldoConta',
//                         'Contas.limiteConta',
//                         'Clientes.nomeCliente',
//                         'Clientes.numeroConta',
//                         'Clientes.tipoConta',
//                         'Extratos.numeroConta'
//                     ]
//                 )
//                 ->leftJoin('\App\Bancos\Models\Clientes', 'Clientes.numeroConta = Contas.numeroConta')
//                 ->where('true');

//             return $query
//                 ->getQuery()
//                 ->execute();
//         } catch (\Exception $e) {
//             throw new \Exception($e->getMessage(), $e->getCode());
//         }
//     }
// }
