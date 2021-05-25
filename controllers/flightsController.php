<?php
    class FlightsController {
        public function getAllFlights(){
            $flights = Flight::getAll();
            return $flights;
        }
         public function addFlight(){

            $dataFlight = array(
                    'fromf'=> $_POST['fromf'],
                    'tof'=> $_POST['tof'],
                    'company'=> $_POST['company'],
                    'depart'=> $_POST['depart'],
                    'retu'=> $_POST['retu'],
                    'timing'=> $_POST['timing'],
                    'price'=> $_POST['price'],
                    'place'=> $_POST['place']
                );
                
                $result = Flight::add($dataFlight);
                if($result==='ok'){
                    header('location:'.BASE_URL.'admin_page');
                }else{
                    echo $result;
                }
            
        }
         public function selectFlight(){
             if(isset($_POST['search'])){
                    $from = $_POST['from'];
                    $to = $_POST['to'];
                    $depart =$_POST['depart'];
                    $pa = $_POST['pa'];
                    $result = Flight::search($from,$to,$depart,$pa);
                    return $result;
            }
        }
         public function updateFlight(){

            $dataFlight = array(
                    'id' => $_POST['id'],
                    'fromf'=> $_POST['fromf'],
                    'tof'=> $_POST['tof'],
                    'company'=> $_POST['company'],
                    'depart'=> $_POST['depart'],
                    'retu'=> $_POST['retu'],
                    'timing'=> $_POST['timing'],
                    'price'=> $_POST['price'],
                    'place'=> $_POST['place']
                );
                
                $result = Flight::update($dataFlight);
                if($result==='ok'){
                    header('location:'.BASE_URL.'admin_page');
                }else{
                    echo $result;
                }
            
        }
        public function deleteFlight(){
            if(isset($_POST['id'])){
                $data['id']=$_POST['id'];
                $result = Flight::deleteFlight($data);
                if($result==='ok'){
                    Redirect::to('admin_page_flights');
                }else{
                    echo $result;
                }
            }
        }
        public function lacaisse(){
            $monneeyy = Flight::getCaisse();
            print_r($monneeyy);
            return($monneeyy);
        }

        // public function getOneFlight(){
        //     if(isset($_POST['id'])){
        //         $data = array(
        //             'id' => $_POST['id']
        //         );
        //         $flight = Flight::getFlight($data);
        //     return $flight;
        //     }
        // }


        public function addReservation(){
            if(isset($_POST['submit'])){
                $dataFlight = array(
                    'id'=> $_POST['id'],
                    'passengers'=> $_POST['passengers']
                );
                $result = Flight::addReservation($dataFlight);
                return $result;
                Redirect::to('passengers');
            }
        }
    }
?>
