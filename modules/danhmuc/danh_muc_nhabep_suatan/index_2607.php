
<style>
    th.ui-th-column div{
        word-wrap: break-word;
        white-space: pre-wrap;
        white-space: -moz-pre-wrap;
        white-space: -pre-wrap;
        white-space: -o-pre-wrap;
        overflow: hidden;
        height: auto !important;
        vertical-align: middle;
    }
    #ui-id-4
    {
        width: 350px!important;
    }
    #nhanvien,#Ngaysua{
        width: 150px!important;
    }
    /*    #bacsy  {
                           display:inline-block;

                          width: 30px;
                           margin:0;
                           padding:0;
                   }*/
    .form_row{
        width:300px!important;
        height:95px;
    }

/*Nháy row  */
 	td.nhapnhay{
		 animation: blink 1.5s steps(5, start) infinite;			  
	 }
	 @keyframes blink{
		to {
			visibility: hidden;
		}
	 }
/*Kết thúc Nháy row */
</style>



<div id="dialog-daduyet" title="Thông Báo" style="display:none">
  <p><span class="ui-icon ui-icon-alert" style="float:left; margin:0 7px 20px 0;"></span>Bạn có muốn chuyển <b> <label id="thucdonl" ></label></b> của <b> <label id="nguoictl" ></label></b> ngày <b> <label id="ngaydatl" ></label></b> thành trạng thái <b style="color:#F00">Hủy bỏ</b> không?</p>
</div>

<div id="dialog-form" class="form_row" style="display:none" title="Sửa suất ăn">
	<table width="100%" border="0">
  <tr>
    <td align="right" valign="top" id="nhacc_lb" style="width:40%">Tên thực đơn:* </td>
    <td align="left" valign="top" style="width:60%">&nbsp;
		<input id="nhacc" name="nhacc" style=" width:134px; height:auto; font-size:13px"  placeholder="--Chọn mẫu--">
        <input id="nhacc1"  name="nhacc1"  lang='luu' type="text"  style="display:none" >
    	
    </td>
    
  </tr>
  <tr>
    <td align="right" valign="top" id="sotien_lb">Số lượng:* </td>
    <td align="right!important" valign="top">&nbsp;
    	<input type="text" align="right!important" style=" width:160px; height:auto; font-size:30px;text-align: right!important;" lang='luu' value="1"  name="sotien" id='sotien'>
		
	</td>
  </tr>
</table>	
</div>


<div  class="nhan_vien">
	Từ ngày  <input type="text" style="width:70px" name="from_day" id='from_day'  value="<?php echo date($_SESSION["config_system"]["ngaythang"]) ?>">
		Đến ngày  <input type="text" style="width:70px" name="to_day" id='to_day' value="<?php echo date($_SESSION["config_system"]["ngaythang"]) ?>">
		<input type="hidden" name="from_day_mask" id='from_day_mask'  value="<?php echo date("Y/m/d")?>">
		<input type="hidden" name="to_day_mask" id='to_day_mask' value="<?php echo date("Y/m/d")?>">
         <button id="xem" type="button">Xem</button>
    <table id="nhan_vien">
    </table>
</div>




<table id="rowed3" style="width:100%" ></table>
<div id="prowed3"></div>
</body>
<script type="text/javascript">
    jQuery(document).ready(function() {
		window.tong=0;
		$('#xem').button();
        var lastsel;
        $.dateEntry.setDefaults({spinnerImage: ''});
        shortcut_key();
        var lastsel3;
        
        load_select();//lấy dữ liệu combobox
//=========================
	var fromday, today;
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
            },
            onSelect: function(dat, inst) {
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
            },
            onSelect: function(dat, inst) {
            }
        });
	 $.dateEntry.setDefaults({spinnerImage: ''});		 
	 //$("#tungay, #denngay").dateEntry({dateFormat: 'dmy-'});
	 $("#from_day, #to_day").dateEntry({dateFormat: $.cookie("ngayDateEntry")});
	 
	 $( "#dialog-daduyet" ).dialog({
	   autoOpen:false,
					  resizable: false,
					  height:150,
					  width:700,
					  modal: true,
					
					  buttons: {
						"OK": function() {
							//alert(window.idsa_dl);
							window.scrollPositiontop  = jQuery("#rowed3").closest(".ui-jqgrid-bdiv").scrollTop();
							$.post('resource.php?module=<?=$modules?>&view=<?=$view?>&action=controller&oper=update_tth&hienmaloi=3&id='+window.idsa_dl+'&tthai='+window.tt_dlg);
							//alert('id='+window.idsa_dl+'&tthai='+window.tt_dlg);
							$( this ).dialog( "close" );
							
							$("#rowed3").jqGrid('setGridParam',{datatype: 'json'}).trigger('reloadGrid');
						},
						Cancel: function() {
						window.scrollPositiontop  = jQuery("#rowed3").closest(".ui-jqgrid-bdiv").scrollTop();
						  $( this ).dialog( "close" );
						  $("#rowed3").jqGrid('setGridParam',{datatype: 'json'}).trigger('reloadGrid');
						}
					  }
					});
			//dilog-sua thuc don
			$( "#dialog-form" ).dialog({
	   				autoOpen:false,
					  resizable: false,
					  height:180,
					  width:350,
					  modal: true,
					
					  buttons: {
						"OK": function() {
							//alert(window.idsa_dl);
							 //alert(id_td_cb);
							 var sl=$("#sotien").val();
							 //alert('id='+idsa_std+'&id_td='+id_td_cb+'&sluong='+sl);
							$.post('resource.php?module=<?=$modules?>&view=<?=$view?>&action=controller&oper=update_ttd_sl&hienmaloi=3&id='+idsa_std+'&id_td='+id_td_cb+'&sluong='+sl);
							$( this ).dialog( "close" );
							
							$("#rowed3").jqGrid('setGridParam',{datatype: 'json'}).trigger('reloadGrid');
						},
						Cancel: function() {
						window.scrollPositiontop  = jQuery("#rowed3").closest(".ui-jqgrid-bdiv").scrollTop();
						  $( this ).dialog( "close" );
						  $("#rowed3").jqGrid('setGridParam',{datatype: 'json'}).trigger('reloadGrid');
						}
					  }
			});
//========================================

        create_grid_suasuatan_nhabep();//tạo lưới
		$("#xem").click(function(){ 
          // alert($("#tungay").val());  
		  // alert($("#denngay").val());  
	$("#rowed3").jqGrid('setGridParam',{datatype: 'json',url:"resource.php?module=<?=$modules?>&view=<?=$view?>&action=data_nhabepsuasuatan&from_day="+$("#from_day").val()+"&to_day="+$("#to_day").val()}).trigger('reloadGrid');
	
    });

        function load_select() {
           
            /*window.nickname = $.ajax({url: 'resource.php?module=web_services&function=get_auto_edit_option_byid&action=index&term=&status=2&tables=DM_NhanVien&id=ID_NhanVien&name=NickName', async: false, success: function(data, result) {
                    if (!result)
                        alert('Không load được danh mục nhân viên');
                }}).responseText;*/

           window.trangThai = 'Đang chờ:Đang chờ;Yêu cầu sửa:Yêu cầu sửa;Yêu cầu hủy:Yêu cầu hủy;Xong:Xong;Hủy bỏ:Hủy bỏ';

           
        }
        

        function create_grid_suasuatan_nhabep() {
            var lastSel;
            //window.nicknamez = ":;" + window.nickname;
            window.trangThaiZ = ":;" +   window.trangThai;

            $("#rowed3").jqGrid({
                url: 'resource.php?module=<?= $modules ?>&view=<?= $view ?>&action=data_nhabepsuasuatan&from_day='+$("#from_day").val()+'&to_day='+$("#to_day").val(),
                datatype: "json",
                colNames: ['IndexID', 'Ngày', 'Khoa', 'Người chịu tiền', 'Tên thực đơn', 'Số lượng', 'Đơn giá',
                    'Thành tiền', 'Trạng thái','Người đặt','Người sửa','Ngày giờ sửa','Người hủy','Ngày giờ hủy',''],
                colModel: [
                    {name: 'IndexID', index: 'IndexID', search: false, width: "0%", editable: false, align: 'left', hidden: true},
                   
					{name: 'Ngay_ThucDon', index: 'Ngay_ThucDon', search: false, width: "5%", formatter: "text", editable: false, align: 'left', hidden: false},
                   
                    //{name: 'ID_PhongBan', index: 'ID_PhongBan', summaryType: 'count', search: true, stype: 'select', searchoptions: {sopt: ['eq', 'ne'], value: iD_PhongBanZ}, width: "10%", formatter: "select", editable: false, edittype: "select", editoptions: {value: iD_PhongBanZ}, align: 'left', hidden: false, },	
					{name:'TenPhongBan',index:'TenPhongBan',summaryType: 'count', search:true, width:"10%", editable:false,align:'left',hidden:false,edittype:"text"},
					//{name: 'Id_nhanvien', stype: 'select', summaryType: 'count', index: 'Id_nhanvien', search: true, width: "5%", searchoptions: {sopt: ['eq', 'ne'], value: nicknamez}, formatter: "select", editable: false, edittype: "select", editoptions: {value: nicknamez}, align: 'left', hidden: false, },
					{name:'NguoiChiuTien',index:'NguoiChiuTien',summaryType: 'count', search:true, width:"10%", editable:false,align:'left',hidden:false,edittype:"text"},
                    {name: 'TenThucDon', index: 'TenThucDon', search: false, width: "10%", editable: false, align: 'left', hidden: false},
                    {name: 'SoLuong', index: 'SoLuong', search: false, width: "5%",  align: 'right', hidden: false},
                    {name: 'DonGia', index: 'DonGia' ,width: "5%", search: true, editable: false, align: 'right', hidden: false, formatoptions: {decimalSeparator:".", thousandsSeparator: ",", decimalPlaces: 0, prefix: "", suffix:"", defaultValue: '0'}
				,sorttype:'currency',formatter:'currency'
				},
                    {name: 'ThanhTien',index: 'ThanhTien',width: "5%", search: true, editable: false, align: 'right', hidden: false, formatoptions: {decimalSeparator:".", thousandsSeparator: ",", decimalPlaces: 0, prefix: "", suffix:"", defaultValue: '0'}
				,sorttype:'currency',formatter:'currency'
				},
                    {name: 'TrangThai', index: 'TrangThai', search: true,stype: 'select', searchoptions: {sopt: ['eq', 'ne'], value: trangThaiZ}, width: "5%", formatter: "select", editable: false, edittype: "select", editoptions: {value: trangThaiZ}, align: 'left', hidden: false,},
            		//{name: 'Id_nguoidat', stype: 'select', summaryType: 'count', index: 'Id_nguoidat', search: true, width: "5%", searchoptions: {sopt: ['eq', 'ne'], value: nicknamez}, formatter: "select", editable: false, edittype: "select", editoptions: {value: nicknamez}, align: 'left', hidden: false, },
					{name:'NguoiDat',index:'NguoiDat',summaryType: 'count', search:true, width:"10%", editable:false,align:'left',hidden:false,edittype:"text"},
					{name: 'NguoiSua', index: 'TrangThai', search: false, width: "5%", editable: false, align: 'left', hidden: false},
                  	{name: 'Ngaysua', index: 'Ngaysua', search: false, width: "10%", formatter: "date", formatoptions: {srcformat: 'y/m/d H:i', newformat: 'd/m/Y H:i'}, editable: false, align: 'left', hidden: false},
					{name: 'NguoiHuy', index: 'NguoiHuy', search: false, width: "5%", editable: false, align: 'left', hidden: false},
					{name: 'NgayHuy', index: 'NgayHuy', search: false, width: "10%", formatter: "date", formatoptions: {srcformat: 'y/m/d H:i', newformat: 'd/m/Y H:i'}, editable: false, align: 'left', hidden: false},
					{name: 'Buoi', index: 'Buoi', search: false, width: "0%", editable: false, align: 'left', hidden: true},

                ],

                loadonce: true,
                scroll: false,
                modal: true,
                shrinkToFit: true,
                rowNum:200, //rowList:[30,60,90],
                pager: '#prowed3',
                sortname: 'IndexID',
                height: 200,
                width: 100,
                viewrecords: true,
                ignoreCase: true,
                sortorder: "desc",
                grouping: true,
                rownumbers: true,
                autowidth:true,
                groupingView: {groupField: ['TenPhongBan', 'NguoiChiuTien'],
                    groupOrder: ['desc', 'asc'],
                    groupSummary: [false, false],
                    showSummaryOnHide: [false, false],
                    groupColumnShow: [true, true],
                    groupText: [' <b >{0}</b> có  <b style="color: orangered">{TenPhongBan}</b>  thực đơn', '<b style="color: blue">{0}</b> có <b style="color: orangered"> {NguoiChiuTien}</b> thực đơn'],
                    groupCollapse: false,
                    showSummaryOnHide: false,
					groupDataSorted: true,
           			groupOrder : 'asc'
                },
                ondblClickRow: function(rowId, rowIndex, columnIndex) {
                   var rowData = jQuery('#rowed3').getRowData(rowId);
					//alert(rowData['NguoiChiuTien']);
					if(rowData['TrangThai']=='Yêu cầu hủy'){
			
						window.tt_dlg='HuyBo';
						window.idsa_dl=rowId;
						 $("#nguoictl").text(rowData['NguoiChiuTien']);
						 $("#thucdonl").text(rowData['TenThucDon']);
						 $("#ngaydatl").text(rowData['Ngay_ThucDon']);
						 $( "#dialog-daduyet" ).dialog('open');
					}
					else if(rowData['TrangThai']=='Yêu cầu sửa'){
						window.ngay_td=rowData['Ngay_ThucDon'];
						window.buoi_td=rowData['Buoi'];
						window.idsa_std=rowId;
						 $("#nguoictl").text(rowData['NguoiChiuTien']);
						 $("#ngaydatl").text(rowData['Ngay_ThucDon']);
						//alert(ngay_td);
						$( "#dialog-form" ).dialog('open');
						create_combobox('#nhacc', '#nhacc1', ".data_combo_nhacc", "#data_combo_nhacc", create_nhacungcap, 500, 400, 'Nhà cung cấp', 'data_thucdon_ngay_buoi&ngay_tdon='+window.ngay_td+'&buoi_tdon='+window.buoi_td,0);
					}
                },
                onRightClickRow: function(rowid, iRow, iCol, e) {
                },
                serializeRowData: function(postdata) {
					
                },
                onSelectRow: function(id) {

                },
                loadComplete: function(data) {
					grid_filter_enter("#rowed3");		
            //tô màu
					window.hb=0;
					window.dc=0;
					window.ycs=0;
					window.ych=0;
					window.xg=0;
					window.tong=0;
                    ids = $('#rowed3').jqGrid('getDataIDs');
					
                    for (i = 0; i < ids.length; i++) {
                        var rowData = jQuery('#rowed3').getRowData(ids[i]);
						//alert(rowData['TrangThai']); 
						if(rowData['TrangThai']=='Hủy bỏ'){
							window.hb=window.hb+1;
							$("#rowed3").setCell(ids[i], 'TrangThai','', {background:'#CCCCCC'}); 
						}else if(rowData['TrangThai']=='Đang chờ'){
							window.dc=window.dc+1;
							$("#rowed3").setCell(ids[i], 'TrangThai','', {background: '#d9f970'});
						}else if(rowData['TrangThai']=='Yêu cầu sửa'){
							window.ycs=window.ycs+1;
							$("#rowed3").setCell(ids[i], 'TrangThai','', {background: 'red'}); 
							$("#rowed3").setCell(ids[i], "TrangThai", '', "nhapnhay"); 
						}else if(rowData['TrangThai']=='Yêu cầu hủy'){
							window.ych=window.ych+1;
							$("#rowed3").setCell(ids[i], 'TrangThai','', {background: '#FF9900'}); 
							$("#rowed3").setCell(ids[i], "TrangThai", '', "nhapnhay"); 
						}else{
							window.xg=window.xg+1;
							$("#rowed3").setCell(ids[i], 'TrangThai','', {background: '#00BFFF'}); 
						}
                    }
					
						window.tong=window.hb+window.dc+window.ycs+window.ych+window.xg;
						//alert(window.tong);
						 $("#tongsa").text(window.tong);
						 $("#suatxongl").text(window.xg);
						 $("#dangchol").text(window.dc);
						 $("#dahuyl").text(window.hb);
						 $("#ycsl").text(window.ycs);
						 $("#ychl").text(window.ych);
						 $("#fromday_lb").text($("#from_day").val());
						 $("#today_lb").text($("#to_day").val());
                // tô màu
				
                },
                caption: "Suất ăn từ <label id='fromday_lb' > </label> đến <label id='today_lb' > </label> Có <label id='tongsa' style='color: red'> </label> suất ăn, trong đó: <label id='suatxongl' style='color: blue'> </label> xong, <label id='dangchol' style='color: blue'> </label> đang chờ, <label id='dahuyl' style='color: blue'> </label> đã hủy, <label id='ycsl' style='color: blue'> </label> yêu cầu sửa, <label id='ychl' style='color: blue'> </label> yêu cầu hủy"+"------ <label for='checkbox'style='width:110px' >Thu gọn</label><input type='checkbox' id='checkp'>---------------------- ",
                editurl: 'resource.php?module=<?= $modules ?>&view=<?= $view ?>&action=controller_duyetdon&hienmaloi=3'
            });
            $("#rowed3").jqGrid('filterToolbar', {searchOperators: false, searchOnEnter: false, defaultSearch: "eq"});
            $.dateEntry.setDefaults({spinnerImage: ''});

            $("#gs_Ngay_ThucDon").datepicker({
                showWeek: true,
                defaultDate: "+1w",
                changeMonth: true,
                changeYear: true,
                numberOfMonths: 1,
                dateFormat: "dd/mm/yy",
                onClose: function(selectedDate) {

                },
                onSelect: function() {
                    if (this.id.substr(0, 3) === "gs_") {
                        // call triggerToolbar only in case of searching toolbar
                        setTimeout(function() {
                            $("#rowed3")[0].triggerToolbar();
                        }, 100);
                    }
                }
            });
            //    autocompleted_combobox_search("#gs_ID_PhongBan","#rowed3");
            $("#gs_Ngay_ThucDon").keyup(function() {

                $(".ui-datepicker").hide();

            });
            $("#gs_Ngay_ThucDon").click(function() {
                $(".ui-datepicker").show();

            })




            $("#rowed3").setGridWidth($(window).width() - 20);
            $("#rowed3").setGridHeight($(window).height() - 150);

            //

        }
        $("#rowed3").jqGrid({
        });


        $("#rowed3").jqGrid('bindKeys', {"onEnter": function(rowid) {
            }});
        $("#gbox_rowed3").attr("tabindex", "1");
        $("#gbox_rowed3").bind('keydown', function(e) {
            if ((jwerty.is("ctrl+m", e))) {
                $("#rowed3").jqGrid('restoreRow', lastsel);
                $("#rowed3").jqGrid('editRow', rowid, true);
                lastsel = rowid;
            }
        })
        $("#checkp").click(function() {
            var x = $("#checkp").is(":checked");
            if (x == true) {
                $("#gview_rowed3 .ui-icon-circlesmall-minus").trigger("click");
            } else {
                $("#gview_rowed3 .ui-icon-circlesmall-plus  ").trigger("click");
            }

        })
		function create_nhacungcap(elem, datalocal) {
			datalocal = jQuery.parseJSON(datalocal);
			$(elem).jqGrid({
				datastr: datalocal,
				datatype: "jsonstring",
				colNames: ['Tên thực đơn'],
				colModel: [
					{name: 'Ten_tdon_cb', index: 'Ten_tdon_cb', hidden: false, width: "100%", align: 'left'},
				],
				hidegrid: false,
				gridview: true,
				loadonce: true,
				scroll: false,
				modal: true,
				rowNum: 200000,
				rowList: [],
				height: 135,
				width: 470,
				viewrecords: true,
				ignoreCase: true,
				shrinkToFit: true,
				cmTemplate: {sortable: false},
				sortorder: "desc",
				serializeRowData: function(postdata) {
				},
				onSelectRow: function(id) {
					window.id_td_cb=id;
					//alert(id_td_cb);
				},
				ondblClickRow: function(id, rowIndex, columnIndex) {
					
				},
				loadComplete: function(data) {
	
					grid_filter_enter(elem);
				
	//window.nhanvien2_complete=1;
	
	
				},
			});
			$(elem).jqGrid('filterToolbar', {searchOperators: false, searchOnEnter: false, defaultSearch: "cn"});
			$(elem).jqGrid('bindKeys', {});
		}
      //phanquyen();

    })
	/*var mangdanhdau_vang=[];
	var mangdanhdau_vang1;
	var mangdanhdau_do=[];
	var mangdanhdau_do1;
	function tomautt(rowId, tv, rawObject, cm, rdata){
		var grid=$(this);
		var ids=rowId;
		var rowData =rdata; 
		if(rowData["TrangThai"]==""){
			//mangdanhdau_vang1=mangdanhdau_vang.push(rowId);
			return ' class="quathoigian_max"';
		}else if(rowData["TrangThai"]=="Hủy bỏ"){
			//mangdanhdau_do1=mangdanhdau_do.push(rowId);
			return ' class="dahuy"';
		}else if(rowData["TrangThai"]=="Đang chờ"){
			 $("#rowed3").setCell(rowId, 'TrangThai','', {background: '#d9f970'});
		}
		
	}*/
</script>