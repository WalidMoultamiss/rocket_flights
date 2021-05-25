<?php
class ReservationController{
public function addReservation(){
    $data = array(
            'id'=> $_POST['id'],
            'userID'=> $_POST['userID'],
            'passenger'=>$_POST['passengers'],
            'price'=>$_POST['price']
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
public function getAllReservations(){
    $reservation = Reservation::getAll();
    return $reservation;
}
public function getMyReservations(){
    $reservation = Reservation::MyReservations();
    return $reservation;
}
}
?>