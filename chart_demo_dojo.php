<!DOCTYPE html>
<html>
  <head>
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!-- <style type="text">
        html, body {
			margin: 0;			/* Remove body margin/padding */
			padding: 0;
		    overflow: hidden;	/* Remove scroll bars on browser window */
	        font-size: 62.5%;
        }
		body {
			font-family: "Trebuchet MS", "Helvetica", "Arial",  "Verdana", "sans-serif";
		}
		#tags {z-index: 900}
    </style>-->
 
<!--<link rel="stylesheet" type="text/css" media="screen" href="http://www.trirand.com/blog/phpjqgrid/themes/redmond/jquery-ui-1.8.2.custom.css" /> 
<script src="http://www.trirand.com/blog/phpjqgrid/js/jquery.js"></script> 
<script src="http://www.trirand.com/blog/phpjqgrid/js/jquery.jqChart.js" type="text/javascript"></script> 
<script src="js/jquery-ui-custom.min.js" type="text/javascript"></script> 
-->
<script>
    dojoConfig = {
        parseOnLoad: true, //enables declarative chart creation
        gfxRenderer: "svg,silverlight,vml" // svg is first priority
    };
</script>


 
</head>
<body>
		<h1>Demo: Stacked Monthly Sales</h1>
                <?php
                $pow1=0.58038; $pow2=0.6058;$pow3=0.730;$pow4=0.765;
                $heso1=1.8; $heso2=2.4;$heso3=4.5;$heso4=5;
                
               for ($i=0; $i<=60; $i++)
                {
                   $Y= pow($i, $pow1)+$heso1;
               // echo 'X ' + $i + '  Y '+     $Y ."<br>";
                    echo 'X ' . $i  ."<br>";
                     echo 'Y ' . $Y  ."<br>";
                     echo 'Y2 ' . (pow($i, $pow2)+$heso2)  ."<br>";
                      echo 'Y3 ' . (pow($i, $pow3)+$heso3)  ."<br>";
                      echo 'Y4 ' . (pow($i, $pow4)+$heso4)  ."<br>";
                }
                ?>
                    
		
		<div id="chartNode" style="width:1250px;height:480px;"></div>

		<!-- load dojo and provide config via data attribute -->
		<!-- load dojo and provide config via data attribute -->
		<script src="js/dojo/dojo/dojo.js" type="text/javascript"></script> 
		<script>
			
		require([
			 // Require the basic 2d chart resource
			"dojox/charting/Chart",

			// Require the theme of our choosing
			"dojox/charting/themes/Dollar",
			
			// Charting plugins: 

			// 	We want to plot StackedAreas 
			"dojox/charting/plot2d/StackedAreas",
			
			//	We want to use Markers
			"dojox/charting/plot2d/Markers",

			//	We'll use default x/y axes
			"dojox/charting/axis2d/Default",

			// Wait until the DOM is ready
			"dojo/domReady!"
		], function(Chart, theme) {
				
			// Define the data
                        
                        
			
                        
                         var chartData=[];
                           <?php
               
                                    for ($i=0; $i<=59; $i++)
                                     {
                                       $Y= pow($i, $pow1)+$heso1;
                                    
                                          echo "chartData[$i]=$Y;\n" ;
                                     }
                         ?>
                                 var chartData2=[];
                           <?php
               
                                    for ($i=0; $i<=59; $i++)
                                     {
                                         $Y= pow($i, $pow2)+$heso2;
                                    
                                          echo "chartData2[$i]=$Y;\n" ;
                                     }
                         ?>
                                 var chartData3=[];
                           <?php
               
                                    for ($i=0; $i<=59; $i++)
                                     {
                                        $Y= pow($i, $pow3)+$heso3;
                                    
                                          echo "chartData3[$i]=$Y;\n" ;
                                     }
                         ?>
                                 
                                     var chartData4=[];
                           <?php
               
                                    for ($i=0; $i<=59; $i++)
                                     {
                                        $Y= pow($i, $pow4)+$heso4;
                                    
                                          echo "chartData4[$i]=$Y;\n" ;
                                     }
                         ?>
                                 
                                 
                         

			// Create the chart within it's "holding" node
			var chart = new Chart("chartNode");
			//var chart = new dojox.charting.Chart2D("chartNode");

			// Set the theme
			chart.setTheme(theme);

			// Add the only/default plot 
                        // 
//			chart.addPlot("default", {
//				type: "StackedAreas",
//				markers: false

                                chart.addPlot("default", {
                                   // type: "StackedAreas",
                                   areas: true,
				
				markers: false
				
			});
			
				
			// Add axes
			chart.addAxis("x"), { min: 0, max: 60, horizon: true };
			chart.addAxis("y", { min: 0, max: 30, vertical: true, fixLower: "major", fixUpper: "major" });

			// Add the series of data
			chart.addSeries("Suy dinh dưỡng",chartData);
			chart.addSeries("Suy dinh dưỡng vừa",chartData2);
                        chart.addSeries("Cân nặng bình thường",chartData3);
                        chart.addSeries("Cân nặng cao hơn so với tuổi",chartData4);

			// Render the chart!
			chart.render();
			
		});
			
		</script>
	</body>
</html>  
 