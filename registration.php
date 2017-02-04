

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">



<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title>Registration</title>

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

function PrintContent()

{

   var docContainer = document.getElementById('storycontent');

   var WindowObject = window.open ();

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



<script type="text/javascript">

function checkValue() {

        var linkemail=document.forms["registration"]["en"].checked

        if (linkemail) {

                document.getElementById('xtraInfo').style.display='';

        } else {

                document.getElementById('xtraInfo').style.display='none';

        }       

}    



</script>





</head>



<body>



<table width="888" border="0" align="center" cellpadding="0" cellspacing="0" id="wraper">

  <tr>

    <td>

			<img src="images/BG-Header2.jpg" alt="" width="100%" height="80%" /> 			

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

                 <td width="50">

			  

			  </td>

            <td valign="top">

			 <table width="98%" border="0" cellpadding="0" cellspacing="0">

            

              



              <tr>

                <td height="5" ></td>

              </tr>

              <tr>

			 

                <td>



 			   <table style=" width="100%" border="0" cellspacing="0" cellpadding="0" id="container">

                  <tr>

                    <td>

					<div id="storycontent">

					

                    <strong><h1 style="text-align:center;"><font size="5"> सभासद नोंदणी</font></h1></strong>

					

				<div>

				<form name='registration' method="post" action="send_form_email.php">  

					<table>

						<tr>

							<td>

								सभासदाचे संपूर्ण नाव 

							</td>

							<td>

								<input type="text" name="username" size="50" />

							</td>

							<td>

								जन्मतारीख

							</td>

							<td>

								<input type="text" name="dob" size="50" />

							</td>

						</tr>

						<tr>

							<td>

								वय

							</td>

							<td>

								<input type="text" name="age" size="50" />

							</td>

							<td>

								ई - मेल आय.डी

							</td>

							<td>

								<input type="text" name="email" size="50" />

							</td>

						

						</tr>



						<tr>

							<td>

								सध्याचा राहण्याचा (संपूर्ण पत्ता) 

							</td>

							<td>

								<textarea type="text" name="address" rows="3" cols="39"></textarea>

							</td>

							<td>

								मोबाईल / फोन क्रं.

							</td>

							<td>

								<input type="text" name="mobile" size="50" />

							</td>

							

						</tr>



						<tr>

							<td>

								मुळ गांव (संपूर्ण पत्ता) :-

							</td>

							<td>

							<textarea type="text" name="address1" rows="3" cols="39"></textarea>

							

							</td>

							<td>

								मोबाईल / फोन क्रं.

							</td>

							<td>

								<input type="text" name="mobile1" size="50" />

							</td>

						</tr>



						<tr>

							<td>

								व्यवसाय नोकरी चा संपूर्ण पत्ता

							</td>

							<td>

							<textarea type="text" name="address2" rows="3" cols="39"></textarea>

							

							</td>

							<td>

								मोबाईल / फोन क्रं

							</td>

							<td>

								<input type="text" name="mobile2" size="50" />

							</td>

						</tr>



					</table>

					<table >

						<tr>

														<th>

																अ.क्र.

															</th>

															<th>

																नाव

															</th>

															<th>

																नाते

															</th>

															<th>

																जन्म तारीख

															</th>

															<th>

																शिक्षण

															</th>

															<th>

																व्यवसाय

															</th>

															<th>

																मो.क्रं. फोन

															</th>

															<th>

																रक्तगट 

															</th>

															

															

														</tr>

														<tr>

															<td>

																<label>1:</label>

															</td>

															<td>

																<input type="text" name="name1" size="10"/>

															</td>

															<td>

																<input type="text" name="relation1" size="10"/>

															</td>

															<td>

																<input type="text" name="dob1" size="10"/>

															</td>

															<td>

																<input type="text" name="edu1" size="10" />

															</td>

															<td>

																<input type="text" name="service1" size="10"/>

															</td>

															<td>

																<input type="text" name="tel1" size="10"/>

															</td>

															<td>

																<input type="text" name="bloodrel1" size="10"/>

															</td>

														</tr>

														<tr>

															<td>

																<label>2:</label>

															</td>

															<td>

																<input type="text" name="name2" size="10"/>

															</td>

															<td>

																<input type="text" name="relation2" size="10"/>

															</td>

															<td>

																<input type="text" name="dob2" size="10"/>

															</td>

															<td>

																<input type="text" name="edu2" size="10"/>

															</td>

															<td>

																<input type="text" name="service2" size="10"/>

															</td>

															<td>

																<input type="text" name="tel2" size="10"/>

															</td>

															<td>

																<input type="text" name="bloodrel2" size="10"/>

															</td>

														</tr>

														<tr>

															<td>

																<label>3:</label>

															</td>

															<td>

																<input type="text" name="name3" size="10"/>

															</td>

															<td>

																<input type="text" name="relation3" size="10"/>

															</td>

															<td>

																<input type="text" name="dob3" size="10"/>

															</td>

															<td>

																<input type="text" name="edu3" size="10"/>

															</td>

															<td>

																<input type="text" name="service3" size="10"/>

															</td>

															<td>

																<input type="text" name="tel3" size="10"/>

															</td>

															<td>

																<input type="text" name="bloodrel3" size="10"/>

															</td>

														</tr>

														<tr>

															<td>

																<label>4:</label>

															</td>

															<td>

																<input type="text" name="name4" size="10"/>

															</td>

															<td>

																<input type="text" name="relation4" size="10"/>

															</td>

															<td>

																<input type="text" name="dob4" size="10"/>

															</td>

															<td>

																<input type="text" name="edu4" size="10"/>

															</td>

															<td>

																<input type="text" name="service4" size="10"/>

															</td>

															<td>

																<input type="text" name="tel4" size="10"/>

															</td>

															<td>

																<input type="text" name="bloodrel4" size="10"/>

															</td>

														</tr>

														

														<tr>

															<td>

																<label>5:</label>

															</td>

															<td>

																<input type="text" name="name5" size="10"/>

															</td>

															<td>

																<input type="text" name="relation5" size="10"/>

															</td>

															<td>

																<input type="text" name="dob5" size="10" />

															</td>

															<td>

																<input type="text" name="edu5" size="10"/>

															</td>

															<td>

																<input type="text" name="service5" size="10"/>

															</td>

															<td>

																<input type="text" name="tel5" size="10"/>

															</td>

															<td>

																<input type="text" name="bloodrel5" size="10"/>

															</td>

														</tr>

														

														<tr>

															<td>

																<label>6:</label>

															</td>

															<td>

																<input type="text" name="name6" size="10"/>

															</td>

															<td>

																<input type="text" name="relation6" size="10"/>

															</td>

															<td>

																<input type="text" name="dob6" size="10"/>

															</td>

															<td>

																<input type="text" name="edu6" size="10"/>

															</td>

															<td>

																<input type="text" name="service6" size="10"/>

															</td>

															<td>

																<input type="text" name="tel6" size="10"/>

															</td>

															<td>

																<input type="text" name="bloodrel6" size="10"/>

															</td>

														</tr>

														

														<tr>

															<td>

																<label>7:</label>

															</td>

															<td>

																<input type="text" name="name7" size="10"/>

															</td>

															<td>

																<input type="text" name="relation7" size="10"/>

															</td>

															<td>

																<input type="text" name="dob7" size="10"/>

															</td>

															<td>

																<input type="text" name="edu7" size="10"/>

															</td>

															<td>

																<input type="text" name="service7" size="10" />

															</td>

															<td>

																<input type="text" name="tel7" size="10"/>

															</td>

															<td>

																<input type="text" name="bloodrel7" size="10"/>

															</td>

														</tr>

														

														<tr>

															<td>

																<label>8:</label>

															</td>

															<td>

																<input type="text" name="name8" size="10"/>

															</td>

															<td>

																<input type="text" name="relation8" size="10"/>

															</td>

															<td>

																<input type="text" name="dob8" size="10"/>

															</td>

															<td>

																<input type="text" name="edu8" size="10"/>

															</td>

															<td>

																<input type="text" name="service8" size="10"/>

															</td>

															<td>

																<input type="text" name="tel8" size="10"/>

															</td>

															<td>

																<input type="text" name="bloodrel8" size="10"/>

															</td>

														</tr>

														</table>

														<table>

														<tr>

															<td>

																कुटूबांसदर्भात विशेष माहिती :-

															</td>

															<td colspan="3">

																<textarea name="desc" id="desc" cols="55" rows="3"></textarea>

															</td>

														</tr>

														</table>

														

																												

														<table>

														

														<tr>

														

														<td colspan="7"><font size="4">

														सभासदांच्या विवाहित आत्या</font>

														</td>

														</tr>

														<tr>

															

															<th>

																नाव

															</th>

															<th>

																पतीचे संपूर्ण नाव 

															</th>

															<th>

																सध्याचा पत्ता

															</th>

															<th>

																व्यवसाय/ नोकरी

															</th>

															<th>

																मुळ गांव

															</th>

															<th>

																मो. फोन

															</th>

															<th>

																ईमेल

															</th>

															

														</tr>

														<tr>

															<td>

																<input type="text" name="Mname1" size="10"/>

															</td>

															<td>

																<input type="text" name="Mhusname1" size="10"/>

															</td>

															<td>

																<input type="text" name="Madd1" size="10"/>

															</td>

															<td>

																<input type="text" name="Mservice1" size="10"/>

															</td>

															<td>

																<input type="text" name="Mnaddress1" size="10"/>

															</td>

															<td>

																<input type="text" name="Mtel1" size="10" />

															</td>

															<td>

																<input type="text" name="Memail1" size="10"/>

															</td>

														</tr>

														<tr>

															<td>

																<input type="text" name="Mname2" size="10"/>

															</td>

															<td>

																<input type="text" name="Mhusname2" size="10"/>

															</td>

															<td>

																<input type="text" name="Madd2" size="10"/>

															</td>

															<td>

																<input type="text" name="Mservice2" size="10"/>

															</td>

															<td>

																<input type="text" name="Mnaddress2" size="10"/>

															</td>

															<td>

																<input type="text" name="Mtel2" size="10"/>

															</td>

															<td>

																<input type="text" name="Memail2" size="10"/>

															</td>

														</tr>

														<tr>

															<td>

																<input type="text" name="Mname3" size="10"/>

															</td>

															<td>

																<input type="text" name="Mhusname3" size="10"/>

															</td>

															<td>

																<input type="text" name="Madd3" size="10"/>

															</td>

															<td>

																<input type="text" name="Mservice3" size="10"/>

															</td>

															<td>

																<input type="text" name="Mnaddress3" size="10"/>

															</td>

															<td>

																<input type="text" name="Mtel3" size="10"/>

															</td>

															<td>

																<input type="text" name="Memail3" size="10"/>

															</td>

														</tr>

														<tr>

															<td>

																<input type="text" name="Mname4" size="10"/>

															</td>

															<td>

																<input type="text" name="Mhusname4" size="10"/>

															</td>

															<td>

																<input type="text" name="Madd4" size="10"/>

															</td>

															<td>

																<input type="text" name="Mservice4" size="10"/>

															</td>

															<td>

																<input type="text" name="Mnaddress4" size="10"/>

															</td>

															<td>

																<input type="text" name="Mtel4" size="10"/>

															</td>

															<td>

																<input type="text" name="Memail4" size="10"/>

															</td>

														</tr>

														

														<tr>

															<td>

																<input type="text" name="Mname5" size="10"/>

															</td>

															<td>

																<input type="text" name="Mhusname5" size="10"/>

															</td>

															<td>

																<input type="text" name="Madd5" size="10"/>

															</td>

															<td>

																<input type="text" name="Mservice5" size="10"/>

															</td>

															<td>

																<input type="text" name="Mnaddress5" size="10"/>

															</td>

															<td>

																<input type="text" name="Mtel5" size="10"/>

															</td>

															<td>

																<input type="text" name="Memail5" size="10"/>

															</td>

														</tr>

														

														</table>

														

														

															<table>

														

														<tr>

														

														<td colspan="7"><font size="4">

														सभासदांच्या विवाहित बहिणी</font>

														</td>

														</tr>

														<tr>

															

															<th>

																नाव

															</th>

															<th>

																पतीचे संपूर्ण नाव 

															</th>

															<th>

																सध्याचा पत्ता

															</th>

															<th>

																व्यवसाय/ नोकरी

															</th>

															<th>

																मुळ गांव

															</th>

															<th>

																मो. फोन

															</th>

															<th>

																ईमेल

															</th>

															

														</tr>

														<tr>

															<td>

																<input type="text" name="Nname1" size="10"/>

															</td>

															<td>

																<input type="text" name="Nhusname1" size="10"/>

															</td>

															<td>

																<input type="text" name="Nadd1" size="10"/>

															</td>

															<td>

																<input type="text" name="Nservice1" size="10"/>

															</td>

															<td>

																<input type="text" name="Nnaddress1" size="10"/>

															</td>

															<td>

																<input type="text" name="Ntel1" size="10"/>

															</td>

															<td>

																<input type="text" name="Nemail1" size="10"/>

															</td>

														</tr>

														<tr>

															<td>

																<input type="text" name="Nname2" size="10"/>

															</td>

															<td>

																<input type="text" name="Nhusname2" size="10"/>

															</td>

															<td>

																<input type="text" name="Nadd2" size="10"/>

															</td>

															<td>

																<input type="text" name="Nservice2" size="10"/>

															</td>

															<td>

																<input type="text" name="Nnaddress2" size="10"/>

															</td>

															<td>

																<input type="text" name="Ntel2" size="10"/>

															</td>

															<td>

																<input type="text" name="Nemail2" size="10"/>

															</td>

														</tr>

														<tr>

															<td>

																<input type="text" name="Nname3" size="10"/>

															</td>

															<td>

																<input type="text" name="Nhusname3" size="10"/>

															</td>

															<td>

																<input type="text" name="Nadd3" size="10"/>

															</td>

															<td>

																<input type="text" name="Nservice3" size="10"/>

															</td>

															<td>

																<input type="text" name="Nnaddress3" size="10"/>

															</td>

															<td>

																<input type="text" name="Ntel3" size="10"/>

															</td>

															<td>

																<input type="text" name="Nemail3" size="10"/>

															</td>

														</tr>

														<tr>

															<td>

																<input type="text" name="Nname4" size="10"/>

															</td>

															<td>

																<input type="text" name="Nhusname4" size="10"/>

															</td>

															<td>

																<input type="text" name="Nadd4" size="10"/>

															</td>

															<td>

																<input type="text" name="Nservice4" size="10"/>

															</td>

															<td>

																<input type="text" name="Nnaddress4" size="10"/>

															</td>

															<td>

																<input type="text" name="Ntel4" size="10"/>

															</td>

															<td>

																<input type="text" name="Nemail4" size="10"/>

															</td>

														</tr>

														

														<tr>

															<td>

																<input type="text" name="Nname5" size="10"/>

															</td>

															<td>

																<input type="text" name="Nhusname5" size="10"/>

															</td>

															<td>

																<input type="text" name="Nadd5" size="10"/>

															</td>

															<td>

																<input type="text" name="Nservice5" size="10"/>

															</td>

															<td>

																<input type="text" name="Nnaddress5" size="10"/>

															</td>

															<td>

																<input type="text" name="Ntel5" size="10"/>

															</td>

															<td>

																<input type="text" name="Nemail5" size="10"/>

															</td>

														</tr>

														

														</table>

														

														

														

														

														<table>

														

														<tr>

														

														<td colspan="7"><font size="4">

														सभासदांच्या विवाहित मुली</font>

														</td>

														</tr>

														<tr>

															

															<th>

																नाव

															</th>

															<th>

																पतीचे संपूर्ण नाव 

															</th>

															<th>

																सध्याचा पत्ता

															</th>

															<th>

																व्यवसाय/ नोकरी

															</th>

															<th>

																मुळ गांव

															</th>

															<th>

																मो. फोन

															</th>

															<th>

																ईमेल

															</th>

															

														</tr>

														<tr>

															<td>

																<input type="text" name="Oname1" size="10"/>

															</td>

															<td>

																<input type="text" name="Ohusname1" size="10"/>

															</td>

															<td>

																<input type="text" name="Oadd1" size="10"/>

															</td>

															<td>

																<input type="text" name="Oservice1" size="10"/>

															</td>

															<td>

																<input type="text" name="Onaddress1" size="10"/>

															</td>

															<td>

																<input type="text" name="Otel1" size="10"/>

															</td>

															<td>

																<input type="text" name="Oemail1" size="10"/>

															</td>

														</tr>

														<tr>

															<td>

																<input type="text" name="Oname2" size="10"/>

															</td>

															<td>

																<input type="text" name="Ohusname2" size="10"/>

															</td>

															<td>

																<input type="text" name="Oadd2" size="10"/>

															</td>

															<td>

																<input type="text" name="Oservice2" size="10"/>

															</td>

															<td>

																<input type="text" name="Onaddress2"size="10" />

															</td>

															<td>

																<input type="text" name="Otel2" size="10"/>

															</td>

															<td>

																<input type="text" name="Oemail2" size="10"/>

															</td>

														</tr>

														<tr>

															<td>

																<input type="text" name="Oname3" size="10"/>

															</td>

															<td>

																<input type="text" name="Ohusname3" size="10"/>

															</td>

															<td>

																<input type="text" name="Oadd3" size="10"/>

															</td>

															<td>

																<input type="text" name="Oservice3" size="10"/>

															</td>

															<td>

																<input type="text" name="Onaddress3" size="10"/>

															</td>

															<td>

																<input type="text" name="Otel3" size="10"/>

															</td>

															<td>

																<input type="text" name="Oemail3" size="10"/>

															</td>

														</tr>

														<tr>

															<td>

																<input type="text" name="Oname4" size="10"/>

															</td>

															<td>

																<input type="text" name="Ohusname4" size="10"/>

															</td>

															<td>

																<input type="text" name="Oadd4" size="10"/>

															</td>

															<td>

																<input type="text" name="Oservice4" size="10"/>

															</td>

															<td>

																<input type="text" name="Onaddress4" size="10"/>

															</td>

															<td>

																<input type="text" name="Otel4" size="10"/>

															</td>

															<td>

																<input type="text" name="Oemail4" size="10"/>

															</td>

														</tr>

														

														<tr>

															<td>

																<input type="text" name="Oname5" size="10"/>

															</td>

															<td>

																<input type="text" name="Ohusname5" size="10"/>

															</td>

															<td>

																<input type="text" name="Oadd5" size="10"/>

															</td>

															<td>

																<input type="text" name="Oservice5" size="10"/>

															</td>

															<td>

																<input type="text" name="Onaddress5" size="10"/>

															</td>

															<td>

																<input type="text" name="Otel5" size="10"/>

															</td>

															<td>

																<input type="text" name="Oemail5" size="10"/>

															</td>

														</tr>

														

														</table>

														<table>

														<tr>

															<td>

																पत्नीच्या माहेरचा पत्ता  

															</td>

															<td>

																<textarea type="text" name="address3" cols="39" rows="3"></textarea>

															</td>

															<td>

																मोबा / फोन नं. 

															</td>

															<td>

																<input type="text" name="mobile3" size="50" />

															</td>

														

														</tr>

														<tr>

															<td>

															<input type="checkbox" name="en"  value="y" onclick="return checkValue(this)" />

															देणगी 

															</td>

															<td> <div id="xtraInfo" style="display:none;">



															<input type="text" name="donation" size="50"/></div>

															</td>

														</tr>

														<tr>

														<td>

														</td>

														</tr>

														<tr>

															<td colspan="4" align="center">

															<input src="images/images (1).jpg" style="height: 40px;" type="image" value="Submit Form!">

																

															</td>

														</tr>

														</table>

														</form>

														

				</div>

				

				

					</div>

							



					</div>

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

