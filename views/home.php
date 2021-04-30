<link rel="stylesheet" href="./css/style.css">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="<?php echo BASE_URL;?>">
            <img src="./views/images/logo.svg" alt="" width="130" height="24">
          </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
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
    </div>
    <div class="container-fluid d-flex justify-content-end ">
        <a href="loginPage" class="btn btn-outline-light px-4 " type="submit">Login</a>
    </div>
  </nav>

<section class="home-body">
    <div class="home-title">
        <h1>
            Sub <br>
            Orbital<br>
            Travel
        </h1>
    </div>
    <div class="home-right">
        <h2>
            Up to 20x faster than <br>aeroplane flights
        </h2>


    </div>
    <div class="downLeft">
        <div class="d-flex card-left-down flex-row align-items-center mb-6">
            <a class="btn btn-primary" href="#" role="button">35 min</a>
            <div class="d-flex flex-column align-content-center mb-6">
                <div class="p-2 bd-highlight text-light">LONDON - HONKONG</div>
                <div class="p-1 bd-highlight text-light">from $349</div>
            </div>
        </div>
        <div class="d-flex card-left-down flex-row align-items-center mb-6">
            <a class="btn btn-primary" href="#" role="button">35 min</a>
            <div class="d-flex flex-column align-content-center mb-6">
                <div class="p-2 bd-highlight text-light">CASABLANCA - DUBAI</div>
                <div class="p-1 bd-highlight text-light">from $249</div>
            </div>
        </div>
    </div>
    <div class="searchMe">
        <input type="text" class="form-control bg-transparent text-light" placeholder="⨀   Keiv" aria-label="Username" aria-describedby="basic-addon1">
        <input type="text" class="form-control bg-transparent text-light" placeholder="⨀   San francisco" aria-label="Username" aria-describedby="basic-addon1">
        <a class="btn btn-primary" href="searchFlights" role="button">search</a>
        <img class="trace" src="./views/images/searchtrace.svg" alt="search">
    </div>
</section>