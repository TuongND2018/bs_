<?php
switch ($_GET["oper"]) {
    case "dathuchien":
        dathuchien("GD2_Kham_dathuchien_sieuam4d");
        break;
    case "luuthuchien":
        luuthuchien("GD2_Kham_Update_sieuam4d");
        break;
    case "hoantat":
        hoantat("GD2_Kham_hoantat_sieuam4d");
        break;
     case "luuhoantat":
        luuhoantat("GD2_Kham_Update_sieuam4d");
        break; 
     case "luudangkham":
        luudangkham("GD2_Kham_Update_sieuam4d");
        break;     
}	 		 

function dathuchien($store_name){	
	$data= new SQLServer;//tao lop ket noi SQL
	$store_name="{call GD2_SieuAm4D_Del (?,?)}";//tao bien khai bao store
	$params = array( 
                  array($_POST["id_kham"], SQLSRV_PARAM_IN),
		  			array($_SESSION["user"]["id_user"],SQLSRV_PARAM_IN)
               );	
	$get=$data->query( $store_name, $params);//Goi store
        $chuoi2='(?,?,?,?)';

        	$bien2=  array(trim($_POST['id_kham']," "),($_POST["trongluongthai"]),($_POST["songaythai"]),($_POST["soluongthai"]));

	$store_name="{call GD2_SieuAmThai4D_Insert $chuoi2}";//tao bien khai bao store
	$params = $bien2;//tao param cho store 
	$get_danh_muc_phong_ban=$data->query( $store_name, $params);//Goi store	
	$chuoi3='(?,?,?,?,?,?,?,?)';

        $bien3= array(($_POST["nguoithuchien"]),($_POST["mota"]),($_POST["ketluan"]),($_POST["loikhuyen"]),($_POST["id_kham"]),($_POST["id_trangthai"]),($_POST["giothuchien"]),($_POST["phithuchien"]));
        
	$store_name3="{call GD2_Kham_dathuchien_sieuam4d $chuoi3}";//tao bien khai bao store
	$params3 = $bien3;//tao param cho store 
	$get_danh_muc_phong_ban=$data->query( $store_name3, $params3);//Goi store

	$params5=array(($_POST["id_luotkham"]));
            //print_r($params1);
     $store_name5="{call GD2_ThongSoPARA_DeleteAllByID_LuotKham (?)}";
            //print_r($params1);
     $get5=$data->query( $store_name5, $params5);
	if(($_POST['para'])!=="---"){  
		//print_r($_POST["id_luotkham"]);
       
            $params4=array(($_POST["id_luotkham"]),($_POST['para']));
            //print_r($params1);
            $store_name4="{call DM_Para_Insert (?,?)}";
            //print_r($params1);
           $get4=$data->query( $store_name4, $params4);
      }

}

function luuthuchien($store_name){

	$data= new SQLServer;//tao lop ket noi SQL
	$store_name="{call GD2_SieuAm4D_Del (?,?)}";//tao bien khai bao store
	$params = array( 
                  array($_POST["id_kham"], SQLSRV_PARAM_IN),
		  			array($_SESSION["user"]["id_user"],SQLSRV_PARAM_IN)
               );	
	$get=$data->query( $store_name, $params);//Goi store
        $chuoi2='(?,?,?,?)';

        	$bien2=  array(trim($_POST['id_kham']," "),($_POST["trongluongthai"]),($_POST["songaythai"]),($_POST["soluongthai"]));
  
	
	$store_name="{call GD2_SieuAmThai4D_Insert $chuoi2}";//tao bien khai bao store
	$params = $bien2;//tao param cho store 
	$get_danh_muc_phong_ban=$data->query( $store_name, $params);//Goi store	


	$chuoi3='(?,?,?,?,?,?,?,?,?,?)';

        	$bien3=  array(trim($_POST['nguoithuchien']," "),0,($_POST["mota"]),($_POST["ketluan"]),($_POST["loikhuyen"]),($_POST["id_kham"]),($_POST["id_trangthai"]),trim($_POST['nguoisua']," "),trim($_POST['ngaygiosua']," "),($_POST["phithuchien"]));
  
	
	$store_name3="{call GD2_Kham_Update_sieuam4d $chuoi3}";//tao bien khai bao store
	$params3 = $bien3;//tao param cho store 
	$get_danh_muc_phong_ban3=$data->query( $store_name3, $params3);
	$params5=array(($_POST["id_luotkham"]));
            //print_r($params1);
     $store_name5="{call GD2_ThongSoPARA_DeleteAllByID_LuotKham (?)}";
            //print_r($params1);
     $get5=$data->query( $store_name5, $params5);
	if(($_POST['para'])!=="---"){  
		//print_r($_POST["id_luotkham"]);
       
            $params4=array(($_POST["id_luotkham"]),($_POST['para']));
            //print_r($params1);
            $store_name4="{call DM_Para_Insert (?,?)}";
            //print_r($params1);
           $get4=$data->query( $store_name4, $params4);
      }

}

function luudangkham($store_name){
	
	$data= new SQLServer;//tao lop ket noi SQL
	$store_name="{call GD2_SieuAm4D_Del (?,?)}";//tao bien khai bao store
	$params = array( 
                  array($_POST["id_kham"], SQLSRV_PARAM_IN),
		  			array($_SESSION["user"]["id_user"],SQLSRV_PARAM_IN)
               );	
	$get=$data->query( $store_name, $params);//Goi store
        $chuoi2='(?,?,?,?)';

        	$bien2=  array(trim($_POST['id_kham']," "),($_POST["trongluongthai"]),($_POST["songaythai"]),($_POST["soluongthai"]));
  
	
	$store_name="{call GD2_SieuAmThai4D_Insert $chuoi2}";//tao bien khai bao store
	$params = $bien2;//tao param cho store 
	$get_danh_muc_phong_ban=$data->query( $store_name, $params);//Goi store	


	$chuoi3='(?,?,?,?,?,?,?,?,?,?)';

        	$bien3=  array(0,0,($_POST["mota"]),($_POST["ketluan"]),($_POST["loikhuyen"]),($_POST["id_kham"]),($_POST["id_trangthai"]),0,0,($_POST["phithuchien"]));
  
	
	$store_name3="{call GD2_Kham_Update_sieuam4d $chuoi3}";//tao bien khai bao store
	$params3 = $bien3;//tao param cho store 
	$get_danh_muc_phong_ban3=$data->query( $store_name3, $params3);
	$params5=array(($_POST["id_luotkham"]));
            //print_r($params1);
     $store_name5="{call GD2_ThongSoPARA_DeleteAllByID_LuotKham (?)}";
            //print_r($params1);
     $get5=$data->query( $store_name5, $params5);
	if(($_POST['para'])!=="---"){  
		//print_r($_POST["id_luotkham"]);
       
            $params4=array(($_POST["id_luotkham"]),($_POST['para']));
            //print_r($params1);
            $store_name4="{call DM_Para_Insert (?,?)}";
            //print_r($params1);
           $get4=$data->query( $store_name4, $params4);
      }

}
function hoantat($store_name){
	$data= new SQLServer;//tao lop ket noi SQL
	$store_name="{call GD2_SieuAm4D_Del (?,?)}";//tao bien khai bao store
	$params = array( 
                  array($_POST["id_kham"], SQLSRV_PARAM_IN),
		  			array($_SESSION["user"]["id_user"],SQLSRV_PARAM_IN)
               );	
	$get=$data->query( $store_name, $params);//Goi store
        $chuoi2='(?,?,?,?)';

        	$bien2=  array(trim($_POST['id_kham']," "),($_POST["trongluongthai"]),($_POST["songaythai"]),($_POST["soluongthai"]));

	$store_name="{call GD2_SieuAmThai4D_Insert $chuoi2}";//tao bien khai bao store
	$params = $bien2;//tao param cho store 
	$get_danh_muc_phong_ban=$data->query( $store_name, $params);//Goi store	
	$chuoi3='(?,?,?,?,?,?,?,?,?)';

        $bien3=  array(trim($_POST['nguoithuchien']," "),($_POST["chuandoan1"]),($_POST["mota"]),($_POST["ketluan"]),($_POST["loikhuyen"]),($_POST["id_kham"]),($_POST["id_trangthai"]),($_POST["giohoantat"]),($_POST["phithuchien"]));
        
	$store_name3="{call GD2_Kham_hoantat_sieuam4d $chuoi3}";//tao bien khai bao store
	$params3 = $bien3;//tao param cho store 
	$get_danh_muc_phong_ban=$data->query( $store_name3, $params3);//Goi store	
	$params5=array(($_POST["id_luotkham"]));
            //print_r($params1);
     $store_name5="{call GD2_ThongSoPARA_DeleteAllByID_LuotKham (?)}";
            //print_r($params1);
     $get5=$data->query( $store_name5, $params5);
	if(($_POST['para'])!=="---"){  
		//print_r($_POST["id_luotkham"]);
       
            $params4=array(($_POST["id_luotkham"]),($_POST['para']));
            //print_r($params1);
            $store_name4="{call DM_Para_Insert (?,?)}";
            //print_r($params1);
           $get4=$data->query( $store_name4, $params4);
      }

}
function luuhoantat($store_name){
	
	$data= new SQLServer;//tao lop ket noi SQL
	$store_name="{call GD2_SieuAm4D_Del (?,?)}";//tao bien khai bao store
	$params = array( 
                  array($_POST["id_kham"], SQLSRV_PARAM_IN),
		  			array($_SESSION["user"]["id_user"],SQLSRV_PARAM_IN)
               );	
	$get=$data->query( $store_name, $params);//Goi store
        $chuoi2='(?,?,?,?)';

        	$bien2=  array(trim($_POST['id_kham']," "),($_POST["trongluongthai"]),($_POST["songaythai"]),($_POST["soluongthai"]));
  
	
	$store_name="{call GD2_SieuAmThai4D_Insert $chuoi2}";//tao bien khai bao store
	$params = $bien2;//tao param cho store 
	$get_danh_muc_phong_ban=$data->query( $store_name, $params);//Goi store	


	$chuoi3='(?,?,?,?,?,?,?,?,?,?)';

        	$bien3=  array(trim($_POST['nguoithuchien']," "),trim($_POST['chuandoan1']," "),($_POST["mota"]),($_POST["ketluan"]),($_POST["loikhuyen"]),($_POST["id_kham"]),($_POST["id_trangthai"]),trim($_POST['nguoisua']," "),trim($_POST['ngaygiosua']," "),($_POST["phithuchien"]));
  
	
	$store_name3="{call GD2_Kham_Update_sieuam4d $chuoi3}";//tao bien khai bao store
	$params3 = $bien3;//tao param cho store 
	$get_danh_muc_phong_ban3=$data->query( $store_name3, $params3);
	$params5=array($_POST["id_luotkham"]);
  print_r($_POST["id_luotkham"]);
     $store_name5="{call GD2_ThongSoPARA_DeleteAllByID_LuotKham (?)}";
            //print_r($params1);
     $get5=$data->query( $store_name5, $params5);
	if(($_POST['para'])!=="---"){  
		//print_r($_POST["id_luotkham"]);
       
            $params4=array(($_POST["id_luotkham"]),($_POST['para']));
            //print_r($params1);
            $store_name4="{call DM_Para_Insert (?,?)}";
            //print_r($params1);
           $get4=$data->query( $store_name4, $params4);
      }

}
?>

