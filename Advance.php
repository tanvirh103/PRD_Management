<?php
require_once('user_model.php');
$result=SpecificationName();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Specification Details</title>
</head>
<body>
<?php
    if(mysqli_num_rows($result)>0){
        $option=mysqli_fetch_all($result,MYSQLI_ASSOC);
     }
    ?>
    <center>
    <font face="times new roman" size="6">Specification Details</font>
    <br><br>
    <table><tr>
    <td><select onchange="search(this.value)" name="ProjectName">
                <option selected>Select Specification:</option>
                <?php
                foreach($option as $option){
                    ?>
                    <option><?php echo $option['SpecificationName']; ?></option>
                    <?php
                }
            ?>
            </td></tr>
            <tr><td></td></tr>
    </table>
    </center>
    
</body>
</html>