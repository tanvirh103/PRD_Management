<?php
require_once('user_model.php');
$result=projectname();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Specification</title>
</head>
<body>
<?php
    if(mysqli_num_rows($result)>0){
        $option=mysqli_fetch_all($result,MYSQLI_ASSOC);
     }
    ?>
    <center>
        <font face="times new roman" size="6">Create Specification</font>
        <br><br>
        <form action="specification_controller.php" method="post">
            <table>
            <tr><td>Project Name: </td>
            <td><select onchange="search(this.value)" name="ProjectName">
                <option selected>Select Project Name</option>
                <?php
                foreach($option as $option){
                    ?>
                    <option><?php echo $option['ProjectName']; ?></option>
                    <?php
                }
                ?>
             </select></td>
                </tr>
                <tr><td>Feature Name: </td>
                <td><select id="FeatureName" name="FeatureName">
                    <option selected>Select Feature</option>
                </tr>
                <tr><td>Specification Name: </td><td><input type="text" name="specificationname"></td></tr>
                <tr><td>Specification Description: </td><td><textarea name="description" id="description" cols="30" rows="5"></textarea></td></tr>
                <tr align="right"><td><input type="submit" name="submit" value="Create Specification"></td></tr>
            </table>
            
        </form>
    </center>
    <script>
            function search(str){ 
                if(str==""){
                return;
                }
                let xhttp=new XMLHttpRequest(); 
                xhttp.open('post','feature_search_controller.php',true);
                xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
                xhttp.send('name='+str);
                xhttp.onload=function(){
                document.getElementById('FeatureName').innerHTML=this.responseText;
                }
            }
            </script>
</body>
</html>