<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funda of Web IT</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">

                <?php 
                    if(isset($_SESSION['status']))
                    {
                        ?>
                            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                            <strong>Hey!</strong> <?php echo $_SESSION['status']; ?>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        <?php
                        unset($_SESSION['status']);
                    }
                ?>

                <div class="card mt-5">
                    <div class="card-header">
                        <h4>How to Insert Date Values into Database in php</h4>
                    </div>
                    <div class="card-body">
                        
                    
                        <form action="code.php" method="POST">
                            <div class="form-group mb-3">
                                <label for="">Name</label>
                                <input type="text" name="name" class="form-control" />
                            </div>
                            <div class="form-group mb-3">
                                <label for="">Date of Expiration</label>
                                <input type="date" name="dateofbirth" class="form-control" />
                            </div>
                            <div class="form-group mb-3">
                                <label for="">Warranty Number</label>
                                <input type="text" name="warranty_num" class="form-control" />
                            </div>
                            <div class="form-group mb-3">
                                <button type="submit" name="save_date" class="btn btn-primary">Save Data</button>
                            </div>
                        </form>

                    </div>
                </div>
                <?php
 $con = mysqli_connect("localhost","root","","receipts");
 $query = "SELECT * FROM demo WHERE id= 5";
    $query_run = mysqli_query($con, $query);
    $output = mysqli_fetch_assoc($query_run);
    $current_date = strtotime(date('Y-m-d'));
   
if ($output['dob'] > $current_date) {
    echo "This is not expired.";
} else {
    echo "Warning: this warranty is expired!";
}

    ?>
<h1> <?php echo $output['name'] ?> </h1>    
<h1> <?php echo $output['dob'] ?> </h1>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
