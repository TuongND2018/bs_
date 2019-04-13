<?php
$data= new SQLServer;//tao lop ket noi SQL 
 

 $param1=$_GET["id"];
//echo $param1;
$store_name="{call GD2_Kham_SelectByID_luotKham_CD_DieuTriPhoiHop_New(?)}";//tao bien khai bao store
//$params = array("ID_NhapKho",$start,$end,$sidx,$sord,"Gd2_PhieuNhap_2013","","*");//tao param cho store 
$params = array($param1);//tao param cho store 
//print_r($params) ;
$get=$data->query( $store_name, $params);//Goi store
$excute= new SQLServerResult($get);//Ket noi lop xu ly SQL và truyen gia tri tra ve tu lop ket noi SQL
$tam= $excute->get_as_array();//Tra ve mang toan bo data lay duoc 
$count=  count($tam);

$responce = new stdClass;
$i=0;
foreach ($tam as $row) {//duyet toan bo mang tra ve
	unset($phidukien);
	if(isset($row["phy_idPhysiotherapy"])){
		$Id_phy_dtph = $row["phy_idPhysiotherapy"];
		$phidukien=$row["phy_phidulkien"];
		$phithuchien=$row["phy_phithuchien"];
		$slmoingay=$row["phy_slmoingay"];
		$songay=$row["phy_songay"];
		$bschidinh=$row["phy_bschidinh"];
		$idtrangthai=$row["phy_idtrangthai"];
		$IDNhomCLS=$row["ID_LoaiKham"];
		$thuchien=$row["phy_phuonthucthuchien"];
		$phithuchientheonhom=$row["PhiThucHien"];
		$lanchidinh=$row["Id_LanChiDinh"];
		$giabaobn=$row["phy_GiaBaoChoBN"];
		$giabaohiem=$row["phy_GiaBaoHiem"];
		
		$thanhtienbaohiem=$row["phy_ThanhTienBaoHiem"];
		$bnchitra=$row["phy_BNChiTra"];
		$phantramcungchitra=$row["phy_PhanTramCungChiTra"];
		$thanhtiencungchitra=$row["phy_ThanhTienCungChiTra"];
	}
	else if(isset($row["dtph_idDieuTriPhoiHop"])){
		$Id_phy_dtph=$row["dtph_idDieuTriPhoiHop"];
		$phidukien=$row["dtph_phidulkien"];
		$phithuchien=$row["dtph_phithuchien"];
		$slmoingay=$row["dtph_slmoingay"];
		$songay=$row["dtph_songay"];
		$bschidinh=$row["dtph_bschidinh"];
		$idtrangthai=$row["dtph_idtrangthai"];
		$IDNhomCLS=$row["ID_LoaiKham"];
		$thuchien=$row["dtph_phuonthucthuchien"];
		$phithuchientheonhom=$row["PhiThucHien"];
		$lanchidinh=$row["Id_LanChiDinh"];
		$giabaobn=$row["dtph_GiaBaoChoBN"];
		$giabaohiem=$row["dtph_GiaBaoHiem"];
		
		$thanhtienbaohiem=$row["dtph_ThanhTienBaoHiem"];
		$bnchitra=$row["dtph_BNChiTra"];
		$phantramcungchitra=$row["dtph_PhanTramCungChiTra"];
		$thanhtiencungchitra=$row["dtph_ThanhTienCungChiTra"];
	}else{
		$phidukien=$row["PhiDuKien"];
		$phithuchien=$row["PhiThucHien"];
		$slmoingay=1;
		$songay=1;
		$bschidinh=$row["BSChiDinh"];
		$idtrangthai=$row["ID_TrangThai"];
		$IDNhomCLS=$row["ID_NhomCLS"];
		$thuchien=$row["PhuongThucThucHien"];
		$Id_phy_dtph="";
		$phithuchientheonhom=$row["PhiThucHien"];
		$lanchidinh=$row["Id_LanChiDinh"];
		$giabaobn=$row["GiaBaoChoBN"];
		$giabaohiem=$row["GiaBaoHiem"];
		
		$thanhtienbaohiem=$row["ThanhTienBaoHiem"];
		$bnchitra=$row["BNChiTra"];
		$phantramcungchitra=$row["PhanTramCungChiTra"];
		$thanhtiencungchitra=$row["ThanhTienCungChiTra"];
		}
		

	$row["NgayGioTao"]=$row["NgayGioTao"]->format($_SESSION["config_system"]["ngaythang"]);
  //  $responce->rows[$i]['id']=$row["idloaikham"];
    $responce->rows[$i]['cell']=array($row["idloaikham"],"", $row["idloaikham"],$giabaobn,$giabaohiem,$giabaobn-$giabaohiem,$slmoingay, $songay, $thanhtienbaohiem,$bnchitra,$phithuchien, $idtrangthai, $thuchien, $bschidinh,"","","","", $row["ID_Kham"],"","","","","",1, $IDNhomCLS, $row["NgayGioTao"],$phithuchientheonhom,$Id_phy_dtph,$lanchidinh,$phantramcungchitra,$thanhtiencungchitra);
    $i++; 
}
echo json_encode($responce);
?>