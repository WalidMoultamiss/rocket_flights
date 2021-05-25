<?php
if(isset($_POST['clear'])){
    NotifMSG::clear();
}
$money = new FlightsController();
$moneyGET = $money->lacaisse();

$notification = NotifMSG::getMyNotufication();

?>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="<?php echo BASE_URL;?>">
                <img src="./views/images/logo.svg" alt="" width="130" height="24">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Features</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Pricing</a>
                    </li>
                </ul>
            </div>
<div>
    <h5 style="color:white;margin-top3px; margin-right:20px">hello <?php echo $_SESSION['user']->full_name?></h5>
</div>
<div>
<h5  style="color:grey;margin-top3px; margin-right:20px">finance: <?php print_r($moneyGET['count'])?>$</h5>
</div>
            <div class="btn-group">
                <button type="button" class="btn btn-secondary dropdown-toggle" data-bs-toggle="dropdown"
                    aria-expanded="false">
                    🔔(<?php echo count($notification)?>)
                </button>
                
                <ul style="max-height:500px;overflow-y:scroll;" class="dropdown-menu dropdown-menu-end dropdown-menu-dark">
                    <div style="width: 100%; display: flex;justify-content: flex-end;padding-right: 10px;">
                        <form method="post">
                            <input type='submit' name="clear" value="clear" class="btn btn-danger btn-sm" style="margin-left:10px" >
                        </form>
                </div>
                <?php foreach ($notification as $n){ ?>
                    <li><a class="dropdown-item" href="" type="button"><?php echo $n['notif_message']?></a></li>
                    <?php }?>
                </ul>
                
            </div>
            <div class="btn-group">
                <button type="button" class="btn btn-secondary dropdown-toggle" data-bs-toggle="dropdown"
                    aria-expanded="false">
                    Menu
                </button>
                
                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-dark">
                    <li><a class="dropdown-item" href="admin_page_users" type="button">User's dashboard</a></li>
                    <li><a class="dropdown-item" href="admin_page_flights" type="button">Flight's dashboard</a></li>
                    <li><a class="dropdown-item" href="admin_page" type="button">New flight</a></li>
                    <li><a class="dropdown-item" href="admin_page_reservations" type="button">Reservations</a></li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>
                    <li><a href="logout" class="dropdown-item" type="button">Log out</a></li>
                </ul>
            </div>
        </div>
    </nav>