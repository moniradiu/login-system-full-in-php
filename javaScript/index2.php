<!DOCTYPE html>
<html>
<head>
	<title>Part 3JavaScript</title>
</head>
<style>
#myDIV {
  width: 100%;
  padding: 50px 0;
  text-align: center;
  background-color: lightblue;
  margin-top: 20px;
}
</style>
<body>
<p id="demo"> IELTS CLASS START</p>
<p id="demo2"> Complete Your Coures</p>

<button id="demo1" onclick="greek()">Click Me</button>

<div id="myDIV">
	<h4>For show and hide div</h4>
</div>
<button id="demo1" onclick="Breat()">Click Me</button>

<div class="col-md-12">
	<h4>For Loop 1 to 100 Display Here</h4>
	<p id="demo33"></p>
	<button onclick="Bit()">Click Me</button>
</div>
</body>
</html>

<script type="text/javascript">
	function greek(){
		//p tag valu show alert sms
 	/*var poo =document.getElementById('demo').innerHTML;
 	alert(poo);*/


 	//2p tag data stil other data show beside, click to countinous.

/* 	var  DataDemo=document.getElementById('demo').innerHTML;
 	var DataDemo2=document.getElementById('demo2').innerHTML;

 	document.getElementById('demo').innerHTML+=DataDemo2;*/

 	// 2p tag show and hide
 	var dataDemo=document.getElementById('demo').innerHTML;
 	var dataDemos=document.getElementById('demo2').innerHTML;

 	document.getElementById('demo').innerHTML=dataDemo+" "+dataDemos;
 	alert(dataDemo);

 	document.getElementById('off').style.display="none";
 	document.getElementById('on').style.display="block";
 	document.getElementById('demo').style.display="none";





	}

</script>
<script>
function Breat() {
  var x = document.getElementById("myDIV");
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
}
</script>
<script type="text/javascript">
function Bit(){
		var text= "";
		var i;
		for (i = 0; i < 100; i++) {
			text += "The number is " + i + "<br>";
		}
		document.getElementById('demo33').innerHTML=text;
	}
</script>