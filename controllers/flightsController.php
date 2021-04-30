<?php
    class FlightsController{
        public function getAllFlights(){
            $flights = Flight::getAll();
            return $flights;
        }
    }
?>