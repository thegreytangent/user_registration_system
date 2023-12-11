




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

                    <form action="user-add.php" method="POST">
                    
                    <h3>Create User</h3>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Username:</label>
                        <input  name="username" type="text" class="form-control" />
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Password:</label>
                        <input required name="password" type="text" class="form-control" />
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Confirm Password:</label>
                        <input required name="confirm_password" type="text" class="form-control" />
                    </div>

                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Firstname:</label>
                        <input required name="firstname" type="text" class="form-control" />
                    </div>

                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Lastname:</label>
                        <input required name="lastname" type="text" class="form-control" />
                    </div>

                </div>

                <button class="btn btn-success" type="submit">Save</button>
            </form>
                    




        </div>

    </div>







</body>

</html>