<?php
if (isset($_POST['login'])) 
{
	//collection form data
	$user_name =  $_POST['email'];
	$upass = $_POST['upass'];

	//database connection parameters
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "kiddiecare";

	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($conn->connect_error) {
		//stop executing the code and echo error
	  die("Connection failed: " . $conn->connect_error);
	} 

	//write query
	//user role (1 is admin, 2 is standard user)
	//user status( 1 is active, 2 is inactive)
	$sql = "SELECT * FROM  user_table WHERE email = '$email'";

	// check if query worked
	if ($exeResult = $conn->query($sql)) {
        $finalData = mysqli_fetch_assoc($exeResult);

		  if(password_verify($upass, $finalData['upass'])){

			// if ($finalData['user_status'] == 2) {

			// 	// Redirect user to inactive page
			// 	header("location: inactive.php");
			// 	exit();

			// }elseif ($finalData['user_status'] == 1) {

			// 	$user_role = $finalData['user_role'];
			// 	$email = $finalData['email'];
			// 	$user_id = $finalData['user_id'];
			// 	//start session
			// 	session_start();

				//save session variables
				$_SESSION['user_id'] = $user_id;
				$_SESSION['email'] = $user_name;
        		$_SESSION['user_role'] = $user_role;
	
				// if ($user_role == 1) {
				// 	// Redirect user to admin page
				// 	header("location: ajaxtest.php");
				// 	exit();
				// } elseif ($user_role == 2){
				// 	// Redirect user to parent index page
				// 	header("location: standardindex.php");
				// 	exit();
				// } elseif ($user_role == 3){
				// 	// Redirect user to nanny index page
				// 	header("location: standardindex.php");
				// 	exit();
				// }
			}
			// Password is correct, so start a new session

		} else {
			echo "Incorrect Password";
			header ("location: login.php");
		}

	} else {
		//echo error but continue executing the code to close the session
	  echo "Error LOGIN: " . $sql . "<br>" . $conn->error;
	}

	//close database connection
	$conn->close();
}
else
{
	//redirect to login page
	header("Location: login.php");
	exit();
}

?>