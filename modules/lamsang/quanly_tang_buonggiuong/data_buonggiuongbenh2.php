

<?php
$data= new SQLServer;//tao lop ket noi SQL 
$store_name="{call GD2_Buong_Giuong_SelectAll_ByID_Parent (?)}";
$params = array($_GET["id_parent"]); 
$get_lich=$data->query( $store_name, $params);
$excute= new SQLServerResult($get_lich);
$tam= $excute->get_as_array();
$responce = new stdClass;
$i=0;
$mangtrave='<ul>';
foreach ($tam as $row) {//duyet toan bo mang tra ve
	 if($row["ID_Parent"]!=""){
    	$mangtrave=$mangtrave.' '.'<li data-row='.$row["Hang"].' class='.$row["TenKieuPhong"].' id='.$row["ID_Buong_Giuong"].' data-col='.$row["Cot"].' data-sizex='.$row["Ngang"].' data-sizey='.$row["Doc"].'><span>'.$row["TenBuong_Giuong"].'</span></li>';
    }
    $i++; 
}  

$mangtrave=$mangtrave.' '.'</ul>';

echo ($mangtrave);
?>