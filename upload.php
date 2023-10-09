<?php
require('db_conn.php');

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_FILES["image"])) {
    $target_dir = "uploads/"; // Directory where uploaded images will be stored
    $target_file = $target_dir . basename($_FILES["image"]["name"]); // Full path to the uploaded file
    $uploadOk = 1; // Flag to indicate if the upload was successful

    // Check if the image file is a valid image
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
    $check = getimagesize($_FILES["image"]["tmp_name"]);
    if ($check === false) {
        echo "File is not an image.";
        $uploadOk = 0;
    }

     // Check if the file already exists
     if (file_exists($target_file)) {
        $allReadyExist = "Sorry, the file already exists.";
        $uploadOk = 0;
        header('location:index.php?value='. $allReadyExist);
        die();
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
    $image = addslashes($_FILES['image']); // Read the image file as binary data
    $name = strip_tags($_POST['name']); // Sanitize the name
    $email = strip_tags($_POST['email']); // Sanitize the email
    $phone = strip_tags($_POST['cellnumber']); // Sanitize the phone number
    $address = strip_tags($_POST['address']); // Sanitize the address


    // Prepare the SQL INSERT statement
    $query = "INSERT INTO userdetails (user_picture, name_user, user_email, user_mobile, user_address) VALUES ('$uploadedFileName','$name','$email','$phone','$address')";
    $result = $mysqli->query($query,MYSQLI_STORE_RESULT);


    
?>
