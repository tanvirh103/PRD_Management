<?php
require_once('database.php');
function userinfo($username,$password){
    $conn=dbConnection();
    $sql="select * from userinfo where userName='$username' and password='$password'";
    $result=mysqli_query($conn,$sql);
    return $result;
}
function addProject($projectname,$featurearray,$Specificationarray){
    $conn=dbConnection();
    $sql="INSERT INTO projectinfo VALUES('','$projectname','$featurearray','$Specificationarray')";
    $result=mysqli_query($conn,$sql);
    return $result;
}


function addFeature($featurename){
    $conn=dbConnection();
    $sql="INSERT INTO featureinfo VALUES('','$featurename')";
    $result=mysqli_query($conn,$sql);
    return $result;
}
function featureName(){
    $conn=dbConnection();
    $sql="SELECT FeatureName FROM featureinfo";
    $result=mysqli_query($conn,$sql);
    return $result;
}

function addSpecification($specificationname,$ScreenDefinition,$UserStory,$AcceptanceCriteria){
    $conn=dbConnection();
    $sql="INSERT INTO specificationinfo VALUES('','$specificationname','$ScreenDefinition','$UserStory','$AcceptanceCriteria')";
    $result=mysqli_query($conn,$sql);
    return $result;
}

function SpecificationName(){
    $conn=dbConnection();
    $sql="SELECT SpecificationName FROM specificationinfo";
    $result=mysqli_query($conn,$sql);
    return $result;
}
function projectinfo(){
    $conn=dbConnection();
    $sql="SELECT * FROM projectinfo";
    $result=mysqli_query($conn,$sql);
    return $result;
}
function searchproject($value){
    $conn=dbConnection();
    $sql="SELECT * FROM projectinfo where ProjectName LIKE'%$value%'";
    $result=mysqli_query($conn,$sql);
    return $result;
}

?>