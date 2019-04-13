<!--//an_nam   :mo de load hinh anh
<script src="http://code.highcharts.com/highcharts.js"></script>-->
 
<?php
	if(isset($_GET["id_benhnhan"])){
		echo "<script type='text/javascript'>";
		echo "window.id_benhnhan=".$_GET["id_benhnhan"];
		echo "</script>";
		
	}else{
	if($_SESSION["ThongTinBenhNhan"]["ID"]==""){
		echo "<script type='text/javascript'>";
			echo "parent.postMessage('hosobenhnhantrong;' , '*')";
		
		echo "</script>";
		return;
	}else{
		echo "<script type='text/javascript'>";
		echo "window.id_benhnhan=".$_SESSION["ThongTinBenhNhan"]["ID"];
		echo "</script>";
	}
	}


	if(isset($_GET["id_kham"])){
		echo "<script type='text/javascript'>";
		echo "window.id_kham2=".$_GET["id_kham"];
		echo "</script>";
	}
	else{
		echo "<script type='text/javascript'>";
		echo "window.id_kham2=0";
		echo "</script>";
		}
?>
 
 
<style>
.u78787878975f{
	width:842px;
	height:595px;
}
	#data_chuandoan td  {	 
		word-wrap:normal!important;
		white-space:nowrap;
		padding:2px;
	}
	#DM_template_container{
		position:absolute;
		z-index:1000000;		 
		display:none;	
		box-shadow:0px 0px 6px #333;	 	
	}
	 button#last,button#first,button#prev,button#next{
		 font-size:7px!important;
		 margin-top:-6px;
		/* padding-left:20px;*/
		 
	 }
	 #open_template,#add_template{
		 font-size:11px!important;
		 margin-top:-3px;
		 margin-left:-6px;
		 
	 }
	 .ui-widget-overlay {
		  opacity:0.01;
		  filter: alpha(opacity=1); 
		  -ms-filter:"progid:DXImageTransform.Microsoft.Alpha(Opacity=1)"; 
		  /*overlay trong suot*/  
		  }
	  #open_template{		
		 border-radius:0px!important;	
	 }	 
	 .ui-corner-all{		 
		 border-radius:3px!important;		 
	 }
	 .fm-button{
		 box-shadow:0px 0px 5px #383838;
		 border:1px solid #919191;
	 }  	
	.top_form{
		width:100%;
		height:139px;
		margin-top:3px;				
	}	 	 
	.thongtin_tongthe,.thongtin_chidinh,.thongtin_luotkham{
		display:inline-block;
		box-shadow:0px 0px 10px #a0a0a0;
		border:1px solid #919191;
		vertical-align:top;
		width:49%;		
	}
	.thongtin_chidinh{	 	 
		padding-bottom:4px;
		padding-top:4px;		
	}
	.thongtin_luotkham{
		box-shadow:0px 0px 10px #a0a0a0;
		border:1px solid #919191;
		display:inline-block;
		vertical-align:top;
		width:55%;
		overflow-y:none;
		margin-top:2px;
		height:67px;		 		
	}
	.thongtin_luotkham_scroll{
		overflow-y:scroll;
		width:100%;
		height:45px;
	}	 
	.canlamsang{
		vertical-align:top;
		overflow-y:scroll;
		height:76px;
		border-top:1px solid #919191;
		padding-top:2px;
		padding-left:2px;
		border-bottom:1px solid #919191;		 
	}	 
	.thongtin_luotkham div div{
		display:inline-block;
		box-shadow:0px 0px 10px #a0a0a0;
		border:1px solid #919191;
		font-size:11px;
		margin-left:2px;
		margin-top:2px;		 
		padding:2px;
		width:114px;
		height:30px;
		text-align:center;
		vertical-align:top;
		margin-bottom:2px;	
		text-shadow:0 1px 0 rgba(255, 255, 255, 0.6);		 
		vertical-align:text-bottom;
		cursor:pointer;
	}

	.navigator{
		 display:inline-block;
		 border:1px solid #327E04;
		 padding-top:6px;
		 margin-top:-4px;
		 margin-left:2px;
		 padding-bottom:2px;
		 padding-left:2px;
		 padding-right:1px; 
	}
	.navigator_title{
		display:inline-block;
		width:100px;
		text-align:center;
	}
	.ui-layout-mask {
		background:#FFF !important;
		opacity:.20 !important;
		filter:	alpha(opacity=20) !important;
	}
	#mota{
		font-size:13px!important;		 	 
	}.thongtin_chidinh{
		height:58px;
	}#right_col{
		padding-left:2px;
	}input[type="checkbox"]:focus {
-webkit-box-shadow: 0px 0px 1px 1px #0463B4!important;
  box-shadow:  0px 0px 2px 2px #208AC8 !important;
}select {
    height: 22px !important;
    width: 90px;
}#right_top{
	border: 0px solid #D4CCB0;
}#right_top table{
	padding-left:5px;
}
#right_bottom table{
	padding-left:5px;
}
.thongtin_tongthe{
		height:62px;
}
.right_top{
	height:18px;
	border-radius:3px;
	border: 1px solid #D4CCB0;
	background:#F5F3EB;
	
	margin-top:1px;
	margin-left:1px;
	margin-right:1px;
	padding-top: 2px;
}.luutt{
	height:35px;
	width:98%;
	margin-top:7px;
	margin-left:4px;
	background: none repeat scroll 0 0 #F5F3EB;
    border: 1px solid #D4CCB0;
    border-radius: 3px;
}#pg_prowed3{
	display:none;
}#rowed3 input[type="text"]{
	width:92% !important;
	text-align:center !important;
}.input_loi{
	border: 1px solid #F00!important;
}#right_top{
	height:100px;
	width:99%;
	margin-top:5px;
	margin-left:4px;
	background: none repeat scroll 0 0 #F5F3EB;
    border: 1px solid #D4CCB0;
    border-radius: 3px;
}#right_bottom{
	height:80px;
	width:99%;
	margin-top:5px;
	margin-left:4px;
	background: none repeat scroll 0 0 #F5F3EB;
    border: 1px solid #D4CCB0;
    border-radius: 3px;
}.top_left{
	height:100%;
	background: none repeat scroll 0 0 #F5F3EB;
    border-right: 1px solid #D4CCB0;
	float:left;
}.top_right{
	height:100%;
	width:80px;
	background: none repeat scroll 0 0 #F5F3EB;
	float:left;
}.tieude{
	height:18px;
	border-radius:3px;
	border-bottom: 1px solid #D4CCB0;
	background:#F5F3EB;
	padding-top: 2px;
	padding-left:2px;
	font-weight:bold;
}#noidung_ketluan{
	width:98%;
}.highcharts-button{
	display:none;
}#right_top{
	background:#FFF;
}
</style>
<body>
<input type="hidden" name="_nrowid" id="_nrowid" value="" >
<div  class="data_soitructrang">
    <table id="data_soitructrang">
    </table>   
</div>
<div  class="data_chuandoan">
    <table id="data_chuandoan">
    </table>   
</div>
<div id="dialog" title="Thông báo" style="display:none">
	Bạn đã nhập sai. Pd không thể lớn hơn Ps!
</div>
 <div class="top_form ui-widget-content" >
 	<div style="padding:2px 0px;" class="thongtin_tongthe">
 		<div class="patient_info"></div>        
    </div>
    <div class="thongtin_chidinh" style="width:687px!important">
 		<div class="form_row">
        	<label style="width:90px;text-align:right">Người chỉ định:</label><input lang='luu' id="nguoi_chidinh"name="nguoi_chidinh"style="width:100px" type="text"disabled>
            <label style="width:90px;margin-left:10px;text-align:right">Người thực hiện:</label>
            <span class="custom-combobox">
                    <input id="nhanvien" name="nhanvien"  type="text" style="width:70px;">
            </span> 
            <input id="nhanvien1"  name="nguoithuchien" type="text" lang='luu' style="display:none" >
            <label style="width:128px;text-align:right;margin-left:15px">Bs chẩn đoán:</label>
            <span class="custom-combobox">
                    <input id="chuandoan" name="chuandoan"  type="text" style="width:70px;">
            </span> 
            <input id="chuandoan1"  name="chuandoan1" type="text" lang='luu' style="display:none" >
            <div style="height:3px"></div>
			<label style="width:90px;text-align:right">Ngày chỉ định:</label><input id="ngaychidinh"name="ngaychidinh"lang='luu'style="width:100px" type="text"disabled >
			<label id="giothuchien"  name="giothuchien" type="text" lang='luu'class="thongtin_thai zodi"style="width: 90px;margin-left: 10px;"></label>
            <a href="#" id="dathuchien" class="ui-widget ui-state-default ui-corner-all fm-button-icon-left" style="margin-left:0px;  margin-bottom:1px; ">Đã thực hiện<span class="ui-icon ui-icon-play"></span></a> 
     		<label id="giohoantat"  name="giohoantat" type="text" lang='luu' class="thongtin_thai zodi"style="width: 90px;margin-left: 10px;"></label>
     		<a href="#" id="hoantat" class=" ui-widget ui-state-default ui-corner-all fm-button-icon-left" style="margin-left:0px;width:80px;  margin-bottom:1px; ">Hoàn tất<span class="ui-icon ui-icon-check"></span></a>   
        </div>        
    </div>
    <div class="thongtin_luotkham" id="left_col" style="">   
    	<div class="thongtin_luotkham_scroll"></div>
            <span class="navigator" >
                <button id="first">bắt đầu</button>
                <button id="prev">tới</button>
                <span class="navigator_title"></span>
                <button id="next">lui</button>
                <button id="last">kết thúc</button> 
            </span>
            <label id="ngay_kham"></label>        
    </div>

    <div class="thongtin_luotkham" id="right_col">
    	 
    	<div style="margin-top: 2px;">
    	<label id="id_trangthai"class="thongtin_thai" lang="luu" type="text" name="id_trangthai"style="color:red;font-size:14px"></label> 
    	<a href="#" id="luu" class=" ui-widget ui-state-default ui-corner-all fm-button-icon-left" style="margin-left:0px;width:64px;  margin-bottom:1px;float: right; ">Lưu<span class="ui-icon ui-icon-disk"></span></a> 
    	<a href="#" id="sua" class=" ui-widget ui-state-default ui-corner-all fm-button-icon-left" style="margin-left:0px;width:64px;  margin-bottom:1px;float: right; ">Sửa<span class="ui-icon ui-icon-pencil"></span></a>
    	<a href="#" id="boqua" class=" ui-widget ui-state-default ui-corner-all fm-button-icon-left" style="margin-left:0px;width:64px;  margin-bottom:1px;float: right;">Bỏ qua<span class="ui-icon ui-icon-close"></span></a>
    		 	
    	</div>
    	<div style="margin-top: 12px;">

    	<a href="#" id="dong" class=" ui-widget ui-state-default ui-corner-all fm-button-icon-left" style="margin-left:0px;width:64px;  margin-bottom:1px;float: right; ">Đóng<span class="ui-icon ui-icon-trash"></span></a> 
    	<a href="#" id="xemin" class=" ui-widget ui-state-default ui-corner-all fm-button-icon-left" style="margin-left:0px; width:64px; margin-bottom:1px;float: right; ">Xem in<span class="ui-icon ui-icon-print"></span></a>
    		 	
    	</div>
    	<div style="margin-top: -9px">
	    	<label>Giờ hẹn trả kết quả:</label>
	    	<label id="giohentra" style="color:blue"></label> 	
    	</div>
    	<div style="margin-top: 5px" id="edit_by">
	    	<label>Sửa bởi:</label>
	    	<label id="nguoisua" style="color:blue"></label>
	    	<label id="ngaygiosua" style="color:blue"></label>
    	</div> 
    </div>
   
 </div> 
 
 <div id="panel_main">    
		<input type="hidden" lang="luu" id="daluu"  name="daluu">
        <div class="ui-widget-content ui-layout-west left_col">
          <table id="rowed3" ></table>
        <div id="prowed3"><div id="duoi"><input type="text" style="margin-left: 130px; margin-top: 1px; width: 88px;background:#4CA109;border:1px solid #327E04; color: #FFFFFF;font-weight: bold; text-align:right;  box-shadow:none !important;" disabled="" readonly value="0" class="disable" id="r_ps">
        <input type="text" style="margin-left: 0px; margin-top: 1px; width: 88px;background:#4CA109;border:1px solid #327E04; color: #FFFFFF;font-weight: bold; text-align:right;  box-shadow:none !important;" disabled="" readonly value="0" class="disable" id="pd">
        <input type="text" style="margin-left: 0px; margin-top: 1px; width: 88px;background:#4CA109;border:1px solid #327E04; color: #FFFFFF;font-weight: bold; text-align:right;  box-shadow:none !important;" disabled="" readonly value="0" class="disable" id="hr">
        </div></div> 
        <div class="luutt">
        <a href="#" id="xoa" onClick="" class=" ui-widget ui-state-default ui-corner-all fm-button-icon-left" style="margin-left:0px;width:64px;  margin-bottom:1px;float: right;margin-top: 4px; margin-right:18px; ">Xóa<span class="ui-icon ui-icon-closethick
 "></span></a> 
    	<a href="#" id="them" class=" ui-widget ui-state-default ui-corner-all fm-button-icon-left" style="margin-left:0px;width:64px;  margin-bottom:1px;float: right; margin-top: 4px; margin-right:5px; ">Thêm<span class="ui-icon ui-icon-plusthick
 "></span></a>
        </div>
        </div>         
        <div class="ui-widget-content  thongtin_thai ui-layout-center  right_col">
        	<div id="right_top">
            </div>
            <div id="right_bottom">
           		<div class="tieude">
                Kết luận
                </div>
                <div class="nd_ketluan">
                <table id="table_kl" width="100%" >
                    <tr>
                        <td width="35%">
                       	<label for="combo_chuandoan"> Chọn mẫu:</label> 
                        <span class="custom-combobox">
   		<input id="combo_chuandoan" name="combo_chuandoan"  type="text" style="width:235px ; " placeholder="--Chọn mẫu chẩn đoán--"><button id="add_chuandoan" style="height:23px;width:23px;float: right;margin-left: 33px; position: absolute;">Thêm</button>
    </span> 
    <input id="combo_chuandoan1"  name="combo_chuandoan1"  type="text" lang='luu' style="display:none" >
                        </td>
                        <td rowspan="2" width="45%">
                         <textarea id="noidung_ketluan"></textarea>
                        </td>
                    </tr>
                    <tr>
                        <td>
                       
                        </td>
                    </tr>
                </table>
                </div>
            </div>
        </div>
                 
	</div>
	
		
		
</body>
</html>
<script type="text/javascript">

var _id_luotkham=[];
var _id_loaikham=[];
var _id_luotkham_non_unique=[];
var _id_kham=[];
var data_luotkham="";
var navigator_count=0,sub_navigator_count=0;
var _folder_name;
var ma_benhnhan=0;
var id_loaikham;
var grid_click_status=false;
var id_kham;
var _id_trangthai;
var _kham;
var id_benhnhan;
var tenloaikham;

$(document).ready(function() {
	
	$("#xemin").click(function(){
		//alert(id_kham+'_'+id_benhnhan);
		dialog_report("Xem trước khi in",90,90,"u78787878975f","resource.php?module=report&view=<?=$modules?>&action=huyetap24h&header=left&id_benhnhan="+id_benhnhan+"&id_kham="+id_kham+"&type=report&id_form=10",'InHuyetAp');	
	});
	
	openform_shortcutkey();	
window.nhanvien_complete=0;
	window.nhanvien1_complete=0;
	window.nhanvien2_complete=0;	
	create_combobox('#nhanvien', '#nhanvien1', ".nhan_vien", "#nhan_vien", create_nhanvien, 500, 400, 'Người thực hiện', 'data_nhanvien');
	create_combobox('#chuandoan', '#chuandoan1', ".nhan_vien1", "#nhan_vien1", create_bacsi, 500, 400, 'Người thực hiện', 'data_bacsi');
	create_combobox('#combo_chuandoan', '#combo_chuandoan1', ".data_chuandoan", "#data_chuandoan", create_chuandoan, 500, 400, 'Chuẩn đoán', 'data_chuandoan');
	$('#sua').button();
	$('#luu').button();
	$('#xemin').button();
	$('#dong').button();
	$('#dathuchien').button();
	$('#hoantat').button();
	$('#them').button();
	$('#xoa').button();
	$('#boqua').button();
	$('#boqua').hide();
	load_select();
	
	$.get( "resource.php?module=web_services&function=create_panel1&id_benhnhan="+id_benhnhan+"&action=index", function( data ) {
	  $( ".patient_info" ).html( data );

	  $( ".patient_info" ).css("width", $( "#patient_info" ).width()+"css");	
	  ma_benhnhan=$('.profile_container:nth-child(4) .texts').text() ;
	
	});
     
	  
	$("#panel_main").css("height",$(window).height()-151+"px");			 
	$("#panel_main").fadeIn(1000); 
	create_layout();	
	create_grid();
	resize_control();
	
	$("#combo_ppdieutri11,#combo_ppdieutri21,#tgmacbenh1,#solandieutri1,#ppdieutricu1,#sobuitri1,#builonnhat1").attr("lang","luu");

	$("#add_chuandoan").click(function(e){
		links='resource.php?module=danhmuc&view=danh_muc_mauchandoan&id_form=169&id_loai=90';
		elem=1 + Math.floor(Math.random() * 1000000000); 
		width=90;
		height=80;   
		dialog_add_dm("",width,height,elem,links); 
	});
	
	document.onkeydown = function(e) {
			if (e.keyCode === 121) {
				$("#luu").click();
				return false;
			}
		};
	
		
	$("#them").click(function(){
		parameters ={
			initdata :{},
			position :"last",
			useDefValues : false,
			useFormatter : false,
			addRowParams : {extraparam:{}}
		}
		var tmp2 = $("#rowed3").jqGrid('getDataIDs');
		//alert("nam_: "+tmp2[tmp2.length-1]);
		if(typeof tmp2[tmp2.length-1]!='undefined'){
			var giodo=$('#'+tmp2[tmp2.length-1]+'_GioDo').val();
			var ps=$('#'+tmp2[tmp2.length-1]+'_Ps').val();
			var pd=$('#'+tmp2[tmp2.length-1]+'_Pd').val();
			var hr=$('#'+tmp2[tmp2.length-1]+'_Hr').val();
			//alert(rowData['GioDo']+"_"+rowData['Ps']+"_"+rowData['Pd']+"_"+rowData['Hr'] )
			var tmp1 = $("#rowed3").jqGrid('getDataIDs');
			if(giodo!="" && ps!="" && pd!="" && hr!="" ){
				if(tmp1.length>1){//nam
					var giodo1=$('#'+tmp1[tmp1.length-2]+'_GioDo').val();
					var giodo2=$('#'+tmp1[tmp1.length-1]+'_GioDo').val();
					var tam_giodo1=giodo1.split(":");
					var tam_giodo2=giodo2.split(":");
					//alert(tam_giodo1[0]+"_"+tam_giodo2[0]);
					if(tam_giodo1[0]>tam_giodo2[0]){
						$('#'+tmp1[tmp1.length-1]+'_GioDo').addClass('input_loi');
					}else if(tam_giodo1[0]==tam_giodo2[0]){
						if(tam_giodo1[1]>tam_giodo2[1]){
							$('#'+tmp1[tmp1.length-1]+'_GioDo').addClass('input_loi');
						}else{
						$("#rowed3").jqGrid('addRow',parameters);
						var tmp3 = $("#rowed3").jqGrid('getDataIDs');
						var tg=$('#'+tmp3[tmp3.length-2]+'_GioDo').val();
						var tam_tg=tg.split(":");
						$('#'+tmp3[tmp3.length-1]+'_GioDo').timeEntry({show24Hours: true});
						$('#'+tmp3[tmp3.length-1]+'_GioDo').timeEntry('setTime', new Date(0, 0, 0, tam_tg[0], tam_tg[1], 0)); 
						}
					}else{
					$("#rowed3").jqGrid('addRow',parameters);
					var tmp3 = $("#rowed3").jqGrid('getDataIDs');
					var tg=$('#'+tmp3[tmp3.length-2]+'_GioDo').val();
					var tam_tg=tg.split(":");
					$('#'+tmp3[tmp3.length-1]+'_GioDo').timeEntry({show24Hours: true});
					$('#'+tmp3[tmp3.length-1]+'_GioDo').timeEntry('setTime', new Date(0, 0, 0, tam_tg[0], tam_tg[1], 0)); 
					
					}
				}else{
				$("#rowed3").jqGrid('addRow',parameters);
				var tmp3 = $("#rowed3").jqGrid('getDataIDs');
				var tg=$('#'+tmp3[tmp3.length-2]+'_GioDo').val();
				var tam_tg=tg.split(":");
				$('#'+tmp3[tmp3.length-1]+'_GioDo').timeEntry({show24Hours: true});
				$('#'+tmp3[tmp3.length-1]+'_GioDo').timeEntry('setTime', new Date(0, 0, 0, tam_tg[0], tam_tg[1], 0)); 
				
				}
				
				var tmp4 = $("#rowed3").jqGrid('getDataIDs');
				for(var i=0;i<tmp4.length;i++){
					jQuery("#rowed3").jqGrid('editRow',tmp4[i]);
					$('#'+tmp4[i]+'_GioDo').timeEntry({show24Hours: true});
					number_textbox('#'+tmp4[i]+'_Ps');
					number_textbox('#'+tmp4[i]+'_Pd');
					number_textbox('#'+tmp4[i]+'_Hr');
					}
					
			}else if(giodo==""){
				$('#'+tmp2[tmp2.length-1]+'_GioDo').addClass( "input_loi" );
			}else if(ps==""){
				$('#'+tmp2[tmp2.length-1]+'_Ps').addClass( "input_loi" );
			}else if(pd==""){
				$('#'+tmp2[tmp2.length-1]+'_Pd').addClass( "input_loi" );
			}else if(hr==""){
				$('#'+tmp2[tmp2.length-1]+'_Hr').addClass( "input_loi" );
			}
			
			//$('#'+tmp1[tmp1.length-1]+'_GioDo').timeEntry('setTime', new Date()); 
			//$('#'+tmp1[tmp1.length-1]+'_GioDo').timeEntry('setTime', new Date()); 
			
		}else{
			$("#rowed3").jqGrid('addRow',parameters);
			var tmp1 = $("#rowed3").jqGrid('getDataIDs');
			for(var i=0;i<tmp1.length;i++){
				jQuery("#rowed3").jqGrid('editRow',tmp1[i]);
				$('#'+tmp1[i]+'_GioDo').timeEntry({show24Hours: true});
				$('#'+tmp1[i]+'_GioDo').timeEntry('setTime', new Date()); 
				}
			}
			

		
		});
	$("#xoa").click(function(){
		var selRowId = $("#rowed3").jqGrid ('getGridParam', 'selrow');
		if($.isNumeric(selRowId)){
			var _id=$("#_nrowid").val();
		if(_id=="")
			$("#_nrowid").val(selRowId);
		else
			$("#_nrowid").val(_id+"_"+selRowId);
	}
		$('#rowed3').jqGrid('delRowData',selRowId);
	});
		
$('#dialog').dialog({
                autoOpen: false,
				width: 250,
				height:140,
                modal: true,
                resizable: false,
                buttons: {
                    "Ok": function() {
						$(this).dialog("close");
					}
				}
});
	
	if(id_kham2!="0"){
		$.getJSON( "resource.php?module=<?=$modules?>&view=<?=$view?>&action=data_anus&idkham="+id_kham2+"&idbenhnhan="+id_benhnhan, 
			function( data ) {
				data_luotkham=data;

		 	//alertObject(data);
			var tam1_cls="";
			$.each( data, function( key, val ) {		 
				for(i=0;i<val.length;i++){
					//tam+=" ; "+val[i]["id"];
					var tam1_cls=val[i]["cell"];
					//tam_cls+= '<div id="cls_'+val[i]["id"]+'">'+tam1_cls[0]+"<br \>" +tam1_cls[5]+'</div>';
					_id_luotkham.push(tam1_cls[5]);				
					_id_loaikham.push(tam1_cls[3]);
					_id_luotkham_non_unique.push(tam1_cls[5]);
					_id_kham.push(val[i]["id"]);

					
				}
				//_id_luotkham=$.unique(_id_luotkham).reverse();
				_id_kham=_id_kham.reverse();
				_id_luotkham_non_unique=_id_luotkham_non_unique.reverse();
				_id_loaikham=_id_loaikham.reverse();
				_id_luotkham=$.unique(_id_luotkham);
				//_id_loaikham=$.unique(_id_loaikham);
				//navigator_load("end","first");			
				 //alert(_id_kham);		
						load_complete();			 
			//$('.template_title_button').button( 'disable');
				//trangthai=tam1_cls[9]; 
				if(_id_trangthai=="Xong" ||_id_trangthai=="DaThucHien"){
					$('.template_title_button').button( 'disable');
				}
				 else if(_id_trangthai=="DangKham"||_id_trangthai=="DangCho"){
				 	$('.template_title_button').button( 'enable');
				 }
			});		
		});
}
else{

	$.getJSON( "resource.php?module=<?=$modules?>&view=<?=$view?>&action=data_loaihuyetap24h&idbenhnhan="+id_benhnhan, 
		function( data ) {
			data_luotkham=data;
			
	 	//alertObject(data);
		var tam1_cls="";
		$.each( data, function( key, val ) {		 
			for(i=0;i<val.length;i++){
				//tam+=" ; "+val[i]["id"];
				var tam1_cls=val[i]["cell"];
				//tam_cls+= '<div id="cls_'+val[i]["id"]+'">'+tam1_cls[0]+"<br \>" +tam1_cls[5]+'</div>';
				_id_luotkham.push(tam1_cls[5]);				
				_id_loaikham.push(tam1_cls[3]);
				_id_luotkham_non_unique.push(tam1_cls[5]);
				_id_kham.push(val[i]["id"]);

				
			}
			//_id_luotkham=$.unique(_id_luotkham).reverse();
			_id_kham=_id_kham.reverse();
			_id_luotkham_non_unique=_id_luotkham_non_unique.reverse();
			_id_loaikham=_id_loaikham.reverse();
			_id_luotkham=$.unique(_id_luotkham);
			load_complete();
			
			if(_id_trangthai=="Xong" ||_id_trangthai=="DaThucHien"){
				$('.template_title_button').button( 'disable');
			}
			 else if(_id_trangthai=="DangKham"||_id_trangthai=="DangCho"){
			 	$('.template_title_button').button( 'enable');
			 }
		});		
	});
}
	function n_loadform(){
		_id_luotkham.splice(0, _id_luotkham.length-1)
		_id_loaikham.splice(0, _id_loaikham.length-1)
		_id_luotkham_non_unique.splice(0, _id_luotkham_non_unique.length-1)
		_id_kham.splice(0, _id_kham.length-1)
		
		
	$.getJSON( "resource.php?module=<?=$modules?>&view=<?=$view?>&action=data_loaihuyetap24h&idbenhnhan="+id_benhnhan, 
		function( data ) {
			data_luotkham=data;
	 	//alertObject(data);
		var tam1_cls="";
		$.each( data, function( key, val ) {		 
			for(i=0;i<val.length;i++){
				//tam+=" ; "+val[i]["id"];
				var tam1_cls=val[i]["cell"];
				//tam_cls+= '<div id="cls_'+val[i]["id"]+'">'+tam1_cls[0]+"<br \>" +tam1_cls[5]+'</div>';
				_id_luotkham.push(tam1_cls[5]);				
				_id_loaikham.push(tam1_cls[3]);
				_id_luotkham_non_unique.push(tam1_cls[5]);
				_id_kham.push(val[i]["id"]);				
				
			}
			//_id_luotkham=$.unique(_id_luotkham).reverse();
			_id_kham=_id_kham.reverse();
			_id_luotkham_non_unique=_id_luotkham_non_unique.reverse();
			_id_loaikham=_id_loaikham.reverse();
			_id_luotkham=$.unique(_id_luotkham);
			//_id_loaikham=$.unique(_id_loaikham);
			//navigator_load("end","first");
			loaikham_click();			
					
		
		});		
	});
}

function n_loadform2(){
		_id_luotkham.splice(0, _id_luotkham.length-1)
		_id_loaikham.splice(0, _id_loaikham.length-1)
		_id_luotkham_non_unique.splice(0, _id_luotkham_non_unique.length-1)
		_id_kham.splice(0, _id_kham.length-1)
		
		
	$.getJSON( "resource.php?module=<?=$modules?>&view=<?=$view?>&action=data_loaihuyetap24h&idbenhnhan="+id_benhnhan, 
		function( data ) {
			data_luotkham=data;
	 	//alertObject(data);
		var tam1_cls="";
		$.each( data, function( key, val ) {		 
			for(i=0;i<val.length;i++){
				//tam+=" ; "+val[i]["id"];
				var tam1_cls=val[i]["cell"];
				//tam_cls+= '<div id="cls_'+val[i]["id"]+'">'+tam1_cls[0]+"<br \>" +tam1_cls[5]+'</div>';
				_id_luotkham.push(tam1_cls[5]);				
				_id_loaikham.push(tam1_cls[3]);
				_id_luotkham_non_unique.push(tam1_cls[5]);
				_id_kham.push(val[i]["id"]);				
				
			}
			//_id_luotkham=$.unique(_id_luotkham).reverse();
			_id_kham=_id_kham.reverse();
			_id_luotkham_non_unique=_id_luotkham_non_unique.reverse();
			_id_loaikham=_id_loaikham.reverse();
			_id_luotkham=$.unique(_id_luotkham);
			//_id_loaikham=$.unique(_id_loaikham);
			//navigator_load("end","first");
			loaikham_click2();			
					
		
		});		
	});
}
	
	$(window).resize(function() {		 
		$("#panel_main").css("height",$(window).height()-151+"px");	
		resize_control();	 
	});

	//navigator_load(0);
	$(function() {
		$( "#left_col #first" ).button({
		  text: false,
		  icons: {
			primary: "ui-icon-seek-first"
		  }
		})
		.click(function() {
			navigator_load("first","first");
			
		});
		$( "#left_col #last" ).button({
		  text: false,
		  icons: {
			primary: "ui-icon-seek-end"
		  }
		})
		.click(function() {
			navigator_load("end","first");
			
		}); 
		$( "#left_col #next" ).button({
		  text: false,
		  icons: {
			primary: "ui-icon-seek-next"
		  }
		})
		.click(function() {
			navigator_load(1,"first");			 
		});  
		$( "#left_col #prev" ).button({
		  text: false,
		  icons: {
			primary: "ui-icon-seek-prev"
		  }
		})
		.click(function() {
			navigator_load(-1,"first");
			
		});
		$( "#open_template" ).button({
		  text: false,
		  icons: {
			primary: "ui-icon-triangle-1-s"
		  }
		})
		.click(function(e) {
			 e.stopPropagation();   
		 	 $("#DM_template_container").fadeIn(200);
			 $("#template_title").focus();			
		});
		$( "#add_template" ).button({
		  text: false,
		  icons: {
			primary: "ui-icon-plus"
		  }
		})
		.click(function() {
		 
		});
		$( "#add_chuandoan" ).button({
		  text: false,
		  icons: {
			primary: "ui-icon-plus"
		  }
		})
                $("#cancel").click(function(){
			$("#dialog-form").dialog("close");
		});
		$("#xoamota").click(function(){
			$("#dialog-form2").dialog("open");
			window.oper='xoamt';
				//$("#mota").val("");
				//$("#ketluan").val("");
				//$("#loikhuyen").val("");
		});
		$("#xoaketluan").click(function(){
			$("#dialog-form2").dialog("open");
			window.oper='xoakl';
				//$("#ketluan").val("");
		});
		$("#xoaloikhuyen").click(function(){
			$("#dialog-form2").dialog("open");
			window.oper='xoalk';
				//$("#loikhuyen").val("");
		});
		         
  	}); 
      		  
			  $("#sua").click(function(){
				  dis_all("hien");
			  	//$('#sua').button( {disabled:true});
					$('#luu').button( {disabled:false});
					$('#open_template').button( {disabled:false});
					$( "#template_title" ).attr("disabled",false);
					$("#sua").hide();
					$('#boqua').show();
					$('.template_title_button').button( {disabled:false});
					$('.chuandoan_button').button( {disabled:false});
					$('.nhanvien_button').button( {disabled:false});
					$( "#nhanvien" ).attr("disabled",false);
					$( "#chuandoan" ).attr("disabled",false);
					$('#them').button( {disabled:false});
					$('#xoa').button( {disabled:false});
					var tmp1 = $("#rowed3").jqGrid('getDataIDs');
					for(var i=0;i<tmp1.length;i++ ){
						jQuery("#rowed3").jqGrid('editRow',tmp1[i]);
						$('#'+tmp1[i]+'_GioDo').timeEntry({show24Hours: true});
					}
					window.test="giosuacuoi";
			  });
				$("#boqua").click(function(){
				dis_all("an");
				$("#sua").show();
				$('#boqua').hide();
				$('#luu').button( {disabled:true});
				$('#ketluan').attr("disabled",true);
				$('#open_template').button( {disabled:true});
				$( "#template_title" ).attr("disabled",true);
				$('.template_title_button').button( {disabled:true});
				//$('.chuandoan_button').button( {disabled:true});
				$('.nhanvien_button').button( {disabled:true});
				$( "#nhanvien" ).attr("disabled",true);
				// $( "#chuandoan" ).attr("disabled",true);
				$('#them').button( {disabled:true});
				$('#xoa').button( {disabled:true});
				setval('#nhanvien','#nhanvien1','#nhan_vien',nhanvien4);
				setval('#chuandoan','#chuandoan1','#nhan_vien1',chuandoan4);
				var tmp1 = $("#rowed3").jqGrid('getDataIDs');
					for(var i=0;i<tmp1.length;i++ ){
						jQuery("#rowed3").jqGrid('saveRow',tmp1[i]);
						$('#'+tmp1[i]+'_GioDo').timeEntry({show24Hours: true});
					}
                         		  
                         		 
				});
			  $("#dathuchien").click(function(){
				  dis_all("an");
					$("#id_trangthai").html("Đã thực hiện");
					$('#dathuchien').button( {disabled:true});
					$('#sua').button( {disabled:false});
					$('#luu').button( {disabled:true});
					$('#open_template').button( {disabled:true});
					$( "#template_title" ).attr("disabled",true);
					_id_trangthai="DaThucHien";
					$('.template_title_button').button( {disabled:true});
					$('.chuandoan_button').button( {disabled:false});
					$('.nhanvien_button').button( {disabled:true});
					$( "#nhanvien" ).attr("disabled",true);
					$('#add_template').button( {disabled:true});
					$('#boqua').hide();
					$('#sua').show();
					 
					$("#giothuchien").html(gio("current"));
					var giothuchien2= $( "#giothuchien" ).text();
					luuthongso(_kham,'dathuchien');
					tooltip_message("Đã thực hiện");
					n_loadform2();                                  
			  });
			  $("#hoantat").click(function(){
				  dis_all("an");
				$("#id_trangthai").html("Đã hoàn tất");
				$('#dathuchien').button( {disabled:true});
				$('#hoantat').button( {disabled:true});
				$('#sua').button( {disabled:false});
				$('#luu').button( {disabled:true});
				$('#open_template').button( {disabled:true});
				$( "#template_title" ).attr("disabled",true);
				_id_trangthai="Xong";
				$('.template_title_button').button( {disabled:true});
				$('.chuandoan_button').button( {disabled:true});
				$('.nhanvien_button').button( {disabled:true});
				$( "#nhanvien" ).attr("disabled",true);
				$( "#chuandoan" ).attr("disabled",true);
				$('#add_template').button( {disabled:true});
				$('#boqua').hide();
				$('#sua').show();
				
				$("#giothuchien").html(gio("current"));
				var giothuchien2= $( "#giothuchien" ).text();
				$("#giohoantat").html(gio("current"));
				var giohoantat2= $( "#giohoantat" ).text();
				luuthongso(_kham,'hoantat');
				n_loadform2();
			  });
			 $('#luu').click(function (){
			  	if(_id_trangthai=="DangKham"|| _id_trangthai=="DangCho"){
			  		
			  	}
			  	else{
			  		$('#luu').button( {disabled:true});
			  		$('#boqua').hide();
					$('#sua').show();
					$('#sua').button( {disabled:false});
					$('.template_title_button').button( {disabled:true});
					$('.chuandoan_button').button( {disabled:true});
					$('.nhanvien_button').button( {disabled:true});
					$( "#nhanvien" ).attr("disabled",true);
					$( "#chuandoan" ).attr("disabled",true);
					$('#add_template').button( {disabled:true});
					// setval('#nhanvien','#nhanvien1','#nhan_vien',nhanvien4);
					//setval('#chuandoan','#chuandoan1','#nhan_vien1',chuandoan4);
					$('#open_template').button( {disabled:true});
					$( "#template_title" ).attr("disabled",true);
					if(window.test=="giosuacuoi"){
					$("#edit_by").show();
					var nguoisua2=$("#nhanvien1").val();
					//alert(nguoisua2);
					$("#nguoisua").html(nguoisua2);
					$("#ngaygiosua").html(gio("current"));
					}}  
			                      
					var ngaygiosua2=$("#ngaygiosua").text();
			       
			       if(window.test2=="dathuchien1"){
					   dis_all("an");
			     	   luuthongso(_kham,'luudathuchien');
			         }
			         if(window.test2=="hoantat1"){
						 dis_all("an");
			         	luuthongso(_kham,'luuhoantat');
			         }     
			          if(window.test2=="dangkham1"){
			      		luuthongso(_kham,'luudangkham');
			         }

			         n_loadform2();                           
			    });
			 	phanquyen();
				var eventMethod = window.addEventListener ? "addEventListener" : "attachEvent";
				var eventer = window[eventMethod];
				var messageEvent = eventMethod == "attachEvent" ? "onmessage" : "message";
				eventer(messageEvent,function(e) {
					edit_images(e.data);
				},false);			 
				
				$("#DM_template").click(function(e) {
					grid_click_status=true;
			    });  
	
	
});

function navigator_load(_value,_click){
	//alert(tam1_cls.length);
	if((navigator_count+_value>_id_luotkham.length-1)||(navigator_count+_value<0)){
		return false;	
	}
	var tam_cls=""; 
	if(_value=="first"){
		navigator_count=0;	
	}else if(_value=="end"){		 
		navigator_count=_id_luotkham.length-1;
	}else{
		navigator_count+=parseInt(_value);
	}
	var _mota="";		
	$.each( data_luotkham, function( key, val ) {					 
		for(i=0;i<val.length;i++){
			//tam+=" ; "+val[i]["id"];				
			var tam1_cls=val[i]["cell"];
			//alert(tam1_cls[5])
			if(_id_luotkham[navigator_count]==tam1_cls[5]){
				//alert(_id_luotkham[navigator_count]) 
				tam_cls+= '<div style="color:#4AC4F3;font-weight: bold;font-size:13px;" id="'+val[i]["id"]+'" alt="'+ma_benhnhan+"_"+val[i]["id"]+"_"+tam1_cls[3]+'">Huyết áp 24 giờ</div>';				
				$("#ngay_kham").html(tam1_cls[2]);				 
				// $("#id_trangthai").html(tam1_cls[9]);
			}
		}
		$("#left_col div").html(tam_cls);	
	});
	loaikham_click();
	if(_click=="first"){
		$("#left_col div div:first-child").click();

	}
	$("#left_col .navigator_title").html("Lượt khám " + (navigator_count+1) +"/"+_id_luotkham.length);	

}
function gio(inputA){
			var d = new Date();
			var curr_hour = d.getHours();
			var curr_minute = (d.getMinutes()<10?'0':'') + d.getMinutes(); //phút trả về 1 chữ số nếu bé hơn mười nên phải ghép 0 vào
			var curr_time = curr_hour + ":" + curr_minute+ " ";
			var dd = d.getDate();
			var mm = d.getMonth()+1;//January is 0!`
			var yyyy = d.getFullYear();
			if(inputA!="current"){
			if(String(inputA).match(' ')!=null){
			var bientam=inputA.split(" ");
			if(bientam[0].length>bientam[1].length){
			var ngaytam=bientam[0].split($.cookie("phancachngay"));
			var giotam=bientam[1].split(":");
			ngaytam[2]=$.cookie('namjs')+ngaytam[2];
			}else if(bientam[1].length>bientam[0].length){
			var ngaytam=bientam[1].split($.cookie("phancachngay"));
			var giotam=bientam[0].split(":");
			ngaytam[2]=$.cookie('namjs')+ngaytam[2];
			}
			}else if(String(inputA).match(':')!=null){
			var ngaytam=[];
			ngaytam[0]=dd,ngaytam[1]=mm,ngaytam[2]=yyyy;
			var giotam=inputA.split(":");
			}else{
			var ngaytam=inputA.split($.cookie("phancachngay"));
			ngaytam[2]=$.cookie('namjs')+ngaytam[2];
			var giotam=[];
			giotam[0]=0;giotam[1]=0;
			}
			var thoigian=Date.today().set({
			millisecond: 0,
			second: 0,
			minute: parseInt(giotam[1]),
			hour: parseInt(giotam[0]),
			day: parseInt(ngaytam[0]),
			month: parseInt(ngaytam[1])-1,
			year: parseInt(ngaytam[2])
			});
			}else{
			var thoigian=Date.today().set({
			millisecond: 0,
			second: 0,
			minute: parseInt(curr_minute),
			hour: parseInt(curr_hour),
			day: parseInt(dd),
			month: parseInt(mm)-1,
			year: parseInt(yyyy)
			});
			thoigian=thoigian.addHours(0).toString("yyyy-MM-dd H:mm ");
			}
			return thoigian;
} 
function loaikham_click(){
	$.each( data_luotkham, function( key, val ) {
		$("#left_col div div").click(function(e) {
				$('#boqua').hide();
				$('#sua').show();
				for(i=0;i<val.length;i++){
					tam=val[i]["id"];	
						//alert(val[i]["cell"])			
					 var tam1_cls=val[i]["cell"]; 
					tam1=$(this).attr("id");	
					//console.log(tam+"=="+tam1);				 
					if(tam==tam1){	
						 mota5=val[i]["cell"][6];
						ketluan5=val[i]["cell"][7];
						loikhuyen5 = val[i]["cell"][8];
						 $("#nguoi_chidinh").val(val[i]["cell"][4]);
						 $("#ngaychidinh").val(val[i]["cell"][2]);
						 $("#noidung_ketluan").val(val[i]["cell"][7]);
                       	tenloaikham=val[i]["cell"][1]; 
                       	//alert(tam);
                       	$("#"+tam).addClass("sieuam1");

                        setval('#nhanvien','#nhanvien1','#nhan_vien',val[i]["cell"][10]);
                        setval('#chuandoan','#chuandoan1','#nhan_vien1',val[i]["cell"][15]);
						setval('#combo_chuandoan','#combo_chuandoan1','#data_chuandoan');
                        nhanvien4=val[i]["cell"][10];
                        chuandoan4=val[i]["cell"][15];
                       // ma_benhnhan=val[i]["cell"][18];
						id_loaikham=val[i]["cell"][3];
						$("#center_col div").html(val[i]["cell"][1]); 	
						$("#edit_by").removeClass("visibility");
						 _id_trangthai=tam1_cls[9]; 
                         _kham = tam;
                         _id_luotkham2=tam1_cls[5];
                        // alert(_kham);
                        // $(".zodi").show();
                        $("#giothuchien").text(val[i]["cell"][16]);                      
                        $("#giohoantat").text(val[i]["cell"][17]);  
						
						
                    if(_id_trangthai=="DangCho"){
						dis_all("hien");
						$("#id_trangthai").html("Đang chờ");
						$('#sua').button( {disabled:true});
						$('#luu').button( {disabled:false});
						$('#xoaketluan').button( {disabled:false});
						$('#xoaloikhuyen').button( {disabled:false});
						$('#ketluan').attr("disabled",false);
						$('#mota').attr("disabled",false);
						$('#loikhuyen').attr("disabled",false);
						$('#xoamota').button( {disabled:false});
						$('#open_template').button( {disabled:false});
						$( "#template_title" ).attr("disabled",false);
						$('#dathuchien').button( {disabled:false});
						$('.template_title_button').button( {disabled:false});
						$('.chuandoan_button').button( {disabled:false});
						$('.nhanvien_button').button( {disabled:false});
						$( "#nhanvien" ).attr("disabled",false);
						$( "#chuandoan" ).attr("disabled",false);
						$('#them').button( {disabled:false});
						$('#xoa').button( {disabled:false});
						$('#hoantat').button( {disabled:false});
						setval('#nhanvien','#nhanvien1','#nhan_vien',<?=$_SESSION['user']['id_user']?>);
						setval('#chuandoan','#chuandoan1','#nhan_vien1',<?=$_SESSION['user']['id_user']?>);
                         		  
                    }
                    else if(_id_trangthai=="DaThucHien"){
						dis_all("an");
						$("#id_trangthai").html("Đã thực hiện");
						$('#sua').button( {disabled:false});
						$('#luu').button( {disabled:true});
						$('#xoamota').button( {disabled:true});
						$('#xoaketluan').button( {disabled:true});
						$('#xoaloikhuyen').button( {disabled:true});
						$('#ketluan').attr("disabled", "disabled");
						$('#mota').attr("disabled", "disabled");
						$('#loikhuyen').attr("disabled", "disabled");
						$('#open_template').button( {disabled:true});
						$( "#template_title" ).attr("disabled",true);
						$('#dathuchien').button( {disabled:true});
						$('.chuandoan_button').button( {disabled:false});
						$('.nhanvien_button').button( {disabled:true});
						$('.template_title_button').button( {disabled:true});
						$( "#nhanvien" ).attr("disabled",true);
						$('#hoantat').button( {disabled:false});
						$('#them').button( {disabled:true});
						$('#xoa').button( {disabled:true});
						$( "#chuandoan" ).attr("disabled",false);
						//setval('#nhanvien','#nhanvien1','#nhan_vien',<?=$_SESSION['user']['id_user']?>);
						setval('#chuandoan','#chuandoan1','#nhan_vien1',<?=$_SESSION['user']['id_user']?>);
						 
						window.test2="dathuchien1";
                    }
                    else if(_id_trangthai=="DangKham"){
						dis_all("hien");
						$("#id_trangthai").html("Đang khám");
						$('#sua').button( {disabled:true});
						$('#luu').button( {disabled:false});
						$('#xoaketluan').button( {disabled:false});
						$('#xoaloikhuyen').button( {disabled:false});
						$('#ketluan').attr("disabled",false);
						$('#mota').attr("disabled",false);
						$('#loikhuyen').attr("disabled",false);
						$('#xoamota').button( {disabled:false});
						$('#open_template').button( {disabled:false});
						$( "#template_title" ).attr("disabled",false);
						$('#dathuchien').button( {disabled:false});
						$('.template_title_button').button( {disabled:false});
						$('.chuandoan_button').button( {disabled:false});
						$('.nhanvien_button').button( {disabled:false});
						$( "#nhanvien" ).attr("disabled",false);
						$( "#chuandoan" ).attr("disabled",false);
						$('#them').button( {disabled:false});
						$('#xoa').button( {disabled:false});
						$('#hoantat').button( {disabled:false});
						$( "#chuandoan" ).attr("disabled",false);
						
						setval('#nhanvien','#nhanvien1','#nhan_vien',<?=$_SESSION['user']['id_user']?>);
						setval('#chuandoan','#chuandoan1','#nhan_vien1',<?=$_SESSION['user']['id_user']?>);
						window.test2="dangkham1";
                    }
                    else if(_id_trangthai=="Xong"){
						dis_all("an");
						$("#id_trangthai").html("Đã hoàn tất");
						$('#sua').button( {disabled:false});
						$('#luu').button( {disabled:true});
						$('#xoamota').button( {disabled:true});
						$('#xoaketluan').button( {disabled:true});
						$('#xoaloikhuyen').button( {disabled:true});
						$('#ketluan').attr("disabled", "disabled");
						$('#mota').attr("disabled", "disabled");
						$('#loikhuyen').attr("disabled", "disabled");
						$('#open_template').button( {disabled:true});
						$( "#template_title" ).attr("disabled",true);
						$('#dathuchien').button( {disabled:true});
						$('#hoantat').button( {disabled:true});
						$('.template_title_button').button( {disabled:true});
						$('.chuandoan_button').button( {disabled:true});
						$('.nhanvien_button').button( {disabled:true});
						$( "#nhanvien" ).attr("disabled",true);
						$( "#chuandoan" ).attr("disabled",true);
						$('#them').button( {disabled:true});
						$('#xoa').button( {disabled:true});
						
						window.test2="hoantat1";
                    }
                    $("#giohentra").html(tam1_cls[11]);
                    		 			 
						if(val[i]["cell"][9]!=null)
						{
								$("#nguoisua").text(val[i]["cell"][12]);
								$("#ngaygiosua").text(val[i]["cell"][13]);
						}
						else $("#edit_by").hide();					
					} 
				}
				////
				var tamthoilathe= stt.split(";");
				for (i = 0; i <tamthoilathe.length; i++) 
				{
					check=tamthoilathe[i].split(":");
					if($("#nguoisua").text()==check[0]){ //alert(check[0]);
				 		$("#nguoisua").text(check[1]);}
				 	if($("#nguoi_chidinh").val()==check[0]){ //alert(check[0]);
				 		$("#nguoi_chidinh").val(check[1]);}
					
				}
				
				////////
				var ii=0;				 
				for(i=0;i<_id_kham.length;i++){
					if(_id_loaikham[i]==id_loaikham){						 				 
						//console.log(_id_kham[i]+"  "+ii);						 			 
						if((_id_kham[i]==$(this).attr("id"))&&(_id_loaikham[i])==id_loaikham){
							id_kham=_id_kham[i]
						
							break;
						}
						ii++;						 
					}
				}
		$("#rowed3").jqGrid('setGridParam',{datatype: 'json',url:"resource.php?module=<?=$modules?>&view=<?=$view?>&action=data_thongsohuyetap24h&idkham="+_kham}).trigger('reloadGrid');
		});
	});
}

function loaikham_click2(){
	$.each( data_luotkham, function( key, val ) {
				$('#boqua').hide();
				$('#sua').show();
				for(i=0;i<val.length;i++){
					tam=val[i]["id"];	
						//alert(val[i]["cell"])			
					 var tam1_cls=val[i]["cell"]; 
					tam1=$(this).attr("id");	
					//console.log(tam+"=="+tam1);				 
					if(tam==tam1){	
						 mota5=val[i]["cell"][6];
						ketluan5=val[i]["cell"][7];
						loikhuyen5 = val[i]["cell"][8];
						 $("#nguoi_chidinh").val(val[i]["cell"][4]);
						 $("#ngaychidinh").val(val[i]["cell"][2]);
						 $("#noidung_ketluan").val(val[i]["cell"][7]);
                       	tenloaikham=val[i]["cell"][1]; 
                       	//alert(tam);
                       	$("#"+tam).addClass("sieuam1");

                        setval('#nhanvien','#nhanvien1','#nhan_vien',val[i]["cell"][10]);
                        setval('#chuandoan','#chuandoan1','#nhan_vien1',val[i]["cell"][15]);
						setval('#combo_chuandoan','#combo_chuandoan1','#data_chuandoan');
                        nhanvien4=val[i]["cell"][10];
                        chuandoan4=val[i]["cell"][15];
                       // ma_benhnhan=val[i]["cell"][18];
						id_loaikham=val[i]["cell"][3];
						$("#center_col div").html(val[i]["cell"][1]); 	
						$("#edit_by").removeClass("visibility");
						 _id_trangthai=tam1_cls[9]; 
                         _kham = tam;
                         _id_luotkham2=tam1_cls[5];
                         //alert(_id_luotkham2);
                        // $(".zodi").show();
                        $("#giothuchien").text(val[i]["cell"][16]);                      
                        $("#giohoantat").text(val[i]["cell"][17]);  
						
						
                    if(_id_trangthai=="DangCho"){
						dis_all("hien");
						$("#id_trangthai").html("Đang chờ");
						$('#sua').button( {disabled:true});
						$('#luu').button( {disabled:false});
						$('#xoaketluan').button( {disabled:false});
						$('#xoaloikhuyen').button( {disabled:false});
						$('#ketluan').attr("disabled",false);
						$('#mota').attr("disabled",false);
						$('#loikhuyen').attr("disabled",false);
						$('#xoamota').button( {disabled:false});
						$('#open_template').button( {disabled:false});
						$( "#template_title" ).attr("disabled",false);
						$('#dathuchien').button( {disabled:false});
						$('.template_title_button').button( {disabled:false});
						$('.chuandoan_button').button( {disabled:false});
						$('.nhanvien_button').button( {disabled:false});
						$( "#nhanvien" ).attr("disabled",false);
						$( "#chuandoan" ).attr("disabled",false);
						$('#them').button( {disabled:false});
						$('#xoa').button( {disabled:false});
						$('#hoantat').button( {disabled:false});
						setval('#nhanvien','#nhanvien1','#nhan_vien',<?=$_SESSION['user']['id_user']?>);
						setval('#chuandoan','#chuandoan1','#nhan_vien1',<?=$_SESSION['user']['id_user']?>);
                         		  
                    }
                    else if(_id_trangthai=="DaThucHien"){
						dis_all("an");
						$("#id_trangthai").html("Đã thực hiện");
						$('#sua').button( {disabled:false});
						$('#luu').button( {disabled:true});
						$('#xoamota').button( {disabled:true});
						$('#xoaketluan').button( {disabled:true});
						$('#xoaloikhuyen').button( {disabled:true});
						$('#ketluan').attr("disabled", "disabled");
						$('#mota').attr("disabled", "disabled");
						$('#loikhuyen').attr("disabled", "disabled");
						$('#open_template').button( {disabled:true});
						$( "#template_title" ).attr("disabled",true);
						$('#dathuchien').button( {disabled:true});
						$('.chuandoan_button').button( {disabled:false});
						$('.nhanvien_button').button( {disabled:true});
						$('.template_title_button').button( {disabled:true});
						$( "#nhanvien" ).attr("disabled",true);
						$('#hoantat').button( {disabled:false});
						$('#them').button( {disabled:true});
						$('#xoa').button( {disabled:true});
						$( "#chuandoan" ).attr("disabled",false);
						//setval('#nhanvien','#nhanvien1','#nhan_vien',<?=$_SESSION['user']['id_user']?>);
						setval('#chuandoan','#chuandoan1','#nhan_vien1',<?=$_SESSION['user']['id_user']?>);
						 
						window.test2="dathuchien1";
                    }
                    else if(_id_trangthai=="DangKham"){
						dis_all("hien");
						$("#id_trangthai").html("Đang khám");
						$('#sua').button( {disabled:true});
						$('#luu').button( {disabled:false});
						$('#xoaketluan').button( {disabled:false});
						$('#xoaloikhuyen').button( {disabled:false});
						$('#ketluan').attr("disabled",false);
						$('#mota').attr("disabled",false);
						$('#loikhuyen').attr("disabled",false);
						$('#xoamota').button( {disabled:false});
						$('#open_template').button( {disabled:false});
						$( "#template_title" ).attr("disabled",false);
						$('#dathuchien').button( {disabled:false});
						$('.template_title_button').button( {disabled:false});
						$('.chuandoan_button').button( {disabled:false});
						$('.nhanvien_button').button( {disabled:false});
						$( "#nhanvien" ).attr("disabled",false);
						$( "#chuandoan" ).attr("disabled",false);
						$('#them').button( {disabled:false});
						$('#xoa').button( {disabled:false});
						$('#hoantat').button( {disabled:false});
						$( "#chuandoan" ).attr("disabled",false);
						
						setval('#nhanvien','#nhanvien1','#nhan_vien',<?=$_SESSION['user']['id_user']?>);
						setval('#chuandoan','#chuandoan1','#nhan_vien1',<?=$_SESSION['user']['id_user']?>);
						window.test2="dangkham1";
                    }
                    else if(_id_trangthai=="Xong"){
						dis_all("an");
						$("#id_trangthai").html("Đã hoàn tất");
						$('#sua').button( {disabled:false});
						$('#luu').button( {disabled:true});
						$('#xoamota').button( {disabled:true});
						$('#xoaketluan').button( {disabled:true});
						$('#xoaloikhuyen').button( {disabled:true});
						$('#ketluan').attr("disabled", "disabled");
						$('#mota').attr("disabled", "disabled");
						$('#loikhuyen').attr("disabled", "disabled");
						$('#open_template').button( {disabled:true});
						$( "#template_title" ).attr("disabled",true);
						$('#dathuchien').button( {disabled:true});
						$('#hoantat').button( {disabled:true});
						$('.template_title_button').button( {disabled:true});
						$('.chuandoan_button').button( {disabled:true});
						$('.nhanvien_button').button( {disabled:true});
						$( "#nhanvien" ).attr("disabled",true);
						$( "#chuandoan" ).attr("disabled",true);
						$('#them').button( {disabled:true});
						$('#xoa').button( {disabled:true});
						
						window.test2="hoantat1";
                    }
                    $("#giohentra").html(tam1_cls[11]);
                    		 			 
						if(val[i]["cell"][9]!=null)
						{
								$("#nguoisua").text(val[i]["cell"][12]);
								$("#ngaygiosua").text(val[i]["cell"][13]);
						}
						else $("#edit_by").hide();					
					} 
				}
				////
				var tamthoilathe= stt.split(";");
				for (i = 0; i <tamthoilathe.length; i++) 
				{
					check=tamthoilathe[i].split(":");
					if($("#nguoisua").text()==check[0]){ //alert(check[0]);
				 		$("#nguoisua").text(check[1]);}
				 	if($("#nguoi_chidinh").val()==check[0]){ //alert(check[0]);
				 		$("#nguoi_chidinh").val(check[1]);}
					
				}
				
				////////
				var ii=0;				 
				for(i=0;i<_id_kham.length;i++){
					if(_id_loaikham[i]==id_loaikham){						 				 
						//console.log(_id_kham[i]+"  "+ii);						 			 
						if((_id_kham[i]==$(this).attr("id"))&&(_id_loaikham[i])==id_loaikham){
							id_kham=_id_kham[i]
						
							break;
						}
						ii++;						 
					}
				}
				$("#rowed3").jqGrid('setGridParam',{datatype: 'json',url:"resource.php?module=<?=$modules?>&view=<?=$view?>&action=data_thongsohuyetap24h&idkham="+_kham}).trigger('reloadGrid');						
		});
}

function create_layout(){
	//alert("")
	$('#panel_main').layout({	
		resizerClass: 'ui-state-default'       
		,west: {
			maskContents:		true
		,	resizable: true
		,	size:					"35%"
		,	resizerDblClickToggle: false 
		,	onresize_end:function () { 				 
				 resize_control();
			}
		,	onopen_end:function () { 
				 
			}
		,	onclose_end:function () { 				 
			 	 
			}
						
		}			
	    ,	center: {
			resizable: true
		,	size:					"65%"
		,	resizerDblClickToggle: false		 
				
		 
		,	onresize_end:function () { 				 
				  resize_control();
			}
		,	onopen_end:function () {				 
				 	
			}
		,	onclose_end:function () { 				 
	  			 	 
			}		
		} 
		 
	});		 
}


function load_select(){
window.stt = $.ajax({url: 'resource.php?module=web_services&function=get_auto_edit_option&action=index&term=&status=2&tables=DM_NhanVien&id=ID_NhanVien&name=NickName', async: false, success: function(data, result) {if (!result) alert('Không load được danh mục phòng ban');}}).responseText;	

}
function reload(){
	$('#nhanvien').combobox('reload');
	$('#chuandoan').combobox('reload');
}

function getCount2(word, arr) {
    var i = arr.length, // var to loop over
        j = 0; // number of hits
    while (i) if (arr[--i] === word) ++j; // count occurance
    return j;
}  

$( "#dialog-form" ).dialog({
            autoOpen: false,
            height: ($(window).height()/100 * parseFloat(25)).toFixed(0),
            width: ($(window).width()/100 * parseFloat(40)).toFixed(0),
            modal: true,
             open: function(event,ui){
                $( "#dialog-form" ).dialog( "option", "height", ($(window).height()/100 * parseFloat(25)).toFixed(0) );
                $( "#dialog-form" ).dialog( "option", "width", ($(window).width()/100 * parseFloat(35)).toFixed(0) );
                //$( "#dialog-form" ).getWindow().setBackgroundDrawable(new ColorDrawable(Color.argb(50, 255, 255, 255))); 
               
            },
            buttons: {
           	}
            });
$( "#dialog-form2" ).dialog({
            autoOpen: false,
            height: ($(window).height()/100 * parseFloat(20)).toFixed(0),
            width: ($(window).width()/100 * parseFloat(20)).toFixed(0),
            modal: true,
             open: function(event,ui){
                $( "#dialog-form2" ).dialog( "option", "height", ($(window).height()/100 * parseFloat(22)).toFixed(0) );
                $( "#dialog-form2" ).dialog( "option", "width", ($(window).width()/100 * parseFloat(20)).toFixed(0) );
                 
                
            },
            buttons: {
           	}
            });
function create_nhanvien(elem, datalocal) {
        datalocal = jQuery.parseJSON(datalocal);
        $(elem).jqGrid({
            datastr: datalocal,
            datatype: "jsonstring",
            colNames: ['Tên', 'Họ và tên', 'Bộ phận'],
            colModel: [
                {name: 'nickname', index: 'nickname', hidden: false},
                {name: 'hovaten', index: 'hovaten', hidden: false},
                {name: 'Bophan', index: 'Bophan', hidden: false},
            ],
            hidegrid: false,
            gridview: true,
            loadonce: true,
            scroll: false,
            modal: true,
            rowNum: 200000,
            rowList: [],
            height: 300,
            width: 470,
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

                grid_filter_enter(elem);
            
window.nhanvien1_complete=1;


            },
        });
        $(elem).jqGrid('filterToolbar', {searchOperators: false, searchOnEnter: false, defaultSearch: "cn"});
        $(elem).jqGrid('bindKeys', {});
    }
    function create_bacsi(elem, datalocal) {
        datalocal = jQuery.parseJSON(datalocal);
        $(elem).jqGrid({
            datastr: datalocal,
            datatype: "jsonstring",
            colNames: ['Tên', 'Họ và tên'],
            colModel: [
                {name: 'nickname', index: 'nickname', hidden: false},
                {name: 'hovaten', index: 'hovaten', hidden: false},
                
            ],
            hidegrid: false,
            gridview: true,
            loadonce: true,
            scroll: false,
            modal: true,
            rowNum: 200000,
            rowList: [],
            height: 300,
            width: 470,
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

                grid_filter_enter(elem);
            
window.nhanvien2_complete=1;


            },
        });
        $(elem).jqGrid('filterToolbar', {searchOperators: false, searchOnEnter: false, defaultSearch: "cn"});
        $(elem).jqGrid('bindKeys', {});
    }
	

	
    function load_select1(){
	window.xaphuong = $.ajax({url: 'resource.php?module=web_services&function=get_auto_edit_option&action=index&term=&status=2&tables=DM_template&id=ID_Template&name=TenTemplate', async: false, success: function(data, result) {if (!result) alert('Không load được danh mục nhân viên');}}).responseText;	
	$("#rowed3").setColProp('ID_Template', { editoptions: { value: xaphuong} });
	$('#ID_Template').empty();
	create_select("#ID_Template",xaphuong);
}
function load_complete(){
	if((nhanvien1_complete==0)&&(nhanvien2_complete==0)&&(ma_benhnhan==0)){
		setTimeout(load_complete,50);
		return;
	}

	navigator_load("end","first");

}

function dis_all(tam){
	if(tam=="an"){
	 $('#panel_main').find('input[type=text],input[type=checkbox],select,textarea,input[type=hidden]').each(function() {
		$(this).attr("disabled",true);
});
		$(".custom-combobox-toggle").button( {disabled:true});
		$("#nguoi_chidinh,#ngaychidinh").attr("disabled",true);
		$("#add_chuandoan").button( {disabled:true});
		//$(".custom-combobox-toggle").attr("class","backhidde");
		$( "#tgmacbenh1,#solandieutri1,#ppdieutricu1,#sobuitri1,#builonnhat1,#combo_ppdieutri11,#combo_ppdieutri21" ).addClass( "backhidde" );
		
	 }else if(tam=="hien"){
		 $('.thongtin_thai,.form_row,#panel_main,#tiensu,#panel_main2,.tinhtuoithai').find('input[type=text],input[type=checkbox],select,textarea,input[type=hidden]').each(function() {
			$(this).attr("disabled",false);
	});
	$(".custom-combobox-toggle").button( {disabled:false});
	$("#nguoi_chidinh,#ngaychidinh").attr("disabled",true);
	$("#add_chuandoan").button( {disabled:false});
	$( "#tgmacbenh1,#solandieutri1,#ppdieutricu1,#sobuitri1,#builonnhat1,#combo_ppdieutri11,#combo_ppdieutri21" ).removeClass( "backhidde" );
	
		}
}	

function create_grid()
    {
		mydata=[];
        $("#rowed3").jqGrid({
            data: mydata,
            datatype: "local",
            colNames: ['ID_HA24H','Giờ đo','Ps','Pd','HR','Đã lưu','Sửa'],
            colModel: [
               {name: 'ID_HA24h', index: 'ID_HA24h', search: false, width: "25%", editable: true, align: 'left', hidden: true},
				{name:'GioDo',index:'GioDo',width:"25%", sorttype: 'date',search:false,
                        formatter: 'date' ,formatoptions: {newformat: "H:i",srcformat:"H:i"},align:'center',
						editoptions: { dataEvents: [{ type: 'click', fn: function(e) {
								var row = $(e.target).closest('tr.jqgrow');
                                var rowId = row.attr('id');
								$('#'+rowId+'_GioDo').removeClass('input_loi');
								$('#'+rowId+'_Sua').val(2);
								
							} },
							{ type: 'blur', fn: function(e) {
								var row = $(e.target).closest('tr.jqgrow');
                                var rowId = row.attr('id');
								var _ps= $('#'+rowId+'_GioDo').val();

							
							} },
							

				]},hidden:false, editable: true},
				{name: 'Ps', index: 'Ps', search: false, width: "25%", editable: true, align: 'center',
				editoptions: { dataEvents: [{ type: 'click', fn: function(e) {
								var row = $(e.target).closest('tr.jqgrow');
                                var rowId = row.attr('id');
								$('#'+rowId+'_Ps').removeClass('input_loi');
								$('#'+rowId+'_Sua').val(2);
								
							} },
							{ type: 'blur', fn: function(e) {
								var row = $(e.target).closest('tr.jqgrow');
                                var rowId = row.attr('id');
								var _ps= $('#'+rowId+'_Ps').val();
								if(_ps>255)
									$('#'+rowId+'_Ps').val(255);
								var _pd2= $('#'+rowId+'_Pd').val();
								var _ps2= $('#'+rowId+'_Ps').val();
								if(parseInt(_pd2)>parseInt(_ps2)){
									$('#'+rowId+'_Pd').addClass('input_loi');
									$('#dialog').dialog('open');
									}else{
										$('#'+rowId+'_Pd').removeClass('input_loi');
										}
							} },
							

				]}, hidden: false},
				{name: 'Pd', index: 'Pd', search: false, width: "25%", editable: true, align: 'center',editoptions: { 					dataEvents: [{ type: 'click', fn: function(e) {
								var row = $(e.target).closest('tr.jqgrow');
                                var rowId = row.attr('id');
								$('#'+rowId+'_Pd').removeClass('input_loi');
								$('#'+rowId+'_Sua').val(2);
							} },
							{ type: 'blur', fn: function(e) {
								var row = $(e.target).closest('tr.jqgrow');
                                var rowId = row.attr('id');
								var _pd= $('#'+rowId+'_Pd').val();
								if(_pd>255)
									$('#'+rowId+'_Pd').val(255);
								var _pd2= $('#'+rowId+'_Pd').val();
								var _ps2= $('#'+rowId+'_Ps').val();
								
								if(parseInt(_pd2)>parseInt(_ps2)){
									//alert(_pd2+">"+_ps2);
									$('#'+rowId+'_Pd').addClass('input_loi');
									$('#dialog').dialog('open');
									}
								
							} },

				]}, hidden: false},
				{name: 'Hr', index: 'Hr', search: false, width: "25%", editable: true, align: 'center',editoptions: { dataEvents: [{ type: 'click', fn: function(e) {
								var row = $(e.target).closest('tr.jqgrow');
                                var rowId = row.attr('id');
								$('#'+rowId+'_Hr').removeClass('input_loi');
								$('#'+rowId+'_Sua').val(2);
							} },
							{ type: 'blur', fn: function(e) {
								var row = $(e.target).closest('tr.jqgrow');
                                var rowId = row.attr('id');
								var _hr= $('#'+rowId+'_Hr').val();
								if(_hr>255)
									$('#'+rowId+'_Hr').val(255);
							} },

				]}, hidden: false},
				{name: 'DaLuu', index: 'DaLuu', search: false, width: "25%", editable: true, align: 'left', hidden: true},
				{name: 'Sua', index: 'Sua', search: false, width: "25%", editable: true, align: 'left', hidden: true},
				
            ],
          loadonce: false,
            scroll: false,
            modal: true,
			rownumbers: true,
            shrinkToFit: true,
			grid_save_option: "",
            cmTemplate: {sortable: false},
            rowNum: 10000000,
			pginput:false,
			pgbuttons:false,
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
            loadComplete: function(data) {
				
				var tmp1 = $("#rowed3").jqGrid('getDataIDs');
				if((window.test2!='dathuchien1') && (window.test2!='hoantat1')){
					for(var i=0;i<tmp1.length;i++ ){
						jQuery("#rowed3").jqGrid('editRow',tmp1[i]);
						$('#'+tmp1[i]+'_GioDo').timeEntry({show24Hours: true});
					}
				}
				var ps = new Array();
				var pd = new Array();
				var hr = new Array();
				var gio = new Array();
				for(var i=0;i<tmp1.length;i++ ){
					var rowData = jQuery('#rowed3').jqGrid ('getRowData', tmp1[i]);
					ps[i]=parseInt(rowData['Ps']);
					pd[i]=parseInt(rowData['Pd']);
					hr[i]=parseInt(rowData['Hr']);
					gio[i]=rowData['GioDo'];
				}
				setTimeout(function(){
					bieudo(ps,pd,hr,gio);

					},1000);
				
				
			
            },
            caption: " Danh sách toa thuốc đã xuất"
        });

       $("#rowed3").jqGrid('navGrid', "#prowed3", {add: false, edit: false, del: false, search: false, refresh: false,prmView: false, closeAfterEdit: true, clearAfterAdd: true, navkeys: [true, 38, 40], closeOnEscape: true});


		$("#rowed3").jqGrid('bindKeys', {});
    }

function create_chuandoan(elem, datalocal) {
        datalocal = jQuery.parseJSON(datalocal);
        $(elem).jqGrid({
            datastr: datalocal,
            datatype: "jsonstring",
            colNames: ['Tên thông thường', 'Nội dung', 'Kết luận','Lời khuyên'],
            colModel: [
                {name: 'TenMau',width:"30%", index: 'TenMau', hidden: false},
                {name: 'NoiDung',width:"25%", index: 'NoiDung', hidden: false},
				{name: 'KetLuan',width:"25%", index: 'KetLuan', hidden: false},
				{name: 'LoiKhuyen',width:"20%", index: 'LoiKhuyen', hidden: false},
                
            ],
            hidegrid: false,
            gridview: true,
            loadonce: true,
            scroll: false,
            modal: true,
            rowNum: 200000,
            rowList: [],
            height: 200,
            width: 750,
            viewrecords: true,
            ignoreCase: true,
            shrinkToFit: true,
            cmTemplate: {sortable: false},
            sortorder: "desc",
            serializeRowData: function(postdata) {
            },
            onSelectRow: function(id) {
				var rowdata = $(this).getRowData(id);
				$('#noidung_ketluan').val('');
				$("#noidung_ketluan").val(rowdata["TenMau"]);
            },
            ondblClickRow: function(id, rowIndex, columnIndex) {
            },
            loadComplete: function(data) {

                grid_filter_enter(elem);
            
window.nhanvien2_complete=1;


            },
        });
        $(elem).jqGrid('filterToolbar', {searchOperators: false, searchOnEnter: false, defaultSearch: "cn"});
        $(elem).jqGrid('bindKeys', {});
    }
	
function resize_control(){

	$(".thongtin_chidinh").css("width",$(window).width()-$(".thongtin_tongthe").width()-10+"px");
	$("#left_col").css("width",$(window).width()/2-14+"px");
	$("#right_col").css("width",$(window).width()/2+1+"px");
	$("#rowed3").setGridWidth($(".left_col").width()-10);
	$("#rowed3").setGridHeight($(".left_col").height()-130);
	$("#right_top").css("height",$(".right_col").height()-98+"px");
	$(".top_left").css("width",$("#right_top").width()-$(".top_right").width()-5+"px");
}
function luuthongso(id_kham,action){
	var _del=$("#_nrowid").val();
	var ketluan=$("#noidung_ketluan").val();
	var nguoithuchien=$("#nhanvien1").val();
	var nguoihoantat=$("#chuandoan1").val();
		ids = $('#rowed3').jqGrid('getDataIDs');
		for(i=0;i<=ids.length-1;i++){
			jQuery("#rowed3").jqGrid('saveRow',ids[i]);
		}
		
	   var gridData = jQuery("#rowed3").getRowData();
	   var postData = JSON.stringify(gridData);
	   postData='{"id":'+postData+'}';
	   if(postData=="")
	   		postData="undefined";
	   postData=$.parseJSON(postData);
		 $.post('resource.php?module=<?= $modules ?>&view=<?= $view ?>&action=controller&oper='+action+'&idkham='+id_kham+'&ketluan='+ketluan+'&nguoithuchien='+nguoithuchien+'&nguoihoantat='+nguoihoantat+'&del='+_del+'&hienmaloi=a',postData).done(function(data){
			$("#rowed3").jqGrid('setGridParam',{datatype: 'json',url:"resource.php?module=<?=$modules?>&view=<?=$view?>&action=data_thongsohuyetap24h&idkham="+id_kham}).trigger('reloadGrid');
		tooltip_message("Lưu dữ liệu thành công");
		  })//$.post
	}
function bieudo(ps,pd,hr,gio){
	$(function () {
        $('#right_top').highcharts({
			 credits: {
				enabled: false
			  },
            title: {
                text: '',
                x: -20 //center
            },
            subtitle: {
                text: '',
                x: -20
            },
            xAxis: {
                categories: []
            },
            yAxis: {
                title: {
                    text: ''
                },
                plotLines: [{
                    value: 0,
                    width: 1,
                    color: '#808080'
                }]
            },
            tooltip: {
                valueSuffix: ''
            },
            legend: {
                layout: 'vertical',
                align: 'right',
                verticalAlign: 'middle',
                borderWidth: 0
            },
			plotOptions: {
				series: {
					allowPointSelect: true
				}
			},
			series: [{
                name: 'Ps',
                data: []
            }, {
                name: 'Pd',
                data: []
            }, {
                name: 'HR',
                data: []
            }]
        });
		//console.log(gio);
		  //var gio= ['07:20', '07:30', '08:10']
          var psSeries = [];
		  var pdSeries = [];
		  var hrSeries = [];
		  for (var i=0;i<ps.length;i++)
			{
				 psSeries.push(ps[i]);
			}
        for (var i = 0; i < pd.length; i++) {
			
            pdSeries.push(pd[i]);
        }
        for (var i = 0; i < hr.length; i++) {
            hrSeries.push(hr[i]);
        }
		
        var chart = $('#right_top').highcharts();
        chart.series[0].setData(psSeries);
		chart.series[1].setData(pdSeries);
		chart.series[2].setData(hrSeries);
		chart.xAxis[0].setCategories(gio, true,true);
		
    });
	}
</script>
 
 
