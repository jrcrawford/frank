<?php
	$error = $_REQUEST['error'];
	if($error == 'y'){
		$message = "Correct username &amp; password required for access.";
	}else{
		$message = '';
	}
?> 
<html>
<head>
<!--Customize the title to the specific client-->
<title>CPS - Reliable Financial Group - Forms & Apps</title>
 
 
<meta NAME="GENERATOR" Content="Microsoft FrontPage 5.0">
<style type="text/css">
<!--
.style1 {font-family: Arial, Helvetica, sans-serif}
-->
</style>
</head>
<body>
<link href="/inc/Styles.css" type="text/css" rel="stylesheet">
<p></p>
 
    <table align=center cellSpacing="0" cellPadding="0" width="70%" border="0" height="50">
    
  <tr>
  <td align=center bgcolor="#FFFFFF">
  <img src="images/cps-rel.jpg" alt="CPS - Reliable Financial Group" width="363" height="62" border=0>
  </td>
  </tr>
 
    
    <!--This is the color of the bar below the picture-->
    <td bgColor="#0033CC" align=center>
    <p>&nbsp;</p>
    </td>  
    </tr>
    </table>
<center>
<?
	if($message != ''){
?>
	<p style="color:#ff0000"><? echo $message; ?></p>
<?
	}
?>
<p><span class="Instructions"><font face="arial" color="#000000" size="2"><span class="style1">Please enter your Username, firstnamelastname (no spaces, all lowercase), and Password.
    <br>
    Each first time user is required to submit minimal personal information so a user ID can be registered.</br>
    <br>
Forgot your Password? Send Request to <a href="mailto:zach@relfingrp.com">zach@relfingrp.com</a></span></p>
 
  <span class="style1">
  <!--GN=the group name as it appears in LifeLink Pro. If there are spaces in the group name, you must remove them adding %20 for the space.  Otherwise the login will not work for all browsers.-->
  </span>
  <form action="termappexp.php" method="post" name="login" class="style1" id="login">
    <table border="0" cellpadding="3" cellspacing="0">
      <tr>
        <td align=right><span class="SubHeadText"><font face="arial" size="2">Username:&nbsp;</span></td>
        <td><input maxLength="250" size="40" name="EM" id="EM"></td>
      </tr>
          
          
 
      <tr>
        <td align=right><span class="SubHeadText"><font face="arial" size="2">Password:</span></td>
        <td><input type="password" maxLength="10" size="40" name="GP" id="GP"></td>
      </tr>
        
      <tr>
        <td colspan="2" height="2"></td>
      </tr>
      <tr>
        <td align="middle">
        </td>
        <td align="middle"><input type="submit" value="     Login     " name="submit" id="submit" 
					onclick="if(document.login.EM.value==''||document.login.GP.value=='')
					 {alert('Username and Password is required!');return false;}
						else
						 {document.login.UN.value = 'cpsrfg_' + document.login.EM.value;}">
					   <!--Di 6/16/09 I changed this to change the user name with the prefix not the Email. I also added the hidden UN field.-->
						
</td>
</tr>
</table>
</form>
    
      
<table cellSpacing="0" cellPadding="0" width="675" border="0" align="center">
<tr>
<td height="20" colSpan="2" class="style1"></td></tr>
<tr>
<td colSpan="2" class="style1"><table align="center" border="0" width="400">
<tr>
<td colSpan="2" height="10">
              <p align="center"><u><b>System Requirements</b></u></p>
            </td>
          </tr>
<tr>
            <td height="10">Required:</td>
            <td height="10">Internet Explorer 6.0 or above</td>
          </tr>          
 
<tr>
            <td height="10">Required:</td>
            <td height="10">Firefox 2.0 or above</td>
          </tr>	
<tr>
            <td height="10">Required:</td>
            <td height="10">Screen size 600 x 800 or greater </td>
          </tr>
          <tr>
            <td height="10">Required:</span></td>
            <td height="10">56K Internet connection or above</td>
          </tr>
          <tr>
            <td height="10">Required:</span></td>
            <td height="10"><a href="http://www.adobe.com/products/acrobat/readstep2.html"><u>Latest version of Acrobat</u></a></td>
          </tr>
          
          
	  
<tr>
            <td height="10">Not Supported:</span></td>
            <td height="10">Netscape</td>
          </tr>
          
          <tr>
            <td height="10" valign="top">Recommended:</span></td>
	    <td height="10">300 MHz CPU and 32 MB RAM or greater</td>
          </tr>
        </table>      </td>
    </tr>
  </table>
</center>
 
 
</body>
</html>
