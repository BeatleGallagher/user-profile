<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link rel="icon" type="image/x-icon" href="favicons/profile favicon.avif">
    <link rel="stylesheet" href="style.css">
    <title>Create Profile</title>
</head>
<body>
  
<div class="container-fluid">
  <h1 class="text-center text-light bg-dark border border-primary border-2 rounded bi bi-person-square"> Create Profile</h1>
  <svg class="bi" width="32" height="32" fill="currentColor">
  <use xlink:href="bootstrap-icons.svg#heart-fill"/>
</svg>
<section>
    <div class="row">
      <div class="col-lg-12">
        <div class="card mb-4">
          <div class="card-body col-lg-8 ">
          <form action="upload.php" method="POST" enctype="multipart/form-data">
            <label for="image"><b>Choose an image to upload:</b></label><br><br>
              <div class="mb-3">
                <input class="form-control form-control-sm w-50" id="formFileSm" type="file" name="image" accept="image/*" required>
              </div>
              <div class="col-lg-8">
          <div class="card-body">
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Full Name</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0"><input type="text" class="form-control-sm" name="name" placeholder="Name" required></p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Email</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0"><input type="email" class="form-control-sm" name="email" placeholder="Email" required></p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Mobile</p>
              </div>
              <div class="col-sm-9 form-group">
                <p class="text-muted mb-0"><input type="tel" class="form-control-sm" name="cellnumber" placeholder="Cell number" pattern="[0-9]{3} [0-9]{3} [0-9]{4}" required></p>
                <small>Format: 123-456-7890</small><br>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Address</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0"><input type="text" class="form-control-sm" name="address" placeholder="Address" required></p>
              </div>
            </div>
          </div>
        </div>
           <button class="btn btn-primary bi bi-person-add"> Create Profile</button>  
          </form>
          </div>
        </div>
      </div>
</section>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>