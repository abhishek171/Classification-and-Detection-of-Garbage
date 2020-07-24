<?php
session_start();
    include('connection.php');
       
        $user = mysqli_real_escape_string($conn,$_POST['uname']);
        $area = mysqli_real_escape_string($conn,$_POST['area']);
        $landmark = mysqli_real_escape_string($conn,$_POST['landmark']);
        $city = mysqli_real_escape_string($conn,$_POST['city']);
         
        $sql = "INSERT INTO form_data (username , area , landmark , city)
                VALUES ('$user', '$area', '$landmark', '$city')";
  
  if ($conn->query($sql) === TRUE) {
    echo "<script>alert New record added successfully<script>";
    header("Location: http://localhost/GarbageData/modules/location.php");
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
  
           
?>