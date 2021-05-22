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
            $email + $DATA['email'];
            try{
                $query = 'SELECT * FROM users WHERE email=:email';
                $statement = DB::connect()->prepare($query);
                $statement = execute(array(":email" => $email));
                if($statement->exeute()){
                    return 'ok';
                }
            }catch(PDOExeption $ex){
                echo 'error'. $ex->getMessage();
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
        public function auth(){
            if(isset($_POST['submit'])){
                $data['username'] = $_POST['username'];
                $result = User::login($data);
                if($result->username === $_POST['username'] && password_verify($_POST['password'],$result->password)){
    
                    $_SESSION['logged'] = true;
                    $_SESSION['username'] = $result->username;
                    Redirect::to('home');
    
                }else{
                    Session::set('error','Pseudo ou mot de passe est incorrect');
                    Redirect::to('login');
                }
            }
        }
    }
?>