<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Phiếu xuất kho</title>
<style>
	body{
		width:750px;
		margin:auto;
		padding-left:3px;
		overflow:none;		
		font-family:"Times New Roman", Times, serif;
		font-size:14px;
		}
	label{
		letter-spacing:0px;
		font-weight:normal;
		}
	input{
		letter-spacing:0px;
		border:none;
		font-size:14px;
		font-family:"Times New Roman", Times, serif;
	}
	.header{
		margin:0auto;
		padding-top:3px;
		width:750px;
		height:120px;
		}
	

	 
	#center{
		margin-left:277px;
		 
		font-weight:600;
		margin-top:0px;
		
	}
	
	
	table{
		margin-top: 5px;
		border-top:1px solid #000;
		border-right:1px solid #000;
		
	}
	
	
	table td{
		border-left:1px solid #000;
		border-bottom:1px solid #000;
		padding:2px 2px;
		 
	}
	table th{
		border-left:1px solid #000;
		border-bottom:1px solid #000;
		padding:2px 2px;
		}
	.kovien{
		border:none;
		width:748px;
		}	
	.aaa{
		word-wrap: break-word ;
		display: block; width: 640px; 
		}
	.inhoa{
		font-weight:bold;
		font-size:14px;
		}
</style>
</head>

<body>	 
    <div class="header">
    	  <div><label class="inhoa"><?php echo $_SESSION["com"]["TenBenhVien"]?></label></div>
          <div><label>Địa chỉ: <?php echo $_SESSION["com"]["DiaChi"]?></label></div>
          <div><label>SĐT: <?php echo $_SESSION["com"]["SoDT"]?></label></div>
          <div id="center">
          	<div style="margin-left:21px; font-size:20px">PHIẾU XUẤT KHO</div>
            <div style="margin-left:29px;"><label style="font-style:italic">Ngày </label><label style="font-style:italic">xx</label><label style="font-style:italic"> tháng </label><label style="font-style:italic">xx</label><label style="font-style:italic"> năm </label><label style="font-style:italic">xxxx</label></div>
            <div style="font-size:13px; margin-left: 65px;">
            <label class="inhoa">Mã PXK: </label><label>xxxxx</label>						
            </div>
          </div>
     </div>
  	 <div style="display:inline-block;">
        	<div style="float:left">
            	<div><div style="width:100px;display:inline-block"><label >Người giao dịch</label></div>: 
                	<input type="text" id="ngiaodich" style="width:637px; border:none; border-bottom:1px dotted #000" readonly="readonly"  value="abchzk"/>
                </div>
                <div>
                	<div style="width:100px;display:inline-block"><label style="width:100px">Nhà cung cấp </label></div>: 
                    <input type="text" id="ncc" style="width:637px; border:none; border-bottom:1px dotted #000" readonly="readonly"  value="xxxxxx"/>
                </div>
                <div>
                	<div style="width:100px;display:inline-block"><label style="width:100px">Địa chỉ</label></div>: 
                    <input type="text" style="width:637px; border:none; border-bottom:1px dotted #000" readonly="readonly"  value="xxxxxx"/>
                </div>
                <div>
                	<div style="width:100px;display:inline-block"><label style="width:100px">Xuất tại kho</label></div>: 
                    <input type="text" style="width:637px; border:none; border-bottom:1px dotted #000" readonly="readonly"  value="xxxxxx"/>
                </div>
                <div>
                	<div style="width:100px;display:inline-block"><label style="width:100px">Loại xuất</label></div>: <input type="text" style="width:637px; border:none; border-bottom:1px dotted #000" readonly="readonly"  value="xxxxxx"/>
                </div>
                <div>
                	<div style="width:100px;display:inline-block"><label style="width:100px">Ngày lập phiếu</label></div>: <label style="font-style:italic"><input type="text" style="width:637px; border:none; border-bottom:1px dotted #000; font-style:italic" readonly="readonly"  value="xxxxxx"/></label>
                </div>
                <div>
                	<div style="width:100px;display:inline-block"><label style="width:100px">Ghi chú</label></div>: <input type="text" style="width:637px; border:none; border-bottom:1px dotted #000" readonly="readonly"  value="xxxxxx"/>
                </div>
            </div>
        
        </div>
	 <table  style="width:750px" border="0" cellpadding="0" cellspacing="0">
     	<tr>
            <th align="center" style="width:7px"><label class="inhoa">STT</label></th>
            <th align="center" style="width:333px"><label class="inhoa">Tên thuốc - VTYT</label></th>
            <th align="center" style="width:50px"><label class="inhoa">ĐVT</label></th>
            <th align="center" style="width:90px"><label class="inhoa">Lô nội bộ</label></th>
            <th align="center" style="width:90px"><label class="inhoa">Lô NSX</label></th>
            <th align="center" style="width:50px"><label class="inhoa">S.Lượng</label></th>
            <th align="center" style="width:70px"><label class="inhoa">Đơn giá</label></th>
            <th align="center" style="width:90px"><label class="inhoa">Thành tiền</label></th>
        </tr>
        <tr>
        	<td align="center">x</td>
            <td align="left">xxxxx xxxx</td>
            <td align="left">xcc</td>
            <td align="left">xxxxx2123</td>
            <td align="left">xxxxx2123</td>
            <td align="right" >43234</td>
            <td align="right" >2342</td>
            <td align="right" >21324234</td>
       	</tr>
        <?php
		
			/*$stt=1;
			$total=0;
			for ($ii=0;$ii<=count($_POST["Id"])-1;$ii++){			 								  
					echo "<tr>";
					echo "<td align=" . '"'. "center".'"'.">".$stt."</td>";
					echo "<td><label>".$_POST["Id"][$ii]["TenBietDuoc"]."</label></td>";
					echo "<td align=" . '"'. "left".'"'."><label>".$_POST["Id"][$ii]["TenDonViTinh"]."</label></td>";
					echo "<td align=" . '"'. "left".'"'."><label>".$_POST["Id"][$ii]["SoLoHeThong"]."</label></td>";
					echo "<td align=" . '"'. "left".'"'."><label>".$_POST["Id"][$ii]["SoLoNhaSanXuat"]."</label></td>";
					echo "<td align=" . '"'. "right".'"'."><label>".$_POST["Id"][$ii]["SoLuong"]."</label></td>";
					$parts = explode('.', $_POST["Id"][$ii]["DonGia"]);
					echo "<td align=" . '"'. "right".'"'."><label>".$parts[0]."</label></td>";
					echo "<td align=" . '"'. "right".'"'."><label>".$_POST["Id"][$ii]["ThanhTien"]."</label></td>";
				 echo "</tr>";
				$stt=$stt+1; 	
				$total=$total+$_POST["Id"][$ii]["ThanhTien"];	
		}
			
			
			
			/* foreach ($tam2 as $row)
			 {
				 echo "<tr>";
					echo "<td>".$stt."</td>";
					echo "<td>".$row["TenBietDuoc"]."</td>";
					echo "<td>".$row["TenDonViTinh"]."</td>";
					echo "<td>".$row["SoLoHeThong"]."</td>";
					echo "<td>".$row["SoLoNhaSanXuat"]."</td>";
					echo "<td>".$row["SoLuong"]."</td>";
					echo "<td>".$row["DonGia"]."</td>";
					echo "<td>".$row["ThanhTien"]."</td>";
					echo "<td>"; echo($row["NgaySanXuat"]->format('d-m-Y')); echo"</td>";
					echo "<td>"; echo($row["NgayHetHan"]->format('d-m-Y')); echo "</td>";
				 echo "</tr>";
				$stt=$stt+1; 
			}*/
		 ?>
        <tr bgcolor="#CCCCCC">
            <td colspan="7" align="center"><label class="inhoa">Tổng cộng </label></td>
            <td align="right"><label class="inhoa">xxxxx</label></td>
        </tr>
     </table>	
     <div><label>Tổng số tiền bằng chữ: </label> <input type="text" style="width:590px; font-style:italic; font-family:'Times New Roman', Times, serif;
     font-size:14px" name="" id="tongtien" value="11211212" /></div>
     <div><div style="margin-left:570px;font-style:italic"><label>Ngày </label><label><?php echo date("d");?></label><label> tháng </label><label><?php echo date("m");?></label><label> năm </label><label><?php echo date("Y");?></label></div></div>
     <div>
     	 <div style="float: left;width:145px">
        	<div style="margin-left:20px"><label class="inhoa">Kế toán trưởng</label></div>
            <div style="height:70px"></div>
            <div style="margin-left:20px"><label></label></div>
        </div>
        <div style="float: left;width:145px">
        	<div  style="margin-left:20px"><label class="inhoa">Người lập phiếu</label></div>
            <div style="height:70px"></div>
            <div id="nglapphieu" style="margin-left:15px"><label></label></div>
        </div>
        <div style="float: left;width:145px">
        	<div style="margin-left:30px"><label class="inhoa">Người giao hàng</label></div>
            <div style="height:70px"></div>
            <div id="nglapphieu" style="margin-left:20px"><label></label></div>
        </div>
        <div style="float: left;width:145px;">
        	<div style="margin-left:53px"><label class="inhoa">Thủ kho</label></div>
    		<div style="height:70px"></div>
            <div id="nglapphieu" style="margin-left:30px"><label></label></div>
        </div>
        <div style="width:145px; float:left">
			<div style="margin-left:35px;"><label class="inhoa">Giám Đốc</label></div>
            <div style="height:70px"></div>
            <div id="nglapphieu" style="margin-left:30px"><label>Trần Hùng</label></div>
 		</div>
     </div>
</body>
</html>
<script type="text/javascript">

$(document).ready(function() { 
 create_report(close_report,<?php echo "'".$_GET["type"]."'" ?>)
});
function create_report(callback,_type){	
 
	$("#tongtien").val(toWords($("#tongtien").val().toString())+"đồng chẵn");
	/*window.NCC = $.ajax({url: 'resource.php?module=web_services&function=get_auto_edit_option_byid&action=index&term=ID_NCC=<php echo $_POST["ID_NCC"]?>&status=3&tables=DM_NhaCungCap&id=TenNCC&name=NguoiLienHe', async: false, success: function(data, result) {if (!result) alert('Không load được danh mục phòng ban');}}).responseText;	
	$.post( "resource.php?module=web_services&function=get_hovatenchucdanh&status=2&action=index&id=<php echo $_POST["ID_NhanVien"]?>", function( data ) {
	$("#nglapphieu").text(data);
	});
	var n = window.NCC.split(":");
		$("#ncc").text(n[0]);
		$("#ngiaodich").text(n[1]);
		if(_type=='print'){
			window.print();
			callback();
		}*/
}
function close_report(){	 
	self.close()   
}
</script>
