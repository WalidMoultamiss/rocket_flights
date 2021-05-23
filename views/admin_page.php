
<link rel="stylesheet" href="./css/admin_page.css">
</head>

<?php
require_once './controllers/flightsController.php';
if(isset($_POST['tof'])){
    $newUser = new FlightsController();
    $newUser->addFlight();
}

?>

<?php
$data = new UsersController();
$users = $data->getAllUsers();

if($_SESSION['user']->role == '1'){
    
}
else{
    
    Redirect::to('home'); 

}

?>

<?php
    require './views/includes/navbar_admin.php';
?>

<body>
    
    <section class="create_flight">

        <form class="container-xxl form_container bg-black" style="max-width: 500px !important; " method="post">

            <h1>Create flight</h1>
            <div class="input-group w-100 ">
                <div class="input-group mb-3 inputStyle px-5 " onmouseover="getAirPorts()">
                    <span class="input-group-text" id="basic-addon1">🛫</span>
                    <select class="form-select" onfocusout="sufPicker(this)" name="fromf" value=""
                        id="inputGroupSelect01">
                        <option value="" selected disabled>from</option>
                    </select>
                </div>
                <div class="input-group mb-3 inputStyle px-5" onmouseover="getAirPorts()">
                    <span class="input-group-text" id="basic-addon1">🛬</span>
                    <select class="form-select" onfocusout="sufPicker(this)" name="tof" id="inputGroupSelect02">
                        <option value="" selected disabled>to</option>
                    </select>
                </div>
                <div class="input-group mb-3 inputStyle px-5">
                    <span class="input-group-text" id="basic-addon1">🚀</span>
                    <select class="form-select" name="company" onfocusout="sufPicker(this)" id="inputGroupSelect02">
                        <option value="" selected disabled>Flight company</option>
                        <option value="SpaceX">SpaceX</option>
                        <option value="Virgin galactic">Virgin galactic</option>
                        <option value="Boeing">Boeing</option>
                        <option value="Blue Origin">Blue Origin</option>
                    </select>
                </div>
                <div class="container">
                    <label for="datetime-local-Depart">Depart</label>
                    <input type="datetime-local" name="depart" id="datetime-local-Depart">
                </div>
                <div class="container">
                    <label for="datetime-local-Return">Return</label>
                    <input type="datetime-local" name="retu" id="datetime-local-Return">
                    <input type="text" name="timing"  class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-lg">
                </div>
                <div class="container">
                    <span class="flight_time"></span>
                </div>
                <div class="container">
                    <div class="input-group">
                        <span class="input-group-text" id="basic-addon1">💲</span>
                        <input type="number" class="form-control" name="price" placeholder="Price" aria-label="Username"
                            aria-describedby="basic-addon1">
                            <span class="input-group-text" id="basic-addon1">💺</span>
                        <input type="number" class="form-control"  name="place" placeholder="number of seats" aria-label="Username"
                            aria-describedby="basic-addon1">
                    </div>
                </div>
            </div>

            <button type="submit" class="btn btn-primary">Create flight</button>

        </form>
    </section>


    <script src="./views/JS/airports.js"></script>
    <script src="./views/JS/timing.js"></script>

</body>