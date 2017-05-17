<?php
namespace App\Table;

use Core\Table\Table;


class AssociationTable extends Table{

    protected $table = 'associations';

    /**
     * Récupère les derniers article
     * @return array
     */
    public function insertion($name, $img , $description){
        return $this->db->prepare("INSERT INTO associations
                        SET name = ?, img = ?, description = ?",
                        array($name, $img , $description));
    }
}