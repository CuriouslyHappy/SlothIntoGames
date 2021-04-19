<!DOCTYPE html>
<html>

	<head>

		<title> SignUp Sloth </title>
		<link rel="stylesheet" href="_css/SignUp.css">

		<script>
	function validaCadastro() {

			if (cadastroUser.nome.value=="") {
				alert("'Name' is obrigatory.");
				cadastroUser.nome.focus();
				return false;
			}
			if (cadastroUser.idade.value=="") {
				alert("'Level' is obrigatory.");
				cadastroUser.idade.focus();
				return false;
			}
			if (cadastroUser.email.value=="") {
				alert("'MailBox' is obrigatory.");
				cadastroUser.email.focus();
				return false;
			}
			if (cadastroUser.senha.value=="") {
				alert("'Secret Key' is obrigatory.");
				cadastroUser.senha.focus();
				return false;
			}

			alert("Account signed successfully.");
			return true;
	}


		</script>


	</head>

	<body>
		
		<h1 style="color: white;">Welcome new player</h1>
		<h2>Generate your character</h2>

		<div>

		<form name="cadastroUser" method="post" action="account.php" onsubmit="validaCadastro()">
		<h3>*Name:</h3>
			<input name="nome" type="text" placeholder="Ex.: Billy Johnson" size="25" maxlenght="30" required />
		<div id="level">
		<h3 id="lvl">*Level:
			<span id="lvlh">Put your age here</span> </h3>
			<input type="date" name="idade" required />
		</div>
		<h3>*MailBox:</h3>
			<input type="text" name="email" placeholder="Ex.:john@hotmail.com" size="25" maxlenght="50" required />
		<h3>*Secret Key:</h3>
			<input type="password" name="senha" placeholder="Try your first dog name" size="25" maxlenght="30" required />
		
		<div id="sex">
		<h3>Sex:<br>
			<input type="radio" name="sexo" value="masc">Male<br>
			<input type="radio" name="sexo" value="fem">Female<br>
		</h3>
		</div>

		<h2>What does your character likes?</h2>

		<h3>Favorite platform:</h3>
			<select name="preference">
				<option value="PC">PC</option>
				<option value="Playstation">Playstation</option>
				<option value="Xbox">Xbox</option>
				<option value="Nintendo">Nintendo</option>
				<option value="Mobile">Mobile</option>
			</select>

		<h3>Platforms you like:<h3>
			<input type="checkbox" name="platform" value="pc">PC<br>
			<input type="checkbox" name="platform" value="ps3">PS3<br>
			<input type="checkbox" name="platform" value="ps4">PS4<br>
			<input type="checkbox" name="platform" value="ps5">PS5<br>
			<input type="checkbox" name="platform" value="xbox1">Xbox One<br>
			<input type="checkbox" name="platform" value="xboxs">Xbox S<br>
			<input type="checkbox" name="platform" value="niswith">Nintendo Switch<br>
			<input type="checkbox" name="platform" value="mobile">Mobile<br>
		</h3>
		
		<h3>
			<input type="submit" value="Submit"/>
			<input type="reset" value="Return" onclick="history.back()" />
		</h3>

		<hr style="width: 99%;">

		<h4 style="color: red;">* Indicate required fields.</h4>


		</form>
		</div>

	</body>

</html>