<?php
    if(isset($_POST['submit'])){
       $newPassenger = new UsersController();
       $passenger = $newPassenger->addPassenger();
    }
?>


<link rel="stylesheet" href="./css/admin_page.css">
</head>

<body>
    
    <section class="create_flight">
        <input type="hidden" id="passengers" value="<?php echo $_SESSION['passenger'] ?>">
        <form class="container-xxl form_container bg-black" style="max-width: 500px !important; height: 80%;overflow-y: scroll;" method="post">

            <h1>Add passengers</h1>
            <div class="modalme">
            </div>

            <button type="submit" name="submit" class="btn btn-primary">add all my passengers</button>

        </form>
    </section>

<script>
    var modalme = document.querySelector('.modalme')
    var inputs = document.createElement('div')
    var pass = document.querySelector('#passengers').value
    var count=0;
    for(i=0; i<pass;i++){
        count++;
    inputs.innerHTML=`
        
          <div class="bodyModal">
            <h3>Passenger n°${count}</h3>
            <div class="passenger">
            <input class='inputStyle' type="text" name="firstname[]" placeholder="first name">
            <input class='inputStyle' type="text" name="lastname[]" placeholder="last name">
            <input class='inputStyle' type="text" name="passport[]" placeholder="passport">
            <input class='inputStyle' name="dateofbirth[]" type="date" >
            </div>
          </div>
    
    `
        modalme.appendChild(inputs.cloneNode(true));
        
}
console.log(count);
</script>

</body>