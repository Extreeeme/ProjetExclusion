<?php

namespace App\Controller;

use Core\Controller\Controller;
use Core\HTML\BootstrapForm;

class PostsController extends AppController{

    public function __construct(){
        parent::__construct();
        //$this->loadModel('Post');
        //$this->loadModel('Category');
        $this->loadModel('Testimonie');
        $this->loadModel('Blog');
        $this->loadModel('Comment');

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
        if(isset($_POST["author"], $_POST["comment"])){
            $comment= $this->Comment->addComment($_POST["author"], $_POST["comment"], $_POST["id_article"]);
            var_dump($comment);
        }
        if (isset($_GET['page'])) {
            $page = $_GET['page'];
        }else{
            $page = 1;
        }
        $pagination = $this->Blog->pagination($page);
        $nbpage = array_pop($pagination);
        $form = new BootstrapForm();
        $this->render('posts.blog', compact('pagination', 'nbpage', 'form'));
    }
}
