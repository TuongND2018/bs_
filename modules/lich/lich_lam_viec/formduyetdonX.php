
<style>
    th.ui-th-column div{
        word-wrap: break-word;
        white-space: pre-wrap;
        white-space: -moz-pre-wrap;
        white-space: -pre-wrap;
        white-space: -o-pre-wrap;
        overflow: hidden;
        height: auto !important;
        vertical-align: middle;
    }
    #ui-id-4
    {
        width: 350px!important;
    }
    #Mavuviec1,#nhanvien,#Ngaygui{
        width: 150px!important;
    }
    /*    #bacsy  {
                           display:inline-block;

                          width: 30px;
                           margin:0;
                           padding:0;
                   }*/
    .form_row{
        width:300px!important;
        height:95px;
    }
</style>



<div id="dialog" title="Basic dialog">
<!--<p>This is the default dialog which is useful for displaying information. The dialog window can be moved, resized and closed with the 'x' icon.</p>-->
</div>


<div  class="nhan_vien">
    <table id="nhan_vien">
    </table>
</div>




<table id="rowed3" style="width:100%" ></table>
<div id="prowed3"></div>
</body>
<script type="text/javascript">
    jQuery(document).ready(function() {

        window.mucphatthedo = '<?=  $_SESSION["GD2PhanTramMucPhatDonChamCong"] ?>';//$_SESSION['user']['id_phongban']
        window.iD_PhongBan_userlogin = '<?=  $_SESSION["user"]["id_phongban"] ?>';//$_SESSION['user']['id_phongban']
        //alert( window.iD_PhongBan_userlogin);
          var d = new Date('<?= $_GET["fromdate"] ?>');
             var curr_date = d.getDate();
    var curr_month = d.getMonth() + 1; //Months are zero based
    var curr_year = d.getFullYear();
    var dateFrom=curr_date + "/" + curr_month + "/" + curr_year;


     var d2 = new Date('<?= $_GET["todate"] ?>');
             var curr_date2 = d2.getDate();
    var curr_month2 = d2.getMonth() + 1; //Months are zero based
    var curr_year2 = d2.getFullYear();
    var dateTo=curr_date2 + "/" + curr_month2 + "/" + curr_year2;

        //var t= fromdate.dateEntry({dateFormat: 'dmy-'});

        // alert(t);
        var lastsel;
        $.dateEntry.setDefaults({spinnerImage: ''});
        shortcut_key();
        var lastsel3;
        jQuery(window).resize(function() {
            $("#rowed3").setGridWidth($(window).width() - 20);
            $("#rowed3").setGridHeight($(window).height() - $("#form_danh_muc_dan_toc").height() - 350);
        });
        load_select();//lấy dữ liệu combobox

        load_ajax();


        create_grid_sucobynhanvien();//tạo lưới

//   $("#Ngaysuco").datepicker({
//                        showWeek: true,
//                        defaultDate: "+1w",
//                        changeMonth: true,
//                        changeYear: true,
//                        numberOfMonths: 1,
//                        dateFormat: "dd/mm/yy",
//
//                        onClose: function(selectedDate) {
//
//                        },
//                        onSelect: function(dat, inst) {
//                        alert(dat);
//                        }
//
//                    });
        $("#Ngaysuco").keyup(function() {

            $(".ui-datepicker").hide();

        });
        $("#Ngaysuco").click(function() {
            $(".ui-datepicker").show();

        })

        function load_select() {
           // window.Mavuviec = $.ajax({url: 'resource.php?module=web_services&function=get_auto_edit_option&action=index&term=&status=2&tables=DMSuCoCC&id=idIndex&name=TenVuviec', async: false, success: function(data, result) {
            window.Mavuviec = $.ajax({url: 'resource.php?module=<?= $modules ?>&view=<?= $view ?>&action=data_tensuco', async: false, success: function(data, result) {
                    if (!result)
                        alert('Không load được danh mục vụ việc');
                }}).responseText;

            window.nickname = $.ajax({url: 'resource.php?module=web_services&function=get_auto_edit_option_byid&action=index&term=&status=2&tables=DM_NhanVien&id=ID_NhanVien&name=NickName', async: false, success: function(data, result) {
                    if (!result)
                        alert('Không load được danh mục nhân viên');
                }}).responseText;

            window.iD_PhongBan = $.ajax({url: 'resource.php?module=web_services&function=get_auto_edit_option_byid&action=index&term=IsPhongChuyenMon=0&status=2&tables=dm_phongban&id=ID_PhongBan&name=TenPhongBan', async: false, success: function(data, result) {
                    if (!result)
                        alert('Không load được danh mục vụ việc');
                }}).responseText;

            Mavuviec1 = Mavuviec.split(";");
            for (i = 0; i <= Mavuviec1.length - 1; i++) {
                temp = Mavuviec1[i].split(":");
                $('#Mavuviec').append($('<option>', {
                    value: temp[0],
                    text: temp[1]
                }));
            }
            $('#Mavuviec').append($('<option>', {
                value: null,
                text: ''
            }));
            autocompleted_combobox('#Mavuviec');

           
        }
        function load_ajax(status) {
            window.tenvuviec = $.ajax({url: 'resource.php?module=web_services&function=get_auto_edit_option&action=index&term=&status=2&tables=DMSuCoCC&id=idIndex&name=TenVuviec', async: false, success: function(data, result) {
                    if (!result)
                        alert('Không load được danh mục sự cô');
                }}).responseText;


            if (status == true) {
                $("#rowed3").setColProp('Id_Suco', {editoptions: {value: tenvuviec}});
                //  $("#rowed3").setColProp('Id_nhanvien', {editoptions: {value: nickname}});


            }
        }

        function create_grid_sucobynhanvien() {
            var lastSel;

            window.tensuco = ":Tất cả;" + window.Mavuviec;
            window.nicknamez = ":Tất cả;" + window.nickname;
            window.iD_PhongBanZ = ":Tất cả;" + window.iD_PhongBan;

            $("#rowed3").jqGrid({
                url: 'resource.php?module=<?= $modules ?>&view=<?= $view ?>&action=data_donsuco&fromdate=<?= $_GET["fromdate"] ?>&todate=<?= $_GET["todate"] ?>',
                datatype: "json",
                colNames: ['IndexID', 'Ngày sự cố', 'Gửi lúc', 'Bộ phận', 'Tên', 'Chi tiết công','Log Ko hợp lệ','Log trễ sớm', 'Sự cố', 'Giải trình về sự cố',
                    'Công', 'Đi trễ', 'Ra sớm', 'Công', 'Đi trễ', 'Ra sớm', 'TK', 'GSCM', 'GSHC', 'Xong', 'Đã gửi', 'ID_chamcong','Màu',''],
                colModel: [
                    {name: 'IndexID', index: 'IndexID', search: false, width: "0%", editable: false, align: 'left', hidden: true},
                    {name: 'Ngayxayrasuco', width: "5%", editrules: {required: true}, search: true, searchrules: {date: true}, sorttype: "date", searchoptions: {dataInit: function(el) {
                                $(el).dateEntry({dateFormat: 'dmy/'})
                            }}, options: {dataInit: function(element) {
                                $(element).datepicker({dateFormat: 'dd/mm/yy'})
                            }}, index: 'Ngayxayrasuco', formatter: "date", formatoptions: {srcformat: 'y/m/d', newformat: 'd/m/Y'}, editable: false, align: 'left', hidden: false, editoptions: {dataInit: function(element) {
                                $(element).datepicker({dateFormat: 'dd/mm/yy'})
                            }}},
                    {name: 'Ngaygui', index: 'Ngaygui', search: false, width: "0%", formatter: "date", formatoptions: {srcformat: 'y/m/d H:i', newformat: 'd/m/Y H:i'}, editable: false, align: 'left', hidden: true},
                    {name: 'ID_PhongBan', index: 'ID_PhongBan', summaryType: 'count', search: true, stype: 'select', searchoptions: {sopt: ['eq', 'ne'], value: iD_PhongBanZ}, width: "7%", formatter: "select", editable: false, edittype: "select", editoptions: {value: iD_PhongBanZ}, align: 'left', hidden: false, },
                    {name: 'Id_nhanvien', stype: 'select', summaryType: 'count', index: 'Id_nhanvien', search: true, width: "5%", searchoptions: {sopt: ['eq', 'ne'], value: nicknamez}, formatter: "select", editable: false, edittype: "select", editoptions: {value: nicknamez}, align: 'left', hidden: false, },
                    {name: 'ChiTietCong', index: 'ChiTietCong', search: false, width: "17%", editable: false, align: 'left', hidden: false},
                      {name: 'LogkhongHopLe', index: 'LogkhongHopLe', search: false, width: "5%", editable: false, align: 'center', hidden: false},
                    {name: 'TreSomChiTiet', index: 'TreSomChiTiet', search: false, width: "3%", editable: false, align: 'left', hidden: false},
                    {name: 'Id_Suco', editrules: {required: true}, index: 'Id_Suco', search: true, stype: 'select', width: "12%", editable: false, align: 'left', formatter: "select", edittype: "select", hidden: false, editoptions: {value: tensuco}},
                    {name: 'Noidung', index: 'Noidung', search: false, width: "12%", editable: false, align: 'left', hidden: false},
                    {name: 'DenghiCongthem', editrules: {required: true}, index: 'DenghiCongthem', search: false, width: "2%", editable: false, align: 'left', hidden: false},
                    {name: 'TinhDitre', index: 'TinhDitre', search: false, width: "2%", editable: false, align: 'left', hidden: false},
                    {name: 'TinhRasom', index: 'TinhRasom', search: false, width: "2%", editable: false, align: 'left', hidden: false},
                    {name: 'TongCong', editrules: {required: true}, index: 'TongCong', search: false, width: "2%", editable: true, align: 'left', hidden: false},
                    {name: 'ccDiTre', index: 'ccDiTre', search: false, width: "2%", editable: true, align: 'left', hidden: false},
                    {name: 'ccRaSom', index: 'ccRaSom', search: false, width: "2%", editable: true, align: 'left', hidden: false},
                    
                    {name: 'TBPOK', index: 'TBPOK', search: true, stype: 'select', searchoptions: {sopt: ['eq'], value: ":Tất cả;1:OK;0:NoOk"}, width: "2%", formatter: "checkbox", edittype: "checkbox", editoptions: {value: "1:0"}, editable: true, align: 'center', hidden: false, },
                    {name: 'GSCMOK', index: 'GSCMOK', search: false, width: "2%", formatter: "checkbox", edittype: "checkbox", editoptions: {value: "1:0"}, editable: true, align: 'center', hidden: true, },
                    {name: 'GSHCOK', index: 'GSHCOK', search: true, stype: 'select', searchoptions: {sopt: ['eq'], value: ":Tất cả;1:OK;0:NoOK"}, width: "2%", formatter: "checkbox", edittype: "checkbox", editoptions: {value: "1:0"}, editable: true, align: 'center', hidden: true, },
                    {name: 'Finished', index: 'Finished', stype: 'select', search: true, searchoptions: {sopt: ['eq'], value: ":Tất cả;1:Xong;0:Chưa xong"}, width: "2%", formatter:'select', edittype: "checkbox", editoptions: {value: "1:0"}, editable: true, align: 'center', hidden: false, },
                    {name: 'Sent', index: 'Sent', search: true, searchoptions: {sopt: ['eq'], value: ":Tất cả;1:Đã gửi;0:Chưa gửi"}, width: "3%", edittype: "checkbox", formatter:'select', editoptions: {value: "1:0", defaultValue: '1'}, editable: false, align: 'left', hidden: true},
                    {name: 'ID_ChamCong', index: 'ID_ChamCong', search: false, width: "0%", editable: true, align: 'left', hidden: true},

                    {name: 'MauDon',search: true, stype: 'select',searchoptions: {sopt: ['eq'], value: ":Tất cả;X:Xanh;V:Vàng;D:Đỏ"},  index: 'MauDon',  width: "3%", editable: true, align: 'center', hidden: false,edittype:"select",formatter:'select',editoptions:{value:"X:Xanh;V:Vàng;D:Đỏ",dataEvents: [{ type: 'change keyup', fn: function(e) {
                       

                    var row = $(e.target).closest('tr.jqgrow');
                    var rowId = row.attr('id');
                    var denghiCongthem =parseInt($('#rowed3').jqGrid('getCell',rowId,'DenghiCongthem'));
                    var TongCongP =parseInt($('#rowed3').jqGrid('getCell',rowId,'TongCongP'));
                   
                    var mucduyet=denghiCongthem-((denghiCongthem-TongCongP)*parseInt(window.mucphatthedo)/100);
                    if (permission['Finished']==1){//quyền cao nhất mới được
                    $('#'+rowId+'_TongCong').val(mucduyet);}
                  
                     }}]}},
                     {name: 'TongCongP', editrules: {required: true}, index: 'TongCongP', search: false, width: "0%", editable: false, align: 'left', hidden: true},
                  
                    

                ],



                loadonce: true,
                scroll: 1,
                modal: true,
                shrinkToFit: true,
                rowNum:200, //rowList:[30,60,90],
                pager: '#prowed3',
                sortname: 'IndexID',
                height: 200,
                width: 100,
                viewrecords: true,
                ignoreCase: true,
                sortorder: "desc",
                   grouping: true,
                    rownumbers: true,
                autowidth:true,
                groupingView: {groupField: ['ID_PhongBan', 'Id_nhanvien'],
                    groupOrder: ['desc', 'asc'],
                    groupSummary: [false, false],
                    showSummaryOnHide: [false, false],
                    groupColumnShow: [true, true],
                    groupText: [' <b >{0}</b> có  <b style="color: orangered">{ID_PhongBan}</b> đơn', '<b style="color: blue">{0}</b> có <b style="color: orangered"> {Id_nhanvien}</b> đơn'],
                    groupCollapse: false,
                    showSummaryOnHide: false,
                },
                ondblClickRow: function(rowId, rowIndex, columnIndex) {
                    // $(".ui-icon-pencil").trigger('click');
                    $("#prowed3 .ui-icon-pencil").click();
					window.rowed3_select=rowId;
                },
                onRightClickRow: function(rowid, iRow, iCol, e) {
                },
                serializeRowData: function(postdata) {
					if (!postdata.hasOwnProperty('TongCong')) {
					  postdata.TongCong=$("#rowed3").getRowData(rowed3_select)['TongCong'];
					}
					if (!postdata.hasOwnProperty('ccDiTre')) {
					  postdata.ccDiTre=$("#rowed3").getRowData(rowed3_select)['ccDiTre'];
					}
					if (!postdata.hasOwnProperty('ccRaSom')) {
					  postdata.ccRaSom=$("#rowed3").getRowData(rowed3_select)['ccRaSom'];
					}
					if (!postdata.hasOwnProperty('TBPOK')) {
					  postdata.TBPOK=$("#rowed3").getRowData(rowed3_select)['TBPOK'];
					}
					if (!postdata.hasOwnProperty('GSHCOK')) {
					  postdata.GSHCOK=$("#rowed3").getRowData(rowed3_select)['GSHCOK'];
					}
					if (!postdata.hasOwnProperty('GSCMOK')) {
					  postdata.GSCMOK=$("#rowed3").getRowData(rowed3_select)['GSCMOK'];
					}
					if (!postdata.hasOwnProperty('Finished')) {
					  postdata.Finished=$("#rowed3").getRowData(rowed3_select)['Finished'];
					}
					if (!postdata.hasOwnProperty('ID_ChamCong')) {
					  postdata.ID_ChamCong=$("#rowed3").getRowData(rowed3_select)['ID_ChamCong'];
					}
					if (!postdata.hasOwnProperty('IndexID')) {
					  postdata.IndexID=$("#rowed3").getRowData(rowed3_select)['IndexID'];
					}

					//alertObject(postdata);
                    return postdata;
                },
                onSelectRow: function(id) {

                },
                loadComplete: function(data) {

                    var id_pbNguoiTaoDon=0;
                    ids = $('#rowed3').jqGrid('getDataIDs');
                    for (i = 0; i < ids.length; i++) {
                        var rowData = jQuery('#rowed3').getRowData(ids[i]);

                         id_pbNguoiTaoDon=rowData["ID_PhongBan"];
                        // alert(id_pbNguoiTaoDon);

                        $("#rowed3").setCell(ids[i], 'TongCong', '', {background: '#d9f970'});
                        $("#rowed3").setCell(ids[i], 'TongCong', '', {color: 'red'});
                        if (rowData["MauDon"] == 'X') {

                            $("#rowed3").setCell(ids[i], 'MauDon', '', {background: 'Green', color: 'black'});

                        }
                        if (rowData["MauDon"] == 'V') {

                            $("#rowed3").setCell(ids[i], 'MauDon', '', {background: 'yellow', color: 'black'});

                        }
                          if (rowData["MauDon"] == 'D') {

                            $("#rowed3").setCell(ids[i], 'MauDon', '', {background: 'red', color: 'black'});

                        }


                        if (rowData["Finished"] == 1) {

                            $("#rowed3").setCell(ids[i], 'Id_nhanvien', '', {background: '#FFF', color: '#000'});

                        } 
                        else {

                            if (rowData["GSHCOK"] == 1) {

                                $("#rowed3").setCell(ids[i], 'Id_nhanvien', '', {background: '#7be75a', color: '#000'});

                            }
                            else
                            {
                                if (rowData["TBPOK"] != 1)
                                {
                                    $("#rowed3").setCell(ids[i], 'Id_nhanvien', '', {background: 'orangered', color: '#000'});
                                }
                                else
                                {
                                    $("#rowed3").setCell(ids[i], 'Id_nhanvien', '', {background: 'yellow', color: '#000'});
                                }

                            }
                        }
             

                    }

                    if (permission['TBPOK']==1 ){
                 $("#rowed3").setColProp('TBPOK', {editable: true});
                  $("#rowed3").setColProp('MauDon', {editable: true});
                }else{
                   // alert('Bạn không thể duyệt đơn cho bộ phận khác');
                     $("#rowed3").setColProp('TBPOK', {editable: false});
                     $("#rowed3").setColProp('MauDon', {editable: false});
                }
                 if (permission['GSCMOK']==1 && id_pbNguoiTaoDon==window.iD_PhongBan_userlogin){
                 $("#rowed3").setColProp('GSCMOK', {editable: true});
                }else{
                     $("#rowed3").setColProp('GSCMOK', {editable: false});
                }
                 if (permission['GSHCOK']==1 && id_pbNguoiTaoDon==window.iD_PhongBan_userlogin){
                 $("#rowed3").setColProp('GSHCOK', {editable: true});
                }else{
                     $("#rowed3").setColProp('GSHCOK', {editable: false});
                }
                  if (permission['Finished']==1){
                 $("#rowed3").setColProp('Finished', {editable: true});//TongCong
                   $("#rowed3").setColProp('TongCong', {editable: true});
                  $("#rowed3").setColProp('ccDiTre', {editable: true});
                      $("#rowed3").setColProp('ccRaSom', {editable: true});
                        $("#rowed3").setColProp('MauDon', {editable: true});
                }else{
                     $("#rowed3").setColProp('Finished', {editable: false});
                      $("#rowed3").setColProp('TongCong', {editable: false});
                              $("#rowed3").setColProp('ccDiTre', {editable: false});
                      $("#rowed3").setColProp('ccRaSom', {editable: false});
                        $("#rowed3").setColProp('MauDon', {editable: true});
                }

                },
                caption: "Đơn sự cố từ "+dateFrom +" đến "+ dateTo+"------ <label for='checkbox'style='width:110px' >Thu gọn</label><input type='checkbox' id='checkp'>---------------------- <div class='hinhvuong camdo'></div><label class='diengiai'>Chờ TBP</label> <div class='hinhvuong quathoigian_min'></div><label class='diengiai'>Chờ G.sát</label> <div class='hinhvuong sansanggoi'></div><label class='diengiai'>Chờ TBP Hành chính</label> <div class='hinhvuong chuasansang'></div><label class='diengiai'>Đã giải quyết</label>",
                editurl: 'resource.php?module=<?= $modules ?>&view=<?= $view ?>&action=controller_duyetdon&hienmaloi=3'
            });
            $("#rowed3").jqGrid('filterToolbar', {searchOperators: false, searchOnEnter: false, defaultSearch: "eq"});

            $.dateEntry.setDefaults({spinnerImage: ''});

            $("#gs_Ngayxayrasuco").datepicker({
                showWeek: true,
                defaultDate: "+1w",
                changeMonth: true,
                changeYear: true,
                numberOfMonths: 1,
                dateFormat: "dd/mm/yy",
                onClose: function(selectedDate) {

                },
                onSelect: function() {
                    if (this.id.substr(0, 3) === "gs_") {
                        // call triggerToolbar only in case of searching toolbar
                        setTimeout(function() {
                            $("#rowed3")[0].triggerToolbar();
                        }, 100);
                    }
                }
            });
            //    autocompleted_combobox_search("#gs_ID_PhongBan","#rowed3");
            $("#gs_Ngayxayrasuco").keyup(function() {

                $(".ui-datepicker").hide();

            });
            $("#gs_Ngayxayrasuco").click(function() {
                $(".ui-datepicker").show();

            })


            $("#rowed3").jqGrid('navGrid', "#prowed3", {add: false, edit: false, del: false, search: false, refresh: true, closeAfterEdit: true, clearAfterAdd: true, navkeys: [true, 38, 40], closeOnEscape: true}, {}, {},
                    {
//                        reloadAfterSubmit: false
//                                , navkeys: [true, 38, 40]
//                                , closeOnEscape: true
//                                , afterSubmit: function(response, postdata) {
//                            if (response.responseText == 1) {
//                                var success = false;
//                                var new_id = "<?php get_text1("xoa_khongthanhcong") ?>";
//                            } else {
//
//                                tooltip_message("<?php get_text1("xoa_thanhcong") ?>");
//                                var success = true;
//                                var new_id = "<?php get_text1("xoa_thanhcong") ?>";
//                            }
//                            ;
//                            return [success, new_id];
//                            $("#rowed3").trigger("reloadGrid");
//                        }

                    }
            );

            $("#rowed3").jqGrid('navButtonAdd', "#prowed3", {
                onClickButton:
                        function(){


                    var pban=$('#gs_ID_PhongBan :selected').text();


                    $('<div></div>').appendTo('body')
                    .html('<div><h3>Bạn chắc chắn ?</h3></div><div><input type="checkbox" id="checkGhide">Ghi đè công của các đơn đã duyệt ( Không được chọn mục này nếu muốn giữ lại công những ngày đã duyệt đơn)</input></div>')
                    .dialog({
                        modal: true, title: 'Tính lại công của '+pban +' từ ngày <?= $_GET["fromdate"] ?> đến ngày <?= $_GET["todate"] ?>', zIndex: 10000, autoOpen: true,
                        width: '800px', resizable: false,
                        buttons: {
                            Yes: function () {
                                // $(obj).removeAttr('onclick');
                                // $(obj).parents('.Parent').remove();
                                  var x = $("#checkGhide").is(":checked");
                               // alert(x);

                                $(this).dialog("close");
                            },
                            No: function () {
                                $(this).dialog("close");
                            }
                        },
                        close: function (event, ui) {
                            $(this).remove();
                        }
                    });



                }, caption: "Tính lại công", id: "tinhlaicong_button", buttonicon : "ui-icon-calculator",
            });
            $("#rowed3").jqGrid('inlineNav', '#prowed3', {add: false, addtext: '', edittext: 'Duyệt đơn', edit: true, closeOnEscape: true,
                addParams: {
                    keys: true,
                    position: "last",
                    // mtype: 'post',
                    addRowParams: {
                        keys: true,
                        aftersavefunc: function(rowId, response, lastsel) {
                            if (response.responseText == 1) {
                                tooltip_message("Có lỗi trong quá trình lưu dữ liệu. Vui lòng thử lại");
                            } else {
                                tooltip_message("Lưu dữ liệu thành công");
                               // $("#rowed3").trigger("reloadGrid");
                                $("#rowed3").jqGrid('bindKeys', {"onEnter": function(rowid) {
                                        $("#rowed3 .ui-icon-pencil").click();
                                    }});
                                $('#rowed3').focus();
                            }

                        },
                        oneditfunc: function(rowId) {

                        },
                        afterrestorefunc: function() {
                            $("#rowed3").jqGrid('bindKeys', {"onEnter": function(rowid) {
                                    $("#prowed4 .ui-icon-pencil").click();
                                }});
                            $('#rowed3').focus();
                        },
                        beforeSaveRow: function(options, rowId) {

                        },
                    }
                },
                editParams: {

                    keys: true,
                    aftersavefunc: function(rowId, response, lastsel) {
                        if (response.responseText == 1) {
                            tooltip_message("Có lỗi trong quá trình lưu dữ liệu. Vui lòng thử lại");
                        } else {
                            tooltip_message("Lưu thành công");
                            $("#rowed3").jqGrid('bindKeys', {"onEnter": function(rowid) {
                                    $("#prowed3 .ui-icon-pencil").click();
                                }});

                            $('#rowed3').focus();
                            $("#rowed3").trigger("reloadGrid");
                        }
                        ;
                    },
                    oneditfunc: function(rowId) {

                    },
                    afterrestorefunc: function() {
                        $("#rowed3").jqGrid('bindKeys', {"onEnter": function(rowid) {
                                $("#prowed4 .ui-icon-pencil").click();
                            }});
                        $('#rowed3').focus();
                    },
                    beforeSaveRow: function(options, rowId) {

                    },
                }
            });


            $("#rowed3").setGridWidth($(window).width() - 20);
            $("#rowed3").setGridHeight($(window).height() - 150);

            jQuery("#rowed3").jqGrid('setGroupHeaders',
                    {useColSpanStyle: true, groupHeaders:
                                [{startColumnName: 'DenghiCongthem', numberOfColumns: 3, titleText: '<b >Yêu cầu</b>'},
                                    {startColumnName: 'TongCong', numberOfColumns: 3, titleText: '<b> Giải quyết</b>'}]});
            //

        }




        $("#rowed3").jqGrid({
        });


        $("#rowed3").jqGrid('bindKeys', {"onEnter": function(rowid) {
            }});
        $("#gbox_rowed3").attr("tabindex", "1");
        $("#gbox_rowed3").bind('keydown', function(e) {
            if ((jwerty.is("ctrl+m", e))) {
                $("#rowed3").jqGrid('restoreRow', lastsel);
                $("#rowed3").jqGrid('editRow', rowid, true);
                lastsel = rowid;
            }
        })
        $("#checkp").click(function() {
            var x = $("#checkp").is(":checked");
            if (x == true) {
                $("#gview_rowed3 .ui-icon-circlesmall-minus").trigger("click");
            } else {
                $("#gview_rowed3 .ui-icon-circlesmall-plus  ").trigger("click");
            }

        })

      phanquyen();

    })
</script>