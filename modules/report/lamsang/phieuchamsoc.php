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
<style>
#dotted{
	width:100%;
	background:url(images/dotted.png) repeat;
	border:none;
	line-height:18px;
	background-attachment:local!important;
	box-shadow:none!important;
	
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
.th2{
	width:28% !important;
	}
.th3{
	width:60% !important;
	}
}
	
</style>
</head>
 
<body>
    <?php
        $data= new SQLServer;//tao lop ket noi SQL
        $params = array($_GET["id_phieuchamsoc"]);//tao param cho store 
        $store_name="{call Gd2_PhieuChamSocChiTiet_SelectAll(?)}";//tao bien khai bao store
        $get_danh_muc_phong_ban=$data->query( $store_name,$params);//Goi store
        $excute= new SQLServerResult($get_danh_muc_phong_ban);//Ket noi lop xu ly SQL và truyen gia tri tra ve tu lop ket noi SQL
        $tam= $excute->get_as_array();//Tra ve mang toan bo data lay duoc 

       
        $params = array($_GET["id_luotkham"]);//tao param cho store 
        $store_name="{call GD2_Select_BenhanNoiTru2(?)}";   //214079 null  3907
        $get_danh_muc_phong_ban=$data->query( $store_name,$params);//Goi store
        $excute= new SQLServerResult($get_danh_muc_phong_ban);//Ket noi lop xu ly SQL và truyen gia tri tra ve tu lop ket noi SQL
        $patient_info= $excute->get_as_array();//Tra ve mang toan bo data lay duoc 
        //print_r($patient_info);
        $params3 = array($_GET["idbenhannoitru"]);//tao param cho store 
        $store_name3="{call GD2_GetTenKhoaByID_BenhAnNoiTru(?)}";   //214079 null  3907
        $get_danh_muc_phong_ban3=$data->query( $store_name3,$params3);//Goi store
        $excute3= new SQLServerResult($get_danh_muc_phong_ban3);//Ket noi lop xu ly SQL và truyen gia tri tra ve tu lop ket noi SQL
        $khoa= $excute3->get_as_array();//Tra ve mang toan bo data lay duoc 
    ?>

 <div id="page" style="page-break-after: always;">
 <div class="n_top">
    <table cellpadding="0" cellspacing="0" border="0" width="700px">
         <tr style="font-size:13px;">
             <td style=" width:33%">
                 <img src="images/logo_print.png" /> 
                <span style="letter-spacing: 0.5px;text-transform:uppercase"><b><?php echo $_SESSION["com"]["TenCoQuanTrucThuoc"]?><br /><?php echo $_SESSION["com"]["TenBenhVien"]?></b></span>
                <br>
                <span><b>Khoa:</b> <?=$khoa[0]['TenPhongBan']?></span>
             </td>
             <td style="width:30%;">
                <br><br>
                <span style="letter-spacing: 0.5px;font-weight:bold;font-size:23px;">PHIẾU CHĂM SÓC</span>
                <br />
                <span style="font-weight:bold;font-size:20px; margin-left: 45px;">Phiếu số:<?=$_GET["phieuso"]?></span>
                
             </td>
             <td style=" width:20%; text-align:right">
            <br>
               MS:10/BV-01
                <br />
                
                Số vào viện:<?=$patient_info[0]['SoVaoVien']?>
             </td>
         </tr>               
     </table> 
     
      <table width="700px" style="margin-top:5px">
    <tr>
      <td colspan="2">
          - Họ tên người bệnh: <span  style="text-transform:uppercase"><b><?=$patient_info[0]["tenbenhnhan"] ?></b></span>      </td>
        <td width="10%">
            Tuổi: <strong>
            <?=$patient_info[0]["Tuoi"] ?>
        </strong></td>
        <td width="10%">
            Giới tính: <strong>
            <?=$patient_info[0]["Gioi"] ?>
        </strong></td>
    </tr>
     
     <tr>
     
       <td width="20%"  style="vertical-align:top">- Buồng:<strong>
<?=$patient_info[0]["TenBuong"] ?>
       </strong></td>
       
        <td width="20%"  style="vertical-align:top">Giường:
          <strong>
          <?=$patient_info[0]["TenGiuong"] ?>
        </strong></td>
        <td colspan="2">
            Chẩn đoán: <strong>
            <?=$patient_info[0]["CD_NoiChuyenDen"] ?>        
            </strong></td>
        </tr>
    </table>
    <br>
   </div>
    <table id="bang" cellpadding="0" cellspacing="0" border="1" width="700px">
        <tr>
            <th class="th" width="10%">NGÀY GIỜ</th>
            <th class="th" width="40%">THEO DÕI DIỄN BIẾN</th>
            <th class="th" width="40%">THỰC HIỆN Y LỆNH/ CHĂM SÓC</th>
            <th class="th" width="10%">KÝ TÊN</th>
        </tr>
        <tbody id="tbody">

   		</tbody>
    </table>
   </div>
    <div id="page_add_new" style="page-break-after: always;">
  <table id="bang2" cellpadding="0" cellspacing="0" border="1" width="700px">
    <tr>
         <th class="th" width="10%">NGÀY GIỜ</th>
            <th class="th" width="40%">THEO DÕI DIỄN BIẾN</th>
            <th class="th" width="40%">THỰC HIỆN Y LỆNH/ CHĂM SÓC</th>
            <th class="th" width="10%">KÝ TÊN</th>
    </tr>
   <tbody id="tbody2">

   </tbody>
</table>
  </div>
</body>
</html>
   <script type="application/javascript">
       $(document).ready(function() {
			window._dem_tam=0;
			<?php
			echo "window.dem=".count($tam).";";
			?>
			var d=0;
			var _d=0;
			window.d_tam=0;
			for(var i=0;i<window.dem;i++){
			if(window._dem_tam==0){
			var _report_data=$.ajax({url: "resource.php?module=report&view=lamsang&action=phieuchamsoc_addrow&thu="+i+"&id_phieuchamsoc=<?=$_GET['id_phieuchamsoc']?>&id_luotkham=<?=$_GET["id_luotkham"]?>&idbenhannoitru=<?=$_GET["idbenhannoitru"]?>&type=&id_form=10", async: false, success: function(data, result) {if (!result) alert('Không load được danh mục NhomCLS');}}).responseText;
			$("#tbody").append(_report_data);
			//alert(check(i));
				_d=_d+1;
				if(check(_d,window.d_tam)<0){
					_d=_d-1;
					d=d+1;
					$("#bang #row_"+i).remove();
					$("#bang #rowtam_"+i).remove();
					$("#tbody2").append(_report_data);
					window._dem_tam=1;
					window.d_tam=$("#bang #rowtam_"+i).height()+19;
				}
			}else{
					d=d+1;
					var _report_data=$.ajax({url: "resource.php?module=report&view=lamsang&action=phieuchamsoc_addrow&thu="+i+"&id_phieuchamsoc=<?=$_GET['id_phieuchamsoc']?>&id_luotkham=<?=$_GET["id_luotkham"]?>&idbenhannoitru=<?=$_GET["idbenhannoitru"]?>&type=&id_form=10", async: false, success: function(data, result) {if (!result) alert('Không load được danh mục NhomCLS');}}).responseText;
				$("#tbody2").append(_report_data);
				}
				if(i==window.dem-1){
					addlast(_d,window.d_tam);
					addlast2(d);
				}
			
			}
			print_preview();
        });
		function check(val,val2){
			var nt=$("#bang").height()+$(".n_top").height();
			return 1055-nt;
		}
		function check2(val){
			var nt=$("#bang2").height();
			return 1035-nt;
	
		}
		function addlast(val,val2){
			
			if(check(val,val2)>50){
					var _report_data='<tr id="row_cuoi">'+
					'<td  class="td" align="center" ></td>'+
					'<td class="td" style="padding-left:10px!important"></td>'+
					'<td  class="td" style="padding-left:10px!important"></td>'+
					'<td class="td" align="center"></td>'+
					'</tr>';
					$("#tbody").append(_report_data);
					$("#row_cuoi").css('height',check(val,val2)+"px");
					}
			//alert($("#row_cuoi").height())
			}
		function addlast2(val){
			//alert(check2(val))
			if(check2(val)>100){
					var _report_data='<tr id="row_cuoi2">'+
					'<td class="td" align="center" ></td>'+
					'<td  class="td" style="padding-left:10px!important"></td>'+
					'<td  class="td" style="padding-left:10px!important"></td>'+
					'<td class="td" align="center"></td>'+
					'</tr>';
					$("#tbody2").append(_report_data);
					$("#row_cuoi2").css('height',check2(val)+"px");
					
					}
			}
    </script>