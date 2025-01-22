<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Katagori Buku</title>
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/all.css">
</head>

<body>
    <?php
    include_once('../navbar.php');
    ?>

    <div class="container">
        <div class="row mt-5">
            <div class="col-8 m-auto">
                <div class="card">
                    <div class="card-header">
                        <h3 class="float-start">Form Data Katagori Buku</h3>

                    </div>
                    <div class="card-body">
                        <form action="proses.php" method="post">
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Nama Katagori</label>
                                <input type="text" name="katagori" class="form-control" id="exampleInputPassword1">
                            </div>
                            <button type="submit" class="btn btn-primary" >Submit</button>
                        </form>
                    </div>
                </div>
            </div>

            <script src="../js/bootstrap.js"></script>
            <script src="../js/bootstrap.bundle.js"></script>
            <script src="../js/all.js"></script>
</body>

</html>