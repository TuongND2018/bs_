<!-- author:Phan Nam -->
<style type="text/css">
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
#demo{

    border-radius: 6px;
	height:30px;
    display: inline-block;
    margin-bottom: 1px;
    margin-left: 5px;
    padding-top: 5px;
	padding-left:5px;
	margin-top:5px;
    border: 1px solid #919191;
    box-shadow: 0 0 10px #A0A0A0;
}
#prowed3_center{
	display:none;
}

#pg_prowed3 span.ui-separator{
	 display:none;
 }
    #rowed3 td,#rowed4 td{

        font-size:11px!important;	   
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

    .demgio{
        cursor:pointer;
		color:#000 !important;

    }
    .disable{
        color:red;
        background:#333;

    }
    #gbox_rowed3, #gbox_rowed4, #gbox_rowed5, #gbox_rowed6, #gbox_rowed7{
        margin-left:4px;
        margin-top:5px;
        box-shadow:0px 0px 10px #a0a0a0;
        border:1px solid #919191; 
    }
 
    #calendar {
        width: 900px;
        margin: 0 auto;	 
    }
    input[type=button].custom_button{
        /*	border:1px solid #000;*/
        border:none;
        background:none;
        /*border-radius:10px; -moz-border-radius:10px; -webkit-border-radius:10px;*/
        outline:  none;
        text-shadow:0 1px 0 rgba(255, 255, 255, 0.6);
        font-size:11px;
        height:17px!important;
        width:40px!important;
        text-decoration:underline;

        /*box-shadow:0px 0px 2px 1px #a0a0a0;*/
    }
    input[type=button].custom_button:focus{	 
        outline:  none;
    } 
    :focus {outline:none;}
    ::-moz-focus-inner {border:0;} 
#menu { 
        width: 150px!important; 
        display:none; 
        position:absolute;  	 
        box-shadow:0px 0px 3px #333;
        z-index:100000;	 
        background: #ffffff;
    }
#menu2 { 
        width: 150px!important; 
        display:none; 
        position:absolute;  	 
        box-shadow:0px 0px 3px #333;
        z-index:100000;	 
        background: #ffffff;
    }
#luotkhamtontai{
	height:40px !important;
}
</style>


<body> 
<pre>
<?php
	//print_r($_SESSION);
?>
</pre>
	<ul id="menu" >     
        <!--<li><a id="chuasansang" href="#"><span class="ui-icon ui-icon-closethick"></span><span class="menu_text">Chưa sẵn sàng</span></a></li>
        <li><a id="huyxephang" href="#"><span class="ui-icon ui-icon-trash"></span><span class="menu_text">Hủy xếp hàng</span></a></li>
        <li><a id="thongtinbenhnhan" href="#"><span class="ui-icon ui-icon-person"></span><span class="menu_text">Thông tin bệnh nhân</span></a></li>
        <li><a id="thongtinluotkham" href="#"><span class="ui-icon ui-icon-pencil"></span><span class="menu_text">Thông tin lượt khám</span></a></li>
        <li><a id="medicalreport" href="#"><span class="ui-icon ui-icon-plusthick"></span><span class="menu_text">Medical Report</span></a></li>-->
        <li><a id="stopxephang" href="#"><span class="ui-icon ui-icon-pause"></span><span class="menu_text">Dừng xếp hàng</span></a></li>
        <li><a id="playxephang" href="#"><span class="ui-icon ui-icon-play"></span><span class="menu_text">Bật xếp hàng</span></a></li>
    </ul>
<ul id="menu2" >     
        <li><a id="stopxephang2" href="#"><span class="ui-icon ui-icon-pause"></span><span class="menu_text">Dừng xếp hàng</span></a></li>
        <li><a id="playxephang2" href="#"><span class="ui-icon ui-icon-play"></span><span class="menu_text">Bật xếp hàng</span></a></li>
    </ul>
 <div id="luotkhamtontai" style="display:none;">
 Bệnh nhân đã có một lượt khám đang chờ,bạn không thể tạo lượt khám mới
</div>
<div id="dialog_loi2" title="Thông báo"  style="display:none">
Vui lòng cấu hình phòng ban trước khi thực hiện chức năng này!!!
</div>
    <div id="panel_main" style="margin-top:10px;" >  
        <div class="left_col ui-widget-content ui-layout-center"> 
            <div id='demo' style="display:inline-block">
           <label>Thuộc PB chuyên môn</label> 
            <span class="custom-combobox" style="margin-top: 0.5px;" >
           	  <input id='com_thuochmk' class='com_thuochmk'  ></span>
              <input id='com_thuochmk1' class='com_thuochmk1'  style="width:200px;display:none">
            <button id="xemtatca" style="margin-left:30px; margin-top:-3px; height:27px;">Xem tất cả </button>
        </div>
            
            <table id="rowed3" ></table>
            <div  id="prowed3" ></div>  
        </div>

        <div class="ui-layout-east ui-widget-content right_col">   <table id="rowed4" ></table></div>
    </div>
</body>
</html> 

<script type="text/javascript">
    jQuery(document).ready(function() {
		//alert(listCookies()); lay ds cookie
		<?php
			echo "window.idphongban=".$_SESSION["user"]["id_phongban"].";";
		?>
        openform_shortcutkey(); //mở bằng phím tắt được thiết lập trong DB
		window.load_luoi3='resource.php?module=<?= $modules ?>&view=<?= $view ?>&action=data_ds_benhnhanchuanhapvien_byidphongban&id_phongban='+ window.idphongban;
			window.load_luoi4='resource.php?module=<?= $modules ?>&view=<?= $view ?>&action=data_ds_benhnhandanhapvien_byidphongban&id_phongban='+ window.idphongban;
		$("#luotkhamtontai").dialog({
		autoOpen:false,
        height:100,
        width: 400,
        modal: true,
        title: 'Thông báo',
		draggable: true,
		resizable: false,
        stack: false,
		buttons: {
			"Ok": function() {
			  $( this ).dialog( "close" );
			},
		},
		beforeClose: function( event, ui ) {
			 
		},
        close: function(event, ui) {
			var selr = jQuery('#rowed3').jqGrid('getGridParam','selrow');
			var rowData = jQuery('#rowed3').getRowData(selr); 		 
			//parent.postMessage("editluotkham;"+luotkham+";"+tenbn, "*");
			parent.postMessage('open_idbenhnhan;tao_benh_an_noi_tru;'+rowData['ID_LuotKham']+';'+selr+';;'+rowData['ID_Khoa']+'__'+rowData['Khoa']+';'+rowData['TenBenhNhan']+'&oper=edit&id_ttluotkham='+luotkham,'*');	
        },

    });
		window.default_id_pb_ChuyenMon='';
		$("#menu").menu();
		$("#menu2").menu();
		$(document).bind("contextmenu", function(e) {
            return false;
        });
        $(document).bind("mouseup", function(e) {
            $("#menu").hide();
        });
		 $(document).bind("mouseup", function(e) {
            $("#menu2").hide();
        });
				
		//alert(window.default_id_pb_ChuyenMon);
		 $('#dialog_loi2').dialog({
                autoOpen: false,
                width: 350,
				height:150,
				
                modal: true,
                resizable: false,
				closeOnEscape: true,
				buttons: {
				"Ok": function() {
					$( this ).dialog( "close" );
				}
				}
            });
		create_combobox_new('#com_thuochmk',create_ds_pbChuyenMon,'bw','','data_pbchuyenmon',window.idphongban);
		//window._loadluoi=1;
		window._maphongban='';
        temp = jQuery(window).height();
        $("#panel_main").css("height", temp + "px");
        $("#panel_main").fadeIn(1000);

        $("#xemtatca").button();
        create_layout();
        create_grid();
        create_grid2();
        resize_control();
	//	setTimeout(function(){
			
		//},200);
        // alert(powerXepHang_luoidangcho);
		
		$("#xemtatca").click(function(){
			parent.postMessage('changetitle;<?=$view?>-tab;DS Bệnh nhân cho nhập viện;', '*');
			$("#com_thuochmk").val('');
			window.load_luoi3='resource.php?module=<?= $modules ?>&view=<?= $view ?>&action=data_ds_benhnhanchuanhapvien';
			window.load_luoi4='resource.php?module=<?= $modules ?>&view=<?= $view ?>&action=data_ds_benhnhandanhapvien';
			
			$("#rowed3").jqGrid('setGridParam',{url:window.load_luoi3}).trigger('reloadGrid');
			$("#rowed4").jqGrid('setGridParam',{url:window.load_luoi4}).trigger('reloadGrid');
			timer_danhsach("stop");
            timer_title_danhsach("stop");
			timer_danhsach("start");
            timer_title_danhsach("start");
			$("#stopxephang").removeClass("ui-state-disabled");
			$("#playxephang").addClass("ui-state-disabled");
			$("#stopxephang2").removeClass("ui-state-disabled");
			$("#playxephang2").addClass("ui-state-disabled");
			
			}) ;
			
			//stop & start by menu
			$("#playxephang").addClass("ui-state-disabled");
			$("#stopxephang").removeClass("ui-state-disabled");
			
			$("#stopxephang").bind("click", function(e) {
				//$("#playxephang").unbind("click");
				timer_danhsach("stop");
				timer_title_danhsach("stop");
				$("#playxephang").removeClass("ui-state-disabled");
				$("#stopxephang").addClass("ui-state-disabled");
				$("#playxephang2").removeClass("ui-state-disabled");
				$("#stopxephang2").addClass("ui-state-disabled");
			});
			
			$("#playxephang").bind("click", function(e) {
				//$("#stopxephang").unbind("click");
				timer_danhsach("start");
				timer_title_danhsach("start");
				$("#stopxephang").removeClass("ui-state-disabled");
				$("#playxephang").addClass("ui-state-disabled");
				$("#stopxephang2").removeClass("ui-state-disabled");
				$("#playxephang2").addClass("ui-state-disabled");
			});
			
			
			//------------2
			$("#playxephang2").addClass("ui-state-disabled");
			$("#stopxephang2").removeClass("ui-state-disabled");
			
			$("#stopxephang2").bind("click", function(e) {
				//$("#playxephang").unbind("click");
				timer_danhsach("stop");
				timer_title_danhsach("stop");
				$("#playxephang").removeClass("ui-state-disabled");
				$("#stopxephang").addClass("ui-state-disabled");
				$("#playxephang2").removeClass("ui-state-disabled");
				$("#stopxephang2").addClass("ui-state-disabled");
			});
			
			$("#playxephang2").bind("click", function(e) {
				//$("#stopxephang").unbind("click");
				timer_danhsach("start");
				timer_title_danhsach("start");
				$("#stopxephang").removeClass("ui-state-disabled");
				$("#playxephang").addClass("ui-state-disabled");
				$("#stopxephang2").removeClass("ui-state-disabled");
				$("#playxephang2").addClass("ui-state-disabled");
			});
			//end stop & start
			
		
       
           phanquyen();
    }); //end ready

$(window).resize(function() {
	temp = jQuery(window).height();
	$("#panel_main").css("height", temp + "px");
	resize_control();
})

function create_ds_pbChuyenMon(elem,datalocal){ 
		 datalocal=jQuery.parseJSON(datalocal);  
		   $(elem).jqGrid({
		  datastr:datalocal,
		  datatype: "jsonstring" ,	
		colNames:['Tên PB chuyên môn','Tầng', 'Mô tả'],
		colModel:[			
			{name:'TenPhongBan',index:'TenPhongBan',hidden :false,width: "40%",},
            {name:'TenTang',index:'TenTang',hidden :false,width: "12%",},
			{name:'MoTa',index:'MoTa',hidden :false,width: "40%",},
                      
			
		],
		hidegrid: false,
		gridview: true,
		loadonce: true,
		scroll: false,		 
		modal:true,	 
		rowNum: 200000,
		rowList:[],		
		sortname: 'tenhangmuc',
		height:200,
		width: 500,
		viewrecords: true,	
		ignoreCase:true,
		shrinkToFit:true,
		cmTemplate: {sortable:false},
		sortorder: "desc",
		serializeRowData: function (postdata) { 	
		},
		onSelectRow: function(id){
			if(jQuery(elem).data('clicked')) {
				window._maphongban=id;
				//var selr = jQuery(elem).jqGrid('getGridParam','selrow');
				var rowData = jQuery(elem).getRowData(id); 
				
				if(window._maphongban){
					parent.postMessage('changetitle;<?=$view?>-tab;DS Bệnh nhân cho nhập viện - '+rowData['TenPhongBan']+';', '*');
				}
				//alert(222);
				window.load_luoi3='resource.php?module=<?= $modules ?>&view=<?= $view ?>&action=data_ds_benhnhanchuanhapvien_byidphongban&id_phongban='+ window._maphongban;
				window.load_luoi4='resource.php?module=<?= $modules ?>&view=<?= $view ?>&action=data_ds_benhnhandanhapvien_byidphongban&id_phongban='+ window._maphongban;
				
				$("#rowed3").jqGrid('setGridParam',{url:window.load_luoi3}).trigger('reloadGrid');
				$("#rowed4").jqGrid('setGridParam',{url:window.load_luoi4}).trigger('reloadGrid');
			}
		},
		ondblClickRow: function (id, rowIndex, columnIndex) {
					
 		},
		loadComplete: function(data) {	
		grid_filter_enter(elem) ;
		count = jQuery(elem).jqGrid('getGridParam', 'records');	
			if(count>0){
				ids =	($(elem).getDataIDs()[0]);				
				$(elem).jqGrid("setSelection",ids, true);
			}
		},	  
		
	});	
			 
	 $(elem).jqGrid('filterToolbar',{searchOperators : false,searchOnEnter:false,defaultSearch:"cn"});
	 $(elem).jqGrid('bindKeys', {} );
		
} 


    function create_grid() {
        window.kiemtrasearch = true;
        $("#rowed3").jqGrid({
            url: window.load_luoi3,
            datatype: "json",
            colNames: ['Mã BN','Họ tên BN','Tuổi','Giới tính','Đối tượng','Phòng CĐ nhập viện','Ngày CĐ','Chẩn đoán nơi giới thiệu','ID_Khoa','Khoa','ID_LuotKham','DiaChiBaoTin','BacSyDieuTri'],
            colModel: [
                {name: 'MaBenhNhan', index: 'MaBenhNhan', search: true, width: "6%", editable: false, align: 'left', hidden: false},
                {name: 'TenBenhNhan', index: 'TenBenhNhan', search: true, width: "18%", editable: false, align: 'left', hidden: false},
                {name: 'Tuoi', index: 'Tuoi', search: false, width: "4%", editable: false, align: 'center', hidden: false},
                {name: 'GioiTinh', index: 'GioiTinh', search: false, width: "4%", editable: false, align: 'center', hidden: false},
                {name: 'DoiTuong', index: 'DoiTuong', search: false, width: "7%", editable: false, align: 'center', hidden: false},
				{name: 'PhongChiDinhNhapVien', index: 'PhongChiDinhNhapVien', search: false, width: "20%", editable: false, align: 'left', hidden: false},
				{name: 'NgayChiDinh', index: 'NgayChiDinh', search: false, width: "6%", editable: false, align: 'center', hidden: false},
				{name: 'ChanDoanNoiGioiThieu', index: 'ChanDoanNoiGioiThieu', search: false, width: "20%", editable: false, align: 'left', hidden: false},  		{name: 'ID_Khoa', index: 'ID_Khoa', search: false, width: "10%", editable: false, align: 'left', hidden: true}, 
				{name: 'Khoa', index: 'Khoa', search: false, width: "10%", editable: false, align: 'left', hidden: true},  
				{name: 'ID_LuotKham', index: 'ID_LuotKham', search: false, width: "10%", editable: false, align: 'left', hidden: true}, 
				{name: 'DiaChiBaoTin', index: 'DiaChiBaoTin', search: false, width: "10%", editable: false, align: 'left', hidden: true},  
				{name: 'BacSyDieuTri', index: 'BacSyDieuTri', search: false, width: "10%", editable: false, align: 'left', hidden: true},  
            ],
            loadonce: false,
            scroll: false,
            modal: true,
            shrinkToFit: true,
            cmTemplate: {sortable: false},
            rowNum: 10000000,
            rowList: [],
            pager: '#prowed3',
            sortname: 'ThoiGianVaoKham',
            height: 100,
            width: 100,
            viewrecords: true,
            ignoreCase: true,
            sortorder: "desc",
			afterShowForm : function (formid) {
				xuongdong(formid);
				lendong(formid);
			},
            onSelectRow: function(id) {
				window.id_benhnhan=id;
				var rowData = jQuery(this).getRowData(id); 
				//alert(rowData['Khoa'])
				//parent.postMessage('changetitle;<?=$view?>-tab;DS Bệnh nhân cho nhập viện - '+rowData['Khoa']+';', '*');
            },
			onRightClickRow: function(rowid, iRow, iCol, e) {
				//alert();
                var grid = jQuery('#rowed3');
                var colModel = grid.getGridParam('colModel');

                var colName = colModel[iCol].name;
                var colIndex = colModel[iCol].index;
                var rowData = jQuery('#rowed3').getRowData(rowid);
                window.rowData_grdangcho = rowData;

                if ($.trim(rowData[colName]) != "") {
                    window.rowid_danhcho = rowid;
                    window.from = colModel[iCol].name;
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

                }

            },
            ondblClickRow: function(rowId) {
        	 var rowData = jQuery(this).getRowData(rowId); 
				$.post('resource.php?module=<?=$modules?>&view=<?=$view?>&action=data_thongtinluotkham_check&id_benhnhan='+rowId).done(function(data){
				    data = $.trim(data);
					data = data.split(';');
					if(data[1]=='KetThucKham'){
				
				 parent.postMessage('open_idbenhnhan;tao_benh_an_noi_tru;'+rowData['ID_LuotKham']+';'+rowId+';;'+rowData['ID_Khoa']+'__'+rowData['Khoa']+';'+rowData['TenBenhNhan']+'&doituong='+rowData['DoiTuong']+'&bacsydieutri='+rowData['BacSyDieuTri']+'&oper=add&diachibaotin='+rowData['DiaChiBaoTin'],'*');
					}else{
						window.luotkham=data[0];
						window.tenbn=rowData["HoLotBenhNhan"]+" "+rowData["TenBenhNhan"];
						$('#luotkhamtontai').dialog('open');
						
					}
				})
		
            },

            onselect: function(rowId, rowIndex, columnIndex) {
				
            },
            loadComplete: function(data) {
				 grid_filter_enter("#rowed3");
				var ids = $('#rowed3').jqGrid('getDataIDs');
				$("#rowed3").jqGrid("setSelection",ids[0], true);
				var rowData = jQuery(this).getRowData(ids[0]); 
				//parent.postMessage('changetitle;<?=$view?>-tab;Danh sách Bệnh nhân nhập viện - nội trú - '+rowData['Khoa']+';', '*');

            },
			//caption: "Danh sách Bệnh nhân chưa nhập viện <span class='demgio' style='display:block;'>( Tự động reload sau " + reload_luoi_danhsach + " giây)</span>"
            caption: "<span class='demgio' style='display:block;'> ( Tải lại sau " + reload_luoi_danhsach + " giây)</span>"
        });
        $("#rowed3").jqGrid('filterToolbar', {searchOperators: false, searchOnEnter: false, defaultSearch: "cn"});
		$("#rowed3").jqGrid('navGrid',"#prowed3",{ del: false,refresh:false, search:false,closeAfterEdit: true,clearAfterAdd :true,closeOnEscape : true,
		});	 
		$("#rowed3").jqGrid('bindKeys', {});
	/*$("#rowed3").jqGrid('navButtonAdd', '#prowed3', {caption: "Tạo lượt khám nội trú", buttonicon: 'ui-icon-document-b',id : 'taoluotkhamnoitru_rowed3',
            onClickButton: function() {
				var id_row = $('#rowed3').jqGrid('getGridParam', 'selrow');
				  var rowData =  $('#rowed3').getRowData(id_row);
				  
				 
            },
            title: "Tạo lượt khám nội trú",
            position: "last"
    });*/
	$("#rowed3").jqGrid('navButtonAdd', '#prowed3', {caption: "Tạo bệnh án nội trú", buttonicon: 'ui-icon-document-b',id : 'taobenhannoitru_rowed3',
            onClickButton: function() {
				var id_row = $('#rowed3').jqGrid('getGridParam', 'selrow');
				  var rowData =  $('#rowed3').getRowData(id_row);
				 $.post('resource.php?module=<?=$modules?>&view=<?=$view?>&action=data_thongtinluotkham_check&id_benhnhan='+id_row).done(function(data){
				    data = $.trim(data);
					data = data.split(';');
					if(data[1]=='KetThucKham'){
				
				 parent.postMessage('open_idbenhnhan;tao_benh_an_noi_tru;'+rowData['ID_LuotKham']+';'+id_row+';;'+rowData['ID_Khoa']+'__'+rowData['Khoa']+';'+rowData['TenBenhNhan']+'&doituong='+rowData['DoiTuong']+'&bacsydieutri='+rowData['BacSyDieuTri']+'&oper=add'+'&diachibaotin='+rowData['DiaChiBaoTin'],'*');
					}else{
						window.luotkham=data[0];
						window.tenbn=rowData["HoLotBenhNhan"]+" "+rowData["TenBenhNhan"];
						$('#luotkhamtontai').dialog('open');
						
					}
				}) 
				 
            },
            title: "Tạo bệnh án nội trú",
            position: "last"
    });
	$("#rowed3").jqGrid('navButtonAdd', '#prowed3', {caption: "Đặt hẹn điều trị nội trú", buttonicon: 'ui-icon-document-b',id : 'dathendieutrinoitru_rowed3',
            onClickButton: function() {
				var id_row = $('#rowed3').jqGrid('getGridParam', 'selrow');
				  var rowData =  $('#rowed3').getRowData(id_row); 
				
				  
				 
            },
            title: "Đặt hẹn điều trị nội trú",
            position: "last"
    });
		

        timer_danhsach("start");
        timer_title_danhsach("start");

        //duyệt tìm các ô đang search có focus để dừng xếp hàng
        $('#gbox_rowed3 .ui-search-table').find(':input[type=text]').each(function() {
            $("#" + this.id).focusin(function() {
                $('#rowed3').setGridParam({loadonce: true}).trigger('reloadGrid');
                window.kiemtrasearch = false;

                timer_danhsach("stop");
                timer_title_danhsach("stop");
                powerXepHang_luoidangcho = 0;
				

                //$('#gbox_rowed3 .ui-jqgrid-title span.demgio').blink({delay: 500});				
            });
			$("#" + this.id).focusout(function() {
				 $('#rowed3').setGridParam({loadonce: false, datatype: "json"}).trigger('reloadGrid');
				window.kiemtrasearch = true;

				timer_danhsach("start");
				timer_title_danhsach("start");
				$("#stopxephang").removeClass("ui-state-disabled");
				$("#playxephang").addClass("ui-state-disabled");
				$("#stopxephang2").removeClass("ui-state-disabled");
				$("#playxephang2").addClass("ui-state-disabled");
			});
        });
		
        //duyệt tìm các ô đang search có focus để dừng xếp hàng 

        $('#gbox_rowed3 .ui-jqgrid-title span.demgio').click(function() {
            if (window.kiemtrasearch == false) {
                $('#rowed3').setGridParam({loadonce: false, datatype: "json"}).trigger('reloadGrid');
                window.kiemtrasearch = true;

                timer_danhsach("start");
                timer_title_danhsach("start");
				$("#stopxephang").removeClass("ui-state-disabled");
				$("#playxephang").addClass("ui-state-disabled");
				$("#stopxephang2").removeClass("ui-state-disabled");
				$("#playxephang2").addClass("ui-state-disabled");
                //$('#gbox_rowed3 .ui-jqgrid-title span.demgio').blink({status: true});		
            }
        });
    }
    function create_grid2() {
        $("#rowed4").jqGrid({
            url: window.load_luoi4,
            datatype: "json",
            colNames: ['Mã BN','Họ tên BN','Tuổi','Giới tính','Đối tượng','Khoa nhập viện','','',''],
            colModel: [
                {name: 'MaBenhNhan', index: 'MaBenhNhan', search: true, width: "10%", editable: false, align: 'left', hidden: false},
                {name: 'TenBenhNhan', index: 'TenBenhNhan', search: true, width: "27%", editable: false, align: 'left', hidden: false},
                {name: 'Tuoi', index: 'Tuoi', search: false, width: "5%", editable: false, align: 'center', hidden: false},
                {name: 'GioiTinh', index: 'GioiTinh', search: false, width: "8%", editable: false, align: 'center', hidden: false},
                {name: 'DoiTuong', index: 'DoiTuong', search: false, width: "10%", editable: false, align: 'center', hidden: false},
				{name: 'KhoaNhap', index: 'KhoaNhap', search: false, width: "20%", editable: false, align: 'left', hidden: false},
				{name: 'ID_Khoa', index: 'ID_Khoa', search: false, width: "10%", editable: false, align: 'left', hidden: true}, 
				{name: 'Khoa', index: 'Khoa', search: false, width: "10%", editable: false, align: 'left', hidden: true},  
				{name: 'ID_LuotKham', index: 'ID_LuotKham', search: false, width: "10%", editable: false, align: 'left', hidden: true},
            
            ],
            loadonce: false,
            scroll: false,
            modal: true,
            shrinkToFit: true,
            cmTemplate: {sortable: false},
            rowNum: 10000000,
            rowList: [],
            pager: '#prowed4',
            sortname: 'ThoiGianVaoKham',
            height: 100,
            width: 100,
            viewrecords: true,
            ignoreCase: true,
            sortorder: "desc",
			afterShowForm : function (formid) {
				xuongdong(formid);
				lendong(formid);
			},
            onRightClickRow: function(rowid, iRow, iCol, e) {
				var grid = jQuery('#rowed4');
                var colModel = grid.getGridParam('colModel');

                var colName = colModel[iCol].name;
                var colIndex = colModel[iCol].index;
                var rowData = jQuery('#rowed4').getRowData(rowid);
                window.rowData_grdangcho = rowData;

                if ($.trim(rowData[colName]) != "") {
                    window.rowid_danhcho = rowid;
                    window.from = colModel[iCol].name;
                    if ($("#menu2").width() + e.pageX > $(document).width()) {
                        $("#menu2").css('left', e.pageX - $("#menu2").width() + "px");
                    } else {
                        $("#menu2").css('left', e.pageX + "px");
                    }
                    if ($("#menu2").height() + 30 + e.pageY > $(document).height()) {
                        $("#menu2").css('top', e.pageY - $("#menu2").height() + "px");
                    } else {
                        $("#menu2").css('top', e.pageY + "px");
                    }
                    $("#menu2").show(300);

                }

            },
            ondblClickRow: function(rowId) {
        		var rowData = jQuery(this).getRowData(rowId); 
				$.post('resource.php?module=<?=$modules?>&view=<?=$view?>&action=data_thongtinluotkham_check&id_benhnhan='+rowId).done(function(data){
				    data = $.trim(data);
					data = data.split(';');
					//if(data[1]=='KetThucKham'){
						window.luotkham=data[0];
						window.tenbn=rowData["HoLotBenhNhan"]+" "+rowData["TenBenhNhan"];
						parent.postMessage('open_idbenhnhan;tao_benh_an_noi_tru;'+rowData['ID_LuotKham']+';'+rowId+';;'+rowData['ID_Khoa']+'__'+rowData['Khoa']+';'+rowData['TenBenhNhan']+'&oper=edit&id_ttluotkham='+luotkham,'*');	
					//}
				})
          
            },
            loadComplete: function(data) {
                ids = $('#rowed4').jqGrid('getDataIDs');
				$("#danhapvien_view").html($("#rowed4").getGridParam("reccount"));
	         	$("#rowed4").jqGrid("setSelection",ids[0], true);
             

            },
            caption: " Danh sách Bệnh nhân đã nhập viện [ <span id='danhapvien_view'></span> ]"

        });

        $("#rowed4").jqGrid('filterToolbar', {searchOperators: false, searchOnEnter: false, defaultSearch: "cn"});
      //  $("#rowed4").jqGrid('navGrid', "#prowed4", {add: false, edit: false, del: false, search: false, refresh: true, closeAfterEdit: true, clearAfterAdd: true, navkeys: [true, 38, 40], closeOnEscape: true});
	  $("#rowed4").jqGrid('bindKeys', {});
	  //duyệt tìm các ô đang search có focus để dừng xếp hàng
        $('#gbox_rowed4 .ui-search-table').find(':input[type=text]').each(function() {
			//console.log(this.id);
            $("#gbox_rowed4 #" + this.id).focusin(function() {
                $('#rowed4').setGridParam({loadonce: true}).trigger('reloadGrid');
                window.kiemtrasearch = false;

                timer_danhsach("stop");
                timer_title_danhsach("stop");
                powerXepHang_luoidangcho = 0;

                //$('#gbox_rowed3 .ui-jqgrid-title span.demgio').blink({delay: 500});				
            });
			$("#gbox_rowed4 #" + this.id).focusout(function() {
				 $('#rowed4').setGridParam({loadonce: false, datatype: "json"}).trigger('reloadGrid');
				window.kiemtrasearch = true;

				timer_danhsach("start");
				timer_title_danhsach("start");
				$("#stopxephang").removeClass("ui-state-disabled");
				$("#playxephang").addClass("ui-state-disabled");
				$("#stopxephang2").removeClass("ui-state-disabled");
				$("#playxephang2").addClass("ui-state-disabled");
			});
        });
			
        //duyệt tìm các ô đang search có focus để dừng xếp hàng 

        $('#gbox_rowed4 .ui-jqgrid-title span.demgio').click(function() {
            if (window.kiemtrasearch == false) {
                $('#rowed4').setGridParam({loadonce: false, datatype: "json"}).trigger('reloadGrid');
                window.kiemtrasearch = true;

                timer_danhsach("start");
                timer_title_danhsach("start");
				$("#stopxephang").removeClass("ui-state-disabled");
				$("#playxephang").addClass("ui-state-disabled");
				$("#stopxephang2").removeClass("ui-state-disabled");
				$("#playxephang2").addClass("ui-state-disabled");
                //$('#gbox_rowed3 .ui-jqgrid-title span.demgio').blink({status: true});		
            }
        });

    }
  
    function create_layout() {
        $('#panel_main').layout({
            resizerClass: 'ui-state-default'
                    , east: {
                resizable: true
                        , size: "40%"
                        , spacing_closed: 27
                        , togglerLength_closed: 85
                        , togglerAlign_closed: "center"
                        , togglerContent_closed: "<div id='menu_toggle'>X<BR>O<BR>N<BR>G</div>"
                        , togglerTip_closed: "Open & Pin Menu"
                        , sliderTip: "Slide Open Menu"
                        , slideTrigger_open: "mouseover"
                        , fxSettings_close: {easing: "easeOutQuint"}
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

                        , fxName: "drop"		// none, slide, drop, scale
                        , fxSpeed_open: 450
                        , fxSpeed_close: 450
                        , fxSettings_open: {easing: "easeInQuint"}
                , fxSettings_close: {easing: "easeOutQuint"}

                , onresize_end: function() {
                    resize_control();
                }
                , onopen_end: function() {


                }
                , onclose_end: function() {



                }
            }
        });
    }
    var reload_luoi_danhsach =<?php echo (get_system_config_("GD2_ThoiGianRefreshFormDSNhapVienNoiTru")) ?>;

    function timer_danhsach(_value) {
        if (_value != "stop") {
            timer = setInterval(function() {
                if (window.kiemtrasearch == true) {
					//console.log(window._loadluoi);
					$("#rowed3").jqGrid('setGridParam',{url:window.load_luoi3}).trigger('reloadGrid');
					$("#rowed4").jqGrid('setGridParam',{url:window.load_luoi4}).trigger('reloadGrid');
                   /*if(window._loadluoi==1){
					   	$("#rowed3").jqGrid('setGridParam',{url:'resource.php?module=<?= $modules ?>&view=<?= $view ?>&action=data_ds_benhnhanchuanhapvien_byidphongban&id_phongban='+ window.idphongban}).trigger('reloadGrid');
						$("#rowed4").jqGrid('setGridParam',{url:'resource.php?module=<?= $modules ?>&view=<?= $view ?>&action=data_ds_benhnhandanhapvien_byidphongban&id_phongban='+ window.idphongban}).trigger('reloadGrid');
					}else if(window._loadluoi==2){
						$("#rowed3").jqGrid('setGridParam',{url:'resource.php?module=<?= $modules ?>&view=<?= $view ?>&action=data_ds_benhnhanchuanhapvien'}).trigger('reloadGrid');
						$("#rowed4").jqGrid('setGridParam',{url:'resource.php?module=<?= $modules ?>&view=<?= $view ?>&action=data_ds_benhnhandanhapvien'}).trigger('reloadGrid');
					}else{
			
						$("#rowed3").jqGrid('setGridParam',{url:'resource.php?module=<?= $modules ?>&view=<?= $view ?>&action=data_ds_benhnhanchuanhapvien_byidphongban&id_phongban='+ window._maphongban}).trigger('reloadGrid');
						$("#rowed4").jqGrid('setGridParam',{url:'resource.php?module=<?= $modules ?>&view=<?= $view ?>&action=data_ds_benhnhandanhapvien_byidphongban&id_phongban='+ window._maphongban}).trigger('reloadGrid');
						}*/
                }
            }, (reload_luoi_danhsach * 1000));
            powerXepHang_luoidangcho = 1;
        } else {
            clearInterval(timer);
            powerXepHang_luoidangcho = 0;
        }
    }
    function timer_title_danhsach(_value) {
        if (_value != "stop") {
            var bodem = 0;

            var tam = reload_luoi_danhsach;

            timer1 = setInterval(function() {
                if (window.kiemtrasearch == true) {
                    $('#gbox_rowed3 .ui-jqgrid-title span.demgio').html(" Danh sách Bệnh nhân chưa nhập viện [ "+$("#rowed3").getGridParam("reccount")+" ] (Tải lại sau " + tam + " giây)");
                    $('#gbox_rowed4 .ui-jqgrid-title span.demgio').html(" Danh sách Bệnh nhân đã nhập viện [ "+$("#rowed4").getGridParam("reccount")+" ]");
                    bodem += 1;
                    tam--;
                    if (reload_luoi_danhsach == bodem) {
                        bodem = 0;
                        tam = reload_luoi_danhsach;
                    }
                }
            }, (1000));
        } else
        {
           // $('#gbox_rowed3 .ui-jqgrid-title span.demgio').html("Danh sách Bệnh nhân chưa nhập viện (Đang dừng xếp hàng. Click vào đây để bật xếp hàng)");
            clearInterval(timer1);

        }
    }

function resize_control() {
//	cao_left = $(".left_col").height() - 104;
	$("#rowed3").setGridWidth($(".left_col").width() - 11);
	$("#rowed3").setGridHeight($(".left_col").height()-175);
	$("#rowed4").setGridWidth($(".right_col").width() - 11);
	$("#rowed4").setGridHeight($(".right_col").height() - 94);
	 $("#demo").css('width',$(".left_col").width() - 16);
}

    function moghichu(id_benhnhan, hoten) {
        elem = 1 + Math.floor(Math.random() * 1000000000);
        dialog_main("Ghi chú của bệnh nhân: " + hoten, 100, 70, elem, 'resource.php?module=hanhchinh&view=ghi_chu&id_form=230&idbenhnhan=' + id_benhnhan)
    }

function listCookies() {
    var theCookies = document.cookie.split(';');
    var aString = '';
    for (var i = 1 ; i <= theCookies.length; i++) {
        aString += i + ' ' + theCookies[i-1] + "\n";
    }
    return aString;
}

</script>

