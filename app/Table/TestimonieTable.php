<?php
namespace App\Table;

use Core\Table\Table;

class TestimonieTable extends Table{

    protected $table = 'testimonies';

    /**
     * Récupère les derniers article
     * @return array
     */
    public function All(){
        return $this->query("
            SELECT *
            FROM testitmonies
            LEFT JOIN users ON testimonies.users_id = users.id
            ");
    }
}
