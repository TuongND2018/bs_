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
        $store_name2="{call GD2_SelectAllKhamByID_Kham(?)}";//tao bien khai bao store
        $get_khamthai=$data->query( $store_name2,$params2);//Goi store
        $excute2= new SQLServerResult($get_khamthai);//Ket noi lop xu ly SQL và truyen gia tri tra ve tu lop ket noi SQL
        $kham= $excute2->get_as_array();//Tra ve mang toan bo data lay duoc
        //print_r($kham)
		if($_GET["maviettat"]=="PAP" ){
            $tieude="PHIẾN ĐỒ ÂM ĐẠO";
           
        }    
        else if($_GET["maviettat"]=="FANC" ){
            $tieude="SINH THIẾT HÚT KIM NHỎ";
        }
        else if($_GET["maviettat"]=="BYO" ){
            $tieude="SINH THIẾT";
        }

     ?>
 <table cellpadding="0" cellspacing="0" border="0" style="width:100%;font-family:Arial, Helvetica, sans-serif;">

         <tr style="font-size:10px;">
             <td style=" width:35%">
                <span style="letter-spacing: 0.5px;font-weight:bold">FAMILY</span> <img src="images/logo_print.png" /> 
             </td>
             <td style=" width:65%; text-align:right;padding-top: 20px;">
                <?php echo $_SESSION["com"]["DiaChi"]?>
                <br />
                SĐT: <?php echo $_SESSION["com"]["SoDT"]?>
             </td>
         </tr>
                   
     </table>    
	
    <table  cellpadding="0" cellspacing="0" border="0" style="width:100%;font-family:Arial, Helvetica, sans-serif; font-size:12px;">
       <br><br>
        <tr>
            <td style=" width:50%; font-weight:bold;  padding-top: 1px;  padding-bottom: 1px;">BN: <?=$thongtinbenhnhan[0]["HoLotBenhNhan"].' '.$thongtinbenhnhan[0]["TenBenhNhan"]; ?>,<?=$thongtinbenhnhan[0]["Tuoi"];?> Tuổi</td>
        	 <td style=" width:50%; font-weight:bold;  padding-top: 1px;text-align:right;  padding-bottom: 1px;"><?=$thongtinbenhnhan[0]["MaBenhNhan"];?> </td>
        </tr>
       <tr>
           <td style=" width:50%; font-weight:bold;  padding-top: 1px;  padding-bottom: 1px;"><?= $kham[0]["VietTat"].''.$kham[0]["tennhanvien"] ?> </td>
             <td style=" width:50%; font-weight:bold;  padding-top: 1px;text-align:right;  padding-bottom: 1px;"><?=$kham[0]["NgayGioTao"]->format("H:i ".$_SESSION["config_system"]["ngaythang"]); ?> </td>      
       </tr>
    </table>

    <br />
    <h2 style="text-align:center; font-family:Arial, Helvetica, sans-serif;"><?=$tieude?></h2>

    <table cellpadding="0" cellspacing="0" style="width:100%;font-family:Arial, Helvetica, sans-serif; font-size:12px;">
       
        <tr>
           	<td align="center">
                <b>Vị trí lấy bệnh phẩm:</b>

            </td>

        </tr>

        <tr>
            <td align="center" style="padding-top: 20px;">
               <?= $kham[0]["GhiChu"]?>
            </td>
        </tr>
        
        
    </table>
    <br />
    
    
</body>
</html>
 <script type="text/javascript">
    $(document).ready(function() {
       
         print_preview();
    });
</script>