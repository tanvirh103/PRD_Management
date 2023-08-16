<?php
require_once('user_model.php');
$result=countProject();
$result1=countFeature();
$result2=countanalyst();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
</head>
<body>
    <center>
    <font face="times new roman" size="10">Admin Dashboard</font>
    <br><br><br>
    <font face="times new roman" size="6">Total Project: <?php echo $result["totalnumber"] ?></font><br>
    <font face="times new roman" size="6">Total Feature: <?php echo $result1["totalfeature"] ?></font><br>
    <font face="times new roman" size="6">Total Analyst: <?php echo $result2["totalanalyst"] ?></font><br><br><br>
    <table>
            <tr><td><a href="View_all_project.php">View All Project</a></td></tr>
            <tr><td><a href="search_project.html">Search Project</a></td></tr>
            <tr align="right"><td><br><br><br>&nbsp;&nbsp;&nbsp;&nbsp;<a href="logout.php">Logout</a></td></tr>
        </table>
    </center>
</body>
</html>