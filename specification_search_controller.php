<?php
require_once('user_model.php');
$name= $_REQUEST['name'];
$result=SpecificationSearch($name);
?>