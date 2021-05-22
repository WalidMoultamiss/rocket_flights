<?php
    require_once './controllers/flightsController.php';
    $data = new FlightsController();
    $flights = $data->getAllFlights();
    if(isset($_POST['submit'])){
      Redirect::to('passengers');
      $data = new FlightsController();
      $newUser = $data->addReservation();
  }
?>
<link rel="stylesheet" href="./css/searchFlights.css">
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="home">
        <img src="./views/images/logo.svg" alt="" width="130" height="24">
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="home">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Features</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Pricing</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <?php
  require_once './views/includes/svg.php';
  ?>
  <!-- this is ⩔ the main page -->
  <section class="section2">
    <h1>Flight search</h1>
    <div class="container-fluid inputgroup w-100 d-flex gap-5">
      <div class="input-group mb-3 ">
        <select class="form-select selectStyle"  name="from" value="" id="inputGroupSelect">
          <option value="0" selected disabled>Travelers</option>
          <option value="0">0 passenger</option>
          <option value="1">1 passenger</option>
          <option value="2">2 passenger</option>
          <option value="3">3 passenger</option>
          <option value="4">4 passenger</option>
        </select>
      </div>
      <div class="input-group mb-3 " onmouseover="getAirPorts()">
        <select class="form-select selectStyle" name="from" value="" id="inputGroupSelect01">
          <option value="" selected disabled>from</option>
        </select>
      </div>
      <div class="input-group mb-3 " onmouseover="getAirPorts()">
        <select class="form-select selectStyle" name="to" id="inputGroupSelect02">
          <option value="" selected disabled>to</option>
        </select>
      </div>
      <div class="input-group mb-3 inputDiv">
        <span class="input-group-text inputspan" id="basic-addon1">Depart </span>
        <input class="form-control inputgroup" type="date" value="2021-08-19" id="example-date-input">
      </div>
      <div class="input-group mb-3 inputDiv">
        <span class="input-group-text inputspan" id="basic-addon1">Return </span>
        <input class="form-control inputgroup" type="date" value="2021-08-19" id="example-date-input">
      </div>
      <button type="submit" class="btn btnSearch btn-primary w-75 h-100">Search flight</button>
    </div>
    <!-- section number 2 -->



    <section class="section3">
      
      <?php foreach($flights as $flight):?>
      <label onmouseover="passenger(this)" class="flightContainer" for="inputID">
        <div class="flightHolder">
          <div class="flightDiv" title="company">
            <input style="display:none" type="text" disabled name="company" value="<?php echo $flight['company']?>">
            <?php echo $flight['company']?>
          </div>
          <div class="flightDiv" title="from">
            <?php echo $flight['fromf']?>
          </div>
          <div style="max-width: 20px !important;height: 100%;display: flex;align-items: center;">
            <img src="./views/images/rocket.svg" alt="rocket">
          </div>
          <div class="flightDiv" title="to">
            <?php echo $flight['tof']?>
          </div>
          <div class="flightDiv" title="depart">
            <?php echo $flight['depart']?>
          </div>
          <div class="flightDiv" title="return">
            <?php echo $flight['retu']?>
          </div>
          <div class="flightDiv" title="timing">
            <?php echo $flight['timing']?>
          </div>
          <div class="flightDiv" title="places">
            <?php echo $flight['place']?> places
          </div>
          <div class="flightDiv" title="Price">
            <?php echo $flight['price']?> $
          </div>
        </div>
      </label>
      <form method="post" style="display: none;">
        <input type="text" name="passengers" value="0" class="passengers">
        <input type="text" name="id" value="<?php echo $flight['id']?>">
        <button class="buttonForm"  type="submit" ></button>
      </form>
      <?php endforeach;?>
    </section>

  <script>
    var textOnMouse = document.querySelector("#textOnMouse")
    var Paths = document.querySelectorAll("path")
    Paths.forEach(function (Path) {
      Path.onmouseover = function (event) {
        Path.setAttribute('style', 'stroke: #0d6efd');
        var t = [...Paths].indexOf(Path)
        var onMouseMove = (e) => {
          textOnMouse.style.left = e.pageX + 20 + 'px';
          textOnMouse.style.top = e.pageY + 20 + 'px';
        }
        document.addEventListener('mousemove', onMouseMove);

        textOnMouse.style.color = "white"
        if (t == 825) {
          textOnMouse.innerHTML = "USA"
          console.log("USA");
        }
        if (t == 2159 || t == 1260) {
          textOnMouse.innerHTML = "Morocco"
          console.log("Morocco");
        }
        if (t == 385) {
          textOnMouse.innerHTML = "Russia"
          console.log("Russia");
        }
        if (t == 14) {
          textOnMouse.innerHTML = "France"
          console.log("France");
        }
        if (t == 1919) {
          textOnMouse.innerHTML = "Spain"
          console.log("Spain");
        }
        if (t == 1374) {
          textOnMouse.innerHTML = "Canada"
          console.log("Canada");
        }
        if (t == 376) {
          textOnMouse.innerHTML = "Italy"
          console.log("Italy");
        }
        if (t == 277) {
          textOnMouse.innerHTML = "China"
          console.log("China");
        }
      }
      Path.onmouseout = function () {
        Path.setAttribute('style', 'stroke: black', 'fill: black');
        textOnMouse.innerHTML = ""
      }
      Path.onclick = function () {
        var t = [...Paths].indexOf(Path)
        console.log(t);
      }
    })
  </script>
  

  <script src="./views/JS/airports.js"></script>
  <script src="./views/JS/searchFlight.js"></script>