<?php
require_once('user_model.php');
if(isset($_POST['submit'])){
    $projectname=$_POST['projectname'];
    $projectdomain=$_POST['domain'];
    $projectdescription=$_POST['description'];

    $result=addProject($projectname,$projectdomain,$projectdescription);
    if($result){
        echo"<font face=\"times new roman\" size=\"6\">Congratulations New Project Has been added</font>";
    }else{
        echo"<font face=\"times new roman\" size=\"6\">Failed! Please try again</font>";
    }
}

?>