<?php
session_start();
 include('connection.php'); 
 
 $fullname=mysqli_real_escape_string($conn,$_POST['fullname']);
 $email=mysqli_real_escape_string($conn,$_POST['emailid']);
 $phonenum=mysqli_real_escape_string($conn,$_POST['phone']);
 $pass=mysqli_real_escape_string($conn,base64_encode($_POST['passw']));
 $_SESSION['fullname']=$fullname;
 $_SESSION['email']=$email;
 $_SESSION['phoneno']=$phonenum;
 

  $sql = "INSERT INTO signup (name , email , phoneno ,password)
  VALUES ('".$_SESSION['fullname']."', '".$_SESSION['email']."', '".$_SESSION['phoneno']."', '$pass')";
  
  if ($conn->query($sql) === TRUE) {
    echo "<script>alert New record added successfully</script>";
    header("Location: http://localhost/GarbageData/modules/login.php");
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
  
  
  ?>