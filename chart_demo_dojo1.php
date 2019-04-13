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
            
                    
		
		<div id="chartNode" style="width:1250px;height:480px;"></div>

		<!-- load dojo and provide config via data attribute -->
		<!-- load dojo and provide config via data attribute -->
		<script src="js/dojo/dojo/dojo.js" type="text/javascript"></script> 
		<script>
			
		require([
			 // Require the basic 2d chart resource
			"dojox/charting/Chart",
			 

			// Require the theme of our choosing
			"dojox/charting/themes/Claro",
			
			// Charting plugins: 

			// 	We want to plot StackedAreas 
			"dojox/charting/plot2d/StackedAreas",
			
			//	We want to use Markers
			"dojox/charting/plot2d/Markers",
			"dojox/charting/plot2d/StackedLines",
			"dojox/charting/plot2d/Lines",
			
			//	We'll use default x/y axes
			"dojox/charting/axis2d/Default",

			// Wait until the DOM is ready
			"dojo/domReady!"
		], function(Chart, theme) {
				
			// Define the data
                        
                        
			var chartData2=[];
                           <?php
               
                                    for ($i=0; $i<=59; $i++)
                                     {
										// $Y=0;
										// if($i>0){
                                        	$Y= pow($i, 0.56166)+2.2;
										// }
                                          echo "chartData2[$i]=$Y;\n" ;
                                     }
                         ?>
                        
                         var chartData=[];
                           <?php
               
                                    for ($i=0; $i<=59; $i++)
                                     {
                                        $Y= pow($i, 0.56166)+2;                                    
                                          echo "chartData[$i]=$Y;\n" ;
                                     }
                         ?>
                         

			// Create the chart within it's "holding" node
			var chart = new Chart("chartNode");
			//var chart = new dojox.charting.Chart2D("chartNode");

			// Set the theme
			chart.setTheme(theme);

			// Add the only/default plot 
			
		//	chart.addPlot("default", {
				type: "StackedLines",
				markers: false,
				lines: false, areas: true,
				
			//});
			chart.addPlot("grid", {
				type: "Grid", hMinorLines: true
			 
				
			});
		 
				
			// Add axes
			chart.addAxis("x"), {type: "default", min: 0, max: 59, horizon: true, fixLower: "major", fixUpper: "major" };
			chart.addAxis("y", { min: 0, max: 30, vertical: true, fixLower: "major", fixUpper: "major" });

			// Add the series of data
			//chart.addSeries("Monthly Sales - 2010",chartData);
			//chart.addSeries("Monthly Sales - 2009",chartData2);

			// Render the chart!
			chart.render();
			
		});
			
		</script>
	</body>
</html>  
 