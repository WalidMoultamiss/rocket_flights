<?php
    class flight {
        static public function getAll(){
            $statement = DB::connect()->prepare('SELECT * FROM flights');
            $statement->execute();
            return $statement->fetchAll();
            $statement->close();
            $statement = null;
        }
    }
?>