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
function featureName($PID){
    $conn=dbConnection();
    $sql="SELECT FeatureName FROM featureinfo where PID='$PID'";
    $result=mysqli_query($conn,$sql);
    return $result;
}
function featureid($FeatureName){
    $conn=dbConnection();
    $sql="SELECT * FROM featureinfo where FeatureName='$FeatureName'";
    $result=mysqli_query($conn,$sql);
    $row=mysqli_fetch_assoc($result);
    return $row;
}
function addSpecification($PID,$FID,$specificationname,$description){
    $conn=dbConnection();
    $sql="INSERT INTO specificationinfo VALUES('','$PID','$FID','$specificationname','$description')";
    $result=mysqli_query($conn,$sql);
    return $result;
}

?>