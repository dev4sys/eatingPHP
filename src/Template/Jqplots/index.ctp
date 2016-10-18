<html>
<head></head>
<body>

    
<h1>"Fighter State Page"</h1>
<!-- 1 -->
<!--[if lt IE 9]>                                          
<?php  echo $this->Html->script('excanvas.min.js');?>
<![endif]-->

<?php
echo $this->Html->script('jquery.min.js');
echo $this->Html->script('jquery.jqplot.min.js');
echo $this->Html->css('jquery.jqplot.min.css');
?>
 
<!-- 2 -->
<div id="chartdiv" style="height:400px;width:500px; margin:auto; "></div>
 <div id="chart2" style="height:400px;width:500px; margin:auto; "></div>
<!-- 3 -->
<script>
$(document).ready(function(){
    $.jqplot('chartdiv',  [[[1, 2],[3,5.12],[5,13.1],[7,33.6],[9,85.9],[11,219.9]]]);

 $.jqplot('chart2', [
        [[2,1], [4,2], [6,3], [3,4]], 
        [[5,1], [1,2], [3,3], [4,4]], 
        [[4,1], [7,2], [1,3], [2,4]]], {
        seriesDefaults: {
            renderer:$.jqplot.BarRenderer,
            // Show point labels to the right ('e'ast) of each bar.
            // edgeTolerance of -15 allows labels flow outside the grid
            // up to 15 pixels.  If they flow out more than that, they 
            // will be hidden.
            pointLabels: { show: true, location: 'e', edgeTolerance: -15 },
            // Rotate the bar shadow as if bar is lit from top right.
            shadowAngle: 135,
            // Here's where we tell the chart it is oriented horizontally.
            rendererOptions: {
                barDirection: 'horizontal'
            }
        },
        axes: {
            yaxis: {
                renderer: $.jqplot.CategoryAxisRenderer
            }
        }
    });


});


</script>


</body>
</html>