
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
                    <select class="form-select" name="company" onmouseout="flightImgf()" onfocusout="sufPicker(this)" id="inputGroupSelect02">
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
        <div style="width: 275px;">
                    <div class="ticketBody print-container" style="position: relative;width: 275px;color:white" >
                      <img src="./views/images/ticket.svg" alt="" style="width: 275px;height: 495px;">
                      <div style="position: absolute; width:100%; top: 0px;">
                      <div style="width: 100%;color:white;display: flex;justify-content: center;align-items: center; height: 80px;">
                        <div style="width: 60%; font-size: larger;font-weight: 800;text-align: center;">
                        <p class="flightImg">SpaceX</p>
                        </div>
                      </div>
                        <div style="color:white; display:flex;width:100%;justify-content:space-around;border-bottom: 1px solid white;">
                            <div style="color:white; text-align: center;">
                                <h4 id="from" style="font-weight: 800;color:white;">
                                  ART
                                </h4>
                                <p>from</p>
                            </div>
                            <div style="color:white; max-width: 20px !important;padding-top: 20px;height: 100%;display: flex;align-items: center;">
                              <img src="./views/images/rocket.svg" alt="rocket">
                            </div>
                            <div style="color:white; text-align: center;">
                                <h4 id="to" style="color:white; font-weight: 800;">
                                  SCY
                                </h4>
                                <p>to</p>
                            </div>
                        </div>

                        <div style="color:white;display:flex;width:80%;justify-content:space-between;margin-left: 10%;">
                            <div style="color:white;text-align: left; transform: scale(0.8);">
                                <p>boarding</p>
                                <h5 id="boarding">
                                03:30:00
                                </h5>
                            </div>
                            <div style="text-align: right;transform: scale(0.8);">
                              <p>arrival</p>
                              <h5 id="arrival">
                              03:50:00
                              </h5>
                            </div>
                    </div>

                    <div style="display:flex;width:80%;justify-content:space-between;margin-left: 10%;">
                      <div style="text-align: left; transform: scale(0.8);">
                          <p>full name</p>
                          <h5>
                              full name
                          </h5>
                      </div>
                      <div style="text-align: right;transform: scale(0.8);max-width: 90px;">
                        <p>passport</p>
                        <h5 style="word-wrap: break-word;">
                          P4SS90R1N0M
                        </h5>
                      </div>
                    </div>
                        <p id="price" style="margin-left: 33%;">price: 255$</p>
                        
                    </div>
                  </div>
                  <div style="width: 275px;transform: translateY(-117px); display: flex;justify-content: center;height: 22px;align-items: flex-end;">
                </div>
                </div>
    </section>


    <script src="./views/JS/airports.js"></script>
    <script src="./views/JS/timing.js"></script>
    <script>
        var flightImg = document.querySelector('.flightImg').innerText;
        var from = document.querySelector('#from').innerHTML;
        var to = document.querySelector('#to').innerHTML;
        var boarding = document.querySelector('#boarding').innerHTML;
        var arrival = document.querySelector('#arrival').innerHTML;
        var price = document.querySelector('#price').innerHTML;

        var company = document.querySelector("#inputGroupSelect02").value;
        var fromf = document.getElementsByName('fromf').value;
        var tof = document.getElementsByName('tof').value;
        var depart = document.getElementsByName('depart').value;
        var retu = document.getElementsByName('retu').value;
        var pricing = document.getElementsByName('price').value;

        function flightImgf() {
            flightImg = company
            console.log("dssdf");
        }

    </script>
</body>