<?php 
include('navbar.php');
if(!isset($_SESSION['logged_in'])){
    header("location:http://localhost/GarbageData/modules/login.php");
}
include('../assets/backendphp/connection.php');
$search="select * from glass_data";
$result=mysqli_query($conn,$search);
?>
<!DOCTYPE html>
<html>
<head>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js"></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
img{
  margin-top:5%;
  height:20%;
  padding-left:40%;
}
table{
  position:relative;
  top:5%;
}
th,td{
  text-align:center;
}
</style>
<body>

<img src="http://localhost/GarbageData/assets/image/wine.jpg" class="img-fluid">Glass Data
<br>
<table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">Count</th>
      <th scope="col">Day</th>
      <th scope="col">Date</th>
    </tr>
  </thead>
  <tbody>
    <tr>
    <?php
    $data = []; 
       while($row=mysqli_fetch_assoc($result)){
         echo "<tr>";
         echo "<td>$row[count]</td>";
         echo "<td>$row[day]</td>";
         echo "<td>$row[date]</td>";
         echo "</tr>";
         $data[] = $row;
       }
    ?>
    </tr>
   
  </tbody>
</table>
<br>
 <div class="container">
  <canvas id="myChart" ></canvas>
</div>
  <script>
     let labels = [];
    <?php
       foreach($data as $row) {
         echo "labels.push('$row[date]');";
       }
    ?>
   
    let data = [];
    <?php
       foreach($data as $row) {
         echo "data.push('$row[count]');";
       }
    ?>
    const backgroundColor =  [
            'rgba(255, 99, 132, 0.6)',
            'rgba(54, 162, 235, 0.6)',
            'rgba(255, 206, 86, 0.6)',
            'rgba(75, 192, 192, 0.6)',
            'rgba(153, 102, 255, 0.6)',
            'rgba(15, 159, 64, 0.6)',
            'rgba(205, 109, 150, 0.6)'
            ];
    var chart = document.getElementById('myChart');
    var myChart = new Chart(chart, {
    type: 'bar',
    data: {
        labels: labels,
        datasets: [{
            label: 'Count Plastic waste perday in Tonnes',
            data: data,
            backgroundColor: backgroundColor,
            borderWidth: 2
        }]
    },
    options: {
        scales: {
            yAxes: [{
            scaleLabel: {
            display: true,
            labelString: 'Count of glass collected per day'
          },
                ticks: {
                    beginAtZero: true
                }
            }],
            xAxes: [{ 
            scaleLabel: {
            display: true,
            labelString: 'Date'
          },
                ticks: {
                    beginAtZero: true
                }
            }]
        }
    }
});
  </script>
<br>
<div class="footer" style="position:absolute; width:100%"><?php require('footer.php'); ?></div>
</body>
</html>