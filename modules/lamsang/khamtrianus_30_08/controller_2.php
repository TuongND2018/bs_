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
	$data= new SQLServer;//tao lop ket noi SQL
	
	foreach($_POST as $key => $value) {
		$check='';
		//echo $key."--".$value." <br />";
		if($_POST["daluu"]==0){
			if($key=="tgmacbenh1"){
			$params=  array($_POST["id_kham"],21,$value,$_SESSION["user"]["id_user"],array($check, SQLSRV_PARAM_OUT,SQLSRV_PHPTYPE_INT));
			$store_name="{call GD2_KetQuaCanLamSang_Insert (?,?,?,?,?)}";//tao bien khai bao store
			$data->query( $store_name, $params);
			}else if($key=="tieuduong"){
			$params=  array($_POST["id_kham"],26,$value,$_SESSION["user"]["id_user"],array($check, SQLSRV_PARAM_OUT,SQLSRV_PHPTYPE_INT));
			$store_name="{call GD2_KetQuaCanLamSang_Insert (?,?,?,?,?)}";//tao bien khai bao store
			$data->query( $store_name, $params);
			}else if($key=="phanmau"){
			$params=  array($_POST["id_kham"],29,$value,$_SESSION["user"]["id_user"],array($check, SQLSRV_PARAM_OUT,SQLSRV_PHPTYPE_INT));
			$store_name="{call GD2_KetQuaCanLamSang_Insert (?,?,?,?,?)}";//tao bien khai bao store
			$data->query( $store_name, $params);
			}else if($key=="cohoitot"){
			$params=  array($_POST["id_kham"],36,$value,$_SESSION["user"]["id_user"],array($check, SQLSRV_PARAM_OUT,SQLSRV_PHPTYPE_INT));
			$store_name="{call GD2_KetQuaCanLamSang_Insert (?,?,?,?,?)}";//tao bien khai bao store
			$data->query( $store_name, $params);
			}else if($key=="buitriloi"){
			$params=  array($_POST["id_kham"],40,$value,$_SESSION["user"]["id_user"],array($check, SQLSRV_PARAM_OUT,SQLSRV_PHPTYPE_INT));
			$store_name="{call GD2_KetQuaCanLamSang_Insert (?,?,?,?,?)}";//tao bien khai bao store
			$data->query( $store_name, $params);
			}else if($key=="solandieutri1"){
			$params=  array($_POST["id_kham"],22,$value,$_SESSION["user"]["id_user"],array($check, SQLSRV_PARAM_OUT,SQLSRV_PHPTYPE_INT));
			$store_name="{call GD2_KetQuaCanLamSang_Insert (?,?,?,?,?)}";//tao bien khai bao store
			$data->query( $store_name, $params);
			}else if($key=="benhtimmach"){
			$params=  array($_POST["id_kham"],27,$value,$_SESSION["user"]["id_user"],array($check, SQLSRV_PARAM_OUT,SQLSRV_PHPTYPE_INT));
			$store_name="{call GD2_KetQuaCanLamSang_Insert (?,?,?,?,?)}";//tao bien khai bao store
			$data->query( $store_name, $params);
			}else if($key=="nuthaumon"){
			$params=  array($_POST["id_kham"],32,$value,$_SESSION["user"]["id_user"],array($check, SQLSRV_PARAM_OUT,SQLSRV_PHPTYPE_INT));
			$store_name="{call GD2_KetQuaCanLamSang_Insert (?,?,?,?,?)}";//tao bien khai bao store
			$data->query( $store_name, $params);
			}else if($key=="niemmacmem"){
			$params=  array($_POST["id_kham"],37,$value,$_SESSION["user"]["id_user"],array($check, SQLSRV_PARAM_OUT,SQLSRV_PHPTYPE_INT));
			$store_name="{call GD2_KetQuaCanLamSang_Insert (?,?,?,?,?)}";//tao bien khai bao store
			$data->query( $store_name, $params);
			}else if($key=="phaidaylen"){
			$params=  array($_POST["id_kham"],41,$value,$_SESSION["user"]["id_user"],array($check, SQLSRV_PARAM_OUT,SQLSRV_PHPTYPE_INT));
			$store_name="{call GD2_KetQuaCanLamSang_Insert (?,?,?,?,?)}";//tao bien khai bao store
			$data->query( $store_name, $params);
			}else if($key=="ppdieutricu1"){
			$params=  array($_POST["id_kham"],23,$value,$_SESSION["user"]["id_user"],array($check, SQLSRV_PARAM_OUT,SQLSRV_PHPTYPE_INT));
			$store_name="{call GD2_KetQuaCanLamSang_Insert (?,?,?,?,?)}";//tao bien khai bao store
			$data->query( $store_name, $params);
			}else if($key=="taobon"){
			$params=  array($_POST["id_kham"],28,$value,$_SESSION["user"]["id_user"],array($check, SQLSRV_PARAM_OUT,SQLSRV_PHPTYPE_INT));
			$store_name="{call GD2_KetQuaCanLamSang_Insert (?,?,?,?,?)}";//tao bien khai bao store
			$data->query( $store_name, $params);
			}else if($key=="polyp"){
			$params=  array($_POST["id_kham"],33,$value,$_SESSION["user"]["id_user"],array($check, SQLSRV_PARAM_OUT,SQLSRV_PHPTYPE_INT));
			$store_name="{call GD2_KetQuaCanLamSang_Insert (?,?,?,?,?)}";//tao bien khai bao store
			$data->query( $store_name, $params);
			}else if($key=="sobuitri1"){
			$params=  array($_POST["id_kham"],38,$value,$_SESSION["user"]["id_user"],array($check, SQLSRV_PARAM_OUT,SQLSRV_PHPTYPE_INT));
			$store_name="{call GD2_KetQuaCanLamSang_Insert (?,?,?,?,?)}";//tao bien khai bao store
			$data->query( $store_name, $params);
			}else if($key=="buitrixuathuyet"){
			$params=  array($_POST["id_kham"],42,$value,$_SESSION["user"]["id_user"],array($check, SQLSRV_PARAM_OUT,SQLSRV_PHPTYPE_INT));
			$store_name="{call GD2_KetQuaCanLamSang_Insert (?,?,?,?,?)}";//tao bien khai bao store
			$data->query( $store_name, $params);
			}else if($key=="huyetapcao"){
			$params=  array($_POST["id_kham"],24,$value,$_SESSION["user"]["id_user"],array($check, SQLSRV_PARAM_OUT,SQLSRV_PHPTYPE_INT));
			$store_name="{call GD2_KetQuaCanLamSang_Insert (?,?,?,?,?)}";//tao bien khai bao store
			$data->query( $store_name, $params);
			}else if($key=="dau"){
			$params=  array($_POST["id_kham"],30,$value,$_SESSION["user"]["id_user"],array($check, SQLSRV_PARAM_OUT,SQLSRV_PHPTYPE_INT));
			$store_name="{call GD2_KetQuaCanLamSang_Insert (?,?,?,?,?)}";//tao bien khai bao store
			$data->query( $store_name, $params);
			}else if($key=="nhugaihm"){
			$params=  array($_POST["id_kham"],34,$value,$_SESSION["user"]["id_user"],array($check, SQLSRV_PARAM_OUT,SQLSRV_PHPTYPE_INT));
			$store_name="{call GD2_KetQuaCanLamSang_Insert (?,?,?,?,?)}";//tao bien khai bao store
			$data->query( $store_name, $params);
			}else if($key=="vitribuitri"){
			$params=  array($_POST["id_kham"],39,$value,$_SESSION["user"]["id_user"],array($check, SQLSRV_PARAM_OUT,SQLSRV_PHPTYPE_INT));
			$store_name="{call GD2_KetQuaCanLamSang_Insert (?,?,?,?,?)}";//tao bien khai bao store
			$data->query( $store_name, $params);
			}else if($key=="buitriviem"){
			$params=  array($_POST["id_kham"],43,$value,$_SESSION["user"]["id_user"],array($check, SQLSRV_PARAM_OUT,SQLSRV_PHPTYPE_INT));
			$store_name="{call GD2_KetQuaCanLamSang_Insert (?,?,?,?,?)}";//tao bien khai bao store
			$data->query( $store_name, $params);
			}else if($key=="huyetapthap"){
			$params=  array($_POST["id_kham"],25,$value,$_SESSION["user"]["id_user"],array($check, SQLSRV_PARAM_OUT,SQLSRV_PHPTYPE_INT));
			$store_name="{call GD2_KetQuaCanLamSang_Insert (?,?,?,?,?)}";//tao bien khai bao store
			$data->query( $store_name, $params);
			}else if($key=="daitieuduong"){
			$params=  array($_POST["id_kham"],31,$value,$_SESSION["user"]["id_user"],array($check, SQLSRV_PARAM_OUT,SQLSRV_PHPTYPE_INT));
			$store_name="{call GD2_KetQuaCanLamSang_Insert (?,?,?,?,?)}";//tao bien khai bao store
			$data->query( $store_name, $params);
			}else if($key=="gianvanhhm"){
			$params=  array($_POST["id_kham"],35,$value,$_SESSION["user"]["id_user"],array($check, SQLSRV_PARAM_OUT,SQLSRV_PHPTYPE_INT));
			$store_name="{call GD2_KetQuaCanLamSang_Insert (?,?,?,?,?)}";//tao bien khai bao store
			$data->query( $store_name, $params);
			}else if($key=="builonnhat1"){
			$params=  array($_POST["id_kham"],45,$value,$_SESSION["user"]["id_user"],array($check, SQLSRV_PARAM_OUT,SQLSRV_PHPTYPE_INT));
			$store_name="{call GD2_KetQuaCanLamSang_Insert (?,?,?,?,?)}";//tao bien khai bao store
			$data->query( $store_name, $params);
			}else if($key=="buitrixochai"){
			$params=  array($_POST["id_kham"],44,$value,$_SESSION["user"]["id_user"],array($check, SQLSRV_PARAM_OUT,SQLSRV_PHPTYPE_INT));
			$store_name="{call GD2_KetQuaCanLamSang_Insert (?,?,?,?,?)}";//tao bien khai bao store
			$data->query( $store_name, $params);
			}
		}else{
			if($key=="tgmacbenh1"){
			$params=  array($_POST["id_kham"],21,$value,$_SESSION["user"]["id_user"]);
			$store_name="{call GD2_KetQuaCanLamSang_Update (?,?,?,?)}";//tao bien khai bao store
			$data->query( $store_name, $params);
			}else if($key=="tieuduong"){
			$params=  array($_POST["id_kham"],26,$value,$_SESSION["user"]["id_user"]);
			$store_name="{call GD2_KetQuaCanLamSang_Update (?,?,?,?)}";//tao bien khai bao store
			$data->query( $store_name, $params);
			}else if($key=="phanmau"){
			$params=  array($_POST["id_kham"],29,$value,$_SESSION["user"]["id_user"]);
			$store_name="{call GD2_KetQuaCanLamSang_Update (?,?,?,?)}";//tao bien khai bao store
			$data->query( $store_name, $params);
			}else if($key=="cohoitot"){
			$params=  array($_POST["id_kham"],36,$value,$_SESSION["user"]["id_user"]);
			$store_name="{call GD2_KetQuaCanLamSang_Update (?,?,?,?)}";//tao bien khai bao store
			$data->query( $store_name, $params);
			}else if($key=="buitriloi"){
			$params=  array($_POST["id_kham"],40,$value,$_SESSION["user"]["id_user"]);
			$store_name="{call GD2_KetQuaCanLamSang_Update (?,?,?,?)}";//tao bien khai bao store
			$data->query( $store_name, $params);
			}else if($key=="solandieutri1"){
			$params=  array($_POST["id_kham"],22,$value,$_SESSION["user"]["id_user"]);
			$store_name="{call GD2_KetQuaCanLamSang_Update (?,?,?,?)}";//tao bien khai bao store
			$data->query( $store_name, $params);
			}else if($key=="benhtimmach"){
			$params=  array($_POST["id_kham"],27,$value,$_SESSION["user"]["id_user"]);
			$store_name="{call GD2_KetQuaCanLamSang_Update (?,?,?,?)}";//tao bien khai bao store
			$data->query( $store_name, $params);
			}else if($key=="nuthaumon"){
			$params=  array($_POST["id_kham"],32,$value,$_SESSION["user"]["id_user"]);
			$store_name="{call GD2_KetQuaCanLamSang_Update (?,?,?,?)}";//tao bien khai bao store
			$data->query( $store_name, $params);
			}else if($key=="niemmacmem"){
			$params=  array($_POST["id_kham"],37,$value,$_SESSION["user"]["id_user"]);
			$store_name="{call GD2_KetQuaCanLamSang_Update (?,?,?,?)}";//tao bien khai bao store
			$data->query( $store_name, $params);
			}else if($key=="phaidaylen"){
			$params=  array($_POST["id_kham"],41,$value,$_SESSION["user"]["id_user"]);
			$store_name="{call GD2_KetQuaCanLamSang_Update (?,?,?,?)}";//tao bien khai bao store
			$data->query( $store_name, $params);
			}else if($key=="ppdieutricu1"){
			$params=  array($_POST["id_kham"],23,$value,$_SESSION["user"]["id_user"]);
			$store_name="{call GD2_KetQuaCanLamSang_Update (?,?,?,?)}";//tao bien khai bao store
			$data->query( $store_name, $params);
			}else if($key=="taobon"){
			$params=  array($_POST["id_kham"],28,$value,$_SESSION["user"]["id_user"]);
			$store_name="{call GD2_KetQuaCanLamSang_Update (?,?,?,?)}";//tao bien khai bao store
			$data->query( $store_name, $params);
			}else if($key=="polyp"){
			$params=  array($_POST["id_kham"],33,$value,$_SESSION["user"]["id_user"]);
			$store_name="{call GD2_KetQuaCanLamSang_Update (?,?,?,?)}";//tao bien khai bao store
			$data->query( $store_name, $params);
			}else if($key=="sobuitri1"){
			$params=  array($_POST["id_kham"],38,$value,$_SESSION["user"]["id_user"]);
			$store_name="{call GD2_KetQuaCanLamSang_Update (?,?,?,?)}";//tao bien khai bao store
			$data->query( $store_name, $params);
			}else if($key=="buitrixuathuyet"){
			$params=  array($_POST["id_kham"],42,$value,$_SESSION["user"]["id_user"]);
			$store_name="{call GD2_KetQuaCanLamSang_Update (?,?,?,?)}";//tao bien khai bao store
			$data->query( $store_name, $params);
			}else if($key=="huyetapcao"){
			$params=  array($_POST["id_kham"],24,$value,$_SESSION["user"]["id_user"]);
			$store_name="{call GD2_KetQuaCanLamSang_Update (?,?,?,?)}";//tao bien khai bao store
			$data->query( $store_name, $params);
			}else if($key=="dau"){
			$params=  array($_POST["id_kham"],30,$value,$_SESSION["user"]["id_user"]);
			$store_name="{call GD2_KetQuaCanLamSang_Update (?,?,?,?)}";//tao bien khai bao store
			$data->query( $store_name, $params);
			}else if($key=="nhugaihm"){
			$params=  array($_POST["id_kham"],34,$value,$_SESSION["user"]["id_user"]);
			$store_name="{call GD2_KetQuaCanLamSang_Update (?,?,?,?)}";//tao bien khai bao store
			$data->query( $store_name, $params);
			}else if($key=="vitribuitri"){
			$params=  array($_POST["id_kham"],39,$value,$_SESSION["user"]["id_user"]);
			$store_name="{call GD2_KetQuaCanLamSang_Update (?,?,?,?)}";//tao bien khai bao store
			$data->query( $store_name, $params);
			}else if($key=="buitriviem"){
			$params=  array($_POST["id_kham"],43,$value,$_SESSION["user"]["id_user"]);
			$store_name="{call GD2_KetQuaCanLamSang_Update (?,?,?,?)}";//tao bien khai bao store
			$data->query( $store_name, $params);
			}else if($key=="huyetapthap"){
			$params=  array($_POST["id_kham"],25,$value,$_SESSION["user"]["id_user"]);
			$store_name="{call GD2_KetQuaCanLamSang_Update (?,?,?,?)}";//tao bien khai bao store
			$data->query( $store_name, $params);
			}else if($key=="daitieuduong"){
			$params=  array($_POST["id_kham"],31,$value,$_SESSION["user"]["id_user"]);
			$store_name="{call GD2_KetQuaCanLamSang_Update (?,?,?,?)}";//tao bien khai bao store
			$data->query( $store_name, $params);
			}else if($key=="gianvanhhm"){
			$params=  array($_POST["id_kham"],35,$value,$_SESSION["user"]["id_user"]);
			$store_name="{call GD2_KetQuaCanLamSang_Update (?,?,?,?)}";//tao bien khai bao store
			$data->query( $store_name, $params);
			}else if($key=="builonnhat1"){
			$params=  array($_POST["id_kham"],45,$value,$_SESSION["user"]["id_user"]);
			$store_name="{call GD2_KetQuaCanLamSang_Update (?,?,?,?)}";//tao bien khai bao store
			$data->query( $store_name, $params);
			}else if($key=="buitrixochai"){
			$params=  array($_POST["id_kham"],44,$value,$_SESSION["user"]["id_user"]);
			$store_name="{call GD2_KetQuaCanLamSang_Update (?,?,?,?)}";//tao bien khai bao store
			$data->query( $store_name, $params);
			}
			
		}
		
		
	}
	$chuoi='(?,?,?,?,?,?,?,?,?)';
	$params=  array($_POST["id_kham"],$_POST["nguoithuchien"],$_POST["soitructrang"],$_POST["text_chuandoan"],$_POST["ppdieutri1"],$_POST["ghichunoibo"],$_POST["ppdieutri2"],$_POST["dacdiem"],$_SESSION["user"]["id_user"]);
	$store_name="{call GD2_anus_action_dathuchien $chuoi}";//tao bien khai bao store
	$data->query( $store_name, $params);
	
	
}
function luudangkham(){
$data= new SQLServer;//tao lop ket noi SQL
	
	foreach($_POST as $key => $value) {
		$check='';
		//echo $key."--".$value." <br />";
		if($_POST["daluu"]==0){
			if($key=="tgmacbenh1"){
			$params=  array($_POST["id_kham"],21,$value,$_SESSION["user"]["id_user"],array($check, SQLSRV_PARAM_OUT,SQLSRV_PHPTYPE_INT));
			$store_name="{call GD2_KetQuaCanLamSang_Insert (?,?,?,?,?)}";//tao bien khai bao store
			$data->query( $store_name, $params);
			}else if($key=="tieuduong"){
			$params=  array($_POST["id_kham"],26,$value,$_SESSION["user"]["id_user"],array($check, SQLSRV_PARAM_OUT,SQLSRV_PHPTYPE_INT));
			$store_name="{call GD2_KetQuaCanLamSang_Insert (?,?,?,?,?)}";//tao bien khai bao store
			$data->query( $store_name, $params);
			}else if($key=="phanmau"){
			$params=  array($_POST["id_kham"],29,$value,$_SESSION["user"]["id_user"],array($check, SQLSRV_PARAM_OUT,SQLSRV_PHPTYPE_INT));
			$store_name="{call GD2_KetQuaCanLamSang_Insert (?,?,?,?,?)}";//tao bien khai bao store
			$data->query( $store_name, $params);
			}else if($key=="cohoitot"){
			$params=  array($_POST["id_kham"],36,$value,$_SESSION["user"]["id_user"],array($check, SQLSRV_PARAM_OUT,SQLSRV_PHPTYPE_INT));
			$store_name="{call GD2_KetQuaCanLamSang_Insert (?,?,?,?,?)}";//tao bien khai bao store
			$data->query( $store_name, $params);
			}else if($key=="buitriloi"){
			$params=  array($_POST["id_kham"],40,$value,$_SESSION["user"]["id_user"],array($check, SQLSRV_PARAM_OUT,SQLSRV_PHPTYPE_INT));
			$store_name="{call GD2_KetQuaCanLamSang_Insert (?,?,?,?,?)}";//tao bien khai bao store
			$data->query( $store_name, $params);
			}else if($key=="solandieutri1"){
			$params=  array($_POST["id_kham"],22,$value,$_SESSION["user"]["id_user"],array($check, SQLSRV_PARAM_OUT,SQLSRV_PHPTYPE_INT));
			$store_name="{call GD2_KetQuaCanLamSang_Insert (?,?,?,?,?)}";//tao bien khai bao store
			$data->query( $store_name, $params);
			}else if($key=="benhtimmach"){
			$params=  array($_POST["id_kham"],27,$value,$_SESSION["user"]["id_user"],array($check, SQLSRV_PARAM_OUT,SQLSRV_PHPTYPE_INT));
			$store_name="{call GD2_KetQuaCanLamSang_Insert (?,?,?,?,?)}";//tao bien khai bao store
			$data->query( $store_name, $params);
			}else if($key=="nuthaumon"){
			$params=  array($_POST["id_kham"],32,$value,$_SESSION["user"]["id_user"],array($check, SQLSRV_PARAM_OUT,SQLSRV_PHPTYPE_INT));
			$store_name="{call GD2_KetQuaCanLamSang_Insert (?,?,?,?,?)}";//tao bien khai bao store
			$data->query( $store_name, $params);
			}else if($key=="niemmacmem"){
			$params=  array($_POST["id_kham"],37,$value,$_SESSION["user"]["id_user"],array($check, SQLSRV_PARAM_OUT,SQLSRV_PHPTYPE_INT));
			$store_name="{call GD2_KetQuaCanLamSang_Insert (?,?,?,?,?)}";//tao bien khai bao store
			$data->query( $store_name, $params);
			}else if($key=="phaidaylen"){
			$params=  array($_POST["id_kham"],41,$value,$_SESSION["user"]["id_user"],array($check, SQLSRV_PARAM_OUT,SQLSRV_PHPTYPE_INT));
			$store_name="{call GD2_KetQuaCanLamSang_Insert (?,?,?,?,?)}";//tao bien khai bao store
			$data->query( $store_name, $params);
			}else if($key=="ppdieutricu1"){
			$params=  array($_POST["id_kham"],23,$value,$_SESSION["user"]["id_user"],array($check, SQLSRV_PARAM_OUT,SQLSRV_PHPTYPE_INT));
			$store_name="{call GD2_KetQuaCanLamSang_Insert (?,?,?,?,?)}";//tao bien khai bao store
			$data->query( $store_name, $params);
			}else if($key=="taobon"){
			$params=  array($_POST["id_kham"],28,$value,$_SESSION["user"]["id_user"],array($check, SQLSRV_PARAM_OUT,SQLSRV_PHPTYPE_INT));
			$store_name="{call GD2_KetQuaCanLamSang_Insert (?,?,?,?,?)}";//tao bien khai bao store
			$data->query( $store_name, $params);
			}else if($key=="polyp"){
			$params=  array($_POST["id_kham"],33,$value,$_SESSION["user"]["id_user"],array($check, SQLSRV_PARAM_OUT,SQLSRV_PHPTYPE_INT));
			$store_name="{call GD2_KetQuaCanLamSang_Insert (?,?,?,?,?)}";//tao bien khai bao store
			$data->query( $store_name, $params);
			}else if($key=="sobuitri1"){
			$params=  array($_POST["id_kham"],38,$value,$_SESSION["user"]["id_user"],array($check, SQLSRV_PARAM_OUT,SQLSRV_PHPTYPE_INT));
			$store_name="{call GD2_KetQuaCanLamSang_Insert (?,?,?,?,?)}";//tao bien khai bao store
			$data->query( $store_name, $params);
			}else if($key=="buitrixuathuyet"){
			$params=  array($_POST["id_kham"],42,$value,$_SESSION["user"]["id_user"],array($check, SQLSRV_PARAM_OUT,SQLSRV_PHPTYPE_INT));
			$store_name="{call GD2_KetQuaCanLamSang_Insert (?,?,?,?,?)}";//tao bien khai bao store
			$data->query( $store_name, $params);
			}else if($key=="huyetapcao"){
			$params=  array($_POST["id_kham"],24,$value,$_SESSION["user"]["id_user"],array($check, SQLSRV_PARAM_OUT,SQLSRV_PHPTYPE_INT));
			$store_name="{call GD2_KetQuaCanLamSang_Insert (?,?,?,?,?)}";//tao bien khai bao store
			$data->query( $store_name, $params);
			}else if($key=="dau"){
			$params=  array($_POST["id_kham"],30,$value,$_SESSION["user"]["id_user"],array($check, SQLSRV_PARAM_OUT,SQLSRV_PHPTYPE_INT));
			$store_name="{call GD2_KetQuaCanLamSang_Insert (?,?,?,?,?)}";//tao bien khai bao store
			$data->query( $store_name, $params);
			}else if($key=="nhugaihm"){
			$params=  array($_POST["id_kham"],34,$value,$_SESSION["user"]["id_user"],array($check, SQLSRV_PARAM_OUT,SQLSRV_PHPTYPE_INT));
			$store_name="{call GD2_KetQuaCanLamSang_Insert (?,?,?,?,?)}";//tao bien khai bao store
			$data->query( $store_name, $params);
			}else if($key=="vitribuitri"){
			$params=  array($_POST["id_kham"],39,$value,$_SESSION["user"]["id_user"],array($check, SQLSRV_PARAM_OUT,SQLSRV_PHPTYPE_INT));
			$store_name="{call GD2_KetQuaCanLamSang_Insert (?,?,?,?,?)}";//tao bien khai bao store
			$data->query( $store_name, $params);
			}else if($key=="buitriviem"){
			$params=  array($_POST["id_kham"],43,$value,$_SESSION["user"]["id_user"],array($check, SQLSRV_PARAM_OUT,SQLSRV_PHPTYPE_INT));
			$store_name="{call GD2_KetQuaCanLamSang_Insert (?,?,?,?,?)}";//tao bien khai bao store
			$data->query( $store_name, $params);
			}else if($key=="huyetapthap"){
			$params=  array($_POST["id_kham"],25,$value,$_SESSION["user"]["id_user"],array($check, SQLSRV_PARAM_OUT,SQLSRV_PHPTYPE_INT));
			$store_name="{call GD2_KetQuaCanLamSang_Insert (?,?,?,?,?)}";//tao bien khai bao store
			$data->query( $store_name, $params);
			}else if($key=="daitieuduong"){
			$params=  array($_POST["id_kham"],31,$value,$_SESSION["user"]["id_user"],array($check, SQLSRV_PARAM_OUT,SQLSRV_PHPTYPE_INT));
			$store_name="{call GD2_KetQuaCanLamSang_Insert (?,?,?,?,?)}";//tao bien khai bao store
			$data->query( $store_name, $params);
			}else if($key=="gianvanhhm"){
			$params=  array($_POST["id_kham"],35,$value,$_SESSION["user"]["id_user"],array($check, SQLSRV_PARAM_OUT,SQLSRV_PHPTYPE_INT));
			$store_name="{call GD2_KetQuaCanLamSang_Insert (?,?,?,?,?)}";//tao bien khai bao store
			$data->query( $store_name, $params);
			}else if($key=="builonnhat1"){
			$params=  array($_POST["id_kham"],45,$value,$_SESSION["user"]["id_user"],array($check, SQLSRV_PARAM_OUT,SQLSRV_PHPTYPE_INT));
			$store_name="{call GD2_KetQuaCanLamSang_Insert (?,?,?,?,?)}";//tao bien khai bao store
			$data->query( $store_name, $params);
			}else if($key=="buitrixochai"){
			$params=  array($_POST["id_kham"],44,$value,$_SESSION["user"]["id_user"],array($check, SQLSRV_PARAM_OUT,SQLSRV_PHPTYPE_INT));
			$store_name="{call GD2_KetQuaCanLamSang_Insert (?,?,?,?,?)}";//tao bien khai bao store
			$data->query( $store_name, $params);
			}
		}else{
			if($key=="tgmacbenh1"){
			$params=  array($_POST["id_kham"],21,$value,$_SESSION["user"]["id_user"]);
			$store_name="{call GD2_KetQuaCanLamSang_Update (?,?,?,?)}";//tao bien khai bao store
			$data->query( $store_name, $params);
			}else if($key=="tieuduong"){
			$params=  array($_POST["id_kham"],26,$value,$_SESSION["user"]["id_user"]);
			$store_name="{call GD2_KetQuaCanLamSang_Update (?,?,?,?)}";//tao bien khai bao store
			$data->query( $store_name, $params);
			}else if($key=="phanmau"){
			$params=  array($_POST["id_kham"],29,$value,$_SESSION["user"]["id_user"]);
			$store_name="{call GD2_KetQuaCanLamSang_Update (?,?,?,?)}";//tao bien khai bao store
			$data->query( $store_name, $params);
			}else if($key=="cohoitot"){
			$params=  array($_POST["id_kham"],36,$value,$_SESSION["user"]["id_user"]);
			$store_name="{call GD2_KetQuaCanLamSang_Update (?,?,?,?)}";//tao bien khai bao store
			$data->query( $store_name, $params);
			}else if($key=="buitriloi"){
			$params=  array($_POST["id_kham"],40,$value,$_SESSION["user"]["id_user"]);
			$store_name="{call GD2_KetQuaCanLamSang_Update (?,?,?,?)}";//tao bien khai bao store
			$data->query( $store_name, $params);
			}else if($key=="solandieutri1"){
			$params=  array($_POST["id_kham"],22,$value,$_SESSION["user"]["id_user"]);
			$store_name="{call GD2_KetQuaCanLamSang_Update (?,?,?,?)}";//tao bien khai bao store
			$data->query( $store_name, $params);
			}else if($key=="benhtimmach"){
			$params=  array($_POST["id_kham"],27,$value,$_SESSION["user"]["id_user"]);
			$store_name="{call GD2_KetQuaCanLamSang_Update (?,?,?,?)}";//tao bien khai bao store
			$data->query( $store_name, $params);
			}else if($key=="nuthaumon"){
			$params=  array($_POST["id_kham"],32,$value,$_SESSION["user"]["id_user"]);
			$store_name="{call GD2_KetQuaCanLamSang_Update (?,?,?,?)}";//tao bien khai bao store
			$data->query( $store_name, $params);
			}else if($key=="niemmacmem"){
			$params=  array($_POST["id_kham"],37,$value,$_SESSION["user"]["id_user"]);
			$store_name="{call GD2_KetQuaCanLamSang_Update (?,?,?,?)}";//tao bien khai bao store
			$data->query( $store_name, $params);
			}else if($key=="phaidaylen"){
			$params=  array($_POST["id_kham"],41,$value,$_SESSION["user"]["id_user"]);
			$store_name="{call GD2_KetQuaCanLamSang_Update (?,?,?,?)}";//tao bien khai bao store
			$data->query( $store_name, $params);
			}else if($key=="ppdieutricu1"){
			$params=  array($_POST["id_kham"],23,$value,$_SESSION["user"]["id_user"]);
			$store_name="{call GD2_KetQuaCanLamSang_Update (?,?,?,?)}";//tao bien khai bao store
			$data->query( $store_name, $params);
			}else if($key=="taobon"){
			$params=  array($_POST["id_kham"],28,$value,$_SESSION["user"]["id_user"]);
			$store_name="{call GD2_KetQuaCanLamSang_Update (?,?,?,?)}";//tao bien khai bao store
			$data->query( $store_name, $params);
			}else if($key=="polyp"){
			$params=  array($_POST["id_kham"],33,$value,$_SESSION["user"]["id_user"]);
			$store_name="{call GD2_KetQuaCanLamSang_Update (?,?,?,?)}";//tao bien khai bao store
			$data->query( $store_name, $params);
			}else if($key=="sobuitri1"){
			$params=  array($_POST["id_kham"],38,$value,$_SESSION["user"]["id_user"]);
			$store_name="{call GD2_KetQuaCanLamSang_Update (?,?,?,?)}";//tao bien khai bao store
			$data->query( $store_name, $params);
			}else if($key=="buitrixuathuyet"){
			$params=  array($_POST["id_kham"],42,$value,$_SESSION["user"]["id_user"]);
			$store_name="{call GD2_KetQuaCanLamSang_Update (?,?,?,?)}";//tao bien khai bao store
			$data->query( $store_name, $params);
			}else if($key=="huyetapcao"){
			$params=  array($_POST["id_kham"],24,$value,$_SESSION["user"]["id_user"]);
			$store_name="{call GD2_KetQuaCanLamSang_Update (?,?,?,?)}";//tao bien khai bao store
			$data->query( $store_name, $params);
			}else if($key=="dau"){
			$params=  array($_POST["id_kham"],30,$value,$_SESSION["user"]["id_user"]);
			$store_name="{call GD2_KetQuaCanLamSang_Update (?,?,?,?)}";//tao bien khai bao store
			$data->query( $store_name, $params);
			}else if($key=="nhugaihm"){
			$params=  array($_POST["id_kham"],34,$value,$_SESSION["user"]["id_user"]);
			$store_name="{call GD2_KetQuaCanLamSang_Update (?,?,?,?)}";//tao bien khai bao store
			$data->query( $store_name, $params);
			}else if($key=="vitribuitri"){
			$params=  array($_POST["id_kham"],39,$value,$_SESSION["user"]["id_user"]);
			$store_name="{call GD2_KetQuaCanLamSang_Update (?,?,?,?)}";//tao bien khai bao store
			$data->query( $store_name, $params);
			}else if($key=="buitriviem"){
			$params=  array($_POST["id_kham"],43,$value,$_SESSION["user"]["id_user"]);
			$store_name="{call GD2_KetQuaCanLamSang_Update (?,?,?,?)}";//tao bien khai bao store
			$data->query( $store_name, $params);
			}else if($key=="huyetapthap"){
			$params=  array($_POST["id_kham"],25,$value,$_SESSION["user"]["id_user"]);
			$store_name="{call GD2_KetQuaCanLamSang_Update (?,?,?,?)}";//tao bien khai bao store
			$data->query( $store_name, $params);
			}else if($key=="daitieuduong"){
			$params=  array($_POST["id_kham"],31,$value,$_SESSION["user"]["id_user"]);
			$store_name="{call GD2_KetQuaCanLamSang_Update (?,?,?,?)}";//tao bien khai bao store
			$data->query( $store_name, $params);
			}else if($key=="gianvanhhm"){
			$params=  array($_POST["id_kham"],35,$value,$_SESSION["user"]["id_user"]);
			$store_name="{call GD2_KetQuaCanLamSang_Update (?,?,?,?)}";//tao bien khai bao store
			$data->query( $store_name, $params);
			}else if($key=="builonnhat1"){
			$params=  array($_POST["id_kham"],45,$value,$_SESSION["user"]["id_user"]);
			$store_name="{call GD2_KetQuaCanLamSang_Update (?,?,?,?)}";//tao bien khai bao store
			$data->query( $store_name, $params);
			}else if($key=="buitrixochai"){
			$params=  array($_POST["id_kham"],44,$value,$_SESSION["user"]["id_user"]);
			$store_name="{call GD2_KetQuaCanLamSang_Update (?,?,?,?)}";//tao bien khai bao store
			$data->query( $store_name, $params);
			}
			
		}
		
		
	}
	$chuoi='(?,?,?,?,?,?,?,?)';
	$params=  array($_POST["id_kham"],$_POST["soitructrang"],$_POST["text_chuandoan"],$_POST["ppdieutri1"],$_POST["ghichunoibo"],$_POST["ppdieutri2"],$_POST["dacdiem"],$_SESSION["user"]["id_user"]);
	$store_name="{call GD2_anus_action_luu_dangkham $chuoi}";//tao bien khai bao store
	$data->query( $store_name, $params);
	
}
function luuthuchien(){
$data= new SQLServer;//tao lop ket noi SQL
	
	foreach($_POST as $key => $value) {
		$check='';
		//echo $key."--".$value." <br />";
		if($_POST["daluu"]==0){
			if($key=="tgmacbenh1"){
			$params=  array($_POST["id_kham"],21,$value,$_SESSION["user"]["id_user"],array($check, SQLSRV_PARAM_OUT,SQLSRV_PHPTYPE_INT));
			$store_name="{call GD2_KetQuaCanLamSang_Insert (?,?,?,?,?)}";//tao bien khai bao store
			$data->query( $store_name, $params);
			}else if($key=="tieuduong"){
			$params=  array($_POST["id_kham"],26,$value,$_SESSION["user"]["id_user"],array($check, SQLSRV_PARAM_OUT,SQLSRV_PHPTYPE_INT));
			$store_name="{call GD2_KetQuaCanLamSang_Insert (?,?,?,?,?)}";//tao bien khai bao store
			$data->query( $store_name, $params);
			}else if($key=="phanmau"){
			$params=  array($_POST["id_kham"],29,$value,$_SESSION["user"]["id_user"],array($check, SQLSRV_PARAM_OUT,SQLSRV_PHPTYPE_INT));
			$store_name="{call GD2_KetQuaCanLamSang_Insert (?,?,?,?,?)}";//tao bien khai bao store
			$data->query( $store_name, $params);
			}else if($key=="cohoitot"){
			$params=  array($_POST["id_kham"],36,$value,$_SESSION["user"]["id_user"],array($check, SQLSRV_PARAM_OUT,SQLSRV_PHPTYPE_INT));
			$store_name="{call GD2_KetQuaCanLamSang_Insert (?,?,?,?,?)}";//tao bien khai bao store
			$data->query( $store_name, $params);
			}else if($key=="buitriloi"){
			$params=  array($_POST["id_kham"],40,$value,$_SESSION["user"]["id_user"],array($check, SQLSRV_PARAM_OUT,SQLSRV_PHPTYPE_INT));
			$store_name="{call GD2_KetQuaCanLamSang_Insert (?,?,?,?,?)}";//tao bien khai bao store
			$data->query( $store_name, $params);
			}else if($key=="solandieutri1"){
			$params=  array($_POST["id_kham"],22,$value,$_SESSION["user"]["id_user"],array($check, SQLSRV_PARAM_OUT,SQLSRV_PHPTYPE_INT));
			$store_name="{call GD2_KetQuaCanLamSang_Insert (?,?,?,?,?)}";//tao bien khai bao store
			$data->query( $store_name, $params);
			}else if($key=="benhtimmach"){
			$params=  array($_POST["id_kham"],27,$value,$_SESSION["user"]["id_user"],array($check, SQLSRV_PARAM_OUT,SQLSRV_PHPTYPE_INT));
			$store_name="{call GD2_KetQuaCanLamSang_Insert (?,?,?,?,?)}";//tao bien khai bao store
			$data->query( $store_name, $params);
			}else if($key=="nuthaumon"){
			$params=  array($_POST["id_kham"],32,$value,$_SESSION["user"]["id_user"],array($check, SQLSRV_PARAM_OUT,SQLSRV_PHPTYPE_INT));
			$store_name="{call GD2_KetQuaCanLamSang_Insert (?,?,?,?,?)}";//tao bien khai bao store
			$data->query( $store_name, $params);
			}else if($key=="niemmacmem"){
			$params=  array($_POST["id_kham"],37,$value,$_SESSION["user"]["id_user"],array($check, SQLSRV_PARAM_OUT,SQLSRV_PHPTYPE_INT));
			$store_name="{call GD2_KetQuaCanLamSang_Insert (?,?,?,?,?)}";//tao bien khai bao store
			$data->query( $store_name, $params);
			}else if($key=="phaidaylen"){
			$params=  array($_POST["id_kham"],41,$value,$_SESSION["user"]["id_user"],array($check, SQLSRV_PARAM_OUT,SQLSRV_PHPTYPE_INT));
			$store_name="{call GD2_KetQuaCanLamSang_Insert (?,?,?,?,?)}";//tao bien khai bao store
			$data->query( $store_name, $params);
			}else if($key=="ppdieutricu1"){
			$params=  array($_POST["id_kham"],23,$value,$_SESSION["user"]["id_user"],array($check, SQLSRV_PARAM_OUT,SQLSRV_PHPTYPE_INT));
			$store_name="{call GD2_KetQuaCanLamSang_Insert (?,?,?,?,?)}";//tao bien khai bao store
			$data->query( $store_name, $params);
			}else if($key=="taobon"){
			$params=  array($_POST["id_kham"],28,$value,$_SESSION["user"]["id_user"],array($check, SQLSRV_PARAM_OUT,SQLSRV_PHPTYPE_INT));
			$store_name="{call GD2_KetQuaCanLamSang_Insert (?,?,?,?,?)}";//tao bien khai bao store
			$data->query( $store_name, $params);
			}else if($key=="polyp"){
			$params=  array($_POST["id_kham"],33,$value,$_SESSION["user"]["id_user"],array($check, SQLSRV_PARAM_OUT,SQLSRV_PHPTYPE_INT));
			$store_name="{call GD2_KetQuaCanLamSang_Insert (?,?,?,?,?)}";//tao bien khai bao store
			$data->query( $store_name, $params);
			}else if($key=="sobuitri1"){
			$params=  array($_POST["id_kham"],38,$value,$_SESSION["user"]["id_user"],array($check, SQLSRV_PARAM_OUT,SQLSRV_PHPTYPE_INT));
			$store_name="{call GD2_KetQuaCanLamSang_Insert (?,?,?,?,?)}";//tao bien khai bao store
			$data->query( $store_name, $params);
			}else if($key=="buitrixuathuyet"){
			$params=  array($_POST["id_kham"],42,$value,$_SESSION["user"]["id_user"],array($check, SQLSRV_PARAM_OUT,SQLSRV_PHPTYPE_INT));
			$store_name="{call GD2_KetQuaCanLamSang_Insert (?,?,?,?,?)}";//tao bien khai bao store
			$data->query( $store_name, $params);
			}else if($key=="huyetapcao"){
			$params=  array($_POST["id_kham"],24,$value,$_SESSION["user"]["id_user"],array($check, SQLSRV_PARAM_OUT,SQLSRV_PHPTYPE_INT));
			$store_name="{call GD2_KetQuaCanLamSang_Insert (?,?,?,?,?)}";//tao bien khai bao store
			$data->query( $store_name, $params);
			}else if($key=="dau"){
			$params=  array($_POST["id_kham"],30,$value,$_SESSION["user"]["id_user"],array($check, SQLSRV_PARAM_OUT,SQLSRV_PHPTYPE_INT));
			$store_name="{call GD2_KetQuaCanLamSang_Insert (?,?,?,?,?)}";//tao bien khai bao store
			$data->query( $store_name, $params);
			}else if($key=="nhugaihm"){
			$params=  array($_POST["id_kham"],34,$value,$_SESSION["user"]["id_user"],array($check, SQLSRV_PARAM_OUT,SQLSRV_PHPTYPE_INT));
			$store_name="{call GD2_KetQuaCanLamSang_Insert (?,?,?,?,?)}";//tao bien khai bao store
			$data->query( $store_name, $params);
			}else if($key=="vitribuitri"){
			$params=  array($_POST["id_kham"],39,$value,$_SESSION["user"]["id_user"],array($check, SQLSRV_PARAM_OUT,SQLSRV_PHPTYPE_INT));
			$store_name="{call GD2_KetQuaCanLamSang_Insert (?,?,?,?,?)}";//tao bien khai bao store
			$data->query( $store_name, $params);
			}else if($key=="buitriviem"){
			$params=  array($_POST["id_kham"],43,$value,$_SESSION["user"]["id_user"],array($check, SQLSRV_PARAM_OUT,SQLSRV_PHPTYPE_INT));
			$store_name="{call GD2_KetQuaCanLamSang_Insert (?,?,?,?,?)}";//tao bien khai bao store
			$data->query( $store_name, $params);
			}else if($key=="huyetapthap"){
			$params=  array($_POST["id_kham"],25,$value,$_SESSION["user"]["id_user"],array($check, SQLSRV_PARAM_OUT,SQLSRV_PHPTYPE_INT));
			$store_name="{call GD2_KetQuaCanLamSang_Insert (?,?,?,?,?)}";//tao bien khai bao store
			$data->query( $store_name, $params);
			}else if($key=="daitieuduong"){
			$params=  array($_POST["id_kham"],31,$value,$_SESSION["user"]["id_user"],array($check, SQLSRV_PARAM_OUT,SQLSRV_PHPTYPE_INT));
			$store_name="{call GD2_KetQuaCanLamSang_Insert (?,?,?,?,?)}";//tao bien khai bao store
			$data->query( $store_name, $params);
			}else if($key=="gianvanhhm"){
			$params=  array($_POST["id_kham"],35,$value,$_SESSION["user"]["id_user"],array($check, SQLSRV_PARAM_OUT,SQLSRV_PHPTYPE_INT));
			$store_name="{call GD2_KetQuaCanLamSang_Insert (?,?,?,?,?)}";//tao bien khai bao store
			$data->query( $store_name, $params);
			}else if($key=="builonnhat1"){
			$params=  array($_POST["id_kham"],45,$value,$_SESSION["user"]["id_user"],array($check, SQLSRV_PARAM_OUT,SQLSRV_PHPTYPE_INT));
			$store_name="{call GD2_KetQuaCanLamSang_Insert (?,?,?,?,?)}";//tao bien khai bao store
			$data->query( $store_name, $params);
			}else if($key=="buitrixochai"){
			$params=  array($_POST["id_kham"],44,$value,$_SESSION["user"]["id_user"],array($check, SQLSRV_PARAM_OUT,SQLSRV_PHPTYPE_INT));
			$store_name="{call GD2_KetQuaCanLamSang_Insert (?,?,?,?,?)}";//tao bien khai bao store
			$data->query( $store_name, $params);
			}
		}else{
			if($key=="tgmacbenh1"){
			$params=  array($_POST["id_kham"],21,$value,$_SESSION["user"]["id_user"]);
			$store_name="{call GD2_KetQuaCanLamSang_Update (?,?,?,?)}";//tao bien khai bao store
			$data->query( $store_name, $params);
			}else if($key=="tieuduong"){
			$params=  array($_POST["id_kham"],26,$value,$_SESSION["user"]["id_user"]);
			$store_name="{call GD2_KetQuaCanLamSang_Update (?,?,?,?)}";//tao bien khai bao store
			$data->query( $store_name, $params);
			}else if($key=="phanmau"){
			$params=  array($_POST["id_kham"],29,$value,$_SESSION["user"]["id_user"]);
			$store_name="{call GD2_KetQuaCanLamSang_Update (?,?,?,?)}";//tao bien khai bao store
			$data->query( $store_name, $params);
			}else if($key=="cohoitot"){
			$params=  array($_POST["id_kham"],36,$value,$_SESSION["user"]["id_user"]);
			$store_name="{call GD2_KetQuaCanLamSang_Update (?,?,?,?)}";//tao bien khai bao store
			$data->query( $store_name, $params);
			}else if($key=="buitriloi"){
			$params=  array($_POST["id_kham"],40,$value,$_SESSION["user"]["id_user"]);
			$store_name="{call GD2_KetQuaCanLamSang_Update (?,?,?,?)}";//tao bien khai bao store
			$data->query( $store_name, $params);
			}else if($key=="solandieutri1"){
			$params=  array($_POST["id_kham"],22,$value,$_SESSION["user"]["id_user"]);
			$store_name="{call GD2_KetQuaCanLamSang_Update (?,?,?,?)}";//tao bien khai bao store
			$data->query( $store_name, $params);
			}else if($key=="benhtimmach"){
			$params=  array($_POST["id_kham"],27,$value,$_SESSION["user"]["id_user"]);
			$store_name="{call GD2_KetQuaCanLamSang_Update (?,?,?,?)}";//tao bien khai bao store
			$data->query( $store_name, $params);
			}else if($key=="nuthaumon"){
			$params=  array($_POST["id_kham"],32,$value,$_SESSION["user"]["id_user"]);
			$store_name="{call GD2_KetQuaCanLamSang_Update (?,?,?,?)}";//tao bien khai bao store
			$data->query( $store_name, $params);
			}else if($key=="niemmacmem"){
			$params=  array($_POST["id_kham"],37,$value,$_SESSION["user"]["id_user"]);
			$store_name="{call GD2_KetQuaCanLamSang_Update (?,?,?,?)}";//tao bien khai bao store
			$data->query( $store_name, $params);
			}else if($key=="phaidaylen"){
			$params=  array($_POST["id_kham"],41,$value,$_SESSION["user"]["id_user"]);
			$store_name="{call GD2_KetQuaCanLamSang_Update (?,?,?,?)}";//tao bien khai bao store
			$data->query( $store_name, $params);
			}else if($key=="ppdieutricu1"){
			$params=  array($_POST["id_kham"],23,$value,$_SESSION["user"]["id_user"]);
			$store_name="{call GD2_KetQuaCanLamSang_Update (?,?,?,?)}";//tao bien khai bao store
			$data->query( $store_name, $params);
			}else if($key=="taobon"){
			$params=  array($_POST["id_kham"],28,$value,$_SESSION["user"]["id_user"]);
			$store_name="{call GD2_KetQuaCanLamSang_Update (?,?,?,?)}";//tao bien khai bao store
			$data->query( $store_name, $params);
			}else if($key=="polyp"){
			$params=  array($_POST["id_kham"],33,$value,$_SESSION["user"]["id_user"]);
			$store_name="{call GD2_KetQuaCanLamSang_Update (?,?,?,?)}";//tao bien khai bao store
			$data->query( $store_name, $params);
			}else if($key=="sobuitri1"){
			$params=  array($_POST["id_kham"],38,$value,$_SESSION["user"]["id_user"]);
			$store_name="{call GD2_KetQuaCanLamSang_Update (?,?,?,?)}";//tao bien khai bao store
			$data->query( $store_name, $params);
			}else if($key=="buitrixuathuyet"){
			$params=  array($_POST["id_kham"],42,$value,$_SESSION["user"]["id_user"]);
			$store_name="{call GD2_KetQuaCanLamSang_Update (?,?,?,?)}";//tao bien khai bao store
			$data->query( $store_name, $params);
			}else if($key=="huyetapcao"){
			$params=  array($_POST["id_kham"],24,$value,$_SESSION["user"]["id_user"]);
			$store_name="{call GD2_KetQuaCanLamSang_Update (?,?,?,?)}";//tao bien khai bao store
			$data->query( $store_name, $params);
			}else if($key=="dau"){
			$params=  array($_POST["id_kham"],30,$value,$_SESSION["user"]["id_user"]);
			$store_name="{call GD2_KetQuaCanLamSang_Update (?,?,?,?)}";//tao bien khai bao store
			$data->query( $store_name, $params);
			}else if($key=="nhugaihm"){
			$params=  array($_POST["id_kham"],34,$value,$_SESSION["user"]["id_user"]);
			$store_name="{call GD2_KetQuaCanLamSang_Update (?,?,?,?)}";//tao bien khai bao store
			$data->query( $store_name, $params);
			}else if($key=="vitribuitri"){
			$params=  array($_POST["id_kham"],39,$value,$_SESSION["user"]["id_user"]);
			$store_name="{call GD2_KetQuaCanLamSang_Update (?,?,?,?)}";//tao bien khai bao store
			$data->query( $store_name, $params);
			}else if($key=="buitriviem"){
			$params=  array($_POST["id_kham"],43,$value,$_SESSION["user"]["id_user"]);
			$store_name="{call GD2_KetQuaCanLamSang_Update (?,?,?,?)}";//tao bien khai bao store
			$data->query( $store_name, $params);
			}else if($key=="huyetapthap"){
			$params=  array($_POST["id_kham"],25,$value,$_SESSION["user"]["id_user"]);
			$store_name="{call GD2_KetQuaCanLamSang_Update (?,?,?,?)}";//tao bien khai bao store
			$data->query( $store_name, $params);
			}else if($key=="daitieuduong"){
			$params=  array($_POST["id_kham"],31,$value,$_SESSION["user"]["id_user"]);
			$store_name="{call GD2_KetQuaCanLamSang_Update (?,?,?,?)}";//tao bien khai bao store
			$data->query( $store_name, $params);
			}else if($key=="gianvanhhm"){
			$params=  array($_POST["id_kham"],35,$value,$_SESSION["user"]["id_user"]);
			$store_name="{call GD2_KetQuaCanLamSang_Update (?,?,?,?)}";//tao bien khai bao store
			$data->query( $store_name, $params);
			}else if($key=="builonnhat1"){
			$params=  array($_POST["id_kham"],45,$value,$_SESSION["user"]["id_user"]);
			$store_name="{call GD2_KetQuaCanLamSang_Update (?,?,?,?)}";//tao bien khai bao store
			$data->query( $store_name, $params);
			}else if($key=="buitrixochai"){
			$params=  array($_POST["id_kham"],44,$value,$_SESSION["user"]["id_user"]);
			$store_name="{call GD2_KetQuaCanLamSang_Update (?,?,?,?)}";//tao bien khai bao store
			$data->query( $store_name, $params);
			}
			
		}
		
		
	}
	$chuoi='(?,?,?,?,?,?,?,?,?)';
	$params=  array($_POST["id_kham"],$_POST["nguoithuchien"],$_POST["soitructrang"],$_POST["text_chuandoan"],$_POST["ppdieutri1"],$_POST["ghichunoibo"],$_POST["ppdieutri2"],$_POST["dacdiem"],$_SESSION["user"]["id_user"]);
	$store_name="{call GD2_anus_action_luu_dathuchien $chuoi}";//tao bien khai bao store
	$data->query( $store_name, $params);
}
function hoantat(){
	$data= new SQLServer;//tao lop ket noi SQL
	
	foreach($_POST as $key => $value) {
		$check='';
		//echo $key."--".$value." <br />";
		if($_POST["daluu"]==0){
			if($key=="tgmacbenh1"){
			$params=  array($_POST["id_kham"],21,$value,$_SESSION["user"]["id_user"],array($check, SQLSRV_PARAM_OUT,SQLSRV_PHPTYPE_INT));
			$store_name="{call GD2_KetQuaCanLamSang_Insert (?,?,?,?,?)}";//tao bien khai bao store
			$data->query( $store_name, $params);
			}else if($key=="tieuduong"){
			$params=  array($_POST["id_kham"],26,$value,$_SESSION["user"]["id_user"],array($check, SQLSRV_PARAM_OUT,SQLSRV_PHPTYPE_INT));
			$store_name="{call GD2_KetQuaCanLamSang_Insert (?,?,?,?,?)}";//tao bien khai bao store
			$data->query( $store_name, $params);
			}else if($key=="phanmau"){
			$params=  array($_POST["id_kham"],29,$value,$_SESSION["user"]["id_user"],array($check, SQLSRV_PARAM_OUT,SQLSRV_PHPTYPE_INT));
			$store_name="{call GD2_KetQuaCanLamSang_Insert (?,?,?,?,?)}";//tao bien khai bao store
			$data->query( $store_name, $params);
			}else if($key=="cohoitot"){
			$params=  array($_POST["id_kham"],36,$value,$_SESSION["user"]["id_user"],array($check, SQLSRV_PARAM_OUT,SQLSRV_PHPTYPE_INT));
			$store_name="{call GD2_KetQuaCanLamSang_Insert (?,?,?,?,?)}";//tao bien khai bao store
			$data->query( $store_name, $params);
			}else if($key=="buitriloi"){
			$params=  array($_POST["id_kham"],40,$value,$_SESSION["user"]["id_user"],array($check, SQLSRV_PARAM_OUT,SQLSRV_PHPTYPE_INT));
			$store_name="{call GD2_KetQuaCanLamSang_Insert (?,?,?,?,?)}";//tao bien khai bao store
			$data->query( $store_name, $params);
			}else if($key=="solandieutri1"){
			$params=  array($_POST["id_kham"],22,$value,$_SESSION["user"]["id_user"],array($check, SQLSRV_PARAM_OUT,SQLSRV_PHPTYPE_INT));
			$store_name="{call GD2_KetQuaCanLamSang_Insert (?,?,?,?,?)}";//tao bien khai bao store
			$data->query( $store_name, $params);
			}else if($key=="benhtimmach"){
			$params=  array($_POST["id_kham"],27,$value,$_SESSION["user"]["id_user"],array($check, SQLSRV_PARAM_OUT,SQLSRV_PHPTYPE_INT));
			$store_name="{call GD2_KetQuaCanLamSang_Insert (?,?,?,?,?)}";//tao bien khai bao store
			$data->query( $store_name, $params);
			}else if($key=="nuthaumon"){
			$params=  array($_POST["id_kham"],32,$value,$_SESSION["user"]["id_user"],array($check, SQLSRV_PARAM_OUT,SQLSRV_PHPTYPE_INT));
			$store_name="{call GD2_KetQuaCanLamSang_Insert (?,?,?,?,?)}";//tao bien khai bao store
			$data->query( $store_name, $params);
			}else if($key=="niemmacmem"){
			$params=  array($_POST["id_kham"],37,$value,$_SESSION["user"]["id_user"],array($check, SQLSRV_PARAM_OUT,SQLSRV_PHPTYPE_INT));
			$store_name="{call GD2_KetQuaCanLamSang_Insert (?,?,?,?,?)}";//tao bien khai bao store
			$data->query( $store_name, $params);
			}else if($key=="phaidaylen"){
			$params=  array($_POST["id_kham"],41,$value,$_SESSION["user"]["id_user"],array($check, SQLSRV_PARAM_OUT,SQLSRV_PHPTYPE_INT));
			$store_name="{call GD2_KetQuaCanLamSang_Insert (?,?,?,?,?)}";//tao bien khai bao store
			$data->query( $store_name, $params);
			}else if($key=="ppdieutricu1"){
			$params=  array($_POST["id_kham"],23,$value,$_SESSION["user"]["id_user"],array($check, SQLSRV_PARAM_OUT,SQLSRV_PHPTYPE_INT));
			$store_name="{call GD2_KetQuaCanLamSang_Insert (?,?,?,?,?)}";//tao bien khai bao store
			$data->query( $store_name, $params);
			}else if($key=="taobon"){
			$params=  array($_POST["id_kham"],28,$value,$_SESSION["user"]["id_user"],array($check, SQLSRV_PARAM_OUT,SQLSRV_PHPTYPE_INT));
			$store_name="{call GD2_KetQuaCanLamSang_Insert (?,?,?,?,?)}";//tao bien khai bao store
			$data->query( $store_name, $params);
			}else if($key=="polyp"){
			$params=  array($_POST["id_kham"],33,$value,$_SESSION["user"]["id_user"],array($check, SQLSRV_PARAM_OUT,SQLSRV_PHPTYPE_INT));
			$store_name="{call GD2_KetQuaCanLamSang_Insert (?,?,?,?,?)}";//tao bien khai bao store
			$data->query( $store_name, $params);
			}else if($key=="sobuitri1"){
			$params=  array($_POST["id_kham"],38,$value,$_SESSION["user"]["id_user"],array($check, SQLSRV_PARAM_OUT,SQLSRV_PHPTYPE_INT));
			$store_name="{call GD2_KetQuaCanLamSang_Insert (?,?,?,?,?)}";//tao bien khai bao store
			$data->query( $store_name, $params);
			}else if($key=="buitrixuathuyet"){
			$params=  array($_POST["id_kham"],42,$value,$_SESSION["user"]["id_user"],array($check, SQLSRV_PARAM_OUT,SQLSRV_PHPTYPE_INT));
			$store_name="{call GD2_KetQuaCanLamSang_Insert (?,?,?,?,?)}";//tao bien khai bao store
			$data->query( $store_name, $params);
			}else if($key=="huyetapcao"){
			$params=  array($_POST["id_kham"],24,$value,$_SESSION["user"]["id_user"],array($check, SQLSRV_PARAM_OUT,SQLSRV_PHPTYPE_INT));
			$store_name="{call GD2_KetQuaCanLamSang_Insert (?,?,?,?,?)}";//tao bien khai bao store
			$data->query( $store_name, $params);
			}else if($key=="dau"){
			$params=  array($_POST["id_kham"],30,$value,$_SESSION["user"]["id_user"],array($check, SQLSRV_PARAM_OUT,SQLSRV_PHPTYPE_INT));
			$store_name="{call GD2_KetQuaCanLamSang_Insert (?,?,?,?,?)}";//tao bien khai bao store
			$data->query( $store_name, $params);
			}else if($key=="nhugaihm"){
			$params=  array($_POST["id_kham"],34,$value,$_SESSION["user"]["id_user"],array($check, SQLSRV_PARAM_OUT,SQLSRV_PHPTYPE_INT));
			$store_name="{call GD2_KetQuaCanLamSang_Insert (?,?,?,?,?)}";//tao bien khai bao store
			$data->query( $store_name, $params);
			}else if($key=="vitribuitri"){
			$params=  array($_POST["id_kham"],39,$value,$_SESSION["user"]["id_user"],array($check, SQLSRV_PARAM_OUT,SQLSRV_PHPTYPE_INT));
			$store_name="{call GD2_KetQuaCanLamSang_Insert (?,?,?,?,?)}";//tao bien khai bao store
			$data->query( $store_name, $params);
			}else if($key=="buitriviem"){
			$params=  array($_POST["id_kham"],43,$value,$_SESSION["user"]["id_user"],array($check, SQLSRV_PARAM_OUT,SQLSRV_PHPTYPE_INT));
			$store_name="{call GD2_KetQuaCanLamSang_Insert (?,?,?,?,?)}";//tao bien khai bao store
			$data->query( $store_name, $params);
			}else if($key=="huyetapthap"){
			$params=  array($_POST["id_kham"],25,$value,$_SESSION["user"]["id_user"],array($check, SQLSRV_PARAM_OUT,SQLSRV_PHPTYPE_INT));
			$store_name="{call GD2_KetQuaCanLamSang_Insert (?,?,?,?,?)}";//tao bien khai bao store
			$data->query( $store_name, $params);
			}else if($key=="daitieuduong"){
			$params=  array($_POST["id_kham"],31,$value,$_SESSION["user"]["id_user"],array($check, SQLSRV_PARAM_OUT,SQLSRV_PHPTYPE_INT));
			$store_name="{call GD2_KetQuaCanLamSang_Insert (?,?,?,?,?)}";//tao bien khai bao store
			$data->query( $store_name, $params);
			}else if($key=="gianvanhhm"){
			$params=  array($_POST["id_kham"],35,$value,$_SESSION["user"]["id_user"],array($check, SQLSRV_PARAM_OUT,SQLSRV_PHPTYPE_INT));
			$store_name="{call GD2_KetQuaCanLamSang_Insert (?,?,?,?,?)}";//tao bien khai bao store
			$data->query( $store_name, $params);
			}else if($key=="builonnhat1"){
			$params=  array($_POST["id_kham"],45,$value,$_SESSION["user"]["id_user"],array($check, SQLSRV_PARAM_OUT,SQLSRV_PHPTYPE_INT));
			$store_name="{call GD2_KetQuaCanLamSang_Insert (?,?,?,?,?)}";//tao bien khai bao store
			$data->query( $store_name, $params);
			}else if($key=="buitrixochai"){
			$params=  array($_POST["id_kham"],44,$value,$_SESSION["user"]["id_user"],array($check, SQLSRV_PARAM_OUT,SQLSRV_PHPTYPE_INT));
			$store_name="{call GD2_KetQuaCanLamSang_Insert (?,?,?,?,?)}";//tao bien khai bao store
			$data->query( $store_name, $params);
			}
		}else{
			if($key=="tgmacbenh1"){
			$params=  array($_POST["id_kham"],21,$value,$_SESSION["user"]["id_user"]);
			$store_name="{call GD2_KetQuaCanLamSang_Update (?,?,?,?)}";//tao bien khai bao store
			$data->query( $store_name, $params);
			}else if($key=="tieuduong"){
			$params=  array($_POST["id_kham"],26,$value,$_SESSION["user"]["id_user"]);
			$store_name="{call GD2_KetQuaCanLamSang_Update (?,?,?,?)}";//tao bien khai bao store
			$data->query( $store_name, $params);
			}else if($key=="phanmau"){
			$params=  array($_POST["id_kham"],29,$value,$_SESSION["user"]["id_user"]);
			$store_name="{call GD2_KetQuaCanLamSang_Update (?,?,?,?)}";//tao bien khai bao store
			$data->query( $store_name, $params);
			}else if($key=="cohoitot"){
			$params=  array($_POST["id_kham"],36,$value,$_SESSION["user"]["id_user"]);
			$store_name="{call GD2_KetQuaCanLamSang_Update (?,?,?,?)}";//tao bien khai bao store
			$data->query( $store_name, $params);
			}else if($key=="buitriloi"){
			$params=  array($_POST["id_kham"],40,$value,$_SESSION["user"]["id_user"]);
			$store_name="{call GD2_KetQuaCanLamSang_Update (?,?,?,?)}";//tao bien khai bao store
			$data->query( $store_name, $params);
			}else if($key=="solandieutri1"){
			$params=  array($_POST["id_kham"],22,$value,$_SESSION["user"]["id_user"]);
			$store_name="{call GD2_KetQuaCanLamSang_Update (?,?,?,?)}";//tao bien khai bao store
			$data->query( $store_name, $params);
			}else if($key=="benhtimmach"){
			$params=  array($_POST["id_kham"],27,$value,$_SESSION["user"]["id_user"]);
			$store_name="{call GD2_KetQuaCanLamSang_Update (?,?,?,?)}";//tao bien khai bao store
			$data->query( $store_name, $params);
			}else if($key=="nuthaumon"){
			$params=  array($_POST["id_kham"],32,$value,$_SESSION["user"]["id_user"]);
			$store_name="{call GD2_KetQuaCanLamSang_Update (?,?,?,?)}";//tao bien khai bao store
			$data->query( $store_name, $params);
			}else if($key=="niemmacmem"){
			$params=  array($_POST["id_kham"],37,$value,$_SESSION["user"]["id_user"]);
			$store_name="{call GD2_KetQuaCanLamSang_Update (?,?,?,?)}";//tao bien khai bao store
			$data->query( $store_name, $params);
			}else if($key=="phaidaylen"){
			$params=  array($_POST["id_kham"],41,$value,$_SESSION["user"]["id_user"]);
			$store_name="{call GD2_KetQuaCanLamSang_Update (?,?,?,?)}";//tao bien khai bao store
			$data->query( $store_name, $params);
			}else if($key=="ppdieutricu1"){
			$params=  array($_POST["id_kham"],23,$value,$_SESSION["user"]["id_user"]);
			$store_name="{call GD2_KetQuaCanLamSang_Update (?,?,?,?)}";//tao bien khai bao store
			$data->query( $store_name, $params);
			}else if($key=="taobon"){
			$params=  array($_POST["id_kham"],28,$value,$_SESSION["user"]["id_user"]);
			$store_name="{call GD2_KetQuaCanLamSang_Update (?,?,?,?)}";//tao bien khai bao store
			$data->query( $store_name, $params);
			}else if($key=="polyp"){
			$params=  array($_POST["id_kham"],33,$value,$_SESSION["user"]["id_user"]);
			$store_name="{call GD2_KetQuaCanLamSang_Update (?,?,?,?)}";//tao bien khai bao store
			$data->query( $store_name, $params);
			}else if($key=="sobuitri1"){
			$params=  array($_POST["id_kham"],38,$value,$_SESSION["user"]["id_user"]);
			$store_name="{call GD2_KetQuaCanLamSang_Update (?,?,?,?)}";//tao bien khai bao store
			$data->query( $store_name, $params);
			}else if($key=="buitrixuathuyet"){
			$params=  array($_POST["id_kham"],42,$value,$_SESSION["user"]["id_user"]);
			$store_name="{call GD2_KetQuaCanLamSang_Update (?,?,?,?)}";//tao bien khai bao store
			$data->query( $store_name, $params);
			}else if($key=="huyetapcao"){
			$params=  array($_POST["id_kham"],24,$value,$_SESSION["user"]["id_user"]);
			$store_name="{call GD2_KetQuaCanLamSang_Update (?,?,?,?)}";//tao bien khai bao store
			$data->query( $store_name, $params);
			}else if($key=="dau"){
			$params=  array($_POST["id_kham"],30,$value,$_SESSION["user"]["id_user"]);
			$store_name="{call GD2_KetQuaCanLamSang_Update (?,?,?,?)}";//tao bien khai bao store
			$data->query( $store_name, $params);
			}else if($key=="nhugaihm"){
			$params=  array($_POST["id_kham"],34,$value,$_SESSION["user"]["id_user"]);
			$store_name="{call GD2_KetQuaCanLamSang_Update (?,?,?,?)}";//tao bien khai bao store
			$data->query( $store_name, $params);
			}else if($key=="vitribuitri"){
			$params=  array($_POST["id_kham"],39,$value,$_SESSION["user"]["id_user"]);
			$store_name="{call GD2_KetQuaCanLamSang_Update (?,?,?,?)}";//tao bien khai bao store
			$data->query( $store_name, $params);
			}else if($key=="buitriviem"){
			$params=  array($_POST["id_kham"],43,$value,$_SESSION["user"]["id_user"]);
			$store_name="{call GD2_KetQuaCanLamSang_Update (?,?,?,?)}";//tao bien khai bao store
			$data->query( $store_name, $params);
			}else if($key=="huyetapthap"){
			$params=  array($_POST["id_kham"],25,$value,$_SESSION["user"]["id_user"]);
			$store_name="{call GD2_KetQuaCanLamSang_Update (?,?,?,?)}";//tao bien khai bao store
			$data->query( $store_name, $params);
			}else if($key=="daitieuduong"){
			$params=  array($_POST["id_kham"],31,$value,$_SESSION["user"]["id_user"]);
			$store_name="{call GD2_KetQuaCanLamSang_Update (?,?,?,?)}";//tao bien khai bao store
			$data->query( $store_name, $params);
			}else if($key=="gianvanhhm"){
			$params=  array($_POST["id_kham"],35,$value,$_SESSION["user"]["id_user"]);
			$store_name="{call GD2_KetQuaCanLamSang_Update (?,?,?,?)}";//tao bien khai bao store
			$data->query( $store_name, $params);
			}else if($key=="builonnhat1"){
			$params=  array($_POST["id_kham"],45,$value,$_SESSION["user"]["id_user"]);
			$store_name="{call GD2_KetQuaCanLamSang_Update (?,?,?,?)}";//tao bien khai bao store
			$data->query( $store_name, $params);
			}else if($key=="buitrixochai"){
			$params=  array($_POST["id_kham"],44,$value,$_SESSION["user"]["id_user"]);
			$store_name="{call GD2_KetQuaCanLamSang_Update (?,?,?,?)}";//tao bien khai bao store
			$data->query( $store_name, $params);
			}
			
		}
		
		
	}
	$chuoi='(?,?,?,?,?,?,?,?,?)';
	$params=  array($_POST["id_kham"],$_POST["chuandoan1"],$_POST["soitructrang"],$_POST["text_chuandoan"],$_POST["ppdieutri1"],$_POST["ghichunoibo"],$_POST["ppdieutri2"],$_POST["dacdiem"],$_SESSION["user"]["id_user"]);
	$store_name="{call GD2_anus_action_hoantat $chuoi}";//tao bien khai bao store
	$data->query( $store_name, $params);
}
function luuhoantat(){
$data= new SQLServer;//tao lop ket noi SQL
	
	foreach($_POST as $key => $value) {
		$check='';
		//echo $key."--".$value." <br />";
		if($_POST["daluu"]==0){
			if($key=="tgmacbenh1"){
			$params=  array($_POST["id_kham"],21,$value,$_SESSION["user"]["id_user"],array($check, SQLSRV_PARAM_OUT,SQLSRV_PHPTYPE_INT));
			$store_name="{call GD2_KetQuaCanLamSang_Insert (?,?,?,?,?)}";//tao bien khai bao store
			$data->query( $store_name, $params);
			}else if($key=="tieuduong"){
			$params=  array($_POST["id_kham"],26,$value,$_SESSION["user"]["id_user"],array($check, SQLSRV_PARAM_OUT,SQLSRV_PHPTYPE_INT));
			$store_name="{call GD2_KetQuaCanLamSang_Insert (?,?,?,?,?)}";//tao bien khai bao store
			$data->query( $store_name, $params);
			}else if($key=="phanmau"){
			$params=  array($_POST["id_kham"],29,$value,$_SESSION["user"]["id_user"],array($check, SQLSRV_PARAM_OUT,SQLSRV_PHPTYPE_INT));
			$store_name="{call GD2_KetQuaCanLamSang_Insert (?,?,?,?,?)}";//tao bien khai bao store
			$data->query( $store_name, $params);
			}else if($key=="cohoitot"){
			$params=  array($_POST["id_kham"],36,$value,$_SESSION["user"]["id_user"],array($check, SQLSRV_PARAM_OUT,SQLSRV_PHPTYPE_INT));
			$store_name="{call GD2_KetQuaCanLamSang_Insert (?,?,?,?,?)}";//tao bien khai bao store
			$data->query( $store_name, $params);
			}else if($key=="buitriloi"){
			$params=  array($_POST["id_kham"],40,$value,$_SESSION["user"]["id_user"],array($check, SQLSRV_PARAM_OUT,SQLSRV_PHPTYPE_INT));
			$store_name="{call GD2_KetQuaCanLamSang_Insert (?,?,?,?,?)}";//tao bien khai bao store
			$data->query( $store_name, $params);
			}else if($key=="solandieutri1"){
			$params=  array($_POST["id_kham"],22,$value,$_SESSION["user"]["id_user"],array($check, SQLSRV_PARAM_OUT,SQLSRV_PHPTYPE_INT));
			$store_name="{call GD2_KetQuaCanLamSang_Insert (?,?,?,?,?)}";//tao bien khai bao store
			$data->query( $store_name, $params);
			}else if($key=="benhtimmach"){
			$params=  array($_POST["id_kham"],27,$value,$_SESSION["user"]["id_user"],array($check, SQLSRV_PARAM_OUT,SQLSRV_PHPTYPE_INT));
			$store_name="{call GD2_KetQuaCanLamSang_Insert (?,?,?,?,?)}";//tao bien khai bao store
			$data->query( $store_name, $params);
			}else if($key=="nuthaumon"){
			$params=  array($_POST["id_kham"],32,$value,$_SESSION["user"]["id_user"],array($check, SQLSRV_PARAM_OUT,SQLSRV_PHPTYPE_INT));
			$store_name="{call GD2_KetQuaCanLamSang_Insert (?,?,?,?,?)}";//tao bien khai bao store
			$data->query( $store_name, $params);
			}else if($key=="niemmacmem"){
			$params=  array($_POST["id_kham"],37,$value,$_SESSION["user"]["id_user"],array($check, SQLSRV_PARAM_OUT,SQLSRV_PHPTYPE_INT));
			$store_name="{call GD2_KetQuaCanLamSang_Insert (?,?,?,?,?)}";//tao bien khai bao store
			$data->query( $store_name, $params);
			}else if($key=="phaidaylen"){
			$params=  array($_POST["id_kham"],41,$value,$_SESSION["user"]["id_user"],array($check, SQLSRV_PARAM_OUT,SQLSRV_PHPTYPE_INT));
			$store_name="{call GD2_KetQuaCanLamSang_Insert (?,?,?,?,?)}";//tao bien khai bao store
			$data->query( $store_name, $params);
			}else if($key=="ppdieutricu1"){
			$params=  array($_POST["id_kham"],23,$value,$_SESSION["user"]["id_user"],array($check, SQLSRV_PARAM_OUT,SQLSRV_PHPTYPE_INT));
			$store_name="{call GD2_KetQuaCanLamSang_Insert (?,?,?,?,?)}";//tao bien khai bao store
			$data->query( $store_name, $params);
			}else if($key=="taobon"){
			$params=  array($_POST["id_kham"],28,$value,$_SESSION["user"]["id_user"],array($check, SQLSRV_PARAM_OUT,SQLSRV_PHPTYPE_INT));
			$store_name="{call GD2_KetQuaCanLamSang_Insert (?,?,?,?,?)}";//tao bien khai bao store
			$data->query( $store_name, $params);
			}else if($key=="polyp"){
			$params=  array($_POST["id_kham"],33,$value,$_SESSION["user"]["id_user"],array($check, SQLSRV_PARAM_OUT,SQLSRV_PHPTYPE_INT));
			$store_name="{call GD2_KetQuaCanLamSang_Insert (?,?,?,?,?)}";//tao bien khai bao store
			$data->query( $store_name, $params);
			}else if($key=="sobuitri1"){
			$params=  array($_POST["id_kham"],38,$value,$_SESSION["user"]["id_user"],array($check, SQLSRV_PARAM_OUT,SQLSRV_PHPTYPE_INT));
			$store_name="{call GD2_KetQuaCanLamSang_Insert (?,?,?,?,?)}";//tao bien khai bao store
			$data->query( $store_name, $params);
			}else if($key=="buitrixuathuyet"){
			$params=  array($_POST["id_kham"],42,$value,$_SESSION["user"]["id_user"],array($check, SQLSRV_PARAM_OUT,SQLSRV_PHPTYPE_INT));
			$store_name="{call GD2_KetQuaCanLamSang_Insert (?,?,?,?,?)}";//tao bien khai bao store
			$data->query( $store_name, $params);
			}else if($key=="huyetapcao"){
			$params=  array($_POST["id_kham"],24,$value,$_SESSION["user"]["id_user"],array($check, SQLSRV_PARAM_OUT,SQLSRV_PHPTYPE_INT));
			$store_name="{call GD2_KetQuaCanLamSang_Insert (?,?,?,?,?)}";//tao bien khai bao store
			$data->query( $store_name, $params);
			}else if($key=="dau"){
			$params=  array($_POST["id_kham"],30,$value,$_SESSION["user"]["id_user"],array($check, SQLSRV_PARAM_OUT,SQLSRV_PHPTYPE_INT));
			$store_name="{call GD2_KetQuaCanLamSang_Insert (?,?,?,?,?)}";//tao bien khai bao store
			$data->query( $store_name, $params);
			}else if($key=="nhugaihm"){
			$params=  array($_POST["id_kham"],34,$value,$_SESSION["user"]["id_user"],array($check, SQLSRV_PARAM_OUT,SQLSRV_PHPTYPE_INT));
			$store_name="{call GD2_KetQuaCanLamSang_Insert (?,?,?,?,?)}";//tao bien khai bao store
			$data->query( $store_name, $params);
			}else if($key=="vitribuitri"){
			$params=  array($_POST["id_kham"],39,$value,$_SESSION["user"]["id_user"],array($check, SQLSRV_PARAM_OUT,SQLSRV_PHPTYPE_INT));
			$store_name="{call GD2_KetQuaCanLamSang_Insert (?,?,?,?,?)}";//tao bien khai bao store
			$data->query( $store_name, $params);
			}else if($key=="buitriviem"){
			$params=  array($_POST["id_kham"],43,$value,$_SESSION["user"]["id_user"],array($check, SQLSRV_PARAM_OUT,SQLSRV_PHPTYPE_INT));
			$store_name="{call GD2_KetQuaCanLamSang_Insert (?,?,?,?,?)}";//tao bien khai bao store
			$data->query( $store_name, $params);
			}else if($key=="huyetapthap"){
			$params=  array($_POST["id_kham"],25,$value,$_SESSION["user"]["id_user"],array($check, SQLSRV_PARAM_OUT,SQLSRV_PHPTYPE_INT));
			$store_name="{call GD2_KetQuaCanLamSang_Insert (?,?,?,?,?)}";//tao bien khai bao store
			$data->query( $store_name, $params);
			}else if($key=="daitieuduong"){
			$params=  array($_POST["id_kham"],31,$value,$_SESSION["user"]["id_user"],array($check, SQLSRV_PARAM_OUT,SQLSRV_PHPTYPE_INT));
			$store_name="{call GD2_KetQuaCanLamSang_Insert (?,?,?,?,?)}";//tao bien khai bao store
			$data->query( $store_name, $params);
			}else if($key=="gianvanhhm"){
			$params=  array($_POST["id_kham"],35,$value,$_SESSION["user"]["id_user"],array($check, SQLSRV_PARAM_OUT,SQLSRV_PHPTYPE_INT));
			$store_name="{call GD2_KetQuaCanLamSang_Insert (?,?,?,?,?)}";//tao bien khai bao store
			$data->query( $store_name, $params);
			}else if($key=="builonnhat1"){
			$params=  array($_POST["id_kham"],45,$value,$_SESSION["user"]["id_user"],array($check, SQLSRV_PARAM_OUT,SQLSRV_PHPTYPE_INT));
			$store_name="{call GD2_KetQuaCanLamSang_Insert (?,?,?,?,?)}";//tao bien khai bao store
			$data->query( $store_name, $params);
			}else if($key=="buitrixochai"){
			$params=  array($_POST["id_kham"],44,$value,$_SESSION["user"]["id_user"],array($check, SQLSRV_PARAM_OUT,SQLSRV_PHPTYPE_INT));
			$store_name="{call GD2_KetQuaCanLamSang_Insert (?,?,?,?,?)}";//tao bien khai bao store
			$data->query( $store_name, $params);
			}
		}else{
			if($key=="tgmacbenh1"){
			$params=  array($_POST["id_kham"],21,$value,$_SESSION["user"]["id_user"]);
			$store_name="{call GD2_KetQuaCanLamSang_Update (?,?,?,?)}";//tao bien khai bao store
			$data->query( $store_name, $params);
			}else if($key=="tieuduong"){
			$params=  array($_POST["id_kham"],26,$value,$_SESSION["user"]["id_user"]);
			$store_name="{call GD2_KetQuaCanLamSang_Update (?,?,?,?)}";//tao bien khai bao store
			$data->query( $store_name, $params);
			}else if($key=="phanmau"){
			$params=  array($_POST["id_kham"],29,$value,$_SESSION["user"]["id_user"]);
			$store_name="{call GD2_KetQuaCanLamSang_Update (?,?,?,?)}";//tao bien khai bao store
			$data->query( $store_name, $params);
			}else if($key=="cohoitot"){
			$params=  array($_POST["id_kham"],36,$value,$_SESSION["user"]["id_user"]);
			$store_name="{call GD2_KetQuaCanLamSang_Update (?,?,?,?)}";//tao bien khai bao store
			$data->query( $store_name, $params);
			}else if($key=="buitriloi"){
			$params=  array($_POST["id_kham"],40,$value,$_SESSION["user"]["id_user"]);
			$store_name="{call GD2_KetQuaCanLamSang_Update (?,?,?,?)}";//tao bien khai bao store
			$data->query( $store_name, $params);
			}else if($key=="solandieutri1"){
			$params=  array($_POST["id_kham"],22,$value,$_SESSION["user"]["id_user"]);
			$store_name="{call GD2_KetQuaCanLamSang_Update (?,?,?,?)}";//tao bien khai bao store
			$data->query( $store_name, $params);
			}else if($key=="benhtimmach"){
			$params=  array($_POST["id_kham"],27,$value,$_SESSION["user"]["id_user"]);
			$store_name="{call GD2_KetQuaCanLamSang_Update (?,?,?,?)}";//tao bien khai bao store
			$data->query( $store_name, $params);
			}else if($key=="nuthaumon"){
			$params=  array($_POST["id_kham"],32,$value,$_SESSION["user"]["id_user"]);
			$store_name="{call GD2_KetQuaCanLamSang_Update (?,?,?,?)}";//tao bien khai bao store
			$data->query( $store_name, $params);
			}else if($key=="niemmacmem"){
			$params=  array($_POST["id_kham"],37,$value,$_SESSION["user"]["id_user"]);
			$store_name="{call GD2_KetQuaCanLamSang_Update (?,?,?,?)}";//tao bien khai bao store
			$data->query( $store_name, $params);
			}else if($key=="phaidaylen"){
			$params=  array($_POST["id_kham"],41,$value,$_SESSION["user"]["id_user"]);
			$store_name="{call GD2_KetQuaCanLamSang_Update (?,?,?,?)}";//tao bien khai bao store
			$data->query( $store_name, $params);
			}else if($key=="ppdieutricu1"){
			$params=  array($_POST["id_kham"],23,$value,$_SESSION["user"]["id_user"]);
			$store_name="{call GD2_KetQuaCanLamSang_Update (?,?,?,?)}";//tao bien khai bao store
			$data->query( $store_name, $params);
			}else if($key=="taobon"){
			$params=  array($_POST["id_kham"],28,$value,$_SESSION["user"]["id_user"]);
			$store_name="{call GD2_KetQuaCanLamSang_Update (?,?,?,?)}";//tao bien khai bao store
			$data->query( $store_name, $params);
			}else if($key=="polyp"){
			$params=  array($_POST["id_kham"],33,$value,$_SESSION["user"]["id_user"]);
			$store_name="{call GD2_KetQuaCanLamSang_Update (?,?,?,?)}";//tao bien khai bao store
			$data->query( $store_name, $params);
			}else if($key=="sobuitri1"){
			$params=  array($_POST["id_kham"],38,$value,$_SESSION["user"]["id_user"]);
			$store_name="{call GD2_KetQuaCanLamSang_Update (?,?,?,?)}";//tao bien khai bao store
			$data->query( $store_name, $params);
			}else if($key=="buitrixuathuyet"){
			$params=  array($_POST["id_kham"],42,$value,$_SESSION["user"]["id_user"]);
			$store_name="{call GD2_KetQuaCanLamSang_Update (?,?,?,?)}";//tao bien khai bao store
			$data->query( $store_name, $params);
			}else if($key=="huyetapcao"){
			$params=  array($_POST["id_kham"],24,$value,$_SESSION["user"]["id_user"]);
			$store_name="{call GD2_KetQuaCanLamSang_Update (?,?,?,?)}";//tao bien khai bao store
			$data->query( $store_name, $params);
			}else if($key=="dau"){
			$params=  array($_POST["id_kham"],30,$value,$_SESSION["user"]["id_user"]);
			$store_name="{call GD2_KetQuaCanLamSang_Update (?,?,?,?)}";//tao bien khai bao store
			$data->query( $store_name, $params);
			}else if($key=="nhugaihm"){
			$params=  array($_POST["id_kham"],34,$value,$_SESSION["user"]["id_user"]);
			$store_name="{call GD2_KetQuaCanLamSang_Update (?,?,?,?)}";//tao bien khai bao store
			$data->query( $store_name, $params);
			}else if($key=="vitribuitri"){
			$params=  array($_POST["id_kham"],39,$value,$_SESSION["user"]["id_user"]);
			$store_name="{call GD2_KetQuaCanLamSang_Update (?,?,?,?)}";//tao bien khai bao store
			$data->query( $store_name, $params);
			}else if($key=="buitriviem"){
			$params=  array($_POST["id_kham"],43,$value,$_SESSION["user"]["id_user"]);
			$store_name="{call GD2_KetQuaCanLamSang_Update (?,?,?,?)}";//tao bien khai bao store
			$data->query( $store_name, $params);
			}else if($key=="huyetapthap"){
			$params=  array($_POST["id_kham"],25,$value,$_SESSION["user"]["id_user"]);
			$store_name="{call GD2_KetQuaCanLamSang_Update (?,?,?,?)}";//tao bien khai bao store
			$data->query( $store_name, $params);
			}else if($key=="daitieuduong"){
			$params=  array($_POST["id_kham"],31,$value,$_SESSION["user"]["id_user"]);
			$store_name="{call GD2_KetQuaCanLamSang_Update (?,?,?,?)}";//tao bien khai bao store
			$data->query( $store_name, $params);
			}else if($key=="gianvanhhm"){
			$params=  array($_POST["id_kham"],35,$value,$_SESSION["user"]["id_user"]);
			$store_name="{call GD2_KetQuaCanLamSang_Update (?,?,?,?)}";//tao bien khai bao store
			$data->query( $store_name, $params);
			}else if($key=="builonnhat1"){
			$params=  array($_POST["id_kham"],45,$value,$_SESSION["user"]["id_user"]);
			$store_name="{call GD2_KetQuaCanLamSang_Update (?,?,?,?)}";//tao bien khai bao store
			$data->query( $store_name, $params);
			}else if($key=="buitrixochai"){
			$params=  array($_POST["id_kham"],44,$value,$_SESSION["user"]["id_user"]);
			$store_name="{call GD2_KetQuaCanLamSang_Update (?,?,?,?)}";//tao bien khai bao store
			$data->query( $store_name, $params);
			}
			
		}
		
		
	}
	$chuoi='(?,?,?,?,?,?,?,?,?)';
	$params=  array($_POST["id_kham"],$_POST["chuandoan1"],$_POST["soitructrang"],$_POST["text_chuandoan"],$_POST["ppdieutri1"],$_POST["ghichunoibo"],$_POST["ppdieutri2"],$_POST["dacdiem"],$_SESSION["user"]["id_user"]);
	$store_name="{call GD2_anus_action_luu_hoantat $chuoi}";//tao bien khai bao store
	$data->query( $store_name, $params);
	
}
?>

