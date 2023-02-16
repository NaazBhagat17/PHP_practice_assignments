<?php
$servername = "localhost";
$username = "root";
$password = "";
$db="myDb";

// Create connection
$conn = mysqli_connect($servername, $username, $password,$db);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";

// $sql = "CREATE DATABASE myDb";
// if ($conn->query($sql) === TRUE) {
//   echo "Database created successfully";
// } else {
//   echo "Error creating database: " . $conn->error;
// }
$retval = mysqli_select_db( $conn, 'myDb' );

         if(! $retval ) {
            die('Could not select database: ' . mysqli_error($conn));
         }
         echo "Database myDb selected successfully\n";
         


// $sql = "CREATE TABLE student (
//     id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
//     firstname VARCHAR(30) NOT NULL,
//     lastname VARCHAR(30) NOT NULL,
//     email VARCHAR(50),
//     age VARCHAR(50) NOT NULL,
//     phone_no VARCHAR(50) NOT NULL,
//     reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
//     update_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
//     )";
    
//     if ($conn->query($sql) === TRUE) {
//       echo "Table student created successfully";
//     } else {
//       echo "Error creating table: " . $conn->error;
//     }


for ($x = 1; $x <= 100; $x++) {
  $sql = "INSERT INTO student (firstname, lastname, email, age, phone_no, reg_date, update_date)
VALUES ('first_name_$x', 'last_name_$x' , 'first_name$x@gmail.com', 'age_$x' , '$x' , null , null )";
  if ($conn->query($sql) === TRUE) {
      echo "New record created successfully ";
      echo "<br>";
  } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
  }
}
// $del =  "DELETE FROM student WHERE id=1";
// if ($conn->query($del) === TRUE) {
//         echo "Record deleted successfully ";
//         echo "<br>";
//     } else {
//         echo "Error: " . $del . "<br>" . $conn->error;
//     }
?>