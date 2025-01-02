Page to display data from "muser" table <br><br>
<?php

$dbhost = '202.165.15.38';
$dbuser = 'fusion_user';
$dbpasswd = 'APsystem#';
$dbname   = 'fusion_sandbox';
// $dbport   = '6033';

if(!($conn = mysqli_connect($dbhost, $dbuser, $dbpasswd, $dbname))) die("Sorry we are unable to connect to the db server. Please try again later. " . mysqli_error()); //choke(__FILE__, __LINE__, mysqli_error());


$res = $conn->query("SELECT * FROM muser");
if ($res->num_rows > 0 ) {
   while($row = $res->fetch_array(MYSQLI_ASSOC)){
     echo $row['SID'].' '.$row['Sname'].'<br>';
   }
}
 ?>

 <br>-----End of Page-----
