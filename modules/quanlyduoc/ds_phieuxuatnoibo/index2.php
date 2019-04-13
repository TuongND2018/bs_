<style type="text/css">
#rowed3 td,#rowed4 td,#rowed5 td{
	font-size:11px!important;
}
input[type=button].custom_button:focus{
	outline:  none;
}
:focus {outline:none;}
::-moz-focus-inner {border:0;}
#n_top_menu{
	height:30px;
	border-radius:4px;
	/*border: solid 1px #999999;*/
	background:#F5F3EB;
	width:99.2%;
	margin-left:3px;
	border: 1px solid #919191;
    box-shadow: 0 0 10px #a0a0a0;
    margin-left: 4px;
    margin-top: 5px;
}
.grid1{
	position:absolute;
	top:3px;
	left:230px;
}
.chuachot{
	background:#FF6347;
}
#gbox_rowed33, #gbox_rowed44 {
    border: 1px solid #919191;
    box-shadow: 0 0 10px #a0a0a0;
    margin-left: 4px;
    margin-top: 5px;
}
</style>


<body>
<div id="dialog-duyetxuat" title="Thông báo" style="display:none">
  <p><span class="ui-icon ui-icon-alert" style="float:left; margin:0 7px 20px 0;"></span>Bạn chắc chắn muốn duyệt xuất phiếu đang chọn</p>
</div>
<div id="dialog-duyetnhap" title="Thông báo" style="display:none">
  <p><span class="ui-icon ui-icon-alert" style="float:left; margin:0 7px 20px 0;"></span>Bạn chắc chắn muốn duyệt nhập phiếu đang chọn</p>
</div>

<div id="dialog-huychot" title="Thông báo" style="display:none">
  <p><span class="ui-icon ui-icon-alert" style="float:left; margin:0 7px 20px 0;"></span>Bạn chắc chắn muốn hủy chốt phiếu đang chọn</p>
</div>
<div id="dialog-loichotphieu" title="Thông báo" style="display:none">
  <p><span class="ui-icon ui-icon-alert" style="float:left; margin:0 7px 20px 0;"></span> <span id="noidungchotphieu"> </span></p>
</div>
 <div id="dialog-confirm" title="Thông báo" style="display:none">
  <p>Bạn chắc chắn muốn duyệt phiếu đã chọn?</p>
</div>
<div id="dialog-loithuoc" title="Thông báo" style="display:none">
  <p><span id="tenthuoc_ton" style="font-weight:bold"></span> số lượng tồn không đủ để xuất</p>
</div>
	<div id='n_top_menu' style="margin-top:5px;display:inline-block; padding-top:5px;">
    	<input type="radio" id="xuatnoibo" name="chon" checked><label for="xuatnoibo">Phiếu xuất nội bộ</label>
        <input type="radio" id="xuatdieuchuyen" name="chon"><label for="xuatdieuchuyen">Phiếu xuất điều chuyển</label>
           	<span style='margin-left:10px'> Từ ngày <input type='text' id='tungay' value='<?php echo date("d/m/".$_SESSION["config_system"]["namUI"])?>'  style=' width:85px; text-align:center'> đến ngày <input type='text' id='denngay' value='<?php echo date("d/m/".$_SESSION["config_system"]["namUI"])?>'  style=' width:85px; text-align:center'> <button id='xem' style='margin-left:5px;0.2em 1em !important; margin-top: -4px;'> Xem</button></span>
            <button id="huychot" style='margin-left:5px;0.2em 1em !important; margin-top: -4px;'>Hủy chốt</button>
            <button id="gopphieu" style='margin-left:5px;0.2em 1em !important; margin-top: -4px;'>Gộp phiếu</button>
            <button id="huygop" style='margin-left:5px;0.2em 1em !important; margin-top: -4px; display:none'>Hủy gộp</button>
            <button id="xemin" style='margin-left:5px;0.2em 1em !important; margin-top: -4px;'>In phiếu</button>
            <button id="xeminphieugop" style='margin-left:5px;0.2em 1em !important; margin-top: -4px;'>In phiếu gộp</button>
            <span style="margin-left:15px;">Khoa: <input id='khoa' class='khoa'  placeholder="--Chọn khoa--"  ></span>
             <button id="xemtonghop" style='margin-left:30px;0.2em 1em !important; margin-top: -4px;'>Xem tổng hợp</button>
     </div>
    <div id="panel_main" >
    	
        <div class="left_col ui-widget-content ui-layout-center">
      <div id="luoitrai" style="">
         <div class="ui-layout-north n_tren">
        
            <table id="rowed3" ></table>
            <div id="prowed3" ></div> 
            <table id="rowed33" ></table>
            <div id="prowed33" ></div> 
        </div>
        <div class="ui-layout-center n_duoi">
            <table id="rowed4" ></table>
            <table id="rowed44" ></table>
        </div>
     </div>
        </div>

        <div class="ui-layout-east ui-widget-content right_col">
         <table id="rowed5"></table>
         <table id="rowed6" ></table>
   	 </div>
</body>
</html>

<script type="text/javascript">
	jwerty.key('ctrl+shift+z', false);
	var loadlandau=0;
	window.n_id_huychot=0;
	window.n_action=1;
	window._maphieugop='';
  jQuery(document).ready(function() {
	$("#tungay").datepicker({
		changeMonth: true,
		changeYear: true,
		dateFormat: $.cookie("ngayJqueryUi")
	});
	$("#denngay").datepicker({
		changeMonth: true,
		changeYear: true,
		dateFormat: $.cookie("ngayJqueryUi")
	});
	$(document).keyup(function(e) {
		if(jwerty.is("ctrl+shift+z",e)){
			if(window.n_id_huychot>0){
				$.post('resource.php?module=<?= $modules ?>&view=<?= $view ?>&action=huychot&id_phieu='+window.n_id_huychot).done(function(data){
					$("#xem").click();
				});
				return false;
			}
		}
	});
	$( "#huychot").click(function(e) {
        if(window.n_id_huychot>0){
			$( "#dialog-huychot" ).dialog('open');
			return false;
		}
    });
	
	$("#gopphieu").click(function(e) {
		window.id_gopphieu='';
		var demgop=0;
		var tmp1 = $("#rowed33").jqGrid('getDataIDs'); 
		for(var i=0;i < tmp1.length;i++){
			var rowData = $("#rowed33").getRowData(tmp1[i]);	
			if(rowData["Gop"]==1){
				demgop=demgop+1;
				if(window.id_gopphieu==''){
					window.id_gopphieu=tmp1[i];	
				}else{
					window.id_gopphieu=window.id_gopphieu+'_'+tmp1[i];
				}
			}
		}
		if(demgop>1){
		   $.post('resource.php?module=<?= $modules ?>&view=<?= $view ?>&action=controller_gopphieu&id='+window.id_gopphieu).done(function(data){
				$("#xem").click();
		   });
		}else{
			tooltip_message("Bạn phải chọn tối thiểu 2 phiếu để gộp");
		}
    });
	$("#huygop").click(function(e) {
	 	$.post('resource.php?module=<?= $modules ?>&view=<?= $view ?>&action=controller_huygop&id='+window.maphieugop).done(function(data){
			$("#xem").click();
	   });
	});
	
	$( "#dialog-duyetxuat" ).dialog({
		  resizable: false,
		  autoOpen:false,
		  height:180,
		  modal: true,
		  buttons: {
			"YES": function() {
			  $( this ).dialog( "close" );
			  $.post('resource.php?module=<?= $modules ?>&view=<?= $view ?>&action=controller_duyetxuat&id_phieu='+window.idxuatnoibo+'&maphieugop='+window._maphieugop).done(function(data){
				$("#xem").click();
			});
			},
			"NO": function() {
			  $( this ).dialog( "close" );
			}
		  }
		});
	
	$(function() {
		$( "#dialog-huychot" ).dialog({
		  resizable: false,
		  autoOpen:false,
		  height:180,
		  modal: true,
		  buttons: {
			"YES": function() {
			  $( this ).dialog( "close" );
			  $.post('resource.php?module=<?= $modules ?>&view=<?= $view ?>&action=huychot&id_phieu='+window.n_id_huychot).done(function(data){
				$("#xem").click();
			});
			},
			"NO": function() {
			  $( this ).dialog( "close" );
			}
		  }
		});
	  });
	  
	$(function() {
    $( "#dialog-loichotphieu" ).dialog({
      resizable: false,
      height:180,
	  width:330,
	  autoOpen:false,
      modal: true,
      buttons: {
        "OK": function() {
          $( this ).dialog( "close" );
        }
      }
    });
  });
	create_combobox_new('#khoa',create_khoa,'bw','','data_khoa',0);
    $("#panel_main").css("height",$(window).height()+"px");
    $("#panel_main").fadeIn(1000);
    $(".left_col").css('height',$("#panel_main").height());
    $('#luoitrai').css('height',$(".left_col").height());
    openform_shortcutkey(); //mở bằng phím tắt được thiết lập trong DB
	create_layout();
	create_layout2();
	create_grid_2();
	create_grid2_2();
	create_grid();
	create_grid2();
	create_grid3();
	create_grid4();
	resize_control();
	
	$("#xem").button();
	$("#gbox_rowed6").hide();
	$("#gbox_rowed3").show();
	$("#gbox_rowed33").hide();
	$("#gbox_rowed4").show();
	$("#gbox_rowed44").hide();
	
	$("#xuatnoibo").click(function(e) {
		//$("#tieude").html('Phiếu xuất nội bộ chi tiết');
		window.n_action=1;
        $("#gbox_rowed3").show();
		$("#gbox_rowed33").hide();
		$("#gbox_rowed4").show();
	    $("#gbox_rowed44").hide();
		$("#xem").click();
		$("#tieude1").html('Chi tiết thuốc xuất nội bộ');
    });
	
	$("#xuatdieuchuyen").click(function(e) {
		//$("#tieude").html('Phiếu xuất điều chuyển chi tiết');
		window.n_action=2;
        $("#gbox_rowed3").hide();
		$("#gbox_rowed33").show();
		$("#gbox_rowed4").hide();
	    $("#gbox_rowed44").show();
		$("#xem").click();
		$("#tieude1").html('Chi tiết thuốc xuất điều chuyển');
    });
	
	$("#xemtonghop").click(function(e) {
		$("#tenkhoahienthi").html($("#khoa").val());
        $("#gbox_rowed5").hide();
		$("#gbox_rowed6").show();
		$("#rowed6").jqGrid('setGridParam',{datatype: 'json',url:"resource.php?module=<?= $modules ?>&view=<?= $view ?>&action=data_danhsach_phieuxuatnoibo_tonghop&tungay="+$("#tungay").val()+"&denngay="+$("#denngay").val()+"&khoa="+$("#khoa_hidden").val()}).trigger('reloadGrid');
		//alert();
    });
	setTimeout(function(){
		$("#xem").click();	
	},500)
	
	$("#xem").click(function(e) {
		$("#rowed3_duyet").addClass('ui-state-disabled');
		$("#rowed33_duyet").addClass('ui-state-disabled');
		window.n_id_huychot=0;
		$("#gbox_rowed6").hide();
		$("#gbox_rowed5").show();
		if(window.n_action==1){
			$("#rowed3").jqGrid('setGridParam',{datatype: 'json',url:"resource.php?module=<?= $modules ?>&view=<?= $view ?>&action=data_danhsach_phieuxuatnoibo&tungay="+$("#tungay").val()+"&denngay="+$("#denngay").val()}).trigger('reloadGrid');
			$("#rowed4").jqGrid('setGridParam',{datatype: 'json',url:"resource.php?module=<?= $modules ?>&view=<?= $view ?>&action=data_danhsach_phieuxuatnoibo_daduyet&tungay="+$("#tungay").val()+"&denngay="+$("#denngay").val()}).trigger('reloadGrid');
		}else{
			$("#rowed33").jqGrid('setGridParam',{datatype: 'json',url:"resource.php?module=<?= $modules ?>&view=<?= $view ?>&action=data_danhsach_phieuxuatdieuchuyen&tungay="+$("#tungay").val()+"&denngay="+$("#denngay").val()}).trigger('reloadGrid');
			$("#rowed44").jqGrid('setGridParam',{datatype: 'json',url:"resource.php?module=<?= $modules ?>&view=<?= $view ?>&action=data_danhsach_phieuxuatdieuchuyen_daduyet&tungay="+$("#tungay").val()+"&denngay="+$("#denngay").val()}).trigger('reloadGrid');
		}
    });
	$("#xemin").click(function(e) {
		$.post('resource.php?module=<?= $modules ?>&view=<?= $view ?>&action=checkchot&id_phieuxuatnoibo='+window.inphieuid).done(function(data){
			if(data=='true'){
				$.cookie("in_status", "print_preview");
				if(window.n_action==1){
					dialog_report("Xem trước khi in",90,90,"u78787878975f","resource.php?module=report&view=quanlyduoc&action=phieuxuatthuocnoibo&idphieu="+window.inphieuid+"&type=report&id_form=10",'PhieuLinhThuoc');
				}else{
					dialog_report("Xem trước khi in",90,90,"u78787878975f","resource.php?module=report&view=quanlyduoc&action=phieuxuatdieuchuyen_new&idphieu="+window.inphieuid+"&maphieugop=&type=report&id_form=10",'PhieuLinhThuoc');
				}
			}else{
				$("#noidungchotphieu").html("Phiếu này chưa chốt nên không thể in");
				$( "#dialog-loichotphieu" ).dialog('open');
				//tooltip_message("Phiếu này "+dataRow2['Khoa']+" chưa chốt nên không thể duyệt");
			}
		});
           
    });
	
	$("#xeminphieugop").click(function(e) {
        dialog_report("Xem trước khi in",90,90,"u78787878975f","resource.php?module=report&view=quanlyduoc&action=phieuxuatdieuchuyen_new&idphieu="+window.maphieugop+"&maphieugop="+window.maphieugop+"&type=report&id_form=10",'PhieuLinhThuoc');
    });
	
	$( "#dialog-loithuoc" ).dialog({
      resizable: false,
	  autoOpen:false,
      height:160,
	  width:350,
      modal: true,
      buttons: {
        "OK": function() {
          $( this ).dialog( "close" );
        }
      }
    });
	
	$( "#dialog-confirm" ).dialog({
      resizable: false,
	  autoOpen:false,
      height:160,
	  width:350,
      modal: true,
      buttons: {
        "YES": function() {
          $( this ).dialog( "close" );
		  if(window.n_action==1){
			   $.post('resource.php?module=<?= $modules ?>&view=<?= $view ?>&action=controller&hienmaloi=a&idxuatnoibo='+window.idxuatnoibo+'&nguoitao='+window.idnguoitao).done(function(data){	
					data=data.split(';');
					if(data[2]==1){
						$("#tenthuoc_ton").html(data[3]);
						$( "#dialog-loithuoc" ).dialog('open');
					}else{
						tooltip_message("Duyệt thành công");
						window.daduyetnhap=1;
						$("#xem").click();
					}
				});
		  }else{
			  if(window._maphieugop>0){
				  $.post('resource.php?module=<?= $modules ?>&view=<?= $view ?>&action=controller_dieuchuyen_gopphieu&hienmaloi=a&maphieugop='+window._maphieugop+'&tukho='+window.tukho+'&denkho='+window.denkho+'&nguoitao='+window.idnguoitao).done(function(data){	
				 // alert(data);
						data=data.split(';');
						if(data[0]==1){
							$("#tenthuoc_ton").html(data[1]);
							$( "#dialog-loithuoc" ).dialog('open');
						}else{
							tooltip_message("Duyệt thành công");
							window.daduyetnhap=1;
							$("#xem").click();
						}
					});
			  }else{
				   $.post('resource.php?module=<?= $modules ?>&view=<?= $view ?>&action=controller_dieuchuyen&hienmaloi=a&idxuatnoibo='+window.idxuatnoibo+'&tukho='+window.tukho+'&denkho='+window.denkho+'&nguoitao='+window.idnguoitao+'&nguoiduyetxuat='+window.idnguoiduyetxuat).done(function(data){	
						data=data.split(';');
						if(data[2]==1){
							$("#tenthuoc_ton").html(data[3]);
							$( "#dialog-loithuoc" ).dialog('open');
						}else{
							tooltip_message("Duyệt thành công");
							window.daduyetnhap=1;
							$("#xem").click();
						}
					});
			  }
		  }
        },
        "NO": function() {
          $( this ).dialog( "close" );
        }
      },open: function () {
		  $(this).closest('.ui-dialog').find('.ui-dialog-buttonpane button:eq(0)').focus();
		  $(this).closest('.ui-dialog').find('.ui-dialog-buttonpane button:eq(0)').addClass('n_btn1');
		   $(this).closest('.ui-dialog').find('.ui-dialog-buttonpane button:eq(1)').addClass('n_btn2');
		 //var hasFocus = $('.n_btn1').is(':focus');
			  $('.ui-dialog').keyup(function(e) {
				  if (e.keyCode === 37){
					  $('.n_btn1').focus();
					  $('.n_btn2').focusout();
				  }
				  if (e.keyCode === 39){
					  $('.n_btn2').focus();
					  $('.n_btn1').focusout();
				  }
				})
		}
    });
	$("#huychot,#gopphieu,#huygop").button();
	phanquyen();
	$("#xemtonghop").button();
	$("#xemin,#xeminphieugop").button();
	$("#rowed3_duyet").addClass('ui-state-disabled');
	$("#rowed33_duyet").addClass('ui-state-disabled');
	$(window).resize(function() {
		$("#panel_main").css("height",$(window).height()+"px");
		$("#panel_main").fadeIn(1000);
		$(".left_col").css('height',$("#panel_main").height());
		$('#luoitrai').css('height',$(".left_col").height());
	})
})//end ready


function create_layout() {
	$('#panel_main').layout({
		resizerClass: 'ui-state-default'
				, east: {
			resizable: true
					, size: "30%"
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
					, size: "70%"

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
   
function create_layout2(){
    $('#luoitrai').layout({
            resizerClass: 'ui-state-default'
                    , north: {
                resizable: true
                        , size: "50%"
                        , resizerDblClickToggle: false
                        , onresize_end: function() {
                   resize_control();
                }
                , onopen_end: function() {
                        resize_control();
                }
                , onclose_end: function() {
                    resize_control();
                }

            }
            , center: {
                resizable: true
                        , size: "50%"
                        , resizerDblClickToggle: false
                        , onresize_end: function() {
                    resize_control();
                }
                , onopen_end: function() {
                    resize_control();
                }
                , onclose_end: function() {
                    resize_control();
                }
            }

        });
    }
	
function create_grid(){
	$("#rowed3").jqGrid({
		url:'',
		datatype: "json",
		colNames: ['Số phiếu','Khoa','Người tạo','Ngày tạo','','','','',''],
		colModel: [
			{name: 'SoPhieu', index: 'SoPhieu', search: true, width: "5%", editable: false, align: 'left', hidden: false},
			{name: 'Khoa', index: 'Khoa', search: true, width: "15%", editable: false, align: 'left', hidden: false},
			{name: 'NguoiTao', index: 'NguoiTao', search: true, width: "10%", editable: false, align: 'left', hidden: false},
			{name: 'NgayTao', index: 'NgayTao', search: true, width: "10%", editable: false, align: 'left', hidden: false,sorttype:'date'},
			{name: 'NguoiDuyet', index: 'NguoiDuyet', search: true, width: "10%", editable: false, align: 'left', hidden: true},
			{name: 'NgayDuyet', index: 'NgayDuyet', search: true, width: "10%", editable: false, align: 'left', hidden: true,sorttype:'date'},
			{name: 'ID_Khoa', index: 'ID_Khoa', search: true, width: "10%", editable: false, align: 'left', hidden: true,sorttype:'date'},
			{name: 'ChotPhieu', index: 'ChotPhieu', search: true, width: "10%", editable: false, align: 'left', hidden: true,sorttype:'date'},
			{name: 'IDNguoiTao', index: 'IDNguoiTao', search: true, width: "10%", editable: false, align: 'left', hidden: true},
		],
	   loadonce: true,
		scroll: 1,
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
		
		afterShowForm : function (formid) {

		},
		onSelectRow: function(id) {
			$("#gbox_rowed6").hide();
			$("#gbox_rowed5").show();
			window.idxuatnoibo=id;
			window.inphieuid=id;
			window.n_id_huychot=id;
			if(window.n_action==1){
				$("#tieude1").html('Chi tiết thuốc xuất nội bộ');
			}else{
				$("#tieude1").html('Chi tiết thuốc xuất điều chuyển');	
			}
			var dataRow = jQuery('#rowed3').jqGrid ('getRowData', id);
			if(dataRow['NguoiDuyet']==''){
				$("#rowed3_duyet").removeClass('ui-state-disabled');
			}else{
				$("#rowed3_duyet").addClass('ui-state-disabled');
			}
			$("#rowed5").jqGrid('setGridParam',{datatype: 'json',url:"resource.php?module=<?= $modules ?>&view=<?= $view ?>&action=data_danhsach_phieuxuatnoibochitiet&id_phieuxuatnoibo="+id}).trigger('reloadGrid');
		},
		ondblClickRow: function(rowId, rowIndex, columnIndex) {
			var dataRow = jQuery('#rowed3').jqGrid ('getRowData', rowId);
			//window.idnguoitao=dataRow['IDNguoiTao'];
			$.post('resource.php?module=<?= $modules ?>&view=<?= $view ?>&action=checkchot&id_phieuxuatnoibo='+rowId).done(function(data){
				if(data=='false'){
					parent.postMessage('open_idluotkham;phieu_xuat_noibo;;;;;&idphieu='+rowId+'&idphongban='+dataRow['ID_Khoa']+'&chotphieu='+dataRow['ChotPhieu']+'&nguoitao='+dataRow['IDNguoiTao']+'&ac=1','*');
				}else{
					//tooltip_message("Phiếu này đã chốt nên không được phép sửa");
					$("#noidungchotphieu").html('Phiếu này đã chốt nên không được phép sửa');
					$( "#dialog-loichotphieu" ).dialog('open');
				}
			});
		},
		onselect: function(rowId, rowIndex, columnIndex) {
			
		},
		loadComplete: function(data) {
			grid_filter_enter("#rowed3");
			if(window.daduyetnhap==1){
				$("#rowed3").jqGrid('setSelection',window.idnhapkho)		
			}else{
				ids = $('#rowed3').jqGrid('getDataIDs');
				$("#rowed3").jqGrid('setSelection',ids[0])	
			}
			var tmp1 = $("#rowed3").jqGrid('getDataIDs'); 
			for(var i=0;i < tmp1.length;i++){
				var rowData = $("#rowed3").getRowData(tmp1[i]);	
				if(rowData["ChotPhieu"]!=1){
					jQuery("#rowed3").jqGrid('setCell', tmp1[i], 'SoPhieu', '', {'background': '#FF6347'});
				}
			}			 
		},
		caption: "Ds phiếu xuất nội bộ (Chưa duyệt) <div class='grid1 '><div class='hinhvuong chuachot'></div><label class='diengiai'>Chưa chốt</label></div>"
	});
	$("#rowed3").jqGrid('filterToolbar',{searchOperators : false,searchOnEnter:false,defaultSearch:"bw"});
	$("#rowed3").jqGrid('navGrid',"#prowed3",{add: false, edit: false, del: false, search: false,closeAfterEdit: true,clearAfterAdd :true,closeOnEscape : true });
	$("#rowed3").jqGrid('navButtonAdd', '#prowed3', {caption: "Duyệt phiếu", buttonicon: 'ui-icon-check',id:'rowed3_duyet',
            onClickButton: function() {
				var dataRow2 = jQuery('#rowed3').jqGrid ('getRowData', window.idxuatnoibo);
				
				$.post('resource.php?module=<?= $modules ?>&view=<?= $view ?>&action=checkchot&id_phieuxuatnoibo='+window.idxuatnoibo).done(function(data){
					if(data=='true'){
						$( "#dialog-confirm" ).dialog('open');
					}else{
						$("#noidungchotphieu").html("Phiếu này "+dataRow2['Khoa']+" chưa chốt nên không thể duyệt");
						$( "#dialog-loichotphieu" ).dialog('open');
						//tooltip_message("Phiếu này "+dataRow2['Khoa']+" chưa chốt nên không thể duyệt");
					}
				});
            },
            title: "Duyệt phiếu",
            position: "last"
    }); 
	$("#rowed3").jqGrid('bindKeys', {});
}

function create_grid2(){
	$("#rowed4").jqGrid({
		url:'',
		datatype: "json",
		colNames: ['Số phiếu','Khoa','Người tạo','Ngày tạo','Người duyệt','Ngày duyệt'],
		colModel: [
			{name: 'SoPhieu', index: 'SoPhieu', search: true, width: "7%", editable: false, align: 'left', hidden: false},
			{name: 'Khoa', index: 'Khoa', search: true, width: "20%", editable: false, align: 'left', hidden: false},
			{name: 'NguoiTao', index: 'NguoiTao', search: true, width: "7%", editable: false, align: 'left', hidden: false},
			{name: 'NgayTao', index: 'NgayTao', search: true, width: "7%", editable: false, align: 'left', hidden: false,sorttype:'date'},
			{name: 'NguoiDuyet', index: 'NguoiDuyet', search: true, width: "7%", editable: false, align: 'left', hidden: false},
			{name: 'NgayDuyet', index: 'NgayDuyet', search: true, width: "7%", editable: false, align: 'left', hidden: false,sorttype:'date'},
		],
	   loadonce: true,
		scroll: 1,
		modal: true,
		rowNum: 3000,
		rowList: [30, 50, 70],
		pager: '#prowed4',
		//sortname: 'NgayGioKetThuc',
		height: 100,
		width: 100,
		viewrecords: true,
		ignoreCase: true,
		shrinkToFit: true,
		
		afterShowForm : function (formid) {

		},
		onSelectRow: function(id) {
			$("#gbox_rowed6").hide();
			$("#gbox_rowed5").show();
			window.inphieuid=id;
			if(window.n_action==1){
				$("#tieude1").html('Chi tiết thuốc xuất nội bộ');
			}else{
				$("#tieude1").html('Chi tiết thuốc xuất điều chuyển');	
			}
			$("#rowed5").jqGrid('setGridParam',{datatype: 'json',url:"resource.php?module=<?= $modules ?>&view=<?= $view ?>&action=data_danhsach_phieuxuatnoibochitiet&id_phieuxuatnoibo="+id}).trigger('reloadGrid');
		},
		ondblClickRow: function(rowId, rowIndex, columnIndex) {
		
		},
		onselect: function(rowId, rowIndex, columnIndex) {
			
		},
		loadComplete: function(data) {
			grid_filter_enter("#rowed4");
			/*if(window.daduyetnhap==1){
				$("#rowed4").jqGrid('setSelection',window.idnhapkho)		
			}else{
				ids = $('#rowed4').jqGrid('getDataIDs');
				$("#rowed4").jqGrid('setSelection',ids[0])	
			}	*/			 
		},
		caption: "Ds phiếu xuất nội bộ (Đã duyệt)"
	});
	$("#rowed4").jqGrid('filterToolbar',{searchOperators : false,searchOnEnter:false,defaultSearch:"bw"});
	$("#rowed4").jqGrid('navGrid',"#prowed3",{add: false, edit: false, del: false, search: false,closeAfterEdit: true,clearAfterAdd :true,closeOnEscape : true });
	
	$("#rowed3").jqGrid('bindKeys', {});
	/*$("#tungay").datepicker({
		changeMonth: true,
		changeYear: true,
		dateFormat: $.cookie("ngayJqueryUi")
	});
	$("#denngay").datepicker({
		changeMonth: true,
		changeYear: true,
		dateFormat: $.cookie("ngayJqueryUi")
	});*/
}

//--------------------------------------------------------------------------------------------------------//
function create_grid_2(){
	$("#rowed33").jqGrid({
		url:'',
		datatype: "json",
		colNames: ['Số phiếu','Kho xuất','Kho nhập','Người tạo','Ngày tạo','','','','','','','','Người duyệt xuất','Chọn','Số phiếu gộp','',''],
		colModel: [
			{name: 'SoPhieu', index: 'SoPhieu', search: true, width: "5%", editable: false, align: 'left', hidden: false},
			{name: 'KhoXuat', index: 'KhoXuat', search: true, width: "12%", editable: false, align: 'left', hidden: false},
			{name: 'KhoNhap', index: 'KhoNhap', search: true, width: "12%", editable: false, align: 'left', hidden: false},
			{name: 'NguoiTao', index: 'NguoiTao', search: true, width: "10%", editable: false, align: 'left', hidden: false},
			{name: 'NgayTao', index: 'NgayTao', search: true, width: "10%", editable: false, align: 'left', hidden: false,sorttype:'date'},
			{name: 'NguoiDuyet', index: 'NguoiDuyet', search: true, width: "10%", editable: false, align: 'left', hidden: true},
			{name: 'NgayDuyet', index: 'NgayDuyet', search: true, width: "10%", editable: false, align: 'left', hidden: true,sorttype:'date'},
			{name: 'ID_Khoa', index: 'ID_Khoa', search: true, width: "10%", editable: false, align: 'left', hidden: true},
			{name: 'ChotPhieu', index: 'ChotPhieu', search: true, width: "10%", editable: false, align: 'left', hidden: true},
			{name: 'ID_TuKho', index: 'ID_TuKho', search: true, width: "10%", editable: false, align: 'left', hidden: true},
			{name: 'ID_DenKho', index: 'ID_DenKho', search: true, width: "10%", editable: false, align: 'left', hidden: true},
			{name: 'IDNguoiTao', index: 'IDNguoiTao', search: true, width: "10%", editable: false, align: 'left', hidden: true},
			{name: 'NguoiDuyet', index: 'NguoiDuyet', search: true, width: "10%", editable: false, align: 'left', hidden: false},
			{name:'GopPhieu',index:'GopPhieu', width:"4%", editable:true,stype: 'text',search:false,searchoptions: { sopt: ['eq', 'ne'],value:':;1:Có;0:Không'}, editable:true,align:'center',hidden:false,edittype:"checkbox",formatter:"checkbox",formatoptions:{disabled: false},formoptions:{ rowpos:13, colpos:1}
			,editoptions: { value:"1:0",dataEvents:  [{ type: 'click', fn: function(e) { 
				$("#huygop").hide();
				$("#gopphieu").show();
				if($("#"+$(e.target).attr('id')).is(':checked')){
   					var tthai=1;
   				}else{
  					var tthai=0;
  				}
				var row = $(e.target).closest('tr.jqgrow');
                var tam = row.attr('id');
				$("#rowed33").jqGrid('setCell',tam,'Gop', tthai);
				//alert(tam);
                 } }]}}, 
			{name: 'MaPhieuGop', index: 'MaPhieuGop', search: true, width: "8%", editable: false, align: 'left', hidden: false},
			{name: 'DuyetXuat', index: 'DuyetXuat', search: true, width: "10%", editable: false, align: 'left', hidden: true},
			{name: 'Gop', index: 'Gop', search: true, width: "10%", editable: false, align: 'left', hidden: true},
			
		],
	    loadonce: true,
		scroll: true,
		modal: true,
		rowNum: 3000,
		rowList: [30, 50, 70],
		pager: '#prowed33',
		//sortname: 'NgayGioKetThuc',
		height: 100,
		width: 100,
		viewrecords: true,
		ignoreCase: true,
		shrinkToFit: true,
		
		afterShowForm : function (formid) {

		},
		onSelectRow: function(id) {
			$("#gbox_rowed6").hide();
			$("#gbox_rowed5").show();
			window.idxuatnoibo=id;
			window.inphieuid=id;
			window.n_id_huychot=id;
			if(window.n_action==1){
				$("#tieude1").html('Chi tiết thuốc xuất nội bộ');
			}else{
				$("#tieude1").html('Chi tiết thuốc xuất điều chuyển');	
			}
			var dataRow = jQuery('#rowed33').jqGrid ('getRowData', id);
			window.maphieugop=dataRow['MaPhieuGop'];
			window.idnguoiduyetxuat=dataRow['DuyetXuat'];
/*			if(dataRow['NguoiDuyet']==''){
				$("#rowed33_duyet").removeClass('ui-state-disabled');
			}else{
				$("#rowed33_duyet").addClass('ui-state-disabled');
			}*/
			if(dataRow['DuyetXuat']==''){
				$("#rowed33_duyetxuat").removeClass('ui-state-disabled');
				$("#rowed33_duyetnhap").addClass('ui-state-disabled');
			}else{
				$("#rowed33_duyetxuat").addClass('ui-state-disabled');
				$("#rowed33_duyetnhap").removeClass('ui-state-disabled');
			}
			var ntamtukho=dataRow['ID_TuKho'];
			var ntamdenkho=dataRow['ID_DenKho'];
			//var ntam=1;
			console.log(permission['kho_'+ntamtukho]);
			if(permission['kho_'+ntamtukho]!='' && permission['kho_'+ntamtukho]==1){
				$("#rowed33_duyetxuat").removeClass('ui-state-disabled');
			}else{
				$("#rowed33_duyetxuat").addClass('ui-state-disabled');
			}
			console.log(permission['kho_'+ntamdenkho]);
			if(permission['kho_'+ntamdenkho]!='' && permission['kho_'+ntamdenkho]==1){
				$("#rowed33_duyetnhap").removeClass('ui-state-disabled');
			}else{
				$("#rowed33_duyetnhap").addClass('ui-state-disabled');
			}
			if(dataRow['MaPhieuGop']>0){
				$("#huychot").button('disable');
				$("#gopphieu").hide();
				$("#huygop").show();
			}else{
				$("#huygop").hide();
				$("#gopphieu").show();
				//console.log("_"+dataRow['ChotPhieu'])
				if(dataRow['ChotPhieu']==1){
					$("#huychot").button('enable');
				}else{
					$("#huychot").button('disable');
				}
			}
			//var dataRow = jQuery('#rowed33').jqGrid ('getRowData', id);
			$("#rowed5").jqGrid('setGridParam',{datatype: 'json',url:"resource.php?module=<?= $modules ?>&view=<?= $view ?>&action=data_danhsach_phieuxuatnoibochitiet&id_phieuxuatnoibo="+id+'&maphieugop='+dataRow['MaPhieuGop']}).trigger('reloadGrid');
		},
		ondblClickRow: function(rowId, rowIndex, columnIndex) {
			var dataRow = jQuery('#rowed33').jqGrid ('getRowData', rowId);
			$.post('resource.php?module=<?= $modules ?>&view=<?= $view ?>&action=checkchot&id_phieuxuatnoibo='+rowId).done(function(data){
				if(data=='false'){
					parent.postMessage('open_idluotkham;phieu_xuat_noibo;;;;;&idphieu='+rowId+'&chotphieu='+dataRow['ChotPhieu']+'&tukho='+dataRow['ID_TuKho']+'&denkho='+dataRow['ID_DenKho']+'&nguoitao='+dataRow['IDNguoiTao']+'&ac=2','*');
				}else{
					//tooltip_message("Phiếu này đã chốt nên không được phép sửa");
					$("#noidungchotphieu").html('Phiếu này đã chốt nên không được phép sửa');
					$( "#dialog-loichotphieu" ).dialog('open');
				}
			});
		},
		onselect: function(rowId, rowIndex, columnIndex) {
			
		},
		loadComplete: function(data) {
			grid_filter_enter("#rowed33");
			if(window.daduyetnhap==1){
				$("#rowed33").jqGrid('setSelection',window.idnhapkho)		
			}else{
				ids = $('#rowed33').jqGrid('getDataIDs');
				$("#rowed33").jqGrid('setSelection',ids[0])	
			}
			var tmp1 = $("#rowed33").jqGrid('getDataIDs'); 
			for(var i=0;i < tmp1.length;i++){
				jQuery("#rowed33").jqGrid('editRow',tmp1[i]);
				var rowData = $("#rowed33").getRowData(tmp1[i]);
				if(rowData["ChotPhieu"]!=1){
					jQuery("#rowed33").jqGrid('setCell', tmp1[i], 'SoPhieu', '', {'background': '#FF6347'});
					$("#"+tmp1[i]+"_GopPhieu").attr("disabled", true);
				}
				if(rowData["MaPhieuGop"]>0){
				//	console.log("#"+rowData["MaPhieuGop"]+"_GopPhieu");
					$("#"+tmp1[i]+"_GopPhieu").attr("disabled", true);
				}
				if(rowData["DuyetXuat"]>0){
				//	console.log("#"+rowData["MaPhieuGop"]+"_GopPhieu");
					$("#"+tmp1[i]+"_GopPhieu").attr("disabled", true);
				}
			}			 
		},
		caption: "Ds phiếu xuất điều chuyển (Chưa duyệt) <div class='grid1 '><div class='hinhvuong chuachot'></div><label class='diengiai'>Chưa chốt</label></div>"
	});
	$("#rowed33").jqGrid('filterToolbar',{searchOperators : false,searchOnEnter:false,defaultSearch:"bw"});
	$("#rowed33").jqGrid('navGrid',"#prowed33",{add: false, edit: false, del: false, search: false,closeAfterEdit: true,clearAfterAdd :true,closeOnEscape : true });
	$("#rowed33").jqGrid('navButtonAdd', '#prowed33', {caption: "Duyệt xuất kho", buttonicon: 'ui-icon-check',id:'rowed33_duyetxuat',
            onClickButton: function() {
				var dataRow2 = jQuery('#rowed33').jqGrid ('getRowData', window.idxuatnoibo);
				window.tukho=dataRow2['ID_TuKho'];
				window.denkho=dataRow2['ID_DenKho'];
				window._maphieugop=dataRow2['MaPhieuGop'];
				$.post('resource.php?module=<?= $modules ?>&view=<?= $view ?>&action=checkchot&id_phieuxuatnoibo='+window.idxuatnoibo).done(function(data){
					if(data=='true'){
						$( "#dialog-duyetxuat" ).dialog('open');
					}else{
						$("#noidungchotphieu").html("Phiếu này chưa chốt nên không thể duyệt");
						$( "#dialog-loichotphieu" ).dialog('open');
						//tooltip_message("Phiếu này "+dataRow2['Khoa']+" chưa chốt nên không thể duyệt");
					}
				});
            },
            title: "Duyệt phiếu",
            position: "last"
    }); 
	$("#rowed33").jqGrid('navButtonAdd', '#prowed33', {caption: "Duyệt nhập kho", buttonicon: 'ui-icon-check',id:'rowed33_duyetnhap',
            onClickButton: function() {
				var dataRow2 = jQuery('#rowed33').jqGrid ('getRowData', window.idxuatnoibo);
				window.tukho=dataRow2['ID_TuKho'];
				window.denkho=dataRow2['ID_DenKho'];
				window._maphieugop=dataRow2['MaPhieuGop'];
				if(dataRow2['MaPhieuGop']>0){
					$( "#dialog-confirm" ).dialog('open');
				}else{
					$.post('resource.php?module=<?= $modules ?>&view=<?= $view ?>&action=checkchot&id_phieuxuatnoibo='+window.idxuatnoibo).done(function(data){
						if(data=='true'){
							$( "#dialog-confirm" ).dialog('open');
						}else{
							$("#noidungchotphieu").html("Phiếu này chưa chốt nên không thể duyệt");
							$( "#dialog-loichotphieu" ).dialog('open');
							//tooltip_message("Phiếu này "+dataRow2['Khoa']+" chưa chốt nên không thể duyệt");
						}
					});
				}
				
				
            },
            title: "Duyệt phiếu",
            position: "last"
    }); 
	$("#rowed33").jqGrid('bindKeys', {});
}

function create_grid2_2(){
	$("#rowed44").jqGrid({
		url:'',
		datatype: "json",
		colNames: ['Số phiếu','Kho xuất','Kho nhập','Người tạo','Ngày tạo','Người duyệt xuất','Ngày duyệt xuất','Người duyệt nhập','Ngày duyệt nhập','Số phiếu gộp'],
		colModel: [
			{name: 'SoPhieu', index: 'SoPhieu', search: true, width: "5%", editable: false, align: 'left', hidden: false},
			{name: 'KhoXuat', index: 'KhoXuat', search: true, width: "8%", editable: false, align: 'left', hidden: false},
			{name: 'KhoNhap', index: 'KhoNhap', search: true, width: "8%", editable: false, align: 'left', hidden: false},
			{name: 'NguoiTao', index: 'NguoiTao', search: true, width: "7%", editable: false, align: 'left', hidden: false},
			{name: 'NgayTao', index: 'NgayTao', search: true, width: "9%", editable: false, align: 'left', hidden: false,sorttype:'date'},
			{name: 'NguoiDuyet', index: 'NguoiDuyet', search: true, width: "9%", editable: false, align: 'left', hidden: false},
			{name: 'NgayDuyet', index: 'NgayDuyet', search: true, width: "9%", editable: false, align: 'left', hidden: false,sorttype:'date'},
			{name: 'NguoiDuyetNhap', index: 'NguoiDuyetNhap', search: true, width: "9%", editable: false, align: 'left', hidden: false},
			{name: 'NgayDuyetNhap', index: 'NgayDuyetNhap', search: true, width: "9%", editable: false, align: 'left', hidden: false,sorttype:'date'},
			{name: 'MaPhieuGop', index: 'MaPhieuGop', search: true, width: "7%", editable: false, align: 'left', hidden: false,},
		],
	   loadonce: true,
		scroll: 1,
		modal: true,
		rowNum: 3000,
		rowList: [30, 50, 70],
		pager: '#prowed44',
		//sortname: 'NgayGioKetThuc',
		height: 100,
		width: 100,
		viewrecords: true,
		ignoreCase: true,
		shrinkToFit: true,
		
		afterShowForm : function (formid) {

		},
		onSelectRow: function(id) {
			$("#gbox_rowed6").hide();
			$("#gbox_rowed5").show();
			var dataRow = jQuery('#rowed44').jqGrid ('getRowData', id);
			window.inphieuid=id;
			window.maphieugop=dataRow['MaPhieuGop'];
			if(window.n_action==1){
				$("#tieude1").html('Chi tiết thuốc xuất nội bộ');
			}else{
				$("#tieude1").html('Chi tiết thuốc xuất điều chuyển');	
			}
			
			$("#rowed5").jqGrid('setGridParam',{datatype: 'json',url:"resource.php?module=<?= $modules ?>&view=<?= $view ?>&action=data_danhsach_phieuxuatnoibochitiet&id_phieuxuatnoibo="+id+'&maphieugop='+dataRow['MaPhieuGop']}).trigger('reloadGrid');
		},
		ondblClickRow: function(rowId, rowIndex, columnIndex) {
		
		},
		onselect: function(rowId, rowIndex, columnIndex) {
			
		},
		loadComplete: function(data) {
			grid_filter_enter("#rowed44");
			/*if(window.daduyetnhap==1){
				$("#rowed4").jqGrid('setSelection',window.idnhapkho)		
			}else{
				ids = $('#rowed4').jqGrid('getDataIDs');
				$("#rowed4").jqGrid('setSelection',ids[0])	
			}	*/			 
		},
		caption: "Ds phiếu xuất điều chuyển (Đã duyệt)"
	});
	$("#rowed44").jqGrid('filterToolbar',{searchOperators : false,searchOnEnter:false,defaultSearch:"bw"});
	$("#rowed44").jqGrid('navGrid',"#prowed3",{add: false, edit: false, del: false, search: false,closeAfterEdit: true,clearAfterAdd :true,closeOnEscape : true });
	
	$("#rowed44").jqGrid('bindKeys', {});
	/*$("#tungay").datepicker({
		changeMonth: true,
		changeYear: true,
		dateFormat: $.cookie("ngayJqueryUi")
	});
	$("#denngay").datepicker({
		changeMonth: true,
		changeYear: true,
		dateFormat: $.cookie("ngayJqueryUi")
	});*/
}
//---------------------------------------------------------------------------------------------------------------//

function create_grid3() {
      mydata=[];
        $("#rowed5").jqGrid({
            data: mydata,
            datatype: "local",
            colNames: ['Tên gốc','ĐVT', 'SL','TenNhom'],
            colModel: [
                {name: 'TenGoc', index: 'TenGoc', search: true, width: "30%", editable: false, align: 'left', hidden: false,classes:'r3_mabenhnhan'},
				{name: 'DonViTinh', index: 'DonViTinh', search: true, width: "7%", editable: false, align: 'left', hidden: false},
				{name: 'SoLuong', index: 'SoLuong', search: true, width: "5%", editable: false, align: 'left', hidden: false},
				{name: 'TenNhom', index: 'TenNhom', search: true, width: "10%", editable: false, align: 'left', hidden: false},
				
            ],
           loadonce: true,
            scroll: 1,
            modal: true,
            rowNum: 3000,
            rowList: [30, 50, 70],
            pager: '#prowed5',
            //sortname: 'NgayGioKetThuc',
            height: 100,
            width: 100,
            viewrecords: true,
            ignoreCase: true,
            shrinkToFit: true,
			grouping: true,
			groupingView : {
				 groupField : ['TenNhom'],
				 groupCollapse : false,
				  groupColumnShow :false,
				groupText : ['<b>{0}</b>'],
		   },
			afterShowForm : function (formid) {

			},
            onSelectRow: function(id) {
				
            },
            ondblClickRow: function(rowId, rowIndex, columnIndex) {
            
            },
            onselect: function(rowId, rowIndex, columnIndex) {
				
            },
            loadComplete: function(data) {
			//ids = $('#rowed3').jqGrid('getDataIDs');				 
			//$("#rowed3").jqGrid("setSelection",ids[0], true);
						 
			},
            caption: "<span id='tieude1'>Chi tiết thuốc xuất nội bộ</span>"
        });
		$("#rowed5").jqGrid('filterToolbar',{searchOperators : false,searchOnEnter:false,defaultSearch:"bw"});
		$("#rowed5").jqGrid('bindKeys', {});
    }
function create_grid4() {
      mydata=[];
        $("#rowed6").jqGrid({
            data: mydata,
            datatype: "local",
            colNames: ['Tên gốc','ĐVT', 'SL',''],
            colModel: [
                {name: 'TenGoc', index: 'TenGoc', search: true, width: "30%", editable: false, align: 'left', hidden: false,classes:'r3_mabenhnhan'},
				{name: 'DonViTinh', index: 'DonViTinh', search: true, width: "7%", editable: false, align: 'left', hidden: false},
				{name: 'SoLuong', index: 'SoLuong', search: true, width: "5%", editable: false, align: 'left', hidden: false},
				{name: 'Ngay', index: 'Ngay', search: true, width: "10%", editable: false, align: 'left', hidden: true},
				
            ],
           loadonce: true,
            scroll: 1,
            modal: true,
            rowNum: 3000,
            rowList: [30, 50, 70],
            pager: '#prowed6',
            //sortname: 'NgayGioKetThuc',
            height: 100,
            width: 100,
            viewrecords: true,
            ignoreCase: true,
            shrinkToFit: true,
			grouping: true,
			groupingView : {
				 groupField : ['Ngay'],
				 groupCollapse : false,
				  groupColumnShow :false,
				groupText : ['Ngày <b>{0}</b>'],
		   },
			afterShowForm : function (formid) {

			},
            onSelectRow: function(id) {
				
            },
            ondblClickRow: function(rowId, rowIndex, columnIndex) {
            
            },
            onselect: function(rowId, rowIndex, columnIndex) {
				
            },
            loadComplete: function(data) {
			//ids = $('#rowed3').jqGrid('getDataIDs');				 
			//$("#rowed3").jqGrid("setSelection",ids[0], true);
						 
			},
            caption: "Tổng hợp chi tiết <span id='tenkhoahienthi'></span>"
        });
		$("#rowed6").jqGrid('filterToolbar',{searchOperators : false,searchOnEnter:false,defaultSearch:"bw"});
		$("#rowed6").jqGrid('bindKeys', {});
    }	
function create_khoa(elem, datalocal) {
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

function resize_control() {
	$("#rowed3").setGridWidth($(".n_tren").width()-10);
	$("#rowed3").setGridHeight($(".n_tren").height()-113);
	$("#rowed4").setGridWidth($(".n_duoi").width()-10);
	$("#rowed4").setGridHeight($(".n_duoi").height()-130);
	$("#rowed33").setGridWidth($(".n_tren").width()-10);
	$("#rowed33").setGridHeight($(".n_tren").height()-113);
	$("#rowed44").setGridWidth($(".n_duoi").width()-10);
	$("#rowed44").setGridHeight($(".n_duoi").height()-130);
	$("#rowed5").setGridWidth($(".right_col").width()-10);
	$("#rowed5").setGridHeight($(".right_col").height()-127);
	$("#rowed6").setGridWidth($(".right_col").width()-10);
	$("#rowed6").setGridHeight($(".right_col").height()-127);
}
</script>



