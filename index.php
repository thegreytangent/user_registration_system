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
                <?php if (Input::get('status') == "added") : ?>
                <div class="alert alert-success" role="alert">
                    User has successfully registered!
                </div>
                <?php elseif(Input::get('status') == "update"):?>
                <div class="alert alert-info" role="alert">
                User has successfully updated!
                </div>
                <?php else :?>
                <div class="alert alert-danger" role="alert">
                There was error
                </div>
                <?php endif;?>
                


                <?php endif;?>




                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Id</th>
                            <th scope="col">Username</th>
                            <th scope="col">Password</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach(User::find_all() as $user): ?>
                        <tr>
                            <td><?php echo $user->id; ?></td>
                            <th scope="row"><?php echo $user->username; ?></th>
                            <td><?php echo $user->password; ?></td>
                            <td>
                                <a class="btn btn-info btn-sm" href="user-edit.php?id=<?php echo $user->id; ?>">Edit</a>
                            
                                <button class="btn btn-danger btn-sm">Delete</button>
                            </td>
                        </tr>
                        <?php endforeach; ?>

                    </tbody>
                </table>






            </div>

        </div>







</body>

<script>
        $(document).ready(function () {

            $(".button_delete").click(function () {
                if (confirm("Are you sure you want to delete this?")) {
                    let id = $(this).attr("id");
                    $.ajax({
                        url: `/${id}`,
                        type: 'DELETE',
                        data: {
                            "_token": "{{ csrf_token() }}",
                        },
                        success: function (result) {
                            location.reload();
                        }
                    });
                } else {
                    return false;
                }
            });
        });
    </script>

</html>