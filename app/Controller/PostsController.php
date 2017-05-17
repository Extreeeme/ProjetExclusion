<?php

namespace App\Controller;

use Core\Controller\Controller;

class PostsController extends AppController{

    public function __construct(){
        parent::__construct();
        //$this->loadModel('Post');
        //$this->loadModel('Category');
        $this->loadModel('Testimonie');
        $this->loadModel('Blog');

    }

    public function index(){
        //$posts = $this->Post->last();
        //$categories = $this->Category->all();
        $this->render('posts.index'); //compact('posts', 'categories'));
    }

    public function allTestimonies()
    {
      $testimonies = $this->Testimonie->All();
      $this->render('posts.testimonies', compact('testimonies'));
    }
    public function FormTestimony()
    {
      $this->render('posts.formTestimonies');
    }

    public function postTestimony()
    {
      $testimony = htmlspecialchars($_POST['testimony']);
      $this->Testimonie->Post($testimony, $_POST['user']);
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

    public function blog()
    {
        $blog = $this->Blog->selectArticle();
        $pagination = $this->Blog->pagination();
        $this->render('posts.blog', compact('blog', 'pagination'));
    }

}
