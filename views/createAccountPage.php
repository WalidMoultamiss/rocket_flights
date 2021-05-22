<?php
if(isset($_POST['submit'])){
    $newUser = new UsersController();
    $newUser->addUser();
}
?>


<link rel="stylesheet" href="./css/createAccountStyle.css">
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
        <div onmouseover="hoverMe(this)" onmouseout="hoverOut(this)" class="loginContainer">
            <h1>Register</h1>
            <form method="post">
                <div class="mb-3">
                    <label for="FullName" class="form-label">Full name</label>
                    <input required type="text" name="fullname" class="form-control" id="FullName" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email address</label>
                    <input required type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="userpassword" class="form-label">Password</label>
                    <input required type="password" onfocus="scrollMe()" name="userpassword" class="form-control"
                        id="userpassword">
                </div>
                <div class="mb-3">
                    <label for="passport" class="form-label">Passport number</label>
                    <input required type="text" onfocus="scrollMe()" name="passport" class="form-control" id="passport">
                </div>
                <div class="mb-3">
                    <label class="form-check-label" for="date"  >Date of birth</label>
                    <input required class="form-control" name="dateofbirth" onfocus="scrollMe()" onfocusout="getDate(value)" type="date" id="date">
                    <span id="dateCalc"></span>
                </div>
                <div class="mb-3 form-check">
                    <input required type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">I have read and accepted the terms of
                        usage</label>
                </div>
                <button type="submit" name="submit" class="btn btn-primary mb-6">Register</button>
            </form>
            <p id="login">already have an account?, <a href="loginPage">Login from here</a></p>

        </div>
    </div>
    <script>
        
        function scrollMe() {
            var scrl = document.querySelector("#login");
            scrl.scrollIntoView({ behavior: 'smooth', block: 'center' });
        }
        function hoverMe(_) {
            _.style.overflowY="scroll";
        }
        function hoverOut(_){
            _.style.overflowY="hidden";
        }

        function getDate (date){
            newDate = 2021-(+date.split`-`[0])
            if(newDate<18){
                document.querySelector("#dateCalc").innerHTML="you are under the age to register.";
                document.querySelector("#dateCalc").style.color="red";
                document.querySelector("body > div > div > form > button").disabled=true;
                document.querySelector("#date").style.border = "2px solid red";
            }else{
                document.querySelector("#dateCalc").innerHTML="";
                document.querySelector("body > div > div > form > button").disabled=false;
                document.querySelector("#date").style.border = "1px solid #ced4da";
            }
        }



    </script>