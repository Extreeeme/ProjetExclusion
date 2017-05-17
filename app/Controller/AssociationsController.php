<?php
namespace App\Controller;

use Core\Controller\Controller;
use Core\HTML\BootstrapForm;

class AssociationsController extends AppController{

    public function __construct(){
        parent::__construct();
        $this->loadModel('Association');

    }

    public function index(){
    	if (isset($_POST['name'] , $_FILES['img'] , $_POST['description'])) {
    		$assoces= $this->Association->insertion($_POST['name'] , $_FILES['img']['name'] , $_POST['description']);
    		$dir = ROOT ."/public/img/";
    		$name= $_FILES['img']['name'];
    		$taille_maxi = 100000;
		    $taille = filesize($_FILES['img']['tmp_name']);
		    $extensions = array('.png', '.gif', '.jpg', '.jpeg');
		    $extension = strrchr($_FILES['img']['name'], '.'); 
		    //Début des vérifications de sécurité...
			    if(in_array($extension, $extensions)) //Si l'extension n'est pas dans le tableau
			    {
				    if($taille<$taille_maxi){
				         if (file_exists($_FILES['img']['tmp_name'])) {
						move_uploaded_file($_FILES['img']['tmp_name'], "$dir/$name");
					}
				}
			}

    	}
				        $associations = $this->Association->all();
				        $form= new BootstrapForm();
				        $this->render('associations.index', compact('associations','form'));
    }
}