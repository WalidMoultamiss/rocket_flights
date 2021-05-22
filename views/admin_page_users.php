<?php
    $data = new UsersController();
    $users = $data->getAllUsers();
?>
<?php
    require_once './views/includes/navbar_admin.php';
?>

<link rel="stylesheet" href="./css/admin_page.css">
</head>

<body>
    <!-- navBar -->
    

    <!-- navBar -->

    <!-- body -->

    <section class="Dashboard_user">

        <div class="container-xxl">

            <h1>Create flight</h1>
            <table class="table" style="color: white !important;">
                <thead>
                    <tr>
                        <th scope="col">#ID</th>
                        <th scope="col">Full name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Date of birth</th>
                        <th scope="col">Role</th>
                        <th scope="col">Action</th>

                    </tr>
                </thead>
                <tbody>
                    <!-- loop to bring all users -->
                    <?php foreach($users as $user):?>
                    <tr>
                        <th scope="row">
                            <?php echo $user['id']?>
                        </th>
                        <td>
                            <?php echo $user['full_name']?>
                        </td>
                        <td>
                            <?php echo $user['email']?>
                        </td>
                        <td>
                            <?php echo $user['dateofbirth']?>
                        </td>
                        <td>
                            <?php echo $user['role']
                            ?
                            '<span class="badge bg-primary">Admin</span>'
                            :
                            '<span class="badge bg-secondary">User</span>';
                            ;?>
                        </td>
                        <td>
                        <form method="post" action="delete_User" class="btn-group" role="group" aria-label="Basic mixed styles example">
                                <button type="submit-delete" id="<?php echo $user['id']?>"class="btn btn-danger btn-sm">delete</button>
                                <input type="hidden" name="id" value="<?php echo $user['id']?>">
                        </form>
                        <form method="post" class="btn-group" role="group" aria-label="Basic mixed styles example">
                                <button type="submit-edit" id="<?php echo $user['id']?>"class="btn btn-success btn-sm">edit</button>
                                <input type="hidden" name="id" value="<?php echo $user['id']?>">
                        </form>
                        </td>
                    </tr>
                    <?php endforeach;?>
                    <!-- loop to bring all users -->
                </tbody>
            </table>
        </div>
    </section>


    <!-- <script src="./views/JS/"></script> -->

</body>