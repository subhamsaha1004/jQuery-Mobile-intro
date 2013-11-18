
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Survey App</title>
		<link rel="stylesheet" href="css/uncompressed/global.css" />
		<link rel="stylesheet" href="css/uncompressed/jquery.mobile-1.2.0.css" />
		<link rel="stylesheet" href="css/uncompressed/themes/custom-mobile-theme.css" />
		<link rel="stylesheet" href="css/uncompressed/themes/custom-style.css" />
		<script src="js/minified/jquery-1.8.2.min.js"></script>
		<script src="js/minified/jquery.mobile-1.2.0.min.js"></script>
	</head>
	<body>
		<div data-role="page" data-theme="a" id="loginWrapper">
			<div id="header" data-role="header" data-position="inline">
				<h1>Survey App - Login Page</h1>
			</div>


			<div id="contentPortion" data-role="content" data-theme="a">

				<form>
					<div id="loginForm">
						<h4>Enter your credentials to login</h4>
						<div id="usernameDiv" data-role="field-contain">
							<input type="text" id="username" placeholder="Username" name="username" />
						</div> <!-- end of username -->
						<div id="passwordDiv" data-role="field-contain">
							<input type="password" id="password" placeholder="Password" name="password" />
						</div> <!-- end of password -->
						<div id="loginButtonDiv" data-role="field-contain">
							<button type="submit" name="login" data-inline="true">Login</button>
						</div> <!-- end of button -->
					</div>
				</form>

			</div>


			<div id="footer" data-role="footer" data-position="fixed">
				<h4>Copyright &copy; MyAwesomeCompany Private Ltd.</h4>
			</div>
		</div>

		<script src="js/uncompressed/global.js"></script>
		<script src="js/uncompressed/main.js"></script>

	</body>
</html>