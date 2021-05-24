<?php
    $data = new ReservationController();
    $reservation = $data->getAllReservations();
    
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
                        <th scope="col">flight id</th>
                        <th scope="col">full name</th>
                        <th scope="col">passport</th>
                        <th scope="col">from</th>
                        <th scope="col">to</th>
                        <th scope="col">boarding</th>
                        <th scope="col">arrive</th>
                        <th scope="col">price</th>
                        <th scope="col">action</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- loop to bring all flights -->
                    <?php foreach($reservation as $rsrv):?>
                    <tr>
                        <td scope="row">
                            <?php echo $rsrv['id']?>
                        </td>
                        <td scope="row">
                            <?php echo $rsrv['full_name']?>
                        </td>
                        <td scope="row">
                            <?php echo $rsrv['passport']?>
                        </td>
                        <td scope="row">
                            <?php echo $rsrv['fromf']?>
                        </td>
                        <td scope="row">
                            <?php echo $rsrv['tof']?>
                        </td>
                        <td scope="row">
                            <?php echo $rsrv['depart']?>
                        </td>
                        <td scope="row">
                            <?php echo $rsrv['retu']?>
                        </td>
                        <td scope="row">
                            <?php echo $rsrv['price']?>
                        </td>
                        <td style="min-width: 128px;">
                            <form method="post" action="delete_Flight" class="btn-group" role="group" aria-label="Basic mixed styles example">
                                <button type="submit-delete" id="<?php echo $rsrv['id']?>"class="btn btn-danger btn-sm">Delete</button>
                                <input type="hidden" name="id" value="<?php echo $rsrv['id']?>">
                            </form>
                                <button type="submit-edit" id="edit" class="btn btn-success btn-sm">Update</button>
                        </td>
                    </tr>
                    <?php endforeach;?>
                    <!-- loop to bring all flights -->
                </tbody>
            </table>
        </div>
    </section>


    <!-- <script src="./views/JS/"></script>
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
</script> -->
</body>