<?php 
$equipe="equipe1";
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
      data.addColumn('number', 'The Avengers');
      

      data.addRows([
        ['J1',  37.8, 80.8],
        ['J2',  30.9, 69.5],
        ['J3',  25.4,   57],
        ['J4',  11.7, 18.8],
        ['J5',  11.9, 17.6],
        ['J6',   8.8, 13.6],
		['J7',   8.8, 13.6],
		['J8',   8.8, 13.6],
		['J9',   8.8, 15]
      ]);
		
      var options = {
        chart: {
          title: 'Evolution du classement',
         <!-- subtitle: 'in millions of dollars (USD)'-->
        },
        width: 500,
        height: 500,
        axes: {
		  x: {
            0: {side: 'bottom'}
		 
          }
        }
		
      };
      var chart = new google.charts.Line(document.getElementById('line_top_x'));
      chart.draw(data, google.charts.Line.convertOptions(options));
    }
  </script>
</head>
<body>
 
  <div id="line_top_x"></div>
</body>
</html>