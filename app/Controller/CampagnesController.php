<?php

namespace App\Controller;

use Core\Zip\Zip;
use Core\Controller\Controller;

class CampagnesController extends AppController{

    public function __construct(){
        parent::__construct();
        $this->loadModel('Campagne');
      

    }

    public function index(){
        $campagne = $this->Campagne->all();
        Zip::zipDir('img/campagne', 'img/tmp/campagne.zip');
        $this->render('campagnes.index', compact('campagne'));
        
        
    }


}