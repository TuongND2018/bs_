<!--author:khatm-->
<style type="text/css">
#rowed3 td{
word-wrap:normal!important;
  white-space:nowrap;
  }
#tabs .ui-tabs-nav li {
    font-size: 90%;
    margin-top: 0.1em;
}#tabs .ui-tabs-nav li.ui-tabs-selected, #tabs .ui-tabs-nav li.ui-state-active {
  background: none repeat scroll 0 0 #F5F3E5;
    border-top:solid  #D8CEBE 1px;
    border-left:solid  #D8CEBE 1px;
    border-right:solid  #D8CEBE 1px;;
    box-shadow: none;
    font-size: 90%;
    margin-top: 0.1em;
}#tabs-1,#tabs-2{
    background:#F5F3E5!important;
    border:solid  #CCC 1px!important;
    border-radius:3px;

}#tabs .ui-tabs-nav li.ui-tabs-selected, #tabs .ui-tabs-nav li.ui-state-active {
z-index: 1;
}#tabs-1,#tabs-2{
    padding:0!important;
}#tabs-1-left-bottom{
    border-radius: 6px!important;
    box-shadow: 0 0 10px #A0A0A0;
    margin-top:6px;
    margin-left:5px;
     border: 1px solid #919191;
}
    #rowed3 td,#rowed4 td,#rowed5 td{

        font-size:13px!important;
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
        font-size:13px;
        padding:5px 0px;
        background:url("js/grid/themes/south-street/images/ui-bg_highlight-hard_15_459e00_1x100.png") repeat-x scroll   #459E00;
        border:#CCC 1px dashed;
    }

    .demgio{
        color:red;
        cursor:pointer;

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
    #menu {
        width: 150px!important;
        display:none;
        position:absolute;
        box-shadow:0px 0px 3px #333;
        z-index:100000;
        background: #ffffff;
    }
    #menu2 {
        width: 210px!important;
        display:none;
        position:absolute;
        box-shadow:0px 0px 3px #333;
        z-index:100000;
        background: #ffffff;
    }
    #menu3 {
        width: 210px!important;
        display:none;
        position:absolute;
        box-shadow:0px 0px 3px #333;
        z-index:100000;
        background: #ffffff;
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
</style>


<body>
   <ul id="menu" class="menu" style="display:none">
    <li class="xuatthuoctoatam" ><a href="#">Xuất thuốc toa tạm</a></li>
	 <li class="huythuoctoatam" ><a href="#">Hủy xuất  toa tạm</a></li>
     </ul>
    <div id="panel_main" style="margin-top:10px;" >
        <div id="top_main">
			<div class="form_row">
				<span>

					<label for="from_day" style="width:40px">Từ ngày</label>
					<input type="text"  value="<?php echo date($_SESSION["config_system"]["ngaythang"])?>" style="width:109px" name="from_day" id='from_day'>
					<label for="to_day" style="width:49px"> Đến ngày</label>
					<input type="text"  value="<?php echo date($_SESSION["config_system"]["ngaythang"])?>" style="width:109px" name="to_day" id='to_day'>
					<input type="radio" id="toacx" name="action" value="0" checked style="width: 11px !important;" /><label style="width: 73px !important;">Toa chưa xuất</label>
					<input type="radio" id="toadx" name="action" value="1"  /><label style="width: 73px !important;">Toa đã xuất</label>
					<input type="radio" id="toatt" name="action" value="2" /><label style="width: 73px !important;">Toa thuốc tạm</label>
					<!-- <input type="radio" id="toadv" name="action" value="3"  /><label style="width: 73px !important;">Toa đem về</label> -->
					<input type="radio" id="toabh" name="action" value="4"  /><label style="width: 73px !important;">Toa bảo hiểm</label>
                    <input type="radio" id="xemtc" name="action" value="5"  /><label style="width: 73px !important;">Xem tất cả</label>
					<button type="button" id="dung">Dừng</button><button type="button" id="tieptuc">Tiếp tục</button>
				</span>
           </div>
        </div>
        <div >



					<table id="rowed3" ></table>
                   </table>





			</div>
        </div>
    </div>

</body>
</html>

<script type="text/javascript">
    jQuery(document).ready(function() {
			var eventMethod = window.addEventListener ? "addEventListener" : "attachEvent";
			var eventer = window[eventMethod];
			var messageEvent = eventMethod == "attachEvent" ? "onmessage" : "message";
			eventer(messageEvent,function(e) {
				tam=e.data.split("||");
				if(tam[0]=='dong_hoso'){
					$('.modal567433265743657').dialog('close')
				}
			})



		openform_shortcutkey(); //mở bằng phím tắt được thiết lập trong DB

		$('.xuatthuoctoatam').bind('click',function(){

			var rowData = jQuery('#rowed3').getRowData(rowed3_right);
				dialog_main("Xuất thuốc toa tạm", 100, 100, 5674533265743657, "resource.php?module=<?=$modules?>&view=<?=$view?>&action=xuatthuoc_toatam&type=test&id_form=22&ID_DonThuoc="+rowData['ID_DonThuoc']+"&id_benhnhan="+rowData['ID_BenhNhan']);
			})
			$('.huythuoctoatam').bind('click',function(){

			var rowData = jQuery('#rowed3').getRowData(rowed3_right);
				dialog_main("Xuất thuốc toa tạm", 100, 100, 5674533265743657, "resource.php?module=<?=$modules?>&view=<?=$view?>&action=hoan_tra_toatam&type=test&id_form=22&id_donthuoc="+rowData['ID_DonThuoc']);
			})

        temp = jQuery(window).height()+490 ;
		phanquyen();
        $("#panel_main").css("height", temp + "px");
        $("#panel_main").fadeIn(1000);
        $('#hnay').button();
		//$('#xem').button();
		//$('#xemtc').button();
		//$('#excel').button();
		$('#dung').button();
		$('#tieptuc').button();
		$('#tieptuc').hide();
		//xem_click();
		toacx_click();
		toatt_click();
		toadv_click();
		toadx_click();
		xemtc_click();
		toabh_click();
		dung_click();
		tieptuc_click()
         window._tungay='';
         window._denngay='';
        timer_danhsach("start");
	timer_title_danhsach("start");
	checkbox_search('gs_DaXuat','#rowed3')
        // $( "#tabs" ).tabs({

     	 // heightStyle:"fill"

		 // });

       $(document).bind("mouseup", function(e) {
            $("#menu").hide();
        });
		$("#menu").menu();
     	create_grid();
        resize_control();


        $(window).resize(function() {
            temp = jQuery(window).height() - 50;
            $("#panel_main").css("height", temp + "px");
            resize_control();
        })
		$("#from_day").datepicker({
            showWeek: true,
            defaultDate: "+1w",
            changeMonth: true,
            changeYear: true,
            numberOfMonths: 1,
             showButtonPanel: true,
            dateFormat: $.cookie("ngayJqueryUi"),
			maxDate: new Date(<?php echo date("Y")?>, <?php echo date("m")?>-1, <?php echo date("d")?>),
            onClose: function(selectedDate) {
            	 $("#to_day").datepicker("option", "minDate", selectedDate);
            },
            onSelect: function(dat, inst) {
            }
        });
        $("#to_day").datepicker({
            showWeek: true,
            defaultDate: "+1w",
            changeMonth: true,
            changeYear: true,
            numberOfMonths: 1,
            showButtonPanel: true,
            gotoCurrent:true,
            dateFormat: $.cookie("ngayJqueryUi"),
            minDate: new Date(<?php echo date("Y")?>, <?php echo date("m")?>-1, <?php echo date("d")?>),
            onClose: function(selectedDate) {
                $("#from_day").datepicker("option", "maxDate", selectedDate);
            },
            onSelect: function(dat, inst) {
            }
        });
         $.dateEntry.setDefaults({spinnerImage: ''});
		 $("#from_day, #to_day").dateEntry({dateFormat: $.cookie("ngayDateEntry")});

    })

	function xem_click(){
		$( "#xem" ).click(function() {

		$('body').find(':input[type=radio]:checked').each(function(){

		$('#'+this.id).click();
		});
		});
	}
	function xemtc_click(){
			$( "#xemtc" ).click(function() {
				//jQuery("#rowed3").jqGrid('setLabel', 'NgayGioInBill', 'Giờ in bill');
			var fd= $( '#from_day' ).datepicker( "getDate" );
			   var d= $( '#from_day' ).val();
			   var tfd= $( '#to_day' ).datepicker( "getDate" );
			   var td= $( '#to_day' ).val();
				$("#rowed3").jqGrid('setGridParam',{url:'resource.php?module=<?= $modules ?>&view=<?= $view ?>&action=data_dstoathuoc_tatcatoa&tu_ngay='+ $( '#from_day' ).val()+'&den_ngay='+$( '#to_day' ).val(),datatype:"json"}).trigger('reloadGrid');
				//var d=$("#rowed3").jqGrid('getGridParam', 'records');
				$("#rowed3").jqGrid('setCaption', 'Tất cả danh sách toa thuốc từ ngày '+ d+ ' đến ngày '+ td);
			});
		}
	function toacx_click(){
			$( "#toacx" ).click(function() {
				// $('#rowed3').setColProp('colname', {editoptions:{value:newOptions}});
			  jQuery("#rowed3").jqGrid('setLabel', 'NgayGioInBill', 'Giờ in bill');
			   var fd= $( '#from_day' ).datepicker( "getDate" );
			   var d= $( '#from_day' ).val();
			   var tfd= $( '#to_day' ).datepicker( "getDate" );
			   var td= $( '#to_day' ).val();
				$("#rowed3").jqGrid('setGridParam',{url:'resource.php?module=<?= $modules ?>&view=<?= $view ?>&action=data_dstoathuoc_toachuaxuat&tu_ngay='+ $( '#from_day' ).val()+'&den_ngay='+$( '#to_day' ).val(),datatype:"json"}).trigger('reloadGrid');
				//var d=$("#rowed3").jqGrid('getGridParam', 'records');
				$("#rowed3").jqGrid('setCaption', 'Danh sách toa thuốc chưa xuất từ ngày '+ d+ ' đến ngày '+ td);
			});
		}
	function toadx_click(){
			$( "#toadx" ).click(function() {
				//jQuery("#rowed3").jqGrid('setLabel', 'NgayGioInBill', 'Giờ in bill');
			   var fd= $( '#from_day' ).datepicker( "getDate" );
			   var d= $( '#from_day' ).val();
			   var tfd= $( '#to_day' ).datepicker( "getDate" );
			   var td= $( '#to_day' ).val();
				$("#rowed3").jqGrid('setGridParam',{url:'resource.php?module=<?= $modules ?>&view=<?= $view ?>&action=data_dstoathuoc_toadaxuat&tu_ngay='+ $( '#from_day' ).val()+'&den_ngay='+$( '#to_day' ).val(),datatype:"json"}).trigger('reloadGrid');
				//var d=$("#rowed3").jqGrid('getGridParam', 'records');
				$("#rowed3").jqGrid('setCaption', 'Danh sách toa thuốc đã xuất từ ngày '+ d+ ' đến ngày '+ td);
			});
		}
	function toatt_click(){
			$( "#toatt" ).click(function() {
				//jQuery("#rowed3").jqGrid('setLabel', 'NgayGioInBill', 'Giờ xuất');
			   var fd= $( '#from_day' ).datepicker( "getDate" );
			   var d= $( '#from_day' ).val();
			   var tfd= $( '#to_day' ).datepicker( "getDate" );
			   var td= $( '#to_day' ).val();
				$("#rowed3").jqGrid('setGridParam',{url:'resource.php?module=<?= $modules ?>&view=<?= $view ?>&action=data_dstoathuoc_toathuoctam&tu_ngay='+ $( '#from_day' ).val()+'&den_ngay='+$( '#to_day' ).val(),datatype:"json"}).trigger('reloadGrid');
				//var d=$("#rowed3").jqGrid('getGridParam', 'records');
				$("#rowed3").jqGrid('setCaption', 'Danh sách toa thuốc tạm từ ngày '+ d+ ' đến ngày '+ td);
			});
		}
	function toadv_click(){
			$( "#toadv" ).click(function() {
			   var fd= $( '#from_day' ).datepicker( "getDate" );
			   var d= $( '#from_day' ).val();
			   var tfd= $( '#to_day' ).datepicker( "getDate" );
			   var td= $( '#to_day' ).val();
				$("#rowed3").jqGrid('setGridParam',{url:'resource.php?module=<?= $modules ?>&view=<?= $view ?>&action=data_dstoathuoc_toademve&tu_ngay='+ $( '#from_day' ).val()+'&den_ngay='+$( '#to_day' ).val(),datatype:"json"}).trigger('reloadGrid');
				//var d=$("#rowed3").jqGrid('getGridParam', 'records');
				$("#rowed3").jqGrid('setCaption', 'Danh sách toa thuốc đem về từ ngày '+ d+ ' đến ngày '+ td);
			});
		}
	function toabh_click(){
			$( "#toabh" ).click(function() {
			    var fd= $( '#from_day' ).datepicker( "getDate" );
			   var d= $( '#from_day' ).val();
			   var tfd= $( '#to_day' ).datepicker( "getDate" );
			   var td= $( '#to_day' ).val();
				$("#rowed3").jqGrid('setGridParam',{url:'resource.php?module=<?= $modules ?>&view=<?= $view ?>&action=data_dstoathuoc_toabaohiem&tu_ngay='+ $( '#from_day' ).val()+'&den_ngay='+$( '#to_day' ).val(),datatype:"json"}).trigger('reloadGrid');
				//var d=$("#rowed3").jqGrid('getGridParam', 'records');
				$("#rowed3").jqGrid('setCaption', 'Danh sách toa thuốc bảo hiểm từ ngày '+ d+ ' đến ngày '+ td);
			});
		}
		function dung_click(){
			$( "#dung" ).click(function() {
			    timer_danhsach("stop");
				timer_title_danhsach("stop");
				$('#tieptuc').show();
				$('#dung').hide();
			});
		}
		function tieptuc_click(){
			$( "#tieptuc" ).click(function() {
			    timer_danhsach("start");
				timer_title_danhsach("start");
				$('#dung').show();
				$('#tieptuc').hide();
			});
		}
    function create_layout() {
        $('#panel_main').layout({
            resizerClass: 'ui-state-default'
                    , north: {
                resizable: true
                        , size: "5%"
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
                        , size: "65%"

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

var reload_luoi_danhsach =<?php echo (get_system_config_("ThoiGianRefreshHangDoiCanLamSang")) ?>;
function timer_danhsach(_value) {
	if (_value != "stop") {
		timer = setInterval(function() {
			if (window.kiemtrasearch == true) {
				$('#rowed3').setGridParam({datatype: "json"}).trigger('reloadGrid');


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
				$('#gbox_rowed3 .ui-jqgrid-title span.demgio').html(" Tự động reload sau " + tam + " giây");


					//alert(tam);
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
		$('#gbox_rowed3 .ui-jqgrid-title span.demgio').html(" Đang dừng xếp hàng");

	}
}

    function resize_control() {
      //  cao_left = $(".left_col").height() / 2 - 82;
      //  $("#rowed3,#rowed4 ").setGridWidth($(".left_col").width() - 11);
      //  $("#rowed3,#rowed4 ").setGridHeight(cao_left);

		$("#rowed3").setGridWidth($(window).width()-10);
		$("#rowed3").setGridHeight($(window).height()-$("#top_main").height()-$(".ui-tabs-nav").height()-110);
//        $("#rowed5").setGridWidth($(".right_col").width() - 11);
//        $("#rowed5").setGridHeight($(".right_col").height() - 60);
    }
    function numFormat( cellvalue, options, rowObject ){
        return cellvalue.replace(",",".");
    }

 function create_grid() {
        window.kiemtrasearch = true;
        $("#rowed3").jqGrid({
            url: 'resource.php?module=<?= $modules ?>&view=<?= $view ?>&action=data_dstoathuoc_toachuaxuat&tu_ngay='+ $( '#from_day' ).val()+'&den_ngay='+$( '#to_day' ).val(),
            datatype: "json",
            colNames: ['LuotKham','ID BN', '<?php get_text1("maBN") ?>','Họ Bệnh Nhân', 'Tên BN',
        '<?php get_text1("tuoi") ?>', '<?php get_text1("gioitinh") ?>',
        'Địa chỉ','BS','Ngày kê đơn', 'Tiền ĐT', 'Thực trả', 'Xuất', 'Gchú', 'Hồ sơ','Giờ in bill','','Xuất bởi','','Giờ xuất','Id_phieuxuat','toatam',''],
            colModel: [
                {name: 'ID_DonThuoc', index: 'ID_DonThuoc', width: "0%", editable: false, align: 'left', hidden: true},
				{name: 'ID_BenhNhan', index: 'ID_BenhNhan', width: "0%", editable: false, align: 'left', hidden: true},
                {name: 'MaBenhNhan', index: 'MaBenhNhan', search: true, width: "4%", editable: false, align: 'left', hidden: false,sorttype:'integer'},
                {name: 'HoBenhNhan',  index: 'HoBenhNhan', search: true, width: "12%", editable: false, align: 'left', hidden: false},
				{name: 'TenBenhNhan',  index: 'TenBenhNhan', search: true, width: "3%", editable: false, align: 'left', hidden: false},
                {name: 'Tuoi', index: 'Tuoi', search: true, width: "2%", editable: false, align: 'right', hidden: false,sorttype:'integer'},
                {name: 'GioiTinh', index: 'GioiTinh', search: true, width: "3%", editable: false, align: 'center', hidden: false},
                {name: 'DiaChi', index: 'DiaChi', search: true, width: "10%", editable: false, align: 'left', hidden: false},
                {name: 'BSKeDon', index: 'BSKeDon', search: true, width: "5%", editable: false, align: 'left', hidden: false},
                {name: 'NgayKeDon', index: 'NgayKeDon', search: false, width: "8%", editable: false, align: 'center', hidden: false,sorttype:'date'},
           {name: 'TongTienTD',formatter:numFormat, width: "3%",sortable: true, index: 'TongTienTD', search: true,  editable: false, align: 'right', hidden: false},
            {name: 'TongTienTT', formatter:numFormat,width: "4%",sortable: true, index: 'TongTienTT', search: true,  editable: false, align: 'right', hidden: false},
                {name: 'TThai', index: 'TThai',search:true, width:"5%",hidden:false},
                {name: 'GhiChu', index: 'GhiChu', search: true, width: "3%", editable: false, align: 'center', hidden: false},
                {name: 'HoSo', index: 'HoSo', search: true, width: "3%", editable: false, align: 'center', hidden: false},
				{name: 'NgayGioInBill', index: 'NgayGioInBill', search: false, width: "7%", editable: false, align: 'left', hidden: false,},

                {name: 'TrangThaiDonThuoc', index: 'TrangThaiDonThuoc', search: false, hidden: true,},
                {name: 'nxuat',  index: 'nxuat', search: true, width: "7%", editable: false, align: 'center', hidden: false},
                {name: 'IsLock',  index: 'IsLock', search: true, width: "0%", editable: false, align: 'center', hidden: true},
                {name: 'GioXuat',  index: 'GioXuat', search: true, width: "7%", editable: false, align: 'center', hidden: false},
                {name: 'ID_XuatKho',  index: 'ID_XuatKho', search: true, width: "0%", editable: false, align: 'center', hidden: true},
				{name: 'toatam',  index: 'toatam', search: true, width: "0%", editable: false, align: 'center', hidden: true},
				{name: 'trangthailuotkham',  index: 'trangthailuotkham', search: true, width: "0%", editable: false, align: 'center', hidden: true},
            ],


            loadonce: true,
            scroll: false,
            modal: true,
            shrinkToFit: true,

            rowNum: 10000000,
            rowList: [],
            pager: '#prowed3',
            height: 100,
            width: 100,
            viewrecords: true,
            ignoreCase: true,
            sortorder: "desc",
            onSelectRow: function(id) {
            },
           ondblClickRow: function(rowId) {
				var rowData = jQuery('#rowed3').getRowData(rowId);				
				dialog_main("Bán lẻ theo đơn ", 100, 100, 567433265743657, "resource.php?module=<?=$modules?>&view=<?=$view?>&action=chitiet&type=test&id_form=22&ID_DonThuoc="+rowData['ID_DonThuoc']+"&id_benhnhan="+rowData['ID_BenhNhan']+"&id_xuatkho="+rowData['ID_XuatKho']+"&toatam="+rowData['toatam']);
			},
            onselect: function(rowId, rowIndex, columnIndex) {

            },
            onRightClickRow: function(rowid, iRow, iCol, e) {
				$(document).bind("contextmenu", function(e) {
						return false;
					});
				var rowData = jQuery('#rowed3').getRowData(rowid);			
				if($('input:radio[name="action"]:checked').val() == 2){
					$('.xuatthuoctoatam').show();
					if(rowData['toatam']==1){
						$('.huythuoctoatam').show();						
					}else{						
						$('.huythuoctoatam').hide();
					}					
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
					window.rowed3_right=rowid;
					$("#menu").show(100);


				}
				if($('input:radio[name="action"]:checked').val() == 5){
					if(rowData['toatam']==1){
						$('.huythuoctoatam').show();	
						$('.xuatthuoctoatam').hide();	
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
						window.rowed3_right=rowid;
						$("#menu").show(100);				
					}else {		
						if(rowData['trangthailuotkham']=='KetThucKham'){
							$('.xuatthuoctoatam').hide();
						}else{
							$('.huythuoctoatam').hide();	
							$('.xuatthuoctoatam').show();
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
							window.rowed3_right=rowid;
							$("#menu").show(100);
							
						}
						
					}
					
					
						
				}


            },
            loadComplete: function(data) {
				
				var gridDOM = this; 
					if ($(this).jqGrid('getGridParam', 'datatype') === 'json') {
						
						setTimeout(function () {							
							gridDOM.triggerToolbar();
						}, 100);
					}else{
                var ids = $('#rowed3').jqGrid('getDataIDs');
                for (i = 0; i < ids.length; i++) {
                    var rowData = jQuery('#rowed3').getRowData(ids[i]);
                var TrangThaiDonThuoc=  rowData["TrangThaiDonThuoc"];
               switch(TrangThaiDonThuoc) {
                        case 'FullNormal':
                              $("#rowed3").setCell(ids[i], 'TThai','', {background: '#d9f970'});
                            break;
                          case 'NotFull':
                             $("#rowed3").setCell(ids[i], 'TThai','', {background: 'yellow'});
                            break;
                             case 'Cancel':
                             $("#rowed3").setCell(ids[i], 'TThai','', {background: 'red'});
                            break;
                        default:

                    }




				






                    window.rowcount_luoichuathanhtoan = $("#rowed3").getGridParam("reccount");

                    if (rowData["NotesStatus"] == 1) {
                        var _class = "do";

                    } else if (rowData["NotesStatus"] == 2) {
                        var _class = "cam";

                    } else if (rowData["NotesStatus"] == 0) {
                        var _class = "xanh";

                    }
                    ghichu = "<input class='custom_button " + _class + "' style='height:22px;width:50px;' type='button' value='G.chú' onclick=\"moghichu('" + rowData["ID_BenhNhan"] + "','" + rowData["TenBenhNhan"] + "');\" />";
                    $("#rowed3").jqGrid('setRowData', ids[i], {GhiChu: ghichu});

					HoSo = "<input class='custom_button ' style='height:22px;width:50px;' type='button' value='H.sơ' onclick=\"mohoso('" + rowData["ID_BenhNhan"] + "','" + rowData["TenBenhNhan"] + "');\" />";
                    $("#rowed3").jqGrid('setRowData', ids[i], {HoSo: HoSo});

					var caption= 'Danh sách toa thuốc('+ jQuery("#rowed3").jqGrid('getGridParam', 'records')+')'+' [ <span class="demgio"> Tự động reload sau ' + reload_luoi_danhsach + ' giây</span> ]';
					jQuery("#rowed3").jqGrid('setCaption', caption);


                }
					}
            },caption: "Danh sách toa thuốc"

        });
        $("#rowed3").jqGrid('filterToolbar', {searchOperators: false, searchOnEnter: false, defaultSearch: "cn"});
        $("#rowed3").jqGrid('navGrid', "#prowed3", {add: false, edit: false, del: false, search: false, refresh: true, closeAfterEdit: true, clearAfterAdd: true, navkeys: [true, 38, 40], closeOnEscape: true});

    }
 function moghichu(id_benhnhan, hoten) {
        elem = 1 + Math.floor(Math.random() * 1000000000);
        dialog_main("Ghi chú của bệnh nhân: " + hoten, 100, 70, elem, 'resource.php?module=hanhchinh&view=ghi_chu&id_form=230&idbenhnhan=' + id_benhnhan)
    }

function mohoso(id_benhnhan, hoten) {

      parent.postMessage('benhan;'+id_benhnhan+';'+hoten, "*");
    }


</script>

