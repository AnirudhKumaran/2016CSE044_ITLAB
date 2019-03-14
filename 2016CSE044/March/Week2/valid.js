function validation(){

	var name = document.forms["RegForm"]["fname"];
	var mail = document.forms["RegForm"]["emailid"];
	var phn = document.forms["RegForm"]["mobno"];
	var pasw = document.forms["RegForm"]["passw"];
	var subj = document.forms["RegForm"]["course"];
	var address = document.forms["RegForm"]["addr"];
	var com = document.forms["RegForm"]["comm"];

	if(name.value==""){
		window.alert("Enter your name.");
		name.focus();
		return false;
	}

	if(mail.value==""){
		window.alert("Enter your mail id.");
		mail.focus();
		return false;
	}

	if(phn.value==""){
		window.alert("Enter your mobno.");
		phn.focus();
		return false;
	}
	
	if(pasw.value==""){
		window.alert("Enter your password.");
		pasw.focus();
		return false;
	}

	if(pasw.value==""){
		window.alert("Enter your address.");
		pasw.focus();
		return false;
	}
}
