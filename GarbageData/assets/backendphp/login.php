<?php
session_start();
    include('connection.php');
       
        $email = mysqli_real_escape_string($conn,$_POST['email']);
        $password = mysqli_real_escape_string($conn,base64_encode($_POST['password'])); 
        $search="select * from signup where email='$email' and password='$password';";
        $result=mysqli_query($conn,$search);
       
      if(!mysqli_query($conn,$search)){
        echo "Search query error";
      }
    else{
        if($row=mysqli_fetch_assoc($result)){
            $_SESSION['fullname']=$row['name'];
            $_SESSION['email']=$row['email'];
            $_SESSION['password']=$row['password'];
            $_SESSION['phoneno']=$row['phoneno'];
            $_SESSION['id']=$row['id'];
            $_SESSION['logged_in'] = true;
         header("Location: http://localhost/GarbageData/index.php");
        } 
    
        else{
         header("Location: http://localhost/GarbageData/modules/login.php");
            }
        }
?>