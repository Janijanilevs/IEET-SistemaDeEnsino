<?php 

namespace IeetSite\Controller;

use IeetSite\Core\Controller;

class HomeController extends Controller{
    public function index(){
        $this->view("inicial");
    }
}
