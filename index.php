<?php
$login_code= isset($_REQUEST['login']) ? $_REQUEST['login'] : '1';
if($login_code=="false"){
 
   
   echo '<script>alert("Wrong Credentials !")</script>'; 
 
}

?>
<!DOCTYPE html>
<html >
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
	      <script src="loginValidate.js"></script>
		 
        <title>School Management System</title>
    </head>
    <style>
  .box{
  margin :60px auto ;
  width : 165px;
  align-items :center;
  background-color: #fff;
  padding: 48px 40px 36px;
  border-radius:5px ;
  box-shadow:  0 0 10px ;
  }
  img{
    height:180px;
     width:100%;
  }
  input[type="submit"]{
   background: #2196F3;
   color:white;
  }
    </style>

    <body>
	  <img src="logo.jpg"/>
      <div class= "box">    
         <center>
            <h3> Login to continue</h3>
            <form  action="service/check.access.php" onsubmit="return loginValidate();" method="post"><br/>
             <br>   
          <input type="text" class="form-control" id="myid" name="myid" placeholder="Login ID" autofocus=""/>
           </br>    

             <br>  
                <input type="password" class="form-control" id="mypassword" name="mypassword" placeholder="Password"/>
           </br>

              <br>  
                <input type="submit" class="btn btn-success" value="Login" />
           </br>  
            </form>
        </center>
</div>
    </body>
</html>
