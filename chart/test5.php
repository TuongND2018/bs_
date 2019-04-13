 <!DOCTYPE HTML>
<html lang="en">
<head>

<script type="text/javascript">




          </script>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<META HTTP-EQUIV="CACHE-CONTROL" CONTENT="NO-CACHE">
<link rel="stylesheet" type="text/css" media="screen" href="../css/expand_menu.css" />
<link rel="stylesheet" type="text/css" media="screen" href="../css/styles.css" />
        <link rel="stylesheet" type="text/css" media="screen" href="../js/grid/themes/south-street/jquery-ui.css" />
<link rel="stylesheet" type="text/css" media="screen" href="../js/grid/themes/ui.jqgrid.css" />
<link rel="stylesheet" type="text/css" media="screen" href="../js/grid/themes/ui.multiselect.css" />
<link rel="stylesheet" href="../js/tiny_scroll/css/website.css" type="text/css" media="screen"/>
        <link rel="stylesheet" type="text/css" media="screen" href="../css/expand_menu.css" />
<link rel="stylesheet" type="text/css" media="screen" href="../css/styles.css" />
<script type="text/javascript" src="../js/jquery-1.9.1.js"></script>
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

 
		<script type="text/javascript">
       jwerty.fire('enter', 'button:first');
$(document).ready(function(){
		$( "#t2" ).autocomplete({
			source: "web_services.php?function=get_auto_complete1&status=index",
			minLength: 0,
			select: function( event, ui ) {
				$('#combobox').empty();
				$('#combobox').append(new Option(ui.item.NickName, ui.item.hoten, ui.item.TenPhongBan));				 
			
			},
			response: function( event, ui ) {
				
			}
		}).data("uiAutocomplete")._renderItem = function (ul, item) {
			//alertObject (item);
	var newid = String(item.NickName).replace(
					new RegExp(this.term, "gi"),
					"<span class='ui-state-highlight'>$&</span>");
					var newText = String(item.hoten).replace(
					new RegExp(this.term, "gi"),
					"<span>$&</span>");
					var newTenPhongBan = String(item.TenPhongBan).replace(
					new RegExp(this.term, "gi"),
					"<span>$&</span>");
					
	
					return $("<li></li>")
				.data("item.autocomplete", item)
				.append("<a>" + newid + "</a>  <a>"+ newText +"</a> <a>"+ newTenPhongBan +"</a>")					
				.appendTo(ul);		
				
				
		};
	

	
	$('body').bind('keydown', function (e) {
				if (e.keycode==13) {
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