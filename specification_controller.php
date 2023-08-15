<?php
 require_once('user_model.php');
    if(isset($_POST['submit'])){
        $projectname=$_POST['ProjectName'];
        $featurename=$_POST['FeatureName'];
        $specificationname=$_POST['specificationname'];
        $description=$_POST['description'];

        $row=projectid($projectname);
        $PID=$row['PID'];
        $row1=featureid($featurename);
        $FID=$row1['FID'];
        
        $result=addSpecification($PID,$FID,$specificationname,$description);
        if($result){
        echo"<font face=\"times new roman\" size=\"6\">Congratulations New Specification Has been added</font>";
        }else{
        echo"<font face=\"times new roman\" size=\"6\">Failed! Please try again</font>";
        }
        
    }

?>