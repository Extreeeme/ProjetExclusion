<?php

namespace App\Controller;

use Core\Controller\Controller;

class CampagnesController extends AppController{

    public function __construct(){
        parent::__construct();
        $this->loadModel('Campagne');
      

    }

    public function index(){
        $campagne = $this->Campagne->all();
        $this->render('campagnes.index', compact('campagne'));
    }

    

    public function category(){
        $categorie = $this->Category->find($_GET['id']);
        if($categorie === false){
            $this->notFound();
        }
        $articles = $this->Post->lastByCategory($_GET['id']);
        $categories = $this->Category->all();
        $this->render('posts.category', compact('articles', 'categories', 'categorie'));
    }

    public function show(){
        $article = $this->Post->findWithCategory($_GET['id']);
        $this->render('posts.show', compact('article'));
    }

}