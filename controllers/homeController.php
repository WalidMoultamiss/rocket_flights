<?php
class homeController{
    public function index($page){
        include('views/'.$page.'.php');
        echo $page;
    }
}
class NotifMSG{
    static public function notif($msg,$who,$to){
        $qry = "INSERT INTO notifications(notif_message,fromMSG,cleared) VALUES ('$msg','$who','0')";
        $statement = DB::connect()->prepare($qry);
        $statement->execute();
    }
    static public function getMyNotufication(){
        $userId = $_SESSION['user']->id;
        $qry = "SELECT * from notifications where cleared=?";
        $statement = DB::connect()->prepare($qry);
        $statement->execute(['0']);
        return $statement->fetchAll();
    }
    static public function clear(){
        $userId = $_SESSION['user']->id;
        $qry = "UPDATE notifications SET cleared='1' where cleared='0'";
        $statement = DB::connect()->prepare($qry);
        $statement->execute();
    }
    static public function getALL(){
        $qry = "SELECT * from notifications";
        $statement = DB::connect()->prepare($qry);
        $statement->execute();
        return $statement->fetchAll();
    }
}
?>