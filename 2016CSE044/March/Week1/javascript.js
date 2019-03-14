function npres(a){
	
	for(i=1;i<=10;i++)
		document.write(a," * ",i," = ",a*i,"<br>");
	
}

function sayhi(name){
	alert("Hello "+name+" !!");
}

function sum(){
	var a = prompt("Enter number a : ");
	var b = prompt("Enter number b : ");
	sum = +a + +b;
	alert("Sum : "+sum);
}

function conf(){

	var c = confirm("Do u want to continue ??");
	
	if(c){
		document.write("User wants to continue.");
		return true;
	}else{
		document.write("User doesnt wants to continue.");
		return false;
	}

}
