<?php
    namespace App;
    use MF\Init\Bootstrap;

    class Route  extends Bootstrap{

        //Configurando quais minha aplicação possui
        protected function initRoutes(){
            $routes['home'] = array(
                'route' => '/',
                'controller' => 'indexController',
                'action' => 'index'
            );  
            $this -> setRoutes($routes);
        }

    }
?>