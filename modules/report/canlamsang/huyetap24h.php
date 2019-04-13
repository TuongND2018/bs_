<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Report</title>
<script src="../giaidoan2/js/dojo/dojo/dojo.js" type="text/javascript"></script>
<style >
.diengiai_sinhton{
	/*	position:absolute;*/
		width:120px;	
		float:right;
	 }
	 .diengiai_sinhton{		 
		 font-size:10px;		 		
	 }
	 .diengiai_sinhton div{
		 display:inline-block;	 		 		
	 }
	#ps {
	margin-right:4px;
	 margin-left:4px;	
	width: 0;
	height: 0;
	border: 4px solid transparent;
	border-bottom-color: red;
	position: relative;
	top: -4px;
	}
	#ps:after {
	content: '';
	position: absolute;
	left: -4px;
	top: 4px;
	width: 0;
	height: 0;
	border: 4px solid transparent;
	border-top-color: red;
}
	 #pd{
		 margin-right:4px;
	 margin-left:4px;
		 content: '';
		border: 4px solid red;

		top: -4px;		 
	 }
	 #hr{	
		margin-right:4px;
		margin-left:4px;
		content: '';
		border: 4px solid #00c6ff;
		border-radius: 7px;
		top: -4px;			 
	 }	
body{
	overflow:auto;
}
pre {
 white-space: pre-wrap;       /* css-3 */
 white-space: -moz-pre-wrap;  /* Mozilla, since 1999 */
 white-space: -pre-wrap;      /* Opera 4-6 */
 white-space: -o-pre-wrap;    /* Opera 7 */
 word-wrap: break-word;       /* Internet Explorer 5.5+ */
 font:13px arial, Geneva, sans-serif;
} 
</style>
</head>
 
<body>
	<?php
        $data= new SQLServer;//tao lop ket noi SQL
        $params = array($_GET["id_benhnhan"]);//tao param cho store 
        $store_name="{call GD2_GetThongTinBenhNhan(?)}";//tao bien khai bao store
        $get_thongtinbenhnhan=$data->query( $store_name,$params);//Goi store
        $excute= new SQLServerResult($get_thongtinbenhnhan);//Ket noi lop xu ly SQL và truyen gia tri tra ve tu lop ket noi SQL
        $thongtinbenhnhan= $excute->get_as_array();//Tra ve mang toan bo data lay duoc  
		 
		
		$params1 = array($_GET["id_kham"]);//tao param cho store 
        $store_name1="{call GD2_GetKhamById_Kham(?)}";//tao bien khai bao store
        $get_thongtinluotkham=$data->query( $store_name1,$params1);//Goi store
        $excute1= new SQLServerResult($get_thongtinluotkham);//Ket noi lop xu ly SQL và truyen gia tri tra ve tu lop ket noi SQL
        $thongtinluotkham= $excute1->get_as_array();//Tra ve mang toan bo data lay duoc
		  
		
		$params2 = array($_GET["id_kham"]);//tao param cho store 
        $store_name2="{call spHuyetAp24h_SelectAllByID_Kham(?)}";//tao bien khai bao store
        $get_thongso=$data->query( $store_name2,$params2);//Goi store
        $excute2= new SQLServerResult($get_thongso);//Ket noi lop xu ly SQL và truyen gia tri tra ve tu lop ket noi SQL
        $thongso= $excute2->get_as_array();//Tra ve mang toan bo data lay duoc
		//print_r($thongtinluotkham);	
		   
    ?>

	<?php if($_GET["header"]=="left"){ ?>
		<div style="font-size:12px;font-family:Tahoma, Geneva, sans-serif;-webkit-transform: rotate(270deg);-moz-transform: rotate(270deg);-o-transform: rotate(270deg);writing-mode: rl-tb;position:absolute;top:350px;left:-328px">  <span style="letter-spacing: 0.5px;font-weight:bold">FAMILY</span> <img src="images/logo_print.png" />  <span style="letter-spacing: 0.5px;text-transform:uppercase"><?php echo $_SESSION["com"]["TenBenhVien"]?></span> - <?php echo $_SESSION["com"]["DiaChi"]?> * T: <?php echo $_SESSION["com"]["SoDT"]?></div>
	<?php } ?>
	<?php if($_GET["header"]=="top"){ ?>   
    <table cellpadding="0" cellspacing="0" border="0" style="width:100%;font-family:Tahoma, Geneva, sans-serif;">
         <tr style="font-size:14px;">
             <td style=" width:60%;">
                <span style="letter-spacing: 0.5px;font-weight:bold">FAMILY</span> <img src="images/logo_print.png" /> 
                <br />
                <span style="letter-spacing: 0.5px;text-transform:uppercase"><?php echo $_SESSION["com"]["TenBenhVien"]?></span>
             </td>
             <td style=" width:40%; text-align:right">
                Địa chỉ: <?php echo $_SESSION["com"]["DiaChi"]?>
                <br />
                SĐT: <?php echo $_SESSION["com"]["SoDT"]?>
             </td>
         </tr>               
     </table>     
     <?php	} ?>
     <?php if($_GET["header"]=="left"){ ?>
<div style=" margin-left:55px;margin-top:20px">
     <?php	} ?>
     <table cellpadding="0" cellspacing="0" border="0" style="width:100%;font-family:Tahoma, Geneva, sans-serif;color:#00b38b">
     	<tr>
             <td style="text-align:center">
                <span style="letter-spacing: 0.5px;font-weight:bold;font-size:26px;">BIỂU ĐỒ HUYẾT ÁP 24 GIỜ</span>
                <br />
                <span style="font-weight:bold;font-size:20px;">(AMBULATORY BLOOD PRESSURE MONITORING)</span>
                <br />
                <span style="font-weight:bold;font-size:20px;">*******</span>
                <div style="height:10px;">
                </div>
             </td>
         
       </tr>    
     </table>
  <table cellpadding="0" cellspacing="0" border="0" style="color:#036;font-size:13px; width:1000px;font-family:Tahoma, Geneva, sans-serif; border-top:1px solid #000; border-bottom:1px solid #000; padding:5px 0px">         
         <tr>
            <td> Họ tên: <b><?=$thongtinbenhnhan[0]["HoLotBenhNhan"]." ".$thongtinbenhnhan[0]["TenBenhNhan"];?></b></td> 
            <td>Tuổi: <?=$thongtinbenhnhan[0]["Tuoi"];?></td>
            <td>G.tính: <?=$thongtinbenhnhan[0]["Gioi"];?></td>
            <td>ID: <?=$thongtinbenhnhan[0]["MaBenhNhan"]."_".date("dmyHi");?></td>
         </tr>
         <tr>
            <td  style="width:57%">Địa chỉ: <?=$thongtinbenhnhan[0]["DiaChi"];?></td> 
            <td colspan="3">Ngày khám:  <?php
			if($thongtinluotkham[0]["NgayGioChanDoan"]!=""){
            	echo $thongtinluotkham[0]["NgayGioChanDoan"]->format("H:i ".$_SESSION["config_system"]["ngaythang"]);
			}
			?></td>            
         </tr>  
          <tr>
            <td colspan="4">HA:  <?=$thongtinbenhnhan[0]["Ps"];?>/<?=$thongtinbenhnhan[0]["Pd"];?> mmHg - Mạch: <?=$thongtinbenhnhan[0]["Mach"];?> lần/phút - Nặng: <?=$thongtinbenhnhan[0]["CanNang"];?> kg - Cao: <?=$thongtinbenhnhan[0]["ChieuCao"];?> cm - BMI: 
            <?php
				$BMI= $thongtinbenhnhan[0]["CanNang"]/($thongtinbenhnhan[0]["ChieuCao"]*$thongtinbenhnhan[0]["ChieuCao"])*10000;
				echo round($BMI,1);			
				if($BMI<18.5 ){
					echo " (Gầy)";                 
				}else if(($BMI>=18.5)&&($BMI<23)){
					echo " (Bình thường)";                
				}else if(($BMI>=23)&&($BMI<25)){
					echo " (Thừa cân)";                 
				}else if(($BMI>=25)&&($BMI<30)){
					echo " (Béo phì độ I)";                 
				}else if(($BMI>=30)&&($BMI<35)){
					echo " (Béo phì độ II)";               
				}else if($BMI>=35){
					echo " (Béo phì độ III)";                
				}
			?>
            </td>       
         </tr>     
  </table>
     <?php
		$i=0;
		$ps=array();
		$pd=array();
		$hr=array();
		$gio=array();
		$_ps=0;
		$_pd=0;
		$_hr=0;
		foreach($thongso as $ts){
			$ps[$i]=$ts['Ps'];
			$pd[$i]=$ts['Pd'];
			$hr[$i]=$ts['HR'];
			$gio[$i]=$ts['ExtField2'];
			$_ps=$_ps+$ts['Ps'];
			$_pd=$_pd+$ts['Pd'];
			$_hr=$_hr+$ts['HR'];
			$i++;
		}
		$tb_ps=$_ps/(count($thongso));
		$tb_pd=$_pd/(count($thongso));
		$tb_hr=$_hr/(count($thongso));
		$ps=implode(",",$ps); 
		$pd=implode(",",$pd); 
		$hr=implode(",",$hr); 
		$gio=implode(",",$gio); 
		echo "<input type='hidden' id='ps' rel='$ps'>";
		echo "<input type='hidden' id='pd' rel='$pd'>";
		echo "<input type='hidden' id='hr' rel='$hr'>";
		echo "<input type='hidden' id='gio' rel='$gio'>";
		?>
  <table  cellpadding="0" cellspacing="0" border="0" style="color:#036;font-size:13px; width:1000px;font-family:Tahoma, Geneva, sans-serif; padding:5px 0px; margin-right:10px;">
    <tr>
      <td colspan="4" id="bieudo" style="width:100%; height:330px; border:2px solid #000;">&nbsp;</td>
     </tr>
    <tr >
    <?php
	$giodo=$thongso[0]['ExtField2'];
	$tam=explode(":",$giodo);
	$giodo2=$thongso[count($thongso)-1]['ExtField2'];
	$tam2=explode(":",$giodo2);
	$gio=$tam2[0]-$tam[0];
	$phut=$tam2[1]-$tam[1];

	?>
      <td style="padding-top:5px;padding-bottom:5px; width:30%;"><strong>Thời gian thực hiện: <?=$gio;?> giờ <?=$phut;?> phút </strong></td>
      <td style="padding-top:5px;padding-bottom:5px; width:10%;"><strong>Số lần đo: <?=count($thongso); ?> </strong></td>
      <td style="padding-top:5px;padding-bottom:5px; width:30%;"><strong>Huyết áp trung bình: <?=round($tb_ps); ?>/<?=round($tb_pd); ?> mmHg </strong></td>
      <td style="padding-top:5px;padding-bottom:5px; width:30%;"><strong>Nhịp tim trung bình: <?=round($tb_hr); ?> nhịp / phút </strong></td>
    </tr>
    <tr>
      <td colspan="4"><strong>KẾT LUẬN: <?=$thongtinluotkham[0]['KetLuan'];?> </strong></td>
     </tr>
    <tr>
      <td colspan="4" align="right" style=" padding-right:50px; padding-top:5px;padding-bottom:5px;"><em>In từ dữ liệu gốc, Ngày <?php echo $thongtinluotkham[0]["NgayGioChanDoan"]->format("d")." tháng " . $thongtinluotkham[0]["NgayGioChanDoan"]->format("m")." năm " .  $thongtinluotkham[0]["NgayGioChanDoan"]->format("Y"); ?></em></td>
     </tr>
      
    <tr>
      <td colspan="2" align="center" style=" padding-left:145px;" >
      
      </td>
      <td colspan="2" align="center" style=" padding-left:250px;"><strong>BÁC SỸ CHẨN ĐOÁN</strong>
      <div style="height:70px"><img id="bs_chandoan" width="100"/></div>
     <?=$thongtinluotkham[0]['BsChanDoan'];?>
      
      </td>
     </tr>
     <tr>
       <td colspan="4">&nbsp;</td>
     </tr>
  </table>
     
  <?php if($_GET["header"]=="left"){ ?>
  </div>
    <?php	} ?>
 </script>
    
    <script type="text/javascript">
	$(document).ready(function() {
			var ps=$("#ps").attr("rel"); 
			var pd=$("#pd").attr("rel"); 
			var hr=$("#hr").attr("rel"); 
			var gio=$("#gio").attr("rel"); 
			draw_chart_dauhieusinhton2(ps,pd,hr,gio);
			if(1==<?php echo($_GET["chuky"])?>)
			{
				load_sign('<?=$thongtinluotkham[0]["chuky_bacsy"]?>',"bs_chandoan");
			}	
			
			print_preview();
		
	});
	
	function draw_chart_dauhieusinhton2(ps,pd,hr,gio){
	t=setTimeout(function(){
	$("#bieudo").empty();
	//$(".left_col").removeClass("dauhieusinhton");	
	$("#bieudo").append('<div class="diengiai_sinhton"><div id="ps"></div>Ps<div id="pd"></div>Pd<div id="hr"></div>Hr  </div><div style="height:5px"></div><div class="dauhieusinhton" id="dauhieusinhton" style="width:85%; margin-left:5px;"></div>');	
    // alert($("#inner-top").height());
	//$(".diengiai").css("height",
	$(".dauhieusinhton").css("height",($("#bieudo").height()-40)+"px");
	$(".dauhieusinhton").css("width",($("#bieudo").width()-16)+"px");	
	$(".diengiai_sinhton").css("top","9px");
	$(".diengiai_sinhton").css("left",$(".dauhieusinhton").width()-100+"px");
		//alert($(".dauhieusinhton").height());	
		chart_sinhton2(ps,pd,hr,gio);		 
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
	
	function chart_sinhton2  (ps,pd,hr,gio){
		// When the DOM is ready and resources are loaded...
	 
		// Define the data
		
		var chartData =[];
		var chartData1 =[];
		var chartData2 =[];
		var labelx=[];
		 var ps2=ps.split(",");
			  var pd2=pd.split(",");
			  var hr2=hr.split(",");
			  var gio2=gio.split(",");
			  
			  for (var i=0;i<ps2.length;i++)
				{
					 chartData.push(parseInt(ps2[i]));
					// console.log(ps2[i]);
				}
				for (var i = 0; i < pd2.length; i++) {
					
					chartData1.push(parseInt(pd2[i]));
				}
				for (var i = 0; i < hr2.length; i++) {
					chartData2.push(parseInt(hr2[i]));
				}
				for (var i = 0; i < gio2.length; i++) {
					labelx.push();
					labelx.push({value:(i+1), text:gio2[i]});
				}	
		// Create the chart within it's "holding" node
		var theme = dojox.charting.themes.Midwest;
		var chart = new dojox.charting.Chart2D("dauhieusinhton");
		//theme.setMarkers({ "CIRCLE":  "m-5,-5 l0,10 10,0 0,-10 z",  });
		/*theme.setMarkers({ 
					SQUARE:   "m-5,-5 l0,10 10,0 0,-10 z", 
	 
		   
		}); */
		// Set the theme
		chart.setTheme(theme);
		
		// Add the only/default plot
		chart.addPlot("default", {
			type: "Lines",
			markers: true,
			fill: "red",
			stroke: {color:"red"},
			animate: {duration: 300}
		});
		chart.addPlot("Pd", {
			type: "Lines",
			markers: true,
			fill: "#ff8a00",
			stroke: {color:"#ff8a00"},
			animate: {duration: 300}
		});
		chart.addPlot("Hr", {
			type: "Lines",
			markers: true,
			fill: "#00c6ff",
			stroke: {color:"#00c6ff"},
			animate: {duration: 300}
		});
		// Add axes
		
		var maxY =[chartData.max()+5,chartData1.max()+5,chartData2.max()+5];  	
		chart.addAxis("y", { min: 0, max: maxY.max(), vertical: true, });   
		chart.addAxis("x", {            
				includeZero: false, 
				labels: labelx,
				rotation:90
			}
				);
		
		
	 
		// Add the series of data
		chart.addSeries("Ps",chartData);
		chart.addSeries("Pd", chartData1, {plot: "Pd"});
		chart.addSeries("Hr", chartData2, {plot: "Hr"});
		// Render the chart!
		chart.render();
	    remove_text();
	};
	function remove_text  (){
	$( "text:contains('1.')" ).remove();
	$( "text:contains('2.')" ).remove();
	$( "text:contains('3.')" ).remove();
	$( "text:contains('4.')" ).remove();
	$( "text:contains('5.')" ).remove();
	$( "text:contains('6.')" ).remove();
	$( "text:contains('7.')" ).remove();
	}
	

	</script>
</body>
</html>
 