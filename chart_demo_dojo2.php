
<!DOCTYPE HTML>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title> Biểu đồ đánh giá cân nặng theo tuổi bé trai</title>
		<script src="js/dojo/dojo/dojo.js" type="text/javascript"></script>
		<script>
			
			// Require the dependencies
			dojo.require("dijit.form.HorizontalSlider");
			dojo.require("dijit.form.HorizontalRule");
			dojo.require("dijit.form.HorizontalRuleLabels");
			dojo.require("dojox.charting.Chart2D");
			dojo.require("dojox.charting.themes.Midwest");
			dojo.require("dojox.lang.functional.object");
			
			// A later shrotcut for dojox.lang.functional
			// Function to be run during startup
			makeObjects = function(){
				// Set up our shorthand
				df = dojox.lang.functional;
				
				// Create the base chart
				chart = new dojox.charting.Chart2D("chart");
				
				var mytheme = dojox.charting.themes.Midwest;
                mytheme.axis.majorTick = {
                    color : "#bababa",
                    style: "Dot",					 
                };
			    mytheme.axis.minorTick = {
                    color : "#bababa",
                    style: "Dot",					
                };
				mytheme.plotarea.fill = "white";
				chart.setTheme(mytheme);
				chart.addAxis("x", {min: 0, max: 60, majorTickStep: 1,fixLower: "minor", natural: true, stroke: "grey",
					majorTick: {stroke: "black", length: 4}, minorTick: {stroke: "gray", length: 2}});
				chart.addAxis("y", {vertical: true, min: 0, max: 30, majorTickStep: 2, minorTickStep: 1, stroke: "grey",
					majorTick: {stroke: "black", length: 0}, minorTick: {stroke: "gray", length: 0}});
				chart.addPlot("plot1", {type: "Areas",hAxis: "x2", vAxis: "y2", animate: {duration: 1800}});
				 var chartData=[];
                           <?php
				   $pow1=0.58038; $pow2=0.6058;$pow3=0.730;$pow4=0.765;
                		   $heso1=1.8; $heso2=2.4;$heso3=4.5;$heso4=5;
               
                                    for ($i=0; $i<=59; $i++){									 
					  $Y= pow($i, $pow1)+$heso1; 										                             
                                          echo "chartData[$i]=$Y;\n" ;
                                   }
                         ?>
				chart.addSeries("Series A", chartData, {plot: "plot1" , stroke: {color:"#ffffff"}, fill: "#d90000"});
				//chart.addAxis("x2", {fixLower: "minor", natural: true, leftBottom: false, stroke: "grey",
					//majorTick: {stroke: "black", length: 4}, minorTick: {stroke: "gray", length: 2}});
					
				chart.addAxis("y2", {vertical: true, min: 0, max: 30, majorTickStep: 2, leftBottom: false, stroke: "grey",
					majorTick: {stroke: "black", length: 0}, minorTick: {stroke: "gray", length: 0}});
				chart.addPlot("plot2", {type: "Areas", hAxis: "x2", vAxis: "y2", animate: {duration: 1800}});
				  var chartData2=[];
                           <?php
               
                                    for ($i=0; $i<=59; $i++)
                                     {
                                         $Y= pow($i, $pow2)+$heso2;
                                    
                                          echo "chartData2[$i]=$Y;\n" ;
                                     }
                         ?>
				chart.addSeries("Series B", chartData2, {plot: "plot2" , stroke: {color:"#ffffff"}, fill: "#ffc600"});
				  var chartData3=[];
                           <?php
               
                                    for ($i=0; $i<=59; $i++)
                                     {
                                        $Y= pow($i, $pow3)+$heso3;
                                    
                                          echo "chartData3[$i]=$Y;\n" ;
                                     }
                         ?>
                                 
				chart.addSeries("Series C", chartData3, {plot: "plot3" , stroke: {color:"#ffffff"}, fill: "#02c3ec"});
				chart.addPlot("plot3", {type: "Areas", hAxis: "x2", vAxis: "y2", animate: {duration: 1800}});
				chart.addPlot("grid", { type: "Grid", hMinorLines: true, hMajorLines: true,hMinorLines: {stroke: "white",width:  0, length: 0}});
				chart.render();

				// Add change events to the sliders to know when chart changes should be triggered
			   
			};
			
			// When the DOM and resources are ready, create the chart and add events to it
			dojo.ready(makeObjects);
			
			
		</script>
	</head>
	<body class="Midwest">	  
		<div id="chart" style="width: 1350px; height: 620px;"></div>		
	</body>
</html>
