<!--author:khatm-->
<style type="text/css">
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
    .demgio{
        cursor:pointer;
    }
    #gbox_rowed3, #gbox_rowed4, #gbox_rowed5, #gbox_rowed6, #gbox_rowed7{
        margin-left:4px;
        margin-top:5px;
        box-shadow:0px 0px 10px #a0a0a0;
        border:1px solid #919191; 
    }
    #menu { 
        width: 150px!important; 
        display:none; 
        position:absolute;  	 
        box-shadow:0px 0px 3px #333;
        z-index:100000;	 	
    }
    #calendar {
        width: 900px;
        margin: 0 auto;	 
    }
</style>


<body> 
    <ul id="menu" >     
        <li><a id="chuasansang" href="#"><span class="ui-icon ui-icon-closethick"></span>Chưa sẵn sàng</a></li>
        <li><a id="huyxephang" href="#"><span class="ui-icon ui-icon-trash"></span>Hủy xếp hàng</a></li>
        <li><a id="thongtinbenhnhan" href="#"><span class="ui-icon ui-icon-person"></span>Thông tin bệnh nhân</a></li>
        <li><a id="thongtinluotkham" href="#"><span class="ui-icon ui-icon-pencil"></span>Thông tin lượt khám</a></li>
        <li><a id="medicalreport" href="#"><span class="ui-icon ui-icon-plusthick"></span>Medical Report</a></li>
        <li><a id="stopxephang" href="#"><span class="ui-icon ui-icon-pause"></span>Dừng xếp hàng</a></li>
        <li><a id="playxephang" href="#"><span class="ui-icon ui-icon-play"></span>Bật xếp hàng</a></li>
    </ul>
    <div class="ui-layout-center left_col"> 
        <table id="rowed3" ></table>
        <div class="grid1">
            <!--            <div class="ghichu" style=" width: 20px; background:#7be75a">-----</div>
                        <div class="ghichu" style="border: none">Sẵn sàng gọi vào khám</div>-->
            <div class="hinhvuong sansanggoi"></div><label class="diengiai">Sẵn sàng gọi</label>
        </div>
        <div class="grid1">
            <!--            <div class="ghichu" style=" width: 20px; background:#00FFFFFF " >-----</div>
                        <div class="ghichu" style="border: none">Chưa sẵn sàng</div>-->
            <div class="hinhvuong chuasansang"></div><label class="diengiai">Chưa sẵn sàng</label>
        </div>
        <div class="grid1">
            <!--            <div class="ghichu" style=" width: 20px; background:red " >-----</div>
                        <div class="ghichu" style="border: none">Đã chờ quá 15'</div>-->

            <div class="hinhvuong quathoigian_max"></div><label class="diengiai">Đã chờ quá 15 phút</label>

        </div>
        <div class="grid1">
            <!--            <div class="ghichu" style=" width: 20px; background:yellow " >-----</div>
                        <div class="ghichu" style="border: none">Đã chờ quá 10'</div>-->
            <div class="hinhvuong quathoigian_min"></div><label class="diengiai">Đã chờ quá 10 phút</label>
        </div>
        <table id="rowed4" ></table>
        <!--
        <div class="ghichu" style=" background:#000"> </div>
        <div class="ghichu" > Chưa sẵn sàng </div>
    <div id="prowed3"> </div>      -->
    </div>

    <div class="ui-layout-east right_col">   <table id="rowed5" ></table></div>





</body>
</html> 

<script type="text/javascript">
    jQuery(document).ready(function() {

        create_layout();
        create_grid();
        create_grid2();
        create_grid3();

        $('.ui-layout-east,.ui-layout-center').bind('resize', function() {
            $("#rowed3,#rowed4 ").setGridWidth($(".left_col").width() - 4);
            $("#rowed5").setGridWidth($(".right_col").width() - 4);
        }).trigger('resize');
        $("#rowed5").setGridHeight($(".right_col").height() - 60);
        //gọi menu chuột phải
        $("#menu").menu();
        $(document).bind("contextmenu", function(e) {
            return false;
        });
        $(document).bind("mouseup", function(e) {
            $("#menu").hide();
        });
    })

    var lastsel;
    function create_grid() {
        window.kiemtrasearch = true;
        $("#rowed3").jqGrid({
            url: 'resource.php?module=<?= $modules ?>&view=<?= $view ?>&action=data_ds_xephang_dangcho',
            datatype: "json",
            colNames: ['LuotKham', '<?php get_text1("maBN") ?>', '<?php get_text1("hoten") ?>',
                '<?php get_text1("tuoi") ?>', '<?php get_text1("gioitinh") ?>',
                '<?php get_text("phanloai") ?>', 'Hẹn lúc', '<?php get_text("gioden") ?>', 'Yêu cầu', 'BS trước', 'GhiChu', 'Nội dung TK', 'Trạng thái', 'Sansang'],
            colModel: [
                {name: 'ID_LuotKham', index: 'ID_LuotKham', search: false, width: "2%", editable: false, align: 'left', hidden: true},
                {name: 'MaBenhNhan', index: 'MaBenhNhan', search: true, width: "1%", editable: false, align: 'left', hidden: false},
                {name: 'TenBenhNhan', formatter: kiemtra_dk_id_trangthai, index: 'TenBenhNhan', search: false, width: "2%", editable: false, align: 'left', hidden: false},
                {name: 'Tuoi', index: 'Tuoi', search: false, width: "1%", editable: false, align: 'left', hidden: false},
                {name: 'GioiTinh', index: 'GioiTinh', search: false, width: "1%", editable: false, align: 'left', hidden: false},
                {name: 'TenPhanLoaiKham', index: 'TenPhanLoaiKham', search: false, width: "2%", editable: false, align: 'left', hidden: false},
                {name: 'GioHenKham', index: 'GioHenKham', search: false, width: "2%", editable: false, align: 'left', hidden: false},
                {name: 'ThoiGianVaoKham', formatter: kiemtra_dk_tg, index: 'ThoiGianVaoKham', search: false, width: "1%", editable: false, align: 'center', hidden: false, edittype: "text", editoptions: {
                        dataInit: function(element)
                        {
                            $(element).timeEntry({show24Hours: true, spinnerImage: ''});
                        }
                    }
                },
                {name: 'TenBSYeuCau', index: 'TenBSYeuCau', search: false, width: "1%", editable: false, align: 'left', hidden: false},
                {name: 'BSTruoc', index: 'BSTruoc', search: false, width: "1%", editable: false, align: 'left', hidden: false},
                {name: 'GhiChu', index: 'GhiChu', search: false, width: "1%", editable: false, align: 'left', hidden: false},
                {name: 'NoiDungTaiKham', index: 'NoiDungTaiKham', search: false, width: "1%", editable: false, align: 'left', hidden: false},
                {name: 'ID_TrangThai', index: 'ID_TrangThai', search: false, width: "0%", editable: false, align: 'left', hidden: true},
                {name: 'SanSangGoiVaoKham', index: 'SanSangGoiVaoKham', search: false, width: "0%", editable: false, align: 'left', hidden: true}
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
            //hoverrows:false,
            //jsonReader:{repeatitems:true,subgrid:{repeatitems:false}},	
            sortorder: "desc",
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
            onRightClickRow: function(rowid, iRow, iCol, e) {

                var grid = jQuery('#rowed3');
                var colModel = grid.getGridParam('colModel');
                //  alert (colModel) ;
                var colName = colModel[iCol].name;
                var colIndex = colModel[iCol].index;
                var rowData = jQuery('#rowed3').getRowData(rowid);
                window.rowData_grdangcho = rowData;
                //alert(rowData["MaBenhNhan"] + rowData["ID_LuotKham"]);
                if ($.trim(rowData[colName]) != "") {
                    window.rowid_danhcho = rowid;
                    window.from = colModel[iCol].name;
                    if ($("#menu").width() + e.pageX > $(document).width()) {
                        $("#menu").css('left', e.pageX - $("#menu").width() + "px");
                    } else {
                        $("#menu").css('left', e.pageX + "px");
                    }
                    if ($("#menu").height() + e.pageY > $(document).height()) {
                        $("#menu").css('top', e.pageY - $("#menu").height() + "px");
                    } else {
                        $("#menu").css('top', e.pageY + "px");
                    }
                    $("#menu").show(300);
//					window.oper="cancel";
//					$(rowData[colName]).each(function(){	
//						_thongtin=(this.lang).split(";");
//					});	
//					window.idCancel=_thongtin[4];						 
                }
                $(document).bind("contextmenu", function(e) {
                    return false;
                });
                //right_menu(rowid, iCol, e);
            },
            loadComplete: function(data) {
                ids = $('#rowed3').jqGrid('getDataIDs');
                for (i = 0; i < ids.length; i++) {
                    var rowData = jQuery('#rowed3').getRowData(ids[i]);
                    kiemtra_dk_tg_load_completed(rowData, ids[i], "ThoiGianVaoKham;ID_TrangThai;TenBenhNhan;SanSangGoiVaoKham");
                    /* if (rowData['PhanTramVat'] == 10) {
                     $('#rowed3').jqGrid('setCell', ids[i], "PhanTramVat", "", {background: 'red'});
                     }*/
                }



                //kiemtra_dk_tg_load_completed();


                //$("#rowed3").setColProp('ID_PhongBanCha', { editoptions: { value: ""} });				 
            },
            caption: "<?php get_text("DSXH_lamsang") ?>" + " <span class='demgio'> - tự động reload sau " + reload_luoi_danhsach + " giây</span>"
        });
        $("#rowed3").jqGrid('navGrid', "#prowed3", {add: false, edit: false, del: false, search: false, refresh: true, closeAfterEdit: true, clearAfterAdd: true, navkeys: [true, 38, 40], closeOnEscape: true});
        timer_danhsach("start");
        timer_title_danhsach("start");
        $("#rowed3").setGridWidth($(window).width() - 100);
        $("#rowed3").setGridHeight($(window).height() - $("#form_danh_muc_phong_ban").height() - 400);


    }
    function create_grid2()
    {
        $("#rowed4").jqGrid({
            url: 'resource.php?module=<?= $modules ?>&view=<?= $view ?>&action=data_ds_xephang_dangkham',
            datatype: "json",
            colNames: ['LuotKham', '<?php get_text1("maBN") ?>', '<?php get_text("phanloai") ?>', '<?php get_text1("hoten") ?>', '<?php get_text1("tuoi") ?>', '<?php get_text1("gioitinh") ?>', '<?php get_text("gioden") ?>', '<?php get_text("giohenKQ") ?>'],
            colModel: [
                {name: 'ID_LuotKham', index: 'ID_LuotKham', search: false, width: "2%", editable: false, align: 'left', hidden: true},
                {name: 'MaBenhNhan', index: 'MaBenhNhan', search: false, width: "1%", editable: false, align: 'left', hidden: false},
                {name: 'TenPhanLoaiKham', index: 'TenPhanLoaiKham', search: false, width: "2%", editable: false, align: 'left', hidden: false},
                {name: 'TenBenhNhan', index: 'TenBenhNhan', search: false, width: "2%", editable: false, align: 'left', hidden: false},
                {name: 'Tuoi', index: 'Tuoi', search: false, width: "1%", editable: false, align: 'left', hidden: false},
                {name: 'GioiTinh', index: 'GioiTinh', search: false, width: "1%", editable: false, align: 'left', hidden: false},
                {name: 'ThoiGianVaoKham', formatter: kiemtra_dk_tg, index: 'ThoiGianVaoKham', search: false, width: "1%", editable: true, align: 'center', hidden: false, edittype: "text",
                    editoptions: {
                        dataInit: function(element)
                        {
                            $(element).timeEntry({show24Hours: true, spinnerImage: ''});
                        }
                    }
                },
                {name: 'NgayGioHenTraKQ', formatter: kiemtra_dk_tg, index: 'NgayGioHenTraKQ', search: false, width: "1%", editable: true, align: 'center', hidden: false, edittype: "text",
                    editoptions: {
                        dataInit: function(element)
                        {
                            $(element).timeEntry({show24Hours: true, spinnerImage: ''});
                        }
                    }
                },
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
            caption: "<?php get_text("DSXH_lamsang_dangkham") ?>"
        });
        $("#rowed4").setGridWidth($(window).width() - 100);
        $("#rowed4").setGridHeight($(window).height() - $("#k").height() - 400);
    }
    function create_grid3()
    {
        $("#rowed5").jqGrid({
            url: 'resource.php?module=<?= $modules ?>&view=<?= $view ?>&action=data_ds_xephang_ketthuckham',
            datatype: "json",
            colNames: ['LuotKham', '<?php get_text1("maBN") ?>', '<?php get_text("phanloai") ?>', '<?php get_text1("hoten") ?>', '<?php get_text1("tuoi") ?>', '<?php get_text1("gioitinh") ?>', '<?php get_text("gioden") ?>'],
            colModel: [
                {name: 'ID_LuotKham', index: 'ID_LuotKham', search: false, width: "2%", editable: false, align: 'left', hidden: true},
                {name: 'MaBenhNhan', index: 'MaBenhNhan', search: false, width: "1%", editable: false, align: 'left', hidden: false},
                {name: 'TenPhanLoaiKham', index: 'TenPhanLoaiKham', search: false, width: "2%", editable: false, align: 'left', hidden: false},
                {name: 'TenBenhNhan', index: 'TenBenhNhan', search: false, width: "2%", editable: false, align: 'left', hidden: false},
                {name: 'Tuoi', index: 'Tuoi', search: false, width: "1%", editable: false, align: 'left', hidden: false},
                {name: 'GioiTinh', index: 'GioiTinh', search: false, width: "1%", editable: false, align: 'left', hidden: false},
                {name: 'ThoiGianVaoKham', formatter: kiemtra_dk_tg, index: 'ThoiGianVaoKham', search: false, width: "1%", editable: true, align: 'center', hidden: false, edittype: "text", editoptions: {
                        dataInit: function(element)
                        {
                            $(element).timeEntry({show24Hours: true, spinnerImage: ''});
                        }
                    }
                },
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
            caption: "<?php get_text("DS_BN_hoantat") ?>'"
        });
        $("#rowed5").setGridWidth($(window).width() - 100);
        $("#rowed5").setGridHeight($(window).height() - $("#kha").height() - 400);
    }

    function kiemtra_dk_tg_load_completed(cellvalue, rowId, mangthamso) {
        mangthamso = mangthamso.split(";");
        var now1 = new Date().toTimeString();
        var dauvaotam = cellvalue[mangthamso[0]].split(":");
        var dauvao = Date.parse('<?php echo date("Y-m-d") ?>,' + cellvalue[mangthamso[0]]);
        var now = new Date();
        var diffMs = now - dauvao;
        var diffMins = Math.round(((diffMs % 86400000) % 3600000) / 60000);
        var diffHrs = Math.round((diffMs % 86400000) / 3600000); // hours 

        diffMins = diffMins + diffHrs * 60;
        //console.log(dauvao + "  " + diffHrs + "\n");
        //console.log(mangthamso[2]);

        if (diffMins >= 10) {
            $("#rowed3").setCell(rowId, mangthamso[0], '', {background: 'red'});
            //return  '<span style="background:red">' + cellvalue + '*' + diffMins + "</span>";            
            //return  '<span style="background:yellow">' + cellvalue+ "</span>";   
        } else {

            if (diffMins >= 5) {
                $("#rowed3").setCell(rowId, mangthamso[0], '', {background: 'yellow'});
                //    return '<span style="background:yellow">' + cellvalue + '**' + diffMins + "</span>";
            } else {
                // $("#rowed3").setCell(rowId , mangthamso[0], '', { background: '#FFF'});
            }
        }

     // alert (cellvalue[mangthamso[3]]);

        if (cellvalue[mangthamso[1]] == 'DangCho' && cellvalue[mangthamso[3]] == '1') {
            $("#rowed3").setCell(rowId, mangthamso[2], '', {background: '#7be75a'});
        } else {
            //$("#rowed3").setCell(rowId , 'TenBenhNhan', '', { background: '#fff'});
        }




    }
    function kiemtra_dk_tg(cellvalue, options, rowObject) {




        var today = new Date();
        /*var Christmas = new Date("12-25-2012");
         var diffMs = (Christmas - today); // milliseconds between now & Christmas
         var diffDays = Math.round(diffMs / 86400000); // days
         var diffHrs = Math.round((diffMs % 86400000) / 3600000); // hours
         var diffMins = Math.round(((diffMs % 86400000) % 3600000) / 60000); // minutes
         alert(diffDays + " days, " + diffHrs + " hours, " + diffMins + " minutes until Christmas 2009 =)");
         */

        /*
         
         
         
         
         var now1 = new Date().toTimeString();
         var dauvaotam = cellvalue.split(":");
         //var dauvao1=new Date();	    
         //var timeZone=(dauvao1.getTime(dauvaotam)+(-420*60000));	 
         
         var dauvao = Date.parse('<?php echo date("Y-m-d") ?>,' + cellvalue);
         // var dauvao=new Date(Date.UTC(<?php echo date("Y") ?>,<?php echo (date("m") - 1) ?>,<?php echo date("d") ?>,dauvaotam[0],dauvaotam[1],dauvaotam[2]));  
         
         //dauvao.setTime(dauvao.getTime()+dauvao.getTimezoneOffset()*60000)
         var now = new Date();
         var diffMs = now - dauvao;
         var diffMins = Math.round(((diffMs % 86400000) % 3600000) / 60000);
         var diffHrs = Math.round((diffMs % 86400000) / 3600000); // hours 
         
         
         diffMins = diffMins + diffHrs * 60;
         //  console.log(dauvao + "  " + diffHrs + "\n");
         console.log(options);
         $("#rowed3").setCell(options.rowId , 'ThoiGianVaoKham', '', { background: '#888888'});
         if (diffMins >= 10) {
         
         $("#rowed3").setCell(options.rowId , 'ThoiGianVaoKham', '', { background: '#888888'});
         
         //return  '<span style="background:red">' + cellvalue + '*' + diffMins + "</span>";
         
         //return  '<span style="background:yellow">' + cellvalue+ "</span>";          
         
         } else {
         
         
         if (diffMins >= 5)
         {
         $("#rowed3").setCell(rowObject[0] , 'ThoiGianVaoKham', '', { background: '#888888'});
         //    return '<span style="background:yellow">' + cellvalue + '**' + diffMins + "</span>";
         }
         else
         {
         //  return '<span style="background:#FFF">' + cellvalue + '***' + diffMins + "</span>";
         }
         }*/
        return cellvalue;
    }
    function kiemtra_dk_id_trangthai(cellvalue, options, rowObject) {

        /* if (rowObject[7] == 'DangCho')
         {
         return  '<span style="background:#7be75a">' + cellvalue + "</span>";
         
         //              var now=new Date().toTimeString();
         //         alert (now);
         }
         else
         {
         return  '<span style="background:#FFF";color=#000>' + cellvalue + "</span>";
         }*/
        return cellvalue;
    }
    function create_layout() {
        $('body').layout({
            resizerClass: 'ui-state-default'
                    , east: {
                resizable: true
                        , size: 450
                        , spacing_closed: 27
                        , togglerLength_closed:	85
                        , togglerAlign_closed: "center"
                        , togglerContent_closed: "<div id='menu_toggle'>X<BR>O<BR>N<BR>G</div>"
                        , togglerTip_closed: "Open & Pin Menu"
                        , sliderTip: "Slide Open Menu"
                        , slideTrigger_open: "mouseover"
                        , fxSettings_close: {easing: "easeOutQuint"}
                , onresize_end: function() {
                    $("#rowed3,#rowed4 ").setGridWidth($(".left_col").width() - 4);
                    $("#rowed5").setGridWidth($(".right_col").width() - 4);

                }
                , onopen_end: function() {
                    $("#rowed3,#rowed4 ").setGridWidth($(".left_col").width() - 4);
                    $("#rowed5").setGridWidth($(".right_col").width() - 4);

                }
                , onclose_end: function() {
                    $("#rowed3,#rowed4 ").setGridWidth($(".left_col").width() - 4);
                    $("#rowed5").setGridWidth($(".right_col").width() - 4);

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
                    $("#rowed5").setGridWidth($(".right_col").width() - 4);

                }
                , onopen_end: function() {
                    $("#rowed3,#rowed4 ").setGridWidth($(".left_col").width() - 4);
                    $("#rowed5").setGridWidth($(".right_col").width() - 4);

                }
                , onclose_end: function() {
                    $("#rowed3,#rowed4 ").setGridWidth($(".left_col").width() - 4);
                    $("#rowed5").setGridWidth($(".right_col").width() - 4);


                }
            }
        });
    }
    var reload_luoi_danhsach =<?php echo (get_system_config_("ThoiGianRefreshHangDoiLamSang")) ?>;
    var powerXepHang_luoidangcho;//1 là bật,0 là tắt
    function timer_danhsach(_value) {
        if (_value != "stop") {
            timer = setInterval(function() {
                if (window.kiemtrasearch == true) {
                    $('#rowed3').setGridParam({loadonce: false, datatype: "json"}).trigger('reloadGrid');
                }
            }, (reload_luoi_danhsach * 1000));
            powerXepHang_luoidangcho=1;
        } else {
            clearInterval(timer);
            powerXepHang_luoidangcho=0;
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

    $("#chuasansang").click(function(e) {
        var mabenhnhan = window.rowData_grdangcho["MaBenhNhan"];
         var sanSangGoiVaoKham = window.rowData_grdangcho["SanSangGoiVaoKham"];
        var iD_LuotKham = window.rowData_grdangcho["ID_LuotKham"];
        $.post('resource.php?module=<?= $modules ?>&view=<?= $view ?>&action=controller&oper=update_chuasansang&mabenhnhan=' + mabenhnhan + '&id_luotkham=' + iD_LuotKham+'&sanSangGoiVaoKham=' + sanSangGoiVaoKham).done(function(data)
        {
            if ($.trim(data) == '') {
                tooltip_message("<?php get_text1("sua_thanhcong") ?>");
                $("#rowed3").trigger("reloadGrid");
            }
            else {
                tooltip_message("<?php get_text1("sua_khongthanhcong") ?>");
            }
        });
        


    })
    $("#huyxephang").click(function(e) {
        var mabenhnhan = window.rowData_grdangcho["MaBenhNhan"];
        var iD_LuotKham = window.rowData_grdangcho["ID_LuotKham"];
        // $.post('resource.php?module=<?= $modules ?>&view=<?= $view ?>&action=controller&oper=update_huyxephang&mabenhnhan='+mabenhnhan+'&id_luotkham='+iD_LuotKham)
        $.post('resource.php?module=<?= $modules ?>&view=<?= $view ?>&action=controller&oper=update_huyxephang&mabenhnhan=' + mabenhnhan + '&id_luotkham=' + iD_LuotKham).done(function(data)
        {
            if ($.trim(data) == '') {
                tooltip_message("<?php get_text1("sua_thanhcong") ?>");
                $("#rowed3").trigger("reloadGrid");
            }
            else {
                tooltip_message("<?php get_text1("sua_khongthanhcong") ?>");
            }
        });
    })
    $("#stopxephang").click(function(e) {
    timer_title_danhsach("stop");
    timer_danhsach("stop");
    
    })
    $("#playxephang").click(function(e) {
    timer_title_danhsach("start");
   
    timer_danhsach("start");
    
    })

</script>

