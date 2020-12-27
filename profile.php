<?php
ob_start();
session_start();
if (isset($_SESSION["id"])) {
    include_once "headerafter.php";
} else {
    include_once "headerbefor.php";
}
?>


<div class="wrap-contact100 container-contact100">
    <center>
        <table class="table table-border table-striped table-dark" style="margin:25px;width:75%">
        <h1 style="margin-top:180px; font-family: open sans,sans-serif; font-weight: 700; text-transform: uppercase; color: #32383e;">Profile Page </h1>

            <?php
            include_once "student.php";
            $stu = new student();
            $u = $stu->namebyid();
            if ($row = mysqli_fetch_assoc($u)) {
            ?>


                <tr>
                    <td colspan="2" style="text-align:center">
                        <img src="student/<?php echo ($_SESSION["id"]) ?>.jpg" width="200px" height="200px" /> </td>
                </tr>


                <tr>
                    <td>Full Name </td>
                    <td> <?php echo ($row["Name"]); ?> </td>
                </tr>
                <tr>
                    <td>Email </td>
                    <td> <?php echo ($row["mail"]); ?> </td>
                </tr>
                <tr>
                    <td>phone </td>
                    <td> <?php echo ($row["phone"]); ?> </td>
                </tr>
                <tr>
                    <td>Address </td>
                    <td> <?php echo ($row["address"]); ?> </td>
                </tr>
                <tr>
                    <td>password </td>
                    <td> <?php echo ($row["password"]); ?> </td>
                </tr>


                <tr>
                    <td colspan="2" style="text-align:center"> <a href="updateprofile.php" class="btn btn-warning">Update My Profile</a> </td>
                </tr>
                <tr>
                    <td colspan="2" style="text-align:center"> <a href="#" data-toggle="modal" data-target="#exampleModal" class="btn btn-danger">Delete My Account</a> </td>
                </tr>

            <?php  } ?>

        </table>
    </center>
</div>
<!--************************* delete profile ************************* examplemodel ..bta3 eldiv mo3tamed 3la ****data-toggle="modal" data-target="#exampleModal" -->

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-center">Unsubscribe User</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="post">

                    <div class="form-group alert alert-danger">
                        Are you sure delete your accoount ?

                    </div>
                    <div class="right-w3l">
                        <input type="submit" style="width:200px" class="btn btn-danger" value="Yes" name="btnyes">
                        <a href="Profile.php" style="width:200px;height:45px" class="btn btn-success"> No </a>
                    </div>


                    <?php


                    if (isset($_POST["btnyes"])) {

                        include_once "student.php";
                        $stu = new student();
                        $msg = $stu->delete();
                        if ($msg == "ok") {
                            $dir = "student/";
                            $img = $_SESSION['id'];
                            $fdir = $dir . $img . ".jpg";
                            unlink($fdir);
                            echo ("<script> window.open('logout.php', '_self')</script>");
                        } else
                            echo ("<div class='alert alert-danger'> " . $msg . "</div>");
                    }

                    ?>
                </form>
            </div>
        </div>
    </div>


    <?php
    include_once "footer.php";
    ?>