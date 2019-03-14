function valid(){
	var name = document.forms["uregform"]["fname"];
	var age = document.forms["uregform"]["uage"];
	var gen = document.forms["uregform"]["ugender"];
	var addr = document.forms["uregform"]["uaddr"];
	var state = document.forms["uregform"]["ustate"];
	var phno = document.forms["uregform"]["umob"];
	var email = document.forms["uregform"]["ueid"];
	var i;
	if(name.value==""){
		alert("Name field is empty.");
		return false;
	}

	return true;

}
