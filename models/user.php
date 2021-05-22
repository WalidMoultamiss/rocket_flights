<?php
    class User {
        static public function getAll(){
            $statement = DB::connect()->prepare('SELECT * FROM users');
            $statement->execute();
            return $statement->fetchAll();
            $statement->close();
            $statement = null;
        }

        static public function login($dataRegister){
        $Email = $dataRegister['email'];
        print_r($Email);
        try {
            $query = 'SELECT * FROM users WHERE email=:email';
            $stmt = DB::connect()->prepare($query);
            $stmt->execute(array(":email" => $Email));
            $user = $stmt->fetch(PDO::FETCH_OBJ);
            return $user;
        } catch (PDOException $ex) {
            echo 'error' . $ex->getMessage();
        }
    }


        static public function UsersController($dataRegister){
            $statement = DB::connect()->prepare('INSERT INTO users(full_name,email,userpassword,passport,dateofbirth) VALUES (?, ?, ?, ?, ?)');
            if($statement->execute([$dataRegister['full_name'],$dataRegister['email'],$dataRegister['password'],$dataRegister['passport'],$dataRegister['date']])){
                
            }else{
                return 'error';
            }
            
            $statement = null;
        }
        static public function deleteUser($data){
            $id = $data['id'];
            try{
                $query = 'DELETE FROM users WHERE id=:id';
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