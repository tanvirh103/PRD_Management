<?php
function dbConnection(){
    $conn=mysqli_connect('localhost','root','','prd');
    return $conn;
}

?>