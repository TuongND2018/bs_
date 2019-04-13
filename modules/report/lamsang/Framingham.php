<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Report</title>
<style >
body{
	overflow:auto;
	font-family:Arial, Helvetica, sans-serif !important;
	padding-left:15px;
  width:98.5%;
}table td{
	padding-top:7px;
	
}
table.n_nc{
	
}
table.n_nc td{
	border:1px solid #000 !important;
}
input[type=checkbox] { background: #fff!important;
border:1px solid #000!important;
height:10px;
width:10px;
 }
 pre{
white-space: pre-wrap;  
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
		 
		$params1 = array($_GET["id_benhnhan"],$_GET["id_kham"]);//tao param cho store 
        $store_name1="{call GD2_Framingham_ById_BenhNhan_and_IdKham2(?,?)}";//tao bien khai bao store
        $get_thongtinluotkham=$data->query( $store_name1,$params1);//Goi store
        $excute1= new SQLServerResult($get_thongtinluotkham);//Ket noi lop xu ly SQL và truyen gia tri tra ve tu lop ket noi SQL
        $thongtinluotkham= $excute1->get_as_array();//Tra ve mang toan bo data lay duoc
		
			/*	$str = explode(";", $thongtinluotkham[0]['LoiKhuyen']);
		$string = 
		for($i=0;$i<count($str);$i++){
			
		}*/
		
		$string = str_replace(";", "','", $thongtinluotkham[0]['LoiKhuyen']);
		$str="in ('".$string."')";
		$params2 = array($str);//tao param cho store 
        $store_name2="{call GD2_GetFraminghamDieuTriByStringNote(?)}";//tao bien khai bao store
        $get_loikhuyen=$data->query( $store_name2,$params2);//Goi store
        $excute2= new SQLServerResult($get_loikhuyen);//Ket noi lop xu ly SQL và truyen gia tri tra ve tu lop ket noi SQL
        $loikhuyen= $excute2->get_as_array();//Tra ve mang toan bo data lay duoc
		/*
		$params3 = array($_GET["id_benhnhan"]);//tao param cho store 
        $store_name3="{call GD2_GetTTBN_ByID_BenhNhan(?)}";//tao bien khai bao store
        $get_thongtinbn=$data->query( $store_name3,$params3);//Goi store
        $excute3= new SQLServerResult($get_thongtinbn);//Ket noi lop xu ly SQL và truyen gia tri tra ve tu lop ket noi SQL
        $thongtinbn= $excute3->get_as_array();//Tra ve mang toan bo data lay duoc
		*/
	// print_r($thongtinluotkham);
   
    ?>

<table cellpadding="0" cellspacing="0" border="0" style="width:95%;font-family:Arial, Helvetica, sans-serif;">
         <tr style="font-size:12px;">
             <td style=" width:55%">
                <span style="letter-spacing: 0.5px;font-weight:bold">FAMILY</span> <img src="images/logo_print.png" /> <br />
                <span style=" font-size:12px; letter-spacing: 0.5px;text-transform:uppercase"><?php echo $_SESSION["com"]["TenBenhVien"]?></span>
             </td>
             <td style=" width:45%; text-align:right">
                <?php echo $_SESSION["com"]["DiaChi"]?>, Đà Nẵng
                <br />
                Tel: <?php echo $_SESSION["com"]["SoDT"]?>
             </td>
         </tr>         
     </table>  
     
     <h2 align="center" style="font-size:24px;margin-bottom: 0px;">ĐÁNH GIÁ NGUY CƠ</h2>
     <h1 align="center" style="font-size:34px;margin-top: 0px; margin-bottom: 10px;">BỆNH LÝ TIM MẠCH</h1>
     <div class="ngoai" style="width:100%; height: auto;">
         <div class="left" style="width:60%; float:left;height: auto;">
            <div class="1" style="height:50px; width:99% ; border:1px solid #000;  padding-left:2px; ">
                <table cellpadding="0" cellspacing="0" border="0" style="width:100%;font-family:Arial, Helvetica, sans-serif; font-size:12px;">
                 <tr>
                    <td colspan="2">Họ tên: <?=$thongtinbenhnhan[0]['HoLotBenhNhan'].' '.$thongtinbenhnhan[0]['TenBenhNhan']?></td>
                    <td>ID: <?=$thongtinbenhnhan[0]['MaBenhNhan']?></td>
                  </tr>
                  <tr>
                    <td width="35%">Tuổi: <?=$thongtinbenhnhan[0]['Tuoi']?></td>
                    <td width="50%">Giới: <?=$thongtinbenhnhan[0]['Gioi']?></td>
                    <td  width="15%"><?php if($thongtinluotkham[0]["NgayGioChanDoan"]!=""){
                    echo $thongtinluotkham[0]["NgayGioChanDoan"]->format($_SESSION["config_system"]["ngaythang"]);
                }?></td>
                  </tr>
           </table>
            </div>
            <div class="2" style="height:148px; width:99% ; border:1px solid #000; margin-top:5px; padding-left:2px;">
            <table cellpadding="0" cellspacing="0" border="0" style="width:100%;font-family:Arial, Helvetica, sans-serif; font-size:12px;">
            <tr>
                <td width="6%">Cao:</td>
                <td width="11%"><?=$thongtinbenhnhan[0]['ChieuCao']?>cm</td>
                <td width="16%">HA tối đa:</td>
                <td width="8%"><?=$thongtinluotkham[0]["SBP"]?></td>
                <td width="12%">Nhịp tim:</td>
                <td width="8%"><?=$thongtinluotkham[0]["HRate"]?></td>
                <td width="8%">CHOL:</td>
                <td width="8%"><?=$thongtinluotkham[0]["CHOMol"]?></td>
                <td width="10%">LDLC:</td>
                <td width="8%"><?=$thongtinluotkham[0]["LDLMol"]?></td>
              </tr>
              <tr>
                <td>Nặng: </td>
                <td><?=$thongtinbenhnhan[0]['CanNang']?>kg</td>
                <td>HA tối thiểu:</td>
                <td><?=$thongtinluotkham[0]["DBP"]?></td>
                <td>BMI:</td>
                <td><?=$thongtinluotkham[0]["BMI"]?></td>
                <td>HDCL:</td>
                <td><?=$thongtinluotkham[0]["HDLMol"]?></td>
                <td>TG:</td>
                <td><?=$thongtinluotkham[0]["TG"]?></td>
              </tr>
            </table>
            
            <table cellpadding="0" cellspacing="0" border="0" style="width:99%;font-family:Arial, Helvetica, sans-serif; font-size:12px;">
              <tr>
                <td width="28%">Hút thuốc </td>
                <td width="8%"><input type="checkbox" name="hutthuoc" id="hutthuoc"<?php if($thongtinluotkham[0]["Smoker"]==1){ ?> checked="checked" <?php }?> />
                <label for="hutthuoc"></label></td>
                <td width="20%">Bệnh tim mạch</td>
                <td width="8%"><input type="checkbox" name="timmach" id="timmach" <?php if($thongtinluotkham[0]["CVD"]==1){ ?> checked="checked" <?php }?> /></td>
                <td width="20%">Bệnh tiểu đường</td>
                <td width="8%"><input type="checkbox" name="tieuduong" id="hutthuoc8" <?php if($thongtinluotkham[0]["DIABET"]==1){ ?> checked="checked" <?php }?> /></td>
              </tr>
              <tr>
                <td width="15%">Số điếu/ngày</td>
                <td><?=$thongtinluotkham[0]["CigsOnDate"]?></td>
                <td>Bệnh van tim</td>
                <td><input type="checkbox" name="hutthuoc5" id="hutthuoc5" <?php if($thongtinluotkham[0]["Valve"]==1){ ?> checked="checked" <?php }?> /></td>
                <td>Rung nhĩ</td>
                <td><input type="checkbox" name="hutthuoc9" id="hutthuoc9" <?php if($thongtinluotkham[0]["AF"]==1){ ?> checked="checked" <?php }?> /></td>
              </tr>
              <tr>
                <td>Điều trị Cao huyết áp</td>
                <td><input type="checkbox" name="hutthuoc2" id="hutthuoc2" <?php if($thongtinluotkham[0]["Treated"]==1){ ?> checked="checked" <?php }?> /></td>
                <td>Âm thổi trong tim</td>
                <td><input type="checkbox" name="hutthuoc6" id="hutthuoc6" <?php if($thongtinluotkham[0]["Murmur"]==1){ ?> checked="checked" <?php }?> /></td>
                <td>Dày thất trái</td>
                <td><input type="checkbox" name="hutthuoc10" id="hutthuoc10" <?php if($thongtinluotkham[0]["LVH"]==1){ ?> checked="checked" <?php }?> /></td>
              </tr>
              <tr>
                <td>Đi khập khiễng cách hồi</td>
                <td><input type="checkbox" name="hutthuoc3" id="hutthuoc3" <?php if($thongtinluotkham[0]["IC"]==1){ ?> checked="checked" <?php }?> /></td>
                <td>Bệnh mạch vành</td>
                <td><input type="checkbox" name="hutthuoc7" id="hutthuoc7" <?php if($thongtinluotkham[0]["CHD"]==1){ ?> checked="checked" <?php }?> /></td>
                <td>Suy tim</td>
                <td><input type="checkbox" name="hutthuoc11" id="hutthuoc11" <?php if($thongtinluotkham[0]["HF"]==1){ ?> checked="checked" <?php }?> /></td>
              </tr>
            </table>
    
            </div>
            <div class="3" style="text-align:center; border:1px solid #000; height:37px; background:#CCC; font-weight:bold; margin-top:5px; padding-top:2px;">
            NGUY CƠ BỆNH LÝ TIM MẠCH<br />TRONG TƯƠNG LAI
            </div>
            
            <div class="4" style="text-align:center; border:1px solid #000; height:20px; margin-top:5px; padding-top:2px; font-weight:bold; font-size:12px;">
            (Theo Framingham Heart Study)
            </div>
            
            <div class="4" style="border:1px solid #000; margin-top:5px; padding-top:2px; font-size:12px;padding-left:2px;">
            <pre style="font-family:Arial, Helvetica, sans-serif; font-size:12px;"> <?=$thongtinluotkham[0]["MoTa"]?></pre>
           
            </div>
         
         </div>
         <div class="right" style="width:35%; float:left; margin-left:10px; height: auto;">
            <div class="5" style="text-align:center; border:1px solid #000; height:37px; background:#CCC; font-weight:bold; padding-top:2px;">
            CẦN PHẢI LÀM GÌ<br />ĐỂ GIẢM NGUY CƠ NÀY
            </div>
            <div class="6" style="text-align:center; border:1px solid #000; height:32px; margin-top:5px; padding-top:2px; font-weight:bold; font-size:12px;">
            (Theo khuyến cáo của hội tim mạch VN<BR />và ATP III Guidelines)
            </div>
            <table class="n_nc" cellpadding="0" cellspacing="0" border="0" style="width:100%;font-family:Arial, Helvetica, sans-serif; font-size:12px; margin-top:5px;">
            <?php
            foreach($loikhuyen as $lk){
            ?>
              <tr>
                <td width="70%" style="padding-left:2px;">&nbsp;<?=$lk['Dieutri'] ?></td>
                <td width="30%"  style="text-align:center;">&nbsp;<img width="50px" height="50px" src="./modules/report/lamsang/img/FRAMINGHAM/<?=$lk['Icon'] ?>" /></td>
              </tr>
              <?php
              }
              ?>
            </table>
            
         </div>
    </div>
     <table cellpadding="0" cellspacing="0" border="0" style="width:100%;font-family:Arial, Helvetica, sans-serif; font-size:12px; margin-top:0px;">
          <tr>
            <td width="50%" align="center" >&nbsp;<i>In từ dữ liệu gốc, Ngày <?=date('d')?> tháng <?=date('m')?> năm <?=date('Y')?></i> <br /><strong>Bác sỹ tư vấn</strong><br />
            <img id="bs_chandoan" width="100" height="70"/>
            </td>
            <td width="50%"></td>
          </tr>
          <tr>
            <td  align="center"  width="50%"><strong><?=$thongtinluotkham[0]["HoTenBSTH"]?></strong></td>
            <td width="50%" ></td>
          </tr>
        </table>
        <script type="text/javascript">
       $(document).ready(function(){
		   if($('.left').height()>$('.right').height()){
			   $('.ngoai').css('height',$('.left').height()+'px');
			   }else{
				   $('.ngoai').css('height',$('.right').height()+'px');
				   }
		load_sign('<?=$thongtinluotkham[0]["chuky_bacsy"]?>',"bs_chandoan");	
		print_preview();
		   });
	   
	   </script>
</body>
</html>
 