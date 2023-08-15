<?php
require_once('user_model.php');
$ProjectName= $_REQUEST['name'];
$row=projectid($ProjectName);
$PID=$row['PID'];
$result=featurename($PID);
if(mysqli_num_rows($result)>0){
    $option=mysqli_fetch_all($result,MYSQLI_ASSOC);
}
foreach($option as $option){
   echo"<option>{$option['FeatureName']} </option>";
}
?>