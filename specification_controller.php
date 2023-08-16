<?php
 require_once('user_model.php');
    if(isset($_POST['submit'])){
        $specificationname=$_POST['specificationname'];
        $ScreenDefinition=$_POST['ScreenDefinition'];
        $UserStory=$_POST['UserStory'];
        $AcceptanceCriteria=$_POST['AcceptanceCriteria'];

        $src = $_FILES['myfile']['tmp_name'];
        $fileName = 'Uploads/Images/'.$_FILES['myfile']['name'];
        $des = "Uploads/Images/".$_FILES['myfile']['name'];
        move_uploaded_file($src, $des);
        
        $result=addSpecification($specificationname,$ScreenDefinition,$UserStory,$AcceptanceCriteria,$fileName);
        if($result){
        echo"<font face=\"times new roman\" size=\"6\">Congratulations New Specification Has been added</font>";
        }else{
        echo"<font face=\"times new roman\" size=\"6\">Failed! Please try again</font>";
        }
        
    }

?>