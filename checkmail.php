<?php
ob_start();
session_start();
if (isset($_SESSION["id"])) {
    include_once "headerafter.php";
} else {
    include_once "headerbefor.php";
}

?>
</br> </br> </br></br>
<head>
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
</head>
<div class="container">
				<center>
						 <h1 style=" font: 	px poppins-regular;">Check your email</h1>
				<form class="contact100-form validate-form" method="POST" >
					<div class="wrap-input100">
						<input id="phone" class="input100" type="text" name="txtcheckmail" placeholder=" Check your email" required>
						<span class="focus-input100"></span>
					</div>
							<div class="container-contact100-form-btn">
								<button class="contact100-form-btn" style=" background-color: #FFB606;" name="ptncheck" >confirmation
									</button>
							</div>
							<?php
							if (isset($_POST["ptncheck"])) {
								include_once "student.php";
								$stu = new student();
								$stu->setmail($_POST["txtcheckmail"]);
								$ms = $stu->getbymail();
								if ($row = mysqli_fetch_assoc($ms))
								 {
									$no = rand(1111.9999);
									$link = "http://localhost/smartschool/updatepassword.php?id=".$row["idstudent"];
						
									 //Send Email
														
									 require_once "src/PHPMailer.php";
									 require_once "src/Exception.php";
									 require_once "src/SMTP.php";
									 require_once "vendor/autoload.php";
										 
										 $mail = new  PHPMailer\PHPMailer\PHPMailer();
						
										 $mail->IsSMTP();
										 //$mail->SMTPDebug = 1;
										 $mail->SMTPAuth = true;
										 $mail->SMTPSecure = 'ssl';
										 $mail->Host = "smtp.gmail.com";
										 $mail->Port = 465; // or 587
										 $mail->IsHTML(true);
						
										 $mail->Username = "yourmobileapp2017@gmail.com";
										 $mail->Password = "MMMCA@123";
						
										 $mail->setFrom('yourmobileapp2017@gmail.com', 'Nti 2020 project');
									   
										 
						
										 $mail->addAddress($_POST["txtcheckmail"], "NTI 2020 smart school");
										 $mail->Subject = 'Forget Password';
								  
										 $mail->Body ="Dear : ".($row["Name"])."\n Your Verfication Code is ".$no."\n Please Clike here To Update Password ".$link; /* دي الرساله اللي هتوصل*/
										 
										 if(!$mail->send()) {
										   //  echo "Opps! For some technical reasons we couldn't able to sent you an email. We will shortly get back to you with download details.";	
											 echo "Mailer Error: " . $mail->ErrorInfo;
										 }
										 else{
											 $_SESSION["code"]=$no;
											 echo("<div class='alert alert-success'> Check Your Email </div>");		 
										 } 
									 
								} 
								else
								 {
									echo ("<br/><div class='alert alert-danger'> Invaild Data signin </div>");
								}
							}
						
							?>			
				</form>
			</center>
			</div>

	<script src="vendor/animsition/js/animsition.min.js"></script>
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
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






	<!--
<center>
<div class="login">
		<div class="container">
			<h2>Forget Password Form - Check Email</h2>
		
			<div class="login-form-grids animated wow slideInUp" data-wow-delay=".5s">
				<form method="post">
					<input type="email" name="txtemail" placeholder="Email" required=" " >
					 
					

                    <input type="submit" value="Check Email" name="btncheck">

					
                    
				</form>
			</div>
			<h4>For New People</h4>
			<p><a href="register.php">Register Here</a> (Or) go back to <a href="index.php">Home<span class="glyphicon glyphicon-menu-right" aria-hidden="true"></span></a></p>
		</div>
	</div>

-->













	<?php
	include_once "footer.php"; ?>