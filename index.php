<?php require './core/init.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Registration</title>

    <link href="style.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</head>

<body>

    <div class="container">

        <?php include 'navbar.php'; ?>

        <div class="row">


            <div class="col-lg-12 col-sm-12">

                <?php if (Input::get('success')): ?>
                <?php if (Input::get('success') == "true") : ?>
                <div class="alert alert-success" role="alert">
                    User has successfully registered!
                </div>
                <?php elseif(Input::get('success') == "false"):?>
                <div class="alert alert-danger" role="alert">
                    User already exist!
                </div>
                <?php endif;?>
                <?php endif;?>




                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Username</th>
                            <th scope="col">Password</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach(User::find_all() as $user): ?>
                        <tr>
                            <th scope="row"><?php echo $user->username; ?></th>
                            <td><?php echo $user->password; ?></td>
                            <td>
                                <button class="btn btn-info btn-sm">Edit</button>
                                <button class="btn btn-danger btn-sm">Delete</button>
                            </td>
                        </tr>
                        <?php endforeach; ?>

                    </tbody>
                </table>






            </div>

        </div>







</body>

</html>