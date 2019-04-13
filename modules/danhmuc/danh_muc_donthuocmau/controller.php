<?php 
switch ($_GET["oper"]) {
    case "add":
        add("Gd2_donthuocmau_Add");
        
        break;
    case "edit":
        edit("GD2_DM_DonThuocMau_Update");
        break;
    case "del":
        del("Gd2_Thuoc_Delete");
        break;
}

function add($store_name){
        //print_r($_POST);
        $check1='';
        if(!isset($_POST['latoachuan_check'])){    
            $latoachuan_check=0;
        }else{    
            $latoachuan_check=$_POST['latoachuan_check'];
         }
        if(!isset($_POST['apdung_check'])){    
            $apdung_check=0;
        }else{    
            $apdung_check=$_POST['apdung_check'];
         }
        

        $data= new SQLServer;//tao lop ket noi SQL
        $store_name="{call Gd2_donthuocmau_Add (?,?,?,?,?,?,?,?,?,?)}";//tao bien khai bao store
        $params = array(
           trim($_POST['madonthuoc_text']," "),
           trim($_POST['tendonthuoc_text']," "),
           trim($_POST['ID_BacSiTao']," "),
           trim($_POST['ID_NhomBenh']," "),
           trim($_POST['mota_text']," "),
           trim($_POST['ghichu_text']," "),
           $latoachuan_check,
           $apdung_check,
          
           $_SESSION['user']['id_user'],

           array($check1, SQLSRV_PARAM_OUT,SQLSRV_PHPTYPE_INT)   
        );
       $get=$data->query( $store_name, $params);
      if(isset($_POST['id'])){  
       foreach ($_POST['id'] as $key => $value) {
            unset($params1);
           // print_r($_POST['id']);
            $params1=array($value['ID_Thuoc'],$value['LieuDungHangNgay'],$value['CachDung'],$check1,$_SESSION['user']['id_user']);
            //print_r($params1);
            $store_name1="{call GD2_DonThuocMauChiTiet_Insert (?,?,?,?,?)}";
           // print_r($params1);
            $get2=$data->query( $store_name1, $params1);
      }}
        echo ';'.$check1;
}
function edit($store_name){
        if(!isset($_POST['latoachuan_check'])){    
            $latoachuan_check=0;
        }else{    
            $latoachuan_check=$_POST['latoachuan_check'];
         }
        if(!isset($_POST['apdung_check'])){    
            $apdung_check=0;
        }else{    
            $apdung_check=$_POST['apdung_check'];
         }
        //print_r($_POST);
	$check1="";
	$data= new SQLServer;//tao lop ket noi SQL
	$store_name="{call GD2_DM_DonThuocMau_Update(?,?,?,?,?,?,?,?,?,?)}";//tao bien khai bao store
	$params = array( 
            $_GET['id'],
           trim($_POST['madonthuoc_text']," "),
           trim($_POST['tendonthuoc_text']," "),
           trim($_POST['ID_BacSiTao']," "),
           trim($_POST['ID_NhomBenh']," "),
           trim($_POST['mota_text']," "),
           trim($_POST['ghichu_text']," "),
           $latoachuan_check,
           $apdung_check,
           $_SESSION['user']['id_user']
           
      );	
	$get=$data->query( $store_name, $params);//Goi store	
	//echo $check1;
        $params1=array($_GET['id']);
        $get1=$data->query( "{call GD2_DonThuocMauChiTiet_Select(?)}", $params1);
        $excute= new SQLServerResult($get1);
        $tam= $excute->get_as_array();
        foreach ($tam as $row) {//duyet toan bo mang tra ve
            $params2=array($row["ID_TTMChiTiet"],$_SESSION['user']['id_user']);
            $get_del=$data->query( "{call GD2_DonThuocMauChiTiet_Delete(?,?)}", $params2);
        }
        if(isset($_POST['id'])){  
       foreach ($_POST['id'] as $key => $value) {
            unset($params1);
            print_r($_POST['id']);
            $params1=array($value['ID_Thuoc'],$value['LieuDungHangNgay'],$value['CachDung'],$_GET['id'],$_SESSION['user']['id_user'],);
            //print_r($params1);
            $store_name1="{call GD2_DonThuocMauChiTiet_Insert(?,?,?,?,?)}";
           // print_r($params1);
            $get2=$data->query( $store_name1, $params1);
      }}
        
        
}
function del($store_name){
	//print_r($_POST);
	$check1="";
        if(isset($_POST['id'])){  
        
                $data= new SQLServer;//tao lop ket noi SQL
                $store_name="{call GD2_DonThuocMauChiTiet_DeleteAllByID_DonThuocMau (?,?)}";//tao bien khai bao store
                $params = array( 
                  array($_POST["id"], SQLSRV_PARAM_IN),
		  array($_SESSION["user"]["id_user"],SQLSRV_PARAM_IN),
                  array($check1, SQLSRV_PARAM_OUT,SQLSRV_PHPTYPE_INT)
               );	
	$get=$data->query( $store_name, $params);         
      }
        $data1= new SQLServer;//tao lop ket noi SQL
	$store_name1="{call GD2_DM_DonThuocMau_Delete (?,?)}";//tao bien khai bao store
	$params1 = array( 
                  array($_POST["id"], SQLSRV_PARAM_IN),
		  array($_SESSION["user"]["id_user"],SQLSRV_PARAM_IN),
                  array($check1, SQLSRV_PARAM_OUT,SQLSRV_PHPTYPE_INT)
               );	
	$get1=$data1->query( $store_name1, $params1);//Goi store	
}
?>

