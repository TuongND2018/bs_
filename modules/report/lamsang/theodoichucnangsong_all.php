<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Report</title>
<style >
body{
	overflow:auto;
	margin:0 !important;
	font-family:Arial, Helvetica, sans-serif!important;
}.frame_u78787878975f{
	width:300px!important;
}
.footer{
		margin-top:55px;
       height:4px;
	   background: #f9f9f9;
}
.diengiai_sinhton1,.diengiai_sinhton2,.diengiai_sinhton3 ,.diengiai_thetrang1,.diengiai_thetrang2,.diengiai_thetrang3 {		 
		 font-size:10px;		 		
	 }
 .diengiai_sinhton1 div, .diengiai_sinhton2 div, .diengiai_sinhton3 div,.diengiai_thetrang1 div,.diengiai_thetrang2 div,.diengiai_thetrang3 div{
	 display:inline-block;	 		 		
 }
 
.diengiai_sinhton1,.diengiai_sinhton2,.diengiai_sinhton3{
	margin-left:-25px !important;
	margin-bottom:-66px !important;
}
.dauhieusinhton1,.dauhieusinhton2,.dauhieusinhton3{
	position:relative;
	margin-top:-35px;
	margin-bottom:0px;
  
}
.nhiet{
	 background-color:red;
	 border-radius: 7px;
	 width:7px;
	 height:7px;
	
	 margin-right:4px;
	 margin-left:4px;
}
.mach{
	 background-color:#0000FF;
	 border-radius: 0px;
	 width:7px;
	 height:7px;
	 margin-right:4px;
}
.n_chuthich{
	position:relative;
	top:0;
	float:right;
	margin-right:5px;
	z-index:1;
}
</style>
<script src="../giaidoan2/js/dojo/dojo/dojo.js" type="text/javascript"></script>
</head>
 
<body>
<?php
	$data= new SQLServer;//tao lop ket noi SQL
	$params22 = array($_GET["idluotkham"],$_GET["tungay"]." 00:00:00",$_GET["denngay"]." 23:59:59");//tao param cho store 
	$store_name22="{call GD2_DauHieuSinhTon_SelectByID_LuotKham_Time_NoiTru(?,?,?)}";//tao bien khai bao store
	$get_thongso22=$data->query( $store_name22,$params22);//Goi store
	$excute22= new SQLServerResult($get_thongso22);//Ket noi lop xu ly SQL và truyen gia tri tra ve tu lop ket noi SQL
	$thongso22= $excute22->get_as_array();//Tra ve mang toan bo data lay duoc 
	$demtrangrs=explode('.',count($thongso22)/18);
	$demtrang1=$demtrangrs[0];
	$demtrang2=$demtrangrs[1];
	if($demtrang2>0){
		$demtrang=$demtrang1+1;
	}else{
		$demtrang=$demtrang1;
		}
	//print_r($demtrang);
	echo '<script type="text/javascript">';
	echo 'var demtrang='.$demtrang.';';
	echo '</script>';
?>
 <?php
		$i=0;
		$mach=array();
		$nhietdo=array();
		$_mach=0;
		$_nhietdo=0;
		$hr=0;
		foreach($thongso22 as $ts){
			
			if($ts['Mach']==40){
				$hr=35;	
			}elseif($ts['Mach']>40){
				$tam=round((($ts['Mach']-40)/10)/2,1);
				$hr=35+$tam;
			}else{
				$hr=0;
			}
			//echo $hr."-";
			$nhietdo[$i]=$ts['ThanNhiet'];
			$mach[$i]=$hr;
			$i++;
		}
		$mach=implode(",",$mach); 
		$nhietdo=implode(",",$nhietdo); 
		echo "<input type='hidden' id='mach' rel='$mach'>";
		echo "<input type='hidden' id='nhietdo' rel='$nhietdo'>";
		?>
 </div>
<div id="n_add_page" style="page-break-after: always;">

</div>

</body>
 <script type="application/javascript">
	$(document).ready(function() {
		var trang=0;
		for(var i=0;i<demtrang;i++){
			trang=i+1;
			var _report_data=$.ajax({url: "resource.php?module=report&view=lamsang&action=theodoichucnangsong&header=top&idluotkham=<?=$_GET['idluotkham']?>&idbenhannoitru=<?=$_GET['idbenhannoitru']?>&tungay=<?=$_GET['tungay']?>&denngay=<?=$_GET['denngay']?>&type=&trang="+trang+"&id_form=10", async: false, success: function(data, result) {if (!result) alert('Không load được dữ liệu');}}).responseText;
			$("#n_add_page").append(_report_data);
		}
		
	
		var mach=$("#mach").attr("rel"); 
		var nhietdo=$("#nhietdo").attr("rel"); 
		//for(var i=1;i<=demtrang;i++){
			draw_chart_dauhieusinhton(mach,nhietdo,1,demtrang);
			//alert(i);	
		//}
		//$(document).keydown(function(e) {
         // draw_chart_dauhieusinhton(mach,nhietdo,2);  
       // });
	
	//alert(demtrang);	
	//$("._chuky").rotate(90);
		});
		
function draw_chart_dauhieusinhton(mach,nhietdo,dem_trang,demtrang){
	var bieudo="bieudo"+dem_trang;
	t=setTimeout(function(){
	$("#"+bieudo).empty();
	var dauhieusinhton="dauhieusinhton"+dem_trang;
	var diengiai_sinhton="diengiai_sinhton"+dem_trang;
	$("#"+bieudo).append('<div class="'+diengiai_sinhton+'"><div class="n_chuthich"><div class="mach"></div>Hr<div class="nhiet"></div>Temp</div><div class="'+dauhieusinhton+'" id="'+dauhieusinhton+'" style="width:85%;"></div>');	
    // alert($("#inner-top").height());
	//$(".diengiai").css("height",
	$("."+dauhieusinhton).css("height",442+"px");
	$("."+dauhieusinhton).css("width",($("#"+bieudo).width())+50+"px");	
	$("."+diengiai_sinhton).css("top","0px");
	$("."+diengiai_sinhton).css("left",$("."+dauhieusinhton).width()+"px");
		//alert($(".dauhieusinhton").height());	
		
		chart_sinhton(mach,nhietdo,dem_trang,dauhieusinhton,demtrang);		 
		clearTimeout(t);		 
	},50);		
}
	dojo.require("dijit.form.HorizontalSlider");	 
	dojo.require("dijit.form.HorizontalRule");
	dojo.require("dijit.form.HorizontalRuleLabels");
	dojo.require("dojox.charting.Chart2D");
	dojo.require("dojox.charting.plot2d.Lines");//charting/plot2d/Lines
	dojo.require("dojox.charting.plot2d.Markers");						
	dojo.require("dojox.charting.themes.Midwest");
	dojo.require("dojox.lang.functional.object");

function chart_sinhton  (mach,nhietdo,dem_trang,dauhieusinhton,demtrang){
	//alert(mach);
	//alert(mach+'_'+nhietdo)
	if(dem_trang==1){
		var	vitri_i=0;
	}else{
		var	vitri_i=(dem_trang-1)*18;
	}
	var chartData =[];
	var chartData1 =[];
	var labelx=[];
	 var mach2=mach.split(",");
	  var nhietdo2=nhietdo.split(",");
	  
	  for (var i=vitri_i;i<mach2.length;i++)
		{
			 chartData.push(parseFloat(mach2[i]));
			// console.log(ps2[i]);
		}
		for (var i = vitri_i; i < nhietdo2.length; i++) {
			
			chartData1.push(parseFloat(nhietdo2[i]));
		}	
	// Create the chart within it's "holding" node
	var theme = dojox.charting.themes.Midwest;
	var chart = new dojox.charting.Chart2D(dauhieusinhton);
	//theme.setMarkers({ "CIRCLE":  "m-5,-5 l0,10 10,0 0,-10 z",  });
	/*theme.setMarkers({ 
				SQUARE:   "m-5,-5 l0,10 10,0 0,-10 z", 
 
	   
	}); */
	// Set the theme
	chart.setTheme(theme);
	
	// Add the only/default plot
	chart.addPlot("default", {
		fill: "#0000FF",
		stroke: {color:"#0000FF"},
		
		type: "Lines",
		markers: true,
	});
	chart.addPlot("nhietdo", {
		type: "Lines",
		fill: "red",
		stroke: {color:"red"},
		markers: true,
	});
	// Add axes
	
	var maxY =[chartData.max(),chartData1.max()];  	
	chart.addAxis("y", {
		 	min: 35,
			max: 42,
			from: 35,
			to: 42,
			vertical: true,
			htmlLabels: false 
			});   
	chart.addAxis("x", {            
			showTicks : true,
		//	htmlLabels: false,
			majorTickStep : 1, 
			//minorTickStep:20,
			min: 1,
			max: 18,
			from: 1,
			to: 18,
		}
			);
	 
	// Add the series of data
	chart.addSeries("mach",chartData);
	chart.addSeries("nhietdo", chartData1, {plot: "nhietdo"});
	// Render the chart!
	chart.render();
	remove_text(mach,nhietdo,dem_trang,demtrang);
};
function remove_text  (mach,nhietdo,dem_trang,demtrang){
$( "text:contains('1.')" ).remove();
$( "text:contains('2.')" ).remove();
$( "text:contains('3.')" ).remove();
$( "text:contains('4.')" ).remove();
$( "text:contains('5.')" ).remove();
$( "text:contains('6.')" ).remove();
$( "text:contains('7.')" ).remove();
$( "text:contains('0')" ).remove();
$( "text:contains('1')" ).remove();
$( "text:contains('2')" ).remove();
$( "text:contains('3')" ).remove();
$( "text:contains('4')" ).remove();
$( "text:contains('5')" ).remove();
$( "text:contains('6')" ).remove();
$( "text:contains('7')" ).remove();
$( "text:contains('8')" ).remove();
$( "text:contains('9')" ).remove();
$( "#dauhieusinhton"+dem_trang+" svg" ).find( "rect:first" ).remove();
$( "#dauhieusinhton"+dem_trang+" svg" ).find( "g:nth-child(7)" ).remove();
$( "#dauhieusinhton"+dem_trang+" svg" ).find( "g:nth-child(8)" ).remove();
$( "#dauhieusinhton"+dem_trang+" svg" ).find( "g:nth-child(9)" ).remove();
$( "#dauhieusinhton"+dem_trang+" svg" ).find( "g:last" ).remove();

$( "#dauhieusinhton"+dem_trang+" div:contains('1')" ).remove();
$( "#dauhieusinhton"+dem_trang+" div:contains('2')" ).remove();
$( "#dauhieusinhton"+dem_trang+" div:contains('3')" ).remove();
$( "#dauhieusinhton"+dem_trang+" div:contains('4')" ).remove();
$( "#dauhieusinhton"+dem_trang+" div:contains('5')" ).remove();
$( "#dauhieusinhton"+dem_trang+" div:contains('6')" ).remove();
$( "#dauhieusinhton"+dem_trang+" div:contains('7')" ).remove();
$( "#dauhieusinhton"+dem_trang+" div:contains('8')" ).remove();
$( "#dauhieusinhton"+dem_trang+" div:contains('9')" ).remove();

if(dem_trang+1<=demtrang){
	setTimeout(function(){
	draw_chart_dauhieusinhton(mach,nhietdo,dem_trang+1);
	}, 500);
}else{
	print_preview();
	}
}
	</script>

</html>
 