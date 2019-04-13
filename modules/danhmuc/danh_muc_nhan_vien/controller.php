<?php
switch ($_GET["oper"]) {
    case "add":
        add("GD2_NhanVien_Insert");
        break;
    case "edit":
        edit("GD2_NhanVien_Update");
        break;
    case "del":
        del("GD2_NhanVien_delete");
        break;
}	 		 

function add($store_name){
        //print_r($_POST);
        
        $check1='';
        $check2='';
        if(!isset($_POST['sex'])){    
            $sex=0;
        }else{    
            $sex=$_POST['sex'];
         }
        if(!isset($_POST['nghiviec'])){    
            $nghiviec=0;
        }else{    
            $nghiviec=$_POST['nghiviec'];
         }
        if(!isset($_POST['chamcongbangmay'])){    
            $chamcongbangmay=0;
        }else{    
            $chamcongbangmay=$_POST['chamcongbangmay'];
         }
        if(!isset($_POST['labacsi'])){    
            $labacsi=0;
        }else{    
                $labacsi=$_POST['labacsi'];
        }
        if(!isset($_POST['congtacvien'])){    
            $congtacvien=0;
        }else{    
                $congtacvien=$_POST['congtacvien'];
        }
        if(!isset($_POST['allowlogin'])){    
            $allowlogin=0;
        }else{    
                $allowlogin=$_POST['allowlogin'];
        }
        if(!isset($_POST['disable'])){    
            $disable=0;
        }else{    
                $disable=$_POST['disable'];
        }

        $data= new SQLServer;//tao lop ket noi SQL
        $store_name="{call GD2_NhanVien_Insert(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)}";//tao bien khai bao store
        $params = array(
           trim($_POST['hinhnhanvien']," "),
           trim($_POST['chukynv']," "),  
           trim($_POST['manv']," "),
           trim($_POST['ho']," "),
           trim($_POST['ngaysinh']," "),
           trim($_POST['cmnd']," "),
           trim($_POST['hochieu']," "),
           trim($_POST['tenthuonggoi']," "),
           trim($_POST['ten']," "),
           trim($_POST['sex']," "),
           trim($_POST['dantoc']," "),
           trim($_POST['quoctich']," "),
           trim($_POST['diachi']," "),
           trim($_POST['mobile']," "),
           trim($_POST['dienthoainha']," "),
           trim($_POST['email']," "),
           trim($_POST['yahoo']," "),
           trim($_POST['skype']," "),
           trim($_POST['phongban']," "),
           trim($_POST['chucdanh']," "),
           trim($_POST['trinhdo']," "),
           trim($_POST['sotaikhoan']," "),
           trim($_POST['masothue']," "),
           trim($_POST['ghichu']," "),
            trim($_POST['chucvu']," "),
            trim($_POST['ngayvaolam']," "),
            trim($_POST['loaitinhluong']," "),
            trim($_POST['tennganhang']," "),
            trim($_POST['sobaohiem']," "),
            trim($_POST['username']," "),
            trim($_POST['password']," "),           
           $chamcongbangmay,
           $nghiviec,
           $labacsi,
           $congtacvien,
           $allowlogin,
           $disable,
           $_SESSION['user']['id_user'],
            
           array($check1, SQLSRV_PARAM_OUT,SQLSRV_PHPTYPE_INT)
            
        );
       $check2=$_POST['manv'];
       $get=$data->query( $store_name, $params);
       if(isset($_POST['cc'])){  
       foreach ($_POST['cc'] as $key => $value) {
            unset($params1);
           // print_r($_POST['id']);
            $params1=array($check2,$value['MaCc'],$value['TenNgon'],$check1,$_SESSION['user']['id_user'],);
            //print_r($params1);
            $store_name1="{call Gd2_ChamCong_Add (?,?,?,?,?)}";
            //print_r($params1);
           $get2=$data->query( $store_name1, $params1);
      }}
       echo ';'.$check1;
       
}
function edit($store_name){
	$check1='';
        $check2='';
        if(!isset($_POST['sex'])){    
            $sex=0;
        }else{    
            $sex=$_POST['sex'];
         }
        if(!isset($_POST['nghiviec'])){    
            $nghiviec=0;
        }else{    
            $nghiviec=$_POST['nghiviec'];
         }
        if(!isset($_POST['chamcongbangmay'])){    
            $chamcongbangmay=0;
        }else{    
            $chamcongbangmay=$_POST['chamcongbangmay'];
         }
        if(!isset($_POST['labacsi'])){    
            $labacsi=0;
        }else{    
                $labacsi=$_POST['labacsi'];
        }
        if(!isset($_POST['congtacvien'])){    
            $congtacvien=0;
        }else{    
                $congtacvien=$_POST['congtacvien'];
        }
        if(!isset($_POST['allowlogin'])){    
            $allowlogin=0;
        }else{    
                $allowlogin=$_POST['allowlogin'];
        }
        if(!isset($_POST['disable'])){    
            $disable=0;
        }else{    
                $disable=$_POST['disable'];
        }

        $data= new SQLServer;//tao lop ket noi SQL
        $store_name="{call GD2_NhanVien_Update(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)}";//tao bien khai bao store
        $params = array(
            $_GET['id'],
			trim($_POST['hinhnhanvien']," "),
           trim($_POST['chukynv']," "), 
           trim($_POST['manv']," "),
           trim($_POST['ho']," "),
           trim($_POST['ngaysinh']," "),
           trim($_POST['cmnd']," "),
           trim($_POST['hochieu']," "),
           trim($_POST['tenthuonggoi']," "),
           trim($_POST['ten']," "),
           trim($_POST['sex']," "),
           trim($_POST['dantoc']," "),
           trim($_POST['quoctich']," "),
           trim($_POST['diachi']," "),
           trim($_POST['mobile']," "),
           trim($_POST['dienthoainha']," "),
           trim($_POST['email']," "),
           trim($_POST['yahoo']," "),
           trim($_POST['skype']," "),
           trim($_POST['phongban']," "),
           trim($_POST['chucdanh']," "),
           trim($_POST['trinhdo']," "),
           trim($_POST['sotaikhoan']," "),
           trim($_POST['masothue']," "),
           trim($_POST['ghichu']," "),
            trim($_POST['chucvu']," "),
            trim($_POST['ngayvaolam']," "),
            trim($_POST['loaitinhluong']," "),
            trim($_POST['tennganhang']," "),
            trim($_POST['sobaohiem']," "),
            trim($_POST['username']," "),
            trim($_POST['password']," "),           
           $chamcongbangmay,
           $nghiviec,
           $labacsi,
           $congtacvien,
           $allowlogin,
           $disable,
           $_SESSION['user']['id_user'],
           array($check1, SQLSRV_PARAM_OUT,SQLSRV_PHPTYPE_INT)   
        );
         $check2=$_POST['manv'];
         echo ';'.$check1;
       $get=$data->query( $store_name, $params);
       $params1=array($_GET['id']);
       $get1=$data->query( "{call GD2_Maccdetails_select(?)}", $params1);
       $excute= new SQLServerResult($get1);
        $tam= $excute->get_as_array();
         foreach ($tam as $row) {//duyet toan bo mang tra ve
            $params2=array($row["Index"],$_SESSION['user']['id_user']);
            $get_del=$data->query( "{call chamcong_delete(?,?)}", $params2);
       }
      
       if(isset($_POST['cc'])){  
       foreach ($_POST['cc'] as $key => $value) {
            unset($params1);
           // print_r($_POST['id']);
            $params3=array($check2,$value['MaCc'],$value['TenNgon'],$_GET['id'],$_SESSION['user']['id_user'],);
            //print_r($params1);
            $store_name3="{call Gd2_ChamCong_Add (?,?,?,?,?)}";
            //print_r($params1);
           $get3=$data->query( $store_name3, $params3);
      }}
      
}
function del($store_name){
	$check="";
	$data= new SQLServer;//tao lop ket noi SQL
	$store_name="{call GD2_NhanVien_Delete (?,?)}";//tao bien khai bao store
	$params = array( 
                  array($_POST["id"], SQLSRV_PARAM_IN),
		  array($_SESSION["user"]["id_user"],SQLSRV_PARAM_IN),
                  array($check, SQLSRV_PARAM_OUT,SQLSRV_PHPTYPE_INT)
               );	
	$get=$data->query( $store_name, $params);

}
?>

