<?php 

//check if register form was submited
//by checking if the submit button element name was sent as part of the request

if (isset($_POST['register'])) 
{
    //collection form data

    $fname =  $_POST['fname'];
    $lname =  $_POST['lname'];
    $email = $_POST['email'];
    $upass = $_POST['upass'];

    //database connection parameters
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "kiddiecare";

    // check if the user already exist in the database


    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        //stop executing the code and echo error
      die("Connection failed: " . $conn->connect_error);
    } 
    
    //encrypt password
    //use the php password_hash function
    $encrypted_pass = password_hash($upass, PASSWORD_DEFAULT);

    //write query
    //all users are 
    $sql = "INSERT INTO user_table (fname, lname, email, upass, user_role, user_status)
    VALUES ('$fname','$lname', '$email','$encrypted_pass', '2', '2')";

    // check if query worked
    if ($conn->query($sql) === TRUE) {
      
        //redirect to login
        header("Location: login.php");
        exit();

    } else {
        //echo error but continue executing the code to close the session
      echo "Error: " . $sql . "<br>" . $conn->error;
    }

    //close database connection
    $conn->close();
}
else
{
    //redirect to register page
    header("Location: register.php");
    exit();
}

?>