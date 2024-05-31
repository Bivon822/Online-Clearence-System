


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
  height: 120vh;
  display: flex;
  justify-content: center;
  align-items: center;
  padding: 10px;
  background: #f2f2f2;
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
  border-bottom-width: 2px;
  transition: all 0.3s ease;
}
.user-details .input-box input:focus,
.user-details .input-box input:valid{
  border-color: #9b59b6;
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
   border-color: #d9d9d9;
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
   background: linear-gradient(135deg, #71b7e6, green);
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
  border-bottom-width: 2px;
  transition: all 0.3s ease;
  border-color: green;
  
}
   </style>
<body>
  
  <div class="container">
  <center><h1 class="logo-name"><a href="index.php"><img src="images/kafu.png" alt="onlineclearance" width="200" height="150" border="0"></a></h1></center>
    <div class="title">Registration</div>
    <div class="content">
      <form action="create_insert.php" method="POST">
        <div class="user-details">
          <div class="input-box">
            <span class="details">Full Name</span>
            <input type="text" id="username" name="username" placeholder="Enter your name" required>
          </div>
          <div class="input-box">
            <span class="details">Registration No.</span>
            <input type="text" id="reg" name="reg" placeholder="Enter your Registration No" required>
          </div>
          <div class="input-box">
            <span class="details">Phone Number</span>
            <input type="phone" id="phone" name="phone" placeholder="Enter your number" maxlength="10" pattern="\d{10}" title="Please enter exactly 10 digits" required>
          </div>
          <div class="input-box">
            <span class="details">Session</span>
            <select id="sess" name="sess" class="col-75">
            <option value="">Select session</option>
             <option value="2020/2021">2020/2021</option>
             <option value="2021/2022">2021/2022</option>
             <option value="2022/2023">2022/2023</option>
             <option value="2023/2024">2023/2024</option>
        </select>
          </div>

          <div class="input-box">
            <span class="details">Faculty</span>
            <select id="faculty" name="faculty" class="col-75">
            <option value="">Select faculty</option>
            <option value="SCIT">SCIT</option>
            <option value="SOBE">SOBE</option>
            <option value="SOSCI">SOSCI</option>
            <option value="SESS">SESS</option>
            <option value="NURSING">HEALTH SCIENCES</option>
        </select>
          </div>

          <div class="input-box">
            <span class="details">Department</span>
            <select id="dep" name="dep" class="col-75">
            <option value="">Select Department</option>
                <option value="Computer Science">ITI</option>
                <option value="Electrical Engineering">EDA</option>
                <option value="Business Management">EDS</option>
                <option value="Information Technology">Nursing</option>
                <option value="Information Technology">Clinical Medicine</option>
            </select>
          </div>
        
          <div class="input-box">
            <span class="details">Password</span>
            <input type="password" id="pass" name="pass" placeholder="Enter your password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"  title=" Password must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required>
            
          </div>
          
          <div class="input-box">
            <span class="details">Confirm-Password</span>
            <input type="password" id="repass" name="repass" placeholder="Confirm password" required>
          </div>
          <div class="input-box">
            <span class="details">Security Question</span>
            <select id="quiz" name="quiz" class="col-75">
            <option value="">Select security question</option>
                <option value="What is your favourite pet?">What is your favourite pet?</option>
                <option value="Who is your best friend?">Who is your best friend?</option>
                <option value="In which city were you born?">In which city were you born?</option>
                <option value="Which is your favourite food?">Which is your favourite food?</option>
                <option value="Which school did you attend?">Which school did you attend?</option>
            </select>
          </div>
          <div class="input-box">
            <span class="details">Answer</span>
            <input type="text" id="answer" name="answer" placeholder="Enter your answer" required>
          </div>
           
        
        </div>
    
        <div class="button">
          <input type="submit" value="Register"><br><br>
          <center><a href="login.php"><small>Login</small></a></center>
        </div>
      </form>
    </div>
  </div>

</body>
</html>
