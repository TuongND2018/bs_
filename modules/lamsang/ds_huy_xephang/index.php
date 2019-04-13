<!--<link rel="stylesheet" href="../../../css/form_css.css" type="text/css" media="screen"/>-->
<style>
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
<body> 
	<div id="dialog-form" >
 		Bạn có muốn phục hồi bệnh nhân này vào DS xếp hàng lâm sàng?
	</div>
	<div id="grid_phong_ban">      	   
        <table id="rowed3" ></table>
		<div id="prowed3"></div>        
    </div>    
</body>
</html> 

<script type="text/javascript">
jQuery(document).ready(function() { 
	
	
	create_grid();	
	
	$( "#dialog-form" ).dialog({
      autoOpen: false,
      height: 130,
      width: 400,
      modal: true,
	  title:"Cảnh báo",
      buttons: {
        Cancel: function() {
          $( this ).dialog( "close" );
			},
			 "Ok": function() {
					$.post('resource.php?module=<?= $modules ?>&view=<?= $view ?>&action=data_huy_xh_restoreSTT&ID_LuotKham='+rowData["ID_LuotKham"]).done(function(data){ 
						if ($.trim(data) == '') {
							tooltip_message("Đã phục hồi vào DS xếp hàng lâm sàng");
							$('#rowed3').jqGrid('delRowData',rowid_z);
								//$('#rowed3').setGridParam({loadonce: false, datatype: "json"}).trigger('reloadGrid');
							}
						else {
								tooltip_message("Lỗi!");
							}
						$("#dialog-form").dialog("close");
					})			 
	  			}
	  }
    });
			
	jQuery(window).resize(function() {		 
	 $("#rowed3").setGridWidth($(window).width()-20);
	 $("#rowed3").setGridHeight($(window).height()-$("#form_danh_muc_loai_lich").height()-150);
	});	
	$("td#prowed3_left").append(" Để phục hồi bệnh nhân vào DS xếp hàng lâm sàng, nháy đôi vào tên bệnh nhân");	
})
 
function create_grid(){	
	 $("#rowed3").jqGrid({
		url:'resource.php?module=<?=$modules?>&view=<?=$view?>&action=data_huy_xh',
		datatype: "json",	
		colNames:['Id','Mã BN','Họ Tên','Tuổi','Giới tính','Phân loại khám','Giờ đến'],
		colModel:[
			{name:'ID_LuotKham',index:'ID_LuotKham',search:false, width:"2%", editable:false,align:'right',hidden:true}, 
			{name:'MaBenhNhan',index:'MaBenhNhan', width:"5%", editable:false,align:'center',hidden:false}, 
			{name:'HoTen',index:'HoTen', width:"15%", editable:false,align:'left',hidden:false}, 
			{name:'Tuoi',index:'Tuoi', width:"15%", editable:false,align:'center',hidden:false},
			//{name:'GioiTinh',index:'GioiTinh', width:"15%", editable:false,align:'center',hidden:false},
			{name:'GioiTinh',index:'GioiTinh', width:"4%", editable:false,align:'center',hidden:false,stype: 'select',searchoptions: { sopt: ['eq', 'ne'],value:':;Nữ:Nữ;Nam:Nam'}},	
			{name:'TenPhanLoaiKham',index:'TenPhanLoaiKham', width:"15%", editable:false,align:'center',hidden:false},
			{name:'ThoiGianVaoKham',index:'ThoiGianVaoKham', width:"20%", editable:false,align:'center',hidden:false},
		],
	//

		loadonce: true,
		scroll: 1,	
		//rownum = false,
		//treeGrid = false,	 
		modal:true,	 	
		pager: '#prowed3',	
		rowNum: 100,
		gridview: true,
		pginput:false,
		pgbuttons:false,
		rowList:[],
		height:100,
		width: 100,
		viewrecords: true,	
		ignoreCase:true,
		shrinkToFit:true,
		grouping: false,
		stringResult:true,		
		serializeRowData: function (postdata) { 		 	
			//$("#rowed3").trigger("reloadGrid");		
			//return postdata;
		},
		onSelectRow: function(id){		  
		  //$("#rowed4").jqGrid().setGridParam({url:'data2_tam.php?id='+lastsel}).trigger("reloadGrid");	   
		},
		ondblClickRow: function (rowId, rowIndex, columnIndex) {
			window.rowid_z= rowId;
			rowData = jQuery(this).getRowData(rowid_z);
			$('#dialog-form').dialog('open');
 		},
		loadComplete: function(data) {	
			
			grid_filter_enter("#rowed3") //enter: chuyen con tro sang o tiếp theo		 
		},	
		caption: 'Danh sách bệnh nhân hủy xếp hàng lâm sàng '
	});	
	$("#rowed3").jqGrid('filterToolbar',{searchOperators : false,searchOnEnter:false,defaultSearch:"cn"});//bộ search
		
	$("#rowed3").setGridWidth($(window).width()-20);
	$("#rowed3").setGridHeight($(window).height()-$("#form_danh_muc_loai_lich").height()-150);
	$("#rowed3").jqGrid('bindKeys', {"onEnter":function( rowid ) {
	}})}
	
	//   <span class="extended" disabled> Tự động reload sau  + reload_luoi_danhsach +  giây</span>
	
/* var reload_luoi_danhsach =<?php echo (get_system_config_("ThoiGianRefreshHangDoiLamSang")) ?>;
    function timer_danhsach(_value) {
        if (_value != "stop") {
            timer = setInterval(function() {
                    $('#rowed3').setGridParam({loadonce: false, datatype: "json"}).trigger('reloadGrid');
               
            }, (reload_luoi_danhsach * 1000));
        } 
    }
	
 function timer_title_danhsach(_value) {

        if (_value != "stop") {
            var bodem = 0;
            var tam = reload_luoi_danhsach;
            timer1 = setInterval(function() {
              
                    $('#gbox_rowed3 .ui-jqgrid-title .extended').html(" Tự động reload sau " + tam + " giây");
            		//alert(tam);
                    bodem += 1;
                    tam--;
                    if (reload_luoi_danhsach == bodem) {
                        bodem = 0;
                        tam = reload_luoi_danhsach;
                    }
               
            }, (1000));
		}
    }	*/
</script>