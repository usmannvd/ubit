<html>
    <body>
        
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

 
 
      
 if($_POST)
 {
    if(isset($_POST['show']))
    {
        
             


			   show1();
		
    }
    
    else if(isset($_POST['show1']))
    {
       

		show2();
    }
  }

 function show1()
 {
    $result = mysql_query("SELECT Name, FatherName,Class, Age,Department,Shift FROM info1");

while($row = mysql_fetch_array($result))
{
    echo "<b>Name: </b>".$row{'Name'}." <b>FatherName: </b>".$row{'FatherName'}." <b>Class: </b>".$row{'Class'}." <b>Age: </b>".$row{'Age'}." <b>Department: </b>".$row{'Department'}." <b>Shift: </b>".$row{'Shift'}."<br>";
}


 


       exit();
 }
    
 function show2()
 {
     
  $T1=$_POST["text1"];
      
     
 mysql_query("delete from info1 where Name='$T1'"); 
 
  echo '<script language="javascript">';
echo 'alert("'.$T1.' Has Been Deleted")';
echo '</script>';

exit();
 
 
 }
   
  ?>
       
       
        
        
        
         </body>
        </html>
       