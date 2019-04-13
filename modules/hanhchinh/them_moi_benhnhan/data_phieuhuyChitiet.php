<?php

//null,43283,null,'2014-7-17','2014-9-24' ,'PHYSIO','DieuTriPhoiHop',0

$data= new SQLServer;//tao lop ket noi SQL
$store_name="{call [spHuyChiDinhChiTiet_SelectChiTietByID_ChiDinh](?)}";//tao bien khai bao store
$params = array($_GET['ID_HuyChiDinh']);
//print_r($params);
$get_danh_muc=$data->query( $store_name, $params);//Goi store
$excute= new SQLServerResult($get_danh_muc);//Ket noi lop xu ly SQL và truyen gia tri tra ve tu lop ket noi SQL
$tam= $excute->get_as_array();//Tra ve mang toan bo data lay duoc
$responce = new stdClass;
$i=0;

/*ID_HuyChiDinhCT	ID_HuyChiDinh	ID_Kham	SoTienThucTra	GhiChu	ID_PhysioTherapy	ID_DieuTriPhoiHop	SoLanTraLai	SoNgayTraLai	ID_LoaiKham	TenLoaiKham	DonGia	ID_PhysioTherapy	PhiThucHien	SoLanThucHienTrongNgay	SoNgayThucHien
799	437	1204302	56	ta ko thihc	NULL	1523	0	1.0	4536	Đặt nội khí quản	600000.000000	0	600000	1	1*/
foreach ($tam as $row) {//duyet toan bo mang tra ve SONGAYTHUCHIEN
    $responce->rows[$i]['id']=$row['ID_HuyChiDinhCT'];
    $responce->rows[$i]['cell']=array($row['ID_HuyChiDinhCT'], '<span class="ui-state-error ui-state-hover  " style="border:0"><span class="ui-icon  ui-icon-closethick" style="float: left; margin-left:2px;"></span></span>',
    	$row['TenLoaiKham'],
$row['PhiThucHien'],$row['SoTienThucTra'],
$row['GhiChu'],$row['SoNgayTraLai'],$row['SoLanTraLai'],
$row['DonGia'],$row['ID_DieuTriPhoiHop'],
$row['ID_PhysioTherapy'],$row['ID_LoaiKham'],$row['ID_HuyChiDinh'],$row['ID_Kham']


    	);
    $i++;
}
echo json_encode($responce);
?>