<?php require('db_conn.php'); ?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link class="bi bi-person-add" rel="icon" type="image/x-icon" href="favicons/profile favicon.avif">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="style.css">
    <title>EDIT PROFILE</title>
</head>
<body>
<?php
    $id = $_GET['id'];
    $query = "SELECT
                    *
                FROM
                    userdetails 
                WHERE
                    id=$id";
    $results = $mysqli->query($query,MYSQLI_STORE_RESULT);
    $row = $results->fetch_assoc();
?>

<div class="container-fluid">
  <h1 class="text-center text-light bg-dark border border-primary border-2 rounded">Edit your details:</h1>
<section>
    <div class="row">
      <div class="col-lg-12">
        <div class="card mb-4">
          <div class="card-body col-lg-8">
          <form action="updated-profile.php" method="GET" enctype="multipart/form-data">
              <div class="col-lg-8">
          <div class="card-body">
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Full Name</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0"><input type="text" class="form-control-sm" name="name" value="<?= $row['name_user'] ?>" placeholder="Name" required></p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Email</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0"><input type="email" value="<?= $row['user_email'] ?>" class="form-control-sm" name="email" placeholder="Email" required></p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Mobile</p>
              </div>
              <div class="col-sm-9 form-group">
                <p class="text-muted mb-0"><input type="tel" value="<?= $row['user_mobile'] ?>" class="form-control-sm" name="number" placeholder="Cell number" pattern="[0-9]{3} [0-9]{3} [0-9]{4}" required></p>
                <small>Format: 123-456-7890</small><br>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Address</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0"><input type="text" value="<?= $row['user_address'] ?>" class="form-control-sm" name="address" placeholder="Address" required></p>
              </div>
            </div>
          </div>
        </div>
            <input type="hidden" name="id" value="<?= $row['id']?>">
            <input class="btn btn-primary bi bi-pencil" type="submit" value="Submit" name="submit">
            <a href="view-profile.php" class="btn btn-warning bi bi-person-x-fill"> Cancel</a>
          </form>
          </div>
        </div>
      </div>
</section>
</div>
</body>
</html>