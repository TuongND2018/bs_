<!--
--- =============================================
-- Author:		<Phạm Thị Phương Thảo>
-- Create date: <13/11/2013>
-- Description:	<Description,,>
-- =============================================
-->
<!--<link rel="stylesheet" href="../../../css/form_css.css" type="text/css" media="screen"/>-->
<style type="text/css">
#rowed3 td{	 
		word-wrap:normal!important;
		white-space:nowrap;
	}
#rowedct td{	 
		word-wrap:normal!important;
		white-space:nowrap;
	}
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
    #panel_main{
    	display: block;
    }
</style>

<body> 
	<div id="dialog-confirm" title="Thông báo" style="display:none">
<input type="hidden" name="rowid" id="rowid" >
<input type="hidden" name="dtct" id="dtct" >
  <p><span class="ui-icon ui-icon-alert" style="float:left; margin:0 7px 20px 0;"></span>Bạn có muốn xóa nhật ký không?</p>
</div>
	<div id="panel_main">
		<div id="grid_phong_ban" style="display:inline-block">   
			<button id="homnay" type="button" onClick="Code">Hôm nay</button>	
			<input type="text" style="width:70px" name="from_day" id='from_day'  value="<?php echo date($_SESSION["config_system"]["ngaythang"]) ?>">
			<input type="text" style="width:70px" name="to_day" id='to_day' value="<?php echo date($_SESSION["config_system"]["ngaythang"]) ?>">
			<input type="hidden" name="from_day_mask" id='from_day_mask'  value="<?php echo date("Y/m/d")?>">
			<input type="hidden" name="to_day_mask" id='to_day_mask' value="<?php echo date("Y/m/d")?>">
			<input type="radio" id="daketthuc" name="action" value="1" /><label for="daketthuc"> Đã kết thúc</label>
	        <input type="radio" id="chuaketthuc" name="action" value="0" checked /><label for="chuaketthuc"> Chưa kết thúc</label>
		 	<button id="xem" type="button">Xem danh sách</button>
			Mã bệnh nhân<input type="text" style="width:70px" name="mabn_t" id="mabn_t">
             <button id="xemin" type="button">Xem in</button>
		</div>
	</div>
		<div id="panel_sub">
			<div class=" left_col ui-widget-content ui-layout-west">
			 		<table id="rowed3" ></table>
		            <div id="prowed3"></div>   	
			</div>
		    <div class="right_col ui-widget-content  ui-layout-center ">
		    	<div>
		    		<button id="themnk" type="button">Thêm nhật ký</button>
		    		<button id="luu" type="button">Lưu</button>
		    	</div>
		    	<div>
		    		 <table id="rowednk" ></table>
		            <div id="prowednk"></div>   
		    	</div>
		    	
                <div>
		    		 <table id="rowedct" ></table>
		            <div id="rowedct"></div>   
                    <table id="rowedct2" style=""></table>
		            <div id="rowedct2"></div> 
		    	</div>
		    </div> 
	    </div> 
     
</body>


<script type="text/javascript">
jQuery(document).ready(function() {
	window.nhanvien3_complete=0;
	$("#xem,#homnay,#themnk,#luu,#xemin").button();
	//phanquyen();
	xem_click();
		create_layout();
	//$('#panel_sub').css('overflow','');
	window.bacsyduocyeucau1=":;"+window.bacsyduocyeucau;
	
	shortcut_key();	

	var d = new Date();
	var curr_date = d.getDate();
    var curr_month = d.getMonth() + 1; //Months are zero based
    var curr_year = d.getFullYear();
    var curr =(curr_date + "-" + curr_month + "-" + curr_year);
 	
		var fromday=$.datepicker.formatDate($.cookie("ngayJqueryUi"), new Date(<?php echo date("Y")?>, <?php echo date("m")?>-1, <?php echo date("d")?>));
		var today=$.datepicker.formatDate($.cookie("ngayJqueryUi"), new Date(<?php echo date("Y")?>, <?php echo date("m")?>-1, <?php echo date("d")?>));
		//alert(fromday);
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
               
              //  fromday = $.datepicker.formatDate($.cookie("ngayJqueryUi"), new Date(selectedDate));
               // $("#from_day").val(fromday);
              //  $("#to_day").val(today);
               // $( "#from_day" ).datepicker( "setDate", today );
            },
            onSelect: function(dat, inst) {

              //  $("#from_day_mask").val(dat);
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
              //  today = $.datepicker.formatDate($.cookie("ngayJqueryUi"), new Date(selectedDate));
              //  $("#to_day").val(today);
              //  $("#from_day").val(fromday);
               // $( "#to_day" ).datepicker( "setDate", today );
            },
            onSelect: function(dat, inst) {
              //  $("#to_day_mask").val(dat);
            }
        });
        $("#themnk").click(function(){
        	 $.post('resource.php?module=<?=$modules?>&view=<?=$view?>&action=controller&oper=add&hienmaloi=3&ID_Kham='+$('#rowed3').getCell($('#rowed3').jqGrid ('getGridParam', 'selrow'), 'id'))
								 .done(function( gridData ) {	
								  	$("#"+$('#rowed3').jqGrid ('getGridParam', 'selrow')).trigger("click");	 	
								 	//tooltip_message("Đã thêm");
			                                           	 
			                                            })
	})

	 $.dateEntry.setDefaults({spinnerImage: ''});		 
	 //$("#tungay, #denngay").dateEntry({dateFormat: 'dmy-'});
	 $("#from_day, #to_day").dateEntry({dateFormat: $.cookie("ngayDateEntry")});
	//----------
		create_grid();
		create_ChiTiet();
		create_ChiTiet2();
		create_NhatKy();
	$("#xem").trigger('click')

	$("#homnay").click(function(){ 
        // $( "#to_day" ).datepicker( "setDate", today );
        // $( "#to_day" ).datepicker( "setDate", today );
         $( "#to_day" ).datepicker( "option", "gotoCurrent", true );
    });
	$("#xemin").click(function(e){	
$.cookie("in_status", "print_preview"); 
//alert($("#mabn_t").val());
	
	dialog_report("Xem trước khi in",90,90,"u78787878975f","resource.php?module=report&view=<?=$modules?>&action=dieutritainha&type=report&id_form=794&id_benhnhan="+$("#mabn_t").val()+"&tungay="+$("#from_day").val()+"&denngay="+$("#to_day").val(),'BenhAnRangHamMat');
	$(".frame_u78787878975f").css("width","793px");
		});
    $( "#dialog-confirm" ).dialog({
      resizable: false,
	  autoOpen: false,
      height:150,
	  width: 230,
      modal: true,
      buttons: {
        "YES": function() {

			$.post('resource.php?module=<?= $modules ?>&view=<?= $view ?>&action=controller&oper=del&id='+window.idnk)
								 .done(function( gridData ) {		 	
								 	tooltip_message("Đã xóa");
								 		$("#"+$('#rowed3').jqGrid ('getGridParam', 'selrow')).trigger("click");	
								 		//$("#rowednk").trigger("reloadGrid");	 	
								 	});
								 $( this ).dialog( "close" );

        },
		"NO": function() {
          $( this ).dialog( "close" );
        }
      }
    });

    $("#luu").click(function(){
          phancach = ","; 
    	  dataToSend = '{"rows":[';
		  var ids = $("#rowednk").jqGrid('getDataIDs'); 
			  for (var i = 0; i <= ids.length - 1; i++) {
			      if(i== ids.length - 1){
			        	 	phancach="";
			      }
			       dataToSend +='{'
			       dataToSend += '"ID_NhatKyDieuTriTaiNha":"' + ids[i] + '",';
			       dataToSend += '"GhiChu":"' +$('#'+ids[i]+'_ghichu').val()+ '"';
			       dataToSend +='}'+phancach;
			   };
					dataToSend +=']}'
			      
  window.datalocalToSend = jQuery.parseJSON(dataToSend);
    	 $.post('resource.php?module=<?= $modules ?>&view=<?= $view ?>&action=controller&oper=edit',datalocalToSend)
								 .done(function( gridData ) {	
								  //	$("#"+$('#rowednk').jqGrid ('getGridParam', 'selrow')).trigger("click");	 	
								 	tooltip_message("Đã lưu");
		 })

    });

	jQuery(window).resize(function() {		 
	 resize_control();
	});

	resize_control();

})

function dathuchien_click(){
	$("#daketthuc").click(function(){

	})
}
function chuathuchien_click(){

}
function xem_click(){
	
	$("#xem,#daketthuc,#chuaketthuc").click(function(){
		$("#rowed3").jqGrid('setGridParam',{datatype: 'json',url:"resource.php?module=<?=$modules?>&view=<?=$view?>&action=data_danhsach&from_day="+$("#from_day").val()+"&to_day="+$("#to_day").val()+'&kiemtra='+$('input[name=action]:checked', '#grid_phong_ban').val()}).trigger('reloadGrid');
	
		$("#rowedct").jqGrid('setGridParam',{datatype: 'json',url:"resource.php?module=<?= $modules ?>&view=<?= $view ?>&action=data_donthuoc&ID_Kham="+''}).trigger('reloadGrid');
		
		$("#rowedct2").jqGrid('setGridParam',{datatype: 'json',url:"resource.php?module=<?= $modules ?>&view=<?= $view ?>&action=data_chidinhls&ID_Kham="+''}).trigger('reloadGrid');
	})
}

function resize_control(){
	$("#panel_sub").css("height",$(window).height()-$("#grid_phong_ban").height()+"px");
	$(".left_col").css("height",$(window).height()-$("#grid_phong_ban").height()+"px");
	$(".right_col").css("height",$(window).height()-$("#grid_phong_ban").height()+"px");

	$("#rowed3").setGridWidth($(".left_col").width() - 11);
        $("#rowed3").setGridHeight($(".left_col").height() - $("#gview_rowed3 .ui-jqgrid-hdiv").height()-$("#pg_prowed3").height()-45+"px");
       // alert($(".left_col").height() - $("#gview_rowed3 .ui-jqgrid-hdiv").height()-30)
        cao_left = $(".right_col").height() - 113;
        $("#rowednk ").setGridWidth($(".right_col").width() - 11);
		 $("#rowedct ").setGridWidth($(".right_col").width() - 11);
		 $("#rowedct2").setGridWidth($(".right_col").width() - 11);
		$("#rowedct ").setGridHeight(250);
		$("#rowedct2 ").setGridHeight(250);
        $("#rowednk ").setGridHeight(cao_left-250);
	
}
function create_layout(){
    //alert("")
    $('#panel_sub').layout({   
        resizerClass: 'ui-state-default'       
        ,west: {
        	 resizable: true
                        , size: "70%"
                        , spacing_closed: 27
                        , togglerLength_closed: 85
                        , togglerAlign_closed: "center"
                        , togglerContent_closed: "<div id='menu_toggle'>X<BR>O<BR>N<BR>G</div>"
                        , togglerTip_closed: "Open & Pin Menu"
                        , sliderTip: "Slide Open Menu"
                        , slideTrigger_open: "mouseover"
                        , fxSettings_close: {easing: "easeOutQuint"}
        ,   onresize_end:function () {               
                 resize_control();
            }
        ,   onopen_end:function () { 
                 
            }
        ,   onclose_end:function () {                
                 
            }
                        
        }           
        ,   center: {
             resizable: true
                        , size: "30%"

                        , fxName: "drop"		// none, slide, drop, scale
                        , fxSpeed_open: 450
                        , fxSpeed_close: 450
                        , fxSettings_open: {easing: "easeInQuint"}
                , fxSettings_close: {easing: "easeOutQuint"}
        ,   onresize_end:function () {               
                  resize_control();
            }
        ,   onopen_end:function () {                 
                    
            }
        ,   onclose_end:function () {                
                     
            }       
        } 
         
    });      
}
 //$("#@Model.Id").trigger('reloadGrid', [{page:1}]);
function create_grid(){	
	mydata=[];
	 $("#rowed3").jqGrid({
		data: mydata,
		datatype: "local",	
		colNames:['id','Mã BN','Họ (tên lót)','Tên','Địa chỉ','Điện thoại','Tuổi','Giới','Loại thực hiện','Người c.định','Ngày chỉ định','N.thuốc','Ngày h.thuốc','','HĐ','K.t'],
		colModel:[
			{name:'id',index:'id', width:"5%", editable:false,align:'letf',hidden:true}, 
			{name:'MaBenhNhan',index:'MaBenhNhan', width:"5%", editable:false,align:'letf',hidden:false}, 
			{name:'HoLotBenhNhan',index:'HoLotBenhNhan', width:"12%", editable:false,align:'letf',hidden:false}, 
			{name:'TenBenhNhan',index:'TenBenhNhan', width:"5%", editable:false,align:'letf',hidden:false}, 
			{name:'DiaChi',index:'DiaChi', width:"18%", editable:false,align:'letf',hidden:false}, 
			{name:'DienThoai',index:'DienThoai', width:"8%", editable:false,align:'letf',hidden:false}, 
			{name:'Tuoi',index:'Tuoi', width:"4%", editable:false,align:'center',hidden:false}, 
			{name:'GioiTinh',index:'GioiTinh', width:"4%", editable:false,align:'letf',hidden:false}, 
			{name:'LoaiThucHien',index:'LoaiThucHien', width:"11%", editable:false,align:'letf',hidden:false}, 
			{name:'NguoiChiDinh',index:'NguoiChiDinh', width:"7%", editable:false,align:'letf',hidden:false}, 
			{name:'NgayChiDinh',index:'NgayChiDinh', width:"10%", editable:false,align:'letf',hidden:false}, 
			{name:'SoNgayThuoc',index:'SoNgayThuoc', width:"4%", editable:false,align:'center',hidden:false}, 
			{name:'NgayHetThuoc',index:'NgayHetThuoc', width:"7%", editable:false,align:'letf',hidden:false}, 
			{name:'id_luotkham',index:'id_luotkham', width:"0%", editable:false,align:'letf',hidden:true},
			{name:'ChonIn',index:'ChonIn', width:"2%", editable:false,stype: 'checkbox',searchoptions: { sopt: ['eq', 'ne'],value:':;1:Có;0:Không'}, editable:false,align:'center',hidden:false,edittype:"checkbox",formatter:"checkbox",formoptions:{ rowpos:13, colpos:1}
			},
			{name:'KetThuc',index:'KetThuc', width:"2%",search:false, editable:true,stype: 'select',searchoptions: { sopt: ['eq', 'ne'],value:':;1:Có;0:Không'}, editable:true,align:'center',hidden:false,edittype:"checkbox",formatter:"checkbox",formoptions:{ rowpos:13, colpos:1}
			,editoptions: { value:"1:0",dataEvents:  [{ type: 'click', fn: function(e) { 
				//alert($("#"+$(e.target).attr('id')).is(':checked'));

				if($("#"+$(e.target).attr('id')).is(':checked')){
   					var tthai=1;
   				}
				else{
  					var tthai=0;
  				}
				var row = $(e.target).closest('tr.jqgrow');
                var tam = row.attr('id');
               rowId= $('#rowed3').getCell(tam, 'id')
                $.post('resource.php?module=<?=$modules?>&view=<?=$view?>&action=controller&oper=update&ID_Kham='+rowId+'&tenloaikham='+$('#rowed3').getCell(tam, 'LoaiThucHien')+'&trangthai='+tthai);

                 } }]}}, 
			],
	//

		loadonce: true,
		scroll: 1, 
		modal:true,	 	
		pager: '#prowed3',	
		rowNum: 100,
		gridview: true,
		sortname:'LoaiThucHien',
		sortorder:'',
		rowList:[],
		height:100,
		width: 100,
		viewrecords: true,	
		ignoreCase:true,
		shrinkToFit:true,
		grouping: false,
		sortorder: "asc",
		
		
		serializeRowData: function (postdata) { 		 	
			//$("#rowed3").trigger("reloadGrid");		
			//return postdata;
		},
		onSelectRow: function(id){

			$("#rowednk").jqGrid('setGridParam',{datatype: 'json',url:"resource.php?module=<?= $modules ?>&view=<?= $view ?>&action=data_nhatky&ID_Kham="+$('#rowed3').getCell(id, 'id')}).trigger('reloadGrid');
			
			var rowData = $("#rowed3").getRowData(id);
            
			if(rowData["LoaiThucHien"]=='Đơn thuốc'){
				//alert(rowData["id_luotkham"]); 
				//alert(1);
				$("#gbox_rowedct").show();
				$("#gbox_rowedct2").hide();
				$("#rowedct").jqGrid('setGridParam',{datatype: 'json',url:"resource.php?module=<?= $modules ?>&view=<?= $view ?>&action=data_donthuoc&ID_Kham="+$('#rowed3').getCell(id, 'id')}).trigger('reloadGrid');
			}else{
				//alert(2);
				$("#gbox_rowedct2").show();
				$("#gbox_rowedct").hide();
				$("#rowedct2").jqGrid('setGridParam',{datatype: 'json',url:"resource.php?module=<?= $modules ?>&view=<?= $view ?>&action=data_chidinhls&ID_Kham="+$('#rowed3').getCell(id, 'id')}).trigger('reloadGrid');
			}
			
			
		},
		ondblClickRow: function (rowId, rowIndex, columnIndex) {

 		},
		loadComplete: function(data) {	
			$("#rowed3").jqGrid('setGridParam',{loadonce: 'true'});
			grid_filter_enter("#rowed3");
			$('.ncheckbox input').attr('disabled',false);
			 var $this = $(this), ids = $this.jqGrid('getDataIDs'), i, l = ids.length;
			    for (i = 0; i < l; i++) {
			        $this.jqGrid('editRow', ids[i], true);
			    }
			if(window.nhanvien3_complete==0){
				
				//checkbox_search('gs_KetThuc','#rowed3')
				}         
				
				window.nhanvien3_complete++;

		},	  
		gridComplete: function() {
			
		},

		caption: "Điều trị tại nhà"
	});	

	$("#rowed3").jqGrid('filterToolbar',{searchOperators : false,searchOnEnter:false,defaultSearch:"cn"});
						  
	$("#rowed3").setGridWidth($(window).width()-10);
	$("#rowed3").setGridHeight($(window).height()-$("#form_danh_muc_danhsachhenkham").height()-150);
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
///timer

function create_NhatKy(){	
	var searhicon = '<span class="ui-state-error ui-state-hover  " style="border:0"><span class="ui-icon ui-icon-circle-close" style="float: left; margin-right: .3em;"></span></span>';

	mydata=[];
	 $("#rowednk").jqGrid({
		data: mydata,
		datatype: "local",	
		colNames:['','Ngày t.hiện','Nhân viên','Ghi chú'],
		colModel:[
			//{name:'ID_Kham',index:'ID_HenKham',search:false, width:"2%", editable:false,align:'right',hidden:true},
			{name: 'Xoa', index: 'Xoa', search: false, width: "6%", editable: false, align: 'left', hidden: false,formatter: function (cellValue, options, rowObject) {
                    
                            return searhicon
                        },},
			{name:'ngaythuchien',index:'ngaythuchien', width:"30%", editable:false,align:'letf',hidden:false}, 
			{name:'nhanvien',index:'nhanvien', width:"15%", editable:false,align:'letf',hidden:false}, 
			{name:'ghichu',index:'ghichu', width:"55%", editable:true,align:'letf',hidden:false},
			],
	//

		loadonce: true,
		scroll: 1, 
		modal:true,	 	
		pager: '#prowednk',	
		rowNum: 100,
		gridview: true,
		sortname:'ID_NhomTemplate',
		sortorder:'',
		rowList:[],
		height:100,
		width: 100,
		viewrecords: true,	
		ignoreCase:true,
		shrinkToFit:true,
		grouping: false,
		sortorder: "asc",
		//cellEdit: true,
		//cellsubmit : 'clientArray',
 		//cellurl : 'resource.php?module=<?= $modules ?>&view=<?= $view ?>&action=controller&oper=edit',
		  serializeRowData: function (postdata) {  
		  
		  postdata.ID_Kham=$('#rowed3').getCell($('#rowed3').jqGrid ('getGridParam', 'selrow'));
		                return postdata;   
		  },
			onCellSelect: function (rowid,iCol,cellcontent,e) {
				window.idnk=rowid;
                   if(iCol==0){
                     $( "#dialog-confirm" ).dialog("open");
				   }
			                
        },		
		
		onSelectRow: function(id){		  
		  //$("#rowed4").jqGrid().setGridParam({url:'data2_tam.php?id='+lastsel}).trigger("reloadGrid");	   
		},
		ondblClickRow: function (rowId, rowIndex, columnIndex) {
			$(".ui-icon-pencil").trigger('click'); 
 		},
		loadComplete: function(data) {	
			grid_filter_enter("#rowednk");

			var tmp1 = $("#rowednk").jqGrid('getDataIDs'); 
			for(var i=0;i < tmp1.length;i++){ 
				jQuery("#rowednk").jqGrid('editRow',tmp1[i]);
				xoa = "<input class='' style='height:22px;width:50px;' type='button' value='Xoa' onclick=\"moghichu('"+tmp1[i]+"');\" />"; 
				$("#rowednk").jqGrid('setRowData',tmp1[i],{Xoa:xoa});
			}

			/*	jQuery("#rowednk").jqGrid('editRow',tmp1[i]);
					var rowData = $("#rowednk").getRowData(tmp1[i]);	
		
					xoa = "<input class=' custom_button_n' style='height:22px;width:50px; box-shadow:none!important; cursor:pointer;' type='button' value='Xóa' onclick=\"n_xoa('"+tmp1[i]+"');\" />"; 
					//alert(xoa);
					$("#rowednk").jqGrid('setRowData',tmp1[i],{Xoa:xoa});
			*/
		},	  
	});	 
		
}
function create_ChiTiet(){	
	mydata=[];
	 $("#rowedct").jqGrid({
		data: mydata,
		datatype: "local",	
		colNames:['Tên thuốc','Đvt','sl','Cách dùng'],
		colModel:[
			{name:'tenthuoc',index:'tenthuoc', width:"30%", editable:true,align:'letf',hidden:false}, 
			{name:'donvitinh',index:'donvitinh', width:"10%", editable:true,align:'letf',hidden:false}, 
			{name:'soluong',index:'soluong', width:"5%", editable:true,align:'letf',hidden:false}, 
			{name:'cachdung',index:'cachdung', width:"55%", editable:true,align:'letf',hidden:false}, 
			],
	//

		loadonce: true,
		scroll: 1, 
		modal:true,	 	
		pager: '#prowedct',	
		rowNum: 100,
		gridview: true,
		sortname:'tenthuoc',
		sortorder:'',
		rowList:[],
		height:100,
		width: 100,
		viewrecords: true,	
		ignoreCase:true,
		shrinkToFit:true,
		grouping: false,
		sortorder: "asc",
		
		
		serializeRowData: function (postdata) { 		 	
			//$("#rowed3").trigger("reloadGrid");		
			//return postdata;
		},
		onSelectRow: function(id){		  
		  //$("#rowed4").jqGrid().setGridParam({url:'data2_tam.php?id='+lastsel}).trigger("reloadGrid");	   
		},
		ondblClickRow: function (rowId, rowIndex, columnIndex) {
			
 		},
		loadComplete: function(data) {	
			
		},	  
		caption: "Chi tiết chỉ định-Đơn thuốc"
	});	

	
}
function create_ChiTiet2(){	
	mydata=[];
	 $("#rowedct2").jqGrid({
		data: mydata,
		datatype: "local",	
		colNames:['Tên loại khám','Số lần/ngày','Số ngày'],
		colModel:[
			{name:'TenLoaiKham',index:'TenLoaiKham', width:"20%", editable:true,align:'letf',hidden:false}, 
			{name:'SoLanThucHienTrongNgay',index:'SoLanThucHienTrongNgay', width:"10%", editable:true,align:'letf',hidden:false}, 
			{name:'SoNgayThucHien',index:'SoNgayThucHien', width:"10%", editable:true,align:'letf',hidden:false}, 
			],
	//

		loadonce: true,
		scroll: 1, 
		modal:true,	 	
		pager: '#prowedct2',	
		rowNum: 100,
		gridview: true,
		sortname:'TenLoaiKham',
		sortorder:'',
		rowList:[],
		height:100,
		width: 100,
		viewrecords: true,	
		ignoreCase:true,
		shrinkToFit:true,
		grouping: false,
		sortorder: "asc",
		
		
		serializeRowData: function (postdata) { 		 	
			//$("#rowed3").trigger("reloadGrid");		
			//return postdata;
		},
		onSelectRow: function(id){		  
		  //$("#rowed4").jqGrid().setGridParam({url:'data2_tam.php?id='+lastsel}).trigger("reloadGrid");	   
		},
		ondblClickRow: function (rowId, rowIndex, columnIndex) {
			
 		},
		loadComplete: function(data) {	
			
		},	  
		caption: "Chi tiết chỉ định-cận lâm sàng"
	});	

	
}

</script>