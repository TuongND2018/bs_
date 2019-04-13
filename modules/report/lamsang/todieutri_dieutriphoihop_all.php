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

</style>
</head>
 <?php
$data= new SQLServer;//tao lop ket noi SQL
$params = array($_GET["idtodieutrichitiet"]);//tao param cho store 
$store_name="{call GD2_DieuTriPhoiHopCheck_NhomCLSByID_ToDieuTriChitiet(?)}";//tao bien khai bao store
$get=$data->query( $store_name,$params);//Goi store
$excute= new SQLServerResult($get);//Ket noi lop xu ly SQL và truyen gia tri tra ve tu lop ket noi SQL
$checknhom= $excute->get_as_array();//Tra ve mang toan bo data lay duoc  
//print_r($checknhom);
 ?>
<body>
<?php 
if($checknhom[0]['vatlytrilieu_25']>0){
?>

<div id="vatlytrilieu" style="page-break-after: always">
  
</div>
<?php
}
?>
<?php 
if($checknhom[0]['dieuduong_26']>0){
?>

<div id="dieuduong" style="page-break-after: always">
  
</div>
<?php
}
?>
<?php 
if($checknhom[0]['phauthuatgiaithuat_23']>0){
?>

<div id="phauthuatgiaithuat" style="page-break-after: always">
  
</div>
<?php
}
?>
<?php 
if($checknhom[0]['family_planning_52']>0){
?>

<div id="family_planning" style="page-break-after: always">
  
</div>
<?php
}
?>

</body>
 <script type="application/javascript">
		$(document).ready(function() {
			<?php echo "var id_benhnhan=". $_GET['id_benhnhan'].";\n"; ?>
			<?php echo "var vatlytrilieu=". $checknhom[0]['vatlytrilieu_25'].";\n"; ?>
			<?php echo "var dieuduong=". $checknhom[0]['dieuduong_26'].";\n"; ?>
			<?php echo "var phauthuatgiaithuat=". $checknhom[0]['phauthuatgiaithuat_23'].";\n"; ?>
			<?php echo "var family_planning=". $checknhom[0]['family_planning_52'].";\n"; ?>
			window.xemtruocin=1;
				if(vatlytrilieu>0){
					var _report_data=$.ajax({url: "resource.php?module=report&view=lamsang&action=todieutri_phieuchidinhvltl&header=top&xemtruocin="+window.xemtruocin+"&id_benhnhan="+id_benhnhan+"&idtodieutrichitiet=<?=$_GET['idtodieutrichitiet']?>&type=&id_form=10", async: false, success: function(data, result) {if (!result) alert('Không load được danh mục NhomCLS');}}).responseText;
					$("#vatlytrilieu").append(_report_data);
					}
				if(dieuduong>0){
					var _report_data2=$.ajax({url: "resource.php?module=report&view=lamsang&action=todieutri_phieuchidinhdieuduong&header=top&xemtruocin="+window.xemtruocin+"&id_benhnhan="+id_benhnhan+"&idtodieutrichitiet=<?=$_GET['idtodieutrichitiet']?>&type=&id_form=10", async: false, success: function(data, result) {if (!result) alert('Không load được danh mục NhomCLS');}}).responseText;
					$("#dieuduong").append(_report_data2);
					}
				if(phauthuatgiaithuat>0){
					var _report_data3=$.ajax({url: "resource.php?module=report&view=lamsang&action=todieutri_phieuchidinhpt_tt&header=top&xemtruocin="+window.xemtruocin+"&id_benhnhan="+id_benhnhan+"&idtodieutrichitiet=<?=$_GET['idtodieutrichitiet']?>&type=&id_form=10", async: false, success: function(data, result) {if (!result) alert('Không load được danh mục NhomCLS');}}).responseText;
					$("#phauthuatgiaithuat").append(_report_data3);
					}
				if(family_planning>0){
					var _report_data4=$.ajax({url: "resource.php?module=report&view=lamsang&action=todieutri_phieuchidinhfamily_planning&header=top&xemtruocin="+window.xemtruocin+"&id_benhnhan="+id_benhnhan+"&idtodieutrichitiet=<?=$_GET['idtodieutrichitiet']?>&type=&id_form=10", async: false, success: function(data, result) {if (!result) alert('Không load được danh mục NhomCLS');}}).responseText;
					$("#family_planning").append(_report_data4);
					}
				print_preview();

	
		});
		
	</script>
</html>
 