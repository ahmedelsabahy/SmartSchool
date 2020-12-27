<?php
include_once "headerbefor.php";
?>
</br>
<!DOCTYPE html>
<html lang="en">

<head>
	<title>sign up</title>
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
</head>

<body>


	<div class="container-contact100">
		<div class="wrap-contact100">
			<center>


				<form class="contact100-form validate-form " method="POST">


					<label class="label-input100" for="phone">USER NAME</label>
					<div class="wrap-input100">
						<input id="phone" class="input100" required type="text" name="utxt" placeholder="USER NAME">
						<span class="focus-input100"></span>
					</div>

					<label class="label-input100" for="email">Enter your email *</label>
					<div class="wrap-input100 validate-input" data-validate="Valid email is : ex@abc.xyz">
						<input id="email" class="input100" type="email" name="txtm" placeholder="Eg. example@email.com">
						<span class="focus-input100"></span>
					</div>

					<label class="label-input100" for="phone">Enter phone number</label>
					<div class="wrap-input100">
						<input id="phone" class="input100" type="text" required name="ptxt" placeholder="Eg. +1 123 000000">
						<span class="focus-input100"></span>
					</div>


					<label class="label-input100" for="phone">address</label>
					<div class="wrap-input100">
						<input id="phone" class="input100" type="text" required name="txtaddress" placeholder="YOUR ADDRESS">
						<span class="focus-input100"></span>
					</div>


					<label class="label-input100" for="phone">password</label>
					<div class="wrap-input100">
						<input id="phone" class="input100" type="password" name="txtpass" placeholder="paeessword">
						<span class="focus-input100"></span>
					</div>




					<div class="container-contact100-form-btn">
						<button class="contact100-form-btn" name="ptn" style="background: #ffb606;">
							SIGN UP
						</button>
					</div>
			</center>


			<?php
			if (isset($_POST["ptn"])) {
				include_once "student.php";
				$stu = new student();
				$stu->setname($_POST["utxt"]);
				$stu->setmail($_POST["txtm"]);
				$stu->setphone($_POST["ptxt"]);
				$stu->setaddress($_POST["txtaddress"]);
				$stu->setpassword($_POST["txtpass"]);

				$sm = $stu->add();
				if ($sm == "ok") {
					echo ("<div class='alert alert-success'> Your Account has been created </div>");
					/* echo ("<script> window.open('courses.php?se=$search', '_self')</script>"); */
				} else {
					echo ("<div class='alert alert-danger'>$sm </div>");
				}
			}
			?>
			</form>
		</div>
	</div>
	</div>

	
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
</body>

</html>
<?php
include_once "footer.php";
?>