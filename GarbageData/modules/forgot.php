<!DOCTYPE html>
    <html>
        <head>
            <title>Password Update</title>
            <?php
            include('navbar.php');
            ?>
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <link rel="stylesheet" href="http://localhost/GarbageData/assets/css/forgot.css" type="text/css">
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
			<script>
            function checkPassw(form){
            if(form.pass.value.length <8){
			alert("Password should be greater 8 charcaters long");
			form.pass.focus();
			return false;
			}
		   if(form.pass.value != form.cpass.value){
			alert("Passwords are not matching");
			form.cpass.focus();
			return false;
			}
                return true;
            }
        </script>
        </head>
        <body>
		<dv class="fullBackground">
			<div class="container">
				<div class="d-flex justify-content-center h-100">
					<div class="card">
						<div class="card-header">
					<h3> <img src="http://localhost/GarbageData/assets/image/recycle.png" class="img-fluid">Change Password</h3>
							
						</div>
						<div class="card-body">
							<form  action="http://localhost/GarbageData/assets/backendphp/forgot.php" method="post" onsubmit="return checkPassw(this)">
							<div class="input-group form-group">
									<div class="input-group-prepend">
										<span class="input-group-text"><i class="fa fa-envelope"></i></span>
									</div>
									<input type="text" class="form-control" name="emailid" placeholder="email-id" required>
							</div>
							<div class="input-group form-group">
									<div class="input-group-prepend">
										<span class="input-group-text"><i class="fa fa-key"></i></span>
									</div>
									<input type="password" class="form-control"id="pass" name="pass" placeholder="Enter new password">
								</div>
								<div class="input-group form-group">
									<div class="input-group-prepend">
										<span class="input-group-text"><i class="fa fa-key"></i></span>
									</div>
									<input type="password" class="form-control" id="cpass" name="cpass" placeholder="Re-enter password">
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