<?php
session_start();
if(!empty($_SESSION["userId"])) { 
           $new="gfhfhf";         
    require_once './view/dashboardnew.php';
} else {   
    require_once './view/login-form.php';
}
?>
