<?php

echo "test affichage";
echo "<br>";
?>


<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <!-- Include the ECharts file you just downloaded -->
    <script src="
https://cdn.jsdelivr.net/npm/echarts@6.0.0/dist/echarts.min.js
"></script>
  </head>
<body>
  <!-- Prepare a DOM with a defined width and height for ECharts -->

   <div id="main" style="width: 800px;height:500px;"></div>
 


  <script type="text/javascript">

var chartDom = document.getElementById('main');
var myChart = echarts.init(chartDom);
var option;

option = {
  xAxis: {
    type: 'category',
    data:  ['J1', 'J2', 'J3', 'J4', 'J5', 'J6','J7', 'J8', 'J9', 'J10', 'J11', 'J12','J13', 'J14', 'J15', 'J16','J17', 'J18']
  },
  yAxis: {
    type: 'value',
   
  },
  series: [
    {
      data: [1, 2, 3, 4, 5, 6, 7],
      
      type: 'line'
    },
     {
      data: [7, 6, 5, 4, 3, 2, 1],
      
      type: 'line'
    }
  ]
};

option && myChart.setOption(option); 

</script>
</body>

</html>






