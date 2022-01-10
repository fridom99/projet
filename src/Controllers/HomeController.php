<?php 

namespace App\Controllers;

use App\Controllers\Controller;

class HomeController extends Controller {

    public function index() {
        // require ROOT . '/src/Views/home/homepage.php';
        $this->render('home/homepage');
    }

    public function conditionsUtilisation(){
        $this->render('home/conditions');
    }

    public function faq(){
        $this->render('home/faq');
    }

    public function contact(){
        $this->render('home/contact');
    }

}