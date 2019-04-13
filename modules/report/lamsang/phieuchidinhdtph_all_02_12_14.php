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
 
<body>
<?php 
if($_GET['vatlytrilieu']==1){
?>

<div id="vatlytrilieu" style="page-break-after: always">
  
</div>
<?php
}
?>
<?php 
if($_GET['dieuduong']==1){
?>

<div id="dieuduong" style="page-break-after: always">
  
</div>
<?php
}
?>
<?php 
if($_GET['phauthuatgiaithuat']==1){
?>

<div id="phauthuatgiaithuat" style="page-break-after: always">
  
</div>
<?php
}
?>
<?php 
if($_GET['family_planning']==1){
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
			<?php echo "var id_luotkham=". $_GET['id_luotkham'].";\n"; ?>
			<?php echo "var vatlytrilieu=". $_GET['vatlytrilieu'].";\n"; ?>
			<?php echo "var dieuduong=". $_GET['dieuduong'].";\n"; ?>
			<?php echo "var phauthuatgiaithuat=". $_GET['phauthuatgiaithuat'].";\n"; ?>
			<?php echo "var family_planning=". $_GET['family_planning'].";\n"; ?>
			window.xemtruocin=1;
				if(vatlytrilieu==1){
					var _report_data=$.ajax({url: "resource.php?module=report&view=lamsang&action=phieuchidinhvltl&header=top&xemtruocin="+window.xemtruocin+"&id_benhnhan="+id_benhnhan+"&id_luotkham="+id_luotkham+"&type=&id_form=10", async: false, success: function(data, result) {if (!result) alert('Không load được danh mục NhomCLS');}}).responseText;
					$("#vatlytrilieu").append(_report_data);
					}
				if(dieuduong==1){
					var _report_data2=$.ajax({url: "resource.php?module=report&view=lamsang&action=phieuchidinhdieuduong&header=top&xemtruocin="+window.xemtruocin+"&id_benhnhan="+id_benhnhan+"&id_luotkham="+id_luotkham+"&type=&id_form=10", async: false, success: function(data, result) {if (!result) alert('Không load được danh mục NhomCLS');}}).responseText;
					$("#dieuduong").append(_report_data2);
					}
				if(phauthuatgiaithuat==1){
					var _report_data3=$.ajax({url: "resource.php?module=report&view=lamsang&action=phieuchidinhpt_tt&header=top&xemtruocin="+window.xemtruocin+"&id_benhnhan="+id_benhnhan+"&id_luotkham="+id_luotkham+"&type=&id_form=10", async: false, success: function(data, result) {if (!result) alert('Không load được danh mục NhomCLS');}}).responseText;
					$("#phauthuatgiaithuat").append(_report_data3);
					}
				if(family_planning==1){
					var _report_data4=$.ajax({url: "resource.php?module=report&view=lamsang&action=phieuchidinhfamily_planning&header=top&xemtruocin="+window.xemtruocin+"&id_benhnhan="+id_benhnhan+"&id_luotkham="+id_luotkham+"&type=&id_form=10", async: false, success: function(data, result) {if (!result) alert('Không load được danh mục NhomCLS');}}).responseText;
					$("#family_planning").append(_report_data4);
					}
				print_preview();

	
		});
		
	</script>
</html>
 