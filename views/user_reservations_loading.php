<?php
    $_SESSION['div']=NULL;
    $_SESSION['div']=$_POST['divContent'];
    $data = new ReservationController();
    $reservation = $data->getMyReservations();
    
?>


<link rel="stylesheet" href="./css/admin_page.css">
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
            <a class="nav-link" aria-current="page" href="home">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="user_reservations">Dashboard</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="searchFlights">Search flights</a>
          </li>
          
        </ul>
      </div>
    </div>
    <div style="width: 100%;display: flex;justify-content: flex-end;">
    
  </div>
    <div class="container-fluid d-flex justify-content-end ">
      <?php 
    if($_SESSION){
    echo('<div style="width:auto;margin-right:10px"><h4 style="color:white">hello ');
    echo $_SESSION['user']->full_name;
    echo('</h4></div>');
    }
    ?>
    <?php
    if($_SESSION){
    if($_SESSION['user']->role == '1'){
    echo ('<a href="admin_page" class="btn btn-outline-light px-4 " type="submit">📊 dashboard</a>');
    }
        echo ('<a href="logout" class="btn btn-outline-light px-4 " type="submit">logout</a>');
        
      }
      else{

        echo ('<a href="loginPage" class="btn btn-outline-light px-4 " type="submit">Login</a>');
      }?>
    </div>
  </nav>

    <section class="Dashboard_user">
        <style>
          @media print {
            body * {
              visibility:hidden;
            }
            .print-container, .print-container * {
                        visibility: visible;
            }
            .print-container{
              background-color: black;
                        color: white;
                        background-image: url(./views/images/ticket.svg);
                        width: calc(175px + 100px);
                        height: calc(300px + 170px);
                        background-size: cover;
            }
          }
        </style>
        <div class="container-xxl" style="display:flex;justify-content:center;align-items:center;">
          <div style="position: relative;">
          <img style="mix-blend-mode: lighten" src="./views/images/tumblr_ouo8yb59lg1s32c21o1_r2_500.gif" alt="tumblr_ouo8yb59lg1s32c21o1_r2_500.gif">
          <h3 id="loading" style="color:white; position: absolute; top: 46%; left: 38%;">Loading ...</h3>
        </div>
        </div>
    </section>
<script>
    
      
        var window = window.open("likan", "MsgWindow", "width=291,height=480");
        setTimeout(function(){ myWindow.close() }, 3000);

        setTimeout(function(){ 
          document.getElementById('loading').innerHTML=`<a href="user_reservations" id="loading" style="color:white; position: absolute; top: 46%; left: 38%; ">Go_back</a>`
          // window.location.replace('user_reservations'); 
        }, 1000);
        
      
</script>
</body>