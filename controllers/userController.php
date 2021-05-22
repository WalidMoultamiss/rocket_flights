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
    }
