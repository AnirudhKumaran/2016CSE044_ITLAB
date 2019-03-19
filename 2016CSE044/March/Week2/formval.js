function valid(){

	var name=document.getElementById("fname").value;
	var age=document.getElementById("uage").value;
	var gender= document.getElementsByName("gender");
	var adress=document.getElementById("uaddr").value;
	var e = document.getElementById("ustate");
	var strUser = e.options[e.selectedIndex].value;
	var no=document.getElementById("umob").value;
	var x=document.getElementById("ueid").value;

	if(name==""){
		alert("Name field empty");
		return false;
	}else{
		for(i=0;i<name.length;i++)
		if(!((name.charAt(i)>='a'&&name.charAt(i)<='z')||(name.charAt(i)>='A'&&name.charAt(i)<='Z'))){
			alert("enter apphabets only in name field");
			return false;
		}
	}

	if(name.length<5){
		alert("username length should greater than 5 ");
		return false;
	}

	if(age==""){
		alert("Age field empty");
		return false;
	}

	if(age<1||age>120){
		alert("Age value between 1 and 120 ");
		return false;
	}else{
		for(i=0;i<age.length;i++)
		if(!(age.charAt(i)>='0'&&age.charAt(i)<='9')){
			alert("enter  number only in age field");
			return false;
		}
	}

	if((gender[0].checked == false ) && ( gender[1].checked == false )){
		alert ( "Please choose your Gender: Male or Female" ); 
		return false;
	}

	if(adress==""){
		alert("Address field empty");
		return false;
	}

	if(strUser==0){
		alert("Please select your state");
		return false;
	}

	if(no==""){
		alert("phone field empty");
		return false;
	}

	if(no.length>10||no.length<10){
		alert("invalid phone number");
		return false;
	}else{
		for(i=0;i<no.length;i++)
		if(!(no.charAt(i)>='0'&&no.charAt(i)<='9')){
			alert("enter   only numbers in phone field");
			return false;
		}
	}

	if(x==""){
		alert("email field empty");
		return false;
	}else{
		var atpos=x.indexOf("@");
		var dotpos=x.lastIndexOf(".");
		if(atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length){
			alert("Not a valid e-mail address");
			return false;
		}
	}

	return true;
}
