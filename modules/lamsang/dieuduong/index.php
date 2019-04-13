<style>
.ui-jqgrid-labels th.ui-th-column div{
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
	display:block !important;
	background:#F5F3E5!important;
}#main_top{
	background:#F5F3E5;
	height:35px;
	width:1355px;
	float:left;
	border-radius:3px;
	border:#D8CEBE solid 1px;
	margin:5px;
}
#main_bottom{
	height:600px;
	width:1355px;
	float:left;
	margin-left:5px;
	border:#D8CEBE solid 1px;
	background:#F5F3E5;
	
}select{
	width:120px;
}#sub_main_top{
	margin-left:15px;
	margin-top:5px;
}#tabs .ui-tabs-nav li {
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
	
}#xemtheo1{
	width:80px!important;
}#sub_main_top2{
	 margin-left: 5px;
   	 margin-top: 5px;
}#xemdanhsach{
	margin-left:5px;
	margin-top: -1px;
}#tabs .ui-tabs-nav li.ui-tabs-selected, #tabs .ui-tabs-nav li.ui-state-active {
z-index: 1;
}#tabs-1,#tabs-2{
	padding:0!important;
}.trai,.phai,.trai2,.phai2{
	float:left;
}

#gview_rowed8 div.ui-state-default{
	border-radius: 6px 6px 0 0!important;
	height:25px;
	
}#tabs-1-left-bottom{
	border-radius: 6px!important;
    box-shadow: 0 0 10px #A0A0A0;
	margin-top:6px;
	margin-left:5px;
	 border: 1px solid #919191;
}.ui-jqgrid-htable{
	height:25px;
}#ttthuoc,#ttluu{
	height:35px;
	margin-left: 5px;
    margin-top: 5px;
	border-radius: 6px!important;
    box-shadow: 0 0 10px #A0A0A0;
	border: 1px solid #919191;
}#gbox_rowed8{
    border: 1px solid #919191;
    box-shadow: 0 0 10px #A0A0A0;
    margin-left: 4px;
    margin-top: 5px;
}#tieude{

	height:22px;
	border-bottom:#D7D6CC 1px solid;
	padding-left:5px;
	padding-top:3px;
	font-weight:bold;
}#ghichubs{
	margin-left:2px;
}.ntext{
	width:100px;
	text-align:center;
}#ttthuoc_left{
	float:left;
	height:30px;
	margin-left:5px;
	margin-top:5px;
	width:530px;
	padding-top: 5px;
	
	font-weight:bold;
}
#ttthuoc_right{
	float:left;
	margin-top:3px;
	height:30px;
	width:70px;
}#tabs-1-right-bottom{
	margin-top:62px;
}#tabs-2-right-bottom{
	margin-top:26px;
}#noidungghichubs{
border-radius: 6px!important;
}input.custom_button_n[type="button"] {
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
}.editable{
	width:70%!important;
	text-align:center;
}.nghichu input.editable{
	width:92% !important;
}#gs_Xong1{
	display:none;
}
#gbox_rowed4_4 {
    border: 1px solid #919191;
    box-shadow: 0 0 10px #A0A0A0;
    margin-left: 4px;
    margin-top: 5px;
}#luuchidinhdieutri{
	float: right;
    margin-right: 40px;
    margin-top: 5px;
}.r3_mabenhnhan,.r5_tenthuoc,.r6_mabenhnhan,.r8_loaikham{
	padding-left:5px !important;
}
</style>
<body> 
<input type="hidden" id="_ntab" value="">
<div id="dialog-max" title="Thông báo" style="display:none">
  <p><span class="ui-icon ui-icon-alert" style="float:left; margin:0 7px 20px 0;"></span>Số thuốc không được vượt quá thuốc bác sỹ kê!</p>
</div>
<div id="dialog-confirm" title="Thông báo" style="display:none">
<input type="hidden" name="nrowid" id="nrowid" value="" >
<input type="hidden" name="ntenthuoc" id="ntenthuoc" value="" >
  <p><span class="ui-icon ui-icon-alert" style="float:left; margin:0 7px 20px 0;"></span>Bạn có muốn xóa nhật ký không?</p>
</div>
<div id="dialog-confirm2" title="Thông báo" style="display:none">
<input type="hidden" name="nrowid2" id="nrowid2" value="" >
  <p><span class="ui-icon ui-icon-alert" style="float:left; margin:0 7px 20px 0;"></span>Bạn có muốn xóa nhật ký không?</p>
</div>
<div id="dialog-error" title="Thông báo" style="display:none">
  <p><span class="ui-icon ui-icon-alert" style="float:left; margin:0 7px 20px 0;"></span>Số thuốc không được vượt quá thuốc bác sỹ kê!</p>
</div>
<input type="hidden" name="_nrowid" id="_nrowid" value="" >
<input type="hidden" name="_nrowid2" id="_nrowid2" value="" >
<input type="hidden" id="daxem" >
<input type="hidden" id="daxem2" >
    <div id="panel_main" >  
		<div id="main_top">
        	<div id="sub_main_top">
           <!-- <button id="homnay" type="button" onClick="Code">Hôm nay</button>	-->
            <label for="from_day"> Từ ngày:</label>
            <input type="text" id="from_day" name="from_day"  class="ntext" value="<?php echo date($_SESSION["config_system"]["ngaythang"]) ?>"/>
            <label for="to_day"> Đến ngày:</label>
           <input type="text" id="to_day" name="to_day"  class="ntext"  value="<?php echo date($_SESSION["config_system"]["ngaythang"]) ?>"/>
			<input type="hidden" name="from_day_mask" id='from_day_mask'  value="<?php echo date("Y/m/d")?>">
			<input type="hidden" name="to_day_mask" id='to_day_mask' value="<?php echo date("Y/m/d")?>">
            <input type="radio" id="chuathuchien" name="action" value="0" checked /><label for="chuathuchien"> Chưa thực hiện</label>
            <input type="radio" id="thuchienxong" name="action" value="1" /><label for="thuchienxong"> Thực hiện xong</label>
            <input type="button" id="xemdanhsach" value="Xem danh sách" />
            </div><!--sub_main_top-->
        
        </div><!--main_top-->
        <div id="main_bottom">
        	<div id="tabs">
  <ul style="margin-left:10px;">
    <li><a href="#tabs-1" onClick="_fuc_tabs(1)" >Điều dưỡng</a></li>
    <li><a href="#tabs-2" onClick="_fuc_tabs(2)" >Chỉ định điều trị</a></li>
  </ul>
  <div id="tabs-1">
    <div class="trai">
       <div id="tabs-1-left-top">
       	<table id="rowed3" ></table>
       </div>
       <div id="tabs-1-left-bottom">
       	<div id="tieude">Ghi chú của bác sỹ</div>
        <div id="ghichubs">
        <textarea id="noidungghichubs" name="noidungghichubs"> </textarea>
        </div>
       </div>
    </div>
     <div class="phai"> 
       <div id="tabs-1-right-top">
       	<table id="rowed4" ></table>
                <div id="ttthuoc">
        	<div id="ttthuoc_left"></div>
            <div id="ttthuoc_right">
            <a href="#" id="luudieuduong" class="ui-widget ui-state-default ui-corner-all fm-button-icon-left">Lưu<span class="ui-icon ui-icon-disk"></span></a>
            </div>
        </div>
       </div>
       <div id="tabs-1-right-bottom">
       	<table id="rowed5" ></table>
       </div>
    </div>

  </div><!-- AND tabs-1-->
  <div id="tabs-2">
    <div class="trai2">
      <table id="rowed6" ></table>
    </div>
     <div class="phai2"> 
        <div id="tabs-2-right-top">
        	<table id="rowed7" ></table>
            <div id="ttluu">
              <a href="#" id="luuchidinhdieutri" class="ui-widget ui-state-default ui-corner-all fm-button-icon-left">Lưu<span class="ui-icon ui-icon-disk"></span></a>
            </div>
        </div>
        <div id="tabs-2-right-bottom">
       		<table id="rowed8" ></table>
        </div>
    </div>
  </div><!-- AND tabs-2-->
</div>
        </div><!--main_bottom-->
    </div>

    
</body>
</html> 
<script type="text/javascript">
    jQuery(document).ready(function() {
		openform_shortcutkey();	
		window.n_tam=0;
	$("#panel_main").css("height",$(window).height()+"px");			 
	$("#panel_main").fadeIn(1000);
	load_nguoichidinh();
	load_select_tenloaikham();
		create_grid();
		create_grid2();
		create_grid3();
		create_grid4();
		create_grid5();
		create_grid6();
		resize_control();

	$("#xemtatca").change(function(event) {
			if($("#xemtatca").is(':checked')==true){
				 $('#rowed4').jqGrid('setGridParam', { grouping:true });
				//$('#rowed4').jqGrid('groupingGroupBy', value);
				$('#rowed4').trigger('reloadGrid');
			}else{
				$('#rowed4').jqGrid('setGridParam', { grouping:false });
				//$('#rowed4').jqGrid('groupingGroupBy', value);
				$('#rowed4').trigger('reloadGrid');
			}
	});
		
		$(function() {
			$( "#tabs" ).tabs();
		});
  	autocompleted_combobox('#xemtheo');
  	$( "#xemdanhsach,#luudieuduong,#luuchidinhdieutri" ).button();
	
	$("#_ntab").val(1);
	
	
	
	/*$('#tungay').datepicker( {
	dateFormat: $.cookie("ngayJqueryUi")}).datepicker("setDate", new Date());
	$('#denngay').datepicker( {
	dateFormat: $.cookie("ngayJqueryUi")}).datepicker("setDate", new Date());*/
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
           // minDate: new Date(<?php echo date("Y")?>, <?php echo date("m")?>-1, <?php echo date("d")?>),  
		  	maxDate: new Date(<?php echo date("Y")?>, <?php echo date("m")?>-1, <?php echo date("d")?>),     
            onClose: function(selectedDate) {
               // $("#from_day").datepicker("option", "maxDate", selectedDate);
              //  today = $.datepicker.formatDate($.cookie("ngayJqueryUi"), new Date(selectedDate));
              //  $("#to_day").val(today);
              //  $("#from_day").val(fromday);
               // $( "#to_day" ).datepicker( "setDate", today );
            },
            onSelect: function(dat, inst) {
              //  $("#to_day_mask").val(dat);
            }
        });

	 $.dateEntry.setDefaults({spinnerImage: ''});		 
	 //$("#tungay, #denngay").dateEntry({dateFormat: 'dmy-'});
	 $("#from_day, #to_day").dateEntry({dateFormat: $.cookie("ngayDateEntry")});
	 
	
// end ngay
	$( "#xemdanhsach" ).click(function() {
		var _n_tab=$("#_ntab").val();
		if(_n_tab==1){
			document.getElementById("xemtatca").checked=true;
			if($("#xemtatca").is(':checked')==true){
					 $("#xemtatca").click();
				}else{
			
				}
			
			window.selectedVal = "";
			window.selected = $("input[type='radio'][name='action']:checked");
			if (selected.length > 0) {
			window.selectedVal = selected.val();
			}
			window.tu=$("#from_day").val();
			window.den=$("#to_day").val();
			$("#rowed3").jqGrid('setGridParam',{datatype: 'json',url:"resource.php?module=<?= $modules ?>&view=<?= $view ?>&action=data_dsdieuduong&ngaybatdau="+tu+"&ngayketthuc="+den+"&hienmaloi=a&ac="+selectedVal}).trigger('reloadGrid');
			
			$("#daxem").val(1);
		}else{
			window.selectedVal = "";
			window.selected = $("input[type='radio'][name='action']:checked");
			if (selected.length > 0) {	
			window.selectedVal = selected.val();
			}
			window.tu=$("#from_day").val();
			window.den=$("#to_day").val();
			$("#rowed6").jqGrid('setGridParam',{datatype: 'json',url:"resource.php?module=<?= $modules ?>&view=<?= $view ?>&action=data_dschidinhdieutri&ngaybatdau="+tu+"&ngayketthuc="+den+"&ac="+selectedVal}).trigger('reloadGrid');
			$("#daxem2").val(1);
			}
	});//end xemdanhsach
	
	$('#chuathuchien').click(function(){
		if($("#_ntab").val()==1){
			if($('#daxem').val()==1){
			$("#rowed3").jqGrid('setGridParam',{datatype: 'json',url:"resource.php?module=<?= $modules ?>&view=<?= $view ?>&action=data_dsdieuduong&ngaybatdau="+tu+"&ngayketthuc="+den+"&ac="+0}).trigger('reloadGrid'); 
			}
		}else{
				if($('#daxem2').val()==1){
					window.selectedVal = "";
					window.selected = $("input[type='radio'][name='action']:checked");
					if (selected.length > 0) {
						window.selectedVal = selected.val();
					}
					$("#rowed6").jqGrid('setGridParam',{datatype: 'json',url:"resource.php?module=<?= $modules ?>&view=<?= $view ?>&action=data_dschidinhdieutri&ngaybatdau="+tu+"&ngayketthuc="+den+"&ac="+selectedVal}).trigger('reloadGrid');
				}
			}
	});
	$('#thuchienxong').click(function(){
		if($("#_ntab").val()==1){
			 if($('#daxem').val()==1){
			$("#rowed3").jqGrid('setGridParam',{datatype: 'json',url:"resource.php?module=<?= $modules ?>&view=<?= $view ?>&action=data_dsdieuduong&ngaybatdau="+tu+"&ngayketthuc="+den+"&ac="+1}).trigger('reloadGrid'); 
			}
		}else{
				if($('#daxem2').val()==1){
					window.selectedVal = "";
					window.selected = $("input[type='radio'][name='action']:checked");
					if (selected.length > 0) {
						window.selectedVal = selected.val();
					}
					$("#rowed6").jqGrid('setGridParam',{datatype: 'json',url:"resource.php?module=<?= $modules ?>&view=<?= $view ?>&action=data_dschidinhdieutri&ngaybatdau="+tu+"&ngayketthuc="+den+"&ac="+selectedVal}).trigger('reloadGrid');
				}
			}
	}); 
	
    $( "#dialog-max" ).dialog({
      resizable: false,
	  autoOpen: false,
      height:150,
	  width: 325,
      modal: true,
      buttons: {
        "OK": function() {
          $( this ).dialog( "close" );
        }
      }
    });
	$( "#dialog-confirm" ).dialog({
      resizable: false,
	  autoOpen: false,
      height:150,
	  width: 230,
      modal: true,
      buttons: {
        "YES": function() {
		 $( this ).dialog( "close" );
		
		$('#rowed4').jqGrid('delRowData',$('#nrowid').val());
		window.xoatam=1;
		jQuery("#rowed4").trigger("reloadGrid");
			var tmp1 = $("#rowed5").jqGrid('getDataIDs');
			//alert(tmp1)
			for(var i=0;i < tmp1.length;i++){
				var rowData = $("#rowed5").getRowData(tmp1[i]);
			//	if(tmp1[i]==$('#ntenthuoc').val()){
				if(rowData["TenThuoc"]==$('#ntenthuoc').val()){
					var bske=rowData["SLTheoDon"].split(".");
					var tenthuoc=rowData["TenThuoc"];	
				}
			}
		
		var tmp2 = $("#rowed4").jqGrid('getDataIDs');
		var d=0;
			if(tmp2.length>0){
				for(var i=0;i < tmp2.length;i++){
					var rowData2 = $("#rowed4").getRowData(tmp2[i]);
					if(rowData2["ID_DonThuocCT"]==$('#dtct').val()){
						var sl=$("#"+tmp2[i]+"_SoLuong").val();
						//var sl=rowData2["SoLuong"];
						//alert(sl);
						var rs=sl.split(".");
						d=d+parseInt(rs[0]);
					}
				}
			}
		
		var conlai=parseInt(bske)-parseInt(d);
		$("#ttthuoc_left").html(tenthuoc+" --> BS kê: "+bske[0]+" - Đã thực hiện: "+d+" - Còn lại: "+conlai);
	
         
        },
		"NO": function() {
          $( this ).dialog( "close" );
        }
      }
    });
	
	$( "#dialog-confirm2" ).dialog({
      resizable: false,
	  autoOpen: false,
      height:150,
	  width: 230,
      modal: true,
      buttons: {
        "YES": function() {
		 $( this ).dialog( "close" );
		$('#rowed7').jqGrid('delRowData',$('#nrowid2').val());
         
        },
		"NO": function() {
          $( this ).dialog( "close" );
        }
      }
    });
	
	$( "#dialog-error" ).dialog({
      resizable: false,
	  autoOpen: false,
      height:150,
	  width: 325,
      modal: true,
      buttons: {
        "OK": function() {
          $( this ).dialog( "close" );
        }
      }
    });
	
	document.onkeydown = function(e) {
			if (e.keyCode === 121) {
				if($("#_ntab").val()==1){
					$("#luudieuduong").click();
				}
				if($("#_ntab").val()==2){
					$("#luuchidinhdieutri").click();
				}
				return false;
			}
		};
	
	$("#luudieuduong").click(function(){
		var _del=$("#_nrowid").val();
		ids = $('#rowed4').jqGrid('getDataIDs');
		for(i=0;i<=ids.length-1;i++){
			jQuery("#rowed4").jqGrid('saveRow',ids[i]);
		}
		
	   var gridData = jQuery("#rowed4").getRowData();
	   var postData = JSON.stringify(gridData);
	   postData='{"id":'+postData+'}';
	   if(postData=="")
	   		postData="undefined";
	   postData=$.parseJSON(postData);
		 $.post('resource.php?module=<?= $modules ?>&view=<?= $view ?>&action=controller&oper=luudieuduong&del='+_del,postData).done(function(data){
			selectedRowId = $("#rowed3").jqGrid ('getGridParam', 'selrow')
			var rowData = $("#rowed3").getRowData(selectedRowId); 
			var id_kham = rowData['ID_Kham'];
			$("#rowed4").jqGrid('setGridParam',{datatype: 'json',url:"resource.php?module=<?= $modules ?>&view=<?= $view ?>&action=data_thuchientiem&id_kham="+id_kham}).trigger('reloadGrid');
					tooltip_message("Lưu dữ liệu thành công");
		  })//$.post
		 var _id =$("#rowed3").jqGrid ('getGridParam', 'selrow');
		 var rowData = $("#rowed3").getRowData(_id); 
		 var id_donthuoc = rowData['ID_DonThuoc'];
		  $.post('resource.php?module=<?= $modules ?>&view=<?= $view ?>&action=controller&oper=luughichu', { iddonthuoc:id_donthuoc, ghichu:$("#noidungghichubs").val() })
		  .done(function( data ) {
		  });
		})//$("#luudieuduong")
		
	$("#luuchidinhdieutri").click(function(){
		var _del=$("#_nrowid2").val();
		ids = $('#rowed7').jqGrid('getDataIDs');
		for(i=0;i<=ids.length-1;i++){
			jQuery("#rowed7").jqGrid('saveRow',ids[i]);
		}
		
	   var gridData = jQuery("#rowed7").getRowData();
	   var postData = JSON.stringify(gridData);
	   postData='{"id":'+postData+'}';
	   if(postData=="")
	   		postData="undefined";
	   postData=$.parseJSON(postData);
		 $.post('resource.php?module=<?= $modules ?>&view=<?= $view ?>&action=controller&oper=luuchidinhdieutri&hienmaloi=a&del='+_del,postData).done(function(data){
			selectedRowId = $("#rowed6").jqGrid ('getGridParam', 'selrow');
			var rowData = $("#rowed6").getRowData(selectedRowId); 
			window.selectedVal = "";
			window.selected = $("input[type='radio'][name='action']:checked");
			if (selected.length > 0) {
				window.selectedVal = selected.val();
			}
			$("#rowed7").jqGrid('setGridParam',{datatype: 'json',url:"resource.php?module=<?= $modules ?>&view=<?= $view ?>&action=data_ds_chidinhdieutri_ghichu&ngaybatdau="+tu+"&ngayketthuc="+den+"&mabenhnhan="+selectedRowId+"&ac="+selectedVal}).trigger('reloadGrid');
					tooltip_message("Lưu dữ liệu thành công");
			//alert(selectedRowId);
		  })//$.post
		})//$("#luudieuduong")
	
	
	
  	phanquyen();
	})//and ready
$(window).resize(function() {		 
	$("#panel_main").css("height",$(window).height()+"px");			 
	$("#panel_main").fadeIn(1000); 
	resize_control();	 
});
	function create_grid() {
      mydata=[];
        $("#rowed3").jqGrid({
            data: mydata,
            datatype: "local",
            colNames: ['Mã BN','Họ tên', 'Năm sinh', 'Giới', 'Bác sỹ', 'Ngày bắt đầu', 'Ngày thuốc', 'Xong', 'ID đơn thuốc','ID_Kham'],
            colModel: [
                {name: 'MaBenhNhan', index: 'MaBenhNhan', search: true, width: "10%", editable: false, align: 'left', hidden: false,classes:'r3_mabenhnhan'},
				{name: 'HoTen', index: 'HoTen', search: true, width: "20%", editable: false, align: 'left', hidden: false},
				{name: 'NamSinh', index: 'NamSinh', search: true, width: "10%", editable: false, align: 'center', hidden: false},
				{name: 'Gioi', index: 'Gioi', search: true, width: "10%", editable: false, align: 'center', hidden: false},
				{name: 'BacSy', index: 'BacSy', search: true, width: "15%", editable: false, align: 'center', hidden: false},
				{name: 'NgayBatDau', index: 'NgayBatDau', search: true, width: "15%", editable: false, align: 'center', hidden: false},
				{name: 'NgayThuoc', index: 'NgayThuoc', search: true, width: "10%", editable: false, align: 'center', hidden: false},
				{name:'Xong',index:'Xong', width:"15%",stype: 'select',searchoptions: { sopt: ['eq', 'ne'],value:':;1:Có;0:Không'}, editable:true,align:'center',hidden:false,edittype:"checkbox",formatter:"checkbox",formoptions:{ rowpos:13, colpos:1}
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
                rowId= $('#rowed3').getCell(tam, 'id');
			    window.selectedVal = "";
				window.selected = $("input[type='radio'][name='action']:checked");
				if (selected.length > 0) {
					window.selectedVal = selected.val();
				}
				if(tthai==0)
					var nval=1;
				else
					var nval=0;
				var rowData = jQuery("#rowed3").getRowData(tam); 
			   var iddt=rowData["ID_DonThuoc"];
			$.get( "resource.php?module=<?= $modules ?>&view=<?= $view ?>&action=controller&oper=dathuchientiemtruyen&iddonthuoc="+iddt+"&nval="+tthai, function( data ) {
				var rs2=data.split("#");
				if(rs2[1]==7){
				$("#rowed3").jqGrid('setGridParam',{datatype: 'json',url:"resource.php?module=<?= $modules ?>&view=<?= $view ?>&action=data_dsdieuduong&ngaybatdau="+tu+"&ngayketthuc="+den+"&ac="+selectedVal}).trigger('reloadGrid');
				tooltip_message("Cập nhật thành công");
				}
				else{
				tooltip_message("Thất bại");
				}
			
			});

                 } }]}}, 
				{name: 'ID_DonThuoc', index: 'ID_DonThuoc', search: false, width: "10%", editable: false, align: 'center', hidden: true},
				{name: 'ID_Kham', index: 'ID_Kham', search: false, width: "10%", editable: false, align: 'center', hidden: true},
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
				xuongdong(formid);
				lendong(formid);
			},
            onSelectRow: function(id) {
				$("#ttthuoc_left").html("");
				var rowData = jQuery(this).getRowData(id); 
				var ID_DonThuoc = rowData['ID_DonThuoc'];
				var id_kham = rowData['ID_Kham'];
            	$("#rowed5").jqGrid('setGridParam',{datatype: 'json',url:"resource.php?module=<?= $modules ?>&view=<?= $view ?>&action=data_donthuoc&id_donthuoc="+ID_DonThuoc}).trigger('reloadGrid');
				
				$("#rowed4").jqGrid('setGridParam',{datatype: 'json',url:"resource.php?module=<?= $modules ?>&view=<?= $view ?>&action=data_thuchientiem&id_kham="+id_kham}).trigger('reloadGrid');
				$.get( "resource.php?module=<?= $modules ?>&view=<?= $view ?>&action=data_ghichuchodieuduong&id_donthuoc="+ID_DonThuoc, function( data ) {
				  $( "#noidungghichubs" ).val( data );
				});
				if($("#xemtatca").is(':checked')==true){
				 $("#xemtatca").click();
				}
            },
            ondblClickRow: function(rowId, rowIndex, columnIndex) {
            
            },
            onselect: function(rowId, rowIndex, columnIndex) {
				 
              
            },
        
            loadComplete: function(data) {
			ids = $('#rowed3').jqGrid('getDataIDs');				 
			$("#rowed3").jqGrid("setSelection",ids[0], true);
			$("#"+ids).focus();
			
			if(ids.length<1){
				ids2 = $('#rowed4').jqGrid('getDataIDs');
				if(ids2.length>0){
					for(var i=0;i<ids2.length;i++){
						$('#rowed4').jqGrid('delRowData',ids2[i]);
						}
				}
				ids3 = $('#rowed5').jqGrid('getDataIDs');
				if(ids3.length>0){
					for(var i=0;i<ids3.length;i++){
						$('#rowed5').jqGrid('delRowData',ids3[i]);
						}
				}
			}
			
			grid_filter_enter("#rowed3");
			
			if(window.n_tam==0){
				checkbox_search('gs_Xong','#rowed3');
				}         
			window.n_tam++;
			
			for(var i=0;i < ids.length;i++){ 
				 $('#rowed3').editRow(ids[i], true);
			}
			 
			},
            //caption: "&nbsp;"
        });
		$("#rowed3").jqGrid('filterToolbar',{searchOperators : false,searchOnEnter:false,defaultSearch:"cn"});
		$("#rowed3").jqGrid('bindKeys', {});
    }
 
 
 function create_grid2() {
         mydata=[];
        $("#rowed4").jqGrid({
            data: mydata,
            datatype: "local",
            colNames: ['Xóa','Thuốc','Giờ thực hiện','Ngày thực hiện','SL','Đường dùng','Ghi chú','Người thực hiện', 'ID_Thuoc', 'ID_DuongDung','DaLuu','Sua','ID_Kham','ID_Ifusion'],
            colModel: [
                {name: 'Xoa', index: 'Xoa', width: "5%", editable: false, align: 'left', hidden: false},
				{name: 'Thuoc', index: 'Thuoc', width: "25%", editable: false, align: 'left', hidden: false},
                {name: 'GioThucHien', index: 'GioThucHien', search: false, width: "10%", editable: false, align: 'center', hidden: false},
				{name: 'NgayThucHien', index: 'NgayThucHien', width: "10%", editable: false, align: 'center', hidden: false},
				{name: 'SoLuong', index: 'SoLuong', width: "5%", editable: true, align: 'center', hidden: false, classes:'nsoluong',editoptions: { dataEvents: [{ type: 'click', fn: function(e) {
					var row = $(e.target).closest('tr.jqgrow');
					var rowId = row.attr('id');
					var soluong=$('#'+rowId+'_SoLuong').val();
					var tam=soluong.split(".");
					$('#'+rowId+'_SoLuong').val(tam[0]);
					//alert(tam[]);
				
				} },{ type: 'blur', fn: function(e) {
					var row = $(e.target).closest('tr.jqgrow');
					var rowId = row.attr('id');
					var soluong=$('#'+rowId+'_SoLuong').val();
					var tam=soluong.split(".");
					//alert(tam[1]);
					if(tam[1]!=0){
						$('#'+rowId+'_SoLuong').val(soluong+".0");
					}
				
				} },{ type: 'change', fn: function(e) {
					var row = $(e.target).closest('tr.jqgrow');
					var rowId = row.attr('id');
					var soluong=$('#'+rowId+'_SoLuong').val();
					var tmp1 = $("#rowed5").jqGrid('getDataIDs');
					$("#rowed4").jqGrid('setCell',rowId,'Sua', '2');
					var rowData3 = $("#rowed4").getRowData(rowId);
					
					for(var i=0;i < tmp1.length;i++){
						var rowData = $("#rowed5").getRowData(tmp1[i]);
						if(rowData["TenThuoc"]==rowData3["Thuoc"]){
							var bske=rowData["SLTheoDon"].split(".");
							var tenthuoc=rowData["TenThuoc"];	
						}
					}
					//--
					var tmp2 = $("#rowed4").jqGrid('getDataIDs');
					var d=0;
						if(tmp2.length>0){
							for(var i=0;i < tmp2.length;i++){
								var rowData2 = $("#rowed4").getRowData(tmp2[i]);
								
								if(rowData2["Thuoc"]==rowData3["Thuoc"]){
									var sl=$("#"+tmp2[i]+"_SoLuong").val();
									//var sl=rowData2["SoLuong"];
									//alert(sl);
									var rs=sl.split(".");
									d=d+parseInt(rs[0]);
									
								}
							}
						}
						if(parseInt(d)>parseInt(bske))
						{
							$( "#dialog-error" ).dialog('open');
							$("#"+rowId+"_SoLuong").val(1);
							var tmp2 = $("#rowed4").jqGrid('getDataIDs');
							var d=0;
								if(tmp2.length>0){
									for(var i=0;i < tmp2.length;i++){
										var rowData2 = $("#rowed4").getRowData(tmp2[i]);
										
										if(rowData2["Thuoc"]==rowData3["Thuoc"]){
											var sl=$("#"+tmp2[i]+"_SoLuong").val();
											//var sl=rowData2["SoLuong"];
											//alert(sl);
											var rs=sl.split(".");
											d=d+parseInt(rs[0]);
											
										}
									}
								}
						}
						
					var conlai=parseInt(bske)-parseInt(d);
					$("#ttthuoc_left").html(tenthuoc+" --> BS kê: "+bske[0]+" - Đã thực hiện: "+d+" - Còn lại: "+conlai);
				//--
				} },
				
				]},},
				{name: 'DuongDung', index: 'DuongDung', width: "20%", editable: false, align: 'left', hidden: false},
				{name: 'GhiChu', index: 'GhiChu', width: "15%", editable: true, align: 'left', hidden: false, classes:'nghichu',editoptions: { dataEvents: [{ type: 'change', fn: function(e) {
					var row = $(e.target).closest('tr.jqgrow');
					var rowId = row.attr('id');
					$("#rowed4").jqGrid('setCell',rowId,'Sua', '2');
				}}]},
				},
				{name: 'NguoiThucHien', index: 'NguoiThucHien', width: "10%", editable: false, align: 'center', hidden: false,edittype:"select",formatter:'select',editoptions:{value: nguoichidinh}},
				{name: 'ID_Thuoc', index: 'ID_Thuoc', width: "10%", editable: false, align: 'left', hidden: true},
				{name: 'ID_DuongDung', index: 'ID_DuongDung', width: "10%", editable: false, align: 'left', hidden: true},
				{name: 'DaLuu', index: 'DaLuu', width: "10%", editable: false, align: 'left', hidden: true},
				{name: 'Sua', index: 'Sua', width: "10%", editable: false, align: 'left', hidden: true},
				{name: 'ID_Kham', index: 'ID_Kham', width: "10%", editable: false, align: 'left', hidden: true},
				{name: 'ID_Ifusion', index: 'ID_Ifusion', width: "10%", editable: false, align: 'left', hidden: true},
            ],
           loadonce: true,
            scroll: 1,
            modal: true,
            rowNum: 100,
            rowList: [30, 50, 70],
            pager: '#prowed4',
            //sortname: 'NgayGioKetThuc',
            height: 100,
            width: 100,
            viewrecords: true,
            ignoreCase: true,
            shrinkToFit: true,
			grouping:true, 
			groupingView : { 
			groupField : ['NgayThucHien'],
			groupText : ['<b>{0}</b>'],
			groupDataSorted : true 
			},
			afterShowForm : function (formid) {
				xuongdong(formid);
				lendong(formid);
			},
            onSelectRow: function(id) {
             
            },
            ondblClickRow: function(rowId, rowIndex, columnIndex) {
            
            },
            onselect: function(rowId, rowIndex, columnIndex) {
				 
              
            },
        
            loadComplete: function(data) {
				if(window.xoatam!=1)
					$("#_nrowid").val("");
				delete window.xoatam;
				var tmp3= $("#rowed4").jqGrid('getDataIDs'); 
					for(var i=0;i < tmp3.length;i++){ 
						 $('#rowed4').editRow(tmp3[i], true);
							//console.log(tmp3[i]);
							var rowData3 = $("#rowed4").getRowData(tmp3[i]);	
							xoa = "<input class=' custom_button_n' style='height:22px;width:50px; box-shadow:none!important; cursor:pointer;' type='button' value='Xóa' onclick=\"n_xoa('"+tmp3[i]+"','"+rowData3["Thuoc"]+"');\" />"; 
							$("#rowed4").jqGrid('setRowData',tmp3[i],{Xoa:xoa});
							
						if(i+1==tmp3.length){
							var _id =$("#rowed3").jqGrid ('getGridParam', 'selrow');
							$("#"+_id).focus();
							}
							
					}
			
			
			},
            caption: "<input type='checkbox' id='xemtatca'>Nhóm theo ngày thực hiện"
        });
        $("#rowed4").jqGrid('navGrid', "#prowed4", {add: false, edit: false, del: false, search: false, refresh: true, closeAfterEdit: true, clearAfterAdd: true, navkeys: [true, 38, 40], closeOnEscape: true});
	$("#rowed4").jqGrid('bindKeys', {});
    }
	
		
	function create_grid3() {
        mydata=[];
        $("#rowed5").jqGrid({
            data: mydata,
            datatype: "local",
            colNames: ['Tên thuốc','Số lượng theo đơn', 'Số lượng cấp phát', 'Đơn vị tính', 'Cách dùng', 'Ghi chú', 'Đường dùng', 'ID_Thuoc', 'ID_DuongDung','ID_Kham'],
            colModel: [
                {name: 'TenThuoc', index: 'TenThuoc', width: "25%", editable: false, align: 'left', hidden: false,classes:'r5_tenthuoc'},
				{name: 'SLTheoDon', index: 'SLTheoDon', width: "10%", editable: false, align: 'center', hidden: false},
                {name: 'SLCapPhat', index: 'SLCapPhat', search: false, width: "10%", editable: false, align: 'center', hidden: false},
				{name: 'DonViTinh', index: 'DonViTinh', width: "10%", editable: false, align: 'center', hidden: false},
				{name: 'CachDung', index: 'CachDung', width: "30%", editable: false, align: 'left', hidden: false},
				{name: 'GhiChu', index: 'GhiChu', width: "15%", editable: false, align: 'left', hidden: false},
				{name: 'DuongDung', index: 'DuongDung', width: "15%", editable: false, align: 'left', hidden: true},
				{name: 'ID_Thuoc', index: 'ID_Thuoc', width: "10%", editable: false, align: 'left', hidden: true},
				{name: 'ID_DuongDung', index: 'ID_DuongDung', width: "10%", editable: false, align: 'left', hidden: true},
				{name: 'ID_Kham', index: 'ID_Kham', width: "10%", editable: false, align: 'left', hidden: true},
            ],
           loadonce: false,
            scroll: 1,
            modal: true,
            rowNum: 100,
            rowList: [30, 50, 70],
            pager: '#prowed5',
            //sortname: 'NgayGioKetThuc',
            height: 100,
            width: 100,
            viewrecords: true,
            ignoreCase: true,
            shrinkToFit: true,
			 
			afterShowForm : function (formid) {
				xuongdong(formid);
				lendong(formid);
			},
            onSelectRow: function(id) {
            // var tmp1 = $("#rowed5").jqGrid('getDataIDs');
			 var rowData = $("#rowed5").getRowData(id);
			 var bske=rowData["SLTheoDon"].split(".");
			 
			 var tmp1 = $("#rowed4").jqGrid('getDataIDs');
			 var d=0;
			 if(tmp1.length>0){
				 for(var i=0;i < tmp1.length;i++){
					var rowData2 = $("#rowed4").getRowData(tmp1[i]);
					if(rowData2["Thuoc"]==rowData["TenThuoc"]){
						var sl=$("#"+tmp1[i]+"_SoLuong").val();
						//var sl=rowData2["SoLuong"];
						//alert(sl);
						var rs=sl.split(".");
						d=d+parseInt(rs[0]);
						}
				 }
			 }
			 var conlai=parseInt(bske)-parseInt(d);
			 $("#ttthuoc_left").html(rowData["TenThuoc"]+" --> BS kê: "+bske[0]+" - Đã thực hiện: "+d+" - Còn lại: "+conlai);
/*			 for(var i=0;i < tmp1.length;i++){
				var rowData = $("#rowed5").getRowData(tmp1[i]);
				if()
				$("#ttthuoc_left").val(rowData["TenThuoc"]);	
			 }*/
            },
            ondblClickRow: function(rowId, rowIndex, columnIndex) {
				var rowData = $("#rowed5").getRowData(rowId);
				var tmp1= $("#rowed4").jqGrid('getDataIDs'); 
				var bske=rowData["SLTheoDon"].split("."); d2=0;
				var d2=0;
				 if(tmp1.length>0){
					 for(var i=0;i < tmp1.length;i++){
						var rowData3 = $("#rowed4").getRowData(tmp1[i]);
						if(rowData3["Thuoc"]==rowData["TenThuoc"]){
							var sl=$("#"+tmp1[i]+"_SoLuong").val();
								//var sl=rowData2["SoLuong"];
								//alert(sl);
								var rs=sl.split(".");
								d2=d2+parseInt(rs[0]);
							}
					 }
				 }
				
				parameters =
				{
					initdata : {Xoa:"Xóa",Thuoc:rowData["TenThuoc"],SoLuong:"1.0",ID_DonThuocCT:rowId,GioThucHien:get_time(),NgayThucHien:get_date(),NguoiThucHien:<?=$_SESSION["user"]["id_user"]?>,DuongDung:rowData["DuongDung"],ID_Thuoc:rowData["ID_Thuoc"],ID_DuongDung:rowData["ID_DuongDung"],ID_Kham:rowData["ID_Kham"]},
					position :"last",
					useDefValues : false,
					useFormatter : false,
					addRowParams : {extraparam:{}}
				}
				
				var cl=parseInt(bske)-parseInt(d2);
				if(cl>0){
					jQuery("#rowed4").jqGrid('addRow',parameters);
					jQuery("#rowed4").trigger("reloadGrid");
/*					jQuery("#rowed4_4").jqGrid('addRow',parameters);
					jQuery("#rowed4_4").trigger("reloadGrid");*/
				}else{
					//alert("Số thuốc không được vượt quá thuốc bác sỹ kê!");
					$( "#dialog-max" ).dialog('open');
					}
				
				//var tmp1 = $("#rowed4").jqGrid('getDataIDs');
				var d=0;
				var tmp3= $("#rowed4").jqGrid('getDataIDs'); 
					for(var i=0;i < tmp3.length;i++){ 
							//console.log(tmp3[i]);
							var rowData3 = $("#rowed4").getRowData(tmp3[i]);	
							
				
							xoa = "<input class=' custom_button_n' style='height:22px;width:50px; box-shadow:none!important; cursor:pointer;' type='button' value='Xóa' onclick=\"n_xoa('"+tmp3[i]+"','"+rowData3["Thuoc"]+"');\" />"; 
							$("#rowed4").jqGrid('setRowData',tmp3[i],{Xoa:xoa});
							
							if(rowData3["Thuoc"]==rowData["TenThuoc"]){
								var sl=$("#"+tmp3[i]+"_SoLuong").val();
								//var sl=rowData2["SoLuong"];
								//alert(sl);
								var rs=sl.split(".");
								d=d+parseInt(rs[0]);
							}
					}
				var conlai=parseInt(bske)-parseInt(d);
				$("#ttthuoc_left").html(rowData["TenThuoc"]+" --> BS kê: "+bske[0]+" - Đã thực hiện: "+d+" - Còn lại: "+conlai);

            },
            onselect: function(rowId, rowIndex, columnIndex) {
				 
              
            },
        
            loadComplete: function(data) {

			 
			},
            caption: "Đơn thuốc"
        });
        $("#rowed5").jqGrid('navGrid', "#prowed5", {add: false, edit: false, del: false, search: false, refresh: true, closeAfterEdit: true, clearAfterAdd: true, navkeys: [true, 38, 40], closeOnEscape: true});
	$("#rowed5").jqGrid('bindKeys', {});
    }

function create_grid4() {
        mydata=[];
        $("#rowed6").jqGrid({
            data: mydata,
            datatype: "local",
            colNames: ['Mã BN','Tên bệnh nhân', 'Năm sinh', 'Giới'],
            colModel: [
                {name: 'MaBenhNhan', index: 'MaBenhNhan', search: true, width: "10%", editable: false, align: 'left', hidden: false,classes:'r6_mabenhnhan'},
				{name: 'HoTen', index: 'HoTen', search: true, width: "25%", editable: false, align: 'left', hidden: false},
                {name: 'NamSinh', index: 'NamSinh', search: true, width: "10%", editable: false, align: 'center', hidden: false},
				{name: 'Gioi', index: 'Gioi', search: true, width: "10%", editable: false, align: 'center', hidden: false},
			
            ],
           loadonce: true,
            scroll: 1,
            modal: true,
            rowNum: 100,
            rowList: [30, 50, 70],
            pager: '#prowed6',
            //sortname: 'NgayGioKetThuc',
            height: 100,
            width: 100,
            viewrecords: true,
            ignoreCase: true,
            shrinkToFit: true,

			afterShowForm : function (formid) {
				xuongdong(formid);
				lendong(formid);
			},
            onSelectRow: function(id) {
			window.selectedVal = "";
			window.selected = $("input[type='radio'][name='action']:checked");
			if (selected.length > 0) {
				window.selectedVal = selected.val();
			}
             $("#rowed8").jqGrid('setGridParam',{datatype: 'json',url:"resource.php?module=<?= $modules ?>&view=<?= $view ?>&action=data_dsloaikham&ngaybatdau="+tu+"&ngayketthuc="+den+"&mabenhnhan="+id+"&ac="+selectedVal}).trigger('reloadGrid');
			 $("#rowed7").jqGrid('setGridParam',{datatype: 'json',url:"resource.php?module=<?= $modules ?>&view=<?= $view ?>&action=data_ds_chidinhdieutri_ghichu&ngaybatdau="+tu+"&ngayketthuc="+den+"&mabenhnhan="+id+"&ac="+selectedVal}).trigger('reloadGrid');
            },
            ondblClickRow: function(rowId, rowIndex, columnIndex) {
            
            },
            onselect: function(rowId, rowIndex, columnIndex) {
				 
              
            },
        
            loadComplete: function(data) {
			ids = $('#rowed6').jqGrid('getDataIDs');				 
			$("#rowed6").jqGrid("setSelection",ids[0], true);
			$("#"+ids).focus();
			if(ids.length<1){
				ids2 = $('#rowed7').jqGrid('getDataIDs');
				if(ids2.length>0){
					for(var i=0;i<ids2.length;i++){
						$('#rowed7').jqGrid('delRowData',ids2[i]);
						}
				}
				ids3 = $('#rowed8').jqGrid('getDataIDs');
				if(ids3.length>0){
					for(var i=0;i<ids3.length;i++){
						$('#rowed8').jqGrid('delRowData',ids3[i]);
						}
				}
			}
			 grid_filter_enter("#rowed6");
			},
            //caption: "&nbsp;"
        });
        $("#rowed6").jqGrid('filterToolbar',{searchOperators : false,searchOnEnter:false,defaultSearch:"cn"});
		$("#rowed6").jqGrid('bindKeys', {});
    }
	function create_grid5() {
       mydata=[];
        $("#rowed7").jqGrid({
            data: mydata,
            datatype: "local",
            colNames: ['Xóa','Loại khám','Ngày C.Định','Giờ T.Hiện', 'Ngày T.Hiện', 'Ghi chú', 'Người thực hiện','Lưu','Sửa','ID Điều trị phối hợp','ID_Ifusion','ID_Kham'],
            colModel: [
                {name: 'Xoa', index: 'Xoa', width: "10%", editable: false, align: 'left', hidden: false},
				{name: 'LoaiKham', index: 'LoaiKham', width: "60%", editable: false, align: 'left', hidden: false,edittype:"select",formatter:'select',editoptions:{value: tenloaikham},classes:'r8_loaikham'},
				{name: 'NgayChiDinh', index: 'NgayChiDinh', width: "20%", editable: false, align: 'center', hidden: false},
				{name: 'GioThucHien', index: 'Gio', width: "17%", editable: false, align: 'center', hidden: false},
				{name: 'NgayThucHien', index: 'Ngay', width: "17%", editable: false, align: 'center', hidden: false},
				{name: 'GhiChu', index: 'GhiChu', width: "40%", editable: true, align: 'center', hidden: false,classes:'nghichu',editoptions: { dataEvents: [{ type: 'change', fn: function(e) {
					var row = $(e.target).closest('tr.jqgrow');
					var rowId = row.attr('id');
					$("#rowed7").jqGrid('setCell',rowId,'Sua', '2');
				}}]},
				},
				{name: 'NguoiThucHien', index: 'NguoiThucHien', width: "25%", editable: false, align: 'center', hidden: false,edittype:"select",formatter:'select',editoptions:{value: nguoichidinh}},
				{name: 'DaLuu', index: 'DaLuu', width: "10%", editable: false, align: 'left', hidden: true},
				{name: 'Sua', index: 'Sua', width: "10%", editable: false, align: 'left', hidden: true},
				{name: 'ID_DieuTriPhoiHop', index: 'ID_DieuTriPhoiHop', width: "10%", editable: false, align: 'left', hidden: true},
				{name: 'ID_Ifusion', index: 'ID_Ifusion', width: "10%", editable: false, align: 'left', hidden: true},
				{name: 'ID_Kham', index: 'ID_Kham', width: "10%", editable: false, align: 'left', hidden: true},
			
            ],
           loadonce: false,
            scroll: 1,
            modal: true,
            rowNum: 100,
            rowList: [30, 50, 70],
            pager: '#prowed7',
            //sortname: 'NgayGioKetThuc',
            height: 100,
            width: 100,
            viewrecords: true,
            ignoreCase: true,
            shrinkToFit: true,

			afterShowForm : function (formid) {
				xuongdong(formid);
				lendong(formid);
			},
            onSelectRow: function(id) {
             
            },
            ondblClickRow: function(rowId, rowIndex, columnIndex) {
            
            },
            onselect: function(rowId, rowIndex, columnIndex) {
				 
              
            },
        
            loadComplete: function(data) {
		
			$("#_nrowid2").val("");
			var tmp1= $("#rowed7").jqGrid('getDataIDs'); 
					for(var i=0;i < tmp1.length;i++){ 
						 $('#rowed7').editRow(tmp1[i], true);
							var rowData3 = $("#rowed7").getRowData(tmp1[i]);	
							xoa = "<input class=' custom_button_n' style='height:22px;width:50px; box-shadow:none!important; cursor:pointer;' type='button' value='Xóa' onclick=\"n_xoa2('"+tmp1[i]+"');\" />"; 
							$("#rowed7").jqGrid('setRowData',tmp1[i],{Xoa:xoa});
							if(i+1==tmp1.length){
								var _id =$("#rowed6").jqGrid ('getGridParam', 'selrow');
								$("#"+_id).focus();
								}
		
					}
			 
			},
            //caption: "&nbsp;"
        });
        $("#rowed7").jqGrid('navGrid', "#prowed7", {add: false, edit: false, del: false, search: false, refresh: true, closeAfterEdit: true, clearAfterAdd: true, navkeys: [true, 38, 40], closeOnEscape: true});
	$("#rowed7").jqGrid('bindKeys', {});
    }
	function create_grid6() {
        mydata=[];
        $("#rowed8").jqGrid({
            data: mydata,
            datatype: "local",
            colNames: ['Loại khám','Ngày chỉ định', 'SL/Ngày', 'Số ngày','Xong','ID khám'],
            colModel: [
                {name: 'LoaiKham', index: 'LoaiKham', width: "60%", editable: false, align: 'left', hidden: false,edittype:"select",formatter:'select',editoptions:{value: tenloaikham},classes:'r8_loaikham'},
				{name: 'NgayChiDinh', index: 'NgayChiDinh', width: "20%", editable: false, align: 'center', hidden: false},
                {name: 'SoLuongMotNgay', index: 'SoLuongMotNgay', search: false, width: "15%", editable: false, align: 'center', hidden: false},
				{name: 'SoNgay', index: 'SoNgay', width: "15%", editable: false, align: 'center', hidden: false},
				{name:'Xong',index:'Xong', width:"15%", editable:true,stype: 'select',searchoptions: { sopt: ['eq', 'ne'],value:':;1:Có;0:Không'}, editable:true,align:'center',hidden:false,edittype:"checkbox",formatter:"checkbox",formoptions:{ rowpos:13, colpos:1}
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
                window.selectedVal = "";
				window.selected = $("input[type='radio'][name='action']:checked");
				if (selected.length > 0) {
					window.selectedVal = selected.val();
				}
				if(tthai==0)
					var nval=1;
				else
					var nval=0;
				var rowData = jQuery("#rowed3").getRowData(tam); 
				var iddt=rowData["ID_DonThuoc"];
				$.get( "resource.php?module=<?= $modules ?>&view=<?= $view ?>&action=controller&oper=dtph_dathuchien&iddtph="+tam+"&nval="+tthai, function( data ) {
					var rs2=data.split("#");
					if(rs2[1]==7){
					var _id =$("#rowed6").jqGrid ('getGridParam', 'selrow');
					 $("#rowed8").jqGrid('setGridParam',{datatype: 'json',url:"resource.php?module=<?= $modules ?>&view=<?= $view ?>&action=data_dsloaikham&ngaybatdau="+tu+"&ngayketthuc="+den+"&mabenhnhan="+_id+"&ac="+selectedVal}).trigger('reloadGrid');
					tooltip_message("Cập nhật thành công");
					
					$("#rowed6").jqGrid('setGridParam',{datatype: 'json',url:"resource.php?module=<?= $modules ?>&view=<?= $view ?>&action=data_dschidinhdieutri&ngaybatdau="+tu+"&ngayketthuc="+den+"&ac="+selectedVal}).trigger('reloadGrid');
					}
					else{
					tooltip_message("Thất bại");
					}
				
				});

                 } }]}}, 
				 {name: 'ID_Kham', index: 'ID_Kham', width: "20%", editable: false, align: 'center', hidden: true},
			
            ],
           loadonce: false,
            scroll: 1,
            modal: true,
            rowNum: 100,
            rowList: [30, 50, 70],
            pager: '#prowed8',
            //sortname: 'NgayGioKetThuc',
            height: 100,
            width: 100,
            viewrecords: true,
            ignoreCase: true,
            shrinkToFit: true,

			afterShowForm : function (formid) {
				xuongdong(formid);
				lendong(formid);
			},
            onSelectRow: function(id) {
             
            },
            ondblClickRow: function(rowId, rowIndex, columnIndex) {
				
				var rowData = $("#rowed8").getRowData(rowId);
				var _tmp4= $("#rowed7").jqGrid('getDataIDs');
				parameters =
				{
					initdata : {Xoa:"Xóa",LoaiKham:rowData["LoaiKham"],NgayChiDinh:rowData["NgayChiDinh"],GioThucHien:get_time(),NgayThucHien:get_date(),NguoiThucHien:<?=$_SESSION["user"]["id_user"]?>,DuongDung:rowData["DuongDung"],ID_DieuTriPhoiHop:rowId,ID_Kham:rowData["ID_Kham"]},
					position :"last",
					useDefValues : false,
					useFormatter : false,
					addRowParams : {extraparam:{}}
				}
				var _d=0;
				for(var i=0;i<_tmp4.length;i++){
					var rowData2 = $("#rowed7").getRowData(_tmp4[i]);
					if(rowData["LoaiKham"]==rowData2["LoaiKham"]){
						_d=1;
						return true;
						}
				}
					if(_d==0){
						jQuery("#rowed7").jqGrid('addRow',parameters);
						//jQuery("#rowed7").trigger("reloadGrid");
					}
					
				
				var d=0;
				var tmp3= $("#rowed7").jqGrid('getDataIDs'); 
					for(var i=0;i < tmp3.length;i++){ 
							//console.log(tmp3[i]);
							var rowData3 = $("#rowed7").getRowData(tmp3[i]);	
							
				
							xoa = "<input class=' custom_button_n' style='height:22px;width:50px; box-shadow:none!important; cursor:pointer;' type='button' value='Xóa' onclick=\"n_xoa2('"+tmp3[i]+"');\" />"; 
							$("#rowed7").jqGrid('setRowData',tmp3[i],{Xoa:xoa});
					}

            
            },
            onselect: function(rowId, rowIndex, columnIndex) {
				 
              
            },
            loadComplete: function(data) {
			var tmp1= $("#rowed8").jqGrid('getDataIDs'); 
			for(var i=0;i< tmp1.length;i++){ 
			//alert(tmp1[i])
				$('#rowed8').editRow(tmp1[i], true);
			}
			 
			},
            //caption: "&nbsp;"
        });
        $("#rowed8").jqGrid('navGrid', "#prowed8", {add: false, edit: false, del: false, search: false, refresh: true, closeAfterEdit: true, clearAfterAdd: true, navkeys: [true, 38, 40], closeOnEscape: true});
	$("#rowed8").jqGrid('bindKeys', {});
    }
function resize_control(){
	 //alert($("#panel_main").height());
	//$("#panel_main").css("width",$(window).width()+"px");
	$("#main_top,#main_bottom").css("width",$("#panel_main").width()-10+"px");
	$("#main_bottom").css("height",$(window).height()-$("#main_top").height()+"px");
	$("#tabs-1,#tabs-2").css("height",$("#main_bottom").height()-80+"px");
	//tabs-1-top tabs-1-bottom  ui-state-default
	$(".trai,.phai").css("height",$("#tabs-1").height()/2+"px");
	$(".trai").css("width",$("#tabs-1").width()/2+20+"px");
	$(".phai").css("width",$("#tabs-1").width()/2-20+"px");
	
	$(".trai2,.phai2").css("height",$("#tabs-2").height()/2+"px");
	$(".trai2").css("width",$("#tabs-2").width()/2+20+"px");
	$(".phai2").css("width",$("#tabs-2").width()/2-20+"px");
	
	$("#rowed3 ").setGridWidth($("#tabs-1").width()/2+10);
	/*$("#rowed3").setGridHeight($("#panel_main").height()*54/100-70);
	$("#tabs-1-left-bottom").css("width",$("#tabs-1").width()/2+10+"px");
	$("#tabs-1-left-bottom").css("height",$("#panel_main").height()*50/100-108+"px");*/
	$("#rowed3").setGridHeight($("#panel_main").height()*74/100-70);
	$("#tabs-1-left-bottom").css("width",$("#tabs-1").width()/2+10+"px");
	$("#tabs-1-left-bottom").css("height",$("#panel_main").height()*30/100-108+"px");
	
	$("#tabs-1-right-top").css("height",$("#panel_main").height()*58/100-97+"px");
	$("#rowed4 ").setGridWidth($("#tabs-1").width()/2-30);
	$("#rowed4").setGridHeight($("#tabs-1-right-top").height()-50);
	$("#rowed4_4 ").setGridWidth($("#tabs-1").width()/2-30);
	$("#rowed4_4").setGridHeight($("#tabs-1-right-top").height()-50);
	$("#ttthuoc ").css("width",$("#tabs-1").width()/2-31);
	
	$("#tabs-1-right-bottom").css("height",$("#panel_main").height()*42/100-110+"px");
	$("#rowed5 ").setGridWidth($("#tabs-1").width()/2-30);
	$("#rowed5").setGridHeight($("#tabs-1-right-bottom").height());
	$("#ghichubs").css("width",$("#tabs-1-left-bottom").width()-5+"px");
	$("#ghichubs").css("height",$("#tabs-1-left-bottom").height()-$("#tieude").height()-10+"px");
	$("#noidungghichubs").css("width",$("#ghichubs").width()-7+"px");
	$("#noidungghichubs").css("height",$("#ghichubs").height()-5+"px");
	
	//-- tabs-2-right-top
	$("#tabs-2-right-top").css("height",$("#panel_main").height()*58/100-98+"px");
	$("#tabs-2-right-bottom").css("height",$("#panel_main").height()*42/100-44+"px");
	$("#rowed6").setGridWidth($("#tabs-2").width()/2+10);
	$("#rowed6").setGridHeight($("#panel_main").height()-135);
	$("#rowed7 ").setGridWidth($("#tabs-1").width()/2-30);
	$("#rowed7").setGridHeight($("#tabs-2-right-top").height()-56);
	$("#ttluu ").css("width",$("#tabs-1").width()/2-31);
	$("#rowed8 ").setGridWidth($("#tabs-1").width()/2-30);
	$("#rowed8").setGridHeight($("#tabs-2-right-bottom").height());
	
	
	
	
}
function n_xoa(rowid,tenthuoc){
	$("#nrowid").val(rowid);
	$("#ntenthuoc").val(tenthuoc);
	if($.isNumeric(rowid)){
		var _id=$("#_nrowid").val();
		if(_id=="")
			$("#_nrowid").val(rowid);
		else
			$("#_nrowid").val(_id+"_"+rowid);
	}
$( "#dialog-confirm" ).dialog('open');

}

function n_xoa2(rowid){
	$("#nrowid2").val(rowid);
	if($.isNumeric(rowid)){
		var _id=$("#_nrowid2").val();
		if(_id=="")
			$("#_nrowid2").val(rowid);
		else
			$("#_nrowid2").val(_id+"_"+rowid);
	}
$( "#dialog-confirm2" ).dialog('open');

}

function n_chuyen_status(id,_nval){
	window.selectedVal = "";
	window.selected = $("input[type='radio'][name='action']:checked");
	if (selected.length > 0) {
		window.selectedVal = selected.val();
	}
	if(_nval==0)
		var nval=1;
	else
		var nval=0;
	$.get( "resource.php?module=<?= $modules ?>&view=<?= $view ?>&action=controller&oper=dathuchientiemtruyen&iddonthuoc="+id+"&nval="+nval, function( data ) {
		var rs2=data.split("#");
		if(rs2[1]==7){
			$("#rowed3").jqGrid('setGridParam',{datatype: 'json',url:"resource.php?module=<?= $modules ?>&view=<?= $view ?>&action=data_dsdieuduong&ngaybatdau="+tu+"&ngayketthuc="+den+"&ac="+selectedVal}).trigger('reloadGrid');
			tooltip_message("Cập nhật thành công");
			}
		else{
			tooltip_message("Thất bại");
			}
	 // $(".patient_info").html( data );	
	   
});
}
function get_time(){
	var dateString = '';
	var aDate = new Date();
	var h = aDate.getHours();
	var m = aDate.getMinutes();
	var s = aDate.getSeconds();
	
	if (h < 10) h = '0' + h;
	if (m < 10) m = '0' + m;
	if (s < 10) s = '0' + s;
	
	//dateString = h + ':' + m + ':' + s;
	dateString = h + ':' + m;	
	return dateString;
}
function get_date(){
	var dateString = '';
	var aDate = new Date();
	var d = aDate.getDate();
	var m = aDate.getMonth()+1;
	var y = String(aDate.getFullYear());
	var y1=y.substr(2, 2);
	if (d < 10) d = '0' + d;
	if (m < 10) m = '0' + m;

	dateString = d + '/' + m+ '/' + y1;	
	return dateString;
}
function load_nguoichidinh(){
	window.nguoichidinh = $.ajax({url: "resource.php?module=web_services&function=get_auto_edit_option&action=index&term=&status=2&tables=DM_NhanVien&id=ID_NhanVien&name=NickName", async: false, success: function(data, result) {if (!result) alert('Không load được danh mục nhân viên');}}).responseText;	
	
}
function _fuc_tabs(input){
	if(input==1)
		$("#_ntab").val(1);
	else
		$("#_ntab").val(2);	
}
function load_select_tenloaikham(){
	window.tenloaikham = $.ajax({url: "resource.php?module=web_services&function=get_auto_edit_option&action=index&term=&status=2&tables=DM_LoaiKham&id=ID_LoaiKham&name=TenLoaiKham", async: false, success: function(data, result) {if (!result) alert('Không load được danh mục DM_LoaiKham');}}).responseText;	
	
}
</script>