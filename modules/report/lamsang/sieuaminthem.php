<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Report</title>
<style >
body{
	overflow:auto;
	margin:0;
}
pre {
 white-space: pre-wrap;       /* css-3 */
 white-space: -moz-pre-wrap;  /* Mozilla, since 1999 */
 white-space: -pre-wrap;      /* Opera 4-6 */
 white-space: -o-pre-wrap;    /* Opera 7 */
 word-wrap: break-word;       /* Internet Explorer 5.5+ */
 font:13px Tahoma, Geneva, sans-serif;
}

</style>
</head>
 
<body>
	<?php
		
        $data= new SQLServer;//tao lop ket noi SQL
        $params = array($_GET["id_benhnhan"]);//tao param cho store 
        $store_name="{call GD2_GetThongTinBenhNhan(?)}";//tao bien khai bao store
        $get_thongtinbenhnhan=$data->query( $store_name,$params);//Goi store
        $excute= new SQLServerResult($get_thongtinbenhnhan);//Ket noi lop xu ly SQL và truyen gia tri tra ve tu lop ket noi SQL
        $thongtinbenhnhan= $excute->get_as_array();//Tra ve mang toan bo data lay duoc  
		 
		
		$params1 = array($_GET["id_kham"]);//tao param cho store 
        $store_name1="{call GD2_GetKhamById_Kham(?)}";//tao bien khai bao store
        $get_thongtinluotkham=$data->query( $store_name1,$params1);//Goi store
        $excute1= new SQLServerResult($get_thongtinluotkham);//Ket noi lop xu ly SQL và truyen gia tri tra ve tu lop ket noi SQL
        $thongtinluotkham= $excute1->get_as_array();//Tra ve mang toan bo data lay duoc
		//print_r($thongtinluotkham);		 
    ?>

     
     <table cellpadding="0" cellspacing="0" border="0" style="color:#036;line-height:1.7;font-size:13px; width:100%;font-family:Tahoma, Geneva, sans-serif; border-top:1px solid #000; border-bottom:1px solid #000; padding:5px 0px">         
         <tr>
            <td> Họ tên: <b><?=$thongtinbenhnhan[0]["HoLotBenhNhan"]." ".$thongtinbenhnhan[0]["TenBenhNhan"];?></b></td> 
            <td>Tuổi: <?=$thongtinbenhnhan[0]["Tuoi"];?></td>
            <td>G.tính: <?=$thongtinbenhnhan[0]["Gioi"];?></td>
            <td>ID: <?=$thongtinbenhnhan[0]["MaBenhNhan"]."_".date("dmyHi");?></td>
         </tr>
         <tr>
            <td  style="width:57%">Địa chỉ: <?=$thongtinbenhnhan[0]["DiaChi"];?></td> 
            <td colspan="3">Ngày khám:  <?php
			if($thongtinluotkham[0]["NgayGioChanDoan"]!=""){
            	echo $thongtinluotkham[0]["NgayGioChanDoan"]->format("H:i ".$_SESSION["config_system"]["ngaythang"]);
			}
			?></td>            
         </tr>  
              
     </table>
     <table cellpadding="0" cellspacing="0" border="0" style="font-size:13px; width:100%;font-family:Tahoma, Geneva, sans-serif;padding:5px 0px">         
         <tr>
            
             <td style="width:50%;padding-top:10px; text-align:center" valign="top">
             <table>
                 <div id="images_container"></div>
                 </table>
             	
            </td>             
         </tr>            
     </table>
    <?php if($_GET["header"]=="left"){ ?>
    	</div>
    <?php	} ?>
    
    <script type="application/javascript">
		$(document).ready(function() {
				
			<?php 
				echo "var _links='".$_GET['links']."';";
			?>
			
			_split_link= _links.split(":::");
			
			$("#images_container").append('<tr><td> <img id="myImg0" width="230px" height="180px" src="'+_split_link[0]+'"  /></td><td> <img id="myImg1" width="230px" height="180px" src="'+_split_link[1]+'"  /> </td></tr><tr><td> <img id="myImg2" width="230px" height="180px" src="'+_split_link[2]+'"  /></td><td> <img id="myImg3" width="230px" height="180px" src="'+_split_link[3]+'"  /> </td></tr>');
			
			/*for(i=0;i<=_split_link.length-2;i++){	
				if(i==0||i==1){
					$("#images_container").append('<tr><td> <img id="myImg'+i+'" width="230px" height="180px" src="'+_split_link[i]+'"  />  ');
				}
				else if(i==1||i==3){
					$("#images_container").append(' <br> <img id="myImg'+i+'" width="230px" height="180px" src="'+_split_link[i]+'"  /> </td></tr> ');
				}
				
			}*/
			//setInterval(function(){	send_message("print_preview","");	},2000);
			
			
				/*	var i=i+2;
			//alert(i)
			var ii=0;
			$("img").one('load', function() {
			 
			}).each(function() {
				ii++;
			  if(this.complete){ 
			 	if(ii==i){
					//alert(ii)
					t=setTimeout(function(){
				 		//send_message("print_preview","");					
				 	},500); 
				}
			 
			  };
			});*/
	 		
			 	
				print_preview();
			
				/*	d=setTimeout(function(){ 
							//window.close();
					},1100);*/
			/*t=setTimeout(function(){
				send_message("print_preview","");
				//window.print();
				d=setTimeout(function(){ 
					window.close();
				},500);
			},500);*/
		});
	</script>
</body>
</html>
 