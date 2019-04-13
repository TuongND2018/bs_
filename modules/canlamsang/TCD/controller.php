<?php
switch ($_GET["oper"]) {
    case "dathuchien":
        dathuchien("GD2_Kham_dathuchien_TCD");
        break;
    case "luuthuchien":
        luuthuchien("GD2_Kham_Update_TCD");
        break;
    case "hoantat":
        hoantat("GD2_Kham_hoantat_TCD");
        break;
     case "luuhoantat":
        luuhoantat("GD2_Kham_Update_TCD");
        break; 
     case "luudangkham":
        luudangkham("GD2_Kham_Update_TCD");
        break;     
}	 		 

function dathuchien($store_name){	
	$data= new SQLServer;//tao lop ket noi SQL
	$_POST["ngaygiothuchien"]= convert_date ($_POST["ngaygiothuchien"]);
	$chuoi3='(?,?,?,?,?,?)';

       $bien3= array(($_POST["nguoithuchien"]),($_POST["mota"]),($_POST["ketluan"]),($_POST["id_kham"]),($_POST["id_trangthai"]),($_POST["ngaygiothuchien"]));
        
	$store_name3="{call GD2_Kham_dathuchien_TCD $chuoi3}";//tao bien khai bao store
	$params3 = $bien3;//tao param cho store 
	$get_danh_muc_phong_ban=$data->query( $store_name3, $params3);//Goi store	


}

function luuthuchien($store_name){

	$data= new SQLServer;//tao lop ket noi SQL
	$_POST["ngaygiosua"]= convert_date ($_POST["ngaygiosua"]);
	$chuoi3='(?,?,?,?,?,?,?,?)';

        	$bien3=  array(trim($_POST['nguoithuchien']," "),0,($_POST["mota"]),($_POST["ketluan"]),($_POST["id_kham"]),($_POST["id_trangthai"]),trim($_POST['nguoisua']," "),trim($_POST['ngaygiosua']," "));
  
	
	$store_name3="{call GD2_Kham_Update_TCD $chuoi3}";//tao bien khai bao store
	$params3 = $bien3;//tao param cho store 
	$get_danh_muc_phong_ban3=$data->query( $store_name3, $params3);
	

}

function luudangkham($store_name){
	
	$data= new SQLServer;//tao lop ket noi SQL
	
	$chuoi3='(?,?,?,?,?,?,?,?)';

        	$bien3=  array(0,0,($_POST["mota"]),($_POST["ketluan"]),($_POST["id_kham"]),($_POST["id_trangthai"]),0,0);
  
	
	$store_name3="{call GD2_Kham_Update_TCD $chuoi3}";//tao bien khai bao store
	$params3 = $bien3;//tao param cho store 
	$get_danh_muc_phong_ban3=$data->query( $store_name3, $params3);
	

}
function hoantat($store_name){
	$data= new SQLServer;//tao lop ket noi SQL
	$_POST["ngaygiothuchien"]= convert_date ($_POST["ngaygiothuchien"]);
	$_POST["ngaygiohoantat"]= convert_date ($_POST["ngaygiohoantat"]);
	$chuoi3='(?,?,?,?,?,?,?,?)';

        $bien3=  array(trim($_POST['nguoithuchien']," "),($_POST["chuandoan1"]),($_POST["mota"]),($_POST["ketluan"]),($_POST["id_kham"]),($_POST["id_trangthai"]),($_POST["ngaygiothuchien"]),($_POST["ngaygiohoantat"]));
        
	$store_name3="{call GD2_Kham_hoantat_TCD $chuoi3}";//tao bien khai bao store
	$params3 = $bien3;//tao param cho store 
	$get_danh_muc_phong_ban=$data->query( $store_name3, $params3);//Goi store	

	

}
function luuhoantat($store_name){

	$data= new SQLServer;//tao lop ket noi SQL
	$_POST["ngaygiosua"]= convert_date ($_POST["ngaygiosua"]);
	$chuoi3='(?,?,?,?,?,?,?,?)';

        	$bien3=  array(trim($_POST['nguoithuchien']," "),trim($_POST['chuandoan1']," "),($_POST["mota"]),($_POST["ketluan"]),($_POST["id_kham"]),($_POST["id_trangthai"]),trim($_POST['nguoisua']," "),trim($_POST['ngaygiosua']," "));
  
	
	$store_name3="{call GD2_Kham_Update_TCD $chuoi3}";//tao bien khai bao store
	$params3 = $bien3;//tao param cho store 
	$get_danh_muc_phong_ban3=$data->query( $store_name3, $params3);


}
?>

