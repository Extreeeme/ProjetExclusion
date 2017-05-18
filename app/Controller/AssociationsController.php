<?php
namespace App\Controller;

use Core\Controller\Controller;
use Core\HTML\BootstrapForm;

class AssociationsController extends AppController{

    public function __construct(){
        parent::__construct();
        $this->loadModel('Association');

    }
    
    public function help()
    {
      	if (isset($_POST['name'] , $_FILES['img'] , $_POST['description'])) {
    		$assoces = $this->Association->uploadImg($_POST['name'], $_FILES['img'], $_POST['description']);
		}

		$associations = $this->Association->all();
		$form= new BootstrapForm();
    	$this->render('associations.help', compact('associations','form'));
    }
}
