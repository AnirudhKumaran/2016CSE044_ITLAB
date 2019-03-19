var gt="";
var it="";
var nc=oc=0;

function clearall(){
	gt="";
	nc=oc=0;
	document.getElementById("display").value=gt;
}

function num0(){
	nc=oc+1;
	it=document.getElementById("display").value;
	gt=it+"0";
	document.getElementById("display").value=gt;
}

function num1(){
	nc=oc+1;
	it=document.getElementById("display").value;
	gt=it+"1";
	document.getElementById("display").value=gt;
}

function num2(){
	nc=oc+1;
	it=document.getElementById("display").value;
	gt=it+"2";
	document.getElementById("display").value=gt;
}

function num3(){
	nc=oc+1;
	it=document.getElementById("display").value;
	gt=it+"3";
	document.getElementById("display").value=gt;
}

function num4(){
	nc=oc+1;
	it=document.getElementById("display").value;
	gt=it+"4";
	document.getElementById("display").value=gt;
}

function num5(){
	nc=oc+1;
	it=document.getElementById("display").value;
	gt=it+"5";
	document.getElementById("display").value=gt;
}

function num6(){
	nc=oc+1;
	it=document.getElementById("display").value;
	gt=it+"6";
	document.getElementById("display").value=gt;
}

function num7(){
	nc=oc+1;
	it=document.getElementById("display").value;
	gt=it+"7";
	document.getElementById("display").value=gt;
}

function num8(){
	nc=oc+1;
	it=document.getElementById("display").value;
	gt=it+"8";
	document.getElementById("display").value=gt;
}

function num9(){
	nc=oc+1;
	it=document.getElementById("display").value;
	gt=it+"9";
	document.getElementById("display").value=gt;
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

function addop(){
	if(nc==oc+1){
		oc=nc;
		it=document.getElementById("display").value;
		var n=it.length;
		if(it.charAt(n-1)!="+" && it.charAt(n-1)!="-" && it.charAt(n-1)!="*" && it.charAt(n-1)!="/"){
			gt=it+"+";
			document.getElementById("display").value=gt;
		}
	}
}

function subop(){
	if(nc==oc+1){
		oc=nc;
		it=document.getElementById("display").value;
		var n=it.length;
		if(it.charAt(n-1)!="+" && it.charAt(n-1)!="-" && it.charAt(n-1)!="*" && it.charAt(n-1)!="/"){
			gt=it+"-";
			document.getElementById("display").value=gt;
		}
	}
}

function mulop(){
	if(nc==oc+1){
		oc=nc;
		it=document.getElementById("display").value;
		var n=it.length;
		if(it.charAt(n-1)!="+" && it.charAt(n-1)!="-" && it.charAt(n-1)!="*" && it.charAt(n-1)!="/"){
			gt=it+"*";
			document.getElementById("display").value=gt;
		}
	}
}

function divop(){
	if(nc==oc+1){
		oc=nc;
		it=document.getElementById("display").value;
		var n=it.length;
		if(it.charAt(n-1)!="+" && it.charAt(n-1)!="-" && it.charAt(n-1)!="*" && it.charAt(n-1)!="/"){
			gt=it+"/";
			document.getElementById("display").value=gt;
		}
	}
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
}