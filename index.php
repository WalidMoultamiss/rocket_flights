<?php
require_once './views/includes/header.php';
require_once './autoload.php';
require_once './controllers/homeController.php';
require_once './controllers/userController.php';
require_once './controllers/flightsController.php';
require_once './controllers/reservationController.php';


$home = new homeController();
$pages = ['likan','add_Flight','searchFlightsResult','user_reservations','admin_page_reservations','passengerPage','logout','passengers','admin_page_flights','admin_page','admin_page_users','add_User','delete_Flight','delete_User','home','update_Flight','update_User','loginPage','createAccountPage','searchFlights'];
if(isset($_GET['page'])){
    if(in_array($_GET['page'],$pages)){
        $page = $_GET['page'];
        $home->index($page);
    }else{
        include('views/includes/404.php');
    }
}else{
    $home->index('home');
}
?>
<?php
require_once './views/includes/footer.php';
?>