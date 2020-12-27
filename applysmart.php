<?php 
ob_start();
session_start();
if (isset($_SESSION["id"])) {
    include_once "headerafter.php";
} else {
    include_once "headerbefor.php";
}?>





</br> </br>


<center>
    <div class="register">
        <div class="container-fluid">

            <div class="col-lg-9 nopadding">

                <div class="search_section d-flex flex-column align-items-center justify-content-center">
                    <div class="search_background" style="background-image:url(images/search_background.jpg);"></div>
                    <div class="search_content text-center" style="width: 80%;">
                        <input type="submit" class="search_submit_button trans_200" value="Student Information" name="tok" style="margin-top: 60px;">
                        <form id="search_form" class="search_form" method="POST">
                            <div class="form-row">
                                <div class="form-group col-md-6">


                                    <input class="form-control " id="search_form_category" class="input_field search_form_category" type="text" placeholder="student full name" name="t1" required="required sty">
                                </div>
                                <div class="form-group col-md-6">
                                    <input class="form-control " id="search_form_degree" class="input_field search_form_degree" type="number" placeholder="student national id (14 numbers)" name="t2" required="required">
                                </div>
                                <div class="form-group col-md-6">
                                    <input class="form-control " id="search_form_degree" class="input_field search_form_degree" type="text" placeholder="Previous student school" name="t3" required="required">
                                </div>
                                <div class="form-group col-md-6">
                                    <select class="form-control " id="inputState" class="form-control " name="t4">
                                        <option selected>grade level applying to...</option>
                                        <option>lecel 1</option>
                                        <option>level 2</option>
                                    </select> </br>
                                </div>
                                <div class="form-group col-md-4">

                                    <select class="form-control " id="inputState" class="form-control " name="t5">
                                        <option selected>gender</option>
                                        <option>male</option>
                                        <option>female</option>
                                    </select> </br>
                                </div>
                                <div class="form-group col-md-4">
                                    <select class="form-control " id="inputState" class="form-control " name="t6">
                                        <option selected>secend language</option>
                                        <option>english</option>
                                        <option>germany</option>
                                        <option>french</option>
                                    </select> </br>
                                </div>
                                <div class="form-group col-md-4">
                                    <select id="inputState" class="form-control " name="t7">
                                        <option selected>religion</option>
                                        <option>muslim</option>
                                        <option>christian</option>
                                    </select> </br>
                                </div>
                                <div class="form-group col-md-6">
                                    <input class="form-control" name="t8" type="date" value="0000-00-00" id="example-date-input" style="  color: #727679;">
                                    </br>
                                </div>
                                <div class="form-group col-md-6">
                                    <input class="form-control " id="search_form_degree" class="input_field search_form_degree" type="text" placeholder="citizenshipe" name="t9" required="required">
                                </div>
                                <div class="form-group col-md-6">
                                    <input class="form-control " id="search_form_degree" class="input_field search_form_degree" type="text" placeholder="address" name="t10" required="required">
                                </div>
                                <div class="form-group col-md-6">
                                    <input class="form-control " id="search_form_degree" class="input_field search_form_degree" type="text" placeholder="home phone" name="t11" required="required">
                                </div>
                                <input type="submit" class="search_submit_button trans_200" value="Father's Information" name="txtsi" style="margin-bottom: 20px;">
                                <div class="form-group col-md-6">
                                    <input class="form-control " id="search_form_degree" class="input_field search_form_degree" type="text" placeholder="Father's Academic Degree" name="t12" required="required">
                                </div>
                                <div class="form-group col-md-6">
                                    <input class="form-control " id="search_form_degree" class="input_field search_form_degree" type="text" placeholder=" Father's jop" name="t13" required="required">
                                </div>
                                <div class="form-group col-md-6">
                                    <input class="form-control " id="search_form_degree" class="input_field search_form_degree" type="text" placeholder="Father's Company Business" name="t14" required="required">
                                </div>
                                <div class="form-group col-md-6">
                                    <input class="form-control " id="search_form_degree" class="input_field search_form_degree" type="text" placeholder="Father's Email" name="t15" required="required">
                                </div>
                                <div class="form-group col-md-6">
                                    <input class="form-control " id="search_form_degree" class="input_field search_form_degree" type="text" placeholder="Father's Mobile" name="t16" required="required">
                                </div>
                                <div class="form-group col-md-6">
                                    <input class="form-control " id="search_form_degree" class="input_field search_form_degree" type="text" placeholder="Father's National Id (14 Numbers)" name="t17" required="required">
                                </div>
                                <input type="submit" class="search_submit_button trans_200" value="Mother's Information" name="txtsi" style="margin-bottom: 20px;">
                                <div class="form-group col-md-6">
                                    <input class="form-control " id="search_form_degree" class="input_field search_form_degree" type="text" placeholder=" Mother's Name" name="t18" required="required">
                                </div>
                                <div class="form-group col-md-6">
                                    <input class="form-control " id="search_form_degree" class="input_field search_form_degree" type="text" placeholder="  Mother's Academic Degree" name="t19" required="required">
                                </div>
                                <div class="form-group col-md-4">
                                    <input class="form-control " id="search_form_degree" class="input_field search_form_degree" type="text" placeholder="Mother's jop" name="t20" required="required">
                                </div>
                                <div class="form-group col-md-4">
                                    <input class="form-control " id="search_form_degree" class="input_field search_form_degree" type="text" placeholder="Mother's Email" name="t21" required="required">
                                </div>
                                <div class="form-group col-md-4">
                                    <input class="form-control " id="search_form_degree" class="input_field search_form_degree" type="text" placeholder="Mother's Mobile" name="t22" required="required">
                                </div>
                                <div class="form-group col-md-6">
                                    <input class="form-control " id="search_form_degree" class="input_field search_form_degree" type="text" placeholder="Mother's National Id (14 Numbers)" name="t23" required="required">
                                </div>


                                <button type="submit" class="search_submit_button trans_200" value="Submit" name="ptncc" style="margin-bottom: 20px;">apply now</button>
                                <?php

                                if (isset($_POST["ptncc"])) {
                                    include_once "apply.php";
                                    $app = new  applyonsmart();
                                    $app->seti1($_POST["t1"]);
                                    $app->seti2($_POST["t2"]); 
                                    $app->seti3($_POST["t3"]);
                                    $app->seti4($_POST["t4"]);
                                    $app->seti5($_POST["t5"]);
                                    $app->seti6($_POST["t6"]);
                                    $app->seti7($_POST["t7"]); 
                                    $app->seti8($_POST["t8"]);
                                    $app->seti9($_POST["t9"]);
                                    $app->seti10($_POST["t10"]);
                                    $app->seti11($_POST["t11"]);
                                    $app->seti12($_POST["t12"]); 
                                    $app->seti13($_POST["t13"]);
                                    $app->seti14($_POST["t14"]);
                                    $app->seti15($_POST["t15"]);
                                    $app->seti16($_POST["t16"]);
                                    $app->seti17($_POST["t17"]); 
                                    $app->seti18($_POST["t18"]);
                                    $app->seti19($_POST["t19"]);
                                    $app->seti20($_POST["t20"]);
                                    $app->seti21($_POST["t21"]);
                                    $app->seti22($_POST["t22"]); 
                                    $app->seti23($_POST["t23"]);
                                   
                                    $val=$app->add();
                                    if ($val == "ok") {
                                        echo ("<div class='alert alert-success'> Your Account has been created </div>");
                                    } else {
                                        echo ("<div class='alert alert-danger'>$val </div>");
                                    }
                                }

                                ?>
                            </div>

                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
    </div>
    </div>

    <?php include_once "footer.php" ?>