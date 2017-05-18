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
            SELECT testimonies.date, testimonies.text, users.pseudo
            FROM testimonies
            LEFT JOIN users ON testimonies.users_id = users.id
            WHERE isValid = 1
            ");
    }

    public function Post($testimony, $id)
    {
      $this->db->prepare("INSERT INTO testimonies
                        SET date = NOW(), text = ?, users_id = ?",
                        array($testimony, $id));
      header('Location: index.php?p=posts.allTestimonies');
      exit();
    }

    public function AllNotValid()
    {
      return $this->query("
          SELECT testimonies.id, testimonies.date, testimonies.text, users.pseudo
          FROM testimonies
          LEFT JOIN users ON testimonies.users_id = users.id
          WHERE isValid = 0
          ");
    }

    public function valid($id)
    {
      $this->db->prepare("UPDATE testimonies
                          SET isValid = 1
                          WHERE id = ?",
                          array($id));
      header('Location: index.php?p=admin.posts.adminTestimony');
      exit();
    }
}
