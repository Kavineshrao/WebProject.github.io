<?php

include("connection.php");

if (isset($_POST['username']) and isset($_POST['password'])){
	
// Assigning POST values to variables.
$username = $_POST['username'];
$password = $_POST['password'];

// CHECK FOR THE RECORD FROM TABLE
$query = "SELECT * FROM user WHERE username='$username' and password='$password'";
 
$result = mysqli_query($conn, $query) or die(mysqli_error($conn));
$count = mysqli_num_rows($result);


    if($count)
    {
        echo '<script type="text/javascript"> alert("WELCOME") </script>';
    }
    else
    {
        echo '<script type="text/javascript"> alert("WRONG CREDENTIALS") </script>';
    }
    
}

    
$result = mysqli_query($conn2, "INSERT INTO user_attendance (username, password) VALUES ('$username', '$password')");
    
    if($result)
    {
        echo '<script type="text/javascript"> alert("Data Successfully Saved") </script>';
    }
    else
    {
        echo '<script type="text/javascript"> alert("Failed To Save Data") </script>';
    }

?>
