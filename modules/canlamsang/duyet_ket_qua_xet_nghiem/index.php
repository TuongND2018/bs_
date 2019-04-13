
<style type="text/css">
#rowed4 td  {	 
		word-wrap:normal!important;
		white-space:nowrap;
	}
 .top{
		border: solid;
	   border-radius: 4px;
	   width:645px;
	     height: 32px;
	     border-color: #DFD5D5;
	     border-width:1px;
	     
	}
.mid{
		border: solid;
	   border-radius: 4px;
	   width:645px;
	     height: 60px;
	     border-color: #DFD5D5;
	     border-width:1px;
	     
	}
.bot{
		border: solid;
	   border-radius: 4px;
	   width:645px;
	     height: 35px;
	     border-color: #DFD5D5;
	     border-width:1px;
	     
	}
.top2{
	border: solid;
	   border-radius: 4px;
	   width:1300;
	     height: 60px;
	     border-color: #DFD5D5;
	     border-width:1px;
}
</style>
</head>

<body>
    
      		<div id="main" >
		         <div class="ui-layout-west left_col">
		    		<div class="top" >
		    			<div>
		    				<label>Từ ngày: </label>
				    		<input type=text id="tungay" name="tungay" style="width: 90px!important;text-align:center" >
				    		<label>Đến ngày: </label>
				    		<input type=text id="denngay" name="denngay" style="width: 90px!important;text-align:center" >
				    		<button id="xem">Xem</button>
		    			
		    				<label>Mã bệnh nhân: </label>
		    				<input type=text id="mabenhnhan" name="mabenhnhan"style="width: 90px!important" >
		    				<button id="timkiemmabn">Tìm theo mã BN</button>
		    			</div>
		    			<div id="rd3">
		    				 <table id="rowed3" ></table>
        		  			 <div id="prowed3"></div>
        		  			   
		    			</div>
		    		</div>
		        </div> 
		        <div class="ui-layout-center right_col">
		        	<div class="mid">
			    		<div style="padding:2px 0px;" class="thongtin_tongthe">
					 		<div class="patient_info"></div>        
					    </div>
					 </div>
					  <div class="bot">
			            	<label style="text-align:left;margin-left: 10px;">Kết quả:</label><select type="text" id="ketqua" name="ketqua"style="width: 80px!important;margin-top:5px" ></select>
			            	<label style="text-align:left;margin-left: 10px;">Xét nghiệm trùng:</label><select type="text" id="xetnghiemtrung" name="ID_NuocxetnghiemtrungSanXuat"style="width: 80px!important;" ></select>
			            	<label style="text-align:left;margin-left: 10px;">Loại XN:</label><select type="text" id="loaixn" name="loaixn"style="width: 80px!important;" ></select>
			            	<label style="text-align:left;margin-left: 10px;">Thông Số SN:</label><select type="text" id="thongsoxn" name="thongsoxn"style="width: 80px!important;" ></select>
			          </div>
			          <div class="bot" style="height:30px">
			            	<input type="checkbox" style="margin-left: 300px;margin-top: 10px;"id="xemchitiet" onClick="xemchitiet()"   /> 
			            	<label style="font-size:15px">Duyệt</label>
			            	<button style="float:right;"id="hoantat">Hoàn tất</button>
			            </div>
			            <div>
			            	 <table id="rowed4" ></table>
        		  			 
			            </div>
			            <div>
			            	<table id="rowed5" ></table>
        		  			 
			            </div>
		        </div>
	    	</div>
      
      
      
   
</body>
</html>
<script type="text/javascript">
var kham=[];
$(document).ready(function() {	 
	load_select();
	$("#main").css("height",$(window).height()-20+"px");	
	$("#main").css("width",$(window).width()-4+"px");		 
	$("#main").fadeIn(1000); 
	 $( "#tabs" ).tabs();
	 create_layout();
	 //resize_control();
	 $(window).resize(function() {
            temp = jQuery(window).height() - 50;
            $("#panel_main").css("height", temp + "px");
            resize_control();
        })
	 $("#xem").button();
	 $("#timkiemmabn").button();
	 $("#thugon").button();
	 $("#hoantat").button();
	ketqua_xetnghiem();
	create_grid();
	 create_grid2();
	 $( "#tungay" ).datepicker({dateFormat: 'yy-mm-dd'});
	 $( "#denngay" ).datepicker({dateFormat: 'yy-mm-dd'});
	 $("#tungay").val(gio("current"));
	 $("#denngay").val(gio("current"));
	 number_textbox("#mabenhnhan");
	 tungay=$("#tungay").val()+" 00:00:00";
	 denngay=$("#denngay").val()+" 23:59:59";

	$("#rowed3").jqGrid('setGridParam',{datatype: 'json',url:"resource.php?module=<?=$modules?>&view=<?=$view?>&action=data_ketqua&tungay="+tungay+"&denngay="+denngay}).trigger('reloadGrid');
	resize_control();
})
function resize_control(){
	
	$("#main").css("height",$(window).height()-20+"px");	
	$("#main").css("width",$(window).width());		 
	$("#main").fadeIn(1000); 
	$(".top").css("width",$(".ui-layout-west").width()-3+"px");
	$(".mid").css("width",$(".ui-layout-center").width()-3+"px");
	$(".bot").css("width",$(".ui-layout-center").width()-3+"px");
	$("#rowed3").setGridWidth($(".left_col").width() - 10);
	$("#rowed3").setGridHeight($(".ui-layout-west").height() - 140);
	
	$("#rowed4").setGridWidth($(".right_col").width() - 10);
	$("#rowed4").setGridHeight($(".right_col").height()/2 - 50);
	$("#rowed5").setGridWidth($(".right_col").width() - 10);
	$("#rowed5").setGridHeight($(".right_col").height()/2 - 200);
	$(".thongtin_chidinh").css("width",$(window).width()-$(".thongtin_tongthe").width()-10+"px");
}
$("#xem").click(function(){
	window.tungay=$("#tungay").val()+" 00:00:00";
	window.denngay=$("#denngay").val()+" 23:59:59";

	$("#rowed3").jqGrid('setGridParam',{datatype: 'json',url:"resource.php?module=<?=$modules?>&view=<?=$view?>&action=data_ketqua&tungay="+tungay+"&denngay="+denngay}).trigger('reloadGrid');
	
});
$("#timkiemmabn").click(function(){
	window.mabenhnhan=$("#mabenhnhan").val();
	$("#rowed3").jqGrid('setGridParam',{datatype: 'json',url:"resource.php?module=<?=$modules?>&view=<?=$view?>&action=data_ketqua_mabenhnhan&mabenhnhan="+mabenhnhan}).trigger('reloadGrid');
});
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
			thoigian=thoigian.addHours(0).toString("yyyy-MM-dd");
			}
			return thoigian;
} 
function create_grid(){	
	 $("#rowed3").jqGrid({
		url:"resource.php?module=<?=$modules?>&view=<?=$view?>&action=data_ketqua&tungay="+tungay+"&denngay="+denngay,
		datatype: "local",	
		colNames: ['','id','Mã BN', 'Họ lót', 'Tên','Giới','Ngày vào khám','Nhập KQ','Đã duyệt','Ngày hẹn trả KQ','N.trú'],
            colModel: [
            	{name: 'ID_LuotKham', index: 'ID_LuotKham', hidden: true,width:50},
           		{name: 'ID_BenhNhan', index: 'ID_BenhNhan', hidden: true,width:50},
                {name: 'MaBenhNhan', index: 'MaBenhNhan', hidden: false,width:40},
                {name: 'HoLotBenhNhan', index: 'HoLotBenhNhan',width:70,align:'left', hidden: false},
                {name: 'TenBenhNhan', index: 'TenBenhNhan', hidden: false,width:40},
                {name: 'GioiTinh', index: 'GioiTinh', hidden: false,width:20},
                {name: 'ThoiGianVaoKham', index: 'ThoiGianVaoKham', hidden: false,width:60},
               
                {name: 'TinhTrangKQ', index: 'TinhTrangKQ', hidden: false,width:40},
                {name: 'TinhTrangDuyet', index: 'TinhTrangDuyet', hidden: false,width:40},
                 {name: 'NgayGioHenTraKQ', index: 'NgayGioHenTraKQ', hidden: false,width:60},
                {name: 'noitru', index: 'noitru',align:"center", hidden: false,width:20},
            ],
	//

		loadonce: true,
		scroll: 1,	
		//rownum = false,
		//treeGrid = false,	 
		modal:true,	 	
		pager: '#prowed3',	
		rowNum: 100,
		gridview: true,
		pginput:false,
		pgbuttons:false,
		rowList:[],
		sortname: 'nickname',
		height:540,
		width: 640,
		viewrecords: true,	
		ignoreCase:true,
		shrinkToFit:true,
		grouping: false,
		stringResult:true,
		sortorder: "asc",
	//hoverrows:false,
	//jsonReader:{repeatitems:true,subgrid:{repeatitems:false}},	
		
		serializeRowData: function (postdata) { 		 	
			//$("#rowed3").trigger("reloadGrid");		
			//return postdata;
		},
		onSelectRow: function(id){		
			var rowData = jQuery(this).getRowData(id); 
			window.id_benhnhan = rowData['ID_BenhNhan']; //alert(ID_DonThuocMau);
			window.id_luotkham= id;
			//alert(id_luotkham);
			$("#rowed4").jqGrid('setGridParam',{datatype: 'json',url:"resource.php?module=<?=$modules?>&view=<?=$view?>&action=data_danhsachketquaxetnghiem&idluotkham="+id_luotkham+"&idbenhnhan="+id_benhnhan}).trigger('reloadGrid');
           $.get( "resource.php?module=web_services&function=create_panel1&id_benhnhan="+id_benhnhan+"&action=index", function( data ) {
				  $( ".patient_info" ).html( data );
				  $( ".patient_info" ).css("width", $( "#patient_info" ).width()+"css");	
			});      
            $("#rowed5").jqGrid().setGridParam({datatype:'json',url:"resource.php?module=<?=$modules?>&view=<?=$view?>&action=data_loaixetnghiem&idluotkham="+id_luotkham+"&idbenhnhan="+id_benhnhan}).trigger("reloadGrid");	   
		},
		
		ondblClickRow: function (rowId, rowIndex, columnIndex) {
			$(".ui-icon-pencil").trigger('click'); 
 		},

		loadComplete: function(data) {	
			var allRowsInGrid = $('#rowed3').jqGrid('getRowData');
				 for (i = 0; i < allRowsInGrid.length; i++) {
				    tinhtrang = allRowsInGrid[i].TinhTrangKQ;
					duyet= allRowsInGrid[i].TinhTrangDuyet;
				    luotkham = allRowsInGrid[i].ID_LuotKham;
				    ngaygio= allRowsInGrid[i].NgayGioHenTraKQ;
				    ngaygio2=(convert_to_datejs(ngaygio)-convert_to_datejs("current"))/60000;
				    //alert((convert_to_datejs(ngaygio)-convert_to_datejs("current"))/60000);
				   if(tinhtrang=="Chưa nhập"){
				    	$('#rowed3').jqGrid('setCell',luotkham,"TinhTrangKQ","",{background:'#58FA58'});
				    	if( ngaygio<=""){
				    			$('#rowed3').jqGrid('setCell',luotkham,"NgayGioHenTraKQ","",{background:'#58FA58'});
				    	}
				    	else{
						    	if( ngaygio2<="30"){
						    			$('#rowed3').jqGrid('setCell',luotkham,"NgayGioHenTraKQ","",{background:'#FE2E2E'});
						    	}
						    	else if(ngaygio2<="60"){
						    			$('#rowed3').jqGrid('setCell',luotkham,"NgayGioHenTraKQ","",{background:'Yellow'});
						    	}
						    	else{
						    			$('#rowed3').jqGrid('setCell',luotkham,"NgayGioHenTraKQ","",{background:'#58FA58'});
						    	}
						    }
				    }
				    else if(tinhtrang=="Đang nhập"){
				    	$('#rowed3').jqGrid('setCell',luotkham,"TinhTrangKQ","",{background:'Yellow'});
				    	if( ngaygio<=""){
				    			$('#rowed3').jqGrid('setCell',luotkham,"NgayGioHenTraKQ","",{background:'#58FA58'});
				    	}
				    	else{
						    	if( ngaygio2<="30"){
						    			$('#rowed3').jqGrid('setCell',luotkham,"NgayGioHenTraKQ","",{background:'#FE2E2E'});
						    	}
						    	else if(ngaygio2<="60"){
						    			$('#rowed3').jqGrid('setCell',luotkham,"NgayGioHenTraKQ","",{background:'Yellow'});
						    	}
						    	else{
						    			$('#rowed3').jqGrid('setCell',luotkham,"NgayGioHenTraKQ","",{background:'#58FA58'});
						    	}
						    }
				    }else if(tinhtrang=="Nhập xong"){
				    	//$('#rowed3').jqGrid('setCell',luotkham,"TinhTrangKQ","",{background:'#FE2E2E'});
						if(duyet=="Đã duyệt"){
							$('#rowed3').jqGrid('setCell',luotkham,"TinhTrangKQ","",{background:'white'});
						}
						else{
							$('#rowed3').jqGrid('setCell',luotkham,"TinhTrangKQ","",{background:'#FE2E2E'});
						}
				    	if( ngaygio<=""){
				    			$('#rowed3').jqGrid('setCell',luotkham,"NgayGioHenTraKQ","",{background:'#58FA58'});
				    	}
				    	else{
						    	if( ngaygio2<="30"){
						    			$('#rowed3').jqGrid('setCell',luotkham,"NgayGioHenTraKQ","",{background:'#FE2E2E'});
						    	}
						    	else if(ngaygio2<="60"){
						    			$('#rowed3').jqGrid('setCell',luotkham,"NgayGioHenTraKQ","",{background:'Yellow'});
						    	}
						    	else{
						    			$('#rowed3').jqGrid('setCell',luotkham,"NgayGioHenTraKQ","",{background:'#58FA58'});
						    	}
						    }
				    }
				   
			}
		},	  
		caption: "Danh sách loại xét nghiệm cần nhập kết quả"
	});	
 $("#rowed3").jqGrid('bindKeys', {} );
  $("#rowed3").jqGrid('filterToolbar', {searchOperators: false, searchOnEnter: false, defaultSearch: "cn"});
 jQuery("#rowed3").jqGrid('navGrid','#prowed3',{add: false,del:false,edit:false,search:false,refresh:false}, {}, {},{});
 $("#rowed3").jqGrid('navButtonAdd', '#prowed3', {caption: "<div >Giờ hẹn trả kết quả:<div class='hinhvuong quathoigian_max'></div><label class='diengiai'>30' nữa trả kết quả</label><div class='hinhvuong quathoigian_min'></div><label class='diengiai'>60' nữa trả kết quả</label><div class='hinhvuong sansanggoi'></div><label class='diengiai'>Chưa đến giờ trả kết quả</label></div>",})

};
function ketqua_xetnghiem() {
		  $("#rowed4").jqGrid({
            url:"",
            datatype: "local",
            colNames: ['','id','Ngày chỉ định','Loại XN','Thông số', 'Kết quả', 'Giá Trị BT', 'Người nhập','Giờ nhập', 'Người duyệt','Đã duyệt', 'Ghi chú','',''],
            colModel: [
            	{name:'ID_XetNghiem',index:'ID_XetNghiem',hidden:true},
            	{name:'ID_Kham',index:'ID_Kham',hidden:true},
                {name: 'NgayGioTao', index: 'NgayGioTao',  search: false, width: "100%", editable: false, align: 'right', hidden: false},
                {name: 'TenLoaiKham', index: 'TenLoaiKham', width: "100%", align: 'center', edittype: "select", hidden: false, formoptions: {}},
                {name: 'TenXetNghiem', index: 'TenXetNghiem', width: "200%", align: 'center', edittype: "select", hidden: false, formoptions: {}},
                {name: 'KetQua', index: 'KetQua', width: "100%", align: 'center', edittype: "select", hidden: false, formoptions: {}},
                {name: 'GiaTriBinhThuong1', index: 'GiaTriBinhThuong1', width: "100%", align: 'center', edittype: "select", hidden: false, formoptions: {}},
                {name:'NguoiThucHien',index:'NguoiThucHien', width:"80%", editable:true,align:'center',hidden:false,formatter:"select",editrules: {required:true},edittype:"select",stype: 'select',editoptions: { value: nation}},
                {name: 'NgayGioThucHien', index: 'NgayGioThucHien', width: "100%", align: 'center', edittype: "select", hidden: false, formoptions: {}},
                {name:'NguoiDuyet',index:'NguoiDuyet', width:"80%", editable:true,align:'center',hidden:false,formatter:"select",editrules: {required:true},edittype:"select",stype: 'select',editoptions: { value: nation}},
               {name:'DaDuyet',index:'DaDuyet',search:true, width:"80%",stype: 'select',searchoptions: { sopt: ['eq', 'ne'],value:':;1:Có;0:Không'}, editable:true,align:'center',hidden:false,edittype:"checkbox",formatter:"checkbox",formoptions:{ rowpos:7, colpos:1},editoptions: {value:"1:0"},formatoptions:{disabled: false}},	
                {name: 'GhiChu', index: 'GhiChu', width: "80%", align: 'center', edittype: "select", hidden: false, formoptions: {}},
                {name: 'ID_KetQuaXN', index: 'ID_KetQuaXN', width: "80%", align: 'center', edittype: "select", hidden: true, formoptions: {}},
                {name: 'Color', index: 'Color', width: "100%", align: 'center', edittype: "select", hidden: true, formoptions: {}},
            ],
           
		loadonce: true,
		scroll: false,	
		//rownum = false,
		//treeGrid = false,	 
		modal:true,	 	
		pager: '',	
		rowNum: 10000,
		gridview: true,
		pginput:false,
		pgbuttons:false,
		rowList:[],
		sortname: 'nickname',
		height:250,
		width: 785,
		viewrecords: true,	
		ignoreCase:true,
		shrinkToFit:true,
		grouping: false,
		stringResult:true,
		sortorder: "asc",
		
		
		sortorder: "asc",
           grouping: true,
            groupingView: {groupField: ['NgayGioTao', 'TenLoaiKham'],
                groupOrder: ['desc', 'des', 'asc'],
                 //groupSummary : [true,true],
                showSummaryOnHide: false,
                groupColumnShow: [false, false],
               	groupText: ['<b style="color:red"> Ngày chỉ định: {0}</b>', '<b style="color:blue">Loại xét nghiệm: {0}</b>'],
                groupCollapse: false,
            },
            onRightClickRow: function(rowid, iRow, iCol, e) {              
					
                
            },
            loadComplete: function(data,rowid) {	

            	// $("#rowed4").jqGrid('setGridParam',{loadonce: true}).trigger('reloadGrid');
				 //duyet phieu chi
				// jQuery("#rowed4").closest(".ui-jqgrid-bdiv").scrollTop(scrollPositiontop);
			 	$('body').unbind('click')
				ids=$('#rowed4').jqGrid('getDataIDs'); 

				 for(var i=0;i<=ids.length-1;i++){
				 	
				  $('#rowed4 #'+ids[i]+' input').bind('click',function(e){
				  
				   window.id_tam=$(e.target).closest('tr.jqgrow').attr('id');
				   nguoiduyet=$("#rowed4").jqGrid ('getCell', id_tam, 'NguoiDuyet');
				   //alert(nguoiduyet);
				   if(nguoiduyet==<?=$_SESSION['user']['id_user']?> || nguoiduyet==""){
						   if($(e.target).is(':checked')){
								   	dataToSend = '{"rows":[';
									phancach1 = "";
									var daduyetketqua=1;
								  	phancach = ",";
								    dataToSend +=phancach1+'{"daduyetketqua":"' + daduyetketqua + '"';			   
								    dataToSend += phancach + '"id_kqxn":"' + id_tam + '"';
								    
								    dataToSend += phancach + '"nguoiduyet":"' + <?=$_SESSION['user']['id_user']?> + '"}';
								    dataToSend += ']}';
				          
				            		dataToSend = jQuery.parseJSON(dataToSend);
				            		alertObject(dataToSend);
									
								    $.post('resource.php?module=<?=$modules?>&view=<?=$view?>&action=controller&oper=hoantat&hienmaloi=3',dataToSend)
												 .done(function( gridData ) {
												 						//$("#rowed3").jqGrid('setGridParam',{datatype: 'json',url:"resource.php?module=<?=$modules?>&view=<?=$view?>&action=data_ketqua&tungay="+tungay+"&denngay="+denngay}).trigger('reloadGrid');
							                                            $("#rowed4").jqGrid('setGridParam',{datatype: 'json',url:"resource.php?module=<?=$modules?>&view=<?=$view?>&action=data_danhsachketquaxetnghiem&idluotkham="+id_luotkham+"&idbenhnhan="+id_benhnhan}).trigger('reloadGrid'); 	
							                                             //tooltip_message("Đã hoàn tất");
							                                            })
							                                            .fail(function() {
							                                            alert( "error" );
							                                            });
							
						   }
						   else{
									dataToSend = '{"rows":[';
									phancach1 = "";
									var daduyetketqua=0;
								  	phancach = ",";
								    dataToSend +=phancach1+'{"daduyetketqua":"' + daduyetketqua + '"';			   
								    dataToSend += phancach + '"id_kqxn":"' + id_tam + '"';
								    
								    dataToSend += phancach + '"nguoiduyet":"' + "0" + '"}';
								    dataToSend += ']}';
				          
				            		dataToSend = jQuery.parseJSON(dataToSend);
				            		alertObject(dataToSend);
									
								    $.post('resource.php?module=<?=$modules?>&view=<?=$view?>&action=controller&oper=hoantat&hienmaloi=3',dataToSend)
												 .done(function( gridData ) {
												 						//$("#rowed3").jqGrid('setGridParam',{datatype: 'json',url:"resource.php?module=<?=$modules?>&view=<?=$view?>&action=data_ketqua&tungay="+tungay+"&denngay="+denngay}).trigger('reloadGrid');
							                                            $("#rowed4").jqGrid('setGridParam',{datatype: 'json',url:"resource.php?module=<?=$modules?>&view=<?=$view?>&action=data_danhsachketquaxetnghiem&idluotkham="+id_luotkham+"&idbenhnhan="+id_benhnhan}).trigger('reloadGrid'); 	
							                                             //tooltip_message("Đã hoàn tất");
							                                            })
							                                            .fail(function() {
							                                            alert( "error" );
							                                            });
						   }
						  
						   
						}else{
								return false
						}
				   
				   
				   })
				 }	 


				 var allRowsInGrid = $('#rowed4').jqGrid('getRowData');
				 for (i = 0; i < allRowsInGrid.length; i++) {
				    window.pid = allRowsInGrid[i].DaDuyetKetQua;
				    pid2 = allRowsInGrid[i].ID_KetQuaXN;
				    if(pid=="1"){
				    	jQuery("#rowed4").jqGrid('setSelection',pid2);
				    	//alert(pid2);
				    }
				    }

				    for (j = 0; j < allRowsInGrid.length; j++) {
				     pid2 = allRowsInGrid[j].Color;

				   	pid3 = allRowsInGrid[j].ID_KetQuaXN;
				    if(pid2=="Red"){
				    	$('#rowed4').jqGrid('setCell',pid3,"KetQua","",{color:'red'});
				    }else if(pid2=="Blue"){
				    	$('#rowed4').jqGrid('setCell',pid3,"KetQua","",{color:'blue'});
				    }else if(pid2=="Orange"){
				    	$('#rowed4').jqGrid('setCell',pid3,"KetQua","",{color:'orange'});
				    }else{
				    	$('#rowed4').jqGrid('setCell',pid3,"KetQua","",{color:'black'});
				    }
				  }
				
				},	  
            onSelectRow: function(id){		
				var rowData2 = jQuery(this).getRowData(id); 
				window.id_kham = rowData2['ID_Kham']; 
				//alert(id_kham);
				},
            ondblClickRow: function(rowId, rowIndex, columnIndex) {
            },
            caption: "Danh sách kết quả xét nghiệm"
        });
};
$("#hoantat").click( function() {
		var ids = jQuery("#rowed4").jqGrid('getDataIDs');
		dataToSend = '{"rows":[';
		phancach1 = "";
       for(var i=0;i<=ids.length-1;i++){
       		id_kham=$("#rowed4").jqGrid ('getCell', ids[i], 'ID_Kham');
       		phancach = ",";
       		dataToSend +=phancach1+'{"id_kham":"' + id_kham + '"';			   
			dataToSend += phancach + '"trangthai":"' + "Xong"+ '"}';
			phancach1=",";
     	}
     	dataToSend +=']}'; 
	//alert(dataToSend);
	dataToSend = jQuery.parseJSON(dataToSend);
	alertObject(dataToSend);
	 $.post('resource.php?module=<?=$modules?>&view=<?=$view?>&action=controller&oper=trangthai_hoantat&hienmaloi=3',dataToSend)
								 .done(function( gridData ) {
								 						//$("#rowed3").jqGrid('setGridParam',{datatype: 'json',url:"resource.php?module=<?=$modules?>&view=<?=$view?>&action=data_ketqua&tungay="+tungay+"&denngay="+denngay}).trigger('reloadGrid');
			                                            //$("#rowed4").jqGrid('setGridParam',{datatype: 'json',url:"resource.php?module=<?=$modules?>&view=<?=$view?>&action=data_danhsachketquaxetnghiem&idluotkham="+id_luotkham+"&idbenhnhan="+id_benhnhan}).trigger('reloadGrid'); 	
			                                             tooltip_message("Đã hoàn tất");
			                                             $("#xem").click();
			                                            })
			                                            .fail(function() {
			                                            alert( "error" );
			                                            });

 
});

function create_grid2(){	
	 $("#rowed5").jqGrid({
		url:""	,
		datatype: "local",	
		colNames: ['Tên xét nghiệm', 'Ngày chỉ định', 'Ghi chú'],
            colModel: [
                {name: 'TenLoaiKham', index: 'TenLoaiKham', hidden: false},
                {name: 'NgayGioTao', index: 'NgayGioTao',width:60,align:'center', hidden: false},
                {name: 'GhiChu', index: 'GhiChu', hidden: false},
                
            ],
	//

		loadonce: true,
		scroll: 1,	
		//rownum = false,
		//treeGrid = false,	 
		modal:true,	 	
		pager: '',	
		rowNum: 100,
		gridview: true,
		pginput:false,
		pgbuttons:false,
		rowList:[],
		sortname: 'nickname',
		height:115,
		width: 640,
		viewrecords: true,	
		ignoreCase:true,
		shrinkToFit:true,
		grouping: false,
		stringResult:true,
		sortorder: "asc",
		
	//hoverrows:false,
	//jsonReader:{repeatitems:true,subgrid:{repeatitems:false}},	
		
		serializeRowData: function (postdata) { 		 	
			//$("#rowed3").trigger("reloadGrid");		
			//return postdata;
		},
		onSelectRow: function(id){		
		jQuery('#rowed5').jqGrid('editRow', id, true);   
		},
		
		ondblClickRow: function (rowId, rowIndex, columnIndex) {
			$(".ui-icon-pencil").trigger('click'); 
 		},

		loadComplete: function(data) {	

		},	  
		caption: "Danh sách loại xét nghiệm cần nhập kết quả"
	});	

};
function create_grid3() {
		  $("#rowed6").jqGrid({
            url:"",
            datatype: "local",
            colNames: ['Ngày chỉ định','Loại XN','Mã bệnh nhân', 'Họ(tên lót)', 'Tên', 'Ngày chỉ định','Thông số xét', 'Kết quả', 'Giá trị bình thường','Người nhập KQ','Giờ nhập KQ'],
            colModel: [
                {name: 'NgayGioTao', index: 'NgayGioTao',  search: false, width: "100%", editable: false, align: 'right', hidden: false},
                {name: 'TenLoaiKham', index: 'TenLoaiKham', width: "100%", align: 'center', edittype: "select", hidden: false, formoptions: {}},
                {name: 'TenXetNghiem', index: 'TenXetNghiem', width: "200%", align: 'center', edittype: "select", hidden: false, formoptions: {}},
                {name: 'KetQua', index: 'KetQua', width: "100%", align: 'center', edittype: "select", hidden: false, formoptions: {}},
                {name: 'GiaTriBinhThuong1', index: 'GiaTriBinhThuong1', width: "100%", align: 'center', edittype: "select", hidden: false, formoptions: {}},
                {name:'NguoiThucHien',index:'NguoiThucHien', width:"80%", editable:true,align:'center',hidden:false,formatter:"select",editrules: {required:true},edittype:"select",stype: 'select',editoptions: { value: nation}},
                {name: 'NgayGioThucHien', index: 'NgayGioThucHien', width: "100%", align: 'center', edittype: "select", hidden: false, formoptions: {}},
                {name:'NguoiDuyet',index:'NguoiDuyet', width:"80%", editable:true,align:'center',hidden:false,formatter:"select",editrules: {required:true},edittype:"select",stype: 'select',editoptions: { value: nation}},
                {name: 'GhiChu', index: 'GhiChu', width: "100%", align: 'center', edittype: "select", hidden: false, formoptions: {}},
            ],
           
		loadonce: true,
		scroll: 1,	
		//rownum = false,
		//treeGrid = false,	 
		modal:true,	 	
		pager: '',	
		rowNum: 100,
		gridview: true,
		pginput:false,
		pgbuttons:false,
		rowList:[],
		sortname: 'nickname',
		height:250,
		width: 800,
		viewrecords: true,	
		ignoreCase:true,
		shrinkToFit:true,
		grouping: false,
		stringResult:true,
		sortorder: "asc",
		multiselect:true,
		
		sortorder: "asc",
           grouping: true,
            groupingView: {groupField: ['NgayGioTao', 'TenLoaiKham'],
                groupOrder: ['desc', 'des'],
                 //groupSummary : [true,true],
                showSummaryOnHide: false,
                groupColumnShow: [false, false],
               	groupText: ['<b style="color:red"> Ngày chỉ định: {0}</b>', '<b style="color:blue">Loại xét nghiệm: {0}</b>'],
                groupCollapse: false,
            },
            onRightClickRow: function(rowid, iRow, iCol, e) {              
					
                
            },
            loadComplete: function(data,rowid) {	
				
				},	  
            onSelectRow: function(id){		
				rowData = jQuery(this).getRowData(id);
                   
                   //alert(rowData);
				
				},
            ondblClickRow: function(rowId, rowIndex, columnIndex) {
            },
            caption: "Danh sách kết quả xét nghiệm"
        });
}
 function create_layout(){
	//alert("")
	$('#main').layout({	
		resizerClass: 'ui-state-default'       
		,west: {
			maskContents:		true
		,	resizable: true
		,	size:					"52%"
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
		,	size:					"48%"
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
	window.nation = $.ajax({url: 'resource.php?module=web_services&function=get_auto_edit_option&action=index&term=&status=2&tables=DM_NhanVien&id=ID_NhanVien&name=NickName', async: false, success: function(data, result) {if (!result) alert('Không load được danh mục quốc tịch');}}).responseText;	
}
function xemchitiet(){
	ids=$('#rowed4').jqGrid('getDataIDs'); 
  if($("#xemchitiet").is(':checked')==true){
    		$("#hoantat").click();
  			for(var i=0;i<=ids.length-1;i++){
				if($('#rowed4 #'+ids[i] +' input').is(':checked')==false){
					$('#rowed4 #'+ids[i] +' input').click();
					}
			}
      }else{
      	
       for(var i=0;i<=ids.length-1;i++){
       	nguoiduyet=$("#rowed4").jqGrid ('getCell', ids[i], 'NguoiDuyet');

       		if(nguoiduyet==<?=$_SESSION['user']['id_user']?>){
       			//alert($('#rowed4 #'+ids[i] +' input').is(':checked'));
				if($('#rowed4 #'+ids[i] +' input').is(':checked')==true){
					$('#rowed4 #'+ids[i] +' input').click();
					//alert();
					}
			}
     	}
      }
}
$( "#mabenhnhan" ).keyup(function(e){
        //alert(e.keyCode);
            if (e.keyCode === 13) {
                $( "#timkiemmabn" ).click();
                return false;
            }
    });
</script>
