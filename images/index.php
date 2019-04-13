<?php session_start(); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<META HTTP-EQUIV="CACHE-CONTROL" CONTENT="NO-CACHE">
<link rel="stylesheet" type="text/css" media="screen" href="css/expand_menu.css" />
<link rel="stylesheet" type="text/css" media="screen" href="css/styles.css" />
<script type="text/javascript" src="js/jquery-1.9.1.js"></script>
<script type="text/javascript" src="js/custom.js"></script>
<script src="js/grid/js/jquery.jqGrid.min.js" type="text/javascript"></script> 
<script src="js/grid/src/i18n/grid.locale-en.js" type="text/javascript"></script>
<script src="js/ui/jquery-ui.js"></script>
<script src="js/grid/js/jquery.layout.js" type="text/javascript"></script>
<script src="js/expandmenu.js" type="text/javascript"></script>
<script type="text/javascript" src="js/tiny_scroll/js/jquery.tinyscrollbar.min.js"></script>
<script type="text/javascript" src="js/jwerty/jwerty.js"></script>
<script type="text/javascript" src="js/message.js"></script>
<script type="text/javascript" src="js/globalize/globalize.js"></script>
<script type="text/javascript" src="js/globalize/globalize.culture.de-DE.js"></script>
<script type="text/javascript" src="js/globalize/jquery.mousewheel.js"></script>
<?php 
include("class/class.sqlserver.php");
include("class/basic_function.php");
?>
<!--
<script type="text/javascript" src="ui/jquery.ui.core.js"></script>
<script type="text/javascript" src="ui/jquery.ui.widget.js"></script>
<script type="text/javascript" src="ui/jquery.ui.button.js"></script>
<script type="text/javascript" src="ui/jquery.ui.position.js"></script>
<script type="text/javascript" src="ui/jquery.ui.autocomplete.js"></script>    
<script src="grid/plugins/jquery.contextmenu.js" type="text/javascript"></script>
<script src="grid/plugins/ui.multiselect.js" type="text/javascript"></script>
-->
<script type="text/javascript">
    jQuery.jgrid.no_legacy_api = true;
</script>
<!--<link rel="stylesheet" type="text/css" media="screen" href="js/grid/themes/start/jquery.ui.theme.css" />
<link rel="stylesheet" type="text/css" media="screen" href="js/grid/themes/start/jquery-ui.css" />-->
<link rel="stylesheet" type="text/css" media="screen" href="js/grid/themes/south-street/jquery-ui.css" />
<link rel="stylesheet" type="text/css" media="screen" href="js/grid/themes/ui.jqgrid.css" />
<!--<link rel="stylesheet" type="text/css" media="screen" href="js/grid/themes/jquery-ui.min.css" />-->
<link rel="stylesheet" type="text/css" media="screen" href="js/grid/themes/ui.multiselect.css" />
<link rel="stylesheet" href="js/tiny_scroll/css/website.css" type="text/css" media="screen"/>
<link rel="stylesheet" href="js/colorbox-master/example4/colorbox.css" type="text/css" media="screen"/>
<style type="text/css">
.ui-state-default-west{
	/*background:url(images/form_main/seperate.png) center no-repeat !important;*/
	/*background-size:contain!important;*/
	border:none!important;
	cursor:pointer!important;	
	background:none!important;
	-webkit-transition:box-shadow 0.1s ease-in-out;
    -moz-transition:box-shadow 0.1s ease-in-out;
    -o-transition:box-shadow 0.1s ease-in-out;
    -ms-transition:box-shadow 0.1s ease-in-out;
    transition:box-shadow 0.1s ease-in-out;    				
}
#menu_toggle{	
	padding:5px 0px;
	background:url("js/grid/themes/south-street/images/ui-bg_highlight-hard_15_459e00_1x100.png") repeat-x scroll   #459E00;
	border:#CCC 1px dashed;	
}
.ui-state-default-south{
	border:none!important;
	cursor:pointer!important;
	background:none!important;		
}
.ui-widget-header{
	 
/*	background-size:contain!important;
	border: 1px solid #369303!important;*/
}
 
.ui-layout-west{
	background: url(images/expand_menu/left.png) repeat !important;
	border:none!important; 
}
.ui-widget-content{	 
	border:none!important; 
}
.ui-layout-toggler .content {
    font: 14px bold Tahoma,Verdana,Arial,Helvetica,sans-serif;
	text-align:center;	 
	color:#fff;
	text-shadow:0px 1px 1px #000 ;
	vertical-align:middle!important;	
}
.left_col{	 
	background:url(images/form_main/background.jpg) no-repeat!important;
	box-shadow:0px 0px 20px #666!important;	
}
.right_col{	 
	background:url(images/form_main/layout_bg.png) center no-repeat!important;	 
}
.ui-state-default-south span{
	/*margin-left:20px;*/
}
.ui-state-default ui-corner-top{
	border:1px solid #000!important;	
}
#tabs li .ui-icon-close {
    cursor: pointer;
    float: left;
    margin: 0.4em 0.2em 0 0;
}
#tabs iframe{
	width:1300px;
	border:none;
	margin-top:10px; 
	/*border:1px solid #000;
	overflow:auto!important;	*/	
	/*transform:scale(0.9); 
	
	margin-left:-50px;*/
}
.ui-tabs .ui-tabs-panel {   
    padding: 0 10px;
}
#colorbox{
	-webkit-transition:box-shadow 0.5s ease-in-out;
    -moz-transition:box-shadow 0.5s ease-in-out;
    -o-transition:box-shadow 0.5s ease-in-out;
    -ms-transition:box-shadow 0.5s ease-in-out;
    transition:box-shadow 0.5s ease-in-out;	
}
#scrollbar1 .scrollbar
{opacity:0.5;filter:alpha(opacity=50);}   
/*.ui-tabs-nav{
	height:39px;
}
.ui-tabs .ui-tabs-nav li{
	margin-top:5px;
}*/
</style> 
<title>Main Form</title>
</head>
<body>	
	<?php		
		if((isset($_GET["login"]))){
			session_unset();	
			session_destroy();				
		}		 	
		if(!isset($_SESSION["user"]["login"])){
			$_SESSION["user"]["id_user"]="";
			$_SESSION["user"]["fullname"]="";
			include("modules/login/index.php");
			echo "<div id='overlay'></div>";
			return;
		}		 
			taoconfig(); 
			$data= new SQLServer;//tao lop ket noi SQL
			$store_name="{call GD2_GetPhanQuyenById_NhanVien_and_group_quyen(?)}";//tao bien khai bao store
			$params = array($_SESSION["user"]["id_user"]);//tao param cho store 
			$get_main_menu=$data->query( $store_name, $params);//Goi store
			$excute= new SQLServerResult($get_main_menu);//Ket noi lop xu ly SQL và truyen gia tri tra ve tu lop ket noi SQL
			$tam= $excute->get_as_array();//Tra ve mang toan bo data lay duoc
			//echo count($tam);
			//print_r($tam);   
    ?>	
	<div class="header_form">
    	<div id="header_main"><a href="http://<?=$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF']?>?login=false"> <?=$_SESSION["user"]["nickname"];?> (Thoát)</a></div><div class="seperate"></div>           
		<?php     
            foreach ($tam as $v) {//duyet toan bo mang tra ve
                    if(($v["IsBarButton"]==true)&&($v["Active"]=="1")){//neu la button
                    echo "<div id=\"$v[Icon]\" class=\"$v[ID_Form]_$v[TenControl]\">$v[Caption]</div><div class=\"seperate\"></div>";//se cho hien thi tai day
                }
            }
        ?>          
    </div>
    <div style="height:32px;"></div>    
	<div id="panel_main">            
        <div class="left_col ui-widget-content ui-layout-west" id="LeftPane">
            <div id="scrollbar1">
            <div class="scrollbar"><div class="track"><div class="thumb"><div class="end"></div></div></div></div>
            <div class="viewport">  <div class="overview">            
				<?php     
                    foreach ($tam as $v) {//duyet toan bo mang tra ve
                        if(($v["ID_Parent"]== "")&&($v["Active"]=="1")){//neu la menu cap 1						
                            echo " <div class=\"$v[ID_Form]_$v[TenControl]\" id=\"ExpandMenu\" ></div>";//danh dau vi tri se tao doi tuong javascript
                        }
                    }
                ?>  
             </div></div></div>          
        </div>         
        <div class="right_col ui-widget-content  ui-layout-center"> 
        	<div id="tabs" style="margin-top:-3px; width:99%"  class="ui-tabs ui-widget ui-widget-content ui-corner-all">
                   <div id="scrollbar2">
            <div class="scrollbar"><div class="track"><div class="thumb"><div class="end"></div></div></div></div>
            <div class="viewport">  <div class="overview">          
            			<!-- <div class="scroller">--><ul id="tab_tam"> </ul><!--</div>-->
               </div></div></div>           
                         
            		                       
             </div>                     
        </div> 
       <!-- <div class="ui-widget-content  ui-layout-south">        
              <div class="bottom_form" >
                   <div id="shift_info">
                        <div>Người sử dụng:</div> <span><?=$_SESSION["user"]["fullname"]?></span><br />
                        <div>Ngày làm việc:</div> <span><?=date("d/m/Y")?></span><br />
                        <a href="http://192.150.1.24:81/giaidoan2/?login=false">Thoát khỏi phầm mềm</a> 
                   </div>
                   <div id="lisence_info">
                        <div>HỆ THỐNG PHẦN MỀM QUẢN LÝ BỆNH VIỆN</div><br />
                        <span><strong>Phát triển bởi</strong> Công ty Cổ phần Bệnh viện Gia đình</span>   <br />
                        <span><strong>Phát hành</strong> © 2007-<?=date("Y")?> <strong>bởi</strong> FAMILY HOSPITAL   </span>
                   </div>    
              </div>      
        </div>       -->              
   </div>   
</body>
</html>  
<script type="text/javascript">
/*window.onbeforeunload = function () {
   		 return "Are you sure that you want to leave this page?";
    }*/
$(document).ready(function(){	 	
	$(document).ready(function(){	
	  $(".header_form div,#ExpandMenu ul li").hover(function(){
		 $(this).stop().animate({color:'#fff'}, 300);
		},function(){
		 $(this).stop().animate({color:'#000'}, 300);
	  });
	}); 	
	var flag=0;		
	var menus = new Array(); 	
	<?php  
		$i=0;$ii=0;   
		foreach ($tam as $v) {//duyet toan bo mang tra ve			
			if(($v["ID_Parent"]=="")&&($v["Active"]=="1")){//neu menu cap 1			
				if($i%2){
					echo "$(\".$v[ID_Form]_$v[TenControl]\").makeExpandMenu
					({skin:\"button_blue\",icon:\"plus_blue\",icon1:\"minus_blue\",title:\"$v[Caption]\"});\n";//tao doi tuong javascript						
				}else{
					echo "$(\".$v[ID_Form]_$v[TenControl]\").makeExpandMenu({skin:\"button_green\",title:\"$v[Caption]\"});\n";//tao doi tuong javascript		
				}
				$cache_id=$v["ID_Control"];//cache ID control
				$cache_tencontrol=$v["TenControl"];
				$cache_id_form=$v["ID_Form"];
				$cache_page_open=$v["PageOpen"];		
				
					//$cache_size = explode(":", $cache_page_open);
					//print_r($cache_page_open);	
				//if(count($cache_page_open)>3){
					//$cache_formsize = $cache_size[2].':'.$cache_size[3];
				//}else{
					$cache_formsize=$v['Form_size'];
				//}
				//
				echo "menus[$v[ID_Control]] = [];\n";//tao mang menu cap1 javascript
					foreach ($tam as $v) {//duyet toan bo mang tra ve	
						if(($v["ID_Parent"]==$cache_id)&&($v["KieuControl"]=="MenuCap2")&&($v["Active"]=="1")) {// neu id parent = mang main menu se tao mang javascript child menu
							echo "menus[$cache_id][$ii]='$cache_id_form\_$cache_tencontrol;$cache_id\_$v[TenControl];$v[Caption];$v[PageOpen];$v[OpenType];$cache_page_open;$cache_formsize;$v[ID_Control];$v[ChoPhepMoNhieuTab]';\n";
							$ii++;
						}		 		
					}
				$ii=0; 
				$i++;				
			}			
		}	
	?>  
	menus.forEach(function(entry) {//cap nhat menu cap 2
		//console.log(entry)
		var class_name="";
		if(entry.length>0){
			for(i=0;i<=entry.length-1;i++){
				temp=entry[i].split(";");
				if(temp[4]==true){
					var class_name="modal_form";
				}else{
					var class_name="tab_form";
				}
				modules=temp[3].split(":");					
				$("."+temp[0]+" ul").append("<li lang='"+temp[8]+"' role='"+temp[6]+"' id='resource.php?module="+temp[5]+"&view="+modules[0]+"&id_form="+temp[7]+"&id_loai="+modules[3]+"' class='"+modules[0]+ " " + class_name + "'>"+temp[2]+"</li>");
				//console.log(entry[i])
			}			
		}		 
	});	 
	render_page();	
	create_layout();
	create_scroll();	 
	$("#tabs iframe").css("height",$(window).height()-90+"px");
	var cache_left_col=$('.left_col').height();	//fix bug
	var cache_left_col1=0;	//fix bug	
	jQuery(window).resize(debouncer(function() {		 
		render_page();		
		$("#tabs iframe").css("height",$(window).height()-90+"px");
		t=setTimeout(function(){    
		  if((resize_flag==1)||( window.resolution==true)){
			/*  $("iframe").contents().find("body").css("transform","scale(0.81)"); 
			  $("iframe").contents().find("body").css("margin-left","-120px"); 		*/	
			   $("#tabs .ui-tabs-panel").css("overflow-x","scroll");
			   $("#tabs .ui-tabs-panel").css("height",$(window).height()-78+"px");					    
			   $("#tabs iframe").css("height",$(window).height()-105+"px"); 	
		  }
		},500);	
		//console.log($("#tabs iframe").height()) 	
	})); 
	makeTabs.creatTab();	
	//makeTabs.addTab("chinh",'<iframe id="frame1" src=""></iframe>'); 	

	/*$(".modal_form,.bongda").colorbox({iframe:true, width:$(window).width()-30+"px", height:$(window).height()-30+"px",scrolling:true,href:this.href,
		 onComplete : function() {
			 $("#colorbox").css("box-shadow","0px 0px 30px #1a1a1a"); 			 
		 }	
	});	*/
	$(".modal_form").click(function(e){
		temp=($(this).attr("role")).split(":");
		links=$(this).attr("id");  
		elem=1 + Math.floor(Math.random() * 10000000000000); 
		width=temp[0];
		height=temp[1];					
		dialog_main($(this).html(),width,height,elem,links);				 
	})
	
	$(".tab_form").click(function(e){
		//alert($(this).attr("class"))
		if($(this).attr("lang")=="0"){
			temp=($(this).attr("role")).split(":");							
			links=$(this).attr("id");
			mask=	($(this).attr("class")).split(" ");	
			if($.trim(mask[0])==''){
				mask[0]='formchuaco'
			}
			if($("."+mask[0]+"-tab").length){	
	  		 $("."+mask[0]+"-tab").trigger("click");
			}else{
			//alert($(this).attr("class").split(" ")[0]);	 
			elem=1 + Math.floor(Math.random() * 1000000000);			
			window.lastclick=mask[0]; 
			makeTabs.addTab($(this).html(),'<div class="loading"><div id="loading"></div></div><iframe id="'+mask[0]+'-frame" class="frame_'+elem+'"></iframe>',mask[0],$(this).attr("lang"));			
			callIframe(links, hide_loader,elem);	
			}
			$(".ui-state-default-west-open").dblclick()
		}else if($(this).attr("lang")=="1"){			
			temp=($(this).attr("role")).split(":");			
			links=$(this).attr("id");
			mask=	($(this).attr("class")).split(" ");	
			//alert($(this).attr("class").split(" ")[0]);
			if($.trim(mask[0])==''){
				mask[0]='formchuaco'
			}	 
			if($("."+mask[0]+"-"+$.cookie("id_benhnhan")).length){	
						$("."+mask[0]+"-"+$.cookie("id_benhnhan")).trigger("click");
			}else{
			elem=1 + Math.floor(Math.random() * 1000000000);			
			window.lastclick=mask[0]; 
			makeTabs.addTab($(this).html(),'<div class="loading"><div id="loading"></div></div><iframe id="'+mask[0]+'-frame" class="frame_'+elem+'"></iframe>',mask[0],$(this).attr("lang"));	
			callIframe(links, hide_loader,elem);
			}
			 $(".ui-state-default-west-open").dblclick()
		}
		t=setTimeout(function(){    
		  if( window.resolution==true){
			/*  $("iframe").contents().find("body").css("transform","scale(0.81)"); 
			  $("iframe").contents().find("body").css("margin-left","-120px"); 		*/	
			set_resolution();
		  }
		},500);		 
		
	})	 
	
	//alert($('.right_col').width())
	$(".ui-tabs-nav,#scrollbar2 .overview").css("width",$('.right_col').width()+"px");
	//$("").css("width",$('.ui-tabs-nav').width()+"px");
	$('#scrollbar2,#scrollbar2 .scrollbar,#scrollbar2 .viewport,#scrollbar2 .track').css("width",$('.right_col').width()+"px");
	$('#scrollbar2').tinyscrollbar({ axis: 'x'}); 
	$(".tim_kiem_benh_nhan").trigger("click");
	//$('#scrollbar2').tinyscrollbar_update("relative");	
	set_resolution();  
});
var makeTabs = new function(){
		var tabTitle = $( "#tab_title" ),
			tabContent = $( "#tab_content" ),			
			tabCounter = 0,
			tabCounter1 = 0;
			var tabs= $( "#tabs" );
	 	this.creatTab = function() {
			var tabs= $( "#tabs" ).tabs();	
			tabs.find( ".ui-tabs-nav" ).sortable({
				axis: "x",
				stop: function() {
				tabs.tabs( "refresh" );
				}
			});				 
			tabs.tabs({                                                                  
				activate:function(event,ui){  
					$(ui.newPanel.selector+ " iframe").focus();                                           
				}                                                                          
         	});  		 		
			//var tabs = $("#tabs").tabs({heightStyle: "fill"});
			tabs.delegate( "span.ui-icon-close", "click", function() {				
				var panelId = $( this ).closest( "li" ).remove().attr( "aria-controls" );
				temp=$( "#" + panelId ).attr("lang");
				//$("li."+temp).attr("lang","0");			 
				$( "#" + panelId ).remove();				
				tabCounter1--;
				tabs.tabs( "refresh" );
			});
			tabs.bind( "keyup", function( event ) {
				if ( event.altKey && event.keyCode === $.ui.keyCode.BACKSPACE ) {
				var panelId = tabs.find( ".ui-tabs-active" ).remove().attr( "aria-controls" );
				$( "#" + panelId ).remove();
				tabs.tabs( "refresh" );
				}
			});	
			tabs.resizable({
			 handles: 's',
			 alsoResize: '.ui-tabs-panel'
			});		 			
		}
		this.addTab = function(Title,Content,Mask,lang) {
			 
			
			if(lang==0){
				var tabTemplate = "<li><a href='#{href}'  class="+Mask+"-tab >#{label}</a> <span class='ui-icon ui-icon-close "+Mask+"' role='presentation'>Remove Tab</span></li>";
				
			}else{
					if(typeof window.class_tab_focus == 'undefined'){
					var tabTemplate = "<li><a href='#{href} ' class="+Mask+"-"+$.cookie("id_benhnhan")+"  >#{label}</a> <span class='ui-icon ui-icon-close "+Mask+"' role='presentation'>Remove Tab</span></li>";
				}else{
				var tabTemplate = "<li><a href='#{href} 'class="+window.class_tab_focus+" >#{label}</a> <span class='ui-icon ui-icon-close "+Mask+"' role='presentation'>Remove Tab</span></li>";
				delete window.class_tab_focus;
				}				
			}
			
			
			
			
			var label = Title || "Tab " + tabCounter,
			id = "tabs-" + tabCounter,
			li = $( tabTemplate.replace( /#\{href\}/g, "#" + id ).replace( /#\{label\}/g, label ) ),
			tabContentHtml = Content || "Tab " + tabCounter + " content.";
			tabs.find( ".ui-tabs-nav" ).append( li );
			tabs.append( "<div lang='"+Mask+"' id='" + id + "'>" + tabContentHtml + "</div>" );	
			$("#tabs iframe").css("height",$(window).height()-90+"px");			 	 
			tabs.tabs( "refresh" );
			/*$("#tabs").tabs({
			  active: tabCounter
			});*/
			//alert(tabCounter)
			$("#tabs").tabs( "option", "active", tabCounter1 );
			tabCounter++;
			tabCounter1++;
			$("#scrollbar2 .overview").css("width",$('.ui-tabs-nav').width()+"px");			
			$('#scrollbar2').tinyscrollbar_update("relative");
		}; 	 
};	
function create_scroll(){
	$('#scrollbar1,#scrollbar1 .scrollbar,#scrollbar1 .viewport,#scrollbar1 .track').css("height",$('.left_col').height()-30+"px");
	$('#scrollbar1').tinyscrollbar(); 
	$("#scrollbar1 .scrollbar").css("opacity","0.5");
	$("#scrollbar1 .scrollbar").hover(function(){
		 $('#scrollbar1 .scrollbar').animate({
   			opacity: 1,   
		  }, 500, function() {			 
		  });	 
	})
	$("#scrollbar1 .scrollbar").mouseleave(function(){
		 $('#scrollbar1 .scrollbar').animate({
   			opacity: 0.2,   
		  }, 500, function() {			 
		  });
		 	 
	})
}
function render_page(){	
	temp=jQuery(window).height()- ($(".header_form").height())+13;
	$("#panel_main").css("height",temp+"px"); 	
	$(".header_form").fadeIn(1000);	
	$("#panel_main").fadeIn(1000);
} 
var resize_flag=0;
function create_layout(){
	$('#panel_main').layout({	
		resizerClass: 'ui-state-default'       
		,west: {
			resizable: false
		,	size:					270		
		,	spacing_closed:		27
		,	togglerLength_closed:	85
		,	initClosed:				true
		,	togglerAlign_closed:	"center"
		,	togglerContent_closed:"<div id='menu_toggle'>M<BR>E<BR>N<BR>U</div>"
		,	togglerTip_closed:	"Open & Pin Menu"
		,	sliderTip:			"Slide Open Menu"
		,	slideTrigger_open:	"mouseover"
		,	fxName:					"drop"		// none, slide, drop, scale
		,	fxSpeed_open:			450
		,	fxSpeed_close:			450
		,	fxSettings_open:		{ easing: "easeInQuint" }
		,	fxSettings_close:		{ easing: "easeOutQuint" }
		,	onresize_end:function () { 				 
				$('#scrollbar1,#scrollbar1 .scrollbar,#scrollbar1 .viewport,#scrollbar1 .track').css("height",$('.left_col').height()-30+"px");
				$('#scrollbar1').tinyscrollbar_update("relative");	
				
			}
		,	onopen_end:function () { 
				  $(".ui-state-default-west").css("box-shadow","none");
				  $("#scrollbar2 .overview").css("width",$('.ui-tabs-nav').width()-30+"px");
				  $('#scrollbar2,#scrollbar2 .scrollbar,#scrollbar2 .viewport,#scrollbar2 .track').css("width",$('.right_col').width()+"px");	
				  $('#scrollbar2').tinyscrollbar_update("relative");
				  if(resize_flag==1){					   
					   //$("iframe").contents().find("body").css(" overflow-x","scroll"); 
					 	   $("#tabs .ui-tabs-panel").css("overflow-x","scroll");
						   $("#tabs .ui-tabs-panel").css("overflow-y","hidden");
						   $("#tabs .ui-tabs-panel").css("height",$(window).height()-78+"px");					    
						   $("#tabs iframe").css("height",$(window).height()-105+"px");	
				  }
					   
				/*	  $("iframe").contents().find("body").css("transform","scale(0.81)"); 
					  $("iframe").contents().find("body").css("margin-left","-120px"); */
					  
				 // }
				 // $("#tabs iframe").css("transform","scale(0.8)");				  
			}
		,	onclose_end:function () { 				 
				  $(".ui-state-default-west").css("box-shadow","0px 0px 20px #666");
				  $("#scrollbar2 .overview").css("width",$('.ui-tabs-nav').width()-30+"px");
				  $('#scrollbar2,#scrollbar2 .scrollbar,#scrollbar2 .viewport,#scrollbar2 .track').css("width",$('.right_col').width()+"px");	
				  $('#scrollbar2').tinyscrollbar_update("relative");
				  // $("iframe").contents().find("body").css("transform","scale(1)"); 
				 // $("iframe").contents().find("body").css("margin-left","0px"); 
				  if(window.resolution==false){
					  $("#tabs .ui-tabs-panel").css("overflow","hidden");
					  $("#tabs .ui-tabs-panel").css("height","100%");			   	
					  $("#tabs iframe").css("height",$(window).height()-90+"px");
				  }
				  resize_flag=0;	
				  //$("#tabs iframe").css("transform","scale(1)");
				  //alert($(".ui-tabs-nav").css("width")	);					   
			}
	 
						
		}			
	    ,	south: {
		 	resizable: false
		,	spacing_closed:		20
		,	togglerLength_closed:	100
		,	togglerAlign_closed:	"center"
		//,	togglerContent_closed:"FOOTER"
		,	togglerTip_closed:	"Open & Pin Menu"
		,	sliderTip:			"Slide Open Menu"
		,	slideTrigger_open:	"mouseover"
		,	fxName:					"drop"		// none, slide, drop, scale
		,	fxSpeed_open:			850
		,	fxSpeed_close:			850
		,	initClosed:				true
		,	fxSettings_open:		{ easing: "easeInQuint" }
		,	fxSettings_close:		{ easing: "easeOutQuint" }
		,	onopen_end:function () {
						 
				$('#scrollbar1,#scrollbar1 .scrollbar,#scrollbar1 .viewport,#scrollbar1 .track').css("height",$('.left_col').height()+"px");
				$('#scrollbar1').tinyscrollbar_update("relative");				 	
			}
		,	onclose_end:function () { 				 
				$('#scrollbar1,#scrollbar1 .scrollbar,#scrollbar1 .viewport,#scrollbar1 .track').css("height",$('.left_col').height()+"px");
				$('#scrollbar1').tinyscrollbar_update("relative");				 
			}		
		}		
	});	
	 $(".ui-state-default-west").css("box-shadow","0px 0px 20px #666");
	$("#menu_toggle").click(function(e) {		  
        	resize_flag=1;		 
    });
}


/*
//	CALLBACK TESTING...
		,	onhide_start:			function () { return confirm("START South pane hide \n\n onhide_start callback \n\n Allow pane to hide?"); }
		,	onhide_end:				function () { alert("END South pane hide \n\n onhide_end callback"); }
		,	onshow_start:			function () { return confirm("START South pane show \n\n onshow_start callback \n\n Allow pane to show?"); }
		,	onshow_end:				function () { alert("END South pane show \n\n onshow_end callback"); }
		,	onopen_start:			function () { return confirm("START South pane open \n\n onopen_start callback \n\n Allow pane to open?"); }
		,	onopen_end:				function () { alert("END South pane open \n\n onopen_end callback"); }
		,	onclose_start:			function () { return confirm("START South pane close \n\n onclose_start callback \n\n Allow pane to close?"); }
		,	onclose_end:			function () { alert("END South pane close \n\n onclose_end callback"); }
		//,	onresize_start:			function () { return confirm("START South pane resize \n\n onresize_start callback \n\n Allow pane to be resized?)"); }
		,	onresize_end:			function () { alert("END South pane resize \n\n onresize_end callback \n\n NOTE: onresize_start event was skipped."); }
		}*/
		jwerty.key('f6', false);jwerty.key('f7', false);jwerty.key('f8', false);jwerty.key('f9', false);jwerty.key('f11', false);jwerty.key('ctrl+p', false);
	
</script>