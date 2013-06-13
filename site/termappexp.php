<?php
	$password = $_REQUEST['GP'];
	
	if($password != 'cpsrfg2004'){
		header('Location: http://www.relfingrp.com/login.php?error=y');
	}else{
?>
<style type="text/css">
<!--
.navigation {color: #FFF;
background: url(crn_left.gif) left top no-repeat;
text-decoration: none;
padding-left: 10px;
padding-top: 2px;
font-weight:bold;
width: 124px;
}
.style2 {font-family: Geneva, Arial, Helvetica, sans-serif}
-->
</style>
<title>Reliable Financial Group - Forms and Apps</title>
	<body class="style2"><p>Please Review The Following Before Proceeding </p>
	<ul>
      <li>Term App Express - <a href="docs/ING%20-%20Term%20App%20Express%20Agt%20Training%20Guide.pdf">Agent Training Guide</a> </li>
      <li>Term App Express - <a href="docs/ING%20-%20Term%20App%20Express%20Agt%20%20FAQ%20Brochure.pdf">Agent Frequently Asked Questions</a> </li>
      <li>Term App Express - <a href="docs/ING%20-%20What%27s%20Next%20Client%20Brochure.pdf">What's Next Client Brochure </a></li>
    </ul>
	<p>Click Here To Proceed To <a href="https://www.ingpresents.com/AppExpress/Default.aspx?agency=71727fa650bb040a4d945e6ad4f850c9">ING - TERM App Express</a> </p>
	<p>&nbsp; </p>
	.
<?
	}
?>