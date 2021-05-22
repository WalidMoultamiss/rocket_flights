<?php
    require_once './controllers/flightsController.php';
    $data = new FlightsController();
    $flights = $data->getAllFlights();
    print_r($flights)
?>
<link rel="stylesheet" href="./css/passenger.css">
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

  <!-- this is ⩔ the main page -->
  <section class="section2">
    <h1>Flight search</h1>
    <div class="container-fluid inputgroup w-100 d-flex gap-5">
      
    </div>
    <!-- section number 2 -->
