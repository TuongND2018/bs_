<?php
switch ($_GET["oper"]) {
    case "dathuchien":
        dathuchien("GD2_Kham_dathuchien_tieuphau");
        break;
    case "luuthuchien":
        luuthuchien("GD2_Kham_Update_tieuphau");
        break;
    case "hoantat":
        hoantat("GD2_Kham_hoantat_tieuphau");
        break;
     case "luuhoantat":
        luuhoantat("GD2_Kham_Update_tieuphau");
        break;
     case "luudangkham":
        luudangkham("GD2_Kham_Update_tieuphau");
        break;    
}	 		 

function dathuchien($store_name){	

        $chuoi2='(?,?,?,?,?,?,?)';
//        $bien2=  array(urldecode($_POST["id_kham"]),urldecode($_POST["mota"]),urldecode($_POST["ketluan"])
//                ,urldecode($_POST["loikhuyen"]),urldecode($_POST["nhanvien1"]), (float)urldecode($_POST["phithuchien"])
//            );
        $bien2=  array(($_POST["nguoithuchien"]),($_POST["mota"]),($_POST["are_chuandoan"]),($_POST["dando"]),($_POST["id_kham"]),($_POST["id_trangthai"]),($_POST["giothuchien"]));
       
	//print_r($bien2);
	//print_r($chuoi2);	 
	$data= new SQLServer;//tao lop ket noi SQL
	$store_name="{call $store_name $chuoi2}";//tao bien khai bao store
	$params = $bien2;//tao param cho store 
	$get_danh_muc_phong_ban=$data->query( $store_name, $params);//Goi store	
	echo $get_danh_muc_phong_ban;

	
}
function luudangkham($store_name){

        $chuoi2='(?,?,?,?,?,?,?,?,?)';

        	$bien2=  array(0,0,($_POST["mota"]),($_POST["are_chuandoan"]),($_POST["dando"]),($_POST["id_kham"]),($_POST["id_trangthai"]),0,0);
            
       
	//print_r($bien2);
	//print_r($chuoi2);	 
	$data= new SQLServer;//tao lop ket noi SQL
	$store_name="{call $store_name $chuoi2}";//tao bien khai bao store
	$params = $bien2;//tao param cho store 
	$get_danh_muc_phong_ban=$data->query( $store_name, $params);//Goi store	
	echo $get_danh_muc_phong_ban;
	
}
function luuthuchien($store_name){

        $chuoi2='(?,?,?,?,?,?,?,?,?)';

        	$bien2=  array(trim($_POST['nguoithuchien']," "),0,($_POST["mota"]),($_POST["are_chuandoan"]),($_POST["dando"]),($_POST["id_kham"]),($_POST["id_trangthai"]),trim($_POST['nguoisua']," "),trim($_POST['ngaygiosua']," "));
            
       
	//print_r($bien2);
	//print_r($chuoi2);	 
	$data= new SQLServer;//tao lop ket noi SQL
	$store_name="{call $store_name $chuoi2}";//tao bien khai bao store
	$params = $bien2;//tao param cho store 
	$get_danh_muc_phong_ban=$data->query( $store_name, $params);//Goi store	
	echo $get_danh_muc_phong_ban;
	
}
function hoantat($store_name){
	$chuoi2='(?,?,?,?,?,?,?,?)';

        $bien2=  array(($_POST["nguoithuchien"]),($_POST["chuandoan1"]),($_POST["mota"]),($_POST["are_chuandoan"]),($_POST["dando"]),($_POST["id_kham"]),($_POST["id_trangthai"]),($_POST["giohoantat"]));
        //$bien2=  array(($_POST["mota"]),($_POST["ketluan"]),($_POST["loikhuyen"]),($_POST["id_kham"]),($_POST["id_trangthai"]));
       
	//print_r($bien2);
	//print_r($chuoi2);	 
	$data= new SQLServer;//tao lop ket noi SQL
	$store_name="{call $store_name $chuoi2}";//tao bien khai bao store
	$params = $bien2;//tao param cho store 
	$get_danh_muc_phong_ban=$data->query( $store_name, $params);//Goi store	
	//print_r($params);
	//echo $get_danh_muc_phong_ban;
 
}
function luuhoantat($store_name){

        $chuoi2='(?,?,?,?,?,?,?,?,?)';

        	$bien2=  array(trim($_POST['nguoithuchien']," "),trim($_POST['chuandoan1']," "),($_POST["mota"]),($_POST["are_chuandoan"]),($_POST["dando"]),($_POST["id_kham"]),($_POST["id_trangthai"]),trim($_POST['nguoisua']," "),trim($_POST['ngaygiosua']," "));
            
       
	//print_r($bien2);
	//print_r($chuoi2);	 
	$data= new SQLServer;//tao lop ket noi SQL
	$store_name="{call $store_name $chuoi2}";//tao bien khai bao store
	$params = $bien2;//tao param cho store 
	$get_danh_muc_phong_ban=$data->query( $store_name, $params);//Goi store	
	//echo $get_danh_muc_phong_ban;
	
}
?>

