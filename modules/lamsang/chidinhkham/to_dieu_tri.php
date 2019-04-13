<style>
.navigator{
	display:inline-block;
	border:1px solid #327E04;
	padding-top:6px;
	margin-top:-4px;
	margin-left:2px;
	padding-bottom:1px;
	padding-left:2px;
	padding-right:1px; 
}
#rowed3 a:link{
	text-decoration:none !important;
	color:#000 !important;
}
#rowed3 a:hover{
	color:#F00 !important;
}
button#last,button#first,button#prev,button#next{
	font-size:10px!important;
	margin-top:-6px;
	/* padding-left:20px;*/
}
.ui-menu { 
	width: 200px;
	display:none;
	position:absolute;  	 
	box-shadow:0px 0px 3px #333;
	z-index:100000;  
}
.grid1{
	position:absolute;
	top:3px;
	left:80px;
}
.tdtct_chuahoantat{
	background:#FF6347;
}
a.trong{
	color:#F00 !important;
}
a.dangcho,a.dangkham{
	color:#7e7e7e !important;
}
a.dathuchien{
	color:#0066FF !important;
}
tr.ui-state-hover td.yelenh{
	background: none repeat scroll 0 0 #76C4EB !important;
	color: #363636;	
}

tr.ui-state-hover td.yelenh a.xong{
	color: #363636;
}
tr.ui-state-hover td.yelenh a.dieutriphoihop{
	color: #363636;
}
	</style>
<body class="body">
<div id="dialog-themtrang" title="Thông báo?" style="display:none">
  <p><span class="ui-icon ui-icon-alert" style="float:left; margin:0 7px 20px 0;"></span><span id="thongbaothemtrang"></span></p>
</div>
<ul id="menu" style="display:none" > 
	<li><a id='chuyenylenh' href="#"><span class="ui-icon ui-icon-trash"></span>Chuyển y lệnh sang trang mới</a></li>	
</ul>
   <span class="navigator" style="margin-top:0px;" >
        <button id="first">Bắt đầu</button>
        <button id="prev">Tới</button>
       Tờ điều trị số: <input type="text" id="input_navigator" style="width:15px!important; text-align:center; margin-top:-2px" value="0">/<span class="navigator_title">0</span>
        <button id="next">Lui</button>
        <button id="last">Kết thúc</button> 
    </span>
 <button id="todieutri_themtrang" style="margin-top:-4px;">Thêm trang</button> 
	<table id="rowed3" ></table>
  <div id="prowed3" ></div>
  <div id="dialog_themtrang_error" title="Thông báo" style="display:none">
	Trang hiện tại có trang trống nên không thể thêm trang mới?
</div>
<div id="dialog_xoaylenh" title="Thông báo" style="display:none">
	Bạn chắc chắn muốn xóa y lệnh này?
</div>
<div id="dialog_hoantat" title="Thông báo" style="display:none">
	Bạn chắc chắn muốn hoàn tất y lệnh này?
</div>

</body>
<script type="text/javascript">
var report_code=["ToDieuTri","PhieuChiDinh"];
var report_name=["Tờ điều trị","Phiếu chỉ định"];
$(document).ready(function() { 
	openform_shortcutkey(); //mở bằng phím tắt được thiết lập trong DB
	window.rs_tdt=''; 
	window.id_todieutri='';
	window.idtodieutrichitiet='';
	create_ylenh();
	getdieutri();
	$("#themylenh").addClass('ui-state-disabled');
	$("#todieutri_sua").addClass('ui-state-disabled');
	$("#todieutri_xoa").addClass('ui-state-disabled');
	$("#todieutri_hoantat").addClass('ui-state-disabled');	
	$("#todieutri_in").addClass('ui-state-disabled');
	$("#todieutri_chidinh_cls").addClass('ui-state-disabled');
	$("#todieutri_chidinh_dtph").addClass('ui-state-disabled');
	$("#menu").menu();
	$(document).bind("contextmenu", function(e) {
		var selr = jQuery('#rowed3').jqGrid('getGridParam','selrow'); 
		var rowData = $("#rowed3").getRowData(selr);	
		return false;
	});
		$(document).bind("mouseup", function(e) {
		$("#menu").hide();
	});
	<?php
		$data= new SQLServer;//tao lop ket noi SQL
        $params = array($_GET["idbenhannoitru"]);//tao param cho store 
        $store_name="{call GD2_ToDieuTriGetChanDoanByID_BenhAnNoiTru(?)}";//tao bien khai bao store
        $get=$data->query( $store_name,$params);//Goi store
        $excute= new SQLServerResult($get);//Ket noi lop xu ly SQL và truyen gia tri tra ve tu lop ket noi SQL
        $cdnoichuyenden= $excute->get_as_array();//Tra ve mang toan bo data lay duoc  
		echo "window.cd_noichuyenden='".$cdnoichuyenden[0]['CD_NoiChuyenDen']."';";
	?>
	$( "#dialog-themtrang" ).dialog({
      resizable: false,
	  autoOpen:false,
      height:180,
	  width:350,
      modal: true,
      buttons: {
        "YES": function() {
          $( this ).dialog( "close" );
		   $.post('resource.php?module=<?= $modules ?>&view=<?= $view ?>&action=todieutri_themtrang&idbenhannoitru=<?=$_GET['idbenhannoitru']?>&chandoan='+window.cd_noichuyenden).done(function(data){
			tooltip_message("Đã lưu");
			getdieutri();
		  });
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
	
	$("#chandoan").val(window.cd_noichuyenden);
	$( "#dialog_xoaylenh" ).dialog({
      resizable: false,
	  autoOpen:false,
      height:140,
      modal: true,
      buttons: {
        "OK": function() {
          $( this ).dialog( "close" );
		     $.post('resource.php?module=<?= $modules ?>&view=<?= $view ?>&action=controller_todieutrichitiet_del&idtodieutrichitiet='+window.idtodieutrichitiet).done(function(data){
				 if($.trim(data)==''){
					tooltip_message("Đã xóa");
					taidulieu(window.id_todieutri) ;
				}else{
					tooltip_message("Không thành công");	
				}
		 	});
        },
        'Cancel': function() {
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
	
	$( "#dialog_hoantat" ).dialog({
      resizable: false,
	  autoOpen:false,
      height:140,
      modal: true,
      buttons: {
        "OK": function() {
          $( this ).dialog( "close" );
		   $.post('resource.php?module=<?= $modules ?>&view=<?= $view ?>&action=controller_todieutri_hoantat&oper=hoantat&id_todieutri='+window.id_todieutri+'&idtodieutrichitiet='+window.idtodieutrichitiet).done(function(data){
				if($.trim(data)==''){
					tooltip_message("Đã hoàn tất");
					taidulieu(window.id_todieutri) ;
				}else{
					tooltip_message("Không thành công");	
				}
			});
        },
        'Cancel': function() {
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
	$( "#dialog_themtrang_error" ).dialog({
      resizable: false,
	  autoOpen:false,
      height:140,
      modal: true,
      buttons: {
        "OK": function() {
          $( this ).dialog( "close" );
        }
	  }
    });
	$("#rowed3").setGridWidth($('.body').width()-11);
	$("#rowed3").setGridHeight($('.body').height()-130);
	$(window).resize(function() {			
		$("#rowed3").setGridWidth($('.body').width()-11);
		$("#rowed3").setGridHeight($('.body').height()-130);
	});
	$("#input_navigator").keyup(function(e) {
		if(window.rs_tdt.length>0){
			if($("#input_navigator").val()<1 && $("#input_navigator").val()!=''){
				$("#input_navigator").val(1);
			}else if($("#input_navigator").val()>window.rs_tdt.length && $("#input_navigator").val()!=''){
				$("#input_navigator").val(window.rs_tdt.length);
			}
			taidulieu(window.rs_tdt[$("#input_navigator").val()-1]);
		}else{
			$("#input_navigator").val(0);
			}
    });
$("#todieutri_themtrang").click(function(e) {
	
	var checkpageisnull=jQuery("#rowed3").jqGrid('getGridParam', 'records');
	
	if(checkpageisnull>0 || $("#input_navigator").val()==0){
		if(window.rs_tdt.length>0){
			$("#thongbaothemtrang").html('Thêm trang mới các trang trước sẽ bị khóa. Bạn có muốn thêm mới không?');
		}else{
			$("#thongbaothemtrang").html('Bạn có chắc chắn muốn thêm trang mới không?');	
		}
		$( "#dialog-themtrang" ).dialog('open');
	}else{
		$( "#dialog_themtrang_error" ).dialog('open');
	}
});
$("#chuyenylenh").click(function(e) {
    if($("#input_navigator").val()==window.rs_tdt.length){
		$.post('resource.php?module=<?= $modules ?>&view=<?= $view ?>&action=todieutri_themtrang&idbenhannoitru=<?=$_GET['idbenhannoitru']?>&chandoan='+window.cd_noichuyenden).done(function(data){
		getdieutri();
		setTimeout(function(){
			//alert(window.rs_tdt.length);
		$.post('resource.php?module=<?= $modules ?>&view=<?= $view ?>&action=controller_todieutri_chuyentrang&idtodieutrichitiet='+ window.idtodieutrichitiet+'&tutrang='+window.rs_tdt[window.rs_tdt.length-2]+'&dentrang='+window.rs_tdt[window.rs_tdt.length-1]).done(function(data)
        {
            if ($.trim(data) == '') {
				tooltip_message("Chuyển thành công");
				taidulieu(window.rs_tdt[window.rs_tdt.length-1]);
			}else{
				tooltip_message("Chuyển không thành công");
				}
		});
		},500);
	});
	}else{
	/*	$.post('resource.php?module=<?= $modules ?>&view=<?= $view ?>&action=controller_todieutri_chuyentrang&idtodieutrichitiet='+ window.idtodieutrichitiet+'&toitrang='+window.rs_tdt[$("#input_navigator").val()]).done(function(data)
        {
            if ($.trim(data) == '') {
				tooltip_message("Chuyển thành công");
				taidulieu(window.rs_tdt[$("#input_navigator").val()]);
			}else{
				tooltip_message("Chuyển không thành công");
				}
		});*/
		
	}
});

$( "#todieutri_themtrang" ).button({text: true});
//$( "#themylenh,#todieutri_sua,#todieutri_xoa,#todieutri_hoantat" ).button('disable');

phanquyen();
$( "#first" ).button({
		  text: false,
		  icons: {
			primary: "ui-icon-seek-first"
		  }
		})
		.click(function() {
			navigator_load("first","first");
			
		});
		$( "#last" ).button({
		  text: false,
		  icons: {
			primary: "ui-icon-seek-end"
		  }
		})
		.click(function() {
			navigator_load("end","first");
			
		}); 
		$( "#next" ).button({
		  text: false,
		  icons: {
			primary: "ui-icon-seek-next"
		  }
		})
		.click(function() {
			navigator_load(1,"first");			 
		});  
		$( "#prev" ).button({
		  text: false,
		  icons: {
			primary: "ui-icon-seek-prev"
		  }
		})
		.click(function() {
			navigator_load(-1,"first");
		});

})//end ready

function create_ylenh(){	 
	 $("#rowed3").jqGrid({
		datastr:{},
        datatype: "jsonstring",		 	
		colNames:["Ngày Giờ", "Diễn biến bệnh", "Y lệnh","Ngày chỉ định","Thư ký","Ngày hoàn tất","Bác sỹ","","","cls","xn","dtph"],
		colModel:[
			{name:'Ngaygio',index:'Ngaygio', width:"10%",align:'center',hidden:false,editable:false},
			{name:'dienbien',index:'dienbien', width:"30%",align:'left',editable:false},		 
			{name:'ylenh',index:'ylenh',width:"50%",align:'left',hidden:false,editable:false,classes:'yelenh'},
			{name:'ngaychidinh',index:'ngaychidinh',width:"8%",align:'center',hidden:false,editable:false},
			{name:'thuky',index:'thuky',width:"8%",align:'center',hidden:false,editable:false},
			{name:'ngayhoantat',index:'ngayhoantat',width:"8%",align:'center',hidden:false,editable:false},
			{name:'bacsy',index:'bacsy',width:"8%",align:'center',hidden:false,editable:false},
			{name:'iddonthuoc',index:'iddonthuoc',width:"8%",align:'center',hidden:true,editable:false},
			{name:'iddonthuoctralai',index:'iddonthuoctralai',width:"8%",align:'center',hidden:true,editable:false},
			{name:'canlamsang',index:'canlamsang',width:"8%",align:'center',hidden:true,editable:false},	
			{name:'xetnghiem',index:'xetnghiem',width:"8%",align:'center',hidden:true,editable:false},	
			{name:'dieutriphoihop',index:'dieutriphoihop',width:"8%",align:'center',hidden:true,editable:false},								                            
		],
		loadonce: false,
		scroll: false,		 
		modal:true,
		scrollrows : true,
        shrinkToFit: true,
		rowNum: 10000000,
		rowList:[],	
		sortname: 'ID_LoaiKham',
		height:100,
		width:100,
		viewrecords: false,	
		ignoreCase:true,	
		sortorder: "asc",
		pager: '#prowed3',
		  cmTemplate: {sortable: false},
	    grouping: true,
		pgbuttons: false, 
        pgtext: null, 		
		cellEdit: true,
		cellsubmit: 'remote',
		cellurl : 'resource.php?module=<?= $modules ?>&view=<?= $view ?>&action=controller_ngaythuoc',
		onCellSelect: function (rowid,iCol,cellcontent,e) {			
        	 window.idtodieutrichitiet=rowid;
			// alert(window.idtodieutrichitiet)
			 var rowData = jQuery('#rowed3').jqGrid ('getRowData', rowid);
			 if(rowData['bacsy']!=''){
				//$("#themylenh").addClass('ui-state-disabled');
				$("#todieutri_sua").addClass('ui-state-disabled');
				$("#todieutri_xoa").addClass('ui-state-disabled');
				$("#todieutri_hoantat").addClass('ui-state-disabled');	
				
				if(rowData['canlamsang']==1 || rowData['xetnghiem']==1){
					$("#todieutri_chidinh_cls").removeClass('ui-state-disabled');
				}else{
					$("#todieutri_chidinh_cls").addClass('ui-state-disabled');
				}
				if(rowData['dieutriphoihop']==1){
					$("#todieutri_chidinh_dtph").removeClass('ui-state-disabled');		
				}else{
					$("#todieutri_chidinh_dtph").addClass('ui-state-disabled');
				}
			 }else{
				//$("#themylenh").removeClass('ui-state-disabled');
				$("#todieutri_sua").removeClass('ui-state-disabled');
				$("#todieutri_xoa").removeClass('ui-state-disabled');
				$("#todieutri_hoantat").removeClass('ui-state-disabled');
				$("#todieutri_chidinh_cls").addClass('ui-state-disabled');
				$("#todieutri_chidinh_dtph").addClass('ui-state-disabled');
			 }
        },
		serializeCellData: function (postdata) { 
				postdata.ID_LuotKham=$("#rowed3").getRowData( rowed3_select)['ID_LuotKham'];			
				postdata.id_donthuoc=$("#rowed3").getRowData( rowed3_select)['ID_DonThuoc'];
				postdata.id_benhnhan=window.id_benhnhan;
                return postdata;			
		},		
		onSelectRow: function(id){				

		},
		onRightClickRow: function(rowid, iRow, iCol, e) {
			if(window.rs_tdt.length==$("#input_navigator").val()){
				window.idtodieutrichitiet=rowid;
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
			}
		},
		
		ondblClickRow: function (rowId, rowIndex, columnIndex) {
					
 		},
		loadComplete: function(data) {
			/*
				tr.ui-state-hover td.yelenh a.xong{
					color: #363636;
				}
				tr.ui-state-hover td.yelenh a.dieutriphoihop{
					color: #363636;
				}
			*/
			$("tr.ui-state-hover td.yelenh a.xong").css('color','#363636');
			$("tr.ui-state-hover td.yelenh a.dieutriphoihop").css('color','#363636');
			//alert($("#rowed3").getGridParam("reccount"));
			/*if($("#rowed3").getGridParam("reccount")>0){
				$("#todieutri_in").removeClass('ui-state-disabled');	
			}else{
				$("#todieutri_in").addClass('ui-state-disabled');
			}*/
			var d=0;
		var tmp1 = $("#rowed3").jqGrid('getDataIDs'); 
			for(var i=0;i < tmp1.length;i++){
				var rowData = $("#rowed3").getRowData(tmp1[i]);	
				if(rowData["ngayhoantat"]==""){
					jQuery("#rowed3").jqGrid('setCell', tmp1[i], 'Ngaygio', '', {'background': '#FF6347'});
				}else{
					d=d+1;	
				}
			}
			if(d>0){
				$("#todieutri_in").removeClass('ui-state-disabled');	
			}else{
				$("#todieutri_in").addClass('ui-state-disabled');
			}
		},
		caption: "Tờ điều trị <span><div class='grid1 '><div class='hinhvuong tdtct_chuahoantat'></div><label class='diengiai'>Chưa hoàn tất</label></div></span>"
	});
	
	$("#rowed3").jqGrid('navGrid',"#prowed3",{add: false, edit:false, del: false,refresh:false, search:false,closeAfterEdit: true,clearAfterAdd :true,closeOnEscape : true,
	}, //options						 
		{}, // edit options
		{}, // add options							  
		{}, // del options
		{} // search options
	);
	$("#rowed3").jqGrid('bindKeys', {"onEnter":function( rowid ) {} } );		 	
	$("#rowed3").jqGrid('navButtonAdd', '#prowed3', {caption: "Thêm mới", buttonicon: 'ui-icon-document-b',id : 'themylenh',
            onClickButton: function() {
				
					parent.postMessage('moylenh|||'+window.rs_tdt[window.rs_tdt.length-1],'*');
				 
            },
            title: "Thêm mới",
            position: "last"
    });
	$("#rowed3").jqGrid('navButtonAdd', '#prowed3', {caption: "Sửa", buttonicon: ' ui-icon-pencil',id : 'todieutri_sua',
            onClickButton: function() {
				var rowData = jQuery('#rowed3').jqGrid ('getRowData',window.idtodieutrichitiet);
				 parent.postMessage('suaylenh|||'+window.id_todieutri+'|||'+window.idtodieutrichitiet+'|||'+rowData['iddonthuoc']+'|||'+rowData['iddonthuoctralai'],'*');
				 
            },
            title: "Sửa",
            position: "last"
    });
	$("#rowed3").jqGrid('navButtonAdd', '#prowed3', {caption: "Xóa", buttonicon: 'ui-icon-closethick',id : 'todieutri_xoa',
            onClickButton: function() {
				$( "#dialog_xoaylenh" ).dialog('open');
            },
            title: "Xóa",
            position: "last"
    });
	$("#rowed3").jqGrid('navButtonAdd', '#prowed3', {caption: "Hoàn tất", buttonicon: 'ui-icon-locked',id : 'todieutri_hoantat',
            onClickButton: function() {
				$( "#dialog_hoantat" ).dialog('open');
            },
            title: "Hoàn tất",
            position: "last"
    });
	$("#rowed3").jqGrid('navButtonAdd', '#prowed3', {caption: "In tờ điều trị", buttonicon: 'ui-icon-print',id : 'todieutri_in',
            onClickButton: function() {
				if($("#input_navigator").val()<10){
					var so="0"+$("#input_navigator").val();	
				}else{
					var so=$("#input_navigator").val();		
				}
					$.cookie("in_status", "print_preview"); 
					dialog_report("Xem trước khi in",90,90,"u78787878975f","resource.php?module=report&view=<?=$modules?>&action=todieutri&header=top&idluotkham=<?= $_GET["idluotkham"]?>&idbenhannoitru=<?= $_GET["idbenhannoitru"]?>&idtodieutri="+window.id_todieutri+"&so="+so+"&type=report&id_form=10",'ToDieuTri');
            },
            title: "In tờ điều trị",
            position: "last"
    });
	$("#rowed3").jqGrid('navButtonAdd', '#prowed3', {caption: "In y lệnh cận lâm sàng", buttonicon: 'ui-icon-print',id : 'todieutri_chidinh_cls',
            onClickButton: function() {
				
					var selRow = jQuery("#rowed3").jqGrid('getGridParam','selrow');
					//alert(selRow)
					var rowData = jQuery('#rowed3').jqGrid ('getRowData', selRow);
					$.cookie("in_status", "print_preview"); 
					dialog_report("Xem trước khi in",90,90,"u78787878975f","resource.php?module=report&view=<?=$modules?>&action=todieutri_phieuchidinh&header=top&id_benhnhan=<?= $_GET["idbenhnhan"]?>&idtodieutrichitiet="+window.idtodieutrichitiet+"&canlamsang="+rowData['canlamsang']+"&xetnghiem="+rowData['xetnghiem']+"&type=report&id_form=10",'PhieuChiDinh');
            },
            title: "In y lệnh cận lâm sàng",
            position: "last"
    });
	$("#rowed3").jqGrid('navButtonAdd', '#prowed3', {caption: "In y lệnh điều trị phối hợp", buttonicon: 'ui-icon-print',id : 'todieutri_chidinh_dtph',
            onClickButton: function() {
					var selRow = jQuery("#rowed3").jqGrid('getGridParam','selrow'); 
					var rowData = jQuery('#rowed3').jqGrid ('getRowData', selRow);
					$.cookie("in_status", "print_preview"); 
					dialog_report("Xem trước khi in",90,90,"u78787878975f","resource.php?module=report&view=<?=$modules?>&action=todieutri_dieutriphoihop_all&header=top&id_benhnhan=<?= $_GET["idbenhnhan"]?>&idtodieutrichitiet="+window.idtodieutrichitiet+"&type=report&id_form=10",'PhieuChiDinh');
            },
            title: "In y lệnh điều trị phối hợp",
            position: "last"
    });
	 
} 
function navigator_load(_value) {
	//alert(_value)
	if(_value=='end'){
		$("#input_navigator").val(window.rs_tdt.length);
		window.id_todieutri=window.rs_tdt[window.rs_tdt.length-1];
	}else if(_value=='first'){
		if(window.rs_tdt.length>0){
			$("#input_navigator").val(1);
		}
		window.id_todieutri=window.rs_tdt[0];
	}else{
		var tam =$("#input_navigator").val();
		if(parseInt(tam)+parseInt(_value)>window.rs_tdt.length || parseInt(tam)+parseInt(_value)<1){
			return false;	
		}else{
			$("#input_navigator").val(parseInt(tam)+parseInt(_value));
			window.id_todieutri=window.rs_tdt[parseInt(tam)+parseInt(_value)-1];
		}
	}
//	alert(window.id_todieutri);
	taidulieu(window.id_todieutri);
}

function dialog(){
	var winW = $('body').width();
	var winH = $('body').height();
	$('#ylenh_dialog').dialog({
		title:'Nhập lý do sửa',
		resizable: false,
		height:winH,
		width:winW,
		modal: true,
		autoOpen :false,     
		close: function( event, ui ) {
		 
		},
	})
}
function getdieutri(){
 $.post('resource.php?module=<?= $modules ?>&view=<?= $view ?>&action=data_todieutri&idbenhannoitru=<?=$_GET['idbenhannoitru']?>').done(function(data){
	if(data!=''){
		 window.rs_tdt=data.split('|||');
		 $(".navigator_title").html(window.rs_tdt.length);
		 $("#input_navigator").val(window.rs_tdt.length);
		 window.id_todieutri=window.rs_tdt[window.rs_tdt.length-1];
		 taidulieu(window.id_todieutri);
		 //if(window.id_todieutri!=''){
		//	$("#themylenh").removeClass('ui-state-disabled');
		// }
	}
 });	
}
function taidulieu(_val){
	if(window.id_todieutri!='' && window.rs_tdt.length==$("#input_navigator").val()){
		$("#themylenh").removeClass('ui-state-disabled');
	}else{
		$("#themylenh").addClass('ui-state-disabled');
		}
	$('#rowed3').jqGrid('clearGridData');
	//$("#themylenh").addClass('ui-state-disabled');
	$("#todieutri_sua").addClass('ui-state-disabled');
	$("#todieutri_xoa").addClass('ui-state-disabled');
	$("#todieutri_hoantat").addClass('ui-state-disabled');	
	$("#todieutri_chidinh_cls").addClass('ui-state-disabled');
	$("#todieutri_chidinh_dtph").addClass('ui-state-disabled');
$("#rowed3").jqGrid('setGridParam',{datatype: 'json',url:"resource.php?module=<?=$modules?>&view=<?=$view?>&action=data_todieutrigetall&idtodieutri="+_val}).trigger('reloadGrid');	
}
function moform(_val,_val2,_val3,_val4){
	if(_val3=='Xong'){
		if(_val==3918){
			parent.postMessage('goiform|||'+_val+'|||Framingham','*');
		}else if(_val2==''){
			tooltip_message("Form này chưa sẵn sàng để gọi");
		}else if(_val2==25){
			parent.postMessage('goiform|||'+_val+'|||vat_ly_tri_lieu|||'+_val4,'*');
		}else if(_val2==52){
			parent.postMessage('goiform|||'+_val+'|||ke_hoach_hoa_gia_dinh|||'+_val4,'*');
		}else{
			parent.postMessage('goiform|||'+_val+'|||'+_val2+'|||'+_val4,'*');
		}
	}
}
</script>