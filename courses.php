<?php
ob_start();
session_start();
if (isset($_SESSION["id"])) {
    include_once "headerafter.php";
} else {
    include_once "headerbefor.php";
}
?>
<head>
  <title>Course - Courses</title>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="description" content="Course Project">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
  <link href="plugins/fontawesome-free-5.0.1/css/fontawesome-all.css" rel="stylesheet" type="text/css">
  <link rel="stylesheet" type="text/css" href="styles/courses_styles.css">
  <link rel="stylesheet" type="text/css" href="styles/courses_responsive.css">
</head>

<body>
  <div class="super_container">
  
    <div class="home">
      <div class="home_background_container prlx_parent">
        <div class="home_background prlx" style="background-image:url(images/courses_background.jpg)"></div>
      </div>
      <div class="home_content">
        <h1>Courses</h1>
      </div>
    </div>
    <div class="popular page_section" style="padding-bottom: 50px;padding-top: 50px;">

      <div class="container">
        <div class="row">
          <div class="col">
            <div class="section_title text-center">
              <h1> training</h1>
            </div>
          </div>
        </div>
        <div class="row course_boxes" >
          <?php
          include_once "train.php";
          $tra = new training();
          if(isset($_GET["se"]))
          $val = $tra->search();
          else
          $val = $tra->getdate();
          

          while ($row = mysqli_fetch_assoc($val)) {
          ?>

            <div class="col-lg-3 course_box">
              <div class="card">
                <img class="card-img-top" src="training/<?php echo ($row["idtrain"]); ?>.jpg" alt="">
                <div class="card-body text-center">
                  <div class="card-title" style="margin-top: 15px;"><a href="#pp"><?php echo ($row["nametrain"]); ?></a></div>
                  <div class="card-text"><?php echo $row["descount"];  ?></div>
                  <div class="stars">
                    <?php
                    for ($x = 1; $x <= $row["ratevalue"]; $x++) {
                    ?>
                      <i class="fa fa-star blue-star" aria-hidden="true" style="color: #ffb606;"></i>
                    <?php } ?>

                    <?php
                    for ($x = 1; $x <= (5 - $row["ratevalue"]); $x++) {
                    ?>
                      <i class="fa fa-star red-star" aria-hidden="true" style="color:gray;"></i>
                    <?php } ?>
                  </div>
                </div>
                <div class="price_box d-flex flex-row align-items-center" style="margin-top:20px;">
                  <div class="course_author_image">
                    <img src="images/author.jpg" alt="https://unsplash.com/@mehdizadeh">
                  </div>

                  <div class="course_author_name"> prise train, <span style="text-decoration: line-through;"> <?php echo ($row["prise"] - ($row["prise"] * $row["descount"])); ?></span></div>
                  <div class="course_price d-flex flex-column align-items-center justify-content-center"><span><?php echo ($row["prise"]); ?> </span></div>
                </div>
              </div>
            </div>
          <?php } ?>
        </div>
      </div>
      </div>  

      <div class="register">
        <div class="container-fluid">
            <div class="row row-eq-height">
                <div class="col-lg-6 nopadding">

                    <div class="register_section d-flex flex-column align-items-center justify-content-center">
                        <div class="register_content text-center">
                            <h1 class="register_title">apply in smart school  and get a discount <span>50%</span> discount until 1 January</h1>
                            <p class="register_text">In aliquam, augue a gravida rutrum, ante nisl fermentum nulla, vitae tempor nisl ligula vel nunc. Proin quis mi malesuada, finibus tortor fermentum. Aliquam, augue a gravida rutrum, ante nisl fermentum nulla, vitae tempo.</p>
                            <div class="button button_1 register_button mx-auto trans_200"><a href="applysmart.php">register now</a></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 nopadding">

                    <div class="search_section d-flex flex-column align-items-center justify-content-center">
                        <div class="search_background" style="background-image:url(images/search_background.jpg);"></div>
                        <div class="search_content text-center">
                            <h1 class="search_title" id="pp">register your course</h1>
                            <form id="search_form" class="search_form" method="POST">
                               

                              <input id="search_form_name" class="input_field search_form_name" type="text" list="airports" name="airports" placeholder="Course Name" required="required" data-error="Course name is required.">

                              
                                    <datalist id="airports">
                                    <?php                                                                                       
                include_once "train.php";
                $tra = new training();
                $val = $tra->lasttrain();
                while ($row = mysqli_fetch_assoc($val)) {
                ?>                                  
                                        <option value="<?php echo $row["nametrain"] ?>">
                                        <?php }?>

                                    </datalist>
             
                                <input id="search_form_category" class="input_field search_form_category" type="text" placeholder="full name" name="txtfullname" required="required">
                                <input id="search_form_degree" class="input_field search_form_degree" type="number" placeholder="age" name="txtage"  required="required">
                                <input id="search_form_degree" class="input_field search_form_degree" type="text" placeholder="address" name="txtaddress"  required="required">
                                <input id="search_form_degree" class="input_field search_form_degree" type="number" placeholder="acadamy year" name="txtacadmy"  required="required">
                                <input id="search_form_degree" class="input_field search_form_degree" type="email" placeholder="mail" name="txtmail"  required="required">
                                <input id="search_form_degree" class="input_field search_form_degree" type="password" placeholder="phone" name="txtphone"  required="required">
                                <button type="submit" class="search_submit_button trans_200" value="Submit" name="ptnc" id="q">register course</button>

                                <?php

                                if(isset($_POST["ptnc"]))
                                {
                                    include_once "registercours.php";
                                    $reg=new  registercours();
                                    $reg->setncours($_POST["airports"]);
                                    $reg->setfullname($_POST["txtfullname"]);
                                    $reg->setage($_POST["txtage"]);
                                    $reg->setaddress($_POST["txtaddress"]);
                                    $reg->setacadmyyear($_POST["txtacadmy"]);
                                    $reg->setmail($_POST["txtmail"]);
                                    $reg->setphone($_POST["txtphone"]);
                                    $val=$reg->add();
                                    if ($val == "ok") {
                                        echo ("<div class='alert alert-success'> Your Account has been created </div>");
                                    } else {
                                        echo ("<div class='alert alert-danger'>$val </div>");
                                    }
                                }

                                ?>


                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

      <?php include_once "footer.php" ?>