<?php


  // if(isset($_POST['btn-send']))
  // {
  //   echo 'Working';
  // }

  $UName = $_POST['UName'];
  $Email = $_POST['Email'];
  $Sub = $_POST['Sub'];
  $msg = $_POST['msg'];

  //Database connection

  $servername = "localhost";
  $username = "root";
  $password = "";
  

  try {
  $conn = new PDO("mysql:host=$servername;dbname=contact_us", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  $sql = "INSERT INTO contactdetails (UName, Email, Sub, msg)
  VALUES ('$UName', '$Email', '$Sub', '$msg')";

// use exec() because no results are returned
  $conn->exec($sql);
  echo "Connected successfully";
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}

$conn = null;
















?>