 <!DOCTYPE HTML>
<html lang="en">
<head>

<script type="text/javascript">
	<?php

include("class.sqlserver.php");


if (isset($_GET["id_benhnhan"])){
	$mabenhnhan=$_GET["id_benhnhan"];	
	
	$data= new SQLServer;
	$store_name="{call GD2_GET_AUTOCOMPLETETEXTBOX (?,?,?,?)}";
	$params = array("DM_BenhNhan","gioitinh","mabenhnhan",$mabenhnhan);		 
	$get_danh_muc_phong_ban=$data->query( $store_name, $params);
	$excute= new SQLServerResult($get_danh_muc_phong_ban);
	$tam= $excute->get_as_array();
	if(count($tam)==0){
		echo ("alert ('ma benh nhan khong ton tai' )");
		}else{
			
			if($tam[0]['gioitinh']==0){
				 print   "
                 window.open('http://192.168.1.24:81/giaidoan2/chart/cannang_betrai.php?id_benhnhan=". $mabenhnhan. "', '_blank');
             ";
			 
	//header( "Location: http://192.168.1.24:81/giaidoan2/chart/cannang_betrai.php?id_benhnhan=". $mabenhnhan ) ;		 
			 
			}
			else{
				 print   "
                 window.open('http://192.168.1.24:81/giaidoan2/chart/cannang_begai.php?id_benhnhan=". $mabenhnhan. "', '_blank');
             ";
				//header( "Location: http://192.168.1.24:81/giaidoan2/chart/cannang_begai.php?id_benhnhan=". $mabenhnhan ) ;	
				}
	
		}
}else{
	$mabenhnhan="";	
}

?>
          </script>
		<meta charset="utf-8">
		<title>Cân nặng bé  theo tuổi</title>   
        <link rel="stylesheet" type="text/css" media="screen" href="../css/expand_menu.css" />
<link rel="stylesheet" type="text/css" media="screen" href="../css/styles.css" />
<script type="text/javascript" src="../js/jquery-1.9.0.js"></script>
<script type="text/javascript" src="../js/custom.js"></script>
<script src="../js/grid/js/jquery.jqGrid.min.js" type="text/javascript"></script> 
<script src="../js/grid/src/i18n/grid.locale-en.js" type="text/javascript"></script>
<script src="../js/ui/jquery-ui.js"></script>
<script src="../js/grid/js/jquery.layout.js" type="text/javascript"></script>
<script src="../js/expandmenu.js" type="text/javascript"></script>
<script type="text/javascript" src="../js/tiny_scroll/js/jquery.tinyscrollbar.min.js"></script>
<!--<script type="text/javascript" src="js/jwerty/jwerty.canBridge.js"></script>
<script type="text/javascript" src="js/jwerty/jwerty.enderBridge.js"></script>-->
<script type="text/javascript" src="../js/jwerty/jwerty.js"></script>

        <link rel="stylesheet" type="text/css" media="screen" href="../js/grid/themes/south-street/jquery-ui.css" />
<link rel="stylesheet" type="text/css" media="screen" href="../js/grid/themes/ui.jqgrid.css" />
<link rel="stylesheet" type="text/css" media="screen" href="../js/grid/themes/ui.multiselect.css" />
<link rel="stylesheet" href="../js/tiny_scroll/css/website.css" type="text/css" media="screen"/>
		<script type="text/javascript">
        jwerty.fire('enter', 'button:first');
$(document).ready(function(){
		$( "#t2" ).autocomplete({
			source: "web_services.php?function=get_auto_complete_aa&status=index",
			minLength: 4,
			select: function( event, ui ) {
				$('#combobox').empty();
				$('#combobox').prepend(new Option(ui.item.label, ui.item.value));				 
				//$(this).val(ui.item.label)
			/*log( ui.item ?
			"Selected: " + ui.item.value + " aka " + ui.item.label :
			"Nothing selected, input was " + this.value );*/
			},
			response: function( event, ui ) {
				//alert("")
			}
		}).data("uiAutocomplete")._renderItem = function (ul, item) {
			
	var newid = String(item.id).replace(
					new RegExp(this.term, "gi"),
					"<span class='ui-state-highlight'>$&</span>");
					var newText = String(item.label).replace(
					new RegExp(this.term, "gi"),
					"<span>$&</span>");
	
					return $("<li></li>")
				.data("item.autocomplete", item)
				.append("<a>" + newid + "</a>  <a>"+ newText +"</a>")					
				.appendTo(ul);		
				
				
		};
	
		
	
	$('body').bind('keydown', function (e) {
				if (jwerty.is('enter',e)) {
		var nationality = $("#t2").val(); 
		
			 window.location.href  ="http://192.168.1.24:81/giaidoan2/chart/getidbenhnhan.php?id_benhnhan="+nationality;
		}
	});
	
})
            
             
         </script>
          <style>
  .ui-autocomplete-loading {
    background: white url('../images/ui-anim_basic_16x16.gif') right center no-repeat;
  }
     .ui-button { margin-left: -1px; }     .ui-button-icon-only .ui-button-text { padding: 0.35em; }      .ui-autocomplete-input { margin: 0; padding: 0.48em 0 0.47em 0.45em; }
	 
  .ui-menu { width: 150px; display:none; position:absolute;
  	 
	box-shadow:0px 0px 3px #333;	
  
   }
   .ui-state-highlight{
	   color:#F60!important;
   }
   
   .ui-menu-item a{
	   display:inline!important;
	   }
	   a.tryitbtn, a.tryitbtn:link, a.tryitbtn:visited, a.showbtn, a.showbtn:link, a.showbtn:visited {
display: inline-block;
color: #FFFFFF;
background-color: #8AC007;
font-weight: bold;
font-size: 12px;
text-align: center;
padding-left: 10px;
padding-right: 10px;
padding-top: 3px;
padding-bottom: 4px;
text-decoration: none;
margin-left: 5px;
margin-top: 0px;
margin-bottom: 5px;
border: 1px solid #aaaaaa;
border-radius: 5px;
white-space: nowrap;
}
a:link, a:visited {
color: #000000;
background-color: transparent;
}
  
  a.tryitbtn:hover{
	  display: inline-block;
color: #8AC007;
background-color: #FFFFFF;
font-weight: bold;
font-size: 12px;
text-align: center;
padding-left: 10px;
padding-right: 10px;
padding-top: 3px;
padding-bottom: 4px;
text-decoration: none;
margin-left: 5px;
margin-top: 0px;
margin-bottom: 5px;
border: 1px solid #aaaaaa;
border-radius: 5px;
white-space: nowrap;
	  
	  }
  
  
  </style>
  	</head>           
         
         
 <body>           
         

 
<div class="ui-widget">
<select id="combobox" style="display: none;">
</select>
<label for="birds">Mã Bệnh Nhân: </label>
<input type="text" name="t2" id="t2" /><br>
<br>
<br>

<a target="_blank" href="http://192.168.1.24:81/giaidoan2/chart/cannang_betrai.php" class="tryitbtn">Xem Biểu Đồ Mẫu Bé Trai</a>
<a target="_blank" href="http://192.168.1.24:81/giaidoan2/chart/cannang_begai.php" class="tryitbtn">Xem Biểu Đồ Mẫu Bé Gái</a>

</div>
<div class="ui-widget" style="margin-top: 2em; font-family: Arial;">

 
 
</div>	
</body>
           
</html>