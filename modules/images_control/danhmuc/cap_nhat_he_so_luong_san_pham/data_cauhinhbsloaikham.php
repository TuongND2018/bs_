<?php
$data= new SQLServer;//tao lop ket noi SQL 
$store_name="{call GD2_CauHinh_BS_LoaiKham_SelectByID_BacSy(?)}";
$params = array($_GET["id_bacsi"]); 
$get_lich=$data->query( $store_name, $params);
$excute= new SQLServerResult($get_lich);
$tam= $excute->get_as_array();
$responce = new stdClass;
$i=0;
foreach ($tam as $row) {//duyet toan bo mang tra ve
    $responce->rows[$i]['id']=$row["ID_BS_LoaiKham"];
    $responce->rows[$i]['cell']=array($row["ID_BS_LoaiKham"],$row["ID_BacSy"],$row["ID_LoaiKham"],$row["GiaBaoChoBN"]/1000,$row["ChiPhi"]/1000,$row["conlai"]/1000,$row["ChiDinhCoHuu"],$row["HSDC_ChiDinhCoHuu"],$row["ChiDinhHopTac"],$row["HSDC_ChiDinhHopTac"]
    	,$row["PhuTa"],$row["HSDC_PhuTa"],$row["VoCam"],$row["HSDC_VoCam"],$row["HoanTatCoHuu"],$row["HSDC_HoanTatCoHuu"],$row["HoanTatHopTac"],$row["HSDC_HoanTatHopTac"],$row["KTVThucHien"],$row["HSDC_KTVThucHien"]
    	);
     
    $i++; 
}  
echo json_encode($responce);
?>