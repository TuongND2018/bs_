
<!DOCTYPE HTML>
<?php
 
?>

 <?php 

       include("FraminghamControler.php");






 if(isset($_GET["id_benhnhan"])){
    echo "<script type='text/javascript'>";
    echo "window.id_benhnhan=".$_GET["id_benhnhan"];
    echo "</script>";
    
  }else{
  if($_SESSION["ThongTinBenhNhan"]["ID"]==""){
    echo "<script type='text/javascript'>";
      echo "parent.postMessage('hosobenhnhantrong;' , '*')";
    
    echo "</script>";
    return;
  }else{
    echo "<script type='text/javascript'>";
    echo "window.id_benhnhan=".$_SESSION["ThongTinBenhNhan"]["ID"];
    echo "</script>";
  }
  }


  if(isset($_GET["id_kham"])){
    echo "<script type='text/javascript'>";
    echo "window.id_kham2=".$_GET["id_kham"];
    echo "</script>";
  }
  else{
    echo "<script type='text/javascript'>";
    echo "window.id_kham2=0";
    echo "</script>";
    }









  
        
  if (isset($_GET["id_kham"])){
	$id_kham=$_GET["id_kham"];
}else{
	$id_kham=954949;	
}
   
        //echo 
 $SQLServer= new SQLServer;
$store_name="{call GD2_FRAMINGHAM_SelectByID_Kham (?)}";//tao bien khai bao store
$params =array($id_kham);    

$get_Framingham=$SQLServer->query( $store_name, $params);//Goi store
$excute= new SQLServerResult($get_Framingham);
//print_r($excute);//Ket noi lop xu ly SQL và truyen gia tri tra ve tu lop ket noi SQL;
/* @var $array_Framingham_Data type */
//lấy về mảng điều kiện đầu vào
$array_Framingham_Data= $excute->get_as_array();
/*
 * Các aray lấy giá trị từ CSDL
 */

/*
 * ******Các aray lấy giá trị từ CSDL*******
 */
 function assignIfNotEmpty(&$item, $alternative)
{
    return (!empty($item)) ? $item : $alternative;
}

function Framingham_Data_GetPaRaIn_PlusBMI($para_array_Framingham_Data)
{
    $cong=0;
   foreach($para_array_Framingham_Data as $values2)
    {
     $BMI=round($values2['Weight']*10000/( $values2['High']* $values2['High']),1);
     $para_array_Framingham_Data[$cong]['BMI']=$BMI;
     $para_array_Framingham_Data[$cong][]=$BMI;
    
     //HardCoronary10Year CHD10Y Lấy các chỉ số CHD10Y
     $TextAge_CVD=(GetPointScore($values2['Age'],$values2['Men'],'CVD'));
     $para_array_Framingham_Data[$cong]['TextAge_CVD']=$TextAge_CVD;
     $para_array_Framingham_Data[$cong][]=$TextAge_CVD;
     
     $TextSmoker_CVD = GetPointScoreByOption('CVDCommon',$values2['Men'],$values2['Smoker'], null, null, null, null, null, null, null, null, null, null, null, null);
     $para_array_Framingham_Data[$cong]['TextSmoker_CVD']=$TextSmoker_CVD;
     $para_array_Framingham_Data[$cong][]=$TextSmoker_CVD;
     
     $TextDiabet_CVD = GetPointScoreByOption('CVDCommonDiabet',$values2['Men'], null, $values2['DIABET'], null, null, null, null, null, null, null, null, null, null, null);
     $para_array_Framingham_Data[$cong]['TextDiabet_CVD']=$TextDiabet_CVD;
     $para_array_Framingham_Data[$cong][]=$TextDiabet_CVD;
     
     $TextCHO_CVD = GetPointScore($values2['CHOL_Total'],$values2['Men'],'CVDCHOL');
     $para_array_Framingham_Data[$cong]['TextCHO_CVD']=$TextCHO_CVD;
     $para_array_Framingham_Data[$cong][]=$TextCHO_CVD;
     
     $TextHDL_CVD = GetPointScore($values2['CHOL_HDL'],$values2['Men'],'CVDHDL');
     $para_array_Framingham_Data[$cong]['TextHDL_CVD']=$TextHDL_CVD;
     $para_array_Framingham_Data[$cong][]=$TextHDL_CVD;
     
     $TextSBP_CVD = GetPointScore2($values2['SBP'],'CVDSBP',$values2['Men'], null, null, $values2['Treated'],null, null, null, null, null, null, null, null, null, null);
     $para_array_Framingham_Data[$cong]['TextSBP_CVD']=$TextSBP_CVD;
     $para_array_Framingham_Data[$cong][]=$TextSBP_CVD;
     //Total và percent
     $TextTotal_CVD=assignIfNotEmpty($TextAge_CVD,0)+assignIfNotEmpty($TextSmoker_CVD,0)
             +assignIfNotEmpty($TextDiabet_CVD,0)+assignIfNotEmpty($TextCHO_CVD,0)
             +assignIfNotEmpty($TextHDL_CVD,0)+assignIfNotEmpty($TextSBP_CVD,0);
 
     
      $para_array_Framingham_Data[$cong]['TextTotal_CVD']=$TextTotal_CVD;
      $para_array_Framingham_Data[$cong][]=$TextTotal_CVD;
   
     IF($values2['Men']==1)//NAM 
            if($TextTotal_CVD>=18)
           {
                $TextPercent_CVD ='>30%';
           }
         elseif($TextTotal_CVD<=-3)
         {
              $TextPercent_CVD ='<1%';
         }    
         else
         {
             $TextPercent_CVD=SelectPercentByPoints('cvd',$values2['Men'],$TextTotal_CVD).'%';
         }
        ELSE//NỮ
        {
            if($TextTotal_CVD>=21)
           {
                $TextPercent_CVD ='>30%';
           }
         elseif($TextTotal_CVD<=-2)
         {
              $TextPercent_CVD ='<1%';
         }    
         else
         {
             $TextPercent_CVD=SelectPercentByPoints('cvd',$values2['Men'],$TextTotal_CVD).'%';
         }
        }
     $para_array_Framingham_Data[$cong]['TextPercent_CVD']=$TextPercent_CVD;
     $para_array_Framingham_Data[$cong][]=$TextPercent_CVD;
     
     //TÍNH CHO NGƯỜI BÌNH THƯỜNG KHÔNG BIẾT VÌ SAO ($TextAge_CVD,0) + 1 + (-1) + 1;
     
      $NTextTotal_CVD = assignIfNotEmpty($TextAge_CVD,0) + 1 + (-1) + 1;
      $para_array_Framingham_Data[$cong]['NTextTotal_CVD']=$NTextTotal_CVD;
      $para_array_Framingham_Data[$cong][]=$NTextTotal_CVD;
      
      $NTextPercent_CVD=SelectPercentByPoints('cvd',$values2['Men'],$NTextTotal_CVD).'%';
      $para_array_Framingham_Data[$cong]['NTextPercent_CVD']=$NTextPercent_CVD;
      $para_array_Framingham_Data[$cong][]=$NTextPercent_CVD;
      //TÍNH CHO NGƯỜI BÌNH THƯỜNG
     
      //***Over***Over***HardCoronary10Year CHD10Y ***Over***Over
      
      
      //Congestive Heart Failure(4Y)-CHF

       $TextAge_CHF=(GetPointScore($values2['Age'],$values2['Men'],'CHF'));
       $para_array_Framingham_Data[$cong]['TextAge_CHF']=$TextAge_CHF;
       $para_array_Framingham_Data[$cong][]=$TextAge_CHF;
      
       
        IF($values2['Men']!=1)//chỉ tính điểm này cho nữ
        {
               $TextBMI_CHF=(GetPointScore($BMI,$values2['Men'],'CHFBMI'));
               $para_array_Framingham_Data[$cong]['TextBMI_CHF']=$TextBMI_CHF;
               $para_array_Framingham_Data[$cong][]=$TextBMI_CHF;
        }
        
        $TextSBP_CHF=(GetPointScore($values2['SBP'],$values2['Men'],'CHFSBP'));
        $para_array_Framingham_Data[$cong]['TextSBP_CHF']=$TextSBP_CHF;
        $para_array_Framingham_Data[$cong][]=$TextSBP_CHF;
        
        $TextHrate_CHF=(GetPointScore($values2['HRate'],$values2['Men'],'CHFHR'));
        $para_array_Framingham_Data[$cong]['TextHrate_CHF']=$TextHrate_CHF;
        $para_array_Framingham_Data[$cong][]=$TextHrate_CHF;
        
         if($values2['CHD']==1)
         {           
         $TextCHD_CHF=(GetPointScoreByOption('CHFCommon',$values2['Men'],null, null, null, null, $values2['CHD'], null, null, null, null, null, null, null, null));
         }
        else { $TextCHD_CHF=0;
        }
         $para_array_Framingham_Data[$cong]['TextCHD_CHF']=$TextCHD_CHF;
         $para_array_Framingham_Data[$cong][]=$TextCHD_CHF;
         
         if($values2['LVH']==1)
         {           
         $TextLVH_CHF=(GetPointScoreByOption('CHFCommon',$values2['Men'],null, null, null, null, $values2['CHF'], null, null, null, null, null, null, null, null));
         }
        else { $TextLVH_CHF=0;
        }
         $para_array_Framingham_Data[$cong]['TextLVH_CHF']=$TextLVH_CHF;
         $para_array_Framingham_Data[$cong][]=$TextLVH_CHF;
         
         
         if($values2['Valve']==1)
         {           
         $TextValve_CHF=(GetPointScoreByOption('CHFCommon',$values2['Men'],null, null, null, null, $values2['Valve'], null, null, null, null, null, null, null, null));
         }
        else { $TextValve_CHF=0;
        }
         $para_array_Framingham_Data[$cong]['TextValve_CHF']=$TextValve_CHF;
         $para_array_Framingham_Data[$cong][]=$TextValve_CHF;
         
          if($values2['DIABET'] == 1)
         {           
         $TextDiabet_CHF=(GetPointScoreByOption('CHFCommon',$values2['Men'],null, true, null,null, null,null,null, null, null, null, null, null, null));
         
         }
        else { $TextDiabet_CHF=0;
        }
         $para_array_Framingham_Data[$cong]['TextDiabet_CHF']=$TextDiabet_CHF;
         $para_array_Framingham_Data[$cong][]=$TextDiabet_CHF;
       
        //Tông cổng và %
        //TextTotal_CHF = TextAge_CHF + TextSBP_CHF + TextSBP_AF + TextHrate_CHF + TextCHD_CHF 
        //+ TextLVH_CHF + TextValve_CHF + TextDiabet_CHF
       $TextTotal_CHF=assignIfNotEmpty($TextAge_CHF,0)+assignIfNotEmpty($TextSBP_CHF,0)
             +assignIfNotEmpty($TextHrate_CHF,0)+assignIfNotEmpty($TextCHD_CHF,0)
             +assignIfNotEmpty($TextLVH_CHF,0)+assignIfNotEmpty($TextValve_CHF,0)+assignIfNotEmpty($TextDiabet_CHF,0);
       $para_array_Framingham_Data[$cong]['TextTotal_CHF']=$TextTotal_CHF;
       $para_array_Framingham_Data[$cong][]=$TextTotal_CHF;
       
       
       IF($values2['Men']==1)
       {//NAM 
            if($TextTotal_CHF>=30)
           {
                $TextPercent_CHF ='>59%';
           }
           else
           {
                If ($TextTotal_CHF < 5) {
                 $TextPercent_CHF = "<1%";
                }
                else
                {
                          
                        $TextPercent_CHF = SelectPercentByPoints('CHF',$values2['Men'],$TextTotal_CHF).'%';
                     
                }
           }
        
         
         $NTextTotal_CHF = $TextAge_CHF + 1 + 3;
       }
        ELSE//NỮ
        {
       
          $NTextTotal_CHF = $TextAge_CHF + 1 + 1 + 1;
        }
        
        $para_array_Framingham_Data[$cong]['TextPercent_CHF']=$TextPercent_CHF;
         $para_array_Framingham_Data[$cong][]=$TextPercent_CHF;
        
         $para_array_Framingham_Data[$cong]['NTextTotal_CHF']=$NTextTotal_CHF;
         $para_array_Framingham_Data[$cong][]=$NTextTotal_CHF;
         
         
         $NTextPercent_CHF=  SelectPercentByPoints('CHF',$values2['Men'],$NTextTotal_CHF).'%';
         $para_array_Framingham_Data[$cong]['NTextPercent_CHF']=$NTextPercent_CHF;
         $para_array_Framingham_Data[$cong][]=$NTextPercent_CHF;
         
         
         
       
      //*********Over****************Congestive Heart Failure(4Y)*********************
      
      
      
   
     return $para_array_Framingham_Data;
    }
}
// tính thêm giá trị từ BMI và add vào array $array_Framingham_Data
$array_Framingham_Data_PlusBMI=Framingham_Data_GetPaRaIn_PlusBMI($array_Framingham_Data);
//tách 1 mảng toàn key
$keys=array_keys($array_Framingham_Data_PlusBMI[0]);
//tách 1 mảng toàn value
$values=array_values($array_Framingham_Data_PlusBMI[0]);  
 $hotenBN=$array_Framingham_Data_PlusBMI[0]['HoLotBenhNhan'].' '.$array_Framingham_Data_PlusBMI[0]['TenBenhNhan']
         .' _ tuổi: ' .$array_Framingham_Data_PlusBMI[0]['Age']
               .' _ MaBN: ' .$array_Framingham_Data_PlusBMI[0]['MaBenhNhan'];;
echo $hotenBN.'<br>';


    
?>
<html>
   
    <head>
   <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <script type="text/javascript" src="../../../js/jquery-1.9.1.js"></script>
    
    <?php
	echo "<script type='text/javascript'>\n";
	echo "var keys=[];\n";
	echo "var values=[];\n";
	$dem=0;
for($i=0;$i<=count($keys)-1;$i++){
	if(!is_numeric($keys[$i])){
		
		echo " keys[$dem]='$keys[$i]';\n";
		echo " values['$keys[$i]']='$values[$i]';\n";
		 
		$dem++;
		 
	} 	
}

echo "</script>\n";
	?>
        <style>
		
         
        .Khoichung div{
            color: #0000ff;
            display:inline-block;
            vertical-align: top;
                            height:260px;
            width: 150px;
            border: 1px solid #000;

                            border-spacing: 4px
        }
        .Khoichung div span{

            display: block;
            
       }
       .Khoichung div#CVD,.Khoichung div#CHF4Y,.Khoichung div#STROKE10Y{

            display: block;
             height: 250px !important;
            
       }
       .Khoichung div span label{
            display:inline-block;
           width: 100px;
           text-align: left;
           color :#000;

       }
        .Khoichung div span input{
           display:inline-block;
           width: 30px;
           height: 30px;
           text-align: right;
       }
       .widthTextPanelPhanNhapDoYta{
           width: 50px;
       }
       fieldset input{               
           width: 20px;
       }
       
            #bacsy .label{
            display:inline-block;
           width: 124px !important;
           text-align: left;

               }
            #bacsy label{
                       display:inline-block;             
                     text-align: left;
                       cursor:pointer;

               }
            #yta label{
                       display:inline-block;             
                       text-align: left;
                       cursor:pointer;
                       width: 100px;
                      
               }  
            #yta div{
                       display:inline-block; 
                      width: 70px;
                       margin:0;
                       margin-bottom: 3px;
                       padding:0;        
               }
            #yta div  input{
                       display:inline-block; 
                      width: 40px;
                       margin:0;
                       padding:0;        
               }
            #tudong label{
                       display:inline-block;             
                       text-align: left;
                       cursor:pointer;
                       width: 100px;
                      
               }
            #tudong div input{
                   display:inline-block; 
                      width: 50px;
                       margin:0;
                       padding:0;  
               }
               #tudong div
               {
                    display:inline-block; 
                      width: 70px;
                       margin:0;
                       margin-bottom: 3px;
                       padding:0; 
               }
               #bacsy div{
                       display:inline-block; 
       
                      width: 30px;
                       margin:0;
                       padding:0;        
               }
               #container{	
                            width:1300px;	 
                            margin-left:auto;
                            margin-right:auto;
                            letter-spacing: 0px;
                            word-spacing: 0px;
                             font-family:Tahoma, Geneva, sans-serif;
                             font-size:11px; 
                    }
                     fieldset{
                             font-family:Tahoma, Geneva, sans-serif;
                             font-size:12px;
                             border:1px solid #000;
                     }
                     body{
                             font-family:Tahoma, Geneva, sans-serif;
                             font-size:12px; 
                     }
                 div input[type='text']{
                  
                      height: 12px !important;
                      
               }
                   



    </style>
    <title></title>  
    </head>
    <?php

        
                /*
                 * CVD 10Y
                 */
   ?>
    <body>
        <div id="container">
              <div class="patient_info"></div>     
          <fieldset id="bacsy" style=" width: 74%">
     <legend style="text-align: left ;color: red"><?php get_text("phannhapdobacsy")?></legend>
           <div><input type="checkbox" name="Smoker" id ="Smoker"></div><div class="label" >  <label for="Smoker"><?php get_text("hutthuoc")?></label> </div>
           <div><input type="checkbox" name="CVD" id ="CVD"></div><div class="label" >  <label for="CVD"><?php get_text("benhtimmach")?></label></div> 
           <div><input type="checkbox" name="DIABET" id ="DIABET"></div><div class="label"> <label for="DIABET"> <?php get_text("tieuduong")?></label> </div>
           <div><input type="checkbox" name="Treated" id ="Treated"></div><div class="label" style="width:140px"> <label for="Treated"><?php get_text("dieutricaohuyetap")?></label></div> 
           <div><input type="checkbox" name="Murmur" id ="Murmur"></div><div class="label"> <label for="Murmur"><?php get_text("amthoitrongtim")?></label></div> 
           <div><input type="checkbox" name="LVH" id ="LVH"></div ><div  class="label" style="width:80px"> <label  for="LVH"><?php get_text("daythattrai")?></label> </div>
          <br>          
          <input type="text" style="width :23px" name="CigsOnDate" id ="CigsOnDate"><div class="label"><label for="CigsOnDate"><?php get_text("sodieungay")?></label></div>
          <div><input type="checkbox" name="Valve" id ="Valve"></div><div class="label"> <label for="benhvantim"><?php get_text("benhvantim")?></label> </div>
          <div><input type="checkbox" name="AF" id ="AF"></div><div class="label"> <label for="AF"><?php get_text("rungnhi")?></label></div>
          <div><input type="checkbox" name="IC" id ="IC"></div><div class="label" style="width:140px"> <label for="IC" style="width:140px"><?php get_text("dikhapkhiengcachhoi")?></label></div> 
          <div><input type="checkbox" name="CHD" id ="CHD"></div><div class="label"> <label  for="CHD"><?php get_text("benhmachvanh")?></label> </div>
          <div><input type="checkbox" name="HF" id ="HF"></div><div class="label" style="width:80px">  <label for="HF">Suy tim</label></div>
        </fieldset>
           
          <div style="display: inline-block">
              
          <fieldset style=" width: 455px; height: 55px" id="yta" >
  <legend style="text-align: left ;color: red"><?php get_text("phannhapdoyta")?></legend>
<div class="label" style="width:106px">  <label for="SBP"><?php get_text("hatamthu")?></label> </div>
<div><input type="text" name="SBP" id ="SBP">  </div>
<div class="label">  <label for="High" style="width:55px"><?php get_text("cao")?></label> </div><div><input type="text" name="High" id ="High">  </div>
<div class="label" style="width:50px">  <label for="HRate" style="width:35px"><?php get_text("hrate")?></label> </div><div><input type="text" name="HRate" id ="HRate">  </div>
<div class="label" style="width:110px">  <label for="DBP"><?php get_text("hatamtruong")?></label> </div><div><input type="text" name="DBP" id ="DBP">  </div>
<div class="label">  <label for="Weight" style="width:55px"><?php get_text("nang")?></label> </div><div><input type="text" name="Weight" id ="Weight">  </div>
<div class="label"  style="width:50px">  <label for="PR" style="width:35px"><?php get_text("pr")?></label> </div><div><input type="text" name="PR" id ="PR">  </div>
      
        </fieldset>
            
            </div>
           
          <div style="display: inline-block">
                
        <fieldset style=" width: 480px;height: 55px" id="tudong" >
  <legend style="text-align: left ;color: red"><?php get_text("phannhaptudong")?></legend>
  
<div class="label" style=" width: 30px"><label for="Age"><?php get_text("tuoi")?></label></div><div><input type="text" name="Age" id ="Age"> </div>

<div class="label" style=" width: 30px"><label for="HDLMol" style="width:50px">HDL</label></div><div style=" width: 80px"><input type="text" name="HDLMol" id ="HDLMol"></div>

<div class="label" style=" width: 30px">  <label for="CHOMol" style="width:50px">CHOL</label></div><div ><input type="text" name="CHOMol" id ="CHOMol"></div>


<div class="label" style=" width: 80px">  <label for="TG" style="width:73px">Triglyceride</label> </div><div style=" width: 50px"><input type="text" name="TG" id ="TG"></div>

<div class="label" style=" width: 30px">  <label for="Men" style="width:50px"><?php get_text("nam")?></label> </div><div><input type="checkbox" name="Men" id ="Men"></div>


<div class="label" style=" width: 30px">  <label for="LDLMol" style="width:55px">LDL</label></div><div style=" width: 80px"><input type="text" name="LDLMol" id ="LDLMol"></div>

<div class="label" style=" width: 30px">  <label for="BMI" style="width:60px">BMI</label></div><div ><input type="text" name="BMI" id ="BMI"></div>

<div class="label" style=" width: 80px">  <label for="HF" style="width:73px"><?php get_text("suytim")?></label> </div><div style=" width: 50px"> <input type="checkbox" name="HF" id ="HF"></div>

        </fieldset>
              
<!--                <div style="display: inline-block">
              <fieldset style="display:inherit;height: 55px" >Thaotác</fieldset>
                  
                </div>
              -->
              
              
          </div>
        
       
          <div style="display: inline-block;">
                <fieldset style=" padding-top: 6px;padding-bottom: 17px; width: 122px;height: 38px;border:1px solid #000" id="tudong" >
              <input type="button" style="width:122px" name="DO" id ="DO" value="DO">    <br>
            
            <input type="button" style="width:122px" name="VIEW" id ="VIEW" value="VIEW">
            
            
                </fieldset>
            
            </div>
                  
          <div class="Khoichung"> 
               
              
            <div class="CVD" >
                
                <span style="text-align: center;background:#baec71 ; display: inline-block ; width:150px; height: 30px; border-bottom: 1px ;border-color: #000;border-bottom-style: solid" >General CardioVascular
                </span>
                <span style="margin-left: 5px;margin-right: 2px; margin-top: 2px;width: 148px"> 
                     <label for="TextAge_CVD" >Age</label> 
                     <input type="text" name="TextAge_CVD" id ="TextAge_CVD">
                     <label for="TextSmoker_CVD">Smoking</label> 
                     <input type="text" name="TextSmoker_CVD" id ="TextSmoker_CVD">
                     <label for="TextDiabet_CVD">DIABET</label> 
                     <input type="text" name="TextDiabet_CVD" id ="TextDiabet_CVD">
                     <label for="TextCHO_CVD">CHO</label> 
                     <input type="text" name="TextCHO_CVD" id ="TextCHO_CVD">
                      <label for="TextHDL_CVD">HDL</label> 
                     <input type="text" name="TextHDL_CVD" id ="TextHDL_CVD">
                     <label for="TextSBP_CVD">SBP/Treated </label> 
                     <input type="text" name="TextSBP_CVD" id ="TextSBP_CVD">
                     
                     <span style="margin-left: 10px ;margin-top: 45px"> 
                     <input  type="text" style=" width: 50px ;background: #FFC3C3" name="TextPercent_CVD" id ="TextPercent_CVD">
                     <input type="text" style=" width: 50px ;background: #FFC3C3" name="TextTotal_CVD"  id ="TextTotal_CVD">
                     
                     <input type="text" style=" width: 50px ;background: #b8ec79" name="NTextPercent_CVD" id ="NTextPercent_CVD">
                     <input type="text" style=" width: 50px ;background: #b8ec79" name="NTextTotal_CVD" id ="NTextTotal_CVD">
                     </span>
                     
                     
                    
                     
                     
                 </span>
               
            </div>
              
            <div class="CHF4Y">
                
                <span style="text-align: center; background:#baec71;  display: inline-block ;width:150px;height: 30px; border-bottom: 1px ;border-color: #000;border-bottom-style: solid">
                     Congestive Heart Failure(4Y)
                 </span>
                <span style="margin-left: 5px;margin-right: 2px; margin-top: 2px; width: 148px"> 
                     <label for="TextAge_CHF">Age</label> 
                     <input type="text" name="TextAge_CHF" id ="TextAge_CHF">
                        <label for="TextBMI_CHF">BMI(Women)</label> 
                     <input type="text" name="TextBMI_CHF" id ="TextBMI_CHF">
                     <label for="TextSBP_CHF">SBP</label> 
                     <input type="text" name="TextSBP_CHF" id ="TextSBP_CHF">
                         <label for="TextHrate_CHF"> H.Rate</label> 
                     <input type="text" name="TextHrate_CHF" id ="TextHrate_CHF">
                      <label for="TextCHD_CHF">CHD</label> 
                     <input type="text" name="TextCHD_CHF" id ="TextCHD_CHF">
                     <label for="TextLVH_CHF">LVH</label> 
                     <input type="text" name="TextLVH_CHF" id ="TextLVH_CHF">
                     
                     
                      <label for="TextValve_CHF">Valve</label> 
                     <input type="text" name="TextValve_CHF" id ="TextValve_CHF">
                     <label for="TextDiabet_CHF">DIABET</label> 
                     <input type="text" name="TextDiabet_CHF" id ="TextDiabet_CHF">
                     
                       <span style="margin-left: 10px ; margin-top: 2px">
                     <input  type="text" style="   width: 50px ;background: #FFC3C3" name="TextPercent_CHF" id ="TextPercent_CHF">
                     <input type="text" style=" width: 50px ;background: #FFC3C3" name="TextTotal_CHF" id ="TextTotal_CHF">
                     
                     <input type="text" style=" width: 50px ;background: #b8ec79" name="NTextPercent_CHF" id ="NTextPercent_CHF">
                     <input type="text" style=" width: 50px ;background: #b8ec79" name="NTextTotal_CHF" id ="NTextTotal_CHF">
                     
                       </span>
                     
                     
                 </span>
               
            </div>
            
            <div class="STROKE10Y">
                
                 <span style="text-align: center; background:#baec71;  display: inline-block ;width:150px;height: 30px; border-bottom: 1px ;border-color: #000;border-bottom-style: solid">
                     Stroke (10Y)
                 </span>
                 <span style="margin-left: 5px;margin-right: 2px; margin-top: 2px; width: 148px"> 
                     <label for="TextAge_Stroke">Age</label> 
                     <input type="text" name="TextAge_Stroke" id ="TextAge_Stroke">
                        <label for="TextSmoker_Stroke">Smoking</label> 
                     <input type="text" name="TextSmoker_Stroke" id ="TextSmoker_Stroke">
                     <label for="TextSBP_Stroke">SBP/Treated</label> 
                     <input type="text" name="TextSBP_Stroke" id ="TextSBP_Stroke">
                         <label for="TextDiabet_Stroke">DIABET</label> 
                     <input type="text" name="TextDiabet_Stroke" id ="TextDiabet_Stroke">
                      <label for="TextCVD_Stroke">CVD</label> 
                     <input type="text" name="TextCVD_Stroke" id ="TextCVD_Stroke">
                     <label for="TextAF_Stroke">AF</label> 
                     <input type="text" name="TextAF_Stroke" id ="TextAF_Stroke">
                     
                     
                      <label for="TextLVH_Stroke">LVH</label> 
                     <input type="text" name="TextLVH_Stroke" id ="TextLVH_Stroke">
                    
                     
                       <span style="margin-left: 10px ; margin-top: 20px">
                     <input  type="text" style="   width: 50px ;background: #FFC3C3" name="TextPercent_Stroke" id ="TextPercent_Stroke">
                     <input type="text" style=" width: 50px ;background: #FFC3C3" name="TextTotal_Stroke" id ="TextTotal_Stroke">
                     
                     <input type="text" style=" width: 50px ;background: #b8ec79" name="NTextPercent_Stroke" id ="NTextPercent_Stroke">
                     <input type="text" style=" width: 50px ;background: #b8ec79" name="NTextTotal_Stroke" id ="NTextTotal_Stroke">
                     
                       </span>
                     
                     
                 </span>
                
            </div>
            
            <div class="CHD10Y">
                
                 <span style="text-align: center; background:#baec71;  display: inline-block ;width:150px;height: 30px; border-bottom: 1px ;border-color: #000;border-bottom-style: solid">
                      Coronary Heart Disease(10Y)
                 </span>
                 <span style="margin-left: 5px;margin-right: 2px; margin-top: 2px; width: 148px"> 
                     <label for="TextAge_CHD">Age</label> 
                     <input type="text" name="TextAge_CHD" id ="TextAge_CHD">
                        <label for="TextSmoker_CHD">Smoking</label> 
                     <input type="text" name="TextSmoker_CHD" id ="TextSmoker_CHD">
                    
                         <label for="TextDiabet_Stroke">DIABET</label> 
                     <input type="text" name="TextDiabet_Stroke" id ="TextDiabet_Stroke">
                      <label for="TextCHO_CHD">CHO</label> 
                     <input type="text" name="TextCHO_CHD" id ="TextCHO_CHD">
                      <label for="TextLDL_CHD">LDL</label> 
                     <input type="text" name="TextLDL_CHD" id ="TextLDL_CHD">
                     <label for="TextSBP_CHD">SBP - DBP</label> 
                     <input type="text" name="TextSBP_CHD" id ="TextSBP_CHD">
                     
                     
                      <label for="TextLVH_Stroke" style="width:60px">HDL</label> 
                      <input type="text" name="TextHDLLDL_CHD" id ="TextHDLLDL_CHD">
                     <input type="text" name="TextHDLCHO_CHD" id ="TextHDLCHO_CHD">
                    
                     
                       <span style="margin-left: 10px ; margin-top: 20px">
                     <input  type="text" style="   width: 50px ;background: #FFC3C3" name="TextPercent_Stroke" id ="TextPercent_Stroke">
                     <input type="text" style=" width: 50px ;background: #FFC3C3" name="TextTotal_Stroke" id ="TextTotal_Stroke">
                     
                     <input type="text" style=" width: 50px ;background: #b8ec79" name="NTextPercent_Stroke" id ="NTextPercent_Stroke">
                     <input type="text" style=" width: 50px ;background: #b8ec79" name="NTextTotal_Stroke" id ="NTextTotal_Stroke">
                     
                       </span>
                     
                     
                 </span>
                
            </div>
         
                  <textarea rows="15" style="width: 500px" id="Chandoan">Chẩn đoán</textarea>
                  <br>

           <!--        <hr tyle="width: 300px color:red"></hr> -->
                  
            <div class="HardCoronary10Year" >
               
                <span style="text-align: center;background:#baec71 ; display: inline-block ; width:150px; height: 30px; border-bottom: 1px ;border-color: #000;border-bottom-style: solid" >Hard Coronary Heart Disease
                </span>         
                <span style="margin-left: 5px;margin-right: 2px; margin-top: 2px;width: 148px"> 
                     <label for="TextAgeP" >Age</label> 
                     <input type="text" name="TextAgeP" id ="TextAgeP">
                     <label for="TextAgeSmokerP">Smoking</label> 
                     <input type="text" name="TextAgeSmokerP" id ="TextAgeSmokerP">
                     <label for="TextAgeCholesterolP">CHO</label> 
                     <input type="text" name="TextAgeCholesterolP" id ="TextAgeCholesterolP">
                     <label for="TextHDLLevelP">HDL</label> 
                     <input type="text" name="TextHDLLevelP" id ="TextHDLLevelP">
                      <label for="TextSBPAndTreatedP">SBP/Treated</label> 
                     <input type="text" name="TextSBPAndTreatedP" id ="TextSBPAndTreatedP">
                    
                     
                     <span style="margin-left: 10px ;margin-top: 45px"> 
                         
                     <input type="text" style=" width: 50px ;background: #FFC3C3" name="TextPercentCoronary10YearMen"  id ="TextPercentCoronary10YearMen">
                     <input  type="text" style=" width: 50px ;background: #FFC3C3" name="TexTTotalCoronary10Year" id ="TexTTotalCoronary10Year">
                     
                     
                     <input type="text" style=" width: 50px ;background: #b8ec79" name="NTextPercentCoronary10YearMen" id ="NTextPercentCoronary10YearMen">
                     <input type="text" style=" width: 50px ;background: #b8ec79" name="NTexTTotalCoronary10Year" id ="NTexTTotalCoronary10Year">
                     </span>
                     
                     
                    
                     
                     
                 </span>
                
            </div>
              
            <div class="RCHD2Y">
                
                <span style="text-align: center; background:#baec71;  display: inline-block ;width:150px;height: 30px; border-bottom: 1px ;border-color: #000;border-bottom-style: solid">
                     Recuring Coronary Herat Disease(2Y)
                 </span>
                <span style="margin-left: 5px;margin-right: 2px; margin-top: 2px; width: 148px"> 
                     <label for="TextAge_RCHD">Age</label> 
                     <input type="text" name="TextAge_RCHD" id ="TextAge_RCHD">
                        <label for="TextSmoker_RCHD">Smoking</label> 
                     <input type="text" name="TextSmoker_RCHD" id ="TextSmoker_RCHD">
                     <label for="TextDiabet_RCHD">DIABET</label> 
                     <input type="text" name="TextDiabet_RCHD" id ="TextDiabet_RCHD">
                         <label for="TextCHOHDL_RCHD">CHO-HDL</label> 
                     <input type="text" name="TextCHOHDL_RCHD" id ="TextCHOHDL_RCHD">
                      <label for="TextSBP_RCHD">SBP</label> 
                     <input type="text" name="TextSBP_RCHD" id ="TextSBP_RCHD">
                    
                     
                       <span style="margin-left: 10px ; margin-top: 2px">
                     <input  type="text" style="   width: 50px ;background: #FFC3C3" name="TextPercent_RCHD" id ="TextPercent_RCHD">
                     <input type="text" style=" width: 50px ;background: #FFC3C3" name="TextTotal_RCHD" id ="TextTotal_RCHD">
                     
                     <input type="text" style=" width: 50px ;background: #b8ec79" name="NTextPercent_RCHD" id ="NTextPercent_RCHD">
                     <input type="text" style=" width: 50px ;background: #b8ec79" name="NTextTotal_RCHD" id ="NTextTotal_RCHD">
                     
                       </span>
                     
                     
                 </span>
               
            </div>
            
            <div class="AF">
                
                 <span style="text-align: center; background:#baec71;  display: inline-block ;width:150px;height: 30px; border-bottom: 1px ;border-color: #000;border-bottom-style: solid">
                  Atrial  Fibrillation
                 </span>
                 <span style="margin-left: 5px;margin-right: 2px; margin-top: 2px; width: 148px"> 
                     <label for="TextAge_AF">Age</label> 
                     <input type="text" name="TextAge_AF" id ="TextAge_AF">
                        <label for="TextBMI_AF">BMI</label> 
                     <input type="text" name="TextBMI_AF" id ="TextBMI_AF">
                     <label for="TextSBP_AF">SBP</label> 
                     <input type="text" name="TextSBP_AF" id ="TextSBP_AF">
                         <label for="TextPR_AF">PR</label> 
                     <input type="text" name="TextPR_AF" id ="TextPR_AF">
                      <label for="TextMurmur_AF">Murmur</label> 
                     <input type="text" name="TextMurmur_AF" id ="TextMurmur_AF">
                     <label for="TextHF_AF">HF</label> 
                     <input type="text" name="TextHF_AF" id ="TextHF_AF">
                     
                     
                      <label for="TextTreated_AF">Treat/Un</label> 
                     <input type="text" name="TextTreated_AF" id ="TextTreated_AF">
                    
                     
                       <span style="margin-left: 10px ; margin-top: 20px">
                     <input  type="text" style="   width: 50px ;background: #FFC3C3" name="TextPercent_AF" id ="TextPercent_AF">
                     <input type="text" style=" width: 50px ;background: #FFC3C3" name="TextTotal_AF" id ="TextTotal_AF">
                     
                     <input type="text" style=" width: 50px ;background: #b8ec79" name="NTextPercent_AF" id ="NTextPercent_AF">
                     <input type="text" style=" width: 50px ;background: #b8ec79" name="NTextTotal_AF" id ="NTextTotal_AF">
                     
                       </span>
                     
                     
                 </span>
                
            </div>
            
            <div class="IC">
                
                 <span style="text-align: center; background:#baec71;  display: inline-block ;width:150px;height: 30px; border-bottom: 1px ;border-color: #000;border-bottom-style: solid">
                      Intermittent Claudication(4Y)
                 </span>
                 <span style="margin-left: 5px;margin-right: 2px; margin-top: 2px; width: 148px"> 
                     <label for="TextAge_IC">Age</label> 
                     <input type="text" name="TextAge_IC" id ="TextAge_IC">
                        <label for="TextSex_IC">Sex</label> 
                     <input type="text" name="TextSex_IC" id ="TextSex_IC">
                    
                         <label for="TextSmoker_IC">Smoking(n)</label> 
                     <input type="text" name="TextSmoker_IC" id ="TextSmoker_IC">
                      <label for="TextCHO_IC">CHO</label> 
                     <input type="text" name="TextCHO_IC" id ="TextCHO_IC">
                      <label for="TextCVD_IC">CVD</label> 
                     <input type="text" name="TextCVD_IC" id ="TextCVD_IC">
                     <label for="TextSBP_IC">SBP</label> 
                     <input type="text" name="TextSBP_IC" id ="TextSBP_IC">
                     
                     
                      <label for="TextDiabet_IC">DIABET</label> 
                      <input type="text" name="TextDiabet_IC" id ="TextDiabet_IC">
                  
                    
                     
                       <span style="margin-left: 10px ; margin-top: 20px">
                     <input  type="text" style="   width: 50px ;background: #FFC3C3" name="TextPercent_IC" id ="TextPercent_IC">
                     <input type="text" style=" width: 50px ;background: #FFC3C3" name="TextTotal_IC" id ="TextTotal_IC">
                     
                     <input type="text" style=" width: 50px ;background: #b8ec79" name="NTextPercent_IC" id ="NTextPercent_IC">
                     <input type="text" style=" width: 50px ;background: #b8ec79" name="NTextTotal_IC" id ="NTextTotal_IC">
                     
                       </span>
                     
                     
                 </span>
                
            </div>
          
                   <textarea rows="15" style="width: 500px" id="Dieutri">Điều trị</textarea>
           </div>
            
        </div>
        
          <script type="text/javascript" >
			$(document).ready(function(e)
                        {	

var ma_benhnhan=0;
var id_benhnhan=0;

  $.get( "resource.php?module=web_services&function=create_panel1&id_benhnhan="+id_benhnhan+"&action=index", function( data ) {
    $( ".patient_info" ).html( data );

    $( ".patient_info" ).css("width", $( "#patient_info" ).width()+"css");  
    ma_benhnhan=$('.profile_container:nth-child(4)').text() ;
  
  });









				for(i=0;i<=keys.length-1;i++){
					if($("#"+keys[i]).attr('type')=="checkbox"){
						if(values[keys[i]]==1){				 	
							$("#"+keys[i]).prop("checked", true);		
						}			 
					}		
					if($("#"+keys[i]).attr('type') =="text"){		 			 	
							$("#"+keys[i]).val(values[keys[i]]);		 	 
					}		 
				}  
                                
                                 //Men TotalCVD và phầntrăm
			var TotalCVD=0;
                      //  $("#TextTotal_CVD").val(TotalCVD);
			$('.CVD-General-CardioVascular').find(':input[type=text]').each(function()
                                {	
				if((!isNaN(this.value))&&(this.value!="")){			 
						TotalCVD+=parseFloat(this.value);	
				}
			
			})
                       // $("#TextTotal_CVD").val(TotalCVD);
                          //console.log(sum)      
                              
			});
                        
                           $("#DO").click(
                                        function()
                                {
                                 alert("Bạn đã click vào button DO.");
                                
                               if ($('#Men').is(':checked')) {
                                   //NAM
                              
                        _egg_logo_guid()
                                } else {
                                     //NỮ
                                } 
                                
                                 
                                 }
                                                     ); 
                             $("#VIEW").click(
                                        function()
                                {
                                 alert("Bạn đã click vào button VIEW.");
                                 
                                 }
                                                     ); 
			
		</script>  
                
    </body>
</html>
