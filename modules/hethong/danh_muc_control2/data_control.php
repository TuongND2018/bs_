<?php
$data= new SQLServer;
$store_name="{call GD2_nhomquyen_getleaf()}";
$params = array();
$get_lich=$data->query( $store_name, $params);
$excute= new SQLServerResult($get_lich);
$tam= $excute->get_as_array();
//lay node khong co con
$leafnodes = array();
foreach ($tam as $row) {
      $leafnodes[$row['ID_Control']] = $row['ID_Control'];
}
 
$store_name1="{call GD2_DM_Control_select()}";
$params1 = array();
$get=$data->query( $store_name1, $params1);//Goi store
$excute1= new SQLServerResult($get);//Ket noi lop xu ly SQL và truyen gia tri tra ve tu lop ket noi SQL
$tam1= $excute1->get_as_array();//Tra ve mang toan bo data lay duoc 


function display_node($parent, $level) {
    global $tam1;
   $tam2=array();
   global $leafnodes; 
   global $responce;
   if($parent >0) {
        foreach ($tam1 as $row){
	  if($row['ID_Parent']==$parent){
		  $tam2[]=$row;
	  }
    }
   } else {
      
	  foreach ($tam1 as $row){
	  if($row['ID_Parent']==''){
		  $tam2[]=$row;
	  }
    }
   }

  foreach ($tam2 as $row) {
	if(!$row['ID_Parent']) $valp = 'NULL'; else $valp = $row['ID_Parent'];	
	//kiem tra node co phai lead
	if(array_key_exists($row['ID_Control'], $leafnodes)) $leaf='true'; else $leaf = 'false';	
	$responce[] = array('ID_Control' => $row["ID_Control"], 'ID_Parent' => $row["ID_Parent"], 'Caption' => $row["Caption"],'KieuControl' => $row["KieuControl"],'IsBarButton' => $row["IsBarButton"] ,'Icon' =>$row["Icon"],'Active' =>$row["Active"],'STT' =>$row["STT"],'PageOpen' =>$row["PageOpen"],'OpenType' =>$row["OpenType"],'TenControl' =>$row["TenControl"] , 'level' => $level, 'parent' => $valp, 'isLeaf' => $leaf, 'expanded'  => "true", 'loaded'  => "true");
	
	   display_node($row['ID_Control'],$level+1);
	   
	}  
  
   return $responce;
   
}
 

// Here we call the function at root level

 $display=display_node('',0);

echo json_encode($display);	



?>