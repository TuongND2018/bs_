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
table,th,td
{
border-collapse:collapse;
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
         <tr style="font-size:13px;">
             <td style=" width:35%">
                <span style="letter-spacing: 0.5px;font-weight:bold">FAMILY</span> <img src="images/logo_print.png" /> 
             </td>
             <td style=" width:65%; text-align:right">
                <?php echo $_SESSION["com"]["DiaChi"]?>
                <br />
                SĐT: <?php echo $_SESSION["com"]["SoDT"]?>
             </td>
         </tr>
         <td >
         	<span style=" font-size:13px; letter-spacing: 0.5px;text-transform:uppercase"><?php echo $_SESSION["com"]["TenBenhVien"]?></span>
         </td>           
     </table>    
	<h2 style="text-align:center; font-family:Arial, Helvetica, sans-serif;">PHIẾU THEO DÕI PHÁT TRIỂN NOÃN</h2>   
    <table  cellpadding="0" cellspacing="0" border="0" style="width:100%;font-family:Arial, Helvetica, sans-serif; font-size:12px;">
       <tr>
            <td> Họ tên: <b><?=$thongtinbenhnhan[0]["HoLotBenhNhan"]." ".$thongtinbenhnhan[0]["TenBenhNhan"];?></b></td> 
            <td>Tuổi: <?=$thongtinbenhnhan[0]["Tuoi"];?></td>
            <td>ID: <?=$thongtinbenhnhan[0]["MaBenhNhan"];?></td>
         </tr>
         <tr>
            <td  style="width:65%">Địa chỉ: <?=$thongtinbenhnhan[0]["DiaChi"];?></td> 
                       
         </tr> 
    </table>
    <br>
    <table style="width:100%;"  border="1">
        <tr height="50px" style="text-align:center">
            <td width="8%"><b>Ngày khám</b></td>
            <td width="8%"><b>Ngày kinh</b></td>
            <td width="8%"><b>Nội mạc</b></td>
            <td width="8%"><b>Noãn BT trái</b></td>
            <td width="8%"><b>Noãn BT phải</b></td>
            <td width="8%"><b>Dịch túi cùng</b></td>
            <td width="44%"><b>Ghi chú</b></td>
            <td width="8%"><b>Bác sỹ</b></td>
        </tr>
        <tr height="50px">
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr height="50px">
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr height="50px">
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr height="50px">
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr height="50px">
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr height="50px">
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr height="50px">
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr height="50px">
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr height="50px">
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        
        
    </table>

    
</body>
</html>
 <script type="text/javascript">
    $(document).ready(function() {
       
           print_preview();
    });
</script>