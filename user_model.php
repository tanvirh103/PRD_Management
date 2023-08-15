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
function projectname(){
    $conn=dbConnection();
    $sql="SELECT ProjectName FROM projectinfo";
    $result=mysqli_query($conn,$sql);
    return $result;
}
function projectid($ProjectName){
    $conn=dbConnection();
    $sql="SELECT * FROM projectinfo where ProjectName='$ProjectName'";
    $result=mysqli_query($conn,$sql);
    $row=mysqli_fetch_assoc($result);
    return $row;
}
function addFeature($PID,$featurename){
    $conn=dbConnection();
    $sql="INSERT INTO featureinfo VALUES('','$PID','$featurename')";
    $result=mysqli_query($conn,$sql);
    return $result;
}
?>