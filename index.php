<?php
ob_start();
session_start();
if (isset($_SESSION["id"])) {
    include_once "headerafter.php";
} else {
    include_once "headerbefor.php";
}
?>
<div class="home">

    <div class="hero_slider_container">
        <div class="hero_slider owl-carousel">
            <div class="hero_slide">
                <?php
                include "ads.php";
                $ad = new  ads();
                $d = $ad->getdate();
                while ($row = mysqli_fetch_assoc($d)) {
                ?>
                    <div class="hero_slide_background" style="background-image:url(images/<?php echo $row["addid"] ?>.jpg)"></div>
                    <div class="hero_slide_container d-flex flex-column align-items-center justify-content-center">
                        <div class="hero_slide_content text-center">
                            <h1 data-animation-in="fadeInUp" data-animation-out="animate-out fadeOut">Get your <span> Education </span> <?php echo $row["title"] ?> </h1>
                            </n> </br>
                            <a href="<?php echo $row["link"] ?>)" target="_blank" class="btn btn-warning" style="width:20%; padding: 15px;">visite us</a>
                        </div>
                    </div>
            </div>
            <div class="hero_slider_left hero_slider_nav trans_10000"><span class="trans_200">prev</span></div>
            <div class="hero_slider_right hero_slider_nav trans_100"><span class="trans_200">next</span></div>
        <?php } ?>
        </div>
    </div>
    <div class="hero_boxes">
        <div class="hero_boxes_inner">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 hero_box_col">
                        <div class="hero_box d-flex flex-row align-items-center justify-content-start">
                            <img src="images/earth-globe.svg" class="svg" alt="">
                            <div class="hero_box_content">
                                <h2 class="hero_box_title">Online Courses</h2>
                                <div class="w3l_search">
                                    <form method="post" style="margin-top:35px">
                                        <input type="search" name="Search" placeholder="Search for a Product...">
                                        <button type="submit" name="btnsearch" class="btn btn-default search" aria-label="Left Align">
                                            <i class="fa fa-search" aria-hidden="true"> </i>
                                        </button>
                                        <?php
                                        if (isset($_POST["Search"])) {
                                            $search = $_POST["Search"];
                                            echo ("<script> window.open('courses.php?se=$search', '_self')</script>");
                                        }
                                        ?>
                                        <div class="clearfix"></div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="popular page_section" style="padding-bottom: 10px;padding-top: 25px; ">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="section_title text-center margin-bottom: 0px; ">
                        <h1>Popular Courses</h1>
                    </div>
                </div>
            </div>
            <div class="row course_boxes">
                <?php
                include_once "train.php";
                $cor = new training();
                $val = $cor->getcour();
                while ($row = mysqli_fetch_assoc($val)) {
                ?>
                    <div class="col-lg-4 course_box">
                        <div class="card">
                            <img class="card-img-top" src="courses/<?php echo $row["idcours"]; ?>.jpg" alt="">
                            <div class="card-body text-center">
                                <div class="card-title"><a href="courses.php"><?php echo ($row["namecourse"]); ?></a></div>
                                </br>
                                <div class="stars">
                                    <?php
                                    for ($x = 1; $x <= $row["ratecours"]; $x++) {
                                    ?>
                                        <i class="fa fa-star blue-star" aria-hidden="true" style="color: #ffb606;"></i>
                                    <?php } ?>
                                    <?php
                                    for ($x = 1; $x <= (5 - $row["ratecours"]); $x++) {
                                    ?>
                                        <i class="fa fa-star red-star" aria-hidden="true" style="color:gray;"></i>
                                    <?php } ?>
                                </div>
                            </div>
                            <div class="price_box d-flex flex-row align-items-center">
                                <div class="course_author_image">
                                    <img src="images/author.jpg" alt="https://unsplash.com/@mehdizadeh">
                                </div>
                                <div class="course_author_name">Michael Smith, <span>Author</span></div>
                                <div class="course_price d-flex flex-column align-items-center justify-content-center"><span><?php echo ($row["prise"]); ?> $</span></div>
                            </div>
                        </div>
                    </div>

                <?php } ?>
            </div>
        </div>
    </div>
    <div class="popular page_section " style="padding-bottom: 10px;padding-top: 25px;">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="section_title text-center">
                        <h1>lates training</h1>
                    </div>
                </div>
            </div>
            <div class="row course_boxes ">
                <?php
                include_once "train.php";
                $tra = new training();
                $val = $tra->lasttrain();
                while ($row = mysqli_fetch_assoc($val)) {
                ?>

                    <div class="col-lg-4 course_box">
                        <div class="card">
                            <img class="card-img-top" src="training/<?php echo ($row["idtrain"]); ?>.jpg" alt="">
                            <div class="card-body text-center">
                                <div class="card-title"><a href="courses.php    "><?php echo ($row["nametrain"]); ?></a></div>
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
                            <div class="price_box d-flex flex-row align-items-center">
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

    <div class="popular page_section">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="section_title text-center">
                        <h1> descount training</h1>
                    </div>
                </div>
            </div>
            <div class="row course_boxes">
                <?php
                include_once "train.php";
                $tra = new training();
                $val = $tra->getdiscoun();
                while ($row = mysqli_fetch_assoc($val)) {
                ?>

                    <div class="col-lg-4 course_box">
                        <div class="card">
                            <img class="card-img-top" src="training/<?php echo ($row["idtrain"]); ?>.jpg" alt="">
                            <div class="card-body text-center">
                                <div class="card-title"><a href="courses.php    "><?php echo ($row["nametrain"]); ?></a></div>
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
                            <div class="price_box d-flex flex-row align-items-center">
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
                            <h1 class="search_title">register your course</h1>
                            <form id="search_form" class="search_form" method="POST" action="#q">
                               

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
                                <input id="search_form_degree" class="input_field search_form_degree" type="text" placeholder="mail" name="txtmail"  required="required">
                                <input id="search_form_degree" class="input_field search_form_degree" type="text" placeholder="phone" name="txtphone"  required="required">
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

    <div class="services page_section">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="section_title text-center">
                        <h1>Our Services</h1>
                    </div>
                </div>
            </div>
            <div class="row services_row">
                <div class="col-lg-4 service_item text-left d-flex flex-column align-items-start justify-content-start">
                    <div class="icon_container d-flex flex-column justify-content-end">
                        <img src="images/earth-globe.svg" alt="">
                    </div>
                    <h3>Online Courses</h3>
                    <p>In aliquam, augue a gravida rutrum, ante nisl fermentum nulla, vitae tempor nisl ligula vel nunc. Proin quis mi malesuada, finibus tortor fermentum.</p>
                </div>
                <div class="col-lg-4 service_item text-left d-flex flex-column align-items-start justify-content-start">
                    <div class="icon_container d-flex flex-column justify-content-end">
                        <img src="images/exam.svg" alt="">
                    </div>
                    <h3>Indoor Courses</h3>
                    <p>In aliquam, augue a gravida rutrum, ante nisl fermentum nulla, vitae tempor nisl ligula vel nunc. Proin quis mi malesuada, finibus tortor fermentum.</p>
                </div>
                <div class="col-lg-4 service_item text-left d-flex flex-column align-items-start justify-content-start">
                    <div class="icon_container d-flex flex-column justify-content-end">
                        <img src="images/books.svg" alt="">
                    </div>
                    <h3>Amazing Library</h3>
                    <p>In aliquam, augue a gravida rutrum, ante nisl fermentum nulla, vitae tempor nisl ligula vel nunc. Proin quis mi malesuada, finibus tortor fermentum.</p>
                </div>
                <div class="col-lg-4 service_item text-left d-flex flex-column align-items-start justify-content-start">
                    <div class="icon_container d-flex flex-column justify-content-end">
                        <img src="images/professor.svg" alt="">
                    </div>
                    <h3>Exceptional Professors</h3>
                    <p>In aliquam, augue a gravida rutrum, ante nisl fermentum nulla, vitae tempor nisl ligula vel nunc. Proin quis mi malesuada, finibus tortor fermentum.</p>
                </div>
                <div class="col-lg-4 service_item text-left d-flex flex-column align-items-start justify-content-start">
                    <div class="icon_container d-flex flex-column justify-content-end">
                        <img src="images/blackboard.svg" alt="">
                    </div>
                    <h3>Top Programs</h3>
                    <p>In aliquam, augue a gravida rutrum, ante nisl fermentum nulla, vitae tempor nisl ligula vel nunc. Proin quis mi malesuada, finibus tortor fermentum.</p>
                </div>
                <div class="col-lg-4 service_item text-left d-flex flex-column align-items-start justify-content-start">
                    <div class="icon_container d-flex flex-column justify-content-end">
                        <img src="images/mortarboard.svg" alt="">
                    </div>
                    <h3>Graduate Diploma</h3>
                    <p>In aliquam, augue a gravida rutrum, ante nisl fermentum nulla, vitae tempor nisl ligula vel nunc. Proin quis mi malesuada, finibus tortor fermentum.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="testimonials page_section">

        <div class="testimonials_background_container prlx_parent">
            <div class="testimonials_background prlx" style="background-image:url(images/testimonials_background.jpg)"></div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="section_title text-center">
                        <h1>What our students say</h1>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <div class="testimonials_slider_container">

                        <div class="owl-carousel owl-theme testimonials_slider">

                            <div class="owl-item">
                                <div class="testimonials_item text-center">
                                    <div class="quote">“</div>
                                    <p class="testimonials_text">In aliquam, augue a gravida rutrum, ante nisl fermentum nulla, vitae tempor nisl ligula vel nunc. Proin quis mi malesuada, finibus tortor fermentum.In aliquam, augue a gravida rutrum, ante nisl fermentum nulla, vitae tempor nisl ligula vel nunc. Proin quis mi malesuada, finibus tortor fermentum.</p>
                                    <div class="testimonial_user">
                                        <div class="testimonial_image mx-auto">
                                            <img src="images/testimonials_user.jpg" alt="">
                                        </div>
                                        <div class="testimonial_name">james cooper</div>
                                        <div class="testimonial_title">Graduate Student</div>
                                    </div>
                                </div>
                            </div>

                            <div class="owl-item">
                                <div class="testimonials_item text-center">
                                    <div class="quote">“</div>
                                    <p class="testimonials_text">In aliquam, augue a gravida rutrum, ante nisl fermentum nulla, vitae tempor nisl ligula vel nunc. Proin quis mi malesuada, finibus tortor fermentum.In aliquam, augue a gravida rutrum, ante nisl fermentum nulla, vitae tempor nisl ligula vel nunc. Proin quis mi malesuada, finibus tortor fermentum.</p>
                                    <div class="testimonial_user">
                                        <div class="testimonial_image mx-auto">
                                            <img src="images/testimonials_user.jpg" alt="">
                                        </div>
                                        <div class="testimonial_name">james cooper</div>
                                        <div class="testimonial_title">Graduate Student</div>
                                    </div>
                                </div>
                            </div>

                            <div class="owl-item">
                                <div class="testimonials_item text-center">
                                    <div class="quote">“</div>
                                    <p class="testimonials_text">In aliquam, augue a gravida rutrum, ante nisl fermentum nulla, vitae tempor nisl ligula vel nunc. Proin quis mi malesuada, finibus tortor fermentum.In aliquam, augue a gravida rutrum, ante nisl fermentum nulla, vitae tempor nisl ligula vel nunc. Proin quis mi malesuada, finibus tortor fermentum.</p>
                                    <div class="testimonial_user">
                                        <div class="testimonial_image mx-auto">
                                            <img src="images/testimonials_user.jpg" alt="">
                                        </div>
                                        <div class="testimonial_name">james cooper</div>
                                        <div class="testimonial_title">Graduate Student</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="events page_section">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="section_title text-center">
                        <h1>Upcoming Events</h1>
                    </div>
                </div>
            </div>
            <div class="event_items">

                <div class="row event_item">
                    <div class="col">
                        <div class="row d-flex flex-row align-items-end">
                            <div class="col-lg-2 order-lg-1 order-2">
                                <div class="event_date d-flex flex-column align-items-center justify-content-center">
                                    <div class="event_day">07</div>
                                    <div class="event_month">January</div>
                                </div>
                            </div>
                            <div class="col-lg-6 order-lg-2 order-3">
                                <div class="event_content">
                                    <div class="event_name"><a class="trans_200" href="#">Student Festival</a></div>
                                    <div class="event_location">Grand Central Park</div>
                                    <p>In aliquam, augue a gravida rutrum, ante nisl fermentum nulla, vitae tempor nisl ligula vel nunc. Proin quis mi malesuada, finibus tortor.</p>
                                </div>
                            </div>
                            <div class="col-lg-4 order-lg-3 order-1">
                                <div class="event_image">
                                    <img src="images/event_1.jpg" alt="https://unsplash.com/@theunsteady5">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row event_item">
                    <div class="col">
                        <div class="row d-flex flex-row align-items-end">
                            <div class="col-lg-2 order-lg-1 order-2">
                                <div class="event_date d-flex flex-column align-items-center justify-content-center">
                                    <div class="event_day">07</div>
                                    <div class="event_month">January</div>
                                </div>
                            </div>
                            <div class="col-lg-6 order-lg-2 order-3">
                                <div class="event_content">
                                    <div class="event_name"><a class="trans_200" href="#">Open day in the Univesrsity campus</a></div>
                                    <div class="event_location">Grand Central Park</div>
                                    <p>In aliquam, augue a gravida rutrum, ante nisl fermentum nulla, vitae tempor nisl ligula vel nunc. Proin quis mi malesuada, finibus tortor.</p>
                                </div>
                            </div>
                            <div class="col-lg-4 order-lg-3 order-1">
                                <div class="event_image">
                                    <img src="images/event_2.jpg" alt="https://unsplash.com/@claybanks1989">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row event_item">
                    <div class="col">
                        <div class="row d-flex flex-row align-items-end">
                            <div class="col-lg-2 order-lg-1 order-2">
                                <div class="event_date d-flex flex-column align-items-center justify-content-center">
                                    <div class="event_day">07</div>
                                    <div class="event_month">January</div>
                                </div>
                            </div>
                            <div class="col-lg-6 order-lg-2 order-3">
                                <div class="event_content">
                                    <div class="event_name"><a class="trans_200" href="#">Student Graduation Ceremony</a></div>
                                    <div class="event_location">Grand Central Park</div>
                                    <p>In aliquam, augue a gravida rutrum, ante nisl fermentum nulla, vitae tempor nisl ligula vel nunc. Proin quis mi malesuada, finibus tortor.</p>
                                </div>
                            </div>
                            <div class="col-lg-4 order-lg-3 order-1">
                                <div class="event_image">
                                    <img src="images/event_3.jpg" alt="https://unsplash.com/@juanmramosjr">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php
    include_once "footer.php";
    ?>