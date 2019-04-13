<?php
//print_r($_POST);
$id='';
$data= new SQLServer;//tao lop ket noi SQL
$begin_tran=$data->begin_tran();

if($_GET['xoa']){
	$_xoa=$_GET['xoa'];
	$_del=explode(",",$_xoa);
	$_dem=count($_del);
	for($ii=0;$ii<$_dem;$ii++){
		if($_del[$ii]>0){
			$params_del = array ($_del[$ii],
						$_GET['thang'],
						$_GET['nam'],
						$_SESSION["user"]["id_user"]
			);
			$store_name_del="{call GD2_TonKhoDelete(?,?,?,?)}";
			$del=$data->query( $store_name_del, $params_del);
			if( !$del ){
				$data->rollback();
				$loi=1;
				return;
			}
		}
	}
}

if(isset($_POST['id'])){
	foreach ($_POST['id'] as $key => $value) {
		if($value['ID_Thuoc']!='' && $value['Luu']!=1){
			if($value['NgayHetHan']!=''){
				$value['NgayHetHan']=convert_date($value['NgayHetHan']);	
			}else{
				$value['NgayHetHan']=NULL;
			}
			$params = array(
				$_GET['thang'],//@Month int,
				$_GET['nam'],//@Year int,
				$value['ID_Thuoc'],//@ID_Thuoc int,
				$_GET['kho'],//@ID_Kho int,
				$value['SoLuong'],//@SoLuong int,
				$value['ThanhTien'],//@ThanhTien decimal(18,2),
				$value['NgayHetHan'],//@NgayHetHan nvarchar(max),
				$value['SoLoNhaSanXuat'],//@SoLoNhaSanXuat nvarchar(max),				
				$_SESSION["user"]["id_user"],
				array($id, SQLSRV_PARAM_OUT,SQLSRV_PHPTYPE_INT)
			);
			$store_name="{call GD2_TonKhoInsert (?,?,?,?,? ,?,?,?,?,?)}";	 
			$get=$data->query( $store_name, $params);	
			if( !$get ){
				$data->rollback();
				$loi=1;
				return;
			}
		}elseif($value['ID_Thuoc']!='' && $value['Luu']==1){
			if($value['NgayHetHan']!=''){
				$value['NgayHetHan']=convert_date($value['NgayHetHan']);	
			}else{
				$value['NgayHetHan']=NULL;
			}
			$params2 = array(
				$value['ID_TonKho'],
				$_GET['thang'],//@Month int,
				$_GET['nam'],//@Year int,
				$value['SoLuong'],//@SoLuong int,
				$value['ThanhTien'],//@ThanhTien decimal(18,2),
				$value['NgayHetHan'],//@NgayHetHan nvarchar(max),
				$value['SoLoNhaSanXuat'],//@SoLoNhaSanXuat nvarchar(max),				
				$_SESSION["user"]["id_user"]
			);
			//print_r($params2);
			$store_name2="{call GD2_TonKhoUpdate (?,?,?,?,? ,?,?,?)}";	 
			$get2=$data->query( $store_name2, $params2);	
			if( !$get2 ){
				$data->rollback();
				$loi=1;
				return;
			}
		}
	}
}
$data->commit();
return;
?>