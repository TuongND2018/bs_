<style>
#dangtaidulieu{
	position: absolute;
	top: 45%;
	left: 45%;
	width: auto;
	z-index:999;
	padding: 6px;
	margin: 5px;
	height:20px;
	text-align: center;
	font-weight: bold;
	display: block;
	border:solid 1px #919191;
	font-size:11px;
	background:#0C8CCF;
	border-radius:4px;
	color:#FFF;
	box-shadow: 2px #919191;
}

.bongmo{
background: #aaaaaa;
opacity: .3;	
}
tr{
	height:24px	
}	
input{
	text-align:left;
}
body{
	overflow:auto!important;		 
}
.custom-combobox{
width: 50px!important;
}
.ui-button-icon-only {
width: 1.2em!important;
}
#ICD_NoiChuyenDen_combobox,#ICD_KKB_CapCuu_combobox,#ICD_KhoaDieuTri_combobox{
	width:108px !important;
}
input[type="checkbox"]:focus {
-webkit-box-shadow: 0px 0px 1px 1px #0463B4!important;
  box-shadow:  0px 0px 2px 2px #208AC8 !important;
}
.error_null{
	background:#FFFF00;
}
</style>
<body class="body">
	<div id="dangtaidulieu">
    	Đang nạp dữ liệu...
    </div>
    <div id="dialog-hoantat" title="Thông Báo" style="display:none">
  <p><span class="ui-icon ui-icon-alert" style="float:left; margin:0 7px 20px 0;"></span>Bạn có muốn <b style="color:#00F">"hoàn tất"</b> lượt khám này không?</p>
</div>
	<div id='wrapper' class="bongmo" style="width:95%; margin-left:20px;margin-top:6px; font:Tahoma, Geneva, sans-serif;font-size:13px;overflow:auto;">
        <fieldset class="ui-widget ui-widget-content ui-corner-all ui-resizable panel_form" style="width:98%;;margin-top:0px">
             <legend style="font-weight:bold;color:#56A717">Quản lý người bệnh </legend>
           <table border="0" cellpadding="0" cellspacing="0" width="100%">
           	<tr>
            	<td align="right" style="width:10%; padding-right:10px">
                BS điều trị
                </td>
                <td style="width:23%">
                      <input  kiemtra='trong' lang='luu' tabindex="3" id="ID_BacSyDieuTri" name="ID_BacSyDieuTri"  type="text_checkbox" class="focus_1" style="width:25px;">
                      <input id="bsdieutri1"  name="bsdieutri1" type="text" style="display:none" >
                    <input type="text" id="tenbacsi" style="width:199px" disabled/>
                </td>
                <td align="right"  style="width:10%; padding-right:10px">
               
                </td>
                <td style="width:23%">
                </td>
                <td align="right" style="width:10%; padding-right:10px">
                	Nơi giới thiệu
                </td>
                <td style="width:23%">
                	<input  kiemtra='trong' lang='luu' tabindex="4" name="NoiGioiThieu" type="text" id="NoiGioiThieu" style="width:10%"maxlength="1"/>
                    <input type="text" style="width:80%" disabled value="1-Cơ quan y tế, 2-Tự đến, 3-Khác"/>
                </td>
            </tr>
            
            <tr>
            	<td align="right" style="width:10%; padding-right:10px">
                	Vào viện lúc
                </td>
                <td style="width:23%">
                	<input  kiemtra='trong' lang='luu' tabindex="5" type="text"  class="focus_2" id="GioVaoVien" name="GioVaoVien"  value="" style="width:40%"/>
                    <input  kiemtra='trong' lang='luu' tabindex="6" type="text" class="focus_3" id="NgayVaoVien" name="NgayVaoVien" value="" style="width:50%"/>
                </td>
                <td align="right" style="width:10%; padding-right:10px">
                Trực tiếp vào
                </td>
                <td style="width:23%">
                	<input  kiemtra='trong' lang='luu' tabindex="7" name="TrucTiepVao" type="text" id="TrucTiepVao" style="width:10%" maxlength="1" />
                    <input type="text" style="width:82%" disabled value="1-Cấp cứu, 2- KKB, 3-Khoa điều trị"/>
                </td>
                <td align="right" style="width:10%; padding-right:10px">
                	Tên nơi GT
                </td>
                <td style="width:23%">
                	
                    <input  kiemtra='trong' lang='luu' tabindex="8" name="TenNoiGioiThieu" type="text" id="TenNoiGioiThieu" style="width:94.5%"/>
                </td>
            </tr>
            
              <tr>
            	<td align="right" style="width:10%; padding-right:10px">
                	Vào khoa
                </td>
                <td style="width:23%">
                	<input  kiemtra='trong' lang='luu' tabindex="9" id="ID_VaoKhoa" name="ID_VaoKhoa"  type="text_checkbox" class="focus_4" style="width:25px;">
                      <input id="ID_VaoKhoa1"  name="ID_VaoKhoa1" type="text" kiemtra='trong' lang='luu' style="display:none" >
                    <input type="text" id="tenkhoavao" style="width:199px" disabled/>
                </td>
                <td align="right" style="width:10%; padding-right:10px">
                Lúc
                </td>
                <td style="width:23%">
                	<input  kiemtra='trong' lang='luu' tabindex="10" name="GioVaoKhoa" type="text" id="GioVaoKhoa" style="width:20%"/> 
                	Ngày 
                    <input  kiemtra='trong' lang='luu' tabindex="11" name="NgayVaoKhoa" type="text" id="NgayVaoKhoa" style="width:30%"/>
                </td>
                <td align="right" style="width:10%; padding-right:10px">
                	Chuyển viện
                </td>
                <td style="width:23%">
                	<input  kiemtra='trong' lang='luu' tabindex="12" name="ChuyenVien" type="text" id="ChuyenVien" style="width:10%"/>
                    <input type="text" style="width:80%" disabled value="1-Tuyến trên, 2-Tuyến dưới, 3-CK"/>
                </td>
            </tr>
            
              <tr>
            	<td align="right" style="width:10%; padding-right:10px">
                	Chuyển khoa
                </td>
                <td style="width:23%">
                	<input  kiemtra='trong' lang='luu' tabindex="13" id="ID_KhoaChuyen" name="ID_KhoaChuyen"  type="text_checkbox" class="focus_5" style="width:25px;">
                      <input id="chuyenkhoa1"  name="chuyenkhoa1" type="text" style="display:none" >
                    <input type="text" id="tenkhoachuyen"style="width:199px" disabled/>
                </td>
                <td align="right" style="width:10%; padding-right:10px">
                Lúc
                </td>
                <td style="width:23%">
                	<input  kiemtra='trong' lang='luu' tabindex="14" name="GioChuyenKhoa" type="text" id="GioChuyenKhoa" style="width:20%"/> 
                	Ngày 
                    <input  kiemtra='trong' lang='luu' tabindex="15" name="NgayChuyenKhoa" type="text" id="NgayChuyenKhoa" style="width:30%"/> số NĐT
                    <input  kiemtra='trong' lang='luu' tabindex="16" name="SoNgayDieuTri" type="text" id="SoNgayDieuTri" style="width:5%"/>
                </td>
                <td align="right" style="width:10%; padding-right:10px">
                	Chuyển đến
                </td>
                <td style="width:23%">
                	<input  kiemtra='trong' lang='luu' tabindex="17" name="ChuyenDen" type="text_checkbox" id="ChuyenDen" style="width:33px"/>
                    <input name="chuyenden2" type="text" id="chuyenden2" style="width:71%; margin-left: 9px;" disabled/>
                </td>
            </tr>
            
            <tr>
            	<td align="right" style="width:10%; padding-right:10px">
                	Ra viện lúc
                </td>
                <td style="width:23%">
                	<input  kiemtra='trong' lang='luu' tabindex="18" type="text" class="focus_16"  id="GioRaVien"  style="width:40%"/>
                    <input  kiemtra='trong' lang='luu' tabindex="19" type="text"  class="focus_17"  id="NgayRaVien" style="width:50%"/>
                </td>
                <td align="right" style="width:10%; padding-right:10px">
                Tình trạng
                </td>
                <td style="width:23%">
                	<input  kiemtra='trong' lang='luu' tabindex="20" name="HinhThucRaVien" type="text" id="HinhThucRaVien" style="width:6%"/> 
                   
                    <input type="text" style="width:85.5%" disabled value="1-Ra viện, 2-Xin về, 3-Bỏ về, 4-Đưa về"/>
                    
                </td>
                <td align="right" style="width:10%; padding-right:10px">
                	
                </td>
                <td style="width:23%">
                	<input type="text" style="width:80%" value="Tổng số ngày điều trị" disabled/>
                    <input  kiemtra='trong' lang='luu' tabindex="21" name="TongSoNgayDieutri" type="text" id="TongSoNgayDieutri" style="width:10%"/>
                </td>
            </tr>
           </table>
            
        </fieldset>
        
        <fieldset class="ui-widget ui-widget-content ui-corner-all ui-resizable panel_form" style="width:98%;;margin-top:0px">
        	<legend style="font-weight:bold;color:#56A717">Chẩn đoán</legend>
            <table border="0" cellpadding="0" cellspacing="0" width="100%">
            	<tr>
                	<td width="9%" align="right" style="width:10%; padding-right:10px">
                    	Nơi chuyển đến
                    </td>
                    <td width="38%">
                    	 <input lang='luu' tabindex="22" name="ICD_NoiChuyenDen" type="text_checkbox" id="ICD_NoiChuyenDen" style="width:86px"/>
                         <input  lang='luu' tabindex="23" name="CD_NoiChuyenDen" type="text" id="CD_NoiChuyenDen" style="width:66% ;margin-left: 5px;" />
                     <td width="53%" rowspan="6">
                     	<fieldset>
                        	<legend>Ra viện</legend>
                            <table cellpadding="0" cellspacing="0" border="0" width="100%">
                            	 <tr>
                                    <td align="right" style="width:22%; padding-right:10px">
                                        Bệnh chính
                                    </td>
                                    <td style="width:80%;">
                                     	 <input    lang='luu' tabindex="33" name="ICD_RaVienBenhChinh" type="text_checkbox" id="ICD_RaVienBenhChinh" style="width:58px;"/>
                        				 <input    lang='luu' tabindex="34" name="CD_RaVienBenhChinh" type="text" id="CD_RaVienBenhChinh" style="width:345px;margin-left: 35px;" />
                                    </td>
                                 </tr>
                                 
                                 <tr>
                                    <td align="right" style="width:15%; padding-right:10px">
                                        Nguyên nhân
                                    </td>
                                    <td style="width:80%;">
                                     	 <input    lang='luu' tabindex="35" name="ICD_Nguyennhan" type="text_checkbox" id="ICD_Nguyennhan" style="width:58px"/>
                        				 <input    lang='luu' tabindex="36" name="nguyennhan2" type="text" id="nguyennhan2" style="width:345px;margin-left: 35px;"  disabled/>
                                    </td>
                                 </tr>
                                 
                                 <tr>
                                    <td align="right" style="width:15%; padding-right:10px">
                                        Bệnh kèm theo
                                    </td>
                                    <td style="width:80%;">
                                     	 <input    lang='luu' tabindex="37" name="ICD_RaVienBenhKemTheo" type="text_checkbox" id="ICD_RaVienBenhKemTheo" style="width:58px"/>
                        				 <input    lang='luu' tabindex="38" name="CD_RaVienBenhKemTheo" type="text" id="CD_RaVienBenhKemTheo" style="width:345px;margin-left: 35px;" />
                                    </td>
                                 </tr>
                                 
                                 <tr>
                                    <td align="right" style="width:15%; padding-right:10px">
                                        Trước P/Thuật
                                    </td>
                                    <td style="width:80%;">
                                     	 <input    lang='luu' tabindex="39" name="ICD_TruocPhauThuat" type="text_checkbox" id="ICD_TruocPhauThuat" style="width:58px"/>
                        				 <input    lang='luu' tabindex="40" name="CD_TruocPhauThuat" type="text" id="CD_TruocPhauThuat" style="width:345px;margin-left: 35px;" />
                                    </td>
                                 </tr>
                                 
                                 <tr>
                                    <td align="right" style="width:15%; padding-right:10px">
                                        Sau phẫu thuật
                                    </td>
                                    <td style="width:80%;">
                                     	 <input  lang='luu' tabindex="41" name="ICD_SauPhauThuat" type="text_checkbox" id="ICD_SauPhauThuat" style="width:58px"/>
                        				 <input  lang='luu' tabindex="42" name="CD_SauPhauThuat" type="text" id="CD_SauPhauThuat" style="width:345px;margin-left: 35px;" />
                                    </td>
                                 </tr>
                            
                            </table>
                        </fieldset>
                    
                    </td>
                </tr>
                
               <tr>
                	<td align="right" style="width:10%; padding-right:8px">
                    	Khoa khám bệnh
                    </td>
                    <td width="38%">
                    	 <input lang='luu' tabindex="24" name="ICD_KKB_CapCuu" type="text_checkbox" id="ICD_KKB_CapCuu" style="width:86px"/>
                         <input   lang='luu' tabindex="25" name="CD_KKB_CapCuu1" type="text" id="CD_KKB_CapCuu1" style="width:66% ;margin-left: 5px;" />
                    
                </tr>
                
              <tr>
                	<td align="right" style="width:10%; padding-right:10px">
                    	Khi vào Khoa ĐT
                    </td>
                    <td width="38%">
                    	 <input  kiemtra='trong' lang='luu' tabindex="26" name="ICD_KhoaDieuTri" type="text_checkbox" id="ICD_KhoaDieuTri" style="width:86px"/>
                         <input  kiemtra='trong' lang='luu' tabindex="27" name="CD_KhoaDieuTri" type="text" id="CD_KhoaDieuTri" style="width:66% ;margin-left: 5px;" />
                    
                </tr>
               
                
                
                   <tr>
                        <td align="right" style="width:10%; padding-right:10px">
                            
                        </td>
                        <td width="38%">
                             <input  kiemtra='trong' lang='luu' tabindex="28" name="TaiBien" type="checkbox" id="TaiBien" > Tai biến 
                         
                             <input  kiemtra='trong' lang='luu' tabindex="29" name="BienChung" type="checkbox" id="BienChung" > Biến chứng 
               	 </tr>
                 
                  <tr>
                	<td align="right" style="width:10%; padding-right:10px">
                    	Nguyên nhân
                    </td>
                    <td width="38%">
                    	 <input  kiemtra='trong' lang='luu' tabindex="30" name="LyDoTaiBienVaBienChung" type="text" id="LyDoTaiBienVaBienChung" style="width:20%"/>
                         <input type="text" style="width:70%" disabled value="1-Do phẫu thuật, 2-Do gây mê, 3-Do nhiễm khuẩn, 4-Khác"/>
                    
                </tr>
                
                 <tr>
                        <td	align='center' colspan="2">
                            Tổng số ngày điều trị phẫu thuật <input  kiemtra='trong' lang='luu' tabindex="31" name="TongSoNgayDieutriDoPT" type="text" id="TongSoNgayDieutriDoPT" style="width:4%"/>
                            
                             Tổng số lần phẫu thuật
                         <input   kiemtra='trong' lang='luu' tabindex="32" name="TongSoLanPhauThuat" type="text" id="TongSoLanPhauThuat" style="width:4%"/>
                        </td>
                       
               	 </tr>
                
            </table>
        </fieldset>
        
       	<fieldset class="ui-widget ui-widget-content ui-corner-all ui-resizable panel_form" style="width:98%;;margin-top:0px">
        	<legend style="font-weight:bold;color:#56A717">Tình trạng ra viện</legend>
            <table border="0" cellpadding="0" cellspacing="0" width="100%">
            	
                
              <tr>
                	<td align="right" style="width:13%; padding-right:10px">
                    	Kết quả điều trị
                    </td>
                    <td width="45%">
                    	 <input  kiemtra='trong' lang='luu' tabindex="43" name="KetQuaDieuTri" type="text" id="KetQuaDieuTri" style="width:20%"/>
                         <input type="text" style="width:70%" disabled value="1-Khỏi, 2-đỡ,giảm; 3-không thay đổi, 4-nặng hơn, 5-tử vong"/>
                   </td>
                     <td align="right" style="width:14%; padding-right:10px">
                    	Thời gian
                    </td>
                     <td width="45%">
                    	 <input  kiemtra='trong' lang='luu' tabindex="44" name="ThoiGianTuVong" type="text" id="ThoiGianTuVong" style="width:20%"/>
                         <input type="text" style="width:70%" disabled value="1-Trong 24h, 2-Trong 48h, 3-Trong 72h"/>
                   </td>
               </tr>
               
               <tr>
                	<td align="right" style="width:10%; padding-right:10px">
                    	Giải phẫu bệnh
                    </td>
                    <td width="45%">
                    	 <input   lang='luu' tabindex="45" name="GiaiPhauBenh" type="text" id="GiaiPhauBenh" style="width:20%"/>
                         <input type="text" style="width:70%" disabled value="1-Lành tính, 2-Nghi ngờ, 3-Ác tính"/>
                   </td>
                     <td align="right" style="width:10%; padding-right:10px">
                    	Nguyên nhân tử vong
                    </td>
                     <td width="45%">
                    	 <input  kiemtra='trong' lang='luu' tabindex="46" name="NguyenNhanChinhTuVong" type="text_checkbox" id="NguyenNhanChinhTuVong" style="width: 47px;"/>
                         <input  tabindex="47" name="NguyenNhanChinhTuVong2" type="text" id="NguyenNhanChinhTuVong2" style="width:70%;margin-left: 22.5px;" disabled />
                   </td>
               </tr>
                
              <tr>
                	<td align="right" style="width:10%; padding-right:6px">
                    	Bệnh nhân tử vong lúc
                    </td>
                    <td width="45%">
                    	 <input  kiemtra='trong' lang='luu' tabindex="48" name="GioTuVong" type="text" id="GioTuVong" style="width:20%"/>
                         <input  kiemtra='trong' lang='luu' tabindex="49" name="NgayTuVong" type="text" id="NgayTuVong" style="width:70%"/>
                     </td>
                     <td></td>
                     <td>	 <input  kiemtra='trong' lang='luu' tabindex="50" name="KhamNghiemTuThi" type="checkbox" id="KhamNghiemTuThi"/> Khám nghiệm tử thi</td>
                    
                </tr>
               
                <tr>
                       <td align="right" style="width:10%; padding-right:10px">
                            Nguyên nhân
                        </td>
                        <td width="45%">
                             <input  kiemtra='trong' lang='luu' tabindex="51" name="TinhHinhTuVong" type="text" id="TinhHinhTuVong" style="width:20%"/>
                         <input type="text" style="width:70%" disabled value="1-Do bệnh, 2-Do tai biến điều trị, 3-Khác"/>
                         </td>
                          <td align="right" style="padding-right:10px">
                         	CĐGP tử thi
                         <td>
                         	 <input  lang='luu' tabindex="52" name="ICD_GiaiPhauTuThi" type="text_checkbox" id="ICD_GiaiPhauTuThi" style="width: 47px;"/>
                         	<input  lang='luu' tabindex="53" name="CD_GiaiPhauTuThi" type="text" id="CD_GiaiPhauTuThi" style="width:70%;margin-left: 22.5px;"/></td>
               	 </tr>
                
                
            </table>
        </fieldset>
        <div style="margin-top:5px; height:30px; text-align:right">
         <input tabindex="58" type="button" value="Bắt đầu" id="batdau"/> 
         <input  tabindex="55" type="button" value="Chuyển khoa" id="chuyen_khoa"/> 
         <input  tabindex="56" type="button" value="Chuyển viện" id="chuyen_vien"/> 
          <input  tabindex="57" type="button" value="Ra viện" id="ra_vien"/> 
          <input  tabindex="54" type="button" value="Lưu" id="luu"/> 
          <input  tabindex="55" type="button" value="Hủy" id="huy"/> 
          <input  tabindex="56" type="button" value="Xem in" id="xemin"/>
          <input  tabindex="57" type="button" value="Xem in giấy ra viện" id="xemingrv"/>
          <input  tabindex="58" type="button" value="Hoàn tất" id="ht_ba"/>
    	</div>
    </div>
    
</body>

<script type="text/javascript">
jQuery(document).ready(function() {
//$("#dangtaidulieu" ).show();
//$("#wrapper").addClass('bongmo');
window._chuyenvien=0;
	window.hienthi='1';
$("#luu").button();
$("#batdau").button();
$("#xemin").button(); 
$("#xemingrv").button(); 
$("#ht_ba").button(); 
$("#chuyen_khoa").button();
$("#chuyen_vien").button();
$("#ra_vien").button();
$("#huy").button();
$("#huy").button('disable');

<?php
	echo "window._idluotkham=".$_GET["idluotkham"].";";
	echo "window._id_benhnhan=".$_GET["idbenhnhan"].";";
?>

$("#xemin").click(function(e){	
$.cookie("in_status", "print_preview"); 
	
	dialog_report("Xem trước khi in",90,90,"u78787878975f","resource.php?module=report&view=<?=$modules?>&action=BenhAnNoiKhoa&type=report&id_form=794&idluotkham="+_idluotkham,'BenhAnNoiKhoa');
	$(".frame_u78787878975f").css("width","793px");
		});
//xem in giay ra vien
$("#xemingrv").click(function(e){	
	if(dthanhtoan=='1'){
			$.cookie("in_status", "print_preview"); 
	
	dialog_report("Xem trước khi in",90,90,"u78787878975f","resource.php?module=report&view=<?=$modules?>&action=toravien&type=report&id_form=794&idluotkham="+_idluotkham,'toravien');
	$(".frame_u78787878975f").css("width","793px");
	
		}else{
			//alert();
			if(ngayrvien==""){
				tooltip_message("Bạn phải làm thủ tục ra viện"); 
			}
			tooltip_message("Bạn phải thanh toán trước khi in giấy ra viện"); 
			
	}
	});	
//hoan tat
$("#ht_ba").click(function(){
	 
			$( "#dialog-hoantat" ).dialog('open');
 });
 
create_combobox_new('#ID_BacSyDieuTri',create_bacsi,'bw','[]','data_bacsi',0);
create_combobox_new('#ChuyenDen',create_benhvien,'bw','[]','data_benhvien',0);
create_combobox_new('#ID_VaoKhoa',create_khoa1,'bw','[]','data_khoa',0);
create_combobox_new('#ID_KhoaChuyen',create_khoa2,'bw','[]','data_khoa',0)			
//create_combobox_new('#ICD_NoiChuyenDen',create_chuyenden,'bw','[]','data_khoa',0);
//create_combobox_new('#ICD_KKB_CapCuu',create_capcuu,'bw','[]','data_khoa',0);
//create_combobox_new('#ICD_KhoaDieuTri',create_dieutri,'bw','[]','data_khoa',0);	
create_combobox_new('#ICD_NoiChuyenDen',create_chuyenden,'bw','[]','data_icd10',0);
create_combobox_new('#ICD_KhoaDieuTri',create_dieutri,'bw','[]','data_icd10',0);	
create_combobox_new('#ICD_KKB_CapCuu',create_capcuu,'bw','[]','data_icd10',0);

create_combobox_new('#ICD_RaVienBenhChinh',create_benhchinh,'bw','[]','data_icd10',0);
create_combobox_new('#ICD_Nguyennhan',create_nguyenhan,'bw','[]','data_icd10',0);
create_combobox_new('#ICD_RaVienBenhKemTheo',create_benhkemtheo,'bw','[]','data_icd10',0);
create_combobox_new('#ICD_TruocPhauThuat',create_truocpt,'bw','[]','data_icd10',0);
create_combobox_new('#ICD_SauPhauThuat',create_saupt,'bw','[]','data_icd10',0);	
create_combobox_new('#NguyenNhanChinhTuVong',create_nguyenhantuvong,'bw','[]','data_icd10',0);	
create_combobox_new('#ICD_GiaiPhauTuThi',create_giaiphaututhi,'bw','[]','data_icd10',0);

$.post('resource.php?module=<?=$modules?>&view=<?=$view?>&action=data_full_thongtinbenhan&id_luotkham='+window._idluotkham).done(function(data) {
	 var rs_data=data.split('||');
	 //alert(rs_data[0]);
	 create_combobox_new('#ICD_RaVienBenhChinh',create_benhchinh,'bw',rs_data[1],'data_icd10',0);
	create_combobox_new('#ICD_Nguyennhan',create_nguyenhan,'bw',rs_data[1],'data_icd10',0);
	create_combobox_new('#ICD_RaVienBenhKemTheo',create_benhkemtheo,'bw',rs_data[1],'data_icd10',0);
	create_combobox_new('#ICD_TruocPhauThuat',create_truocpt,'bw',rs_data[1],'data_icd10',0);
	create_combobox_new('#ICD_SauPhauThuat',create_saupt,'bw',rs_data[1],'data_icd10',0);	
	create_combobox_new('#NguyenNhanChinhTuVong',create_nguyenhantuvong,'bw',rs_data[1],'data_icd10',0);	
	create_combobox_new('#ICD_GiaiPhauTuThi',create_giaiphaututhi,'bw',rs_data[1],'data_icd10',0);
	
	create_combobox_new('#ID_VaoKhoa',create_khoa1,'bw',rs_data[2],'data_khoa',0);
	create_combobox_new('#ID_KhoaChuyen',create_khoa2,'bw',rs_data[2],'data_khoa',0)			
	//create_combobox_new('#ICD_NoiChuyenDen',create_chuyenden,'bw',rs_data[2],'data_khoa',0);
	//create_combobox_new('#ICD_KKB_CapCuu',create_capcuu,'bw',rs_data[2],'data_khoa',0);
	//create_combobox_new('#ICD_KhoaDieuTri',create_dieutri,'bw',rs_data[2],'data_khoa',0);	
	create_combobox_new('#ICD_NoiChuyenDen',create_chuyenden,'bw',rs_data[1],'data_icd10',0);
	create_combobox_new('#ICD_KKB_CapCuu',create_capcuu,'bw',rs_data[1],'data_icd10',0);
	create_combobox_new('#ICD_KhoaDieuTri',create_dieutri,'bw',rs_data[1],'data_icd10',0);	
	
	create_combobox_new('#ID_BacSyDieuTri',create_bacsi,'bw',rs_data[3],'data_bacsi',0);
	create_combobox_new('#ChuyenDen',create_benhvien,'bw',rs_data[4],'data_benhvien',0);
	// getDataRHM(rs_data[5]);
	  	var rs=jQuery.parseJSON(rs_data[0]);
		//alert(rs[0]["TrangThaiLuotKham"]);
		window.tthaikham=rs[0]["TrangThaiLuotKham"];
		window.dthanhtoan=rs[0]["DaThanhToanBill"];
		window.ngayrvien=rs[0]["NgayRaVien"];
		//alert(ngayrvien);
		//alert(window.dthanhtoan);
		$.each(rs[0], function( k, v ) {
			
		if($("#"+k).attr('type')=='text_checkbox'){
			setval_new('#'+k,v); 
		}else if($("#"+k).attr('type')=='checkbox'){
			if(v==1){
				$("#"+k).prop('checked', true);
			}else{
				$("#"+k).prop('checked', false);	
			}
		}else{
			if(k=='ID_BenhAnNoiTru_Khoa'){
				window.id_benhannoitru_khoa=v;
				}else if(k=='ID_BenhAnNoiTru'){
				window.id_benhannoitru=v;
				}else if(k=='ID_LoaiBenhAnNoiTru'){
					window.idloaibenhan=v;
				}else{
					$("#"+k).val(v);
					
				}
		}
		});
	if($("#TaiBien").is(':checked') || $("#BienChung").is(':checked')){
		$("#LyDoTaiBienVaBienChung").prop("disabled",false);
	}
	if($("#GioVaoVien").val()==''){
		$("#GioVaoVien").val('<?php echo date("H:i") ?>');
	}
	if($("#NgayVaoVien").val()==''){
		$("#NgayVaoVien").val('<?php echo date($_SESSION["config_system"]["ngaythang"]) ?>');
	}
	disable();
	$("#dangtaidulieu" ).hide();
	$("#wrapper").removeClass('bongmo');
	//alert(window.idloaibenhan);
	//'alert('TrangThaiLuotKham');
	if(window.idloaibenhan!=null){
		$("#batdau").button('disable');
		/*if(tthaikham!='KetThucKham'){
			//senable(window.hienthi);
			$("#chuyen_khoa").button('enable');
			$("#chuyen_vien").button('disable');
			$("#ra_vien").button('disable');
			$("#luu").button('disable');
			$("#ht_ba").button('disable');	
		}else{
			$("#chuyen_khoa").button('disable');
			$("#chuyen_vien").button('disable');
			$("#ra_vien").button('disable');
			$("#luu").button('disable');
			$("#ht_ba").button('disable');
		}*/
		
	}else{
		$("#chuyen_khoa").button('disable');
		$("#chuyen_vien").button('disable');
		$("#ra_vien").button('disable');
		$("#luu").button('disable');
		$("#xemin").button('disable');
	}
	
	
});
//dialog hoan tat
$( "#dialog-hoantat" ).dialog({
	   autoOpen:false,
					  resizable: false,
					  height:150,
					  width:350,
					  modal: true,
					
					  buttons: {
						"OK": function() {
								 $.post('resource.php?module=<?=$modules?>&view=<?=$view?>&action=controller&oper=update_hoantat&hienmaloi=3&id_luotkham='+<?=$_GET["idluotkham"]?>).done(function( gridData ) { 
				   tooltip_message("Đã Hoàn Tất");  
				   $("#chuyen_khoa").button('disable');
			$("#chuyen_vien").button('disable');
			$("#ra_vien").button('disable');
			$("#luu").button('disable');
			$("#ht_ba").button('disable');
			});
							$( this ).dialog( "close" );
							},
						Cancel: function() {
					
						  $( this ).dialog( "close" );
						}
					  }
					});

number_textbox('#TrucTiepVao');
number_textbox('#NoiGioiThieu');
number_textbox('#KetQuaDieuTri');
number_textbox('#HinhThucRaVien');
number_textbox('#LyDoTaiBienVaBienChung');
number_textbox('#KetQuaDieuTri');
number_textbox('#GiaiPhauBenh');
number_textbox('#TinhHinhTuVong');
number_textbox('#ThoiGianTuVong');
$("#GioVaoKhoa").focus(function(e) {
    if($("#GioVaoKhoa").val()==''){
		$("#GioVaoKhoa").val('<?php echo date("H:i") ?>');
	}
	
});
$("#NgayVaoKhoa").focus(function(e) {
    if($("#NgayVaoKhoa").val()==''){
		$("#NgayVaoKhoa").val('<?php echo date($_SESSION["config_system"]["ngaythang"]) ?>');
	}
});

$("#GioRaVien").focus(function(e) {
    if($("#GioRaVien").val()==''){
		$("#GioRaVien").val('<?php echo date("H:i") ?>');
	}
	
});
$("#NgayRaVien").focus(function(e) {
    if($("#NgayRaVien").val()==''){
		$("#NgayRaVien").val('<?php echo date($_SESSION["config_system"]["ngaythang"]) ?>');
	}
});

$("#GioTuVong").focus(function(e) {
    if($("#GioTuVong").val()==''){
		$("#GioTuVong").val('<?php echo date("H:i") ?>');
	}
	
});
$("#NgayTuVong").focus(function(e) {
    if($("#NgayTuVong").val()==''){
		$("#NgayTuVong").val('<?php echo date($_SESSION["config_system"]["ngaythang"]) ?>');
	}
});


$("#NgayRaVien").change(function(e) {
    if($("#NgayVaoVien").val()!='' && $("#NgayRaVien").val()!=''){
	  ngayvaovien= convert_to_datejs($("#NgayVaoVien").val());
	  ngayravien= convert_to_datejs($("#NgayRaVien").val());
	  ngayvaovien=$.datepicker.formatDate('yy-mm-dd', new Date(ngayvaovien)); 
	  ngayravien=$.datepicker.formatDate('yy-mm-dd', new Date(ngayravien)); 
	  if((DateDiff(new Date(ngayvaovien),new Date(ngayravien))+1)>0){
	  	$("#TongSoNgayDieutri").val(DateDiff(new Date(ngayvaovien),new Date(ngayravien))+1);
	  }else{
		  $("#TongSoNgayDieutri").val('');
		  }
  	}
});
$("#NgayRaVien").focusout(function(e) {
    if($("#NgayVaoVien").val()!='' && $("#NgayRaVien").val()!=''){
	  ngayvaovien= convert_to_datejs($("#NgayVaoVien").val());
	  ngayravien= convert_to_datejs($("#NgayRaVien").val());
	  ngayvaovien=$.datepicker.formatDate('yy-mm-dd', new Date(ngayvaovien)); 
	  ngayravien=$.datepicker.formatDate('yy-mm-dd', new Date(ngayravien)); 
	  if((DateDiff(new Date(ngayvaovien),new Date(ngayravien))+1)>0){
	  	$("#TongSoNgayDieutri").val(DateDiff(new Date(ngayvaovien),new Date(ngayravien))+1);
	  }else{
		  $("#TongSoNgayDieutri").val('');
		  }
  	}
});

$("#GiaiPhauBenh").keyup(function(e) {
	if($("#GiaiPhauBenh").val()!='' && $("#GiaiPhauBenh").val()<1){
		$("#GiaiPhauBenh").val(1);
	}
	if($("#GiaiPhauBenh").val()!='' && $("#GiaiPhauBenh").val()>5){
		$("#GiaiPhauBenh").val(5);
	}
});
$("#TinhHinhTuVong").keyup(function(e) {
	if($("#TinhHinhTuVong").val()!='' && $("#TinhHinhTuVong").val()<1){
		$("#TinhHinhTuVong").val(1);
	}
	if($("#TinhHinhTuVong").val()!='' && $("#TinhHinhTuVong").val()>3){
		$("#TinhHinhTuVong").val(3);
	}
});
$("#ThoiGianTuVong").keyup(function(e) {
	if($("#ThoiGianTuVong").val()!='' && $("#ThoiGianTuVong").val()<1){
		$("#ThoiGianTuVong").val(1);
	}
	if($("#ThoiGianTuVong").val()!='' && $("#ThoiGianTuVong").val()>3){
		$("#ThoiGianTuVong").val(3);
	}
});

$("#HinhThucRaVien").keyup(function(e) {
	if($("#HinhThucRaVien").val()!='' && $("#HinhThucRaVien").val()<1){
		$("#HinhThucRaVien").val(1);
	}
	if($("#HinhThucRaVien").val()!='' && $("#HinhThucRaVien").val()>4){
		$("#HinhThucRaVien").val(4);
	}

});
$("#LyDoTaiBienVaBienChung").keyup(function(e) {
	if($("#LyDoTaiBienVaBienChung").val()!='' && $("#LyDoTaiBienVaBienChung").val()<1){
		$("#LyDoTaiBienVaBienChung").val(1);
	}
	if($("#LyDoTaiBienVaBienChung").val()!='' && $("#LyDoTaiBienVaBienChung").val()>4){
		$("#LyDoTaiBienVaBienChung").val(4);
	}
});
$("#batdau").click(function(e) {
	$("#ht_ba").button('enable');
	$("#batdau").button('disable');
	$("#luu").button('enable');
	$("#chuyen_khoa").button('enable');
	$("#chuyen_vien").button('enable');
	$("#ra_vien").button('enable');
	$("#huy").button('enable');
	$("#xemin").button('enable');
	$("#xemingrv").button('enable');
	//alert(window.idloaibenhan);
    $.post('resource.php?module=<?= $modules ?>&view=<?= $view ?>&action=update_loaibenhan&idbenhannoitru='+<?=$_GET['idbenhannoitru']?>+'&idloaibenhan=<?=$_GET['idloaibenhan']?>').done(function(data){
	enable(window.hienthi);	
	tooltip_message("Đã thực hiện");
	$("#ID_BacSyDieuTri").focus();
	});
	
	
});

$("#chuyen_khoa").click(function(e) {
	window._chuyenvien=0;
	create_combobox_new('#ID_KhoaChuyen',create_khoa2,'bw','','data_khoa&id_khoa='+id_khoa,0) ;   
	remove_class();
	disable();
	window.hienthi='2';
	enable(window.hienthi);
	$("#luu").button('enable');
	$("#chuyen_khoa").button('disable');
	$("#chuyen_vien").button('enable');
	$("#ra_vien").button('enable');
	$("#huy").button('enable');
	
});
$("#chuyen_vien").click(function(e) {
	window._chuyenvien=1;
	remove_class();
	disable();
	window.hienthi='3';
	enable(window.hienthi);
	$("#luu").button('enable');
	$("#chuyen_vien").button('disable');
	$("#chuyen_khoa").button('enable');
	$("#ra_vien").button('enable');
	$("#huy").button('enable');

});
//========
$("#huy").click(function(e) {
	window._chuyenvien=0;
	load_huy();
	remove_class();
	disable();
	window.hienthi='1';
	enable(window.hienthi);
	$("#luu").button('enable');
	$("#chuyen_vien").button('enable');
	$("#chuyen_khoa").button('enable');
	$("#ra_vien").button('enable');
	$("#huy").button('disable');
	$("#tenkhoachuyen").val("");
	 $("#CD_NoiChuyenDen").val("");
	 $("#CD_KKB_CapCuu1").val("");
	 $("#CD_KhoaDieuTri").val("");
	 $("#CD_RaVienBenhChinh").val("");
	 $("#nguyennhan2").val("");
	 $("#CD_RaVienBenhKemTheo").val("");
	 $("#CD_TruocPhauThuat").val("");
	 $("#CD_SauPhauThuat").val("");
	 $("#NguyenNhanChinhTuVong2").val("");
	 $("#CD_GiaiPhauTuThi").val("");
	   $("#chuyenden2").val("");

});
//============
$("#ra_vien").click(function(e) {
	window._chuyenvien=0;
	remove_class();
	disable();
	window.hienthi='4';
	enable(window.hienthi);
	$("#luu").button('enable');
	$("#ra_vien").button('disable');
	$("#chuyen_khoa").button('enable');
	$("#chuyen_vien").button('enable');
	$("#huy").button('enable');
});
$("#TrucTiepVao").keyup(function(e) {
	if($("#TrucTiepVao").val()!='' && $("#TrucTiepVao").val()<1){
		$("#TrucTiepVao").val(1);
	}
	if($("#TrucTiepVao").val()!='' && $("#TrucTiepVao").val()>3){
		$("#TrucTiepVao").val(3);
	}
	if($("#TrucTiepVao").val()==2){
			create_combobox_enable("#ICD_KKB_CapCuu");
			$("#ICD_KKB_CapCuu_hidden").prop('disabled',false);
			$("#CD_KKB_CapCuu1").prop('disabled',false);
			create_combobox_enable("#ICD_KhoaDieuTri");
			$("#ICD_KhoaDieuTri_hidden").prop('disabled',false);
			$("#CD_KhoaDieuTri").prop('disabled',false);
	}
	if(($("#TrucTiepVao").val()==1)||($("#TrucTiepVao").val()==3)){
			create_combobox_enable("#ICD_KhoaDieuTri");
			$("#ICD_KhoaDieuTri_hidden").prop('disabled',false);
			$("#CD_KhoaDieuTri").prop('disabled',false);
			create_combobox_disable("#ICD_KKB_CapCuu");
			$("#ICD_KKB_CapCuu_hidden").prop('disabled',true);
			$("#CD_KKB_CapCuu1").prop('disabled',true);
	}
	
});
//=====

$("#NoiGioiThieu").keyup(function(e) {
	if($("#NoiGioiThieu").val()!='' && $("#NoiGioiThieu").val()<1){
		$("#NoiGioiThieu").val(1);
	}
	if($("#NoiGioiThieu").val()!='' && $("#NoiGioiThieu").val()>3){
		$("#NoiGioiThieu").val(3);
	}
    if($("#NoiGioiThieu").val()==1){
		$("#TenNoiGioiThieu").prop("disabled",false);
		create_combobox_enable("#ICD_NoiChuyenDen");
			$("#ICD_NoiChuyenDen_hidden").prop('disabled',false);
			$("#CD_NoiChuyenDen").prop('disabled',false);
		
		}else{
			//$("#TenNoiGioiThieu").val('');
			$("#TenNoiGioiThieu").prop("disabled",true);
			create_combobox_disable("#ICD_NoiChuyenDen");
			$("#ICD_NoiChuyenDen_hidden").prop('disabled',true);
			$("#CD_NoiChuyenDen").prop('disabled',true);
			}
});
$("#TaiBien").change(function(e) {
    if($("#TaiBien").is(':checked') || $("#BienChung").is(':checked')){
		$("#LyDoTaiBienVaBienChung").prop("disabled",false);
	}else{
		$("#LyDoTaiBienVaBienChung").prop("disabled",true);
	}
});
$("#BienChung").change(function(e) {
    if($("#TaiBien").is(':checked') || $("#BienChung").is(':checked')){
		$("#LyDoTaiBienVaBienChung").prop("disabled",false);
	}else{
		$("#LyDoTaiBienVaBienChung").prop("disabled",true);
	}
});

$("#KetQuaDieuTri").keyup(function(e) {
	if($("#KetQuaDieuTri").val()!='' && $("#KetQuaDieuTri").val()<1){
		$("#KetQuaDieuTri").val(1);
	}
	if($("#KetQuaDieuTri").val()!='' && $("#KetQuaDieuTri").val()>5){
		$("#KetQuaDieuTri").val(5);
	}
	if($("#KetQuaDieuTri").val()==5){
		$("#GiaiPhauBenh").prop("disabled",false);
		$("#GioTuVong").prop("disabled",false);
		$("#NgayTuVong").prop("disabled",false);
		$("#TinhHinhTuVong").prop("disabled",false);
		$("#ThoiGianTuVong").prop("disabled",false);
		create_combobox_enable("#NguyenNhanChinhTuVong");
		$("#NguyenNhanChinhTuVong2").prop("disabled",false);
		create_combobox_enable("#ICD_GiaiPhauTuThi");
		$("#CD_GiaiPhauTuThi").prop("disabled",false);
		$("#KhamNghiemTuThi").prop("disabled",false);
	}else{
		$("#GiaiPhauBenh").prop("disabled",true);
		$("#GioTuVong").prop("disabled",true);
		$("#NgayTuVong").prop("disabled",true);
		$("#TinhHinhTuVong").prop("disabled",true);
		$("#ThoiGianTuVong").prop("disabled",true);
		create_combobox_disable("#NguyenNhanChinhTuVong");
		$("#NguyenNhanChinhTuVong2").prop("disabled",true);
		create_combobox_disable("#ICD_GiaiPhauTuThi");
		$("#CD_GiaiPhauTuThi").prop("disabled",true);
		$("#KhamNghiemTuThi").prop("disabled",true);
		}
});


/*if($("#batdau").button('disable')){
	
	$("#luu").button('enable');
	$("#chuyen_khoa").button('enable');
	$("#chuyen_vien").button('enable');
	$("#ra_vien").button('enable');
	$("#huy").button('enable');
	$("#xemin").button('enable');
}else{
	$("#luu").button('disable');
	$("#chuyen_khoa").button('disable');
	$("#chuyen_vien").button('disable');
	$("#ra_vien").button('disable');
	$("#huy").button('disable');
	$("#xemin").button('disable');
}
*/
	jwerty.key('tab', false);
	   jwerty.key('shift+tab', false);			  
	   jwerty.key('shift+enter', false);
		 $('input[type=text],input[type=text_checkbox],#wrapper textarea,#wrapper input[type=checkbox],#wrapper span input, input[type=button]').bind("keydown", function(e) {	
			if ($("input[type=text],#wrapper textarea,#wrapper input[type=checkbox],#wrapper span input , input[type=button]").is(":focus")){	
				
				   if (jwerty.is("enter",e)||jwerty.is("tab",e)) { 
						var tabindex = $(e.target).attr('tabindex');
						window.tabindex_null=tabindex;
						//isdisable('next',tabindex,e)
					move_tabindex('next',tabindex,e)
				 }else if(jwerty.is("shift+tab",e)){
					 var tabindex = $(e.target).attr('tabindex');
					 window.tabindex_null=tabindex;
					 //isdisable('pre',tabindex,e)
					move_tabindex('pre',tabindex,e)
					 return false;
				 }
			 }
		})
	$("#NgayChuyenKhoa,#NgayTuVong,#NgayVaoKhoa,#NgayVaoVien,#NgayRaVien").datepicker({
		showWeek: true,
		defaultDate: "+1w",
		changeMonth: true,
		changeYear: true,
		numberOfMonths: 1,
		dateFormat:  $.cookie("ngayJqueryUi"),
	  
	});
	
	$.timeEntry.setDefaults({show24Hours: true});
	$('#GioChuyenKhoa, #GioTuVong,#GioVaoKhoa,#GioRaVien,#GioVaoVien').timeEntry({timeSteps: [1, 1, 1]});	
	$.dateEntry.setDefaults({spinnerImage: ''});
	$("#NgayChuyenKhoa, #NgayTuVong,#NgayVaoKhoa,#NgayVaoVien,#NgayRaVien").dateEntry({dateFormat:$.cookie("ngayDateEntry")});
	$("#GioChuyenKhoa, #GioTuVong,#GioVaoKhoa,#GioRaVien,#GioVaoVien").timeEntry();
	//getDataRHM(window._idluotkham);
//	disable();
	//enable(window.hienthi);	
    phanquyen();
	$("#chuyen_khoa,#chuyen_vien,#ra_vien").button();
})// dump ready
	

 function create_bacsi(elem, datalocal) {
        datalocal = jQuery.parseJSON(datalocal);
        $(elem).jqGrid({
           datastr: datalocal,
            datatype: "jsonstring",
            colNames: ['Mã', 'Họ tên','Nickname','Phòng ban'],
            colModel: [
				//{name: 'idnv', index: 'idnv', hidden: true,width:1},
                {name: 'manv', index: 'manv', hidden: false,width:"10%"},
                {name: 'hovaten', index: 'hovaten', hidden: false,width:"45%"},				
				{name: 'nick', index: 'nick', hidden: false,width:"15%"},
				{name: 'phongban', index: 'phongban', hidden: false,width:"30%"},
                
            ],
            hidegrid: false,
            gridview: true,
            loadonce: true,
            scroll: 1,
            modal: true,
            rowNum: 100,
            rowList: [],
            height: 200,
            width: 500,
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
    function create_khoa1(elem, datalocal) {
        datalocal = jQuery.parseJSON(datalocal);
        $(elem).jqGrid({
            datastr: datalocal,
            datatype: "jsonstring",
            colNames: ['Mã khoa', 'Tên khoa'],
            colModel: [
                {name: 'makhoa', index: 'makhoa', hidden: false,width:1},
                {name: 'tenkhoa', index: 'tenkhoa', hidden: false,width:5},
                
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
              ngaygio();
              var rowData = $(this).getRowData(id);
              //alert(rowData);
			  window.id_khoa=id;
               create_combobox_new('#ID_BacSyDieuTri',create_bacsi,'bw','','data_bacsi&id_khoa='+id,0);
              $("#tenkhoavao").val(rowData["tenkhoa"]);
              $("#GioVaoKhoa").val(gio);
              $("#NgayVaoKhoa").val(ngay);
            },
            ondblClickRow: function(id, rowIndex, columnIndex) {
            },
            loadComplete: function(data) {
            },
        });
        $(elem).jqGrid('filterToolbar', {searchOperators: false, searchOnEnter: false, defaultSearch: "cn"});
        $(elem).jqGrid('bindKeys', {});
    }
    function create_khoa2(elem, datalocal) {
        datalocal = jQuery.parseJSON(datalocal);
        $(elem).jqGrid({
            datastr: datalocal,
            datatype: "jsonstring",
            colNames: ['Mã khoa', 'Tên khoa'],
            colModel: [
                {name: 'makhoa', index: 'makhoa', hidden: false,width:1},
                {name: 'tenkhoa', index: 'tenkhoa', hidden: false,width:5},
                
            ],
            hidegrid: false,
            gridview: true,
            loadonce: true,
            scroll: false,
            modal: true,
            rowNum: 300,
            rowList: [],
            height: 200,
            width: 300,
            viewrecords: true,
            ignoreCase: true,
            shrinkToFit: true,
            cmTemplate: {sortable: false},
            sortorder: "desc",
            serializeRowData: function(postdata) {
            },
            onSelectRow: function(id) {
              ngaygio();
              var rowData = $(this).getRowData(id);
              //alert(rowData);
              $("#tenkhoachuyen").val(rowData["tenkhoa"]);
              $("#GioChuyenKhoa").val(gio);
              $("#NgayChuyenKhoa").val(ngay);
			  if($("#NgayVaoKhoa").val()!=''){
				  ngayvaovien= convert_to_datejs($("#NgayVaoKhoa").val())
				  ngayvaovien=$.datepicker.formatDate('yy-mm-dd', new Date(ngayvaovien)); 
				  ngaychuyenkhoa=$.datepicker.formatDate('yy-mm-dd', new Date(convert_to_datejs(ngay))); 
				  $("#SoNgayDieuTri").val(DateDiff(new Date(ngayvaovien),new Date(ngaychuyenkhoa))+1);
			  }
            },
            ondblClickRow: function(id, rowIndex, columnIndex) {
            },
            loadComplete: function(data) {
            },
        });
        $(elem).jqGrid('filterToolbar', {searchOperators: false, searchOnEnter: false, defaultSearch: "cn"});
        $(elem).jqGrid('bindKeys', {});
    }
	 function create_chuyenden(elem, datalocal) {
        datalocal = jQuery.parseJSON(datalocal);
        $(elem).jqGrid({
            datastr: datalocal,
            datatype: "jsonstring",
            colNames: ['Mã CĐ', 'Chẩn đoán'],
            colModel: [
                {name: 'makhoa', index: 'makhoa', hidden: false,width:1},
                {name: 'tenkhoa', index: 'tenkhoa', hidden: false,width:5},
                
            ],
            hidegrid: false,
            gridview: true,
            loadonce: true,
            scroll: false,
            modal: true,
            rowNum: 300,
            rowList: [],
            height: 200,
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
              $("#CD_NoiChuyenDen").val(rowData["tenkhoa"]);

            },
            ondblClickRow: function(id, rowIndex, columnIndex) {
            },
            loadComplete: function(data) {
            },
        });
        $(elem).jqGrid('filterToolbar', {searchOperators: false, searchOnEnter: false, defaultSearch: "cn"});
        $(elem).jqGrid('bindKeys', {});
    }
	 function create_capcuu(elem, datalocal) {
        datalocal = jQuery.parseJSON(datalocal);
        $(elem).jqGrid({
            datastr: datalocal,
            datatype: "jsonstring",
            colNames: ['Mã CĐ', 'Chẩn đoán'],
            colModel: [
                {name: 'makhoa', index: 'makhoa', hidden: false,width:1},
                {name: 'tenkhoa', index: 'tenkhoa', hidden: false,width:5},
                
            ],
            hidegrid: false,
            gridview: true,
            loadonce: true,
            scroll: false,
            modal: true,
            rowNum: 300,
            rowList: [],
            height: 200,
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
              $("#CD_KKB_CapCuu1").val(rowData["tenkhoa"]);


            },
            ondblClickRow: function(id, rowIndex, columnIndex) {
            },
            loadComplete: function(data) {
            },
        });
        $(elem).jqGrid('filterToolbar', {searchOperators: false, searchOnEnter: false, defaultSearch: "cn"});
        $(elem).jqGrid('bindKeys', {});
    }
	 function create_dieutri(elem, datalocal) {
        datalocal = jQuery.parseJSON(datalocal);
        $(elem).jqGrid({
            datastr: datalocal,
            datatype: "jsonstring",
            colNames: ['Mã CĐ', 'Chẩn đoán'],
            colModel: [
                {name: 'makhoa', index: 'makhoa', hidden: false,width:1},
                {name: 'tenkhoa', index: 'tenkhoa', hidden: false,width:5},
                
            ],
            hidegrid: false,
            gridview: true,
            loadonce: true,
            scroll: false,
            modal: true,
            rowNum: 300,
            rowList: [],
            height: 200,
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
              $("#CD_KhoaDieuTri").val(rowData["tenkhoa"]);


            },
            ondblClickRow: function(id, rowIndex, columnIndex) {
            },
            loadComplete: function(data) {
            },
        });
        $(elem).jqGrid('filterToolbar', {searchOperators: false, searchOnEnter: false, defaultSearch: "cn"});
        $(elem).jqGrid('bindKeys', {});
    }
	
function create_benhchinh(elem, datalocal) {
        datalocal = jQuery.parseJSON(datalocal);
        $(elem).jqGrid({
            datastr: datalocal,
            datatype: "jsonstring",
            colNames: ['CICD10', 'Tên'],
            colModel: [
                {name: 'CICD10', index: 'CICD10', hidden: false,width:1},
                {name: 'Ten', index: 'Ten', hidden: false,width:5},
                
            ],
            hidegrid: false,
            gridview: true,
            loadonce: true,
            scroll: false,
            modal: true,
            rowNum: 300,
            rowList: [],
            height: 200,
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
              $("#CD_RaVienBenhChinh").val(rowData["Ten"]);

            },
            ondblClickRow: function(id, rowIndex, columnIndex) {
            },
            loadComplete: function(data) {
            },
        });
        $(elem).jqGrid('filterToolbar', {searchOperators: false, searchOnEnter: false, defaultSearch: "cn"});
        $(elem).jqGrid('bindKeys', {});
    }
function create_nguyenhan(elem, datalocal) {
        datalocal = jQuery.parseJSON(datalocal);
        $(elem).jqGrid({
            datastr: datalocal,
            datatype: "jsonstring",
            colNames: ['CICD10', 'Tên'],
            colModel: [
                {name: 'CICD10', index: 'CICD10', hidden: false,width:1},
                {name: 'Ten', index: 'Ten', hidden: false,width:5},
                
            ],
           hidegrid: false,
            gridview: true,
            loadonce: true,
            scroll: false,
            modal: true,
            rowNum: 300,
            rowList: [],
            height: 200,
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
              $("#nguyennhan2").val(rowData["Ten"]);
            },
            ondblClickRow: function(id, rowIndex, columnIndex) {
            },
            loadComplete: function(data) {
            },
        });
        $(elem).jqGrid('filterToolbar', {searchOperators: false, searchOnEnter: false, defaultSearch: "cn"});
        $(elem).jqGrid('bindKeys', {});
    }
function create_benhkemtheo(elem, datalocal) {
        datalocal = jQuery.parseJSON(datalocal);
        $(elem).jqGrid({
            datastr: datalocal,
            datatype: "jsonstring",
            colNames: ['CICD10', 'Tên'],
            colModel: [
                {name: 'CICD10', index: 'CICD10', hidden: false,width:1},
                {name: 'Ten', index: 'Ten', hidden: false,width:5},
                
            ],
            hidegrid: false,
            gridview: true,
            loadonce: true,
            scroll: false,
            modal: true,
            rowNum: 300,
            rowList: [],
            height: 200,
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
              $("#CD_RaVienBenhKemTheo").val(rowData["Ten"]);
            },
            ondblClickRow: function(id, rowIndex, columnIndex) {
            },
            loadComplete: function(data) {
            },
        });
        $(elem).jqGrid('filterToolbar', {searchOperators: false, searchOnEnter: false, defaultSearch: "cn"});
        $(elem).jqGrid('bindKeys', {});
    }
function create_truocpt(elem, datalocal) {
        datalocal = jQuery.parseJSON(datalocal);
        $(elem).jqGrid({
            datastr: datalocal,
            datatype: "jsonstring",
            colNames: ['CICD10', 'Tên'],
            colModel: [
                {name: 'CICD10', index: 'CICD10', hidden: false,width:1},
                {name: 'Ten', index: 'Ten', hidden: false,width:5},
                
            ],
            hidegrid: false,
            gridview: true,
            loadonce: true,
            scroll: false,
            modal: true,
            rowNum: 300,
            rowList: [],
            height: 200,
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
              $("#CD_TruocPhauThuat").val(rowData["Ten"]);
            },
            ondblClickRow: function(id, rowIndex, columnIndex) {
            },
            loadComplete: function(data) {
            },
        });
        $(elem).jqGrid('filterToolbar', {searchOperators: false, searchOnEnter: false, defaultSearch: "cn"});
        $(elem).jqGrid('bindKeys', {});
    }
function create_saupt(elem, datalocal) {
        datalocal = jQuery.parseJSON(datalocal);
        $(elem).jqGrid({
            datastr: datalocal,
            datatype: "jsonstring",
            colNames: ['CICD10', 'Tên'],
            colModel: [
                {name: 'CICD10', index: 'CICD10', hidden: false,width:1},
                {name: 'Ten', index: 'Ten', hidden: false,width:5},
                
            ],
            hidegrid: false,
            gridview: true,
            loadonce: true,
            scroll: false,
            modal: true,
            rowNum: 300,
            rowList: [],
            height: 200,
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
              $("#CD_SauPhauThuat").val(rowData["Ten"]);
            },
            ondblClickRow: function(id, rowIndex, columnIndex) {
            },
            loadComplete: function(data) {
            },
        });
        $(elem).jqGrid('filterToolbar', {searchOperators: false, searchOnEnter: false, defaultSearch: "cn"});
        $(elem).jqGrid('bindKeys', {});
    }
	function create_nguyenhantuvong(elem, datalocal) {
        datalocal = jQuery.parseJSON(datalocal);
        $(elem).jqGrid({
            datastr: datalocal,
            datatype: "jsonstring",
            colNames: ['CICD10', 'Tên'],
            colModel: [
                {name: 'CICD10', index: 'CICD10', hidden: false,width:1},
                {name: 'Ten', index: 'Ten', hidden: false,width:5},
                
            ],
            hidegrid: false,
            gridview: true,
            loadonce: true,
            scroll: false,
            modal: true,
            rowNum: 300,
            rowList: [],
            height: 200,
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
              $("#NguyenNhanChinhTuVong2").val(rowData["Ten"]);
            },
            ondblClickRow: function(id, rowIndex, columnIndex) {
            },
            loadComplete: function(data) {
            },
        });
        $(elem).jqGrid('filterToolbar', {searchOperators: false, searchOnEnter: false, defaultSearch: "cn"});
        $(elem).jqGrid('bindKeys', {});
    }
	
	function create_giaiphaututhi(elem, datalocal) {
        datalocal = jQuery.parseJSON(datalocal);
        $(elem).jqGrid({
            datastr: datalocal,
            datatype: "jsonstring",
            colNames: ['CICD10', 'Tên'],
            colModel: [
                {name: 'CICD10', index: 'CICD10', hidden: false,width:1},
                {name: 'Ten', index: 'Ten', hidden: false,width:5},
                
            ],
            hidegrid: false,
            gridview: true,
            loadonce: true,
            scroll: false,
            modal: true,
            rowNum: 300,
            rowList: [],
            height: 200,
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
              $("#CD_GiaiPhauTuThi").val(rowData["Ten"]);
            },
            ondblClickRow: function(id, rowIndex, columnIndex) {
            },
            loadComplete: function(data) {
            },
        });
        $(elem).jqGrid('filterToolbar', {searchOperators: false, searchOnEnter: false, defaultSearch: "cn"});
        $(elem).jqGrid('bindKeys', {});
    }

function create_benhvien(elem, datalocal) {
        datalocal = jQuery.parseJSON(datalocal);
        $(elem).jqGrid({
            datastr: datalocal,
            datatype: "jsonstring",
            colNames: ['Mã BV', 'Tên bệnh viện'],
            colModel: [
                {name: 'idbenhvien', index: 'idbenhvien', hidden: false,width:1},
                {name: 'tenbenhvien', index: 'tenbenhvien', hidden: false,width:5},
                
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

              var rowData = $(this).getRowData(id);
              //alert(rowData);
              $("#chuyenden2").val(rowData["tenbenhvien"]);

            },
            ondblClickRow: function(id, rowIndex, columnIndex) {
            },
            loadComplete: function(data) {
            },
        });
        $(elem).jqGrid('filterToolbar', {searchOperators: false, searchOnEnter: false, defaultSearch: "cn"});
        $(elem).jqGrid('bindKeys', {});
    }
	
  function ngaygio(){
    var d = new Date();
     var curr_hour = d.getHours();
      var curr_minute = (d.getMinutes()<10?'0':'') + d.getMinutes(); //phút trả về 1 chữ số nếu bé hơn mười nên phải ghép 0 vào
      window.gio = curr_hour + ":" + curr_minute+ " ";
      window.ngay = $.datepicker.formatDate("dd/mm/y", d);

  }
/*	$("#luu").click(function(){
			$.cookie("in_status", "print_preview"); 
		  dialog_report("Xem trước khi in",90,90,"u78787878975f","resource.php?module=report&view=<?=$modules?>&action=Giaychuyenvien&header=top&type=report&id_form=10&id_benhannoitru="+<?=$_GET["idbenhannoitru"]?>+"&id_luotkham="+<?=$_GET["idluotkham"]?>,'Giaychuyenvien');
		  $(".frame_u78787878975f").css("width","793px");
	})*/
	
/*	$("#luu").click(function(e){	
	
	
	
	});
*/
$("#luu").click(function(){
	
	//$("#luu").button('disable');
	$("#huy").button('disable');
	if($("#NgayVaoVien").val()!=""){
	   ngay_vaovien= convert_to_datejs($("#NgayVaoVien").val())
		ngay_vaovien=$.datepicker.formatDate('yy-mm-dd', new Date(ngay_vaovien)); 
	}
	else{
		ngay_vaovien="";
	}
	if($("#NgayVaoKhoa").val()!=""){
	   ngay_vaokhoa= convert_to_datejs($("#NgayVaoKhoa").val())
		ngay_vaokhoa=$.datepicker.formatDate('yy-mm-dd', new Date(ngay_vaokhoa)); 
	}
	else{
		ngay_vaokhoa="";
	}
	if($("#NgayChuyenKhoa").val()!=""){
	   ngay_chuyenkhoa= convert_to_datejs($("#NgayChuyenKhoa").val())
		ngay_chuyenkhoa=$.datepicker.formatDate('yy-mm-dd', new Date(ngay_chuyenkhoa)); 
	}
	else{
		ngay_chuyenkhoa="";
	}
	 if($("#NgayRaVien").val()!=""){
	 ngay_ravien= convert_to_datejs($("#NgayRaVien").val())
		ngay_ravien=$.datepicker.formatDate('yy-mm-dd', new Date(ngay_ravien)); 
	}
	else{
		ngay_ravien="";
	}
	 if($("#NgayTuVong").val()!=""){
		ngay_tuvong= convert_to_datejs($("#NgayTuVong").val())
		ngay_tuvong=$.datepicker.formatDate('yy-mm-dd', new Date(ngay_tuvong)); 
	}
	else{
		ngay_tuvong="";
	}
	   
		phancach = "";
		i=0;
		dataToSend = '{';
		var flag=0;
		$('.body').find(':input[type=text],input[type=text_checkbox],select,textarea,input[type=hidden],input[type=checkbox]:checked').each(function() {
		if ($(this).attr("lang") == "luu") {
			 if(i>0){
				phancach=","; 
						}
			//var active = $("#"+this.id).is(':enabled');
			//alert(active);
			var id_tam=this.id;
			idtam=id_tam.split('_');
			if(this.value=='' && $("#"+this.id).is(':enabled') && $(this).attr("kiemtra") == "trong"){
				//alert(this.id+" &&"+ $("#"+this.id).is(':enabled'));
				var n_id=this.id.split('_');
				var n_newid=n_id[0]+'_'+n_id[1];
				if(n_id[2]=='hidden'){
					if(flag==0){
						$("#"+n_newid).focus();// ID_BacSyDieuTri_hidden
					}
					$("#"+n_newid).addClass('error_null');
					//alert(n_newid);
				}else{
					if(flag==0){
						$("#"+this.id).focus();
					}
					$("#"+this.id).addClass('error_null');
					//alert(this.id);
				}
				flag=1;
				//return false;
			}else{
				var n_id=this.id.split('_');
				var n_newid=n_id[0]+'_'+n_id[1];
				if(n_id[2]=='hidden'){
					$("#"+n_newid).removeClass('error_null');
					//alert(n_newid);
				}else{
					$("#"+this.id).removeClass('error_null');
					//alert(this.id);
				}
			  dataToSend += phancach + '"'+ this.id + '":"' + this.value +'"' ;
			  i++;
			}//end else
		}//end if lang
			});
			//alert(flag);
			if(flag==0){
				dataToSend += phancach + '"ngay_vaovien":"' + ngay_vaovien+" "+$("#GioVaoVien").val() + '"';
				dataToSend += phancach + '"ngay_vaokhoa":"' + ngay_vaokhoa+" "+$("#GioVaoKhoa").val() + '"';
				dataToSend += phancach + '"ngay_chuyenkhoa":"' + ngay_chuyenkhoa+" "+$("#GioChuyenKhoa").val() + '"';
				dataToSend += phancach + '"ngay_ravien":"' + ngay_ravien+" "+$("#GioRaVien").val() + '"';
				dataToSend += phancach + '"ngay_tuvong":"' + ngay_tuvong+" "+$("#GioTuVong").val() + '"';
				 dataToSend += phancach + '"id_luotkham":"' + _idluotkham + '"';
				dataToSend += phancach + '"id_benhannoitru_khoa":"' + window.id_benhannoitru_khoa + '"';
				dataToSend += phancach + '"id_benhannoitru":"' + window.id_benhannoitru + '"';
				dataToSend += '}';
			   // alert(dataToSend); 
				dataToSend = jQuery.parseJSON(dataToSend);
			  // alertObject(dataToSend); 
			   $.post('resource.php?module=<?=$modules?>&view=<?=$view?>&action=controller&oper=update_benhannoitru&ac='+window.hienthi+'&hienmaloi=3',dataToSend)
				 .done(function( gridData ) {
					   tooltip_message("Đã Lưu");
					   window.id_chuyenkhoa=gridData;
					   if(window._chuyenvien==1){
					   		parent.postMessage('giaychuyenvien|||'+$('#ID_BacSyDieuTri_hidden').val(),'*');	  
					   }
					    
					  })
					  .fail(function() {
					   tooltip_message( "error" );
					  });
			}else{
				$("#luu").button('enable');	
			}
		
	})
function disable(){
	var l=$('#wrapper').find(':input[type=text],input[type=text_checkbox],select,a,textarea,input[type=hidden],input[type=checkbox],input[type=checkbox]:checked').length;
	var i=0;
	$('#wrapper').find(':input[type=text],input[type=text_checkbox],select,a,textarea,input[type=hidden],input[type=checkbox],input[type=checkbox]:checked').each(function() {
		i++;
		
		if($("#"+this.id).attr('type')=="text_checkbox"){
				create_combobox_disable("#"+this.id);
		}else{
			$("#"+this.id).prop('disabled', true);
			}
		if(this.id=="TenNoiGioiThieu"){
			//alert($("#NoiGioiThieu").val());
			if($("#NoiGioiThieu").val()==1){
				$("#TenNoiGioiThieu").prop('disabled',false);
			}
		}
		if((this.id=="ICD_KKB_CapCuu")||(this.id=="CD_KKB_CapCuu1")||(this.id=="ICD_KhoaDieuTri")||(this.id=="CD_KhoaDieuTri")){
			//alert($("#NoiGioiThieu").val());			
			if($("#TrucTiepVao").val()==2){
				create_combobox_enable("#ICD_KKB_CapCuu");
				$("#ICD_KKB_CapCuu_hidden").prop('disabled',false);
				$("#CD_KKB_CapCuu1").prop('disabled',false);
				create_combobox_enable("#ICD_KhoaDieuTri");
				$("#ICD_KhoaDieuTri").prop('disabled',false);
				$("#CD_KhoaDieuTri").prop('disabled',false);
			}
			if(($("#TrucTiepVao").val()==1)||($("#TrucTiepVao").val()==3)){
				create_combobox_enable("#ICD_KhoaDieuTri");
				$("#ICD_KhoaDieuTri").prop('disabled',false);
				$("#CD_KhoaDieuTri").prop('disabled',false);
			}
			
		}
		if(l==i){
			if($("#TaiBien").is(':checked') || $("#BienChung").is(':checked')){
				$("#LyDoTaiBienVaBienChung").prop("disabled",false);
			}
		//alert(l+'=='+i)
		}
		
	});
	
	
}
function enable(action){
	if(action==1){
		create_combobox_enable("#ID_BacSyDieuTri");
		$("#ID_BacSyDieuTri_hidden").prop('disabled',false);	
		/*$("#sogiuong").prop('disabled',false);	
		$("#sobuong").prop('disabled',false);*/	
		$("#NoiGioiThieu").prop('disabled',false);	
		$("#GioVaoVien").prop('disabled',false);	
		$("#NgayVaoVien").prop('disabled',false);	
		$("#TrucTiepVao").prop('disabled',false);	
		//create_combobox_enable("#ID_VaoKhoa");
		//$("#ID_VaoKhoa_hidden").prop('disabled',false);
		//$("#tenkhoavao").prop('disabled',false);	
		$("#GioVaoKhoa").prop('disabled',false);	
		$("#NgayVaoKhoa").prop('disabled',false);
		//$("#TaiBien").prop('disabled',false);	
		//$("#BienChung").prop('disabled',false);	
		if($("#NoiGioiThieu").val()==1){
		$("#TenNoiGioiThieu").prop("disabled",false);
		create_combobox_enable("#ICD_NoiChuyenDen");
		$("#ICD_NoiChuyenDen_hidden").prop('disabled',false);
		$("#CD_NoiChuyenDen").prop('disabled',false);
		
}else{
		//$("#TenNoiGioiThieu").val('');
		$("#TenNoiGioiThieu").prop("disabled",true);
		create_combobox_disable("#ICD_NoiChuyenDen");
		$("#ICD_NoiChuyenDen_hidden").prop('disabled',true);
		$("#CD_NoiChuyenDen").prop('disabled',true);
}
	}else if(action==2){
		/*create_combobox_enable("#ID_BacSyDieuTri");
		$("#sogiuong").prop('disabled',false);	
		$("#sobuong").prop('disabled',false);	
		$("#NoiGioiThieu").prop('disabled',false);	
		$("#GioVaoVien").prop('disabled',false);	
		$("#NgayVaoVien").prop('disabled',false);	
		$("#TrucTiepVao").prop('disabled',false);	
		create_combobox_enable("#ID_VaoKhoa");
		$("#tenkhoavao").prop('disabled',false);	
		$("#GioVaoKhoa").prop('disabled',false);	
		$("#NgayVaoKhoa").prop('disabled',false);	*/
		$("#TaiBien").prop('disabled',false);	
		$("#BienChung").prop('disabled',false);
		
		create_combobox_enable("#ID_KhoaChuyen");
		$("#ID_KhoaChuyen_hidden").prop('disabled',false);
		$("#tenkhoachuyen").prop('disabled',false);	
		$("#GioChuyenKhoa").prop('disabled',false);	
		$("#NgayChuyenKhoa").prop('disabled',false);
		$("#SoNgayDieuTri").prop('disabled',false);
		$("#TenNoiGioiThieu").prop('disabled',true);
		$("#ID_KhoaChuyen").focus();
			
		//$("#LyDoTaiBienVaBienChung").prop('disabled',true);

	}else if(action==3){
		/*create_combobox_enable("#ID_BacSyDieuTri");
		$("#sogiuong").prop('disabled',false);	
		$("#sobuong").prop('disabled',false);	
		$("#NoiGioiThieu").prop('disabled',false);	
		$("#GioVaoVien").prop('disabled',false);	
		$("#NgayVaoVien").prop('disabled',false);	
		$("#TrucTiepVao").prop('disabled',false);	
		create_combobox_enable("#ID_VaoKhoa");
		$("#tenkhoavao").prop('disabled',false);	
		$("#GioVaoKhoa").prop('disabled',false);	
		$("#NgayVaoKhoa").prop('disabled',false);*/
		$("#TaiBien").prop('disabled',false);	
		$("#BienChung").prop('disabled',false);	
		/*
		create_combobox_enable("#ID_KhoaChuyen");
		$("#tenkhoachuyen").prop('disabled',false);	
		$("#GioChuyenKhoa").prop('disabled',false);	
		$("#NgayChuyenKhoa").prop('disabled',false);
		$("#SoNgayDieuTri").prop('disabled',false);*/
		
		$("#ChuyenVien").prop('disabled',false);
		create_combobox_enable("#ChuyenDen");
		$("#ChuyenDen_hidden").prop('disabled',false);
		//$("#chuyenden2").prop('disabled',false);
		$("#GioRaVien").prop('disabled',false);
		$("#NgayRaVien").prop('disabled',false);
		$("#HinhThucRaVien").prop('disabled',false);
		$("#TongSoNgayDieutri").prop('disabled',false);
		create_combobox_enable("#ICD_NoiChuyenDen");
		$("#ICD_NoiChuyenDen_hidden").prop('disabled',false);
		$("#CD_NoiChuyenDen").prop('disabled',false);
		create_combobox_enable("#ICD_KKB_CapCuu");
		$("#ICD_KKB_CapCuu_hidden").prop('disabled',false);
		$("#CD_KKB_CapCuu1").prop('disabled',false);
		create_combobox_enable("#ICD_KhoaDieuTri");
		$("#ICD_KhoaDieuTri_hidden").prop('disabled',false);
		$("#CD_KhoaDieuTri").prop('disabled',false);
		create_combobox_enable("#ICD_RaVienBenhChinh");
		$("#ICD_RaVienBenhChinh_hidden").prop('disabled',false);
		$("#CD_RaVienBenhChinh").prop('disabled',false);
		create_combobox_enable("#ICD_Nguyennhan");
		$("#ICD_Nguyennhan_hidden").prop('disabled',false);
		$("#nguyennhan2").prop('disabled',false);
		create_combobox_enable("#ICD_RaVienBenhKemTheo");
		$("#ICD_RaVienBenhKemTheo_hidden").prop('disabled',false);
		$("#CD_RaVienBenhKemTheo").prop('disabled',false);
		create_combobox_enable("#ICD_TruocPhauThuat");
		$("#ICD_TruocPhauThuat_hidden").prop('disabled',false);
		$("#CD_TruocPhauThuat").prop('disabled',false);
		create_combobox_enable("#ICD_SauPhauThuat");
		$("#ICD_SauPhauThuat_hidden").prop('disabled',false);
		$("#CD_SauPhauThuat").prop('disabled',false);
		$("#TongSoNgayDieutriDoPT").prop('disabled',false);
		$("#TongSoLanPhauThuat").prop('disabled',false);
		$("#KetQuaDieuTri").prop('disabled',false);
		
		$("#TaiBien").prop('disabled',false);	
		$("#BienChung").prop('disabled',false);	
		$("#TenNoiGioiThieu").prop('disabled',true);	
		if($("#KetQuaDieuTri").val()==5){
			$("#GiaiPhauBenh").prop("disabled",false);
			$("#GioTuVong").prop("disabled",false);
			$("#NgayTuVong").prop("disabled",false);
			$("#TinhHinhTuVong").prop("disabled",false);
			$("#ThoiGianTuVong").prop("disabled",false);
			create_combobox_enable("#NguyenNhanChinhTuVong");
			$("#NguyenNhanChinhTuVong_hidden").prop('disabled',false);
			$("#NguyenNhanChinhTuVong2").prop("disabled",false);
			create_combobox_enable("#ICD_GiaiPhauTuThi");
			$("#ICD_GiaiPhauTuThi_hidden").prop('disabled',false);
			$("#CD_GiaiPhauTuThi").prop("disabled",false);
			$("#KhamNghiemTuThi").prop("disabled",false);
		}else{
			$("#GiaiPhauBenh").prop("disabled",true);
			$("#GioTuVong").prop("disabled",true);
			$("#NgayTuVong").prop("disabled",true);
			$("#TinhHinhTuVong").prop("disabled",true);
			$("#ThoiGianTuVong").prop("disabled",true);
			create_combobox_disable("#NguyenNhanChinhTuVong");
			$("#NguyenNhanChinhTuVong_hidden").prop('disabled',false);
			$("#NguyenNhanChinhTuVong2").prop("disabled",true);
			create_combobox_disable("#ICD_GiaiPhauTuThi");
			$("#ICD_GiaiPhauTuThi_hidden").prop('disabled',false);
			$("#CD_GiaiPhauTuThi").prop("disabled",true);
			$("#KhamNghiemTuThi").prop("disabled",true);
			}
		$("#ChuyenVien").focus();
	}	
	else if(action==4){
		/*create_combobox_enable("#ID_BacSyDieuTri");
		$("#sogiuong").prop('disabled',false);	
		$("#sobuong").prop('disabled',false);	
		$("#NoiGioiThieu").prop('disabled',false);	
		$("#GioVaoVien").prop('disabled',false);	
		$("#NgayVaoVien").prop('disabled',false);	
		$("#TrucTiepVao").prop('disabled',false);	
		create_combobox_enable("#ID_VaoKhoa");
		$("#tenkhoavao").prop('disabled',false);	
		$("#GioVaoKhoa").prop('disabled',false);	
		$("#NgayVaoKhoa").prop('disabled',false);*/
		$("#TaiBien").prop('disabled',false);	
		$("#BienChung").prop('disabled',false);	
		/*
		create_combobox_enable("#ID_KhoaChuyen");
		$("#tenkhoachuyen").prop('disabled',false);	
		$("#GioChuyenKhoa").prop('disabled',false);	
		$("#NgayChuyenKhoa").prop('disabled',false);
		$("#SoNgayDieuTri").prop('disabled',false);*/
		

		$("#GioRaVien").prop('disabled',false);
		$("#NgayRaVien").prop('disabled',false);
		$("#HinhThucRaVien").prop('disabled',false);
		$("#TongSoNgayDieutri").prop('disabled',false);
		create_combobox_enable("#ICD_NoiChuyenDen");
		$("#ICD_NoiChuyenDen_hidden").prop('disabled',false);
		$("#CD_NoiChuyenDen").prop('disabled',false);
		create_combobox_enable("#ICD_KKB_CapCuu");
		$("#ICD_KKB_CapCuu_hidden").prop('disabled',false);
		$("#CD_KKB_CapCuu1").prop('disabled',false);
		create_combobox_enable("#ICD_KhoaDieuTri");
		$("#ICD_KhoaDieuTri_hidden").prop('disabled',false);
		$("#CD_KhoaDieuTri").prop('disabled',false);
		create_combobox_enable("#ICD_RaVienBenhChinh");
		$("#ICD_RaVienBenhChinh_hidden").prop('disabled',false);
		$("#CD_RaVienBenhChinh").prop('disabled',false);
		create_combobox_enable("#ICD_Nguyennhan");
		$("#ICD_Nguyennhan_hidden").prop('disabled',false);
		$("#nguyennhan2").prop('disabled',false);
		create_combobox_enable("#ICD_RaVienBenhKemTheo");
		$("#ICD_RaVienBenhKemTheo_hidden").prop('disabled',false);
		$("#CD_RaVienBenhKemTheo").prop('disabled',false);
		create_combobox_enable("#ICD_TruocPhauThuat");
		$("#ICD_TruocPhauThuat_hidden").prop('disabled',false);
		$("#CD_TruocPhauThuat").prop('disabled',false);
		create_combobox_enable("#ICD_SauPhauThuat");
		$("#ICD_SauPhauThuat_hidden").prop('disabled',false);
		$("#CD_SauPhauThuat").prop('disabled',false);
		$("#TongSoNgayDieutriDoPT").prop('disabled',false);
		$("#TongSoLanPhauThuat").prop('disabled',false);
		$("#KetQuaDieuTri").prop('disabled',false);
		$("#TaiBien").prop('disabled',false);	
		$("#BienChung").prop('disabled',false);	
		$("#TenNoiGioiThieu").prop('disabled',true);	
		if($("#KetQuaDieuTri").val()==5){
			$("#GiaiPhauBenh").prop("disabled",false);
			$("#GioTuVong").prop("disabled",false);
			$("#NgayTuVong").prop("disabled",false);
			$("#TinhHinhTuVong").prop("disabled",false);
			$("#ThoiGianTuVong").prop("disabled",false);
			create_combobox_enable("#NguyenNhanChinhTuVong");
			$("#NguyenNhanChinhTuVong_hidden").prop('disabled',false);
			$("#NguyenNhanChinhTuVong2").prop("disabled",false);
			create_combobox_enable("#ICD_GiaiPhauTuThi");
			$("#ICD_GiaiPhauTuThi_hidden").prop('disabled',false);
			$("#CD_GiaiPhauTuThi").prop("disabled",false);
			$("#KhamNghiemTuThi").prop("disabled",false);
		}else{
			$("#GiaiPhauBenh").prop("disabled",true);
			$("#GioTuVong").prop("disabled",true);
			$("#NgayTuVong").prop("disabled",true);
			$("#TinhHinhTuVong").prop("disabled",true);
			$("#ThoiGianTuVong").prop("disabled",true);
			create_combobox_disable("#NguyenNhanChinhTuVong");
			$("#NguyenNhanChinhTuVong_hidden").prop('disabled',false);
			$("#NguyenNhanChinhTuVong2").prop("disabled",true);
			create_combobox_disable("#ICD_GiaiPhauTuThi");
			$("#ICD_GiaiPhauTuThi_hidden").prop('disabled',false);
			$("#CD_GiaiPhauTuThi").prop("disabled",true);
			$("#KhamNghiemTuThi").prop("disabled",true);
			}
		$("#GioRaVien").focus();
	}
}
function DateDiff(date1, date2) {
    var datediff =date2.getTime() - date1.getTime(); //store the getTime diff - or +
    return (datediff / (24*60*60*1000)); //Convert values to -/+ days and return value    
}
function isdisable(tam,tabindex,e){
		  if(tam=='next'){
			  tabindex++;
		  }else{
			  tabindex--;
		  }
		  if($('[tabindex=' +tabindex + ']').prop('disabled')){		   
			  isdisable(tam,tabindex,e)
		  }else{
			//alert(window.tabindex_null);
			if($('[tabindex=' +  window.tabindex_null + ']').val()!=''){
				$('[tabindex=' +  window.tabindex_null + ']').removeClass('error_null'); 
				$('[tabindex=' +  tabindex + ']').focus();
				window.tabindex_null=tabindex;
			}else{
				$('[tabindex=' +  window.tabindex_null + ']').addClass('error_null');
			}
			return false;
		  }
  }
function remove_class(){
	$('.body').find(':input[type=text],input[type=text_checkbox],select,textarea,input[type=hidden],input[type=checkbox]:checked').each(function() {
			if ($(this).attr("lang") == "luu") {
				$("#"+this.id).removeClass('error_null');
			}
	})
}
function load_huy(){
	$.post('resource.php?module=<?=$modules?>&view=<?=$view?>&action=data_huy&id_luotkham='+window._idluotkham).done(function(data) {
	 	var rs=jQuery.parseJSON(data);
		$.each(rs[0], function( k, v ) {
			
		if($("#"+k).attr('type')=='text_checkbox'){
			setval_new('#'+k,v); 
		}else if($("#"+k).attr('type')=='checkbox'){
			if(v==1){
				$("#"+k).prop('checked', true);
			}else{
				$("#"+k).prop('checked', false);	
			}
		}else{
			if(k=='ID_BenhAnNoiTru_Khoa'){
				window.id_benhannoitru_khoa=v;
				}else if(k=='ID_BenhAnNoiTru'){
				window.id_benhannoitru=v;
				}else if(k=='ID_LoaiBenhAnNoiTru'){
					window.idloaibenhan=v;
				}else{
					$("#"+k).val(v);
					
				}
		}
		});
	if($("#TaiBien").is(':checked') || $("#BienChung").is(':checked')){
		$("#LyDoTaiBienVaBienChung").prop("disabled",false);
	}
	if($("#GioVaoVien").val()==''){
		$("#GioVaoVien").val('<?php echo date("H:i") ?>');
	}
	if($("#NgayVaoVien").val()==''){
		$("#NgayVaoVien").val('<?php echo date($_SESSION["config_system"]["ngaythang"]) ?>');
	}
	disable();
	$("#dangtaidulieu" ).hide();
	$("#wrapper").removeClass('bongmo');
	//alert(window.idloaibenhan);
	if(window.idloaibenhan!=null){
		$("#batdau").button('disable');
		enable(window.hienthi);	
	}else{
		$("#chuyen_khoa").button('disable');
		$("#chuyen_vien").button('disable');
		$("#ra_vien").button('disable');
		$("#luu").button('disable');
		$("#xemin").button('disable');
	}
	
	
});
}
</script>