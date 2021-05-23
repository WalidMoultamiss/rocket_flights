<?php
class ReservationController{
public function addReservation(){
    $data = array(
            'id'=> $_POST['id'],
            'userID'=> $_POST['userID'],
            'passenger'=>$_POST['passengers']
        );
        $_SESSION['passenger'] = $_POST['passengers'];
        $result = Reservation::addReservation($data);
        if($_SESSION['passenger']!=0){
            Redirect::to('passengerPage');
        }
        if($result==='ok'){
            header('location:'.BASE_URL.'searchFlights');
        }else{
            echo $result;
        }
    
}
}
?>