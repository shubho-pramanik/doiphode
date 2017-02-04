<?php
if(isset($_POST['email'])) {
     
    // EDIT THE 2 LINES BELOW AS REQUIRED
    $email_to = "shubho_pramanik@yahoo.co.in";
    $email_subject = "Registration Form";
     
     
    function died($error) {
        // your error code can go here
        echo "We are very sorry, but there were error(s) found with the form you submitted. ";
        echo "These errors appear below.<br /><br />";
        echo $error."<br /><br />";
        echo "Please go back and fix these errors.<br /><br />";
        die();
    }
     
    // validation expected data exists
    if(!isset($_POST['username']) ||
        !isset($_POST['email'])) {
        died('We are sorry, but there appears to be a problem with the form you submitted.');       
    }
     
    $first_name = $_POST['username']; // required
    $dob = $_POST['dob']; // required
    $email = $_POST['email']; // required
    $age = $_POST['age']; // not required
    $address = $_POST['address']; // required
    $mobile = $_POST['mobile']; // required 
    $address1 = $_POST['address1'];
    $mobile1 = $_POST['mobile1'];
    $address2 = $_POST['address2'];
    $mobile2 = $_POST['mobile2'];

    $name1 = $_POST['name1'];
    $relation1 = $_POST['relation1'];
    $dob1 = $_POST['dob1'];
    $edu1 = $_POST['edu1'];
    $service1 = $_POST['service1'];
    $tel1 = $_POST['tel1'];
    $bloodrel1 = $_POST['bloodrel1'];

    $name2 = $_POST['name2'];
    $relation2 = $_POST['relation2'];
    $dob2 = $_POST['dob2'];
    $edu1 = $_POST['edu2'];
    $service2 = $_POST['service2'];
    $tel2 = $_POST['tel2'];
    $bloodrel2 = $_POST['bloodrel2'];

    $name3 = $_POST['name3'];
    $relation3 = $_POST['relation3'];
    $dob3 = $_POST['dob3'];
    $edu3 = $_POST['edu3'];
    $service3 = $_POST['service3'];
    $tel3 = $_POST['tel3'];
    $bloodrel3 = $_POST['bloodrel3'];

    $name4 = $_POST['name4'];
    $relation4 = $_POST['relation4'];
    $dob4 = $_POST['dob4'];
    $edu4 = $_POST['edu4'];
    $service4 = $_POST['service4'];
    $tel4 = $_POST['tel4'];
    $bloodrel4 = $_POST['bloodrel4'];

    $name5 = $_POST['name5'];
    $relation5 = $_POST['relation5'];
    $dob5 = $_POST['dob5'];
    $edu5 = $_POST['edu5'];
    $service5 = $_POST['service5'];
    $tel5 = $_POST['tel5'];
    $bloodrel5 = $_POST['bloodrel5'];

    $name6 = $_POST['name6'];
    $relation6 = $_POST['relation6'];
    $dob6 = $_POST['dob6'];
    $edu6 = $_POST['edu6'];
    $service6 = $_POST['service6'];
    $tel6 = $_POST['tel6'];
    $bloodrel6 = $_POST['bloodrel6'];

    $name7 = $_POST['name7'];
    $relation7 = $_POST['relation7'];
    $dob7 = $_POST['dob7'];
    $edu7 = $_POST['edu7'];
    $service7 = $_POST['service7'];
    $tel7 = $_POST['tel7'];
    $bloodrel7 = $_POST['bloodrel7'];

    $name8 = $_POST['name8'];
    $relation8 = $_POST['relation8'];
    $dob8 = $_POST['dob8'];
    $edu8 = $_POST['edu8'];
    $service8 = $_POST['service8'];
    $tel8 = $_POST['tel8'];
    $bloodrel8 = $_POST['bloodrel8'];


    $Mname1 = $_POST['Mname1'];
    $Mhusname1 = $_POST['Mhusname1'];
    $Madd1 = $_POST['Madd1'];
    $Mservice1 = $_POST['Mservice1'];
    $Mnaddress1 = $_POST['Mnaddress1'];
    $Mtel1 = $_POST['Mtel1'];
    $Memail1 = $_POST['Memail1'];


    $Mname2 = $_POST['Mname2'];
    $Mhusname2 = $_POST['Mhusname2'];
    $Madd2 = $_POST['Madd2'];
    $Mservice2 = $_POST['Mservice2'];
    $Mnaddress2 = $_POST['Mnaddress2'];
    $Mtel2 = $_POST['Mtel2'];
    $Memail2 = $_POST['Memail2'];


    $Mname3 = $_POST['Mname3'];
    $Mhusname3 = $_POST['Mhusname3'];
    $Madd3 = $_POST['Madd3'];
    $Mservice3 = $_POST['Mservice3'];
    $Mnaddress3 = $_POST['Mnaddress3'];
    $Mtel3 = $_POST['Mtel3'];
    $Memail3 = $_POST['Memail3'];


    $Mname4 = $_POST['Mname4'];
    $Mhusname4 = $_POST['Mhusname4'];
    $Madd4 = $_POST['Madd4'];
    $Mservice4 = $_POST['Mservice4'];
    $Mnaddress4 = $_POST['Mnaddress4'];
    $Mtel4 = $_POST['Mtel4'];
    $Memail4 = $_POST['Memail4'];


    $Mname5 = $_POST['Mname5'];
    $Mhusname5 = $_POST['Mhusname5'];
    $Madd5 = $_POST['Madd5'];
    $Mservice5 = $_POST['Mservice5'];
    $Mnaddress5 = $_POST['Mnaddress5'];
    $Mtel5 = $_POST['Mtel5'];
    $Memail5 = $_POST['Memail5'];


    $Nname1 = $_POST['Nname1'];
    $Nhusname1 = $_POST['Nhusname1'];
    $Nadd1 = $_POST['Nadd1'];
    $Nservice1 = $_POST['Nservice1'];
    $Nnaddress1 = $_POST['Nnaddress1'];
    $Ntel1 = $_POST['Ntel1'];
    $Nemail1 = $_POST['Nemail1'];


    $Nname2 = $_POST['Nname2'];
    $Nhusname2 = $_POST['Nhusname2'];
    $Nadd2 = $_POST['Nadd2'];
    $Nservice2 = $_POST['Nservice2'];
    $Nnaddress2 = $_POST['Nnaddress2'];
    $Ntel2 = $_POST['Ntel2'];
    $Nemail2 = $_POST['Nemail2'];

    $Nname3 = $_POST['Nname3'];
    $Nhusname3 = $_POST['Nhusname3'];
    $Nadd3 = $_POST['Nadd3'];
    $Nservice3 = $_POST['Nservice3'];
    $Nnaddress3 = $_POST['Nnaddress3'];
    $Ntel3 = $_POST['Ntel3'];
    $Nemail3 = $_POST['Nemail3'];

    $Nname4 = $_POST['Nname4'];
    $Nhusname4 = $_POST['Nhusname4'];
    $Nadd4 = $_POST['Nadd4'];
    $Nservice4 = $_POST['Nservice4'];
    $Nnaddress4 = $_POST['Nnaddress4'];
    $Ntel4 = $_POST['Ntel4'];
    $Nemail4 = $_POST['Nemail4'];

    $Nname5 = $_POST['Nname5'];
    $Nhusname5 = $_POST['Nhusname5'];
    $Nadd5 = $_POST['Nadd5'];
    $Nservice5 = $_POST['Nservice5'];
    $Nnaddress5 = $_POST['Nnaddress5'];
    $Ntel5 = $_POST['Ntel5'];
    $Nemail5 = $_POST['Nemail5'];

    $Oname1 = $_POST['Oname1'];
    $Ohusname1 = $_POST['Ohusname1'];
    $Oadd1 = $_POST['Oadd1'];
    $Oservice1 = $_POST['Oservice1'];
    $Onaddress1 = $_POST['Onaddress1'];
    $Otel1 = $_POST['Otel1'];
    $Oemail1 = $_POST['Oemail1'];

    $Oname2 = $_POST['Oname2'];
    $Ohusname2 = $_POST['Ohusname2'];
    $Oadd2 = $_POST['Oadd2'];
    $Oservice2 = $_POST['Oservice2'];
    $Onaddress2 = $_POST['Onaddress2'];
    $Otel2 = $_POST['Otel2'];
    $Oemail2 = $_POST['Oemail2'];

    $Oname3 = $_POST['Oname3'];
    $Ohusname3 = $_POST['Ohusname3'];
    $Oadd3 = $_POST['Oadd3'];
    $Oservice3 = $_POST['Oservice3'];
    $Onaddress3 = $_POST['Onaddress3'];
    $Otel3 = $_POST['Otel3'];
    $Oemail3 = $_POST['Oemail3'];

    $Oname4 = $_POST['Oname4'];
    $Ohusname4 = $_POST['Ohusname4'];
    $Oadd4 = $_POST['Oadd4'];
    $Oservice4 = $_POST['Oservice4'];
    $Onaddress4 = $_POST['Onaddress4'];
    $Otel4 = $_POST['Otel4'];
    $Oemail4 = $_POST['Oemail4'];

    $Oname5 = $_POST['Oname5'];
    $Ohusname5 = $_POST['Ohusname5'];
    $Oadd5 = $_POST['Oadd5'];
    $Oservice5 = $_POST['Oservice5'];
    $Onaddress5 = $_POST['Onaddress5'];
    $Otel5 = $_POST['Otel5'];
    $Oemail5 = $_POST['Oemail5'];



    $address3 = $_POST['address3'];
    $mobile3 = $_POST['mobile3'];



    $error_message = "";
    $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
  if(!preg_match($email_exp,$email)) {
    $error_message .= 'The Email Address you entered does not appear to be valid.<br />';
  }
    $string_exp = "/^[A-Za-z .'-]+$/";
  if(!preg_match($string_exp,$first_name)) {
    $error_message .= 'The First Name you entered does not appear to be valid.<br />';
  }
 
  if(strlen($error_message) > 0) {
    died($error_message);
  }
    $email_message = "Form details below.\n\n";
     
    function clean_string($string) {
      $bad = array("content-type","bcc:","to:","cc:","href");
      return str_replace($bad,"",$string);
    }
     
    $email_message .= "First Name: ".clean_string($first_name)."\n";
    $email_message .= "Date Of Birth: ".clean_string($dob)."\n";
    $email_message .= "Email: ".clean_string($email)."\n";
    $email_message .= "Age: ".clean_string($age)."\n";
    $email_message .= "Address: ".clean_string($address)."\n";
    $email_message .= "Tel/Mobile: ".clean_string($mobile)."\n"; 
    $email_message .= "Address1: ".clean_string($address1)."\n"; 
    $email_message .= "Mobile1: ".clean_string($mobile1)."\n"; 
    $email_message .= "Address2: ".clean_string($address2)."\n"; 
    $email_message .= "Tel/Mobile2: ".clean_string($mobile2)."\n"; 
    $email_message .= "Family Member Details: "."\n"; 
    $email_message .= "1: ".clean_string($name1)."\t".clean_string($relation1)."\t".clean_string($dob1)."\t".clean_string($edu1)."\t".clean_string($service1)."\t".clean_string($tel1).clean_string($bloodrel1)."\n"; 
    $email_message .= "2: ".clean_string($name2)."\t".clean_string($relation2)."\t".clean_string($dob2)."\t".clean_string($edu2)."\t".clean_string($service2)."\t".clean_string($tel2).clean_string($bloodrel2)."\n";
    $email_message .= "3: ".clean_string($name3)."\t".clean_string($relation3)."\t".clean_string($dob3)."\t".clean_string($edu3)."\t".clean_string($service3)."\t".clean_string($tel3).clean_string($bloodrel3)."\n";
    $email_message .= "4: ".clean_string($name4)."\t".clean_string($relation4)."\t".clean_string($dob4)."\t".clean_string($edu4)."\t".clean_string($service4)."\t".clean_string($tel4).clean_string($bloodrel4)."\n";
    $email_message .= "5: ".clean_string($name5)."\t".clean_string($relation5)."\t".clean_string($dob5)."\t".clean_string($edu5)."\t".clean_string($service5)."\t".clean_string($tel5).clean_string($bloodrel5)."\n";
    $email_message .= "6: ".clean_string($name6)."\t".clean_string($relation6)."\t".clean_string($dob6)."\t".clean_string($edu6)."\t".clean_string($service6)."\t".clean_string($tel6).clean_string($bloodrel6)."\n";
    $email_message .= "7: ".clean_string($name7)."\t".clean_string($relation7)."\t".clean_string($dob7)."\t".clean_string($edu7)."\t".clean_string($service7)."\t".clean_string($tel7).clean_string($bloodrel7)."\n";
    $email_message .= "8: ".clean_string($name8)."\t".clean_string($relation8)."\t".clean_string($dob8)."\t".clean_string($edu8)."\t".clean_string($service8)."\t".clean_string($tel8).clean_string($bloodrel8)."\n"."\n";
    $email_message .= "Family Member Details2: "."\n"; 
    $email_message .= "1: ".clean_string($Mname1)."\t".clean_string($Mhusname1)."\t".clean_string($Madd1)."\t".clean_string($Mservice1)."\t".clean_string($Mnaddress1)."\t".clean_string($Mtel1).clean_string($Memail1)."\n"; 
    $email_message .= "2: ".clean_string($Mname2)."\t".clean_string($Mhusname2)."\t".clean_string($Madd2)."\t".clean_string($Mservice2)."\t".clean_string($Mnaddress2)."\t".clean_string($Mtel2).clean_string($Memail2)."\n"; 
    $email_message .= "3: ".clean_string($Mname3)."\t".clean_string($Mhusname3)."\t".clean_string($Madd3)."\t".clean_string($Mservice3)."\t".clean_string($Mnaddress3)."\t".clean_string($Mtel3).clean_string($Memail3)."\n"; 
    $email_message .= "4: ".clean_string($Mname4)."\t".clean_string($Mhusname4)."\t".clean_string($Madd4)."\t".clean_string($Mservice4)."\t".clean_string($Mnaddress4)."\t".clean_string($Mtel4).clean_string($Memail4)."\n"; 
    $email_message .= "5: ".clean_string($Mname5)."\t".clean_string($Mhusname5)."\t".clean_string($Madd5)."\t".clean_string($Mservice5)."\t".clean_string($Mnaddress5)."\t".clean_string($Mtel5).clean_string($Memail5)."\n"."\n"; 
    $email_message .= "Family Member Details3: "."\n"; 
    $email_message .= "1: ".clean_string($Nname1)."\t".clean_string($Nhusname1)."\t".clean_string($Nadd1)."\t".clean_string($Nservice1)."\t".clean_string($Nnaddress1)."\t".clean_string($Ntel1).clean_string($Nemail1)."\n"; 
    $email_message .= "2: ".clean_string($Nname2)."\t".clean_string($Nhusname2)."\t".clean_string($Nadd2)."\t".clean_string($Nservice2)."\t".clean_string($Nnaddress2)."\t".clean_string($Ntel2).clean_string($Nemail2)."\n"; 
    $email_message .= "3: ".clean_string($Nname3)."\t".clean_string($Nhusname3)."\t".clean_string($Nadd3)."\t".clean_string($Nservice3)."\t".clean_string($Nnaddress3)."\t".clean_string($Ntel3).clean_string($Nemail3)."\n"; 
    $email_message .= "4: ".clean_string($Nname4)."\t".clean_string($Nhusname4)."\t".clean_string($Nadd4)."\t".clean_string($Nservice4)."\t".clean_string($Nnaddress4)."\t".clean_string($Ntel4).clean_string($Nemail4)."\n"; 
    $email_message .= "5: ".clean_string($Nname5)."\t".clean_string($Nhusname5)."\t".clean_string($Nadd5)."\t".clean_string($Nservice5)."\t".clean_string($Nnaddress5)."\t".clean_string($Ntel5).clean_string($Nemail5)."\n"."\n"; 
    $email_message .= "Family Member Details4: "."\n"; 
    $email_message .= "1: ".clean_string($Oname1)."\t".clean_string($Ohusname1)."\t".clean_string($Oadd1)."\t".clean_string($Oservice1)."\t".clean_string($Onaddress1)."\t".clean_string($Otel1).clean_string($Oemail1)."\n";
    $email_message .= "2: ".clean_string($Oname2)."\t".clean_string($Ohusname2)."\t".clean_string($Oadd2)."\t".clean_string($Oservice2)."\t".clean_string($Onaddress2)."\t".clean_string($Otel2).clean_string($Oemail2)."\n";
    $email_message .= "3: ".clean_string($Oname3)."\t".clean_string($Ohusname3)."\t".clean_string($Oadd3)."\t".clean_string($Oservice3)."\t".clean_string($Onaddress3)."\t".clean_string($Otel3).clean_string($Oemail3)."\n";
    $email_message .= "4: ".clean_string($Oname4)."\t".clean_string($Ohusname4)."\t".clean_string($Oadd4)."\t".clean_string($Oservice4)."\t".clean_string($Onaddress4)."\t".clean_string($Otel4).clean_string($Oemail4)."\n";
    $email_message .= "5: ".clean_string($Oname5)."\t".clean_string($Ohusname5)."\t".clean_string($Oadd5)."\t".clean_string($Oservice5)."\t".clean_string($Onaddress5)."\t".clean_string($Otel5).clean_string($Oemail5)."\n";
    $email_message .= "1: ".clean_string($Oname1)."\t".clean_string($Ohusname1)."\t".clean_string($Oadd1)."\t".clean_string($Oservice1)."\t".clean_string($Onaddress1)."\t".clean_string($Otel1).clean_string($Oemail1)."\n";
    $email_message .= "1: ".clean_string($Oname1)."\t".clean_string($Ohusname1)."\t".clean_string($Oadd1)."\t".clean_string($Oservice1)."\t".clean_string($Onaddress1)."\t".clean_string($Otel1).clean_string($Oemail1)."\n";
 
    $email_message .= "\n"."\n"."\n"."\n"; 
    $email_message .= "Husband Address: ".clean_string($address3)."\n"; 
 $email_message .= "Tel/Mobile: ".clean_string($mobile3)."\n"; 



 
// create email headers
$headers = 'From: '.$email_from."\r\n".
'Reply-To: '.$email_from."\r\n" .
'X-Mailer: PHP/' . phpversion();
@mail($email_to, $email_subject, $email_message, $headers);  
?>
 
<!-- include your own success html here -->
 
Thank you for contacting us. We will be in touch with you very soon.
 
<?php
}
?>