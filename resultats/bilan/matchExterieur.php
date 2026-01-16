  <?php
$victoireExterieur = 4; 
$nullExterieur = 2 ;
$defaiteExterieur = 2;
?>
 
<script type="text/javascript">
var victoireExterieur=new Number ('<?php echo $victoireExterieur;?>');
var nullExterieur=new Number ('<?php echo $nullExterieur;?>'); 
var defaiteExterieur=new Number ('<?php echo $defaiteExterieur;?>'); 
 
 alert(victoireExterieur);
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
          ['Defaite', defaiteExterieur],
		  ['Null',nullExterieur],
          ['Victoire', victoireExterieur]
        ]);

        var options = {
          <!-- title: 'My Daily Activities' -->
       
		};
		var options = {legend: 'none'}; <!-- suppression des légendes
		-->
        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
      }
    </script>
  </head>
  <body>
    
    <div id="piechart" style="width: 250px; height: 250px;"></div>
	
  

  
  
  
  </body>
</html>