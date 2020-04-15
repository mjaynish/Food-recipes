<?php
session_start();
$username = $_POST['username'];
$email = $_POST['email'];
$password_1 = $_POST['password_1'];
$password_2 = $_POST['password_2'];
  

  if (empty($username)) 
  { 
    echo '<script>alert("Username Should not be empty")</script>';
    echo '<script>window.location.replace("home.php")</script>';
    die(); 
  }
  if (empty($email)) 
  { 
    echo '<script>alert("Email should not be empty")</script>';
    echo '<script>window.location.replace("home.php")</script>';
    die(); 
  }
  if (empty($password_1)) 
  { 
    echo '<script>alert("Password Should not be empty")</script>';
    echo '<script>window.location.replace("home.php")</script>';
    die();
  }  
  if ($password_1 != $password_2) 
  {
    echo '<script>alert("Passwords does not match")</script>';
    echo '<script>window.location.replace("home.php")</script>';
    die();
  }
    $host = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbname = "food";
    //create connection
    $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);
    if (mysqli_connect_error()) {
     die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
    } else {
     $password = $password_1;    
     $SELECT = "SELECT email From users Where email = ? Limit 1";
     $INSERT = "INSERT Into users (username, email, password) values(?, ?, ?)";
     //Prepare statement
     $stmt = $conn->prepare($SELECT);
     $stmt->bind_param("s", $email);
     $stmt->execute();
     $stmt->bind_result($email);
     $stmt->store_result();
     $rnum = $stmt->num_rows;
     if ($rnum==0) {
      $stmt->close();
      $stmt = $conn->prepare($INSERT);
      $stmt->bind_param("sss",$username, $email, $password);
      $stmt->execute();
      $_SESSION['username'] = $username;
      $_SESSION['success'] = "You are now logged in";
      header('location: index.php');
     } else 
     {
        echo '<script>alert("Somebody already register using this email")</script>';
        echo '<script>window.location.replace("home.php")</script>';
        die();
     }
     $stmt->close();
     $conn->close();
    }

?>