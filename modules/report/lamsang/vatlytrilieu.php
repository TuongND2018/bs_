<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Report</title>
<style >
body{
	overflow:auto;
}
pre {
 white-space: pre-wrap;       /* css-3 */
 white-space: -moz-pre-wrap;  /* Mozilla, since 1999 */
 white-space: -pre-wrap;      /* Opera 4-6 */
 white-space: -o-pre-wrap;    /* Opera 7 */
 word-wrap: break-word;       /* Internet Explorer 5.5+ */
 font:13px Tahoma, Geneva, sans-serif;
} 
</style>
</head>
 
<body style="margin-left:55px">
	<?php
        $data= new SQLServer;//tao lop ket noi SQL
        $params = array($_GET["id_benhnhan"]);//tao param cho store 
        $store_name="{call GD2_GetThongTinBenhNhan(?)}";//tao bien khai bao store
        $get_thongtinbenhnhan=$data->query( $store_name,$params);//Goi store
        $excute= new SQLServerResult($get_thongtinbenhnhan);//Ket noi lop xu ly SQL và truyen gia tri tra ve tu lop ket noi SQL
        $thongtinbenhnhan= $excute->get_as_array();//Tra ve mang toan bo data lay duoc  
		 
		
		$params1 = array($_GET["id_benhnhan"],$_GET["id_kham"],$_GET["id_physio"]);//tao param cho store 
        $store_name1="{call GD2_LuotKhamVLTL_FollowBenhNhan2(?,?,?)}";//tao bien khai bao store
        $get_thongtinluotkham=$data->query( $store_name1,$params1);//Goi store
        $excute1= new SQLServerResult($get_thongtinluotkham);//Ket noi lop xu ly SQL và truyen gia tri tra ve tu lop ket noi SQL
        $thongtinluotkham= $excute1->get_as_array();//Tra ve mang toan bo data lay duoc
			   
        $params2 = array($_GET["id_kham"]);//tao param cho store 
        $store_name2="{call GD2_GetKhamById_Kham2(?)}";//tao bien khai bao store
        $get_thongtinluotkham2=$data->query( $store_name2,$params2);//Goi store
        $excute2= new SQLServerResult($get_thongtinluotkham2);//Ket noi lop xu ly SQL và truyen gia tri tra ve tu lop ket noi SQL
        $thongtinluotkham2= $excute2->get_as_array();//Tra ve mang toan bo data lay duoc
       // print_r($_GET["id_kham"]);
    ?>

	<?php if($_GET["header"]=="left"){ ?>
		<div style="font-size:14px;font-family:Tahoma, Geneva, sans-serif;-webkit-transform: rotate(270deg);-moz-transform: rotate(270deg);-o-transform: rotate(270deg);writing-mode: rl-tb;position:absolute;top:550px;left:-340px">  <span style="letter-spacing: 0.5px;font-weight:bold">FAMILY</span> <img src="images/logo_print.png" />  <span style="letter-spacing: 0.5px;text-transform:uppercase"><?php echo $_SESSION["com"]["TenBenhVien"]?></span> - <?php echo $_SESSION["com"]["DiaChi"]?> * T: <?php echo $_SESSION["com"]["SoDT"]?></div>
	<?php } ?>
	<?php if($_GET["header"]=="top"){ ?>   
    <table cellpadding="0" cellspacing="0" border="0" style="width:100%;font-family:Tahoma, Geneva, sans-serif;">
         <tr style="font-size:14px;">
             <td style=" width:60%">
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
     	<br><br>
        <tr>
             <td style="text-align:center">
                <span style="letter-spacing: 0.5px;font-weight:bold;font-size:26px;">PHIẾU ĐIỀU TRỊ VẬT LÝ</span>
                <br />
                <span style="font-weight:bold;font-size:20px;">(PHYSIOTHERAPY)</span>
                <br />
                <span style="font-weight:bold;font-size:20px;">*******</span>
                <div style="height:10px;">
                </div>
             </td>
         
         </tr>    
     </table>
     <table cellpadding="0" cellspacing="0" border="0" style="color:#036;font-size:13px;line-height:1.5; width:100%;font-family:Tahoma, Geneva, sans-serif; border-top:1px solid #000; border-bottom:1px solid #000; padding:5px 0px">         
         <tr>
            <td> Họ tên: <b><?=$thongtinbenhnhan[0]["HoLotBenhNhan"]." ".$thongtinbenhnhan[0]["TenBenhNhan"];?></b></td> 
            <td>Tuổi: <?=$thongtinbenhnhan[0]["Tuoi"];?></td>
            <td>G.tính: <?=$thongtinbenhnhan[0]["Gioi"];?></td>
            <td>ID: <?=$thongtinbenhnhan[0]["MaBenhNhan"];?></td>
         </tr>
         <tr>
            <td  style="width:65%">Địa chỉ: <?=$thongtinbenhnhan[0]["DiaChi"];?></td> 
             
         </tr>  
          <tr>
             <td colspan="3">Chẩn đoán: <?=$thongtinluotkham[0]["ChanDoan"] ?></td>          
          </tr>
     </table>
     <table cellpadding="0" cellspacing="0" border="0" style="font-size:13px; width:100%;font-family:Tahoma, Geneva, sans-serif;padding:5px 0px">         
         <br>
         <tr>
            <td valign="top" style="width:65%;padding-top:10px">
            	<b style="font-size:17px;color:#00b38b"><i>TÓM TẮT LIỆU TRÌNH:</i></b>
                <br />
                <pre><i><?=$thongtinluotkham[0]["Mota"] ?></i></pre>
                <br /><br />
                <b style="font-size:17px;color:#00b38b"><i>DẶN DÒ:</i></b><br />
                <pre><i><?=$thongtinluotkham[0]["KetLuan"] ?></i></pre>
			</td> 
                         
         </tr> 

     </table>
     <table cellpadding="0" cellspacing="0" border="0" style="margin-top:30px;margin-left:200px;color:#036;font-size:13px; width:100%;font-family:Tahoma, Geneva, sans-serif; border-top:0px solid #000;  padding:5px 0px">           
         <tr>
            
             <td style="width:35%;text-align:center" valign="top">
                 <i>
                    In từ dữ liệu gốc<br />
                    Ngày <?php echo date("d")." tháng " . date("m")." năm " .  date("Y"); ?>
                 </i>
                 
                    <h3 style="margin-top:0px">BS CHUYÊN KHOA</h3>
                 <br />
                 <img id="bs_chandoan" width="159"/>
                 <br />                 
                 <b style="color:red"><?=$thongtinluotkham2[0]["BsChanDoan"] ?></b>
            </td>             
         </tr>            
     </table>
    <?php if($_GET["header"]=="left"){ ?>
    	</div>
    <?php	} ?>
    
   
</body>
</html>
  <script type="application/javascript">
        $(document).ready(function() {
            load_sign('<?=$thongtinluotkham2[0]["chuky_bacsy"]?>',"bs_chandoan");      
                print_preview();      
        })
</script>