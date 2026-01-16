  <?php
//$victoireExterieur = 8; 
//$nulExterieur = 2 ;
//$defaiteExterieur = 4;
?>
 
<script type="text/javascript">
var victoireExterieur=new Number ('<?php echo $victoireExterieur;?>');
var nulExterieur=new Number ('<?php echo $nulExterieur;?>'); 
var defaiteExterieur=new Number ('<?php echo $defaiteExterieur;?>'); 
 

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
		  ['Null',nulExterieur],
          ['Victoire', victoireExterieur]
        ]);

        var options = {
           title: 'My Daily Activities' 
       
		};
		var options = {legend: 'none'}; <!-- suppression des légendes -->
        var chart = new google.visualization.PieChart(document.getElementById('piechartA'));

        chart.draw(data, options);
      }
    </script>
  </head>
  <body>
    
    <div id="piechartA" style="width: 300px; height: 300px;"></div>
	
  </body>
</html>

 
