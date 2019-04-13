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
        $params = array($_GET["ID_BenhNhan"]);//tao param cho store
        $store_name="{call GD2_GetThongTinBenhNhan(?)}";//tao bien khai bao store
        $get_thongtinbenhnhan=$data->query( $store_name,$params);//Goi store
        $excute= new SQLServerResult($get_thongtinbenhnhan);//Ket noi lop xu ly SQL và truyen gia tri tra ve tu lop ket noi SQL
        $thongtinbenhnhan= $excute->get_as_array();//Tra ve mang toan bo data lay duoc

		$params1 = array($_GET["ID_HuyChiDinh"]);//tao param cho store//spHuyChiDinhChiTiet_SelectChiTietByID_ChiDinh
        $store_name1="{call spHuyChiDinhChiTiet_SelectChiTietByID_ChiDinh(?)}";//tao bien khai bao store
        $get_thongtincd=$data->query( $store_name1,$params1);//Goi store
        $excute1= new SQLServerResult($get_thongtincd);//Ket noi lop xu ly SQL và truyen gia tri tra ve tu lop ket noi SQL
        $thongtinchidinh= $excute1->get_as_array();//Tra ve mang toan bo data lay duoc

		$params2 = array($_GET["ID_HuyChiDinh"]);//tao param cho store
        $store_name2="{call gd2_HuyChiDinh_Select(?)}";//tao bien khai bao store
        $get_thongtinlk=$data->query( $store_name2,$params2);//Goi store
        $excute2= new SQLServerResult($get_thongtinlk);//Ket noi lop xu ly SQL và truyen gia tri tra ve tu lop ket noi SQL
        $thongtinluotkham= $excute2->get_as_array();//Tra ve mang toan bo data lay duoc

        foreach ($thongtinluotkham as $row)
         {
$ngaylap=$row["NgayGioHuy"]->format('H:i d/m/Y');
}
		//print_r($thongtinchidinh);_
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
	<h2 style="text-align:center; font-family:Arial, Helvetica, sans-serif;">HOÀN TRẢ CHỈ ĐỊNH</h2>
    <table  cellpadding="0" cellspacing="0" border="0" style="width:100%;font-family:Arial, Helvetica, sans-serif; font-size:12px;">

        <tr>
            <td style=" width:50%; font-weight:bold;  padding-top: 1px;  padding-bottom: 1px;"><?=$thongtinbenhnhan[0]["HoLotBenhNhan"].' '.$thongtinbenhnhan[0]["TenBenhNhan"]; ?> </td>
        	<td style=" width:50%; text-align:right;font-weight:bold;font-size:17px;  padding-top: 1px;  padding-bottom: 1px;"><?=$thongtinbenhnhan[0]["MaBenhNhan"];?> </td>
        </tr>
        <tr>
            <td  colspan="2" style=" width:50%;  padding-top: 1px;  padding-bottom: 1px;"><?=$thongtinbenhnhan[0]["Tuoi"];?> tuổi, <?=$thongtinbenhnhan[0]["DiaChi"];?> </td>

        </tr>
         <tr>
            <td  colspan="1" style=" width:50%;  padding-top: 1px;  padding-bottom: 1px;"><?='Mã hủy <strong>'.$thongtinluotkham[0]["MaPhieu"].'</strong>'?> </td>
            <td style=" text-align:right;font-weight:bold;font-size:14px;  padding-top: 1px;  padding-bottom: 1px;"><?=$ngaylap?> </td>
        </tr>
    </table>
    <br />

    <table cellpadding="0" cellspacing="0" style="width:100%;font-family:Arial, Helvetica, sans-serif; font-size:12px;">
        <tr style="border-bottom:solid 1px #000000 !important; font-weight:bold;">
        	<td align="left" style=" width:50%; text-align:left; padding-right:40px; border-bottom:solid 1px #000000 !important;; border-top:solid 1px #000000 !important;  padding-top:2px; padding-bottom:2px;">
            Tên dịch vụ KCB
            </td >
           	<td style=" width:50%; text-align:right;  border-bottom:solid 1px #000000 !important;; border-top:solid 1px #000000 !important; padding-top:2px; padding-bottom:2px;">
            Tiền trả lại
            </td>
        </tr>

        <?php
		$i=0;
		$flag=0;
        $tien=0;
        foreach ($thongtinchidinh as $ttcd) {
                        $tien=$tien+$ttcd["SoTienThucTra"];
					?>
				<tr>
					<td style=" width:70%;"> <?= $ttcd["TenLoaiKham"] ?>
					</td>
					<td  style=" width:30%; text-align:right;   padding-top:2px; padding-bottom:2px;">
				   <?=$ttcd["SoTienThucTra"] ?>
					</td>

				</tr>
            <?php
				}


		?>

         <tr>
        	<td  style=" width:100%; border-bottom:solid 1px #000000 !important;" colspan="2">
            </td>
        </tr>
    </table>

  <table  cellpadding="0" cellspacing="0" style="width:100%;font-family:Arial, Helvetica, sans-serif; font-size:12px;">
        <tr>
            <td  style=" width:60%; text-align:right;">
            Tổng tiền hoàn trả:
            </td>
            <td  style=" width:40%; text-align:right; font-weight:bold;">
            <?=number_format($tien,"0",",",".");  ?>
            </td>
        </tr>
        <tr style="font-style:italic; ">
          <td colspan="2" id="tienbangchu" style=" width:60%; text-align:right; padding-top:5px; padding-bottom:10px;">&nbsp;</td>

        </tr>
        <tr style="font-style:italic; ">
            <td  style=" width:60%; text-align:right; padding-top:5px; padding-bottom:10px;">
            Giờ in:
            </td>
            <td  style=" width:40%; text-align:right; padding-top:5px; padding-bottom:10px; ">
            <?php
            $date = date("H:i ".$_SESSION["config_system"]["ngaythang"]);
            echo $date;
            ?>
            </td>
        </tr>
           <tr>
        <td align="center">
          <strong>Người lập</strong></td>
                <td align="center">
             <strong>Người duyệt </strong></td>
    </tr>
           <tr>
        <td align="center">
        <?=$thongtinluotkham[0]["NguoiLap"]?>
        </td>
                <td align="center">
       <?=$thongtinluotkham[0]["NguoiDuyet"]?>
        </td>
    </tr>
        <tr>
        <td colspan="2" width="100%" style="text-align:center; font-size:18px; font-family:Arial, Helvetica, sans-serif; font-style:italic; background:#F5F5F5; padding-top:2px; padding-bottom:2px;">
        Thân thiết như người nhà
        </td>
        </tr>
     
</table>  
    <div class="footer"></div>
</body>
</html>


<script type="text/javascript">
    $(document).ready(function() {
     $('#tienbangchu').html('<STRONG>'+toWords((<?=$tien?>).toString())+"đồng</sTRONG>");
     print_preview();
    });
</script>

