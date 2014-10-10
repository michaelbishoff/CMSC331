<html>
<body>

Submitted<br />
<?php

echo("Name: " . $_POST['name'] . "<br />");
echo("Phone: " . $_POST['phoneNumber'] . "<br />");
echo("Location: " . $_POST['location'] . "<br />");
echo("Issue: " . $_POST['issue'] . "<br />");


include('CommonMethods.php');
$debug = true;
$COMMON = new Common($debug); // common methods                                

$sql = "INSERT INTO `issueReport` VALUES ('','" . $_POST['name']. "','" . $_POST['phoneNumber'] . "','" . $_POST['location'] . "','" . $_POST['issue'] . "')";

//$sql = "INSERT INTO `issueReport` VALUES ('', '$_POST['name']', '$_POST['phoneNumber']', '$_POST['location']', '$_POST['issue']')";


$rs = $COMMON->executeQuery($sql, $_SERVER["SCRIPT_NAME"]);
  // row->fetch since just inserting data                                      
//$row = mysql_fetch_array($rs);


?>
<br /><br />

<a href="submit_question.php">Back to Home Page</a>

</body>
</html>