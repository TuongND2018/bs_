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
	background: #F9F9F9;
}
</style>
</head>
<body>
<?php 
if($_GET['canlamsang']==1){
?>
    <div id="canlamsang" style="page-break-after: always;">
    
    </div>
<?php
}
if($_GET['xetnghiem']==1){
?>
    <div id="xetnghiem" style="page-break-after: always">
      
    </div>
<?php
}
?>
</body>
 <script type="application/javascript">
		$(document).ready(function() {
			<?php echo "var id_benhnhan=". $_GET['id_benhnhan'].";\n"; ?>
			<?php echo "var id_todieutrichitiet=". $_GET['idtodieutrichitiet'].";\n"; ?>
			<?php echo "var canlamsang=". $_GET['canlamsang'].";\n"; ?>
			<?php echo "var xetnghiem=". $_GET['xetnghiem'].";\n"; ?>
		//$.cookie("goikhamin_status")
				if(canlamsang==1){
				var _report_data=$.ajax({url: "resource.php?module=report&view=lamsang&action=todieutri_canlamsang_khongxetnghiem&header=top&id_benhnhan="+id_benhnhan+"&id_todieutrichitiet="+id_todieutrichitiet+"&type=&id_form=10", async: false, success: function(data, result) {if (!result) alert('Không load được danh mục NhomCLS');}}).responseText;
				//alert(_report_data);
				$("#canlamsang").append(_report_data);
				}
				if(xetnghiem==1){
					var _report_data2=$.ajax({url: "resource.php?module=report&view=lamsang&action=todieutri_canlamsang_xetnghiem&header=top&id_benhnhan="+id_benhnhan+"&id_todieutrichitiet="+id_todieutrichitiet+"&type=&id_form=10", async: false, success: function(data, result) {if (!result) alert('Không load được danh mục NhomCLS');}}).responseText;
					$("#xetnghiem").append(_report_data2);
					}
				print_preview();

	
		});
		
	</script>
</html>
 