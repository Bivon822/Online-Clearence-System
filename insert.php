<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>kafu</title>
</head>
<body>
    <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "student_clearance";

    error_reporting (E_ALL^E_NOTICE);
    
    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $dbname);

    $REGNO=$_POST['regno'];
    $COD=$_POST['clear'];
    $DEAN=$_POST['dean'];
    $IT=$_POST['ict'];
    $LIBO=$_POST['library'];
    $HOST=$_POST['hostel'];
    $GAMES=$_POST['sports'];
    $DEANSD=$_POST['dean_of_student'];
    $CATER=$_POST['catering'];
    $HEALTHS=$_POST['health'];
    $REG=$_POST['registra'];
    
    $con=mysqli_connect("localhost","root","", "student_clearance");

    //$sql="insert into clearance (reg_no,chair_of_department,dean_of_school,ict,library,hostel,games_and_sports,dean_of_student,catering,health_services_unit,registra)VALUES('$REGNO','$COD','$DEAN','$IT','$LIBO','$HOST',' $GAMES','$DEANSD','$CATER','$HEALTHS','$REG')";
    
//mysqli_query($con,$sql);
//mysqli_close($con);
        //echo '<script type="text/javascript"> alert("submission successfull");window.location=\'Clear.php\';</script>'; 
    
        $sql = "SELECT * FROM `clearance` where reg_no='$REGNO'";
        $result = mysqli_query($conn, $sql);
        
        if (mysqli_num_rows($result) > 0) {
       echo'<script type="text/javascript"> alert("You have already cleared, wait for approval");window.location=\'Clear.php\';</script>';
        
        }else{
        //save users details
        $query = "INSERT into `clearance` (reg_no,chair_of_department,dean_of_school,ict,library,hostel,games_and_sports,dean_of_student,catering,health_services_unit,registra)
        VALUES ('$REGNO','$COD','$DEAN','$IT','$LIBO','$HOST',' $GAMES','$DEANSD','$CATER','$HEALTHS','$REG')";
        
        
            $result = mysqli_query($conn,$query);
              if($result){
                  $_SESSION['regno']=$REGNO;
              }
             }
             echo '<script type="text/javascript"> alert("We have successfully received your clearance request,wait for approval.Thank you");window.location=\'Clear.php\';</script>';
    
    ?>
    
</body>
</html>