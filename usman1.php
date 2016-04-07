<html>
<body>
    <head>
        <link rel="stylesheet" type="text/css" href="styling.css">
        </head>
        
<h1 class="phpp">FORM DATA</h1>

<?php



$T1=  $_POST["text1"];
echo "Name:    " .$T1."<br>";
$T2=$_POST["text2"];
echo " Father Name:    " .$T2."<br>";
$T3=$_POST["text3"];
echo "Department:   ".$T3."<br>";
$T4=$_POST["text4"];
echo "Age:  ".$T4."<br>";
$T5=$_POST["depart"];
echo "Department:   ".$T5."<br>";
$T6=$_POST["shift"];
echo "Shift:    ".$T6;



?>

<table>
    <tr>
        <th>NAME</th>
        <th> FATHER NAME</th>
        <th>Department</th>
        <th>Age</th>
        <th>Department</th>
        <th>Shift</th>
        
        </tr>
        
        <tr>
            <td><?php echo $T1 ?></td>
            <td><?php echo $T2 ?></td>
            <td><?php echo $T3?></td>
            <td><?php echo $T4 ?></td>
            <td><?php echo $T5 ?></td>
            <td><?php echo $T6 ?></td>
            
            
            </tr>
    
    </table>
    
    
   <?php

$username = "root";
$password = "";
$hostname = "localhost";

$dbhandle = mysql_connect($hostname, $username, $password)
    or die("Unable to connect to MySQL");
echo "Connected to MySQL<br>";

$selected = mysql_select_db("mydatabase",$dbhandle)
    or die("Could not selected db2");
echo "Conneted to mydatabase<br>", "<br>";


 $sql = "INSERT INTO info1 ( Name, FatherName, Class, Age,Department,Shift) VALUES ('$T1','$T2','$T3','$T4','$T5','$T6')";
mysql_query($sql);

?>
   
</body>
</html>