
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title> प्रास्ताविक</title>
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



</head>

<body>

<table width="888" border="0" align="center" cellpadding="0" cellspacing="0" id="wraper">
  <tr>
    <td>
			<img src="images/BG-Header2.jpg" width="100%" height="80%" /> 	 			
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
        <td><img src="images/BG-TopInnerContent.png" alt="" width="888" height="11" /></td>
      </tr>
      <tr>
        <td><table width="100%" border="0" cellspacing="0" cellpadding="0" id="innerContent">
          <tr>
            <td width="225" valign="top">
			  <table width="100%" border="0" cellspacing="0" cellpadding="0">
              
              <tr>
                <td height="8"></td>
              </tr>
              <tr>
                <td> 	          
                    
                </td>
              </tr>
              <tr>
                <td height="25"></td>
              </tr>
			  <tr>
			  <td>
			 
			  </td>

			  </tr>
			  <tr>

				<td align="center" colspan="2">
                <img src="images/11111111111.JPG" />			  
				</td>
			  </tr>
              <tr>
                 <td width="50">
			  
			  </td>

            <td valign="top">
			<center>
							<font color=black size="4"> मुख्य  प्रवर्तक व प्रमुख मार्गदर्शक : मा. श्री. रवींद्र खंडेराव डोईफोडे    </font> 	

</center>
             
			<img src="images\Prasthavi\prasthavi1.jpg" width="100%">
			<img src="images\Prasthavi\prasthavi2.jpg" width="100%">
			<img src="images\Prasthavi\prasthavi3.jpg" width="100%">
			<img src="images\Prasthavi\prasthavi4.jpg" width="100%">
			<img src="images\Prasthavi\prasthavi5.jpg" width="100%">
			<img src="images\Prasthavi\prasthavi6.jpg" width="100%">
			<img src="images\Prasthavi\prasthavi7.jpg" width="100%">
			<img src="images\Prasthavi\prasthavi8.jpg" width="100%">
			
			</td>
          </tr>
          <tr>
            <td height="12" valign="top" colspan="2"></td>
          </tr>
        </table></td>
      </tr>
      <tr>
        <td id="footer">
		<a href="index.php" class="">मुख्य पान</a> 
		<a href="aboutus.php">प्रास्ताविक</a>
		<a href="committee.php">समिती</a>
		<a href="gallery_Adsul_2011.php">छायाचित्रे</a>
		<a href="registration.php">सभासद नोंदणी</a></td>
      </tr>
    </table></td>
  </tr>
  <tr>
     <td height="25" class="bottom">copyright &copy; 2013 Samastha Doiphode. All rights reserved.</td>
  </tr>
</table>
</td>
</tr>
</table>
</body>
</html>
