function validform(){
	
	var vname = document.getElementById("hname");
	var vage = document.getElementById("hage");
	var vgen = document.getElementsByName("hgender");
	var vyob = document.getElementById("hyob");
	var vaddr = document.getElementById("haddr");
	var vmob = document.getElementById("hmob");
	//var e = document.getElementById("hstate");
	//var vstate = e.options[e.selectedIndex].value;
	var vmail = document.getElementById("hmail");
	var vuid = document.getElementById("huid");
	var vpass = document.getElementById("hpass");
	var vcpass = document.getElementById("hcpass");
	
	if(vname.value==""){
		alert("Name field is empty !!");
		vname.focus();
		return false;
	}
	
	if(vage.value==""){
		alert("Age field is empty !!");
		vage.focus();
		return false;
	}
	
	if(vgen[0].checked==false && vgen[1].checked==false && vgen[2].checked==false){
		alert("Gender filed is empty !!");
		return false;
	}
	
	if(vyob.value==""){
		alert("Year of birth is empty !!");
		vyob.focus();
		return false;
	}
	
	if(vaddr.value==""){
		alert("Address field is empty !!");
		vaddr.focus();
		return false;
	}
	
	if(vmob.value==""){
		alert("Mobile field is empty !!");
		vmob.focus();
		return false;
	}
	
	/*if(vstate==0){
		alert("Select your state !!");
		vmob.focus();
		return false;
	}*/
	
	if(vmail.value==""){
		alert("Email field is empty !!");
		vmail.focus();
		return false;
	}
	
	if(vuid.value==""){
		alert("Mobile field is empty !!");
		vuid.focus();
		return false;
	}
	
	if(vpass.value==""){
		alert("Password field is empty !!");
		vpass.focus();
		return false;
	}
	
	if(vcpass.value==""){
		alert("Confirm Password field is empty !!");
		vcpass.focus();
		return false;
	}
	
	return true;
}
