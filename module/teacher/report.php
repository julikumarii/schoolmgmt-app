<?php
include('main.php');

?>
<html>		
<head>             
	<link rel="stylesheet" type="text/css" href="style.css">
	<script type="text/javascript" src="jquery-1.12.3.js"></script>
	<script type="text/javascript" src="studentClassCourse.js"></script>
	<script src = "JS/login_logout.js"></script>
<style>
.box{
  margin :60px auto ;
  width : 365px;
  align-items :center;
  background-color: #fff;
  padding: 48px 40px 36px;
  border-radius:5px ;
  box-shadow:  0 0 10px ;
  }			
</style>			
</head>
     <img src="logo.jpg" height="180" width="100%" alt="School Management System"/>				
		  <div class="header"><h1>SMS</h1></div>
		 <div class="divtopcorner">				  
		</div>
<center>
	<ul>
		<li class="manulista" align="center">
				 <a class ="menulista" href="index.php">Home</a>							
				<a class ="menulista" href="deleterep.php">Delete report</a>
				<a class ="menulista" href="logout.php">Logout"</a>						   																								
		</li>
	</ul>
</center>
<div class="box">	
		<div align="center">
		<h4>WELCOME! <?php echo $check." ";?></h4>								  
		</div>	
    <body  onload="ajaxRequestToGetMyCourse();">         		 			 
	 <form action="reportupdate.php" method="POST">
	  <div align="center" >
		 Select Class:<select id="myclass" name="myclass" onchange="ajaxRequestToGetMyCourse();">
 <?php  
$classget = "SELECT  * FROM class where id in(select DISTINCT classid from course where teacherid='$check')";
$res= mysqli_query($link,$classget);
while($cln=mysqli_fetch_array($res))
{
 echo '<option value="',$cln['id'],'" >',$cln['name'],'</option>';
   
}

?>

</select><br /><br />
Select Course<select id="mycourse" onchange="ajaxRequestToGetCourseStudent();" name="mycourse">

</select> <br />
<br/>

Select Student<select id="mystudent" onchange="" name="mystudent">

</select><br/><br/>
<textarea name="report"> </textarea> 
<br></br>
<input  type ="submit" value="Report Submit" name="submit"/>
</form>
<div>
</div>												
</body>
</html>
