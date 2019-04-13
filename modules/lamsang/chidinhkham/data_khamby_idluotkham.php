<?php
$data= new SQLServer;//tao lop ket noi SQL 
 

 $param1=$_GET["id"];
//echo $param1;
$store_name="{call GD2_Kham_SelectByID_luotKham_New(?)}";//tao bien khai bao store
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
	/*if($row["GiaBH"]>0)
		$row["BNChiTra"]=$row["BNChiTra"];
	else
		$row["BNChiTra"]=0;
		*/
	if($row["ThanhTienBaoHiem"]>0){
		$bh=1;	
	}else{
		$bh=0;	
	}
	$row["NgayGioTao"]=$row["NgayGioTao"]->format('d/m/Y');
    $responce->rows[$i]['id']=$row["ID_Kham"];
    $responce->rows[$i]['cell']=array($bh,$row["IDLoaiKham"],"",$row["TenLoaiKham"],$row["GiaBaoBN"],$row["GiaBH"],$row["GiaThuBV"],$row["PhiDuKien"],$row["ThanhTienBaoHiem"],$row["ThanhTienBaoHiem"],$row["BNChiTra"],$row["PhiThucHien"],$row["ID_TrangThai"],$row["PhuongThucThucHien"],$row["ID_PhongChuyenMon"],$row["BSChiDinh"],"","",$row["ID_Kham"],"","","","",1,$row["ID_NhomCLS"],$row["NgayGioTao"],$row["LanChiDinh"],$row["XetNghiem"],$row["PhanTramCungChiTra"],$row["ThanhTienCungChiTra"],$row["Color"]);
    $i++; 
}
echo json_encode($responce);
?>