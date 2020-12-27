<?php
ob_start();
session_start();
       session_destroy();
                        setcookie("usercookie"," ",time()-1);
        {
            echo("<script> window.open('signin.php', '_self')</script>");	
             }
