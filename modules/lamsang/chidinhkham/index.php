<!--author: Phan Nam-->
<style type="text/css">
.bongmo{
	background: #aaaaaa;
	opacity: .3;	
}
#n_dangluu{
	position:relative;
	top: -48%;
	left: 45%;
	width: auto;
	z-index:999;
	padding: 3px;
	margin: 5px;
	height:22px;
	width:100px;
	text-align: center;
	font-weight: bold;
	display: block;
	border:solid 2px #DFD9C3;
	font-size:13px;
	background:#FBFAF5;
	color:#55A616;
	box-shadow: 2px #919191;
}
.tooltips{
	left:950px !important;
}
.nam-hover:hover{
	color:#000;
	background:#008DDF!important;
}
.frame_u78787878975f{
	width:300px!important;
	text-align:center!important;
	height:auto;
	}
.frame_u78787878975f2{
	width:300px!important;
	text-align:center!important;
	height:auto;
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
    #gbox_rowed3, #gbox_rowed4, #gbox_rowed5, #gbox_rowed6, #gbox_rowed7{
        margin-left:4px;
        margin-top:0px;
        box-shadow:0px 0px 10px #a0a0a0;
        border:1px solid #919191; 
    }#n_menu{
		border-radius: 6px 6px 6px 6px;
		border: 1px solid #d4ccb0;
		height:40px;
		margin: 5px;
	}#n_bt{
		border-radius: 6px 6px 6px 6px;
		border: 1px solid #d4ccb0;
		height:30px;
		margin: 3px;
		display:none;			
		}
	#n_menu_left{
		margin:10px;
		}
	#chongoikham{
	margin-top: -28px;
	vertical-align: top;
	width: 100px;
	height: 15px;
	float: right;
	margin-right: 10px;	
}#botton{
	position:absolute;  
  	botton:0px;  
	width:98%;  
	height:20px;   /* Height of the footer */  	
	border-radius: 6px 6px 6px 6px;
	border: 1px solid #d4ccb0;
	padding: 10px;
	margin-left:2px;
	margin-top:5px;
	background:#FBFBF5;
}#hentrakq{
	float: left;
	margin-top: -2px;
	
}#bt_left{
	float: left;
	min-width: 450px;
	margin-top: 6px;	
}#bt_right{
	float: left;
	margin-top: -2px;
	width: 800px;	
	
}
#patient_info{

	}
#n_top{
	border-radius: 6px 6px 6px 6px;
	border: 1px solid #d4ccb0;
	height:65px;
	margin: 5px 0px -5px 0px;
	background:#FBFBF5;
}
#n_top_right{
	float: right;
	margin-top: -30px;
	margin-right: 10px;
	}
input.custom_button_n[type="button"] {
    background: none repeat scroll 0 0 rgba(0, 0, 0, 0);
    border: medium none;
    font-size: 11px;
    height: 17px !important;
    outline: medium none;
    text-decoration: underline;
    text-shadow: 0 1px 0 rgba(255, 255, 255, 0.6);
    width: 50px !important;
	color:#00F;
	margin-left:-2px!important;
	width: 35px !important
}input.custom_button_n[type="button"]:hover{
	color:red;
	margin-left:-2px!important;
	width: 35px !important
	}


select.editable{
	width:70px!important;
	height: 20px!important;
	 padding:0px!important; 
}.colNhomThucHien select.editable{
	width:105px!important;
	height: 20px!important;
	 padding:0px!important; 
}
#tongtien{
	margin-left:276px;
	margin-top:4px;
}#n_top_right{
	display:none;
	}#btn_cddatra,#btn_cdmoi{
		width: 2%;
}#thanhtienvienphi,#thanhtienbhyt,#phithuchien{
	box-shadow:none!important;	
	padding: 0px!important;
	}
.no-close .ui-dialog-titlebar-close {
    display: none;
}.ui-state-hover{
	border:#F00;
}.profile_inner_rate{
	width: 110px!important; 
}.profile_inner_temp{
	width: 99px!important;
}.ui-button-text{
	padding:0em  !important;
}.ui-dialog .ui-dialog-buttonpane button {
	width:40px;
	height:30px;
}.data_chongoikham{
	width:1306px!important;
	height:346px !important;
}
.ui-dialog-buttonset button.ui-button{
 width: 60px!important;
}
#dieutriphoihop{
    height: 15px;
	float:right;
	margin-right: 140px;
	width:100px;
    margin-top: -28px;
    vertical-align: top;	
}
.xanh{
	display:none !important;
}
</style>
<body> 
<input type="hidden" id="mabenhnhan" value="" />
<input type="hidden" id="soluotchon" value="0" />
<input type="hidden" value="0" id="dachidinh" name="dachidinh"> 
<div id="dialog" title="Lý do hủy bỏ"  style="display:none">
  <textarea id="lydohuybo" style="width:375px; height:100px;" ></textarea>
  <input type="hidden" id="idk" value="" />
</div>
<div id="comfrim" title="Lý do hủy bỏ"  style="display:none">

</div>
<div id="dialog_bschinh" title="Thông báo"  style="display:none">
	Loại khám này là khám LS chính nên không thể hủy bỏ, nếu muốn về 0 đồng thì chọn khám LS 0 đồng hoặc miễn giảm.
</div>
<div id="dialog_loi" title="Thông báo"  style="display:none">
Vui lòng chọn một lượt khám để thực hiện chức năng này!!!
</div>
<div id="dialog_loi2" title="Thông báo"  style="display:none">
Vui lòng cấu hình tầng trước khi thực hiện chức năng này!!!
</div>
 <div  class="data_chongoikham" title="Chọn gói khám">
    <table id="data_goikham">
    </table>   
    <br />
	<table id="data_loaikham">
    </table>   
  </div>
 
	<div id='n_top' >
        <div class="patient_info"> </div>
        <div id='n_top_right' >
            <a  id="ghichu" style="margin-left: 5px;" href="#" > Ghi chú</a>
            <a  id="thongtinbn" style="margin-left: 5px;"  href="#" > Thông tin bệnh nhân </a>
        </div>
        </div>
    <div id="panel_main" style="margin-top:10px;" >  
  <!-- <input type="hidden" id="idluotkham" value="257659" /> --> 

     
	<div class="ui-layout-west ui-widget-content left_col">   <table id="rowed3" ></table></div>
        <div class="center_col ui-widget-content ui-layout-center">  <table id="rowed4" ></table> </div>
        <div class="ui-layout-east ui-widget-content right_col">
       
        <table id="rowed5" ></table> 
       
		<div id='n_bt'> </div>
        <div id="n_dangluu" style="display:none">
           	 Đang lưu...
        </div>
		</div>
		
    </div>
    <div id='botton' >
    	<div id="bt_left" style=" min-width: 450px; ">
			<div id='dukiencokq'  style=" float: left; margin-left: 1%; ">
				
			  </div>
			 <div id='hentrakqmoi' style=" float: left; margin-left: 7%; ">
				
			  </div>
           </div>
           <div id="bt_right">
				
                <input type="checkbox" id="btn_cddatra" style=" margin-left: 1%; " checked />Hiện chỉ định đã hủy bỏ
                <input type="checkbox" id="btn_cdmoi" style=" margin-left: 1%; " />Chỉ in chỉ định mới
                
                <a  id="btn_xemin" class="fm-button ui-widget ui-state-default ui-corner-all fm-button-icon-left ui-button-text-only " style=" margin-left: 1%;  margin-top: -3px;"  >
                <span class="ui-button-text">Xem in CĐ<span class="ui-icon ui-icon-document"></span></span>
                 </a>
                 <a  id="btn_in" class="fm-button ui-widget ui-state-default ui-corner-all fm-button-icon-left ui-button-text-only " style=" margin-left: 1%;  margin-top: -3px;"  >
                <span class="ui-button-text">In CĐ<span class="ui-icon ui-icon-print"></span></span>
                 </a>
				<a  id="btn_luu" class="fm-button ui-widget ui-state-default ui-corner-all fm-button-icon-left ui-button-text-only " style=" margin-left: 1%;  margin-top: -3px;"  >
                <span class="ui-button-text">Lưu [Ctrl+S]<span class="ui-icon ui-icon-disk"></span></span>
                 </a>
                 
                 <a  id="btn_chidinh" class="fm-button ui-widget ui-state-default ui-corner-all fm-button-icon-left ui-button-text-only " style=" margin-left: 1%;  margin-top: -3px;"  >
                <span class="ui-button-text">Chỉ định [F12]<span class="ui-icon ui-icon-disk"></span></span>
                 </a>

        	</div>
		</div>	
 </body>
</html> 

<script type="text/javascript">
var report_code=["PhieuChiDinh"];
var report_name=["Phiếu chỉ định"];
    jQuery(document).ready(function() {
		jwerty.key('ctrl+s', false);
		window.n_incd=0;
		window.phantrammoi=100;
		//$("#dieutriphoihop").button();
		setTimeout(function(){
		//window.ds_tang=$.cookie("dstang");
			window.ds_tang=3;
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
			
			 $('#dialog_bschinh').dialog({
				autoOpen: false,
				width: 350,
				height:180,
				modal: true,
				resizable: false,
				closeOnEscape: true,
					buttons: {
					"Ok": function() {
						$( this ).dialog( "close" );
					}
				}
			 });
				
			if(window.ds_tang==""){
				$( "#dialog_loi2" ).dialog('open');
			}else{
				window.new_ds_tang=window.ds_tang;
				//window.new_ds_tang=window.ds_tang.split(",");
			}
		},300);
		<?php 
		$data= new SQLServer;
		$params = array($_GET['idluotkham']);
		$store_name="{call Gd2_ThongTinLuotKham_GetAllByID_LuotKham_New(?)}";
		$get=$data->query( $store_name,$params);
		$excute= new SQLServerResult($get);
		$tam= $excute->get_as_array();
		
		echo 'window.idluotkham='.$_GET['idluotkham'].';';
		echo 'window.loaidoituongkham="'.$tam[0]['LoaiDoiTuongKham'].'";';
		echo 'window.idbenhnhan='.$tam[0]['ID_BenhNhan'].';';
		echo 'window.n_idtrangthai="'.$tam[0]['ID_TrangThai'].'";';
		echo 'window.n_dathanhtoanbill="'.$tam[0]['DaThanhToanBill'].'";'; //
		echo 'window.n_id_quoctich="'.$tam[0]['ID_QuocTich'].'";';
		echo 'window.n_hesotheoquoctich="'.$tam[0]['HeSoVienPhi'].'";';
		?>
		
		$("#dieutriphoihop").click(function(e) {
            parent.postMessage("dieutriphoihop;"+window.idluotkham+";;"+window.idbenhnhan, "*");
        });
		
		temp = jQuery(window).height() - 125;
        $("#panel_main").css("height", temp + "px");
        $("#panel_main").fadeIn(1000);
		$.get( "resource.php?module=web_services&function=create_panel1&id_benhnhan="+window.idbenhnhan+"&action=index", function( data ) {
		  $( ".patient_info" ).html( data );
		  $( ".patient_info" ).css("width", $( "#patient_info" ).width()+"css");	
		});
		
		$.ajax({
		  url: 'resource.php?module=<?= $modules ?>&view=<?= $view ?>&action=data_benhnhanby_idluotkham&id='+window.idluotkham,
		  context: document.body
		}).done(function(data) {
			var rs=data.split(';;');
			$("#mabenhnhan").val(rs[2]);
			
			parent.postMessage('changetitle;<?=$view?>_'+window.idluotkham+';Chỉ định khám - '+rs[3]+';', '*');
			parent.postMessage('changetitle;chidinhkham-tab;Chỉ định khám - '+rs[3]+';', '*');
		});
		$("#btn_chidinh,#btn_luu").button();
		load_select_nguoichidinh();
		load_select_trangthai();
		load_select_tennhomcha();
        create_layout();
        create_grid();
        create_grid2();
        create_grid3();
        resize_control();
		
		document.getElementById("xemtatca").checked=true;
		var luot =0;
		$('#btn_xemin,#btn_in, #btn_luu,#chongoikham,#hentrakq,#btn_chidinh,#dieutriphoihop').button();
		
		$("#rowed4").jqGrid('setGridParam',{datatype: 'json',url:"resource.php?module=<?=$modules?>&view=<?=$view?>&action=data_hangmucloaikham_all&trangthaikham="+window.n_trangthaikham+"&idluotkham="+window.idluotkham+"&phantram="+window.phantram+'&nguoinuocngoai='+window.n_nguoinuocngoai+'&doituong='+window.loaidoituongkham}).trigger('reloadGrid');
		
		$("#xemtatca").change(function(event) {
			if($("#xemtatca").is(':checked')==true){
				$("#gs_TenLoaiKham").focus();
				$("#gs_TenLoaiKham").val("");
				$("#rowed4").jqGrid('setGridParam',{datatype: 'json',url:"resource.php?module=<?=$modules?>&view=<?=$view?>&action=data_hangmucloaikham_all&trangthaikham="+window.n_trangthaikham+"&idluotkham="+window.idluotkham+"&phantram="+window.phantram+'&nguoinuocngoai='+window.n_nguoinuocngoai+'&doituong='+window.loaidoituongkham}).trigger('reloadGrid');
			}else{
				id = $('#rowed3').jqGrid ('getGridParam', 'selrow');	
				var rowData = $("#rowed3").getRowData(id); 
				var ID_NhomCLS = rowData['ID_NhomCLS'];// alert(ID_LuotKham);	
				$("#gs_TenLoaiKham").val("");
				$('#rowed3 #'+id).focus();				 
				$("#rowed3").jqGrid("setSelection",id, true);
				$("#rowed4").jqGrid('setGridParam',{datatype: 'json',url:"resource.php?module=<?=$modules?>&view=<?=$view?>&action=data_hangmucloaikham_idnhomcls&trangthaikham="+window.n_trangthaikham+"&id="+ID_NhomCLS+"&idluotkham="+window.idluotkham+"&phantram="+window.phantram+'&nguoinuocngoai='+window.n_nguoinuocngoai+'&doituong='+window.loaidoituongkham}).trigger('reloadGrid');
			}
		});
	$("#rowed5").jqGrid('setGridParam',{datatype: 'json',url:"resource.php?module=<?=$modules?>&view=<?=$view?>&action=data_khamby_idluotkham&id="+window.idluotkham}).trigger('reloadGrid');
		$("#hentrakq").click(function(e){
			$.post('resource.php?module=web_services&function=get_link&action=index&folder=hen_tra_ket_qua:').done(function(data) {
				elem=1 + Math.floor(Math.random() * 1000000000);
				width=90;
				height=90;
				var folder= data.split(';');
				var links='resource.php?module=canlamsang&view=hen_tra_ket_qua&id_form=&idluotkham='+window.idluotkham;				  				  
				dialog_add_dm("",width,height,elem,links);   
			})
		})
		
		$("#ghichu").click(function(e){
			elem = 1 + Math.floor(Math.random() * 1000000000);
    		dialog_main("Ghi chú của bệnh nhân: "+ $("#hotenbenhnhan").val(), 95, 70, elem, 'resource.php?module=hanhchinh&view=ghi_chu&id_form=230&idbenhnhan=' + $("#idbenhnhan").val());
			
		})
        $(window).resize(function() {
            temp = jQuery(window).height() - 125;
            $("#panel_main").css("height", temp + "px");
            resize_control();
        })
		
		/*$.ajax({
		  url: 'resource.php?module=<?= $modules ?>&view=<?= $view ?>&action=data_hentrakq_by_idbenhnhan&ac=cokq&id='+ window.idbenhnhan,
		  context: document.body
		}).done(function(data) {
		  $("#hienthidukiencokq").html(data);
		});
		
		$.ajax({
		  url: 'resource.php?module=<?= $modules ?>&view=<?= $view ?>&action=data_hentrakq_by_idbenhnhan&ac=henkq&id='+window.idbenhnhan,
		  context: document.body
		}).done(function(data) {
		  $("#hienthihentrakqmoi").html(data);
		});*/
		
		$('#dialog').dialog({
                autoOpen: false,
				width: 400,
                modal: true,
                resizable: false,
                buttons: {
                    "Ok": function() {
                        $("#rowed5").jqGrid('setRowData',$("#idk").val(),{ThanhTienVienPhi:0});
						$("#rowed5").jqGrid('setRowData',$("#idk").val(),{ThanhTienBHYT:0});
						$("#rowed5").jqGrid('setRowData',$("#idk").val(),{PhiThucHien:0});
						$("#rowed5").jqGrid('setRowData',$("#idk").val(),{TrangThai:"HuyBo"});
						$("#rowed5").jqGrid('setRowData',$("#idk").val(),{LyDoHuyBo:$("#lydohuybo").val()});
						$("#rowed5").jqGrid('setRowData',$("#idk").val(),{Huy:1});
						$("#rowed5").jqGrid('setRowData',$("#idk").val() , '', { background: '#A9A9AA',border:'1px solid #BBBBBB' });
						//jQuery("#rowed5").jqGrid('saveRow',$("#idk").val());
						var tmp5 = $("#rowed5").jqGrid('getDataIDs'); 
						var tt_bhyt =0;
						var tt_vienphi =0;
						var phithuchien =0;
						for(var i=0;i < tmp5.length;i++){ 
							var rowData = $("#rowed5").getRowData(tmp5[i]);
							xoa = "<input class=' custom_button_n' style='height:22px;width:50px; box-shadow:none!important; cursor:pointer;' type='button' value='Xóa' onclick=\"n_xoa('"+tmp5[i]+"');\" />"; 
							$("#rowed5").jqGrid('setRowData',tmp5[i],{Xoa:xoa});	
							tt_vienphi =parseFloat(tt_vienphi) + parseFloat(rowData["ThanhTienVienPhi"]);
							tt_bhyt =parseFloat(tt_bhyt) + parseFloat(rowData["ThanhTienBHYT"]);
							phithuchien =parseFloat(phithuchien) + parseFloat(rowData["PhiThucHien"]);
						}
						$("#thanhtienvienphi").val(formatMoney(tt_vienphi));
						$("#thanhtienbhyt").val(formatMoney(tt_bhyt));
						$("#phithuchien").val(formatMoney(phithuchien));
						
						var  Sum_ThanhTienVienPhi = $("#rowed5").jqGrid('getCol', 'ThanhTienVienPhi', false, 'sum');
						var  Sum_ThanhTienBHYT = $("#rowed5").jqGrid('getCol', 'ThanhTienBHYT', false, 'sum');
						//var  Sum_BHChiTra = $("#rowed5").jqGrid('getCol', 'BHChiTra', false, 'sum');
						var  Sum_BNChiTra = $("#rowed5").jqGrid('getCol', 'BNChiTra', false, 'sum');
						var  Sum_PhiThucHien = $("#rowed5").jqGrid('getCol', 'PhiThucHien', false, 'sum');
						$("#rowed5").jqGrid('footerData','set', {
							LoaiKham: 'Tổng tiền:', 
							ThanhTienVienPhi: Sum_ThanhTienVienPhi,
							ThanhTienBHYT: Sum_ThanhTienBHYT,
							//BHChiTra: Sum_BHChiTra,
							BNChiTra: Sum_BNChiTra,
							PhiThucHien: Sum_PhiThucHien,
						});
                        $(this).dialog("close");
                    },
                    "Cancel": function() {
                        $(this).dialog("close");
                    }
                }
            });
			
			$('#dialog_loi').dialog({
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

			$('#comfrim').dialog({
                autoOpen: false,
                width: 350,
				height:150,
                modal: true,
                resizable: false,
				closeOnEscape: true,
				focus: function() {
					$('#comfrim').parent().find('.ui-dialog-buttonpane button:eq(0)').focus();
				},
				buttons: {
					"Ok": function() {
						$( this ).dialog( "close" );
					},
					"can": function() {
						$( this ).dialog( "close" );
					}
				}
            });
			
		if(window.idluotkham==""){
			$( "#dialog_loi" ).dialog('open');
			}
		$("input#btn_cdmoi").attr("disabled", true);
		//$( "#btn_chidinh" ).addClass( "ui-state-disabled" );
			$( ".data_chongoikham" ).dialog({
			  autoOpen: false,
			  height: 500,
			  width: 1035,
			  modal: true,
			  
			  buttons: {
				"Chọn": function() {
						var i,j,tmp,tmp1;		
						tmp = jQuery("#data_loaikham").jqGrid('getGridParam','selarrrow');
						$.get( "resource.php?module=<?= $modules ?>&view=<?= $view ?>&action=check_phongban&ac=check2&id_loaikham="+tmp+"&ds_tang="+window.new_ds_tang, function( data ) {				
							var rs=jQuery.parseJSON(data);
							var n_idlk;
							var  tmpn = jQuery("#data_loaikham").jqGrid('getGridParam','selarrrow');
								 for(j=0;j<rs.length;j++){
									 for(i=0;i<tmpn.length;i++){
										tmpn1=tmpn[i].split(",");
										flag=0;
										if(parseInt(rs[j]["id"])==parseInt(tmpn1)){
											n_idlk= rs[j]["ID_PhongBan"];
											chuyen3(parseInt(tmpn1),n_idlk);
											flag=1;
										}
										if(flag=0){
											chuyen3(parseInt(tmpn1),"0");
										}
									}
								}//end for
							var tmp3 = $("#rowed5").jqGrid('getDataIDs'); 
							var tt_bhyt =0;
							var tt_vienphi =0;
							var phithuchien =0;
							for(var i=0;i < tmp3.length;i++){ 
								var rowData = $("#rowed5").getRowData(tmp3[i]);	
								xoa = "<input class=' custom_button_n' style='height:22px;width:50px; box-shadow:none!important; cursor:pointer;' type='button' value='Xóa' onclick=\"n_xoa('"+tmp3[i]+"');\" />"; 
								$("#rowed5").jqGrid('setRowData',tmp3[i],{Xoa:xoa});
								tt_vienphi =parseFloat(tt_vienphi) + parseFloat(rowData["ThanhTienVienPhi"]);
								tt_bhyt =parseFloat(tt_bhyt) + parseFloat(rowData["ThanhTienBHYT"]);
								phithuchien =parseFloat(phithuchien) + parseFloat(rowData["PhiThucHien"]);
								if(window.loaidoituongkham=="BHYT"){
									if(rowData["Color"]=="X"){
										$("#rowed5").jqGrid('setRowData', tmp3[i], false, { background: '#C5F7C1',border:'1px solid #dfd9c3' });
									}else if(rowData["Color"]=="V"){
										$("#rowed5").jqGrid('setRowData', tmp3[i], false, { background: '#FDFCC2',border:'1px solid #dfd9c3' });
									}
								}
								
							}
							$("#thanhtienvienphi").val(formatMoney(tt_vienphi));
							$("#thanhtienbhyt").val(formatMoney(tt_bhyt));
							$("#phithuchien").val(formatMoney(phithuchien));
							
							var  Sum_ThanhTienVienPhi = $("#rowed5").jqGrid('getCol', 'ThanhTienVienPhi', false, 'sum');
							var  Sum_ThanhTienBHYT = $("#rowed5").jqGrid('getCol', 'ThanhTienBHYT', false, 'sum');
							//var  Sum_BHChiTra = $("#rowed5").jqGrid('getCol', 'BHChiTra', false, 'sum');
							var  Sum_BNChiTra = $("#rowed5").jqGrid('getCol', 'BNChiTra', false, 'sum');
							var  Sum_PhiThucHien = $("#rowed5").jqGrid('getCol', 'PhiThucHien', false, 'sum');
							$("#rowed5").jqGrid('footerData','set', {
								LoaiKham: 'Tổng tiền:', 
								ThanhTienVienPhi: Sum_ThanhTienVienPhi,
								ThanhTienBHYT: Sum_ThanhTienBHYT,
								//BHChiTra: Sum_BHChiTra,
								BNChiTra: Sum_BNChiTra,
								PhiThucHien: Sum_PhiThucHien,
							});
						});
					$( this ).dialog( "close" );
				  },
				Cancel: function() {
				  $( this ).dialog( "close" );
				}
			  },	
			  close: function() {
			  }
			});
		
		  $( "#chongoikham" ).click(function() {
		  $('.data_chongoikham').dialog('open');	
		});
		
//f12 luu
document.onkeydown = function(e) {
	if (e.keyCode === 123) {
		$("#btn_chidinh").click();
		return false;
	}
};
$(document).keyup(function(e) {
    if(jwerty.is("ctrl+s",e)){
		$("#btn_luu").click();
		return false;
	}
});
window.inphieu=0;
window.chidinhlandau=0;
//$('#btn_luu').button('disable');
$("#btn_xemin").click(function(){
	$('#btn_xemin').button('disable');
	window.inphieu=1;
	if(window.n_dathanhtoanbill==1 || window.n_khoachidinh==1){
	//	if(window.n_dathanhtoanbill==1 || window.n_idtrangthai=='KetThucKham'){
		inchidinh();
	}else{
	 	$("#btn_luu").click();
	}
});
$("#btn_in").click(function(){
	window.n_incd=1;
	$('#btn_in').button('disable');
	window.inphieu=1;
	if(window.n_dathanhtoanbill==1 || window.n_khoachidinh==1){
		inchidinh();
	}else{
	 	$("#btn_luu").click();
	}
});
$("#btn_luu").click(function(){
if(window.chidinhlandau==0){
	window.chidinhlandau=1;
	$("#rowed5 tbody").addClass('bongmo');
	$("#n_dangluu" ).show();
				$('#btn_luu').button('disable');	
				if(window.idluotkham==""){
					alert("Vui lòng chọn lượt khám để thực hiện chức năng này");	
				}else{
					$("#btn_cdmoi").removeAttr("disabled");
					var ids = $('#rowed5').jqGrid('getDataIDs');
					var phancach = "";
					var dataToSend='[';
					for(var i=0;i<=ids.length-1;i++){
						//console.log(i)
						dataToSend += phancach+'{';
						var rowData = $('#rowed5').jqGrid ('getRowData', ids[i]);
						if(rowData['TrangThai']!="HuyBo"){
							var _thuchien=$("#"+ids[i]+"_ThucHien").val()
						}else{
							var _thuchien=0;
						}
						dataToSend += '"IDLuotKham":' + JSON.stringify(rowData['IDLuotKham'])+',';
						dataToSend += '"IDKham":' + JSON.stringify(rowData['IDKham'])+',';
						dataToSend += '"IDLoaiKham":' + JSON.stringify(rowData['IDLoaiKham'])+',';
						dataToSend += '"NhomThucHien":' + JSON.stringify(rowData['NhomThucHien'])+',';
						dataToSend += '"NguoiChiDinh":' + JSON.stringify(rowData['NguoiChiDinh'])+',';
						dataToSend += '"TrangThai":' + JSON.stringify(rowData['TrangThai'])+',';
						dataToSend += '"PhiThucHien":' + JSON.stringify(rowData['PhiThucHien'])+',';
						dataToSend += '"ThanhTienVienPhi":' + JSON.stringify(rowData['ThanhTienVienPhi'])+',';
						dataToSend += '"MaBenhNhan":' + JSON.stringify(rowData['MaBenhNhan'])+',';
						dataToSend += '"ThucHien":' + JSON.stringify(0)+',';
						dataToSend += '"GiaThueNgoaiThucHien":' + JSON.stringify(rowData['GiaThueNgoaiThucHien'])+',';
						dataToSend += '"ThoiGianTrungBinhThucHien":' + JSON.stringify(rowData['ThoiGianTrungBinhThucHien'])+',';
						dataToSend += '"PhuThu":' + JSON.stringify(rowData['PhuThu'])+',';
						dataToSend += '"BHChiTra":' + JSON.stringify(rowData['BHChiTra'])+',';
						dataToSend += '"DonGiaBHYT":' + JSON.stringify(rowData['DonGiaBHYT'])+',';
						dataToSend += '"PhanTramCungChiTra":' + JSON.stringify(rowData['PhanTramCungChiTra'])+',';
						dataToSend += '"ThanhTienCungChiTra":' + JSON.stringify(rowData['ThanhTienCungChiTra'])+','; 
						dataToSend += '"ThanhTienBHYT":' + JSON.stringify(rowData['ThanhTienBHYT'])+',';
						dataToSend += '"Luu":' + JSON.stringify(rowData['Luu'])+',';
						dataToSend += '"Sua":' + JSON.stringify(rowData['Sua'])+',';
						dataToSend += '"Huy":' + JSON.stringify(rowData['Huy'])+',';
						dataToSend += '"LanChiDinh":' + JSON.stringify(rowData['LanChiDinh'])+',';
						dataToSend += '"LyDoHuyBo":' + JSON.stringify(rowData['LyDoHuyBo']);
						dataToSend += '}';
						phancach=',';
					//	alert(dataToSend);
					}
					dataToSend+=']';
					//	window.datalocalToSend = jQuery.parseJSON(dataToSend);
					//alert(dataToSend);
					postData='{"id":'+dataToSend+'}';
					postData=$.parseJSON(postData);
					
					$.post('resource.php?module=<?= $modules ?>&view=<?= $view ?>&action=controller&oper=add&hienmaloi=0&phantram='+window.phantram,postData).done(function(data){
						window.chidinhlandau=0;
						$("#rowed5 tbody").removeClass('bongmo');
						$("#n_dangluu" ).hide();
						$("#btn_cddatra").prop( "checked", true );
						$("#rowed5").jqGrid('setGridParam',{datatype: 'json',url:"resource.php?module=<?=$modules?>&view=<?=$view?>&action=data_khamby_idluotkham&id="+window.idluotkham}).trigger('reloadGrid');
						$("#btn_luu").button('enable');
							tooltip_message("Lưu thành công");
							if(window.inphieu==1){
								setTimeout(function(){
								 inchidinh();
								 window.inphieu=0;	
								},1000);
							}
					})//$.post
				}//if idluotkham
 }
})//$("#btn_luu")
		
$("#btn_chidinh").click(function(){
	if(window.chidinhlandau==0){
		window.chidinhlandau=1;
				$('#btn_chidinh').button('disable');	
				if(window.idluotkham==""){
					alert("Vui lòng chọn lượt khám để thực hiện chức năng này");	
				}else{
					$("#btn_cdmoi").removeAttr("disabled");
					ids = $('#rowed5').jqGrid('getDataIDs');
					for(i=0;i<=ids.length-1;i++){
					jQuery("#rowed5").jqGrid('saveRow',ids[i]);
					}
					var gridData = jQuery("#rowed5").getRowData();
					var postData = JSON.stringify(gridData);
					postData='{"id":'+postData+'}';
					postData=$.parseJSON(postData);
					$.post('resource.php?module=<?= $modules ?>&view=<?= $view ?>&action=controller&oper=add&hienmaloi=a',postData).done(function(data){
						window.chidinhlandau=0;
						$("#btn_cddatra").prop( "checked", true );
						$("#rowed5").jqGrid('setGridParam',{datatype: 'json',url:"resource.php?module=<?=$modules?>&view=<?=$view?>&action=data_khamby_idluotkham&id="+window.idluotkham}).trigger('reloadGrid');
						$("#btn_chidinh").button('enable');
							tooltip_message("Đã lưu");
							setTimeout(function(){
								 inchidinh();	
							},1000);
					})//$.post
				}//if idluotkham
  }
})//$("#btn_luu")
	
$("#btn_cddatra").change(function() {
	if($(this).is(':checked')==true){
	var tmp = $("#rowed5").jqGrid('getDataIDs');
			for (var i = 0; i < tmp.length; i++) 
			{
				var rowData = jQuery('#rowed5').jqGrid ('getRowData', tmp[i]);
				if(rowData['TrangThai']=='HuyBo'){
					$("#"+tmp[i]).show();
				}
			}
	}else{
		var tmp = $("#rowed5").jqGrid('getDataIDs'); 
		for (var i = 0; i < tmp.length; i++) 
		{
			var rowData = jQuery('#rowed5').jqGrid ('getRowData', tmp[i]);
			if(rowData['TrangThai']=='HuyBo'){
				$("#"+tmp[i]).hide();
			}
		}
	}
})
	
$("#btn_cdmoi").change(function() {
	if($(this).is(':checked')==true){
	$("#btn_cddatra").attr("disabled", true);
	var tmp = $("#rowed5").jqGrid('getDataIDs');
		for (var i = 0; i < tmp.length; i++) 
		{
			var rowData = jQuery('#rowed5').jqGrid ('getRowData', tmp[i]);
			if(rowData['Luu']==1){
				$("#"+tmp[i]).hide();
			}
		}
	}else{
		$("#btn_cddatra").removeAttr("disabled");
		var tmp = $("#rowed5").jqGrid('getDataIDs'); 
		for (var i = 0; i < tmp.length; i++) 
		{
			var rowData = jQuery('#rowed5').jqGrid ('getRowData', tmp[i]);
			if(rowData['Luu']==1){
				$("#"+tmp[i]).show();
			}
		}
	}
})
phanquyen();
})//end ready
var lastsel;
function create_grid() {
        $("#rowed3").jqGrid({
            url: 'resource.php?module=<?= $modules ?>&view=<?= $view ?>&action=data_nhomloaikham',
            datatype: "json",
            colNames: ['id nhóm cha','id nhóm', 'Khám lâm sàn', 'Tên nhóm cha'],
            colModel: [
                {name: 'IDNhomCha', index: 'IDNhomCha', width: "0%", editable: false, align: 'left', hidden: true,edittype:"select",formatter:'select',editoptions:{value: tennhomcha}},
				{name: 'ID_NhomCLS', index: 'ID_NhomCLS', width: "0%", editable: false, align: 'left', hidden: true},
                {name: 'TenNhom', index: 'TenNhom', search: false, width: "1%", editable: false, align: 'left', hidden: false, classes:'rowed3_event'},
				{name: 'TenNhomCha', index: 'TenNhomCha', width: "2%", editable: false, align: 'left', hidden: true},
				//{name: 'STT', index: 'STT', width: "0%", editable: false, align: 'left', hidden: true},
            ],
           loadonce: false,
            scroll: 1,
            modal: true,
            rowNum: 100,
            rowList: [30, 50, 70],
            pager: '#prowed3',
            height: 100,
            width: 100,
            viewrecords: true,
            ignoreCase: true,
            shrinkToFit: true,
			grouping:true, 
		  	groupingView : { 
			groupField : ['IDNhomCha'],
			groupDataSorted : true ,
			groupCollapse : false,
			groupColumnShow :false,
			groupText : ['<b>{0}</b>']
		 	 }, 
			afterShowForm : function (formid) {
				
			},
            onSelectRow: function(id) {
				var luot= $("#solbtn_luuuotchon").val();
				$("#soluotchon").val(1);
				if(luot==1){
					document.getElementById("xemtatca").checked=false;
				}
				var rowData = jQuery(this).getRowData(id); 
				var ID_NhomCLS = rowData['ID_NhomCLS'];// alert(ID_LuotKham);				
				$("#rowed4").jqGrid('setGridParam',{datatype: 'json',url:"resource.php?module=<?=$modules?>&view=<?=$view?>&action=data_hangmucloaikham_idnhomcls&trangthaikham="+window.n_trangthaikham+"&id="+ID_NhomCLS+"&idluotkham="+window.idluotkham+"&phantram="+window.phantram+'&nguoinuocngoai='+window.n_nguoinuocngoai+'&doituong='+window.loaidoituongkham}).trigger('reloadGrid');
            },
            ondblClickRow: function(rowId, rowIndex, columnIndex) {
				chuyen2();	
            },
            onselect: function(rowId, rowIndex, columnIndex) {
				
            },
            loadComplete: function(data) {
			ids = $('#rowed3').jqGrid('getDataIDs');				 
			//$("#rowed3").jqGrid("setSelection",ids[0], true);
			 var i, groups = $(this).jqGrid("getGridParam", "groupingView").groups,
			 l = groups.length,
			 idSelectorPrefix = "#" + this.id + "ghead_0_";
			 for (i = 0; i < l; i++) {
				 if (groups[i].cnt === 1) {
					 // hide the grouping row
					 $(idSelectorPrefix + i).hide();
				 }
			 }
					$("#gs_TenLoaiKham").focus();
					$("#rowed3").unbind("keydown")
					$("#rowed3").jqGrid('bindKeys', {});
					$("#rowed3").bind("keydown",function(event) {	
					 var keycode = (event.keyCode ? event.keyCode : event.which);
					 if(keycode == '13'){
						var tmp = $("#rowed4").jqGrid('getDataIDs'); 
						if(tmp.length==1){
							var id = $("#rowed3").jqGrid ('getGridParam', 'selrow');
							$("#rowed3 #"+id).dblclick();
						}else{
							$("#gs_TenLoaiKham").focus();
							}
					 }
					 })
			},
            caption: "Nhóm loại khám"
        });
        $("#rowed3").jqGrid('navGrid', "#prowed3", {add: false, edit: false, del: false, search: false, refresh: true, closeAfterEdit: true, clearAfterAdd: true, navkeys: [true, 38, 40], closeOnEscape: true});
	$("#rowed3").jqGrid('bindKeys', {});
    }
function create_grid2(){
	mydata=[];
	$("#rowed4").jqGrid({
		data: mydata,
		datatype: "local",
		colNames: ['GiaThueNgoaiThucHien', 'ThoiGianTrungBinhThucHien', 'ID_DMLoaiKham_Phongban','ID_LoaiKham', 'Tên loại khám', 'Đ.Giá Viện phí', 'Đ.Giá Viện phí','Đ.Giá BHYT','P.Thu BV','P.Thu tại nhà','Hệ số người nước ngoài','BHYT trả','Color','',''],
		colModel: [
			{name: 'GiaThueNgoaiThucHien', index: 'GiaThueNgoaiThucHien', search: false, width: "30%", editable: false, align: 'left', hidden: true},
			{name: 'ThoiGianTrungBinhThucHien', index: 'ThoiGianTrungBinhThucHien', search: false, width: "30%", editable: false, align: 'left', hidden: true},
			{name: 'ID_DMLoaiKham_Phongban', index: 'ID_DMLoaiKham_Phongban', search: false, width: "30%", editable: false, align: 'left', hidden: true},
			{name: 'ID_LoaiKham', index: 'ID_LoaiKham', search: false, width: "0%", editable: false, align: 'left', hidden: true},
			{name: 'TenLoaiKham', index: 'TenLoaiKham', search: true, width: "70%", editable: false, align: 'left', hidden: false},
			{name:'GiaBaoChoBN',index:'GiaBaoChoBN', width:"39%", editable:true,align:'right',edittype:"text",hidden:true,formatter:'currency',formatoptions:{decimalSeparator:".", thousandsSeparator: ",", decimalPlaces: 0, prefix: "", defaultValue: '0'}},
			{name:'GiaHienThi',index:'GiaHienThi', width:"39%", editable:true,align:'right',edittype:"text",hidden:false,formatter:'currency',formatoptions:{decimalSeparator:".", thousandsSeparator: ",", decimalPlaces: 0, prefix: "", defaultValue: '0'}},
			{name:'GiaTheoBaoHiem',index:'GiaTheoBaoHiem', width:"32%", editable:true,align:'right',edittype:"text",hidden:true,formatter:'currency',formatoptions:{decimalSeparator:".", thousandsSeparator: ",", decimalPlaces: 0, prefix: "", defaultValue: '0'}},
			{name:'GiaPhuThu',index:'GiaPhuThu', width:"28%", editable:true,align:'right',edittype:"text",hidden:true,formatter:'currency',formatoptions:{decimalSeparator:".", thousandsSeparator: ",", decimalPlaces: 0, prefix: "", defaultValue: '0'}},
			{name:'GiaPhuThuTaiNha',index:'GiaPhuThuTaiNha', width:"30%", editable:true,align:'right',edittype:"text",hidden:true,formatter:'currency',formatoptions:{decimalSeparator:".", thousandsSeparator: ",", decimalPlaces: 0, prefix: "", defaultValue: '0'}},	 
			{name:'HeSoNuocNgoai',index:'HeSoNuocNgoai', width:"30%", editable:true,align:'right',edittype:"text",hidden:true,formatter:'currency',formatoptions:{decimalSeparator:".", thousandsSeparator: ",", decimalPlaces: 0, prefix: "", defaultValue: '0'}},
			{name:'GiaBaoHiemChiTra',index:'GiaBaoHiemChiTra', width:"30%", editable:true,align:'right',edittype:"text",hidden:true,formatter:'currency',formatoptions:{decimalSeparator:".", thousandsSeparator: ",", decimalPlaces: 0, prefix: "", defaultValue: '0'}},	   
			{name: 'Color', index: 'Color', search: false, width: "0%", editable: false, align: 'left', hidden: true},  
			{name: 'NhomBHYT', index: 'NhomBHYT', search: false, width: "0%", editable: false, align: 'left', hidden: true},  
			{name: 'PhanTramCungChiTra', index: 'PhanTramCungChiTra', search: false, width: "0%", editable: false, align: 'left', hidden: true},         
			],
		loadonce: true,
		scroll: false,
		modal: true,
		shrinkToFit: true,
		grid_save_option: "",
		cmTemplate: {sortable: false},
		rowNum: 300,
		rowList: [],
		pager: '#prowed3',
		height: 100,
		width: 100,
		viewrecords: true,
		ignoreCase: true,
		sortorder: "desc",
		afterShowForm : function (formid) {

		},
		 onSelectRow: function(id) {
			 
		},
		ondblClickRow: function(rowId, rowIndex, columnIndex) {
			chuyen(rowId);
		},
		onRightClickRow: function(rowid, iRow, iCol, e) {

		},
		loadComplete: function(data) {
		   grid_filter_enter("#rowed4");
		   $("#rowed4").unbind("keydown")
		   $("#rowed4").jqGrid('bindKeys', {});
		   $("#rowed4").bind("keydown",function(event) {	
			 var keycode = (event.keyCode ? event.keyCode : event.which);
			 if(keycode == '13'){
				var id = $("#rowed4").jqGrid ('getGridParam', 'selrow');
				$("#rowed4 #"+id).dblclick();					 
			 }
		  });
			var tmp1 = $("#rowed4").jqGrid('getDataIDs'); 
			for(var i=0;i < tmp1.length;i++){ 
				var rowData = $("#rowed4").getRowData(tmp1[i]);	
				//if(window.loaidoituongkham=="BHYT"){
					if(rowData["Color"]=="X"){
						$("#rowed4").jqGrid('setRowData', tmp1[i], false, { background: '#C5F7C1',border:'1px solid #dfd9c3' });
					}else if(rowData["Color"]=="V"){
						$("#rowed4").jqGrid('setRowData', tmp1[i], false, { background: '#FDFCC2',border:'1px solid #dfd9c3' });
					}
				//}
			}
		
		},
		caption: " Hạng mục loại khám <div id='xtc' style='float:right; margin-left: 50px;'><input type='checkbox' id='xemtatca'  /> Xem tất cả</div>"
	});
	$("#rowed4").jqGrid('filterToolbar',{searchOperators : false,searchOnEnter:false,defaultSearch:"cn"});
	$("#rowed4").jqGrid('navGrid', "#prowed4", {add: false, edit: false, del: false, search: false, refresh: true, closeAfterEdit: true, clearAfterAdd: true, navkeys: [true, 38, 40], closeOnEscape: true});
	$("#rowed4").jqGrid('bindKeys', {});
	add_namclass();
   }
function create_grid3()
    {
		mydata=[];
        $("#rowed5").jqGrid({
            data: mydata,
            datatype: "local",
            colNames: ['BHYT','ID Loại Khám','Xóa','Loại khám', 'Đ.Giá V.Phí', 'Đ.Giá BHYT', 'Phụ thu', 'TT V.Phí', 'TT BHYT','BH Trả','BN trả', 'Phí T.Hiện', 'T.Thái', 'Thực hiện', 'Bộ phận thực hiện', 'Người CĐ',  'GiaThueNgoaiThucHien',  'ThoiGianTrungBinhThucHien',  'IDKham',  'MaBenhNhan','LyDoHuyBo','huy',  'IDLuotKham','Luu','IDNhomCLS','NgayGioTao','Lần chỉ định','XetNghiem','% cùng chi trả','TT cùng chi trả','Color',''],
            colModel: [
				{name:'FixGiaBHYT',index:'FixGiaBHYT', width:"5%", editable:true,stype: 'text',search:true,searchoptions: { sopt: ['eq', 'ne'],value:':;1:Có;0:Không'}, editable:true,align:'center',hidden:true,edittype:"checkbox",formatter:"checkbox",formatoptions:{disabled: false},formoptions:{ rowpos:13, colpos:1}
			,editoptions: { value:"1:0",dataEvents:  [{ type: 'click', fn: function(e) { 
				$("#rowed5 tbody").addClass('bongmo');
				$("#rowed5 tbody").find('input:checkbox').each(function(index, element) {
                    $("#"+element.id).prop('disabled',true);
                });

				if($("#"+$(e.target).attr('id')).is(':checked')){
   					var tthai=1;
   				}
				else{
  					var tthai=0;
  				}
				var row = $(e.target).closest('tr.jqgrow');
                var tam = row.attr('id');
               var IDKham= $('#rowed5').getCell(tam, 'IDKham');
			   if(IDKham==''){
				 //  alert('Hiện tại chức năng này chỉ thực hiện các chỉ định đã lưu');
				   tooltip_message("Chức năng này chỉ thực hiện trên các chỉ định đã được lưu");
			   }else{
				   $.post('resource.php?module=<?= $modules ?>&view=<?= $view ?>&action=check_thanhtoan&idluotkham=<?=$_GET['idluotkham']?>').done(function(data){
						if(data=='false'){
							$.post('resource.php?module=<?= $modules ?>&view=<?= $view ?>&action=controller_fix_bhyt&hienmaloi=a&id_kham='+tam+'&ac='+tthai).done(function(data) {
								var n_rs=data.split(';;');
								$("#rowed5 tbody").removeClass('bongmo');
								$("#rowed5 tbody").find('input:checkbox').each(function(index, element) {
									$("#"+element.id).prop('disabled',false);
								});
												
								$("#rowed5").jqGrid('setCell',tam,'BNChiTra', parseInt(n_rs[1])-parseInt(n_rs[4]));
								$("#rowed5").jqGrid('setCell',tam,'ThanhTienBHYT', n_rs[4]);
								$("#rowed5").jqGrid('setCell',tam,'PhanTramCungChiTra ', n_rs[2]);
								$("#rowed5").jqGrid('setCell',tam,'ThanhTienCungChiTra', n_rs[3]);
								if(n_rs[5]==0){
									$("#"+tam+"_FixGiaBHYT").prop('checked',false);	
								}
								tinhtongtien();
							});
						}else{
							$("#rowed5 tbody").removeClass('bongmo');
							$("#rowed5 tbody").find('input:checkbox').each(function(index, element) {
								$("#"+element.id).prop('disabled',false);
							});
							tooltip_message("Lượt khám này đã thanh toán");
							$("#thongbao").html("Thông báo: Lượt khám này đã thanh toán");
						}
					});
			   }

                 } }]}}, 
                {name: 'IDLoaiKham', index: 'IDLoaiKham', search: false, width: "10%", editable: false, align: 'left', hidden: true},
                {name: 'Xoa', index: 'Xoa', search: false, width: "6%", editable: false, align: 'left', hidden: false},
                {name: 'LoaiKham', index: 'LoaiKham', search: false, width: "20%", editable: false, align: 'left', hidden: false,classes:'loai_kham'},
                {name: 'DonGiaVienPhi', index: 'DonGiaVienPhi', search: false, width: "12%", editable: false, align: 'right', hidden: true,formatter:'currency',formatoptions:{decimalSeparator:".", thousandsSeparator: ",", decimalPlaces: 0, prefix: "", defaultValue: '0'}},
				{name: 'DonGiaBHYT', index: 'DonGiaBHYT', search: false, width: "12%", editable: false, align: 'right', hidden: true,formatter:'currency',formatoptions:{decimalSeparator:".", thousandsSeparator: ",", decimalPlaces: 0, prefix: "", defaultValue: '0'}},
				{name: 'PhuThu', index: 'PhuThu', search: false, width: "8%", editable: false, align: 'right', hidden: true,formatter:'currency',formatoptions:{decimalSeparator:".", thousandsSeparator: ",", decimalPlaces: 0, prefix: "", defaultValue: '0'}},
				{name: 'ThanhTienVienPhi', index: 'ThanhTienVienPhi', search: false, width: "11%", editable: false, align: 'right', hidden: true,formatter:'currency',formatoptions:{decimalSeparator:".", thousandsSeparator: ",", decimalPlaces: 0, prefix: "", defaultValue: '0'}},
				{name: 'ThanhTienBHYT', index: 'ThanhTienBHYT', search: false, width: "11%", editable: false, align: 'right', hidden: true,formatter:'currency',formatoptions:{decimalSeparator:".", thousandsSeparator: ",", decimalPlaces: 0, prefix: "", defaultValue: '0'}},
				{name: 'BHChiTra', index: 'BHChiTra', search: false, width: "11%", editable: false, align: 'right', hidden: true,formatter:'currency',formatoptions:{decimalSeparator:".", thousandsSeparator: ",", decimalPlaces: 0, prefix: "", defaultValue: '0'}},
				{name: 'BNChiTra', index: 'BNChiTra', search: false, width: "11%", editable: false, align: 'right', hidden: false,formatter:'currency',formatoptions:{decimalSeparator:".", thousandsSeparator: ",", decimalPlaces: 0, prefix: "", defaultValue: '0'}},
                {name: 'PhiThucHien', index: 'PhiThucHien', search: false, width: "11%", editable: false, align: 'right', hidden: false,formatter:'currency',formatoptions:{decimalSeparator:".", thousandsSeparator: ",", decimalPlaces: 0, prefix: "", defaultValue: '0'}},
                {name: 'TrangThai', index: 'TrangThai', search: false, width: "10%", editable: false, align: 'center', hidden: false,edittype:"select",formatter:'select',editoptions:{value: trangthai}},
				{name: 'ThucHien', index: 'ThucHien', search: false, width: "11%", editable: false, align: 'right', hidden: true,formatter:'currency',formatoptions:{decimalSeparator:".", thousandsSeparator: ",", decimalPlaces: 0, prefix: "", defaultValue: '0'}},
  				{name: 'NhomThucHien', index: 'NhomThucHien', search: false, width: "20%", editable: true, align: 'center', hidden: true,edittype:"select",formatter:'select',classes:'colNhomThucHien'},
				{name: 'NguoiChiDinh', index: 'NguoiChiDinh', search: false, width: "10%", editable: false, align: 'center', hidden: false,edittype:"select",formatter:'select',editoptions:{value: nguoichidinh} },
			{name: 'GiaThueNgoaiThucHien', index: 'GiaThueNgoaiThucHien', search: false, width: "30%", editable: false, align: 'left', hidden: true},
				{name: 'ThoiGianTrungBinhThucHien', index: 'ThoiGianTrungBinhThucHien', search: false, width: "30%", editable: false, align: 'left', hidden: true},
				{name: 'IDKham', index: 'IDKham', search: false, width: "30%", editable: false, align: 'left', hidden: true},
				{name: 'MaBenhNhan', index: 'MaBenhNhan', search: false, width: "30%", editable: false, align: 'left', hidden: true},
				{name: 'LyDoHuyBo', index: 'LyDoHuyBo', search: false, width: "30%", editable: false, align: 'left', hidden: true},
				{name: 'Huy', index: 'Huy', search: false, width: "30%", editable: false, align: 'left', hidden: true},
				{name: 'IDLuotKham', index: 'IDLuotKham', search: false, width: "30%", editable: false, align: 'left', hidden: true},
				{name: 'Luu', index: 'Luu', search: false, width: "30%", editable: false, align: 'left', hidden: true},
				{name: 'IDNhomCLS', index: 'IDNhomCLS', search: false, width: "10%", editable: false, align: 'left', hidden: true},
				{name: 'NgayGioTao', index: 'NgayGioTao', search: false, width: "10%", editable: false, align: 'left', hidden: true},
				{name: 'LanChiDinh', index: 'LanChiDinh', search: false, width: "10%", editable: false, align: 'left', hidden: true},
				{name: 'XetNghiem', index: 'XetNghiem', search: false, width: "10%", editable: false, align: 'left', hidden: true},
				{name: 'PhanTramCungChiTra', index: 'PhanTramCungChiTra', search: false, width: "10%", editable: false, align: 'left', hidden: true},
				{name: 'ThanhTienCungChiTra', index: 'ThanhTienCungChiTra', search: false, width: "10%", editable: false, align: 'left', hidden: true},
				{name: 'Color', index: 'Color', search: false, width: "20%", editable: false, align: 'left', hidden: true},
				{name: 'Sua', index: 'Sua', search: false, width: "20%", editable: false, align: 'left', hidden: true},
            ],
			loadonce: false,
            scroll: false,
            modal: true,
			rownumbers: false,
            shrinkToFit: true,
			grid_save_option: "",
            cmTemplate: {sortable: false},
            rowNum: 10000000,
			pginput:false,
			pgbuttons:false,
            rowList: [],
            pager: '#prowed5',
            sortname: 'ThoiGianVaoKham',
            height: 100,
            width: 100,
            viewrecords: true,
            ignoreCase: true,
            sortorder: "desc",
			footerrow:true,
			afterShowForm : function (formid) {
				xuongdong(formid);
				lendong(formid);
			},
            loadComplete: function(data) {
				var tmp1 = $("#rowed5").jqGrid('getDataIDs'); 
				var tt_bhyt =0;
				var tt_vienphi =0;
				var phithuchien =0;
				var x=0;
				if(tmp1.length>0){
					$("#btn_chidinh").button('disable');
					//$("#btn_luu").button('enable');		
				}else{
					//$("#btn_luu").button('disable');	
				}
				for(var i=0;i < tmp1.length;i++){ 
					jQuery("#rowed5").jqGrid('editRow',tmp1[i]);
					var rowData = $("#rowed5").getRowData(tmp1[i]);	
					
					xoa = "<input class='custom_button_n' style='height:22px;width:50px; box-shadow:none!important; cursor:pointer;' type='button' value='Xóa' onclick=\"n_xoa('"+tmp1[i]+"');\" />"; 
					//alert(xoa);
					$("#rowed5").jqGrid('setRowData',tmp1[i],{Xoa:xoa});
					$("#rowed5").jqGrid('setRowData', tmp1[i], false, { background: '#D3D3D3',border:'1px solid #A9A9AA' });
					if(rowData["TrangThai"]=="HuyBo"){
						//jQuery("#rowed5").jqGrid('saveRow',tmp1[i]);
						$("#rowed5").jqGrid('setRowData', tmp1[i], false, { background: '#A9A9AA',border:'1px solid #BBBBBB' });
					}else if(window.loaidoituongkham=="BHYT"){
						if(rowData["Color"]=="X"){
							$("#rowed5").jqGrid('setRowData', tmp1[i], false, { background: '#C5F7C1',border:'1px solid #dfd9c3' });
						}else if(rowData["Color"]=="V"){
							$("#rowed5").jqGrid('setRowData', tmp1[i], false, { background: '#FDFCC2',border:'1px solid #dfd9c3' });
						}
					}
				}
				
				var  Sum_ThanhTienVienPhi = $("#rowed5").jqGrid('getCol', 'ThanhTienVienPhi', false, 'sum');
				var  Sum_ThanhTienBHYT = $("#rowed5").jqGrid('getCol', 'ThanhTienBHYT', false, 'sum');
				//var  Sum_BHChiTra = $("#rowed5").jqGrid('getCol', 'BHChiTra', false, 'sum');
				var  Sum_BNChiTra = $("#rowed5").jqGrid('getCol', 'BNChiTra', false, 'sum');
				var  Sum_PhiThucHien = $("#rowed5").jqGrid('getCol', 'PhiThucHien', false, 'sum');
				$("#rowed5").jqGrid('footerData','set', {
					LoaiKham: 'Tổng tiền:', 
					ThanhTienVienPhi: Sum_ThanhTienVienPhi,
					ThanhTienBHYT: Sum_ThanhTienBHYT,
					//BHChiTra: Sum_BHChiTra,
					BNChiTra: Sum_BNChiTra,
					PhiThucHien: Sum_PhiThucHien,
				});
            },
            caption: " Hạng mục loại khám được chọn <span id='luotkhamnoingoai'></span>"
        });

       $("#rowed5").jqGrid('navGrid', "#prowed5", {add: false, edit: false, del: false, search: false, refresh: false,prmView: false, closeAfterEdit: true, clearAfterAdd: true, navkeys: [true, 38, 40], closeOnEscape: true});
		$("#rowed5").jqGrid('bindKeys', {});
		
		
		add_namclass();
}

function create_layout() {
	$('#panel_main').layout({
		resizerClass: 'ui-state-default'
				, east: {
			resizable: true
					, size: "58%"
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
					, size: "32%"

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
		 , west:  {
			resizable: true
					, size: "10%"
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
	});
}
	

function n_xoa(tam){
	if(window.n_dathanhtoanbill!=1 && window.n_khoachidinh!=1){
		//if(window.n_dathanhtoanbill!=1 && window.n_idtrangthai!='KetThucKham'){
		var rowData_luu = $("#rowed5").getRowData(tam);
		if(rowData_luu["Luu"]!=1){
			$('#rowed5').jqGrid('delRowData',tam);
			var tmp5 = $("#rowed5").jqGrid('getDataIDs'); 
			var tt_bhyt =0;
			var tt_vienphi =0;
			var phithuchien =0;
			for(var i=0;i < tmp5.length;i++){ 
				var rowData = $("#rowed5").getRowData(tmp5[i]);
				xoa = "<input class=' custom_button_n' style='height:22px;width:50px; box-shadow:none!important; cursor:pointer;' type='button' value='Xóa' onclick=\"n_xoa('"+tmp5[i]+"');\" />"; 
				$("#rowed5").jqGrid('setRowData',tmp5[i],{Xoa:xoa});	
				 tt_vienphi =parseFloat(tt_vienphi) + parseFloat(rowData["ThanhTienVienPhi"]);
				 tt_bhyt =parseFloat(tt_bhyt) + parseFloat(rowData["ThanhTienBHYT"]);
				 phithuchien =parseFloat(phithuchien) + parseFloat(rowData["PhiThucHien"]);
			}
			$("#thanhtienvienphi").val(formatMoney(tt_vienphi));
			$("#thanhtienbhyt").val(formatMoney(tt_bhyt));
			$("#phithuchien").val(formatMoney(phithuchien));
			
			var  Sum_ThanhTienVienPhi = $("#rowed5").jqGrid('getCol', 'ThanhTienVienPhi', false, 'sum');
			var  Sum_ThanhTienBHYT = $("#rowed5").jqGrid('getCol', 'ThanhTienBHYT', false, 'sum');
			//var  Sum_BHChiTra = $("#rowed5").jqGrid('getCol', 'BHChiTra', false, 'sum');
			var  Sum_BNChiTra = $("#rowed5").jqGrid('getCol', 'BNChiTra', false, 'sum');
			var  Sum_PhiThucHien = $("#rowed5").jqGrid('getCol', 'PhiThucHien', false, 'sum');
			$("#rowed5").jqGrid('footerData','set', {
				LoaiKham: 'Tổng tiền:', 
				ThanhTienVienPhi: Sum_ThanhTienVienPhi,
				ThanhTienBHYT: Sum_ThanhTienBHYT,
				//BHChiTra: Sum_BHChiTra,
				BNChiTra: Sum_BNChiTra,
				PhiThucHien: Sum_PhiThucHien,
			});
		}else{
			$.post('resource.php?module=<?= $modules ?>&view=<?= $view ?>&action=check_xoa&id_kham='+tam).done(function(data) {
				var rs=data.split(';;');
				//alert(rs[0]);
				if(rs[0]=='true'){
					$("#idk").val(tam);
					$('#dialog').dialog('open');
				}else if(rs[1]=='bschinh'){
					$('#dialog_bschinh').dialog('open');
				}else{
					tooltip_message("Loại khám này không được phép xóa");
				}		 
			});
		}
	}
}
	
function load_select_hotennv(){
	window.hotennv = $.ajax({url: "resource.php?module=web_services&function=get_auto_edit_option_byid&action=index&term=ID_PhongBan<>21&status=2&tables=DM_NhanVien&id=ID_NhanVien&name=NickName", async: false, success: function(data, result) {if (!result) alert('Không load được danh mục nhân viên');}}).responseText;	
}

function load_select_trangthai(){
	window.trangthai = $.ajax({url: "resource.php?module=web_services&function=get_auto_edit_option&action=index&term=&status=2&tables=DM_TrangThaiCLSCuaBenhNhan&id=ID4Dev&name=TenTrangThaiCLSCuaBenhNhan", async: false, success: function(data, result) {if (!result) alert('Không load được danh mục trạng thái');}}).responseText;	
}
function load_select_nguoichidinh(){
	window.nguoichidinh = $.ajax({url: 'resource.php?module=web_services&function=get_auto_edit_option&action=index&term=&status=2&tables=DM_NhanVien&id=ID_NhanVien&name=NickName', async: false, success: function(data, result) {if (!result) alert('Không load được danh mục nhân viên');}}).responseText;
	$("#rowed5").setColProp('#NguoiChiDinh', { editoptions: { value: nguoichidinh} });
	$('#NguoiChiDinh').empty();
	create_select("#NguoiChiDinh",nguoichidinh);
}
function load_select_tennhomcha(){
	window.tennhomcha = $.ajax({url: "resource.php?module=web_services&function=get_auto_edit_option&action=index&term=&status=2&tables=NhomCLS&id=ID_NhomCLS&name=TenNhom", async: false, success: function(data, result) {if (!result) alert('Không load được danh mục NhomCLS');}}).responseText;	
}
function formatMoney(num) {
    var p = num.toFixed(2).split(".");
    return p[0].split("").reverse().reduce(function(acc, num, i, orig) {
        return  num + (i && !(i % 3) ? "," : "") + acc;
    }, "");
}
function chuyen(_val){
	if(window.n_dathanhtoanbill!=1 && window.n_khoachidinh!=1){
		//if(window.n_dathanhtoanbill!=1 && window.n_idtrangthai!='KetThucKham'){
		var tmp1 = $("#rowed5").jqGrid('getDataIDs'); 
		var tam,ln=0;
		var dem=tmp1+1;
		var rowData = jQuery("#rowed4").getRowData(_val);
		var selRowId = $("#rowed3").jqGrid ('getGridParam', 'selrow');
		if((window.loaidoituongkham=="BHYT") && (rowData["GiaTheoBaoHiem"]>0 )){
			window.phantrammoi=rowData["PhanTramCungChiTra"].split('.');
			window.phantrammoi=window.phantrammoi[0];
			//alert(window.phantrammoi);
			if(window.n_trangthaikham==3){
				if(window.phantrammoi==100){
					/*if(window.n_id_quoctich==138 || window.n_id_quoctich==142 || window.n_id_quoctich==143){
						var thanhtien_vienphi=rowData["GiaBaoChoBN"];
						var thanhtien_bhyt=0;
						var phi_thuchien=rowData["GiaBaoChoBN"];
						var bn_chitra=rowData["GiaBaoChoBN"];
					}else{
						var thanhtien_vienphi=rowData["GiaBaoChoBN"]*rowData["HeSoNuocNgoai"];
						var thanhtien_bhyt=0;
						var phi_thuchien=rowData["GiaBaoChoBN"]*rowData["HeSoNuocNgoai"];
						var bn_chitra=rowData["GiaBaoChoBN"]*rowData["HeSoNuocNgoai"];
					}*/
					var thanhtien_vienphi=rowData["GiaHienThi"];
					var thanhtien_bhyt=0;
					var phi_thuchien=rowData["GiaHienThi"];
					var bn_chitra=rowData["GiaHienThi"];
					var bnchitrabh=0;
					window.phantrammoi=100;
				}else{
					var thanhtien_vienphi=rowData["GiaHienThi"];
					var thanhtien_bhyt=parseInt(rowData["GiaTheoBaoHiem"]);
					//var phi_thuchien=parseInt(thanhtien_bhyt)+parseInt(rowData["GiaPhuThu"]);
					var phi_thuchien=rowData["GiaHienThi"];
		
					var bnchitrabh=((parseInt(rowData["GiaTheoBaoHiem"])*window.phantrammoi)/100);
					var bh_chitra=parseInt(rowData["GiaTheoBaoHiem"])-bnchitrabh;	
					var bn_chitra=(parseInt(rowData["GiaHienThi"])-bh_chitra);
				}
			}else{
				var thanhtien_vienphi=rowData["GiaHienThi"];
				var thanhtien_bhyt=parseInt(rowData["GiaTheoBaoHiem"]);
				//var phi_thuchien=parseInt(thanhtien_bhyt)+parseInt(rowData["GiaPhuThu"]);
				var phi_thuchien=rowData["GiaHienThi"];
	
				var bnchitrabh=((parseInt(rowData["GiaTheoBaoHiem"])*window.phantram)/100);
				var bh_chitra=parseInt(rowData["GiaTheoBaoHiem"])-bnchitrabh;	
				var bn_chitra=(parseInt(rowData["GiaHienThi"])-bh_chitra);
				window.phantrammoi=window.phantram;
			}
			
		}else{
			/*if(window.n_id_quoctich==138 || window.n_id_quoctich==142 || window.n_id_quoctich==143){
				var thanhtien_vienphi=rowData["GiaBaoChoBN"];
				var thanhtien_bhyt=0;
				var phi_thuchien=rowData["GiaBaoChoBN"];
				var bn_chitra=rowData["GiaBaoChoBN"];
			}else{
				var thanhtien_vienphi=rowData["GiaBaoChoBN"]*rowData["HeSoNuocNgoai"];
				var thanhtien_bhyt=0;
				var phi_thuchien=rowData["GiaBaoChoBN"]*rowData["HeSoNuocNgoai"];
				var bn_chitra=rowData["GiaBaoChoBN"]*rowData["HeSoNuocNgoai"];
			}*/
			var thanhtien_vienphi=rowData["GiaHienThi"];
			var thanhtien_bhyt=0;
			var phi_thuchien=rowData["GiaHienThi"];
			var bn_chitra=rowData["GiaHienThi"];
			var bnchitrabh=0;
			window.phantrammoi=100;
		}
		console.log(window.phantrammoi);
			var celValue = $("#rowed3").getRowData(selRowId); //
			//set default phong ban
			//$.get( "resource.php?module=<?= $modules ?>&view=<?= $view ?>&action=check_phongban&ac=check&id_loaikham="+rowData["ID_LoaiKham"]+"&ds_tang="+window.new_ds_tang, function( data ) { 
			var data='';
			parameters =
					{
						initdata : {IDLoaiKham:rowData["ID_LoaiKham"],Xoa:"Xóa",LoaiKham:rowData["TenLoaiKham"],DonGiaVienPhi:rowData["GiaBaoChoBN"],DonGiaBHYT:rowData["GiaTheoBaoHiem"],PhuThu:rowData["GiaPhuThu"],ThanhTienVienPhi:thanhtien_vienphi, ThanhTienBHYT:bh_chitra,PhiThucHien:phi_thuchien,TrangThai:"DangCho",ThucHien: "0",NguoiChiDinh:"<?=$_SESSION["user"]["id_user"] ?>",GiaThueNgoaiThucHien:rowData["GiaThueNgoaiThucHien"],ThoiGianTrungBinhThucHien:rowData["ThoiGianTrungBinhThucHien"],IDLuotKham:window.idluotkham,IDPhongChuyenMon:$("#idphongbanchuyenmon").val(),MaBenhNhan:$("#mabenhnhan").val(),IDNhomCLS:celValue["ID_NhomCLS"],NhomThucHien:data,BHChiTra:bh_chitra,BNChiTra:bn_chitra,PhanTramCungChiTra:window.phantrammoi,ThanhTienCungChiTra:bnchitrabh,Color:rowData['Color']},
						position :"last",
						useDefValues : false,
						useFormatter : false,
						addRowParams : {extraparam:{}}
					}
			var tmp2 = $("#rowed5").jqGrid('getDataIDs'); 
			var dem=0;
			var tontai=0;
			if(tmp2.length==0)
				dem=1;
			for(var i=0;i < tmp2.length;i++){
				var rowData2 = $("#rowed5").getRowData(tmp2[i]);	
				if(parseInt(rowData["ID_LoaiKham"])===parseInt(rowData2["IDLoaiKham"])){
					tontai=1;
				}else{
					if(tontai==0){
						dem=1;
					}
				}
			} //end for 169694
			if(tontai==1){
				var strconfirm = confirm("Loại khám: "+rowData["TenLoaiKham"]+" đã tồn tại, bạn có muốn chỉ định thêm không?");
				if (strconfirm == true){
					dem=1;							
				}else{
					dem=0;
					$("#"+_val).focus();
				}
			}
			if(dem==1){
				if(rowData["ID_LoaiKham"]==3918)
					alert("Để có đủ thông tin làm FRAMINGHAM, vui lòng chỉ định thêm hạng \n mục ĐO ĐIỆN TIM và các xét nghiệm có liên quan!");
				if(rowData["NhomBHYT"]==8 && window.loaidoituongkham=="BHYT" && window.n_maloaidt=="GD" && window.n_songaythe<150){
					var strconfirm_gd = confirm("Lưu ý: Loại khám này Bảo hiểm không chi trả vì thời gian cấp của thẻ này chưa được 150 ngày!","Thông báo");
					if(strconfirm_gd == true){
						var thanhtien_vienphi=rowData["GiaHienThi"];
						var thanhtien_bhyt=0;
						var phi_thuchien=rowData["GiaHienThi"];
						var bn_chitra=rowData["GiaHienThi"];
						var bnchitrabh=0;
						var bh_chitra=0;
						window.phantrammoi2=100;
						parameters2 =
						{
							initdata : {IDLoaiKham:rowData["ID_LoaiKham"],Xoa:"Xóa",LoaiKham:rowData["TenLoaiKham"],DonGiaVienPhi:rowData["GiaBaoChoBN"],DonGiaBHYT:rowData["GiaTheoBaoHiem"],PhuThu:rowData["GiaPhuThu"],ThanhTienVienPhi:thanhtien_vienphi, ThanhTienBHYT:bh_chitra,PhiThucHien:phi_thuchien,TrangThai:"DangCho",ThucHien: "0",NguoiChiDinh:"<?=$_SESSION["user"]["id_user"] ?>",GiaThueNgoaiThucHien:rowData["GiaThueNgoaiThucHien"],ThoiGianTrungBinhThucHien:rowData["ThoiGianTrungBinhThucHien"],IDLuotKham:window.idluotkham,IDPhongChuyenMon:$("#idphongbanchuyenmon").val(),MaBenhNhan:$("#mabenhnhan").val(),IDNhomCLS:celValue["ID_NhomCLS"],NhomThucHien:data,BHChiTra:bh_chitra,BNChiTra:bn_chitra,PhanTramCungChiTra:window.phantrammoi2,ThanhTienCungChiTra:bnchitrabh,Color:rowData['Color']},
							position :"last",
							useDefValues : false,
							useFormatter : false,
							addRowParams : {extraparam:{}}
						}
						jQuery("#rowed5").jqGrid('addRow',parameters2);
					}else{
						// nguoc lai
						
					}
				}else{
					jQuery("#rowed5").jqGrid('addRow',parameters);
				}
				$("#gs_TenLoaiKham").focus();
				$("#gs_TenLoaiKham").select();
			}
			var tt_bhyt =0;
			var tt_vienphi =0;
			var phithuchien =0;
			var y=0;
			var x=0;
			var tmp3= $("#rowed5").jqGrid('getDataIDs'); 
			for(var i=0;i < tmp3.length;i++){ 
				var rowData3 = $("#rowed5").getRowData(tmp3[i]);	
				xoa = "<input class=' custom_button_n' style='height:22px;width:50px; box-shadow:none!important; cursor:pointer;' type='button' value='Xóa' onclick=\"n_xoa('"+tmp3[i]+"');\" />"; 
				$("#rowed5").jqGrid('setRowData',tmp3[i],{Xoa:xoa});
				console.log(rowData3["Color"]);
				if(window.loaidoituongkham=="BHYT"){
					if(rowData3["Color"]=="X"){
						$("#rowed5").jqGrid('setRowData', tmp3[i], false, { background: '#C5F7C1',border:'1px solid #dfd9c3' });
					}else if(rowData3["Color"]=="V"){
						$("#rowed5").jqGrid('setRowData', tmp3[i], false, { background: '#FDFCC2',border:'1px solid #dfd9c3' });
					}
				}
				if((rowData3["IDNhomCLS"]==17)&&(y==0)&&($('#'+tmp3[i]+'_ThucHien').val()==1)){
					window.id_rowcls=tmp3[i];
					y++;
				}
				if((rowData3["IDNhomCLS"]==17)&&(x==0)){
					window.id_rowcls2=tmp3[i];
					x++;
				}
			}

			var  Sum_ThanhTienVienPhi = $("#rowed5").jqGrid('getCol', 'ThanhTienVienPhi', false, 'sum');
			var  Sum_ThanhTienBHYT = $("#rowed5").jqGrid('getCol', 'ThanhTienBHYT', false, 'sum');
			//var  Sum_BHChiTra = $("#rowed5").jqGrid('getCol', 'BHChiTra', false, 'sum');
			var  Sum_BNChiTra = $("#rowed5").jqGrid('getCol', 'BNChiTra', false, 'sum');
			var  Sum_PhiThucHien = $("#rowed5").jqGrid('getCol', 'PhiThucHien', false, 'sum');
			$("#rowed5").jqGrid('footerData','set', {
				LoaiKham: 'Tổng tiền:', 
				ThanhTienVienPhi: Sum_ThanhTienVienPhi,
				ThanhTienBHYT: Sum_ThanhTienBHYT,
				//BHChiTra: Sum_BHChiTra,
				BNChiTra: Sum_BNChiTra,
				PhiThucHien: Sum_PhiThucHien,
			});
			
		//});
	}
}//end func
	
function chuyen2(){
	//console.log("dem: "+$("#rowed4").getGridParam("reccount"));
 if(window.n_dathanhtoanbill!=1 && window.n_khoachidinh!=1){
	// if(window.n_dathanhtoanbill!=1 && window.n_idtrangthai!='KetThucKham'){
	var tmp = $("#rowed4").jqGrid('getDataIDs'); 
	//console.log(tmp[0]);
	var rowData = jQuery('#rowed4').jqGrid ('getRowData', tmp[tmp.length-1]);
	//console.log(tmp.length);
	if(tmp.length==1){
		var tmp1 = $("#rowed5").jqGrid('getDataIDs'); 
		var tam,ln=0;
		var dem=tmp1+1;
		var selRowId = $("#rowed3").jqGrid ('getGridParam', 'selrow');
	   if((window.loaidoituongkham=="BHYT") && (rowData["GiaTheoBaoHiem"]>0 )){
		   //alert(rowData["GiaHienThi"]);
		   window.phantrammoi=rowData["PhanTramCungChiTra"].split('.');
		   window.phantrammoi=window.phantrammoi[0];
		   if(window.n_trangthaikham==3){
			   if( window.phantrammoi==100){
				   /*if(window.n_id_quoctich==138 || window.n_id_quoctich==142 || window.n_id_quoctich==143){
						var thanhtien_vienphi=rowData["GiaBaoChoBN"];
						var thanhtien_bhyt=0;
						var phi_thuchien=rowData["GiaBaoChoBN"];
						var bn_chitra=rowData["GiaBaoChoBN"];
					}else{
						var thanhtien_vienphi=rowData["GiaBaoChoBN"]*rowData["HeSoNuocNgoai"];
						var thanhtien_bhyt=0;
						var phi_thuchien=rowData["GiaBaoChoBN"]*rowData["HeSoNuocNgoai"];
						var bn_chitra=rowData["GiaBaoChoBN"]*rowData["HeSoNuocNgoai"];
					}*/
					var thanhtien_vienphi=rowData["GiaHienThi"];
					var thanhtien_bhyt=0;
					var phi_thuchien=rowData["GiaHienThi"];
					var bn_chitra=rowData["GiaHienThi"];
					
					var bnchitrabh=0;
					window.phantrammoi=100;
				}else{
					var thanhtien_vienphi=rowData["GiaHienThi"];
					var thanhtien_bhyt=parseInt(rowData["GiaTheoBaoHiem"]);
					var phi_thuchien=parseInt(thanhtien_bhyt)+parseInt(rowData["GiaPhuThu"]);
					
					var bnchitrabh=((parseInt(rowData["GiaTheoBaoHiem"])*rowData["PhanTramCungChiTra"])/100);
					//var bn_chitra=((parseInt(rowData["GiaTheoBaoHiem"])*rowData["PhanTramCungChiTra"])/100)+parseInt(rowData["GiaPhuThu"]);
					var bh_chitra=parseInt(rowData["GiaTheoBaoHiem"])-bnchitrabh;
					var bn_chitra=parseInt(rowData["GiaHienThi"])-bh_chitra;
				}
			    
		   }else{
			    var thanhtien_vienphi=rowData["GiaHienThi"];
				var thanhtien_bhyt=parseInt(rowData["GiaTheoBaoHiem"]);
				var phi_thuchien=parseInt(thanhtien_bhyt)+parseInt(rowData["GiaPhuThu"]);
				
				var bnchitrabh=((parseInt(rowData["GiaTheoBaoHiem"])*window.phantram)/100);
				//var bn_chitra=((parseInt(rowData["GiaTheoBaoHiem"])*window.phantram)/100)+parseInt(rowData["GiaPhuThu"]);
				var bh_chitra=parseInt(rowData["GiaTheoBaoHiem"])-bnchitrabh;
				var bn_chitra=parseInt(rowData["GiaHienThi"])-bh_chitra;
				window.phantrammoi=window.phantram;
		   }
		}else{
			/*if(window.n_id_quoctich==138 || window.n_id_quoctich==142 || window.n_id_quoctich==143){
				var thanhtien_vienphi=rowData["GiaBaoChoBN"];
				var thanhtien_bhyt=0;
				var phi_thuchien=rowData["GiaBaoChoBN"];
				var bn_chitra=rowData["GiaBaoChoBN"];
			}else{
				var thanhtien_vienphi=rowData["GiaBaoChoBN"]*rowData["HeSoNuocNgoai"];
				var thanhtien_bhyt=0;
				var phi_thuchien=rowData["GiaBaoChoBN"]*rowData["HeSoNuocNgoai"];
				var bn_chitra=rowData["GiaBaoChoBN"]*rowData["HeSoNuocNgoai"];
			}*/
			var thanhtien_vienphi=rowData["GiaHienThi"];
			var thanhtien_bhyt=0;
			var phi_thuchien=rowData["GiaHienThi"];
			var bn_chitra=rowData["GiaHienThi"];
			var bnchitrabh=0;
			window.phantrammoi=100;
		}
		console.log(window.phantram);
	 var celValue = $("#rowed3").getRowData(selRowId);
	// $.get( "resource.php?module=<?= $modules ?>&view=<?= $view ?>&action=check_phongban&ac=check&id_loaikham="+rowData["ID_LoaiKham"]+"&ds_tang="+window.new_ds_tang, function( data ) {	
		parameters =
		{
			initdata : {IDLoaiKham:rowData["ID_LoaiKham"],Xoa:"Xóa",LoaiKham:rowData["TenLoaiKham"],DonGiaVienPhi:rowData["GiaHienThi"],DonGiaBHYT:rowData["GiaTheoBaoHiem"],PhuThu:rowData["GiaPhuThu"],ThanhTienVienPhi:thanhtien_vienphi, ThanhTienBHYT:bh_chitra,PhiThucHien:phi_thuchien,TrangThai:"DangCho",ThucHien: "0",NguoiChiDinh:"<?=$_SESSION["user"]["id_user"] ?>",GiaThueNgoaiThucHien:rowData["GiaThueNgoaiThucHien"],ThoiGianTrungBinhThucHien:rowData["ThoiGianTrungBinhThucHien"],IDLuotKham:window.idluotkham,IDPhongChuyenMon:$("#idphongbanchuyenmon").val(),MaBenhNhan:$("#mabenhnhan").val(),IDNhomCLS:celValue["ID_NhomCLS"],NhomThucHien:'',BHChiTra:bh_chitra,BNChiTra:bn_chitra,PhanTramCungChiTra:window.phantrammoi,ThanhTienCungChiTra:bnchitrabh,Color:rowData['Color']},
			
			position :"last",
			useDefValues : false,
			useFormatter : false,
			addRowParams : {extraparam:{}}
		}
		var tmp2 = $("#rowed5").jqGrid('getDataIDs'); 
		var dem=0;
		var tontai=0;
		if(tmp2.length==0)
			dem=1;
		for(var i=0;i < tmp2.length;i++){
			var rowData2 = $("#rowed5").getRowData(tmp2[i]);	
			if(rowData["ID_LoaiKham"]==rowData2["IDLoaiKham"]){
				tontai=1;
			var strconfirm = confirm("Loại khám: "+rowData["TenLoaiKham"]+" đã tồn tại, bạn có muốn chỉ định thêm không?", "Cảnh báo");
				if (strconfirm == true){
					dem=1;
				}else{
					dem=0;
				}
				break;
			}else{
				if(tontai==0){
					dem=1;
				}
			}
		} //end for
		if(dem==1){
			if(rowData["ID_LoaiKham"]==3918)
				alert("Để có đủ thông tin làm FRAMINGHAM, vui lòng chỉ định thêm hạng \n mục ĐO ĐIỆN TIM và các xét nghiệm có liên quan!");
			if(rowData["NhomBHYT"]==8 && window.loaidoituongkham=="BHYT" && window.n_maloaidt=="GD" && window.n_songaythe<150){
				var strconfirm_gd = confirm("Lưu ý: Loại khám này Bảo hiểm không chi trả vì thời gian cấp của thẻ này chưa được 150 ngày!","Thông báo");
				if(strconfirm_gd == true){
					
					var thanhtien_vienphi=rowData["GiaHienThi"];
					var thanhtien_bhyt=0;
					var phi_thuchien=rowData["GiaHienThi"];
					var bn_chitra=rowData["GiaHienThi"];
					var bnchitrabh=0;
					var bh_chitra=0;
					window.phantrammoi2=100;
						parameters2 =
					{
						initdata : {IDLoaiKham:rowData["ID_LoaiKham"],Xoa:"Xóa",LoaiKham:rowData["TenLoaiKham"],DonGiaVienPhi:rowData["GiaHienThi"],DonGiaBHYT:rowData["GiaTheoBaoHiem"],PhuThu:rowData["GiaPhuThu"],ThanhTienVienPhi:thanhtien_vienphi, ThanhTienBHYT:bh_chitra,PhiThucHien:phi_thuchien,TrangThai:"DangCho",ThucHien: "0",NguoiChiDinh:"<?=$_SESSION["user"]["id_user"] ?>",GiaThueNgoaiThucHien:rowData["GiaThueNgoaiThucHien"],ThoiGianTrungBinhThucHien:rowData["ThoiGianTrungBinhThucHien"],IDLuotKham:window.idluotkham,IDPhongChuyenMon:$("#idphongbanchuyenmon").val(),MaBenhNhan:$("#mabenhnhan").val(),IDNhomCLS:celValue["ID_NhomCLS"],NhomThucHien:data,BHChiTra:bh_chitra,BNChiTra:bn_chitra,PhanTramCungChiTra:window.phantrammoi2,ThanhTienCungChiTra:bnchitrabh,Color:rowData['Color']},
						
						position :"last",
						useDefValues : false,
						useFormatter : false,
						addRowParams : {extraparam:{}}
					}
					jQuery("#rowed5").jqGrid('addRow',parameters2);
				}else{
					// nguoc lai
					
				}
			}else{
				jQuery("#rowed5").jqGrid('addRow',parameters);
			}
			
		}
		var tmp1 = $("#rowed5").jqGrid('getDataIDs'); 
		for(var i=0;i < tmp1.length;i++){ 
			var rowData3 = $("#rowed5").getRowData(tmp1[i]);	
			xoa = "<input class=' custom_button_n' style='height:22px;width:50px; box-shadow:none!important; cursor:pointer;' type='button' value='Xóa' onclick=\"n_xoa('"+tmp1[i]+"');\" />"; 
			$("#rowed5").jqGrid('setRowData',tmp1[i],{Xoa:xoa});
			 if(window.loaidoituongkham=="BHYT"){
				if(rowData3["Color"]=="X"){
					$("#rowed5").jqGrid('setRowData', tmp1[i], false, { background: '#C5F7C1',border:'1px solid #dfd9c3' });
				}else if(rowData3["Color"]=="V"){
					$("#rowed5").jqGrid('setRowData', tmp1[i], false, { background: '#FDFCC2',border:'1px solid #dfd9c3' });
				}
			 }
		}
		
		var  Sum_ThanhTienVienPhi = $("#rowed5").jqGrid('getCol', 'ThanhTienVienPhi', false, 'sum');
		var  Sum_ThanhTienBHYT = $("#rowed5").jqGrid('getCol', 'ThanhTienBHYT', false, 'sum');
		//var  Sum_BHChiTra = $("#rowed5").jqGrid('getCol', 'BHChiTra', false, 'sum');
		var  Sum_BNChiTra = $("#rowed5").jqGrid('getCol', 'BNChiTra', false, 'sum');
		var  Sum_PhiThucHien = $("#rowed5").jqGrid('getCol', 'PhiThucHien', false, 'sum');
		$("#rowed5").jqGrid('footerData','set', {
			LoaiKham: 'Tổng tiền:', 
			ThanhTienVienPhi: Sum_ThanhTienVienPhi,
			ThanhTienBHYT: Sum_ThanhTienBHYT,
			//BHChiTra: Sum_BHChiTra,
			BNChiTra: Sum_BNChiTra,
			PhiThucHien: Sum_PhiThucHien,
		});
	//});
	}
 }
}//end func

function chuyen3(na,nb){
  if(window.n_dathanhtoanbill!=1 && window.n_khoachidinh!=1){
	 // if(window.n_dathanhtoanbill!=1 && window.n_idtrangthai!='KetThucKham'){
		var tmp2 = $("#rowed5").jqGrid('getDataIDs');
		var rowData = jQuery('#data_loaikham').jqGrid ('getRowData', na);
	   if((window.loaidoituongkham=="BHYT") && (rowData["GiaTheoBaoHiem"]>0 )){
		   window.phantrammoi=rowData["PhanTramCungChiTra"].split('.');
		   window.phantrammoi=window.phantrammoi[0];
		    if(window.n_trangthaikham==3){
				if(window.phantrammoi==100){
					/*if(window.n_id_quoctich==138 || window.n_id_quoctich==142 || window.n_id_quoctich==143){
						var thanhtien_vienphi=rowData["GiaBaoChoBN"];
						var thanhtien_bhyt=0;
						var phithuchien=rowData["GiaBaoChoBN"];
						var bn_chitra=rowData["GiaBaoChoBN"];
					}else{
						//alert(rowData["HeSoNuocNgoai"]);
						var thanhtien_vienphi=rowData["GiaBaoChoBN"]*rowData["HeSoNuocNgoai"];
						var thanhtien_bhyt=0;
						var phithuchien=rowData["GiaBaoChoBN"]*rowData["HeSoNuocNgoai"];
						var bn_chitra=rowData["GiaBaoChoBN"]*rowData["HeSoNuocNgoai"];
					}*/
					var thanhtien_vienphi=rowData["GiaHienThi"];
					var thanhtien_bhyt=0;
					var phithuchien=rowData["GiaHienThi"];
					var bn_chitra=rowData["GiaHienThi"];
					var bnchitrabh=0;
					window.phantrammoi=100;
				}else{
					var thanhtien_vienphi=rowData["GiaHienThi"];
					var thanhtien_bhyt=parseInt(rowData["GiaTheoBaoHiem"]);
					var phithuchien=parseInt(thanhtien_bhyt)+parseInt(rowData["GiaPhuThu"]);
					
					var bnchitrabh=((parseInt(rowData["GiaTheoBaoHiem"])*rowData["PhanTramCungChiTra"])/100);
					//var bn_chitra=((parseInt(rowData["GiaTheoBaoHiem"])*rowData["PhanTramCungChiTra"])/100)+parseInt(rowData["GiaPhuThu"]);
					var bh_chitra=parseInt(rowData["GiaTheoBaoHiem"])-bnchitrabh;
					var bn_chitra=parseInt(rowData["GiaHienThi"])-bh_chitra;
				}
			}else{
				var thanhtien_vienphi=rowData["GiaHienThi"];
				var thanhtien_bhyt=parseInt(rowData["GiaTheoBaoHiem"]);
				var phithuchien=parseInt(thanhtien_bhyt)+parseInt(rowData["GiaPhuThu"]);
				
				var bnchitrabh=((parseInt(rowData["GiaTheoBaoHiem"])*window.phantram)/100);
				//var bn_chitra=((parseInt(rowData["GiaTheoBaoHiem"])*window.phantram)/100)+parseInt(rowData["GiaPhuThu"]);
				var bh_chitra=parseInt(rowData["GiaTheoBaoHiem"])-bnchitrabh;
				var bn_chitra=parseInt(rowData["GiaHienThi"])-bh_chitra;
				window.phantrammoi=window.phantram;
				//console.log(2);
			}
			
		}else{
			/*if(window.n_id_quoctich==138 || window.n_id_quoctich==142 || window.n_id_quoctich==143){
				var thanhtien_vienphi=rowData["GiaBaoChoBN"];
				var thanhtien_bhyt=0;
				var phithuchien=rowData["GiaBaoChoBN"];
				var bn_chitra=rowData["GiaBaoChoBN"];
			}else{
				//alert(rowData["HeSoNuocNgoai"]);
				var thanhtien_vienphi=rowData["GiaBaoChoBN"]*rowData["HeSoNuocNgoai"];
				var thanhtien_bhyt=0;
				var phithuchien=rowData["GiaBaoChoBN"]*rowData["HeSoNuocNgoai"];
				var bn_chitra=rowData["GiaBaoChoBN"]*rowData["HeSoNuocNgoai"];
			}*/
			var thanhtien_vienphi=rowData["GiaHienThi"];
			var thanhtien_bhyt=0;
			var phithuchien=rowData["GiaHienThi"];
			var bn_chitra=rowData["GiaHienThi"];
			var bnchitrabh=0;
			window.phantrammoi=100;
		}
	   parameters =
		{
			initdata : {IDLoaiKham:rowData["ID_LoaiKham"],Xoa:"Xóa",LoaiKham:rowData["TenLoaiKham"],DonGiaVienPhi:rowData["GiaBaoChoBN"],DonGiaBHYT:rowData["GiaTheoBaoHiem"],PhuThu:rowData["GiaPhuThu"],ThanhTienVienPhi:thanhtien_vienphi, ThanhTienBHYT:bh_chitra,PhiThucHien:phithuchien,TrangThai:"DangCho",ThucHien: "0",NguoiChiDinh:"<?=$_SESSION["user"]["id_user"] ?>",GiaThueNgoaiThucHien:rowData["GiaThueNgoaiThucHien"],ThoiGianTrungBinhThucHien:rowData["ThoiGianTrungBinhThucHien"],IDLuotKham:window.idluotkham,IDPhongChuyenMon:$("#idphongbanchuyenmon").val(),MaBenhNhan:$("#mabenhnhan").val(),IDNhomCLS:rowData["ID_NhomCLS"],NhomThucHien:nb,BHChiTra:bh_chitra,BNChiTra:bn_chitra,PhanTramCungChiTra:window.phantrammoi,ThanhTienCungChiTra:bnchitrabh,Color:rowData['Color']},
			position :"last",
			useDefValues : false,
			useFormatter : false,
			addRowParams : {extraparam:{}}
		}
		var tmp4 = $("#rowed5").jqGrid('getDataIDs'); 
		var dem=0;
		var tontai=0;
		if(tmp4.length==0){
			dem=1;
		}else{
		for(var j=0;j < tmp4.length;j++){
			var rowData2 = $("#rowed5").getRowData(tmp4[j]);	
			if(rowData["ID_LoaiKham"]==rowData2["IDLoaiKham"]){
				tontai=1;
				var strconfirm = confirm("Loại khám: "+rowData["TenLoaiKham"]+" đã tồn tại, bạn có muốn chỉ định thêm không?");
				if (strconfirm == true){
					dem=1;
				}else{
					dem=0;
				}
				break;
			}else{
				if(tontai==0){
					dem=1;
				}
			}
		} //end for
		}
		if(dem==1){
			jQuery("#rowed5").jqGrid('addRow',parameters);
		}
  }
}//end func
function inchidinh(){
	if(window.n_incd==1){
		$.cookie("in_status", "print_direct"); 
		$('#btn_in').button('enable');
	}else{
		$.cookie("in_status", "print_preview");
		$('#btn_xemin').button('enable'); 
	}
	var tmp1 = $("#rowed5").jqGrid('getDataIDs'); 
	var _xn=0;
	for(var i=0;i<tmp1.length;i++){
		 var rowData = $("#rowed5").getRowData(tmp1[i]);
		 if(rowData['XetNghiem']==1 && rowData['TrangThai']!='HuyBo'){
			_xn=1; 
		 }
		if(i==tmp1.length-1){
			dialog_report("Xem trước khi in",90,90,"u78787878975f","resource.php?module=report&view=<?=$modules?>&action=phieuchidinhkham_all&ac="+window.n_incd+"&header=top&id_benhnhan="+window.idbenhnhan+"&id_luotkham="+window.idluotkham+"&xetnghiem="+_xn+"&type=report&id_form=10",'PhieuChiDinh');
			$(".modalu78787878975f").dialog("close");
		}
	}
	window.n_incd=0;
}
function add_namclass(){
	$("#rowed4").hover(function(){
		$(this).find("tr").addClass('nam-hover');
	});
	$("#rowed5").hover(function(){
		$(this).find("tr").addClass('nam-hover');
	});	
}

function tinhtongtien(){
	var  Sum_ThanhTienVienPhi = $("#rowed5").jqGrid('getCol', 'ThanhTienVienPhi', false, 'sum');
	var  Sum_ThanhTienBHYT = $("#rowed5").jqGrid('getCol', 'ThanhTienBHYT', false, 'sum');
	var  Sum_BNChiTra = $("#rowed5").jqGrid('getCol', 'BNChiTra', false, 'sum');
	var  Sum_PhiThucHien = $("#rowed5").jqGrid('getCol', 'PhiThucHien', false, 'sum');
	$("#rowed5").jqGrid('footerData','set', {
		LoaiKham: 'Tổng tiền:', 
		ThanhTienVienPhi: Sum_ThanhTienVienPhi,
		ThanhTienBHYT: Sum_ThanhTienBHYT,
		BNChiTra: Sum_BNChiTra,
		PhiThucHien: Sum_PhiThucHien,
	});
}

function resize_control() {
	$("#rowed3 ").setGridWidth($(".left_col").width() - 11);
	$("#rowed3").setGridHeight($(".right_col").height() - 58);
	$("#rowed4").setGridWidth($(".center_col").width() - 11);
	$("#rowed4").setGridHeight($(".center_col").height() - 93);
	$("#rowed5").setGridWidth($(".right_col").width() - 11);
	$("#rowed5").setGridHeight($(".right_col").height() - 80);
	$("#data_goikham ").setGridWidth($(".data_chongoikham").width() - 300);
	$("#data_goikham").setGridHeight($(".data_chongoikham").height() - 235);
	$("#data_loaikham ").setGridWidth($(".data_chongoikham").width() - 300);
	$("#data_loaikham").setGridHeight($(".data_chongoikham").height() - 220);
}
</script>