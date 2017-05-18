<?php
namespace App\Table;

use Core\Table\Table;

class CampagneTable extends Table{

    public function pictureSelect($status = 1){
        return $this->query("
            SELECT campagnes.img, campagnes.id, publishes.publishstatus
            FROM campagnes
            LEFT JOIN publishes ON campagne_publishStatus = publishes.publishstatus
            WHERE publishes.publishstatus = ?", [$status]);
    }
}