
<html>
  <head>


    <title>java script</title>
  </head>
  <body>
   <!--  onclick show alert -->
   <!--  <p id="poo">please click me</p>

    <button onclick="myPoo()" >Save</button> -->

    <p id="demo">i am learing javascript</p>
    <p id="demos">My Name is munira</p>

    <button  onclick="showID()" id="close">Show ID</button>


  </body>
</html>

<script type="text/javascript">

function showID() {
  var demoVariable=document.getElementById('demo').innerHTML;
  var demosVariable=document.getElementById('demos').innerHTML;
  


  document.getElementById('demos').innerHTML=demosVariable+" "+demoVariable;
  alert(demoVariable);

  document.getElementById('close').style.display="none";
  document.getElementById('demo').style.display="none";
}

</script>