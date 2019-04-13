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

	$params1=array($_GET['id']);
    $get=$data->query( "{call GD2_get_yes_grouppermission(?)}", $params1);
  	$excute1= new SQLServerResult($get);
	$tam1= $excute1->get_as_array();

//print_r($leafnodes);
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
  
  //print_r($tam2);
  
   
   
 
  foreach ($tam2 as $row) {
	if(!$row['ID_Parent']) $valp = 'NULL'; else $valp = $row['ID_Parent'];	
	//kiem tra node co phai lead
	if(array_key_exists($row['ID_Control'], $leafnodes)) $leaf='true'; else $leaf = 'false';	
	$responce[] = array('ID_Control' => $row["ID_Control"], 'ID_Parent' => $row["ID_Parent"], 'Caption' => $row["Caption"],'KieuControl' => $row["KieuControl"], 'level' => $level, 'parent' => $valp, 'isLeaf' => $leaf, 'expanded'  => "true", 'loaded'  => "true");
	
	   display_node($row['ID_Control'],$level+1);
	}  
  
   return $responce;
}
 

// Here we call the function at root level

 $display=display_node('',0);

echo json_encode($display);	

?>