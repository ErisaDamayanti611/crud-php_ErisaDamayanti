<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" 
     integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
     <?php 

        include 'layout/header.php';

        ?>
</head>
<body>

    <div class="row col-8 border rounded mx-auto mt-5 p-2 shadow-lg">
        <div class="col-4">
            <img src="myphoto.jpg" class="img-fluid rounded" style="width: 180px;height:180px;object-fit: cover;">
            <div>
                <button class="mx-auto m-3 btn-sm btn btn-primary">Edit</button>
                <button class="mx-auto m-3 btn-sm btn btn-warning text-white">Delete</button>
            </div>
        </div>
            <div class="col-8">
                <div class="h2">Admin Profile</div>
                <table class="table table-striped">
                    <tr><th colspan="2">Admin Details :</th></tr>
                    <tr><th>Name</th><td>Erisa Damayanti</td></tr>
                    <tr><th>Gender</th><td>Female</td></tr>
                    <tr><th>Email</th><td>erisadamayantihs@gmail.com</td></tr>
                    <tr><th>Phone</th><td>0856 9431 4502</td></tr>
                </table>
            </div>
        </div>
    </div>
  

     
</body>
<?php include 'layout/footer.php';
?>
</html>