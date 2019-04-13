<!--<link rel="stylesheet" href="../../../css/form_css.css" type="text/css" media="screen"/>-->
<style type="text/css">
    #rowed3 td,#rowed4 td,#rowed5 td,#rowed6 td,#rowed7 td{

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
        width:300px;
        display:inline-block;
		margin-left:30px;
    }
    #menu_toggle{
        font-size:12px;
        padding:5px 0px;
        background:url("js/grid/themes/south-street/images/ui-bg_highlight-hard_15_459e00_1x100.png") repeat-x scroll   #459E00;
        border:#CCC 1px dashed;	
    }
    .right_col{
        background:#FFF;
    }#canh{
	 height:4px!important;
	}#com_thuocnhom, #com_thuochmk{
	 width: 130px!important;
	 height:18px !important;
	}
	#menu2,#menu3{
		width:180px;
	}.ui-state-disabled:hover{
		color:#000 !important;
		border:none!important;
	}
	
	span.demgio{
		color: red;
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
    }#tieude{
		background:#F5F3EB;
		height: 20px;
		width: 99%;
		border-radius: 6px 6px 0px 0px;
		border-right: 1px solid #d4ccb0;
		border-left: 1px solid #d4ccb0;
		border-top:1px solid #d4ccb0;
	}#gbox_rowed6{ 
		border-top:none;
		
	}
	#gbox_rowed7{ 
		border-top:none;
		
	}
	#div_nonegroup div#gbox_rowed6{
		border-top-right-radius: 0px!important;
		border-top-left-radius: 0px!important;
	}
	#div_nonegroup div#gbox_rowed7{
		border-top-right-radius: 0px!important;
		border-top-left-radius: 0px!important;
	}
	#gview_rowed6 div.ui-corner-top{
		border-top-right-radius: 0px!important;
		border-top-left-radius: 0px!important;
	}
	#div_group div#gbox_rowed7{
		border-top-right-radius: 0px!important;
		border-top-left-radius: 0px!important;
	}
	/*#com_thuocnhom{
		-webkit-appearance: none;
		-moz-appearance: none;
	}*/
	input[type=button].custom_button{
	/*	border:1px solid #000;*/
			border:none;
		background:none;
		/*border-radius:10px; -moz-border-radius:10px; -webkit-border-radius:10px;*/
		outline:  none;
		text-shadow:0 1px 0 rgba(255, 255, 255, 0.6);
		font-size:11px;
		height:17px!important;
		width:50px!important;
		text-decoration:underline;
	 
		/*box-shadow:0px 0px 2px 1px #a0a0a0;*/
	}
	input[type=button].custom_button:focus{	 
		outline:  none;
	} 
</style>


<body>
 <div  class="data_phanloaikham">
    <table id="data_phanloaikham">
    </table>   
  </div>
   <div  class="data_thuochmk">
    <table id="data_thuochmk">
    </table>   
  </div>
<ul id="menu" > 
		<li id='dungxephang'><a id="stopxephang" href="#"><span class="ui-icon ui-icon-pause"></span>Dừng xếp hàng</a></li>
		<li id='tieptucxephang' style='display: none;'><a id="startxephang"  href="#"><span class="ui-icon  ui-icon-play"></span>Tiếp tục xếp hàng</a></li>
        <li><a id="refresh" href="#"><span class="ui-icon ui-icon-refresh"></span>Làm mới thông tin</a></li>  
		<hr>		
        <li><a id="benhan" href="#"><span class="ui-icon ui-icon-folder-open"></span>Bệnh án</a></li> 
        <li><a id="thongtinbenhnhan" href="#"><span class="ui-icon ui-icon-person"></span>Thông tin bệnh nhân</a></li>
        <li><a id="thongtinluotkham" href="#"><span class="ui-icon ui-icon-pencil"></span>Thông tin lượt khám</a></li>
    </ul>
<ul id="menu2" >     
		<li id='menu2_dungxephang'><a id="menu2_stopxephang" href="#"><span class="ui-icon ui-icon-pause"></span>Dừng xếp hàng</a></li>
		<li id='menu2_tieptucxephang' style='display: none;'><a id="menu2_startxephang"  href="#"><span class="ui-icon  ui-icon-play"></span>Tiếp tục xếp hàng</a></li>
		<hr>	
        <li><a id="menu2_benhan" href="#"><span class="ui-icon ui-icon-folder-open"></span>Bệnh án</a></li>
        <li><a id="menu2_thongtinbenhnhan" href="#"><span class="ui-icon ui-icon-person"></span>Thông tin bệnh nhân</a></li>
        <li><a id="menu2_thongtinluotkham" href="#"><span class="ui-icon ui-icon-pencil"></span>Thông tin lượt khám</a></li>
        <li><a id="menu2_lichsudhst" href="#"><span class="ui-icon ui-icon-folder-open"></span>Lịch sử dấu hiệu sinh tồn</a></li>
		<hr>	
        <li><a id="menu2_chitiethangmuckham" href="#"><span class="ui-icon ui-icon-document"></span>Chi tiết hạng mục khám</a></li>
		<hr>	
         <li><a id="menu2_chuyenvedanhsachcho" href="#"><span class="ui-icon ui-icon-arrowreturnthick-1-w"></span>Chuyển về danh sách chờ</a></li>

</ul>
<ul id="menu3" >     
		 <li><a id="menu3_chitiethangmuckham" href="#"><span class="ui-icon ui-icon-document"></span>Chi tiết hạng mục khám</a></li>
		<li id='menu3_dungxephang'><a id="menu3_stopxephang" href="#"><span class="ui-icon ui-icon-pause"></span>Dừng xếp hàng</a></li>
		<li id='menu3_tieptucxephang' style='display: none;'><a id="menu3_startxephang"  href="#"><span class="ui-icon  ui-icon-play"></span>Tiếp tục xếp hàng</a></li>

</ul>
    <div class="ui-layout-center left_col" > 
       	<div id='demo' style="margin-left:5px;margin-top:2px;;margin-botton:2px;margin-bottom: 2px;display:inline-block">
         <div style="display:inline-block"><label style="font-weight:bold">Xem bệnh nhân CLS:</label></div>
            <div style="display:inline-block"><input type="radio" id="thuocnhom" name="thuocnhom" value="0"/><label>Thuộc nhóm</label></div>
			 <!--<select id="com_thuocnhom" class="com_thuocnhom">
             </select>-->
             
              <span class="custom-combobox">
           	  <input id='com_thuocnhom' class='com_thuocnhom' ></span>
              <input id='com_thuocnhom1' class='com_thuocnhom1'  style="width:200px;display:none">
			<a id="add_new" class="fm-button ui-state-default ui-corner-all " style=" margin-left:30px!important;vertical-align:top;width:16px;height:14px;margin-top:-1px;"  ><span style="margin-top:-2px;margin-right:-22px!important" class="ui-icon ui-icon-circle-plus"></span></a>
            <div style="display:inline-block"><input type="radio" id="thuochangmuckham" name="thuocnhom" value="1"/><label>Thuộc hạng mục khám</label>      </div>
            <span class="custom-combobox">
           	  <input id='com_thuochmk' class='com_thuochmk' ></span>
              <input id='com_thuochmk1' class='com_thuochmk1'  style="width:200px;display:none">
			<a id='xemtatca' class="fm-button ui-state-default ui-corner-all " style="margin-top:-1px; margin-left:30px!important;vertical-align:top;width:60px;height:14px;"  >Xem tất cả</a>
        </div>
        <table id="rowed3" ></table>
		<div class="grid1">
            <!--            <div class="ghichu" style=" width: 20px; background:red " >-----</div>
                        <div class="ghichu" style="border: none">Đã chờ quá 15'</div>-->

            <div class="hinhvuong quathoigian_max"></div><label class="diengiai">Đã chờ quá 5'</label>

        </div>
        <div class="grid1">
            <!--            <div class="ghichu" style=" width: 20px; background:yellow " >-----</div>
                        <div class="ghichu" style="border: none">Đã chờ quá 10'</div>-->
            <div class="hinhvuong quathoigian_min"></div><label class="diengiai">Đã chờ dưới 5'</label>
        </div>

        <table id="rowed4" ></table>
		<div class="grid1">
            <!--            <div class="ghichu" style=" width: 20px; background:red " >-----</div>
                        <div class="ghichu" style="border: none">Đã chờ quá 15'</div>-->

            <div class="hinhvuong quathoigian_max"></div><label class="diengiai">< 15' nữa đến giờ hẹn KQ hoặc đã quá hẹn</label>

        </div>
        <div class="grid1">
            <!--            <div class="ghichu" style=" width: 20px; background:yellow " >-----</div>
                        <div class="ghichu" style="border: none">Đã chờ quá 10'</div>-->
            <div class="hinhvuong quathoigian_min"></div><label class="diengiai">< 30' nữa đến giờ hẹn KQ</label>
        </div>
		
    </div>

    <div class="ui-layout-east right_col " >   
	<table id="rowed5" ></table>
	<div id='canh'> </div>
	<div id='tieude' class="ui-jqgrid-titlebar ui-corner-top ui-helper-clearfix">
	<input type="checkbox" id="group" /> Nhóm theo bệnh nhân
	<input type="checkbox" id="chitiet" disabled checked /> Hiển thị chi tiết
	</div>
    <div id='div_nonegroup'>
	<table id="rowed6" ></table>
    </div>
    <div id='div_group' style="display:none">
	<table id="rowed7" ></table>
	</div>
	
	</div>





</body>
</html> 

<script type="text/javascript">
    jQuery(document).ready(function() {
        //$('body').layout({ applyDemoStyles: true });
		create_combobox('#com_thuocnhom','#com_thuocnhom1',".data_phanloaikham","#data_phanloaikham",create_bs,500,300,'Nhóm');
		create_combobox('#com_thuochmk','#com_thuochmk1',".data_thuochmk","#data_thuochmk",create_bs2,500,300,'Hạng mục khám');
		//load_select1();
		load_hangmuckham();
		load_trangthai();
		load_nguoithuchien();
        create_layout();
		create_grid3();
        create_grid();
        create_grid2();

		create_grid4();
		create_grid5();
		resize_control;
		
        //alert($(".left_col").width() + "  "+ $(".right_col").width());
		$(window).resize(function() {
            temp = jQuery(window).height() - 4;
            $("#panel_main").css("height", temp + "px");
            resize_control();
        })

        $('.ui-layout-east,.ui-layout-center').bind('resize', function() {
            $("#rowed3,#rowed4 ").setGridWidth($(".left_col").width() - 4);
            $("#rowed5,#rowed6,#rowed7, #tieude ").setGridWidth($(".right_col").width() - 4);
			$("#rowed5,#rowed6,#rowed7 ").setGridHeight($(".right_col").height() - 300);
        }).trigger('resize');
        $("#rowed5,#rowed6,#rowed7").setGridHeight($(".right_col").height() - 375);
		//autocompleted_combobox("#com_thuocnhom");
		//autocompleted_combobox("#com_thuochmk");
		
		$("#add_new").click(function(e){
			//alert('ban da kich vao nut');
		//	links='resource.php?module=danhmuc&view=danh_muc_dinhmucgiamgia&id_form=60&id_loai=undefined';
			links='#';
			elem=1 + Math.floor(Math.random() * 1000000000); 
			width=90;
			height=90;   
			dialog_add_dm("Demo",width,height,elem,links); 
		})
		
		

		$( "#com_thuocnhom" ).change(function() {
			document.getElementById("thuocnhom").checked=true;
			$("#rowed3").jqGrid('setGridParam',{url:"resource.php?module=<?=$modules?>&view=<?=$view?>&action=data_ds_xephang_dangcho_group&id="+$("#com_thuocnhom").val()}).trigger('reloadGrid');
			$("#rowed6").jqGrid('setGridParam',{url:"resource.php?module=<?=$modules?>&view=<?=$view?>&action=data_ds_xephang_ketthuckham_group&gr=false&id="+$("#com_thuocnhom").val()}).trigger('reloadGrid');
			$("#rowed4").jqGrid('setGridParam',{url:"resource.php?module=<?=$modules?>&view=<?=$view?>&action=data_ds_xephang_dangkham_group&id="+$("#com_thuocnhom").val()}).trigger('reloadGrid');
			$("#rowed7").jqGrid('setGridParam',{url:"resource.php?module=<?=$modules?>&view=<?=$view?>&action=data_ds_xephang_ketthuckham_group&gr=true&id="+$("#com_thuocnhom").val()}).trigger('reloadGrid');

		});
		$( "#com_thuochmk" ).change(function() {
			document.getElementById("thuochangmuckham").checked=true;
		});

		
		$( "#xemtatca" ).click(function() {
		document.getElementById("thuocnhom").checked=false;
		document.getElementById("thuochangmuckham").checked=false;
		$("#rowed3").jqGrid('setGridParam',{url:"resource.php?module=<?=$modules?>&view=<?=$view?>&action=data_ds_xephang_dangcho"}).trigger('reloadGrid');
		$("#rowed6").jqGrid('setGridParam',{url:"resource.php?module=<?=$modules?>&view=<?=$view?>&action=data_ds_xephang_ketthuckham&gr=false"}).trigger('reloadGrid');
		$("#rowed7").jqGrid('setGridParam',{url:"resource.php?module=<?=$modules?>&view=<?=$view?>&action=data_ds_xephang_ketthuckham&gr=true"}).trigger('reloadGrid');
		$("#rowed4").jqGrid('setGridParam',{url:"resource.php?module=<?=$modules?>&view=<?=$view?>&action=data_ds_xephang_dangkham"}).trigger('reloadGrid');
		//resource.php?module=<?= $modules ?>&view=<?= $view ?>&action=data_ds_xephang_ketthuckham&gr=true

		});
		
		//sự kiên checkbox
		$('#group').change(function() {
		if($(this).is(':checked')==true){
		//alert($(this).is(':checked')+' - bạn đã chọn');

			document.getElementById("div_nonegroup").style.display='none';
			document.getElementById("div_group").style.display='block';
			$('#rowed7').setGridParam({loadonce: false, datatype: "json"});
			//$('#rowed7').setGridParam({loadonce: false, datatype: "json"}).trigger('reloadGrid');
			document.getElementById("chitiet").disabled=false;


		}
		else{
		//	alert($(this).is(':checked')+' - bạn đã bỏ chọn');
			document.getElementById("div_nonegroup").style.display='block';
			document.getElementById("div_group").style.display='none';
			document.getElementById("chitiet").disabled=true;
			}
		});
		
		$('#chitiet').change(function() {
		if($(this).is(':checked')==true){
		//alert($(this).is(':checked')+' - bạn đã chọn');
 		$("#rowed7").jqGrid('setGridParam',{groupingView: { groupCollapse : false} }).trigger('reloadGrid');
		}
		else{
			//alert($(this).is(':checked')+' - bạn đã bỏ chọn');
			//jQuery('#rowed7').jqGrid('groupingToggle','GroupingSummaryFooterGridghead_1');return true;
			
			 $("#rowed7").jqGrid('setGridParam',{groupingView: { groupCollapse : true} }).trigger('reloadGrid');
			}
		});
	
   // $('#div.tieude').insertAfter('#gbox_rowed6 div.ui-jqgrid-titlebar ');
		
    })

    var lastsel;
    function create_grid() {

        $("#rowed3").jqGrid({
            url: 'resource.php?module=<?= $modules ?>&view=<?= $view ?>&action=data_ds_xephang_dangcho',
            datatype: "json",
            colNames: ['LuotKham','ID loại khám', 'Mã BN', 'Họ tên', 'Tuổi', 'Giới tính', 'Hạng mục khám', 'Giờ hẹn', 'Giờ chỉ định','Người chỉ định','Ghi chú','Gọi khám','NotesStatus','ID Bệnh nhân '],
            colModel: [
                {name: 'ID_Kham', index: 'ID_Kham', search: false, width: "8%", align: 'left', hidden: true},
                {name: 'ID_LuotKham', index: 'ID_LuotKham', search: false, width: "8%",  align: 'left', hidden: true},
                {name: 'MaBenhNhan', index: 'MaBenhNhan', search: false, width: "5%", align: 'left', hidden: false},
                {name: 'TenBenhNhan', index: 'TenBenhNhan', search: false, width: "15%", align: 'left', hidden: false},
                {name: 'Tuoi', index: 'Tuoi', search: false, width: "5%",  align:'center', hidden: false},
                {name: 'GioiTinh', index: 'GioiTinh', search: false, width: "8%",  align: 'center', hidden: false},
                {name: 'TenLoaiKham', index: 'TenLoaiKham', search: false, width: "15%",  align: 'left', hidden: false},
                {name: 'GioHenKham', index: 'GioHenKham', search: false, width: "8%",  align: 'center', hidden: true, edittype: "text"},
				{name: 'NgayGioTao', index: 'NgayGioTao', search: false, width: "8%",  align: 'center', hidden: false, edittype: "text"},
				{name: 'TenBSChiDinh', index: 'TenBSChiDinh', search: false, width: "8%",  align: 'center', hidden: false},
				{name: 'GhiChu', index: 'GhiChu', search: false, width: "7%",  align: 'center', hidden: false},
                {name: 'GoiKham', index: 'GoiKham', search: false, width: "8%",  align: 'center', hidden: false},
				{name: 'NotesStatus', index: 'NotesStatus', search: false, width: "8%",  align: 'center', hidden: true},
				{name: 'ID_BenhNhan', index: 'ID_BenhNhan', search: false, width: "8%",  align: 'center', hidden: true},

            ],
            loadonce: false,
            scroll: 1,
            modal: true,
            rowNum: 200,
            rowList: [30, 50, 70],
            pager: '#prowed3',
            sortname: 'ID_Kham',
            height: 100,
            width: 100,
            viewrecords: true,
            ignoreCase: true,
            shrinkToFit: true,
            //hoverrows:false,
            //jsonReader:{repeatitems:true,subgrid:{repeatitems:false}},	
            sortorder: "desc",
            serializeRowData: function(postdata) {
                //$("#rowed3").trigger("reloadGrid");		
                //return postdata;
            },
            onSelectRow: function(id) {

                if (id !== lastsel) {
                    $("#rowed3").jqGrid('restoreRow', lastsel);
                    $("#rowed3").jqGrid('editRow', id, true);
                    lastsel = id;
                } else {
                    $("#rowed3").jqGrid('restoreRow', lastsel);
                    lastsel = "";
                    //alert(id)
                }
            },
            ondblClickRow: function(rowId, rowIndex, columnIndex) {
			var d = new Date();
			var curr_hour = d.getHours();
			var curr_minute = (d.getMinutes()<10?'0':'') + d.getMinutes(); //phút trả về 1 chữ số nếu bé hơn mười nên phải ghép 0 vào
			var curr_time = curr_hour + ":" + curr_minute+ " ";	
			var dd = d.getDate();
			var mm = d.getMonth()+1;//January is 0!`
			var yyyy = d.getFullYear();		
			ids = $('#rowed3').jqGrid('getDataIDs');				 
			$("#rowed3").jqGrid("setSelection",ids[0], true);	
				var rowData = jQuery(this).getRowData(rowId); 							
						var giogoc=rowData["NgayGioTao"].split(":");
						var thoigianMax=Date.today().set({
							millisecond: 0,
							second: 0,
							minute: parseInt(curr_minute),
							hour: parseInt(curr_hour),
							day: parseInt(dd),
							month: parseInt(mm)-1,
							year: parseInt(yyyy)
						});	
						var thoigianMin=Date.today().set({
							millisecond: 0,
							second: 0,
							minute: parseInt(curr_minute),
							hour: parseInt(curr_hour),
							day: parseInt(dd),
							month: parseInt(mm)-1,
							year: parseInt(yyyy)
						});
						var thoigianMin2=Date.today().set({
							millisecond: 0,
							second: 0,
							minute: parseInt(curr_minute),
							hour: parseInt(curr_hour),
							day: parseInt(dd),
							month: parseInt(mm)-1,
							year: parseInt(yyyy)
						});							
						var doituonggiogoc=Date.today().set({
							millisecond: 0,
							second: 0,
							minute: parseInt(giogoc[1]),
							hour: parseInt(giogoc[0]),
							day: parseInt(dd),
							month: parseInt(mm)-1,
							year: parseInt(yyyy)
						}); 			 
				
								thoigianMax=thoigianMax.addMilliseconds(-500);
								//thoigianMax=thoigianMax.addMinutes(-5);
								thoigianMax=thoigianMax.addHours(0).toString("MMMM dd, yyyy  H:mm:ss");
								thoigianMin=thoigianMin.addMinutes(-5);
								thoigianMin=thoigianMin.addHours(0).toString("MMMM dd, yyyy  H:mm:ss");
								thoigianMin2=thoigianMin2.addMinutes(0);
								thoigianMin2=thoigianMin2.addHours(0).toString("MMMM dd, yyyy  H:mm:ss");
								//console.log(hientai + '  ' +hientai1)
								doituonggiogoc=doituonggiogoc.toString("MMMM dd, yyyy  H:mm:ss");
								chuoidich= new Date(doituonggiogoc); 
								thoigianMin= new Date(thoigianMin);  
								thoigianMin2= new Date(thoigianMin2); 
								//console.log(thoigianMin);		
								thoigianMax= new Date(thoigianMax); 
								if(thoigianMin2<=chuoidich){										    
									 var strconfirm = confirm("Hạng mục "+rowData["TenLoaiKham"]+" của "+rowData["TenBenhNhan"]+"  chưa đến lượt thực hiện theo thứ tự chỉ định. Bạn có muốn gọi khám hay không!");
									if (strconfirm == true)
									{
									var ID_Kham = rowData['ID_Kham'];
									 alert('Chưa làm');  
									}
								}else if(chuoidich<=thoigianMax) {										 			   
									 var ID_Kham = rowData['ID_Kham'];
									 alert('Chưa làm');   
								 
								}
   
            },
			onSelectRow: function(rowId) { 
			//alert("")
                 var rowData = jQuery(this).getRowData(rowId); 
				 var ID_LuotKham = rowData['ID_LuotKham'];// alert(ID_LuotKham);				
				 $("#rowed5").jqGrid('setGridParam',{datatype: 'json',url:"resource.php?module=<?=$modules?>&view=<?=$view?>&action=data_select_theo_id_luotkham&id="+ID_LuotKham}).trigger('reloadGrid');
     			  window.TenBN = rowData['TenBenhNhan'];
				  window.MaBN= rowData['MaBenhNhan'];
				 
            },
            onRightClickRow: function(rowid, iRow, iCol, e) {              
                    if ($("#menu").width() + e.pageX > $(document).width()) {
                        $("#menu").css('left', e.pageX - $("#menu").width() + "px");
                    } else {
                        $("#menu").css('left', e.pageX + "px");
                    }
                    if ($("#menu").height() + e.pageY + 30 > $(document).height()) {
                        $("#menu").css('top', e.pageY  - $("#menu").height() + "px");
                    } else {
                        $("#menu").css('top', e.pageY + "px");
                    }
                    $("#menu").show(300);
 	 
                $(document).bind("contextmenu", function(e) {
                    return false;
                });
                //$("#stopxephang").addClass("disable");
                
            },
		
            loadComplete: function(data) {
				var tmp1 = $("#rowed3").jqGrid('getDataIDs'); 
				for(var i=0;i < tmp1.length;i++){ 
					var rowData = $("#rowed3").getRowData(tmp1[i]);	
					
					//var cl = tmp1[i]; //be = "<input style='height:22px;width:20px;' type='button' value='E' onclick=\"jQuery('#rowed3').editRow('"+cl+"');\" / 
					
					if(rowData["NotesStatus"]==1){
						var _class="do";
					}else if(rowData["NotesStatus"]==2){
						var _class="cam";
					}else  if(rowData["NotesStatus"]==0){
						var _class="xanh";
					}
					ghichu = "<input class='custom_button " + _class + "' style='height:22px;width:50px;' type='button' value='Ghi chú' onclick=\"moghichu('"+rowData["ID_BenhNhan"]+"','"+rowData["TenBenhNhan"]+"');\" />"; 
					goikham = "<input class='custom_button xanh' style='height:22px;width:50px;' type='button' value='Gọi khám' onclick=\"mogoikham('"+tmp1[i]+"','"+rowData["NgayGioTao"]+"','"+rowData["TenBenhNhan"]+"','"+rowData["TenLoaiKham"]+"');\" />";  
					$("#rowed3").jqGrid('setRowData',tmp1[i],{GhiChu:ghichu});
					$("#rowed3").jqGrid('setRowData',tmp1[i],{GoiKham:goikham});
				}
				
				
				//to mau nen
				var d = new Date();
				var curr_hour = d.getHours();
				var curr_minute = (d.getMinutes()<10?'0':'') + d.getMinutes(); //phút trả về 1 chữ số nếu bé hơn mười nên phải ghép 0 vào
				var curr_time = curr_hour + ":" + curr_minute+ " ";	
				var dd = d.getDate();
				var mm = d.getMonth()+1;//January is 0!`
				var yyyy = d.getFullYear();		
                ids = $('#rowed3').jqGrid('getDataIDs');				 
				$("#rowed3").jqGrid("setSelection",ids[0], true);	
                for (i = 0; i < ids.length; i++) {
                    var rowData = jQuery('#rowed3').getRowData(ids[i]);								
							var giogoc=rowData["NgayGioTao"].split(":");
							var thoigianMax=Date.today().set({
								millisecond: 0,
								second: 0,
								minute: parseInt(curr_minute),
								hour: parseInt(curr_hour),
								day: parseInt(dd),
								month: parseInt(mm)-1,
								year: parseInt(yyyy)
							});	
							var thoigianMin=Date.today().set({
								millisecond: 0,
								second: 0,
								minute: parseInt(curr_minute),
								hour: parseInt(curr_hour),
								day: parseInt(dd),
								month: parseInt(mm)-1,
								year: parseInt(yyyy)
							});
							var thoigianMin2=Date.today().set({
								millisecond: 0,
								second: 0,
								minute: parseInt(curr_minute),
								hour: parseInt(curr_hour),
								day: parseInt(dd),
								month: parseInt(mm)-1,
								year: parseInt(yyyy)
							});							
							var doituonggiogoc=Date.today().set({
								millisecond: 0,
								second: 0,
								minute: parseInt(giogoc[1]),
								hour: parseInt(giogoc[0]),
								day: parseInt(dd),
								month: parseInt(mm)-1,
								year: parseInt(yyyy)
							}); 			 
					
									thoigianMax=thoigianMax.addMilliseconds(-500);
									//thoigianMax=thoigianMax.addMinutes(-5);
									thoigianMax=thoigianMax.addHours(0).toString("MMMM dd, yyyy  H:mm:ss");
									thoigianMin=thoigianMin.addMinutes(-5);
									thoigianMin=thoigianMin.addHours(0).toString("MMMM dd, yyyy  H:mm:ss");
									thoigianMin2=thoigianMin2.addMinutes(0);
									thoigianMin2=thoigianMin2.addHours(0).toString("MMMM dd, yyyy  H:mm:ss");
									//console.log(hientai + '  ' +hientai1)
									doituonggiogoc=doituonggiogoc.toString("MMMM dd, yyyy  H:mm:ss");
									chuoidich= new Date(doituonggiogoc); 
									thoigianMin= new Date(thoigianMin);  
									thoigianMin2= new Date(thoigianMin2); 
									//console.log(thoigianMin);		
									thoigianMax= new Date(thoigianMax); 
									if((thoigianMin2>=chuoidich) && (thoigianMin<=chuoidich)){										    
										$("#rowed3").setCell(ids[i], "TenBenhNhan", '', "quathoigian_min"); 
									}else if(chuoidich<=thoigianMax) {										 			   
										 $("#rowed3").setCell(ids[i], "TenBenhNhan", '', "quathoigian_max"); 
										// alert(222);
									 
									}
									//console.log(thoigianMin2+'<='+chuoidich)
									//alert(chuoidich+'>='+thoigianMin);
                  
                }
			

				var caption= 'Bệnh nhân chưa khám ('+ jQuery("#rowed3").jqGrid('getGridParam', 'records')+')'+' [ <span class="demgio"> Tự động reload sau ' + reload_luoi_danhsach + ' giây</span> ]';
				jQuery("#rowed3").jqGrid('setCaption', caption);
				
                //kiemtra_dk_tg_load_completed();

			
            },
            caption: "Bệnh nhân chưa khám "
        });
   
		timer_danhsach("start");
        timer_title_danhsach("start");
        $("#rowed3").setGridWidth($(window).width() - 100);
        $("#rowed3").setGridHeight($(window).height() - $("#form_danh_muc_phong_ban").height() - 410);
        $("#rowed3").jqGrid('bindKeys', {});
      
		

    }
    function create_grid2()
    {
        $("#rowed4").jqGrid({
            url: 'resource.php?module=<?= $modules ?>&view=<?= $view ?>&action=data_ds_xephang_dangkham',
            datatype: "json",
            colNames: ['ID khám','ID Lượt khám', 'Mã BN', 'Họ tên', 'Tuổi', 'Giới', 'Hạng mục khám', 'Giờ c.định', 'Giờ hẹn KQ','Người chỉ định','Người thực hiện','Ghi chú','Nhập KQ','Trạng thái','NotesStatus','ID Bệnh nhân'],
            colModel: [
                {name: 'ID_Kham', index: 'ID_Kham', search: false, width: "20%",  align: 'left', hidden: true},
                {name: 'ID_LuotKham', index: 'ID_LuotKham', search: false, width: "20%",  align: 'left', hidden: true},
                {name: 'MaBenhNhan', index: 'MaBenhNhan', search: false, width: "20%",  align: 'left', hidden: false},
                {name: 'TenBenhNhan', index: 'TenBenhNhan', search: false, width: "40%",  align: 'left', hidden: false},
                {name: 'Tuoi', index: 'Tuoi', search: false, width: "10%",  align: 'center', hidden: false},
                {name: 'GioiTinh', index: 'GioiTinh', search: false, width: "10%",  align: 'center', hidden: false},
                {name: 'TenLoaiKham', index: 'TenLoaiKham', search: false, width: "40%",  align: 'left', hidden: false},
                {name: 'NgayGioTao', index: 'NgayGioTao', search: false, width: "20%",  align: 'center', hidden: false, edittype: "text"},
				{name: 'NgayGioHenTraKQ', index: 'NgayGioHenTraKQ', search: false, width: "20%",  align: 'center', hidden: false, edittype: "text"},
     
				{name: 'TenBSChiDinh', index: 'TenBSChiDinh', search: false, width: "20%",  align: 'center', hidden: false, edittype: "text"},
				{name: 'BSChuanDoan', index: 'BSChuanDoan', search: false, width: "20%",  align: 'center', hidden: false,formatter:"select",edittype:"select",editoptions: { value: nguoithuchien}, edittype: "text"},
                {name: 'GhiChu', index: 'GhiChu', search: false, width: "20%",  align: 'center', hidden: false, edittype: "text"},
                {name: 'GoiKham', index: 'GoiKham', search: false, width: "20%",  align: 'center', hidden: false, edittype: "text"},
                {name: 'ID_TrangThai', index: 'ID_TrangThai', search: false, width: "30%",  align: 'center', hidden: false,formatter:"select",edittype:"select",editoptions: { value: trangthai}, edittype: "text"},
				{name: 'NotesStatus', index: 'NotesStatus', search: false, width: "80%",  align: 'center', hidden: true},
				{name: 'ID_BenhNhan', index: 'ID_BenhNhan', search: false, width: "80%",  align: 'center', hidden: true},
                    
            ],
            loadonce: false,
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
            caption: "<?php get_text("BN_dangkham")?>",
			onSelectRow: function(rowId) { 
                 var rowData = jQuery(this).getRowData(rowId); 
				 var ID_LuotKham = rowData['ID_LuotKham'];
				// alert(ID_LuotKham);
     			$("#rowed5").jqGrid('setGridParam',{datatype: 'json',url:"resource.php?module=<?=$modules?>&view=<?=$view?>&action=data_select_theo_id_luotkham&id="+ID_LuotKham}).trigger('reloadGrid');
				 window.TenBN = rowData['TenBenhNhan'];
				  window.MaBN= rowData['MaBenhNhan'];	
            },
            ondblClickRow: function(rowId, rowIndex, columnIndex) {
			var rowData = jQuery(this).getRowData(rowId); 
				 var ID_Kham = rowData['ID_Kham'];
				 alert('Chưa làm');        
            },
            onRightClickRow: function(rowid, iRow, iCol, e) {                   
                    if ($("#menu2").width() + e.pageX > $(document).width()) {
                        $("#menu2").css('left', e.pageX - $("#menu2").width() + "px");
                    } else {
                        $("#menu2").css('left', e.pageX + "px");
                    }
                    if ($("#menu2").height() + e.pageY + 30 > $(document).height()) {
                        $("#menu2").css('top', e.pageY  - $("#menu2").height() + "px");
                    } else {
                        $("#menu2").css('top', e.pageY + "px");
                    }
                    $("#menu2").show(300);                
                $(document).bind("contextmenu", function(e) {
                    return false;
                });
                //$("#stopxephang").addClass("disable");
                
                
            },
			loadComplete: function(data) {
				/*if (powerXepHang_luoidangcho == 1)
                {
                    $("#playxephang").unbind("click");
                    $("#stopxephang").bind("click", function(e) {
                        timer_danhsach("stop");
                        timer_title_danhsach("stop");
                    })
                    $("#stopxephang").removeClass("ui-state-disabled");
                    $("#playxephang").addClass("ui-state-disabled");
                }*/
				
				
				
			var tmp = $("#rowed4").jqGrid('getDataIDs'); 
				for(var i=0;i < tmp.length;i++){ 
					var rowData = $("#rowed4").getRowData(tmp[i]);	
				
					if(rowData["NotesStatus"]==1){
						var _class="do";
					}else if(rowData["NotesStatus"]==2){
						var _class="cam";
					}else  if(rowData["NotesStatus"]==0){
						var _class="xanh";
					}
					ghichu = "<input class='custom_button " + _class + "' style='height:22px;width:50px;' type='button' value='Ghi chú' onclick=\"moghichu('"+rowData["ID_BenhNhan"]+"','"+rowData["TenBenhNhan"]+"');\" />"; 
					goikham = "<input class='custom_button xanh' style='height:22px;width:50px;' type='button' value='Nhập KQ' onclick=\"mogoikham('"+tmp[i]+"');\" />";  
					$("#rowed4").jqGrid('setRowData',tmp[i],{GhiChu:ghichu});
					$("#rowed4").jqGrid('setRowData',tmp[i],{GoiKham:goikham});
				}


				var caption= 'Bệnh nhân đang khám ('+ jQuery("#rowed4").jqGrid('getGridParam', 'records')+')'+' [ <span class="demgio"> Tự động reload sau ' + reload_luoi_danhsach + ' giây</span> ]';
				jQuery("#rowed4").jqGrid('setCaption', caption); // đếm bản ghi set vào caption
                //kiemtra_dk_tg_load_completed();


                //$("#rowed3").setColProp('ID_PhongBanCha', { editoptions: { value: ""} });				 
            },
        });
		
        $("#rowed4").setGridWidth($(window).width() - 100);
        $("#rowed4").setGridHeight($(window).height() - $("#k").height() - 410);
		$("#rowed4").jqGrid('bindKeys', {});
    }
	 

    function create_grid3()
    {
		var mydata = [];
        $("#rowed5").jqGrid({
           
            datatype: "local",
			data: mydata,

            colNames: ['Id khám', 'Hạng mục khám', 'Trạng thái', 'Người t.hiện', 'Giờ t.hiện', 'Ngày giờ tạo'],
            colModel: [
                {name: 'ID_Kham', index: 'ID_Kham', search: false, width: "2%", align: 'left', hidden: true},
                {name: 'ID_LoaiKham', index: 'ID_LoaiKham', search: false, width: "3%" , align: 'left',formatter:"select",edittype:"select",editoptions: { value: hangmuckham}, hidden: false},
                {name: 'ID_TrangThai', index: 'ID_TrangThai', search: false, width: "2%", align: 'center',formatter:"select",edittype:"select",editoptions: { value: trangthai}, hidden: false},
                {name: 'NguoiThucHien', index: 'NguoiThucHien', search: false, width: "2%", align: 'center',formatter:"select",edittype:"select",editoptions: { value: nguoithuchien}, hidden: false},
                {name: 'NgayGioThucHien', index: 'NgayGioThucHien', search: false, width: "2%", align: 'center', hidden: false},
				{name: 'NgayGioTao', index: 'NgayGioTao', search: false, width: "10%", align: 'center', hidden: true, edittype: "text"},

            ],
            loadonce: false,
            scroll: false,
			rownumbers: true,
            modal: true,
            rowNum: 30,
            rowList: [30, 50, 70],
            pager: '#prowed5',
            sortname: 'ID_LuotKham',
            height: 100,
            width: 100,
            viewrecords: true,
            ignoreCase: true,
            shrinkToFit: true,
            //hoverrows:false,
            //jsonReader:{repeatitems:true,subgrid:{repeatitems:false}},	
            sortorder: "desc",
            ondblClickRow: function(rowId, rowIndex, columnIndex) {
						var d = new Date();
			var curr_hour = d.getHours();
			var curr_minute = (d.getMinutes()<10?'0':'') + d.getMinutes(); //phút trả về 1 chữ số nếu bé hơn mười nên phải ghép 0 vào
			var curr_time = curr_hour + ":" + curr_minute+ " ";	
			var dd = d.getDate();
			var mm = d.getMonth()+1;//January is 0!`
			var yyyy = d.getFullYear();		
			ids = $('#rowed3').jqGrid('getDataIDs');				 
			$("#rowed3").jqGrid("setSelection",ids[0], true);	
				var rowData = jQuery(this).getRowData(rowId); 							
						var giogoc=rowData["NgayGioTao"].split(":");
						var thoigianMax=Date.today().set({
							millisecond: 0,
							second: 0,
							minute: parseInt(curr_minute),
							hour: parseInt(curr_hour),
							day: parseInt(dd),
							month: parseInt(mm)-1,
							year: parseInt(yyyy)
						});	
						var thoigianMin=Date.today().set({
							millisecond: 0,
							second: 0,
							minute: parseInt(curr_minute),
							hour: parseInt(curr_hour),
							day: parseInt(dd),
							month: parseInt(mm)-1,
							year: parseInt(yyyy)
						});
						var thoigianMin2=Date.today().set({
							millisecond: 0,
							second: 0,
							minute: parseInt(curr_minute),
							hour: parseInt(curr_hour),
							day: parseInt(dd),
							month: parseInt(mm)-1,
							year: parseInt(yyyy)
						});							
						var doituonggiogoc=Date.today().set({
							millisecond: 0,
							second: 0,
							minute: parseInt(giogoc[1]),
							hour: parseInt(giogoc[0]),
							day: parseInt(dd),
							month: parseInt(mm)-1,
							year: parseInt(yyyy)
						}); 			 
				
								thoigianMax=thoigianMax.addMilliseconds(-500);
								//thoigianMax=thoigianMax.addMinutes(-5);
								thoigianMax=thoigianMax.addHours(0).toString("MMMM dd, yyyy  H:mm:ss");
								thoigianMin=thoigianMin.addMinutes(-5);
								thoigianMin=thoigianMin.addHours(0).toString("MMMM dd, yyyy  H:mm:ss");
								thoigianMin2=thoigianMin2.addMinutes(0);
								thoigianMin2=thoigianMin2.addHours(0).toString("MMMM dd, yyyy  H:mm:ss");
								//console.log(hientai + '  ' +hientai1)
								doituonggiogoc=doituonggiogoc.toString("MMMM dd, yyyy  H:mm:ss");
								chuoidich= new Date(doituonggiogoc); 
								thoigianMin= new Date(thoigianMin);  
								thoigianMin2= new Date(thoigianMin2); 
								//console.log(thoigianMin);		
								thoigianMax= new Date(thoigianMax); 
								if(thoigianMin2<=chuoidich){										    
									 var strconfirm = confirm("Hạng mục này chưa đến lượt thực hiện theo thứ tự chỉ định. Bạn có muốn gọi khám hay không!");
									if (strconfirm == true)
									{
									var ID_Kham = rowData['ID_Kham'];
									 alert('Chưa làm');  
									}
								}else if(chuoidich<=thoigianMax) {										 			   
									 var ID_Kham = rowData['ID_Kham'];
									 alert('Chưa làm');   
								 
								}
         
            },
            
			loadComplete: function(data) {
			//to mau nen
				var d = new Date();
				var curr_hour = d.getHours();
				var curr_minute = (d.getMinutes()<10?'0':'') + d.getMinutes(); //phút trả về 1 chữ số nếu bé hơn mười nên phải ghép 0 vào
				var curr_time = curr_hour + ":" + curr_minute+ " ";	
				var dd = d.getDate();
				var mm = d.getMonth()+1;//January is 0!`
				var yyyy = d.getFullYear();		
                ids = $('#rowed5').jqGrid('getDataIDs');				 
				$("#rowed5").jqGrid("setSelection",ids[0], true);	
                for (i = 0; i < ids.length; i++) {
                    var rowData = jQuery('#rowed5').getRowData(ids[i]);								
							var giogoc=rowData["NgayGioTao"].split(":");
					if(rowData["ID_TrangThai"]=='DangCho'){
							var thoigianMax=Date.today().set({
								millisecond: 0,
								second: 0,
								minute: parseInt(curr_minute),
								hour: parseInt(curr_hour),
								day: parseInt(dd),
								month: parseInt(mm)-1,
								year: parseInt(yyyy)
							});	
							var thoigianMin=Date.today().set({
								millisecond: 0,
								second: 0,
								minute: parseInt(curr_minute),
								hour: parseInt(curr_hour),
								day: parseInt(dd),
								month: parseInt(mm)-1,
								year: parseInt(yyyy)
							});	
							var thoigianMin2=Date.today().set({
								millisecond: 0,
								second: 0,
								minute: parseInt(curr_minute),
								hour: parseInt(curr_hour),
								day: parseInt(dd),
								month: parseInt(mm)-1,
								year: parseInt(yyyy)
							});	
							var doituonggiogoc=Date.today().set({
								millisecond: 0,
								second: 0,
								minute: parseInt(giogoc[1]),
								hour: parseInt(giogoc[0]),
								day: parseInt(dd),
								month: parseInt(mm)-1,
								year: parseInt(yyyy)
							}); 			 
					
									thoigianMax=thoigianMax.addMilliseconds(-500);
									//thoigianMax=thoigianMax.addMinutes(-5);
									thoigianMax=thoigianMax.addHours(0).toString("MMMM dd, yyyy  H:mm:ss");
									thoigianMin=thoigianMin.addMinutes(-5);
									thoigianMin=thoigianMin.addHours(0).toString("MMMM dd, yyyy  H:mm:ss");
									thoigianMin2=thoigianMin2.addMinutes(0);
									thoigianMin2=thoigianMin2.addHours(0).toString("MMMM dd, yyyy  H:mm:ss");
									//console.log(hientai + '  ' +hientai1)
									doituonggiogoc=doituonggiogoc.toString("MMMM dd, yyyy  H:mm:ss");
									chuoidich= new Date(doituonggiogoc); 
									thoigianMin= new Date(thoigianMin);   
									thoigianMin2= new Date(thoigianMin2); 
									//console.log(thoigianMin);		
									thoigianMax= new Date(thoigianMax); 
									if((thoigianMin2>=chuoidich) && (thoigianMin<=chuoidich)){										    
										$("#rowed5").setCell(ids[i], "ID_LoaiKham", '', "quathoigian_min"); 
									}else if(chuoidich<=thoigianMax) {										 			   
										 $("#rowed5").setCell(ids[i], "ID_LoaiKham", '', "quathoigian_max"); 
									 
									}

							} //end if DangCho
							//console.log(rowData["ID_TrangThai"]);
							//alert(rowData["ID_TrangThai"])
							if((rowData["ID_TrangThai"]=='DaThucHien') || (rowData["ID_TrangThai"]=='Xong')  || (rowData["ID_TrangThai"]=='DaLayBenhPham') ){
									
									$("#rowed5").setCell(ids[i], "ID_LoaiKham", '', "cls_dathuchien");
								}//end if DangCho
							if(rowData["ID_TrangThai"]=='DangKham'){
									//alert(rowData["ID_TrangThai"])
									$("#rowed5").setCell(ids[i], "ID_LoaiKham", '', "cls_dangkham");
								}//end if DangCho
                  
                }//end For
				
			if(jQuery("#rowed5").jqGrid('getGridParam', 'records')<=0){
				var caption=' ';
				//alert(window.TenBN);
			}else{
				var caption= 'Các hạng mục khám của BN: '+'Tên bệnh nhân' +'('+ jQuery("#rowed5").jqGrid('getGridParam', 'records')+')';
				//jQuery("#rowed5").jqGrid('setCaption', caption); // đếm bản ghi set vào caption
                //kiemtra_dk_tg_load_completed();
				 jQuery("#rowed5").jqGrid('getGridParam', 'records')
				 var caption= 'Các hạng mục khám của BN: ' +window.TenBN+' - '+window.MaBN+' (' +jQuery("#rowed5").jqGrid('getGridParam', 'records')+')'
				jQuery("#rowed5").jqGrid('setCaption', caption);
				}

                //$("#rowed3").setColProp('ID_PhongBanCha', { editoptions: { value: ""} });				 
            },
            caption: "Các hạng mục khám của BN"
        });
        $("#rowed5").setGridWidth($(window).width() - 100);
        $("#rowed5").setGridHeight($(window).height() - $("#kha").height() - 400);
		$("#rowed5").jqGrid('bindKeys', {});
    }
	 function create_grid4()
    {
        $("#rowed6").jqGrid({
            url: 'resource.php?module=<?= $modules ?>&view=<?= $view ?>&action=data_ds_xephang_ketthuckham&gr=false',
            datatype: "json",
            colNames: ['LuotKham','Mã BN','Họ tên','Tuổi','Giới','Hạng mục khám','Giờ h.tất'],
            colModel: [
                {name: 'ID_LuotKham', index: 'ID_LuotKham', search: false, width: "2%",  align: 'left', hidden: true},
                {name: 'MaBenhNhan', index: 'MaBenhNhan', search: false, width: "2%",  align: 'left', hidden: false},
                {name: 'TenBenhNhan', index: 'TenBenhNhan', search: false, width: "5%",  align: 'left', hidden: false},
                {name: 'Tuoi', index: 'Tuoi', search: false, width: "1%",  align: 'center', hidden: false},
                {name: 'GioiTinh', index: 'GioiTinh', search: false, width: "1%",  align: 'center', hidden: false},
				{name: 'TenLoaiKham', index: 'TenLoaiKham', search: false, width: "4%",  align: 'left', hidden: false},
                {name: 'NgayGioKetThuc', index: 'NgayGioKetThuc', search: false, width: "2%",  align: 'center', hidden: false, edittype: "text"},
                        
            ],
            loadonce: false,
            scroll: 1,
            modal: true,
            rowNum: 100,
            rowList: [30, 50, 70],
            pager: '#prowed6',
            sortname: 'NgayGioKetThuc',
            height: 100,
            width: 100,
            viewrecords: true,
            ignoreCase: true,
            shrinkToFit: true,
            //hoverrows:false,
            //jsonReader:{repeatitems:true,subgrid:{repeatitems:false}},	
            sortorder: "desc",
			onRightClickRow: function(rowid, iRow, iCol, e) {

                var grid = jQuery('#rowed6');
                var colModel = grid.getGridParam('colModel');
                var colName = colModel[iCol].name;
                var colIndex = colModel[iCol].index;
                var rowData = jQuery('#rowed6').getRowData(rowid);
                window.rowData_grdangcho = rowData;
                if ($.trim(rowData[colName]) != "") {
                    window.rowid_danhcho = rowid;
                    window.from = colModel[iCol].name;
                    if ($("#menu3").width() + e.pageX > $(document).width()) {
                        $("#menu3").css('left', e.pageX - $("#menu3").width() + "px");
                    } else {
                        $("#menu3").css('left', e.pageX + "px");
                    }
                    if ($("#menu3").height() + e.pageY +30 > $(document).height()) {
                        $("#menu3").css('top', e.pageY - $("#menu3").height() + "px");
                    } else {
                        $("#menu3").css('top', e.pageY + "px");
                    }
                    $("#menu3").show(300);
                }
                 
                $(document).bind("contextmenu", function(e) {
                    return false;
                });
                
                
            },
			loadComplete: function(data) {
				
			

				var caption= 'Bệnh nhân đã hoàn tất ('+ jQuery("#rowed6").jqGrid('getGridParam', 'records')+')'+' [ <span class="demgio"> Tự động reload sau ' + reload_luoi_danhsach + ' giây</span> ]';
				jQuery("#rowed6").jqGrid('setCaption', caption); // đếm bản ghi set vào caption
                //kiemtra_dk_tg_load_completed();


                //$("#rowed3").setColProp('ID_PhongBanCha', { editoptions: { value: ""} });				 
            },
            caption: "Bệnh nhân đã hoàn tất "
        });
        $("#rowed6").setGridWidth($(window).width() - 100);
        $("#rowed6").setGridHeight($(window).height() - $("#k").height() - 400);
		$("#rowed6").jqGrid('bindKeys', {});
		
		
		
    }
	
	
	 function create_grid5()
    {
      
		$("#rowed7").jqGrid({
            url: 'resource.php?module=<?= $modules ?>&view=<?= $view ?>&action=data_ds_xephang_ketthuckham&gr=true',
            datatype: "json",
            colNames: ['LuotKham','Mã BN','Họ tên','Tuổi','Giới','Hạng mục khám','Giờ h.tất'],
            colModel: [
                {name: 'ID_LuotKham', index: 'ID_LuotKham', search: false, width: "10%",  align: 'left', hidden: true},
                {name: 'MaBenhNhan', index: 'MaBenhNhan', search: false, width: "10%",  align: 'left', hidden: false},
                {name: 'TenBenhNhan', index: 'TenBenhNhan', search: false, width: "30%",  align: 'left', hidden: true},
                {name: 'Tuoi', index: 'Tuoi', search: false, width: "10%",  align: 'center', hidden: false},
                {name: 'GioiTinh', index: 'GioiTinh', search: false, width: "10%",  align: 'center', hidden: false},
				{name: 'TenLoaiKham', index: 'TenLoaiKham', search: false, width: "30%",  align: 'left', hidden: false},
                {name: 'NgayGioKetThuc', index: 'NgayGioKetThuc', search: false, width: "10%",  align: 'center', hidden: false, edittype: "text"},
                        
            ],
            loadonce: false,
            scroll: 1,
            modal: true,
            rowNum: 100,
            rowList: [30, 50, 70],
            pager: '#prowed7',
            sortname: 'NgayGioKetThuc',
            height: 100,
            width: 100,
            viewrecords: true,
            ignoreCase: true,
            shrinkToFit: true,
			grouping:true, 
		  	groupingView : { 
			groupField : ['TenBenhNhan'],
			groupDataSorted : true ,
			groupCollapse : false,
			groupColumnShow :[false],
			groupText : ['<b>{0} - {1} hạng mục </b>']
		 	 }, 

            //hoverrows:false,
            //jsonReader:{repeatitems:true,subgrid:{repeatitems:false}},	
            sortorder: "desc",
			onRightClickRow: function(rowid, iRow, iCol, e) {

                var grid = jQuery('#rowed7');
                var colModel = grid.getGridParam('colModel');
                var colName = colModel[iCol].name;
                var colIndex = colModel[iCol].index;
                var rowData = jQuery('#rowed7').getRowData(rowid);
                window.rowData_grdangcho = rowData;
                if ($.trim(rowData[colName]) != "") {
                    window.rowid_danhcho = rowid;
                    window.from = colModel[iCol].name;
                    if ($("#menu3").width() + e.pageX > $(document).width()) {
                        $("#menu3").css('left', e.pageX - $("#menu3").width() + "px");
                    } else {
                        $("#menu3").css('left', e.pageX + "px");
                    }
                    if ($("#menu3").height() + e.pageY +30 > $(document).height()) {
                        $("#menu3").css('top', e.pageY - $("#menu3").height() + "px");
                    } else {
                        $("#menu3").css('top', e.pageY + "px");
                    }
                    $("#menu3").show(300);
                }
                 
                $(document).bind("contextmenu", function(e) {
                    return false;
                });
                
                
            },
			loadComplete: function(data) {
			

				var caption= 'Bệnh nhân đã hoàn tất ('+ jQuery("#rowed7").jqGrid('getGridParam', 'records')+')'+' [ <span class="demgio"> Tự động reload sau ' + reload_luoi_danhsach + ' giây</span> ]';
				jQuery("#rowed7").jqGrid('setCaption', caption); // đếm bản ghi set vào caption
                //kiemtra_dk_tg_load_completed();


                //$("#rowed3").setColProp('ID_PhongBanCha', { editoptions: { value: ""} });				 
            },
            caption: "Bệnh nhân đã hoàn tất "
        });
        $("#rowed7").setGridWidth($(window).width() - 100);
        $("#rowed7").setGridHeight($(window).height() - $("#k").height() - 400);
		$("#rowed7").jqGrid('bindKeys', {});
		

		
		
		
    }


   
    
    function create_layout() {
	window.kiemtrasearch = true;
        $('body').layout({
            resizerClass: 'ui-state-default'
                    , east: {
                resizable: true
                        , size: 450
                        , spacing_closed: 27
                        , togglerLength_closed: 85
                        , fxName: "drop"		// none, slide, drop, scale
                        , fxSpeed_open: 450
                        , fxSpeed_close: 450
                        , fxSettings_open: {easing: "easeInQuint"}
                , spacing_closed:		27
                        , togglerLength_closed:	85
                        , togglerAlign_closed: "center"
                        , togglerContent_closed: "<div id='menu_toggle'>X<BR>O<BR>N<BR>G</div>"
                        , togglerTip_closed: "Open & Pin Menu"
                        , sliderTip: "Slide Open Menu"
                        , slideTrigger_open: "mouseover"
                        , fxSettings_close: {easing: "easeOutQuint"}
                , onresize_end: function() {
                    $("#rowed3,#rowed4 ").setGridWidth($(".left_col").width() - 4);
                    $("#rowed5,#rowed6,#rowed7,#tieude ").setGridWidth($(".right_col").width() - 4);

                }
                , onopen_end: function() {
                    $("#rowed3,#rowed4 ").setGridWidth($(".left_col").width() - 4);
                    $("#rowed5,#rowed6,#rowed7 ").setGridWidth($(".right_col").width() - 4);

                }
                , onclose_end: function() {
                    $("#rowed3,#rowed4 ").setGridWidth($(".left_col").width() - 4);
                    $("#rowed5,#rowed6,#rowed7,#tieude ").setGridWidth($(".right_col").width() - 4);
					$("#tieude ").setGridWidth($(".right_col").width() - 4);

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
                    $("#rowed5,#rowed6,#rowed7,#tieude ").setGridWidth($(".right_col").width() - 4);

                }
                , onopen_end: function() {
                    $("#rowed3,#rowed4 ").setGridWidth($(".left_col").width() - 4);
                    $("#rowed5,#rowed6,#rowed7,#tieude ").setGridWidth($(".right_col").width() - 4);

                }
                , onclose_end: function() {
                    $("#rowed3,#rowed4 ").setGridWidth($(".left_col").width() - 4);
                    $("#rowed5,#rowed6,#rowed7 ").setGridWidth($(".right_col").width() - 4);
					 $("#tieude ").setGridWidth($(".right_col").width() - 1000);


                }
            }
        });
    }
	
 var reload_luoi_danhsach =<?php echo (get_system_config_("ThoiGianRefreshHangDoiCanLamSang")) ?>;
    function timer_danhsach(_value) {
        if (_value != "stop") {
            timer = setInterval(function() {
                if (window.kiemtrasearch == true) {
                    $('#rowed3').setGridParam({loadonce: false, datatype: "json"}).trigger('reloadGrid');
                    $('#rowed4').setGridParam({loadonce: false, datatype: "json"}).trigger('reloadGrid');
                    $('#rowed6').setGridParam({loadonce: false, datatype: "json"}).trigger('reloadGrid');
					$('#rowed7').setGridParam({loadonce: false, datatype: "json"}).trigger('reloadGrid');
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
                    $('#gbox_rowed4 .ui-jqgrid-title span.demgio').html(" Tự động reload sau " + tam + " giây");
                    $('#gbox_rowed6 .ui-jqgrid-title span.demgio').html(" Tự động reload sau " + tam + " giây");
					$('#gbox_rowed7 .ui-jqgrid-title span.demgio').html(" Tự động reload sau " + tam + " giây");

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
            $('#gbox_rowed4 .ui-jqgrid-title span.demgio').html(" Đang dừng xếp hàng");
            $('#gbox_rowed6 .ui-jqgrid-title span.demgio').html(" Đang dừng xếp hàng");
        }
    }
function load_select1(){
	window.tennhom = $.ajax({url: 'resource.php?module=web_services&function=get_auto_edit_option&action=index&term=&status=2&tables=NhomXepHang&id=ID_NhomXepHang&name=TenNhom', async: false, success: function(data, result) {if (!result) alert('Không load được nhóm xếp hạng');}}).responseText;	
	
	$('#demo').setColProp('com_thuocnhom', { editoptions: { value: tennhom} });
	$('#com_thuocnhom').empty();
	create_select("#com_thuocnhom",tennhom);
}
function load_select2(){
	window.idnhom = $.ajax({url: 'resource.php?module=web_services&function=get_auto_edit_option&action=index&term=&status=2&tables=NhomXepHang&id=ID_NhomXepHang&name=ID_NhomXepHang', async: false, success: function(data, result) {if (!result) alert('Không load được danh mục phòng ban');}}).responseText;	
	
	$('#demo').setColProp('com_thuocnhom', { editoptions: { value: idnhom} });
	$('#com_thuocnhom').empty();
	create_select("#com_thuocnhom",idnhom);
}


function functiontest2(rowId, tv, rawObject, cm, rdata){
	//rowData,ids,i,grid
	
	var grid=$(this);
 	var ids=rowId;
	var rowData =rdata; 
	//alert(rowData["NgayGioHenTraKQ"]);
	if((rowData["NgayGioHenTraKQ"]!=null && rowData["NgayGioHenTraKQ"]!=' ')){
			var d = new Date();
			var curr_hour = d.getHours();
			var curr_minute = (d.getMinutes()<10?'0':'') + d.getMinutes(); //phút trả về 1 chữ số nếu bé hơn mười nên phải ghép 0 vào
			var curr_time = curr_hour + ":" + curr_minute+ " ";	
			var dd = d.getDate();
			var mm = d.getMonth()+1;//January is 0!`
			var yyyy = d.getFullYear();		
			var giososanh=String("0:+30").split(":");
			var giososanh1=String("0:+15").split(":");
			var giogoc=rowData["NgayGioHenTraKQ"].split(":");
			var thoigianMax=Date.today().set({
				millisecond: 0,
				second: 0,
				minute: parseInt(curr_minute),
				hour: parseInt(curr_hour),
				day: parseInt(dd),
				month: parseInt(mm)-1,
				year: parseInt(yyyy)
			});	
			var thoigianMin=Date.today().set({
				millisecond: 0,
				second: 0,
				minute: parseInt(curr_minute),
				hour: parseInt(curr_hour),
				day: parseInt(dd),
				month: parseInt(mm)-1,
				year: parseInt(yyyy)
			});						 
			var doituonggiogoc=Date.today().set({
				millisecond: 0,
				second: 0,
				minute: parseInt(giogoc[1]),
				hour: parseInt(giogoc[0]),
				day: parseInt(dd),
				month: parseInt(mm)-1,
				year: parseInt(yyyy)
			}); 			  
			thoigianMax=thoigianMax.addMinutes(giososanh[1]);
			thoigianMax=thoigianMax.addHours(giososanh[0]).toString("MMMM dd, yyyy  H:mm:ss");
			thoigianMin=thoigianMin.addMinutes(giososanh1[1]);
			thoigianMin=thoigianMin.addHours(giososanh1[0]).toString("MMMM dd, yyyy  H:mm:ss");
			//console.log(hientai + '  ' +hientai1)
			doituonggiogoc=doituonggiogoc.toString("MMMM dd, yyyy  H:mm:ss");
			chuoidich= new Date(doituonggiogoc); 
			thoigianMin= new Date(thoigianMin);  
			thoigianMax= new Date(thoigianMax);	 
			if((chuoidich>=thoigianMin) && (chuoidich<=thoigianMax)){	
			 	return ' class="quathoigian_min"';	   
				//grid.setCell(ids, "GioHenKham", '', "quathoigian_max"); 
			}else 
				if (chuoidich<thoigianMin)
				return ' class="quathoigian_max"';			   
				//grid.setCell(ids, "GioHenKham", '', "quathoigian_min"); 
			}
	  }
//}
   
  

function load_hangmuckham(){
	
	window.hangmuckham = $.ajax({url: "resource.php?module=web_services&function=get_auto_edit_option&action=index&term=&status=2&tables=DM_LoaiKham&id=ID_LoaiKham&name=TenLoaiKham", async: false, success: function(data, result) {if (!result) alert('Không load được danh mục loại khám');}}).responseText;	
	//alert(window.hangmuckham);
	}
function load_trangthai(){
	
	window.trangthai = $.ajax({url: "resource.php?module=web_services&function=get_auto_edit_option&action=index&term=&status=2&tables=DM_TrangThaiCLSCuaBenhNhan&id=ID4Dev&name=TenTrangThaiCLSCuaBenhNhan", async: false, success: function(data, result) {if (!result) alert('Không load được danh mục loại khám');}}).responseText;	
	//alert(window.trangthai);
	}
function load_nguoithuchien(){
	
	window.nguoithuchien = $.ajax({url: "resource.php?module=web_services&function=get_auto_edit_option&action=index&term=&status=2&tables=DM_NhanVien&id=ID_NhanVien&name=NickName", async: false, success: function(data, result) {if (!result) alert('Không load được danh mục nhân viên');}}).responseText;	
	//alert(window.trangthai);
	}	
function create_bs(elem){	
		 $(elem).jqGrid({
		url:'resource.php?module=<?=$modules?>&view=<?=$view?>&action=data_nhomxephang',
		datatype: "json",	
		colNames:['Tên nhóm', 'Mô tả'],
		colModel:[			
			{name:'ten_nhom',index:'ten_nhom',hidden :false},
			{name:'mo_ta',index:'mo_ta',hidden :false},
			
		],
		hidegrid: false,
		gridview: true,
		loadonce: true,
		scroll: false,		 
		modal:true,	 
		rowNum: 200000,
		rowList:[],		
		sortname: 'ten_nhom',
		height:200,
		width: 470,
		viewrecords: true,	
		ignoreCase:true,
		shrinkToFit:true,
		cmTemplate: {sortable:false},
		sortorder: "desc",
		serializeRowData: function (postdata) { 	
		},
		onSelectRow: function(id){		
		var selr = jQuery(elem).jqGrid('getGridParam','selrow');
		//alert(selr);
		  		$("#rowed3").jqGrid('setGridParam',{url:"resource.php?module=<?=$modules?>&view=<?=$view?>&action=data_ds_xephang_dangcho_group&id="+selr}).trigger('reloadGrid');
			$("#rowed6").jqGrid('setGridParam',{url:"resource.php?module=<?=$modules?>&view=<?=$view?>&action=data_ds_xephang_ketthuckham_group&gr=false&id="+selr}).trigger('reloadGrid');
			$("#rowed4").jqGrid('setGridParam',{url:"resource.php?module=<?=$modules?>&view=<?=$view?>&action=data_ds_xephang_dangkham_group&id="+selr}).trigger('reloadGrid');
			$("#rowed7").jqGrid('setGridParam',{url:"resource.php?module=<?=$modules?>&view=<?=$view?>&action=data_ds_xephang_ketthuckham_group&gr=true&id="+selr}).trigger('reloadGrid');	
		document.getElementById("thuocnhom").checked=true;
		},
		ondblClickRow: function (id, rowIndex, columnIndex) {
					
 		},
		loadComplete: function(data) {	
		grid_filter_enter(elem) ;
		count = jQuery(elem).jqGrid('getGridParam', 'records');	
			if(count>0){
				ids =	($(elem).getDataIDs()[0]);				
				$(elem).jqGrid("setSelection",ids, true);
			}
		},	  
		
	});	
			 
	 $(elem).jqGrid('filterToolbar',{searchOperators : false,searchOnEnter:false,defaultSearch:"cn"});
	 $(elem).jqGrid('bindKeys', {} );
		
}  

function create_bs2(elem){	
		 $(elem).jqGrid({
		url:'local',
		datatype: "json",	
		colNames:['Tên hạng mục', 'Mô tả'],
		colModel:[			
			{name:'tenhangmuc',index:'tenhangmuc',hidden :false},
			{name:'mota',index:'mota',hidden :false},
			
		],
		hidegrid: false,
		gridview: true,
		loadonce: true,
		scroll: false,		 
		modal:true,	 
		rowNum: 200000,
		rowList:[],		
		sortname: 'tenhangmuc',
		height:200,
		width: 470,
		viewrecords: true,	
		ignoreCase:true,
		shrinkToFit:true,
		cmTemplate: {sortable:false},
		sortorder: "desc",
		serializeRowData: function (postdata) { 	
		},
		onSelectRow: function(id){		
		var selr = jQuery(elem).jqGrid('getGridParam','selrow');
		/*//alert(selr);
		  		$("#rowed3").jqGrid('setGridParam',{url:"resource.php?module=<?=$modules?>&view=<?=$view?>&action=data_ds_xephang_dangcho_group&id="+selr}).trigger('reloadGrid');
			$("#rowed6").jqGrid('setGridParam',{url:"resource.php?module=<?=$modules?>&view=<?=$view?>&action=data_ds_xephang_ketthuckham_group&gr=false&id="+selr}).trigger('reloadGrid');
			$("#rowed4").jqGrid('setGridParam',{url:"resource.php?module=<?=$modules?>&view=<?=$view?>&action=data_ds_xephang_dangkham_group&id="+selr}).trigger('reloadGrid');
			$("#rowed7").jqGrid('setGridParam',{url:"resource.php?module=<?=$modules?>&view=<?=$view?>&action=data_ds_xephang_ketthuckham_group&gr=true&id="+selr}).trigger('reloadGrid');			*/
		},
		ondblClickRow: function (id, rowIndex, columnIndex) {
					
 		},
		loadComplete: function(data) {	
		grid_filter_enter(elem) ;
		count = jQuery(elem).jqGrid('getGridParam', 'records');	
			if(count>0){
				ids =	($(elem).getDataIDs()[0]);				
				$(elem).jqGrid("setSelection",ids, true);
			}
		},	  
		
	});	
			 
	 $(elem).jqGrid('filterToolbar',{searchOperators : false,searchOnEnter:false,defaultSearch:"cn"});
	 $(elem).jqGrid('bindKeys', {} );
		
} 

//gọi menu chuột phải
        $("#menu,#menu2,#menu3").menu();
        $(document).bind("contextmenu", function(e) {
			var selr = jQuery('#rowed4').jqGrid('getGridParam','selrow'); 
			var rowData = $("#rowed4").getRowData(selr);	
			var ID_TrangThai = rowData['ID_TrangThai'];
			var ID_Kham = rowData['ID_Kham'];
			var TenBenhNhan = rowData['TenBenhNhan'];
			var MaBenhNhan = rowData['MaBenhNhan'];
			//alert(ID_TrangThai);
			if(ID_TrangThai=='DangKham'){
				$("#menu2_chuyenvedanhsachcho").bind("click", function(e) { //------
					//alert('');
					  var strconfirm = confirm("Bạn có chắc chắn muốn chuyển bệnh nhân "+TenBenhNhan+" ("+MaBenhNhan+") về danh sách chờ!");
					if (strconfirm == true)
					{
						//alert(ID_Kham);
						$.post('resource.php?module=<?= $modules ?>&view=<?= $view ?>&action=update_trangthai_ve_dangcho&id_kham='+ ID_Kham).done(function(data)
						{
							//alert(data); 
							if ($.trim(data) == '') {
								
								tooltip_message("<?php get_text1("sua_thanhcong") ?>");
								//$("#rowed3").trigger("reloadGrid");
								 $('#rowed3').setGridParam({loadonce: false, datatype: "json"}).trigger('reloadGrid');
								  $('#rowed4').setGridParam({loadonce: false, datatype: "json"}).trigger('reloadGrid');
								//$("#rowed4").trigger("reloadGrid");
								
							}
							else {
								tooltip_message("<?php get_text1("sua_khongthanhcong") ?>");
							}
						});
					}// end strconfirm
					$("#menu2_chuyenvedanhsachcho").unbind("click");
					
                 })//-------
				 
				 $("#menu2_chuyenvedanhsachcho").removeClass("ui-state-disabled");
				 

				}else{
					$("#menu2_chuyenvedanhsachcho").unbind("click");
					 $("#menu2_chuyenvedanhsachcho").addClass("ui-state-disabled");
					}
			
            return false;
        });
        $(document).bind("mouseup", function(e) {
            $("#menu,#menu2,#menu3").hide();
        });

$("#stopxephang").bind( "click", function(e) {
  
    timer_danhsach("stop");
    timer_title_danhsach("stop");
	document.getElementById("tieptucxephang").style.display="block";
	document.getElementById("dungxephang").style.display="none";
	document.getElementById("menu2_tieptucxephang").style.display="block";
	document.getElementById("menu2_dungxephang").style.display="none";
	document.getElementById("menu3_tieptucxephang").style.display="block";
	document.getElementById("menu3_dungxephang").style.display="none";
    
    startxephang
    })
$("#startxephang").bind( "click", function(e) {
  
    timer_danhsach("start");
    timer_title_danhsach("start");
	document.getElementById("tieptucxephang").style.display="none";
	document.getElementById("dungxephang").style.display="block";
	document.getElementById("menu2_tieptucxephang").style.display="none";
	document.getElementById("menu2_dungxephang").style.display="block";
	document.getElementById("menu3_tieptucxephang").style.display="none";
	document.getElementById("menu3_dungxephang").style.display="block";
    
    })
$("#refresh").bind( "click", function(e) {
    $('#rowed3').setGridParam({loadonce: false, datatype: "json"}).trigger('reloadGrid');
    })
$("#menu2_stopxephang").bind( "click", function(e) {
  
    timer_danhsach("stop");
    timer_title_danhsach("stop");
	document.getElementById("tieptucxephang").style.display="block";
	document.getElementById("dungxephang").style.display="none";
	document.getElementById("menu2_tieptucxephang").style.display="block";
	document.getElementById("menu2_dungxephang").style.display="none";
	document.getElementById("menu3_tieptucxephang").style.display="block";
	document.getElementById("menu3_dungxephang").style.display="none";

    
    startxephang
    })
$("#menu2_startxephang").bind( "click", function(e) {
  
    timer_danhsach("start");
    timer_title_danhsach("start");
	document.getElementById("tieptucxephang").style.display="none";
	document.getElementById("dungxephang").style.display="block";
	document.getElementById("menu2_tieptucxephang").style.display="none";
	document.getElementById("menu2_dungxephang").style.display="block";
	document.getElementById("menu3_tieptucxephang").style.display="none";
	document.getElementById("menu3_dungxephang").style.display="block";

    
    })
$("#menu2_refresh").bind( "click", function(e) {
    $('#rowed4').setGridParam({loadonce: false, datatype: "json"}).trigger('reloadGrid');
    })
$("#menu3_stopxephang").bind( "click", function(e) {
  
    timer_danhsach("stop");
    timer_title_danhsach("stop");
	document.getElementById("tieptucxephang").style.display="block";
	document.getElementById("dungxephang").style.display="none";
	document.getElementById("menu2_tieptucxephang").style.display="block";
	document.getElementById("menu2_dungxephang").style.display="none";
	document.getElementById("menu3_tieptucxephang").style.display="block";
	document.getElementById("menu3_dungxephang").style.display="none";

    
    startxephang
    })
$("#menu3_startxephang").bind( "click", function(e) {
  
    timer_danhsach("start");
    timer_title_danhsach("start");
	document.getElementById("tieptucxephang").style.display="none";
	document.getElementById("dungxephang").style.display="block";
	document.getElementById("menu2_tieptucxephang").style.display="none";
	document.getElementById("menu2_dungxephang").style.display="block";
	document.getElementById("menu3_tieptucxephang").style.display="none";
	document.getElementById("menu3_dungxephang").style.display="block";
    
    })
$("#menu3_refresh").bind( "click", function(e) {
    $('#rowed6').setGridParam({loadonce: false, datatype: "json"}).trigger('reloadGrid');
    })
	
$("#benhan").bind( "click", function(e) {
    alert('Chưa làm');
    })	
$(thongtinbenhnhan).bind( "click", function(e) {
    alert('Chưa làm');
    })	
$("#thongtinluotkham").bind( "click", function(e) {
    alert('Chưa làm');
    })
$("#menu2_benhan").bind( "click", function(e) {
    alert('Chưa làm');
    })	
$("#menu2_thongtinbenhnhan").bind( "click", function(e) {
    alert('Chưa làm');
    })	
$("#menu2_thongtinluotkham").bind( "click", function(e) {
    alert('Chưa làm');
    })		
$("#menu2_lichsudhst").bind( "click", function(e) {
    alert('Chưa làm');
    })	
$("#menu2_chitiethangmuckham").bind( "click", function(e) {
    alert('Chưa làm');
    })	

$("#menu3_chitiethangmuckham").bind( "click", function(e) {
    alert('Chưa làm');
    })	
	
function moghichu(id_benhnhan,hoten){
	elem = 1 + Math.floor(Math.random() * 1000000000);
	//alert("resource.php?module=hanhchinh&view=ghi_chu&id_form=230&idbenhnhan=" + id_benhnhan);
    dialog_main("Ghi chú của bệnh nhân: "+hoten, 95, 70, elem, 'resource.php?module=hanhchinh&view=ghi_chu&id_form=230&idbenhnhan=' + id_benhnhan);
}
function mogoikham(id,ngaygiotao,tenbn,loaikham){  //'"+tmp1[i]+"','"+rowData["NgayGioTao"]+"','"+rowData["TenBenhNhan"]+"','"+rowData["TenLoaiKham"]
	var d = new Date();
			var curr_hour = d.getHours();
			var curr_minute = (d.getMinutes()<10?'0':'') + d.getMinutes(); //phút trả về 1 chữ số nếu bé hơn mười nên phải ghép 0 vào
			var curr_time = curr_hour + ":" + curr_minute+ " ";	
			var dd = d.getDate();
			var mm = d.getMonth()+1;//January is 0!`
			var yyyy = d.getFullYear();		
			ids = $('#rowed3').jqGrid('getDataIDs');				 
			$("#rowed3").jqGrid("setSelection",ids[0], true);								
						var giogoc=ngaygiotao.split(":");
						var thoigianMax=Date.today().set({
							millisecond: 0,
							second: 0,
							minute: parseInt(curr_minute),
							hour: parseInt(curr_hour),
							day: parseInt(dd),
							month: parseInt(mm)-1,
							year: parseInt(yyyy)
						});	
						var thoigianMin=Date.today().set({
							millisecond: 0,
							second: 0,
							minute: parseInt(curr_minute),
							hour: parseInt(curr_hour),
							day: parseInt(dd),
							month: parseInt(mm)-1,
							year: parseInt(yyyy)
						});
						var thoigianMin2=Date.today().set({
							millisecond: 0,
							second: 0,
							minute: parseInt(curr_minute),
							hour: parseInt(curr_hour),
							day: parseInt(dd),
							month: parseInt(mm)-1,
							year: parseInt(yyyy)
						});							
						var doituonggiogoc=Date.today().set({
							millisecond: 0,
							second: 0,
							minute: parseInt(giogoc[1]),
							hour: parseInt(giogoc[0]),
							day: parseInt(dd),
							month: parseInt(mm)-1,
							year: parseInt(yyyy)
						}); 			 
				
								thoigianMax=thoigianMax.addMilliseconds(-500);
								//thoigianMax=thoigianMax.addMinutes(-5);
								thoigianMax=thoigianMax.addHours(0).toString("MMMM dd, yyyy  H:mm:ss");
								thoigianMin=thoigianMin.addMinutes(-5);
								thoigianMin=thoigianMin.addHours(0).toString("MMMM dd, yyyy  H:mm:ss");
								thoigianMin2=thoigianMin2.addMinutes(0);
								thoigianMin2=thoigianMin2.addHours(0).toString("MMMM dd, yyyy  H:mm:ss");
								//console.log(hientai + '  ' +hientai1)
								doituonggiogoc=doituonggiogoc.toString("MMMM dd, yyyy  H:mm:ss");
								chuoidich= new Date(doituonggiogoc); 
								thoigianMin= new Date(thoigianMin);  
								thoigianMin2= new Date(thoigianMin2); 
								//console.log(thoigianMin);		
								thoigianMax= new Date(thoigianMax); 
								if(thoigianMin2<=chuoidich){										    
									 var strconfirm = confirm("Hạng mục "+loaikham+" của "+tenbn+"  chưa đến lượt thực hiện theo thứ tự chỉ định. Bạn có muốn gọi khám hay không!");
									if (strconfirm == true)
									{
									var ID_Kham = id;
									 alert('Chưa làm');  
									}
								}else if(chuoidich<=thoigianMax) {										 			   
									 var ID_Kham = id;
									 alert('Chưa làm');   
								 
								}
}
function resize_control() {
        cao_left = $(".left_col").height() / 2 - 115;
        $("#rowed3,#rowed4 ").setGridWidth($(".left_col").width() - 11);
        $("#rowed3,#rowed4 ").setGridHeight(cao_left);
		 cao_right = $(".right_col").height() / 2 - 85;
        $("#rowed5,#rowed6,#rowed7 , #tieude").setGridWidth($(".right_col").width() - 11);
        $("#rowed5,#rowed6,#rowed7 ,#tieude").setGridHeight(cao_right);
    }
</script>