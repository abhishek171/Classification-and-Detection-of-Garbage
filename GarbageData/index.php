<?php include('modules/navbar.php'); ?>
<html>
<head>
    <title>Home</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="http://localhost/GarbageData/assets/css/index.css">
    <link href="https://fonts.googleapis.com/css?family=Dancing+Script|Pacifico" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=K2D" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Counter-Up/1.0.0/jquery.counterup.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.js"></script>
    
  
</head>
<body>

<div style="width:100%;"> 
<div id="carouselExampleIndicators" class="carousel slide sliding" data-ride="carousel" >
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="http://localhost/GarbageData/assets/image/class.jpg" alt="First slide"  id="image">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="http://localhost/GarbageData/assets/image/robot.jpg" alt="Second slide"  id="image">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="http://localhost/GarbageData/assets/image/pep.jpg" alt="Third slide" id="image">
    </div>
  </div>
  
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev" id="previous">
  
    <span class="fa fa-angle-left" aria-hidden="true" style="font-size:36px;color:#000;"></span>
    <span class="sr-only" >Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
  <span class="fa fa-angle-right" aria-hidden="true" style="font-size:36px;color:#000;"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<br>

<div class="row no-gutter">
  <div class="col-sm-4 ">
  <h1>Classification</h1>
    <img  src="http://localhost/GarbageData/assets/image/class.jpg" id="classes">
  </div>
 
  <div class="col-sm-7">
  
  <p>
  In machine learning, classification is a supervised learning concept which basically categorizes a set of data into classes.
  In Our project we had classified garbage into four classes viz. glass,metal,paper,plastic.
</p>
</div>

</div>
<br>
<div class="row no-gutter">
  <div class="col-sm-4 ">
  <h1>Segregation</h1>
    <img  src="http://localhost/GarbageData/assets/image/classes.jpg" id="classes">
  </div>
  
  <div class="col-sm-7" >
  
  <p>
  Waste sorting is the process by which waste is separated into different elements.
  In our project sorting of waste is automated.Sorting of waste is
   done according the garbage classified into four sclasses viz. glass,metal,paper,plastic.
  
</p>
</div>

</div>
<div class="middle">
    <div class="counting-sec">
      <div class="inner-width">
        <div class="col">
        <img  src="http://localhost/GarbageData/assets/image/plastic.png" id="icon">
          <div class="num" data-content="0">1246</div>
          Plastic
        </div>

        <div class="col">
        <img  src="http://localhost/GarbageData/assets/image/metal.png" id="icon">
          <div class="num" data-content="0">900</div>
          Metal
        </div>

        <div class="col">
        <img  src="http://localhost/GarbageData/assets/image/glass.png" id="icon">
          <div class="num" data-content="0">687</div>
          Glass
        </div>

        <div class="col">
        <img  src="http://localhost/GarbageData/assets/image/paper.png" id="icon">
          <div class="num" data-content="0">870</div>
          Paper
        </div>
      </div>
    </div>
  </div><br>
  <div class="row no-gutter" id="row1">
  <div class="col-sm-4 ">
  <h1>Recycle Waste</h1>
    <img  src="http://localhost/GarbageData/assets/image/holders.jpg" id="classes">
  </div>
  
  <div class="col-sm-7" >
  
  <p>
  Waste sorting is the process by which waste is separated into different elements.
  In our project sorting of waste is automated.Sorting of waste is
   done according the garbage classified into four classes viz. glass,metal,paper,plastic.
   Recovering of recyclable materials is main aim of our project.This materials recovered using sorting method is 
   useful for recyclablity process.
</p>
</div>
<br>
</div>
  <script type="text/javascript">
     $('.num').each(function () {
    $(this).prop('Counter',0).animate({
        Counter: $(this).text()
    }, {
        duration: 2000,
        easing: 'swing',
        step: function (now) {
            $(this).text(Math.ceil(now));
        }
    });
});
  </script>
   <div class="footer" style="position:absolute; width:100%"><?php require('modules/footer.php'); ?></div>
</body>



</html>



 
