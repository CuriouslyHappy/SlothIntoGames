<!DOCTYPE html>
<html>
<head>
	<title>My account</title>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="_css/accountStyle.css">

<style>
	body {
	background-color: black;
}

h1, h4, p {
	color: white;
	padding: 4px 8px;
}

hr {
	border-top: 2px solid #B600FF;
}

.user {
	position: absolute;
	left: 5%;
}
</style>



</head>
<body>

	<h1 style="color: purple;">PLAYER INFO</h1>

	<br>
	<hr>

	<div class="container-fluid">           
		<img src="_images/user.png" class="rounded-circle" width="200" height="200">
	</div>
	<div class="user">
		<p style="color: purple;">Username:</p>
		<p> <?php echo $_POST["nome"];	?>	</p>
		<p style="color: purple;">Favorite Platform:</p>
		<p>	<?php echo $_POST["preference"];	?>	</p>
	</div>

</body>
</html>