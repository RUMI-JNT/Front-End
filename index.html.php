BB<!DOCTYPE HTML>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="layout-header">

<div class="header-navigation">
<h1 class="navigation-title"><a href="#" class="title-link">RUMI</a></h1>
	<ul class="navigation-links">
		<li><a class="about" href="#">about</a></li>
    <li><a href="#">contact</a></li>
	</ul>
</div>
</div>
<div class="layout-body">
	<?php

// Check that user sent some data to begin with. 

 <input type="text" name="yourfield" value="<?php print $yourfield; ?>">
 <input type="submit" name="youraction" value="save">
</form>
	<div class="body-form">
		<img class="form1-image" src="user-image.jpg">
		<form class="form1" id="form1" method="get" action="">
			<label>Username</label>
			<input type="text" class="form-control" id="username" placeholder="Username">
			<label>Password</label>
			<input type="password" class="form-control" id="password" placeholder="Password">
			<div class="form-group">
				<label class= "form-control-label">Enter Email</label>
					<input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email">
				 </div>
			<label>Enter Cellphone</label>
			<input class="form-control" id="cellphone" type="tel" name="phone" placeholder="(555)-555-5555" id="form1-cellphone" maxlength="14">
		</form>
		<button id="form1-button" type="submit" form="form1" class="btn">Next</button>
	</div>
</div>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<script
  src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"
  integrity="sha256-VazP97ZCwtekAsvgPBSUwPFKdrwD3unUfSGVYrahUqU="
  crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.17.0/jquery.validate.min.js"></script>
<script src="functions.js"></script>
<script>
	$( document ).ready(
	$("input[name='phone']").keyup(function() {
    $(this).val($(this).val().replace(/^(\d{3})(\d{3})(\d)+$/, "($1)$2-$3"));
}));
</script>
