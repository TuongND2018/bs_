

<?php
$data= new SQLServer;//tao lop ket noi SQL 
$store_name="{call GD2_Buong_Giuong_SelectAll_ByID_Tang (?)}";
$params = array($_GET["id_tang"]); 
$get_lich=$data->query( $store_name, $params);
$excute= new SQLServerResult($get_lich);
$tam= $excute->get_as_array();
$responce = new stdClass;
$i=0;
$mangtrave='<ul>';
foreach ($tam as $row) {//duyet toan bo mang tra ve
    if($row["ID_Parent"]==""){
		$i=0;

    	$mangtrave=$mangtrave.' '.'<li data-row='.$row["Hang"].' class='.$row["TenKieuPhong"].' id='.$row["ID_Buong_Giuong"].' data-col='.$row["Cot"].' data-sizex='.$row["Ngang"].' data-sizey='.$row["Doc"].'>'.$row["TenBuong_Giuong"];
		$mangtrave=$mangtrave.'<ul >';
		foreach ($tam as $row1) {
			
			
				if($row1["ID_Parent"]==$row["ID_Buong_Giuong"]){
					if($row1["NgayGioBatDauSuDung"]==""){
						$tomau="trong";
					}
					else{
						if($row1["NgayGioKetThucSuDung"]==""){
							$tomau="ban";
						}
						else{
							$tomau="trong";
						}
					}
					$mangtrave=$mangtrave.' '.'<li data-row='.$row1["Hang"].' class='.$tomau.' id='.$row1["ID_Buong_Giuong"].' data-col='.$row1["Cot"].' data-sizex='.$row1["Ngang"].' data-sizey='.$row1["Doc"].'>';
					$i++; 
				}	
					
			}
		$mangtrave=$mangtrave.'</ul >';	
		$mangtrave=$mangtrave.'</li>';
    }
    /*if($row["ID_Parent"]!=""){
    	$mangtrave=$mangtrave.' '.'<li data-row='.$row["Hang"].' class='.$row["TenKieuPhong"].' id='.$row["ID_Buong_Giuong"].' data-col='.$row["Cot"].' data-sizex='.$row["Ngang"].' data-sizey='.$row["Doc"].'><span>'.$row["TenBuong_Giuong"].'</span></li>';
    }*/
    
}  

$mangtrave=$mangtrave.' '.'</ul>';

echo ($mangtrave);
?>