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
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">User Registration</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Register</a>
                        </li>
                    </ul>
                    <form class="d-flex" role="search">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Search</button>
                    </form>
                </div>
            </div>
        </nav>

        <div class="row">

            <form action="user-add.php" method="POST">
                <div class="col-lg-12 col-sm-12">

                    <?php if (isset($_GET['success'])): ?>
                        <?php if ($_GET['success'] == "true") : ?>
                        <div class="alert alert-success" role="alert">
                            User has successfully registered!
                        </div>
                        <?php elseif($_GET['success'] == "false"):?>
                            <div class="alert alert-danger" role="alert">
                            User already exist!
                        </div>
                        <?php endif;?>
                    <?php endif;?>




                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Username:</label>
                        <input name="username" type="text" class="form-control" />
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Password:</label>
                        <input name="password" type="text" class="form-control" />
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Confirm Password:</label>
                        <input name="confirm_password" type="text" class="form-control" />
                    </div>

                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Firstname:</label>
                        <input name="firstname" type="text" class="form-control" />
                    </div>

                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Lastname:</label>
                        <input name="lastname" type="text" class="form-control" />
                    </div>

                </div>

                <button class="btn btn-success" type="submit">Save</button>
            </form>




        </div>

    </div>







</body>

</html>