<?php
switch ($_GET["oper"]) {
    case "dathuchien":
        dathuchien();
        break;
    case "luuthuchien":
        luuthuchien();
        break;
    case "hoantat":
        hoantat();
        break;
     case "luuhoantat":
        luuhoantat();
        break;
     case "luudangkham":
        luudangkham();
        break;    
}	 		 

function dathuchien(){	
//echo $_POST["idkhamsk"];
	//print_r($_POST);
	$data= new SQLServer;//tao lop ket noi SQL
	$params=  array($_POST["id_kham"],$_POST["nguoithuchien"],$_SESSION["user"]["id_user"]);
	$store_name="{call GD2_Kham_dathuchien_khamthai (?,?,?)}";//tao bien khai bao store
	$data->query( $store_name, $params);
	
	if($_POST["idkhamsk"]==0 && $_POST["idkhamsk"]!=""){
	$check='';
	$chuoi='(?,?,? ,?,?,?,?,?,?,? ,?,?,? ,?,?,? ,?,?,? ,?,?,? ,?,?,? ,?,?,? ,?,?,? ,?,?,? ,?,?,? ,?,?,? ,?,?,? ,?,?,? ,?,?,? ,?,?,? ,?,?)';
	
    $params=  array($_POST["id_kham"],$_POST["klc_ketluan"],$_POST["phanloaitl1"].";".$_POST["phanloaisk1"]
	,$_POST["ck_matphai"],$_POST["ck_mattrai"],$_POST["kk_matphai"],$_POST["kk_mattrai"],$_POST["m_benhvemat"],$_POST["m_bacsy1"],$_POST["m_phanloai1"],
	$_POST["taimuihong_ghichu"],$_POST["tmh_bacsy1"],$_POST["tmh_phanloai1"],
	$_POST["ranghammat_ghichu"],$_POST["rhm_bacsy1"],$_POST["rhm_phanloai1"],
	$_POST["dalieu_ghichu"],$_POST["dalieu_bacsy1"],$_POST["dalieu_phanloai1"],
	$_POST["noikhoa_ghichu"],$_POST["noikhoa_bacsy1"],$_POST["noikhoa_phanloai1"],
	$_POST["ngoaikhoa_ghichu"],$_POST["ngoaikhoa_bacsy1"],$_POST["ngoaikhoa_phanloai1"],
	$_POST["nsanphukhoa_ghichu"],$_POST["sanphukhoa_bacsy1"],$_POST["sanphukhoa_phanloai1"],
	$_POST["tuanhoan_ghichu"],$_POST["tuanhoan_bacsy1"],$_POST["tuanhoan_phanloai1"],
	$_POST["hohap_ghichu"],$_POST["hohap_bacsy1"],$_POST["hohap_phanloai1"],
	$_POST["tieuhoa_ghichu"],$_POST["tieuhoa_bacsy1"],$_POST["tieuhoa_phanloai1"],
	$_POST["thantietnieusinhduc_ghichu"],$_POST["thantietnieusinhduc_bacsy1"],$_POST["thantietnieusinhduc_phanloai1"],
	$_POST["thankinh_ghichu"],$_POST["thankinh_bacsy1"],$_POST["thankinh_phanloai1"],
	$_POST["tamthan_ghichu"],$_POST["tamthan_bacsy1"],$_POST["tamthan_phanloai1"],
	$_POST["hevandong_ghichu"],$_POST["hevandong_bacsy1"],$_POST["hevandong_phanloai1"],
	$_POST["noitiet_ghichu"],$_POST["noitiet_bacsy1"],$_POST["noitiet_phanloai1"],
	$_SESSION["user"]["id_user"],array($check, SQLSRV_PARAM_OUT,SQLSRV_PHPTYPE_INT));
	$store_name="{call GD2_KhamSucKhoeCongTy_Insert $chuoi}";//tao bien khai bao store
	$get=$data->query( $store_name, $params);
	//echo "insert";
	//=====================
	}else if($_POST["idkhamsk"]!=""){
		//=====================

	$chuoi='(?,?,? ,?,?,?,?,?,?,? ,?,?,? ,?,?,? ,?,?,? ,?,?,? ,?,?,? ,?,?,? ,?,?,? ,?,?,? ,?,?,? ,?,?,? ,?,?,? ,?,?,? ,?,?,? ,?,?,? ,?)';

	$params=  array($_POST["idkhamsk"],$_POST["klc_ketluan"],$_POST["phanloaitl1"].";".$_POST["phanloaisk1"]
	,$_POST["ck_matphai"],$_POST["ck_mattrai"],$_POST["kk_matphai"],$_POST["kk_mattrai"],$_POST["m_benhvemat"],$_POST["m_bacsy1"],$_POST["m_phanloai1"],
	$_POST["taimuihong_ghichu"],$_POST["tmh_bacsy1"],$_POST["tmh_phanloai1"],
	$_POST["ranghammat_ghichu"],$_POST["rhm_bacsy1"],$_POST["rhm_phanloai1"],
	$_POST["dalieu_ghichu"],$_POST["dalieu_bacsy1"],$_POST["dalieu_phanloai1"],
	$_POST["noikhoa_ghichu"],$_POST["noikhoa_bacsy1"],$_POST["noikhoa_phanloai1"],
	$_POST["ngoaikhoa_ghichu"],$_POST["ngoaikhoa_bacsy1"],$_POST["ngoaikhoa_phanloai1"],
	$_POST["nsanphukhoa_ghichu"],$_POST["sanphukhoa_bacsy1"],$_POST["sanphukhoa_phanloai1"],
	$_POST["tuanhoan_ghichu"],$_POST["tuanhoan_bacsy1"],$_POST["tuanhoan_phanloai1"],
	$_POST["hohap_ghichu"],$_POST["hohap_bacsy1"],$_POST["hohap_phanloai1"],
	$_POST["tieuhoa_ghichu"],$_POST["tieuhoa_bacsy1"],$_POST["tieuhoa_phanloai1"],
	$_POST["thantietnieusinhduc_ghichu"],$_POST["thantietnieusinhduc_bacsy1"],$_POST["thantietnieusinhduc_phanloai1"],
	$_POST["thankinh_ghichu"],$_POST["thankinh_bacsy1"],$_POST["thankinh_phanloai1"],
	$_POST["tamthan_ghichu"],$_POST["tamthan_bacsy1"],$_POST["tamthan_phanloai1"],
	$_POST["hevandong_ghichu"],$_POST["hevandong_bacsy1"],$_POST["hevandong_phanloai1"],
	$_POST["noitiet_ghichu"],$_POST["noitiet_bacsy1"],$_POST["noitiet_phanloai1"],
	$_SESSION["user"]["id_user"]);

		$store_name="{call GD2_KhamSucKhoeCongTy_Update $chuoi}";//tao bien khai bao store
		$get=$data->query( $store_name, $params);//Goi store	
	//echo "update";
		//=====================
	}//and else
	
	
}
function luudangkham(){
	$data= new SQLServer;//tao lop ket noi SQL
	
	if($_POST["idkhamsk"]==0 && $_POST["idkhamsk"]!=""){
	$check='';
	$chuoi='(?,?,? ,?,?,?,?,?,?,? ,?,?,? ,?,?,? ,?,?,? ,?,?,? ,?,?,? ,?,?,? ,?,?,? ,?,?,? ,?,?,? ,?,?,? ,?,?,? ,?,?,? ,?,?,? ,?,?,? ,?,?)';
	
    $params=  array($_POST["id_kham"],$_POST["klc_ketluan"],$_POST["phanloaitl1"].";".$_POST["phanloaisk1"]
	,$_POST["ck_matphai"],$_POST["ck_mattrai"],$_POST["kk_matphai"],$_POST["kk_mattrai"],$_POST["m_benhvemat"],$_POST["m_bacsy1"],$_POST["m_phanloai1"],
	$_POST["taimuihong_ghichu"],$_POST["tmh_bacsy1"],$_POST["tmh_phanloai1"],
	$_POST["ranghammat_ghichu"],$_POST["rhm_bacsy1"],$_POST["rhm_phanloai1"],
	$_POST["dalieu_ghichu"],$_POST["dalieu_bacsy1"],$_POST["dalieu_phanloai1"],
	$_POST["noikhoa_ghichu"],$_POST["noikhoa_bacsy1"],$_POST["noikhoa_phanloai1"],
	$_POST["ngoaikhoa_ghichu"],$_POST["ngoaikhoa_bacsy1"],$_POST["ngoaikhoa_phanloai1"],
	$_POST["nsanphukhoa_ghichu"],$_POST["sanphukhoa_bacsy1"],$_POST["sanphukhoa_phanloai1"],
	$_POST["tuanhoan_ghichu"],$_POST["tuanhoan_bacsy1"],$_POST["tuanhoan_phanloai1"],
	$_POST["hohap_ghichu"],$_POST["hohap_bacsy1"],$_POST["hohap_phanloai1"],
	$_POST["tieuhoa_ghichu"],$_POST["tieuhoa_bacsy1"],$_POST["tieuhoa_phanloai1"],
	$_POST["thantietnieusinhduc_ghichu"],$_POST["thantietnieusinhduc_bacsy1"],$_POST["thantietnieusinhduc_phanloai1"],
	$_POST["thankinh_ghichu"],$_POST["thankinh_bacsy1"],$_POST["thankinh_phanloai1"],
	$_POST["tamthan_ghichu"],$_POST["tamthan_bacsy1"],$_POST["tamthan_phanloai1"],
	$_POST["hevandong_ghichu"],$_POST["hevandong_bacsy1"],$_POST["hevandong_phanloai1"],
	$_POST["noitiet_ghichu"],$_POST["noitiet_bacsy1"],$_POST["noitiet_phanloai1"],
	$_SESSION["user"]["id_user"],array($check, SQLSRV_PARAM_OUT,SQLSRV_PHPTYPE_INT));
	$store_name="{call GD2_KhamSucKhoeCongTy_Insert $chuoi}";//tao bien khai bao store
	$get=$data->query( $store_name, $params);
	//echo "insert";
	//=====================
	}else if($_POST["idkhamsk"]!=""){
		//=====================

	$chuoi='(?,?,? ,?,?,?,?,?,?,? ,?,?,? ,?,?,? ,?,?,? ,?,?,? ,?,?,? ,?,?,? ,?,?,? ,?,?,? ,?,?,? ,?,?,? ,?,?,? ,?,?,? ,?,?,? ,?,?,? ,?)';

	$params=  array($_POST["idkhamsk"],$_POST["klc_ketluan"],$_POST["phanloaitl1"].";".$_POST["phanloaisk1"]
	,$_POST["ck_matphai"],$_POST["ck_mattrai"],$_POST["kk_matphai"],$_POST["kk_mattrai"],$_POST["m_benhvemat"],$_POST["m_bacsy1"],$_POST["m_phanloai1"],
	$_POST["taimuihong_ghichu"],$_POST["tmh_bacsy1"],$_POST["tmh_phanloai1"],
	$_POST["ranghammat_ghichu"],$_POST["rhm_bacsy1"],$_POST["rhm_phanloai1"],
	$_POST["dalieu_ghichu"],$_POST["dalieu_bacsy1"],$_POST["dalieu_phanloai1"],
	$_POST["noikhoa_ghichu"],$_POST["noikhoa_bacsy1"],$_POST["noikhoa_phanloai1"],
	$_POST["ngoaikhoa_ghichu"],$_POST["ngoaikhoa_bacsy1"],$_POST["ngoaikhoa_phanloai1"],
	$_POST["nsanphukhoa_ghichu"],$_POST["sanphukhoa_bacsy1"],$_POST["sanphukhoa_phanloai1"],
	$_POST["tuanhoan_ghichu"],$_POST["tuanhoan_bacsy1"],$_POST["tuanhoan_phanloai1"],
	$_POST["hohap_ghichu"],$_POST["hohap_bacsy1"],$_POST["hohap_phanloai1"],
	$_POST["tieuhoa_ghichu"],$_POST["tieuhoa_bacsy1"],$_POST["tieuhoa_phanloai1"],
	$_POST["thantietnieusinhduc_ghichu"],$_POST["thantietnieusinhduc_bacsy1"],$_POST["thantietnieusinhduc_phanloai1"],
	$_POST["thankinh_ghichu"],$_POST["thankinh_bacsy1"],$_POST["thankinh_phanloai1"],
	$_POST["tamthan_ghichu"],$_POST["tamthan_bacsy1"],$_POST["tamthan_phanloai1"],
	$_POST["hevandong_ghichu"],$_POST["hevandong_bacsy1"],$_POST["hevandong_phanloai1"],
	$_POST["noitiet_ghichu"],$_POST["noitiet_bacsy1"],$_POST["noitiet_phanloai1"],
	$_SESSION["user"]["id_user"]);

		$store_name="{call GD2_KhamSucKhoeCongTy_Update $chuoi}";//tao bien khai bao store
		$get=$data->query( $store_name, $params);//Goi store	
	//echo "update";
		//=====================
	}//and else
	
}
function luuthuchien(){
	$data= new SQLServer;//tao lop ket noi SQL
	$params=  array($_POST["id_kham"],$_POST["nguoithuchien"],$_SESSION["user"]["id_user"]);
	//$data= new SQLServer;//tao lop ket noi SQL
	$store_name="{call GD2_KT_Luu_Update (?,?,?)}";//tao bien khai bao store
	$data->query( $store_name, $params);
	
	if($_POST["idkhamsk"]==0 && $_POST["idkhamsk"]!=""){
	$check='';
	$chuoi='(?,?,? ,?,?,?,?,?,?,? ,?,?,? ,?,?,? ,?,?,? ,?,?,? ,?,?,? ,?,?,? ,?,?,? ,?,?,? ,?,?,? ,?,?,? ,?,?,? ,?,?,? ,?,?,? ,?,?,? ,?,?)';
	
    $params=  array($_POST["id_kham"],$_POST["klc_ketluan"],$_POST["phanloaitl1"].";".$_POST["phanloaisk1"]
	,$_POST["ck_matphai"],$_POST["ck_mattrai"],$_POST["kk_matphai"],$_POST["kk_mattrai"],$_POST["m_benhvemat"],$_POST["m_bacsy1"],$_POST["m_phanloai1"],
	$_POST["taimuihong_ghichu"],$_POST["tmh_bacsy1"],$_POST["tmh_phanloai1"],
	$_POST["ranghammat_ghichu"],$_POST["rhm_bacsy1"],$_POST["rhm_phanloai1"],
	$_POST["dalieu_ghichu"],$_POST["dalieu_bacsy1"],$_POST["dalieu_phanloai1"],
	$_POST["noikhoa_ghichu"],$_POST["noikhoa_bacsy1"],$_POST["noikhoa_phanloai1"],
	$_POST["ngoaikhoa_ghichu"],$_POST["ngoaikhoa_bacsy1"],$_POST["ngoaikhoa_phanloai1"],
	$_POST["nsanphukhoa_ghichu"],$_POST["sanphukhoa_bacsy1"],$_POST["sanphukhoa_phanloai1"],
	$_POST["tuanhoan_ghichu"],$_POST["tuanhoan_bacsy1"],$_POST["tuanhoan_phanloai1"],
	$_POST["hohap_ghichu"],$_POST["hohap_bacsy1"],$_POST["hohap_phanloai1"],
	$_POST["tieuhoa_ghichu"],$_POST["tieuhoa_bacsy1"],$_POST["tieuhoa_phanloai1"],
	$_POST["thantietnieusinhduc_ghichu"],$_POST["thantietnieusinhduc_bacsy1"],$_POST["thantietnieusinhduc_phanloai1"],
	$_POST["thankinh_ghichu"],$_POST["thankinh_bacsy1"],$_POST["thankinh_phanloai1"],
	$_POST["tamthan_ghichu"],$_POST["tamthan_bacsy1"],$_POST["tamthan_phanloai1"],
	$_POST["hevandong_ghichu"],$_POST["hevandong_bacsy1"],$_POST["hevandong_phanloai1"],
	$_POST["noitiet_ghichu"],$_POST["noitiet_bacsy1"],$_POST["noitiet_phanloai1"],
	$_SESSION["user"]["id_user"],array($check, SQLSRV_PARAM_OUT,SQLSRV_PHPTYPE_INT));
	$store_name="{call GD2_KhamSucKhoeCongTy_Insert $chuoi}";//tao bien khai bao store
	$get=$data->query( $store_name, $params);
	//echo "insert";
	//=====================
	}else if($_POST["idkhamsk"]!=""){
		//=====================

	$chuoi='(?,?,? ,?,?,?,?,?,?,? ,?,?,? ,?,?,? ,?,?,? ,?,?,? ,?,?,? ,?,?,? ,?,?,? ,?,?,? ,?,?,? ,?,?,? ,?,?,? ,?,?,? ,?,?,? ,?,?,? ,?)';

	$params=  array($_POST["idkhamsk"],$_POST["klc_ketluan"],$_POST["phanloaitl1"].";".$_POST["phanloaisk1"]
	,$_POST["ck_matphai"],$_POST["ck_mattrai"],$_POST["kk_matphai"],$_POST["kk_mattrai"],$_POST["m_benhvemat"],$_POST["m_bacsy1"],$_POST["m_phanloai1"],
	$_POST["taimuihong_ghichu"],$_POST["tmh_bacsy1"],$_POST["tmh_phanloai1"],
	$_POST["ranghammat_ghichu"],$_POST["rhm_bacsy1"],$_POST["rhm_phanloai1"],
	$_POST["dalieu_ghichu"],$_POST["dalieu_bacsy1"],$_POST["dalieu_phanloai1"],
	$_POST["noikhoa_ghichu"],$_POST["noikhoa_bacsy1"],$_POST["noikhoa_phanloai1"],
	$_POST["ngoaikhoa_ghichu"],$_POST["ngoaikhoa_bacsy1"],$_POST["ngoaikhoa_phanloai1"],
	$_POST["nsanphukhoa_ghichu"],$_POST["sanphukhoa_bacsy1"],$_POST["sanphukhoa_phanloai1"],
	$_POST["tuanhoan_ghichu"],$_POST["tuanhoan_bacsy1"],$_POST["tuanhoan_phanloai1"],
	$_POST["hohap_ghichu"],$_POST["hohap_bacsy1"],$_POST["hohap_phanloai1"],
	$_POST["tieuhoa_ghichu"],$_POST["tieuhoa_bacsy1"],$_POST["tieuhoa_phanloai1"],
	$_POST["thantietnieusinhduc_ghichu"],$_POST["thantietnieusinhduc_bacsy1"],$_POST["thantietnieusinhduc_phanloai1"],
	$_POST["thankinh_ghichu"],$_POST["thankinh_bacsy1"],$_POST["thankinh_phanloai1"],
	$_POST["tamthan_ghichu"],$_POST["tamthan_bacsy1"],$_POST["tamthan_phanloai1"],
	$_POST["hevandong_ghichu"],$_POST["hevandong_bacsy1"],$_POST["hevandong_phanloai1"],
	$_POST["noitiet_ghichu"],$_POST["noitiet_bacsy1"],$_POST["noitiet_phanloai1"],
	$_SESSION["user"]["id_user"]);

		$store_name="{call GD2_KhamSucKhoeCongTy_Update $chuoi}";//tao bien khai bao store
		$get=$data->query( $store_name, $params);//Goi store	
	//echo "update";
		//=====================
	}//and else
}
function hoantat(){
	$data= new SQLServer;//tao lop ket noi SQL
	$params=  array($_POST["id_kham"],$_POST["chuandoan1"],$_SESSION["user"]["id_user"]);
	$store_name="{call GD2_KSK_HoanTat_Update (?,?,?)}";//tao bien khai bao store
	$data->query( $store_name, $params);
	
	if($_POST["idkhamsk"]==0 && $_POST["idkhamsk"]!=""){
	$check='';
	$chuoi='(?,?,? ,?,?,?,?,?,?,? ,?,?,? ,?,?,? ,?,?,? ,?,?,? ,?,?,? ,?,?,? ,?,?,? ,?,?,? ,?,?,? ,?,?,? ,?,?,? ,?,?,? ,?,?,? ,?,?,? ,?,?)';
	
    $params=  array($_POST["id_kham"],$_POST["klc_ketluan"],$_POST["phanloaitl1"].";".$_POST["phanloaisk1"]
	,$_POST["ck_matphai"],$_POST["ck_mattrai"],$_POST["kk_matphai"],$_POST["kk_mattrai"],$_POST["m_benhvemat"],$_POST["m_bacsy1"],$_POST["m_phanloai1"],
	$_POST["taimuihong_ghichu"],$_POST["tmh_bacsy1"],$_POST["tmh_phanloai1"],
	$_POST["ranghammat_ghichu"],$_POST["rhm_bacsy1"],$_POST["rhm_phanloai1"],
	$_POST["dalieu_ghichu"],$_POST["dalieu_bacsy1"],$_POST["dalieu_phanloai1"],
	$_POST["noikhoa_ghichu"],$_POST["noikhoa_bacsy1"],$_POST["noikhoa_phanloai1"],
	$_POST["ngoaikhoa_ghichu"],$_POST["ngoaikhoa_bacsy1"],$_POST["ngoaikhoa_phanloai1"],
	$_POST["nsanphukhoa_ghichu"],$_POST["sanphukhoa_bacsy1"],$_POST["sanphukhoa_phanloai1"],
	$_POST["tuanhoan_ghichu"],$_POST["tuanhoan_bacsy1"],$_POST["tuanhoan_phanloai1"],
	$_POST["hohap_ghichu"],$_POST["hohap_bacsy1"],$_POST["hohap_phanloai1"],
	$_POST["tieuhoa_ghichu"],$_POST["tieuhoa_bacsy1"],$_POST["tieuhoa_phanloai1"],
	$_POST["thantietnieusinhduc_ghichu"],$_POST["thantietnieusinhduc_bacsy1"],$_POST["thantietnieusinhduc_phanloai1"],
	$_POST["thankinh_ghichu"],$_POST["thankinh_bacsy1"],$_POST["thankinh_phanloai1"],
	$_POST["tamthan_ghichu"],$_POST["tamthan_bacsy1"],$_POST["tamthan_phanloai1"],
	$_POST["hevandong_ghichu"],$_POST["hevandong_bacsy1"],$_POST["hevandong_phanloai1"],
	$_POST["noitiet_ghichu"],$_POST["noitiet_bacsy1"],$_POST["noitiet_phanloai1"],
	$_SESSION["user"]["id_user"],array($check, SQLSRV_PARAM_OUT,SQLSRV_PHPTYPE_INT));
	$store_name="{call GD2_KhamSucKhoeCongTy_Insert $chuoi}";//tao bien khai bao store
	$get=$data->query( $store_name, $params);
	//echo "insert";
	//=====================
	}else if($_POST["idkhamsk"]!=""){
		//=====================

	$chuoi='(?,?,? ,?,?,?,?,?,?,? ,?,?,? ,?,?,? ,?,?,? ,?,?,? ,?,?,? ,?,?,? ,?,?,? ,?,?,? ,?,?,? ,?,?,? ,?,?,? ,?,?,? ,?,?,? ,?,?,? ,?)';

	$params=  array($_POST["idkhamsk"],$_POST["klc_ketluan"],$_POST["phanloaitl1"].";".$_POST["phanloaisk1"]
	,$_POST["ck_matphai"],$_POST["ck_mattrai"],$_POST["kk_matphai"],$_POST["kk_mattrai"],$_POST["m_benhvemat"],$_POST["m_bacsy1"],$_POST["m_phanloai1"],
	$_POST["taimuihong_ghichu"],$_POST["tmh_bacsy1"],$_POST["tmh_phanloai1"],
	$_POST["ranghammat_ghichu"],$_POST["rhm_bacsy1"],$_POST["rhm_phanloai1"],
	$_POST["dalieu_ghichu"],$_POST["dalieu_bacsy1"],$_POST["dalieu_phanloai1"],
	$_POST["noikhoa_ghichu"],$_POST["noikhoa_bacsy1"],$_POST["noikhoa_phanloai1"],
	$_POST["ngoaikhoa_ghichu"],$_POST["ngoaikhoa_bacsy1"],$_POST["ngoaikhoa_phanloai1"],
	$_POST["nsanphukhoa_ghichu"],$_POST["sanphukhoa_bacsy1"],$_POST["sanphukhoa_phanloai1"],
	$_POST["tuanhoan_ghichu"],$_POST["tuanhoan_bacsy1"],$_POST["tuanhoan_phanloai1"],
	$_POST["hohap_ghichu"],$_POST["hohap_bacsy1"],$_POST["hohap_phanloai1"],
	$_POST["tieuhoa_ghichu"],$_POST["tieuhoa_bacsy1"],$_POST["tieuhoa_phanloai1"],
	$_POST["thantietnieusinhduc_ghichu"],$_POST["thantietnieusinhduc_bacsy1"],$_POST["thantietnieusinhduc_phanloai1"],
	$_POST["thankinh_ghichu"],$_POST["thankinh_bacsy1"],$_POST["thankinh_phanloai1"],
	$_POST["tamthan_ghichu"],$_POST["tamthan_bacsy1"],$_POST["tamthan_phanloai1"],
	$_POST["hevandong_ghichu"],$_POST["hevandong_bacsy1"],$_POST["hevandong_phanloai1"],
	$_POST["noitiet_ghichu"],$_POST["noitiet_bacsy1"],$_POST["noitiet_phanloai1"],
	$_SESSION["user"]["id_user"]);

		$store_name="{call GD2_KhamSucKhoeCongTy_Update $chuoi}";//tao bien khai bao store
		$get=$data->query( $store_name, $params);//Goi store	
	//echo "update";
		//=====================
	}//and else
}
function luuhoantat(){
	$data= new SQLServer;//tao lop ket noi SQL
	$params=  array($_POST["id_kham"],$_POST["nguoithuchien"],$_POST["chuandoan1"],$_SESSION["user"]["id_user"]);
	$store_name="{call GD2_KSKCTY_HoanTat_Update (?,?,?,?)}";//tao bien khai bao store
	$data->query( $store_name, $params);
	
	if($_POST["idkhamsk"]==0 && $_POST["idkhamsk"]!=""){
	$check='';
	$chuoi='(?,?,? ,?,?,?,?,?,?,? ,?,?,? ,?,?,? ,?,?,? ,?,?,? ,?,?,? ,?,?,? ,?,?,? ,?,?,? ,?,?,? ,?,?,? ,?,?,? ,?,?,? ,?,?,? ,?,?,? ,?,?)';
	
    $params=  array($_POST["id_kham"],$_POST["klc_ketluan"],$_POST["phanloaitl1"].";".$_POST["phanloaisk1"]
	,$_POST["ck_matphai"],$_POST["ck_mattrai"],$_POST["kk_matphai"],$_POST["kk_mattrai"],$_POST["m_benhvemat"],$_POST["m_bacsy1"],$_POST["m_phanloai1"],
	$_POST["taimuihong_ghichu"],$_POST["tmh_bacsy1"],$_POST["tmh_phanloai1"],
	$_POST["ranghammat_ghichu"],$_POST["rhm_bacsy1"],$_POST["rhm_phanloai1"],
	$_POST["dalieu_ghichu"],$_POST["dalieu_bacsy1"],$_POST["dalieu_phanloai1"],
	$_POST["noikhoa_ghichu"],$_POST["noikhoa_bacsy1"],$_POST["noikhoa_phanloai1"],
	$_POST["ngoaikhoa_ghichu"],$_POST["ngoaikhoa_bacsy1"],$_POST["ngoaikhoa_phanloai1"],
	$_POST["nsanphukhoa_ghichu"],$_POST["sanphukhoa_bacsy1"],$_POST["sanphukhoa_phanloai1"],
	$_POST["tuanhoan_ghichu"],$_POST["tuanhoan_bacsy1"],$_POST["tuanhoan_phanloai1"],
	$_POST["hohap_ghichu"],$_POST["hohap_bacsy1"],$_POST["hohap_phanloai1"],
	$_POST["tieuhoa_ghichu"],$_POST["tieuhoa_bacsy1"],$_POST["tieuhoa_phanloai1"],
	$_POST["thantietnieusinhduc_ghichu"],$_POST["thantietnieusinhduc_bacsy1"],$_POST["thantietnieusinhduc_phanloai1"],
	$_POST["thankinh_ghichu"],$_POST["thankinh_bacsy1"],$_POST["thankinh_phanloai1"],
	$_POST["tamthan_ghichu"],$_POST["tamthan_bacsy1"],$_POST["tamthan_phanloai1"],
	$_POST["hevandong_ghichu"],$_POST["hevandong_bacsy1"],$_POST["hevandong_phanloai1"],
	$_POST["noitiet_ghichu"],$_POST["noitiet_bacsy1"],$_POST["noitiet_phanloai1"],
	$_SESSION["user"]["id_user"],array($check, SQLSRV_PARAM_OUT,SQLSRV_PHPTYPE_INT));
	$store_name="{call GD2_KhamSucKhoeCongTy_Insert $chuoi}";//tao bien khai bao store
	$get=$data->query( $store_name, $params);
	//echo "insert";
	//=====================
	}else if($_POST["idkhamsk"]!=""){
		//=====================

	$chuoi='(?,?,? ,?,?,?,?,?,?,? ,?,?,? ,?,?,? ,?,?,? ,?,?,? ,?,?,? ,?,?,? ,?,?,? ,?,?,? ,?,?,? ,?,?,? ,?,?,? ,?,?,? ,?,?,? ,?,?,? ,?)';

	$params=  array($_POST["idkhamsk"],$_POST["klc_ketluan"],$_POST["phanloaitl1"].";".$_POST["phanloaisk1"]
	,$_POST["ck_matphai"],$_POST["ck_mattrai"],$_POST["kk_matphai"],$_POST["kk_mattrai"],$_POST["m_benhvemat"],$_POST["m_bacsy1"],$_POST["m_phanloai1"],
	$_POST["taimuihong_ghichu"],$_POST["tmh_bacsy1"],$_POST["tmh_phanloai1"],
	$_POST["ranghammat_ghichu"],$_POST["rhm_bacsy1"],$_POST["rhm_phanloai1"],
	$_POST["dalieu_ghichu"],$_POST["dalieu_bacsy1"],$_POST["dalieu_phanloai1"],
	$_POST["noikhoa_ghichu"],$_POST["noikhoa_bacsy1"],$_POST["noikhoa_phanloai1"],
	$_POST["ngoaikhoa_ghichu"],$_POST["ngoaikhoa_bacsy1"],$_POST["ngoaikhoa_phanloai1"],
	$_POST["nsanphukhoa_ghichu"],$_POST["sanphukhoa_bacsy1"],$_POST["sanphukhoa_phanloai1"],
	$_POST["tuanhoan_ghichu"],$_POST["tuanhoan_bacsy1"],$_POST["tuanhoan_phanloai1"],
	$_POST["hohap_ghichu"],$_POST["hohap_bacsy1"],$_POST["hohap_phanloai1"],
	$_POST["tieuhoa_ghichu"],$_POST["tieuhoa_bacsy1"],$_POST["tieuhoa_phanloai1"],
	$_POST["thantietnieusinhduc_ghichu"],$_POST["thantietnieusinhduc_bacsy1"],$_POST["thantietnieusinhduc_phanloai1"],
	$_POST["thankinh_ghichu"],$_POST["thankinh_bacsy1"],$_POST["thankinh_phanloai1"],
	$_POST["tamthan_ghichu"],$_POST["tamthan_bacsy1"],$_POST["tamthan_phanloai1"],
	$_POST["hevandong_ghichu"],$_POST["hevandong_bacsy1"],$_POST["hevandong_phanloai1"],
	$_POST["noitiet_ghichu"],$_POST["noitiet_bacsy1"],$_POST["noitiet_phanloai1"],
	$_SESSION["user"]["id_user"]);

		$store_name="{call GD2_KhamSucKhoeCongTy_Update $chuoi}";//tao bien khai bao store
		$get=$data->query( $store_name, $params);//Goi store	
	//echo "update";
		//=====================
	}//and else
}
?>

