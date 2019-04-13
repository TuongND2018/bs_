   <?php
        $data= new SQLServer;//tao lop ket noi SQL
		$params4 = array($_GET['idtodieutri']);//tao param cho store 
		$store_name4="{call GD2_Report_GetAllToDieuTriByID_ToDieuTri (?)}";//tao bien khai bao store
		$get_danh_muc_phong_ban4=$data->query( $store_name4,$params4);//Goi store
		$excute4= new SQLServerResult($get_danh_muc_phong_ban4);//Ket noi lop xu ly SQL và truyen gia tri tra ve tu lop ket noi SQL
		$tam4= $excute4->get_as_array();//Tra ve mang toan bo data lay duoc  
		  
    ?>   
        <?php
		$a=$_GET['thu'];
		if($tam4[$a]['NgayGioTao']!=''){
			
			$tam4[$a]['NgayGioTao']=$tam4[$a]['NgayGioTao']->format("H:i ".$_SESSION["config_system"]["ngaythang"]);
		  }
		 if($tam4[$a]['NgayGioChiDinh']!=''){
			$tam4[$a]['NgayGioChiDinh']=$tam4[$a]['NgayGioChiDinh']->format($_SESSION["config_system"]["ngaythang"]);
		  }
		 if($tam4[$a]['NgayGioHoanTat']!=''){
			$tam4[$a]['NgayGioHoanTat']=$tam4[$a]['NgayGioHoanTat']->format($_SESSION["config_system"]["ngaythang"]);
		  }
		
		if($tam4[$a]['canlamsang_xetnghiem']!=''){
			$tam4[$a]['canlamsang_xetnghiem']=	"<b>- Cận lâm sàng:</b><br> + ".htmlspecialchars_decode($tam4[$a]['canlamsang_xetnghiem']."");
		}
		if($tam4[$a]['canlamsang_khongxetnghiem']!=''){
			if(strlen(trim($tam4[$a]['canlamsang_xetnghiem']))>5){
				$tam4[$a]['canlamsang_khongxetnghiem']=htmlspecialchars_decode($tam4[$a]['canlamsang_khongxetnghiem'])."<br>";	
			}else{
				$tam4[$a]['canlamsang_khongxetnghiem']="<b>- Cận lâm sàng:</b>".htmlspecialchars_decode($tam4[$a]['canlamsang_khongxetnghiem'])."<br>";
			}
			
		}else{
			$xuongdong='<br>';
		}
		if(strlen(trim($tam4[$a]['canlamsang_xetnghiem']))>5 || strlen(trim($tam4[$a]['canlamsang_khongxetnghiem']))>5){
			//$tencls='<b>- Cận lâm sàng:</b>';
			$tencls='';
			$xuongdong='';
		}else{
			$tencls='';
			$xuongdong='';
		}
		if((strlen(trim($tam4[$a]['canlamsang_xetnghiem']))>5 || strlen(trim($tam4[$a]['canlamsang_khongxetnghiem']))>5) && (strlen(trim($tam4[$a]['dieutriphoihop'])))<=0){
			//$tencls='<b>- Cận lâm sàng:</b>';
			$xuongdongcls='<br>';
		}else{
			$xuongdongcls='';
		}
		if($tam4[$a]['dieutriphoihop']!=''){
			$tam4[$a]['dieutriphoihop']=$xuongdong.'<b>- Điều trị phối hợp:</b> '.htmlspecialchars_decode($tam4[$a]['dieutriphoihop'])."<br>";
		}
		if($tam4[$a]['NoiDungYLenhKhac']!=''){
			$tam4[$a]['NoiDungYLenhKhac']="<b>- Y lệnh khác:</b> ".$tam4[$a]['NoiDungYLenhKhac']."<br>";
		}
		if($tam4[$a]['donthuocct']!=''){
			$tam4[$a]['donthuocct']="<b>- Đơn thuốc:</b> ".htmlspecialchars_decode($tam4[$a]['donthuocct'])."<br>";
		}
		if($tam4[$a]['donthuoctralai']!=''){
			$tam4[$a]['donthuoctralai']="<b>- Đơn thuốc trả lại:</b> ".htmlspecialchars_decode($tam4[$a]['donthuoctralai'])."<br>";
		}
		if($tam4[$a]['Ten_LoaiChamSoc']!=''){
			$tam4[$a]['Ten_LoaiChamSoc']="<b>- Chỉ định chăm sóc: </b> ".$tam4[$a]['Ten_LoaiChamSoc']."<br>";
		}
		?>
       
        <tr id="row_<?=$a?>" class="row">
          <td width="12%" rowspan="2" class="td" style="text-align:center; vertical-align:top"><?=$tam4[$a]['NgayGioTao']?></td>
          <td class="td" width="38%" style=" vertical-align:top; border-bottom:none !important"><?=$tam4[$a]['DienBien']?><br /><br /><br /><br /></td>
          <td class="td" width="50%" style=" vertical-align:top; border-bottom:none !important;"><?=$tam4[$a]['canlamsang_xetnghiem'].''.$tencls.''.$tam4[$a]['canlamsang_khongxetnghiem'].''.$tam4[$a]['dieutriphoihop'].''.$xuongdongcls.$tam4[$a]['donthuocct'].''.$tam4[$a]['donthuoctralai'].''.$tam4[$a]['NoiDungYLenhKhac'].''.$tam4[$a]['Ten_LoaiChamSoc']?><br /><br /><br /><br /></td>
        </tr>
         <tr id="rowtam_<?=$a?>">
         <td class="td" style=" vertical-align:top; border-top:none !important"><div class="kyten"><?php if($tam4[$a]['DienBien']){ echo $tam4[$a]['HoTenBacSy'];}?> </div></td>
          <td class="td" style=" vertical-align:top; border-top:none !important"><div class="kyten"><?=$tam4[$a]['HoTenBacSy']?> </div></td>
        </tr>