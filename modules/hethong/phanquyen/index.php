<!--<link rel="stylesheet" href="../../../css/form_css.css" type="text/css" media="screen"/>-->
<style type="text/css">
	/* tu dong xun dong trong 1 o*/
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
    #rowed3 td,#rowed4 td,#rowed5 td{

        font-size:11px!important;	   
    }

    .ui-menu { 
        width: 150px;
        display:none;
        position:absolute;  	 
        box-shadow:0px 0px 3px #333;
        z-index:100000;  
    }

    .ghichu   { 
        border:1px;
        border-style: solid;
        display: inline-block;
    }
    .grid1
    {
        width:180px;
        display:inline-block;
    }
    #menu_toggle{
        font-size:12px;
        padding:5px 0px;
        background:url("js/grid/themes/south-street/images/ui-bg_highlight-hard_15_459e00_1x100.png") repeat-x scroll   #459E00;
        border:#CCC 1px dashed;	
    }
    .right_col{
        background:#FFF;
    }
</style>

<html>
<body> 
     <div class="ui-layout-center left_col"> 
        <table id="rowed3" >
        
        
        </table>   
         
     </div>    
	 
     <div class="ui-layout-east right_col"> 
     <div > 
     <table id="rowed4" >
     </table>
     </div>
     <div id="#prowed4">
           <div class="grid1">
                <div class="ghichu" style=" width: 20px; background:#7be75a"> &nbsp;</div>
                <div class="ghichu" style="border: none">Đã có quyền</div>                
           </div>
           <div class="grid1">
           		<div class="ghichu" style=" width: 20px; background:#FFF "> &nbsp;</div>
                <div class="ghichu" style="border: none">Không có quyền</div>
           </div>
    </div> 
     <div id="prowed4"></div>   
    <div>
    <table id="rowed5" ></table>
    <div id="prowed5"></div>   
     </div>
             

</body>
</html> 

<script type="text/javascript">
    jQuery(document).ready(function() {
		//window.demdong=0;		
		
		 load_phong_ban();
        //$('body').layout({ applyDemoStyles: true });
        create_layout();
        create_grid();
        create_grid_new();
        create_grid3();
        //alert($(".left_col").width() + "  "+ $(".right_col").width());
 $('#gbox_rowed4 .ui-search-table').find(':input[type=text]').each(function(){  

 	  $("#"+this.id).focusin(function(){   
	  // alert(); 
    $('#rowed4').setGridParam({loadonce: true}).trigger('reloadGrid');
   });        
 });
        $('.ui-layout-east,.ui-layout-center').bind('resize', function() {
            $("#rowed3 ").setGridWidth($(".left_col").width() - 4);
			$("#rowed3 ").setGridHeight($(".left_col").height() -100);
            $("#rowed4, #rowed5").setGridWidth($(".right_col").width() - 4);			
        }).trigger('resize');
        $("#rowed5").setGridHeight($(".right_col").height() - 450);

    })

    var lastsel;
    function create_grid() {

        $("#rowed3").jqGrid({
            url: 'resource.php?module=<?= $modules ?>&view=<?= $view ?>&action=ds_member',
            datatype: "json",
            colNames: ['Tên đăng nhập', 'Tên nhân viên','Tên phòng bàn'],
            colModel: [
                {name: 'NickName', index: 'NickName', search: true, width: "9%", editable: false, align: 'left', hidden: false},
                {name: 'TenNhanVien', index: 'TenNhanVien', search: true, width: "10%", editable: false, align: 'left', hidden: false},
               	 {name: 'TenPhongBan', index: 'TenPhongBan', search: true, width: "10%", editable: false, align: 'left', hidden: false},
                
            ],
            loadonce: true,
            scroll: false,
            modal: true,
            rowNum: 1000, //lay tat ca cac dong
            rowList: [30, 50, 70],
            pager: '#prowed3',
            sortname: 'NickName',
            height: 100,
            width: 100,
            viewrecords: true,
            ignoreCase: true,
            shrinkToFit: true,
            //hoverrows:false,
            //jsonReader:{repeatitems:true,subgrid:{repeatitems:false}},	
            sortorder: "desc",
            serializeRowData: function(postdata) {
                //$("#rowed3").trigger("reloadGrid");		
                //return postdata;
            },
            onSelectRow: function(id) {             
			//Click chọn sẽ hiển thị vùng bên phải
			
			if(window.status==0){
				$("#rowed4").jqGrid('setGridParam',{datatype: "json",url:"resource.php?module=<?=$modules?>&view=<?=$view?>&action=ds_quyenhienthi&q=0&id="+id,page:1}).trigger('reloadGrid');	
			}else{
				$("#rowed4").jqGrid('setGridParam',{datatype: "json",url:"resource.php?module=<?=$modules?>&view=<?=$view?>&action=ds_quyenhienthi&q=1&id="+id,page:1}).trigger('reloadGrid');	
			}
							
				$("#rowed5").jqGrid('setGridParam',{datatype: "json",url:"resource.php?module=<?=$modules?>&view=<?=$view?>&action=ds_quyen&q=0"}).trigger('reloadGrid');
				window.rowed3_id=id;
			$('#rowed5').jqGrid('setCaption', "Danh sách quyền menu ");
            },
            ondblClickRow: function(rowId, rowIndex, columnIndex) {
                $(".ui-icon-pencil").trigger('click');
				
            },
            loadComplete: function(data) {
				
            
            },
            caption: "Danh sách nhân viên "
        });
        
        $("#rowed3").jqGrid('filterToolbar',{searchOperators : false,searchOnEnter:false,defaultSearch:"cn"});
        $("#rowed3").setGridWidth($(window).width() - 100);
        $("#rowed3").setGridHeight($(window).height() - $("#form_danh_muc_phong_ban").height() - 400);
        $("#rowed3").jqGrid('bindKeys', {"onEnter": function(rowid) {
            }});
        $("#gbox_rowed3").attr("tabindex", "1");
        //$("#gbox_rowed3").focus();	
        $("#gbox_rowed3").bind('keydown', function(e) {
            if ((jwerty.is("ctrl+m", e))) {
                $("#rowed3").jqGrid('restoreRow', lastsel);
                $("#rowed3").jqGrid('editRow', rowid, true);
                lastsel = rowid;
            }
        })

    }
    function create_grid2()
    {
		window.status=0;
		var mydata=[];
        $("#rowed4").jqGrid({
            data:mydata,
            datatype: "local",
            colNames: ['nv','Danh mục','ID form','Tên form','Kiểu Control'],
            colModel: [
				{name: 'isactive', index: 'isactive', search: true, width: "2%", editable: false, align: 'left', hidden: true}, 
				{name:'ID_Parent',index:'ID_Parent',search:true, width:"2%", editable:true,align:'center',edittype:"select",formatter:"select",hidden:true,editoptions:{value:phongban}},
                {name: 'ID_NhanVienAcesss', index: 'ID_NhanVienAcesss', search: true, width: "20%", editable: false, align: 'left', hidden: false}, 										
                {name: 'Caption', index: 'Caption', search: true, width: "80%", editable: false, align: 'left', hidden: false}, 	
				{name: 'KieuControl', index: 'KieuControl', search: true, width: "20%", editable: false, align: 'left', hidden: false}, 	   
                    
            ],
            loadonce: false,
            scroll: false,
            modal: true,
            rowNum: 10000,
            rowList: [],
            pager: '#prowed4',
			pginput:false,
			pgbuttons:false,
            sortname: 'Caption',
            height: 100,
            width: 100,
          //  viewrecords: true,
            ignoreCase: true,
            shrinkToFit: true,
            //hoverrows:false,
			grouping:true,
			multiselect: true,			
			groupingView : 
			{
				groupField : ['ID_Parent'],
				groupCollapse : false,
				groupColumnShow : [false]
			},
			onSelectRow: function(id) {          

					
            },
			 
			//jsonReader:{repeatitems:true,subgrid:{repeatitems:false}},	
            sortorder: "desc",
			//Kiểm tra so dong trên lưới
			loadComplete: function(data) {
				$('#rowed4').setGridParam({loadonce: true}).trigger('reloadGrid');
				
						
		 ids=$('#rowed4').jqGrid('getDataIDs');				
				for(i=0;i<ids.length;i++){		
				var rowData = jQuery('#rowed4').getRowData(ids[i]);					 			 
					if(rowData['ID_NhanVien']==1){
						 //$('#rowed3').jqGrid('setRowData', ids[i], false, {background:'#e0e0e0'});
						$('#rowed4').jqGrid('setCell',ids[i],"ID_Control","",{background:'#7be75a'});
						$('#rowed4').jqGrid('setCell',ids[i],"Caption","",{background:'#7be75a'});
					}					   
				}
				//Test save mutil select
				
				
				//------------------------
				
				for(i=0;i<ids.length;i++){		
				var rowData = jQuery('#rowed4').getRowData(ids[i]);					 			 
					if(rowData['isactive']==1){
						 $('#rowed4').jqGrid('setSelection', ids[i]);
					}	
					
				}
		 },
            caption: "Danh sách quyền nhân viên ",		
   		
        });	
		
		$("#rowed4").jqGrid('navGrid',"#prowed4",{add: true, add: true, edit: false, del: false,addtext:"Lưu",  search:false,refresh:false,closeAfterEdit: true,clearAfterAdd :true,closeOnEscape : true ,
			addfunc: function() 
		{
			$("#add_rowed4").addClass('ui-state-disabled');
		  save_quyencap2();
		  
		}
		
		}); //options			
		$("#rowed4").jqGrid('navButtonAdd', '#prowed4', {caption: "Phân quyền chức năng trong form", buttonicon: '',
            onClickButton: function() {
				
				 $("#rowed4").jqGrid('GridUnload');
				//	$("#rowed4").jqGrid('GridDestroy');

				//$("#rowed4").GridUnload();
				 
				   create_grid_new();
				   	$("#rowed4 ").setGridHeight($(".left_col").height() -400);
          			 $("#rowed4").setGridWidth($(".right_col").width() - 4);	
				  $('#gview_rowed5').show(100);
				  $('#prowed5').show(100);		
				  id_nhanvien=$('#rowed3').jqGrid('getGridParam', 'selrow')
				  $("#rowed3 #"+id_nhanvien).click();
					$("#rowed4").jqGrid('setGridParam',{datatype: "json",url:"resource.php?module=<?=$modules?>&view=<?=$view?>&action=ds_quyenhienthi&q=1&id="+id_nhanvien,page:1}).trigger('reloadGrid');	
				  
				  
            },
            title: "Phân quyền chức năng trong form",
            position: "last"
    });
		$("#rowed4").jqGrid('filterToolbar',{searchOperators : false,searchOnEnter:false,defaultSearch:"cn"});
        $("#rowed4").setGridWidth($(window).width() - 100);
        $("#rowed4").setGridHeight($(window).height() - $("#k").height() - 400);
		 $("#rowed4").bind('keydown', function(e) {})
		
		
		 
    }
    function create_grid3()
    {
        $("#rowed5").jqGrid({
            url: 'resource.php?module=<?= $modules ?>&view=<?= $view ?>&action=ds_quyen&q=0',
            datatype: "json",
            colNames: ['STT','id','Tên quyền','Disable','Kiểu Control','Active'],
            colModel: [
				{name: 'ID_Control', index: 'ID_Control', search: false, width: "2%", editable: false, align: 'left', hidden: false},
				{name: 'id_nvacesss', index: 'id_nvacesss', search: false, width: "2%", editable: false, align: 'left', hidden: true}, 	
                {name: 'Caption', index: 'Caption', search: false, width: "10%", editable: false, align: 'left', hidden: false},			
				{name: 'Disable', index: 'Disable', search: false, width: "10%", editable: false, align: 'left', hidden: true},
				{name: 'KieuControl', index: 'KieuControl', search: true, width: "20%", editable: false, align: 'left', hidden: false}, 
				{name: 'Active', index: 'Active', search: true, width: "20%", editable: false, align: 'left', hidden: false}, 
               
            ],
            loadonce: false,
            scroll: false,
            modal: true,
			gridview: true,
          //  rowNum: 30,
          //  rowList: [30, 50, 70],
		    pginput:false,
			pgbuttons:false,
            pager: '#prowed5',
            sortname: 'ID_Control',
            height: 100,
            width: 100,
        //    viewrecords: true,
            ignoreCase: true,
            shrinkToFit: true,
			multiselect: true,
            //hoverrows:false,
            //jsonReader:{repeatitems:true,subgrid:{repeatitems:false}},	
            sortorder: "desc",
            caption: "Phân quyền",
			loadComplete: function(data) {
		
				 ids=$('#rowed5').jqGrid('getDataIDs');				
				 for(i=0;i<ids.length;i++){		
				 var rowData = jQuery('#rowed5').getRowData(ids[i]);					 			 
							if(rowData['Disable']==1){
								 $('#rowed5').jqGrid('setSelection', ids[i]);
					}					   
				}
				
				
		 },
        });
		
		
		$("#rowed5").jqGrid('navGrid',"#prowed5",{add: true, edit: false, del: false,addtext:"Lưu", search:false,refresh:false,closeAfterEdit: true,clearAfterAdd :true,closeOnEscape : true ,
		addfunc: function() 
		{
			$("#add_rowed4").addClass('ui-state-disabled');		 
		    savepermission();
		  
		}
		
		}); //options		
		
		
       $("#rowed5").setGridWidth($(window).width() - 100);
      $("#rowed5").setGridHeight($(window).height() - $("#kha").height()-400);
	   
	// $("#rowed5").jqGrid('navGrid',"#prowed5",{edit: permission["edit"], del: permission["delete"], search: permission["search"],closeAfterEdit: true,clearAfterAdd :true,navkeys : [ true, 38, 40 ],closeOnEscape : true,},) //options	
    }	
	
    function create_layout() {
        $('body').layout({
            resizerClass: 'ui-state-default'
                    , east: {
                resizable: true
                        , size: 800
                        , spacing_closed: 27
                        , togglerLength_closed: 85
                        , fxName: "drop"		// none, slide, drop, scale
                        , fxSpeed_open: 450
                        , fxSpeed_close: 450
                        , fxSettings_open: {easing: "easeInQuint"}
                , spacing_closed:		27
                        , togglerLength_closed:	85
                        , togglerAlign_closed: "center"
                        , togglerContent_closed: "<div id='menu_toggle'>X<BR>O<BR>N<BR>G</div>"
                        , togglerTip_closed: "Open & Pin Menu"
                        , sliderTip: "Slide Open Menu"
                        , slideTrigger_open: "mouseover"
                        , fxSettings_close: {easing: "easeOutQuint"}
                , onresize_end: function() {
                   $("#rowed3 ").setGridWidth($(".left_col").width() - 4);			
                   $("#rowed4,#rowed5").setGridWidth($(".right_col").width() - 400);

                }
                , onopen_end: function() {
                    $("#rowed3 ").setGridWidth($(".left_col").width() - 4);
                    $("#rowed4, #rowed5").setGridWidth($(".right_col").width() - 400);

                }
                , onclose_end: function() {
                    $("#rowed3").setGridWidth($(".left_col").width() - 4);
                    $("#rowed4,#rowed5").setGridWidth($(".right_col").width() - 400);

                }

            }
            , center: {
                resizable: true
                        , size: 200

                        , fxName: "drop"		// none, slide, drop, scale
                        , fxSpeed_open: 450
                        , fxSpeed_close: 450
                        , fxSettings_open: {easing: "easeInQuint"}
                , fxSettings_close: {easing: "easeOutQuint"}

                , onresize_end: function() {
                    $("#rowed3 ").setGridWidth($(".left_col").width() - 4);
                    $("#rowed4,#rowed5").setGridWidth($(".right_col").width() - 4);

                }
                , onopen_end: function() {
                    $("#rowed3 ").setGridWidth($(".left_col").width() - 4);
                    $("#rowed4, #rowed5").setGridWidth($(".right_col").width() - 4);

                }
                , onclose_end: function() {
                    $("#rowed3").setGridWidth($(".left_col").width() - 4);
                    $("#rowed4, #rowed5").setGridWidth($(".right_col").width() - 4);


                }
            }
		
        });
		
    }
	function load_phong_ban(){
	window.phongban = $.ajax({url: 'resource.php?module=web_services&function=get_auto_edit_option&action=index&term=&status=0&tables=GD2_DM_Control&id=ID_Control&name=Caption', async: false, success: function(data, result) {if (!result) alert('Không load được danh mục phòng ban');}}).responseText;
	
		$("#rowed4").setColProp('ID_Parent', { editoptions: { value: phongban} });
		
		
}
function savepermission(){
	//boot chuoi tao mảng json
	 phancach="";
	 phancach1="";
	 var localdataToSend='{"id":[';
	  ids=$('#rowed5').jqGrid('getDataIDs');	
				for(i=0;i<ids.length;i++){		
				var rowData = jQuery('#rowed5').getRowData(ids[i]);					 			 
				localdataToSend = localdataToSend+''+phancach+'"'+rowData['id_nvacesss']+'"';
						phancach=","
		 			};
		
	 localdataToSend=localdataToSend+''+'],"id_control":[';				
			for(i=0;i<ids.length;i++){		
				var rowData = jQuery('#rowed5').getRowData(ids[i]);					 			 
				localdataToSend = localdataToSend+''+phancach1+'"'+ids[i]+'"';
						phancach1=","
		 			};		
						 
	 
	 localdataToSend=localdataToSend+''+'],"id_check":[';
	 id_control= jQuery("#rowed5").jqGrid('getGridParam','selarrrow');
	 id_nhanvien= jQuery("#rowed3").jqGrid('getGridParam','selrow');
	 
	 
	 localdataToSend = localdataToSend+''+id_control;
	 localdataToSend  = localdataToSend+'],"id_nhanvien":'+id_nhanvien+'}'
	//alert (id_parent);
	//Tạo mảng thành object 
	localdataToSend = jQuery.parseJSON(localdataToSend)
	$.post('resource.php?module=<?=$modules?>&view=<?=$view?>&action=controller&hienmaloi=a',
	 	localdataToSend).done(function(data) 
		{
			id_parent= jQuery("#rowed4").jqGrid('getGridParam','selrow');
		 
		   $('#rowed5').trigger('reloadGrid');	 
		   	
		  tooltip_message("Lưu dữ liệu thành công");
		  $("#add_rowed5").removeClass('ui-state-disabled');
		}	 
		  );
		  	  
	

}

function save_quyencap2(){
	//boot chuoi tao mảng json
	 phancach="";
	 phancach1="";
	 phancach2="";
	 var localdataToSend='{"id":[';
	  ids=$('#rowed4').jqGrid('getDataIDs');	
				for(i=0;i<ids.length;i++){		
				var rowData = jQuery('#rowed4').getRowData(ids[i]);					 			 
				localdataToSend = localdataToSend+''+phancach+'"'+rowData['ID_NhanVienAcesss']+'"';
						phancach=","
		 			};
	 localdataToSend=localdataToSend+''+'],"id_control":[';				
			for(i=0;i<ids.length;i++){		
				var rowData = jQuery('#rowed4').getRowData(ids[i]);					 			 
				localdataToSend = localdataToSend+''+phancach1+'"'+ids[i]+'"';
						phancach1=","
		 			};		
					
	 localdataToSend=localdataToSend+''+'],"isactive":[';						 
	 		for(i=0;i<ids.length;i++){		
				var rowData = jQuery('#rowed4').getRowData(ids[i]);					 			 
				localdataToSend = localdataToSend+''+phancach2+'"'+rowData['isactive']+'"';
						phancach2=","
		 			};	
					
	 localdataToSend=localdataToSend+''+'],"id_check":[';
	 id_control= jQuery("#rowed4").jqGrid('getGridParam','selarrrow');
	 id_nhanvien= jQuery("#rowed3").jqGrid('getGridParam','selrow');
	 
	 
	 localdataToSend = localdataToSend+''+id_control;
	 localdataToSend  = localdataToSend+'],"id_nhanvien":'+id_nhanvien+'}'
	//alert (id_parent);
	//Tạo mảng thành object 
	localdataToSend = jQuery.parseJSON(localdataToSend)
	$.post('resource.php?module=<?=$modules?>&view=<?=$view?>&action=controller _phanquyenform&hienmaloi=a',
	 	localdataToSend).done(function(data) 
		{
			id_parent= jQuery("#rowed3").jqGrid('getGridParam','selrow');	
			$('#rowed3 #'+id_parent).click();
		   // $('#rowed4').trigger('reloadGrid');	
		   tooltip_message("Lưu dữ liệu thành công"); 		  
		$("#add_rowed4").removeClass('ui-state-disabled');
		//alert ("Lưu dữ liệu thành công.");
		
		  
		}	 
		  );


}

		  	  
	 function create_grid_new()
    {
		window.status=1;
		var mydata=[];
        $("#rowed4").jqGrid({
            data:mydata,
            datatype: "local",
            colNames: ['nv','Danh mục','ID form','Tên Menu','Kiểu Control'],
            colModel: [
				{name: 'isactive', index: 'isactive', search: true, width: "2%", editable: false, align: 'left', hidden: true}, 
				{name:'ID_Parent',index:'ID_Parent',search:true, width:"2%", editable:true,align:'center',edittype:"select",formatter:"select",hidden:true,editoptions:{value:phongban}},
                {name: 'ID_Control', index: 'ID_Control', search: true, width: "20%", editable: false, align: 'left', hidden: true}, 				
                {name: 'Caption', index: 'Caption', search: true, width: "80%", editable: false, align: 'left', hidden: false}, 	
				{name: 'KieuControl', index: 'KieuControl', search: true, width: "20%", editable: false, align: 'left', hidden: false},	   
                    
            ],
            loadonce: false,
            scroll: false,
            modal: true,
            rowNum: 10000,
            rowList: [],
            pager: '#prowed4',
			pginput:false,
			pgbuttons:false,
            sortname: 'Caption',
            height: 100,
            width: 100,
          //  viewrecords: true,
            ignoreCase: true,
            shrinkToFit: true,
            //hoverrows:false,
			grouping:true,
			multiselect: false,			
			groupingView : 
			{
				groupField : ['ID_Parent'],
				groupCollapse : true,
				groupColumnShow : [false]
			},
			onSelectRow: function(id) { 
		
			if(typeof(window.current_id)=="undefined")
				{			
					
					$('#rowed4').jqGrid('setCell',id,"ID_Control","",{background:'transparent'});
					$('#rowed4').jqGrid('setCell',id,"Caption","",{background:'transparent'}); 
				}else{
						rowData = jQuery('#rowed4').getRowData(window.current_id);	
						rowData1 = jQuery('#rowed4').getRowData(id);
					if(rowData['isactive']==1&&rowData1['isactive']==1){
					$('#rowed4').jqGrid('setCell',id,"ID_Control","",{background:'transparent'});
					$('#rowed4').jqGrid('setCell',id,"Caption","",{background:'transparent'}); 
					$('#rowed4').jqGrid('setCell',window.current_id,"ID_Control","",{background:'#7be75a'});
					$('#rowed4').jqGrid('setCell',window.current_id,"Caption","",{background:'#7be75a'});
					}else if(rowData['isactive']==0&&rowData1['isactive']==1){
						
						$('#rowed4').jqGrid('setCell',id,"ID_Control","",{background:'transparent'});
						$('#rowed4').jqGrid('setCell',id,"Caption","",{background:'transparent'}); 
					
					}else if(rowData['isactive']==1&&rowData1['isactive']==0){
							$('#rowed4').jqGrid('setCell',id,"ID_Control","",{background:'transparent'});
							$('#rowed4').jqGrid('setCell',id,"Caption","",{background:'transparent'});
							$('#rowed4').jqGrid('setCell',window.current_id,"ID_Control","",{background:'#7be75a'});
							$('#rowed4').jqGrid('setCell',window.current_id,"Caption","",{background:'#7be75a'}); 
					}
					
				}
			window.current_id=id;				
				        
		
		 		id_nhanvien=$('#rowed3').jqGrid('getGridParam', 'selrow')
			
				$("#rowed5").jqGrid('setGridParam',{url:"resource.php?module=<?=$modules?>&view=<?=$view?>&action=ds_quyen&id="+id+"&q=1&id_nhanvien="+id_nhanvien}).trigger('reloadGrid');		
						 
			
						celValue = $('#rowed4').jqGrid ('getCell', id, 'Caption');
						celValue = "Danh sách quyền menu: " + celValue;					
						$('#rowed5').jqGrid('setCaption', celValue);
					
					
            },
			 
			//jsonReader:{repeatitems:true,subgrid:{repeatitems:false}},	
            sortorder: "desc",
			//Kiểm tra so dong trên lưới
			loadComplete: function(data) {
				$('#rowed4').setGridParam({loadonce: true}).trigger('reloadGrid');
						
		 ids=$('#rowed4').jqGrid('getDataIDs');				
				for(i=0;i<ids.length;i++){		
				var rowData = jQuery('#rowed4').getRowData(ids[i]);					 			 
					if(rowData['isactive']==1){
						 //$('#rowed3').jqGrid('setRowData', ids[i], false, {background:'#e0e0e0'});
						$('#rowed4').jqGrid('setCell',ids[i],"ID_Control","",{background:'#7be75a'});
						$('#rowed4').jqGrid('setCell',ids[i],"Caption","",{background:'#7be75a'});
					}					   
				}
								
					
				 
				if(typeof(window.rowed3_id)!="undefined")
					{				
					  
						var myGrid = $('#rowed3'),
						selRowId = myGrid.jqGrid ('getGridParam', 'selrow'),
						celValue = myGrid.jqGrid ('getCell', selRowId, 'TenNhanVien');
						celValue = "Danh sách quyền nhân viên: " + celValue;					
						$('#rowed4').jqGrid('setCaption', celValue);
						$('#rowed5').jqGrid('setCaption', "Danh sách quyền menu");
						
					}else{
						$('#rowed4').jqGrid('setCaption', "Danh sách quyền nhân viên");
						
						
					}
		 },
          //  caption: "Danh sách quyền nhân viên ",	
				
			
							
   		
        });	
		
		$("#rowed4").jqGrid('navGrid',"#prowed4",{ add: false, edit: false, del: false,addtext:"",  search:false,refresh:false,closeAfterEdit: true,clearAfterAdd :true,closeOnEscape : true ,
			
		
		}); //options			
		$("#rowed4").jqGrid('navButtonAdd', '#prowed4', {caption: "Phân quyền cho menu", buttonicon: '',
            onClickButton: function() {
				 $("#rowed4").jqGrid('GridUnload');				
				  create_grid2();
				 	$("#rowed4 ").setGridHeight($(".left_col").height() -150);
          			 $("#rowed4").setGridWidth($(".right_col").width() - 4);	
				  $('#gview_rowed5').hide(100);
				  $('#prowed5').hide(100);
				  
				   id_nhanvien=$('#rowed3').jqGrid('getGridParam', 'selrow')
				    $("#rowed3 #"+id_nhanvien).click();
					$("#rowed4").jqGrid('setGridParam',{datatype: "json",url:"resource.php?module=<?=$modules?>&view=<?=$view?>&action=ds_quyenhienthi&q=1&id="+id_nhanvien,page:1}).trigger('reloadGrid');		
					
            },
            title: "Phân quyền cho menu",
            position: "last"
    });
		$("#rowed4").jqGrid('filterToolbar',{searchOperators : false,searchOnEnter:false,defaultSearch:"cn"});
        $("#rowed4").setGridWidth($(window).width() - 100);
        $("#rowed4").setGridHeight($(window).height() - $("#k").height() - 400);
		 $("#rowed4").bind('keydown', function(e) {})
		
		
		 
    }
	
	
</script>