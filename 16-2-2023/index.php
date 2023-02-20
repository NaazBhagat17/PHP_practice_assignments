<?php
$servername = "localhost";
$username = "root";
$password = "";
$db = "EmpForm";
$emp_name = $_POST['emp_name'];
$email = $_POST['email'];
$pass = $_POST['password'];
$dept = $_POST['dept'];

// Create connection
$conn = new mysqli($servername, $username, $password, $db);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";

//Create database
// $sql = "CREATE DATABASE EmpForm";
// if ($conn->query($sql) === TRUE) {
//   echo "Database created successfully";
// } else {
//   echo "Error creating database: " . $conn->error;
// }

// Select database
// $retval = mysqli_select_db( $conn, 'EmpForm' );
// if(! $retval ) {
//    die('Could not select database: ' . mysqli_error($conn));
// }
// echo "Database EmpForm selected successfully\n";

//Create employee Table
// $sql = "CREATE TABLE employee(
//     emp_id INT(6) AUTO_INCREMENT PRIMARY KEY,
//     emp_name VARCHAR(30) NOT NULL,
//     email VARCHAR(70) NOT NULL,
//     password VARCHAR(30) NOT NULL,
//     dept VARCHAR(30) NOT NULL
//   )";
//   if ($conn->query($sql) == TRUE) {
//     echo "Table employee created successfully";
//   } else{
//     echo "Error creating table: " . $conn->error;
//   }

   // getting all values from the HTML form
  //  if(isset($_POST['submit']))
  //  {
      //  $emp_id = $_POST['emp_id'];
      //  $emp_name = $_POST['emp_name'];
      //  $email = $_POST['email'];
      //  $pass = $_POST['password'];
      //  $dept = $_POST['dept'];
  //  }

   // using sql to create a data entry query
   $sql1 = "INSERT INTO `employee` (`emp_name`,`email`,`password`,`dept`) VALUES ('$emp_name','$email','$pass','$dept');";
 
   // send query to the database to add values and confirm if successful
   $rs = mysqli_query($conn, $sql1);
   if($rs)
   {
       echo "Entries added!";
   }
   // close connection
   // mysqli_close($con);
?>