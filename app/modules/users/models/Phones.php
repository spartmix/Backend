<?php
namespace App\Users\Models;

/**
 * Model da tabela 'Users'
 *
 * @package App\Users\Models
 * @author Otávio Augusto Borges Pinto <otavio@agenciasys.com.br>
 * @copyright Softers Sistemas de Gestão © 2016
 */
class Phones extends \App\Models\BaseModel
{
    /**
     * @Primary
     * @Identity
     * @Column(type="integer", length=10, nullable=false)
     */
    public $iPhoneId;

    /**
     * @Column(type="string", length=10, nullable=false)
     */
    public $iUserId;

    /**
     * @Column(type="string", length=15, nullable=false)
     */
    public $sPhone;
}
