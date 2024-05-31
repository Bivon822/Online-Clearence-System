<?php
session_start();

if(isset($_POST['submit'])){
 if($_POST['pass']==$_POST['repass']) {
    $regno=$_POST['regno'];
    $pass=$_POST['pass'];
    $conn = mysqli_connect ("localhost","root","","student_clearance");
        $sql = "UPDATE students SET password = '$pass' WHERE matric_no = '$regno'";
    $result = mysqli_query($conn, $sql);
    echo '<script type="text/javascript">alert("password changed succesfully");window.location=\'login.php\';</script>';
         
} 
else {
    echo '<script type="text/javascript">alert("Password donot match");window.location=\'reset_password.php\';</script>';

}
}
?>




<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Reset Password</title>
     <link rel="icon" type="image/png" sizes="16x16" href="images/kafu.png">
   </head>
<style>
  @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');
*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: 'Poppins',sans-serif;
}
body{
  height: 100vh;
  display: flex;
  justify-content: center;
  align-items: center;
  padding: 10px;
  background-color:#f2f2f2;
}
.container{
  max-width: 700px;
  width: 100%;
  background-color: #fff;
  padding: 25px 30px;
  border-radius: 5px;
  box-shadow: 0 5px 10px rgba(0,0,0,0.15);
}
.container .title{
  font-size: 25px;
  font-weight: 500;
  position: relative;
}
.container .title::before{
  content: "";
  position: absolute;
  left: 0;
  bottom: 0;
  height: 3px;
  width: 30px;
  border-radius: 5px;
  background: linear-gradient(135deg, #71b7e6, #9b59b6);
}
.content form .user-details{
  display: flex;
  flex-wrap: wrap;
  justify-content: space-between;
  margin: 20px 0 12px 0;
}
form .user-details .input-box{
  margin-bottom: 15px;
  width: calc(100% / 2 - 20px);
}
form .input-box span.details{
  display: block;
  font-weight: 500;
  margin-bottom: 5px;
}
.user-details .input-box input{
  height: 45px;
  width: 100%;
  outline: none;
  font-size: 16px;
  border-radius: 5px;
  padding-left: 15px;
  border: 1px solid #ccc;
  border-bottom-width: 4px;
  transition: all 0.3s ease;
}
.user-details .input-box input:focus,
.user-details .input-box input:valid{
  border-color: green;
}
 form .gender-details .gender-title{
  font-size: 20px;
  font-weight: 500;
 }
 form .category{
   display: flex;
   width: 80%;
   margin: 14px 0 ;
   justify-content: space-between;
 }
 form .category label{
   display: flex;
   align-items: center;
   cursor: pointer;
 }
 form .category label .dot{
  height: 18px;
  width: 18px;
  border-radius: 50%;
  margin-right: 10px;
  background: #d9d9d9;
  border: 5px solid transparent;
  transition: all 0.3s ease;
}
 #dot-1:checked ~ .category label .one,
 #dot-2:checked ~ .category label .two,
 #dot-3:checked ~ .category label .three{
   background: #9b59b6;
   border-color: green;
 }
 form input[type="radio"]{
   display: none;
 }
 form .button{
   height: 45px;
   margin: 35px 0
 }
 form .button input{
   height: 100%;
   width: 100%;
   border-radius: 5px;
   border: none;
   color: #fff;
   font-size: 18px;
   font-weight: 500;
   letter-spacing: 1px;
   cursor: pointer;
   transition: all 0.3s ease;
   background: linear-gradient(135deg, #71b7e6, #9b59b6);
 }
 form .button input:hover{
  /* transform: scale(0.99); */
  background: linear-gradient(-135deg, #71b7e6, #9b59b6);
  }
 @media(max-width: 584px){
 .container{
  max-width: 100%;
}
form .user-details .input-box{
    margin-bottom: 15px;
    width: 100%;
  }
  form .category{
    width: 100%;
  }
  .content form .user-details{
    max-height: 300px;
    overflow-y: scroll;
  }
  .user-details::-webkit-scrollbar{
    width: 5px;
  }
  }
  @media(max-width: 459px){
  .container .content .category{
    flex-direction: column;
  }
}
.col-75 {
  
  height: 45px;
  width: 100%;
  outline: none;
  font-size: 16px;
  border-radius: 5px;
  padding-left: 15px;
  border: 1px solid #ccc;
  border-bottom-width: 4px;
  transition: all 0.3s ease;
  border-color: green;
  
}
</style>

<body>
  <div class="container">
    <div class="title">Reset Password</div>
    <div class="content">
      <form action=" " method="POST">
        <div class="user-details">
        <div class="input-box">
            <span class="details">Confirm Registration No.</span>
            <input type="text" id="regno" name="regno" placeholder="Enter Registration No." required="">
          </div>
          <div class="input-box">
            <span class="details">New Password</span>
            <input type="password" id="pass" name="pass" placeholder="Enter your new password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"  title=" Password must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required="">
          </div>
        
   
          <div class="input-box">
            <span class="details">Confirm New Password</span>
            <input type="password" id="repass" name="repass" placeholder="Confirm New Password" required="">
          </div>
          
          
          
        </div>
        
        <div class="button">
          <input type="submit" name="submit" value="Submit">
        </div>
      </form>
    </div>
  </div>

</body>
</html>
