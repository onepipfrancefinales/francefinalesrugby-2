<?php 
$equipe="equipe1";
$J1=-6;
?>

<html>
<head>
  <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['line']});
      google.charts.setOnLoadCallback(drawChart);

    function drawChart() {

      var data = new google.visualization.DataTable();
      data.addColumn('string', 'Journees');
      data.addColumn('number', '<?php echo $equipe;?>');
      data.addColumn('number', 'The Avengers', 'black');
    
      data.addRows([
       
		['J1', -4, -1],
        ['J2', <?php echo $J1;?>, -9],
        ['J3', -5, -8],
        ['J4', -6, -8],
        ['J5', -8, -5],
        ['J6', -8, -6],
		['J7', -8, -7],
		['J8', -8, -9],
		['J9', -8, -11]
      ]);
		
      var options = {
		
		
		chart: {
          title: 'Evolution du classement',
         <!-- subtitle: 'in millions of dollars (USD)'-->
        },
        width: 600,
        height: 600,
        
		colors: ['black', 'white']
      };
      var chart = new google.charts.Line(document.getElementById('line_top_x'));
      chart.draw(data, options);
	}
  </script>
</head>
<body>
 
  <div id="line_top_x"></div>
</body>
</html>