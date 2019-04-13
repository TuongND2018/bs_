
<style type="text/css">
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
</style>
<body> 
	<div id="inner">      	 
           <div class="ui-layout-center">
           	<table id="rowed3" ></table>
          <!--   <div id="prowed3"></div>   -->
          	</div>
          	<div class="ui-layout-north"  >
    </div>    
</body>
</html> 

<script type="text/javascript">
jQuery(document).ready(function() {
			
	var lastsel; 	
	create_grid();	
	shortcut_key();		
	$("#rowed3").setGridWidth($(window).width()-30);
  $("#rowed3").setGridHeight($(window).height()-430);
})

function create_grid(){	
	 $("#rowed3").jqGrid({
		url:'resource.php?module=<?=$modules?>&view=<?=$view?>&action=data_booking',
		datatype: "json",	
		colNames:['ID_BooKing','Tên bệnh nhân','Ngày giờ tạo','Người tạo','Tình trạng','Số tiền tạm ứng'],
		colModel:[
			{name:'ID_BooKing',index:'ID_BooKing', width:"20", editable:false,align:'right',hidden:true}, 
			{name:'ID_BenhNhan',index:'ID_BenhNhan', width:"30", editable:true,align:'center',hidden:false}, 
			{name:'NgayGioTao',index:'NgayGioTao', width:"20", editable:true,align:'left',hidden:false},	 
			{name:'NguoiTao',index:'NguoiTao', width:"70", editable:true,align:'center',hidden:false},
			{name:'TinhTrang',index:'TinhTrang',width:"30", editable:true,align:'center',hidden:false}, 
			{name:'SoTienTamUng',index:'SoTienTamUng', width:"30", editable:true,align:'center',hidden:false}, 
			
		],
	//

		loadonce: true,
		scroll: 1,	
		modal:true,	 	
		pager: '#prowed3',	
		rowNum: 100,
		gridview: true,
		pginput:false,
		pgbuttons:false,
		rowList:[],
		sortname: 'ID_BooKing',
		height:470,
    	width: 640,
		viewrecords: true,	
		ignoreCase:true,
		shrinkToFit:true,
		grouping: false,
		stringResult:true,
		sortorder: "asc",
	
		serializeRowData: function (postdata) { 		 	
			//$("#rowed3").trigger("reloadGrid");		
			//return postdata;
		},
		onSelectRow: function(id){		  
		  //$("#rowed4").jqGrid().setGridParam({url:'data2_tam.php?id='+lastsel}).trigger("reloadGrid");	   
		},
		ondblClickRow: function (rowId, rowIndex, columnIndex) {
			$(".ui-icon-pencil").trigger('click'); 
 		},
		loadComplete: function(data) {	
			//$("#rowed3").setColProp('ID_PhongBanCha', { editoptions: { value: ""} });		
			grid_filter_enter("#rowed3");
		},	  
		
		caption: "Booking"
	});	
	 $("#rowed3").setGridWidth($(window).width()-30);
	 $("#rowed3").setGridWidth($(window).height()-30);	
}
$('.inner').layout({
            resizerClass: 'ui-state-default'
              ,north: {
                resizable: true
                        , size: "50%"
                        , resizerDblClickToggle: false


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
                        , size: "50%"
                        , resizerDblClickToggle: false


                        , onresize_end: function() {
                    resize_control();
                }
                , onopen_end: function() {

                }
                , onclose_end: function() {

                }
            }
            
        });
</script>