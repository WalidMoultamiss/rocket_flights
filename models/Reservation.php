<?php
    class Reservation{
        static public function addReservation($data){
            $statement = DB::connect()->prepare('INSERT INTO reservations(user_foreignkey,flight_foreignkey) VALUES (?, ?)');
            if($statement->execute([$data['userID'],$data['id']])){
            $query = 'SELECT * FROM flights WHERE id=:id';
            $stmt = DB::connect()->prepare($query);
            $stmt->execute(array(":id" =>$data['id']));
            $flight = $stmt->fetch(PDO::FETCH_OBJ);
            $newPlaces = $flight->place-1-$data['passenger'];
            $id = $flight->id;
            $result = Flight::updatePlace($newPlaces,$id);
                if($result==='ok'){
                    header('location:'.BASE_URL.'admin_page');
                }else{
                    echo $result;
                }
            print_r($newPlaces);
            }else{
                return 'error';
            }
            
            $statement = null;
        }
    }

?>