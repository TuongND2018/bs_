	 function set_printer (printer) {
            $("button").click ( function () {
                var eventName, detailVal, normBtnPressed  = (this.id == "normalDataBtn");
                console.log (
                    '**The '
                    + (normBtnPressed ? "Normal" : "JSON")
                    + ' button was pressed.**'
                );

                if (normBtnPressed) {
                    eventName   = "EventWithArrayDataFromPage";
                    detailVal   = [printer];
                }
                else {
                    eventName   = "EventWithJSON_DataFromPage";
                    detailVal   = JSON.stringify ( ['horse', 'cat', 'dog', 'bison', 'bird'] );
                }

                var zEvent = new CustomEvent (eventName,
                    {"detail": detailVal }
                );
                window.dispatchEvent (zEvent)
            } );
        }
		 function prin_preview (url) {           
                var eventName, detailVal, normBtnPressed  = (this.id == "normalDataBtn");                
                    eventName   = "EventWithArrayDataFromPage";
                    detailVal   = ["preview",url];
				var zEvent = new CustomEvent (eventName,
                    {"detail": detailVal }
                );                
                window.dispatchEvent (zEvent);            
        }
		 

/*window.addEventListener ("ImAlivefromExtension", function (zEvent) { check plugin 
	var statDisplay = document.getElementById ("extensionStatus");
	statDisplay.textContent = "The test extension appears to be loaded!";
	statDisplay.className   = "okay";
} );*/

window.addEventListener ("EventWithArrayDataFromPage", function (zEvent) {
	console.log (
		"In web page (Normal) from page: ", zEvent.detail, Array.isArray (zEvent.detail)
	);
} );

window.addEventListener ("EventWithArrayDataToPage", function (zEvent) {
	$.cookie("username_window", zEvent.detail[0]);
            console.log (
                "In web page (Normal) to page: ", zEvent.detail, Array.isArray (zEvent.detail)
            );
	//alert($.cookie("username_window"));
} );

window.addEventListener ("EventWithJSON_DataToPage", function (zEvent) {
	var datArray    = JSON.parse (zEvent.detail);
	console.log (
		"In web page (JSON): ", datArray, Array.isArray (datArray)
	);
} );
function tooltip_message(message) {
    $("body").append("<div class='tooltips'></div>");
    $('.tooltips span').remove();
    $('.tooltips').append($('<span></span>'));
    $('.tooltips span').html(message);
    width = $(".tooltips").width();
    $(".tooltips").css('top', ($(window).height() / 2) + 'px');
    $(".tooltips").css('left', ($(window).width() / 2) - width / 2 + 'px');
    $('.tooltips').fadeIn(1500, function() {
        /*	if(elem!="body"){				
         $( ".tooltips").effect({effect:"explode",pieces:"50",duration:"slow",complete: function() { 
         $('.tooltips').remove();	
         }
         });  
         }else{*/
        $(".tooltips").delay(1500).fadeOut(1000, function() {
            $('.tooltips').remove();
        })
        //}
    });


}
function xuongdong(formid) {
    $(".ui-widget-overlay").hide();
    $(".DataTD textarea,.DataTD select,.DataTD input,.DataTD a").focus(function() {
        $(this).css("box-shadow", "5px 5px 5px #888888");
    });
    $(".DataTD textarea,.DataTD select,.DataTD input,.DataTD a").focusout(function() {
        $(this).css("box-shadow", "");
    });
    $("#sData,#cData").focus(function() {
        $(this).css("box-shadow", "5px 5px 5px #888888");
    });
    $("#sData,#cData").focusout(function() {
        $(this).css("box-shadow", "");
    });
    var tam = [], i = 0;
    $('#' + formid[0].id).find('textarea,select,input,a').each(function() {
        if ($(this).css("display") != "none") {
            tam[i] = this.id;
            i++;
        }
    })
    //alert (i)		 
    $("#" + tam[0]).css("box-shadow", "5px 5px 5px #888888");
    $("#editmodrowed3").css("box-shadow", "5px 5px 5px #888888");
    jwerty.key('enter', false);
    $('.FormElement').bind('keydown', function(e) {
        if (jwerty.is('enter', e)) {
            //alert(e.target )
            var ii = 0;
            for (ii = 0; ii <= tam.length; ii++) {
                if (tam[ii] == $(this).attr("id")) {
                    break;
                }
            }
            $("#" + tam[ii + 1]).focus();
            if (ii == tam.length - 2) {
                $("#sData").focus();
            }
            // $(this).next('.FormElement').focus();
            // $( e.target ).closest("select.FormElement").focus();
        }
    });
}

function lendong(formid) {
    /* $(".DataTD textarea,.DataTD select,.DataTD input").focus(function(){
     $(this).css("box-shadow","0px 0px 6px #666");
     });
     $(".DataTD textarea,.DataTD select,.DataTD input").focusout(function(){
     $(this).css("box-shadow","");
     });	*/
    var tam = [], i = 0;
    $('#' + formid[0].id).find('textarea,input[type=text],select,input[type=checkbox],input[type=radio],input').each(function() {
        tam[i] = this.id;
        //console.log($(this).attr("name"))
        i++;
    })

    //jwerty.key('enter', false);										 
    $('.FormElement').bind('keydown', function(e) {
        if (jwerty.is('ctrl+enter', e)) {
            //alert(e.target )
            var ii = 0;
            for (ii = 0; ii <= tam.length; ii++) {
                if (tam[ii] == $(this).attr("id")) {
                    break;
                }
            }
            $("#" + tam[ii - 1]).focus();
            // $(this).next('.FormElement').focus();
            // $( e.target ).closest("select.FormElement").focus();
        }
    });
}

function canhgiua(formid) {
    temp = (formid[0].id).split("_");
    var grid = $("#" + temp[1]);
    var dlgDiv = $("#editmod" + grid[0].id);
    var parentDiv = dlgDiv.parent();
    var dlgWidth = dlgDiv.width();
    var parentWidth = parentDiv.width();
    var dlgHeight = dlgDiv.height();
    var parentHeight = parentDiv.height();
    // TODO: change parentWidth and parentHeight in case of the grid
    //       is larger as the browser window
	 
	 dlgDiv[0].style.top = Math.round(($(window).height() - dlgHeight) / 2) + "px";
     dlgDiv[0].style.left = Math.round(($(window).width()- dlgWidth) / 2) + "px";
   // dlgDiv[0].style.top = Math.round((parentHeight - dlgHeight) / 2) + "px";
   // dlgDiv[0].style.left = Math.round((parentWidth - dlgWidth) / 2) + "px";
}

var eventMethod = window.addEventListener ? "addEventListener" : "attachEvent";
var eventer = window[eventMethod];
var messageEvent = eventMethod == "attachEvent" ? "onmessage" : "message";
eventer(messageEvent, function(e) {
    if (e.data == 'traodoi') {
        $(".bongda").trigger("click");
    }
})

function dialog_button(callback) {
    $("body").append("<div class='ui-jqdialog_button'><span></span></div>");
    $(".ui-jqdialog_button").dialog({
        height: 110,
        modal: true,
        title: "Warning",
        buttons: {
            'Cancel': function() {
                $(this).dialog('close');
                $("body").remove(".ui-jqdialog_button");
            },
            'Confirm': function() {
				callback();
                $(this).dialog('close');
                $("body").remove(".ui-jqdialog_button");
            }
        }
    });
}
function getCellValue(rowId, cellId) {
    var cell = jQuery('#' + rowId + '_' + cellId);
    var val = cell.val();
    return val;
}
function dialog_sub_grid(title, width, height, row, colName) {
    $("body").append('<div class="sub_grid"><table id="rowed4" style="width:100%" ></table><div id="prowed4"></div></div>');
    loadphongban();
    creat_sub_grid(row, colName);
    shortcut_key();

    $(".sub_grid").dialog({
        height: height,
        width: width,
        modal: false,
        title: title,
        stack: true,
        open: function(event, ui) {
            $('.ui-draggable').css({"box-shadow": "0px 0px 10px rgb(136, 136, 136)"});
        },
        close: function(event, ui) {
            /* 
             var rowData = $('#rowed3').jqGrid('getRowData', 79);										
             rowData[colName] = '2013-07-29;79;lịch làm việc;7:30;11:00';
             tam=$('#rowed3').jqGrid('getCell',79,'name');
             nickname1 = window.nickname.split(";");
             for(i=0;i<=nickname1.length-1;i++){
             temp=nickname1[i].split(":");						
             if(temp[0]==tam){							 
             rowData['name']=temp[1];
             break;
             }			 
             }	
             
             
             //alertObject(window.nickname);
             $('#rowed3').jqGrid('setRowData', 79, rowData);*/
            $("#rowed3").trigger("reloadGrid");
            //$("#rowed3").jqGrid('setCell',79,colName, '2013-07-29;79');
            //$("#rowed3").jqGrid('getLocalRow', 79)[colName] = '2013-07-29;79';
            //alert(colName)
            //alert($('#rowed3').jqGrid('getCell',79,'name'));				
            $("body").remove(".ui-jqdialog");
            $(this).remove();






            //$("#sCal").trigger("click");
        }

    });
}
/*
 * 
 * @param {type} title: Tên header của form
 * @param {type} width
 * @param {type} height
 * @param {type} row
 * @param {type} colName: tên cột
 * @returns {undefined}
 * author: khatm
 * date:13/9/2013
 * 
 */
function dialog_sub_grid_xem_log(title, width, height, tungay, denngay) {
    $("body").append('<div class="sub_grid"><table id="rowed_xLog" style="width:100%" ></table><div id="prowed4"></div></div>');
    //loadphongban();
    creat_sub_grid_XemLog(tungay, denngay);
    //shortcut_key();

    $(".sub_grid").dialog({
        height: height,
        width: width,
        modal: false,
        title: title,
        stack: true,
        open: function(event, ui) {
            $('.ui-draggable').css({"box-shadow": "0px 0px 10px rgb(136, 136, 136)"});
        },
        close: function(event, ui) {

            $("#rowed_xLog").trigger("reloadGrid");

            $("body").remove(".ui-jqdialog");
            $(this).remove();


        }

    });
    $("#rowed_xLog").setGridWidth(width - 25);
    $("#rowed_xLog").setGridHeight(height - $("#form_danh_muc_phong_ban").height() - 150);
    $(window).resize(function() {
        $("#rowed_xLog").setGridWidth(width - 25);
        $("#rowed_xLog").setGridHeight(height - $("#form_danh_muc_phong_ban").height() - 150);
    });
}
function dialog_sub_grid_xem_chamcong(title, width, height) {
    $("body").append('<div class="sub_grid"><table id="rowed_xChamCong" style="width:100%" ></table><div id="prowed4"></div></div>');

    creat_sub_grid_XemChamCong();

    $(".sub_grid").dialog({
        height: height,
        width: width,
        modal: false,
        title: title,
        stack: true,
        open: function(event, ui) {
            $('.ui-draggable').css({"box-shadow": "0px 0px 10px rgb(136, 136, 136)"});
        },
        close: function(event, ui) {

            $("#rowed_xChamCong").trigger("reloadGrid");

            $("body").remove(".ui-jqdialog");
            $(this).remove();


        }

    });

}
function create_formLamDon(nguoigui,newdate1,callback,title,width, height)
{
    $("body").append('<div class="sub_grid_lamdon"></div>');
    $(".sub_grid_lamdon").append('<label id="NgayGioTao">Đơn tạo lúc </label>');
    $(".sub_grid_lamdon").append('<input type="text" name="Ngaygui" id="Ngaygui" disabled="disabled" style="background:#c6c3c6 ;  border: none " value= "'+newdate1+'"><br>');
    $(".sub_grid_lamdon").append('<label id="label_loaisuco">Loại sự cố </label><select name="MavuviecName" id="Mavuviec" ></select><br>');
    $(".sub_grid_lamdon").append('<label id="label_NhanVien">Tên người gởi</label>');
    $(".sub_grid_lamdon").append('<textbox name="Id_NhanVien" id="Id_NhanVien" style="color:red" >'+' '+nguoigui+'</textbox><br>')  ;
    $(".sub_grid_lamdon").append('<label id="label_ghichu">Ghi chú</label>');
    $(".sub_grid_lamdon").append('<textarea id="Noidung" name="Noidung" style="width: 579px; height: 36px;"></textarea><br>');
    $(".sub_grid_lamdon").append('<label id="label_congyeucau">Tổng công yêu cầu </label>');
    $(".sub_grid_lamdon").append('<input type="text" name="DenghiCongthem" id="DenghiCongthem" style="border: none " ><br>');
    $(".sub_grid_lamdon").append('<a style="margin-left:0px;" class="fm-button ui-state-default ui-corner-all fm-button-icon-left" id="GuiDon" href="#">Gửi đơn<span class="ui-icon ui-icon-person"></span></a><br>');
    
    callback(arguments[3],arguments[4],arguments[5]);
}
function callback_form_lam_don(title, width, height){
    
    window.loaisuco = $.ajax({url: 'resource.php?module=web_services&function=get_auto_edit_option&action=index&term=&status=2&tables=DMSuCoCC&id=idIndex&name=TenVuviec', async: false, success: function(data, result) {
                if (!result)
                    alert('Không load được danh mục sự cô');
            }}).responseText;
        loaisuco1 = loaisuco.split(";");
         
    $(".sub_grid_lamdon").dialog({
        height: height,
        width: width,
        modal: false,
        title: title,
        stack: true,
        open: function(event, ui) {
             for (i = 0; i <= loaisuco1.length - 1; i++) {
            temp = loaisuco1[i].split(":");
            $('#Mavuviec').append($('<option>', {
                value: temp[0],
                text: temp[1]
            
                }
                  
        ));
             
           
           autocompleted_combobox('#Mavuviec');
        }
      
            $('.ui-draggable').css({"box-shadow": "0px 0px 10px rgb(136, 136, 136)"});
        },
        close: function(event, ui) {

            $("#rowed_xDonbaosuco").trigger("reloadGrid");

            $("body").remove(".sub_grid_lamdon");
            $(this).remove();
           

        }
        

    });
    $("#GuiDon").click(function()
            {
                alert("lamdon");
                
                window.callControllerLamđon = $.ajax({url: 'resource.php?module=lich&view=lich_lam_viec&action=controller_LamDonChamCong&Mavuviec=' + $("#Mavuviec option:selected").val() + '&id_nhanvien=56', async: false, success: function(data, textStatus, jqXHR) {

            if (jqXHR.responseText == 1) {
                $("#dialog-confirm").dialog("open");

            } else {
                tooltip_message("Tạo đơn thành công");
            }

        }}).responseText;

                
                
                
                
                
                
            });

}
function dialog_sub_grid_donbaosuco(title, width, height,nguoigui) {
  
    var today = new Date()
     var time = today.getHours() + ":" + today.getMinutes();
    var newdate1 = time + ' '+ $.datepicker.formatDate("dd-mm-yy", new Date(today));
  create_formLamDon(nguoigui,newdate1,callback_form_lam_don,title, width, height);
  
}

function dialog_form(title, width, height) {
    $("body").append('<div class="sub_grid"><table id="rowed6" style="width:100%" ><div class="form_row"><label>Loại Lịch</label><span><select name="loailichcopy" id="loailichcopy" ></select><input type="text" style="display:none" name="text_loailichcopy" id="text_loailiccopyh"></span></div><br><div class="form_row"><label>Phòng ban</label><span><select name="phongbancopy" id="phongbancopy" ></select><input type="text" style="display:none" name="text_phongbancopy" id="text_phongbancopy"></span></div><br><div class="form_row"><label>Tuần Copy</label><span><input type="text" name="week1" id="week1"><input type="hidden" name="week_mask1" id="week_mask1"><input type="hidden" name="week_maskfrom" id="week_maskfrom"></span></div><br><div class="form_row"><label>Tuần Paste</label><span><input type="text" name="week2" id="week2"><input type="hidden" name="week_mask2" id="week_mask2"><input type="hidden" name="week_maskto" id="week_maskto"></span></div><br> <br><a style="margin-left:0px;" class="fm-button ui-state-default ui-corner-all fm-button-icon-left" id="sCopylich" href="#">Copy Lịch<span class="ui-icon ui-icon-copy"></span></a></div><div id="dialog-confirm" ><p><span class="ui-icon ui-icon-alert" style="float: left; margin: 0 7px 20px 0;"></span>Đã có lịch tuần Copy </p></div></table>');
    $("body").remove(".ui-jqdialog");
    $(this).remove();

    $("#week1").datepicker({
        showWeek: true,
        firstDay: 1,
        changeMonth: true,
        changeYear: true,
        numberOfMonths: 4,
        yearRange: year_range,
        onClose: function(selectedDate) {
            // $("#week2").datepicker("option", "minDate", $("#week_maskfrom").val());
            //$("#week1").val(fr);

        },
        onSelect: function(dat, inst) {
            var week1 = $.datepicker.iso8601Week(new Date(dat));

            $('#week1').val("tuần: " + (week1 < 10 ? '0' : '') + week1 + " của năm: " + $.datepicker.formatDate('yy', new Date(dat)));
            $("#week_maskfrom").val(dat);
            var date = new Date(dat);
            var date1 = new Date(dat)
            var day = date.getDay() || 7;
            var day1 = date1.getDay() || 7;
            date.setHours(-24 * (day - 1));
            firstDay2 = $.datepicker.formatDate("yy-mm-dd", date);
            date1.setHours(-24 * (day1 - 7));
            lastDay2 = $.datepicker.formatDate("yy-mm-dd", date1);
            lastDay3 = $.datepicker.formatDate("dd/mm/yy", date1);
            $('#week_mask1').val(firstDay2 + ";" + lastDay2);
            //alert($.datepicker.formatDate('',new Date(dat))+(week<10?'0':'')+week);week_mask

        }

    });
    $("#week2").datepicker({
        showWeek: true,
        firstDay: 1,
        changeMonth: true,
        changeYear: true,
        numberOfMonths: 4,
        yearRange: year_range,
        onClose: function(selectedDate) {
            //  $("#week1").datepicker("option", "maxDate", $("#week_maskto").val());
            //  $("#week2").val(to);
            //   $("#week1").val(fr);
        },
        onSelect: function(dat, inst) {
            var week2 = $.datepicker.iso8601Week(new Date(dat));

            $('#week2').val("tuần: " + (week2 < 10 ? '0' : '') + week2 + " của năm: " + $.datepicker.formatDate('yy', new Date(dat)));
            $("#week_maskto").val(dat);
            var date = new Date(dat);
            var date1 = new Date(dat)
            var day = date.getDay() || 7;
            var day1 = date1.getDay() || 7;
            date.setHours(-24 * (day - 1));
            firstDay2 = $.datepicker.formatDate("yy-mm-dd", date);
            date1.setHours(-24 * (day1 - 7));
            lastDay2 = $.datepicker.formatDate("yy-mm-dd", date1);
            $('#week_mask2').val(firstDay2 + ";" + lastDay2);
            //alert($.datepicker.formatDate('',new Date(dat))+(week<10?'0':'')+week);week_mask
        }
    });
    window.phongbancopy = $.ajax({url: 'resource.php?module=web_services&function=get_auto_edit_option_byid&action=index&term=IsPhongChuyenMon=0&status=2&tables=DM_PhongBan&id=ID_PhongBan&name=TenPhongBan', async: false, success: function(data, result) {
            if (!result)
                alert('Không load được danh mục phòng ban');
        }}).responseText;
    phongbancopy1 = phongbancopy.split(";");
    for (i = 0; i <= phongbancopy1.length - 1; i++) {
        temp = phongbancopy1[i].split(":");
        $('#phongbancopy').append($('<option>', {
            value: temp[0],
            text: temp[1]
        }));
    }
    window.loailichcopy = $.ajax({url: 'resource.php?module=web_services&function=get_auto_edit_option&action=index&term=&status=2&tables=DM_LoaiLich&id=ID_LoaiLich&name=TenLoaiLich', async: false, success: function(data, result) {
            if (!result)
                alert('Không load được danh mục phòng ban');
        }}).responseText;
    $('#loailichcopy').append($('<option>', {
        value: null,
        text: ''
    }));
    loailichcopy1 = loailichcopy.split(";");

    for (i = 0; i <= loailichcopy1.length - 1; i++) {
        temp = loailichcopy1[i].split(":");
        $('#loailichcopy').append($('<option>', {
            value: temp[0],
            text: temp[1]
        }));
    }


    $(".sub_grid").dialog({
        height: height,
        width: width,
        modal: false,
        title: title,
        stack: true,
        open: function(event, ui) {
            $("#dialog-confirm").dialog({
                autoOpen: false,
                height: 140,
                modal: false,
                zIndex: 2000,
                stack: true,
                buttons: {
                    "Delete all items": function() {
                        var kiemtra = 1;
                        aa(kiemtra);
                        $(this).dialog("close");
                    },
                    Cancel: function() {
                        $(this).dialog("close");
                    }
                }

            });

            autocompleted_combobox('#loailichcopy');
            autocompleted_combobox('#phongbancopy');
            $("#sCopylich").click(function()
            {
                var kiemtra = 0;
                aa(kiemtra);
            });
            $('.ui-draggable').css({"box-shadow": "0px 0px 10px rgb(136, 136, 136)"});
        },
        close: function(event, ui) {
            $("#dialog-confirm").dialog('destroy');
            $(this).dialog('destroy');
            $(this).remove();
            $("body").remove(".ui-jqdialog");
            $(this).remove();

        }

    });
}
function aa(kiemtra) {
    var elem1 = [];
    var elem2 = [];
    elem1 = ($('#week_mask1').val()).split(";");
    elem2 = ($('#week_mask2').val()).split(";");
    window.loailichcopy = $.ajax({url: 'resource.php?module=lich&view=lich_lam_viec&action=controller_Copy&loailich=' + $("#loailichcopy option:selected").val() + '&phongban=' + $("#phongbancopy option:selected").val() + '&fromcopy=' + elem1[0] + '&tocopy=' + elem1[1] + '&frompaste=' + elem2[0] + '&topaste=' + elem2[1] + '&kiemtra=' + kiemtra + '', async: false, success: function(data, textStatus, jqXHR) {

            if (jqXHR.responseText == 1) {
                $("#dialog-confirm").dialog("open");

            } else {
                tooltip_message("Copy Lịch thành công");
            }

        }}).responseText;


}

function callIframe(links, callback, elem) {
    window.elem = elem;
    $('.frame_' + elem).attr("src", links);
    $('.frame_' + elem).load(function() {
        callback(this);
    });
}
function hide_loader() {
    $(".loading").fadeOut(300, function() {
        $(".loading").remove();
    });
    $('.frame_' + window.elem).css({opacity: 0, visibility: "visible"}).animate({opacity: 1}, 300, function() {
        $('.frame_' + elem).focus();
    });
}

function dialog_main(title, width, height, elem, links) {     
	if(links!=""){
		$("body").append("<div class='ui-jqdialog modal" + elem + "'><div class='loading'><div id='loading'></div></div><iframe id='frame1' class='frame_" + elem + "' src=''></iframe></div>");
	}else{
		$("body").append("<div class='ui-jqdialog modal" + elem + "'> </div>");
	}
	
	
    width = ($(window).width() / 100 * parseFloat(width)).toFixed(0);
    height = ($(window).height() / 100 * parseFloat(height)).toFixed(0);
    $(".modal" + elem).dialog({
        height: height,
        width: width,
        modal: true,
        title: title,
		draggable: false,
		resizable: false,
        stack: false,
        close: function(event, ui) {
			$(".hidden_form").html(window.hidden_form);			
            $("body").remove(".modal" + elem);
            $(this).remove();
        },
        hide: {
            effect: "fadeOut",
            duration: 1000,
        },
        open: function(event, ui) {			 
			callIframe(links, hide_loader, elem);			 
            $('.ui-draggable').css({"box-shadow": "0px 0px 30px #333"});
        }

    });
    //$(".modal"+elem).css("box-shadow","0px 0px 30px #000");		
}

function autocompleted(elem, links, minvalue) {
    $(elem).autocomplete({
        //source: "resource.php?module=web_services&function=get_auto_complete&action=index",
        source: links,
        minLength: minvalue,
        select: function(event, ui) {
            $('#combobox').empty();
            $('#combobox').append(new Option(ui.item.label, ui.item.id));
            //$(this).val(ui.item.label)
            /*log( ui.item ?
             "Selected: " + ui.item.value + " aka " + ui.item.label :
             "Nothing selected, input was " + this.value );*/
        },
        response: function(event, ui) {
            //alert("")
        }
    })/*.data("uiAutocomplete")._renderItem = function (ul, item) {
     var newText = String(item.value).replace(
     new RegExp(this.term, "gi"),
     "<span class='ui-state-highlight'>$&</span>");
     
     return $("<li></li>")
     .data("item.autocomplete", item)
     .append("<a>" + newText + "</a>")
     .appendTo(ul);
     };*/
    $.extend($.ui.autocomplete.prototype, {
        _renderItem: function(ul, item) {
            var term = this.element.val(),
                    html = item.label.replace(new RegExp("(?![^&;]+;)(?!<[^<>]*)(" + $.ui.autocomplete.escapeRegex(term) + ")(?![^<>]*>)(?![^&;]+;)", "gi"), "<strong style='color:#F60'>$1</strong>");
            return $("<li></li>")
                    .data("item.autocomplete", item)
                    .append($("<a></a>").html(html))
                    .appendTo(ul);
        }
    });
}
function autocompleted_combobox(elem) {
    (function($) {
        $.widget("custom.combobox", {
            _create: function() {
                this.wrapper = $("<span>")
                        .addClass("custom-combobox")
                        .insertAfter(this.element);
                this.element.hide();
                this._createAutocomplete();
                this._createShowAllButton();
            },
            _createAutocomplete: function() {
                var selected = this.element.children(":selected"),
                        value = selected.val() ? selected.text() : "";
                this.input = $("<input>")
                        .appendTo(this.wrapper)
                        .val(value)
                        //.attr("type","text")
                        .attr("id", elem.replace(/[&\/\\#,+()$~%.'":*?<>{}]/g, "") + "1")
                        .attr("name", elem.replace(/[&\/\\#,+()$~%.'":*?<>{}]/g, "") + "1")
                        .attr("title", "")
                        .addClass("custom-combobox-input ui-widget ui-widget-content ui-state-default ui-corner-left")
                        .autocomplete({
                    delay: 0,
                    minLength: 0,
                    source: $.proxy(this, "_source")
                })
                        .tooltip({
                    tooltipClass: "ui-state-highlight"
                });
                this._on(this.input, {
                    autocompleteselect: function(event, ui) {
                        ui.item.option.selected = true;
                        this._trigger("select", event, {
                            item: ui.item.option
                        });
                    },
                    autocompletechange: "_removeIfInvalid"
                });
            },
            _createShowAllButton: function() {
                var input = this.input,
                        wasOpen = false;
                $("<a>")
                        .attr("tabIndex", -1)
                        .attr("title", "Show All Items")
                        .tooltip()
                        .appendTo(this.wrapper)
                        .button({
                    icons: {
                        primary: "ui-icon-triangle-1-s"
                    },
                    text: false
                })
                        .removeClass("ui-corner-all")
                        .addClass("custom-combobox-toggle ui-corner-right")
                        .mousedown(function() {
                    wasOpen = input.autocomplete("widget").is(":visible");
                })
                        .click(function() {
                    input.focus();
                    // Close if already visible
                    if (wasOpen) {
                        return;
                    }
                    // Pass empty string as value to search for, displaying all results
                    input.autocomplete("search", "");
                });
            },
            _source: function(request, response) {
                var matcher = new RegExp($.ui.autocomplete.escapeRegex(request.term), "i");
                response(this.element.children("option").map(function() {
                    var text = $(this).text();
                    if (this.value && (!request.term || matcher.test(text)))
                        return {
                            label: text,
                            value: text,
                            option: this
                        };
                }));
            },
            _removeIfInvalid: function(event, ui) {
                // Selected an item, nothing to do
                if (ui.item) {
                    return;
                }
                // Search for a match (case-insensitive)
                var value = this.input.val(),
                        valueLowerCase = value.toLowerCase(),
                        valid = false;
                this.element.children("option").each(function() {
                    if ($(this).text().toLowerCase() === valueLowerCase) {
                        this.selected = valid = true;
                        return false;
                    }
                });
                // Found a match, nothing to do
                if (valid) {
                    return;
                }
                // Remove invalid value
                this.input
                        .val("")
                        .attr("title", value + " didn't match any item")
                        .tooltip("open");
                this.element.val("");
                this._delay(function() {
                    this.input.tooltip("close").attr("title", "");
                }, 2500);
                this.input.data("ui-autocomplete").term = "";
            },
            _destroy: function() {
                this.wrapper.remove();
                this.element.show();
            }
        });
    })(jQuery);

    jQuery(elem).combobox();
    $.extend($.ui.autocomplete.prototype, {
        _renderItem: function(ul, item) {
            var term = this.element.val(),
                    html = item.label.replace(new RegExp("(?![^&;]+;)(?!<[^<>]*)(" + $.ui.autocomplete.escapeRegex(term) + ")(?![^<>]*>)(?![^&;]+;)", "gi"), "<strong style='color:#F60'>$1</strong>");
            return $("<li></li>")
                    .data("item.autocomplete", item)
                    .append($("<a></a>").html(html))
                    .appendTo(ul);
        }
    });
}
function alertObject(obj) {
    for (var key in obj) {
        console.log('key: ' + key + '\n' + 'value: ' + obj[key]);
        if (typeof obj[key] === 'object') {
            console.log(obj[key]);
        }
    }
}

function shortcut_key() {
    jwerty.key('f3', false);
    jwerty.key('f4', false);
    jwerty.key('f8', false);
    jwerty.key('f7', false);
	jwerty.key('f10', false);
    jwerty.key('f11', false);
    $('body').bind('keydown', function(e) {
        if (jwerty.is('f3', e)) {
            $(".ui-icon-plus").trigger("click");
        }
    });
    $('body').bind('keydown', function(e) {
        if (jwerty.is('f4', e)) {
            $(".ui-icon-pencil").trigger("click");
        }
    });
    $('body').bind('keydown', function(e) {
        if (jwerty.is('f8', e)) {
            $(".ui-icon-trash").trigger("click");
        }
    });
    $('body').bind('keydown', function(e) {
        if (jwerty.is('f7', e)) {
            $(".ui-icon-search").trigger("click");
        }
    });
	 $('body').bind('keydown', function(e) {
        if (jwerty.is('f10', e)) {
            $(".ui-icon-disk").trigger("click");
        }
    });
    $('body').bind('keydown', function(e) {
        if (jwerty.is('f11', e)) {
            $(".ui-icon-refresh").trigger("click");
        }
    });
}
function gmmktime() {
    // Get UNIX timestamp for a GMT date  
    // 
    // version: 905.3122
    // discuss at: http://phpjs.org/functions/gmmktime
    // +   original by: Brett Zamir (http://brett-zamir.me)
    // +   derived from: mktime
    // *     example 1: gmmktime(14, 10, 2, 2, 1, 2008);
    // *     returns 1: 1201875002

    var no = 0, i = 0, ma = 0, mb = 0, d = new Date(), dn = new Date(), argv = arguments, argc = argv.length;

    var dateManip = {
        0: function(tt) {
            return d.setUTCHours(tt);
        },
        1: function(tt) {
            return d.setUTCMinutes(tt);
        },
        2: function(tt) {
            var set = d.setUTCSeconds(tt);
            mb = d.getUTCDate() - dn.getUTCDate();
            return set;
        },
        3: function(tt) {
            var set = d.setUTCMonth(parseInt(tt, 10) - 1);
            ma = d.getUTCFullYear() - dn.getUTCFullYear();
            return set;
        },
        4: function(tt) {
            return d.setUTCDate(tt + mb);
        },
        5: function(tt) {
            if (tt >= 0 && tt <= 69) {
                tt += 2000;
            }
            else if (tt >= 70 && tt <= 100) {
                tt += 1900;
            }
            return d.setUTCFullYear(tt + ma);
        }
        // 7th argument (for DST) is deprecated
    };

    for (i = 0; i < argc; i++) {
        no = parseInt(argv[i] * 1, 10);
        if (isNaN(no)) {
            return false;
        } else {
            // arg is number, let's manipulate date object
            if (!dateManip[i](no)) {
                // failed
                return false;
            }
        }
    }
    for (i = argc; i < 6; i++) {
        switch (i) {
            case 0:
                no = dn.getUTCHours();
                break;
            case 1:
                no = dn.getUTCMinutes();
                break;
            case 2:
                no = dn.getUTCSeconds();
                break;
            case 3:
                no = dn.getUTCMonth() + 1;
                break;
            case 4:
                no = dn.getUTCDate();
                break;
            case 5:
                no = dn.getUTCFullYear();
                break;
        }
        dateManip[i](no);
    }

    return Math.floor(d.getTime() / 1000);
}
function timeRange(input) {
    return {minTime: (input.id == 'week2' ?
                $('#week_maskfrom').timeEntry('getTime') : null),
        maxTime: (input.id == 'week1' ?
                $('#week_maskto').timeEntry('getTime') : null)};
}
Number.prototype.formatMoney = function(c, d, t){//kiểu protoype sử dụng giống method string.formatMoney(0, '.', ',')
			var n = this, 
				c = isNaN(c = Math.abs(c)) ? 2 : c, 
				d = d == undefined ? "." : d, 
				t = t == undefined ? "," : t, 
				s = n < 0 ? "-" : "", 
				i = parseInt(n = Math.abs(+n || 0).toFixed(c)) + "", 
				j = (j = i.length) > 3 ? j % 3 : 0;
			   return s + (j ? i.substr(0, j) + t : "") + i.substr(j).replace(/(\d{3})(?=\d)/g, "$1" + t) + (c ? d + Math.abs(n - i).toFixed(c).slice(2) : "");
};


// parseUri 1.2.2
// (c) Steven Levithan <stevenlevithan.com>
// MIT License
function parseUri (str) {
	var	o   = parseUri.options,
		m   = o.parser[o.strictMode ? "strict" : "loose"].exec(str),
		uri = {},
		i   = 14;

	while (i--) uri[o.key[i]] = m[i] || "";

	uri[o.q.name] = {};
	uri[o.key[12]].replace(o.q.parser, function ($0, $1, $2) {
		if ($1) uri[o.q.name][$1] = $2;
	});

	return uri;
};

parseUri.options = {
	strictMode: false,
	key: ["source","protocol","authority","userInfo","user","password","host","port","relative","path","directory","file","query","anchor"],
	q:   {
		name:   "queryKey",
		parser: /(?:^|&)([^&=]*)=?([^&]*)/g
	},
	parser: {
		strict: /^(?:([^:\/?#]+):)?(?:\/\/((?:(([^:@]*)(?::([^:@]*))?)?@)?([^:\/?#]*)(?::(\d*))?))?((((?:[^?#\/]*\/)*)([^?#]*))(?:\?([^#]*))?(?:#(.*))?)/,
		loose:  /^(?:(?![^:@]+:[^:@\/]*@)([^:\/?#.]+):)?(?:\/\/)?((?:(([^:@]*)(?::([^:@]*))?)?@)?([^:\/?#]*)(?::(\d*))?)(((\/(?:[^?#](?![^?#\/]*\.[^?#\/.]+(?:[?#]|$)))*\/?)?([^?#\/]*))(?:\?([^#]*))?(?:#(.*))?)/
	}
};		