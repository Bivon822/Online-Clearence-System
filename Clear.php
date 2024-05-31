<?php
session_start();
error_reporting(0);
include('connect.php');

if(empty($_SESSION['matric_no']))
    {   
    header("Location: login.php"); 
    }
    else{
	}

    date_default_timezone_set('Africa/Lagos');
    $current_date = date('Y-m-d H:i:s');

    //get neccesary session details 
$ID = $_SESSION["ID"];
$matric_no = $_SESSION["matric_no"];
$dept = $_SESSION['dept'];
$faculty = $_SESSION['faculty'];


$sql = "select * from students where matric_no='$matric_no'"; 
$result = $conn->query($sql);
$rowaccess = mysqli_fetch_array($result);


$sql = "select SUM(amount) as tot_fee from fee where faculty='$faculty' AND dept='$dept'"; 
$result = $conn->query($sql);
$row_fee = mysqli_fetch_array($result);
$tot_fee=$row_fee['tot_fee'];

//Get outstanding paymentetc
$sql = "select SUM(amount) as tot_pay from payment where studentID='$ID'"; 
$result = $conn->query($sql);
$rowpayment = mysqli_fetch_array($result);
$tot_pay=$rowpayment['tot_pay'];

$outstanding_fee=$tot_fee-$tot_pay;

if(isset($_POST["btnpay"]))
{

$amt = mysqli_real_escape_string($conn,$_POST['txtamt']);

if ($amt > $outstanding_fee) {
$_SESSION['error'] ='Amount Can\'t be greater than Outstanding fee ';

}else {
//save fee details

$permitted_chars = '0123456789ABCDEFR';
$feeID = substr(str_shuffle($permitted_chars), 0, 12);

$query = "INSERT into `payment` (feeID,studentID,amount,datepaid)
VALUES ('$feeID','$ID','$amt','$current_date')";

$result = mysqli_query($conn,$query);
if($result){

header( "refresh:2;url= pay-fee.php" );
$_SESSION['success'] ='Fee payment Was Sucessfull';
}else{
$_SESSION['error'] ='Problem paying Fee';

}
}
}


?>

<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Fee Payment | Online Student clearance system</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet">

    <!-- Morris -->
    <link href="css/plugins/morris/morris-0.4.3.min.css" rel="stylesheet">

    <!-- Gritter -->
    <link href="js/plugins/gritter/jquery.gritter.css" rel="stylesheet">

    <link href="css/animate.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
<link rel="icon" type="image/png" sizes="16x16" href="images/kafu.png">

<script type="text/javascript">
		function confirmpayment(){
if(confirm("ARE YOU SURE YOU WISH TO PAY NOW ?" ))
{
return  true;
}
else {return false;
}
	 
}
</script>
<script>
    if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }
</script>
<style type="text/css">
<!--
.style1 {color: #000000}
-->


    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');
*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: 'Poppins',sans-serif;
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
  height: 35px;
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
 form .button1{
   height: 45px;
   margin: 35px 0
 }
 form .button1 input{
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
 form .button1 input:hover{
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
.col-78{
    height: 45px;
  width: 50%;
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
</head>

<body>
<div id="wrapper">

<nav class="navbar-default navbar-static-side" role="navigation">
    <div class="sidebar-collapse">
        <ul class="nav metismenu" id="side-menu">
            <li class="nav-header">
                <div class="dropdown profile-element"> <span>
                        <img src="<?php echo $rowaccess['photo'];  ?>" alt="image" width="142" height="153" class="img-circle" />
                         </span>


                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                        <span class="clear"><span class="text-muted text-xs block">Registration No:<?php echo $rowaccess['matric_no'];  ?> <b class="caret"></b></span> </span> </a>
                    <ul class="dropdown-menu animated fadeInRight m-t-xs">
                        
                        <li><a href="logout.php">Logout</a></li>
                    </ul>
</div>	
             
           <?php
           include('sidebar.php');
			   
			   ?>
			   
	       </ul>

        </div>
    </nav>

        <div id="page-wrapper" class="gray-bg">
        <div class="row border-bottom">
        <nav class="navbar navbar-static-top white-bg" role="navigation" style="margin-bottom: 0">
        <div class="navbar-header">
            <a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="#"><i class="fa fa-bars"></i> </a>
            
        </div>
            <ul class="nav navbar-top-links navbar-right">
                <li>

				<span class="m-r-sm text-muted welcome-message">Welcome <?php echo $rowaccess['fullname'];  ?></span>

                </li>
                <li class="dropdown">
                                     
                <li>
                    <a href="logout.php">
                        <i class="fa fa-sign-out"></i> Log out
                    </a>
                </li>
               
            </ul>

        </nav>


        </div>
            <div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-lg-10">
                    <h2></h2>
                    <ol class="breadcrumb">
                        <li>
                            <a href="index.php">Home</a>
                        </li>
                       
                        <li class="active"><strong>Clear From Various Departments </strong></li>
                       
                    </ol>
                </div>
                <div class="col-lg-2">

                </div>
            </div>
        <div class="wrapper wrapper-content animated fadeInRight">
            <div class="row">
            <div class="col-lg-7">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5></h5>
                        <div class="ibox-tools">
                            <a class="collapse-link">
                                <i class="fa fa-chevron-up"></i>
                            </a>
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                                <i class="fa fa-wrench"></i>
                            </a>
                            <ul class="dropdown-menu dropdown-user">
                                <li><a href="#">Config option 1</a>
                                </li>
                                <li><a href="#">Config option 2</a>
                                </li>
                            </ul>
                            <a class="close-link">
                                <i class="fa fa-times"></i>
                            </a>
                        </div>
                    </div>
                    <div class="container">
    
    <div class="content">
      <form action="insert.php" method="POST"><br>
     <center><input type="text" id="regno" name="regno" placeholder="Enter Registration No." class="col-78" required=""></center> 
        <div class="user-details">
        <div class="input-box">
            <span class="details">Chairperson Of Department</span>
            <select id="clear" name="clear" class="col-75">
      <option value="Not clear">Not Clear</option>
    <option value="clear">Clear</option>
  </select>
          </div>
          <div class="input-box">
            <span class="details">Dean Of school</span>
              <select id="dean" name="dean" class="col-75">
               <option value="Not clear">Not Clear</option>
               <option value="clear">Clear</option>
               </select>
          </div>
          <div class="input-box">
            <span class="details">ICT</span>
            <select id="ict" name="ict" class="col-75">
          <option value="notclear">Not Clear</option>
          <option value="clear">Clear</option>
        </select>
          </div>
          <div class="input-box">
            <span class="details">Library</span>
            <select id="library" name="library" class="col-75">
          <option value="notclear">Not Clear</option>
          <option value="clear">Clear</option>
        </select>
          </div>
          <div class="input-box">
            <span class="details">Hostel</span>
            <select id="hostel" name="hostel" class="col-75">
          <option value="notclear">Not Clear</option>
          <option value="clear">Clear</option>
        </select>
          </div>
          <div class="input-box">
            <span class="details">Games & Sports</span>
            <select id="sports" name="sports" class="col-75">
          <option value="notclear">Not Clear</option>
          <option value="clear">Clear</option>
        </select>
          </div>
          <div class="input-box">
            <span class="details">Dean Of Students</span>
            <select id="dean_of_student" name="dean_of_student" class="col-75">
          <option value="notclear">Not Clear</option>
          <option value="clear">Clear</option>
        </select>
          </div>
          <div class="input-box">
            <span class="details">Catering</span>
            <select id="catering" name="catering" class="col-75">
          <option value="notclear">Not Clear</option>
          <option value="clear">Clear</option>
        </select>
          </div>
          <div class="input-box">
            <span class="details">Health Services Unit</span>
            <select id="health" name="health" class="col-75">
          <option value="notclear">Not Clear</option>
          <option value="clear">Clear</option>
        </select>
          </div>
          <div class="input-box">
            <span class="details">Registra(Academic Affairs)</span>
            <select id="registra" name="registra" class="col-75">
          <option value="notclear">Not Clear</option>
          <option value="clear">Clear</option>
        </select>
          </div>
        </div>
  
        <div class="button1">
          <input type="submit" value="Submit">
        </div>
      </form>
    </div>
  </div>


                      
                

                </div>
            </div>
              <div class="col-lg-5"></div>
            </div>
            <div class="row"></div>
        </div>
        <div class="footer">
            <div class="pull-right"></div>
            <div><?php  include('../footer.php'); ?></div>
        </div>

        </div>
        </div>


    <!-- Mainly scripts -->
    <script src="js/jquery-2.1.1.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="js/plugins/slimscroll/jquery.slimscroll.min.js"></script>

    <!-- Custom and plugin javascript -->
    <script src="js/inspinia.js"></script>
    <script src="js/plugins/pace/pace.min.js"></script>

    <!-- iCheck -->
    <script src="js/plugins/iCheck/icheck.min.js"></script>
        <script>
            $(document).ready(function () {
                $('.i-checks').iCheck({
                    checkboxClass: 'icheckbox_square-green',
                    radioClass: 'iradio_square-green',
                });
            });
        </script>
		<link rel="stylesheet" href="popup_style.css">
<?php if(!empty($_SESSION['success'])) {  ?>
<div class="popup popup--icon -success js_success-popup popup--visible">
  <div class="popup__background"></div>
  <div class="popup__content">
    <h3 class="popup__content__title">
      <strong>Success</strong> 
    </h1>
    <p><?php echo $_SESSION['success']; ?></p>
    <p>
      <button class="button button--success" data-for="js_success-popup">Close</button>
    </p>
  </div>
</div>
<?php unset($_SESSION["success"]);  
} ?>
<?php if(!empty($_SESSION['error'])) {  ?>
<div class="popup popup--icon -error js_error-popup popup--visible">
  <div class="popup__background"></div>
  <div class="popup__content">
    <h3 class="popup__content__title">
      <strong>Error</strong> 
    </h1>
    <p><?php echo $_SESSION['error']; ?></p>
    <p>
      <button class="button button--error" data-for="js_error-popup">Close</button>
    </p>
  </div>
</div>
<?php unset($_SESSION["error"]);  } ?>
    <script>
      var addButtonTrigger = function addButtonTrigger(el) {
  el.addEventListener('click', function () {
    var popupEl = document.querySelector('.' + el.dataset.for);
    popupEl.classList.toggle('popup--visible');
  });
};

Array.from(document.querySelectorAll('button[data-for]')).
forEach(addButtonTrigger);
    </script>
</body>
</html>
