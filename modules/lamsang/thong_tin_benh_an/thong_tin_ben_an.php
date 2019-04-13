<style>
	tr{
		height:24px	
	}
	
	input{
   text-align:center;
}
</style>
<body>
	<div id='wrapper' style="width:95%; margin:0 auto;margin-top:6px; font:Tahoma, Geneva, sans-serif;font-size:13px;overflow:auto;">
 		<fieldset>
            <legend>Hành chính và lý do vào viện </legend>
           	<table border="0" cellpadding="0" cellspacing="0" width="100%">
            	<tr>
                	<td  style="width:10%;padding-right:5px" align="right">
                    	Đối tượng 
                    </td>
                    <td  style="width:20%">
                    	<input type="text" style="width:10%"/>
                        <input type="text" style="width:80%"/>
                    </td>
                    <td  style="width:10%">
                    </td>
                    <td colspan="3" style="width:60%">
                    	<input type="checkbox" >Giấy chuyển viện
                    </td>
                </tr>
               
               <tr>
                	<td  style="padding-right:5px" align="right">
                    	Số thẻ BHYT
                    </td>
                    <td>
                    	<input type="text" style="width:55%"/>
                        <input type="text" style="width:35%"/>
                    </td>
                    <td  style="padding-right:5px" align="right">
                    	Ngày sinh
                    </td>
                    <td  style="width:25%">
                    	<input type="text" style="width:7%"/>
                        <input type="text" style="width:7%"/>
                        <input type="text" style="width:15%"/>
                        <input type="text" style="width:7%"/>
                        <input type="text" style="width:15%"/>
                        <span style="width:15%"><input type="checkbox" ><label style="font-weight:bold">Nam</label></span>
                    </td>
                     <td  style="padding-right:5px;width:10%" align="right" >
                    	Nghề nghiệp
                    </td>
                     <td   style="width:25%">
                    	<input type="text" style="width:10%"/>
                        <input type="text" style="width:80%"/>
                    </td>
                </tr>
                
              	<tr>
                	<td  style="padding-right:5px" align="right">
                    	Mã BN
                    </td>
                    <td>
                    	<input type="text" style="width:10%"/>
                        <input type="text" style="width:80%"/>
                    </td>
                    <td  style="padding-right:5px" align="right">
                    	Quốc tịch
                    </td>
                    <td  style="width:25%">
                    	<input type="text" style="width:10%"/>
                        <input type="text" style="width:80%"/>
                    </td>
                     <td  style="padding-right:5px;width:10%" align="right" >
                    	Địa chỉ
                    </td>
                     <td   style="width:25%">
                    	
                        <input type="text" style="width:94%"/>
                    </td>
                </tr>
                
                <tr>
                	<td  style="padding-right:5px" align="right">
                    	Dân tộc
                    </td>
                    <td>
                    	<input type="text" style="width:10%"/>
                        <input type="text" style="width:80%"/>
                    </td>
                    <td  style="padding-right:5px" align="right">
                    	Chỗ làm
                    </td>
                    <td  style="width:25%" colspan="2">
                    	
                        <input type="text" style="width:167%"/>
                    </td>
                    
                </tr>
                
                 <tr>
                	<td  style="padding-right:5px" align="right">
                    	Xã phường
                    </td>
                    <td>
                    	<input type="text" style="width:30%"/>
                        <input type="text" style="width:60%"/>
                    </td>
                    <td  style="padding-right:5px" align="right">
                    	Địa chỉ báo tin
                    </td>
                    <td  style="width:25%" colspan="2">
                    	
                        <input type="text" style="width:167%"/>
                    </td>
                    
                </tr>
                
                 <tr>
                	<td  style="padding-right:5px" align="right">
                    	Số vào viện
                    </td>
                    <td colspan="6">
                    	<input type="text" style="width:120px"/>
                        <label style="margin-left:6px">Số bệnh án</label>
                       
                        <input type="text" style="width:120px"/>
                         <label style="margin-left:6px">Số lưu trữ</label>
                        <input type="text" style="width:120px"/>
                         <label style="margin-left:6px">ID bệnh án</label>
                        <input type="text" style="width:120px"/>
                        <label style="margin-left:6px">Loại BA</label>
                        <input type="text" style="width:20px"/>
                        <input type="text" style="width:241px" value="0-Bệnh án, 1-Lưu bệnh nhân" disabled />
                    </td>                                  
                </tr>
                
            </table>
          
  		</fieldset>
        
        <fieldset>
            <legend>Quản lý người bệnh </legend>
           <table border="0" cellpadding="0" cellspacing="0" width="100%">
           	<tr>
            	<td align="right" style="width:10%; padding-right:10px">
                BS điều trị
                </td>
                <td style="width:23%">
                	<input type="text" style="width:10%"/>
                    <input type="text" style="width:80%"/>
                </td>
                <td align="right" style="width:10%; padding-right:10px">
                Số giường
                </td>
                <td style="width:23%">
                	<input type="text" style="width:30%"/>
                    <div style="width:29%;text-align:right;display:inline-block;border:2px solid white">Số buồng</div>
                    <input type="text" style="width:30%"/>
                </td>
                <td align="right" style="width:10%; padding-right:10px">
                	Nơi giới thiệu
                </td>
                <td style="width:23%">
                	<input type="text" style="width:10%"/>
                    <input type="text" style="width:80%" disabled value="1-Cơ quan y tế, 2-Tự đến, 3-Khác"/>
                </td>
            </tr>
            
            <tr>
            	<td align="right" style="width:10%; padding-right:10px">
                	vào viện lúc
                </td>
                <td style="width:23%">
                	<input type="text" id="time_vaovien" style="width:40%"/>
                    <input type="text" id="day_vaovien" style="width:50%"/>
                </td>
                <td align="right" style="width:10%; padding-right:10px">
                Trực tiếp vào
                </td>
                <td style="width:23%">
                	<input type="text" style="width:10%"/>
                    <input type="text" style="width:82%" disabled value="1-Cấp cứu, 2- KKB, 3-Khoa điều trị"/>
                </td>
                <td align="right" style="width:10%; padding-right:10px">
                	Tên người G/thiệu
                </td>
                <td style="width:23%">
                	
                    <input type="text" style="width:94%"/>
                </td>
            </tr>
            
              <tr>
            	<td align="right" style="width:10%; padding-right:10px">
                	Vào khoa
                </td>
                <td style="width:23%">
                	<input type="text" style="width:10%"/>
                    <input type="text" style="width:80%"/>
                </td>
                <td align="right" style="width:10%; padding-right:10px">
                lúc
                </td>
                <td style="width:23%">
                	<input id="time_vaokhoa" type="text" style="width:20%"/> ngày 
                    <input id="day_vaokhoa" type="text" style="width:30%"/>
                </td>
                <td align="right" style="width:10%; padding-right:10px">
                	Chuyển viện
                </td>
                <td style="width:23%">
                	<input type="text" style="width:10%"/>
                    <input type="text" style="width:80%" disabled value="1-Tuyến trên, 2-Tuyến dưới, 3-CK"/>
                </td>
            </tr>
            
              <tr>
            	<td align="right" style="width:10%; padding-right:10px">
                	Chuyển khoa
                </td>
                <td style="width:23%">
                	<input type="text" style="width:10%"/>
                    <input type="text" style="width:80%"/>
                </td>
                <td align="right" style="width:10%; padding-right:10px">
                lúc
                </td>
                <td style="width:23%">
                	<input type="text" id="time_chuyenkhoa" style="width:20%"/> ngày 
                    <input type="text" id="day_chuyenkhoa" style="width:30%"/> số NĐT
                    <input type="text" style="width:9%"/>
                </td>
                <td align="right" style="width:10%; padding-right:10px">
                	Chuyển đến
                </td>
                <td style="width:23%">
                	<input type="text" style="width:40%"/>
                    <input type="text" style="width:50%"/>
                </td>
            </tr>
            
            <tr>
            	<td align="right" style="width:10%; padding-right:10px">
                	Ra viện lúc
                </td>
                <td style="width:23%">
                	<input type="text" style="width:40%"/>
                    <input type="text" style="width:50%"/>
                </td>
                <td align="right" style="width:10%; padding-right:10px">
                Tình trạng
                </td>
                <td style="width:23%">
                	<input type="text" style="width:6%"/> 
                    1-Ra viện, 2-Xin về, 3-Bỏ về, 4-Đưa về
                    
                </td>
                <td align="right" style="width:10%; padding-right:10px">
                	
                </td>
                <td style="width:23%">
                	<input type="text" style="width:80%" value="Tổng số ngày điều trị" disabled/>
                    <input type="text" style="width:10%"/>
                </td>
            </tr>
           </table>
            
        </fieldset>
        
        <fieldset>
        	<legend>Chẩn đoán</legend>
            <table border="0" cellpadding="0" cellspacing="0" width="100%">
            	<tr>
                	<td align="right" style="width:10%; padding-right:10px">
                    	Nơi chuyển đến
                    </td>
                    <td width="45%">
                    	 <input type="text" style="width:20%"/>
                         <input type="text" style="width:70%"/>
                     <td width="45%" rowspan="6">
                     	<fieldset>
                        	<legend>Ra viện</legend>
                            <table cellpadding="0" cellspacing="0" border="0" width="100%">
                            	 <tr>
                                    <td align="right" style="width:22%; padding-right:10px">
                                        Bệnh chính
                                    </td>
                                    <td style="width:80%;">
                                     	 <input type="text" style="width:20%"/>
                        				 <input type="text" style="width:70%"/>
                                    </td>
                                 </tr>
                                 
                                 <tr>
                                    <td align="right" style="width:15%; padding-right:10px">
                                        Nguyên nhân
                                    </td>
                                    <td style="width:80%;">
                                     	 <input type="text" style="width:20%"/>
                        				 <input type="text" style="width:70%" />
                                    </td>
                                 </tr>
                                 
                                 <tr>
                                    <td align="right" style="width:15%; padding-right:10px">
                                        Bệnh kèm theo
                                    </td>
                                    <td style="width:80%;">
                                     	 <input type="text" style="width:20%"/>
                        				 <input type="text" style="width:70%"/>
                                    </td>
                                 </tr>
                                 
                                 <tr>
                                    <td align="right" style="width:15%; padding-right:10px">
                                        Trước phẫu thuật
                                    </td>
                                    <td style="width:80%;">
                                     	 <input type="text" style="width:20%"/>
                        				 <input type="text" style="width:70%"/>
                                    </td>
                                 </tr>
                                 
                                 <tr>
                                    <td align="right" style="width:15%; padding-right:10px">
                                        Sau phẫu thuật
                                    </td>
                                    <td style="width:80%;">
                                     	 <input type="text" style="width:20%"/>
                        				 <input type="text" style="width:70%"/>
                                    </td>
                                 </tr>
                            
                            </table>
                        </fieldset>
                    
                    </td>
                </tr>
                
               <tr>
                	<td align="right" style="width:10%; padding-right:10px">
                    	Khoa khám bệnh
                    </td>
                    <td width="45%">
                    	 <input type="text" style="width:20%"/>
                         <input type="text" style="width:70%"/>
                    
                </tr>
                
              <tr>
                	<td align="right" style="width:10%; padding-right:10px">
                    	Khi vào Khoa Đ/trị
                    </td>
                    <td width="45%">
                    	 <input type="text" style="width:20%"/>
                         <input type="text" style="width:70%"/>
                    
                </tr>
               
                
                
                   <tr>
                        <td align="right" style="width:10%; padding-right:10px">
                            
                        </td>
                        <td width="45%">
                             <input type="checkbox" > Tai biến 
                         
                             <input type="checkbox" > Biến chứng 
               	 </tr>
                 
                  <tr>
                	<td align="right" style="width:10%; padding-right:10px">
                    	Nguyên nhân
                    </td>
                    <td width="45%">
                    	 <input type="text" style="width:20%"/>
                         <input type="text" style="width:70%" disabled value="1-Do phẫu thuật, 2-Do gây mê, 3-Do nhiễm khuẩn, 4-Khác"/>
                    
                </tr>
                
                 <tr>
                        <td	align='center' colspan="2">
                            Tổng số ngày điều trị phẫu thuật <input type="text" style="width:4%"/>
                            
                             Tổng số lần phẫu thuật
                         <input type="text" style="width:4%"/>
                        </td>
                       
               	 </tr>
                
            </table>
        </fieldset>
        
        <fieldset>
        	<legend>Tình trạng ra viện</legend>
            <table border="0" cellpadding="0" cellspacing="0" width="100%">
            	
                
              <tr>
                	<td align="right" style="width:13%; padding-right:10px">
                    	Kết quả điều trị
                    </td>
                    <td width="45%">
                    	 <input type="text" style="width:20%"/>
                         <input type="text" style="width:70%" disabled value="1-Khỏi, 2-đỡ,giảm; 3-không thay đổi, 4-nặng hơn, 5-tử vong"/>
                   </td>
                     <td align="right" style="width:14%; padding-right:10px">
                    	Thời gian
                    </td>
                     <td width="45%">
                    	 <input type="text" style="width:20%"/>
                         <input type="text" style="width:70%" disabled value="1-Trong 24h, 2-Trong 48h, 3-Trong 72h"/>
                   </td>
               </tr>
               
               <tr>
                	<td align="right" style="width:10%; padding-right:10px">
                    	Giải phẫu bệnh
                    </td>
                    <td width="45%">
                    	 <input type="text" style="width:20%"/>
                         <input type="text" style="width:70%" disabled value="1-Lành tính, 2-Nghi ngờ, 3-Ác tính"/>
                   </td>
                     <td align="right" style="width:10%; padding-right:10px">
                    	Nguyên nhân tử vong
                    </td>
                     <td width="45%">
                    	 <input type="text" style="width:20%"/>
                         <input type="text" style="width:70%" />
                   </td>
               </tr>
                
              <tr>
                	<td align="right" style="width:10%; padding-right:10px">
                    	Bệnh nhân tử vong lúc
                    </td>
                    <td width="45%">
                    	 <input type="text" id="time_tuvong" style="width:20%"/>
                         <input type="text" id="day_tuvong" style="width:30%"/>
                     </td>
                     <td></td>
                     <td>	 <input type="checkbox"/> Khám nghiệm tử thi</td>
                    
                </tr>
               
                <tr>
                       <td align="right" style="width:10%; padding-right:10px">
                            Nguyên nhân
                        </td>
                        <td width="45%">
                             <input type="text" style="width:20%"/>
                         <input type="text" style="width:70%" disabled value="1-Do bệnh, 2-Do tai biến điều trị, 3-Khác"/>
                         </td>
                          <td align="right" style="padding-right:10px">
                         	CĐGP tử thi
                         <td>
                         	 <input type="text" style="width:20%"/>
                         	<input type="text" style="width:70%"/>
                         </td>
               	 </tr>
                
                
            </table>
        </fieldset>
    </div>
</body>

<script type="text/javascript">
	jQuery(document).ready(function() {
		$("#day_chuyenkhoa,#day_tuvong,#day_vaokhoa,#day_vaovien").datepicker({
            showWeek: true,
            defaultDate: "+1w",
            changeMonth: true,
            changeYear: true,
            numberOfMonths: 1,
            dateFormat:  $.cookie("ngayJqueryUi"),
          
        });
		$.timeEntry.setDefaults({show24Hours: true});
		$('#time_chuyenkhoa, #time_tuvong,#time_vaokhoa,#time_vaovien').timeEntry({timeSteps: [1, 1, 1]});	
		$.dateEntry.setDefaults({spinnerImage: ''});
		$("#day_chuyenkhoa, #day_tuvong,#day_vaokhoa,#day_vaovien").dateEntry({dateFormat:$.cookie("ngayDateEntry")});
		$("#time_chuyenkhoa, #time_tuvong,#time_vaokhoa,#time_vaovien").timeEntry();
		
		
	})// dump ready
</script>