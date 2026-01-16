  <?php
//$victoireDomicile = 6; 
//$nulDomicile = 1 ;
//$defaiteDomicile = 2;
?>


<script type="text/javascript">
var victoireDomicile=new Number ('<?php echo $victoireDomicile;?>');
var nulDomicile=new Number ('<?php echo $nulDomicile;?>'); 
var defaiteDomicile=new Number ('<?php echo $defaiteDomicile;?>'); 
 

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
          ['Defaite', defaiteDomicile],
		  ['Null',nulDomicile],
          ['Victoire', victoireDomicile]
        ]);

        var options = {
           title: 'My Daily Activities' 
       
		};
		var options = {legend: 'none'}; <!-- suppression des légendes
		-->
        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
      }
    </script>
  </head>
  <body>
    
    <div id="piechart" style="width: 300px; height: 300px;"></div>

  </body>
</html>