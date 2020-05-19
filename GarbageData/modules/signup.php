<!DOCTYPE html>
    <html>
        <head>
            <title>Signup</title>
            <?php
            include('navbar.php');
            ?>
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <link rel="stylesheet" href="http://localhost/GarbageData/assets/css/signup.css" type="text/css">
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
       
			<script>
            function checkPassw(form){
				function checkPassw(form){
				var re=/^[\w ]+$/;
   			 if(!re.test(form.fname.value)){
       			alert("Error: Input contains invalid characters!");
        		form.fname.focus();
        		return false;
      			 }
			  else{
					return true;
				}
    		 var email=/(@.*)[.]/;
    		 if(!email.test(form.emailid.value)){
        		alert("Email is invalid");
        		form.fullname.focus();
        		return false;
   			 }
				else{
					return true;
				}
            if(form.passw.value.length<8){
			alert("Password should be greater 8 charcaters long");
			form.passw.focus();
			return false;
			}
			else{
			return true;
			}

            if(form.phone.value.length>10){
			alert("Phone number should not be greater than 10");
			form.phone.focus();
			return false;
			}
			else{
				return true;	
			}
			if(!form.phone.value.isInteger()){
			alert("Enter Numbers Only");
			form.phone.focus();
			return false;
      	 }
		   else{
			return true;
		   }
   

        }
 
 
		</script>
</head>
<body>
<dv class="fullBackground">
<div class="container">
	<div class="d-flex justify-content-center h-100">
		<div class="card">
			<div class="card-header">
           <h3> <img src="http://localhost/GarbageData/assets/image/recycle.png" class="img-fluid">SignUp</h3>
				
			</div>
			<div class="card-body">
			  <form action="http://localhost/GarbageData/assets/backendphp/signup.php" method="post" onsubmit="return checkPassw(this)">
			       <div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fa fa-user"></i></span>
						</div>
						<input type="text" class="form-control" name="fullname" placeholder="Full Name"required>
						
				   </div>
                   <div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fa fa-envelope"></i></span>
						</div>
						<input type="text" class="form-control" name="emailid" placeholder="email-id" required>
					</div>
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fa fa-phone"></i></span>
						</div>
						<input type="tel" class="form-control" name="phone" placeholder="Enter Phone Number"  required>
				   </div>
					<div class="input-group form-group">
					<div class="input-group-prepend">
							<span class="input-group-text"><i class="fa fa-key"></i></span>
						</div>
						<input type="password" class="form-control" id="passw" name="passw" placeholder="Password" required>
					</div>
					<div class="form-group">
                   <input type="submit" id="submit" value="Submit" class="btn float-right login_btn">
					</div>
				</form>
			</div>
			<div class="card-footer">
				<div class="d-flex justify-content-center links">
					Already a user?<a href="http://localhost/GarbageData/modules/login.php" style="color:black;">Login</a>
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






	



    








				