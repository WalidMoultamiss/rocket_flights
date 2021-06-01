<?php
    class Reservation{
        static public function addReservation($data){
            if(!$_SESSION['user']){
                Redirect::to('loginPage');
            }
            $statement = DB::connect()->prepare('INSERT INTO reservations(user_foreignkey,flight_foreignkey) VALUES (?, ?)');
            if($statement->execute([$data['userID'],$data['id']])){
            $query = 'SELECT * FROM flights WHERE id=:id';
            $stmt = DB::connect()->prepare($query);
            $stmt->execute(array(":id" =>$data['id']));
            $flight = $stmt->fetch(PDO::FETCH_OBJ);
            $seats = $data['passenger']+1;
            $newPlaces = $flight->place-1-$data['passenger'];
            $moneyGet=($data['passenger']+1)*$data['price'];

            $statement = DB::connect()->prepare("INSERT INTO dollarsMoney(dollarsMoney) VALUES ('$moneyGet')");
            $statement->execute();

            $msg = 'a flight has been reserved from the user who has the id:'.$data['userID'];
            $dataUser = $data['userID'];
            $to = 'admin';
            NotifMSG::notif($msg,$dataUser,$to);
            $id = $flight->id;
            $result = Flight::updatePlace($newPlaces,$id,$seats);
                if($result==='ok'){
                    header('location:'.BASE_URL.'searchFlights');
                }else{
                    echo $result;
                }
            
            }else{
                return 'error';
            }
            
            $statement = null;
        }

        static public function getAll(){
            $statement = DB::connect()->prepare("SELECT * FROM flights f,reservations r,users u WHERE f.id=r.flight_foreignkey AND u.id=r.user_foreignkey");
            $statement->execute();
            return $statement->fetchAll();
            $statement->close();
            $statement = null;
        }
        static public function MyReservations(){
            $thisID=$_SESSION['user']->id;
            $statement = DB::connect()->prepare("SELECT * FROM flights f,reservations r,users u WHERE f.id=r.flight_foreignkey AND u.id=r.user_foreignkey AND u.id='$thisID'");
            $statement->execute();
            return $statement->fetchAll();
            $statement->close();
            $statement = null;
        }
    }

?>