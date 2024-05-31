<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
.accordion {
  background-color: #eee;
  color: #444;
  cursor: pointer;
  padding: 18px;
  width: 500px;
  border: none;
  text-align: left;
  outline: none;
  font-size: 15px;
  transition: 0.4s;
  
}

.active, .accordion:hover {
  background-color: #ccc;
}

.accordion:after {
  content: '\002B';
  color: #777;
  font-weight: bold;
  float: right;
  margin-left: 5px;
}

.active:after {
  content: "\2212";
}

.panel {
  padding: 0 18px;
  background-color: white;
  max-height: 0;
  overflow: hidden;
  transition: max-height 0.2s ease-out;
}

ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: green;
}
li {
  float: left;
}

li a {
  display: block;
  color: white;
  text-align: center;
  padding: 20px 22px;
  text-decoration: none;
  font-family: arial,sans-serif;
  
}
li a:hover {
  background-color:orange;
}
body{
    font-family: 'Poppins',sans-serif;
}
</style>
</head>
<body>
<nav>
    <div class="logo">
    <ul class="nav-links">
        <li><a href="home.php">Home</a></li>
        <li><a href="login.php">Login</a></li>
    <li><a href="admin"> Admin Login</a></li>
    <li><a href="fetch_eligible.php"> Students who are eligible to clear</a></li>
    <li><a href="support.php">Support</a></li>
    </ul>
    </div>
</nav>
<img src="images/kafulogo.png" width="400px" alt="">

<h2>Help Support</h2>
<p>Follow the information provided below in each section keenly,it will assist <br> you navigate through the system when you're stack.Thank you!</p>
<button class="accordion">Create Account</button>
<div class="panel">
  <p>
    
    <dt>1. Log on to http://kafu online clearence.kafu.ac.ke</dl>
    <dt>2. Click on ‘student Login Homepage’ Link(As you will see on the screen)</dt>
    <dt>3. Click on ‘Create a New Account’(This will appear on the same screen)</dt>
    <dt>4. Enter your First and Last Name</dt>
    <dt>5.Enter your registration number</dt>
    <dt>6.Enter your your phone number</dt>
    <dt>7.Select session</dt>
    <dt>8.Select Faculity</dt>
    <dt>9.Choose your department</dt>
    <dt>10.Select security question</dt>
    <dt>11.Provide an Answer to the selected question.This will be the secret <br> answer to the question selected to reset your password </dt>
    <dt>12.Create a strong Password</dt>
    <dt>13.Confirm the new created Password</dt>
    <dt>14.Click on 'Register'</dt>
    <dt>15.Congratulations!! You have successfully created an account in the <br> KAFU online clearance system. Make sure you remember your Username and Password</dt>
    
  </p>
</div>

<button class="accordion">Reset Password</button>
<div class="panel">
  <p>
  <dt>1.Enter your registration number</dt>
  <dt>2.Once the user submits the form,it will  verify that the entered Registration No  exists in the system.</dt>
  <dt>3.If the Registration No exists, retrieve the user's security question and display it on a new form.</dt>
  <dt>4.Answer the security question.</dt>
  <dt>5.Verification of the user's answer matches the stored answer.</dt>
  <dt>6.If the answer is correct,provide a new password and password confirmation.</dt>
  <dt>7.Congratulations!! You have successfully reset your password.</dt>
  </p>
</div>

<button class="accordion">Clearance Process</button>
<div class="panel">
  <p>
   <dt>1. Registration: The first step is to register in the online clearance system by filling out the required personal details, such as Name,Registration No, and Department</dt>
   <dt>2. Log in: Once the user is registered, they can log in to the system using their username and password. </dt>
   <dt>3.Select Departments: After logging in, the user should select the department(s) from which they need clearance, such as library, hostel, dean of students, dean of school, health care unit, and academic affairs. </dt>
   <dt>4. Request clearance: The user can then request clearance from each selected department by clicking on the respective department's clearance button. The request will be sent to the department dashbord notifications. </dt>
   <dt>5. Department Clearance: The department responsible for the clearance will log in to the system and verify the user's information. If everything is in order, they will approve the clearance request. </dt>
   <dt>6.Automated clearance: Once all the departments have approved the clearance request, the system will automatically generate the clearance report and invitation letter for graduation, which the user can download and print. </dt>
  </p>
</div>

<button class="accordion">Contact Us</button>
<div class="panel">
  <p>
 <a href="https://www.bivonmomanyi03@gmail.com"><img src="images/mail.png" height="80px" width="80px" alt=""></a>
 <a href="https://www.facebook.com/Bivonze Syfy"><img src="images/fb.jpg" height="80px" width="80px" alt=""></a>
 <a href="https://www.insagram.com/bivonmose"><img src="images/ig.jpg" height="70px" width="70px" alt=""></a>
  </p>
 
</div>

<script>
var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var panel = this.nextElementSibling;
    if (panel.style.maxHeight) {
      panel.style.maxHeight = null;
    } else {
      panel.style.maxHeight = panel.scrollHeight + "px";
    } 
  });
}
</script>

</body>
</html>
