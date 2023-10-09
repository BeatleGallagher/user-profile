<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
require('db_conn.php');

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_FILES["image"])) {
  

    $target_dir = "uploads/*"; // Directory where uploaded images will be stored
    $target_file = $target_dir . basename($_FILES["image"]["name"]); // Full path to the uploaded file
    $uploadOk = 1; // Flag to indicate if the upload was successful

    // Check if the image file is a valid image
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
    $check = getimagesize($_FILES["image"]["tmp_name"]);
    if ($check === false) {
        echo "File is not an image.";
        $uploadOk = 0;
    }


      // Allow only specific image file formats (you can adjust this list)
    $allowedFormats = array("jpg", "jpeg", "png", "gif");
      if (!in_array($imageFileType, $allowedFormats)) {
          echo "Sorry, only JPG, JPEG, PNG, and GIF files are allowed.";
          $uploadOk = 0;
      }
    
       // If $uploadOk is still 1, move the file to the specified directory
    if ($uploadOk == 1) {
        if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
            $uploadedFileName = $_FILES["image"]["name"];
            $success = "Your profile has been created";
            header('location:profile-created.php?success='. $success);

            //echo "The file " . htmlspecialchars(basename($uploadedFileName)) . " has been uploaded.";

        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    }
} else {
    echo "Invalid request.";
}

        // Sample data
    $name = strip_tags($_GET['name']); // Sanitize the name
    $email = strip_tags($_GET['email']); // Sanitize the email
    $phone = strip_tags($_GET['number']); // Sanitize the phone number
    $address = strip_tags($_GET['address']); // Sanitize the address
    $id = strip_tags($_GET['id']); // Sanitize the address

    
    

    // Prepare the SQL INSERT statement
    $query = "UPDATE userdetails SET name_user='$name', user_email='$email', user_mobile='$phone', user_address='$address' WHERE id=$id";
    $result = $mysqli->query($query,MYSQLI_STORE_RESULT);
    header('location:view-profile.php');

?>

</body>
</html>