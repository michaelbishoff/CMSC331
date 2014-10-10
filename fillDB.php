<?php

include('CommonMethods.php');
$debug = true;
$COMMON = new Common($debug); // common methods                                

$sql = "INSERT INTO `buildings` VALUES (''," . $_GET['code'] . "," . $_GET['name'] . "," . $_GET['region'] . "," . $_GET['facility'] . ")";

//$sql = "INSERT INTO `issueReport` VALUES ('', '$_POST['name']', '$_POST['phoneNumber']', '$_POST['location']', '$_POST['issue']')";

#$rs = $COMMON->executeQuery($sql, $_SERVER["SCRIPT_NAME"]);

// row->fetch since just inserting data                                      
//$row = mysql_fetch_array($rs);                                                


?>
