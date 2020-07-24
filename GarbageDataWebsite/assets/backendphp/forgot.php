<?php
session_start();
       include('connection.php');
           $email=$_SESSION['emailid'];
           $password = mysqli_real_escape_string($conn,base64_encode($_POST['pass']));
           
 
           if(!$conn){
            $result="Connection error".mysqli_connect_error();
            echo $result;
           }
           $update="update signup set password='$password' where email='$email';";
           
           if(!mysqli_query($conn,$update)){
            echo"<script>alert Something went wrong</script>";
           }
          else{
            echo"<script>alert Successfully Updated Password</script>";
            header("Location: http://localhost/GarbageData/modules/login.php");
          }
   ?>
