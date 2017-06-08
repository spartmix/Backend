<?php
namespace app\traits;

/**
 * @package App\Traits
 * @author Otávio Augusto Borges Pinto <otavio@agenciasys.com.br>
 * @copyright Softers Sistemas de Gestão © 2016
 */
trait Sql
{
    protected $searchConditions = [];

    protected function getConditions()
    {
        if ($this->isSearch) {
            foreach ($this->searchFields as $condition) {
                if (!empty($condition['value']) || $condition['value'] == 0) {
                    $this->searchConditions[] = $condition['field']." LIKE '%".addslashes($condition['value'])."%'";
                }
            }
            return ' AND (' . implode(' OR ', $this->searchConditions) . ')';
        }
        return '';
    }
}
