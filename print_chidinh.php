<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Strict//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Insert title here</title>
<script type="text/javascript" src="js/jquery-1.9.1.js"></script>
<style type="text/css">
 .message{
	 font-family:Arial, Helvetica, sans-serif;
	 font-size:16px;
	 width:80%; 
	/* border:1px solid #000;	 */
}
</style> 
</head>
<body>
 <div class="append"></div>
 <div class="message">
 	"MÔ TẢ
        * Siêu âm tim:  Situs solitus; Levocardia; Left apex orientation.
        - Các quai mạch lớn bình thường.
        - Tim không to, kích thước các buồng tim bình thường.
        - Vách liên thất và thành sau thất trái nguyên vẹn, không dầy.
        - Các van tim bình thường, không có dòng phụt ngược.
        - Chức năng tâm thu và tâm trương thất trái bình thường.
        - Dịch màng ngoài tim  :  ( - )
        
        * Siêu âm bụng:
        -  Gan : Không to, bờ đều, hồi âm đồng dạng
        -  Đường mật : Không giãn, không sỏi, không giun.
        -  Túi mật : bình thường.
        -  Lách tụy : bình thường.
        -  Thận phải : Không sỏi, không ứ niệu.
        -  Thận trái : Không sỏi, không ứ niệu.
        -  Dịch ổ bụng : ( - ).
        -  Tiền liệt tuyến bình thường 
        
        * Siêu âm vùng cổ : (Đầu dò chuyên dụng 7.5-10MHz) 
        + Tuyến Giáp:
        - Eo             : kích thước và hồi âm bình thường.
        - Thùy phải : kích thước và hồi âm bình thường, không tăng tưới máu.
        - Thùy trái   : kích thước và hồi âm bình thường, không tăng tưới máu.
        + Hạch cổ (-).
        + Các tuyến nước bọt dưới hàm và mang tai: kích thước và hồi âm bình thường; không tổn thương khu trú, không sỏi."
        
        
         * Siêu âm vùng cổ : (Đầu dò chuyên dụng 7.5-10MHz) 
        + Tuyến Giáp:
        - Eo             : kích thước và hồi âm bình thường.
        - Thùy phải : kích thước và hồi âm bình thường, không tăng tưới máu.
        - Thùy trái   : kích thước và hồi âm bình thường, không tăng tưới máu.
        + Hạch cổ (-).
        + Các tuyến nước bọt dưới hàm và mang tai: kích thước và hồi âm bình thường; không tổn thương khu trú, không sỏi."
 
 </div> 
 
</body>

<script type="text/javascript">
//lưu lineheight và số dòng;
$(document).ready(function() {
	 
	var height=190;
	tooltip_message($(".message").html(),height)
});
	function tooltip_message(message,height){ 
	var chuky=70;
	//alert($(".message").css('line-height').replace("px",""));
	//alert($(".message").height())
		if(height>0){
			$(".append").css("height",height+"px");
		}
	   //_height= $(".message").height()/ $(".message").css('line-height').replace("px","");
		 //alert(_height)
	}
</script>
 