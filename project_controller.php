<?php
require_once('user_model.php');
if(isset($_POST['submit'])){
    $projectname=$_POST['projectname'];
    $Featurelist=$_POST['Featurelist'];
    $SpecificationList=$_POST['SpecificationList'];
    $featurearray="";
    $Specificationarray="";
    foreach($Featurelist as $feature){
       $featurearray.=$feature.",";
    }
    foreach($SpecificationList as $Specification){
        $Specificationarray.=$Specification.",";
    }
    $result=addProject($projectname,$featurearray,$Specificationarray);
    if($result){
        echo"<font face=\"times new roman\" size=\"6\">Congratulations New Project Has been added</font>";
    }else{
        echo"<font face=\"times new roman\" size=\"6\">Failed! Please try again</font>";
    }
}

?>