<?php
session_start();
?>
<html>
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://localhost/GarbageData/assets/css/navbar.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Counter-Up/1.0.0/jquery.counterup.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.js"></script>
   
</head>


<body>

    
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggler" aria-controls="navbarToggler" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <a class="navbar-brand">
        <img src="http://localhost/GarbageData/assets/image/recycle.png" class="img-fluid">
    </a>

    <div class="collapse navbar-collapse" id="navbarToggler">
        <ul class="navbar-nav mr-auto mt-1 mt-lg-0">
        <li class="nav-item">
            <a class="nav-link" href="http://localhost/GarbageData/index.php">Home</a>
        </li>
        
        <li class="nav-item dropdown">
            
            <a class="nav-link dropdown-toggle" data-toggle="dropdown" data-target="dropdown_target" href="#">Garbage Data<span class="caret"></span></a>
            <div class="dropdown-menu" aria-labelledby="dropdownMenu">
                <a class="dropdown-item" type="button"  href="http://localhost/GarbageData/modules/plastic_data.php">Plastic</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" type="button"  href="http://localhost/GarbageData/modules/glass_data.php">Glass</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" type="button"  href="http://localhost/GarbageData/modules/metal_data.php">Metal</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" type="button"  href="http://localhost/GarbageData/modules/paper_data.php">Paper</a>
            </div>
        </li>
        
        <li class="nav-item">
            <a class="nav-link" href="http://localhost/GarbageData/modules/location.php">Garbage Location</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="http://localhost/GarbageData/modules/form.php">Data Collection</a>
        </li>
       
        <?php if(isset($_SESSION['logged_in'])){
                        $user=new \stdClass();
                        $user->name=$_SESSION['fullname'];
                        $user->email=$_SESSION['email'];
                        $user->phone=$_SESSION['phoneno'];
                        
                        
                    ?>
                    <li class="nav-item">
                        <span class="navbar-text " id="nam"><?php echo "Hello ",$user->name ?></span>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="http://localhost/GarbageData/modules/logout.php">Logout</a>
                    </li>
                    <?php } else{?>
        
            <li class="nav-item ">
                <a class="nav-link" href="http://localhost/GarbageData/modules/signup.php" id="signup">Signup</a>
            </li>
            <li class="nav-item " >
                <a class="nav-link" href="http://localhost/GarbageData/modules/login.php"id="login">Login</a>
            </li>
            </div>          
        <?php }?>
            
    </div>
  </nav>



        </body>
</html>




