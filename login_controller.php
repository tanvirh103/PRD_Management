<?php
require_once('user_model.php');
if(isset($_POST['submit'])){
    $username=$_POST['username'];
    $password=$_POST['password'];
    $result=userinfo($username,$password);

    if($result['Role']=="Analyst"){
        header('location:analyst_dashboard.html');
    }else if($result['Role']=="Admin"){
        header('location:admin_dashboard.php');
    }else{
        header('location:wrong.html');
    }

}
?>