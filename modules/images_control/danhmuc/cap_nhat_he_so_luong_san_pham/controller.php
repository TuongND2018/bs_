<?php
switch ($_GET["oper"]) {
    case "add":
        add("GD2_NhanVien_Insert");
        break;
    
}	 		 

function add($store_name){
       
        $data= new SQLServer;//tao lop ket noi SQL
       
        
        if(isset($_POST['id'])){  
           foreach ($_POST['id'] as $key => $value) {
             
                $params=array(
                    $value['ID_BacSy']
                  );
               
                $store_name="{call GD2_CauHinh_BS_LoaiKham_Del(?)}";
                
               $get=$data->query( $store_name, $params);
          }
        }
       if(isset($_POST['id'])){  
       foreach ($_POST['id'] as $key => $value) {
         
            $params1=array($value['ID_BacSy'],$value['LoaiKham'],$value['ChiDinhCoHuu'],$value['HSDC_ChiDinhCoHuu'],$value['ChiDinhHopTac'],$value['HSDC_ChiDinhHopTac'],$value['PhuTa'],
              $value['HSDC_PhuTa'],$value['VoCam'],$value['HSDC_VoCam'],$value['HoanTatCoHuu'],$value['HSDC_HoanTatCoHuu'],$value['HoanTatHopTac'],$value['HSDC_HoanTatHopTac'],$value['KTVThucHien'],$value['HSDC_KTVThucHien'],
              );
           
            $store_name1="{call GD2_CauHinh_BS_LoaiKham_Insert (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)}";
            
           $get2=$data->query( $store_name1, $params1);
      }
    }
     
       
}

?>

