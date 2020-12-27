<?php
session_start();
include_once "headerbefor.php"; ?>

</br> </br>
</br></br>
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
						 <h1 style=" font: 	px poppins-regular;"> forget password from update</h1>
				<form class="contact100-form validate-form" method="POST" >
					<div class="wrap-input100">
						<input id="phone" class="input100" type="text" name="txtcode" placeholder=" enter code">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100">
						<input id="phone" class="input100" type="password" name="txtnewpassword" placeholder=" update new password ">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100">
						<input id="phone" class="input100" type="text" name="txtconfirm" placeholder=" confirm password">
						<span class="focus-input100"></span>
					</div>
							<div class="container-contact100-form-btn">
								<button class="contact100-form-btn" style=" background-color: #FFB606;" name="btnupdate" >confirmation
									</button>
							</div>
							<?php
                    if(isset($_POST["btnupdate"]))
                    {
                            include_once "student.php";
                            $cust=new student();
                            if($_SESSION["code"]==$_POST["txtcode"])
                            {
                              if($_POST["txtnewpassword"]==$_POST["txtconfirm"]){
                                  $cust->setpassword($_POST["txtnewpassword"]);
                                      $ms=$cust->updatepassword();
                                      echo("<br/><div class='alert alert-success'> Your Password Has been Updated </div>");
                              }
                              else
                              echo("<br/><div class='alert alert-danger'>Confirm must be match password , Try Again </div>");
                            }
                            else
                            echo("<br/><div class='alert alert-danger'> Invaild Code , Try Again </div>");
                        }
                    ?>
					 
							
				</form>
			</center>
			</div>






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