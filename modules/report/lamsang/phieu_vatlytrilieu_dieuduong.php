<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Report</title>
<!--<style media="print">
	textarea{
		width:100%;
		background:url(images/dotted.png) repeat;
		border:none; 
		height:100%;
		line-height:18px;
		background-attachment:local!important
	}
</style>-->
<style>
#tbody_1 .dotted{
	width:100%;
	background:url(images/dotted.png) repeat;
	line-height:23px;
	background-size: 3px 23px;
	background-attachment:local!important;
	box-shadow:none!important;
	border:none !important;
}
#tbody_1 .dotted td{
	border-bottom:none !important;
	border-top:none !important;
}
#tbody_1 #row_0 {
	border-top:1px solid #000 !important;
}
#tbody_1 #row_0 td{
	border-top:1px solid #000 !important;
}
.tr_top{
	border:1px solid #000 !important;
}
body{
    overflow: auto;
	font-size:14px !important;
	font-family:Arial, Helvetica, sans-serif;
}

pre {
 white-space: pre-wrap;       /* css-3 */
 white-space: -moz-pre-wrap;  /* Mozilla, since 1999 */
 white-space: -pre-wrap;      /* Opera 4-6 */
 white-space: -o-pre-wrap;    /* Opera 7 */
 word-wrap: break-word;       /* Internet Explorer 5.5+ */
 font:13px Tahoma, Geneva, sans-serif;
}
.text_1{
    border-top-width: 0px!important;
    border-left-width: 0px!important;
    border-right-width: 0px!important;
    
    box-shadow: none!important ;
   
    border-style:none!important;
	background:url(images/dotted.png) repeat;
}
input[type="text"]
{
border: 1px solid black;

}
.th{
	padding:5px;
}
#bang .td,#bang2 .td{
	padding-left:5px;
	margin-top:5px !important;
	background:url(images/dotted.png) repeat;
	line-height:18px;
	
}
#bang_kqdt{
	border-top:none;
}
#bang_kqdt .th{
	border-top:none;
	background:url(images/dotted.png) repeat;
	line-height:23px;
	background-size: 3px 23px;
	background-attachment:local!important;
	box-shadow:none!important;
}
.kyten{
	bottom: 1px;
    float: right;
    position: relative;
    right: 30px;
	font-weight:bold;
}
@media print
{
body{
    overflow: auto;
	font-size:14px !important;
	font-family:Arial, Helvetica, sans-serif;
}
#tbody_1 .dotted{
	border:none !important;
}
#tbody_1 .dotted td{
	border-bottom:none !important;
	border-top:none !important;
}
#tbody_1 #row_0 {
	border-top:1px solid #000 !important;
}
#tbody_1 .tr_top{
	border:1px solid #000 !important;
}
}
	
</style>
</head>
    <?php
        $data= new SQLServer;//tao lop ket noi SQL
	
		$params4 = array($_GET['id_kham']);//tao param cho store 
		//$params4 = 1447955;
		$store_name4="{call GD2_VLTL_PhieuVLTL_DieuDuong (?)}";//tao bien khai bao store
		$get_danh_muc_phong_ban4=$data->query( $store_name4,$params4);//Goi store
		$excute4= new SQLServerResult($get_danh_muc_phong_ban4);//Ket noi lop xu ly SQL và truyen gia tri tra ve tu lop ket noi SQL
		$tam4= $excute4->get_as_array();//Tra ve mang toan bo data lay duoc  
		
		$i=0;
		foreach ($tam4 as $row) {//duyet toan bo mang tra ve
			if($row["NgayThucHien"]!=""){
            	$row["NgayThucHien"] =$row["NgayThucHien"]->format($_SESSION["config_system"]["ngaythang"]);
			}
			$responce[$i]=array($row["NgayThucHien"],
			$row["MucTieu"],
			$row["KeHoachTapLuyen"]
			);
			$i++; 
		} 
		if(count($tam4)>0){
			$rsdata=json_encode($responce); 
		}else{
			$responce[0]=array(0,0,0,0);
			$rsdata=json_encode($responce);
		}
		if($tam4[0]["NgayThucHien"]!=""){
            	$tam4[0]["NgayThucHien"] =$tam4[0]["NgayThucHien"]->format($_SESSION["config_system"]["ngaythang"]);
			}
		//echo $tam4[0]["NgayThucHien"];
    ?>
<body>
 <div id="page_1" class="page" style="page-break-after: always; padding-left: 10px; padding-top:5px">
 <div id="title" style="float:left">II.MỤC TIÊU, KẾ HOẠCH TẬP LUYỆN; THEO DÕI TẬP LUYỆN VÀ KẾT QUẢ ĐIỀU TRỊ </div>
 <br />
<table id="bang_1" cellpadding="0" cellspacing="0" border="1" width="700px">
    <tr class="tr_top">
        <th class="th" width="5%">TT</th>
        <th class="th" width="15%">Ngày tháng</th>
        <th class="th" width="35%">Mục tiêu</th>
        <th class="th" width="45%">Kế hoạch tập luyện</th>
    </tr>
   <tbody id="tbody_1">
              
   </tbody>
</table>
<table id="bang_kqdt" cellpadding="0" cellspacing="0" border="1" width="705">
    <tr >
        <th width="20%" align="left"  style="">Cộng:</th>
        <th  width="80%" align="left" class="th">Kết quả điều trị: <?=$tam4[0]["ChanDoanVLTL"];?></th>
    </tr>   
</table>
<table  id="bang_kqdt" width="705" border="0">
  <tr>
    <th width="30%" align="center"><strong>Cộng: -Ngày hẹn tái khám</strong></th>
    <th width="30%">&nbsp;</th>
    <th width="40%" align="center"><strong>Ngày....tháng...năm 2014<br />
    				KTV PHCN
     </strong></th>
  </tr>
  <tr>
    <th  width="30%" align="left" class="th">&nbsp;</td>
    <th  width="30%">&nbsp;</th>
    <th width="40%">&nbsp;</th>
  </tr>
   <tr>
    <th align="left" class="th">&nbsp;</td>
    <th >&nbsp;</th>
    <th>&nbsp;</th>
  </tr>
</table>

</div>
 
  
</body>
<script type="text/javascript">
	$(document).ready(function(e) { //180
		window.page=1;
		 //console.log("aaaaa"); 
		//window.vattuyte_page=1;
		//window.thuochuongthan_page=1;s
		var ds=Array;
		var d=0;
		var heightpage=1240;
		ds=<?= $rsdata?>;
		
		if(ds!=null){
			
			for( var i=0;i<ds.length;i++){
				
				if(checkpage(heightpage,window.page)>22){
					loaddata(i,ds,window.page);	
				}else{
					addtable(window.page);
					loaddata(i,ds,window.page);	
				}
				if(i==ds.length-1){
					for( var j=i+1;j<30;j++){
						loaddatanull(j,'',window.page);
					}
					//addbottom(heightpage,window.page);	
				}
			}
		}

       print_preview();
    });//end ready
// thuốc thông thường
function checkpage(heightpage,page){
	if(page==1){
		var t=heightpage-$("#page_"+page).height()-22;
	}else{
		var t=heightpage-$("#page_"+page).height();	
	}
	return t;
}

function loaddata(i,ds,page){
	d=i+1;
	$("#tbody_"+page).append('<tr id="row_'+i+'" class="dotted">'+
		'<td align="center">'+d+'</td>'+
		'<td align="center">'+ds[i][0]+'</td>'+
		'<td>'+ds[i][1]+'</td>'+
		'<td>'+ds[i][2]+'</td>'+
		
	 '</tr>');
}
function loaddatanull(i,ds,page){
	d=i+1;
	$("#tbody_"+page).append('<tr id="row_'+i+'" class="dotted">'+
		'<td align="center">'+d+'</td>'+
		'<td></td>'+
		'<td></td>'+
		'<td></td>'+
	 '</tr>');
}
function addbottom(heightpage,page){
	if(checkpage(heightpage,page)>780){
		$("#page_"+page).append('<div id="bottom">'+
		   '<br />'+
		   ' <table width="700px" border="0" cellpadding="0" cellspacing="0">'+
			 ' <tr>'+
			 '   <td colspan="4" style="text-align:right; font-style:italic">Ngày in: <?php
						$date = date("H:i ".$_SESSION["config_system"]["ngaythang"]);
						echo $date;
						?><br><br></td>'+
			 ' </tr>'+
			 ' <tr>'+
			  '  <td style="text-align:center"><strong>TRƯỞNG KHOA DƯỢC</strong></td>'+
			 '   <td style="text-align:center"><strong>NGƯỜI PHÁT</strong></td>'+
			 '   <td style="text-align:center"><strong>NGƯỜI LĨNH</strong></td>'+
			   ' <td style="text-align:center"><strong>TRƯỞNG <?=$tam4[0]["NgayThucHien"]?></strong></td>'+
			  '</tr>'+
			  '<tr>'+
			   ' <td><br><br><br><br></td>'+
				'<td>&nbsp;</td>'+
				'<td>&nbsp;</td>'+
				'<td>&nbsp;</td>'+
			  '</tr>'+
			  '<tr>'+
			   ' <td>&nbsp;</td>'+
				'<td>&nbsp;</td>'+
				'<td style="text-align:center"> <strong><?=$tam4[0]["NgayThucHien"]?></strong></td>'+
				'<td>&nbsp;</td>'+
			  '</tr>'+
		 '   </table>'+
	  '  </div>');
	}else{
		$("#tongthe").append('<div id="bottom" style="page-break-after: always; padding-left: 10px; padding-top:5px">'+
		   '<br />'+
		   ' <table width="700px" border="0" cellpadding="0" cellspacing="0">'+
			 ' <tr>'+
			 '   <td colspan="4" style="text-align:right; font-style:italic">Ngày in: <?php
						$date = date("H:i ".$_SESSION["config_system"]["ngaythang"]);
						echo $date;
						?><br><br></td>'+
			 ' </tr>'+
			 ' <tr>'+
			  '  <td style="text-align:center"><strong>TRƯỞNG KHOA DƯỢC</strong></td>'+
			 '   <td style="text-align:center"><strong>NGƯỜI PHÁT</strong></td>'+
			 '   <td style="text-align:center"><strong>NGƯỜI LĨNH</strong></td>'+
			   ' <td style="text-align:center"><strong>TRƯỞNG <?=$tam4[0]["NgayThucHien"]?></strong></td>'+
			  '</tr>'+
			  '<tr>'+
			   ' <td><br><br><br><br></td>'+
				'<td>&nbsp;</td>'+
				'<td>&nbsp;</td>'+
				'<td>&nbsp;</td>'+
			  '</tr>'+
			  '<tr>'+
			   ' <td>&nbsp;</td>'+
				'<td>&nbsp;</td>'+
				'<td style="text-align:center"> <strong><?=$tam4[0]["NgayThucHien"]?></strong></td>'+
				'<td>&nbsp;</td>'+
			  '</tr>'+
		 '   </table>'+
	  '  </div>');
	}
}
function addtable(page){
	var page=page+1;
	$("#tongthe").append('<div id="page_'+page+'" class="page" style="page-break-after: always; padding-left: 10px; padding-top:5px">'+
	'<table id="bang_'+page+'" width="700px" cellpadding="0" cellspacing="0" border="1">'+
         ' <tr>'+
           ' <th class="th" width="5%">TT</th>'+
            '<th class="th" width="15%">Ngày tháng</th>'+
            ' <th class="th" width="35%">Mục tiêu</th>'+
            '<th class="th" width="45%">Kế hoạch tập luyện</th>'+
            
          '</tr>'+
          '<tbody id="tbody_'+page+'">'+
          '</tbody>'+
        '</table>');
	window.page=page;
}
</script>
</html>

