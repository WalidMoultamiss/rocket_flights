<?php
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
        <div class="container-xxl">
          
                    <!-- loop to bring all flights -->
                    <?php foreach($reservation as $rsrv):?>
                    <div style="width: 275px;">
                    <div class="ticketBody print-container" style="position: relative;width: 275px;color:white" >
                      <img src="./views/images/ticket.svg" alt="" style="width: 275px;height: 495px;">
                      <div style="position: absolute; top: 0px;">
                      <div style="width: 100%;color:white;display: flex;justify-content: center;align-items: center; height: 80px;">
                        <div style="width: 60%; font-size: larger;font-weight: 800;text-align: center;">
                        <p class="flightImg"><?php echo $rsrv['company']?></p>
                        </div>
                      </div>
                        <!-- <p>id: <?php echo $rsrv['id']?></p> -->
                        
                        <div style="color:white; display:flex;width:100%;justify-content:space-around;border-bottom: 1px solid white;">
                            <div style="color:white; text-align: center;">
                                <h4 style="font-weight: 800;color:white;">
                                  <?php 
                                    $from = $rsrv['fromf'];
                                    echo(explode(':',$from,-1)['0']);
                                      ?>
                                </h4>
                                <p>from</p>
                            </div>
                            <div style="color:white; max-width: 20px !important;padding-top: 20px;height: 100%;display: flex;align-items: center;">
                              <img src="./views/images/rocket.svg" alt="rocket">
                            </div>
                            <div style="color:white; text-align: center;">
                                <h4 style="color:white; font-weight: 800;">
                                  <?php
                                    $to = $rsrv['tof'];
                                    echo(explode(':',$to,-1)['0']);
                                      ?>
                                </h4>
                                <p>to</p>
                            </div>
                        </div>

                        <div style="color:white;display:flex;width:80%;justify-content:space-between;margin-left: 10%;">
                            <div style="color:white;text-align: left; transform: scale(0.8);">
                                <p>boarding</p>
                                <h5>
                                    <?php 
                                        $depart = $rsrv['depart'];
                                        echo(explode(' ',$depart,2)['1']);
                                      ?>
                                </h5>
                            </div>
                            <div style="text-align: right;transform: scale(0.8);">
                              <p>arrival</p>
                              <h5>
                                  <?php 
                                      $retu = $rsrv['retu'];
                                      echo(explode(' ',$retu,2)['1']);
                                    ?>
                              </h5>
                            </div>
                    </div>

                    <div style="display:flex;width:80%;justify-content:space-between;margin-left: 10%;">
                      <div style="text-align: left; transform: scale(0.8);">
                          <p>full name</p>
                          <h5>
                              <?php 
                                  $name = $rsrv['full_name'];
                                  echo($name);
                                ?>
                          </h5>
                      </div>
                      <div style="text-align: right;transform: scale(0.8);max-width: 90px;">
                        <p>passport</p>
                        <h5 style="word-wrap: break-word;">
                          <?php 
                          $passport = $rsrv['passport'];
                          echo($passport);
                        ?>
                        </h5>
                      </div>
                    </div>
                        <p style="margin-left: 33%;">price: <?php echo $rsrv['price']?>$</p>
                        
                    </div>
                  </div>
                  <div style="width: 275px;transform: translateY(-117px); display: flex;justify-content: center;height: 22px;align-items: flex-end;">
                    <label for="print" type="submit-delete" id="<?php echo $rsrv['id']?>" class="btn btn-primary btn-sm btnprint"  onmousemove="getDiv(id)" onclick="getDiv2(id)">print</label>
                  
                    <form method="post" action="" class="btn-group" role="group" aria-label="Basic mixed styles example">
                          <button type="submit-delete" id="<?php echo $rsrv['id']?>"class="btn btn-danger btn-sm">Cancel</button>
                          <input type="hidden" name="id" value="<?php echo $rsrv['id']?>">
                  </form>
                </div>
                </div>
                    <?php endforeach;?>
                    <form style="display: none;" method="post" action="">
                      <input type="text" name="divContent" id="inputMe" value="lfdsjmlfjsdf">
                      <button type="submit" name="" id="print"></button>
                    </form>
                    <!-- loop to bring all flights -->
                </tbody>
            </table>
        </div>
    </section>


<script>
    document.querySelectorAll(".flightImg").forEach(e=>{
      var res = e.innerHTML
      if(res === "SpaceX"){
        e.innerHTML=`
        <img src="./views/images/SpaceX-Logo.wine.svg" alt="space X" width="100%" height="100%">
        `
      }
      if(res === "Virgin galactic"){
        e.innerHTML=`
        <img src="./views/images/virgin.svg" alt="space X" width="100%" height="100%">
        `
      }
      if(res === "Boeing"){
        e.innerHTML=`
        <img src="./views/images/Boeing_full_logo.svg" alt="space X" width="100%" height="100%">
        `
      }
      })
      let count=0;
      document.querySelectorAll('.btnprint').forEach(e=>{count++;e.id=`id`+count})
      function getDiv(id){
        console.log(document.getElementById(id));
        var thediv =document.getElementById(id).offsetParent.parentElement.innerHTML
        var theInput =document.getElementById('inputMe')
        console.log(theInput);
        theInput.value = thediv
      }
      function getDiv2(){
        var myWindow = window.open("likan", "MsgWindow", "width=291,height=480");
        setTimeout(function(){ myWindow.close() }, 3000);
      }
</script>
</body>