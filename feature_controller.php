<?php
    require_once('user_model.php');

    if(isset($_POST['submit'])){
        $projectname=$_POST['ProjectName'];
        $featurename=$_POST['featurename'];
        
        $row=projectid($projectname);
        $PID=$row['PID'];
        $result=addFeature($PID,$featurename);
        if($result){
            echo"<font face=\"times new roman\" size=\"6\">Congratulations New Feature Has been added</font>";
        }else{
            echo"<font face=\"times new roman\" size=\"6\">Failed! Please try again</font>";
        }
    }
?>