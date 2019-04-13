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
<script src="http://www.trirand.com/blog/phpjqgrid/js/jquery.js"></script> 
<script src="http://code.highcharts.com/highcharts.js"></script>
<script src="http://code.highcharts.com/modules/exporting.js"></script>

 
</head>
<body>
 
	 
	<!--<div id="jqchart" class="jqchart" style="width:700px;height:350px;margin: 0 auto;"></div> -->
   <div id="container" style="min-width: 310px; height: 400px; margin: 0 auto"> </div>
 


</body>
</html>  
<script type="text/javascript">
$(document).ready({
	/*function(){var chart = new Highcharts.Chart({"credits":{"enabled":false},"chart":{"renderTo":"jqchart","defaultSeriesType":"line","marginRight":130,"marginBottom":25},"series":[{"name":"Tokyo","data":[7,6.9,9.5,14.5,18.2,21.5,25.2,26.5,23.3,18.3,13.9,9.6]},{"name":"New York","data":[-0.2,0.8,5.7,11.3,17,22,24.8,24.1,20.1,14.1,8.6,2.5]},{"name":"Berlin","data":[-0.9,0.6,3.5,8.4,13.5,17,18.6,17.9,14.3,9,3.9,1]},{"name":"London","data":[3.9,4.2,5.7,8.5,11.9,15.2,17,16.6,14.2,10.3,6.6,4.8]}],"title":{"text":"Monthly Average Temperature","x":-20},"subtitle":{"text":"Source: WorldClimate.com","x":-20},"xAxis":{"categories":["Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sep","Oct","Nov","Dec"],"title":{"text":"Changelist","margin":-1}},"yAxis":{"title":{"text":"Temperature (Â°C)"}},"tooltip":{"formatter":function(){return '<b>'+ this.series.name +'</b><br/>'+this.x +': '+ this.y +' (Â°C)';
	}},"legend":{"layout":"vertical","align":"right","verticalAlign":"top","x":-10,"y":100,"borderWidth":0}});*/

});


$(function () {
        $('#container').highcharts({
            chart: {
                type: 'area'
            },
            title: {
                text: 'Cân nặng theo tuổi - Bé gái <br/>____________________________________________<br/>Dành cho trẻ mới sơ sinh cho đến khi đầy 5 tuổi'
            },
            subtitle: {
               // text: 'Source: <a href="http://thebulletin.metapress.com/content/c4120650912x74k7/fulltext.pdf">'+
                 //   'thebulletin.metapress.com</a>'
                 text:'World Health Organization VDD'
            },
            xAxis: {
                labels: {
                    formatter: function() {
                        return this.value; // clean, unformatted number for year
                    }
                }
            },
            yAxis: {
                title: {
                    text: 'Cân nặng (kg)'
                },
                labels: {
                    formatter: function()
                    {
                       // return this.value / 1000 +'k';
                        return this.value ;
                    }
                }
            },
            tooltip: {
                pointFormat: '{series.name} produced <b>{point.y:,.0f}</b><br/>warheads in {point.x}'
            },
            plotOptions: {
                area: {
                    pointStart: 0,
                    marker: {
                        enabled: false,
                        symbol: 'circle',
                        radius: 1,
                        states: {
                            hover: {
                                enabled: true
                            }
                        }
                    }
                }
            },
            series: [
        {
                name: 'Cân nặng cao hơn so với tuổi',
//                data: [null, null, null, null, null, 6 , 11, 32, 110, 235, 369, 640,
//                    1005, 1436, 2063, 3057, 4618, 6444, 9822, 15468, 20434, 24126,
//                    27387, 29459, 31056, 31982, 32040, 31233, 29224, 27342, 26662,
//                    26956, 27912, 28999, 58965, 27826, 25579, 25722, 24826, 24605,
//                    24304, 23464, 23708, 24099, 20000, 30000, 40000, 50000, 60000,
//                    70000, 80000, 90000, 100000, 110000,120000, 130000, 140000, 150000, 160000,
//                    170000, 180000, 190000, 200000, 210475, 220475, 230475, 240475, 250000 ]
                     data:[4.5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22]
            }, 
            {
                name: 'Cân nặng bình thường',
//                data: 
//                [null, null, null, null, null, null, null , null , null ,null,
//                5, 25, 50, 120, 150, 200, 426, 660, 869, 1060,
//                1605, 2471, 3322,4238, 5221, 6129, 7089, 8339,9399, 10538, 
//                11643, 13092, 1447,15915, 17385, 19055, 21205, 23044, 25393,
//                27935, 30062, 32049,33952, 35804, 37431, 39197, 45000, 43000, 41000, 
//                39000, 37000,35000, 33000, 31000, 29000, 27000, 25000, 24000, 23000, 22000,
//                21000, 20000, 200000, 18000, 20000, 17000, 16000]
                    data:[7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25]
            },
            {
                name: 'Suy dinh dưỡng vừa',
//                data: 
//                        [null, null, null, null, null, 6 , 11, 32, 110, 235, 369, 640,
//                    1005, 1436, 2063, 3057, 4618, 6444, 9822, 15468, 20434, 24126,
//                    27387, 29459, 31056, 31982, 32040, 31233, 29224, 27342, 26662,
//                    26956, 27912, 28999, 28965, 27826, 25579, 25722, 24826, 24605,
//                    24304, 23464, 23708, 24099, 24357, 24237, 24401, 24344, 23586,
//                    22380, 21004, 17287, 14747, 13076, 12555, 12144, 11009, 10950,
//                    10871, 10824, 10577, 10527, 10475, 10421, 10358, 10295, 10104 ]
                        data:[9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28]
            }
			
			
			]
			
        });
		//$("#highcharts-0").append(' <div style="position:absolute; z-index:100000; top:10%; left:45%">aaaaaaaaaa</div>')
		//$(".highcharts-title").html("chinh")

    });
    

</script>