<?php 


    if(isset($_GET['value'])){
      echo '<div class="alert alert-warning" role="alert">'. $_GET['value'] . '</div>';
    } 
 

    if(isset($_GET['value'])){
      echo '<a href="all-profiles.php" class="btn btn-success">View all</a>';
    } 
  

    include('index.php');
?>