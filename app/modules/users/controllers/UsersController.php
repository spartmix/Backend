<?php
namespace App\Users\Controllers;

use App\Controllers\RESTController;
use App\Users\Models\Users;

/**
 * Gerencia as requisições para o módulo admin.
 *
 * @package App\Users\Controllers
 * @author Otávio Augusto Borges Pinto <otavio@agenciasys.com.br>
 * @copyright Softers Sistemas de Gestão © 2016
 */
class UsersController extends RESTController
{
    /**
     * Retorna uma lista de Usuários.
     *
     * @access public
     * @return Array Lista de Usuários.
     */
    public function getUsers()
    {
        try {
            $query = new \Phalcon\Mvc\Model\Query\Builder();
            $query->addFrom('\App\Users\Models\Users', 'Users')
                ->columns(
                    [
                        'Users.iUserId',
                        'Users.sName',
                        'Users.sEmail',
                        'Phones.iPhoneId',
                        'Phones.iUserId as iPhoneUserId',
                        'Phones.sPhone',
                    ]
                )
                ->leftJoin('\App\Users\Models\Phones', 'Phones.iUserId = Users.iUserId', 'Phones')
                ->where('true');

            return $query
                ->getQuery()
                ->execute();
        } catch (\Exception $e) {
            throw new \Exception($e->getMessage(), $e->getCode());
        }
    }

    /**
     * Retorna um Usuário.
     *
     * @access public
     * @return Array Usuário.
     */
    public function getUser($iUserId)
    {
        try {
            $users = (new Users())->findFirst(
                [
                    'conditions' => "iUserId = '$iUserId'",
                    'columns' => $this->partialFields,
                ]
            );

            return $users;
        } catch (\Exception $e) {
            throw new \Exception($e->getMessage(), $e->getCode());
        }
    }

    /**
     * Adiciona um Usuário.
     *
     * @access public
     * @return Array Usuário.
     */
    public function addUser()
    {
        try {
            $usersModel = new Users();
            $usersModel->sName = $this->di->get('request')->getPost('sName');
            $usersModel->sEmail = $this->di->get('request')->getPost('sEmail');

            $usersModel->saveDB();

            return $usersModel;
        } catch (\Exception $e) {
            throw new \Exception($e->getMessage(), $e->getCode());
        }
    }

    /**
     * Editar o campo de um Usuário.
     *
     * @access public
     * @return Array.
     */
    public function editUser($iUserId)
    {
        try {
            $put = $this->di->get('request')->getPut();

            $user = (new Users())->findFirst($iUserId);

            if (false === $user) {
                throw new \Exception("This record doesn't exist", 200);
            }

            $user->sName = isset($put['sName']) ? $put['sName'] : $user->sName;
            $user->sEmail = isset($put['sEmail']) ? $put['sEmail'] : $user->sEmail;

            $user->saveDB();

            return $user;
        } catch (\Exception $e) {
            throw new \Exception($e->getMessage(), $e->getCode());
        }
    }

    /**
     * Remove um Usuário.
     *
     * @access public
     * @return boolean.
     */
    public function deleteUser($iUserId)
    {
        try {
            $user = (new Users())->findFirst($iUserId);

            if (false === $user) {
                throw new \Exception("This record doesn't exist", 200);
            }

            return ['success' => $user->delete()];
        } catch (\Exception $e) {
            throw new \Exception($e->getMessage(), $e->getCode());
        }
    }
}
