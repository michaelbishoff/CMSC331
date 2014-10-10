<html>

<body>
<h1>Facilities Management</h1>
<h2>Maintenance Request Form</h2>

<div>
<form action="handle_submit.php" method="post">
Customer Name: <input type="text" name="name"><br />
Customer Phone Number: <input type="text" name="phoneNumber"><br />
Issue Location: <input type="text" name="location"><br />
Issue:
<br />

Location:
<select name="location">
    <option value="" />
<?php
    include('CommonMethods.php');
    $debug = false;
    $COMMON = new Common($debug); // common methods
    
    $sql = "SELECT `building_name` FROM `buildings`";

    $rs = $COMMON->executeQuery($sql, $_SERVER["SCRIPT_NAME"]);

    while ($row = mysql_fetch_row($rs)) {
        foreach ($row as $element) {
            echo("<option value='" . $element . "'>" . $element . "</option>");
        }
    }
?>
</select>
    
    

    
<ul>
   Electrical Issues
   <li>
     Lights Out
     <ul>
       <li><input type="radio" name="issue" value="1A1"> Room Light</li>
       <li><input type="radio" name="issue" value="1A2"> Exterior Building Light</li>
       <li><input type="radio" name="issue" value="1A3"> Parking Lot Light</li>
       <li><input type="radio" name="issue" value="1A4"> Hallway Light</li>
     </ul>
   </li>
   <li>
     No Power
     <ul>
       <li><input type="radio" name="issue" value="1B1"> Light Switch Not Working</li>
       <li><input type="radio" name="issue" value="1B2"> Outlet Not Working</li>
     </ul>
   </li>
   <li>
     Elevator
     <ul>
       <li><input type="radio" name="issue" value="1C1"> Doesnt work</li>
       <li><input type="radio" name="issue" value="1C2"> Call Button Not Working</li>
       <li><input type="radio" name="issue" value="1C3"> Noise Coming From Elevator</li>
       <li><input type="radio" name="issue" value="1C4"> Doesnt Stop Correctly</li>
     </ul>
   </li>
</ul>

<br />
<input type="submit">

</form>
</div>

<table border="1">
   <tr>
     <td>id</td>
     <td>name</td>
     <td>phone</td>
     <td>locaiton</td>
     <td>issue</td>
   </tr>

<?php

//   include('CommonMethods.php');
//   $debug = false;
//   $COMMON = new Common($debug); // common methods

   $sql = "SELECT * FROM `issueReport`";
//$sql = "SELECT COUNT(`id`) FROM `issueReport`";
   $rs = $COMMON->executeQuery($sql, $_SERVER["SCRIPT_NAME"]);
   // row->fetch since just inserting data


    while ($row = mysql_fetch_row($rs)) {
        echo("<tr>");
        foreach ($row as $element) {
            echo("<td>" . $element . "</td>");
        }
        echo("</tr>");
    }




   //$size = mysql_fetch_array($rs);

//   foreach($size as $i){
//     echo("i = " . $i . "<br />");
//   }
//echo("Size = " . $size . "<br />");
/*
   for ($i = 1; $i <= $size[0]; $i++){
     $sql = "SELECT * FROM `issueReport` WHERE `id`=" . $i;
     
     $response = $COMMON->executeQuery($sql, $_SERVER["SCRIPT_NAME"]);
     // row->fetch since just inserting data
     $row = mysql_fetch_array($response);
     echo("Row = " . $row . "<br />");
     // Prints our each element of the entry in the database
     echo("<tr>");
     //foreach($row as $element){
     //echo("<td>" . $element . "</td>");
     //}
     echo("</tr>");
   }
*/
?>
</table>


</body>

</html>