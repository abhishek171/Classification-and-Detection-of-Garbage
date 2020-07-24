<!DOCTYPE html>
    <html>
        <head>
            <title>Login</title>
            <?php
            include('navbar.php');
            ?>
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <link rel="stylesheet" href="http://localhost/GarbageData/assets/css/login.css" type="text/css">
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        </head>
<body>
<dv class="fullBackground">
<div class="container">
	<div class="d-flex justify-content-center h-100">
		<div class="card">
			<div class="card-header">
             <h3> <img src="http://localhost/GarbageData/assets/image/recycle.png" class="img-fluid">Login</h3>
				
			</div>
			<div class="card-body">
			  <form action="http://localhost/GarbageData/assets/backendphp/login.php" method="post">
                   <div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fa fa-envelope"></i></span>
						</div>
						<input type="text" class="form-control" name="email" placeholder="email-id" required>
					</div>
					<div class="input-group form-group">
					<div class="input-group-prepend">
							<span class="input-group-text"><i class="fa fa-key"></i></span>
						</div>
						<input type="password" class="form-control"name="password" id="pass" placeholder="Password" required>
					</div>
					<div class="form-group">
                   <input type="submit" value="Submit" class="btn float-right login_btn">
					</div>
				</form>
			</div>
			<div class="card-footer">
					<div class="d-flex justify-content-center links">
						Don't have an account?<a href="http://localhost/GarbageData/modules/signup.php" style="color:black;">Sign Up</a>
					</div>
					<div class="d-flex justify-content-center">
						<a href="http://localhost/GarbageData/modules/forgot.php"style="color:black;">Forgot your password?</a>
					</div>
				</div>
		</div>
	</div>
</div>
</div>
<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
            <script src="src/fullclip.js"></script>
             <script >
              $('.fullBackground').fullClip({
                    images:['../assets/image/gogreen.png','../assets/image/waste.jpg'],
                    transitionTime:2000,
                    wait:5000
                });  

 </script>
             <div class="footer" style="position:absolute; width:100%"><?php require('footer.php'); ?></div>
        </body>
        
        
    </html>






	