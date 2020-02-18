<!DOCTYPE html>
<html>
<head>
	<title>JavaScript ReWork</title>
</head>
<body>
<div class="col-md-6">
	<p id="demo">Hey EveryOne,Do Your home work</p>

	<p id="demos">All Student`s never same home work</p>

	<button onclick="greek()" id="off">Click Here</button>
	<button onclick="greek()" id="on" style="display: none;">Show</button>

</div>

<div class="col-md-6">
	<h2>Display date and time</h2>

	<p id="demo4"></p>
	<button onclick="document.getElementById('demo').innerHTML=Date();">
		Click me to display Date and Time
	</button>

</div>
<div class="col-md-12">
	<h4>For Loop 1 to 100 Display Here</h4>
	<p id="demo33"></p>
	<button onclick="Bit()">Click Me</button>
</div>


</body>
</html>

<script type="text/javascript">
	function greek(){
		//p tag data show by alert.
		/*var pooVarb=document.getElementById('demo').innerHTML;
		alert(pooVarb);*/

		// 2p tag data show click.
	/*	var demoVariable=document.getElementById('demo').innerHTML;
		var demosVariable=document.getElementById('demos').innerHTML;

		document.getElementById('demo').innerHTML+=demosVariable;*/

		// 1st p tag value spech other p tag value
		/*var demoVariable=document.getElementById('demo').innerHTML;
		var demosVariable=document.getElementById('demos').innerHTML;

		document.getElementById('demo').innerHTML=demoVariable+"  "+demosVariable;*/


		var demoVariable=document.getElementById('demo').innerHTML;
		var demosVariable=document.getElementById('demos').innerHTML;

		document.getElementById('demo').innerHTML=demoVariable+"  "+demosVariable;
		alert(demoVariable);

		document.getElementById('off').style.display="none";
		document.getElementById('on').style.display="block";
		document.getElementById('demo').style.display="none";



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