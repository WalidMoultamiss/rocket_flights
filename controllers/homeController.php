<?php
class homeController{
    public function index($page){
        include('views/'.$page.'.php');
    }
}
?>