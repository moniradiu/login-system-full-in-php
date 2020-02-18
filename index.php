<?php
include 'connect.php';
session_start();
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>curd nine</title>
  </head>
  <body>
   
    <div class="container">
    	<div class="row">

    		<div class="col-md-12"style="background: #EAEDED; padding-top: 20px;">
    			<h1 class="text-center"><u>CURD Nine</u></h1>
					<?php if(isset($_SESSION['msg'])) { ?>
    			<div class="alert alert-info">
    				<?php 
				echo $_SESSION['msg'];
				unset($_SESSION['msg'])

					?>
    			</div>
					<?php } ?>

					<?php
					 if (isset($_GET['edit'])) {
					 	$id=$_GET['edit'];
					 	$result=mysqli_query($db,"SELECT * FROM info_9 WHERE id=$id");
					 	$row=mysqli_fetch_array($result);
					 
					?>

				<form action="server.php" method="POST">
				<input type="hidden" name="id" value="<?php echo $row['id'];?>">
				  <div class="form-group">
				    <label for="InputName">Name</label>
				    <input type="text" class="form-control" id="InputName" name="name" value="<?php echo $row['name'];?>">
				  </div>
				    <div class="form-group">
				    <label for="InputEmail1">Email address</label>
				    <input type="email" class="form-control" id="InputEmail1" name="email" aria-describedby="emailHelp" value="<?php echo $row['email'];?>">
				    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
				  </div>
				   <div class="form-group">
				    <label for="InputContact">Contact</label>
				    <input type="text" class="form-control" id="InputContact" name="contact" value="<?php echo $row['contact'];?>">
				  </div>
				
				  <button type="submit" name="update" class="btn btn-primary">Update</button>
				</form>

				<?php 
					}else{ 
				?>

    			<form action="server.php" method="POST" onsubmit="return greek();">
				
				  <div class="form-group">
				    <label for="InputName">Name</label>
				    <input type="text" class="form-control" id="InputName" name="name">
				  </div>
				    <div class="form-group">
				    <label for="InputEmail1">Email address</label>
				    <input type="email" class="form-control" id="InputEmail1" name="email" aria-describedby="emailHelp">
				    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
				  </div>
				   <div class="form-group">
				    <label for="InputContact">Contact</label>
				    <input type="text" class="form-control" id="InputContact" name="contact">
				  </div>
				
				  <button type="submit" name="save" class="btn btn-primary">Submit</button>
				</form>
			<?php } ?>
    		</div>
    		<div class="clearfix"></div>
    		<div class="col-md-12" style="background: #FEF9E7; padding-top: 20px;">
    			<table class="table">
				  <thead>
				    <tr>
				      <th scope="col">#</th>
				      <th scope="col">Name</th>
				      <th scope="col">Email</th>
				      <th scope="col">Contact</th>
				      <th scope="col">Action</th>
				    </tr>
				  </thead>
				  <tbody>
				  	<?php
				  		$result=mysqli_query($db,"SELECT * FROM info_9");
				  		while ($row=mysqli_fetch_array($result)) {

				  	 ?>
				    <tr>
				      <th scope="row"><?php echo $row['id'];?></th>
				      <td><?php echo $row['name'];?></td>
				      <td><?php echo $row['email'];?></td>
				      <td><?php echo $row['contact'];?></td>
				      
				      <td>
				      
				      	<a class="btn-warning" href="index.php?edit=<?php echo $row['id'];?>">Edit</a>
				      	<a class="btn-danger" href="server.php?delete=<?php echo $row['id'];?>">Delete</a>
				      </td>
				      	<?php } ?>
				    </tr>
				 
				  </tbody>
				</table>
    		</div>
    	</div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>

<!-- validation ID fontend javascript start -->
<!-- <script type="text/javascript">
	function greek(){
		var name=document.getElementById('InputName').value;
		var name=document.getElementById('InputEmail1').value;
		var name=document.getElementById('InputContact').value;

		if(name !=""){
			alert("Correct");
		}else{
			alert("Please Don`t leave blank Name");
			name.focus();
			return false;
		}

		if(email !=""){
			alert("Corecct");
		}else{
			alert("Please Don`t leave blank Email");
			email.focus();
			return false;
		}
		if(contact !=""){
			alert("Corecct");
		}else{
			alert("Please Don`t leave blank Contact");
			contact.focus();
			return false;
		}
		return true;
	}
</script> -->
<!-- validation fontend javascript end -->

<script type="text/javascript">
	function greek(){
		var errorMsg = new Array();
		var name=document.getElementById('InputName').value;
		var name=document.getElementById('InputEmail1').value;
		var name=document.getElementById('InputContact').value;

		if(name !=""){
			alert("Correct");
		}else{
			errorMsg.push("Please Don`t leave blank Name");
			name.focus();
			return false;
		}

		if(email !=""){
			alert("Corecct");
		}else{
			errorMsg.push("Please Don`t leave blank Email");
			email.focus();
			return false;
		}
		if(contact !=""){
			alert("Corecct");
		}else{
			errorMsg.push("Please Don`t leave blank Contact");
			contact.focus();
			return false;
		}
		var messageHtml = "";

		    errorMsg.forEach(function (message) {
		        messageHtml += "<li>" + message + "</li>";
		    });

		    document.getElementById("error").innerHTML = messageHtml;
		return true;
	}
</script>