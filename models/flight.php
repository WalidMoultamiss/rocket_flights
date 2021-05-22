<?php
    class Flight{
        static public function getAll(){
            $statement = DB::connect()->prepare('SELECT * FROM flights');
            $statement->execute();
            return $statement->fetchAll();
            $statement->close();
            $statement = null;
            print_r($flight);

        }
        static public function addReservation($dataFlight){
            $statement = DB::connect()->prepare('SELECT * FROM flights WHERE id LIKE ?');
            $statement->execute(array('%'.$dataFlight['id'].'%'));
            return $result = $statement->fetchAll();
        }

        static public function add($dataFlight){
            $statement = DB::connect()->prepare("INSERT INTO flights SET fromf = ?,tof = ?,company = ?,depart = ?,timing = ?,price = ?,place = ?,retu = ?");
            $statement->execute([$dataFlight['fromf'],$dataFlight['tof'],$dataFlight['company'],$dataFlight['depart'],$dataFlight['timing'],$dataFlight['price'],$dataFlight['place'],$dataFlight['retu']]);
            $statement = null;
        }
        static public function update($dataFlight){
            $statement = DB::connect()->prepare("UPDATE flights SET fromf = ?,tof = ?,company = ?,depart = ?,timing = ?,price = ?,place = ?,retu = ? WHERE id =?");
            $statement->execute([$dataFlight['fromf'],$dataFlight['tof'],$dataFlight['company'],$dataFlight['depart'],$dataFlight['timing'],$dataFlight['price'],$dataFlight['place'],$dataFlight['retu'],$dataFlight['id']]);
            $statement = null;
        }

        static public function getFlight($data){
            $id = $data['id'];
            try {
                $query = 'SELECT * FROM flights WHERE id = :id';
                $statement = DB::connect()->prepare($query);
                $statement->execute(array(":id" => $id));
                $flight = $statement->fetch(PDO::FETCH_OBJ);
                return $flight;
            } catch (PDOException $ex) {
                echo 'error' . $ex->getMessage();
            }
        }
        
        static public function deleteFlight($data){
            $id = $data['id'];
            try{
                $query = 'DELETE FROM flights WHERE id=:id';
                $statement = DB::connect()->prepare($query);
                $statement->execute(array(":id" => $id));
                if($statement->execute()){
                    return 'ok';
                }
            }catch(PDOExeption $ex){
                echo 'error' . $ex->getMessage();
            }
        }
    }
?>