<?php
//print_r($_SESSION["user"]["id_phongban"]);
if($_SESSION["user"]["id_phongban"]!=""){
	echo "<script type='text/javascript'>";
	echo "window.id_phongban='".$_SESSION["user"]["id_phongban"]."';";
	echo "</script>";
}

if($_SESSION["cauhinh"]["ID_Kho"]!=""){
	echo "<script type='text/javascript'>";
	echo "window.khocauhinh='".$_SESSION["cauhinh"]["ID_Kho"]."';";
	echo "</script>";
}else{
	echo "<script type='text/javascript'>";
	echo "window.khocauhinh=''";
	echo "</script>";
}
?>
<body>
<div id="dialog-luu" title="Thông báo" style="display:none">
  <p><span class="ui-icon ui-icon-alert" style="float:left; margin:0 7px 20px 0;"></span>Bạn có chắc chắn muốn xuất điều chuyển từ kho <span id="dialogtukho" style="font-weight:bold"></span> đến kho <span id="dialogdenkho" style="font-weight:bold"></span>?</p>
</div>
 
	<div id="dialog-form" title="Lưu ý" style="display:none">
 		<label style="font-size:15px!important">Bạn có muốn xóa bản ghi này?</label>
	</div>
    <div style="height:30px; margin-top:10px; padding-left:20px; padding-top:5px; margin-left:5px; border-radius:4px; background:#F5F3E5; margin-right:5px; border: 1px solid #919191;box-shadow: 0 0 10px #A0A0A0;">
    	<div style="float:left; width:300px;">
    	<input type="radio" id="xuatnoibo" name="chon" checked><label for="xuatnoibo">Phiếu xuất nội bộ</label>
        <input type="radio" id="xuatdieuchuyen" name="chon"><label for="xuatdieuchuyen">Phiếu xuất điều chuyển</label>
        </div>
    	<div  id="div_xuatnoibo" style="float:left;">
            Khoa: <span style="margin-left:0px;"><input id='tukhoa' class='tukhoa'  placeholder="--Chọn khoa--"  ></span>
           <span style="margin-left:40px;"> Người lập: <input id='nguoigiaodich' class='nguoigiaodich'></span>
       </div>
       <div id="div_xuatdieuchuyen" style="float:left;">
            Từ kho: <span style="margin-left:0px;"><input id='tukho' class='tukho'  placeholder="--Chọn kho--"  ></span>
           <span style="margin-left:40px;"> Đến kho: <input id='denkho' class='denkho'  placeholder="--Chọn kho--"  ></span>  
           <span style="margin-left:40px;">Người lập: <input id='nguoigiaodich2' class='nguoigiaodich2'></span>
       </div>
        
    </div>
	<table id="rowed3" >
  </table>
  <div id="grid_footer" ></div>
</body>
<script type="text/javascript">
var reload_aftersave=0;
var SoLoNhaSanXuat ;
$(document).ready(function() {
	window.n_action=1;
	<?php
	if(isset($_GET['ac'])){
		echo 'window.ac='.$_GET['ac'].';';
	}else{
		echo 'window.ac="";';
	}
	if(isset($_GET['tukho'])){
		echo 'window.tukho='.$_GET['tukho'].';';
	}else{
		echo 'window.tukho="";';
	}
	if(isset($_GET['denkho'])){
		echo 'window.denkho='.$_GET['denkho'].';';
	}else{
		echo 'window.denkho="";';
	}
	if(isset($_GET['nguoitao'])){
		echo 'window.nguoitao='.$_GET['nguoitao'].';';
	}else{
		echo 'window.nguoitao=0;';
	}
		
	?>
	if(window.ac==2){
		$("#xuatdieuchuyen").trigger('click');
		$("#div_xuatdieuchuyen").show();
	    $("#div_xuatnoibo").hide();
		window.n_action=2;
		$("#tieude").html('Phiếu xuất điều chuyển chi tiết');
		create_combobox_new('#tukho',create_tukho,'bw','','data_kho',window.tukho);
		create_combobox_new('#denkho',create_denkho,'bw','','data_kho_not_isthis&id_kho='+window.tukho,window.denkho);
	}else{
		create_combobox_new('#tukho',create_tukho,'bw','','data_kho',window.khocauhinh);
		create_combobox_new('#denkho',create_denkho,'bw','','data_kho_not_isthis&id_kho='+window.khocauhinh,0);	
		window.n_action=1;
	}
	<?php
		if(isset($_GET['ac'])){
			echo 'window.ac='.$_GET['ac'].';';
		}else{
			echo 'window.ac="";';
		}
		if(isset($_GET['idphieu'])){
			echo 'window.id_phieuxuatnoibo='.$_GET['idphieu'].';';
			echo '$("#xuatnoibo").attr("disabled",true);';
			echo '$("#xuatdieuchuyen").attr("disabled",true);';
		}else{
			echo 'window.id_phieuxuatnoibo="";';
		}
		if(isset($_GET['idphongban']) && $_GET['idphongban']!=''){
			echo 'window.idphongbanluu='.$_GET['idphongban'].';';
		}else{
			echo 'window.idphongbanluu="";';
		}
		if(isset($_GET['chotphieu'])){
			if($_GET['chotphieu']!=''){
				echo 'window.chotphieu='.$_GET['chotphieu'].';';
			}else{
				echo 'window.chotphieu="";';
			}
		}else{
			echo 'window.chotphieu="";';
		}
		
		
	?> 
	
	if(window.nguoitao==0){
		create_combobox_new('#nguoigiaodich2',create_nhanvien,'bw','','data_nhanvien',<?=$_SESSION["user"]["id_user"]?>);
	}else{
		create_combobox_new('#nguoigiaodich2',create_nhanvien,'bw','','data_nhanvien',window.nguoitao);
	}
	if(window.ac!=2){
		$("#div_xuatdieuchuyen").hide();
	}
	$("#xuatnoibo").click(function(e) {
		$("#tieude").html('Phiếu xuất nội bộ chi tiết');
		window.n_action=1;
        $("#div_xuatnoibo").show();
		$("#div_xuatdieuchuyen").hide();
    });
	
	$("#xuatdieuchuyen").click(function(e) {
		$("#tieude").html('Phiếu xuất điều chuyển chi tiết');
		window.n_action=2;
       $("#div_xuatdieuchuyen").show();
	   $("#div_xuatnoibo").hide();
    });
	
	
	window.ds_thuocxoa='';
	$.dateEntry.setDefaults({spinnerImage: ''});
	jwerty.key('F3', false);
	jwerty.key('F10', false);
	jwerty.key('ESC', false);

	window.thuoc=  $.ajax({                       
		url: "resource.php?module=web_services&function=get_auto_edit_option_byid&action=index&term=&status=0&tables=DM_Thuoc&id=ID_Thuoc&name=TenGoc",
		async:false                       
	}).responseText;
	$.get('resource.php?module=<?=$modules?>&view=<?=$view?>&action=data_DMthuoc').done(function(data) {
		window.data_thuoc=data;
	})
	//$.post('resource.php?module=<?=$modules?>&view=<?=$view?>&action=data_kho').done(function(data) {
		if(window.idphongbanluu==''){
			//console.log('1111');
			create_combobox_new('#tukhoa',create_tukhoa,'bw','','data_khoa',window.id_phongban);
		}else{
			create_combobox_new('#tukhoa',create_tukhoa,'bw','','data_khoa',window.idphongbanluu);
			//console.log('2222');
		}
	//});
	
	//$.post('resource.php?module=<?=$modules?>&view=<?=$view?>&action=data_nhanvien').done(function(data) {
		create_combobox_new('#nguoigiaodich',create_nhanvien,'bw','','data_nhanvien',<?=$_SESSION["user"]["id_user"]?>);
	//});
	
	$(document).keydown(function(e) {
        if(jwerty.is("f3",e)){
			$("#rowed3_iladd").click();
		}
		if(jwerty.is("f10",e)){
			$("#rowed3_luu").click();
		}
		if(jwerty.is("esc",e)){
			$("#rowed3_ilcancel").click();
		}
    });
	create_grid();
	
	
	
	$("#rowed3_themphieu").addClass('ui-state-disabled');
	$("#rowed3_in").addClass('ui-state-disabled');
	$("#rowed3_chot").addClass('ui-state-disabled');
	$("#rowed3_ilcancel").hide();
	phanquyen();

	 $("#rowed3").setGridWidth($(window).width()-10);
	 $("#rowed3").setGridHeight($(window).height()-130);
	jQuery(window).resize(function() {		 
	 $("#rowed3").setGridWidth($(window).width()-10);
	 $("#rowed3").setGridHeight($(window).height()-130);
	});		
   

})
	
function create_grid(){	
 var searhicon = '<span class="ui-state-error ui-state-hover  " style="border:0"><span class="ui-icon  ui-icon-closethick" style="float: left; margin-right: .3em;"></span></span>';			
	 $("#rowed3").jqGrid({				 
		url:"resource.php?module=<?=$modules?>&view=<?=$view?>&action=data_chitietphieuxuat&id_phieuxuatnoibo="+window.id_phieuxuatnoibo,
		//url:'',
		datatype: "json",		
		colNames:['','Tên gốc','ĐVT','Số lượng', "luu"],
		colModel:[	
			{name:'xoa',index:'xoa',width:"1%",align:'center',hidden:false, editable: false}  ,	
			{name:'ID_Thuoc',index:'ID_Thuoc', width:"15%", editable:true,align:'left',edittype:"text",hidden:false,edittype:"select",editoptions:{value:window.thuoc},formatter: "select",editrules:{custom: true, custom_func: function(value, colName) {
                           return check_null(value,colName);
                        }}},
			//{name:'SoLuong',index:'SoLuong',hidden :false,width:'5%'},	
			{name:'DonViTinh',index:'DonViTinh',search:false, width:"8%",editrules: {required: false}, editable:false,align:'center',hidden:false,edittype:"text"}, 	
			{name:'SoLuong',index:'SoLuong',width:"8%",formatter:currency_convert,align:'right',hidden:false, editable: true
			,editrules:{custom: true,required:true, custom_func: function(value, colName) {
                           var id_row = $('#rowed3').jqGrid('getGridParam', 'selrow')
                           return check_soluong(value,colName,id_row);
                        }},editoptions: { dataEvents:  [{ type: 'keyup', fn: function(e) { 
					if(jwerty.is("enter",e)||jwerty.is("tab",e)){
						//alert($.isNumeric($("#"+$("#rowed3").jqGrid('getGridParam', 'selrow')+"_SoLuong").val()))
						if($.isNumeric($("#"+$("#rowed3").jqGrid('getGridParam', 'selrow')+"_SoLuong").val())==true && $("#"+$("#rowed3").jqGrid('getGridParam', 'selrow')+"_SoLuong").val()>0){
							$('#rowed3_ilsave').click();
							be = '<span class="ui-state-error ui-state-hover  " style="border:0"><span class="ui-icon  ui-icon-closethick" style="float: left; margin-right: .3em;"></span></span>';
					$("#rowed3").jqGrid('setRowData',$("#rowed3").jqGrid('getGridParam', 'selrow'),{xoa:be});
							$('#rowed3_iladd').click();
							
						}else{
							tooltip_message("Số lượng phải lớn hơn 0");	
						}
					}
                 } }]}},								
				 {name:'Luu',index:'Luu',search:false, width:"8%",editrules: {required: false}, editable:false,align:'center',hidden:true,edittype:"text"}, 
			
			                      
		],
		inline_esc:false,
		grid_mode:'',
		grid_move:"",	
		loadonce: true,	
		scroll: false,		 
		modal:true,
        shrinkToFit: true,
		rowNum: 10000000,
		rowList:[],
		pager: '#grid_footer',
		sortname: 'ID_LoaiKham',
		height:100,
		width:100,
		viewrecords: false,	
		ignoreCase:true,	
		sortorder: "asc",
		pgbuttons: false, 
        pgtext: null, 
		onCellSelect: function (rowid,iCol,cellcontent,e) {
			if(iCol==0){
        		window.row_id_delete=rowid;
				$('#dialog-form').dialog('open');  
			}
        }, 
		onSelectRow: function(id){	
/*	 		$('#'+window.rowed3_select).removeClass("ui-state-highlight").attr({"aria-selected":"false", "tabindex" : "-1"});
			window.rowed3_select=id;
			celValue =  $('#rowed3').jqGrid ('getCell', id, 'Dieuduongthuchien');
			if(celValue!=''){
				$("#theodoitruyendich_thuchien").addClass("ui-state-disabled");
				$("#rowed3_iledit").addClass("ui-state-disabled");
			}
			else{
				$("#theodoitruyendich_thuchien").removeClass("ui-state-disabled");
				$("#rowed3_iledit").removeClass("ui-state-disabled");
				}*/

		},
		ondblClickRow: function (rowId, rowIndex, columnIndex) {
			$("#grid_footer .ui-icon-pencil").click();	
 		},
		loadComplete: function(data) {	 	
			var ids = jQuery("#rowed3").jqGrid('getDataIDs');
			for(var i=0;i < ids.length;i++){	
				var cl = ids[i];
				be = '<span class="ui-state-error ui-state-hover  " style="border:0"><span class="ui-icon  ui-icon-closethick" style="float: left; margin-right: .3em;"></span></span>';
				$("#rowed3").jqGrid('setRowData',ids[i],{xoa:be});
			}	
			if(reload_aftersave==1){
				$("#rowed3").jqGrid("setSelection",rowed3_id, true);	
				reload_aftersave=0;
			}
			if(ids.length>0){
				if(window.chotphieu==1){
					$("#rowed3_in").removeClass('ui-state-disabled');
					$("#rowed3_chot").addClass('ui-state-disabled');
				}else{
					$("#rowed3_in").addClass('ui-state-disabled');
					$("#rowed3_chot").removeClass('ui-state-disabled');
				}
				
			}
		},
		caption: "<span id='tieude'>Phiếu xuất nội bộ chi tiết</span>",
	});
	
	$("#rowed3").jqGrid('navGrid',"#grid_footer",{add: false, edit: false, del: false, search: false, refresh: false,closeAfterEdit: true,clearAfterAdd :true,navkeys : [ true, 38, 40 ]});
	
$( "#dialog-form" ).dialog({
      autoOpen: false,
      height: 150,
      width: 350,
      modal: true,
      buttons: {
        Cancel: function() {
          $( this ).dialog( "close" );
			},
			 "Ok": function() {
				$( this ).dialog( "close" );
				$('#rowed3').jqGrid('delRowData',window.row_id_delete);
				$("#rowed3_iladd").removeClass('ui-state-disabled');
				if(window.ds_thuocxoa==''){
					window.ds_thuocxoa=window.row_id_delete;
				}else{
					window.ds_thuocxoa=window.ds_thuocxoa+','+window.row_id_delete;
				}
		}
	  }
    });
	
	$("#rowed3").jqGrid('inlineNav', '#grid_footer', {add: true, addtext: '', edittext: '', edit: false, save:true,
            addParams: {
				keys:true,
                position: "last",
                addRowParams: {
					keys:true,                  
                    aftersavefunc: function(rowId, response,lastsel) {
					//	destroy_combobox_inline('ID_Thuoc',rowId,'rowed3','#dialog_dm_thuoc_'+rowId,'#DM_thuoc_'+rowId);
						destroy_combobox_inline_new('ID_Thuoc',rowId,'rowed3');	
						/*reload_aftersave=1;
						window.rowed3_id=response.responseText;
						$('#rowed3').jqGrid('setGridParam', { datatype: "json"}).trigger("reloadGrid");
						tooltip_message("Thêm mới thành công")*/
						
                    },
					oneditfunc: function(rowId) {	
						//create_combobox_inline('ID_Thuoc',rowId,'rowed3','#dialog_dm_thuoc_'+rowId,'#DM_thuoc_'+rowId,create_Dm_thuoc_grid,data_thuoc,0,inline_enter,'ID_Thuoc_combobox');
						combobox_inline_new('ID_Thuoc',rowId,'rowed3',create_Dm_thuoc_grid,window.data_thuoc,0,1,donthuoc_callback)//new
						inline_enter(rowId);
					},	
                    afterrestorefunc: function(rowId) {	
					//	destroy_combobox_inline('ID_Thuoc',rowId,'rowed3','#dialog_dm_thuoc_'+rowId,'#DM_thuoc_'+rowId)		
						destroy_combobox_inline_new('ID_Thuoc',rowId,'rowed3');				
						$("#rowed3").jqGrid('bindKeys');
						$('#rowed3').focus();						
                    }				 
                }
            	},	
            editParams: {
				keys:true,				 
				 	aftersavefunc: function(rowId, response,lastsel) {
						destroy_combobox_inline('ID_Thuoc',rowId,'rowed3','#dialog_dm_thuoc_'+rowId,'#DM_thuoc_'+rowId)	
						$('#rowed3').focus();
						/* setTimeout(function(){
							 $("#grid_footer .ui-icon-plus").click();
						},200);	*/
						tooltip_message("Cập nhật thành công");
                    },					 	
                	oneditfunc: function(rowId) {	
						//create_combobox_inline('ID_Thuoc',rowId,'rowed3','#dialog_dm_thuoc_'+rowId,'#DM_thuoc_'+rowId,create_Dm_thuoc_grid,data_thuoc,$('#rowed3 #'+rowId+'_ID_Thuoc').val(),inline_enter,'ID_Thuoc_combobox');2
						combobox_inline_new('ID_Thuoc',rowId,'rowed3',create_Dm_thuoc_grid,window.data_thuoc,0,1,donthuoc_callback)//new
						inline_enter(rowId);
						var rowData = $('#rowed3').getRowData(rowId);	
						//SoLuong=rowData["SoLuong"];
						SoLoNhaSanXuat  =rowData["SoLoNhaSanXuat"];
					},	
                    afterrestorefunc: function(rowId) {	
					$("#rowed3").jqGrid('bindKeys');
					//destroy_combobox_inline('ID_Thuoc',rowId,'rowed3','#dialog_dm_thuoc_'+rowId,'#DM_thuoc_'+rowId)		;
					destroy_combobox_inline_new('ID_Thuoc',rowId,'rowed3');							   
					},	 
			}
       	 });
		 $("#rowed3").jqGrid('navButtonAdd', '#grid_footer', {caption: "Lưu [F10]", buttonicon: 'ui-icon-disk',id:'rowed3_luu',
            onClickButton: function() {	
			$.post('resource.php?module=<?= $modules ?>&view=<?= $view ?>&action=checkchot&id_phieuxuatnoibo='+window.id_phieuxuatnoibo).done(function(data){
				if(data=='false'){
					savedRow = $('#rowed3').jqGrid("getGridParam", "savedRow");		
					if (savedRow && savedRow.length > 0) {
						if($('#'+savedRow[0].id+'_ID_Thuoc_combobox').val()!=''){
							jQuery("#rowed3").jqGrid('saveRow',savedRow[0].id);
						}else{
							$('#rowed3').jqGrid('delRowData',savedRow[0].id);
						}
					}
					$("#rowed3_luu").addClass('ui-state-disabled');
					var gridData = jQuery("#rowed3").getRowData();
					var postData = JSON.stringify(gridData);
					postData='{"id":'+postData+'}';
					postData=$.parseJSON(postData);
					
					if(window.n_action==1){
						$.post('resource.php?module=<?= $modules ?>&view=<?= $view ?>&action=controller&oper=add&hienmaloi=a&id_phongban='+$("#tukhoa_hidden").val()+'&nguoigiaodich='+$("#nguoigiaodich_hidden").val()+'&ghichu=&id_phieuxuatnoibo='+window.id_phieuxuatnoibo+'&xoa='+window.ds_thuocxoa,postData).done(function(data){
							var rsdata=data.split(';;');
							if(rsdata[1]>0){
								if(window.id_phieuxuatnoibo=='' || window.id_phieuxuatnoibo=='undefined'){
									window.id_phieuxuatnoibo=rsdata[1];
								}
								tooltip_message("Đã lưu");
								$("#xuatnoibo").attr('disabled',true);
								$("#xuatdieuchuyen").attr('disabled',true);
								$("#rowed3").jqGrid('setGridParam',{datatype: 'json',url:"resource.php?module=<?=$modules?>&view=<?=$view?>&action=data_chitietphieuxuat&id_phieuxuatnoibo="+window.id_phieuxuatnoibo}).trigger('reloadGrid');
								$("#rowed3_ilcancel").click();
								setTimeout(function(){
									$("#rowed3_luu").removeClass('ui-state-disabled');
									$("#rowed3_iladd").removeClass('ui-state-disabled');
									$("#rowed3_themphieu").removeClass('ui-state-disabled');
									$("#rowed3_chot").removeClass('ui-state-disabled');
								},50);
								//$("#rowed3_in").click();
							}else{
								tooltip_message("Lưu thất bại");
								$("#rowed3_luu").removeClass('ui-state-disabled');
							}
						});
					}else{
						if($("#denkho").val()!=''){
							$.post('resource.php?module=<?= $modules ?>&view=<?= $view ?>&action=controller_dieuchuyen&oper=add&hienmaloi=a&tukho='+$("#tukho_hidden").val()+'&denkho='+$("#denkho_hidden").val()+'&nguoigiaodich='+$("#nguoigiaodich2_hidden").val()+'&ghichu=&id_phieuxuatnoibo='+window.id_phieuxuatnoibo+'&xoa='+window.ds_thuocxoa,postData).done(function(data){
								var rsdata=data.split(';;');
								if(rsdata[1]>0){
									if(window.id_phieuxuatnoibo=='' || window.id_phieuxuatnoibo=='undefined'){
										window.id_phieuxuatnoibo=rsdata[1];
									}
									tooltip_message("Đã lưu");
									$("#xuatnoibo").attr('disabled',true);
									$("#xuatdieuchuyen").attr('disabled',true);
									$("#rowed3").jqGrid('setGridParam',{datatype: 'json',url:"resource.php?module=<?=$modules?>&view=<?=$view?>&action=data_chitietphieuxuat&id_phieuxuatnoibo="+window.id_phieuxuatnoibo}).trigger('reloadGrid');
									$("#rowed3_ilcancel").click();
									setTimeout(function(){
										$("#rowed3_luu").removeClass('ui-state-disabled');
										$("#rowed3_iladd").removeClass('ui-state-disabled');
										$("#rowed3_themphieu").removeClass('ui-state-disabled');
										$("#rowed3_chot").removeClass('ui-state-disabled');
									},50);
									//$("#rowed3_in").click();
								}else{
									tooltip_message("Lưu thất bại");
									$("#rowed3_luu").removeClass('ui-state-disabled');
								}
							});
						}else{
							tooltip_message("Vui lòng chọn kho chuyển đến");
							$("#rowed3_luu").removeClass('ui-state-disabled');
						}
					}
				}else{
					tooltip_message("Phiếu này đã chốt nên không sửa được");
					$("#rowed3").jqGrid('setGridParam',{datatype: 'json',url:"resource.php?module=<?=$modules?>&view=<?=$view?>&action=data_chitietphieuxuat&id_phieuxuatnoibo="+window.id_phieuxuatnoibo}).trigger('reloadGrid');
				}
				
			});//check chot
            },
            title: "Lưu [F10]",
            position: "last"
    }); 
		 $("#rowed3").jqGrid('navButtonAdd', '#grid_footer', {caption: "Chốt phiếu", buttonicon: 'ui-icon-locked',id:'rowed3_chot',
            onClickButton: function() {	
				$.post('resource.php?module=<?= $modules ?>&view=<?= $view ?>&action=chotphieu&id_phieuxuatnoibo='+window.id_phieuxuatnoibo).done(function(data){
					tooltip_message("Chốt thành công");
					$("#rowed3_in").removeClass('ui-state-disabled');
					$("#rowed3_chot").addClass('ui-state-disabled');
				});
            },
            title: "Chốt phiếu",
            position: "last"
    	});
		 $("#rowed3").jqGrid('navButtonAdd', '#grid_footer', {caption: "In phiếu", buttonicon: 'ui-icon-print',id:'rowed3_in',
            onClickButton: function() {	
				$.cookie("in_status", "print_preview");
				if(window.n_action==1){
					dialog_report("Xem trước khi in",90,90,"u78787878975f","resource.php?module=report&view=<?=$modules?>&action=phieuxuatthuocnoibo&idphieu="+window.id_phieuxuatnoibo+"&type=report&id_form=10",'PhieuLinhThuoc');
				}else{
					dialog_report("Xem trước khi in",90,90,"u78787878975f","resource.php?module=report&view=<?=$modules?>&action=phieuxuatdieuchuyen_new&idphieu="+window.id_phieuxuatnoibo+"&type=report&id_form=10",'PhieuLinhThuoc');
				}
            },
            title: "In phiếu",
            position: "last"
    	}); 
		 
	$("#rowed3_ilsave").hide();  
	setTimeout(function(){
		$("#rowed3_iladd").click();	
	//	$("#rowed3").jqGrid('setGridParam',{datatype: 'json',url:"resource.php?module=<?=$modules?>&view=<?=$view?>&action=data_chitietphieuxuat&id_phieuxuatnoibo="+window.id_phieuxuatnoibo}).trigger('reloadGrid');
	},700)
	
} 
	
function create_Dm_thuoc_grid(elem,datalocal){	
	datalocal=jQuery.parseJSON(datalocal);	 
	$(elem).jqGrid({
	datastr:datalocal,	
	datatype: "jsonstring" ,
	colNames:['Tên thuốc','Nhóm thuốc','', 'Nước sản xuất','Nhà sản xuất','Hoạt chất','SignNumber',''],
	colModel:[			
		{name:'TenGoc',index:'TenGoc'},	
		{name:'TenNhomThuoc',index:'TenNhomThuoc'},		 
		{name:'MaThuoc',index:'MaThuoc',hidden :true},		
		{name:'TenDayDu',index:'TenDayDu'},	
		{name:'TenNhaSanXuat',index:'TenNhaSanXuat'},	 	 
		{name:'HoatChatChinh',index:'HoatChatChinh'},
		{name:'SignNumber',index:'SignNumber',hidden :true},
		{name:'TenDonViTinh',index:'TenDonViTinh',hidden :false}			
	],
	hidegrid: false,
	gridview: true,
	loadonce: true,
	scroll: true,		 
	modal:true,	 
	rowNum: 200,
	rowList:[],
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
		//$("#rowed3").jqGrid('getGridParam', 'selrow');
		$('#rowed3').jqGrid('setCell', $("#rowed3").jqGrid('getGridParam', 'selrow'), 'HangSX', '&nbsp;');
		$('#rowed3').jqGrid('setCell', $("#rowed3").jqGrid('getGridParam', 'selrow'), 'NuocSX', '&nbsp;');
		var rowData = $(elem).getRowData(id);
		$('#rowed3').jqGrid("setCell", $("#rowed3").jqGrid('getGridParam', 'selrow'), "HangSX",rowData['TenNhaSanXuat'] );
		$('#rowed3').jqGrid("setCell", $("#rowed3").jqGrid('getGridParam', 'selrow'), "NuocSX",rowData['TenDayDu'] );
		$('#rowed3').jqGrid("setCell", $("#rowed3").jqGrid('getGridParam', 'selrow'), "DonViTinh",rowData['TenDonViTinh'] );						
		//$('#rowed3').jqGrid("setCell", $("#rowed3").jqGrid('getGridParam', 'selrow'), "DonViTinh",rowData['TenDonViTinh'] );
		//alert(rowData['TenDonViTinh']);
		
	},
	ondblClickRow: function (id, rowIndex, columnIndex) {
			
	},
	loadComplete: function(data) {				
		
	},	  		
});	
	 $(elem).jqGrid('navGrid',"#prowed_DM_thuoc",{add: false, edit: false, del: false, search: false,closeAfterEdit: true,clearAfterAdd :true,closeOnEscape : true });				 
	 $(elem).jqGrid('filterToolbar',{searchOperators : false,searchOnEnter:false,defaultSearch:"bw"});
	 $(elem).jqGrid('bindKeys', {} );		
}
function inline_enter(rowid){
	$('#rowed3 #'+rowid+'_ID_Thuoc_combobox').bind('keydown',function(e){
		if(jwerty.is("enter",e)||jwerty.is("tab",e)){
			setTimeout(function(){
				$("#"+$(e.target).attr('id').split('_')[0]+"_SoLuong").focus();
				$("#"+$(e.target).attr('id').split('_')[0]+"_SoLuong").select();
			},200);
		}
	});
}
/*function load_select(){
	window.thuoc=  $.ajax({                       
		url: "resource.php?module=web_services&function=get_auto_edit_option_byid&action=index&term=&status=0&tables=DM_Thuoc&id=ID_Thuoc&name=TenGoc",
		async:false                       
	}).responseText;
	
	window.nhanvien=  $.ajax({                       
		url: "resource.php?module=web_services&function=get_auto_edit_option_byid&action=index&term=&status=0&tables=DM_NhanVien&id=ID_NhanVien&name=NickName",
		async:false                       
	}).responseText;
}
*/
function get_date(){
	var d = new Date();
	var curr_hour = d.getHours();
	var curr_minute = (d.getMinutes()<10?'0':'') + d.getMinutes(); //phút trả về 1 chữ số nếu bé hơn mười nên phải ghép 0 vào
	var curr_time = curr_hour + ":" + curr_minute+ " ";	
	var dd = (d.getDate()<10?'0':'')+ d.getDate();
	var mm = d.getMonth()+1;//January is 0!`
	if(mm<10) mm="0"+mm; 
	var yy= d.getFullYear().toString().substr(2,2);
	//alert(yy);
	return dd+'<?php echo $_SESSION["config_system"]["phancachngay"]?>'+mm+'<?php echo $_SESSION["config_system"]["phancachngay"]?>'+yy;			
}

function update_row(e){
	if(jwerty.is("enter",e)||jwerty.is("tab",e)){
		$('#rowed3_ilsave').click();
	}
}

function check_null(value,colname){	
	if($.trim(value)==''){			 
		return [false,'Tên gốc bắt buộc phải có','ID_Thuoc_combobox']
	}else{
		return[true,'','SoLuong']
	}
}
function create_tukhoa(elem, datalocal) {
        datalocal = jQuery.parseJSON(datalocal);
        $(elem).jqGrid({
            datastr: datalocal,
            datatype: "jsonstring",
            colNames: ['Tên khoa'],
            colModel: [
                {name: 'tenkhoa', index: 'tenkhoa', hidden: false,width:5},
				
            ],
            hidegrid: false,
            gridview: true,
            loadonce: true,
            scroll: 1,
            modal: true,
            rowNum: 100,
            rowList: [],
            height: 200,
            width: 300,
            viewrecords: true,
            ignoreCase: true,
            shrinkToFit: true,
            cmTemplate: {sortable: false},
            sortorder: "desc",
            serializeRowData: function(postdata) {
            },
            onSelectRow: function(id) {
				
            },
            ondblClickRow: function(id, rowIndex, columnIndex) {
            },
            loadComplete: function(data) {
            },
        });
        $(elem).jqGrid('filterToolbar', {searchOperators: false, searchOnEnter: false, defaultSearch: "bw"});
        $(elem).jqGrid('bindKeys', {});
    }

function currency_convert (cellvalue, options, rowObject){
   return parseFloat(convert_comma_dot_cacl(cellvalue)).formatMoney(1, ',', '.');
}
function check_soluong(value,colName,id_row){
	/*var _report_data=$.ajax({url: 'resource.php?module=<?=$modules?>&view=<?=$view?>&action=check_soluong&soluong='+value+'&id_thuoc='+$('#'+id_row+'_ID_Thuoc').val()+'&id_kho='+$("#tukho_hidden").val(), async: false, success: function(data, result) {if (!result) alert('Không load được danh mục NhomCLS');}}).responseText;
	_report_data=_report_data.split(';;');	
	if(_report_data[2]==0){		
		window.tonkhokhongdu=1;
			return [false,'Tồn kho hiện tại còn '+_report_data[1]+', không đủ để xuất điều chuyển','ID_Thuoc_combobox']
			
		}else{*/
			window.tonkhokhongdu=0;
			return[true,'']
		//}
}
function create_nhanvien(elem, datalocal) {
        datalocal = jQuery.parseJSON(datalocal);
        $(elem).jqGrid({
            datastr: datalocal,
            datatype: "jsonstring",
            colNames: ['Tên', 'Họ và tên', 'Bộ phận'],
            colModel: [
                {name: 'nickname', index: 'nickname', hidden: false},
                {name: 'hovaten', index: 'hovaten', hidden: false},
                {name: 'Bophan', index: 'Bophan', hidden: true},
            ],
            hidegrid: false,
            gridview: true,
            loadonce: true,
            scroll: false,
            modal: true,
            rowNum: 200000,
            rowList: [],
            height: 300,
            width: 470,
            viewrecords: true,
            ignoreCase: true,
            shrinkToFit: true,
            cmTemplate: {sortable: false},
            sortorder: "desc",
            serializeRowData: function(postdata) {
            },
            onSelectRow: function(id) {
            },
            ondblClickRow: function(id, rowIndex, columnIndex) {
            },
            loadComplete: function(data) {

                grid_filter_enter(elem);
            	setTimeout(function(){
				window.nhanvien1_complete=1;
				},300);
		


            },
        });
        $(elem).jqGrid('filterToolbar', {searchOperators: false, searchOnEnter: false, defaultSearch: "cn"});
        $(elem).jqGrid('bindKeys', {});
    }
function  donthuoc_callback(e){
	//alert();
	if(jwerty.is("enter",e)||jwerty.is("tab",e)){
		$("#"+$(e.target).attr('id').split('_')[0]+"_SoLuong").focus();
		$("#"+$(e.target).attr('id').split('_')[0]+"_SoLuong").select();
	}
	}
	
function create_tukho(elem, datalocal) {
        datalocal = jQuery.parseJSON(datalocal);
        $(elem).jqGrid({
            datastr: datalocal,
            datatype: "jsonstring",
            colNames: ['Tên kho'],
            colModel: [
                {name: 'tenkho', index: 'tenkho', hidden: false,width:5},
            ],
            hidegrid: false,
            gridview: true,
            loadonce: true,
            scroll: 1,
            modal: true,
            rowNum: 100,
            rowList: [],
            height: 100,
            width: 300,
            viewrecords: true,
            ignoreCase: true,
            shrinkToFit: true,
            cmTemplate: {sortable: false},
            sortorder: "desc",
            serializeRowData: function(postdata) {
            },
            onSelectRow: function(id) {
				$("#denkho").val('');
					$.post('resource.php?module=<?=$modules?>&view=<?=$view?>&action=data_kho_not_isthis&id_kho='+id).done(function(data) {
					create_combobox_new('#denkho',create_denkho,'bw',data,'data_kho',0);
					//create_combobox_disable("#tukho");
				});
            },
            ondblClickRow: function(id, rowIndex, columnIndex) {
            },
            loadComplete: function(data) {
            },
        });
        $(elem).jqGrid('filterToolbar', {searchOperators: false, searchOnEnter: false, defaultSearch: "bw"});
        $(elem).jqGrid('bindKeys', {});
    }
function create_denkho(elem, datalocal) {
        datalocal = jQuery.parseJSON(datalocal);
        $(elem).jqGrid({
            datastr: datalocal,
            datatype: "jsonstring",
            colNames: ['Tên kho'],
            colModel: [
                {name: 'tenkho', index: 'tenkho', hidden: false,width:5},
            ],
            hidegrid: false,
            gridview: true,
            loadonce: true,
            scroll: 1,
            modal: true,
            rowNum: 100,
            rowList: [],
            height: 100,
            width: 300,
            viewrecords: true,
            ignoreCase: true,
            shrinkToFit: true,
            cmTemplate: {sortable: false},
            sortorder: "desc",
            serializeRowData: function(postdata) {
            },
            onSelectRow: function(id) {

            },
            ondblClickRow: function(id, rowIndex, columnIndex) {
            },
            loadComplete: function(data) {
            },
        });
        $(elem).jqGrid('filterToolbar', {searchOperators: false, searchOnEnter: false, defaultSearch: "bw"});
        $(elem).jqGrid('bindKeys', {});
    }
function create_nhanvien2(elem, datalocal) {
        datalocal = jQuery.parseJSON(datalocal);
        $(elem).jqGrid({
            datastr: datalocal,
            datatype: "jsonstring",
            colNames: ['Tên', 'Họ và tên', 'Bộ phận'],
            colModel: [
                {name: 'nickname', index: 'nickname', hidden: false},
                {name: 'hovaten', index: 'hovaten', hidden: false},
                {name: 'Bophan', index: 'Bophan', hidden: true},
            ],
            hidegrid: false,
            gridview: true,
            loadonce: true,
            scroll: false,
            modal: true,
            rowNum: 200000,
            rowList: [],
            height: 300,
            width: 470,
            viewrecords: true,
            ignoreCase: true,
            shrinkToFit: true,
            cmTemplate: {sortable: false},
            sortorder: "desc",
            serializeRowData: function(postdata) {
            },
            onSelectRow: function(id) {
            },
            ondblClickRow: function(id, rowIndex, columnIndex) {
            },
            loadComplete: function(data) {

                grid_filter_enter(elem);
            	setTimeout(function(){
				window.nhanvien1_complete=1;
				},300);
		


            },
        });
        $(elem).jqGrid('filterToolbar', {searchOperators: false, searchOnEnter: false, defaultSearch: "cn"});
        $(elem).jqGrid('bindKeys', {});
    }
</script>