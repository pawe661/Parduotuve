<?php

namespace Controllers;

// use Crud\InitDb;

    class IndexController {

    private $router;
        
    private $db;
        
        public function __construct() {
        
        
            $this->router = new \AltoRouter();
                
            //adresa pasikeisti pagal savo direktorija
            $this->router->setBasePath('/Parduotuve');
        
            $this->router->map('GET', '/', function() {
                // $kintamasis = $this->returnTest();
                $pagetitle  = 'Titulinis';
                require __DIR__ . '/../views/home.php';
                });
            
    }
}