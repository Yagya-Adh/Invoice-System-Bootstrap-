<?php

// echo "login";
?>





<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Invoice login</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body class="bg-dark">

    <div class="container">

        <span class="text text-secondary fs-1 d-flex justify-content-center m-5">Invoice System with php & pdo </span>


        <div class="container col-md-7 col-lg-6">

            <div class="card p-2 m-2">
                <div class="card-header"> Invoice User Login: </div>

                <div class="card-body">

                    <form action="" method="post">
                        <div class="mb-3">
                            <label for="email" class="form-label">Email address</label>
                            <input type="email" class="form-control" id="email" placeholder="name@example.com">
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control" id="password" placeholder="Password">
                        </div>

                        <button class="btn btn-primary btn-sm mb-3">Login</button>


                        <p class="text text-secondary">
                            <span> <b>Email</b> : admin@aadmin.com</span>
                            <br>
                            <span> <b>Password</b>: 12345</span>
                        </p>
                    </form>
                </div>
            </div>

        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>