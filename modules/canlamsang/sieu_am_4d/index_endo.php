<!--Người viết: Trần Trương Chính-->
<?php
	if($_SESSION["ThongTinBenhNhan"]["ID"]==""){
		echo "<script type='text/javascript'>";
			echo "parent.postMessage('hosobenhnhantrong;' , '*')";
		
		echo "</script>";
		return;
	};
?>
 
 
<style>
	#DM_template td  {	 
		word-wrap:normal!important;
		white-space:nowrap;
	}
	#DM_template_container{
		position:absolute;
		z-index:1000000;		 
		display:none;	
		box-shadow:0px 0px 6px #333;	 	
	}
	 button#last,button#first,button#prev,button#next{
		 font-size:7px!important;
		 margin-top:-6px;
		/* padding-left:20px;*/
		 
	 }
	 #open_template,#add_template{
		 font-size:11px!important;
		 margin-top:-3px;
		 margin-left:-6px;
		 
	 }
	  #open_template{		
		 border-radius:0px!important;	
	 }	 
	 .ui-corner-all{		 
		 border-radius:3px!important;		 
	 }
	 .fm-button{
		 box-shadow:0px 0px 5px #383838;
		 border:1px solid #919191;
	 }  	
	.top_form{
		width:100%;
		height:139px;
		margin-top:3px;				
	}	 	 
	.thongtin_tongthe,.thongtin_chidinh,.thongtin_luotkham{
		display:inline-block;
		box-shadow:0px 0px 10px #a0a0a0;
		border:1px solid #919191;
		vertical-align:top;
		width:49%;		
	}
	.thongtin_chidinh{	 	 
		padding-bottom:4px;
		padding-top:4px;		
	}
	.thongtin_luotkham{
		box-shadow:0px 0px 10px #a0a0a0;
		border:1px solid #919191;
		display:inline-block;
		vertical-align:top;
		width:55%;
		overflow-y:none;
		margin-top:2px;
		height:67px;		 		
	}
	.thongtin_luotkham_scroll{
		overflow-y:scroll;
		width:100%;
		height:45px;
	}	 
	.canlamsang{
		vertical-align:top;
		overflow-y:scroll;
		height:76px;
		border-top:1px solid #919191;
		padding-top:2px;
		padding-left:2px;
		border-bottom:1px solid #919191;		 
	}	 
	.thongtin_luotkham div div{
		display:inline-block;
		box-shadow:0px 0px 10px #a0a0a0;
		border:1px solid #919191;
		font-size:11px;
		margin-left:2px;
		margin-top:2px;		 
		padding:2px;
		width:114px;
		height:30px;
		text-align:center;
		vertical-align:top;
		margin-bottom:2px;	
		text-shadow:0 1px 0 rgba(255, 255, 255, 0.6);		 
		vertical-align:text-bottom;
		cursor:pointer;
	}
	.navigator{
		 display:inline-block;
		 border:1px solid #327E04;
		 padding-top:6px;
		 margin-top:-4px;
		 margin-left:2px;
		 padding-bottom:2px;
		 padding-left:2px;
		 padding-right:1px; 
	}
	.navigator_title{
		display:inline-block;
		width:100px;
		text-align:center;
	}
	.ui-layout-mask {
		background:#FFF !important;
		opacity:.20 !important;
		filter:	alpha(opacity=20) !important;
	}
	#mota{
		font-size:13px!important;		 	 
	}
</style>
<body>
<div id="DM_template_container">
<table id="DM_template"></table>
</div>
 <div class="top_form ui-widget-content">
 	<div style="padding:2px 0px;" class="thongtin_tongthe">
 		<div class="patient_info"></div>        
    </div>
    <div class="thongtin_chidinh">
 		<div class="form_row">
        	<label style="width:90px;text-align:right">Người chỉ định:</label><input style="width:100px" type="text" value="Bs Minh TQ">
            <label style="width:90px;text-align:right">Người thực hiện:</label><select  style="width:100px"><option>Admin</option></select>
            <label style="width:90px;text-align:right">Bs chẩn đoán:</label><select  style="width:100px"><option>-Chọn bác sỹ</option></select>
            <div style="height:3px"></div>
			<label style="width:90px;text-align:right">Ngày chỉ định:</label><input style="width:100px" type="text" value="22:26 24/05/13">
            <a href="#" id="dathuchien" class="fm-button ui-widget ui-state-default ui-corner-all fm-button-icon-left" style="margin-left:0px;  margin-bottom:1px; ">Bắt đầu<span class="ui-icon ui-icon-play"></span></a> 
     		<a href="#" id="hoantat" class="fm-button ui-widget ui-state-default ui-corner-all fm-button-icon-left" style="margin-left:0px;  margin-bottom:1px; ">Hoàn tất<span class="ui-icon ui-icon-check"></span></a>   
        </div>        
    </div>
    <div class="thongtin_luotkham" id="left_col">   
    	<div class="thongtin_luotkham_scroll"></div>
            <span class="navigator" >
                <button id="first">bắt đầu</button>
                <button id="prev">tới</button>
                <span class="navigator_title"></span>
                <button id="next">lui</button>
                <button id="last">kết thúc</button> 
            </span>
            <label id="ngay_kham"></label>        
    </div>
    <div class="thongtin_luotkham" id="center_col">
    	<div class="thongtin_luotkham_scroll"></div>
            <span class="navigator" >
                <button id="first">bắt đầu</button>
                <button id="prev">tới</button>
                <span class="navigator_title"></span>
                <button id="next">lui</button>
                <button id="last">kết thúc</button> 
            </span>
            <label id="ngay_kham"></label>        
    	 
    </div>
    <div class="thongtin_luotkham" id="right_col">
    	<div>
    	<a href="#" id="luu" class="fm-button ui-widget ui-state-default ui-corner-all fm-button-icon-left" style="margin-left:0px;width:40px;  margin-bottom:1px;float: right; ">Lưu<span class="ui-icon ui-icon-disk"></span></a> 
    	<a href="#" id="sua" class="fm-button ui-widget ui-state-default ui-corner-all fm-button-icon-left" style="margin-left:0px;width:40px;  margin-bottom:1px;float: right; ">Sửa<span class="ui-icon ui-icon-pencil"></span></a>
    		 	
    	</div>
    	<div style="margin-top: 32px;">
    	<a href="#" id="dong" class="fm-button ui-widget ui-state-default ui-corner-all fm-button-icon-left" style="margin-left:0px;width:40px;  margin-bottom:1px;float: right; ">Đóng<span class="ui-icon ui-icon-trash"></span></a> 
    	<a href="#" id="xemin" class="fm-button ui-widget ui-state-default ui-corner-all fm-button-icon-left" style="margin-left:0px;  margin-bottom:1px;float: right; ">Xem in<span class="ui-icon ui-icon-print"></span></a>
    		 	
    	</div>
    </div>
    
     
    <!--<div class="canlamsang"></div>--> 
    
    
 </div> 
 
 <div id="panel_main">    

        <div class="ui-widget-content ui-layout-west">
            <iframe id="images_viewer"  style="border:none;width:100%;height:100%; overflow:visible;" title="Bấm ESC để up hình, double click vào ảnh để xóa ảnh"></iframe>   
        </div>         
        <div class="ui-widget-content  ui-layout-center">
            Chọn mẫu
            <input type="text" id="template_title"  style="width:75%">
            <button id="open_template"style="height:23px;width:23px">mở template</button> 
            <button id="add_template" style="height:23px;width:23px;margin-left: -3px;">thêm template</button> 
            <label style="width:90px;text-align:left;font-size:14px">Mô tả:</label>
    	 	<input type="button" value="Xóa" id="xoamota"style="float: right;margin-top: 3px;"/>      
            <textarea id="mota" ></textarea>    	   
        </div>
        <div class="ui-widget-content ui-layout-east" id="inner"> 
            <div class="ui-layout-north" >
            	<label style="width:80px;text-align:left;font-size:14px;margin-left: 20px;">PARA</label><input  style="width:100px;margin-left: 40px;" type="text" value="1-0-0-0" id="para" name="para"> 
            </div>
            <div class="ui-layout-center"> 
            	<label style="text-align:left;font-size:14px">Kết luận:</label>
    	 		<input type="button" value="Xóa" id="xoaketluan"style="float: right;"/>
                <textarea id="ketluan" style="width:98%; height:90%;font-size:13px" ></textarea>

            </div>
            <div class="ui-layout-south">
            	<label style="text-align:left;font-size:14px">Lời khuyên:</label>
     			<input type="button" value="Xóa" id="xoaloikhuyen"style="float: right;"/> 
                <textarea id="loikhuyen" style="width:98%; height:78%;font-size:13px" ></textarea>
            </div>

        </div>          
	</div>
	<div id="dialog-form" title="Thêm bản ghi" style="display:none">
		<div style="text-align: center;">
			<label style="width:90px;text-align:center;font-size:20px">Mô tả có rồi,bạn có muốn ghi đè hay không? </label>
		</div>
		<div style="text-align: center;">
			<label style="width:90px;text-align:right;ont-size:17px;margin-right: 20px;" >Yes(Xóa)</label>
			<label style="width:90px;text-align:right;ont-size:17px">No(Chỉ chèn thêm)</label>
			<label style="width:90px;text-align:right;ont-size:17px;margin-left: 20px;">Cance(Thoát)</label>
		</div>
		<div style="text-align: center;margin-top:10px">
			<input type="button" value="Yes" id="yes" class="fm-button ui-widget ui-state-default ui-corner-all fm-button-icon-left"style="width: 60px; margin-right: 20px"/> 
			<input type="button" value="No" id="no" class="fm-button ui-widget ui-state-default ui-corner-all fm-button-icon-left" style="width: 60px"/> 
			<input type="button" value="Cancel" id="cancel"class="fm-button ui-widget ui-state-default ui-corner-all fm-button-icon-left" style="margin-left: 20px; width: 60px"/>
		</div>
	</div>
	<div id="dialog-form2" title="Thêm bản ghi" style="display:none">
		<div style="text-align: center;">
			<label style="width:90px;text-align:center;font-size:20px">Bạn có muốn xóa không?</label>
		</div>
		<div style="text-align: center;margin-top:10px">
			<input type="button" value="Yes" id="yes2"style="width: 60px; margin-right: 20px;background-color:#459E00"/> 
			<input type="button" value="No" id="no2"style="width: 60px;background-color:#459E00"/> 
		</div>
	</div>
</body>
</html>
<script type="text/javascript">
var _id_luotkham=[];
var _id_loaikham=[];
var _id_luotkham_non_unique=[];
var _id_kham=[];
var data_luotkham="";
var navigator_count=0,sub_navigator_count=0;
var _folder_name;
var ma_benhnhan="89045";
var id_loaikham;
var grid_click_status=false;
var id_kham;
$(document).ready(function() {	
	//alert(encode64("89045"))
	$.get( "resource.php?module=web_services&function=create_panel&action=index", function( data ) {
	  $( ".patient_info" ).html( data );
	  $( ".patient_info" ).css("width", $( "#patient_info" ).width()+"css");	    
	});	
	$("#panel_main").css("height",$(window).height()-151+"px");			 
	$("#panel_main").fadeIn(1000); 
	create_layout();	
	resize_control();	
	$.getJSON( "resource.php?module=<?=$modules?>&view=<?=$view?>&action=data_loaisieuam&idbenhnhan="+<?=$_SESSION["ThongTinBenhNhan"]["ID"]?>, 
		function( data ) {
			data_luotkham=data;
	 	//alertObject(data);
		var tam1_cls="";
		$.each( data, function( key, val ) {		 
			for(i=0;i<val.length;i++){
				//tam+=" ; "+val[i]["id"];
				var tam1_cls=val[i]["cell"];
				//tam_cls+= '<div id="cls_'+val[i]["id"]+'">'+tam1_cls[0]+"<br \>" +tam1_cls[5]+'</div>';
				_id_luotkham.push(tam1_cls[5]);				
				_id_loaikham.push(tam1_cls[3]);
				_id_luotkham_non_unique.push(tam1_cls[5]);
				_id_kham.push(val[i]["id"]);				
				
			}
			//_id_luotkham=$.unique(_id_luotkham).reverse();
			_id_kham=_id_kham.reverse();
			_id_luotkham_non_unique=_id_luotkham_non_unique.reverse();
			_id_loaikham=_id_loaikham.reverse();
			_id_luotkham=$.unique(_id_luotkham);
			//_id_loaikham=$.unique(_id_loaikham);
			navigator_load("end","first");			
			create_DM_template_grid(id_loaikham); 							 
		});		
	});	
	$(window).resize(function() {		 
		$("#panel_main").css("height",$(window).height()-151+"px");	
		resize_control();	 
	});
	//navigator_load(0);
	$(function() {
		$( "#left_col #first" ).button({
		  text: false,
		  icons: {
			primary: "ui-icon-seek-first"
		  }
		})
		.click(function() {
			navigator_load("first","first");
			
		});
		$( "#left_col #last" ).button({
		  text: false,
		  icons: {
			primary: "ui-icon-seek-end"
		  }
		})
		.click(function() {
			navigator_load("end","first");
			
		}); 
		$( "#left_col #next" ).button({
		  text: false,
		  icons: {
			primary: "ui-icon-seek-next"
		  }
		})
		.click(function() {
			navigator_load(1,"first");			 
		});  
		$( "#left_col #prev" ).button({
		  text: false,
		  icons: {
			primary: "ui-icon-seek-prev"
		  }
		})
		.click(function() {
			navigator_load(-1,"first");
			
		});
		$( "#open_template" ).button({
		  text: false,
		  icons: {
			primary: "ui-icon-triangle-1-s"
		  }
		})
		.click(function(e) {
			 e.stopPropagation();   
		 	 $("#DM_template_container").fadeIn(200);
			 $("#template_title").focus();			
		});
		$( "#add_template" ).button({
		  text: false,
		  icons: {
			primary: "ui-icon-plus"
		  }
		})
		.click(function() {
		 
		});
                
                $("#cancel").click(function(){
			$("#dialog-form").dialog("close");
		});
		$("#xoamota").click(function(){
			$("#dialog-form2").dialog("open");
			window.oper='xoamt';
				//$("#mota").val("");
				//$("#ketluan").val("");
				//$("#loikhuyen").val("");
		});
		$("#xoaketluan").click(function(){
			$("#dialog-form2").dialog("open");
			window.oper='xoakl';
				//$("#ketluan").val("");
		});
		$("#xoaloikhuyen").click(function(){
			$("#dialog-form2").dialog("open");
			window.oper='xoalk';
				//$("#loikhuyen").val("");
		});
		/*center*/
		$( "#center_col #first" ).button({
		  text: false,
		  icons: {
			primary: "ui-icon-seek-first"
		  }
		})
		.click(function() {
			sub_navigator_load("first");
		});
		$( "#center_col #last" ).button({
		  text: false,
		  icons: {
			primary: "ui-icon-seek-end"
		  }
		})
		.click(function() {
			sub_navigator_load("end"); 
		}); 
		$( "#center_col #next" ).button({
		  text: false,
		  icons: {
			primary: "ui-icon-seek-next"
		  }
		})
		.click(function() {
			sub_navigator_load(1);  
		});  
		$( "#center_col #prev" ).button({
		  text: false,
		  icons: {
			primary: "ui-icon-seek-prev"
		  }
		})
		.click(function() {
			sub_navigator_load(-1);  
		});		         
  	}); 
        $("#yes2").click(function(){
				if(window.oper=='xoamt'){
					$("#mota").val("");
					$("#ketluan").val("");
					$("#loikhuyen").val("");
					$( "#dialog-form2" ).dialog( "close" );
				}
				if(window.oper=='xoakl'){
					$("#ketluan").val("");
					$( "#dialog-form2" ).dialog( "close" );
				}
				if(window.oper=='xoalk'){
					$("#loikhuyen").val("");
					$( "#dialog-form2" ).dialog( "close" );
				}
			});
			  $("#no2").click(function(){
			  	$( "#dialog-form2" ).dialog( "close" );
			  });
 	phanquyen();
	var eventMethod = window.addEventListener ? "addEventListener" : "attachEvent";
	var eventer = window[eventMethod];
	var messageEvent = eventMethod == "attachEvent" ? "onmessage" : "message";
	eventer(messageEvent,function(e) {	
		parent.postMessage(e.data , '*')
	},false);
	$("body").click(function(e) {
        $("#DM_template_container").fadeOut(200);
    });
	$("#template_title").click(function(e) {
		e.stopPropagation(); 
        $("#DM_template_container").fadeIn(200);
    }); 
	$("#template_title").bind("keyup",function(e) {
			grid = $("#DM_template");
			if(jwerty.is("esc",e)){
				$("#DM_template_container").fadeOut(200);
			}else if(jwerty.is("↓",e)){
				 e.stopPropagation();
			var idcur = grid.jqGrid('getGridParam', 'selrow');
			if(idcur==null){
				var ids = grid.getDataIDs();
				grid.jqGrid("setSelection",ids[0], true);
			}else{
				var idcur = grid.jqGrid('getGridParam', 'selrow') 
				if (idcur == null) return;
				var ids = grid.getDataIDs();
				var index = grid.getInd(idcur);
				if (ids.length < 2) return;
				index++;
				if (index > ids.length)
					index = 1;
					grid.jqGrid("setSelection",ids[index - 1], true);
				}
			}else if(jwerty.is("↑",e)){
			  var idcur = grid.jqGrid('getGridParam', 'selrow');    
			  if(idcur==null){
				  var ids = grid.getDataIDs();
				  grid.jqGrid("setSelection",ids[0], true);
			  }else{		  
			   var idcur = grid.jqGrid('getGridParam', 'selrow') 
			   if (idcur == null) return;
				   var ids = grid.getDataIDs();
				   var index = grid.getInd(idcur);
				   if (ids.length < 2) return;
				   index--;
				   if (index == 0){
						 index = ids.length;
				   }
				   grid.jqGrid("setSelection",ids[index - 1], true);			  
			   }
			}else{		  
			  var columnNames = $(grid).jqGrid('getGridParam','colModel');
			  var searchFiler = $("#template_title").val(), f;
			  if (searchFiler.length === 0) {
			   grid[0].p.search = false;
			   $.extend(grid[0].p.postData,{filters:""});
			  }
			  f = {groupOp:"OR",rules:[]};
			  f.rules.push({field:columnNames[0].name,op:"cn",data:searchFiler});               
			  grid[0].p.search = true;
			  $.extend(grid[0].p.postData,{filters:JSON.stringify(f)});         
			  grid.trigger("reloadGrid",[{page:1,current:true}]);	
			}
	});
	$("#DM_template").click(function(e) {
		grid_click_status=true;
    });  
	
	
});
function sub_navigator_load(_value){
	var tong_luotkham=getCount2(id_loaikham, _id_loaikham);
	if((sub_navigator_count+_value>tong_luotkham-1)||(sub_navigator_count+_value<0)){
		return false;	
	}	
	if(_value=="first"){
		sub_navigator_count=0;	
	}else if(_value=="end"){		 
		sub_navigator_count=tong_luotkham-1;
	}else{
		sub_navigator_count+=parseInt(_value);
	}
	//$.each( data_luotkham, function( key, val ) {
		 
			/*	for(i=0;i<val.length;i++){
						tam=val[i]["id"];	
						//alert(val[i]["cell"])			
					 var tam1_cls=val[i]["cell"]; 
					tam1=$(this).attr("id");					 
					if(tam==tam1){					 
						$("#mota").val(val[i]["cell"][6]); 
						id_loaikham=val[i]["cell"][3];
						$("#center_col div").html(val[i]["cell"][1]); 						
					} 
				}*/
				 			 
				var ii=0,i=0;				 
				for(i=0;i<_id_kham.length;i++){
					if(_id_loaikham[i]==id_loaikham){						 				 
						//console.log(_id_kham[i]+"  "+ii);						 			 
						if((_id_kham[i]==id_kham)&&(_id_loaikham[i])==id_loaikham){
							//alert(_id_luotkham_non_unique[i])
							//sub_navigator_count=0;						
							 for(iii=0;i<_id_luotkham.length;i++){
								// alert(_id_luotkham_non_unique[i])
								if(_id_luotkham_non_unique[i]==_id_luotkham[iii]){
									navigator_load(iii,"")	
								}
							 }
							break;
						}
						ii++;						 
					}
				}
				//alert(_id_luotkham_non_unique[i])
				load_image($(this).attr("alt"));				
		 
	//});	 
	$("#center_col .navigator_title").html("Lần " + (sub_navigator_count+1) +"/"+tong_luotkham);
	//navigator_load(-1,"");
}
function navigator_load(_value,_click){
	if((navigator_count+_value>_id_luotkham.length-1)||(navigator_count+_value<0)){
		return false;	
	}
	var tam_cls=""; 
	if(_value=="first"){
		navigator_count=0;	
	}else if(_value=="end"){		 
		navigator_count=_id_luotkham.length-1;
	}else{
		navigator_count+=parseInt(_value);
	}
	var _mota="";		
	$.each( data_luotkham, function( key, val ) {					 
		for(i=0;i<val.length;i++){
			//tam+=" ; "+val[i]["id"];				
			var tam1_cls=val[i]["cell"];
			//alert(tam1_cls[5])
			if(_id_luotkham[navigator_count]==tam1_cls[5]){
				//alert(_id_luotkham[navigator_count]) 
				tam_cls+= '<div id="'+val[i]["id"]+'" alt="'+ma_benhnhan+"_"+tam1_cls[5]+"_"+tam1_cls[3]+'">'+tam1_cls[0]+"<br \>" +tam1_cls[5]+'</div>';				
				$("#ngay_kham").html(tam1_cls[2]);				 
				//break; 	 			 
			}
		}
		$("#left_col div").html(tam_cls);				
	});
	loaikham_click();
	if(_click=="first"){
		$("#left_col div div:first-child").click();
	}
	$("#left_col .navigator_title").html("Lượt khám " + (navigator_count+1) +"/"+_id_luotkham.length);	 
}
function loaikham_click(){
	$.each( data_luotkham, function( key, val ) {
		$("#left_col div div").click(function(e) {
				for(i=0;i<val.length;i++){
						tam=val[i]["id"];	
						//alert(val[i]["cell"])			
					 var tam1_cls=val[i]["cell"]; 
					tam1=$(this).attr("id");					 
					if(tam==tam1){					 
						$("#mota").val(val[i]["cell"][6]); 
						id_loaikham=val[i]["cell"][3];
						$("#center_col div").html(val[i]["cell"][1]); 						
					} 
				}
				var ii=0;				 
				for(i=0;i<_id_kham.length;i++){
					if(_id_loaikham[i]==id_loaikham){						 				 
						//console.log(_id_kham[i]+"  "+ii);						 			 
						if((_id_kham[i]==$(this).attr("id"))&&(_id_loaikham[i])==id_loaikham){
							id_kham=_id_kham[i]
							sub_navigator_count=0;						
							sub_navigator_load(ii);							
							break;
						}
						ii++;						 
					}
				}
				load_image($(this).attr("alt"));				
		});
	});
}
function resize_control(){
	//$(window).height()thongtin_chidinh thongtin_tongthe
	//alert($(".thongtin_tongthe").width())
	$(".thongtin_chidinh").css("width",$(window).width()-$(".thongtin_tongthe").width()-12+"px");
	$("#left_col").css("width",$(window).width()/3-5+"px");
	$("#center_col").css("width",$(window).width()/3-5+"px");
	$("#right_col").css("width",$(window).width()/3-7+"px");
	$("#mota").css("width",$(".ui-layout-center").width()-8+"px");
	$("#mota").css("height",$(".ui-layout-center").height()-59+"px");
	$("#template_title").css("width",$(".ui-layout-center").width()-120+"px");
}
function create_layout(){
	//alert("")
	$('#panel_main').layout({	
		resizerClass: 'ui-state-default'       
		,west: {
			maskContents:		true
		,	resizable: true
		,	size:					"35%"
		,	resizerDblClickToggle: false 
		,	onresize_end:function () { 				 
				 resize_control();
			}
		,	onopen_end:function () { 
				 
			}
		,	onclose_end:function () { 				 
			 	 
			}
						
		}			
	    ,	center: {
			resizable: true
		,	size:					"35%"
		,	resizerDblClickToggle: false		 
				
		 
		,	onresize_end:function () { 				 
				  resize_control();
			}
		,	onopen_end:function () {				 
				 	
			}
		,	onclose_end:function () { 				 
	  			 	 
			}		
		}  
		,	east: {
			resizable: true
		,	size:					"30%"
		,	resizerDblClickToggle: false		 
				
		 
		,	onresize_end:function () { 				 
				 resize_control();
			}
		,	onopen_end:function () {				 
			 
			}
		,	onclose_end:function () { 				 
	  		 		 
			}		
		}
		 
	});		 
}
function load_image(search_string){	   
	  _folder_name=$.ajax({url: 'resource.php?module=web_services&function=get_folder_name&action=index&id_form=111&id_loaikham='+id_loaikham, async: false, success: function(data, result) { 			           		 
      }}).responseText;	
	  _folder_name=$.trim(_folder_name)+"//"+ma_benhnhan;
	  $("#images_viewer").attr("src","resource.php?module=images_control&view=non_dicom_viewer&id_form=49&tenthumuc="+_folder_name+"&search_string="+search_string);   
}
function create_DM_template_grid(loaikham){	
		 $("#DM_template").jqGrid({
		url:'resource.php?module=<?=$modules?>&view=<?=$view?>&action=data_DMtemplate&loaikham='+loaikham,
		datatype: "json",	
		colNames:['Tên Mẫu', 'Nội dung', 'Kết luận', 'Lời khuyên'],
		colModel:[			
			{name:'TenTemplate',index:'TenTemplate'},
			{name:'NoiDung',index:'NoiDung'},			 
			{name:'KetLuan',index:'KetLuan'}, 			
			{name:'LoiKhuyen',index:'LoiKhuyen'}, 
				 	 	 
		],
		hidegrid: false,
		gridview: true,
		loadonce: true,
		scroll: false,		 
		modal:true,	 
		rowNum: -1,
		rowList:[],
		pager: '#prowed_DM_template',
		sortname: 'ID_Thuoc',
		height:($(window).height() / 100 * parseFloat(50)).toFixed(0),
		width: (($(window).width() / 100 * parseFloat(50)).toFixed(0)),
		viewrecords: true,	
		ignoreCase:true,
		shrinkToFit:true,
		cmTemplate: {sortable:false},
		
	//hoverrows:false,
	//jsonReader:{repeatitems:true,subgrid:{repeatitems:false}},	
		sortorder: "desc",
		serializeRowData: function (postdata) { 		 	
			//$("#rowed3").trigger("reloadGrid");		
			//return postdata;
		},
		onSelectRow: function(id){
                     var mota2=$("#mota").val();
			var ketluan2=$("#ketluan").val();
			var loikhuyen2=$("#loikhuyen").val();
                        var rowData = $('#DM_template').getRowData(id);
			  if(mota2!=""){
			  	$( "#dialog-form" ).dialog( "open" );
			  }
                          else{
                             $("#mota").val(rowData["NoiDung"]);
                             $("#ketluan").val(rowData["KetLuan"]);
                             $("#loikhuyen").val(rowData["LoiKhuyen"]);
                          }
			  if($("#yes").click(function(){
					$("#mota").val(rowData["NoiDung"]);
					$("#ketluan").val(rowData["KetLuan"]);
					$("#loikhuyen").val(rowData["LoiKhuyen"]);	
					$( "#dialog-form" ).dialog( "close" );
                                        
				})
			  	);
                           if($("#no").click(function(){
                              mota4=$.trim(rowData["NoiDung"]);
                              ketluan3=$.trim(rowData["KetLuan"]);
                              loikhuyen3=$.trim(rowData["LoiKhuyen"]);
                              mota2=mota2+"\n"+mota4;
                              if(ketluan2=="")
                              {	
                              	ketluan2=ketluan3;
                              }
                             else
                             {
                             	ketluan2=ketluan2+"\n"+ketluan3;
                             }
                              if(loikhuyen2=="")
                              {	
                              	loikhuyen2=loikhuyen3;
                              }
                             else
                             {
                             	 loikhuyen2=loikhuyen2+"\n"+loikhuyen3;
                             } 
                               
                              
                               $("#mota").val(mota2);
                               $("#ketluan").val(ketluan2);
                               $("#loikhuyen").val(loikhuyen2);
                               $( "#dialog-form" ).dialog( "close" );
                           }));
			 
			
			 $("#DM_template_container").fadeOut(200);
//			setTimeout(function(){
//				if(grid_click_status==true){		  
//					 var rowData = $('#DM_template').getRowData(id);
//					 $("#mota").val(rowData["NoiDung"]);	 
//					 $("#DM_template_container").fadeOut(200);
//					 grid_click_status=false;		
//				}
//			},100);
		},
		ondblClickRow: function (id, rowIndex, columnIndex){		
 		},
		loadComplete: function(data) {			 
			$("#DM_template_container").css("top",$("#template_title").offset().top+25+"px");
			$("#DM_template_container").css("left",$("#template_title").offset().left+"px");	
			$("#DM_template_container").click(function(e) {
				 e.stopPropagation();                
            });   			 
		},	  
		//caption: "Danh mục thuốc"
	});	
	 
	 $("#DM_template").jqGrid('filterToolbar',{searchOperators : false,searchOnEnter:false,defaultSearch:"cn"});
	 $("#DM_template").jqGrid('bindKeys', {} );
		
}
function getCount2(word, arr) {
    var i = arr.length, // var to loop over
        j = 0; // number of hits
    while (i) if (arr[--i] === word) ++j; // count occurance
    return j;
}  
$('#inner').layout({
            resizerClass: 'ui-state-default'
                    , north: {
                resizable: true
                        , size: "10%"
                        , resizerDblClickToggle: false
                        , onresize_end: function() {
                    resize_control();
                }
                , onopen_end: function() {

                }
                , onclose_end: function() {

                }

            }
            , center: {
                resizable: true
                        , size: "60%"
                        , resizerDblClickToggle: false


                        , onresize_end: function() {
                    resize_control();
                }
                , onopen_end: function() {

                }
                , onclose_end: function() {

                }
            }
            , south: {
                resizable: true
                        , size: "30%"
                        , resizerDblClickToggle: false
                        , onresize_end: function() {
                    resize_control();
                }
                , onopen_end: function() {

                }
                , onclose_end: function() {

                }

            }
        });
$( "#dialog-form" ).dialog({
            autoOpen: false,
            height: ($(window).height()/100 * parseFloat(25)).toFixed(0),
            width: ($(window).width()/100 * parseFloat(40)).toFixed(0),
            modal: false,
             open: function(event,ui){
                $( "#dialog-form" ).dialog( "option", "height", ($(window).height()/100 * parseFloat(25)).toFixed(0) );
                $( "#dialog-form" ).dialog( "option", "width", ($(window).width()/100 * parseFloat(40)).toFixed(0) );
                 
                
            },
            buttons: {
           	}
            });
$( "#dialog-form2" ).dialog({
            autoOpen: false,
            height: ($(window).height()/100 * parseFloat(20)).toFixed(0),
            width: ($(window).width()/100 * parseFloat(40)).toFixed(0),
            modal: false,
             open: function(event,ui){
                $( "#dialog-form2" ).dialog( "option", "height", ($(window).height()/100 * parseFloat(20)).toFixed(0) );
                $( "#dialog-form2" ).dialog( "option", "width", ($(window).width()/100 * parseFloat(40)).toFixed(0) );
                 
                
            },
            buttons: {
           	}
            });
</script>
 
 
