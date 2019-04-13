
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<META HTTP-EQUIV="CACHE-CONTROL" CONTENT="NO-CACHE">
<link rel="stylesheet" type="text/css" media="screen" href="css/expand_menu.css" />
<link rel="stylesheet" type="text/css" media="screen" href="css/styles.css" />
        <link rel="stylesheet" type="text/css" media="screen" href="js/grid/themes/south-street/jquery-ui.css" />
<link rel="stylesheet" type="text/css" media="screen" href="js/grid/themes/ui.jqgrid.css" />
<link rel="stylesheet" type="text/css" media="screen" href="js/grid/themes/ui.multiselect.css" />
<link rel="stylesheet" href="js/tiny_scroll/css/website.css" type="text/css" media="screen"/>
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
<!--<script type="text/javascript" src="js/jwerty/jwerty.canBridge.js"></script>
<script type="text/javascript" src="js/jwerty/jwerty.enderBridge.js"></script>-->
<script type="text/javascript" src="js/jwerty/jwerty.js"></script>
<script type="text/javascript" src="js/jquery-scrolltofixed.js"></script>
<script type="text/javascript" src="js/tiny_scroll/js/jquery.tinyscrollbar.min.js"></script>
	<style type="text/css">
 

  .ui-button { margin-left: -1px; }     .ui-button-icon-only .ui-button-text { padding: 0.35em; }      .ui-autocomplete-input { margin: 0; padding: 0.48em 0 0.47em 0.45em; }
	 


    .ui-th-column{
        font-size:11px!important;    }
    #rowed3 td,#rowed_xChamCong td{
        /* line-height:25px!important;*/
        font-size:11px!important;	
    }
  
    .ui-menu { 
        width: 150px;
        display:none;
        position:absolute;  	 
        box-shadow:0px 0px 3px #333;
        z-index:100000;  
    }    
    .sub_grid_lamdon{        
        display:none;
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
    .ui-state-error .ui-icon, .ui-state-error-text .ui-icon {
        background-image: url(/themeroller/images/ui-icons_f0c500_256x240.png);
    }
	#rowed3_frozen tr td{
		font-size:11px;		  
		 
	 }
	 input#nhanvien{
		 height:9px!important;
		 
	 }
</style>
</head><body>
 
<div> <span class="custom-combobox">

<input id="abc1" class="custom-combobox-input ui-widget ui-widget-content ui-state-default ui-corner-left ui-autocomplete-input" type="text" name="abc1" autocomplete="off" title="">
<a class="ui-button ui-widget ui-state-default ui-button-icon-only custom-combobox-toggle ui-corner-right" tabindex="-1" title="Show All Items" role="button" aria-disabled="false">
<span class="ui-button-icon-primary ui-icon ui-icon-triangle-1-s"></span>
<span class="ui-button-text"></span>
</a>
</span></div>


	<div class="form_row" style="vertical-align:top;display:inline-block"  >  <label for="nhomclslb">Nhóm CLS:*</label> 
					<span class="custom-combobox"> <input type=text id='com_thuocnhomcls' style="width:120px!important" ></span> 
					<input id='com_thuocnhomcls1' class='com_thuocnhomcls1'  style="width:200px;display:none"></div>
					<div class="form_row" style="vertical-align:top;display:block;"  > 
					<div class="form_row" style="vertical-align:top;display:inline-block;text-align:left" >  <label for="loaikhamlb">Loại khám:*</label>
					<span class="custom-combobox"> <input type=text style="width:120px!important"  id='com_thuocloaikham' class='com_thuocloaikham' ></span> 
					<input id='com_thuocloaikham1' class='com_thuocloaikham1'  style="width:200px;display:none"></div>
		
			
			
                    </div>

<script type="text/javascript">
jQuery(document).ready(function() {

	create_comboboxtest('#com_thuocloaikham','#com_thuocloaikham1',".data_lk","#data_lk",create_bs2,500,300,'Nhóm','data_loaikham');
	 create_comboboxtest('#com_thuocnhomcls','#com_thuocnhomcls1',".data_cls","#data_cls",create_bs,500,300,'Nhóm','data_nhomcls');
})



	function create_bs(elem,datalocal){ 
 datalocal=jQuery.parseJSON(datalocal);  
   $(elem).jqGrid({
  datastr:datalocal,
  datatype: "jsonstring" ,
	  colNames:['Tên nhóm', 'Mô tả'],
	  colModel:[  

	   {name:'TenNhom',index:'TenNhom',hidden :false},
	   {name:'MoTa',index:'MoTa',hidden :false},
	   
	  ],
	  hidegrid: false,
	  gridview: true,
	  loadonce: true,
	  scroll: false,   
	  modal:true,  
	  rowNum: 200000,
	  rowList:[],  
	  sortname: 'TenNhom',
	  height:200,
	  width: 470,
	  viewrecords: true, 
	  ignoreCase:true,
	  shrinkToFit:true,
	  cmTemplate: {sortable:false},
	  sortorder: "desc",
	  serializeRowData: function (postdata) {  
	  },
	  onSelectRow: function(id){ 
	  },
	  ondblClickRow: function (id, rowIndex, columnIndex) {		 
	  },
	  loadComplete: function(data) { 	 
	  },   
	 }); 		
	  $(elem).jqGrid('filterToolbar',{searchOperators : false,searchOnEnter:false,defaultSearch:"cn"});
	  $(elem).jqGrid('bindKeys', {} );
	  
	}
	
	function create_bs2(elem,datalocal){ 
	   window.data_nhom2=jQuery.parseJSON(datalocal);  
	   $(elem).jqGrid({
	  datastr: window.data_nhom2,
	  datatype: "jsonstring" ,
	  colNames:['Loại khám', 'Mô tả','idncls'],
	  colModel:[   
		
	   {name:'TenLoaiKham',index:'TenLoaiKham',hidden :false},
	   {name:'MoTa',index:'MoTa',hidden :false},
	   	{name:'ID_NhomCLS',index:'ID_NhomCLS',hidden :true},
	   
	  ],
	  hidegrid: false,
	  gridview: true,
	  loadonce: true,
	  scroll: false,   
	  modal:true,  
	  rowNum: 200000,
	  rowList:[],  
	  sortname: 'TenLoaiKham',
	  height:200,
	  width: 470,
	  viewrecords: true, 
	  ignoreCase:true,
	  shrinkToFit:true,
	  cmTemplate: {sortable:false},
	  sortorder: "desc",
	  serializeRowData: function (postdata) {  
	  },
	  onSelectRow: function(id){  	
	  },
	  ondblClickRow: function (id, rowIndex, columnIndex) {		 
	  },
	  loadComplete: function(data) { 
	  },   	  
	 }); 		
	  $(elem).jqGrid('filterToolbar',{searchOperators : false,searchOnEnter:false,defaultSearch:"cn"});
	  $(elem).jqGrid('bindKeys', {} );	  
	}
		



function init_combox2(input,input1,dialog,grid){    
jwerty.key('tab', false);
$(input).click(function(event){
    event.stopPropagation();
});

$('html').click(function() {	
	$(dialog).hide();
	setval(input,input1,grid)
});

$(dialog+' .ui-jqgrid-hbox').click(function(event) {	
	event.stopPropagation();
});
$(input).bind("keyup", function(e) { 
	var key = e.which;
	if(jwerty.is("enter",e)||jwerty.is("tab",e)){	
		count = jQuery(grid).jqGrid('getGridParam', 'records');	
					if(count<=0){
									$(input1).val("");
									$(input).val("");
									$(dialog).hide();			
									setval(input,input1,grid)						
								}else{
									var ids = $(grid).getDataIDs();
									var idcur = $(grid).jqGrid('getGridParam', 'selrow')	
								
									var columnNames = $(grid).jqGrid('getGridParam','colModel');
						 			ten = $(grid).jqGrid('getCell', idcur, columnNames[0].name);	
									$(input).val(ten);	
									$(input1).val(idcur);		
									$(dialog).hide();
									setval(input,input1,grid)
									
								}
	}else if(jwerty.is("esc",e)){
	
				$(dialog).hide();	
				setval(input,input1,grid)
				}else if(jwerty.is("↓",e)){
					var idcur = $(grid).jqGrid('getGridParam', 'selrow')	
					
					
					
					if($(dialog).is(":visible") ===false){
						$(dialog).css("top",$(input).offset().top+25+"px");
				$(dialog).css("left",$(input).offset().left+"px");
						$(dialog).show();
					
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
						var idcur = $(grid).jqGrid('getGridParam', 'selrow')	
					if($(dialog).is(":visible")===false){
					$(dialog).css("top",$(input).offset().top+25+"px");
				$(dialog).css("left",$(input).offset().left+"px");
					$(dialog).show();	}
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
					if(key!=13&&key!=9&&key!=16&&key!=37&&key!=38&&key!=39&&key!=40&&key!=27){
				
						$(input).bind("keydown", function(e) { 
									truoc=$(input).val();
									})
									
					//if(truoc!==$(input).val()){
						$(dialog).css("top",$(input).offset().top+25+"px");
				$(dialog).css("left",$(input).offset().left+"px");
							$(dialog).show();	
					grid = $(grid);
						var columnNames = $(grid).jqGrid('getGridParam','colModel');
						var searchFiler = $(input).val(), f;
						if (searchFiler.length === 0) {
							grid[0].p.search = false;
							$.extend(grid[0].p.postData,{filters:""});
						}
						f = {groupOp:"OR",rules:[]};
						f.rules.push({field:columnNames[0].name,op:"cn",data:searchFiler});               
						grid[0].p.search = true;
						$.extend(grid[0].p.postData,{filters:JSON.stringify(f)});         
						grid.trigger("reloadGrid",[{page:1,current:true}])
						
				
						//}
					}
				}
		});	

}
	function afterInit_combox2(input,dialog,grid) {	 
		
			var button = $("<a>").attr("tabIndex", -1).attr("title", "Show all items").tooltip().insertAfter($(input)).button({
			icons: {
				primary: "ui-icon-triangle-1-s"
			},
			text: false
		}).removeClass("ui-corner-all").addClass("custom-combobox-toggle ui-corner-right").click(function(event) {
			$(input).focus();	
			$(input).select();	
			if($(dialog).is(":visible")===true){
				$(dialog).hide();
				setval(input,input1,grid)
				//$(input).focus();
			}else{
				//alert($(input).offset().top);
				$(dialog).css("top",$(input).offset().top+105);
				$(dialog).css("left",$(input).offset().left);
				$(dialog).show();
				event.stopImmediatePropagation();
				//alert(grid)
					/*	grid = $(grid);
						var columnNames = $(grid).jqGrid('getGridParam','colModel');
						grid[0].p.search = false;
						$.extend(grid[0].p.postData,{filters:""});							      
						grid.trigger("reloadGrid",[{page:1,current:true}]);*/
						
			}
			
			
		});
	 }
	function create_comboboxtest(input,input1,dialog,grid,fun,width,height,title,data){
		grid1 = grid.substr(1);
		dialog1 = dialog.substr(1);
		if(grid.charAt(0)=='.'){
			grid1="class='"+grid1+"'";
		}else{			
			grid1="id='"+grid1+"'";
		}
		if(dialog.charAt(0)=='.'){
			dialog1="class='"+dialog1+"'";
		}else{			
			dialog1="id='"+dialog1+"'";
		}
		//abc="<div  "+dialog1+"><table "+grid1+"></table></div>"
		//alert(abc);
		$("body").append("<div  "+dialog1+"><table "+grid1+"></table></div>");
		
		 $( dialog ).css({		
			" position":"absolute",
			"z-index":"1000000",		 
			"display":"none",	
			"box-shadow":"0px 0px 6px #333"	 	
		});
		
		var pathname = window.location.href;
		var module = getURLParameter('module',pathname);
		var view = getURLParameter('view',pathname);
		var pathname1='resource.php?module='+module+'&view='+view+'&action='+data;
			$.post(pathname1).done(function(datalocal) {						
				
					fun(grid,datalocal);
					afterInit_combox2(input,dialog,grid);
					init_combox2(input,input1,dialog,grid)			
			})	
	}



 
 function setval(input,input1,grid){
									count = jQuery(grid).jqGrid('getGridParam', 'records');	
	if(count<=0){
									$(input1).val("");
									$(input).val("");
									
								}else{
									var ids = $(grid).getDataIDs();
									var idcur = $(grid).jqGrid('getGridParam', 'selrow')	
									var columnNames = $(grid).jqGrid('getGridParam','colModel');
						 			ten = $(grid).jqGrid('getCell', idcur, columnNames[0].name);										
									$(input1).val(idcur);			
									$(input).val(ten);	
								}
	
}
		
		function create_combobox_open(input,dialog){
				$(dialog).css("top",$(input).offset().top+105);
				$(dialog).css("left",$(input).offset().left);
				$(dialog).show();			
		}
		function create_combobox_close(input,dialog,input1){
				$(dialog).hide();
							count = jQuery(grid).jqGrid('getGridParam', 'records');	
	if(count<=0){
									$(input1).val("");
									$(input).val("");
									
								}else{
									var ids = $(grid).getDataIDs();
									var idcur = $(grid).jqGrid('getGridParam', 'selrow')	
									var columnNames = $(grid).jqGrid('getGridParam','colModel');
						 			ten = $(grid).jqGrid('getCell', idcur, columnNames[0].name);										
									$(input1).val(idcur);			
									$(input).val(ten);	
								}		
		}
</script>

</body></html>