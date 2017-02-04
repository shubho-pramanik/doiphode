
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title>समिती</title>

<script type="text/javascript" src="scripts/jquery.js"></script>

<script type="text/javascript" src="scripts/supersleight-min.js"></script>

<SCRIPT type="text/javascript" src="scripts/jquery.js"></SCRIPT>

<SCRIPT type=text/javascript>

<!--    //--><![CDATA[//><!--

    $(document).ready(function () {

        $("#root ul").each(function () { $(this).css("display", "none"); });

        $("#root .category").click(function () {

            var childid = "#" + $(this).attr("childid");

            if ($(childid).css("display") == "none") { $(childid).css("display", "block"); }

            else { $(childid).css("display", "none"); }

            if ($(this).hasClass("cat_close")) { $(this).removeClass("cat_close").addClass("cat_open"); }

            else { $(this).removeClass("cat_open").addClass("cat_close"); }

        });

    });

    //--><!]]>

</SCRIPT>



 



<link rel="stylesheet" type="text/css" href="styles/stylesheet.css" />

<link rel="stylesheet" type="text/css" href="styles/pde.css" />

<SCRIPT type="text/javascript" src="scripts/pde.js"></SCRIPT>

<Script Language="Javascript">

    var fontSize = 11;

    function zoomIn() {

        fontSize += 3;

        document.getElementById('storycontent').style.fontSize = fontSize + "px";

    }



    function zoomOut() {

        fontSize -= 3;

        document.getElementById('storycontent').style.fontSize = fontSize + "px";

    }

    function PrintContent() {

        var docContainer = document.getElementById('storycontent');

        var WindowObject = window.open();

        WindowObject.document.writeln(docContainer.innerHTML);

        WindowObject.document.close();

        WindowObject.focus();

        WindowObject.print();

        WindowObject.close();

    }



</Script>

<!--[if lte IE 6]>

<script type="text/javascript" src="js/supersleight-min.js"></script>

<![endif]-->








<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Gunas and Indriyas</title>

<script type="text/javascript" src="scripts/jquery.js"></script>
<script type="text/javascript" src="scripts/supersleight-min.js"></script>
<SCRIPT type="text/javascript" src="scripts/jquery.js"></SCRIPT>
<SCRIPT type=text/javascript>
<!--//--><![CDATA[//><!--
	$(document).ready(function() {
		$("#root ul").each(function() {$(this).css("display", "none");});
		$("#root .category").click(function() {
			var childid = "#" + $(this).attr("childid");
			if ($(childid).css("display") == "none") {$(childid).css("display", "block");}
			else {$(childid).css("display", "none");}
			if ($(this).hasClass("cat_close")) {$(this).removeClass("cat_close").addClass("cat_open");}
			else{$(this).removeClass("cat_open").addClass("cat_close");}
		});
	});
//--><!]]>
</SCRIPT>

 <script>

     function load() {



         document.getElementById('storycontent').style.display = 'inline';

         document.getElementById('Div1').style.display = 'none';

         document.getElementById('Div2').style.display = 'none';

         document.getElementById('Div3').style.display = 'none';

         document.getElementById('Div4').style.display = 'none';

         document.getElementById('Div5').style.display = 'none';

         document.getElementById('Div6').style.display = 'none';

         document.getElementById('Div7').style.display = 'none';

         

     }

</script>

<link rel="stylesheet" type="text/css" href="styles/stylesheet.css" />
<link rel="stylesheet" type="text/css" href="styles/pde.css" />
<SCRIPT type="text/javascript" src="scripts/pde.js"></SCRIPT>
<Script Language="Javascript">



 function hide(id)
   {
        if(id=='Li9')
        { 
            document.getElementById('storycontent').style.display  = 'inline';
             document.getElementById('Div1').style.display   = 'none';
              document.getElementById('Div2').style.display   = 'none';
               document.getElementById('Div3').style.display   = 'none';
                document.getElementById('Div4').style.display   = 'none';
                 document.getElementById('Div5').style.display   = 'none';
                  document.getElementById('Div6').style.display   = 'none';
             
             
             return false;
             
        }
        else if(id=='Li1')
        {
            document.getElementById('storycontent').style.display  = 'none';
             document.getElementById('Div1').style.display   = 'inline';
              document.getElementById('Div2').style.display   = 'none';
               document.getElementById('Div3').style.display   = 'none';
                document.getElementById('Div4').style.display   = 'none';
                 document.getElementById('Div5').style.display   = 'none';

                 document.getElementById('Div6').style.display = 'none';

                 document.getElementById('Div7').style.display = 'none';
               return false;
        }
        else if(id=='Li2')
        {
            document.getElementById('storycontent').style.display  = 'none';
             document.getElementById('Div1').style.display   = 'none';
              document.getElementById('Div2').style.display   = 'inline';
               document.getElementById('Div3').style.display   = 'none';
                document.getElementById('Div4').style.display   = 'none';
                 document.getElementById('Div5').style.display   = 'none';

                 document.getElementById('Div6').style.display = 'none';

                 document.getElementById('Div7').style.display = 'none';
               return false;
        }
        else if(id=='Li3')
        {
            document.getElementById('storycontent').style.display  = 'none';
             document.getElementById('Div1').style.display   = 'none';
              document.getElementById('Div2').style.display   = 'none';
               document.getElementById('Div3').style.display   = 'inline';
                document.getElementById('Div4').style.display   = 'none';
                 document.getElementById('Div5').style.display   = 'none';

                 document.getElementById('Div6').style.display = 'none';

                 document.getElementById('Div7').style.display = 'none';
               return false;
        }
        else if(id=='Li4')
        {
            document.getElementById('storycontent').style.display  = 'none';
             document.getElementById('Div1').style.display   = 'none';
              document.getElementById('Div2').style.display   = 'none';
               document.getElementById('Div3').style.display   = 'none';
                document.getElementById('Div4').style.display   = 'inline';
                 document.getElementById('Div5').style.display   = 'none';

                 document.getElementById('Div6').style.display = 'none';

                 document.getElementById('Div7').style.display = 'none';
               return false;
        }
        else if(id=='Li5')
        {
            document.getElementById('storycontent').style.display  = 'none';
             document.getElementById('Div1').style.display   = 'none';
              document.getElementById('Div2').style.display   = 'none';
               document.getElementById('Div3').style.display   = 'none';
                document.getElementById('Div4').style.display   = 'none';
                 document.getElementById('Div5').style.display   = 'inline';

                 document.getElementById('Div6').style.display = 'none';

                 document.getElementById('Div7').style.display = 'none';
               return false;
        }
        else if(id=='Li6')
        {
            document.getElementById('storycontent').style.display  = 'none';
             document.getElementById('Div1').style.display   = 'none';
              document.getElementById('Div2').style.display   = 'none';
               document.getElementById('Div3').style.display   = 'none';
                document.getElementById('Div4').style.display   = 'none';
                 document.getElementById('Div5').style.display   = 'none';

                 document.getElementById('Div6').style.display = 'inline';

                 document.getElementById('Div7').style.display = 'none';
               return false;

           }

           else if (id == 'Li7') {

               document.getElementById('storycontent').style.display = 'none';

               document.getElementById('Div1').style.display = 'none';

               document.getElementById('Div2').style.display = 'none';

               document.getElementById('Div3').style.display = 'none';

               document.getElementById('Div4').style.display = 'none';

               document.getElementById('Div5').style.display = 'none';

               document.getElementById('Div6').style.display = 'none';

               document.getElementById('Div7').style.display = 'inline';

               return false;

           }
        
   }
  


</Script>
<!--[if lte IE 6]>
<script type="text/javascript" src="js/supersleight-min.js"></script>
<![endif]-->
</head>

<body onload="load()">

<table width="888" border="0" align="center" cellpadding="0" cellspacing="0" id="wraper">
  <tr>

    <td>

			<img src="images/BG-Header2.jpg" alt="" width="100%" height="" /> 			

       </td>



  </tr>

  <tr>
        <td colspan="2"><img src="images/Menu-HLine.jpg" alt="" width="888" height="1" /></td>
        </tr>  
  <tr>

    <td><table width="100%" border="0" cellspacing="0" cellpadding="0">

      <tr>

        <td width="15"><img src="images/BG-MenuLeft.png" alt="" width="15" height="32" /></td>

       <td class="nav" align="center">

	<ul id="nav">
		<li style=" width:20%";><a href="index.php" class=""><font  color="white"   size="4">मुख्य पान</font></a></li>
		 <li class='line'><li style=" width:20%"; ><a href="aboutus.php"><font  color="white"   size="4">प्रास्ताविक</font></a></li>
		 <li class='line'><li style=" width:15%";><a href="committee.php"><font  color="white"   size="4">समिती</font></a></li>
		 <li class='line'><li style=" width:20%";><a href="gallery_Adsul_2011.php"><font  color="white"   size="4">छायाचित्रे</font></a></li>
		 <li class='line'><li style=" width:20%";><a href="registration.php"><font  color="white"   size="4">सभासद नोंदणी</font></a></li>
		
	</ul>

 </td>



        <td width="15"><img src="images/BG-MenuRight.png" alt="" width="15" height="32" /></td>

      </tr>

    </table></td>

  </tr>
  <tr>
    <td height="2"></td>
  </tr>
  
   
  <tr>
    <td height="4"></td>
  </tr>
  <tr>
    <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td><img src="images/BG-TopInnerContent.png" alt="" width="888" height="11" 
                style="margin-top: 0px" /></td>
      </tr>
      <tr>
        <td><table width="100%" border="0" cellspacing="0" cellpadding="0" id="innerContent">
          <tr>
            <td width="325" valign="top">
			  <table width="100%" border="0" cellspacing="0" cellpadding="0">

              <tr>

                <td></td>

              </tr>

              <tr>

                <td height="33"></td>

              </tr>

              <tr>

                <td> 	          

                    <table width='254'  style=" padding-top:245px;padding-left:50px"   border='0' align='center' cellpadding='0' cellspacing='0' id='leftNav'>

                                <tr>

                                    <td height='35' class='tittle' align="left"><font size="5">समिती </font></td>

                                </tr>

                                <tr>

                                    <td style="height:100px" align="left"><div id='MainNav' style="padding-left:5px">

                                    

<li id="li9" onclick="javascript:return hide('Li9')" > <a href=""><font  size="3">विश्वस्त  मंडळ</font></a></li>
<li id="Li1" onclick="javascript:return hide('Li1')" > <a href=""> <font  size="3">कार्यकारिणी</font> </a></li>
<li id="Li2" onclick="javascript:return hide('Li2')"> <a href=""><font  size="3">आरोग्य समिती</font></a></li>
<li id="Li3" onclick="javascript:return hide('Li3')"> <a href=" "><font  size="3">शालेय विद्यार्थी दत्तक योजना  समिती</font></a></li>
<li id="Li4" onclick="javascript:return hide('Li4')"> <a href=""><font  size="3">वधुवर सुचक मंडळ</font></a></li>
<li id="Li5" onclick="javascript:return hide('Li5')"> <a href=""><font  size="3"> यात्रा समिती</font></a></li>
<li id="Li6" onclick="javascript:return hide('Li6')"> <a href=""><font  size="3">धार्मिक समिती</font></a></li>
<li id="Li7" onclick="javascript:return hide('Li7')"> <a href=""><font  size="3">विभागवार प्रतिनिधी</font></a></li>





                                    </td>

                                </tr>

                                 <tr>

                                     <td><img src='images/bg-bottom-leftnav.png' alt='' width='204' height='7' /></td>

                                 </tr>

                            </table>

                </td>

              </tr>

              <tr>

                <td height="30"></td>

              </tr>

             

            </table>



		


			</td>
            <td valign="top">
			 <table width="98%" border="0" cellpadding="0" cellspacing="0">

              <tr>

                <td height="45" align="right" valign="top">



                <img src="images/11111111111.JPG" style=" float:left";/>

	</td></tr>

    <tr><td> <font color=black size="4"> मुख्य  प्रवर्तक व प्रमुख मार्गदर्शक : मा. श्री. रवींद्र खंडेराव डोईफोडे    </font> </td></tr>

              

             



              <tr>

                <td height="5" ></td>

              </tr>

              <tr>

                <td>


 			   <table width="100%" border="0" cellspacing="0" cellpadding="0" id="container">
                  <tr>
                    <td>
					<div id="storycontent">
					
                    
                  <p><div style="float:left; margin-right:5px;"></div><h2> विश्वस्त  मंडळ</h2><div style="text-align:justify;"></div><div style="text-align:justify;"><p>

                 <table border>



<tr><td>   श्री. आनंदराव जयसिंग डोईफोडे</td></tr>

<tr><td>   श्रीमती. देवकीबाई खंडेराव डोईफोडे </td></tr>

<tr><td>   श्री. उत्तमराव मारुती डोईफोडे</td></tr>

<tr><td>   श्री. प्रकाश जगन्नाथ  डोईफोडे</td></tr>

<tr><td>   श्री. विठ्ठलराव बापूराव डोईफोडे</td></tr>

<tr><td>   श्री. गणेश बाबा डोईफोडे</td></tr>

<tr><td>   श्री. उल्हासराव रामचंद्र डोईफोडे </td></tr>

<tr><td>   श्री. चंद्रकांत यदु डोईफोडे </td></tr>

<tr><td>   श्री. प्रकाश अमृतराज डोईफोडे </td></tr>

<tr><td>   श्री. अनिल नामदेव डोईफोडे </td></tr>

<tr><td>   श्री. किशोर एकनाथ डोईफोडे </td></tr>

<tr><td>   श्री. महेंद्र (मच्छिंद्र ) जिवराज डोईफोडे</td></tr>

</table>



</p></div><div style="text-align:justify;"></div></p>
								<div class="more" align="right">
								</div><br />
							</div>
							<div id="Div1">
					

                  <p><div style="float:left; margin-right:5px;"></div><h2>कार्यकारिणी</h2><div style="text-align:justify;"></div><div style="text-align:justify;"><p>

                  <table border>



<tr><td>   श्री. जिवराज दाजीराम डोईफोडे</td></tr>

<tr><td>  श्री. दयानंद सिताराम डोईफोडे</td></tr>

<tr><td>  श्री. अशोक गणपती डोईफोडे</td></tr>

<tr><td>  श्री. दिलीप आदिनाथ डोईफोडे </td></tr>

<tr><td>  श्री. ज्ञानेश्वर  रामचंद्र डोईफोडे </td></tr>

<tr><td>  श्री. दत्तात्रय कानोबा डोईफोडे </td></tr>

<tr><td>  श्री. अनिल आनंदराव डोईफोडे (लोणंदकर)</td></tr>

<tr><td>  श्री. मनोहर सिताराम डोईफोडे </td></tr>

<tr><td>  श्री. महादेव गोपाल डोईफोडे </td></tr>

<tr><td>  श्री. चंद्रकांत  अंबाजी डोईफोडे </td></tr>

<tr><td>  श्री. महेंद्र वसंतराव डोईफोडे</td></tr>

<tr><td>  श्री. शामराव एकनाथ डोईफोडे </td></tr>

</table>



</p></div>


</div><div style="text-align:justify;"></div></p>
								<div class="more" align="right">
								</div><br />
							</div>

                            <div id="Div2">
					
                    
                  <div style="float:left; margin-right:5px;"></div><h2 >आरोग्य समिती</h2><div style="text-align:center;"></div><div style="text-align:justify;">

        <table border>



<tr><td>अ.क्र </td><td>आरोग्य समिती प्रतिनिधी</td>     <td>दूरध्वनी क्रमांक</td>   </tr>

<tr><td>१ </td> <td>श्री.  रामदास महादेव डोईफोडे </td>   <td>९८९२६१०४१०</td>     </tr>

<tr><td>२  </td><td>डॉ.  श्री.साईनाथ डोईफोडे </td>        <td>९९७५५६२८३१</td>       </tr>

<tr><td>३  </td><td>श्री.  डॉ. महेश रामदास डोईफोडे</td>    <td>९८१९८४०५०७</td> </tr>

<tr><td>४  </td><td> श्री.  किरण पांडुरंग डोईफोडे </td>      <td>९८३३३८५८६६</td>  </tr>

<tr><td>५ </td> <td>श्री.  गणेश सावळाराम डोईफोडे  </td>   <td>९९६७००१५३९</td> </tr>

<tr><td>६  </td><td>श्री.  विजय तुकाराम डोईफोडे  </td>    <td>९८२०६१५२१२</td>   </tr>

<tr><td>७ </td><td>श्री.  संजय दशरथ डोईफोडे  </td>      <td>९८६९०८९८१६</td>    </tr>



</table>





</div>

<div style="text-align:justify;"></div></p>
								<div class="more" align="right">
								</div><br />
							</div>
                            <div id="Div3">
					

                  <p><div style="float:left; margin-right:5px;"></div>   <h2>शालेय विद्यार्थी दत्तक योजना  समिती </h2><div style="text-align:justify;"></div><div style="text-align:justify;"><p>

                

                 <table border>



<tr><td>अ.क्र.</td>  <td>       प्रतिनिधी     </td>                                      <td>      दूरध्वनी क्रमांक</td></tr>

<tr><td>१.  </td> <td>श्री उत्तमराव गोविंद डोईफोडे (लोणंदकर ) ,वसई </td>     <td>९५२१०-२३५२३२१</td>  </td></tr>

<tr><td>२. </td>   <td>श्री. अनिल आनंद डोईफोडे (लोणंदकर ) ,ट्रॉम्बे </td>            <td>२५५६४३६५/ ८०८२०४०४७१</td></td></tr>

<tr><td>३. </td>  <td>श्री. चंद्रशेखर बाळकृष्ण डोईफोडे  , पवई</td>                     <td>२५७०२६५६/ ९९२०४५३३०३/ ९८६९१०३८०३</td> </td></tr>

<tr><td>४.  </td> <td>श्री. प्रल्हाद बबन डोईफोडे , भांडूप</td>                               <td>९८३३७४४६०३</td>  </td></tr>

<tr><td>५.  </td> <td>श्री. विजय रामचंद्र डोईफोडे ,  धारावी </td>                          <td>९०२९६८६८५२</td>  </td></tr>

<tr><td>६.   </td> <td>श्री. अमित श्रीरंग डोईफोडे  ,  धारावी </td>                           <td>९३२४४४३३४३</td></td></tr>

<tr><td>७. </td>   <td>श्री. डॉ. विजय रामचंद्र डोईफोडे ,कोल्हापूर  </td>                     <td>३०९०६३२</td></td></tr>

<tr><td>८.   </td> <td>श्री. प्रशांत रामचंद्र डोईफोडे ,लोणंद</td>                             <td>९८८१९४६१०५</td> </td></tr>

<tr><td>९.  </td>  <td>श्री. प्रकाश  साहेबराव डोईफोडे  ,शिरवळ</td>                      <td></td></td></tr>

<tr><td>१०. </td> <td>श्री. संजय सदाशिव डोईफोडे      , कुलाबा </td>                    <td>२२१८६७१८</td></td></tr>

<tr><td>११.</td> <td> श्री. संतोष रामचंद्र डोईफोडे ,धारावी</td>                            <td>९९६७२०१२१५</td>  </td></tr>

<tr><td> </td></tr>

</table>





</p></div><div style="text-align:justify;"></div></p>
								<div class="more" align="right">
								</div><br />
							</div>
                            <div id="Div4">
					
                  
                  <p><div style="float:left; margin-right:5px;"></div> <h2>वधुवर सुचक मंडळ</h2><div style="text-align:justify;"></div><div style="text-align:justify;"><p>

                 <table border>



<tr><td>अ.क्र  </td><td>   वधुवर सूचक प्रतिनिधी </td><td>    दूरध्वनी क्रमांक</td></tr>

<tr><td>१. </td> <td>श्री. जिवराज दाजी डोईफोडे  </td>    <td>          २५९७६६८</td></tr>

<tr><td>२. </td> <td>श्री. चंद्रकांत यदु डोईफोडे    </td>   <td>              ९३२३२४६९२२</td></tr>

<tr><td>३. </td><td> श्री. उत्तमराव मारुती डोईफोडे   </td>  <td>        २४०३१९९९</td></tr>

<tr><td>४. </td><td>श्री. वसंतराव कुंडलिक डोईफोडे  </td>   <td>        २५७७५१३८</td></tr>

<tr><td>५.</td> <td> श्री. रामदास म्हाळू  डोईफोडे  </td>    <td>           २४०७६८९३</td></tr>

<tr><td>६.</td> <td>श्री. किसन सहदेव डोईफोडे    </td>     <td>           ९८७०७५६५४३/ ६५२७८२७६</td></tr>

<tr><td>७.</td> <td>श्री. दत्तू विष्णू डोईफोडे </td><td></td></tr>

<tr><td>८.</td> <td>श्री. रमेश दौलतराव डोईफोडे     </td>       <td>      ०२२-८४२४११९</td></tr>

<tr><td>९.</td> <td>श्री. अनुसया  जगन्नाथ  डोईफोडे (पुणे) </td><td>  २४३०१५२०</td></tr>

</table>



 </p></div><div style="text-align:justify;"></div></p>
								<div class="more" align="right">
								</div><br />
							</div>
                            <div id="Div5">
					
                    
                  <p><div style="float:left; margin-right:5px;"></div><h2>यात्रा समिती</h2><div style="text-align:justify;"></div><div style="text-align:justify;"><p>

                 <table border>



<tr><td>अ.क्र. </td><td>  यात्रा समिती प्रतिनिधी</td>    <td>दूरध्वनी क्रमांक</td></tr>

<tr><td>१. </td>  <td> श्री. गणेश लक्ष्मण  डोईफोडे </td>     <td> ९३२२६१७६२</td></tr>

<tr><td>२. </td> <td>  श्री मारुती बबन डोईफोडे  </td>            <td>९३२३०५८३५०</td></tr>

<tr><td>३. </td>  <td> श्री. बबनराव नारायण डोईफोडे</td><td></td></tr>

<tr><td>४. </td> <td>  श्री. प्रमोद शिवलिंग डोईफोडे </td>      <td> ९४२३८२७००३</td></tr>

<tr><td>५. </td> <td>  श्री. किशोर दगडू डोईफोडे  </td>         <td>  ९८९२५७४५९१</td></tr>

<tr><td>६.  </td> <td> श्री. संजय वामन डोईफोडे  </td>         <td> ९८६७८४७०३८</td></tr>

<tr><td>७. </td>  <td> श्री. गणेश भुजंग डोईफोडे  </td>         <td> ९८६००३७०१२</td></tr>

<tr><td>८.  </td> <td> श्री. सुनील पांडुरंग डोईफोडे  </td>       <td> ९२२१५८४२०८</td></tr>

<tr><td>९. </td>  <td> श्री. विष्णू दयाराम दोइफोए  </td>       <td>९७६८३८९७६५</td></tr>

<tr><td>१०. </td><td> श्री. राजू (कृषात) रघुनाथ डोईफोडे (कोल्हापूर )</td><td></td></tr>

<tr><td>११. </td> <td>श्री. श्रीरंग रामचंद्र डोईफोडे  </td>      <td>९८९२६५८६८९</td></tr>

</table>





</p></div><div style="text-align:justify;"></div></p>
								<div class="more" align="right">
								</div><br />
							</div>
                            <div id="Div6">
					
                    
                  <p><div style="float:left; margin-right:5px;"></div><h2>धार्मिक समिती</h2><div style="text-align:justify;"></div><div style="text-align:justify;"><p>

                 <table border>



<tr><td>अ.क्र. </td><td>  यात्रा समिती प्रतिनिधी</td>    <td>दूरध्वनी क्रमांक</td></tr>

<tr><td>१.  </td><td>    श्री. विष्णू दयाराम डोईफोडे    </td>    <td>       ९७६८३८९७६५</td></tr>

<tr><td>२.  </td><td>    श्री. मारुती भागोजी डोईफोडे  </td>    <td>        ७७३८४३७०२४</td></tr>

<tr><td>३.  </td><td>    श्री. अमित मनोहर डोईफोडे  </td>    <td>        ९८६७७५२३८९</td></tr>

<tr><td>४.  </td><td>    श्री. किशोर बाळकृष्ण डोईफोडे </td><td></td></tr>

<tr><td>५.  </td><td>    श्री. गणेश बन्सी डोईफोडे          </td>    <td>    ९८१९६०९७१०</td></tr>

<tr><td>६.  </td><td>    श्री. प्रकाश खंडोबा डोईफोडे        </td>    <td>    ९००४८६७२१९/ २५७०२०९४</td></tr>

<tr><td>७.  </td><td>    श्री. दिलीप नरहरी डोईफोडे        </td>    <td>    ९०२९६०८४७८ </td></tr>

</table>



</p></div>
<div style="text-align:justify;"></div></p>
								<div class="more" align="right">
								</div><br />
							</div>

                            <div id="Div7">
					
                    
                  <div style="float:left; margin-right:5px;"></div><h2 >विभागवार प्रतिनिधी</h2><div style="text-align:center;"></div><div style="text-align:justify;">

                  			  <table border>



<tr><td>अ.क्र</td><td>          विभाग      </td><td>                  विभाग प्रतिनिधीचे नाव     </td><td>                 दूरध्वनी क्रमांक</td></tr>

<tr><td>१.    </td> <td>           गिरगाव     </td><td>                   श्री. संजय भिकू डोईफोडे       </td><td>              ९००४१७६०२५</td></tr>

<tr><td>२.     </td>            <td></td>        <td>                            श्री विलास नाना डोईफोडे         </td><td>         ९०२९३१४२११/ ९१४६४८८८१३</td></tr>



<tr><td>३.     </td>        <td> वरळी  </td>                       <td> श्री. महादेव दत्तू डोईफोडे   </td>            <td> ९६६४०१७६२५</td> 

<tr><td>४.        <td>    दादर     </td>                        <td>  श्री रमेश सयाजी डोईफोडे    </td>              <td>  ९८६७२७५२७५/ २४३६६८११</td>  

 <tr> <td></td>   <td></td>                                               <td> श्री विलास नाना डोईफोडे </td>                <td> ९०२९३१४२११/ ९१४६४८८८१३</td> 





<tr><td>५.    </td><td>          धारावी/ सायन   </td><td>            श्री. सुनील पांडुरंग डोईफोडे        </td><td>         ९२२१५८४२०८</td></tr>

<tr><td>       </td>         <td></td>         <td>                          श्री. रवींद्र म्हस्कू डोईफोडे         </td><td>          ९८२१७५९८०१/ ९८६९३२६७४४</td></tr>

<tr><td>      </td>           <td></td>          <td>                          श्री. संजय वामन डोईफोडे         </td><td>          ९८६७८४७०३८</td></tr>

<tr><td>      </td>              <td></td>         <td>                        श्री. राजू वामन डोईफोडे           </td><td>          ९८१९३९६६९१</td></tr>

<tr><td>      </td>              <td></td>           <td>                      श्री. दिपक लक्ष्मण  डोईफोडे        </td><td>        ९२२०८७८४७१</td></tr>

<tr><td>६.     </td><td>          अन्टोप हिल/ वडाळा </td><td>     श्री. महेश दशरथ डोईफोडे                 </td><td>  ९१७२३८५८२४</td></tr>

<tr><td>७.     </td><td>          कुर्ला         </td><td>                    श्री. सुरेश रामचंद्र डोईफोडे       </td><td>            ९८६९८०१५०८/ २५२२९२१७</td></tr>

<tr><td>        </td>          <td></td>     <td>                                  श्री. मिलींद माणिक डोईफोडे           </td><td>     ९८६७६५५८१९</td></tr>

<tr><td>        </td>         <td></td>       <td>                                श्री. राजेश श्यामराव डोईफोडे           </td><td>   ९८१९०७४९७६/ ९७६८७८४०६८</td></tr>

<tr><td>        </td>           <td></td>      <td>                                श्री. संजय वामन डोईफोडे             </td><td>       ९८६७५०४४००</td></tr>

<tr><td>८.      </td><td>         चेंबूर           </td><td>                  श्री. गणेश किसन डोईफोडे          </td><td>        २४७११८२५/ २६</td></tr>

<tr><td>        </td>         <td></td>        <td>                               श्री. सुनील दत्तू डोईफोडे                 </td><td>   ९८२०८८७९९५</td></tr>

<tr><td>        </td>          <td></td>        <td>                               श्री. संतोष गोरख डोईफोडे               </td><td>   ९१४६४९३०७१</td></tr>

<tr><td>९.     </td><td>         बांद्रा           </td><td>                  श्री. प्रशांत संभाजी डोईफोडे         </td><td>       ९७६८९३२८८५/ ९८७०८५२४४२</td></tr>

<tr><td>१०.      </td><td>       अंधेरी            </td><td>              श्री मधुकर मारुठी डोईफोडे              </td><td>   ९८६९२७८०४३/ ८६५५१६१०५२</td></tr>

<tr><td>११.     </td><td>        विलेपार्ले          </td><td>            श्री. दिलीप भगवान डोईफोडे            </td><td>  ९३२२२५०३५६</td></tr>

<tr><td>१२.     </td><td>        सांताक्रूझ          </td><td>          श्री. संजय पिराजी डोईफोडे               </td><td> ९८३३८१५५४८</td></tr>

<tr><td>१३.     </td><td>        गोरेगाव           </td><td>           श्री. किसन भिकू डोईफोडे               </td><td>   ९३२२५१०५३०</td></tr>

<tr><td>        </td>           <td></td>        <td>                           श्री. दिपक धर्माजी डोईफोडे              </td><td>  ९७६९१२५३६३</td></tr>

<tr><td>१४.     </td><td>        बोरीवली           </td><td>          श्री. प्रमोद गेनू डोईफोडे                  </td><td>   ९७६९१२५३६३</td></tr>

<tr><td>        </td>            <td></td>        <td>                           श्री. आनंद डोईफोडे                      </td><td>    ९८६७४६०६३५</td></tr>

<tr><td>१५.     </td><td>        वसई              </td><td>            श्री. महादेव गोपाळ डोईफोडे            </td><td> ९५२५०-२३०९१८८/ ९१६७७९१००७</td></tr>

<tr><td>        </td>            <td></td>        <td>                          श्री. मारुती भागोजी डोईफोडे          </td><td>  ७७३८४३७०२४</td></tr>

<tr><td>१६.     </td><td>        नालासोपारा          </td><td>     श्री. गणेश डोईफोडे                       </td><td>    ९८९२७२९०५०</td></tr>

<tr><td>१७.     </td><td>        विरार               </td><td>         श्री. गणेश मोरू डोईफोडे              </td><td>      ०७३५०४२५५२६</td></tr>

<tr><td>१८.     </td><td>        घाटकोपर             </td><td>     श्री. नंदकुमार यदु डोईफोडे              </td><td>  ९३२४००२६३६</td></tr>

<tr><td>१९.     </td><td>       विक्रोळी             </td><td>        श्री. रवींद्र जिवराज डोईफोडे            </td><td>  ९३२१०३३५२१</td></tr>

<tr><td>२०.     </td><td>        पवई                </td><td>           श्री. विष्णू दयाराम डोईफोडे         </td><td>    ९७६८३८९७६५</td></tr>

<tr><td>२१.      </td><td>       भांडूप                </td><td>         श्री. किरण पांडुरंग डोईफोडे            </td><td>  ९८३३३५८५६६</td></tr>

<tr><td>        </td>            <td></td>          <td>                      श्री. प्रभाकर वसंत डोईफोडे              </td><td> ९८६९००१४८२</td></tr>

<tr><td>२२.     </td><td>        ठाणे                  </td><td>        श्री. शिवाजी सिताराम डोईफोडे       </td><td>  ९८२१२३४२९६</td></tr>

<tr><td>        </td>            <td></td>           <td>                     श्री. दिपक गुलाबराव डोईफोडे           </td><td> ९९६७५८५१६६/ २५४१४५२६</td></tr>

<tr><td>२३.    </td><td>        डोंबिवली               </td><td>    श्री संतोष गणपत डोईफोडे             </td><td>  ९८६९३२४२९७/ ९८७००९३६८८</td></tr>

<tr><td>२४.     </td><td>       कल्याण                </td><td>    श्री सुनील राघु डोईफोडे                 </td><td>   ९८७०१६००५३/ ९८७०२९८८१९</td></tr>

<tr><td>         </td>             <td></td>           <td>                    श्री. पंकज संपत डोईफोडे               </td><td>  ८९७६२७०१२७</td></tr>

<tr><td>         </td>             <td></td>            <td>                  श्री. सागर डोईफोडे                          </td><td> ८२९१२२३९५०</td></tr>

<tr><td>         </td>             <td></td>              <td>                श्री. महेश दयाराम डोईफोडे</td></tr>

<tr><td>२५.      </td><td>       बदलापूर          </td><td>        श्री. विजय हिराजी डोईफोडे             </td><td>  ०९८९२१७५२२५</td></tr>

<tr><td>२६.      </td><td>       उल्हासनगर        </td><td>     श्री. दिपक गणेश डोईफोडे</td></tr>

<tr><td>२७.       </td><td>      सानपाडा           </td><td>      श्री. अमित मनोहर डोईफोडे             </td><td>  ९८६७७५२३८९</td></tr>

<tr><td>२८.       </td><td>      कोपरखैराणे         </td><td>   श्री. रोहिदास लक्ष्मण डोईफोडे           </td><td> ९३२४०७६१५७/ ९७०२७७७४११</td></tr>

<tr><td>२९.       </td><td>      नेरूळ             </td><td>        श्री. विनायक गणपत डोईफोडे         </td><td>   ९२२४४१७६५०/ २७७०८५०१</td></tr>

<tr><td>३०.       </td><td>      माथेरान            </td><td>      श्री विशाल रत्नाकर डोईफोडे            </td><td> ०२१४८२३०५७८</td></tr>

<tr><td>३१.       </td><td>      पुणे                 </td><td>       श्री. भिकू सिताराम डोईफोडे             </td><td>  ०२०२४३३२४१०</td></tr>

<tr><td>          </td>           <td></td>      <td>                       श्री. दत्तात्रय हिराजी डोईफोडे            </td><td> ९५०३८५२१३४</td></tr>

<tr><td>         </td>            <td></td>      <td>                     श्री. नितीन विनायक डोईफोडे          </td><td>  ९५०३८५२१३४</td></tr>

<tr><td>३२.       </td><td>      लोणंद               </td><td>    श्री. शिवाजी हरिभाऊ डोईफोडे         </td><td>    ९९६०३३८८३४</td></tr>

<tr><td>           </td>            <td></td>       <td>                    श्री. प्रमोद रामचंद्र डोईफोडे              </td><td>   ९८८१९४६१०५</td></tr>

<tr><td>           </td>             <td></td>      <td>                    श्री. गणेश भागवत डोईफोडे             </td><td>   ९५९५८०४२१६</td></tr>

<tr><td>३३.        </td><td>     शिरवळ              </td><td>  श्री. अमोल रघुनाथ डोईफोडे            </td><td>    ०२१६९२४४१८४</td></tr>

<tr><td>           </td>             <td></td>      <td>                  श्री. सतीश अमृता डोईफोडे               </td><td>   ०२१६९२४४७६०</td></tr>

<tr><td>३४.       </td><td>      सूखेड               </td><td>     श्री. रमेश लक्ष्मण  डोईफोडे             </td><td>    ०२१६९२६८२७०/ ९७६७१२५२२४</td></tr>

<tr><td>३५.       </td><td>      अंदोरी              </td><td>     श्री एकनाथ गणपत डोईफोडे             </td><td>   ०२१६९२६८२७०</td></tr>

<tr><td>३६.       </td><td>      पिंपरे  खुर्द          </td><td>   श्री. प्रकाश आनंदराव डोईफोडे             </td><td> ०२११५२४२४२२</td></tr>

<tr><td>३७.       </td><td>      पिंपरे बुद्रुक         </td><td>  श्री. धनाजी डोईफोडे                           </td><td>   ९५५२१०४६७१</td></tr>

<tr><td>३८.        </td><td>     बावकल वाडी        </td><td> श्री. महादेव बापूराव डोईफोडे               </td><td>  ९६३७५३२३१९</td></tr>

<tr><td>३९.        </td><td>     मांडकी               </td><td>    श्री. अशोक वसंत डोईफोडे              </td><td>       ९७०२६७८६३५</td></tr>

<tr><td>           </td>               <td></td>     <td>                    श्री. कुंडलिक शिवराम डोईफोडे            </td><td>  ९५५२०९९३५०</td></tr>

<tr><td>४०.        </td><td>     बारामती              </td><td>  श्री. रामदास शंकरराव डोईफोडे           </td><td>   ०२११२२१८६३</td></tr>

<tr><td>४१.         </td><td>    नाशिक               </td><td>   श्री. शलेन्द्र कारभारी डोईफोडे            </td><td>   ०९८९०२२९९१०</td></tr>

<tr><td>४२.         </td><td>    कुरबाबी             </td><td>    श्री. गोरख नेमचंद डोईफोडे                 </td><td>  ०२११७२७२०७२/७३</td></tr>

<tr><td>            </td>              <td></td>     <td>                  श्री. विजय बाळासाहेब डोईफोडे             </td><td> ९२२४४१७६५०/ २७७०८५०१</td></tr>

<tr><td>४३.         </td><td>    कोल्हापूर             </td><td>  श्री. अजय दत्तात्रय डोईफोडे                </td><td>  ९४२२४२१४००</td></tr>

<tr><td>             </td>              <td></td>     <td>                  श्री. अरुण रघुनाथ डोईफोडे                 </td><td>  ५६१३१६४</td></tr>

</table>




					</td>
							
                  </tr>
                </table></td>
              </tr>
              </table>
			</td>
          </tr>
          <tr>
            <td height="12" valign="top" colspan="2"></td>
          </tr>
        </table></td>
      </tr>
     <tr>

        <td id="footer"><a href="index.php" class="">मुख्य पान</a> <a href="aboutus.php">प्रास्ताविक</a><a href="committee.php">मंडळ</a><a href="gallery_Adsul_2011.php">छायाचित्रे</a><a href="registration.php">नोंदणी</a></td>



      </tr>
    </table></td>
  </tr>
  <tr>
    <td height="25" class="bottom">copyright &copy; 2013 Samastha Doiphode. All rights reserved.</td>
  </tr>
</table>
</body>


<!-- Mirrored from www.sivanandaonline.org/public_html/?cmd=displaysection&section_id=1163&parent=636&format=html by HTTrack Website Copier/3.x [XR&CO'2010], Wed, 21 Nov 2012 09:44:24 GMT -->

</html>
