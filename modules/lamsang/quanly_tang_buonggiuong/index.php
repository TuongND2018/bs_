<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>gridster.js Test Suite</title>
  <!-- Load local jQuery, removing access to $ (use jQuery, not $). -->
  
  


  <!--<script type="text/javascript" src="jquery-1.9.0.js"></script>
<!--<script>$.noConflict()</script>-->
  <!--<script src="jquery.gridster.js" type="text/javascript" charset="utf-8"></script>-->

  <!--<link rel="stylesheet" type="text/css" href="jquery.gridster.css">-->
 <style>
	.blink1 {
		animation: blink 2s steps(10, start) infinite;
	}
	@keyframes blink {
		to {
			visibility: hidden;
		}
	}
	 #menu_toggle{
        font-size:12px;
        padding:5px 0px;
        background:url("js/grid/themes/south-street/images/ui-bg_highlight-hard_15_459e00_1x100.png") repeat-x scroll   #459E00;
        border:#CCC 1px dashed;
    }
    .texts{
    	width: 100px!important;
    }
   
    .trong{
    	background-color: #DDDDDD!important;
    	width: 20%!important;
    	height: 20%!important;
    }
    .ban{
    	background-color: red!important;
    	width: 20%!important;
    	height: 20%!important;
    }

</style>
</head>
<body id="body">
   
<div class="ui-widget-content ui-layout-west">
	 <table id="rowed3" ></table>
	 <div id="prowed3"></div>
</div>
 <div id="sodo" class="gridster ui-widget-content ui-layout-center">
 	<div id="sodo_phong" align="center" style="margin-top:100px">
	</div>
	
</div>
<div class="ui-widget-content ui-layout-east">
	 <table id="rowed4" ></table>
	 <div id="prowed4"></div>
</div>
<!--<div style="position:absolute; top:0; left:0">
  <svg>
	  <g>
		<!--<rect class="bar" x="220" y="80" width="10" height="180" stroke="black" stroke-width="0" />
	  </g>
  </svg>
  </div>-->
</body>
</html>
<script type="text/javascript">
$(document).ready(function() {
	load_all();
	 create_grid();
	 create_layout();
	 window.id_tang=0;
	 window.danhdau=1;
	 create_grid2();	
	/*$( "body" ).data( 'A4',  {quanhe:"HL1",huong:0} );	//huong 0 la doc, 1 la ngang		
	$( "body" ).data( 'HL1', {quanhe:"HL2",huong:1} );
	$( "body" ).data( 'HL2', {quanhe:"HL3",huong:0} );
	$( "body" ).data( 'HL3', {quanhe:"HL5",huong:0} );	 
	$( "body" ).data( 'HL5', {quanhe:"HL3",huong:0} ); */
	resize_control();
	$(function(){ //DOM Ready
	 
		$(".gridster ul").gridster({
			widget_margins: [2, 2],
			widget_base_dimensions: [31, 31]
		});
 
	});
	t=setTimeout(function(){
			$('.gridster').find('li ').each(function() {		
				$(this).css("font","12px/"+$(this).height()+"px Tahoma, Geneva, sans-serif");			//alert($(this).height())		   
			});
			 //veduongdi("A4");
			$("li span").delay(100).fadeIn(200);
			//chonphong("A4")
			
	},100);
	/*t=setTimeout(function(){
		xacdinhgiaodiem()
			
			 
	},200);*/
	
	 phanquyen();
	 /*$( "#sodo_phong" ).bind( "click", function(e) {
		  $.post( "resource.php?module=<?=$modules?>&view=<?=$view?>&action=data_buonggiuongbenh2&id_parent="+e.target.id)
			.done(function( data ) {	
				  $("#"+e.target.id).html(data);	 
			        $(function(){ //DOM Ready
	 
		$(".benh ul").gridster({
			widget_margins: [2, 2],
			widget_base_dimensions: [31, 31]
		});
 
	});
	t=setTimeout(function(){
			$('.benh').find('li ').each(function() {		
				$(this).css("font","12px/"+$(this).height()+"px Tahoma, Geneva, sans-serif");			//alert($(this).height())		   
			});
			 //veduongdi("A4");
			$("li span").delay(100).fadeIn(200);
			//chonphong("A4")
					
			},100);
                })
                .fail(function() {
                alert( "error" );
                });
		});*/
});
function chonphong(elem){
	$("#"+elem).addClass("blink1");
}
function veduongdi(elem){
	var  _width=$("#"+elem).width();
	var  _height=$("#"+elem).height();
	var  _top=$("#"+elem).position().top;
	var  _left=$("#"+elem).position().left;
	var  _width1=0;
	var  _height1=0;
	var  _top1=0;
	var  _left1=0;
	var ii=0; var quanhe;
	$(".gridster").append("<div id='duongdi'></div>");
	$("#duongdi").css("height",$(".gridster").height()+"px");
	$("#duongdi").css("width",$(".gridster").width()+"px");
	//$(".duongthang").css("background-color","red");
	//$(".duongthang").css("height",_height+"px");
	//$(".duongthang").css("width", "10px");
	//$("#duongdi").css("top", _top+"px");
	//$("#duongdi").css("left", _left+(_width/2)-5 +"px");
	
	//$( "body" ).data( _id ).Nlienhe
	//$(".duongthang").css("height","10px");
	 
	for (i=0;i<1000;i++){		  
		//if(i==0){
			ii++;
			$("#duongdi").append("<div class='duongthang' id='duong"+ii+"'></div>");
			_width1=$("#"+$( "body" ).data( elem ).quanhe).width();
		    _height1=$("#"+$( "body" ).data( elem ).quanhe).height();
		    _top1=$("#"+$( "body" ).data( elem ).quanhe).position().top;
		    _left1=$("#"+$( "body" ).data( elem ).quanhe).position().left;			
		/*}else{
			_width1=$("#"+$( "body" ).data( quanhe ).quanhe).width();
		    _height1=$("#"+$( "body" ).data( quanhe ).quanhe).height();
		    _top1=$("#"+$( "body" ).data( quanhe ).quanhe).position().top;
		    _left1=$("#"+$( "body" ).data( quanhe ).quanhe).position().left;
			quanhe=$( "body" ).data( elem ).quanhe;
			
		}*/
			//alert($("#"+$( "body" ).data( elem ).quanhe).position().left + "  " +_left)
				/*$("#duongdi").css("top", _top+"px");
				$("#duongdi").css("left",  _left+(_width/2)-5 +"px");*/
			if($( "body" ).data( elem ).huong==0){	
				$("#duong"+ii).css("top", _top+"px");
				$("#duong"+ii).css("left", _left+(_width/2)-5+"px");					
				$("#duong"+ii).css("height", _height+"px");
				$("#duong"+ii).css("width", "10px");				
			}else{
				if(xacdinh_traiphai(_left+_width,_left1+_width1)=="trai"){
					//alert(_left1)
					$("#duong"+ii).css("top", _top + _height/2 -5 +"px");
					$("#duong"+ii).css("left",  _left1 + _height1/2 -5 +"px");
					$("#duong"+ii).css("width",  _width - _left1 + _height1 + 10 + "px");
				}else{
					$("#duong"+ii).css("top", _top + _height/2 -5 +"px");
					$("#duong"+ii).css("left",  _left +"px");
					$("#duong"+ii).css("width",  _width - ((_left+_width) - (_left1+_width1)) - (_width1/2) +5 +"px");
				}
				ii++;
				$("#duongdi").append("<div class='duongthang' id='duong"+ii+"'></div>");
				if(_top1>_top){
					//alert(ii)
					$("#duong"+ii).css("top",  _top + _height/2 +"px");
					$("#duong"+ii).css("left",  _left1 + _height1/2 -5 +"px");
					$("#duong"+ii).css("height",  _height/2 +"px");
				}else{
					
				}
			}
			//break;	
			  _width=_width1;
			  _height=_height1;
			  _top=_top1;
			  _left=_left1;
			  elem=$( "body" ).data( elem ).quanhe;
	}
	
	 
	
}

function tam(){
	alert(_left1)
}

function xacdinh_traiphai(val1,val2){
	if(val1/2>val2){
		return "trai";
	}else{
		return "phai";
	}
	
}
	/*	$("#duongdi").css("top", $("#"+$( "body" ).data( elem ).quanhe).position().top+"px");
				$("#duongdi").css("left", $("#"+$( "body" ).data( elem ).quanhe).position().left+"px");
			if($( "body" ).data( elem ).huong==0){					
				$(".duongthang").css("height", $("#"+$( "body" ).data( elem ).quanhe).height()+"px");
				$(".duongthang").css("width", "10px");				
			}else{
				$(".duongthang").css("height","10px");
				$(".duongthang").css("width",  $("#"+$( "body" ).data( elem ).quanhe).width()+"px");
			}
			break;	*/
 function create_grid(){	
	 $("#rowed3").jqGrid({
		url:"resource.php?module=<?=$modules?>&view=<?=$view?>&action=data_booking",
		datatype: "json",	
		colNames: ['id','Tên tầng','Mô tả','Ghi chú','Sử dụng','Cao','Rộng'],
            colModel: [
            	{name:'Id_Tang',index:'Id_Tang',search:false, width:"2%", editable:false,align:'right',hidden:true}, 
				{name:'TenTang',index:'TenTang', width:"15%", editable:true,align:'center',hidden:false,editrules: {required:true},edittype:"text",formoptions:{ rowpos:1, colpos:1}}, 
				{name:'MoTa',index:'MoTa', width:"15%", editable:true,align:'center',hidden:true,editrules: {required:false,edithidden:true},edittype:"text",formoptions:{ rowpos:2, colpos:1}}, 
				{name:'GhiChu',index:'GhiChu', width:"15%", editable:true,align:'center',hidden:true,editrules: {required:false,edithidden:true},edittype:"text",formoptions:{ rowpos:3, colpos:1}}, 
				{name:'SuDung',index:'SuDung', width:"15%", editable:true,align:'center',hidden:true,editrules: {required:false,edithidden:true},edittype:"checkbox",formatter:"checkbox",formoptions:{ rowpos:4, colpos:1},editoptions: {value:"1:0"},stype:"select",searchoptions: { sopt: ['eq', 'ne'],value:':;1:Có;0:Không'}},	
				{name:'Cao',index:'Cao', width:"15%", editable:true,align:'center',hidden:true,editrules: {number:true,required:false,edithidden:true},edittype:"text",formoptions:{ rowpos:5, colpos:1}}, 
				{name:'Rong',index:'Rong', width:"15%", editable:true,align:'center',hidden:true,editrules: {number:true,required:false,edithidden:true},edittype:"text",formoptions:{ rowpos:6, colpos:1}}, 
            ],
	//

			loadonce: true,
            scroll: false,
            modal: true,
            shrinkToFit: true,

            rowNum: 10000000,
			pginput:false,
			pgbuttons:false,
            rowList: [],
            pager: '#prowed3',
            height: 460,
            width: 270,
            viewrecords: true,
            ignoreCase: true,
            sortorder: "desc",
			closeAfterEdit: true,
	//hoverrows:false,
	//jsonReader:{repeatitems:true,subgrid:{repeatitems:false}},	
		
		serializeRowData: function (postdata) { 		 	
			//$("#rowed3").trigger("reloadGrid");		
			//return postdata;
		},
		onSelectRow: function(id){	
			if(danhdau=="0"){
				danhdau="1";
			} 	
			else{
				var rowData = $("#rowed3").getRowData(id);   
             	window.id_tang=rowData["Id_Tang"];
				$('#rowed4').jqGrid('setGridParam', {url: 'resource.php?module=<?=$modules?>&view=<?=$view?>&action=data_buonggiuongbenh&id_tang='+window.id_tang,datatype:'json'}) .trigger('reloadGrid');
				
				$.post( "resource.php?module=<?=$modules?>&view=<?=$view?>&action=data_sodo_buonggiuongbenh&id_tang="+id_tang)
				.done(function( data ) {	
				        $("#sodo_phong").html(data);	 

				       dum_sodo();
	                })
	                .fail(function() {
	                alert( "error" );
	                });
			}
			                                        
		},
		
		ondblClickRow: function (rowId, rowIndex, columnIndex) {
			$("#edit_rowed3").trigger('click'); 
 		},
		loadComplete: function(data) {	
			grid_filter_enter("#rowed3") //enter: chuyen con tro sang o tiếp theo		 
		},	  
		caption: "Danh sách tầng"

	});	
	$("#rowed3").jqGrid('filterToolbar',{searchOperators : false,searchOnEnter:false,defaultSearch:"cn"});
	$("#rowed3").jqGrid('navGrid',"#prowed3",{add: permission["add"], edit: permission["edit"], del: permission["delete"], search: false,closeAfterEdit: true,closeOnEscape : true, bSubmit: "Submit",
     bCancel: "Cancel"}, //options						 
		{height:'auto',width:'auto',reloadAfterSubmit:false,url:'resource.php?module=<?=$modules?>&view=<?=$view?>&action=controller&oper=edit&hienmaloi=1',closeOnEscape : true,modal: true,recreateForm: true,savekey: [true,121],closeAfterEdit: true,
			   afterSubmit : function(response, postdata) { 
				  	if(response.responseText==1){
						var success=false;
						var new_id="<?php get_text1("sua_khongthanhcong") ?>";													
					}else{
						tooltip_message("<?php get_text1("sua_thanhcong") ?>");
						var success=true;	
						var new_id="<?php get_text1("sua_thanhcong") ?>";
						//$("#rowed3").jqGrid('setGridParam',{datatype: 'json'}).trigger('reloadGrid');		
						$.post( "resource.php?module=<?=$modules?>&view=<?=$view?>&action=data_sodo_buonggiuongbenh&id_tang="+window.id_tang)
			.done(function( data ) {	
			        $("#sodo_phong").html(data);

			        dum_sodo();

                })
                .fail(function() {
                alert( "error" );
                });
			        						
					};						
					return [success,new_id] ;					   
				},
				beforeShowForm: function(formid){					 
					canhgiua(formid);
					number_textbox("#Cao");
					number_textbox("#Rong");
												  
				},
				afterShowForm : function (formid) {
					/*var mota=$("#tr_MoTa").html();
					$("#tr_MoTa").html("");
					var congty=$("#tr_ID_CongTy").html();
					$("#tr_ID_CongTy").html("");
					$("#tr_ID_CongTy").html(mota);
					$("#tr_MoTa").html(congty);*/						
					
					xuongdong(formid);
					lendong(formid);					
					
				},
				onClose : function(formid){
					$("#editmodrowed3").css("box-shadow","");										
				}
							  
		}, // edit options
		{height:'auto',width:'auto',reloadAfterSubmit:false,url:'resource.php?module=<?=$modules?>&view=<?=$view?>&action=controller&oper=add',closeOnEscape : true,closeAfterAdd:false,modal: true,addedrow: "first",recreateForm:true,savekey: [true,121],closeAfterAdd: true
				,afterSubmit : function(response, postdata){
					temp = String(response.responseText).split(";");
					if(temp[0]==1){
						var success=false;
						var new_id="<?php get_text1("luu_khongthanhcong") ?>";
					}else{
						tooltip_message("<?php get_text1("luu_thanhcong") ?>");
						var success=true;
						var new_id="<?php get_text1("luu_thanhcong") ?>";
						window.danhdau="0";
						$("#rowed3").jqGrid('setGridParam',{datatype: 'json'}).trigger('reloadGrid');
						/*$.post( "resource.php?module=<?=$modules?>&view=<?=$view?>&action=data_sodo_buonggiuongbenh&id_tang="+window.id_tang)
			.done(function( data ) {	
			        $("#sodo_phong").html(data);	 
			        dum_sodo();
                })
                .fail(function() {
                alert( "error" );
                });*/
			        
					};
					return [success,new_id];
				},
				afterComplete : function (response, postdata, formid) {
					temp = String(response.responseText).split(";");
					$("#jqg"+window.id_rowed3).attr("id",$.trim(temp[1]));
					$("#"+$.trim(temp[1]+"> td")).trigger("click");
					window.id_rowed3++;
					//load_phong_ban(true);
					load_all();

					create_grid2();
					$('#rowed4').jqGrid('setGridParam', {url: 'resource.php?module=<?=$modules?>&view=<?=$view?>&action=data_buonggiuongbenh&id_tang='+temp[1],datatype:'json'}) .trigger('reloadGrid');								


				},
				beforeSubmit : function(postdata, formid){
					if (typeof(window.id_rowed3)=='undefined'){
						 window.id_rowed3=1;
					}
					var success=true;
					var new_id="";
					return [success,new_id];
				},
				beforeShowForm: function(formid) {
					 canhgiua(formid);
					 number_textbox("#Cao");
					number_textbox("#Rong");
				},
			 	afterShowForm : function (formid) {
					
					xuongdong(formid);
					lendong(formid);
			 	},
				onClose : function(formid){
					$("#editmodrowed3").css("box-shadow","");

				}
		}, // add options							  
		{reloadAfterSubmit:false,url:'resource.php?module=<?=$modules?>&view=<?=$view?>&action=controller&oper=del',	navkeys : [ true, 38, 40 ],closeOnEscape : true,	
				beforeShowForm : function(formid) {canhgiua_del(formid);},
				afterSubmit : function(response, postdata) { 				
							if(response.responseText==1){
								var success=false;
								var new_id="<?php get_text1("xoa_khongthanhcong") ?>";													
								}else{
								tooltip_message("<?php get_text1("xoa_thanhcong") ?>");
								var success=true;	
								var new_id="<?php get_text1("xoa_thanhcong") ?>";
								$("#rowed3").jqGrid('setGridParam',{datatype: 'json'}).trigger('reloadGrid');
								load_all();	
								$.post( "resource.php?module=<?=$modules?>&view=<?=$view?>&action=data_sodo_buonggiuongbenh&id_tang="+window.id_tang)
								.done(function( data ) {	
								        $("#sodo_phong").html(data);	 
								        dum_sodo();
					                })
					                .fail(function() {
					                alert( "error" );
					                });
								        						
							};						
							return [success,new_id] ;
				}		
		}, // del options
		{reloadAfterSubmit:true,height:250,width:600,sopt: ["cn"],url:'resource.php?module=<?=$modules?>&view=<?=$view?>&action=data_booking&q=2',closeOnEscape : true,
				/*beforeShowSearch:function(formid){				
				}*/ // search options		
		} // search options						 
							  
	);
	$("#rowed3").jqGrid('bindKeys', {"onEnter":function( rowid ) {
		} } );	
		$("#gbox_rowed3").attr("tabindex","1");
		//$("#gbox_rowed3").focus();	
		$("#gbox_rowed3").bind('keydown', function(e) {			
			if((jwerty.is("ctrl+m",e))){		 
				 $("#rowed3").jqGrid('restoreRow', lastsel);
				 $("#rowed3").jqGrid('editRow', rowid, true);
				 lastsel = rowid;
			}
		}) 	 

	

};
function create_grid2(){	
	 $("#rowed4").jqGrid({
		url:"resource.php?module=<?=$modules?>&view=<?=$view?>&action=data_buonggiuongbenh&id_tang="+window.id_tang,
		datatype: "json",	
		colNames: ['id','Tên buồng,giường','Mô tả','Ghi chú','Đơn vị tính','Đơn giá qui định','Đơn giá yêu cầu','Đơn giá giờ qui định','Đơn giá giờ yêu cầu','Là Buồng','Đường dẫn ảnh','Chỉ Đường','ID_Parent','Vị Trí Cửa','Ngang','Kiểu Phòng','Dọc','Hàng','Cột','Tầng'],
            colModel: [
            	{name:'ID_Buong_Giuong',index:'ID_Buong_Giuong',search:false, width:"2%", editable:false,align:'right',hidden:true}, 
				{name:'TenBuong_Giuong',index:'TenBuong_Giuong', width:"15%", editable:true,align:'center',hidden:false,editrules: {required:true},edittype:"text",formoptions:{ rowpos:1, colpos:1}}, 
				{name:'Mota',index:'Mota', width:"15%", editable:true,align:'center',hidden:true,editrules: {required:false,edithidden:true},edittype:"text",formoptions:{ rowpos:1, colpos:2}}, 
				{name:'Ghichu',index:'Ghichu', width:"15%", editable:true,align:'center',hidden:true,editrules: {required:false,edithidden:true},edittype:"text",formoptions:{ rowpos:2, colpos:1}}, 
				{name:'DVT',index:'DVT', width:"15%", width:"15%", editable:true,align:'center',hidden:true,editrules: {required:false,edithidden:true},edittype:"text",formoptions:{ rowpos:2, colpos:2}}, 
				{name:'DonGia_QD',index:'DonGia_QD', width:"15%", editable:true,align:'center',hidden:true,editrules: {required:true,edithidden:true},edittype:"text",formoptions:{ rowpos:3, colpos:1}}, 
				{name:'DonGia_YC',index:'DonGia_YC', width:"15%", editable:true,align:'center',hidden:true,editrules: {required:true,edithidden:true},edittype:"text",formoptions:{ rowpos:3, colpos:2}},
				{name:'DongiaGio_QD',index:'DonGia_YC', width:"15%", editable:true,align:'center',hidden:true,editrules: {required:true,edithidden:true},edittype:"text",formoptions:{ rowpos:4, colpos:1}}, 
				{name:'DongiaGio_YC',index:'DonGia_YC', width:"15%", editable:true,align:'center',hidden:true,editrules: {required:true,edithidden:true},edittype:"text",formoptions:{ rowpos:4, colpos:2}}, 
				{name:'Is_Buong',index:'Is_Buong', width:"15%",editable:true,align:'center',hidden:true,editrules: {required:true,edithidden:true},edittype:"checkbox",formatter:"checkbox",formoptions:{ rowpos:5, colpos:1},editoptions: {value:"1:0"},stype:"select",searchoptions: { sopt: ['eq', 'ne'],value:':;1:Có;0:Không'}},	
				{name:'Path_Picture',index:'Path_Picture', width:"15%", editable:true,align:'center',hidden:true,editrules: {required:false,edithidden:true},edittype:"text",formoptions:{ rowpos:5, colpos:2}}, 
				{name:'ChiDuong',index:'ChiDuong', width:"15%", editable:true,align:'center',hidden:true,editrules: {required:false,edithidden:true},edittype:"text",formoptions:{ rowpos:6, colpos:1}}, 
				{name:'ID_Parent',index:'ID_Parent', width:"15%",formatter:"select",editoptions: { value: id_parent}, editable:true,align:'center',hidden:true,editrules: {required:false,edithidden:true},edittype:"select",formoptions:{ rowpos:6, colpos:2}}, 
				{name:'ViTriCua',index:'ViTriCua', width:"15%", editable:true,align:'center',hidden:true,editrules: {required:true,edithidden:true},edittype:"text",formoptions:{ rowpos:7, colpos:1}}, 
				{name:'Ngang',index:'Ngang', width:"15%", editable:true,align:'center',hidden:true,editrules: {required:true,edithidden:true},edittype:"text",formoptions:{ rowpos:7, colpos:2}}, 
				{name:'ID_KieuPhong',index:'ID_KieuPhong',formatter:"select",editoptions: { value: kieuphong}, width:"15%", editable:true,align:'center',hidden:true,editrules: {required:true,edithidden:true},edittype:"select",formoptions:{ rowpos:8, colpos:1}},  
				{name:'Doc',index:'Doc', width:"15%", editable:true,align:'center',hidden:true,editrules: {required:true,edithidden:true},edittype:"text",formoptions:{ rowpos:8, colpos:2}},  
				{name:'Hang',index:'Hang', width:"15%", editable:true,align:'center',hidden:true,editrules: {required:true,edithidden:true},edittype:"text",formoptions:{ rowpos:9, colpos:1}},  
				{name:'Cot',index:'Cot', width:"15%", editable:true,align:'center',hidden:true,editrules: {required:true,edithidden:true},edittype:"text",formoptions:{ rowpos:9, colpos:2}},  
				{name:'ID_Tang',index:'ID_Tang', width:"15%", formatter:"select",editable:true,align:'center',hidden:false,editrules: {required:true,edithidden:true},edittype:"select",formoptions:{ rowpos:10, colpos:1},editoptions: { value: tang}},  
				 ],
	//	

		loadonce: true,
            scroll: false,
            modal: true,
            shrinkToFit: true,

            rowNum: 10000000,
			pginput:false,
			pgbuttons:false,
            rowList: [],
            pager: '#prowed4',
            height: 460,
            width: 270,
            viewrecords: true,
            ignoreCase: true,
            sortorder: "desc",
			closeAfterEdit: true,
	//hoverrows:false,
	//jsonReader:{repeatitems:true,subgrid:{repeatitems:false}},	
		
		serializeRowData: function (postdata) { 		 	
			//$("#rowed3").trigger("reloadGrid");		
			//return postdata;
		},
		onSelectRow: function(id){		
			/*$.post( "resource.php?module=<?=$modules?>&view=<?=$view?>&action=data_sodo_buonggiuongbenh&id_tang="+window.id_tang)
			.done(function( data ) {	
			        $("#sodo_phong").html(data);	 
			        dum_sodo();
                })
                .fail(function() {
                alert( "error" );
                });*/
			 //  chonphong("A4");  
			// alert(window.tang);                                     
		},
		
		ondblClickRow: function (rowId, rowIndex, columnIndex) {
			$("#edit_rowed4").trigger('click'); 
 		},
		loadComplete: function(data) {	
			grid_filter_enter("#rowed4") //enter: chuyen con tro sang o tiếp theo		 
		},	  
		caption: "Danh sách buồng phòng"

	});	
	$("#rowed4").jqGrid('filterToolbar',{searchOperators : false,searchOnEnter:false,defaultSearch:"cn"});
	$("#rowed4").jqGrid('navGrid',"#prowed4",{add: permission["add"], edit: permission["edit"], del: permission["delete"], search: false,closeAfterEdit: true,clearAfterAdd :true,closeOnEscape : true, bSubmit: "Submit",
     bCancel: "Cancel"}, //options						 
		{recreateForm:true,height:'auto',width:'900',reloadAfterSubmit:false,url:'resource.php?module=<?=$modules?>&view=<?=$view?>&action=controller&oper=edit_buonggiuong&hienmaloi=1',closeOnEscape : true,modal: true,recreateForm: true,savekey: [true,121],closeAfterEdit: true,
			   afterSubmit : function(response, postdata) { 
				  	if(response.responseText==1){
						var success=false;
						var new_id="<?php get_text1("sua_khongthanhcong") ?>";													
					}else{
						tooltip_message("<?php get_text1("sua_thanhcong") ?>");
						var success=true;	
						var new_id="<?php get_text1("sua_thanhcong") ?>";
						//$('#rowed4').jqGrid('setGridParam', {url: 'resource.php?module=<?=$modules?>&view=<?=$view?>&action=data_buonggiuongbenh&id_tang='+window.id_tang,datatype:'json'}) .trigger('reloadGrid');								
						$.post( "resource.php?module=<?=$modules?>&view=<?=$view?>&action=data_sodo_buonggiuongbenh&id_tang="+window.id_tang)
						.done(function( data ) {	
						        $("#sodo_phong").html(data);	 
						        dum_sodo();
                })
                .fail(function() {
                alert( "error" );
                });
			        
					};						
					return [success,new_id] ;					   
				},
				beforeShowForm: function(formid){					 	
					canhgiua(formid);
					autocompleted_combobox("#ID_Tang");
					autocompleted_combobox("#ID_Parent");
					autocompleted_combobox("#ID_KieuPhong");	
					number_textbox("#DonGia_QD");
					number_textbox("#DonGia_YC");
					number_textbox("#DongiaGio_QD");
					number_textbox("#DongiaGio_YC");
					number_textbox("#ViTriCua");
					number_textbox("#Ngang");
					number_textbox("#Doc");
					number_textbox("#Hang");
					number_textbox("#Cot");
												  
				},
				afterShowForm : function (formid) {
					/*var mota=$("#tr_MoTa").html();
					$("#tr_MoTa").html("");
					var congty=$("#tr_ID_CongTy").html();
					$("#tr_ID_CongTy").html("");
					$("#tr_ID_CongTy").html(mota);
					$("#tr_MoTa").html(congty);*/						
					
					xuongdong(formid);
					lendong(formid);					
					
				},
				onClose : function(formid){
					$("#editmodrowed4").css("box-shadow","");										
				}
							  
		}, // edit options
		{height:'auto',width:'900',reloadAfterSubmit:false,url:'resource.php?module=<?=$modules?>&view=<?=$view?>&action=controller&oper=add_buonggiuong&hienmaloi=1',closeOnEscape : true,closeAfterAdd:false,modal: true,addedrow: "first",recreateForm:true,savekey: [true,121],closeAfterAdd: true
				,afterSubmit : function(response, postdata){
					temp = String(response.responseText).split(";");
					if(temp[0]==1){
						var success=false;
						var new_id="<?php get_text1("luu_khongthanhcong") ?>";
					}else{
						tooltip_message("<?php get_text1("luu_thanhcong") ?>");
						var success=true;
						var new_id="<?php get_text1("luu_thanhcong") ?>";
						//	$('#rowed4').jqGrid('setGridParam', {url: 'resource.php?module=<?=$modules?>&view=<?=$view?>&action=data_buonggiuongbenh&id_tang='+window.id_tang,datatype:'json'}) .trigger('reloadGrid');
					$.post( "resource.php?module=<?=$modules?>&view=<?=$view?>&action=data_sodo_buonggiuongbenh&id_tang="+window.id_tang)
								.done(function( data ) {	
								        $("#sodo_phong").html(data);	 
								        dum_sodo();
					                })
					                .fail(function() {
					                alert( "error" );
                });
			        
					};
					return [success,new_id];
				},
				afterComplete : function (response, postdata, formid) {
					temp = String(response.responseText).split(";");
					$("#jqg"+window.id_rowed4).attr("id",$.trim(temp[1]));
					$("#"+$.trim(temp[1]+"> td")).trigger("click");
					window.id_rowed4++;
					

				},
				beforeSubmit : function(postdata, formid){
					if (typeof(window.id_rowed4)=='undefined'){
						 window.id_rowed4=1;
					}
					var success=true;
					var new_id="";
					return [success,new_id];
				},
				beforeShowForm: function(formid) {
					 canhgiua(formid);
					 autocompleted_combobox("#ID_Tang");
					autocompleted_combobox("#ID_Parent");
					autocompleted_combobox("#ID_KieuPhong");
					//$("#editmodrowed4").css("width","100px!important");	
					number_textbox("#DonGia_QD");
					number_textbox("#DonGia_YC");
					number_textbox("#DongiaGio_QD");
					number_textbox("#DongiaGio_YC");
					number_textbox("#ViTriCua");
					number_textbox("#Ngang");
					number_textbox("#Doc");
					number_textbox("#Hang");
					number_textbox("#Cot");
				},
			 	afterShowForm : function (formid) {
					
					xuongdong(formid);
					lendong(formid);
			 	},
				onClose : function(formid){
					$("#editmodrowed4").css("box-shadow","");

				}
		}, // add options							  
		{reloadAfterSubmit:false,url:'resource.php?module=<?=$modules?>&view=<?=$view?>&action=controller&oper=del_buonggiuong',	navkeys : [ true, 38, 40 ],closeOnEscape : true,	
				beforeShowForm : function(formid) {canhgiua_del(formid);},
				afterSubmit : function(response, postdata) { 				
							if(response.responseText==1){
								var success=false;
								var new_id="<?php get_text1("xoa_khongthanhcong") ?>";													
								}else{
								tooltip_message("<?php get_text1("xoa_thanhcong") ?>");
								var success=true;	
								var new_id="<?php get_text1("xoa_thanhcong") ?>";
								$('#rowed4').jqGrid('setGridParam', {url: 'resource.php?module=<?=$modules?>&view=<?=$view?>&action=data_buonggiuongbenh&id_tang='+window.id_tang,datatype:'json'}) .trigger('reloadGrid');					
								$.post( "resource.php?module=<?=$modules?>&view=<?=$view?>&action=data_sodo_buonggiuongbenh&id_tang="+window.id_tang)
								.done(function( data ) {	
								        $("#sodo_phong").html(data);	 
								        dum_sodo();
					                })
					                .fail(function() {
					                alert( "error" );
					                });
			        
							};						
							return [success,new_id] ;
				}		
		}, // del options
		{reloadAfterSubmit:true,height:250,width:600,sopt: ["cn"],url:'resource.php?module=<?=$modules?>&view=<?=$view?>&action=data_booking&q=2',closeOnEscape : true,
				/*beforeShowSearch:function(formid){				
				}*/ // search options		
		} // search options						 
							  
	);
	$("#rowed4").jqGrid('bindKeys', {"onEnter":function( rowid ) {
		} } );	
		$("#gbox_rowed4").attr("tabindex","1");
		//$("#gbox_rowed3").focus();	
		$("#gbox_rowed4").bind('keydown', function(e) {			
			if((jwerty.is("ctrl+m",e))){		 
				 $("#rowed4").jqGrid('restoreRow', lastsel);
				 $("#rowed4").jqGrid('editRow', rowid, true);
				 lastsel = rowid;
			}
		}) 	 

	

};
function create_layout(){
	//alert("")
	$('#body').layout({	
		resizerClass: 'ui-state-default'       
		,west: {
			maskContents:		true
		,	resizable: false
		,	size:					"22%"
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
			resizable: false	
		,	size:					"56%"
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
			resizable: false	
		,	size:					"22%"
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

function resize_control(){
	$("#rowed3").setGridHeight($(".ui-layout-west").height()-107);
	$("#rowed4").setGridHeight($(".ui-layout-east").height()-107);
}
function load_all(){
    window.tang = $.ajax({url: 'resource.php?module=web_services&function=get_auto_edit_option&action=index&term=&status=2&tables=GD2_DMTang&id=Id_Tang&name=TenTang', async: false, success: function(data, result) {if (!result) alert('Không load được danh mục phòng ban');}}).responseText;
    window.kieuphong = $.ajax({url: 'resource.php?module=web_services&function=get_auto_edit_option&action=index&term=&status=2&tables=GD2_DM_KieuPhong&id=ID_KieuPhong&name=TenKieuPhong', async: false, success: function(data, result) {if (!result) alert('Không load được danh mục phòng ban');}}).responseText;
    window.id_parent = $.ajax({url: 'resource.php?module=web_services&function=get_auto_edit_option&action=index&term=&status=0&tables=GD2_DMBuong_GiuongBenh&id=ID_Buong_Giuong&name=TenBuong_Giuong', async: false, success: function(data, result) {if (!result) alert('Không load được danh mục phòng ban');}}).responseText;
	$("#rowed4").setColProp('ID_Tang', { editoptions: { value: tang} });
   }
function dum_sodo(){
	 $(function(){ //DOM Ready
	 
		$(".gridster ul").gridster({
			widget_margins: [2, 2],
			widget_base_dimensions: [31, 31]
		});
		 $("#1 ul").gridster({
			widget_margins: [1, 1],
			widget_base_dimensions: [3, 3]
		});
 	 $("#sodo_phong ul").removeAttr( 'style' );
 	
	});
	t=setTimeout(function(){
			$('.gridster').find('li ').each(function() {		
				$(this).css("font","12px/"+$(this).height()+"px Tahoma, Geneva, sans-serif");			//alert($(this).height())		   
			});
			 //veduongdi("A4");
			$("li span").delay(100).fadeIn(200);
			//chonphong("A4")
					
			},100);
}

</script>
