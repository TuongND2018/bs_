<!DOCTYPE HTML>
<html lang="en">
       <?php
	   session_start();
		include("class.sqlserver.php");
          // echo     phpinfo();
      
$data= new SQLServer;//tao lop ket noi SQL
	
$store_name="{call GD2_GetCanNangChieuCaoByMaBenhNhan(?)}";//tao bien khai bao store
//$mabenhnhan='142932';

if (isset($_GET["id_benhnhan"])){
	$mabenhnhan=$_GET["id_benhnhan"];
}else{
	$mabenhnhan="";	
}
$params =array($mabenhnhan);    

$get_cannang=$data->query( $store_name, $params);//Goi store
$excute= new SQLServerResult($get_cannang);//Ket noi lop xu ly SQL và truyen gia tri tra ve tu lop ket noi SQL
$tam= $excute->get_as_array();//Tra ve mang toan bo data lay duoc 
if(count($tam)==0){//kiểm tra nếu ko có dữ liệu thì chỉ cho vẽ chart nền
	$veline =false;
	}else{
		$veline =true;
		};
		
		
		
$size = sizeof($tam);
if($size>1)
{$chuoi='false';}
    else
    {
        $chuoi='true';
    }
        
$bienve = "chart.addPlot('plotLine', {type: 'Lines', hAxis: 'x2',markers: ".  $chuoi .", vAxis: 'y2', animate: {duration: 900}});
				chart.addSeries('Series X', chartLine, {plot: 'plotLine' , stroke: {color:'black'}, fill: '#02c3ec'});";


//echo $size;
if (!empty($tam)) {
   
         
     foreach ($tam as $v) {
         $arayLine1[]=$v["ThoiDiem"];
		 $arayLine3[]=$v["Nang"];
     }
	 for($i=0;$i<=60;$i++){
		$arayLine2[$i]='null';
		for($ii=0;$ii<=count($arayLine1)-1;$ii++){ 
			if($arayLine1[$ii]==$i){
			 	$arayLine2[$i]=round($arayLine3[$ii],2
                                        ); 
			}			 
	 	}
 
	 }
}
?>
	<head>
		<meta charset="utf-8">
		<title>Cân nặng bé trai theo tuổi</title>
    
		<script src="../js/dojo/dojo/dojo.js" type="text/javascript"></script>
		<script>
			
			// Require the dependencies
			dojo.require("dijit.form.HorizontalSlider");	 
			dojo.require("dijit.form.HorizontalRule");
			dojo.require("dijit.form.HorizontalRuleLabels");
			dojo.require("dojox.charting.Chart2D");
			dojo.require("dojox.charting.plot2d.Lines");//charting/plot2d/Lines
            dojo.require("dojox.charting.plot2d.Markers");						
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
					
						 var chartLine=[];
                            
                            <?php    
							if  ($veline){
							 	$chinh=0;       
                                 foreach ($tam as $v) {
									 if($chinh==0){
										 $_SESSION["diachi"]=$v["DiaChi"];
										 $_SESSION["ho"]=$v["HoLotBenhNhan"];
										 $_SESSION["ten"]=$v["TenBenhNhan"];
										 $_SESSION["namsinh"]=$v["NgayThangNamSinh"];
										 $chinh++;
									 }
                                                                         
									 $arayLine1[]=$v["ThoiDiem"];
									 $arayLine3[]=$v["Nang"];
                                                                 

							 }
                                
	 for($i=0;$i<=59;$i++){
		$arayLine2[$i]='null';
		for($ii=0;$ii<=count($arayLine1)-1;$ii++){ 
			if($arayLine1[$ii]==$i){
			 	$arayLine2[$i]=round($arayLine3[$ii],3); 
                                 
			}                
	 	}
         
   		//echo "chartLine[$i]=$arayLine2[$i];\n" ;
		
$bienve1="
<label   id='tt1' >  Họ và tên trẻ:" . $v["HoLotBenhNhan"] . " " . $v["TenBenhNhan"] ." </label><br>
        <label   id='tt2' >  Địa chỉ:" . $v["DiaChi" ]. " </label><br>
        <label   id='tt3' >  Ngày tháng năm sinh:" . $v["NgayThangNamSinh"]->format("d/m/Y") . "</label>";
}
	 } ?> 		
	 
	 
	 			 <?php					if  ($veline == true){  
					   $kiemtra_khoangcach=false;
					   $cache_i=0;
					   $dem=1;
					   for ($i=0; $i<=count($arayLine2)-1; $i++){										  
						   if(($arayLine2[$i]!='null')){
							   if($kiemtra_khoangcach==true){											  
								   $tam=$arayLine2[$i]-$arayLine2[$cache_i];											  
								   $tam1=abs($i-$cache_i);											 
								   $tam2=($tam/$tam1);											    
								   for($ii=$cache_i+1;$ii<=$i-1;$ii++){												   
										 if($ii==$cache_i+1){  
											$arayLine2[$ii]=$arayLine2[$cache_i]+$tam2;
										 }else{
											$arayLine2[$ii]=$arayLine2[$ii-1]+$tam2;
										 }							
								   }
								   $kiemtra_khoangcach=false;
								   $cache_i=$i;  
							   }else{
								 $cache_i=$i;  
							   }								 
						   }									   
						   if(($cache_i<$i)&&($arayLine2[$i]=='null')&&($cache_i>0)){
							   $kiemtra_khoangcach=true;											
						   }
					   }
					   for ($i=0; $i<=60; $i++){						   
					   		echo "chartLine[$i]=$arayLine2[$i];\n" ;
					   }					
				 }
                   ?>
			<?php if($veline == true){
				echo $bienve;
				}?>
				/*chart.addPlot("plotLine", {type: "Lines", hAxis: "x2",markers: , vAxis: "y2", animate: {duration: 900}});
				chart.addSeries("Series X", chartLine, {plot: "plotLine" , stroke: {color:"black"}, fill: "#02c3ec"});*/
                                // chart.addSeries("Series X", [1, 2, 2, 3, 4, 5, 5, 7]);
				chart.addPlot("grid", { type: "Grid", hMinorLines: true, hMajorLines: true,hMinorLines: {stroke: "white",width:  0, length: 0}});
				
				 var chartData4=[null,5,null,null,null,null,null,null,null,10];     
				 chart.addSeries("Series D", chartData4, {plot: "plot4" , stroke: {color:"red"}, fill: "red"});				
				chart.addAxis("y2", {vertical: true, min: 0, max: 30, majorTickStep: 2, leftBottom: false, stroke: "red",
				majorTick: {stroke: "black", length: 0}, minorTick: {stroke: "gray", length: 0}});
				
				chart.addPlot("plot1", {type: "Areas",hAxis: "x2", vAxis: "y2", animate: {duration: 900}});
				
				
				
				
				 var chartData=[];
                                
                                 
                                 
				 <?php
		  		   $pow1=0.58038; $pow2=0.6058;$pow3=0.730;$pow4=0.765;
				   $heso1=1.8; $heso2=2.4;$heso3=4.5;$heso4=5;
						  $arayLine1=array();						 
						  for ($i=0; $i<=60; $i++){									 
							 	$temp[]='null';	 
						  }
						 $temp[0]=2; $temp[1]=2.98; $temp[2]=3.8; $temp[3]=4.47; $temp[4]=5; $temp[5]=5.4;
						 $temp[6]=5.7; $temp[7]=5.98; $temp[8]=6.2; $temp[9]=6.4; $temp[10]=6.6; $temp[11]=6.75; $temp[12]=6.9;
						 $temp[60]=12.3;
						 $cache_i=0;$kiemtra_khoangcach=false;
						 for ($i=0; $i<=count($temp)-1; $i++){										  
						   if(( $temp[$i]!='null')){
							   if($kiemtra_khoangcach==true){											  
								   $tam= $temp[$i]- $temp[$cache_i];											  
								   $tam1=abs($i-$cache_i);											 
								   $tam2=($tam/$tam1);											    
								   for($ii=$cache_i+1;$ii<=$i-1;$ii++){												   
										 if($ii==$cache_i+1){  
											 $temp[$ii]= $temp[$cache_i]+$tam2;
										 }else{
											 $temp[$ii]= $temp[$ii-1]+$tam2;
										 }							
								   }
								   $kiemtra_khoangcach=false;
								   $cache_i=$i;  
							   }else{
								 $cache_i=$i;  
							   }								 
						   }									   
						   if(($cache_i<$i)&&($temp[$i]=='null')&&($cache_i>0)){
							   $kiemtra_khoangcach=true;											
						   }
					   }
						 
						 
						  for ($i=0; $i<=60; $i++){									 
							 	 echo "chartData[$i]= $temp[$i];\n" ;				                             
							 	 
						  } 
 
						 
				 ?>
				 
				 
				chart.addSeries("Series A", chartData, {plot: "plot1" , stroke: {color:"#ffffff"}, fill: "#d90000"});
				//chart.addAxis("x2", {fixLower: "minor", natural: true, leftBottom: false, stroke: "grey",
					//majorTick: {stroke: "black", length: 4}, minorTick: {stroke: "gray", length: 2}});
					
				chart.addAxis("y2", {vertical: true, min: 0, max: 30, majorTickStep: 2, leftBottom: false, stroke: "grey",
					majorTick: {stroke: "black", length: 0}, minorTick: {stroke: "gray", length: 0}});
				chart.addPlot("plot2", {type: "Areas", hAxis: "x2", vAxis: "y2", animate: {duration: 900}});
				  var chartData2=[];
                      <?php               						 
						  for ($i=0; $i<=60; $i++){									 
							 	$temp2[]='null';	 
						  }
						 $temp2[0]=2.4; $temp2[1]=3.5; $temp2[2]=4.4; $temp2[3]=5.1; $temp2[4]=5.6; $temp2[5]=6;
						 $temp2[6]=6.35; $temp2[7]=6.65; $temp2[8]=6.92; $temp2[9]=7.17; $temp2[10]=7.4; $temp2[11]=7.58; $temp2[12]=7.75;
						 $temp2[60]=14.1;
						 $cache_i=0;$kiemtra_khoangcach=false;
						 for ($i=0; $i<=count($temp2)-1; $i++){										  
						   if(( $temp2[$i]!='null')){
							   if($kiemtra_khoangcach==true){											  
								   $tam= $temp2[$i]- $temp2[$cache_i];											  
								   $tam1=abs($i-$cache_i);											 
								   $tam2=($tam/$tam1);											    
								   for($ii=$cache_i+1;$ii<=$i-1;$ii++){												   
										 if($ii==$cache_i+1){  
											 $temp2[$ii]= $temp2[$cache_i]+$tam2;
										 }else{
											 $temp2[$ii]= $temp2[$ii-1]+$tam2;
										 }							
								   }
								   $kiemtra_khoangcach=false;
								   $cache_i=$i;  
							   }else{
								 $cache_i=$i;  
							   }								 
						   }									   
						   if(($cache_i<$i)&&($temp2[$i]=='null')&&($cache_i>0)){
							   $kiemtra_khoangcach=true;											
						   }
					   }
						 
						 
						  for ($i=0; $i<=60; $i++){									 
							 	 echo "chartData2[$i]= $temp2[$i];\n" ;				                             
							 	 
						  } 
                         ?>
				chart.addSeries("Series B", chartData2, {plot: "plot2" , stroke: {color:"#ffffff"}, fill: "#ffc600"});
				  var chartData3=[];
                    <?php               
                          for ($i=0; $i<=60; $i++){									 
							 	$temp3[]='null';	 
						  }
						 $temp3[0]=4.5; $temp3[1]=5.7; $temp3[2]=7; $temp3[3]=8; $temp3[4]=8.8; $temp3[5]=9.4;
						 $temp3[6]=9.9; $temp3[7]=10.35; $temp3[8]=10.75; $temp3[9]=11.15; $temp3[10]=11.55; $temp3[11]=11.9; $temp3[12]=12.2;
						 $temp3[60]=24.2;
						 $cache_i=0;$kiemtra_khoangcach=false;
						 for ($i=0; $i<=count($temp3)-1; $i++){										  
						   if(( $temp3[$i]!='null')){
							   if($kiemtra_khoangcach==true){											  
								   $tam= $temp3[$i]- $temp3[$cache_i];											  
								   $tam1=abs($i-$cache_i);											 
								   $tam2=($tam/$tam1);											    
								   for($ii=$cache_i+1;$ii<=$i-1;$ii++){												   
										 if($ii==$cache_i+1){  
											 $temp3[$ii]= $temp3[$cache_i]+$tam2;
										 }else{
											 $temp3[$ii]= $temp3[$ii-1]+$tam2;
										 }							
								   }
								   $kiemtra_khoangcach=false;
								   $cache_i=$i;  
							   }else{
								 $cache_i=$i;  
							   }								 
						   }									   
						   if(($cache_i<$i)&&($temp3[$i]=='null')&&($cache_i>0)){
							   $kiemtra_khoangcach=true;											
						   }
					   }
						 
						 
						  for ($i=0; $i<=60; $i++){									 
							 	 echo "chartData3[$i]= $temp3[$i];\n" ;				                             
							 	 
						  } 
 
                 ?>
                                 
				chart.addSeries("Series C", chartData3, {plot: "plot3" , stroke: {color:"#ffffff"}, fill: "#02c3ec"});
				chart.addPlot("plot3", {type: "Areas", hAxis: "x2", vAxis: "y2", animate: {duration: 900}});
				
				chart.addPlot("plot4", { hAxis: "x2", vAxis: "y2", animate: {duration: 900}});

				// Add change events to the sliders to know when chart changes should be trigger		 
			chart.render();
			  
			
			  
			  
			};
			
			// When the DOM and resources are ready, create the chart and add events to it
			dojo.ready(makeObjects);
					
		</script>
         <style type="text/css">
		 body{font-family:"Tahoma", Geneva, sans-serif; font-size:12px;}
		
		.label_des
                {
			position:absolute;
			left:50px;
			top:100px;
                       
		}
		.label_des label{
			text-indent:5px;
			padding:0px;
		}
                
 #t1
{
    color:#000    ;
    background-color: #fff;
    border-style:solid;
            border-width:1px;
    text-align:left;
	border-bottom:none;
}
 #t2
{
    color:#000    ;
    background-color: #02c3ec;  
}
 #t3
{
    color:#000    ;
        background-color: #ffc600;  
}
 #t4
{
    color:#000    ;
    background-color: #d90000;
	border-bottom:solid 1px;
}
#t5
{
    font-style: italic; 
    color: #ae0001; 
    font-family: tahoma;
    border-color: #000;
	border-bottom:none;
         border-top: none;
}
#t6
{
    color:#000    ;
	border-bottom:none;
        border-top: none;
        top: 0px;
}
#t7
{
    color:#000    ;
	border-bottom:none;
        border-top: none;
}
 #t0
{
color:#02c3ec    ;
    background-color: #ffc600!important;  
}
.mauchung
{
	border-style:solid;
        border-width:1px; 
        text-align:left;
        width: 300px;
        display: block;
		border-bottom:none;
		padding:5px 0px!important; 
		display:block;
}
hr{
	line-height:0px!important; 
	border:none;
	height:0px!important; 
	border-bottom:solid 1px #ccc;
	 
}
h1
{
	font:Tahoma, Geneva, sans-serif!important;
	font-size:24px;
        color: #0000FF;
text-decoration:underline;
font-weight:bold;
padding:0px;
margin:0px;
line-height:5px;
	}
	h2
{font-size:17px;
font:Arial;
padding:0px;
font-style:italic;
margin:0px;
line-height:5px;
	}
.box_rotate {
     -moz-transform: rotate(270deg);  /* FF3.5+ */
     -o-transform: rotate(270deg);  /* Opera 10.5 */
  	 -webkit-transform: rotate(270deg);  /* Saf3.1+, Chrome */
     filter:  progid:DXImageTransform.Microsoft.BasicImage(rotation=0.270);  /* IE6,IE7 */
	 -ms-filter: "progid:DXImageTransform.Microsoft.BasicImage(rotation=0.083)"; /* IE8 */
	 position:absolute;
	 z-index:10;
	 left:-30px;
	 top:60%;
	 font-weight:bold;
}
div#ima1
{
transform:rotate(-25deg);
-ms-transform:rotate(-25deg); /* IE 9 */
-webkit-transform:rotate(-25deg); /* Safari and Chrome */
} 
div#ima3
{
transform:rotate(15deg);
-ms-transform:rotate(15deg); /* IE 9 */
-webkit-transform:rotate(15deg); /* Safari and Chrome */
} 
.thongtinbenhnhan
{
    position:absolute;
	left:800px;			 
    top:100px;
	width:300px;
        font-size: 18;
        font-family: tahoma;
        
	
 
}

  


  </style>         
	</head>
        <?php 

?>
 
 <body>   
  
    <div class="box_rotate">Cân nặng(kg)</div>
         
        
         <table cellpadding="0" cellpadding="0" style="width:100%" border="0">
         <tr>
       	   <td height="40" style="width:90%"><h1 align="left" color="#ffc600">Cân nặng theo tuổi - Bé trai </h1></td>
             <td rowspan="2" > <img src="../images/chart/viendinhduong_logo.png" width="52" height="68"> </td>	
             <td rowspan="2" > <img src="../images/chart/logo_WorldHealth.png" width="192" height="65"> </td>

         </tr>
         <tr>
        	 <td height="20" > <h2 color="#ffc600">   Dùng cho trẻ từ lúc mới sinh cho đến khi đầy 5 tuổi</h2></td>
         </tr>
         
         </table>
   
    <div class="label_des">
         <label    class="mauchung" style=" background-color: #fff;" >  Cân nặng cao hơn so với tuổi  </label>
          <label    class="mauchung" style=" background-color: #02c3ec">  Cân nặng bình thường  </label>
          <label  class="mauchung" style="background-color: #ffc600"   >  Suy dinh dưỡng vừa  </label>
        
   <label    class="mauchung" style=" background-color: #d90000"  >  Suy dinh dưỡng nặng  </label>
   <label   id="t5" class="mauchung" style="background-color:#fff" >GHI CHÚ</label>
    <label   id="t6" class="mauchung" style="background-color:#fff" > - Ưu tiên chăm sóc trẻ em từ 0 đến 24 tháng tuổi</label>
    <label   id="t7" class="mauchung" style ="background-color:#fff "> - Nếu đường biếu diễn theo chiều hướng:</label>
    
    
    <div  style="background-color:#fff; display:table-cell;text-align:center; width:100px; height:70px; border:1px solid #000">
        <div id="ima1" style="margin-top:15px;margin-bottom:14px;">
       	 <img style="left:0px" src="../images/chart/line.jpg" width="70" height="8">
        </div> 
        <div  STYLE=" color: #000 ; font-family: tahoma;font-size: 13px">đi lên là</div> 
   <label STYLE=" color: #007020 ; font-family: tahoma;font-weight: bold;font-size: 13px">BÌNH THƯỜNG</LABEL>
    </div>
    
    <div  style="background-color:#fff; display:table-cell; text-align:center; width:100px; height:70px; border-top:1px solid #000; border-right:1px solid #000; border-bottom:1px solid #000;">
        <div id="ima2" style="margin-top:25px;margin-bottom:17px;">
            <img src="../images/chart/line.jpg" width="70" height="8">
        </div>  
         <div  STYLE=" color: #000 ;text-align:center; font-family: tahoma;font-size: 12px">nằm ngang là </div> <label STYLE=" color: #0000FF ;font-family: tahoma;font-weight: bold;font-size: 12px">  ĐE DỌA </LABEL>
    </div>
    
    <div  style="background-color:#fff;text-align:center; display:table-cell; width:98px; height:70px; border-top:1px solid #000; border-right:1px solid #000; border-bottom:1px solid #000;">
        <div id="ima3"  style="margin-top:15px;margin-bottom:14px;">
            <img src="../images/chart/line.jpg" width="70" height="8">
        </div> 
           <div  STYLE=" color: #000 ; font-family: tahoma;font-size: 13px">đi xuống là</div> <label STYLE=" color: #681818;font-family: tahoma;font-weight: bold;font-size: 12px">  NGUY HIỂM </LABEL>
    </div>

        
 </div> 
     <div class="thongtinbenhnhan">
     
      <?php if($veline == true){
	   echo $bienve1;
	  }
	  ?>
        
        
    </div>  

  	<body class="Midwest">	  
           
		<div  id="chart" style="width: 1350px; height: 870px; margin-left:30px"></div>	
               
            
	</body>
     
      
</html>
