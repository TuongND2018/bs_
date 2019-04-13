<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<style>
 .dialog_dm_thuoc,.dialog_dm_duongdung{
 					position:absolute;
					z-index:1000000;		 
					display:none;	
					box-shadow:0px 0px 6px #333	
					 }
	 th.ui-th-column div{
        word-wrap: break-word; /* IE 5.5+ and CSS3 */
        white-space: pre-wrap; /* CSS3 */
        white-space: -moz-pre-wrap; /* Mozilla, since 1999 */
        white-space: -pre-wrap; /* Opera 4-6 */
        white-space: -o-pre-wrap; /* Opera 7 */
        overflow: hidden;
        height: auto !important;
        vertical-align: middle;
    }
</style>
</head>
<body>  
	<div  class="dialog_dm_thuoc" style="display:none">
    <table id="DM_thuoc">
    </table>
   
 </div>
 <div id="panel_main1">
		<div id="grid_phong_ban" style="display:inline-block">   
			Từ ngày:<input type="text" style="width:70px" name="from_day" id='from_day'  value="<?php echo date($_SESSION["config_system"]["ngaythang"]) ?>"> 
			Đến ngày:<input type="text" style="width:70px" name="to_day" id='to_day' value="<?php echo date($_SESSION["config_system"]["ngaythang"]) ?>">
			<button id="xem" type="button">Xem danh sách</button>
		 	<button id="xemtc" type="button">Xem tất cả</button>
		</div>
	</div> 
	<div id="grid_phong_ban">      	 
          <table id="rowed6" ></table>
            <div id="prowed6"></div>  
            
    </div>    
</body>
</html> 

<script type="text/javascript">
jQuery(document).ready(function() {
	var kiemtra=0;
	$("#xem,#xemtc").button();

	//load_select();
	checkbox_search('gs_Active','#rowed6');
	selectbox_search('gs_ID_Thuoc','gs_tenbietduoc','#rowed6');
	$.dateEntry.setDefaults({spinnerImage: ''});	
	window.nhanvien3_complete=0;
	window.xaphuongz=":;"+window.xaphuong;
			/*$("body").bind("contextmenu",function(e){
			   return false;
			});*/ 	
			var eventMethod = window.addEventListener ? "addEventListener" : "attachEvent";
			var eventer = window[eventMethod];
			var messageEvent = eventMethod == "attachEvent" ? "onmessage" : "message";
			eventer(messageEvent,function(e) {			 
			  if(e.data=='table'){
				 alert("chinh")
			  }			  
			},false);
	var lastsel; 	
	window.thuoc=  $.ajax({                       
		url: "resource.php?module=web_services&function=get_auto_edit_option_byid&action=index&term=&status=0&tables=DM_Thuoc&id=ID_Thuoc&name=TenGoc",
		async:false                       
	}).responseText;
	create_grid();	
	shortcut_key();		
$.post('resource.php?module=<?=$modules?>&view=<?=$view?>&action=data_DMthuoc').done(function(data) {
	  create_Dm_thuoc_grid('#DM_thuoc',data)
	})
	
$("#from_day").datepicker({
            showWeek: true,
            defaultDate: "+1w",
            changeMonth: true,
            changeYear: true,
            numberOfMonths: 1,
             showButtonPanel: true,
            dateFormat: $.cookie("ngayJqueryUi"),  
			maxDate: new Date(<?php echo date("Y")?>, <?php echo date("m")?>-1, <?php echo date("d")?>),
            onClose: function(selectedDate) {
            	
                $("#to_day").datepicker("option", "minDate", selectedDate);
               
              //  fromday = $.datepicker.formatDate($.cookie("ngayJqueryUi"), new Date(selectedDate));
               // $("#from_day").val(fromday);
              //  $("#to_day").val(today);
               // $( "#from_day" ).datepicker( "setDate", today );
            },
            onSelect: function(dat, inst) {

              //  $("#from_day_mask").val(dat);
            }
        });
        $("#to_day").datepicker({
            showWeek: true,
            defaultDate: "+1w",
            changeMonth: true,
            changeYear: true,
            numberOfMonths: 1,
            	showButtonPanel: true,
            	gotoCurrent:true,
            dateFormat: $.cookie("ngayJqueryUi"),   
            minDate: new Date(<?php echo date("Y")?>, <?php echo date("m")?>-1, <?php echo date("d")?>),       
            onClose: function(selectedDate) {
                $("#from_day").datepicker("option", "maxDate", selectedDate);
              //  today = $.datepicker.formatDate($.cookie("ngayJqueryUi"), new Date(selectedDate));
              //  $("#to_day").val(today);
              //  $("#from_day").val(fromday);
               // $( "#to_day" ).datepicker( "setDate", today );
            },
            onSelect: function(dat, inst) {
              //  $("#to_day_mask").val(dat);
            }
        });
         $.dateEntry.setDefaults({spinnerImage: ''});		 
	 //$("#tungay, #denngay").dateEntry({dateFormat: 'dmy-'});
	 $("#from_day, #to_day").dateEntry({dateFormat: $.cookie("ngayDateEntry")});
function resize_control(){
	$("#rowed6").setGridWidth($(window).width()-20);
	 $("#rowed6").setGridHeight($(window).height()-$("#form_danh_muc_phong_ban").height()-$("#panel_main1").height()-140);
	}
	resize_control();
		jQuery(window).resize(function() {		 
	 resize_control()
});	
	
	$("#xem").click(function(){
		$("#rowed6").jqGrid('setGridParam',{datatype: 'json',url:"resource.php?module=<?=$modules?>&view=<?=$view?>&action=data_xaphuong&from_day="+$("#from_day").val()+"&to_day="+$("#to_day").val()+'&kiemtra=1'}).trigger('reloadGrid');

	})
	$("#xemtc").click(function(){
		$("#rowed6").jqGrid('setGridParam',{datatype: 'json',url:"resource.php?module=<?=$modules?>&view=<?=$view?>&action=data_xaphuong&from_day="+$("#from_day").val()+"&to_day="+$("#to_day").val()+'&kiemtra=0'}).trigger('reloadGrid');
		 /*$.post("resource.php?module=<?=$modules?>&view=<?=$view?>&action=data_xaphuong&from_day="+$("#from_day").val()+"&to_day="+$("#to_day").val()+'&kiemtra=0').done(function(data){
		 	//alert(data)
		 	//$("#rowed6").jqGrid('setGridParam',{datatype: 'json',url:"resource.php?module=<?=$modules?>&view=<?=$view?>&action=data_xaphuong&from_day="+$("#from_day").val()+"&to_day="+$("#to_day").val()+'&kiemtra=0'}).trigger('reloadGrid');
		 window.data_rowed5=jQuery.parseJSON(data); 
								//data=jQuery.parseJSON(data);
								
								$("#rowed6").jqGrid('setGridParam',{datatype: "jsonstring" ,datastr: data}).trigger('reloadGrid');	
		 });*/
	})
			phanquyen();	 
		
})
var rowed6_curentsel; 
function create_grid(){	
	 
	 $("#rowed6").jqGrid({	
		url:'resource.php?module=<?=$modules?>&view=<?=$view?>&action=data_xaphuong&kiemtra=0',
		datatype: "json",	 	
		colNames:['Tên thuốc',"Hoạt chất" ,"Đv.tính",  "BHYT","Giá", "Ngày áp dụng", "N.cập nhật","Trạng thái",""],
		colModel:[		
			
			{name:'ID_Thuoc',index:'ID_Thuoc',width:"20%", align:'left',hidden:false,   formatter: 'select' , editable: true,edittype:"select",editoptions:{value:window.thuoc}	,editrules:{custom: true, custom_func: function(value, colName) {
                          
                            return check_idthuoc(value,colName);

                        }}	 }, 
	
			{name:'HoatChat',index:'HoatChat', width:"30%",align:'left', editable: false},		 
			{name:'TenDonViTinh',index:'TenDonViTinh',width:"5%",align:'right',hidden:false, editable: false,editrules:{required:true}},
			{name:'bhyt',index:'bhyt',width:"5%",align:'right',hidden:false, editable: false},
			{name:'Giaban',formatter:'number', formatoptions:{decimalPlaces: 0}, index:'Giaban',width:"10%",align:'right',hidden:false, editable: true,editrules:{required: true,minValue:1}},
			{name:'Ngayapdung',index:'Ngayapdung',width:"10%", sorttype: 'date',search:false,
                        formatter: 'date' ,formatoptions: {newformat: "y/m/d h:i", srcformat: 'y/m/d h:i',}, datefmt: "y/m/d h:i",
                        searchoptions: {
                            sopt: ['eq', 'ne'],
                          	dataInit:function (elem) {
                    setTimeout(function () {
                        $(elem).datepicker({
                            dateFormat: $.cookie("ngayJqueryUi"),
                            autoSize: true,                           
                            changeYear: true,
                            changeMonth: true,                           
                            showWeek: true,
                            onSelect: function () {
                                if (this.id.substr(0, 3) === "gs_") {
                                    setTimeout(function () {
                                        $("#rowed6")[0].triggerToolbar();
                                    }, 50);
                                } else {
                                    // to refresh the filter
                                    $(this).trigger('change');
                                }
                            }
                        });
						$(elem).dateEntry({dateFormat: $.cookie("ngayDateEntry")});
						$(elem).timeEntry({show24Hours: true, spinnerImage: ''});
                    }, 100);
                },

                        }
,align:'right',hidden:false, editable: true,editrules:{required: true}},
			{name:'User_CapNhat',index:'User_CapNhat',width:"10%",align:'center',hidden:false, editable: false},
			{name:'Active',index:'Active',search:true, width:"5%",stype: 'select',searchoptions: { sopt: ['eq', 'ne'],value:':;1:Có;0:Không'}, editable:true,align:'center',hidden:false,edittype:"checkbox",formatter:"checkbox",formoptions:{ rowpos:7, colpos:1},editoptions: {value:"1:0"},formatoptions:{disabled: false}},	                        
			{name:'tenbietduoc',index:'tenbietduoc',width:"15%",align:'center',hidden:true, editable: false,searchoptions: {searchhidden: true}},
		],
			
	   grid_move:"abc",
	 ignoreCase:true,
		loadonce: true,
		local:true,
		scroll: false,		 
		modal:true,
        shrinkToFit: true,
		rowNum: 10000000,
		rowList:[],
		pager: '#prowed6',
		multiSort: true,
		height:100,
		width:100,
		viewrecords: false,	
		ignoreCase:true,	
		sortorder: "asc",
	    grouping: true,
		//rownumbers:true,
		afterInsertRow: function(rowid, aData){
    	//alert();
    	},
		pgbuttons: false, // disable page control like next, back button
        pgtext: null, // disable pager text like 'Page 0 of 10'	 
		serializeRowData: function (postdata) { 	
		
		
                return postdata;			
		},
		onSelectRow: function(id){	
	 		
		},
		ondblClickRow: function (rowId, rowIndex, columnIndex) {
			
 		},
		loadComplete: function(data) {

			grid_filter_enter("#rowed6");   
				
				
				
				
		 	$('body').unbind('click')
			ids=$('#rowed6').jqGrid('getDataIDs'); 
     for(var i=0;i<=ids.length-1;i++){
      $('#rowed6 #'+ids[i]+' input').bind('click',function(e){
       if($(e.target).is(':checked')){
        var tthai4=1;
       }
       else{
        var tthai4=0;
       }
       var id_tam=$(e.target).closest('tr.jqgrow').attr('id');
    	$.post('resource.php?module=<?=$modules?>&view=<?=$view?>&action=controller&oper=edit&id='+id_tam+'&tt='+tthai4);
       })
     }
		
		},
		caption: "Danh mục giá bán <span></span>",
		editurl:'resource.php?module=<?=$modules?>&view=<?=$view?>&action=controller&oper=add',
		
	});
$("#rowed6").jqGrid('filterToolbar', {searchOperators: false, searchOnEnter: false, defaultSearch: "cn",  stringResult: true});
	$("#rowed6").jqGrid('bindKeys', {"onEnter":function( rowid ) {						
					$("#prowed6 .ui-icon-pencil").click();				
			} } );
	$("#rowed6").jqGrid('navGrid',"#prowed6",{add: false, edit: false, del: true, search: false, refresh: true,closeAfterEdit: true,clearAfterAdd :true,navkeys : [ true, 38, 40 ]});
	$("#rowed6").jqGrid('inlineNav', '#prowed6', {add: true, addtext: '', edittext: '', edit: false,save:true,
            addParams: {
				keys:true,
                position: "last",
                addRowParams: {
					keys:true,                  
                    aftersavefunc: function(rowId, response,lastsel) {
						$('.ui-datepicker').hide();
						$('#'+rowId+'_ID_Thuoc1,.dialog_dm_thuoc .ui-jqgrid-hbox').unbind("keyup");
						$('#'+rowId+'_ID_Thuoc1,.dialog_dm_thuoc .ui-jqgrid-hbox').unbind("click");
						$('body').unbind("click");
					    $("#rowed6").jqGrid('bindKeys', {"onEnter":function( rowid ) {				
							$("#prowed6 .ui-icon-pencil").click();				
						} } );
						 $('#rowed6').focus();	
						 
						 $('#'+rowId).removeClass("ui-state-highlight").attr({"aria-selected":"false", "tabindex" : "-1"})
						 
						 $('#'+rowId).removeClass("ui-state-highlight");
                    },
					oneditfunc: function(rowId) {	
						number_textbox('#'+rowId+'_Giaban')
						//=========
						 $('#'+rowId+'_Giaban,#'+rowId+'_Ngayapdung').css({  
						 	'text-align':'right'

  							});
							 
						 $('#'+rowId+'_Giaban').val(0);	
						
						 $('#'+rowId+'_Active').prop('checked', true);
						$('#rowed6').jqGrid("setCell", rowId, "User_CapNhat","<?php echo $_SESSION["user"]["nickname"]?>");
	 					 //$('#'+rowId+'_Ngayapdung').val($.datepicker.formatDate($.cookie("ngayJqueryUi"), new Date(<?php echo date("Y")?>, <?php echo date("m")?>-1, <?php echo date("d")?>)));
					    //$('#'+rowId+'_Ngayapdung').dateEntry({dateFormat: $.cookie("ngayDateEntry"),minDate: new Date(<?php echo date("Y")?>, <?php echo date("m")?>-1, <?php echo date("d")?>)});		
						$('#'+rowId+'_Ngayapdung').datetimeEntry({datetimeFormat: 'D/O/y H:M',spinnerImage: ''});
						var currentdate = new Date();
						$('#'+rowId+'_Ngayapdung').val(<?= date("d")?>+'/'+<?= date("m")?>+'/'+<?= date("y")?>+' '+currentdate.getHours()+':'+currentdate.getMinutes());
					//==========
						$("#rowed6").jqGrid('unbindKeys');
						
						window.id_rowed6_edit=rowId;						
						var with_idthuoc=parseFloat($('#jqgh_rowed6_ID_Thuoc').width())-32;				
						$('#rowed6 #'+rowId+'_ID_Thuoc').hide(); 
						$('#rowed6 #'+rowId+'_ID_Thuoc').before( '<input id="'+rowId+'_ID_Thuoc1" class="editable" type="text" name="Gia" style="width:'+with_idthuoc+'px" role="textbox">' );   
						create_combobox_inline('#'+rowId+'_ID_Thuoc1','#'+rowId+'_ID_Thuoc','.dialog_dm_thuoc','#DM_thuoc');				
					 		
						$('#'+rowId+'_ID_Thuoc1').val('Vui lòng chọn thuốc');						
						$('#'+rowId+'_ID_Thuoc1').focus();
						$('#'+rowId+'_ID_Thuoc1').select();
						inline_enter(rowId)
					},	
                    afterrestorefunc: function(rowId) {	
					$('.ui-datepicker').hide();
					$('#'+rowId+'_ID_Thuoc1,.dialog_dm_thuoc .ui-jqgrid-hbox').unbind("keyup");
					$('#'+rowId+'_ID_Thuoc1,.dialog_dm_thuoc .ui-jqgrid-hbox').unbind("click");
					$('body').unbind("click");					
						$("#rowed6").jqGrid('bindKeys', {"onEnter":function( rowid ) {				
							$("#prowed6 .ui-icon-pencil").click();				
						} } );
						 $('#rowed6').focus();						
                    },				 
                }
            	},	
            editParams: {
				keys:true,				 
				 	aftersavefunc: function(rowId, response,lastsel) {
						$('#'+rowId+'_ID_Thuoc1,.dialog_dm_thuoc .ui-jqgrid-hbox').unbind("keyup");
						$('#'+rowId+'_ID_Thuoc1,.dialog_dm_thuoc .ui-jqgrid-hbox').unbind("click");
						$('body').unbind("click");
					 	$("#rowed6").jqGrid('bindKeys', {"onEnter":function( rowid ) {				
							$("#prowed6 .ui-icon-pencil").click();				
						} } );
						 $('#rowed6').focus();	
						
						
                    },					 	
                	oneditfunc: function(rowId) {
					//=========
									
						$('#'+rowId+'_Ngayapdung').datepicker({
					        showWeek: true,
					        defaultDate: "+1w",
					        changeMonth: true,
					        changeYear: true,
					        numberOfMonths: 1,
					        
					        dateFormat: $.cookie("ngayJqueryUi"),  
							
					        onClose: function(selectedDate) {
					        	
					           // $("#to_day").datepicker("option", "minDate", selectedDate);
					           
					          //  fromday = $.datepicker.formatDate($.cookie("ngayJqueryUi"), new Date(selectedDate));
					           // $("#from_day").val(fromday);
					          //  $("#to_day").val(today);
					           // $( "#from_day" ).datepicker( "setDate", today );
					        },
					        onSelect: function(dat, inst) {

					          //  $("#from_day_mask").val(dat);
					        }
					    });
					//==========
						window.id_rowed6_edit=rowId;
						var with_idthuoc=parseFloat($('#jqgh_rowed6_ID_Thuoc').width())-32;				
						$('#rowed6 #'+rowId+'_ID_Thuoc').hide(); 
						$('#rowed6 #'+rowId+'_ID_Thuoc').before( '<input id="'+rowId+'_ID_Thuoc1" class="editable" type="text" name="Gia" style="width:'+with_idthuoc+'px" role="textbox">' );  
						//alert($('#rowed6 #'+rowId+'_ID_Thuoc').val());
						create_combobox_inline('#'+rowId+'_ID_Thuoc1','#'+rowId+'_ID_Thuoc','.dialog_dm_thuoc','#DM_thuoc',$('#rowed6 #'+rowId+'_ID_Thuoc').val());
						
						
					 	$("#rowed6").jqGrid('unbindKeys');						
						$('#'+rowId+'_ID_Thuoc1').focus();
						$('#'+rowId+'_ID_Thuoc1').select();
						inline_enter(rowId)
						
					},	
                    afterrestorefunc: function(rowId) {	
					$('#'+rowId+'_ID_Thuoc1,.dialog_dm_thuoc .ui-jqgrid-hbox').unbind("keyup");
					$('#'+rowId+'_ID_Thuoc1,.dialog_dm_thuoc .ui-jqgrid-hbox').unbind("click");
					$('body').unbind("click");					
						$("#rowed6").jqGrid('bindKeys', {"onEnter":function( rowid ) {				
							$("#prowed6 .ui-icon-pencil").click();				
						} } );
						
						 $('#rowed6').focus();						
							   
					},	
                    afterrestorefunc: function(rowId) {	
					$('#'+rowId+'_ID_Thuoc1,.dialog_dm_thuoc .ui-jqgrid-hbox').unbind("keyup");
					$('#'+rowId+'_ID_Thuoc1,.dialog_dm_thuoc .ui-jqgrid-hbox').unbind("click");
					$('body').unbind("click");					
						$("#rowed6").jqGrid('bindKeys', {"onEnter":function( rowid ) {				
							$("#prowed6 .ui-icon-pencil").click();				
						} } );
						 $('#rowed6').focus();						
                    },
					beforeSaveRow: function(options, rowId) { 					
						 
					},					 
			}
       	 });           
} 

function create_combobox_inline(input,input1,dialog,grid,defaultvalue){				
					afterInit_combox_inline(input,dialog,grid,input1);
					init_combox_inline(input,input1,dialog,grid,defaultvalue);
					
	}	

function init_combox_inline(input,input1,dialog,grid,defaultvalue){    
jwerty.key('tab', false);
var truoc='';

if (typeof defaultvalue != 'undefined'){
		$(grid).jqGrid("setSelection",defaultvalue, true);
		var idcur = $(grid).jqGrid('getGridParam', 'selrow');	
		//alert(defaultvalue)	
		var columnNames = $(grid).jqGrid('getGridParam','colModel');
		ten = $(grid).jqGrid('getCell', idcur, columnNames[0].name);	
		$(input).val(ten);	
		$(input1).val(idcur)
		
}
$(input).bind("click",function(event) {	
    event.stopPropagation();
});
$(grid).bind("click",function(event) {	
    $(input).focus();
    $(input).select();
});
$('body').bind("click",function(event) {
	if($(dialog).is(":visible")===true){
	create_combobox_close_inline(input,dialog,input1,grid)
	}
});


$(dialog+' .ui-jqgrid-hbox').click(function(event) {
	event.stopPropagation();
});


$(input+','+dialog+' .ui-jqgrid-hbox').bind("keyup", function(e) { 
	var key = e.which;
	if(jwerty.is("enter",e)||jwerty.is("tab",e)){
		//alert("");
		if($(dialog).is(":visible")===true){
			$(grid).data('clicked', true);
			var idcur = $(grid).jqGrid('getGridParam', 'selrow');
			$(grid).jqGrid("setSelection",idcur, true);
				
			create_combobox_close_inline(input,dialog,input1,grid);
		}
	}else if(jwerty.is("esc",e)){
			if($(dialog).is(":visible")===true){
			$(grid).data('clicked', true);
			create_combobox_close_inline(input,dialog,input1,grid);
		}
				}else if(jwerty.is("↓",e)){
					$(grid).data('clicked', false);
					var idcur = $(grid).jqGrid('getGridParam', 'selrow');
					if($(dialog).is(":visible")===false){
					 create_combobox_open(input,dialog)	
					}else{
						if(idcur==null){
						var ids = $(grid).getDataIDs();
						$(grid).jqGrid("setSelection",ids[0], true);
						}else{
					  var idcur = $(grid).jqGrid('getGridParam', 'selrow')	
					  if (idcur == null) return;
					  var ids = $(grid).getDataIDs();
					  var index = $(grid).getInd(idcur);
					  if (ids.length < 2) return;
					 index++;
					  if (index > ids.length)
						index = 1;
					  $(grid).jqGrid("setSelection",ids[index - 1], true);
						}
					}
					
				}
				else if(jwerty.is("↑",e)){
					$(grid).data('clicked', false);
						var idcur = $(grid).jqGrid('getGridParam', 'selrow')	
					if($(dialog).is(":visible")===false){
					 create_combobox_open(input,dialog)	}
					else{
						if(idcur==null){
						var ids = $(grid).getDataIDs();
						$(grid).jqGrid("setSelection",ids[0], true);
						}else{
						
					  var idcur = $(grid).jqGrid('getGridParam', 'selrow')	
					  if (idcur == null) return;
					  var ids = $(grid).getDataIDs();
					  var index = $(grid).getInd(idcur);
					  if (ids.length < 2) return;
					 index--;
					  if (index == 0){
						index = ids.length;
					  }
					  $(grid).jqGrid("setSelection",ids[index - 1], true);
						}
					}
				}
				else{
					$(grid).data('clicked', false);
					if(key!=13&&key!=9&&key!=16&&key!=37&&key!=38&&key!=39&&key!=40&&key!=27){
							 create_combobox_open(input,dialog);
					grid = $(grid);
						var columnNames = $(grid).jqGrid('getGridParam','colModel');
						var searchFiler = $(input).val(), f;
						if (searchFiler.length === 0) {
							grid[0].p.search = false;
							$.extend(grid[0].p.postData,{filters:""});
						}
						f = {groupOp:"OR",rules:[]};
						f.rules.push({field:columnNames[0].name,op:"bw",data:searchFiler});               
						grid[0].p.search = true;
						$.extend(grid[0].p.postData,{filters:JSON.stringify(f)});         
						grid.trigger("reloadGrid",[{page:1,current:true}])
					
						$(grid).jqGrid("setSelection",grid.getDataIDs()[0], true);
				
						//}
					}
				}
		});	

}


function afterInit_combox_inline(input,dialog,grid,input1) {	 

		 $(input).wrap( "<span class='custom-combobox'></span>" );
			var button = $("<a>").attr("tabIndex", -1).attr("title", "Show all items").tooltip().insertAfter($(input)).button({
			icons: {
				primary: "ui-icon-triangle-1-s"
			},
			text: false
		}).removeClass("ui-corner-all").addClass("custom-combobox-toggle ui-corner-right "+input.substr(1)+"_button").click(function(event) {
			$(input).focus();	
			$(input).select();	
			if($(dialog).is(":visible")===true){
				
				create_combobox_close_inline(input,dialog,input1,grid)
				//$(input).focus();
			}else{
				
			    create_combobox_open(input,dialog);
				event.stopImmediatePropagation();
				
						grid = $(grid);
						var columnNames = $(grid).jqGrid('getGridParam','colModel');
						grid[0].p.search = false;
						$.extend(grid[0].p.postData,{filters:""});							      
						grid.trigger("reloadGrid",[{page:1,current:true}]);
						
			}
			
			
		});
	 }	

	 
function create_combobox_close_inline(input,dialog,input1,grid){
	
				$(dialog).hide();
				count = jQuery(grid).jqGrid('getGridParam', 'records');				
				if((count<=0)||($.trim($(grid).jqGrid('getGridParam', 'selrow'))=='')||($(grid).data('clicked')===false)){
						$(input).val("");		
						$(input1).val(" ");				
				}				
				else{
					
									var ids = $(grid).getDataIDs();
									var idcur = $(grid).jqGrid('getGridParam', 'selrow')	
									var columnNames = $(grid).jqGrid('getGridParam','colModel');
						 			ten = $(grid).jqGrid('getCell', idcur, columnNames[0].name);										
									$(input1).val(idcur);			
									$(input).val(ten);	
				}					
		}	
/*function load_select1(){
	window.xaphuong1 = $.ajax({url: 'resource.php?module=web_services&function=get_auto_edit_option&action=index&term=&status=2&tables=DM_QuanHuyen&id=ID_QuanHuyen&name=TenQuanHuyen', async: false, success: function(data, result) {if (!result) alert('Không load được danh mục phòng ban');}}).responseText;	
	//$("#rowed3").setColProp('ID_QuanHuyen', { editoptions: { value: xaphuong} });
	//$('#ID_QuanHuyen').empty();
	//create_select("#ID_QuanHuyen",xaphuong);
	tam = window.xaphuong.split(';');
	tam1 = window.xaphuong1.split(';');
	count=tam.length-1;
	count1=tam1.length-1;
	last = tam[count].split(':');
	last1 =tam1[count1].split(':');
	if(last1[0]==last[0]){		
	}else{
		$("#rowed3").setColProp('ID_QuanHuyen', { editoptions: { value: xaphuong1} });
		$('#ID_QuanHuyen').empty();
		create_select("#ID_QuanHuyen",xaphuong1);
		if(last1>last){
		$('#ID_QuanHuyen1').val(last1[1]);
		$('#ID_QuanHuyen').val(last1[0]);
		window.xaphuong=window.xaphuong1
		}
	}
}*/

function load_select(){
	window.xaphuong = $.ajax({url: 'resource.php?module=web_services&function=get_auto_edit_option&action=index&term=&status=2&tables=DM_QuanHuyen&id=ID_QuanHuyen&name=TenQuanHuyen', async: false, success: function(data, result) {if (!result) alert('Không load được danh mục phòng ban');}}).responseText;	
		
}

function create_Dm_thuoc_grid(elem,datalocal){	
		datalocal=jQuery.parseJSON(datalocal);	 
		 $(elem).jqGrid({
		datastr:datalocal,	
		datatype: "jsonstring" ,
		colNames:['Tên thuốc', 'Hoạt chất','Tên biệt dược', 'Tên nhóm thuốc','','','','bhyt',''],
		colModel:[			
			{name:'TenBietDuoc',index:'TenBietDuoc'}, 
			{name:'HoatChat',index:'HoatChat'},					 
			{name:'MaThuoc',index:'MaThuoc',hidden :true},	 	
			{name:'ID_DuongDung',index:'ID_DuongDung',hidden :true},	
			{name:'DonGia',index:'DonGia',hidden :true},	
			{name:'ID_dvt',index:'ID_dvt',hidden :true},	
			{name:'LaThuoc',index:'LaThuoc',hidden :true},	 	 
			{name:'bhyt',index:'bhyt',hidden :true},
			{name:'ten_dvt',index:'ten_dvt',hidden :true},
		],
		hidegrid: false,
		gridview: true,
		loadonce: true,
		scroll: true,		 
		modal:true,	 
		rowNum: 300,
		rowList:[],
		pager: '#prowed_DM_thuoc',
		sortname: 'ID_Thuoc',
		height:($(window).height() / 100 * parseFloat(40)).toFixed(0),
		width: (($(window).width() / 100 * parseFloat(58)).toFixed(0)),
		viewrecords: true,	
		ignoreCase:true,
		shrinkToFit:true,
		cmTemplate: {sortable:false},
		
		sortorder: "desc",
		serializeRowData: function (postdata) { 		 	
			
		},
		onSelectRow: function(id){	
		$("#rowed6").jqGrid('getGridParam', 'selrow');
		var rowData = $(elem).getRowData(id);	
						$('#rowed6').jqGrid("setCell", $("#rowed6").jqGrid('getGridParam', 'selrow'), "HoatChat",rowData['HoatChat'] );
						$('#rowed6').jqGrid("setCell", $("#rowed6").jqGrid('getGridParam', 'selrow'), "TenDonViTinh",rowData['ten_dvt'] );
						$('#rowed6').jqGrid("setCell", $("#rowed6").jqGrid('getGridParam', 'selrow'), "bhyt",rowData['bhyt'] );
						
		},
		ondblClickRow: function (id, rowIndex, columnIndex) {
				
 		},
		loadComplete: function(data) {	
			
			ids_rowed3=$('#rowed3').jqGrid('getDataIDs');	
			for(i=0;i<=ids_rowed3.length;i++){
				var rowData = $(elem).getRowData(i);	
				if(rowData['bhyt']==1){
					
					
				}
			}
		},	  
		
	});	
	 $("#DM_thuoc").jqGrid('navGrid',"#prowed_DM_thuoc",{add: false, edit: false, del: false, search: false,closeAfterEdit: true,clearAfterAdd :true,closeOnEscape : true });				 
	 $("#DM_thuoc").jqGrid('filterToolbar',{searchOperators : false,searchOnEnter:false,defaultSearch:"bw"});
	 $("#DM_thuoc").jqGrid('bindKeys', {} );
		
} 

function inline_enter(rowid){
	//alert('#'+rowid+'_ID_Thuoc1');
	
	//$('#'+rowid+'_ID_Thuoc1','#'+rowid+'_Giaban,#'+rowid+'_Giaban,#'+rowid+'_Ngayapdung').unbind('keydown')
	$('#'+rowid+'_ID_Thuoc1,#'+rowid+'_Giaban,#'+rowid+'_Giaban,#'+rowid+'_Ngayapdung').bind('keydown',function(e){
	

		if (e.keyCode === 13||e.keyCode === 9){
			if($('#'+rowid+'_ID_Thuoc1').is(":focus")){
				if($('.dialog_dm_thuoc').is(":visible")===true){
				$('#DM_thuoc').data('clicked', true);
				var idcur = $('#DM_thuoc').jqGrid('getGridParam', 'selrow');
				$('#DM_thuoc').jqGrid("setSelection",idcur, true);				
				create_combobox_close_inline('#'+rowid+'_ID_Thuoc1','.dialog_dm_thuoc','#'+rowid+'_ID_Thuoc','#DM_thuoc');
				}				
				setTimeout(function(){
							$('#'+rowid+'_Giaban').focus()
				},50);	
			}			
				
			if($('#rowed6 #'+rowid+'_Giaban').is(":focus")){	
				  
				setTimeout(function(){
						$('#rowed6 #'+rowid+'_Ngayapdung').focus()
				},50);
			
			}
			if($('#rowed6 #'+rowid+'_Ngayapdung').is(":focus")){	
				setTimeout(function(){
					$("#prowed6 .ui-icon-disk").click();
				},50);
				// $('#rowed6 #ui-icon-disk').trigger('click');
				//jQuery("#rowed6").jqGrid('saveRow',$("#rowed6").jqGrid('getGridParam', 'selrow')	);
			
			}
			
		}
		
	})
	
} 

function check_idthuoc(value,colname){
		if($.trim(value)==''){
			return [false,'Chưa chọn thuốc','ID_Thuoc1']
		}else{
			return[true,'']
		}
	
}

function selectbox_search(input,input1,grid){
	if(!$("#"+input).length){
	 setTimeout(function(){selectbox_search(input,input1,grid)},10);
	  return;
	}
	$("td.ui-search-clear").hide();
	$('#'+input).hide();
	$('#'+input).before( '<input id="'+input+'1" type="text" value="" style="width:100%;padding:0px;">' ); 				
	$('#'+input+'1').keyup(function(e){						
		$('#'+input1).val($('#'+input+'1').val())						
		$(grid)[0].triggerToolbar();  						
	})
}
</script>