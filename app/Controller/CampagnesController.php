<?php

namespace App\Controller;

use Core\Controller\Controller;

class CampagnesController extends AppController{

    public function __construct(){
        parent::__construct();
        $this->loadModel('Campagne');
      

    }

    public function index(){
        $campagne = $this->Campagne->pictureSelect();
        $this->render('campagnes.index', compact('campagne'));
    }


}