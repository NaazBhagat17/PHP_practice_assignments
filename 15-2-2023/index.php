<!DOCTYPE html>
<html>
<body>
<?php
$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$conn = new mysqli($servername, $username, $password);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";

//Create database
// $sql = "CREATE DATABASE ThisDB";
// if ($conn->query($sql) === TRUE) {
//   echo "Database created successfully";
// } else {
//   echo "Error creating database: " . $conn->error;
// }

// Select database
$retval = mysqli_select_db( $conn, 'ThisDB' );
if(! $retval ) {
   die('Could not select database: ' . mysqli_error($conn));
}
echo "Database ThisDB selected successfully\n";

// Create websites table
//  $sql = "CREATE TABLE websites (
//    website_id INT(6) AUTO_INCREMENT PRIMARY KEY,
//    website_name VARCHAR(30) NOT NULL,
//    website_url VARCHAR(50) NOT NULL,
//    number_of_orders INT(50)NOT NULL
//   )";
//   if ($conn->query($sql) === TRUE) {
//     echo "Table WEBSITES created successfully";
//   } else {
//     echo "Error creating table: " . $conn->error;
//   }

//Insertion in websites table
// $sql="INSERT INTO websites (website_name, website_url,number_of_orders)
// VALUES ('Amazon','www.amazon.com',5);";
// $sql.="INSERT INTO websites (website_name, website_url,number_of_orders)
// VALUES ('Flipkart','www.flipkart.com',3);";
// $sql="INSERT INTO websites (website_name, website_url,number_of_orders)
// VALUES ('Myntra','www.myntra.com',2)";
// $sql.="INSERT INTO websites (website_name, website_url,number_of_orders)
// VALUES ('Amazon','www.amazon.com',3)";
// $sql.="INSERT INTO websites (website_name, website_url,number_of_orders)
// VALUES ('Ajio','www.ajio.com',1)";
// if ($conn->multi_query($sql) === TRUE) {
//   echo "New record created successfully";
// } else {
//   echo "Error: " . $sql . "<br>" . $conn->error;
// }

//create orders table
// $sql = "CREATE TABLE orders (
//    order_id INT(4) AUTO_INCREMENT PRIMARY KEY,
//    website_id INT(4),
//    notes VARCHAR(30),
//    order_status VARCHAR(30),
//    total INT(4),
//    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
//    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
//    FOREIGN KEY(website_id) REFERENCES websites(website_id)
//  )";
//  if ($conn->query($sql) === TRUE) {
//    echo "Table orders created successfully";
//  } else {
//    echo "Error creating table: " . $conn->error;
//  }
// //Insertion in orders table
// $sql="INSERT INTO orders (website_id, notes, order_status,total)
// VALUES ('1','I liked the product','Received','300');";
// $sql.="INSERT INTO orders (website_id, notes, order_status,total)
// VALUES ('2','Order Received','Received','500');";
// $sql.="INSERT INTO orders (website_id, notes, order_status,total)
// VALUES ('3','Not satisfied','In-Transit','2000')";
// $sql.="INSERT INTO orders (website_id, notes, order_status,total)
// VALUES ('4','Good','Received','370')";
// $sql.="INSERT INTO orders (website_id, notes, order_status,total)
// VALUES ('5','Average product','Returned','1000')";
// if ($conn->multi_query($sql) === TRUE) {
//   echo "New record created successfully";
// } else {
//   echo "Error: " . $sql . "<br>" . $conn->error;
// }
//create order_address table
// $sql = "CREATE TABLE order_address (
//         order_id INT(4),
//         house_number VARCHAR(10) NOT NULL,
//         city VARCHAR(10) NOT NULL,
//         state_ VARCHAR(10) NOT NULL,
//         pincode VARCHAR(10) NOT NULL,
//         FOREIGN KEY (order_id) REFERENCES orders(order_id)
//      )";
//      if ($conn->query($sql) === TRUE) {
//        echo "Table order_address created successfully";
//      } else {
//        echo "Error creating table: " . $conn->error;
//      }
     //Insertion in order_address table
//  $sql="INSERT INTO order_address (order_id, house_number, city, state_, pincode)
//  VALUES ('1','28','Jalandhar','Punjab','144003');";
//  $sql.="INSERT INTO order_address (order_id, house_number, city, state_,pincode)
//  VALUES ('2','19B','Jalandhar','Punjab','144003');";
//  $sql.="INSERT INTO order_address (order_id, house_number, city, state_,pincode)
//  VALUES ('3','#1d23','Bangalore','Karnataka','560002');";
//  $sql.="INSERT INTO order_address (order_id, house_number, city, state_,pincode)
//  VALUES ('4','44','Bilaspur','Haryana','495001');";
//  $sql.="INSERT INTO order_address (order_id, house_number, city, state_,pincode)
//  VALUES ('5','168/2','Dirang','Arunachal Pradesh','790101')";
// if ($conn->multi_query($sql) === TRUE) {
//      echo "New record created successfully";
//   } else {
//     echo "Error: " . $sql . "<br>" . $conn->error;
//    }
?>
</body>
</html>