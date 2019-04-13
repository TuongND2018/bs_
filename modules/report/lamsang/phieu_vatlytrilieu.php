<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Report</title>
<style >
body{
	overflow:auto;
	margin:0;
}
.input_style{
		border: none;
		border-bottom:1px dotted #000;
		}
input[type=checkbox].css-checkbox {
							display:none;
						}

						input[type=checkbox].css-checkbox + label.css-label {
							padding-left:20px;
							height:15px; 
							display:inline-block;
							line-height:15px;
							background-repeat:no-repeat;
							background-position: 0 0;
							font-size:15px;
							vertical-align:middle;
							cursor:pointer;

						}

						input[type=checkbox].css-checkbox:checked + label.css-label {
							background-position: 0 -15px;
						}
						label.css-label {
						background-image:url(images/csscheckbox_cbedf8fc34fc83a015128029efb1c1d4.png);
						-webkit-touch-callout: none;
						-webkit-user-select: none;
						-khtml-user-select: none;
						-moz-user-select: none;
						-ms-user-select: none;
						user-select: none;
			}
pre {
 white-space: pre-wrap;       /* css-3 */
 white-space: -moz-pre-wrap;  /* Mozilla, since 1999 */
 white-space: -pre-wrap;      /* Opera 4-6 */
 white-space: -o-pre-wrap;    /* Opera 7 */
 word-wrap: break-word;       /* Internet Explorer 5.5+ */
 font:13px Tahoma, Geneva, sans-serif;
}
#title{
		font-family:Tahoma, Geneva, sans-serif;
		font-size:13px;
		font-weight:bold;
		}
#chidinh,#chidinh2,#chidinh3{
	border:none!important;
	background:url(images/dotted.png) repeat;
	line-height:23px;
	background-size: 3px 23px;
}

</style>
</head>
 
<body>
	<?php
		
         $data= new SQLServer;//tao lop ket noi SQL
		//$params = array('258707');
        $params = array($_GET["idluotkham"]);//tao param cho store 
        $store_name="{call GD2_Select_BenhanNoiTru_report(?)}";//tao bien khai bao store
        $get_thongtinbenhnhan=$data->query( $store_name,$params);//Goi store
        $excute= new SQLServerResult($get_thongtinbenhnhan);//Ket noi lop xu ly SQL và truyen gia tri tra ve tu lop ket noi SQL
        $thongtinbenhnhan= $excute->get_as_array();//Tra ve mang toan bo data lay duoc    
	
		//thong tin quan ly nguoi benh
		$params2 = array($_GET["idluotkham"]);//tao param cho store 
        $store_name2="{call GD2_SelectAll_BenhAnNoiTru_report(?)}";//tao bien khai bao store
        $get_quanlynguoibenh=$data->query( $store_name2,$params2);//Goi store
        $excute2= new SQLServerResult($get_quanlynguoibenh);//Ket noi lop xu ly SQL và truyen gia tri tra ve tu lop ket noi SQL
        $quanlynguoibenh= $excute2->get_as_array();//Tra ve mang toan bo data lay duoc
		//print_r($quanlynguoibenh[0]["NgayGioVaoVien"]);
		if($quanlynguoibenh[0]["NgayGioVaoVien"]!='')
		{
		 $quanlynguoibenh[0]["NgayGioVaoVien"]=$quanlynguoibenh[0]["NgayGioVaoVien"]->format($_SESSION["config_system"]["ngaythang"]);
		}else{
			
			$quanlynguoibenh[0]["NgayGioVaoVien"]='';
		}
		if($quanlynguoibenh[0]["NgayGioRaVien"]!='')
		{
		 $quanlynguoibenh[0]["NgayGioRaVien"]=$quanlynguoibenh[0]["NgayGioRaVien"]->format($_SESSION["config_system"]["ngaythang"]);
		}else{
			
			$quanlynguoibenh[0]["NgayGioRaVien"]='';
		}
		
		$params1 = array($_GET["idbenhannoitru"]);//tao param cho store 
        $store_name1="{call GD2_GetThongTinChuyenMonByID_BenhAnNoiTru(?)}";//tao bien khai bao store
        $get_ttchuyenmon=$data->query( $store_name1,$params1);//Goi store
        $excute1= new SQLServerResult($get_ttchuyenmon);//Ket noi lop xu ly SQL và truyen gia tri tra ve tu lop ket noi SQL
        $get_ttchuyenmon= $excute1->get_as_array();//Tra ve mang toan bo data lay duoc
		//print_r($thongtinluotkham);
		if($thongtinbenhnhan[0]["thangsinh"]<72&&$thongtinbenhnhan[0]["thangsinh"]!=0)
		{
			$thangtuoi=$thongtinbenhnhan[0]["thangsinh"].' tháng';
		}
		else{
			$thangtuoi=$thongtinbenhnhan[0]["Tuoi"];
		}
		
		if($thongtinbenhnhan[0]["Gioi"]=="Nam"){
            $Nam=1;
			
		}else{
			 $Nam=0;			
		}
		
		if($get_ttchuyenmon[0]["ThongTinChuyenMon"]!=''){
			$ttchuyenmon= explode('|||',$get_ttchuyenmon[0]["ThongTinChuyenMon"]);
			for($k=0;$k<=149;$k++){
				if($ttchuyenmon[$k]==''){
				$ttchuyenmon[$k]='';
			}
		}
		}else{
			for($k=0;$k<=202;$k++){	
				$ttchuyenmon[$k]='';
			}
		}
		
    ?>

<div class="header" style="border:none !important; margin-left:20px">
    <table width="95%" cellpadding="0" cellspacing="0" id="table_top">
  <tr>
  	<td width="7%">
  <img width="40px" height="70px" src="./modules/report/lamsang/img/theodoichucnangsong/logo_den.png"  />
  </td>
    <td style="font-size:12px" width="25%">
    <?php echo $_SESSION["com"]["TenCoQuanTrucThuoc"]?> <br />
    <?php echo $_SESSION["com"]["TenBenhVien"]?><br />
     
    </td>
    <td  style=" font-size:18px; text-align:center; font-weight:bold"  width="60%">
    PHIẾU VẬT LÝ TRỊ LIỆU <br />
    (Dành cho BN ngoại trú tại khoa PHCN)
    </td>
    <td style="font-size:12px"  width="15%">
    MS:<?= $quanlynguoibenh[0]["SoBenhAn"]?><br />
    Số vv:<?= $quanlynguoibenh[0]["SoVaoVien"]?>
    </td>
  </tr>
</table>
</div>

<div class="header" style="border:none !important; margin-left:20px">
  <div id="title" style="float:left">I.HÀNH CHÍNH </div>
  <div style="margin-left:20px"><br />
    <label for="hoten">
    Họ và tên(in hoa): </label><input class="input_style" type="text" name="hoten" id="hoten" style=" text-align:left; width:30%; font-weight:800" value=" <?=$thongtinbenhnhan[0]["tenbenhnhan"];?>"/> 
  <label id="tuoi111" for="tuoi"> Tuổi: </label><input class="input_style" type="text" name="tuoi" id="tuoi" style=" text-align:left; width:25px; font-weight:800" value="<?=$thangtuoi;?>"/> 
  <label id="checkbox"> Nam</label>
  <input id="gioitinh" type="checkbox" name="gioitinh" <?php if($Nam==1){echo 'checked';}?>  class="css-checkbox"/><label class="css-label" for="gioitinh"></label><label id="checkbox"> Nữ</label><input type="checkbox" name="gioi" <?php if($Nam==0){echo 'checked';}?>  class="css-checkbox" id="gioi"/><label class="css-label" for="gioi"></label>
  
    <label for="ngaydt"><br />Ngày vào điều trị: </label><input class="input_style" type="text" name="tuoi" id="tuoi" style=" text-align:left; width:65px; font-weight:800" value="<?=$quanlynguoibenh[0]["NgayGioVaoVien"];?>"/> 
    <label for="ngayhdt">Ngày hết điều trị: </label><input class="input_style" type="text" name="tuoi" id="tuoi" style=" text-align:left; width:65px; font-weight:800" value="<?=$quanlynguoibenh[0]["NgayGioRaVien"];?>"/> 
  
    <label for="chandoan"><br />Chẩn đoán: </label><input class="input_style" type="text" name="tuoi" id="tuoi" style=" text-align:left; width:600px; font-weight:800" value="<?= $quanlynguoibenh[0]["CD_RaVienBenhChinh"];?>"/> 
  </div>
</div>
<div id="title" style="float:left; margin-left:20px">II.CHỈ ĐỊNH ĐIỀU TRỊ VẬT LÝ - PHỤC HỒI CHỨC NĂNG </div>
 <br />
<table id="aa" width="95%" style="margin-left:20px">
	<tr>
    	<td width="50%"colspan="2" valign="top" style="margin-top:2px">
         <div id="images_container"></div>
         <textarea id="chidinh" cols="60" rows="13"><?=  $ttchuyenmon[219]?>
         </textarea>
        </td>
        <td width="50%" style="margin-top:2px">
        	<table width="95%" border="1"  cellpadding="0" cellspacing="0" style="font-size:12px">
            	<tr>
                	<td rowspan="2" width="5%" align="center">TT</td>
                    <td rowspan="2" width="45%" align="center">Ngày</td>
                    <td colspan="5" align="center">Các PP ĐT</td>
                </tr>
                <tr>
                	<td width="10%" align="center"><?=  $ttchuyenmon[17]?></td>
                    <td width="10%"  align="center"><?=  $ttchuyenmon[18]?></td>
                    <td width="10%"  align="center"><?=  $ttchuyenmon[19]?></td>
                    <td width="10%"  align="center"><?=  $ttchuyenmon[20]?></td>
                    <td width="10%"  align="center"><?=  $ttchuyenmon[21]?></td>
                </tr>
                <tr>
                	<td align="center">1</td>
                    <td align="center"><?=  $ttchuyenmon[22]?></td>
                  <td align="center"><input type="checkbox" name="ddthang" id="ddthang" <?php if($ttchuyenmon[23]=='true__check'){echo 'checked';}?> class="css-checkbox"/><label class="css-label" for="ddthang"></label></td>
                  <td align="center"><input type="checkbox" name="dethieut" id="dethieut" <?php if($ttchuyenmon[24]=='true__check'){echo 'checked';}?> class="css-checkbox"/><label class="css-label" for="dethieut"></label></td>
                  <td align="center"><input type="checkbox" name="say" id="say" <?php if($ttchuyenmon[25]=='true__check'){echo 'checked';}?> class="css-checkbox"/><label class="css-label" for="say"></label></td>
                  <td align="center"><input type="checkbox" name="hut" id="hut" <?php if($ttchuyenmon[26]=='true__check'){echo 'checked';}?> class="css-checkbox"/><label class="css-label" for="hut"></label></td>
                  <td align="center"><input type="checkbox" name="covac" id="covac" <?php if($ttchuyenmon[27]=='true__check'){echo 'checked';}?> class="css-checkbox"/><label class="css-label" for="covac"></label></td>
                </tr>
                <tr>
                	<td align="center">2</td>
                    <td align="center"><?=  $ttchuyenmon[28]?></td>
                  <td align="center"><input type="checkbox" name="ddthang" id="ddthang" <?php if($ttchuyenmon[29]=='true__check'){echo 'checked';}?> class="css-checkbox"/><label class="css-label" for="ddthang"></label></td>
                  <td align="center"><input type="checkbox" name="dethieut" id="dethieut" <?php if($ttchuyenmon[30]=='true__check'){echo 'checked';}?> class="css-checkbox"/><label class="css-label" for="dethieut"></label></td>
                  <td align="center"><input type="checkbox" name="say" id="say" <?php if($ttchuyenmon[31]=='true__check'){echo 'checked';}?> class="css-checkbox"/><label class="css-label" for="say"></label></td>
                  <td align="center"><input type="checkbox" name="hut" id="hut" <?php if($ttchuyenmon[32]=='true__check'){echo 'checked';}?> class="css-checkbox"/><label class="css-label" for="hut"></label></td>
                  <td align="center"><input type="checkbox" name="covac" id="covac" <?php if($ttchuyenmon[33]=='true__check'){echo 'checked';}?> class="css-checkbox"/><label class="css-label" for="covac"></label></td>
                </tr>
                <tr>
                	<td align="center">3</td>
                    <td align="center"><?=  $ttchuyenmon[34]?></td>
                  <td align="center"><input type="checkbox" name="ddthang" id="ddthang" <?php if($ttchuyenmon[35]=='true__check'){echo 'checked';}?> class="css-checkbox"/><label class="css-label" for="ddthang"></label></td>
                  <td align="center"><input type="checkbox" name="dethieut" id="dethieut" <?php if($ttchuyenmon[36]=='true__check'){echo 'checked';}?> class="css-checkbox"/><label class="css-label" for="dethieut"></label></td>
                  <td align="center"><input type="checkbox" name="say" id="say" <?php if($ttchuyenmon[37]=='true__check'){echo 'checked';}?> class="css-checkbox"/><label class="css-label" for="say"></label></td>
                  <td align="center"><input type="checkbox" name="hut" id="hut" <?php if($ttchuyenmon[38]=='true__check'){echo 'checked';}?> class="css-checkbox"/><label class="css-label" for="hut"></label></td>
                  <td align="center"><input type="checkbox" name="covac" id="covac" <?php if($ttchuyenmon[39]=='true__check'){echo 'checked';}?> class="css-checkbox"/><label class="css-label" for="covac"></label></td>
                </tr>
                <tr>
                	<td align="center">4</td>
                    <td align="center"><?=  $ttchuyenmon[40]?></td>
                  <td align="center"><input type="checkbox" name="ddthang" id="ddthang" <?php if($ttchuyenmon[41]=='true__check'){echo 'checked';}?> class="css-checkbox"/><label class="css-label" for="ddthang"></label></td>
                  <td align="center"><input type="checkbox" name="dethieut" id="dethieut" <?php if($ttchuyenmon[42]=='true__check'){echo 'checked';}?> class="css-checkbox"/><label class="css-label" for="dethieut"></label></td>
                  <td align="center"><input type="checkbox" name="say" id="say" <?php if($ttchuyenmon[43]=='true__check'){echo 'checked';}?> class="css-checkbox"/><label class="css-label" for="say"></label></td>
                  <td align="center"><input type="checkbox" name="hut" id="hut" <?php if($ttchuyenmon[44]=='true__check'){echo 'checked';}?> class="css-checkbox"/><label class="css-label" for="hut"></label></td>
                  <td align="center"><input type="checkbox" name="covac" id="covac" <?php if($ttchuyenmon[45]=='true__check'){echo 'checked';}?> class="css-checkbox"/><label class="css-label" for="covac"></label></td>
                </tr>
                <tr>
                	<td align="center">5</td>
                    <td align="center"><?=  $ttchuyenmon[46]?></td>
                  <td align="center"><input type="checkbox" name="ddthang" id="ddthang" <?php if($ttchuyenmon[47]=='true__check'){echo 'checked';}?> class="css-checkbox"/><label class="css-label" for="ddthang"></label></td>
                  <td align="center"><input type="checkbox" name="dethieut" id="dethieut" <?php if($ttchuyenmon[48]=='true__check'){echo 'checked';}?> class="css-checkbox"/><label class="css-label" for="dethieut"></label></td>
                  <td align="center"><input type="checkbox" name="say" id="say" <?php if($ttchuyenmon[49]=='true__check'){echo 'checked';}?> class="css-checkbox"/><label class="css-label" for="say"></label></td>
                  <td align="center"><input type="checkbox" name="hut" id="hut" <?php if($ttchuyenmon[50]=='true__check'){echo 'checked';}?> class="css-checkbox"/><label class="css-label" for="hut"></label></td>
                  <td align="center"><input type="checkbox" name="covac" id="covac" <?php if($ttchuyenmon[51]=='true__check'){echo 'checked';}?> class="css-checkbox"/><label class="css-label" for="covac"></label></td>
                </tr>
                <tr>
                	<td align="center">6</td>
                    <td align="center"><?=  $ttchuyenmon[52]?></td>
                  <td align="center"><input type="checkbox" name="ddthang" id="ddthang" <?php if($ttchuyenmon[53]=='true__check'){echo 'checked';}?> class="css-checkbox"/><label class="css-label" for="ddthang"></label></td>
                  <td align="center"><input type="checkbox" name="dethieut" id="dethieut" <?php if($ttchuyenmon[54]=='true__check'){echo 'checked';}?> class="css-checkbox"/><label class="css-label" for="dethieut"></label></td>
                  <td align="center"><input type="checkbox" name="say" id="say" <?php if($ttchuyenmon[55]=='true__check'){echo 'checked';}?> class="css-checkbox"/><label class="css-label" for="say"></label></td>
                  <td align="center"><input type="checkbox" name="hut" id="hut" <?php if($ttchuyenmon[56]=='true__check'){echo 'checked';}?> class="css-checkbox"/><label class="css-label" for="hut"></label></td>
                  <td align="center"><input type="checkbox" name="covac" id="covac" <?php if($ttchuyenmon[57]=='true__check'){echo 'checked';}?> class="css-checkbox"/><label class="css-label" for="covac"></label></td>
                </tr>
                <tr>
                	<td align="center">7</td>
                    <td align="center"><?=  $ttchuyenmon[58]?></td>
                  <td align="center"><input type="checkbox" name="ddthang" id="ddthang" <?php if($ttchuyenmon[59]=='true__check'){echo 'checked';}?> class="css-checkbox"/><label class="css-label" for="ddthang"></label></td>
                  <td align="center"><input type="checkbox" name="dethieut" id="dethieut" <?php if($ttchuyenmon[60]=='true__check'){echo 'checked';}?> class="css-checkbox"/><label class="css-label" for="dethieut"></label></td>
                  <td align="center"><input type="checkbox" name="say" id="say" <?php if($ttchuyenmon[61]=='true__check'){echo 'checked';}?> class="css-checkbox"/><label class="css-label" for="say"></label></td>
                  <td align="center"><input type="checkbox" name="hut" id="hut" <?php if($ttchuyenmon[62]=='true__check'){echo 'checked';}?> class="css-checkbox"/><label class="css-label" for="hut"></label></td>
                  <td align="center"><input type="checkbox" name="covac" id="covac" <?php if($ttchuyenmon[63]=='true__check'){echo 'checked';}?> class="css-checkbox"/><label class="css-label" for="covac"></label></td>
                </tr>
                <tr>
                	<td align="center">8</td>
                    <td align="center"><?=  $ttchuyenmon[64]?></td>
                  <td align="center"><input type="checkbox" name="ddthang" id="ddthang" <?php if($ttchuyenmon[65]=='true__check'){echo 'checked';}?> class="css-checkbox"/><label class="css-label" for="ddthang"></label></td>
                  <td align="center"><input type="checkbox" name="dethieut" id="dethieut" <?php if($ttchuyenmon[66]=='true__check'){echo 'checked';}?> class="css-checkbox"/><label class="css-label" for="dethieut"></label></td>
                  <td align="center"><input type="checkbox" name="say" id="say" <?php if($ttchuyenmon[67]=='true__check'){echo 'checked';}?> class="css-checkbox"/><label class="css-label" for="say"></label></td>
                  <td align="center"><input type="checkbox" name="hut" id="hut" <?php if($ttchuyenmon[68]=='true__check'){echo 'checked';}?> class="css-checkbox"/><label class="css-label" for="hut"></label></td>
                  <td align="center"><input type="checkbox" name="covac" id="covac" <?php if($ttchuyenmon[69]=='true__check'){echo 'checked';}?> class="css-checkbox"/><label class="css-label" for="covac"></label></td>
                </tr>
                <tr>
                	<td align="center">9</td>
                    <td align="center"><?=  $ttchuyenmon[70]?></td>
                  <td align="center"><input type="checkbox" name="ddthang" id="ddthang" <?php if($ttchuyenmon[71]=='true__check'){echo 'checked';}?> class="css-checkbox"/><label class="css-label" for="ddthang"></label></td>
                  <td align="center"><input type="checkbox" name="dethieut" id="dethieut" <?php if($ttchuyenmon[72]=='true__check'){echo 'checked';}?> class="css-checkbox"/><label class="css-label" for="dethieut"></label></td>
                  <td align="center"><input type="checkbox" name="say" id="say" <?php if($ttchuyenmon[73]=='true__check'){echo 'checked';}?> class="css-checkbox"/><label class="css-label" for="say"></label></td>
                  <td align="center"><input type="checkbox" name="hut" id="hut" <?php if($ttchuyenmon[74]=='true__check'){echo 'checked';}?> class="css-checkbox"/><label class="css-label" for="hut"></label></td>
                  <td align="center"><input type="checkbox" name="covac" id="covac" <?php if($ttchuyenmon[75]=='true__check'){echo 'checked';}?> class="css-checkbox"/><label class="css-label" for="covac"></label></td>
                </tr>
                <tr>
                	<td align="center">10</td>
                    <td align="center"><?=  $ttchuyenmon[76]?></td>
                  <td align="center"><input type="checkbox" name="ddthang" id="ddthang" <?php if($ttchuyenmon[77]=='true__check'){echo 'checked';}?> class="css-checkbox"/><label class="css-label" for="ddthang"></label></td>
                  <td align="center"><input type="checkbox" name="dethieut" id="dethieut" <?php if($ttchuyenmon[78]=='true__check'){echo 'checked';}?> class="css-checkbox"/><label class="css-label" for="dethieut"></label></td>
                  <td align="center"><input type="checkbox" name="say" id="say" <?php if($ttchuyenmon[79]=='true__check'){echo 'checked';}?> class="css-checkbox"/><label class="css-label" for="say"></label></td>
                  <td align="center"><input type="checkbox" name="hut" id="hut" <?php if($ttchuyenmon[80]=='true__check'){echo 'checked';}?> class="css-checkbox"/><label class="css-label" for="hut"></label></td>
                  <td align="center"><input type="checkbox" name="covac" id="covac" <?php if($ttchuyenmon[81]=='true__check'){echo 'checked';}?> class="css-checkbox"/><label class="css-label" for="covac"></label></td>
                </tr>
                <tr>
                	<td align="center">11</td>
                    <td align="center"><?=  $ttchuyenmon[82]?></td>
                  <td align="center"><input type="checkbox" name="ddthang" id="ddthang" <?php if($ttchuyenmon[83]=='true__check'){echo 'checked';}?> class="css-checkbox"/><label class="css-label" for="ddthang"></label></td>
                  <td align="center"><input type="checkbox" name="dethieut" id="dethieut" <?php if($ttchuyenmon[84]=='true__check'){echo 'checked';}?> class="css-checkbox"/><label class="css-label" for="dethieut"></label></td>
                  <td align="center"><input type="checkbox" name="say" id="say" <?php if($ttchuyenmon[85]=='true__check'){echo 'checked';}?> class="css-checkbox"/><label class="css-label" for="say"></label></td>
                  <td align="center"><input type="checkbox" name="hut" id="hut" <?php if($ttchuyenmon[86]=='true__check'){echo 'checked';}?> class="css-checkbox"/><label class="css-label" for="hut"></label></td>
                  <td align="center"><input type="checkbox" name="covac" id="covac" <?php if($ttchuyenmon[87]=='true__check'){echo 'checked';}?> class="css-checkbox"/><label class="css-label" for="covac"></label></td>
                </tr>
                <tr>
                	<td align="center">12</td>
                    <td align="center"><?=  $ttchuyenmon[88]?></td>
                  <td align="center"><input type="checkbox" name="ddthang" id="ddthang" <?php if($ttchuyenmon[89]=='true__check'){echo 'checked';}?> class="css-checkbox"/><label class="css-label" for="ddthang"></label></td>
                  <td align="center"><input type="checkbox" name="dethieut" id="dethieut" <?php if($ttchuyenmon[90]=='true__check'){echo 'checked';}?> class="css-checkbox"/><label class="css-label" for="dethieut"></label></td>
                  <td align="center"><input type="checkbox" name="say" id="say" <?php if($ttchuyenmon[91]=='true__check'){echo 'checked';}?> class="css-checkbox"/><label class="css-label" for="say"></label></td>
                  <td align="center"><input type="checkbox" name="hut" id="hut" <?php if($ttchuyenmon[92]=='true__check'){echo 'checked';}?> class="css-checkbox"/><label class="css-label" for="hut"></label></td>
                  <td align="center"><input type="checkbox" name="covac" id="covac" <?php if($ttchuyenmon[93]=='true__check'){echo 'checked';}?> class="css-checkbox"/><label class="css-label" for="covac"></label></td>
                </tr>
                <tr>
                	<td align="center">13</td>
                    <td align="center"><?=  $ttchuyenmon[94]?></td>
                  <td align="center"><input type="checkbox" name="ddthang" id="ddthang" <?php if($ttchuyenmon[95]=='true__check'){echo 'checked';}?> class="css-checkbox"/><label class="css-label" for="ddthang"></label></td>
                  <td align="center"><input type="checkbox" name="dethieut" id="dethieut" <?php if($ttchuyenmon[96]=='true__check'){echo 'checked';}?> class="css-checkbox"/><label class="css-label" for="dethieut"></label></td>
                  <td align="center"><input type="checkbox" name="say" id="say" <?php if($ttchuyenmon[97]=='true__check'){echo 'checked';}?> class="css-checkbox"/><label class="css-label" for="say"></label></td>
                  <td align="center"><input type="checkbox" name="hut" id="hut" <?php if($ttchuyenmon[98]=='true__check'){echo 'checked';}?> class="css-checkbox"/><label class="css-label" for="hut"></label></td>
                  <td align="center"><input type="checkbox" name="covac" id="covac" <?php if($ttchuyenmon[99]=='true__check'){echo 'checked';}?> class="css-checkbox"/><label class="css-label" for="covac"></label></td>
                </tr>
                <tr>
                	<td align="center">14</td>
                    <td align="center"><?=  $ttchuyenmon[100]?></td>
                  <td align="center"><input type="checkbox" name="ddthang" id="ddthang" <?php if($ttchuyenmon[101]=='true__check'){echo 'checked';}?> class="css-checkbox"/><label class="css-label" for="ddthang"></label></td>
                  <td align="center"><input type="checkbox" name="dethieut" id="dethieut" <?php if($ttchuyenmon[102]=='true__check'){echo 'checked';}?> class="css-checkbox"/><label class="css-label" for="dethieut"></label></td>
                  <td align="center"><input type="checkbox" name="say" id="say" <?php if($ttchuyenmon[103]=='true__check'){echo 'checked';}?> class="css-checkbox"/><label class="css-label" for="say"></label></td>
                  <td align="center"><input type="checkbox" name="hut" id="hut" <?php if($ttchuyenmon[104]=='true__check'){echo 'checked';}?> class="css-checkbox"/><label class="css-label" for="hut"></label></td>
                  <td align="center"><input type="checkbox" name="covac" id="covac" <?php if($ttchuyenmon[105]=='true__check'){echo 'checked';}?> class="css-checkbox"/><label class="css-label" for="covac"></label></td>
                </tr>
                <tr>
                	<td align="center">15</td>
                    <td align="center"><?=  $ttchuyenmon[106]?></td>
                  <td align="center"><input type="checkbox" name="ddthang" id="ddthang" <?php if($ttchuyenmon[107]=='true__check'){echo 'checked';}?> class="css-checkbox"/><label class="css-label" for="ddthang"></label></td>
                  <td align="center"><input type="checkbox" name="dethieut" id="dethieut" <?php if($ttchuyenmon[108]=='true__check'){echo 'checked';}?> class="css-checkbox"/><label class="css-label" for="dethieut"></label></td>
                  <td align="center"><input type="checkbox" name="say" id="say" <?php if($ttchuyenmon[109]=='true__check'){echo 'checked';}?> class="css-checkbox"/><label class="css-label" for="say"></label></td>
                  <td align="center"><input type="checkbox" name="hut" id="hut" <?php if($ttchuyenmon[110]=='true__check'){echo 'checked';}?> class="css-checkbox"/><label class="css-label" for="hut"></label></td>
                  <td align="center"><input type="checkbox" name="covac" id="covac" <?php if($ttchuyenmon[111]=='true__check'){echo 'checked';}?> class="css-checkbox"/><label class="css-label" for="covac"></label></td>
                </tr>
                <tr>
                	<td align="center">16</td>
                    <td align="center"><?=  $ttchuyenmon[112]?></td>
                  <td align="center"><input type="checkbox" name="ddthang" id="ddthang" <?php if($ttchuyenmon[113]=='true__check'){echo 'checked';}?> class="css-checkbox"/><label class="css-label" for="ddthang"></label></td>
                  <td align="center"><input type="checkbox" name="dethieut" id="dethieut" <?php if($ttchuyenmon[114]=='true__check'){echo 'checked';}?> class="css-checkbox"/><label class="css-label" for="dethieut"></label></td>
                  <td align="center"><input type="checkbox" name="say" id="say" <?php if($ttchuyenmon[115]=='true__check'){echo 'checked';}?> class="css-checkbox"/><label class="css-label" for="say"></label></td>
                  <td align="center"><input type="checkbox" name="hut" id="hut" <?php if($ttchuyenmon[116]=='true__check'){echo 'checked';}?> class="css-checkbox"/><label class="css-label" for="hut"></label></td>
                  <td align="center"><input type="checkbox" name="covac" id="covac" <?php if($ttchuyenmon[117]=='true__check'){echo 'checked';}?> class="css-checkbox"/><label class="css-label" for="covac"></label></td>
                </tr>
                <tr>
                	<td align="center">17</td>
                    <td align="center"><?=  $ttchuyenmon[118]?></td>
                  <td align="center"><input type="checkbox" name="ddthang" id="ddthang" <?php if($ttchuyenmon[119]=='true__check'){echo 'checked';}?> class="css-checkbox"/><label class="css-label" for="ddthang"></label></td>
                  <td align="center"><input type="checkbox" name="dethieut" id="dethieut" <?php if($ttchuyenmon[120]=='true__check'){echo 'checked';}?> class="css-checkbox"/><label class="css-label" for="dethieut"></label></td>
                  <td align="center"><input type="checkbox" name="say" id="say" <?php if($ttchuyenmon[121]=='true__check'){echo 'checked';}?> class="css-checkbox"/><label class="css-label" for="say"></label></td>
                  <td align="center"><input type="checkbox" name="hut" id="hut" <?php if($ttchuyenmon[122]=='true__check'){echo 'checked';}?> class="css-checkbox"/><label class="css-label" for="hut"></label></td>
                  <td align="center"><input type="checkbox" name="covac" id="covac" <?php if($ttchuyenmon[123]=='true__check'){echo 'checked';}?> class="css-checkbox"/><label class="css-label" for="covac"></label></td>
                </tr>
                <tr>
                	<td align="center">18</td>
                    <td align="center"><?=  $ttchuyenmon[124]?></td>
                  <td align="center"><input type="checkbox" name="ddthang" id="ddthang" <?php if($ttchuyenmon[125]=='true__check'){echo 'checked';}?> class="css-checkbox"/><label class="css-label" for="ddthang"></label></td>
                  <td align="center"><input type="checkbox" name="dethieut" id="dethieut" <?php if($ttchuyenmon[126]=='true__check'){echo 'checked';}?> class="css-checkbox"/><label class="css-label" for="dethieut"></label></td>
                  <td align="center"><input type="checkbox" name="say" id="say" <?php if($ttchuyenmon[127]=='true__check'){echo 'checked';}?> class="css-checkbox"/><label class="css-label" for="say"></label></td>
                  <td align="center"><input type="checkbox" name="hut" id="hut" <?php if($ttchuyenmon[128]=='true__check'){echo 'checked';}?> class="css-checkbox"/><label class="css-label" for="hut"></label></td>
                  <td align="center"><input type="checkbox" name="covac" id="covac" <?php if($ttchuyenmon[129]=='true__check'){echo 'checked';}?> class="css-checkbox"/><label class="css-label" for="covac"></label></td>
                </tr>
                <tr>
                	<td align="center">19</td>
                    <td align="center"><?=  $ttchuyenmon[130]?></td>
                  <td align="center"><input type="checkbox" name="ddthang" id="ddthang" <?php if($ttchuyenmon[131]=='true__check'){echo 'checked';}?> class="css-checkbox"/><label class="css-label" for="ddthang"></label></td>
                  <td align="center"><input type="checkbox" name="dethieut" id="dethieut" <?php if($ttchuyenmon[132]=='true__check'){echo 'checked';}?> class="css-checkbox"/><label class="css-label" for="dethieut"></label></td>
                  <td align="center"><input type="checkbox" name="say" id="say" <?php if($ttchuyenmon[133]=='true__check'){echo 'checked';}?> class="css-checkbox"/><label class="css-label" for="say"></label></td>
                  <td align="center"><input type="checkbox" name="hut" id="hut" <?php if($ttchuyenmon[134]=='true__check'){echo 'checked';}?> class="css-checkbox"/><label class="css-label" for="hut"></label></td>
                  <td align="center"><input type="checkbox" name="covac" id="covac" <?php if($ttchuyenmon[135]=='true__check'){echo 'checked';}?> class="css-checkbox"/><label class="css-label" for="covac"></label></td>
                </tr>
                <tr>
                	<td align="center">20</td>
                    <td align="center"><?=  $ttchuyenmon[136]?></td>
                  <td align="center"><input type="checkbox" name="ddthang" id="ddthang" <?php if($ttchuyenmon[137]=='true__check'){echo 'checked';}?> class="css-checkbox"/><label class="css-label" for="ddthang"></label></td>
                  <td align="center"><input type="checkbox" name="dethieut" id="dethieut" <?php if($ttchuyenmon[138]=='true__check'){echo 'checked';}?> class="css-checkbox"/><label class="css-label" for="dethieut"></label></td>
                  <td align="center"><input type="checkbox" name="say" id="say" <?php if($ttchuyenmon[139]=='true__check'){echo 'checked';}?> class="css-checkbox"/><label class="css-label" for="say"></label></td>
                  <td align="center"><input type="checkbox" name="hut" id="hut" <?php if($ttchuyenmon[140]=='true__check'){echo 'checked';}?> class="css-checkbox"/><label class="css-label" for="hut"></label></td>
                  <td align="center"><input type="checkbox" name="covac" id="covac" <?php if($ttchuyenmon[141]=='true__check'){echo 'checked';}?> class="css-checkbox"/><label class="css-label" for="covac"></label></td>
                </tr>
                <tr>
                	<td align="center">21</td>
                    <td align="center"><?=  $ttchuyenmon[142]?></td>
                  <td align="center"><input type="checkbox" name="ddthang" id="ddthang" <?php if($ttchuyenmon[143]=='true__check'){echo 'checked';}?> class="css-checkbox"/><label class="css-label" for="ddthang"></label></td>
                  <td align="center"><input type="checkbox" name="dethieut" id="dethieut" <?php if($ttchuyenmon[144]=='true__check'){echo 'checked';}?> class="css-checkbox"/><label class="css-label" for="dethieut"></label></td>
                  <td align="center"><input type="checkbox" name="say" id="say" <?php if($ttchuyenmon[145]=='true__check'){echo 'checked';}?> class="css-checkbox"/><label class="css-label" for="say"></label></td>
                  <td align="center"><input type="checkbox" name="hut" id="hut" <?php if($ttchuyenmon[146]=='true__check'){echo 'checked';}?> class="css-checkbox"/><label class="css-label" for="hut"></label></td>
                  <td align="center"><input type="checkbox" name="covac" id="covac" <?php if($ttchuyenmon[147]=='true__check'){echo 'checked';}?> class="css-checkbox"/><label class="css-label" for="covac"></label></td>
                </tr>
                <tr>
                	<td align="center">22</td>
                    <td align="center"><?=  $ttchuyenmon[148]?></td>
                  <td align="center"><input type="checkbox" name="ddthang" id="ddthang" <?php if($ttchuyenmon[149]=='true__check'){echo 'checked';}?> class="css-checkbox"/><label class="css-label" for="ddthang"></label></td>
                  <td align="center"><input type="checkbox" name="dethieut" id="dethieut" <?php if($ttchuyenmon[150]=='true__check'){echo 'checked';}?> class="css-checkbox"/><label class="css-label" for="dethieut"></label></td>
                  <td align="center"><input type="checkbox" name="say" id="say" <?php if($ttchuyenmon[151]=='true__check'){echo 'checked';}?> class="css-checkbox"/><label class="css-label" for="say"></label></td>
                  <td align="center"><input type="checkbox" name="hut" id="hut" <?php if($ttchuyenmon[152]=='true__check'){echo 'checked';}?> class="css-checkbox"/><label class="css-label" for="hut"></label></td>
                  <td align="center"><input type="checkbox" name="covac" id="covac" <?php if($ttchuyenmon[153]=='true__check'){echo 'checked';}?> class="css-checkbox"/><label class="css-label" for="covac"></label></td>
                </tr>
                <tr>
                	<td align="center">23</td>
                    <td align="center"><?=  $ttchuyenmon[154]?></td>
                  <td align="center"><input type="checkbox" name="ddthang" id="ddthang" <?php if($ttchuyenmon[155]=='true__check'){echo 'checked';}?> class="css-checkbox"/><label class="css-label" for="ddthang"></label></td>
                  <td align="center"><input type="checkbox" name="dethieut" id="dethieut" <?php if($ttchuyenmon[156]=='true__check'){echo 'checked';}?> class="css-checkbox"/><label class="css-label" for="dethieut"></label></td>
                  <td align="center"><input type="checkbox" name="say" id="say" <?php if($ttchuyenmon[157]=='true__check'){echo 'checked';}?> class="css-checkbox"/><label class="css-label" for="say"></label></td>
                  <td align="center"><input type="checkbox" name="hut" id="hut" <?php if($ttchuyenmon[158]=='true__check'){echo 'checked';}?> class="css-checkbox"/><label class="css-label" for="hut"></label></td>
                  <td align="center"><input type="checkbox" name="covac" id="covac" <?php if($ttchuyenmon[159]=='true__check'){echo 'checked';}?> class="css-checkbox"/><label class="css-label" for="covac"></label></td>
                </tr>
                <tr>
                	<td align="center">24</td>
                    <td align="center"><?=  $ttchuyenmon[160]?></td>
                  <td align="center"><input type="checkbox" name="ddthang" id="ddthang" <?php if($ttchuyenmon[161]=='true__check'){echo 'checked';}?> class="css-checkbox"/><label class="css-label" for="ddthang"></label></td>
                  <td align="center"><input type="checkbox" name="dethieut" id="dethieut" <?php if($ttchuyenmon[162]=='true__check'){echo 'checked';}?> class="css-checkbox"/><label class="css-label" for="dethieut"></label></td>
                  <td align="center"><input type="checkbox" name="say" id="say" <?php if($ttchuyenmon[163]=='true__check'){echo 'checked';}?> class="css-checkbox"/><label class="css-label" for="say"></label></td>
                  <td align="center"><input type="checkbox" name="hut" id="hut" <?php if($ttchuyenmon[164]=='true__check'){echo 'checked';}?> class="css-checkbox"/><label class="css-label" for="hut"></label></td>
                  <td align="center"><input type="checkbox" name="covac" id="covac" <?php if($ttchuyenmon[165]=='true__check'){echo 'checked';}?> class="css-checkbox"/><label class="css-label" for="covac"></label></td>
                </tr>
                <tr>
                	<td align="center">25</td>
                    <td align="center"><?=  $ttchuyenmon[166]?></td>
                  <td align="center"><input type="checkbox" name="ddthang" id="ddthang" <?php if($ttchuyenmon[167]=='true__check'){echo 'checked';}?> class="css-checkbox"/><label class="css-label" for="ddthang"></label></td>
                  <td align="center"><input type="checkbox" name="dethieut" id="dethieut" <?php if($ttchuyenmon[168]=='true__check'){echo 'checked';}?> class="css-checkbox"/><label class="css-label" for="dethieut"></label></td>
                  <td align="center"><input type="checkbox" name="say" id="say" <?php if($ttchuyenmon[169]=='true__check'){echo 'checked';}?> class="css-checkbox"/><label class="css-label" for="say"></label></td>
                  <td align="center"><input type="checkbox" name="hut" id="hut" <?php if($ttchuyenmon[170]=='true__check'){echo 'checked';}?> class="css-checkbox"/><label class="css-label" for="hut"></label></td>
                  <td align="center"><input type="checkbox" name="covac" id="covac" <?php if($ttchuyenmon[171]=='true__check'){echo 'checked';}?> class="css-checkbox"/><label class="css-label" for="covac"></label></td>
                </tr>
                <tr>
                	<td align="center">26</td>
                    <td align="center"><?=  $ttchuyenmon[172]?></td>
                  <td align="center"><input type="checkbox" name="ddthang" id="ddthang" <?php if($ttchuyenmon[173]=='true__check'){echo 'checked';}?> class="css-checkbox"/><label class="css-label" for="ddthang"></label></td>
                  <td align="center"><input type="checkbox" name="dethieut" id="dethieut" <?php if($ttchuyenmon[174]=='true__check'){echo 'checked';}?> class="css-checkbox"/><label class="css-label" for="dethieut"></label></td>
                  <td align="center"><input type="checkbox" name="say" id="say" <?php if($ttchuyenmon[175]=='true__check'){echo 'checked';}?> class="css-checkbox"/><label class="css-label" for="say"></label></td>
                  <td align="center"><input type="checkbox" name="hut" id="hut" <?php if($ttchuyenmon[176]=='true__check'){echo 'checked';}?> class="css-checkbox"/><label class="css-label" for="hut"></label></td>
                  <td align="center"><input type="checkbox" name="covac" id="covac" <?php if($ttchuyenmon[177]=='true__check'){echo 'checked';}?> class="css-checkbox"/><label class="css-label" for="covac"></label></td>
                </tr>
                <tr>
                	<td align="center">27</td>
                    <td align="center"><?=  $ttchuyenmon[178]?></td>
                  <td align="center"><input type="checkbox" name="ddthang" id="ddthang" <?php if($ttchuyenmon[179]=='true__check'){echo 'checked';}?> class="css-checkbox"/><label class="css-label" for="ddthang"></label></td>
                  <td align="center"><input type="checkbox" name="dethieut" id="dethieut" <?php if($ttchuyenmon[180]=='true__check'){echo 'checked';}?> class="css-checkbox"/><label class="css-label" for="dethieut"></label></td>
                  <td align="center"><input type="checkbox" name="say" id="say" <?php if($ttchuyenmon[181]=='true__check'){echo 'checked';}?> class="css-checkbox"/><label class="css-label" for="say"></label></td>
                  <td align="center"><input type="checkbox" name="hut" id="hut" <?php if($ttchuyenmon[182]=='true__check'){echo 'checked';}?> class="css-checkbox"/><label class="css-label" for="hut"></label></td>
                  <td align="center"><input type="checkbox" name="covac" id="covac" <?php if($ttchuyenmon[183]=='true__check'){echo 'checked';}?> class="css-checkbox"/><label class="css-label" for="covac"></label></td>
                </tr>
                <tr>
                	<td align="center">28</td>
                    <td align="center"><?=  $ttchuyenmon[184]?></td>
                  <td align="center"><input type="checkbox" name="ddthang" id="ddthang" <?php if($ttchuyenmon[185]=='true__check'){echo 'checked';}?> class="css-checkbox"/><label class="css-label" for="ddthang"></label></td>
                  <td align="center"><input type="checkbox" name="dethieut" id="dethieut" <?php if($ttchuyenmon[186]=='true__check'){echo 'checked';}?> class="css-checkbox"/><label class="css-label" for="dethieut"></label></td>
                  <td align="center"><input type="checkbox" name="say" id="say" <?php if($ttchuyenmon[187]=='true__check'){echo 'checked';}?> class="css-checkbox"/><label class="css-label" for="say"></label></td>
                  <td align="center"><input type="checkbox" name="hut" id="hut" <?php if($ttchuyenmon[188]=='true__check'){echo 'checked';}?> class="css-checkbox"/><label class="css-label" for="hut"></label></td>
                  <td align="center"><input type="checkbox" name="covac" id="covac" <?php if($ttchuyenmon[189]=='true__check'){echo 'checked';}?> class="css-checkbox"/><label class="css-label" for="covac"></label></td>
                </tr>
                <tr>
                	<td align="center">29</td>
                    <td align="center"><?=  $ttchuyenmon[190]?></td>
                  <td align="center"><input type="checkbox" name="ddthang" id="ddthang" <?php if($ttchuyenmon[191]=='true__check'){echo 'checked';}?> class="css-checkbox"/><label class="css-label" for="ddthang"></label></td>
                  <td align="center"><input type="checkbox" name="dethieut" id="dethieut" <?php if($ttchuyenmon[192]=='true__check'){echo 'checked';}?> class="css-checkbox"/><label class="css-label" for="dethieut"></label></td>
                  <td align="center"><input type="checkbox" name="say" id="say" <?php if($ttchuyenmon[193]=='true__check'){echo 'checked';}?> class="css-checkbox"/><label class="css-label" for="say"></label></td>
                  <td align="center"><input type="checkbox" name="hut" id="hut" <?php if($ttchuyenmon[194]=='true__check'){echo 'checked';}?> class="css-checkbox"/><label class="css-label" for="hut"></label></td>
                  <td align="center"><input type="checkbox" name="covac" id="covac" <?php if($ttchuyenmon[195]=='true__check'){echo 'checked';}?> class="css-checkbox"/><label class="css-label" for="covac"></label></td>
                </tr>
                <tr>
                	<td align="center">30</td>
                    <td align="center"><?=  $ttchuyenmon[196]?></td>
                  <td align="center"><input type="checkbox" name="ddthang" id="ddthang" <?php if($ttchuyenmon[197]=='true__check'){echo 'checked';}?> class="css-checkbox"/><label class="css-label" for="ddthang"></label></td>
                  <td align="center"><input type="checkbox" name="dethieut" id="dethieut" <?php if($ttchuyenmon[198]=='true__check'){echo 'checked';}?> class="css-checkbox"/><label class="css-label" for="dethieut"></label></td>
                  <td align="center"><input type="checkbox" name="say" id="say" <?php if($ttchuyenmon[199]=='true__check'){echo 'checked';}?> class="css-checkbox"/><label class="css-label" for="say"></label></td>
                  <td align="center"><input type="checkbox" name="hut" id="hut" <?php if($ttchuyenmon[200]=='true__check'){echo 'checked';}?> class="css-checkbox"/><label class="css-label" for="hut"></label></td>
                  <td align="center"><input type="checkbox" name="covac" id="covac" <?php if($ttchuyenmon[201]=='true__check'){echo 'checked';}?> class="css-checkbox"/><label class="css-label" for="covac"></label></td>
                </tr>
                <tr>
                	<td align="center">31</td>
                    <td align="center"><?=  $ttchuyenmon[202]?></td>
                  <td align="center"><input type="checkbox" name="ddthang" id="ddthang" <?php if($ttchuyenmon[203]=='true__check'){echo 'checked';}?> class="css-checkbox"/><label class="css-label" for="ddthang"></label></td>
                  <td align="center"><input type="checkbox" name="dethieut" id="dethieut" <?php if($ttchuyenmon[204]=='true__check'){echo 'checked';}?> class="css-checkbox"/><label class="css-label" for="dethieut"></label></td>
                  <td align="center"><input type="checkbox" name="say" id="say" <?php if($ttchuyenmon[205]=='true__check'){echo 'checked';}?> class="css-checkbox"/><label class="css-label" for="say"></label></td>
                  <td align="center"><input type="checkbox" name="hut" id="hut" <?php if($ttchuyenmon[206]=='true__check'){echo 'checked';}?> class="css-checkbox"/><label class="css-label" for="hut"></label></td>
                  <td align="center"><input type="checkbox" name="covac" id="covac" <?php if($ttchuyenmon[207]=='true__check'){echo 'checked';}?> class="css-checkbox"/><label class="css-label" for="covac"></label></td>
                </tr>
                <tr>
                	<td align="center">32</td>
                    <td align="center"><?=  $ttchuyenmon[208]?></td>
                  <td align="center"><input type="checkbox" name="ddthang" id="ddthang" <?php if($ttchuyenmon[209]=='true__check'){echo 'checked';}?> class="css-checkbox"/><label class="css-label" for="ddthang"></label></td>
                  <td align="center"><input type="checkbox" name="dethieut" id="dethieut" <?php if($ttchuyenmon[210]=='true__check'){echo 'checked';}?> class="css-checkbox"/><label class="css-label" for="dethieut"></label></td>
                  <td align="center"><input type="checkbox" name="say" id="say" <?php if($ttchuyenmon[211]=='true__check'){echo 'checked';}?> class="css-checkbox"/><label class="css-label" for="say"></label></td>
                  <td align="center"><input type="checkbox" name="hut" id="hut" <?php if($ttchuyenmon[212]=='true__check'){echo 'checked';}?> class="css-checkbox"/><label class="css-label" for="hut"></label></td>
                  <td align="center"><input type="checkbox" name="covac" id="covac" <?php if($ttchuyenmon[213]=='true__check'){echo 'checked';}?> class="css-checkbox"/><label class="css-label" for="covac"></label></td>
                </tr>
                <tr>
                	<td colspan="2">Cộng:</td>
                    <td align="center"><?=  $ttchuyenmon[214]?></td>
                    <td align="center"><?=  $ttchuyenmon[215]?></td>
                    <td align="center"><?=  $ttchuyenmon[216]?></td>
                    <td align="center"><?=  $ttchuyenmon[217]?></td>
                    <td align="center"><?=  $ttchuyenmon[218]?></td>
                </tr>
            </table>  
      </td>
    </tr>
    <tr>
    	<td colspan="2" ><label for="ppdd"><strong>Tổng các phương pháp đã dùng: </strong></label></td>
        <td align="center"><label for="ppdd2"><em>Ngày......tháng......năm......</em></label></td>
    </tr>
    <tr>
    	<td width="30%">
         <textarea id="chidinh2" rows="5"><?=  $ttchuyenmon[220]?>
         </textarea></td>
        <td width="35%" valign="top"><label for="ppdd3">KTV phụ trách:</label> </td>
        <td width="35%" align="center" valign="top"><label for="ppdd4"><strong>BS ĐIỀU TRỊ </strong></label></td>
    </tr>
</table>
<script type="application/javascript">
		$(document).ready(function() {
			$("#images_container").append(' <img  width="318px" height="299px" src="./modules/report/lamsang/img/vltl.jpg"  /><div style="height:7px"></div> ');
		print_preview();
			
		});
	</script>

    