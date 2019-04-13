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

		$params2 = array($_GET["id_kham"]);//tao param cho store 
        $store_name2="{call GD2_GetTuoiThai_SieuAm4D_ByID_Kham(?)}";//tao bien khai bao store
        $get_khamthai=$data->query( $store_name2,$params2);//Goi store
        $excute2= new SQLServerResult($get_khamthai);//Ket noi lop xu ly SQL và truyen gia tri tra ve tu lop ket noi SQL
        $khamthai= $excute2->get_as_array();//Tra ve mang toan bo data lay duoc
		
		//print_r($thongtinchidinh);

     ?>
 <table cellpadding="0" cellspacing="0" border="0" style="width:100%;font-family:Arial, Helvetica, sans-serif;">
         <tr style="font-size:10px;">
             <td style=" width:35%">
                <span style="letter-spacing: 0.5px;font-weight:bold">FAMILY</span> <img src="images/logo_print.png" /> 
             </td>
             <td style=" width:65%; text-align:right">
                <?php echo $_SESSION["com"]["DiaChi"]?>
                <br />
                SĐT: <?php echo $_SESSION["com"]["SoDT"]?>
             </td>
         </tr>
         <td colspan="2">
         	<span style=" font-size:10px; letter-spacing: 0.5px;text-transform:uppercase"><?php echo $_SESSION["com"]["TenBenhVien"]?></span>
         </td>           
     </table>    
	<h2 style="text-align:center; font-family:Arial, Helvetica, sans-serif;">PHIẾU MIỄN GIẢM</h2>
    <h6 style="text-align:center; font-family:Arial, Helvetica, sans-serif;">(Vui lòng mang phiếu khi tái khám)</h6>
    <table  cellpadding="0" cellspacing="0" border="0" style="width:100%;font-family:Arial, Helvetica, sans-serif; font-size:12px;">
       
        <tr>
            <td style=" width:50%; font-weight:bold;  padding-top: 1px;  padding-bottom: 1px;"><?=$thongtinbenhnhan[0]["HoLotBenhNhan"].' '.$thongtinbenhnhan[0]["TenBenhNhan"]; ?> </td>
        	<td style=" width:50%; text-align:right;font-weight:bold;  padding-top: 1px;  padding-bottom: 1px;"><?=$thongtinbenhnhan[0]["DiaChi"];?> </td>
        </tr>
       <tr>
            <td style=" width:50%; font-weight:bold;  padding-top: 1px;  padding-bottom: 1px;"><?=$thongtinbenhnhan[0]["MaBenhNhan"];?> </td>
            <td style=" width:50%; text-align:right;font-weight:bold;  padding-top: 1px;  padding-bottom: 1px;"><?=$khamthai[0]["NgayGioTao"]->format("H:i ".$_SESSION["config_system"]["ngaythang"]);?> </td>
       </tr>
    </table>
    <br />

    <table cellpadding="0" cellspacing="0" style="width:100%;font-family:Arial, Helvetica, sans-serif; font-size:12px;border-bottom:solid 1px #000000 !important;border-top:solid 1px #000000 !important">
       <tr>
       	<td>
        	Kết luận siêu âm: <?=$khamthai[0]["KetLuan"]?>
        </td>
       </tr>
        <tr>
           	<td>
                <b>Ngày hẹn</b>: ......./......./..............................
            </td>
        </tr>
        <tr>
            <td>
               <b>Lý do hẹn</b>: ...............................................
            </td>
        </tr>
        <tr>
            <td>
                <b>Giảm giá</b>: .............................................
            </td>
        </tr>
        
    </table>
    <br />
    <table  cellpadding="0" cellspacing="0" style="width:100%;font-family:Arial, Helvetica, sans-serif; font-size:12px;">
        <tr>
            <td  style=" width:60%; text-align:right;">
           <b>BÁC SỸ</b>

            <br><br><br>
            </td>
            
        </tr>
      
        <tr>
        <td colspan="2" width="100%" style="text-align:center; font-size:18px; font-family:Arial, Helvetica, sans-serif; font-style:italic; background:#F5F5F5; padding-top:2px; padding-bottom:2px;">
        <b>Thân thiết như người nhà</b>
        </td>
        </tr>
    </table>
    <div class="footer"></div>
</body>
</html>
 <script type="text/javascript">
    $(document).ready(function() {
       
           print_preview();
    });
</script>