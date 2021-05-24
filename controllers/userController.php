<?php
    class UsersController{
        public function getAllUsers(){
            $users = User::getAll();
            return $users;
            }



        public function addUser(){
            $dataRegister = array(
                    'full_name'=> $_POST['fullname'],
                    'email'=> $_POST['email'],
                    'password'=> $_POST['userpassword'],
                    'passport'=> $_POST['passport'],
                    'date'=> $_POST['dateofbirth'],
                );
                $result = User::UsersController($dataRegister);
                if($result==='ok'){
                    header('location:'.BASE_URL.'loginPage');
                }else{
                    echo $result;
                }
            }
        public function addPassenger(){
            $firstname=$_POST['firstname'];
            $lastname=$_POST['lastname'];
            $passport=$_POST['passport'];
            $dateofbirth=$_POST['dateofbirth'];

                for($i=0;$i<count($firstname);$i++)
                {
                    $statement = DB::connect()->prepare("INSERT INTO passengers (firstname,lastname,passport,dateofbirth) values('$firstname[$i]','$lastname[$i]','$passport[$i]','$dateofbirth[$i]')");
                    if($statement->execute()){
                        header('location:'.BASE_URL.'loginPage');
                    }
                    else{
                        echo ('error');
                    }
                    $statement=null;
                }
            }

            // delete user
            public function deleteUser(){
                if(isset($_POST['id'])){
                    $data['id']=$_POST['id'];
                    $result = User::deleteUser($data);
                    if($result==='ok'){
                        
                        Redirect::to('admin_page_users');
                    }else{
                        echo $result;
                    }
                }
            }

            public static function logout(){
                session_destroy();
            }
            

            public function auth(){
                if(isset($_POST['login'])){
                    $dataRegister['email'] = $_POST['email'];
                    $dataRegister['password'] = $_POST['password'];

                    $result = User::login($dataRegister);

                    if($_POST['password'] == $result->userpassword){
        
                        $_SESSION['logged'] = true;
                        $_SESSION['user'] = $result;
                        Redirect::to('admin_page');
        
                    }else{
                        Session::set('error','email or password is incorrect');
                        Redirect::to('loginPage');
                    }
                }
            }
    }
