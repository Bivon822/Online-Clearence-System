<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "student_clearance";

    //error_reporting (E_ALL^E_NOTICE);
    
    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $dbname);

    $name = $_POST['username'];
    $regno = $_POST['reg'];
    $phone = $_POST['phone'];
    $session = $_POST['sess'];
    $faculty = $_POST['faculty'];
    $depart = $_POST['dep'];
    $passw = $_POST['pass'];
    $conpass = $_POST['repass'];
    $question=$_POST['quiz'];
    $answer=$_POST['answer'];
   
    
    $con=mysqli_connect("localhost","root","", "student_clearance");
    if($_POST['pass']==$_POST['repass']){

    //$sql="insert into `students` (fullname,matric_no,password,session,faculty,dept,phone,photo,question,answer)VALUES('$name','$regno','$passw','$session','$faculty','$depart','$phone','uploads/avatar_nick.png','$question','$answer')";

    //mysqli_query($con,$sql);
    //mysqli_close($con);
          // echo '<script type="text/javascript"> alert("submission successfull");window.location=\'create_account.php\';</script>'; 
          $sql = "SELECT * FROM `students` where matric_no='$regno'";
          $result = mysqli_query($conn, $sql);
          
          if (mysqli_num_rows($result) > 0) {
         echo'<script type="text/javascript"> alert("You have alredy registered");window.location=\'create_account.php\';</script>';
          
          }else{
          //save users details
          $query = "INSERT into `students` (fullname,matric_no,password,session,faculty,dept,phone,photo,question,answer)
          VALUES ('$name','$regno','$passw','$session','$faculty','$depart','$phone','uploads/bivon.png','$question','$answer')";
          
          
              $result = mysqli_query($conn,$query);
                if($result){
                    $_SESSION['reg']=$regno;
                }
               }
               echo '<script type="text/javascript"> alert("Student Registration was successfully");window.location=\'create_account.php\';</script>';
    }
    else{
       echo '<script type="text/javascript"> alert("Password do not match");window.location=\'create_account.php\';</script>'; 
    
    }
    ?>