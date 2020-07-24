<?php 
include('navbar.php');
if(!isset($_SESSION['logged_in'])){
    header("location:http://localhost/GarbageData/modules/login.php");
}
?>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="http://localhost/GarbageData/assets/css/form.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<br><br>
<div class="fullBackground">
<div class="container">
	<div class="d-flex justify-content-center h-100">
		<div class="card">
			<div class="card-header">
           <h3> <img src="http://localhost/GarbageData/assets/image/recycle.png" class="img-fluid">Garbage Data</h3>
				
			</div>
			<div class="card-body">
				<form action="http://localhost/GarbageData/assets/backendphp/form.php" method="post">
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fa fa-user"></i></span>
						</div>
						<input type="text" class="form-control" name="uname" placeholder="Full Name" required>
						
					</div>
                    
                    <div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fa fa-building"></i></span>
						</div>
						<input type="text" class="form-control" name="area" placeholder="Area" required>
					</div>
                    <div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fa fa-building"></i></span>
						</div>
						<input type="text" class="form-control" name="landmark" placeholder="Landmark" required>
					</div>
                    <div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fa fa-building-o"></i></span>
						</div>
						<input type="text" class="form-control" name="city" placeholder="City" required>
					</div>
                    
					
					<div class="form-group">
						<input type="submit" value="Submit" class="btn float-right login_btn">
					</div>
				</form>
			</div>
		
				
			</div>
		</div>
	</div>
</div>
</div><br><br>
<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
            <script src="src/fullclip.js"></script>
             <script >
              $('.fullBackground').fullClip({
                    images:['../assets/image/gogreen.png','../assets/image/waste.jpg'],
                    transitionTime:2000,
                    wait:5000
                });  

            </script>
    <div class="footer " style="position:absolute; width:100%"><?php require('footer.php'); ?></div>
</body> 
<br>

   
</html>






    
