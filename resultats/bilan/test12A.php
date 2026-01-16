  <?php
$message = "Keyser Soze vous a répondu!";
echo $message; 
?>
 
<script type="text/javascript">
var msg='<?php echo $message;?>';
 alert(msg);
</script>



<html>
  <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['Task', 'Hours per Day'],
          ['Victoire',0],
          ['Defaite', 2],
		  ['Null', 3],
          ['Victoire', 7]
        ]);

        var options = {
          <!-- title: 'My Daily Activities' -->
       
		};
		var options = {legend: 'none'};
        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
      }
    </script>
  </head>
  <body>
    
    <div id="piechart" style="width: 200px; height: 250px;"></div>
	
  

  
  
  
  </body>
</html>