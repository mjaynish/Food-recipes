<?php
	session_start();
	$username = "root";
	$password = "";
	$hostname = "localhost";
	$db="food";
	$dbhandle = mysqli_connect($hostname, $username, $password, $db)  or die("Could not connect to database");
	
	$selected = mysqli_select_db($dbhandle,"login");

		if(isset($_POST['username']) && isset($_POST['password']))
        {
			$username = $_POST['username'];
			$password = $_POST['password'];
			//$password = md5($password);

			$query = mysqli_query($dbhandle,"select * from users where username = '$username' and password = '$password'");
			if(mysqli_num_rows($query) > 0 ) 
            {                                    
            	$_SESSION['username'] = $username;
            	$_SESSION['success'] = "You are now logged in";       
        		header('location: index.php');
			}
            else
            {
               echo "<script>alert('Invalid Username/password')</script>";
               echo '<script>window.location.replace("login.php")</script>';
                /*  mysql_query("INSERT INTO users (Username, Password) VALUES ('$user', '$pass')");
				    header("location:index.php"); */
			}
	   }
	mysqli_close($dbhandle);
?>