function validform(){
	
	//Objects
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

	var vcury = 2019;
	//Values
	var x = vmail.value;
	var no = vmob.value;
	var p = vpass.value;
	
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
	
	if(vpass.value!=vcpass.value){
		alert("Passwords dont match !!");
		return false;
	}
	
	if(x==""){
		alert("email field empty");
		return false;
	}else{
		var atpos=x.indexOf("@");
		var dotpos=x.lastIndexOf(".");
		if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length){
			alert("Not a valid e-mail address");
			return false;
		}
	}
	
	if(vage.value<20 || vage.value>80){
		alert("Age not in range !!");
		return false;
	}
	
	if(vyob.value>1999 || vyob.value<1939){
		alert("Invalid year of birth value !!");
		return false;
	}
	
	if(vcury-vyob.value!=vage.value){
		alert("Year of birth and age is not matching  !!");
		return false;
	}
	
	if(no.length>10||no.length<10){
		alert("Invalid Mobile Number");
		return false;
	}else{
		for(i=0;i<no.length;i++)
			if(no.charAt(i)<'0'&&no.charAt(i)>'9'){
				alert("Invalid Mobile Number !!");
				return false;
			}
	}
	
	var cl,sl,sc,n;
	cl=sl=sc=n=0;
	
	for(i=0;i<p.length;i++){
		if(p.charAt(i)>='0' && p.charAt(i)<='10')
			n=n+1;
		else if(p.charAt(i)>='a' && p.charAt(i)<='z')
			sl=sl+1;
		else if(p.charAt(i)>='A' && p.charAt(i)<='Z')	
			cl=cl+1;
		else
			sc=sc+1;
	}
	
	if(cl<=0 || n<=0 || sc<=0){
		alert("Not a strong password !!");
		return false;
	}
	
	return true;
}

function out(){
	//alert("i was tempted !!");
	var eid = document.getElementById("hmail").value;
	var duid = eid.substring(0,eid.indexOf('@'));
	document.getElementById("huid").value=duid;
}
