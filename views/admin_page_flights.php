<?php
    require_once './controllers/flightsController.php';
    $data = new FlightsController();
    $flights = $data->getAllFlights();
    if(isset($_POST['update'])){
        $updateFlight = new FlightsController();
        $flight = $updateFlight->updateFlight();
    }
    
?>
<?php
    require_once './views/includes/navbar_admin.php';
?>

<link rel="stylesheet" href="./css/admin_page.css">
</head>

<body>
    <section class="Dashboard_user">

        <div class="container-xxl">

            <h1>Create flight</h1>
            <table class="table" style="color: white !important;">
                <thead>
                    <tr>
                        <th scope="col">#ID</th>
                        <th scope="col">From</th>
                        <th scope="col">to</th>
                        <th scope="col">Company</th>
                        <th scope="col">depart</th>
                        <th scope="col">Arrive</th>
                        <th scope="col">Timing</th>
                        <th scope="col">Price</th>
                        <th scope="col">Place</th>
                        <th scope="col">Action</th>

                    </tr>
                </thead>
                <tbody>
                    <!-- loop to bring all flights -->
                    <?php foreach($flights as $flight):?>
                    <tr>
                        <th scope="row">
                            <?php echo $flight['id']?>
                        </th>
                        <td style="max-width: 136px;">
                            <?php echo $flight['fromf']?>
                        </td>
                        <td style="max-width: 136px;">
                            <?php echo $flight['tof']?>
                        </td>
                        <td>
                            <?php echo $flight['company']?>
                        </td>
                        <td>
                            <?php echo $flight['depart']?>
                        </td>
                        <td>
                            <?php echo $flight['retu']?>
                        </td>
                        <td>
                            <?php echo $flight['timing']?>
                        </td>
                        <td>
                            <?php echo $flight['price']?>
                        </td>
                        <td>
                            <?php echo $flight['place']?>
                        </td>
                        <td style="min-width: 128px;">
                            
                            <form method="post" action="delete_Flight" class="btn-group" role="group" aria-label="Basic mixed styles example">
                                <button type="submit-delete" id="<?php echo $flight['id']?>"class="btn btn-danger btn-sm">Delete</button>
                                <input type="hidden" name="id" value="<?php echo $flight['id']?>">
                            </form>
                                <button type="submit-edit" id="edit" class="btn btn-success btn-sm">Update</button>
                                
                            
                        </td>
                    </tr>
                    <?php endforeach;?>
                    <!-- loop to bring all flights -->
                </tbody>
            </table>
        </div>
        <form method="POST" class="edit">
                        <button title="exit editing">⨉</button>
                        <div class="inputHolder">
                            <p>From</p>
                            <input name="fromf" class="edit_inputs" type="text">
                        </div>
                        <div class="inputHolder">
                            <p>To</p>
                            <input name="tof" class="edit_inputs" type="text">
                        </div>
                        <div class="inputHolder">
                            <p>Company</p>
                            <input name="company" class="edit_inputs" type="text">
                        </div>
                        <div class="inputHolder">
                            <p>depart</p>
                            <div class="circle"></div>
                            <input name="depart" class="edit_inputs" type="datetime-local">
                        </div>
                        <div class="inputHolder">
                            <p>Arrive</p>
                            <div class="circle"></div>
                            <input name="retu" class="edit_inputs" type="datetime-local">
                        </div>
                        <div class="smallInputs">
                            <div class="inputHolder small">
                                <p>Price</p>
                                <input name="price" class="edit_inputs" type="number">
                            </div>
                            <div class="inputHolder small">
                                <p>Seats</p>
                                <input name="place" class="edit_inputs" type="number">
                                <input name="id" style="display: none;" class="edit_inputs" name="id" type="number">
                            </div>
                        </div>
                        <input class="btn btn-success btn-sm" type="submit" name="update" value="Update">
        </form>
    </section>


    <!-- <script src="./views/JS/"></script> -->
<script>
    
    document.querySelectorAll("#edit").forEach(e=>{e.addEventListener("click",()=>{
        document.querySelector(".edit").style.display="flex"
        document.querySelector("table").style.width="75%"
        // document.querySelectorAll("#edit").forEach(e=>{e.style.display="none"})
        var get = e.parentElement.parentElement
        id = get.children[0].innerText-0
        from = get.children[1].innerText
        to = get.children[2].innerText
        company = get.children[3].innerText
        depart = get.children[4].innerText
        arrive = get.children[5].innerText
        price = get.children[7].innerText
        place = get.children[8].innerText

        var inputEdit = document.getElementsByClassName("edit_inputs")
        inputEdit[0].value = from
        inputEdit[1].value = to
        inputEdit[2].value = company
        inputEdit[3].value = depart
        inputEdit[4].value = arrive
        inputEdit[5].value = price
        inputEdit[6].value = place
        inputEdit[7].value = id
    })})
    document.querySelector("body > section > div.edit > button").addEventListener("click",()=>{
        document.querySelector("table").style.width="100%"
        document.querySelectorAll("#edit").forEach(e=>{e.style.display="block"})
    })
</script>
</body>