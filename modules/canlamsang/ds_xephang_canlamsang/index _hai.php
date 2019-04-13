<!--<link rel="stylesheet" href="../../../css/form_css.css" type="text/css" media="screen"/>-->
<style type="text/css">
    #rowed3 td,#rowed4 td,#rowed5 td,#rowed6 td{

        font-size:11px!important;	   
    }#rowed6{

        margin-top:30px;   
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
        width:300px;
        display:inline-block;
		margin-left:30px;
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
	#abc1,#abc21{
	 width:130px!important;
	}#canh{
	 height:4px!important;
	}#com_thuocnhom{
	 width: 140px!important;
	}
	 .demgio{
        cursor:pointer;
    }
</style>


<body> 
    <div class="ui-layout-center left_col" > 
       	<div id='demo' style="margin-left:5px;margin-top:2px;;margin-botton:2px;margin-bottom: 2px;display:inline-block">
         <div style="display:inline-block"><label style="font-weight:bold">Xem bệnh nhân CLS:</label></div>
            <div style="display:inline-block"><input type="radio" id="thuocnhom" name="thuocnhom" value="thuocnhom"/><label>Thuộc nhóm</label></div>
			<select id='com_thuocnhom' class='com_thuocnhom' >
			</select>
			<a id="add_new" class="fm-button ui-state-default ui-corner-all " style=" margin-left:30px!important;vertical-align:top;width:16px;height:14px;"  ><span style="margin-top:-2px;margin-right:-22px!important" class="ui-icon ui-icon-circle-plus"></span></a>
            <div style="display:inline-block"><input type="radio" id="thuocnhom" name="thuocnhom" value="thuochangmuckham"/><label>Thuộc hạng mục khám</label>      </div>
			<select id='abc2' class='abc2' class="easyui-combobox" name="dept" style="width:20px;" >
			<option>222222 </option>
			<option>3333333 </option>
			</select>
			<a class="fm-button ui-state-default ui-corner-all " style=" margin-left:30px!important;vertical-align:top;width:60px;height:14px;"  >Xem tất cả</a>
        </div>
        <table id="rowed3" ></table>
        <div class="grid1">
            <div class="ghichu" style=" width: 20px; background:#FF4500">-----</div>
            <div class="ghichu" style="border: none">Đã chờ quá 5'</div>
        </div>
        <div class="grid1">
            <div class="ghichu" style=" width: 20px; background:#FFFF80 " >-----</div>
            <div class="ghichu" style="border: none">Đã chờ dưới 5'</div>
        </div>

        <table id="rowed4" ></table>
         <div class="grid1">
            <div class="ghichu" style=" width: 20px; background:#FF4500">-----</div>
            <div class="ghichu" style="border: none">< 15' nữa đến giờ hẹn KQ hoặc đã quá hẹn</div>
        </div>
        <div class="grid1">
            <div class="ghichu" style=" width: 20px; background:#FFFF80 " >-----</div>
            <div class="ghichu" style="border: none">< 30' nữa đến giờ hẹn KQ</div>
        </div>
    </div>

    <div class="ui-layout-east right_col " >   
	<table id="rowed5" ></table>
	<div id='canh'> </div>
	<table id="rowed6" ></table>
	
	</div>





</body>
</html> 

<script type="text/javascript">
    jQuery(document).ready(function() {
        //$('body').layout({ applyDemoStyles: true });
		load_select1();
        create_layout();

        create_grid();
        create_grid2();
        create_grid3();
		create_grid4();
        //alert($(".left_col").width() + "  "+ $(".right_col").width());

        $('.ui-layout-east,.ui-layout-center').bind('resize', function() {
            $("#rowed3,#rowed4 ").setGridWidth($(".left_col").width() - 4);
            $("#rowed5,#rowed6 ").setGridWidth($(".right_col").width() - 4);
        }).trigger('resize');
        $("#rowed5,#rowed6 ").setGridHeight($(".right_col").height() - 375);
		
		//autocompleted_combobox("#abc");
		autocompleted_combobox("#abc2");
		
		$("#add_new").click(function(e){
			//alert('ban da kich vao nut');
			links='resource.php?module=danhmuc&view=danh_muc_dinhmucgiamgia&id_form=60&id_loai=undefined';
			elem=1 + Math.floor(Math.random() * 1000000000); 
			width=90;
			height=90;   
			dialog_add_dm("Danh mục định mức giảm giá",width,height,elem,links,load_select1); 
		})
		$("#com_thuocnhom").change(function(){ 
           alert($("#com_thuocnhom").val());        
        });
		
    })

    var lastsel;
    function create_grid() {
		 window.kiemtrasearch = true;
        $("#rowed3").jqGrid({
            url: 'resource.php?module=<?= $modules ?>&view=<?= $view ?>&action=data_ds_xephang_dangcho',
            datatype: "json",
            colNames: ['LuotKham', 'Mã BN', 'Họ tên', 'Tuổi', 'Giới tính', 'Hạng mục khám', 'Giờ hẹn', 'Giờ chỉ định','Người chỉ định','Ghi chú','Gọi khám'],
            colModel: [
                {name: 'ID_Kham', index: 'ID_Kham', search: false, width: "2%", editable: false, align: 'left', hidden: true},
                {name: 'MaBenhNhan', index: 'MaBenhNhan', search: false, width: "1%", editable: false, align: 'left', hidden: false},
                {name: 'TenBenhNhan', index: 'TenBenhNhan', search: false, width: "2%", editable: false, align: 'left', hidden: false},
                {name: 'Tuoi', index: 'Tuoi', search: false, width: "1%", editable: false, align:'center', hidden: false},
                {name: 'GioiTinh', index: 'GioiTinh', search: false, width: "1%", editable: false, align: 'center', hidden: false},
                {name: 'TenLoaiKham', index: 'TenLoaiKham', search: false, width: "2%", editable: false, align: 'left', hidden: false},
                {name: 'GioHenKham', index: 'GioHenKham', search: false, width: "1%", editable: true, align: 'center', hidden: false, edittype: "text"},
				{name: 'NgayGioTao', index: 'NgayGioTao', search: false, width: "1%", editable: true, align: 'center', hidden: false, edittype: "text"},
				{name: 'TenBSChiDinh', index: 'TenBSChiDinh', search: false, width: "2%", editable: false, align: 'left', hidden: false},
				{name: 'GhiChu', index: 'GhiChu', search: false, width: "2%", editable: false, align: 'left', hidden: false},
                {name: 'GoiKham', index: 'GoiKham', search: false, width: "2%", editable: false, align: 'left', hidden: false},
            ],
            loadonce: true,
            scroll: 1,
            modal: true,
            rowNum: 30,
            rowList: [30, 50, 70],
            pager: '#prowed3',
            sortname: 'GioHenKham',
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

                if (id !== lastsel) {
                    $("#rowed3").jqGrid('restoreRow', lastsel);
                    $("#rowed3").jqGrid('editRow', id, true);
                    lastsel = id;
                } else {
                    $("#rowed3").jqGrid('restoreRow', lastsel);
                    lastsel = "";
                    // alert(id)
                }
            },
            ondblClickRow: function(rowId, rowIndex, columnIndex) {
                $(".ui-icon-pencil").trigger('click');
            },
            loadComplete: function(data) {
                ids = $('#rowed3').jqGrid('getDataIDs');
                for (i = 0; i < ids.length; i++) {
                    var rowData = jQuery('#rowed3').getRowData(ids[i]);
                   
                    /* if (rowData['PhanTramVat'] == 10) {
                     $('#rowed3').jqGrid('setCell', ids[i], "PhanTramVat", "", {background: 'red'});
                     }*/
                }



                //kiemtra_dk_tg_load_completed();


                //$("#rowed3").setColProp('ID_PhongBanCha', { editoptions: { value: ""} });				 
            },
            caption: "Bệnh nhân chưa khám" + " <span class='demgio'> - tự động reload sau " + reload_luoi_danhsach + " giây</span>"
        });
        $("#rowed3").jqGrid('navGrid', "#prowed3", {add: permission["add"], edit: permission["edit"], del: permission["delete"], search: permission["search"], closeAfterEdit: true, clearAfterAdd: true, closeOnEscape: true}, //options						 
        {recreateForm: true, height: 'auto', width: 'auto', reloadAfterSubmit: false, url: 'resource.php?module=<?= $modules ?>&view=<?= $view ?>&action=controller&oper=edit', closeOnEscape: true, modal: true, recreateForm: true, savekey: [true, 121],
            afterSubmit: function(response, postdata) {
                if (response.responseText == 1) {
                    var success = false;
                    var new_id = "<?php get_text1("sua_khongthanhcong")?>";
                } else {
                    tooltip_message("<?php get_text1("sua_thanhcong")?>");
                    var success = true;
                    var new_id = "<?php get_text1("sua_thanhcong")?>";
                }
                ;
                return [success, new_id];
            },
            beforeShowForm: function(formid) {
                canhgiua(formid);
                autocompleted_combobox("#ID_KhuVuc");
                autocompleted_combobox("#ID_CongTy");
                autocompleted_combobox("#ID_PhongBanCha");
            },
            afterShowForm: function(formid) {
              

                xuongdong(formid);
                lendong(formid);
                $("#sKhuvuc").click(function(e) {
                    //temp=($(this).attr("role")).split(":");
                    links = "resource.php?module=danhmuc&view=danh_muc_thuoc&id_form=12"
                    elem = 1 + Math.floor(Math.random() * 1000000000);
                    width = 80;
                    height = 80;
                    dialog_main("Danh mục khu vực", width, height, elem, links);
                })
            },
            onClose: function(formid) {
                $("#editmodrowed3").css("box-shadow", "");
            }

        }, // edit options
        {height: 'auto', width: 'auto', reloadAfterSubmit: true, url: 'resource.php?module=<?= $modules ?>&view=<?= $view ?>&action=controller&oper=add', closeOnEscape: true, closeAfterAdd: false, modal: true, addedrow: "first", recreateForm: true, savekey: [true, 121]
                    , afterSubmit: function(response, postdata) {
                temp = String(response.responseText).split(";");
                if (temp[0] == 1) {
                    var success = false;
                    var new_id = "<?php get_text1("luu_khongthanhcong")?>";
                } else {
                    tooltip_message("<?php get_text1("luu_thanhcong")?>");
                    var success = true;
                    var new_id = "<?php get_text1("luu_thanhcong")?>";
                    //load_phongban_cha()
                    re_create_grid();
                }
                ;
                return [success, new_id];
            },
            afterComplete: function(response, postdata, formid) {
                temp = String(response.responseText).split(";");
                $("#jqg" + window.id_rowed3).attr("id", $.trim(temp[1]));
                $("#" + $.trim(temp[1] + "> td")).trigger("click");
                window.id_rowed3++;
                load_phong_ban(true);

            },
            beforeSubmit: function(postdata, formid) {
                if (typeof(window.id_rowed3) == 'undefined') {
                    window.id_rowed3 = 1;
                }
                var success = true;
                var new_id = "";
                return [success, new_id];
            },
            beforeShowForm: function(formid) {
                canhgiua(formid);
            },
            afterShowForm: function(formid) {
                autocompleted_combobox("#ID_KhuVuc");
                autocompleted_combobox("#ID_CongTy");
                autocompleted_combobox("#ID_PhongBanCha");
                xuongdong(formid);
                lendong(formid);
            },
            onClose: function(formid) {
                $("#editmodrowed3").css("box-shadow", "");
            }
        }, // add options							  
        {reloadAfterSubmit: false, url: 'resource.php?module=<?= $modules ?>&view=<?= $view ?>&action=controller&oper=del', navkeys: [true, 38, 40], closeOnEscape: true,
            afterSubmit: function(response, postdata) {
                if (response.responseText == 1) {
                    var success = false;
                    var new_id = "<?php get_text1("xoa_khongthanhcong")?>";
                } else {
                    tooltip_message("<?php get_text1("xoa_thanhcong")?>");
                    var success = true;
                    var new_id = "<?php get_text1("xoa_thanhcong")?>";
                    load_phong_ban(true);
                }
                ;
                return [success, new_id];
            }
        }, // del options
        {reloadAfterSubmit: true, height: 250, width: 600, sopt: ["cn"], url: 'resource.php?module=<?= $modules ?>&view=<?= $view ?>&action=data_benh_nhan&q=2', closeOnEscape: true,
            /*beforeShowSearch:function(formid){				
             }*/ // search options		
        } // search options						 

        );
		timer_danhsach("start");
        timer_title_danhsach("start");
		
        $("#rowed3").setGridWidth($(window).width() - 100);
        $("#rowed3").setGridHeight($(window).height() - $("#form_danh_muc_phong_ban").height() - 392);
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
        $("#rowed4").jqGrid({
            url: 'resource.php?module=<?= $modules ?>&view=<?= $view ?>&action=data_ds_xephang_dangkham',
            datatype: "json",
            colNames: ['LuotKham', 'STT', 'Hạng mục khám', '<?php get_text1("hoten")?>', '<?php get_text1("tuoi")?>', '<?php get_text1("gioitinh")?>', '<?php get_text("gioden")?>','<?php get_text("giohenKQ")?>'],
            colModel: [
                {name: 'ID_LuotKham', index: 'ID_LuotKham', search: false, width: "2%", editable: false, align: 'left', hidden: true},
                {name: 'MaBenhNhan', index: 'MaBenhNhan', search: false, width: "1%", editable: false, align: 'left', hidden: false},
                {name: 'TenPhanLoaiKham', index: 'TenPhanLoaiKham', search: false, width: "2%", editable: false, align: 'left', hidden: false},
                {name: 'TenBenhNhan', index: 'TenBenhNhan', search: false, width: "2%", editable: false, align: 'left', hidden: false},
                {name: 'Tuoi', index: 'Tuoi', search: false, width: "1%", editable: false, align: 'left', hidden: false},
                {name: 'GioiTinh', index: 'GioiTinh', search: false, width: "1%", editable: false, align: 'left', hidden: false},
                {name: 'ThoiGianVaoKham', index: 'ThoiGianVaoKham', search: false, width: "1%", editable: true, align: 'center', hidden: false, edittype: "text"},
                {name: 'NgayGioHenTraKQ', index: 'NgayGioHenTraKQ', search: false, width: "1%", editable: true, align: 'center', hidden: false, edittype: "text"},
                    
            ],
            loadonce: true,
            scroll: false,
            modal: true,
            rowNum: 30,
            rowList: [30, 50, 70],
            pager: '#prowed4',
            sortname: 'ThoiGianVaoKham',
            height: 100,
            width: 100,
            viewrecords: true,
            ignoreCase: true,
            shrinkToFit: true,
            //hoverrows:false,
            //jsonReader:{repeatitems:true,subgrid:{repeatitems:false}},	
            sortorder: "desc",
            caption: "<?php get_text("BN_dangkham")?>",
			onSelectRow: function(id) {             
			//Click chọn sẽ hiển thị vùng bên phải
				//$("#rowed4").jqGrid('setGridParam',{url:"resource.php?module=<?=$modules?>&view=<?=$view?>&action=&ds_quyenhienthiq=1&id="+id,page:1}).trigger('reloadGrid');				
				alert(id);
            },
        });
        $("#rowed4").setGridWidth($(window).width() - 100);
        $("#rowed4").setGridHeight($(window).height() - $("#k").height() - 393);
    }
    function create_grid3()
    {
        $("#rowed5").jqGrid({
            url: 'resource.php?module=<?= $modules ?>&view=<?= $view ?>&action=data_ds_xephang_ketthuckham',
            datatype: "json",
            colNames: ['LuotKham', '<?php get_text1("maBN")?>', '<?php get_text("phanloai")?>', '<?php get_text1("hoten")?>', '<?php get_text1("tuoi")?>', '<?php get_text1("gioitinh")?>', '<?php get_text("gioden")?>'],
            colModel: [
                {name: 'ID_LuotKham', index: 'ID_LuotKham', search: false, width: "2%", editable: false, align: 'left', hidden: true},
                {name: 'MaBenhNhan', index: 'MaBenhNhan', search: false, width: "1%", editable: false, align: 'left', hidden: false},
                {name: 'TenPhanLoaiKham', index: 'TenPhanLoaiKham', search: false, width: "2%", editable: false, align: 'left', hidden: false},
                {name: 'TenBenhNhan', index: 'TenBenhNhan', search: false, width: "2%", editable: false, align: 'left', hidden: false},
                {name: 'Tuoi', index: 'Tuoi', search: false, width: "1%", editable: false, align: 'left', hidden: false},
                {name: 'GioiTinh', index: 'GioiTinh', search: false, width: "1%", editable: false, align: 'left', hidden: false},
                {name: 'ThoiGianVaoKham', index: 'ThoiGianVaoKham', search: false, width: "1%", editable: true, align: 'center', hidden: false, edittype: "text"},
            ],
            loadonce: true,
            scroll: false,
            modal: true,
            rowNum: 30,
            rowList: [30, 50, 70],
            pager: '#prowed5',
            sortname: 'ThoiGianVaoKham',
            height: 100,
            width: 100,
            viewrecords: true,
            ignoreCase: true,
            shrinkToFit: true,
            //hoverrows:false,
            //jsonReader:{repeatitems:true,subgrid:{repeatitems:false}},	
            sortorder: "desc",
            caption: "<?php get_text("cachangmuckhamchidinh")?>"
        });
        $("#rowed5").setGridWidth($(window).width() - 100);
        $("#rowed5").setGridHeight($(window).height() - $("#kha").height() - 400);
    }
	 function create_grid4()
    {
        $("#rowed6").jqGrid({
            url: 'resource.php?module=<?= $modules ?>&view=<?= $view ?>&action=data_ds_xephang_ketthuckham',
            datatype: "json",
            colNames: ['LuotKham','Mã BN','Họ tên','Tuổi','Giới','Hạng mục khám','Giờ h.tất'],
            colModel: [
                {name: 'ID_LuotKham', index: 'ID_LuotKham', search: false, width: "2%", editable: false, align: 'left', hidden: true},
                {name: 'MaBenhNhan', index: 'MaBenhNhan', search: false, width: "1%", editable: false, align: 'left', hidden: false},
                {name: 'TenBenhNhan', index: 'TenBenhNhan', search: false, width: "2%", editable: false, align: 'left', hidden: false},
                {name: 'Tuoi', index: 'Tuoi', search: false, width: "1%", editable: false, align: 'left', hidden: false},
                {name: 'GioiTinh', index: 'GioiTinh', search: false, width: "1%", editable: false, align: 'left', hidden: false},
				 {name: 'TenLoaiKham', index: 'TenLoaiKham', search: false, width: "1%", editable: false, align: 'left', hidden: false},
                {name: 'NgayGioKetThuc', index: 'NgayGioKetThuc', search: false, width: "1%", editable: true, align: 'center', hidden: false, edittype: "text"},
                        
            ],
            loadonce: true,
            scroll: 1,
            modal: true,
            rowNum: 100,
            rowList: [30, 50, 70],
            pager: '#prowed6',
            sortname: 'NgayGioKetThuc',
            height: 100,
            width: 100,
            viewrecords: true,
            ignoreCase: true,
            shrinkToFit: true,
            //hoverrows:false,
            //jsonReader:{repeatitems:true,subgrid:{repeatitems:false}},	
            sortorder: "desc",
            caption: "Bệnh nhân đã hoàn tất"
        });
        $("#rowed6").setGridWidth($(window).width() - 100);
        $("#rowed6").setGridHeight($(window).height() - $("#k").height() - 400);
    }


   
    
    function create_layout() {
        $('body').layout({
            resizerClass: 'ui-state-default'
                    , east: {
                resizable: true
                        , size: 450
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
                    $("#rowed3,#rowed4 ").setGridWidth($(".left_col").width() - 4);
                    $("#rowed5,#rowed6 ").setGridWidth($(".right_col").width() - 4);

                }
                , onopen_end: function() {
                    $("#rowed3,#rowed4 ").setGridWidth($(".left_col").width() - 4);
                    $("#rowed5,#rowed6 ").setGridWidth($(".right_col").width() - 4);

                }
                , onclose_end: function() {
                    $("#rowed3,#rowed4 ").setGridWidth($(".left_col").width() - 4);
                    $("#rowed5,#rowed6 ").setGridWidth($(".right_col").width() - 4);

                }

            }
            , center: {
                resizable: true
                        , size: 910

                        , fxName: "drop"		// none, slide, drop, scale
                        , fxSpeed_open: 450
                        , fxSpeed_close: 450
                        , fxSettings_open: {easing: "easeInQuint"}
                , fxSettings_close: {easing: "easeOutQuint"}

                , onresize_end: function() {
                    $("#rowed3,#rowed4 ").setGridWidth($(".left_col").width() - 4);
                    $("#rowed5,#rowed6 ").setGridWidth($(".right_col").width() - 4);

                }
                , onopen_end: function() {
                    $("#rowed3,#rowed4 ").setGridWidth($(".left_col").width() - 4);
                    $("#rowed5,#rowed6 ").setGridWidth($(".right_col").width() - 4);

                }
                , onclose_end: function() {
                    $("#rowed3,#rowed4 ").setGridWidth($(".left_col").width() - 4);
                    $("#rowed5,#rowed6 ").setGridWidth($(".right_col").width() - 4);


                }
            }
        });
    }
function load_select1(){
	window.tennhom = $.ajax({url: 'resource.php?module=web_services&function=get_auto_edit_option&action=index&term=&status=2&tables=NhomXepHang&id=ID_NhomXepHang&name=TenNhom', async: false, success: function(data, result) {if (!result) alert('Không load được danh mục phòng ban');}}).responseText;	
	
	$('#demo').setColProp('com_thuocnhom', { editoptions: { value: tennhom} });
	$('#com_thuocnhom').empty();
	create_select("#com_thuocnhom",tennhom);
}

  var reload_luoi_danhsach =<?php echo (get_system_config_("ThoiGianRefreshHangDoiLamSang")) ?>;
    function timer_danhsach(_value) {
        if (_value != "stop") {
            timer = setInterval(function() {
                if (window.kiemtrasearch == true) {
                    $('#rowed3').setGridParam({loadonce: false, datatype: "json"}).trigger('reloadGrid');
                }
            }, (reload_luoi_danhsach * 1000));
        } else {
            clearInterval(timer);
        }
    }
    function timer_title_danhsach(_value) {
        if (_value != "stop") {
            var bodem = 0;
            var tam = reload_luoi_danhsach;
            timer1 = setInterval(function() {
                if (window.kiemtrasearch == true) {
                    $('#gbox_rowed3 .ui-jqgrid-title span.demgio').html("- tự động reload sau " + tam + " giây");
                    bodem += 1;
                    tam--;
                    if (reload_luoi_danhsach == bodem) {
                        bodem = 0;
                        tam = reload_luoi_danhsach;
                    }
                }
            }, (1000));
        } else {
            clearInterval(timer1);
        }
    }
</script>