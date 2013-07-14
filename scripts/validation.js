
function ValidateForm(objForm) {
	var strAgentName, strAddress, strCity, strState, strZip, strPhone, strEmail, strFax;
	var objField, strErrorFG="#FFFFFF", strErrorBG="#FF0000", blnError=false;
	
	strAgentName=trim(objForm.strAgentName.value);
	strAddress=trim(objForm.strAddress.value);
	strCity=trim(objForm.strCity.value);
	strState=trim(objForm.strState.value);
	strZip=trim(objForm.strZip.value);
	strPhone=trim(objForm.strPhone.value);
	strEmail=trim(objForm.strEmail.value);
	strFax=trim(objForm.strFax.value);
	
	objForm.strAgentName.style.backgroundColor="";
	objForm.strAddress.style.backgroundColor="";
	objForm.strCity.style.backgroundColor="";
	objForm.strState.style.backgroundColor="";
	objForm.strZip.style.backgroundColor="";
	objForm.strPhone.style.backgroundColor="";
	objForm.strEmail.style.backgroundColor="";
	objForm.strFax.style.backgroundColor="";

	objForm.strAgentName.style.color="";
	objForm.strAddress.style.color="";
	objForm.strCity.style.color="";
	objForm.strState.style.color="";
	objForm.strZip.style.color="";
	objForm.strPhone.style.color="";
	objForm.strEmail.style.color="";
	objForm.strFax.style.color="";

	if ( strFax == '' ) {
		objField=objForm.strFax;
		objField.style.backgroundColor=strErrorBG;
		objField.style.color=strErrorFG;
		blnError=true;
	}
	if ( strEmail == '' ) {
		objField=objForm.strEmail;
		objField.style.backgroundColor=strErrorBG;
		objField.style.color=strErrorFG;
		blnError=true;
	}
	if ( strPhone == '' ) {
		objField=objForm.strPhone;
		objField.style.backgroundColor=strErrorBG;
		objField.style.color=strErrorFG;
		blnError=true;
	}
	if ( strZip == '' ) {
		objField=objForm.strZip;
		objField.style.backgroundColor=strErrorBG;
		objField.style.color=strErrorFG;
		blnError=true;
	}
	if ( strState == '' ) {
		objField=objForm.strState;
		objField.style.backgroundColor=strErrorBG;
		objField.style.color=strErrorFG;
		blnError=true;
	}
	if ( strCity == '' ) {
		objField=objForm.strCity;
		objField.style.backgroundColor=strErrorBG;
		objField.style.color=strErrorFG;
		blnError=true;
	}
	if ( strAddress == '' ) { 
		objField=objForm.strAddress;
		objField.style.backgroundColor=strErrorBG;
		objField.style.color=strErrorFG;
		blnError=true;
	}
	if ( strAgentName == '' ) {
		objField=objForm.strAgentName;
		objField.style.backgroundColor=strErrorBG;
		objField.style.color=strErrorFG;
		blnError=true;
	}
	
	if ( blnError ) {
		alert ( "Some fields are required.\n\nPlease fill-in the highlighted fields." );
		objField.focus();
	}

	if ( blnError )
		return false;
	else
		return true;
}

function trim(strBuffer) {
	var i;

	strBuffer=strBuffer + "";

	for ( i = 0; i < strBuffer.length; i ++ ) {
		if ( strBuffer.substring(i,i+1) != ' ' )
			break;
	}

	if ( i < strBuffer.length )
		strBuffer = strBuffer.substring(i);
	else
		strBuffer = '';
	
	for ( i = strBuffer.length-1; i >= 0; i -- ) {
		if ( strBuffer.substring(i,i+1) != ' ' )
			break;
	}

	if ( i == -1 )
		strBuffer = '';
	else
		strBuffer = strBuffer.substring(0,i+1);
	
	return strBuffer;
}

