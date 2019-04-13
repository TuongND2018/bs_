<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<style>
body{
	overflow: auto;
	font-size:14px !important;
	font-family:Arial, Helvetica, sans-serif;
}
td{
	padding-left:4px;
}
@media print
{
body{
    overflow: auto;
	font-size:14px !important;
	font-family:Arial, Helvetica, sans-serif;
}
.page{
	padding-top:10px;
}
</style>
</head>
<?php
	$data= new SQLServer;//tao lop ket noi SQL
	$params = array($_GET['idphieuhoantra']);//tao param cho store 
	$store_name="{call GD2_GetAllPhieuHoanTraByID_PhieuTra(?)}";//tao bien khai bao store
	$get_thongtin=$data->query( $store_name,$params);//Goi store
	$excute= new SQLServerResult($get_thongtin);//Ket noi lop xu ly SQL và truyen gia tri tra ve tu lop ket noi SQL
	$thongtin= $excute->get_as_array();//Tra ve mang toan bo data lay 
		
	$params3 = array($_GET['idphieuhoantra']);//tao param cho store 
	$store_name3="{call GD2_GetTenKhoaByID_PhieuTra(?)}";//tao bien khai bao store
	$get_thongtin3=$data->query( $store_name3,$params3);//Goi store
	$excute3= new SQLServerResult($get_thongtin3);//Ket noi lop xu ly SQL và truyen gia tri tra ve tu lop ket noi SQL
	$tenkhoa= $excute3->get_as_array();//Tra ve mang toan bo data lay 
	
	$params2 = array($_GET['idphieuhoantra'],1);//tao param cho store 
	$store_name2="{call GD2_GetHoanTraThuocByID_PhieuHoanTraThuoc(?,?)}";//tao bien khai bao store
	$get_thongtin2=$data->query( $store_name2,$params2);//Goi store
	$excute2= new SQLServerResult($get_thongtin2);//Ket noi lop xu ly SQL và truyen gia tri tra ve tu lop ket noi SQL
	$thuoc= $excute2->get_as_array();//Tra ve mang toan bo data lay
	
	$params21 = array($_GET['idphieuhoantra'],2);//tao param cho store 
	$store_name21="{call GD2_GetHoanTraThuocByID_PhieuHoanTraThuoc(?,?)}";//tao bien khai bao store
	$get_thongtin21=$data->query( $store_name21,$params21);//Goi store
	$excute21= new SQLServerResult($get_thongtin21);//Ket noi lop xu ly SQL và truyen gia tri tra ve tu lop ket noi SQL
	$thuoc21= $excute21->get_as_array();//Tra ve mang toan bo data lay 
	
	$params22 = array($_GET['idphieuhoantra'],3);//tao param cho store 
	$store_name22="{call GD2_GetHoanTraThuocByID_PhieuHoanTraThuoc(?,?)}";//tao bien khai bao store
	$get_thongtin22=$data->query( $store_name22,$params22);//Goi store
	$excute22= new SQLServerResult($get_thongtin22);//Ket noi lop xu ly SQL và truyen gia tri tra ve tu lop ket noi SQL
	$thuoc22= $excute22->get_as_array();//Tra ve mang toan bo data lay
	
	//print_r($thuoc);
	
		$i=0;
		foreach ($thuoc as $row) {//duyet toan bo mang tra ve
			if($row["TenDonViTinh"]==''){
				$row["TenDonViTinh"]='';	
			}
			$responce[$i]=array($row["MaThuoc"],
			$row["TenGoc"],
			$row["TenDonViTinh"],
			$row["SoLuongTraLai"]
			);
			$i++; 
		} 
	if($_GET['thuocthongthuong']!=0){
		$rsdata=json_encode($responce); 
	}else{
		$responce[0]=array(0,0,0,0);
		$rsdata=json_encode($responce);
	}
	
	
		$j=0;
		foreach ($thuoc21 as $row) {//duyet toan bo mang tra ve
			if($row["TenDonViTinh"]==''){
				$row["TenDonViTinh"]='';	
			}
			$responce2[$j]=array($row["MaThuoc"],
			$row["TenGoc"],
			$row["TenDonViTinh"],
			$row["SoLuongTraLai"]
			);
			$j++; 
		} 
	if($_GET['vattuyte']!=0){
		$vattuyte_rsdata=json_encode($responce2);  
	}else{
		$responce2[0]=array(0,0,0,0);
		$vattuyte_rsdata=json_encode($responce2);
	}
	
	
		$k=0;
		foreach ($thuoc22 as $row) {//duyet toan bo mang tra ve
			if($row["TenDonViTinh"]==''){
				$row["TenDonViTinh"]='';	
			}
			$responce3[$k]=array($row["MaThuoc"],
			$row["TenGoc"],
			$row["TenDonViTinh"],
			$row["SoLuongTraLai"]
			);
			$k++; 
		} 
	if($_GET['thuochuongthan']!=0){
		$huongthan_rsdata=json_encode($responce3);  
	}else{
		$responce3[0]=array(0,0,0,0);
		$huongthan_rsdata=json_encode($responce3);
	}
	
?>
<body>
	<?php 
	if($_GET['thuocthongthuong']>0){
	?>
     <div id="page_1" class="page" style="page-break-after: always; padding-left: 10px; padding-top:5px">
         <div class="n_top">
            <table width="700px" border="0" cellpadding="0" cellspacing="0">
              <tr>
                <td width="595px">
                <span style="letter-spacing: 0.5px;font-weight:bold;color:#000">FAMILY</span> <img src="images/logo_print.png" /> 
                            <br />
                            <span style="letter-spacing: 0.5px;text-transform:uppercase"><?php echo $_SESSION["com"]["TenBenhVien"]?></span>
                </td>
                <td style="vertical-align:top; width:100px">Số phiếu: <?=$thongtin[0]['SoPhieu']?><br />
                    Kho xuất:
                </td>
              </tr>
            </table><br />
            
            <table  width="700px" border="0" cellpadding="0" cellspacing="0">
                <tr>
                    <td style="text-align:center; font-weight:bold; font-size:20px">
                        PHIẾU TRẢ THUỐC - VẬT TƯ Y TẾ<br />
                        <label style="text-align:center; font-weight:bold; font-size:16px">( Thuốc thông thường )</label>
                  </td>
                </tr>
            </table>
            <br />
            <table width="700px" border="0" cellpadding="0" cellspacing="0">
              <tr>
                <td>- Tên tôi là: <strong><?=$thongtin[0]['HoTenNguoiTra']?></strong></td>
              </tr>
              <tr>
                <td>- Đơn vị công tác: <strong><?=$thongtin[0]['TenPhongBan']?></strong></td>
              </tr>
              <tr>
                <td>- Đối tượng bệnh nhân xin hoàn trả: <strong><?=$thongtin[0]['LoaiDoiTuongKham']?></strong></td>
              </tr>
            </table><br />
        </div>
        <table id="bang_1" width="700px" cellpadding="0" cellspacing="0" border="1">
          <tr>
            <th width="50px">STT</th>
            <th width="50px">Mã</th>
            <th width="430px">Tên thuốc - VTYT</th>
            <th width="70px">ĐVT</th>
            <th width="100px">Số lượng</th>
          </tr>
          <tbody id="tbody_1">
              
          </tbody>
        </table>
        <div id="tongthe">
        </div><!-- end tongthe-->
    </div><!-- end page-->
	<?php
	}
	?>
    <?php 
	if($_GET['vattuyte']>0){
	?>
     <div id="vattuyte_page_1" class="page" style="page-break-after: always; padding-left: 10px; padding-top:5px">
         <div class="n_top">
            <table width="700px" border="0" cellpadding="0" cellspacing="0">
              <tr>
                <td width="595px">
                <span style="letter-spacing: 0.5px;font-weight:bold;color:#000">FAMILY</span> <img src="images/logo_print.png" /> 
                            <br />
                            <span style="letter-spacing: 0.5px;text-transform:uppercase"><?php echo $_SESSION["com"]["TenBenhVien"]?></span>
                </td>
                <td style="vertical-align:top; width:100px">Số phiếu: <?=$thongtin[0]['SoPhieu']?><br />
                    Kho xuất:
                </td>
              </tr>
            </table><br />
            
            <table  width="700px" border="0" cellpadding="0" cellspacing="0">
                <tr>
                    <td style="text-align:center; font-weight:bold; font-size:20px">
                        PHIẾU TRẢ THUỐC - VẬT TƯ Y TẾ<br />
                        <label style="text-align:center; font-weight:bold; font-size:16px">( Vật tư y tế )</label>
                  </td>
                </tr>
            </table>
            <br />
            <table width="700px" border="0" cellpadding="0" cellspacing="0">
              <tr>
                <td>- Tên tôi là: <strong><?=$thongtin[0]['HoTenNguoiTra']?></strong></td>
              </tr>
              <tr>
                <td>- Đơn vị công tác: <strong><?=$thongtin[0]['TenPhongBan']?></strong></td>
              </tr>
              <tr>
                <td>- Đối tượng bệnh nhân xin hoàn trả: <strong><?=$thongtin[0]['LoaiDoiTuongKham']?></strong></td>
              </tr>
            </table><br />
        </div>
        <table id="vattuyte_bang_1" width="700px" cellpadding="0" cellspacing="0" border="1">
          <tr>
            <th width="50px">STT</th>
            <th width="50px">Mã</th>
            <th width="430px">Tên thuốc - VTYT</th>
            <th width="70px">ĐVT</th>
            <th width="100px">Số lượng</th>
          </tr>
          <tbody id="vattuyte_tbody_1">
              
          </tbody>
        </table>
        <div id="vattuyte_tongthe">
        </div><!-- end tongthe-->
    </div><!-- end page-->
	<?php
	}
	?>
    <?php 
	if($_GET['thuochuongthan']>0){
	?>
     <div id="thuochuongthan_page_1" class="page" style="page-break-after: always; padding-left: 10px; padding-top:5px">
         <div class="n_top">
            <table width="700px" border="0" cellpadding="0" cellspacing="0">
              <tr>
                <td width="595px">
                <span style="letter-spacing: 0.5px;font-weight:bold;color:#000">FAMILY</span> <img src="images/logo_print.png" /> 
                            <br />
                            <span style="letter-spacing: 0.5px;text-transform:uppercase"><?php echo $_SESSION["com"]["TenBenhVien"]?></span>
                </td>
                <td style="vertical-align:top; width:100px">Số phiếu: <?=$thongtin[0]['SoPhieu']?><br />
                    Kho xuất:
                </td>
              </tr>
            </table><br />
            
            <table  width="700px" border="0" cellpadding="0" cellspacing="0">
                <tr>
                    <td style="text-align:center; font-weight:bold; font-size:20px">
                        PHIẾU TRẢ THUỐC - VẬT TƯ Y TẾ<br />
                        <label style="text-align:center; font-weight:bold; font-size:16px">( Thuốc hướng thần và gây nghiện )</label>
                  </td>
                </tr>
            </table>
            <br />
            <table width="700px" border="0" cellpadding="0" cellspacing="0">
              <tr>
                <td>- Tên tôi là: <strong><?=$thongtin[0]['HoTenNguoiTra']?></strong></td>
              </tr>
              <tr>
                <td>- Đơn vị công tác: <strong><?=$thongtin[0]['TenPhongBan']?></strong></td>
              </tr>
              <tr>
                <td>- Đối tượng bệnh nhân xin hoàn trả: <strong><?=$thongtin[0]['LoaiDoiTuongKham']?></strong></td>
              </tr>
            </table><br />
        </div>
        <table id="thuochuongthan_bang_1" width="700px" cellpadding="0" cellspacing="0" border="1">
          <tr>
            <th width="50px">STT</th>
            <th width="50px">Mã</th>
            <th width="430px">Tên thuốc - VTYT</th>
            <th width="70px">ĐVT</th>
            <th width="100px">Số lượng</th>
          </tr>
          <tbody id="thuochuongthan_tbody_1">
              
          </tbody>
        </table>
        <div id="thuochuongthan_tongthe">
        </div><!-- end tongthe-->
    </div><!-- end page-->
	<?php
	}
	?>
   

</body>
<script type="text/javascript">
	$(document).ready(function(e) { //180
		window.page=1;
		window.vattuyte_page=1;
		window.thuochuongthan_page=1;
		var ds=Array;
		var d=0;
		var heightpage=1240;
		ds=<?=$rsdata?>;
		if(ds!=null){
			for( var i=0;i<ds.length;i++){
				if(checkpage(heightpage,window.page)>22){
					loaddata(i,ds,window.page);	
				}else{
					addtable(window.page);
					loaddata(i,ds,window.page);	
				}
				if(i==ds.length-1){
					addbottom(heightpage,window.page);	
				}
			}
		}
		
		var vattuyte_ds=Array;
		var vattuyte_d=0;
		
		vattuyte_ds=<?=$vattuyte_rsdata?>;
		//alert(vattuyte_ds.length);
		if(vattuyte_ds!=null){
			for( var j=0;j<vattuyte_ds.length;j++){
				if(vattuyte_checkpage(heightpage,window.vattuyte_page)>22){
					vattuyte_loaddata(j,vattuyte_ds,window.vattuyte_page);	
				}else{
					vattuyte_addtable(window.vattuyte_page);
					vattuyte_loaddata(j,vattuyte_ds,window.vattuyte_page);	
				}
				if(j==vattuyte_ds.length-1){
					vattuyte_addbottom(heightpage,window.vattuyte_page);	
				}
			}
		}

		var thuochuongthan_ds=Array;
		var thuochuongthan_d=0;
		thuochuongthan_ds=<?=$huongthan_rsdata?>;
		if(thuochuongthan_ds!=null){
			for( var k=0;k<thuochuongthan_ds.length;k++){
				if(thuochuongthan_checkpage(heightpage,window.thuochuongthan_page)>22){
					thuochuongthan_loaddata(k,thuochuongthan_ds,window.thuochuongthan_page);	
				}else{
					thuochuongthan_addtable(window.thuochuongthan_page);
					thuochuongthan_loaddata(k,thuochuongthan_ds,window.thuochuongthan_page);	
				}
				if(k==thuochuongthan_ds.length-1){
					thuochuongthan_addbottom(heightpage,window.thuochuongthan_page);	
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
	$("#tbody_"+page).append('<tr id="row_'+i+'">'+
		'<td align="center">'+d+'</td>'+
		'<td>'+ds[i][0]+'</td>'+
		'<td>'+ds[i][1]+'</td>'+
		'<td>'+ds[i][2]+'</td>'+
		'<td>'+ds[i][3]+'</td>'+
	 '</tr>');
}
function addbottom(heightpage,page){
	if(checkpage(heightpage,page)>180){
		$("#page_"+page).append('<div id="bottom">'+
		   '<br />'+
		   ' <table width="700px" border="0" cellpadding="0" cellspacing="0">'+
			 ' <tr>'+
			 '   <td colspan="3" style="text-align:right; font-style:italic">Ngày in: <?php
						$date = date("H:i ".$_SESSION["config_system"]["ngaythang"]);
						echo $date;
						?><br><br></td>'+
			 ' </tr>'+
			 ' <tr>'+
			    '  <td style="text-align:center"><strong>TRƯỞNG KHOA DƯỢC</strong></td>'+
			   ' <td style="text-align:center"><strong>TRƯỞNG <?=$tenkhoa[0]['TenPhongBan']?></strong></td>'+
			   '   <td style="text-align:center"><strong>NGƯỜI TRẢ</strong></td>'+
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
				'<td style="text-align:center"> <strong><?=$thongtin[0]['HoTenNguoiTra']?></strong></td>'+
				'<td>&nbsp;</td>'+
			  '</tr>'+
		 '   </table>'+
	  '  </div>');
	}else{
		$("#tongthe").append('<div id="bottom" style="page-break-after: always; padding-left: 10px; padding-top:5px">'+
		   '<br />'+
		   ' <table width="700px" border="0" cellpadding="0" cellspacing="0">'+
			 ' <tr>'+
			 '   <td colspan="3" style="text-align:right; font-style:italic">Ngày in: <?php
						$date = date("H:i ".$_SESSION["config_system"]["ngaythang"]);
						echo $date;
						?><br><br></td>'+
			 ' </tr>'+
			 ' <tr>'+
			    '  <td style="text-align:center"><strong>TRƯỞNG KHOA DƯỢC</strong></td>'+
			   ' <td style="text-align:center"><strong>TRƯỞNG <?=$tenkhoa[0]['TenPhongBan']?></strong></td>'+
			   '   <td style="text-align:center"><strong>NGƯỜI TRẢ</strong></td>'+
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
				'<td style="text-align:center"> <strong><?=$thongtin[0]['HoTenNguoiTra']?></strong></td>'+
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
           ' <th width="50px">STT</th>'+
            '<th width="50px">Mã</th>'+
            '<th width="430px">Tên thuốc - VTYT</th>'+
            '<th width="70px">ĐVT</th>'+
            '<th width="100px">Số lượng</th>'+
          '</tr>'+
          '<tbody id="tbody_'+page+'">'+
          '</tbody>'+
        '</table>');
	window.page=page;
}
// vật tư tiêu hao
function vattuyte_checkpage(heightpage,page){
	if(page==1){
		var t=heightpage-$("#vattuyte_page_"+page).height()-22;
	}else{
		var t=heightpage-$("#vattuyte_page_"+page).height();	
	}
	return t;
}

function vattuyte_loaddata(i,ds,page){
	vattuyte_d=i+1;
	$("#vattuyte_tbody_"+page).append('<tr id="row_'+i+'">'+
		'<td align="center">'+vattuyte_d+'</td>'+
		'<td>'+ds[i][0]+'</td>'+
		'<td>'+ds[i][1]+'</td>'+
		'<td>'+ds[i][2]+'</td>'+
		'<td>'+ds[i][3]+'</td>'+
	 '</tr>');
}
function vattuyte_addbottom(heightpage,page){
	if(vattuyte_checkpage(heightpage,page)>180){
		$("#vattuyte_page_"+page).append('<div id="bottom">'+
		   '<br />'+
		   ' <table width="700px" border="0" cellpadding="0" cellspacing="0">'+
			 ' <tr>'+
			 '   <td colspan="3" style="text-align:right; font-style:italic">Ngày in: <?php
						$date = date("H:i ".$_SESSION["config_system"]["ngaythang"]);
						echo $date;
						?><br><br></td>'+
			 ' </tr>'+
			 ' <tr>'+
			    '  <td style="text-align:center"><strong>TRƯỞNG KHOA DƯỢC</strong></td>'+
			   ' <td style="text-align:center"><strong>TRƯỞNG <?=$tenkhoa[0]['TenPhongBan']?></strong></td>'+
			   '   <td style="text-align:center"><strong>NGƯỜI TRẢ</strong></td>'+
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
				'<td style="text-align:center"> <strong><?=$thongtin[0]['HoTenNguoiTra']?></strong></td>'+
				'<td>&nbsp;</td>'+
			  '</tr>'+
		 '   </table>'+
	  '  </div>');
	}else{
		$("#vattuyte_tongthe").append('<div id="bottom" style="page-break-after: always; padding-left: 10px; padding-top:5px">'+
		   '<br />'+
		   ' <table width="700px" border="0" cellpadding="0" cellspacing="0">'+
			 ' <tr>'+
			 '   <td colspan="3" style="text-align:right; font-style:italic">Ngày in: <?php
						$date = date("H:i ".$_SESSION["config_system"]["ngaythang"]);
						echo $date;
						?><br><br></td>'+
			 ' </tr>'+
			 ' <tr>'+
			    '  <td style="text-align:center"><strong>TRƯỞNG KHOA DƯỢC</strong></td>'+
			   ' <td style="text-align:center"><strong>TRƯỞNG <?=$tenkhoa[0]['TenPhongBan']?></strong></td>'+
			   '   <td style="text-align:center"><strong>NGƯỜI TRẢ</strong></td>'+
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
				'<td style="text-align:center"> <strong><?=$thongtin[0]['HoTenNguoiTra']?></strong></td>'+
				'<td>&nbsp;</td>'+
			  '</tr>'+
		 '   </table>'+
	  '  </div>');
	}
}
function vattuyte_addtable(page){
	var page=page+1;
	$("#vattuyte_tongthe").append('<div id="vattuyte_page_'+page+'" class="page" style="page-break-after: always; padding-left: 10px; padding-top:5px">'+
	'<table id="vattuyte_bang_'+page+'" width="700px" cellpadding="0" cellspacing="0" border="1">'+
         ' <tr>'+
           ' <th width="50px">STT</th>'+
            '<th width="50px">Mã</th>'+
            '<th width="430px">Tên thuốc - VTYT</th>'+
            '<th width="70px">ĐVT</th>'+
            '<th width="100px">Số lượng</th>'+
          '</tr>'+
          '<tbody id="vattuyte_tbody_'+page+'">'+
          '</tbody>'+
        '</table>');
	window.vattuyte_page=page;
}

// thuốc hướng thần
function thuochuongthan_checkpage(heightpage,page){
	if(page==1){
		var t=heightpage-$("#thuochuongthan_page_"+page).height()-22;
	}else{
		var t=heightpage-$("#thuochuongthan_page_"+page).height();	
	}
	return t;
}

function thuochuongthan_loaddata(i,ds,page){
	thuochuongthan_d=i+1;
	$("#thuochuongthan_tbody_"+page).append('<tr id="row_'+i+'">'+
		'<td align="center">'+thuochuongthan_d+'</td>'+
		'<td>'+ds[i][0]+'</td>'+
		'<td>'+ds[i][1]+'</td>'+
		'<td>'+ds[i][2]+'</td>'+
		'<td>'+ds[i][3]+'</td>'+
	 '</tr>');
}
function thuochuongthan_addbottom(heightpage,page){
	if(thuochuongthan_checkpage(heightpage,page)>180){
		$("#thuochuongthan_page_"+page).append('<div id="bottom">'+
		   '<br />'+
		   ' <table width="700px" border="0" cellpadding="0" cellspacing="0">'+
			 ' <tr>'+
			 '   <td colspan="3" style="text-align:right; font-style:italic">Ngày in: <?php
						$date = date("H:i ".$_SESSION["config_system"]["ngaythang"]);
						echo $date;
						?><br><br></td>'+
			 ' </tr>'+
			 ' <tr>'+
			    '  <td style="text-align:center"><strong>TRƯỞNG KHOA DƯỢC</strong></td>'+
			   ' <td style="text-align:center"><strong>TRƯỞNG <?=$tenkhoa[0]['TenPhongBan']?></strong></td>'+
			   '   <td style="text-align:center"><strong>NGƯỜI TRẢ</strong></td>'+
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
				'<td style="text-align:center"> <strong><?=$thongtin[0]['HoTenNguoiTra']?></strong></td>'+
				'<td>&nbsp;</td>'+
			  '</tr>'+
		 '   </table>'+
	  '  </div>');
	}else{
		$("#thuochuongthan_tongthe").append('<div id="bottom" style="page-break-after: always; padding-left: 10px; padding-top:5px">'+
		   '<br />'+
		   ' <table width="700px" border="0" cellpadding="0" cellspacing="0">'+
			 ' <tr>'+
			 '   <td colspan="3" style="text-align:right; font-style:italic">Ngày in: <?php
						$date = date("H:i ".$_SESSION["config_system"]["ngaythang"]);
						echo $date;
						?><br><br></td>'+
			 ' </tr>'+
			 ' <tr>'+
			    '  <td style="text-align:center"><strong>TRƯỞNG KHOA DƯỢC</strong></td>'+
			   ' <td style="text-align:center"><strong>TRƯỞNG <?=$tenkhoa[0]['TenPhongBan']?></strong></td>'+
			   '   <td style="text-align:center"><strong>NGƯỜI TRẢ</strong></td>'+
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
				'<td style="text-align:center"> <strong><?=$thongtin[0]['HoTenNguoiTra']?></strong></td>'+
				'<td>&nbsp;</td>'+
			  '</tr>'+
		 '   </table>'+
	  '  </div>');
	}
}
function thuochuongthan_addtable(page){
	var page=page+1;
	$("#thuochuongthan_tongthe").append('<div id="thuochuongthan_page_'+page+'" class="page" style="page-break-after: always; padding-left: 10px; padding-top:5px">'+
	'<table id="thuochuongthan_bang_'+page+'" width="700px" cellpadding="0" cellspacing="0" border="1">'+
         ' <tr>'+
           ' <th width="50px">STT</th>'+
            '<th width="50px">Mã</th>'+
            '<th width="430px">Tên thuốc - VTYT</th>'+
            '<th width="70px">ĐVT</th>'+
            '<th width="100px">Số lượng</th>'+
          '</tr>'+
          '<tbody id="thuochuongthan_tbody_'+page+'">'+
          '</tbody>'+
        '</table>');
	window.thuochuongthan_page=page;
}
</script>
</html>
