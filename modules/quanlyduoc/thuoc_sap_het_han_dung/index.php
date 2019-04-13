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
	width:1289px;
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
}
input.ui-button{
	padding:0.3em 1em;
}
#xemdanhsach{
	margin-left:35px;
	margin-top: -1px;
}#tabs .ui-tabs-nav li.ui-tabs-selected, #tabs .ui-tabs-nav li.ui-state-active {
z-index: 1;
}#tabs-1,#tabs-2{
	padding:0!important;
}.trai,.phai,.trai2,.phai2{
	float:left;
}
#tieude{

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
}
#ngay{
	width:50px;
	text-align:center;
}
</style>
<body> 
    <div id="panel_main" >  
		<div id="main_top">
        	<div id="sub_main_top">
			<label for="soluongton" style="font-weight:bold;">Số ngày còn hiệu lực ít hơn ngày hiện tại: </label>
            <input type="text" name="ngay" id="ngay" value="90" />
            <label style="margin-left:10px; font-weight:bold">Kho:</label> <input id="kho" type="text" style="margin-left:0px;">
            <input type="button" id="xemdanhsach" value="Xem danh sách" />
            
            <label style="font-weight:bold; float:right; margin-top:5px; color:#03F; margin-right:5px;"> Lưu ý: Nhập 0 nếu muốn xem tất cả</label>
            
            </div><!--sub_main_top-->
        
        </div><!--main_top-->
        <div id="main_bottom">
        	<table id="rowed3" ></table>
            <div id="prowed3"><input type="text" style="margin-left: 7px; margin-top: 4px; width: 295px;;background:#4CA109;border:1px solid #327E04; color: #FFFFFF;font-weight: bold; text-align:left; box-shadow:none!important;padding: 0px!important;" disabled="" readonly value="Số dòng =0" class="disable" id="sodong"></div> 
        </div><!--main_bottom-->
    </div>

    
</body>
</html> 
<script type="text/javascript">
    jQuery(document).ready(function() {
		create_combobox_new('#kho',create_kho,'bw','','data_kho');
		create_grid();
		resize_control();
		$("#panel_main").css("height",$(window).height()+"px");			 
		$("#panel_main").fadeIn(1000);
		$("#xemdanhsach").button();
		$("#xemdanhsach").click(function(){
			$("#rowed3").jqGrid('setGridParam',{url:'resource.php?module=<?=$modules?>&view=<?=$view?>&action=data_dsthuoc_saphethan&ngayconlai='+$('#ngay').val()+'&idkho='+$("#kho_hidden").val()+'&hienmaloi=a',datatype:'json'}).trigger('reloadGrid');
		});
		
	});// end ready
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
            colNames: ['Tên thuốc','Đơn vị tính', 'Số lô', 'Hạn dùng', 'Ngày còn hiệu lực', 'Tồn kho hiện tại'],
            colModel: [
                {name: 'TenThuoc', index: 'TenThuoc', search: true, width: "35%", editable: false, align: 'left', hidden: false,classes:'abc'},
				{name: 'DonViTinh', index: 'DonViTinh', search: true, width: "15%", editable: false, align: 'left', hidden: false},
				{name: 'SoLo', index: 'SoLo', search: true, width: "15%", editable: false, align: 'left', hidden: false},
				{name: 'HanDung', index: 'HanDung', search: true, width: "15%", editable: false, align: 'left', hidden: false},
				{name: 'NgayConHieuLuc', index: 'NgayConHieuLuc', search: true, width: "10%", editable: false, align: 'right', hidden: false},
				{name: 'TonKhoHienTai', index: 'TonKhoHienTai', search: true, width: "10%", editable: false, align: 'right', hidden: false},
            ],
           loadonce: true,
            scroll: 1,
            modal: true,
            rowNum: 30000000000,
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
				
            },
            ondblClickRow: function(rowId, rowIndex, columnIndex) {
            
            },
            onselect: function(rowId, rowIndex, columnIndex) {
				 
              
            },
        
            loadComplete: function(data) {
			$("#sodong").val("Số dòng ="+$("#rowed3").getGridParam("reccount"))
			 
			},
            //caption: "&nbsp;"
        });
		$("#rowed3").jqGrid('filterToolbar',{searchOperators : false,searchOnEnter:false,defaultSearch:"cn"});
		$("#rowed3").jqGrid('bindKeys', {});
    }
	
function resize_control(){
	$("#main_bottom").css("width",$("#panel_main").width()-10+"px");
	$("#main_bottom").css("height",$(window).height()-50+"px");
	$("#rowed3 ").setGridWidth($('#main_bottom').width()-10);
	$("#rowed3 ").setGridHeight($('#main_bottom').height()-80);
}
function create_kho(elem,datalocal){
 datalocal=jQuery.parseJSON(datalocal);
   $(elem).jqGrid({
  datastr:datalocal,
  datatype: "jsonstring" ,
		colNames:['Kho'],
		colModel:[
			{name:'kho',index:'kho',hidden :false},
		],
		hidegrid: false,
		gridview: true,
		loadonce: true,
		scroll: false,
		modal:true,
		rowNum: 200000,
		rowList:[],
		sortname: 'Id_Tang',
		height:200,
		width: 300,
		viewrecords: true,
		ignoreCase:true,
		shrinkToFit:true,
		cmTemplate: {sortable:false},
		sortorder: "desc",
		serializeRowData: function (postdata) {
		},
		onSelectRow: function(id){
			window.idkho=id;
		var selr = jQuery(elem).jqGrid('getGridParam','selrow');

		},
		ondblClickRow: function (id, rowIndex, columnIndex) {

 		},
		loadComplete: function(data) {
		grid_filter_enter(elem) ;

		},

	});

	 $(elem).jqGrid('filterToolbar',{searchOperators : false,searchOnEnter:false,defaultSearch:"cn"});
	 $(elem).jqGrid('bindKeys', {} );

}
	
</script>