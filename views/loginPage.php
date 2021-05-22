<?php
if(isset($_POST['login'])){
    $loginUser = new UsersController();
    $login = $loginUser->auth();
}
?>

<link rel="stylesheet" href="./css/loginStyle.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark" style="background-color:black !important;">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
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
    <div class="sub-body">
        <div class="loginContainer">
            <h1>Login</h1>
            <form method="post">
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Email address</label>
                  <input required type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                  <label for="exampleInputPassword1" class="form-label">Password</label>
                  <input required type="password" name="password" class="form-control" id="exampleInputPassword1">
                </div>
                <div class="mb-3 form-check">
                  <input type="checkbox" class="form-check-input" id="exampleCheck1">
                  <label class="form-check-label" for="exampleCheck1">Remember me</label>
                </div>
                <button type="submit" name="login" class="btn btn-primary mb-6">Login</button>
              </form>
              <p>don't have an account?, <a href="createAccountPage">Regester here</a></p>
        </div>
    </div>