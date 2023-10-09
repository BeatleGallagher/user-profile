<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link class="bi bi-person-add" rel="icon" type="image/x-icon" href="favicons/profile created favicon.png">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <div class="container-fluid">
        <div class="text-center text-light bg-dark col-md-12 border-0 rounded-top">   
            <h1 class="bi bi-person-square"> <?php if(isset($_GET['success'])){echo $_GET['success']; } ?></h1>
        </div>
        <div class="border-top-0 border border-dark rounded-bottom text-center p-5" >
            <a class="btn btn-success bi bi-person-vcard m-2" href="view-profile.php"> View profile</a>
            <a class="btn btn-primary bi bi-person-add" href="index.php"> Create new</a>
        </div>
       
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>