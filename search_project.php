<?php
require_once('user_model.php');
$name= $_REQUEST['name'];
$result = searchproject($name);
if(mysqli_num_rows($result) > 0) {
    while($project = mysqli_fetch_assoc($result)) {
        $PID=$project['PID'];
        $ProjectName=$project['ProjectName'];
        $FeatureName=$project['FeatureName'];
        $SpecificationName=$project['SpecificationName'];
        echo
        "<table>
        <tr><td>Project ID: </td><td>{$PID}</td></tr>
        <tr><td>Project Name: </td><td>{$ProjectName}</td></tr>
        <tr><td>Feature Name: </td><td>{$FeatureName}</td></tr>
        <tr><td>Specification Name: </td><td>{$SpecificationName}</td></tr>
        </table><br><br>";
        
    }
}else{
    echo "<table><tr><td>No Match Found</td></tr></table>";
}

?>