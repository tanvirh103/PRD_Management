<?php
require_once('database.php');
function userinfo($username,$password){
    $conn=dbConnection();
    $sql="select * from userinfo where userName='$username' and password='$password'";
    $result=mysqli_query($conn,$sql);
    return $result;
}
function addProject($projectname,$projectdomain,$projectdescription){
    $conn=dbConnection();
    $sql="INSERT INTO projectinfo VALUES('','$projectname','$projectdomain','$projectdescription')";
    $result=mysqli_query($conn,$sql);
    return $result;
}
?>