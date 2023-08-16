<?php
require_once('user_model.php');
$result=projectinfo();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View All Project</title>
</head>
<body>
    <center>
        <font face="times new roman" size="6">View All Project Info</font>
        <br><br>
    
        <table>
            <tr>
            <?php
            if(mysqli_num_rows($result)>0){
            while($row=mysqli_fetch_assoc($result)){
                $PID=$row['PID'];
                $projectname=$row['ProjectName'];
                $FeatureName=$row['FeatureName'];
                $SpecificationName=$row['SpecificationName'];
                echo"
                <tr><td>Project ID: </td><td>$PID</td></tr>
                <tr><td>Project Name: </td><td>$projectname</td></tr>
                <tr><td>Feature Name: </td><td>$FeatureName</td></tr>
                <tr><td>Specification Name: </td><td>$SpecificationName</td></tr>
                <tr><td><br></td></tr>";
             } 
            }
             ?>    
             </tr>
        </table>
    </center>
</body>
</html>