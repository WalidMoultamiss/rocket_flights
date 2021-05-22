<?php
// print($_POST);
    if(isset($_POST['id'])){
        $delete = new FlightsController();
        $delete->deleteFlight();
    }
?>