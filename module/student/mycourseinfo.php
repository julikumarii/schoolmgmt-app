<?php  
include_once('main.php');
 $em = $_REQUEST['id'];

$courseinfo = "SELECT * FROM grade WHERE courseid='$em' and studentid='$check'";
$resc = mysqli_query($link,$courseinfo);

echo "<tr> <th>Grade</th> </tr>";
while($r=mysqli_fetch_array($resc))
{
 echo "<tr> <td>",$r['grade'],"<td></tr>";

}


?>
