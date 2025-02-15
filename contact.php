<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta http-equiv="X-UA-Compatible" content="ie=edge" />
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" >
<link rel="stylesheet" href="style31.css">
<title>Contact</title>
</head>
<body class ="initialized">
<body id="signUpPage" data-spy="scroll" data-target=".navbar" data-offset="60">
	<nav class="navbar navbar-default navbar-fixed-top" style="background-color: black; ">
		<div class="container">
			<div class="navbar-header">
				
				<a class="navbar-brand" href="index.html"><span class="glyphicon glyphicon-home"></span> Home</a>
			</div>
			<div class="collapse navbar-collapse" id="myNavbar">
				<ul class="nav navbar-nav navbar-right">
					

				</ul>
				
				</li>
				
		</div>
	</nav>
<br>
<br>
<br>
<div class="container">
<div class="row">
<div class="col offset-md-3 col-md-6 col-sm-12 about">
<form method="POST" action="contact_script.php" >
<h1 class="text-center">CONTACT US</h1>
<div class="form-group">
<label for="name" class="taggs">Name:</label>
<input type="text" class="form-control" name="name" placeholder="Name" required>
</div>
<div class="form-group">
<label for="email" class="taggs">Email:</label>
<input type="text" class="form-control" name="email" placeholder="Email" required>
</div>
<div class="form-group">
<label for="balance" class="taggs">Subject:</label>
<input type="text" class="form-control" name="subject" placeholder="Subject" required>
</div>
<div class="form-group">
<label for="message" class="taggs">Message:</label>
<textarea type="text"  class="form-control" name="message" cols="85" rows="7"></textarea>
</div>
<button class="btn btn-danger">Submit</button><br><br>
</form>
</div>
</div>
</div>




