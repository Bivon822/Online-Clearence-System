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
	
$ID = $_SESSION["ID"];
$matric_no = $_SESSION["matric_no"];

$sql = "select * from students where matric_no='$matric_no'"; 
$result = $conn->query($sql);
$rowaccess = mysqli_fetch_array($result);


date_default_timezone_set('Africa/Nairobi');
$current_date = date('Y-m-d H:i:s');

?>

<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Clearance Letter |Kaimosi Friends University</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet">

    <!-- Toastr style -->
    <link href="css/plugins/toastr/toastr.min.css" rel="stylesheet">

    <link href="css/animate.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link rel="icon" type="image/png" sizes="16x16" href="images/kafu.png">



    <style type="text/css">
<!--
.style1 {
	font-size: xx-large;
	font-weight: bold;
}
.style2 {font-weight: bold}
-->
    </style>
</head>

<body>

            <div class="wrapper wrapper-content  animated fadeInRight article">
            <div class="row">
                <div class="col-lg-10 col-lg-offset-1">
                    <div class="ibox">
                        <div class="ibox-content">
                          <div class="text-center article-title">
                            <p class="text-muted">&nbsp;</p>
                            <center><h1 class="logo-name"><a href="index.php"><img src="images/kafu.png" alt="onlineclearance" width="170" height="150" border="0"></a></h1></center>
                            <h1>
                                    KAIMOSI FRIENDS UNIVERISTY(KAFU) <br>
                                    <h2 >OFFICE OF THE REGISTRAR (ACADEMIC AFFAIRS) </h2>
                                    <h3>P.O. BOX 385 - 50309 KAIMOSI – KENYA</h3>
                                    <h3>CELL: 0777 373 633</h3>
                                    <h3>Email: info@kafu.ac.ke ~ Web: www.kafu.ac.ke</h3>
                                    <p align="center" class="style1">CLEARANCE LETTER </p>
                             
                          </div>
                            
                            
                            <p class="style1" align="center">KAIMOSI FRIENDS UNIVERRSITY SECOND GRADUATION CEREMONY TO BE HELD 
                               ON WEDNESDAY, 21ST DECEMBER 2023. </p>
                            HELLO <?php echo $rowaccess['fullname']; ?>, </p>
                            <p>&nbsp;</p>
                           
                            <p>Kaimosi Friends University (KAFU) wishes to inform ALL CANDIDATES who qualified for 
                                conferment of various Degrees, award of Diplomas and Certificates in the 2022/2023 Academic 
                                Year, as well as members of the public, that the 2nd Graduation Ceremony will be held on 
                                Wednesday, 21st December, 2023 at the KAFU Graduation Grounds. Guests and ALL invited 
                                graduands should be seated by 8.00 am. </p>
                            <h3>Kindly take note of the following:-</h3>
                                <h4>1. Academic Attire </h4>
                                <p>The academic regalia will be collected from the respective schools between Tuesday, 13th
                                  December, to Friday, 16th December, 2023 and returned latest Friday, 13th January, 2024. 
                                   Delay in returning the Academic attire shall attract a penalty of Kshs 500.00 per day after 
                                    Friday, 13th January, 2024. </p>
            
                              <h4>2.Rehearsal</h4>
                              <p>Rehearsal will take place at the University Graduation Grounds on Tuesday, 20th
                               December, 2022 beginning at 10.00 am. All invited graduands should be in full academic 
                               regalia and be seated by 9.30 am for the rehearsal. </p>
                            
                              <h4>3.Invitation cards</h4>
                              <p>Each graduand will receive two (2) invitation cards from respective Deans of Schools as 
                                  from 13th December, 2023.</p>
                             <p>NOTE : Certificates shall be ready for collection shortly after graduation. Certificates shall 
                                be collected in person as from 9.00 am to 4.00 pm every Wednesday upon returning the 
                                graduation gown. The University shall not replace lost certificates. Certificates stored for 
                                a period of more than a year shall attract a charge of Kshs. 1,000.00 per year. </p>
                                <h4>4. Enquiries </h4>
                                <p>For more information please contact:-</p>
                              <center>  
                                <p>Registrar (Academic Affairs) <br>
                                P.O Box 385-50309 <br>
                                KAIMOSI <br>
                                TELEPHONE: 0773-040-235/0777-373-633 <br>
                                Email:<a href="https://registrar_aa@kafu.ac.ke">registrar_aa@kafu.ac.ke</a><br>
                                Website: <a href="https://www.kafu.ac.ke">www.kafu.ac.ke</a>
                                

                                </p></center>

                        
                            <p align="justify">Your Details remains:</p>
                            <p align="justify"><strong>FULLNAME:</strong> <?php echo $rowaccess['fullname']; ?></p>
                            <p align="justify"><strong>REGISTRATION NO:</strong> <?php echo $rowaccess['matric_no']; ?></p>
                            <p align="justify"><strong>FACULTY:</strong> <?php echo $rowaccess['faculty']; ?></p>
                            <p align="justify"><strong>DEPARTMENT:</strong> <?php echo $rowaccess['dept']; ?></p>
                            <p align="justify">&nbsp;</p>
                         
                            <p align="right" class="style2">
                                SIGNED</p>
                            <p align="right">&nbsp;</p>
                            <p align="right"><strong>REGISTRA</strong></p>
                            
                            <?php
                                 date_default_timezone_set("Africa/Nairobi");
                                 echo date("m/d/Y h:i:s a", time());
                             ?>
                            <hr>

                            <div class="row">
                              <div align="center"><a href="#" id="print-button" onclick="window.print();return false;">Print this page</a> </div>
							  
							  
                            </div>
                        </div>
                    </div>
                </div>
            </div>


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

</body>

</html>
