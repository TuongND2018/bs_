<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
  <style>
     .divTable
    {
		font-size:10.5px;
		font-family:Tahoma, Geneva, sans-serif;
        display:  table;
        width:auto;
        /*background-color:#eee;*/
        border:1px solid  #666666;
       border-spacing:5px;/*cellspacing:poor IE support for  this*/ 
       /* border-collapse:separate;*/	 
	   
    }

    .divRow
    {
       display:table-row;
       width:auto;

    }

    .divCell
    {
        float:left;/*fix for  buggy browsers*/
        display:table-column;
        width:200px;
		text-wrap:normal;
		white-space:normal;
        /*background-color:#ccc;*/
    }
	.border_doc{
		box-shadow:0px 0px 3px #000;
		border:7px ridge #70b01c; width:100px; height:141px; background:#FFF
	}
	.border_ngang{
		box-shadow:0px 0px 3px #000;
		border:7px ridge #70b01c; width:141px; height:100px; background:#FFF;margin-top:20px;
	}
  </style>
</head>

<body>
   
<div class="divTable">
            <div class="headRow">
                <div class="divCell" align="center"><strong>Mẫu 1</strong></div>
                <div class="divCell" align="center"><strong>Mẫu 2</strong></div>
                <div class="divCell" align="center"><strong>Mẫu 3</strong></div>
            </div>
            <div class="divRow">
               <div class="divCell" align="center">
                	<div class="border_doc" id="kieu1">
                    	<div style="border:1px dotted #000; width:80px; height:120px; background:#00c005; margin-top:10px">
                        	<div style="margin-top:65%;">Hình 1</div>
                        </div>
                    </div>                
               </div>
                <div class="divCell" align="center">
                	<div class="border_ngang" id="kieu2">
                    	<div style="border:1px dotted #000; width:55px; height:80px; background:#00c005; margin-top:10px;display:inline-block">
                        	<div style="margin-top:60%;">Hình 1</div>
                        </div>
                        <div style="border:1px dotted #000; width:55px; height:80px; background:#2a73be; margin-top:10px;display:inline-block">
                        	<div style="margin-top:60%;">Hình 2</div>
                        </div>
                    </div>                
               </div>
                <div class="divCell" align="center">
                	<div class="border_doc" id="kieu3">
                    	<div style="border:1px dotted #000; width:60px; height:75px; background:#2a73be; margin-top:10px">
                        	<div style="margin-top:52%;">Hình 1</div>
                        </div>
                        <div style="border:1px dotted #000; width:40px; height:40px; background:#00c005; margin-top:4px;display:inline-block">
                        	<div style="margin-top:35%;">Hình 2</div>
                        </div>
                        <div style="border:1px dotted #000; width:40px; height:40px; background:#00c005; margin-top:4px;display:inline-block">
                        	<div style="margin-top:35%;">Hình 3</div>
                        </div>
                    </div>                
               </div>
            </div>
            <div class="divRow" >
                <div class="divCell" align="center" style="padding-top:4px;"><strong>Mẫu 4</strong></div>
                <div class="divCell" align="center" style=" padding-top:4px;"><strong>Mẫu 5</strong></div>
                <div class="divCell" align="center" style="padding-top:4px;"><strong>Mẫu 6</strong></div>
           </div>
            <div class="divRow">
                 <div class="divCell" align="center">
                	<div class="border_doc">
                    	 <div style="border:1px dotted #000; width:40px; height:57px; background:#2a73be; margin-top:10px;display:inline-block">
                        	<div style="margin-top:48%;">Hình 1</div>
                        </div>
                        <div style="border:1px dotted #000; width:40px; height:57px; background:#00c005; margin-top:10px;display:inline-block">
                        	<div style="margin-top:48%;">Hình 2</div>
                        </div><br>
                        <div style="border:1px dotted #000; width:40px; height:57px; background:#00c005; margin-top:3px;display:inline-block">
                        	<div style="margin-top:48%;">Hình 3</div>
                        </div>
                        <div style="border:1px dotted #000; width:40px; height:57px; background:#2a73be; margin-top:3px;display:inline-block">
                        	<div style="margin-top:48%;">Hình 4</div>
                        </div>
                    </div>                
               </div>
               <div class="divCell" align="center">
                	<div class="border_ngang">
                    <div style="float:left; width:47%">
                    	<div style="border:1px dotted #000; width:55px; height:80px; background:#2a73be; margin-top:10px;display:inline-block">
                        	<div style="margin-top:52%;">Hình 1</div>
                        </div>
                    </div>
                    <div style="float:left">    
                        <div style="border:1px dotted #000; width:32px; height:35px; background:#00c005; display:inline-block;margin-top:12px;">
                        	<div style="margin-top:30%;">Hình 2</div>                            
                        </div>
                         <div style="border:1px dotted #000; width:32px; height:35px; background:#00c005; display:inline-block;margin-top:12px;">
                        	<div style="margin-top:30%;">Hình 3</div>                            
                        </div>
                        <br> 
                        <div style="border:1px dotted #000; width:32px; height:35px; background:#00c005; display:inline-block;margin-top:3px;">
                        	<div style="margin-top:30%;">Hình 4</div>                            
                        </div>
                         <div style="border:1px dotted #000; width:32px; height:35px; background:#00c005; display:inline-block;margin-top:3px;">
                        	<div style="margin-top:30%;">Hình 5</div>                            
                        </div>
                    </div>    
                    </div>                
               </div>
                <div class="divCell">                
                  <div class="divCell" align="center">
                	<div class="border_doc">
                    <div style="float:left; width:48%;margin-left:5px ">
                    	 <div style="border:1px dotted #000; width:40px; height:63px; background:#2a73be; margin-top:3px;display:inline-block">
                        	<div style="margin-top:64%;">Hình 1</div>
                        </div>
                        <div style="border:1px dotted #000; width:40px; height:63px; background:#2a73be; margin-top:5px;display:inline-block">
                        	<div style="margin-top:59%;">Hình 2</div>
                        </div>
                     </div>
                      <div style="float:left; margin-left:10px ">
                    	 <div style="border:1px dotted #000; width:25px; height:28px; background:#00c005; display:inline-block;margin-top:5px">
                        	<div style="margin-top:10%;">Hình 3</div>                            
                        </div>
                        	<br> 
                        <div style="border:1px dotted #000; width:25px; height:28px; background:#00c005; display:inline-block;margin-top:2px">
                        	<div style="margin-top:10%;">Hình 4</div>                            
                        </div>
                        	<br> 
                        <div style="border:1px dotted #000; width:25px; height:28px; background:#00c005; display:inline-block;margin-top:7px">
                        	<div style="margin-top:10%;">Hình 5</div>                            
                        </div>
                        	<br> 
                        <div style="border:1px dotted #000; width:25px; height:28px; background:#00c005; display:inline-block;margin-top:2px">
                        	<div style="margin-top:10%;">Hình 6</div>                            
                        </div>
                     </div>                        
                    </div>                
                </div>
           </div>
           <div class="divRow" >
                <div class="divCell" align="center" style="padding-top:4px;"><strong>Mẫu 7</strong></div>
                <div class="divCell" align="center" style="padding-top:4px;"><strong>Mẫu 8</strong></div>
                <div class="divCell" align="center" style="padding-top:4px;"><strong>Mẫu 9</strong></div>
           </div>
             <div class="divCell" align="center">
                	<div class="border_ngang">
                    	<div style="border:1px dotted #000; width:50px; height:40px; background:#2a73be; margin-top:5px;display:inline-block">
                        	<div style="margin-top:26%;">Hình 1</div>
                        </div>
                        <div style="border:1px dotted #000; width:50px; height:40px; background:#00c005; margin-top:5px;display:inline-block">
                        	<div style="margin-top:26%;">Hình 2</div>
                        </div>
                        <br>
                        <div style="border:1px dotted #000; width:50px; height:40px; background:#00c005; margin-top:5px;display:inline-block">
                        	<div style="margin-top:26%;">Hình 3</div>
                        </div>
                        <div style="border:1px dotted #000; width:50px; height:40px; background:#2a73be; margin-top:5px;display:inline-block">
                        	<div style="margin-top:26%;">Hình 4</div>
                        </div>
                    </div>                
               </div>
               <div class="divCell" align="center">
                	<div class="border_ngang">
                    <div style="float:left; width:48%">
                    	<div style="border:1px dotted #000; width:55px; height:80px; background:#00c005; margin-top:10px;display:inline-block">
                        	<div style="margin-top:52%;">Hình 1</div>
                        </div>
                    </div>
                    <div style="float:left">    
                        <div style="border:1px dotted #000; width:32px; height:30px; background:#00c005; display:inline-block;margin-top:12px;">
                        	<div style="margin-top:30%;">Hình 2</div>                            
                        </div>
                         <div style="border:1px dotted #000; width:32px; height:30px; background:#00c005; display:inline-block;margin-top:12px;">
                        	<div style="margin-top:30%;">Hình 3</div>                            
                        </div>
                        <br> 
                        <div style="border:1px dotted #000; width:32px; height:30px; background:#00c005; display:inline-block;margin-top:10px;">
                        	<div style="margin-top:30%;">Hình 4</div>                            
                        </div>
                         <div style="border:1px dotted #000; width:32px; height:30px; background:#00c005; display:inline-block;margin-top:10px;">
                        	<div style="margin-top:30%;">Hình 5</div>                            
                        </div>
                    </div>    
                    </div>                
               </div>
                <div class="divCell">                
                  <div class="divCell" align="center">
                	<div class="border_doc">
                    <div style="float:left; width:48%;margin-left:5px ">
                    	 <div style="border:1px dotted #000; width:40px; height:63px; background:#00c005; margin-top:3px;display:inline-block">
                        	<div style="margin-top:48%;">Hình 1</div>
                        </div>
                        <div style="border:1px dotted #000; width:40px; height:63px; background:#00c005; margin-top:5px;display:inline-block">
                        	<div style="margin-top:48%;">Hình 1</div>
                        </div>
                     </div>
                      <div style="float:left; margin-left:10px ">
                    	 <div style="border:1px dotted #000; width:25px; height:28px; background:#00c005; display:inline-block;margin-top:5px">
                        	<div style="margin-top:10%;">Hình 2</div>                            
                        </div>
                        	<br> 
                        <div style="border:1px dotted #000; width:25px; height:28px; background:#00c005; display:inline-block;margin-top:2px">
                        	<div style="margin-top:10%;">Hình 3</div>                            
                        </div>
                        	<br> 
                        <div style="border:1px dotted #000; width:25px; height:28px; background:#00c005; display:inline-block;margin-top:7px">
                        	<div style="margin-top:10%;">Hình 4</div>                            
                        </div>
                        	<br> 
                        <div style="border:1px dotted #000; width:25px; height:28px; background:#00c005; display:inline-block;margin-top:2px">
                        	<div style="margin-top:10%;">Hình 5</div>                            
                        </div>
                     </div>                        
                    </div>                
                </div>
           </div>


      </div>

</body>
</html>

 <script type="text/javascript">
    $(document).ready(function() {
             var id_benhnhan = <?php echo $_GET["id_benhnhan"] ?>;
             var id_kham = <?php echo $_GET["id_kham"] ?>;
             
             var links=<?php echo $_GET["links"] ?>;
             //alert(_links);
           $('#kieu1').click(function(){
                   $.cookie("in_status", "print_preview"); 
                    dialog_report("Xem trước khi in",90,90,"u78787878975a","resource.php?module=report&view=<?=$modules?>&action=sieuamkieu1&header=left&links="+links+"&id_benhnhan="+id_benhnhan+"&id_kham="+id_kham+"&type=report&id_form=10",'SieuAmThai4D_LichHen');
                    $(".frame_u78787878975a").css("width","793px");
                })
    });
</script>