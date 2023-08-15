<?php
require_once('user_model.php');
if(isset($_POST['submit'])){
    $username=$_POST['username'];
    $password=$_POST['password'];
    $result=userinfo($username,$password);
    if(mysqli_num_rows($result)>0){
        header('location:analyst_dashboard.html');
    }else{
        header('location:wrong.html');
    }

}
?>