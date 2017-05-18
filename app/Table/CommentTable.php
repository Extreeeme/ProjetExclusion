<?php
namespace App\Table;

use Core\Table\Table;

class CommentTable extends Table{

    protected $table = "comment";

    public function addComment($author, $text, $id_article){
        return $this->query("INSERT INTO comments SET authors=?, texte=?, id_article=?",[$author, $text, $id_article]);
    }
}