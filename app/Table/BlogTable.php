<?php
namespace App\Table;

use Core\Table\Table;

class BlogTable extends Table{

    protected $table = "articles";

    public function selectArticle()
    {
    	return $this->query(" SELECT articles.title,
         articles.id,
    	 articles.text,
    	 DATE_FORMAT(date, 'Le %d/%m/%Y à %H:%i:%s') as date_creation_fr,
    	 users.pseudo
    	 FROM articles
    	 LEFT JOIN users ON articles.users_id = users.id
         ORDER BY date_creation_fr DESC");
    }
}