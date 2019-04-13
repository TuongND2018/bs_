<!--author:khatm--
Form: xếp hàng lâm sàng-->
<style type="text/css">
#cb_rowed_loaikham{
	display:none !important;	
}
    #rowed3 td,#rowed4 td,#rowed5 td{

        font-size:11px!important;
    }
    #gbox_rowed3, #gbox_rowed4, #gbox_rowed5, #gbox_rowed6, #gbox_rowed7{
        margin-left:0px;
        margin-top:0px;
        box-shadow:0px 0px 10px #a0a0a0;
        border:1px solid #919191;
    }
#menu { 
        width: 200px!important; 
        display:none; 
        position:absolute;  	 
        box-shadow:0px 0px 3px #333;
        z-index:100000;	 
        background: #ffffff;
    }
#dialog-themdon table td{
	padding:2px !important;	
}
#dialog-suadon table td{
	padding:2px !important;	
}
#prowed4_center{
	display:none !important;
}
.left_col,.right_col{
	padding-left:3px;
}
</style>
<ul id="menu" >
    <li><a id="cauhinhloaikham" href="#"><span class="ui-icon ui-icon-circle-plus"></span><span class="menu_text">Cấu hình với loại khám</span></a></li>
</ul>
<body id="subbody" style="width:100%">
<div id="dialog-cauhinhloaikham" title="Cấu hình">
  <table id="rowed_loaikham" ></table>
  <div id="prowed_loaikham"></div>
</div>
<div id="dialog-themdon" title="Thêm đơn" style="display:none">
 	<table cellpadding="0" cellspacing="0">
    	<tr>
        	<td>BS tạo: </td>
            <td><input type="text" id="bstao" style="width:242px;"></td>
        </tr>
        <tr>
        	<td>Tên đơn thuốc: </td>
            <td><input type="text" id="tendon" style="width:270px;"></td>
        </tr>
        <tr>
        	<td style="vertical-align:top">Ghi chú: </td>
            <td><textarea id="ghichu" rows="3" cols="20" style="width:270px;"></textarea></td>
        </tr>
    </table>
</div>
<div id="dialog-suadon" title="Sửa đơn" style="display:none">
 	<table cellpadding="0" cellspacing="0">
    	<tr>
        	<td>BS tạo: </td>
            <td><input type="text" id="bstao_edit" style="width:242px;"></td>
        </tr>
        <tr>
        	<td>Tên đơn thuốc: </td>
            <td><input type="text" id="tendon_edit" style="width:270px;"></td>
        </tr>
        <tr>
        	<td style="vertical-align:top">Ghi chú: </td>
            <td><textarea id="ghichu_edit" rows="3" cols="20" style="width:270px;"></textarea></td>
        </tr>
    </table>
</div>
    <div id="panel_main" >
        <div class="left_col ui-widget-content ui-layout-center">
			<table id="rowed3" ></table>
            <div id="prowed3"></div>
        </div>
        <div class="ui-layout-east ui-widget-content right_col">
        	<table id="rowed4" ></table>
             <div id="prowed4"></div>
        </div>
    </div>
    <div style="width:100%; height:30px; text-align:right; padding-top:5px; padding-right:20px;">
        	<button id="luu">Lưu</button>
            <button id="huy" style="display:none">Hủy</button>
            <button id="thoat">Thoát</button>
    </div>
</body>
</html>

<script type="text/javascript">
var loadlandau=0;
jQuery(document).ready(function() {
	window.donthuocxoa='';
	window.select_tendon='';
	window.n_iddonthuocmau=0;
	//checkbox_grid('gs_Chon','#rowed3')
    $("#panel_main").css("height",$("#subbody").height()-40+"px");
	$("#panel_main").fadeIn(1000);
	$(".left_col").css('height',$("#panel_main").height());
	$(".right_col").css('height',$("#panel_main").height());
    openform_shortcutkey(); //mở bằng phím tắt được thiết lập trong DB
	<?php 
		$data= new SQLServer;
		$params = array($_GET['id_loaikham']);
		$store_name="{call GD2_SelectID_DonThuocMau_ByID_LoaiKham(?)}";
		$get=$data->query( $store_name,$params);
		$excute= new SQLServerResult($get);
		$tam= $excute->get_as_array();
		if(count($tam)>0){
			foreach($tam as $row){
				echo 'if(window.select_tendon==""){';
					echo 'window.select_tendon="'.$row['TenDonThuoc'].'";';
				echo '}else{';
					echo 'window.select_tendon=window.select_tendon+", '.$row['TenDonThuoc'].'";';
				echo '}';
				echo 'window.select_iddonthuocmau='.$row['ID_DonThuocMau'].';';
			}
		}else{
			echo 'window.select_iddonthuocmau=0;';	
			echo "parent.postMessage('dialog|||changetitle|||','*');";
		}
		
	?>
	if(window.select_tendon!=''){
		parent.postMessage('dialog|||changetitle|||'+window.select_tendon,'*');
	}
	
	$("#menu").menu();
	$(document).bind("contextmenu", function(e) {
		return false;
	});
	$(document).bind("mouseup", function(e) {
		$("#menu").hide();
	});
	
	window.thuoc=  $.ajax({                       
		url: "resource.php?module=web_services&function=get_auto_edit_option_byid&action=index&term=&status=0&tables=DM_Thuoc&id=ID_Thuoc&name=TenGoc",
		async:false                       
	}).responseText;
	 window.nation = $.ajax({url: 'resource.php?module=web_services&function=get_auto_edit_option&action=index&term=&status=2&tables=NhomCLS&id=ID_NhomCLS&name=TenNhom', async: false, success: function(data, result) {if (!result) alert('Không load được danh mục nhóm cận lâm sàn');}}).responseText;
	$.get('resource.php?module=<?=$modules?>&view=<?=$view?>&action=data_DMthuoc').done(function(data) {
		window.data_thuoc=data;
	});
	load_phong_ban(false); 
	//alert(window.thuoc);
	create_layout();
	create_grid();
	create_detail_grid();
	create_loaikham_grid();
	resize_control();
	
	
	$("#luu,#thoat,#huy").button();
	create_combobox_new('#bstao',create_bacsi,'bw','','data_bacsi',<?=$_SESSION['user']['id_user']?>);
	create_combobox_new('#bstao_edit',create_bacsi,'bw','','data_bacsi',0);
	window.huy=0;
	
	$("#thoat").click(function(e) {
		parent.postMessage('dongdialog|||thoat','*');
	});
	$("#huy").click(function(e) {
		$.post('resource.php?module=<?= $modules ?>&view=<?= $view ?>&action=controller_huy&id_loaikham=<?=$_GET['id_loaikham']?>').done(function(data){
		tooltip_message("Lưu thành công");
		window.huy=1;
		parent.postMessage('dialog|||huy','*');
		parent.postMessage('dialog|||changetitle|||','*');
		$("#rowed3").jqGrid('setGridParam',{datatype: 'json',url:"resource.php?module=<?=$modules?>&view=<?=$view?>&action=data_donthuocmau&id_loaikham=<?=$_GET['id_loaikham']?>"}).trigger('reloadGrid');
		$('#rowed4').jqGrid('clearGridData');
		window.n_iddonthuocmau=0;
		});
	});
	
	$("#cauhinhloaikham").click(function(e) {
		 $("#rowed_loaikham").jqGrid('setGridParam',{datatype: 'json',url:'resource.php?module=<?=$modules?>&view=<?=$view?>&action=data_loaikham2&iddonthuoc='+window.n_iddonthuocmau,groupingView: { groupCollapse : false}}).trigger('reloadGrid');
        $( "#dialog-cauhinhloaikham" ).dialog('open');
    });
	
	$("#thumo").change(function(event) {
      if($("#thumo").is(':checked')==false){
        $("#rowed_loaikham").jqGrid('setGridParam',{groupingView: { groupCollapse : false} }).trigger('reloadGrid');
      }else{
        $("#rowed_loaikham").jqGrid('setGridParam',{groupingView: { groupCollapse : true} }).trigger('reloadGrid');
      }
    });
	
	 $("#dialog-cauhinhloaikham").dialog({
      resizable: false,
	  autoOpen:false,
      height:500,
	  width:600,
      modal: true,
	  open: function(event,ui){
		$("#rowed_loaikham").setGridWidth(573);
		$("#rowed_loaikham").setGridHeight(315);
		 $('#dialog-cauhinhloaikham').dialog('option', 'title','Cấu hình gói thuốc - VTTH: '+window.tendonthuocmau);
      },
      buttons: {
        "Lưu": function() {
			var gridData = jQuery("#rowed_loaikham").getRowData();
			var postData = JSON.stringify(gridData);
			postData='{"id":'+postData+'}';
			postData=$.parseJSON(postData);
			id = $('#rowed3').jqGrid('getGridParam', 'selrow');
			$.post('resource.php?module=<?= $modules ?>&view=<?= $view ?>&action=controller_donthuoc_loaikham&iddonthuoc='+window.n_iddonthuocmau,postData).done(function(data){
				tooltip_message("Lưu dữ liệu thành công");
				$("#rowed3").jqGrid('setGridParam',{datatype: 'json',url:"resource.php?module=<?=$modules?>&view=<?=$view?>&action=data_donthuocmau&id_loaikham=<?=$_GET['id_loaikham']?>"}).trigger('reloadGrid');
			})//$.post
			
          $( this ).dialog( "close" );
        },
        'Thoát': function() {
          $( this ).dialog( "close" );
        }
      }
    });
	
	
	
	$( "#dialog-themdon" ).dialog({
      resizable: false,
	  autoOpen:false,
      height:250,
	  width:400,
      modal: true,
	  open: function(event,ui){
		  $("#tendon").focus();
		  
      },
      buttons: {
        "Lưu": function() {
			$.post('resource.php?module=<?= $modules ?>&view=<?= $view ?>&action=controller_donthuoc&oper=add&bstao_hidden='+$("#bstao_hidden").val()+'&tendonthuoc='+$("#tendon").val()+"&ghichu="+$("#ghichu").val()+'&hienmaloi=a').done(function(data){
				tooltip_message("Lưu thành công");
				$("#rowed3").jqGrid('setGridParam',{datatype: 'json',url:"resource.php?module=<?=$modules?>&view=<?=$view?>&action=data_donthuocmau&id_loaikham=<?=$_GET['id_loaikham']?>"}).trigger('reloadGrid');
			});
          $( this ).dialog( "close" );
        },
        "Hủy": function() {
          $( this ).dialog( "close" );
        }
      }
    });
	
	$( "#dialog-suadon" ).dialog({
      resizable: false,
	  autoOpen:false,
      height:250,
	  width:400,
      modal: true,
	  open: function(event,ui){
		  $("#tendon_edit").focus();
      },
      buttons: {
        "Lưu": function() {
			$.post('resource.php?module=<?= $modules ?>&view=<?= $view ?>&action=controller_donthuoc&oper=edit&id='+window.id_edit+'&bstao_hidden='+$("#bstao_edit_hidden").val()+'&tendonthuoc='+$("#tendon_edit").val()+"&ghichu="+$("#ghichu_edit").val()+'&hienmaloi=a').done(function(data){
				tooltip_message("Lưu thành công");
				$("#rowed3").jqGrid('setGridParam',{datatype: 'json',url:"resource.php?module=<?=$modules?>&view=<?=$view?>&action=data_donthuocmau&id_loaikham=<?=$_GET['id_loaikham']?>"}).trigger('reloadGrid');
			});
          $( this ).dialog( "close" );
        },
        "Hủy": function() {
          $( this ).dialog( "close" );
        }
      }
    });
	
	
	$("#luu").click(function(e) {
		window.id_donchon='';
		window.demdondangchon=0;
		window.id_donchon_xoa='';
		var tmp1 = $("#rowed3").jqGrid('getDataIDs'); 
		for(var i=0;i < tmp1.length;i++){
			var rowData = $("#rowed3").getRowData(tmp1[i]);	
			if(rowData["DaChon"]==1 && rowData["Luu"]==0){
				if(window.id_donchon==''){
					window.id_donchon=tmp1[i];	
				}else{
					window.id_donchon=window.id_donchon+'_'+tmp1[i];
				}
			}else if(rowData["DaChon"]==0 && rowData["Luu"]==1){
				if(window.id_donchon_xoa==''){
					window.id_donchon_xoa=rowData["ID_auto"];	
				}else{
					window.id_donchon_xoa=window.id_donchon_xoa+'_'+rowData["ID_auto"];
				}
			}
			
			if(rowData["DaChon"]==1){
				window.demdondangchon=window.demdondangchon+1;
			}
		}
		//alert(window.id_donchon+'_'+window.id_donchon_xoa);
		
		
		if(window.n_iddonthuocmau!=0){
			var savedRow = $('#rowed4').jqGrid("getGridParam", "savedRow");		
			if (savedRow && savedRow.length > 0) {
				if($('#'+savedRow[0].id+'_ID_Thuoc_combobox').val()!=''){
					jQuery("#rowed4").jqGrid('saveRow',savedRow[0].id);
				}else{
					$('#rowed4').jqGrid('delRowData',savedRow[0].id);
				}
			}
			var gridData3 = jQuery("#rowed4").getRowData();
			var postData3 = JSON.stringify(gridData3);
			postData3='{"id":'+postData3+'}';
			postData3=$.parseJSON(postData3);
		}else{
			postData3='';
		}
			$.post('resource.php?module=<?= $modules ?>&view=<?= $view ?>&action=controller_donthuocchitiet&id_loaikham=<?=$_GET['id_loaikham']?>&iddonthuocmau='+window.n_iddonthuocmau+'&donthuocchon='+window.id_donchon+'&donthuochuy='+window.id_donchon_xoa+'&donthuocxoa='+window.donthuocxoa,postData3).done(function(data){
				//$("#rowed4").jqGrid('setGridParam',{datatype: 'json',url:"resource.php?module=<?=$modules?>&view=<?=$view?>&action=data_donthuocmauchitiet&id="+n_iddonthuocmau}).trigger('reloadGrid');
				parent.postMessage('dongdialog|||luu|||'+window.tendonthuocmau+'|||'+window.n_iddonthuocmau+'|||'+window.demdondangchon,'*');
			});
		//parent.postMessage('dongdialog|||','*');	
    });
	

	$(window).resize(function() {
		$("#panel_main").css("height",$("#subbody").height()-40+"px");
		$("#panel_main").fadeIn(1000);
		$(".left_col").css('height',$("#panel_main").height());
		$(".right_col").css('height',$("#panel_main").height());
		resize_control();
	})
})//end ready


function create_grid(){	
		$("#rowed3").jqGrid({
			url: 'resource.php?module=<?=$modules?>&view=<?=$view?>&action=data_donthuocmau&id_loaikham=<?=$_GET['id_loaikham']?>',
			datatype: "json",
			colNames:['Chọn','','','','Id','Mã đơn','Tên đơn thuốc','Nhóm bệnh','Mô tả','ID Bác sĩ tạo','Bác sĩ tạo','Là toa chuẩn','Áp dụng','Ghi chú'],
			colModel:[
			{name:'Chon',index:'Chon', width:"5%", editable:true,stype: 'select',search:true,searchoptions: { sopt: ['eq', 'ne'],value:':;1:Có;0:Không'}, editable:true,align:'center',hidden:false,edittype:"checkbox",formatter:"checkbox",formatoptions:{disabled: false},formoptions:{ rowpos:13, colpos:1}
			,editoptions: { value:"1:0",dataEvents:  [{ type: 'click', fn: function(e) {
				if($("#"+$(e.target).attr('id')).is(':checked')){
   					var tthai=1;
   				}
				else{
  					var tthai=0;
  				}
				var row = $(e.target).closest('tr.jqgrow');
                var tam = row.attr('id');
				$("#rowed3").jqGrid('setCell',tam,'DaChon', tthai);
                 } }]}}, 
			{name: 'DaChon', index: 'DaChon', search: true, width: "10%", editable: false, align: 'left', hidden: true},
			{name: 'Luu', index: 'Luu', search: true, width: "10%", editable: false, align: 'left', hidden: true},
			{name: 'ID_auto', index: 'ID_auto', search: true, width: "10%", editable: false, align: 'left', hidden: true},
			{name:'ID_DonThuocMau',index:'ID_DonThuocMau',search:false, width:"2%", editable:false,align:'right',hidden:true}, 
			{name:'MaDon',index:'MaDon', width:"4%", editable:true,align:'center',hidden:true,editrules: {required:true},edittype:"text"},
			{name:'TenDonThuoc',index:'TenDonThuoc', width:"14%", editable:false,align:'left',edittype:"text"},
			{name:'ID_NhomBenh',index:'ID_NhomBenh', width:"4%", editable:false,align:'left',hidden:true,editrules: {required:true},edittype:"select",formatter:"select",editoptions:{value:nhombenh}},
			{name:'MoTa',index:'MoTa', width:"10%", editable:true,align:'right',hidden:true,edittype:"text"},
			{name:'ID_BacSiTao',index:'ID_BacSiTao', width:"4%", editable:false,align:'left',hidden:true,editrules: {required:true},edittype:"select",formatter:"select",editoptions:{value:idnhanvien}},
			{name:'BacSiTao',index:'BacSiTao', width:"4%", editable:false,align:'left',hidden:false,edittype:"text"},
			{name:'LaToaChuan',index:'LaToaChuan', width:"3%", editable:false,align:'center',hidden:true,edittype:"checkbox",formatter:"checkbox",formoptions:{ rowpos:3, colpos:1},editoptions: {value:"1:0"}},
			{name:'ApDung',index:'ApDung', width:"3%", editable:false,align:'center',edittype:"text",hidden:true,edittype:"checkbox",formatter:"checkbox",formoptions:{ rowpos:3, colpos:1},editoptions: {value:"1:0"}},
			{name:'GhiChu',index:'GhiChu', width:"10%", editable:false,align:'left',edittype:"text",hidden:false}, 	
                ],
		 
		
		loadonce: true,
		scroll: true,
		modal: true,
		rowNum: 3000,
		rowList: [30, 50, 70],
		pager: '#prowed3',
		//sortname: 'NgayGioKetThuc',
		height: 100,
		width: 100,
		viewrecords: true,
		ignoreCase: true,
		shrinkToFit: true,
		
		serializeRowData: function (postdata) { 		 	
			//$("#rowed3").trigger("reloadGrid");		
			//return postdata;
		},
		onSelectRow: function(id) {
			window.n_iddonthuocmau = id;
			var rowData = jQuery(this).getRowData(id); 
			var ID_DonThuocMau = rowData['ID_DonThuocMau']; //alert(ID_DonThuocMau);	
			window.tendonthuocmau=rowData['TenDonThuoc'];
			$("#rowed4").jqGrid('setGridParam',{datatype: 'json',url:"resource.php?module=<?=$modules?>&view=<?=$view?>&action=data_donthuocmauchitiet&id="+ID_DonThuocMau}).trigger('reloadGrid');
                        
            },
		ondblClickRow: function (rowId, rowIndex, columnIndex) {
			$(".ui-icon-pencil").trigger('click'); 
 		},
		onRightClickRow: function(rowid, iRow, iCol, e) {
			window.n_iddonthuocmau = rowid;
			if ($("#menu").width() + e.pageX > $(document).width()) {
				$("#menu").css('left', e.pageX - $("#menu").width() + "px");
			} else {
				$("#menu").css('left', e.pageX + "px");
			}
			if ($("#menu").height() + 30 + e.pageY > $(document).height()) {
				$("#menu").css('top', e.pageY - $("#menu").height() + "px");
			} else {
				$("#menu").css('top', e.pageY + "px");
			}
			$("#menu").show(300);
		},
		loadComplete: function(data) {	
			grid_filter_enter("#rowed3");
			//checkbox_grid('gs_Chon','#rowed3')
			var ids=$('#rowed3').jqGrid('getDataIDs');
			/*if(window.huy==0 || window.select_iddonthuocmau==0){
				setTimeout(function(){
					if(window.select_iddonthuocmau==0){
						//jQuery('#rowed3').jqGrid("setSelection",ids[0], true);
						//$("#rowed3 #"+ids[0]).click();
					}else{
						jQuery('#rowed3').jqGrid("setSelection",window.select_iddonthuocmau, true);
						$("#rowed3 #"+window.select_iddonthuocmau).click();
					}
				
				},200);
			}*/
			window.huy=0;
			var tmp1 = $("#rowed3").jqGrid('getDataIDs'); 
			for(var i=0;i < tmp1.length;i++){
				jQuery("#rowed3").jqGrid('editRow',tmp1[i]);
			}
           /* if(typeof(window.donthuocmau1)!="undefined"){			 
				tam='rowed3ghead_0_'+window.donthuocmau1
				jQuery('#rowed3').jqGrid('groupingToggle',tam)	
				jQuery('#rowed3').jqGrid("setSelection",window.id_return, true);	
				jQuery('#rowed3'+window.id_return).focus(); 
			}*/
			
		},	  
		caption: "Danh mục gói thuốc -  VTTH mẫu"
	});
    $("#rowed3").jqGrid('filterToolbar',{searchOperators : false,searchOnEnter:false,defaultSearch:"cn"});
	$("#rowed3").jqGrid('navGrid',"#prowed3",{add:permission["add"], edit: permission["edit"], del: permission["delete"],refresh: false,search: false,closeAfterEdit: true,clearAfterAdd :true,closeOnEscape : true,
	
	 addfunc: function() {
		$('#dialog-themdon').dialog('open');
        window.oper='add';
     },
	 editfunc: function(id) {		
				window.oper='edit';
				window.id_edit=id;
				var tendonthuoc = $("#rowed3").jqGrid('getCell', id, 'TenDonThuoc');
				var bacsitao = $("#rowed3").jqGrid('getCell', id, 'ID_BacSiTao');
				var ghichu = $("#rowed3").jqGrid('getCell', id, 'GhiChu');
				setval_new('#bstao_edit',bacsitao); 
				$('#tendon_edit').val(tendonthuoc);
				$('#ghichu_edit').val(ghichu);
				$('#rowed5').jqGrid('setGridParam', {url: 'resource.php?module=<?=$modules?>&view=<?=$view?>&action=data_donthuocmauchitiet&id='+id,datatype:'json'}).trigger('reloadGrid');
				$('#dialog-suadon').dialog('open');
				
				
         },
     }, //options
	
	{},{}	,				 
								  
		{reloadAfterSubmit:false,url:'resource.php?module=<?=$modules?>&view=<?=$view?>&action=controller_donthuoc&oper=del&hienmaloi=a',	navkeys : [ true, 38, 40 ],closeOnEscape : true,	
		beforeShowForm : function(formid) {canhgiua_del(formid);},
		afterSubmit : function(response, postdata) { 				
			if(response.responseText==1){
				var success=false;
				var new_id="Xóa liệu không thành công";													
			}else{
				tooltip_message("Xóa dữ liệu thành công");
				var success=true;	
				var new_id="Xóa dữ liệu thành công";
				load_phong_ban(true);								
			}				
			return [success,new_id] ;
		}
		} // del options
       );
					  
	resize_control()
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
		
}
function create_detail_grid(){
	$("#rowed4").jqGrid({
			url:'resource.php?module=danhmuc&<?=$modules?>&view=<?=$view?>&action=data_donthuocmauchitiet&id=0',               
			datatype: "json",	
			colNames:['','','ID','Xóa','Tên thuốc','Liều dùng','Cách dùng'],
			colModel:[
			{name:'luu',index:'luu',width:"5%",align:'center',hidden:true, editable: false,align:'center'}  ,	
			{name:'sua',index:'sua',width:"5%",align:'center',hidden:true, editable: false,align:'center'}  ,	
			{name:'ID_TTMChiTiet',index:'ID_TTMChiTiet',search:false, width:"100%", editable:false,align:'right',hidden:true},
			{name:'xoa',index:'xoa',width:"5%",align:'center',hidden:false, editable: false,align:'center'}  ,	
			{name:'ID_Thuoc',index:'ID_Thuoc',width:"50%", align:'left',hidden:false, editable: true,edittype:"select", classes:'tenthuoc',editoptions:{value:window.thuoc},formatter: "select",editrules:{custom: true, custom_func: function(value, colName) {
                         return[true,''];
                        },formatter: function (cellValue, options, rowObject) {                    
                            return searhicon
                        }}
		    }, 
			{name:'LieuDungHangNgay',index:'LieuDungHangNgay',search:false, width:"10%",formatter:'integer',formatoptions:{defaultValue: '0'}, editable:true,align:'center',hidden:false,edittype:"text"},
			{name:'CachDung',index:'CachDung',search:false, width:"30%", editable:true,align:'center',hidden:false,edittype:"text"
			,editoptions: { dataEvents:  [{ type: 'keyup', fn: function(e) { 
					if(jwerty.is("enter",e)||jwerty.is("tab",e)){
					//	$('#rowed4_ilsave').click();
						be = '<span class="ui-state-error ui-state-hover  " style="border:0"><span class="ui-icon  ui-icon-closethick" style="margin-left:10px"></span></span>';
						$("#rowed4").jqGrid('setRowData',$("#rowed4").jqGrid('getGridParam', 'selrow'),{xoa:be});
						jQuery("#rowed4").jqGrid('saveRow',$("#rowed4").jqGrid('getGridParam', 'selrow'),null,null,{"extraparam" : {"oper":'add'} }, aftersave,null,null,null,"POST");
					$("#rowed4_iladd").removeClass('ui-state-disabled');
						//$('#rowed4_iladd').click();
					}
                 } }]}},	
          
            ],
		inline_esc:false,
		grid_mode:'',
		grid_move:"",
		grid_save_option:"",	
		column:["LieuDungHangNgay"],
		func_column:["luoi_LieuDungHangNgay"],	
		loadonce: false,
		local:false,
		scroll: false,		 
		modal:true,
        shrinkToFit: true,
		rowNum: 10000000,
		rowList:[],
		pager: '#prowed4',
		sortname: 'ID_Thuoc',
		height:100,
		width:100,
		viewrecords: false,	
		ignoreCase:true,	
		sortorder: "asc",
	    grouping: false,
		// moi them
		inline_editrule:true,
		inline_esc:true,
		cellEdit: true,
		cellsubmit: 'clientArray',
		cell_move_enter:true,
		onCellSelect: function (rowid,iCol,cellcontent,e) {
			if(iCol==3){
        		window.row_id_delete=rowid;
				var rowData = jQuery('#rowed4').jqGrid ('getRowData',rowid);
				if(rowData['ID_TTMChiTiet']!=''){
					if(window.donthuocxoa==''){
					  window.donthuocxoa=rowid;
					}else{
					  window.donthuocxoa=window.donthuocxoa+','+rowid;
					}
					$('#rowed4').jqGrid('delRowData',rowid);
				}else{
					$('#rowed4').jqGrid('delRowData',rowid);
				}
				$("#donthuoc_rowed3_ilcancel").click();
			}
        }, 
		afterSaveCell : function ( rowid, cellname, value, iRow, iCol){	
			$('#'+iRow+'_ID_Thuoc_combobox,.dialog_dm_thuoc .ui-jqgrid-hbox').unbind("keyup");
			$('#'+iRow+'_ID_Thuoc_combobox,.dialog_dm_thuoc .ui-jqgrid-hbox').unbind("click");
			$('body').unbind("click");			
			return [true,'']
		},
		afterEditCell: function (rowid, celname, value, iRow, iCol) {	// them cái này nữa
				window.cell_rowed6=celname;
				rowed6_select=rowid;	
				if((iCol==5)){
					var with_idthuoc=parseFloat($('#jqgh_rowed4_ID_Thuoc').width())-32;			
					$('#rowed4 #'+iRow+'_ID_Thuoc1').hide(); 
					combobox_inline_new('ID_Thuoc',iRow,'rowed4',create_Dm_thuoc_grid,window.data_thuoc,iRow,iRow,donthuoc_callback)
					$('#'+iRow+'_ID_Thuoc_combobox').keyup(function(e){					
						if (jwerty.is('enter',e)){
							$('#rowed4').jqGrid("nextCell",iRow,iCol);
						}
					})
					setTimeout(function(){
						$('#'+iRow+'_ID_Thuoc_combobox').focus();
						$('#'+iRow+'_ID_Thuoc_combobox').select();
					},10)
				}
				$("#"+iRow+"_"+celname).focusout(function(e) {
					$("#rowed4").saveCell(iRow,iCol);
				});
		
		}, 
		afterInsertRow: function(rowid, aData){
    	},
		pgbuttons: false, // disable page control like next, back button
        pgtext: null, // disable pager text like 'Page 0 of 10'	 
		serializeRowData: function (postdata) { 	
			
		},
		serializeRowData: function (postdata) { 		 	
		},
		onSelectRow: function(id){		
			$('#'+window.rowed6_select).removeClass("ui-state-highlight").attr({"aria-selected":"false", "tabindex" : "-1"});
			window.rowed6_select=id;    
		},
		ondblClickRow: function (rowId, rowIndex, columnIndex) {
 		},
		loadComplete: function(data) {	
			var ids = jQuery("#rowed4").jqGrid('getDataIDs');
			for(var i=0;i < ids.length;i++){	
				var cl = ids[i];
				be = '<span class="ui-state-error ui-state-hover  " style="border:0"><span class="ui-icon  ui-icon-closethick" style=" margin-left:10px"></span></span>';
				$("#rowed4").jqGrid('setRowData',ids[i],{xoa:be});
			}			 
		},	  
		caption: "Gói thuốc -  VTTH mẫu chi tiết",
		editurl:'clientArray',
	});	
	$("#rowed4").jqGrid('navGrid',"#prowed4",{add: false, edit: false, del: false, search: false, refresh: false,closeAfterEdit: true,clearAfterAdd :true,navkeys : [ true, 38, 40 ]});
	$("#rowed4").jqGrid('inlineNav', '#prowed4', {add: true, addtext: 'Thêm mới', edittext: 'Sửa', edit: true,save:false,
            addParams: {
				keys:true,
                position: "last",
                addRowParams: {
					keys:true,                  
                    aftersavefunc: function(rowId, response,lastsel) {
						destroy_combobox_inline_new('ID_Thuoc',rowId,'rowed4');	
						$('#rowed4').focus();	
						var current_rowed6=$('#rowed4').jqGrid('getCell',rowId, 'ID_Thuoc')
						
						$('#'+rowId).removeClass("ui-state-highlight").attr({"aria-selected":"false", "tabindex" : "-1"})
						$("#" + rowId).attr("id",current_rowed6);
						$('#'+current_rowed6).removeClass("ui-state-highlight");						
						be='<span class="ui-state-error ui-state-hover  " style="border:0"><span class="ui-icon  ui-icon-closethick" style="float: left; margin-left:10px;"></span></span>';
						$("#rowed4").jqGrid('setRowData',current_rowed6,{xoa:be});
						
						setTimeout(function(){							
						   $("#prowed4 .ui-icon-plus").click();	
						   var ids = jQuery("#rowed4").jqGrid('getDataIDs');	
						   $('#'+ids[ids.length-1]+'_ID_Thuoc1').focus();		
						},200);
						
                    },
					oneditfunc: function(rowId) {	
						combobox_inline_new('ID_Thuoc',rowId,'rowed4',create_Dm_thuoc_grid,window.data_thuoc,0,1,donthuoc_callback)//new
						inline_enter(rowId);
					},	
                    afterrestorefunc: function(rowId) {	
						destroy_combobox_inline_new('ID_Thuoc',rowId,'rowed4');					
						$("#rowed4").jqGrid('bindKeys');
						$('#rowed4').focus();						
                    }				 
                }
            	},	
            editParams: {
				keys:true,				 
				 	aftersavefunc: function(rowId, response,lastsel) {
						destroy_combobox_inline_new('ID_Thuoc',rowId,'rowed4');		
						$('#rowed4').focus();
						 setTimeout(function(){
							 $("#prowed4 .ui-icon-plus").click();
						},200);	
                    },					 	
                	oneditfunc: function(rowId) {
						alert(1);	
						combobox_inline_new('ID_Thuoc',rowId,'rowed4',create_Dm_thuoc_grid,window.data_thuoc,rowId,rowId,donthuoc_callback)//new	
						inline_enter(rowId);
					},	
                    afterrestorefunc: function(rowId) {	
					$("#rowed4").jqGrid('bindKeys');
					destroy_combobox_inline_new('ID_Thuoc',rowId,'rowed4');									   
					},	 
			}
       	 }); 		  
	resize_control()
}


 function create_bacsi(elem, datalocal) {
        datalocal = jQuery.parseJSON(datalocal);
        $(elem).jqGrid({
           datastr: datalocal,
            datatype: "jsonstring",
            colNames: ['Nickname', 'Họ tên','Phòng ban'],
            colModel: [
				{name: 'nick', index: 'nick', hidden: false,width:"15%"},
                {name: 'hovaten', index: 'hovaten', hidden: false,width:"45%"},				
				{name: 'phongban', index: 'phongban', hidden: false,width:"30%"},
                
            ],
            hidegrid: false,
            gridview: true,
            loadonce: true,
            scroll: 1,
            modal: true,
            rowNum: 100,
            rowList: [],
            height: 200,
            width: 500,
            viewrecords: true,
            ignoreCase: true,
            shrinkToFit: true,
            cmTemplate: {sortable: false},
            sortorder: "desc",
            serializeRowData: function(postdata) {
            },
            onSelectRow: function(id) {

              var rowData = $(this).getRowData(id);
              //alert(rowData);
            //  $("#tenbacsi").val(rowData["hovaten"]);

            },
            ondblClickRow: function(id, rowIndex, columnIndex) {
            },
            loadComplete: function(data) {
            },
        });
        $(elem).jqGrid('filterToolbar', {searchOperators: false, searchOnEnter: false, defaultSearch: "cn"});
        $(elem).jqGrid('bindKeys', {});
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
		{name:'TenDayDu',index:'TenDayDu',hidden :true},	
		{name:'TenNhaSanXuat',index:'TenNhaSanXuat',hidden :true},	 	 
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
		/*//$("#rowed3").jqGrid('getGridParam', 'selrow');
		$('#rowed3').jqGrid('setCell', $("#rowed3").jqGrid('getGridParam', 'selrow'), 'HangSX', '&nbsp;');
		$('#rowed3').jqGrid('setCell', $("#rowed3").jqGrid('getGridParam', 'selrow'), 'NuocSX', '&nbsp;');
		var rowData = $(elem).getRowData(id);
		$('#rowed3').jqGrid("setCell", $("#rowed3").jqGrid('getGridParam', 'selrow'), "HangSX",rowData['TenNhaSanXuat'] );
		$('#rowed3').jqGrid("setCell", $("#rowed3").jqGrid('getGridParam', 'selrow'), "NuocSX",rowData['TenDayDu'] );
		$('#rowed3').jqGrid("setCell", $("#rowed3").jqGrid('getGridParam', 'selrow'), "DonViTinh",rowData['TenDonViTinh'] );						
		//$('#rowed3').jqGrid("setCell", $("#rowed3").jqGrid('getGridParam', 'selrow'), "DonViTinh",rowData['TenDonViTinh'] );*/
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

function create_loaikham_grid(){
	mydata=[];	
	$("#rowed_loaikham").jqGrid({
		//url: 'resource.php?module=<?=$modules?>&view=<?=$view?>&action=data_loaikham2&iddonthuoc=195',
		datatype: "json",
		data: mydata,
        datatype: "local",
		colNames: ['Nhom_CLS', 'ID_Auto', 'Luu', 'events','ID Nhóm CLS','ID loại khám', 'BS được phân công', 'Tên hạng mục khám','count',''],
		colModel: [
			{name: 'Nhom_CLS', index: 'Nhom_CLS', summaryType: 'sum', search: true, width: "5%", editable: false, align: 'center', hidden: true},
			{name: 'ID_Auto', index: 'ID_Auto', search: true, width: "5%", editable: false, align: 'center', hidden: true},
			{name: 'luu', index: 'luu', search: true, width: "5%", editable: false, align: 'center', hidden: true},
			{name: 'events', index: 'events', search: true, width: "5%", editable: false, align: 'center', hidden: true},
			{name: 'ID_NhomCLS', index: 'ID_NhomCLS', search: false, width: "0%", editable: false, align: 'left', hidden: true,edittype:"select",formatter:'select',editoptions:{value: nation}},
			{name: 'ID_LoaiKham', index: 'ID_LoaiKham', search: true, width: "20%", editable: false, align: 'left', hidden: true},
			{name: 'BacSy', index: 'BacSy', search: true, width: "15%", editable: false, align: 'left', hidden: false},
			{name: 'TenLoaiKham', index: 'TenLoaiKham', search: true, width: "50%", editable: false, align: 'left', hidden: false},
			{name: 'sum', index: 'sum', hidden: true, summaryType: 'sum'},
			{name: 'dem', index: 'dem', hidden: true, summaryType: 'sum'},
		],
		multiselect: true,
		loadonce: true,
		scroll: true,
		modal: true,
		rowNum: 3000,
		rowList: [30, 50, 70],
		//pager: '#prowed_loaikham',
		//sortname: 'NgayGioKetThuc',
		height: 100,
		width: 100,
		viewrecords: true,
		ignoreCase: true,
		shrinkToFit: true,
		grouping:true, 
		groupingView : { 
			groupField : ['ID_NhomCLS'],
			groupDataSorted : true ,
			groupCollapse : false,
			groupColumnShow :[false],
			groupText : ["<input id='grouping'  type='checkbox' if({1}=={sum}) {title='{1}=={sum}'} class='grouping_{Nhom_CLS}_{1}' onchange='cbChanged(this.className, this);'> <font color='#000'> <b>{0} - {1}  hạng mục  </font><font color='#1F77B8'> (<span id='dachon'> {sum}</span> hạng mục đã chọn )</font></b>"]
		},
		serializeRowData: function (postdata) { 		 	
			//$("#rowed3").trigger("reloadGrid");		
			//return postdata;
		},onCellSelect: function(rowid, icol, cellcontent, e) {
			 var rowData = jQuery(this).getRowData(rowid);
			 if(rowData["events"]==0){
				 $("#rowed_loaikham").jqGrid('setCell',rowid,'events', 1);
			 }else{
				 $("#rowed_loaikham").jqGrid('setCell',rowid,'events', 0);
			 }
		},
		onSelectRow: function(id) {
	
                        
            },
		ondblClickRow: function (rowId, rowIndex, columnIndex) {
 		},
		onRightClickRow: function(rowid, iRow, iCol, e) {
			
		},
		loadComplete: function(data) {	
			//var tmp1 = $("#rowed_loaikham").jqGrid('getDataIDs'); 
			var ids = $('#rowed_loaikham').jqGrid('getDataIDs');
			var groups = $(this).jqGrid("getGridParam", "groupingView").groups
			for (var i = 0; i < groups.length; i++) {
				if(groups[i].cnt==groups[i].summary[1].v){
				   $(".grouping_"+groups[i].summary[0].v+"_"+groups[i].cnt).prop( "checked", true ); 
				}
			}
			for(var i=0;i<ids.length;i++){
				var rowData = jQuery(this).getRowData(ids[i]); 
				if(rowData["ID_Auto"]>0){
					$("#jqg_rowed_loaikham_"+ids[i]).prop('checked',true);
					jQuery('#rowed_loaikham').jqGrid("setSelection",ids[i], true);	
					$("#rowed_loaikham").jqGrid('setCell',ids[i],'luu', 2);
					$("#rowed_loaikham").jqGrid('setCell',ids[i],'events', 1);
				}
			}
			var  dem = $("#rowed_loaikham").jqGrid('getCol', 'dem', false, 'sum');
			$("#demsodong").html('- Có '+dem+' hạng mục');
			jQuery("#rowed_loaikham").closest(".ui-jqgrid-bdiv").scrollTop(0);
            jQuery("#rowed_loaikham").closest(".ui-jqgrid-bdiv").scrollLeft(0)
			//$("#thumo").click();
		},	  
		caption: "Danh mục loại khám <span style='margin-left:10px;'><input type='checkbox' id='thumo'> <label for='thumo'>Thu gọn</label></span> <span style='margin-left:10px;' id='demsodong'></span>"
	});
    $("#rowed_loaikham").jqGrid('filterToolbar',{searchOperators : false,searchOnEnter:false,defaultSearch:"cn"});

}


function load_phong_ban(status){
	window.idnhanvien = $.ajax({url: 'resource.php?module=web_services&function=get_auto_edit_option&action=index&term=&status=0&tables=DM_NhanVien&id=ID_NhanVien&name=NickName', async: false, success: function(data, result) {if (!result) alert('Không load được danh mục phòng ban');}}).responseText;
	window.nhombenh = $.ajax({url: 'resource.php?module=web_services&function=get_auto_edit_option&action=index&term=&status=0&tables=DM_NhomBenh&id=ID_NhomBenh&name=TenNhomBenh', async: false, success: function(data, result) {if (!result) alert('Không load được danh mục nhóm bệnh');}}).responseText;
	window.idthuoc = $.ajax({url: 'resource.php?module=web_services&function=get_auto_edit_option&action=index&term=&status=0&tables=DM_Thuoc&id=ID_Thuoc&name=TenGoc', async: false, success: function(data, result) {if (!result) alert('Không load được danh mục thuoc');}}).responseText;
        //window.nhombenh = $.ajax({url: 'resource.php?module=web_services&function=get_auto_edit_option&action=index&term=&status=0&tables=DM_&id=ID_DonThuocMau&name=TenDonThuoc', async: false, success: function(data, result) {if (!result) alert('Không load được danh mục thuoc mau');}}).responseText;
       
}

function create_layout() {
	$('#panel_main').layout({
		resizerClass: 'ui-state-default'
				, east: {
			resizable: true
					, size: "60%"
					, spacing_closed: 27
					, togglerLength_closed: 85
					, togglerAlign_closed: "center"
					, togglerContent_closed: "<div id='menu_toggle'>X<BR>O<BR>N<BR>G</div>"
					, togglerTip_closed: "Open & Pin Menu"
					, sliderTip: "Slide Open Menu"
					, slideTrigger_open: "mouseover"
					, fxSettings_close: {easing: "easeOutQuint"}
					, initClosed:    false
			, onresize_end: function() {
				resize_control();

			}
			, onopen_end: function() {

				resize_control();
				//alert('c');
			}
			, onclose_end: function() {


			}

		}
		, center: {
			resizable: true
					, size: "40%"

					, fxName: "drop"		// none, slide, drop, scale
					, fxSpeed_open: 450
					, fxSpeed_close: 450
					, fxSettings_open: {easing: "easeInQuint"}
			, fxSettings_close: {easing: "easeOutQuint"}

			, onresize_end: function() {
				resize_control();
			}
			, onopen_end: function() {

			  //  resize_control();

			}
			, onclose_end: function() {



			}
		}
	});
}
function donthuoc_callback(tam){
	$("#"+tam).keydown(function(e) {
		if (jwerty.is("enter",e)||jwerty.is("tab",e)) {
			setTimeout(function(){
				$("#rowed4 #"+$("#rowed4").jqGrid('getGridParam', 'selrow')+"_LieuDungHangNgay").focus();
				$("#rowed4 #"+$("#rowed4").jqGrid('getGridParam', 'selrow')+"_LieuDungHangNgay").select();
			},100);
		}
	});

}
function inline_enter(rowid){
	$('#rowed4 #'+rowid+'_LieuDungHangNgay,#rowed4 #'+rowid+'_CachDung').unbind('keydown')
	$('#rowed4 #'+rowid+'_LieuDungHangNgay,#rowed4 #'+rowid+'_CachDung').bind('keydown',function(e){
		if ((jwerty.is('enter',e))||(jwerty.is('tab',e))){
			if($('#rowed4 #'+rowid+'_LieuDungHangNgay').is(":focus")){
				setTimeout(function(){
					$('#rowed4 #'+rowid+'_CachDung').focus();
					$('#rowed4 #'+rowid+'_CachDung').select();
				},500);			
			}
		}//if shift tab
	})
}
function aftersave(rowId, response,lastsel) {
	destroy_combobox_inline_new('ID_Thuoc',rowId,'rowed4');		
	var current_rowed6=$('#rowed4').jqGrid('getCell',rowId, 'ID_Thuoc')
	$('#rowed4').focus();	
	$('#'+rowId).removeClass("ui-state-highlight").attr({"aria-selected":"false", "tabindex" : "-1"})
	$("#" + rowId).attr("id",current_rowed6);
	$('#'+current_rowed6).removeClass("ui-state-highlight");						
	be='<span class="ui-state-error ui-state-hover  " style="border:0"><span class="ui-icon  ui-icon-closethick" style="float: left; margin-left:10px;"></span></span>';
	$("#rowed4").jqGrid('setRowData',current_rowed6,{xoa:be});

	setTimeout(function(){							
	   $("#prowed4 .ui-icon-plus").click();	
	   var ids = jQuery("#rowed4").jqGrid('getDataIDs');	
	   $('#'+ids[ids.length-1]+'_ID_Thuoc1').focus();		
	},200);
 }
 
 
 
function check_idthuoc(tam){
	
}

function cbChanged (a,b){
   // window.scrollPositiontop  = jQuery("#rowed4").closest(".ui-jqgrid-bdiv").scrollTop();
  //  window.scrollPositionleft = jQuery("#rowed4").closest(".ui-jqgrid-bdiv").scrollLeft();
    var rs = a.split("_");
    var id=rs[1]/rs[2];
    var tmp = $("#rowed_loaikham").jqGrid('getDataIDs'); 

    if($(b).is(':checked')==true){
        for(var i=0;i<tmp.length;i++){
            var rowData = $("#rowed_loaikham").getRowData(tmp[i]);
            if(rowData["Nhom_CLS"]==id){
                if($("#jqg_rowed_loaikham_"+tmp[i]).is(':checked')==false){
                    $("#rowed_loaikham").jqGrid("setSelection",tmp[i], true);
                    $("#rowed_loaikham").jqGrid('setCell',tmp[i],'events', 1);
                }
            }
        }
     //   jQuery("#rowed_loaikham").closest(".ui-jqgrid-bdiv").scrollTop(scrollPositiontop);
      //  jQuery("#rowed_loaikham").closest(".ui-jqgrid-bdiv").scrollLeft(scrollPositionleft)
    }else{
        for(var i=0;i<tmp.length;i++){
            var rowData = $("#rowed_loaikham").getRowData(tmp[i]);
            if(rowData["Nhom_CLS"]==id){
                if($("#jqg_rowed_loaikham_"+tmp[i]).is(':checked')==true){
                   $("#rowed_loaikham").jqGrid("setSelection",tmp[i], false);
                   $("#rowed_loaikham").jqGrid('setCell',tmp[i],'events', 0);
                }
            }
           // jQuery("#rowed_loaikham").closest(".ui-jqgrid-bdiv").scrollTop(scrollPositiontop);
          //  jQuery("#rowed_loaikham").closest(".ui-jqgrid-bdiv").scrollLeft(scrollPositionleft)
        }
        
    }

}

function resize_control() {
	$("#rowed3").setGridWidth($(".left_col").width()-6);
	$("#rowed3").setGridHeight($(".left_col").height()-104);
	$("#rowed4").setGridWidth($('.right_col').width()-6);
	$("#rowed4").setGridHeight($('.right_col').height()-80);	
}
</script>



