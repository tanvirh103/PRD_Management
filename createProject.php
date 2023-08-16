<?php
require_once('user_model.php');
$result=featureName();
$result1=SpecificationName();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Project Page</title>
</head>
<body>
    <center>
        <font face="times new roman" size="6">Create Project</font>
        <table>
            <form action="project_controller.php" method="post">
            <tr><td>Project Name: </td><td><input type="text" name="projectname"></td></tr>
            <tr><td>List of Feature:</td></tr>
            <tr>
            <?php
             if(mysqli_num_rows($result)>0){
                $option=mysqli_fetch_all($result,MYSQLI_ASSOC);
                foreach($option as $option){
                    ?>
                   <td><input type="checkbox" name="Featurelist[]" value="<?php echo $option['FeatureName']?>"><?php echo $option['FeatureName'];?></td>
                   </tr>
                    <?php
                    
                }
            }else{
                echo "<tr><td>No Feature Found</td></tr>";
            }
        
            ?>
            
            <tr ><td>List of Specification: </td></tr>
            <tr>
            <?php
             if(mysqli_num_rows($result1)>0){
                $option1=mysqli_fetch_all($result1,MYSQLI_ASSOC);
                foreach($option1 as $option1){
                    ?>
                   <td><input type="checkbox" name="SpecificationList[]" value="<?php echo $option1['SpecificationName']?>"><?php echo $option1['SpecificationName'];?></td>
                   <tr><br></tr>
                    <?php
                }
            }else{
                echo "<tr><td>No Specification Found</td></tr>";
            }
            ?> 
            </tr>
            <tr><td><br></td></tr>
            <tr align="right"><td><input type="submit" name="submit" value="Create Project"></td></tr>
        </table>
    </form>
    </center>
</body>
</html>