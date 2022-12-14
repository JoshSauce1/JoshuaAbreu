<?php


    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];

    //Database fann_get_total_connection

    $host = "localhost";
    $dbname = "message_db";
    $username = "root";
    $password = "";

    $conn = mysqli_connect($host, $username, $password, $dbname);

    $sql = "INSERT INTO message (firstname, lastname, email, subject)
            VALUES ('$firstname', '$lastname', '$email', '$subject')";

    $stmt = mysqli_stmt_init($conn);

    if ( ! mysqli_stmt_prepare($stmt, $sql)) {
      die(mysqli_error($conn));
    }

    mysqli_stmt_bind_param($stmt, "ssss",
    $firstname, $lastname, $email, $subject);

    mysqli_stmt_execute($stmt);

    echo "Record Saved";
