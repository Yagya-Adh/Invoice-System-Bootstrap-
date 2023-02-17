<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body class="bg-dark">

    <div class="container card mt-2 p-1">
        <nav class="navbar navbar-expand-lg bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">PHP.COM</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="nav-tabs navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Home</a>
                        </li>
                </div>
            </div>
        </nav>
    </div>

    <div class=" container card mt-2 mb-3">

        <header class="text-secondary fs-1">PHP Invoice System</header>

        <div class="row mb-3">

            <div class="col-md-3 d-flex flex-row">
                <select class="form-select bg-primary w-50" aria-label="Default select example">
                    <option selected>Invoice</option>
                    <option value="1">Invoice List</option>
                    <option value="2">Created Invoice</option>
                </select>
                <select class="form-select bg-primary w-50" aria-label="Default select example">
                    <option selected>Logged in Admin</option>
                    <option value="1">Account</option>
                    <option value="2">Logout</option>
                </select>
            </div>

        </div>

        <div class="row mb-3 d-flex justify-content-between">

            <div class="col-md-4">
                <span class="text text-secondary">
                    <h2>From,</h2>
                    <h4>Admin <br /> Chitwan, Nepal <br />admin@admin.com</h4>
                </span>
            </div>

            <div class="col-md-3">
                <span class="text text-secondary">
                    <h2>To,</h2>

                    <div class="input-group">
                        <input class="form-control" type="text" placeholder="ABCD, pvt.ltd" aria-label="Username" />
                    </div>

                    <br />

                    <div class="input-group">
                        <textarea class="form-control" name="" id="" cols="23" rows="2" placeholder="Bharatpur Chitwan Nepal"></textarea>
                    </div>

                </span>
            </div>

        </div>


        <div class="row mb-3 p-3">
            <div class="card m-1">
                <div class="card-body">
                    <table class="table table-border ">
                        <thead>
                            <tr>
                                <th><input type="checkbox" /> </th>
                                <th>Item No</th>
                                <th>Item Name</th>
                                <th>Quantity</th>
                                <th>Price</th>
                                <th>Total</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><input type="checkbox" /></td>
                                <td><input class="form-control" type="text" placeholder="1234"></td>
                                <td><input class="form-control" type="text" placeholder="iphone"></td>
                                <td><input class="form-control" type="text" placeholder="12.00"></td>
                                <td><input class="form-control" type="text" placeholder="250000.00"></td>
                                <td><input class="form-control" type="text" placeholder="3000000.00"></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <div class="mb-3">
            <button class="btn btn-danger">-Delete</button>
            <button class="btn btn-success">+Add More</button>
        </div>


        <div class="row mb-3 d-flex justify-content-around">

            <div class="col-md-4">
                <div class="text-secondary">
                    <span>
                        <h2>Notes:</h2>
                    </span>

                    <div class="input-group">
                        <textarea class="form-control" name="note" id="" cols="60" rows="10" placeholder=" this is a note"></textarea>
                    </div>

                </div>
            </div>

            <div class="col-md-5">
                <div class="">
                    <div class="input-group mb-3 w-50 m-1">
                        <label for="basic-url" class="form-label">Subtotal:</label>
                        <span class="input-group-text">$</span>
                        <input type="text" placeholder="750000.00" class="form-control" aria-label="Amount (to the nearest dollar)">
                        <span class="input-group-text">.00</span>
                    </div>

                    <div class="input-group mb-3">
                        <label for="basic-url" class="form-label">Tax Rate:</label>
                        <input type="text" class="form-control" placeholder="1" aria-label="Username">
                        <span class="input-group-text">%</span>
                    </div>

                    <div class="input-group mb-3">
                        <label for="basic-url" class="form-label">Tax Amount:</label>
                        <span class="input-group-text">$</span>
                        <input type="text" class="form-control" placeholder="7500.00" aria-label="Username">
                    </div>

                    <div class="input-group mb-3">
                        <label for="basic-url" class="form-label">Total: </label>
                        <span class="input-group-text">$</span>
                        <input type="text" class="form-control" placeholder="7500.00" aria-label="Username">
                    </div>

                    <div class="input-group mb-3">
                        <label for="basic-url" class="form-label">Amount Paid: </label>
                        <span class="input-group-text">$</span>
                        <input type="text" class="form-control" placeholder="7500.00" aria-label="Username">
                    </div>


                    <div class="input-group mb-3">
                        <label for="basic-url" class="form-label">Amount Due: </label>
                        <span class="input-group-text">$</span>
                        <input type="text" class="form-control" placeholder="7500.00" aria-label="Username">
                    </div>
                </div>
            </div>
        </div>

        <div class="mb-3">
            <button class="btn btn-success btn-lg p-3">Save Invoice</button>
        </div>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>