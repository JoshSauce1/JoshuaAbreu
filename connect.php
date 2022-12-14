<?php

    $firstname = $_POST['firstname']
    $lastname = $_POST['lastname']
    $email = $_POST['email']
    $subject = $_POST['subject']

    //Database fann_get_total_connection
    $conn = new mysqli('localhost','root','test');
    if($conn->connect_error){
      die('Connection Failes  :  '.conn->connect_error);
    }else{
      $stmt = $conn->prepare("insert into tes2(firstname, lastname, email, subject)
      values(?, ?, ?, ?)");
      $stmt->bind_param("ssss", $firstname, $lastname )
      echo "registration Succesfully...";
      $stmt->close();
      $conn->close();

    }
    }
 ?>
