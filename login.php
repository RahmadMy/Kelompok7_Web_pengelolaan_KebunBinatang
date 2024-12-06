<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Login</title>
        <!-- Link Bootstrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    </head>
    <body style="background-image: url('IMG/forest.jpg'); background-size: cover; background-position: center;">
        <div class="d-flex justify-content-center align-items-center" style="height: 100vh; background-color: rgba(0, 0, 0, 0.5);">
            <div class="text-center text-white col-lg-3 bg-white pt-3 pb-5 border border-black border-2" style="border-radius: 5px;">
                <h2 style="color:black;">Log In</h2>
                <!-- Form -->
                <form action="#" method="POST" class="d-flex flex-column align-items-center">
                    <div class="mb-3 w-100" style="max-width: 250px;">
                        <input type="text" class="form-control" placeholder="Username" required>
                    </div>
                    <div class="mb-3 w-100" style="max-width: 250px;">
                        <input type="password" class="form-control" placeholder="Password" required>
                    </div>
                    <button type="submit" class="btn btn-success w-100" style="max-width: 250px;" name="login">Login</button>
                </form>
            </div>
        </div>
        <?php
        if(isset($_POST['login'])){
            header("location:Home.php");
            exit();
        }
        ?>
        <!-- Link Javascript -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    </body>
</html>