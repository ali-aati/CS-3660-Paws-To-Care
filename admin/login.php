<?php
// Include config file
include('model/functions.php');

?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B"
        crossorigin="anonymous">

    <title>Paws to Care</title>
    <style>
            .login-form {
                width: 40%;
                margin: 0 auto;
                padding: 20% 0 30px;		
            }
        </style>
</head>

<body>

    <!-- container -->
<div class="container">
    <div class="page-header">
        <div class="row">
            <div class="container col-10">
                <div class="row">
                    <div class="login-form">
                        <form method="post" action="login.php">
                        <?php echo display_error(); ?>

                            <h2 class="text-center">Login</h2>
                            <div class="form-group">
                                <input type="text" class="form-control" name="username" placeholder="Username" required="required" autofocus >
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" name="password" placeholder="password" required="required">
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-dark btn-lg btn-block" name="login_btn">Login</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>

</script>
<!-- container -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
        crossorigin="anonymous"></script>
    <script src="Js/Exotic.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js" integrity="sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em"
        crossorigin="anonymous"></script>
</body>
</html>