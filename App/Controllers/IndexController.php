<?php 

    namespace App\Controllers;

    //Os recurssos do miniframework
    use MF\Controller\Action;
    use MF\Model\Container;
    use stdClass;

    class IndexController extends Action{

        public function __construct(){
            $this -> view = new stdClass();
        }

        public function index() {

            $this -> render('index');
        }
        
    }

?>