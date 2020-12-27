<?php
session_start();
include_once "headerbefor.php";
?>

	<title>SIGN IN</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" type="image/png" href="images/icons/favicon.ico" />
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">


	<div class="container-contact100">
		<div class="wrap-contact100">
			<center>
				<h1 style="margin-top: 70px; font-family: open sans,sans-serif; font-weight: 600; text-transform: uppercase; "> register</h1>
				<form class="contact100-form validate-form" method="POST" style="padding-top: 10px;">
					<label class="label-input100" for="phone">USER NAME</label>
					<div class="wrap-input100">
						<input id="phone" class="input100" type="text" name="txtuser" placeholder="USER NAME" required>
						<span class="focus-input100"></span>
					</div>
					<label class="label-input100" for="phone">password</label>
					<div class="wrap-input100">
						<input id="phone" class="input100" type="password" name="txtpass" placeholder="password" required>
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100">
						<input type="checkbox" value="1" name="ptncheck" required="" style=" font-family: open sans,sans-serif; font-weight: 700; text-transform: uppercase;"> signin me
					</div>
					<div class="forget wrap-input100 " style="margin-top:20px; padding-top: 20px;">
						<a href="checkmail.php" style=" font-family: open sans,sans-serif; font-weight: 700; text-transform: uppercase;"> forget password </a>
						<div>
							<div class="container-contact100-form-btn">
								<button class="contact100-form-btn" name="ptnsignin" style="background: #ffb606;">
									SIGN IN
								</button>
							</div>

							<div class="container-contact100-form-btn">
								<a href="signup.php" style=" font-family: open sans,sans-serif; font-weight: 700; text-transform: uppercase;"> SIN UP </a>
							</div>
				</form>
			</center>

			<?php
			if (isset($_COOKIE["usercookie"])) {
				echo ("<script> window.open('index.php', '_self')</script>");
			}
			if (isset($_POST["ptnsignin"])) {
				include_once "student.php";
				$stu = new student();
				$stu->setmail($_POST["txtuser"]);
				$stu->setphone($_POST["txtuser"]);
				$stu->setpassword($_POST["txtpass"]);
				$ms = $stu->signin();
				if ($row = mysqli_fetch_assoc($ms)) {
					$_SESSION["name"] = $row["Name"];
					$_SESSION["id"] = $row["idstudent"];


					if (isset($_POST["ptncheck"])) {
						setcookie("usercookie", $_POST["txtuser"], time() + 60 * 60 * 24 * 365);
					} else {
						echo ("<script> window.open('index.php', '_self')</script>");
					}

					echo ("<script> window.open('index.php', '_self')</script>");
				} else {
					echo ("<br/><div class='alert alert-danger'> Invaild Data signin </div>");
				}
			}

			?>


		</div>
	</div>
	<script src="vendor/animsition/js/animsition.min.js"></script>
	<script>
		$(".selection-2").select2({
			minimumResultsForSearch: 20,
			dropdownParent: $('#dropDownSelect1')
		});
	</script>
	<script>
		window.dataLayer = window.dataLayer || [];

		function gtag() {
			dataLayer.push(arguments);
		}
		gtag('js', new Date());

		gtag('config', 'UA-23581568-13');
	</script>

<?php
include_once "footer.php";
?>