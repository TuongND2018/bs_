<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<style>
body{
	background-color:#FBFAF5;
}
#loaidoituong1{
	width:80px !important;
}
#n_top{
	height:60px;
	background-color:#FBFAF5;
	border:1px solid #ccc;
	margin-left:5px;
	margin-right:5px;
	/*border-top-right-radius:4px;
	border-top-left-radius:4px;*/
	border-radius:4px;
	padding-top:5px;
	padding-left:5px;
}
#n_top_left{
	width:49%;
	float:left;
}
#n_top_right{
	width:49%;
	float:left;
}
#hoantra{
	width:100px;
	height:55px;
	float:left;
	margin-left:10px;
}
</style>
</head>
<body>
	<div id="n_top">
    <?php
	 $data= new SQLServer;//tao lop ket noi SQL
        $params = array();//tao param cho store 
        $store_name="{call GD2_GetSoPhieu_PhieuHoanTra()}";//tao bien khai bao store
        $get_thongtin=$data->query( $store_name,$params);//Goi store
        $excute= new SQLServerResult($get_thongtin);//Ket noi lop xu ly SQL và truyen gia tri tra ve tu lop ket noi SQL
        $thongtin= $excute->get_as_array();//Tra ve mang toan bo data lay duoc
	?>
    <table width="100%"  cellpadding="0" cellspacing="0"  border="0">
  <tr>
    <td width="85px">Mã phiếu:</td>
    <td width="125px"><label id="sophieu"  style="font-weight:bold"><?=$thongtin[0]['SoPhieu']?> </label></td>
    <td width="85px">Người tạo:</td>
    <td width="125px"><label id="nguoitao" style="font-weight:bold"><?=$_SESSION['user']['fullname']?> </label></td>
    <td width="78px">Ngày tạo:</td>
    <td width="68px"><label  style="font-weight:bold"><?php echo date("d/m/".$_SESSION["config_system"]["namUI"])?></label></td>
    <td width="55px">Khoa:</td>
    <td  width="155px"><label id="khoa"  style="font-weight:bold"><?=$_GET['tenkhoa']?></label></td>
    <td width="50px">Ghi chú:</td>
    <td rowspan="2" >
    <textarea id="ghichu" style="width:290px; height:45px; float:left;"></textarea>
	<button id="hoantra">Tạo phiếu hoàn trả</button>
        </td>
  </tr>
  <tr>
    <td width="50px">Loại đối tượng:</td>
    <td width="100px"><select name="loaidoituong" id="loaidoituong">
      <option value="Viện phí">Viện phí</option>
      <option value="BHYT">Bảo hiểm y tế</option>
    </select></td>
    <td width="50px">Người hoàn trả:</td>
    <td width="125px"><input type="text" id="nguoihoantra" style=" width:80px;"  /></td>
    <td width="56px">Ngày hoàn trả:</td>
    <td><!--<label  style="font-weight:bold"><?php echo date("d/m/".$_SESSION["config_system"]["namUI"])?></label>-->
   <input type="text" id="ngayhoantra" value="<?php echo date("d/m/".$_SESSION["config_system"]["namUI"])?>"  style=" width:55px; text-align:center" /></td>
    <td width="30px">Phân loại:</td>
    <td  width="130px"><input type="text" id="phanloai" style="width: 105px;"/></td>
    <td width="50px">&nbsp;</td>
    </tr>
</table>
   
    </div>
    <div id="main_content">
    	<div class="ui-layout-north n_tren"> 
            <table id="rowed3" ></table>
        </div>
        <div class="ui-layout-center n_duoi"> 
            <table id="rowed4" ></table>
        </div>
    </div>
</body>
<script type="text/javascript">
$(document).ready(function(e) {
	checkbox_grid('gs_Chon','#rowed3');
	//$("#ngaylinh").datepicker();
	$("#ngayhoantra").datepicker({
		changeMonth: true,
		changeYear: true,
		dateFormat: $.cookie("ngayJqueryUi")
        });
	$("#hoantra").button();
	$("#main_content").css("height",$(window).height()-60+"px");			 
	$("#main_content").fadeIn(1000); 
    create_layout();
	create_grid();
	create_grid2();
	resize_control();
	create_combobox_new('#nguoihoantra',create_nguoilinh,'bw','','data_nhanvien',<?=$_SESSION['user']['id_user']?>);
	create_combobox_new('#phanloai',create_phanloai,'bw','','data_phanloai');
	autocompleted_combobox_callback('#loaidoituong',doituong_callback);


	$("#hoantra").click(function(e) {
		var iddonthuoctralai='';
		if($("#ngayhoantra").val()!=''){
			var d=0;
			$('#rowed3 tr td[aria-describedby="rowed3_Chon"] input[type="checkbox"]').each(function() {
					var row = $(this).closest('tr.jqgrow');
					var tam = row.attr('id');
					 var rowData = $("#rowed3").getRowData(tam);
					//$(this).prop('checked', true);
					 if($(this).is( ":checked" )) {
						d=1; 
					  iddonthuoctralai+=rowData["ID_DonThuocTraLai"]+";;";				 
					 }
				//$(this).prop('checked')
			});
			if(d==1){
				$.post('resource.php?module=<?= $modules ?>&view=<?= $view ?>&action=controller_hoantrathuoc&oper=add&hienmaloi=a&idkhoa=<?=$_GET['idkhoa']?>&loaidoituong='+$("#loaidoituong").val()+'&nguoihoantra='+$("#nguoihoantra_hidden").val()+'&ghichu='+$("#ghichu").val()+'&iddonthuoctralai='+iddonthuoctralai+'&phanloaithuoc='+window.idphanloai+'&ngayhoantra='+$("#ngayhoantra").val()).done(function(data){
					parent.postMessage('dongdialog','*');
				});
			}else{
				tooltip_message("Lỗi, Bạn chưa chọn đơn thuốc cần hoàn trả");
			}
		}else{
			tooltip_message("Lỗi, Bạn chưa chọn người hoàn trả");
			}
    });
});//end ready
$(window).resize(function() {
	$("#main_content").css("height",$(window).height()-60+"px");			 
	$("#main_content").fadeIn(1000);
	resize_control();
})
function create_layout(){
	$('#main_content').layout({
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
function create_grid() {
        $("#rowed3").jqGrid({
            url: 'resource.php?module=<?= $modules ?>&view=<?= $view ?>&action=data_danhsach_donthuoctralai&idkhoa=<?=$_GET['idkhoa']?>',
   			datatype: "json",
            colNames: ['Mã đơn thuốc','Ngày kê đơn', 'Họ tên bệnh nhân', 'Tuổi', 'Địa chỉ','Số buồng','Số giường','Chọn'],
            colModel: [
                {name: 'ID_DonThuocTraLai', index: 'ID_DonThuocTraLai', search: true, width: "8%", editable: false, align: 'left', hidden: false,classes:'r3_mabenhnhan'},
				{name: 'NgayKeDon', index: 'NgayKeDon', search: true, width: "10%", editable: false, align: 'center', hidden: false},
				{name: 'HoTen', index: 'HoTen', search: true, width: "20%", editable: false, align: 'left', hidden: false},
				{name: 'Tuoi', index: 'Tuoi', search: true, width: "5%", editable: false, align: 'center', hidden: false},
				{name: 'DiaChi', index: 'DiaChi', search: true, width: "27%", editable: false, align: 'left', hidden: false},
				{name: 'SoGiuong', index: 'SoGiuong', search: true, width: "10%", editable: false, align: 'left', hidden: false},
				{name: 'SoBuong', index: 'SoBuong', search: true, width: "10%", editable: false, align: 'left', hidden: false},
				{name:'Chon',index:'Chon', width:"5%", editable:true,stype: 'text',search:true,searchoptions: { sopt: ['eq', 'ne'],value:':;1:Có;0:Không'}, editable:true,align:'center',hidden:false,edittype:"checkbox",formatter:"checkbox",formatoptions:{disabled: false},formoptions:{ rowpos:13, colpos:1}
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
/*                window.selectedVal = "";
				window.selected = $("input[type='radio'][name='action']:checked");
				if (selected.length > 0) {
					window.selectedVal = selected.val();
				}*/
                 } }]}}, 
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
				window.iddonthuoc=id
				setTimeout(function(){
					$("#rowed4").jqGrid('setGridParam',{datatype: 'json',url:"resource.php?module=<?=$modules?>&view=<?=$view?>&action=data_danhsach_donthuoctralai_chitiet&id_donthuoctralai="+window.iddonthuoc+"&idphanloai="+window.idphanloai}).trigger('reloadGrid');
				},500);
            },
            ondblClickRow: function(rowId, rowIndex, columnIndex) {
            
            },
            onselect: function(rowId, rowIndex, columnIndex) {
				
            },
            loadComplete: function(data) {
			grid_filter_enter("#rowed3");
			ids = $('#rowed3').jqGrid('getDataIDs');				 
			$("#rowed3").jqGrid("setSelection",ids[0], true);
			
			},
            caption: "Phiếu hoàn trả thuốc chi tiết"
        });
		$("#rowed3").jqGrid('filterToolbar',{searchOperators : false,searchOnEnter:false,defaultSearch:"cn"});
		$("#rowed3").jqGrid('bindKeys', {});
    }

function create_grid2() {
      mydata=[];
        $("#rowed4").jqGrid({
            data: mydata,
            datatype: "local",
            colNames: ['Mã thuốc','Tên thuốc', 'ĐVT','Số lượng','Số lô HT','Số lô NSX','Ngày hết hạn'],
            colModel: [
                {name: 'MaThuoc', index: 'MaThuoc', search: false, width: "10%", editable: false, align: 'left', hidden: false,classes:'r3_mabenhnhan'},
				{name: 'TenThuoc', index: 'TenThuoc', search: false, width: "25%", editable: false, align: 'left', hidden: false},
				{name: 'DonViTinh', index: 'DonViTinh', search: false, width: "10%", editable: false, align: 'left', hidden: false},
				{name: 'SoLuongTraLai', index: 'SoLuongTraLai', search: false, width: "10%", editable: false, align: 'right', hidden: false},
				{name: 'SoLoheThong', index: 'SoLoheThong', search: false, width: "10%", editable: false, align: 'left', hidden: false},
				{name: 'SoLoNhaSanXuat', index: 'SoLoNhaSanXuat', search: false, width: "10%", editable: false, align: 'left', hidden: false},
				{name: 'NgayHetHanSuDung', index: 'NgayHetHanSuDung', search: false, width: "10%", editable: false, align: 'left', hidden: false},
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

            },
            ondblClickRow: function(rowId, rowIndex, columnIndex) {
            
            },
            onselect: function(rowId, rowIndex, columnIndex) {
				
            },
            loadComplete: function(data) {
				
			//ids = $('#rowed3').jqGrid('getDataIDs');				 
			//$("#rowed3").jqGrid("setSelection",ids[0], true);
						 
			},
            //caption: "&nbsp;"
        });
		//$("#rowed4").jqGrid('filterToolbar',{searchOperators : false,searchOnEnter:false,defaultSearch:"cn"});
		$("#rowed4").jqGrid('bindKeys', {});
    }
function create_nguoilinh(elem, datalocal) {
        datalocal = jQuery.parseJSON(datalocal);
        $(elem).jqGrid({
            datastr: datalocal,
            datatype: "jsonstring",
            colNames: ['Tên', 'Họ tên'],
            colModel: [
                {name: 'NickName', index: 'NickName', hidden: false,width:"15px"},
                {name: 'hovaten', index: 'hovaten', hidden: false,width:"30px"},
                
            ],
            hidegrid: false,
            gridview: true,
            loadonce: true,
            scroll: 1,
            modal: true,
            rowNum: 10000,
            rowList: [],
            height: 300,
            width: 300,
            viewrecords: true,
            ignoreCase: true,
            shrinkToFit: true,
            cmTemplate: {sortable: false},
            sortorder: "desc",
            serializeRowData: function(postdata) {
            },
            onSelectRow: function(id) {

              var rowData = $(this).getRowData(id);
              //alert(rowData);
              $("#tenbacsi").val(rowData["hovaten"]);

            },
            ondblClickRow: function(id, rowIndex, columnIndex) {
            },
            loadComplete: function(data) {
            },
        });
        $(elem).jqGrid('filterToolbar', {searchOperators: false, searchOnEnter: false, defaultSearch: "cn"});
        $(elem).jqGrid('bindKeys', {});
    }
function create_phanloai(elem, datalocal) {
        datalocal = jQuery.parseJSON(datalocal);
        $(elem).jqGrid({
            datastr: datalocal,
            datatype: "jsonstring",
            colNames: ['Phân loại'],
            colModel: [
                {name: 'phanloai', index: 'phanloai', hidden: false,width:5},
                
            ],
            hidegrid: false,
            gridview: true,
            loadonce: true,
            scroll: 1,
            modal: true,
            rowNum: 100,
            rowList: [],
            height: 100,
            width: 300,
            viewrecords: true,
            ignoreCase: true,
            shrinkToFit: true,
            cmTemplate: {sortable: false},
            sortorder: "desc",
            serializeRowData: function(postdata) {
            },
            onSelectRow: function(id) {
         	window.idphanloai=id;
			$("#rowed4").jqGrid('setGridParam',{datatype: 'json',url:"resource.php?module=<?=$modules?>&view=<?=$view?>&action=data_danhsach_donthuoctralai_chitiet&id_donthuoctralai="+window.iddonthuoc+"&idphanloai="+window.idphanloai}).trigger('reloadGrid');
            },
            ondblClickRow: function(id, rowIndex, columnIndex) {
            },
            loadComplete: function(data) {
            },
        });
        $(elem).jqGrid('filterToolbar', {searchOperators: false, searchOnEnter: false, defaultSearch: "cn"});
        $(elem).jqGrid('bindKeys', {});
    }
function doituong_callback(){
	
}
function checkbox(a){
	var tmp1 = $("#rowed3").jqGrid('getDataIDs'); 
	
	if($(a).is(':checked') ){
	$('#rowed3 tr td[aria-describedby="rowed3_Chon"] input[type="checkbox"]').each(function() {
			var row = $(this).closest('tr.jqgrow');
			var tam = row.attr('id');
		
			$(this).prop('checked', true);
		//$(this).prop('checked')
	});	
	}
	else{
	
	$('#rowed3 tr td[aria-describedby="rowed3_Chon"] input[type="checkbox"]').each(function() {
			var row = $(this).closest('tr.jqgrow');
			var tam = row.attr('id');
			$(this).prop('checked', false);
		//$(this).prop('checked')
	});	
	}
}
function resize_control(){
	$("#rowed3").setGridWidth($("#main_content").width()-11);
	$("#rowed3").setGridHeight($(".n_tren").height()-85);
	$("#rowed4").setGridWidth($("#main_content").width()-11);
	$("#rowed4").setGridHeight($(".n_duoi").height()-40);
}
</script>
</html>

