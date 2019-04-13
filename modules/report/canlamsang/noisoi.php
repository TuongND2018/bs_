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
 
<body>
	<?php
        $data= new SQLServer;//tao lop ket noi SQL
        $params = array($_GET["id_benhnhan"]);//tao param cho store 
        $store_name="{call GD2_GetThongTinBenhNhan(?)}";//tao bien khai bao store
        $get_thongtinbenhnhan=$data->query( $store_name,$params);//Goi store
        $excute= new SQLServerResult($get_thongtinbenhnhan);//Ket noi lop xu ly SQL và truyen gia tri tra ve tu lop ket noi SQL
        $thongtinbenhnhan= $excute->get_as_array();//Tra ve mang toan bo data lay duoc  
		 
		
		$params1 = array($_GET["id_kham"]);//tao param cho store 
        $store_name1="{call GD2_GetKhamById_Kham_NoiSoi(?)}";//tao bien khai bao store
        $get_thongtinluotkham=$data->query( $store_name1,$params1);//Goi store
        $excute1= new SQLServerResult($get_thongtinluotkham);//Ket noi lop xu ly SQL và truyen gia tri tra ve tu lop ket noi SQL
        $thongtinluotkham= $excute1->get_as_array();//Tra ve mang toan bo data lay duoc
        //print_r($thongtinluotkham);
         $pilory="";
       if($_GET["tieude"]=="SCTC" || $_GET["tieude"]=="SCTC-ST"){
		   $tieude="SOI CỔ TỬ CUNG TRUYỀN HÌNH";
		   $chucnang="VIDEO COLPOSCOPY";
		   }
		else if($_GET["tieude"]=="NSDDTT"){
			$tieude="PHIẾU NỘI SOI DẠ DÀY TÁ TRÀNG TRUYỀN HÌNH";
		   $chucnang="VIDEO GASTRO-DOUDENAL SCOPY";
			}
		else if($_GET["tieude"]=="NS_TrựcTràng"){
			$tieude="PHIẾU NỘI SOI TRỰC TRÀNG TRUYỀN HÌNH";
		   $chucnang="VIDEO COLONOSCOPY";
			}	
		else if($_GET["tieude"]=="NSĐT" || $_GET["tieude"]=="NS-DT SIGMA"){
			$tieude="PHIẾU NỘI SOI ĐẠI TRỰC TRÀNG TRUYỀN HÌNH";
		   $chucnang="VIDEO COLONOSCOPY";
			}
		else if($_GET["tieude"]=="NS-TQ"){
			$tieude="NỘI SOI THỰC QUẢN TRUYỀN HÌNH";
		   $chucnang="VIDEO GASTRO-DOUDENAL SCOPY";
			}
		else if($_GET["tieude"]=="Nội soi thực quản, dạ dày, tá tràng (  clotest)   gây mê") {
			$tieude="PHIẾU NỘI SOI DẠ DÀY TÁ TRÀNG TRUYỀN HÌNH";
		   $chucnang="VIDEO GASTRO-DOUDENAL SCOPY";
			}
		else if(trim($_GET["tieude"],' ')=="Nội soi thực quản, dạ dày, tá tràng (  clotest)") {
			$tieude="PHIẾU NỘI SOI DẠ DÀY TÁ TRÀNG TRUYỀN HÌNH";
		   $chucnang="VIDEO GASTRO-DOUDENAL SCOPY";
			}
		else {
			$tieude="PHIẾU NỘI SOI TAI MŨI HỌNG";
		   $chucnang="EAR, NOSE AND THROAT SCOPY";
			}
		//echo $_GET["tieude"];
            if(isset($thongtinluotkham[0]["Pilory"])){
                if($thongtinluotkham[0]["Pilory"]=="0"){
                    $pilory="IGNORE";
                }
                else if($thongtinluotkham[0]["Pilory"]=="1"){
                    $pilory="DƯƠNG TÍNH";
                }
                else if($thongtinluotkham[0]["Pilory"]=="2"){
                    $pilory="ÂM TÍNH";
                }
            }
		
    ?>

	<?php if($_GET["header"]=="left"){ ?>
        <div style="font-size:14px;font-family:Tahoma, Geneva, sans-serif;-webkit-transform: rotate(270deg);-moz-transform: rotate(270deg);-o-transform: rotate(270deg);writing-mode: rl-tb;position:absolute;top:550px;left:-365px">  <span style="letter-spacing: 0.5px;font-weight:bold;color:#00b3a0">FAMILY</span> <img src="images/logo_mau.png" />  <span style="letter-spacing: 0.5px;text-transform:uppercase">Phòng khám BS Trường</span> - địa chỉ * T: 123455</div>
    <?php } ?>
	<?php if($_GET["header"]=="top"){ ?>   
    <table cellpadding="0" cellspacing="0" border="0" style="width:100%;font-family:Tahoma, Geneva, sans-serif;">
         <tr style="font-size:14px;">
             <td style=" width:60%">
                <span style="letter-spacing: 0.5px;font-weight:bold;color:#00b3a0">FAMILY</span> <img src="images/logo_mau.png" /> 
                <br />
                <span style="letter-spacing: 0.5px;text-transform:uppercase">Phòng khám BS Trường</span>
             </td>
             <td style=" width:40%; text-align:right">
                Địa chỉ: địa chỉ 
                <br />
                Đà Nẵng
                <br />
                SĐT: 123455
             </td>
         </tr>               
     </table>     
     <?php	} ?>
     <?php if($_GET["header"]=="left"){ ?>
    	<div style=" margin-left:65px;margin-top:20px">
     <?php	} ?>
     <table cellpadding="0" cellspacing="0" border="0" style="width:100%;font-family:Tahoma, Geneva, sans-serif;color:#3a90ee">
     	<tr>
             <td style="text-align:center">
                <p><span style="letter-spacing: 0.5px;font-weight:bold;font-size:23px;">
                <?=$thongtinluotkham[0]['ReportName']?>
                  </span>
                </p>
                <p>Phòng khám Tai Mũi Họng</p>
                <p>Bác sỹ chuyên khoa 1 Ngô Văn Trường</p>
                <p>Địa chỉ: 06 Lê Hữu Trác - Vĩnh Điện - Điện Bàn</p>
                <p>SĐT: 0974 636 999<br />
                </p>
                <div style="height:10px;">
                </div>
             </td>
         
         </tr>    
     </table>
     <table cellpadding="0" cellspacing="0" border="0" style="color:#036;font-size:13px;line-height:1.7; width:98%;font-family:Tahoma, Geneva, sans-serif; border-top:1px solid #000; border-bottom:1px solid #000; padding:5px 0px">         
         <tr>
            <td> Họ tên: <b><?=$thongtinbenhnhan[0]["HoLotBenhNhan"]." ".$thongtinbenhnhan[0]["TenBenhNhan"];?></b></td> 
            <td>Tuổi: <?=$thongtinbenhnhan[0]["Tuoi"];?></td>
            <td>G.tính: <?=$thongtinbenhnhan[0]["Gioi"];?></td>
            <td>&nbsp;</td>
         </tr>
         <tr>
            <td  style="width:65%">Địa chỉ: <?=$thongtinbenhnhan[0]["DiaChi"];?></td> 
            <td colspan="3">Ngày khám:  <?php
			if($thongtinluotkham[0]["NgayGioChanDoan"]!=""){
            	echo $thongtinluotkham[0]["NgayGioChanDoan"]->format("H:i ".$_SESSION["config_system"]["ngaythang"]);
			}
			?></td>            
         </tr>  
          
     </table>
     <table cellpadding="0" cellspacing="0" border="0" style="font-size:13px; width:100%;font-family:Tahoma, Geneva, sans-serif;padding:5px 0px">         
         <tr>
            <td valign="top" style="width:65%;padding-top:10px">
            	<b style="font-size:15px;color:#3a90ee">MÔ TẢ</b>
                <br />
                <pre><i><?=$thongtinluotkham[0]["MoTa"] ?></i></pre>
                <br /><br />
                <?php
                  //  if($thongtinluotkham[0]["ID_LoaiKham"]=="NSDDTT" || $thongtinluotkham[0]["MaVietTat"]=="Nội soi thực quản, dạ dày, tá tràng (+ clotest) + gây mê"|| $thongtinluotkham[0]["MaVietTat"]=="Nội soi thực quản, dạ dày, tá tràng (+ clotest) "){
				if($thongtinluotkham[0]["ID_LoaiKham"]==15 || $thongtinluotkham[0]["ID_LoaiKham"]==6228 || $thongtinluotkham[0]["ID_LoaiKham"]==6229 ||  $thongtinluotkham[0]["ID_LoaiKham"]==6233 ||  $thongtinluotkham[0]["ID_LoaiKham"]==6234 ||  $thongtinluotkham[0]["ID_LoaiKham"]==6235 ||  $thongtinluotkham[0]["ID_LoaiKham"]==6236 ||  $thongtinluotkham[0]["ID_LoaiKham"]==6237){
                        echo("<b style='font-size:15px;color:#00b38b'>HELICOBACTERPYLORY: </b>".$pilory."<br />
               			 <pre><b style='font-size:15px;color:#00b38b'>(CLO TEST)</b></pre>
                 		<br />");
                    }
                ?>
                <b style="font-size:15px;color:#3a90ee">KẾT LUẬN</b><br />
                <pre><b><?=$thongtinluotkham[0]["KetLuan"] ?></b></pre>
                 <br /><br />
                 <?php
                  //  if($thongtinluotkham[0]["MaVietTat"]!="NSDDTT" ){
					if(trim($thongtinluotkham[0]["GhiChu"]," ")!=""){
                        echo("<b style='font-size:15px;color:#3a90ee'>LƯU Ý</b><br /><pre><b>".$thongtinluotkham[0]["GhiChu"]."</b></pre>");
                    }
                 ?>
                
			</td> 
             <td style="width:35%;padding-top:10px; text-align:center" valign="top">
                 <div id="images_container"></div>
             	 <br /><br />
             	 <br />
                 
            </td>             
         </tr>  
         <tr>
             
                <td align="center">
                    <b>
                   <br />
                 </b>
                
                </td>
               <td align="center">
               <b> Bác sỹ </b>
               </td>
                
                
            </tr>   
            <tr>
                
                <td height="auto" style="min-height:95px" align="center" valign="top">
                  
                    
                 <br />                 
                 
                 
                </td>
               
                
                
         </tr>   
          <tr>
             <?php if($thongtinluotkham[0]["BsChanDoan"]!=$thongtinluotkham[0]["NguoiThucHien"]){
                    echo("<td align='center' ><b style='color:red'>".$thongtinluotkham[0]["NguoiThucHien"]."</b></td>");
                    } else{
                        echo("<td></td>");
                    }
                ?>
                <td align="center" valign="bottom">
                    
                 <b style="color:red"><b style="color:red"><?=$thongtinluotkham[0]["BsChanDoan"] ?></b></b>
                </td>
               
                
                
       </tr>                  
     </table>
    <?php if($_GET["header"]=="left"){ ?>
    	</div>
    <?php	} ?>
    
    <script type="application/javascript">
		$(document).ready(function() {
			//alert(<?=$_GET["tieude"]?>)
           // alert(<?=$thongtinluotkham[0]["chuky_bacsy"]?>);
            load_sign('<?=$thongtinluotkham[0]["chuky_bacsy"]?>',"bs_chandoan");
            load_sign('<?=$thongtinluotkham[0]["chuky_nhanvien"]?>',"nv_chandoan");
			<?php 
			//sprint_r($_GET['links']);
				echo "var _links='".$_GET['links']."';";
			?>
			_split_link= _links.split(":::");
			for(i=0;i<=_split_link.length-2;i++){			 
				$("#images_container").append(' <img width="230px" height="180px" src="'+_split_link[i]+'"  /><div style="height:7px"></div> ');
			}
			 print_preview();
		});
	</script>
</body>
</html>
 