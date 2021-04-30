<?php
    class User {
        static public function getAll(){
            $statement = DB::connect()->prepare('SELECT * FROM users');
            $statement->execute();
            return $statement->fetchAll();
            $statement->close();
            $statement = null;
        }
        static public function UsersController($dataRegister){
            $statement = DB::connect()->prepare('INSERT INTO users(full_name,email,userpassword,passport,dateofbirth) VALUES (?, ?, ?, ?, ?)');
            if($statement->execute([$dataRegister['full_name'],$dataRegister['email'],$dataRegister['password'],$dataRegister['passport'],$dataRegister['date']])){
                return 'ok';
            }else{
                return 'error';
            }
            $statement->close();
            $statement-> null;
        }
        
    }
?>