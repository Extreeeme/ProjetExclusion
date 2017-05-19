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

    public function articleID($id)
    {
      return $this->query("SELECT articles.title,
                           articles.id,
                           articles.text,
                           DATE_FORMAT(articles.date, 'Le %d/%m/%Y à %H:%i:%s') as date_article_fr,
                           users.pseudo FROM $this->table
                           LEFT JOIN users ON articles.users_id = users.id
                           LEFT JOIN comments ON comments.id_article = articles.id
                            WHERE articles.id = ?",
                            array($id), true);
    }

    public function commentsID($id)
    {
      return $this->query("SELECT
                           comments.authors,
                           comments.texte,
                           DATE_FORMAT(comments.date, 'Le %d/%m/%Y à %H:%i:%s') as date_comment_fr
                           FROM articles
                           LEFT JOIN users ON articles.users_id = users.id
                           LEFT JOIN comments ON comments.id_article = articles.id
                            WHERE articles.id = ?",
                            array($id));
    }
}
