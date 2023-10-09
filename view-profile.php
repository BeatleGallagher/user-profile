<?php   require('db_conn.php'); ?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link class="bi bi-person-add" rel="icon" type="image/x-icon" href="favicons/profile favicon.avif">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="style.css">
    <title>View profile</title>
</head>
<body>
    <div class="container-fluid">
    <?php 
      
        $query = "SELECT *
                    FROM userdetails
                    ORDER BY id 
                    DESC
                    LIMIT 1";
        $result = $mysqli->query($query,MYSQLI_STORE_RESULT);
        $row = $result->fetch_assoc();
    ?>
<div class="card text-center mx-auto" style="width: 18rem;">
<div class="card-body">
    <h5 class="card-title">User profile</h5>
  </div>
  <img class="card-img-top" src="uploads/<?=$row['user_picture'] ?>" alt="image of user">
  <ul class="list-group list-group-flush">
    <li class="list-group-item"><span><b>Name:</b></span> <?= $row['name_user']; ?></li>
    <li class="list-group-item"><span><b>Email:</b></span> <?= $row['user_email']; ?></li>
    <li class="list-group-item"><span><b>Contact:</b></span> <?= $row['user_mobile']; ?></li>
    <li class="list-group-item"><span><b>Address:</b></span> <?= $row['user_address']; ?></li>
  </ul>
  <div class="card-body">
    <a href="edit-profile.php?id=<?= $row['id'] ?>"  name="edit" class="btn btn-warning mt-3 bi bi-pencil"> Edit</a>
    <a href="index.php" class="btn btn-dark mt-3 bi bi-arrow-left-square"> Back</a>
    <a href="all-profiles.php" class="btn btn-primary mt-3 bi bi-people-fill"> View all</a>
  </div>
</div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</body>
</html>