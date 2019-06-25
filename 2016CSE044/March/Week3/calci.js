/*<<<<<<< HEAD
var gt="";
var it="";
var nc=oc=0;

function clearall(){
	gt="";
	nc=oc=0;
	document.getElementById("display").value=gt;
}

function numbut(s){
	nc=oc+1;
	it=document.getElementById("display").value;
	gt=it+s;
	document.getElementById("display").value=gt;
}

function optbut(o){
	if(nc==oc+1){
		oc=nc;
		it=document.getElementById("display").value;
		var n=it.length;
		if(it.charAt(n-1)!="+" && it.charAt(n-1)!="-" && it.charAt(n-1)!="*" && it.charAt(n-1)!="/"){
			gt=it+o;
			document.getElementById("display").value=gt;
		}
	}
}

function backspace(){
	it=document.getElementById("display").value;
	var n = it.length;
	
	if(n==0)
		oc=nc=0;
	
	if(it.charAt(n-1)=="+" || it.charAt(n-1)=="-" || it.charAt(n-1)=="*" || it.charAt(n-1)=="/"){
		oc=nc-1;
	}
	gt=it.slice(0,-1);
	document.getElementById("display").value=gt;
}

function compute(){
	x = document.getElementById("display").value;
	
	if(x!=""){
	
		if(x.charAt(0)=="-")
			x="0"+gt;
		
		x+="#";
		//document.getElementById("stc").innerHTML=x;
		var numarr = [];
		var optarr = [];
		numarr.push("#");
		optarr.push("#");
		var i=0;
		var snum = "";
		while(x.charAt(i)!="#"){
			if(x.charAt(i)=="+" || x.charAt(i)=="-" || x.charAt(i)=="*" || x.charAt(i)=="/"){
				numarr.push(parseInt(snum));
				snum="";
				optarr.push(x.charAt(i));
			}else{
				snum+=x.charAt(i);
			}
			if(x.charAt(i+1)=="#")
				numarr.push(parseInt(snum));
			i+=1;
		}
		//document.getElementById("ntc").innerHTML=numarr.join(",");
		//document.getElementById("otc").innerHTML=optarr.join(",");
		var fnum=0,snum=0;
		
		while(optarr.join("")!="#"){
			
			snum=numarr.pop();
			fnum=numarr.pop();
			
			numarr.push(operation(fnum,optarr.pop(),snum));

		}
		var ans = numarr.pop();
		document.getElementById("display").value=ans;
		//document.getElementById("atc").innerHTML=ans;
	}
}

function operation(a,o,b){
	switch(o){
		case "+":return a+b;
		case "-":return a-b;
		case "*":return a*b;
		case "/":return a/b;
	}
=======*/
var gt="";
var it="";
var nc=oc=0;

function clearall(){
	gt="";
	nc=oc=0;
	document.getElementById("display").value=gt;
}

function numbut(s){
	nc=oc+1;
	it=document.getElementById("display").value;
	gt=it+s;
	document.getElementById("display").value=gt;
}

function optbut(o){
	if(nc==oc+1){
		oc=nc;
		it=document.getElementById("display").value;
		var n=it.length;
		if(it.charAt(n-1)!="+" && it.charAt(n-1)!="-" && it.charAt(n-1)!="*" && it.charAt(n-1)!="/"){
			gt=it+o;
			document.getElementById("display").value=gt;
		}
	}
}

function backspace(){
	it=document.getElementById("display").value;
	var n = it.length;
	
	if(n==0)
		oc=nc=0;
	
	if(it.charAt(n-1)=="+" || it.charAt(n-1)=="-" || it.charAt(n-1)=="*" || it.charAt(n-1)=="/"){
		//nc=oc-1;
		oc=nc-1;
	}
	gt=it.slice(0,-1);
	document.getElementById("display").value=gt;
}

function compute(){
	x = document.getElementById("display").value;
	if(x.charAt(0)=="-")
		x="0"+gt;
	x+="#";
	//document.getElementById("stc").innerHTML=x;
	var numarr = [];
	var optarr = [];
	numarr.push("#");
	optarr.push("#");
	var i=0;
	var snum = "";
	while(x.charAt(i)!="#"){
		if(x.charAt(i)=="+" || x.charAt(i)=="-" || x.charAt(i)=="*" || x.charAt(i)=="/"){
			numarr.push(parseInt(snum));
			snum="";
			optarr.push(x.charAt(i));
		}else{
			snum+=x.charAt(i);
		}
		if(x.charAt(i+1)=="#")
			numarr.push(parseInt(snum));
		i+=1;
	}
	//document.getElementById("ntc").innerHTML=numarr.join(",");
	//document.getElementById("otc").innerHTML=optarr.join(",");
	var fnum=0,snum=0;
	
	while(optarr.join("")!="#"){
		
		snum=numarr.pop();
		fnum=numarr.pop();
		
		numarr.push(operation(fnum,optarr.pop(),snum));

	}
	var ans = numarr.pop();
	document.getElementById("display").value=ans;
	//document.getElementById("atc").innerHTML=ans;
}

function operation(a,o,b){
	switch(o){
		case "+":return a+b;
		case "-":return a-b;
		case "*":return a*b;
		case "/":return a/b;
	}
//>>>>>>> 1a59d6cc7f2cb123fe0777e995f31eb894a11465
}