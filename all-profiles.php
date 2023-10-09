<?php   require('db_conn.php');
        require('functions.php');
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="style.css">
    <link class="bi bi-person-add" rel="icon" type="image/x-icon" href="favicons/profile favicon.avif">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All users</title>
</head>
<body>
    <?php 
        if(isset($_GET['delete'])){
      
            $id = $_GET['delete'];
            $image = $_GET['user_picture'];

            $query = "DELETE FROM userdetails WHERE id = $id";
            $results = $mysqli->query($query,MYSQLI_STORE_RESULT);
            unlink('uploads/'. $image);
            header('location:all-profiles.php');
        } 
    ?>
    <div class="container">
        <a class="btn bg-secondary btn-sm col-lg-12 mt-1 mb-1 border rounded-top bi bi-arrow-left-square" href="index.php"> Back</a>
    <div class="bg bg-dark text-light ">
        <h1 class="card-title text-center pb-1 bi bi-person-lines-fill"> User profiles</h1>
    </div>
    
    <?php 
        $query = "SELECT * FROM userdetails";
        $result = $mysqli->query($query,MYSQLI_STORE_RESULT);
        while($row = mysqli_fetch_assoc($result)){  ?>
        
        <div class="border border-dark rounded mb-1 mt-1">
            <div class="row rounded m-1">
                <div class="col col-12 col-lg-6 col-md-8 ">
                    <img class="card-img-top rounded img-fluid" src="uploads/<?=$row['user_picture'] ?>" alt="Card image cap">
                </div>
                <div class="col">
                <div class="mx-auto" style="width: 100%;">
                <ul class="list-group list-group-flush">
                <li class="list-group-item"><span><b>Name:</b></span> <?= $row['name_user']; ?></li>
                <li class="list-group-item"><span><b>Email:</b></span> <?= $row['user_email']; ?></li>
                <li class="list-group-item"><span><b>Contact:</b></span> <?= $row['user_mobile']; ?></li>
                <li class="list-group-item"><span><b>Address:</b></span> <?= $row['user_address']; ?></li>
                </ul>
                <div class="card-body">
                    <a href="?delete=<?= $row['id'] ?>&user_picture=<?= $row['user_picture'] ?>" class="btn btn-danger mt-3 bi bi-person-x-fill"> DELETE</a>
                </div>
            </div>
                </div>
            </div>
            </div>
    <?php } ?>
</div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>