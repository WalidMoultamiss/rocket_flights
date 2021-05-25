<?php
class homeController{
    public function index($page){
        include('views/'.$page.'.php');
    }
}
class NotifMSG{
    static public function notif($msg,$who,$to){
        $qry = "INSERT INTO notifications(notif_message,fromMSG) VALUES ('$msg','$who')";
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