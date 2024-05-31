<?php
   $servername = "localhost";
   $username = "root";
   $password = "";
   $dbname = "student_clearance";
     
   // connect the database with the server
   $conn = new mysqli($servername,$username,$password,$dbname);
     
    // if error occurs 
    if ($conn -> connect_errno)
    {
       echo "Failed to connect to MySQL: " . $conn -> connect_error;
       exit();
    }
  
    $sql = "select * from eligible_student";
    $result = ($conn->query($sql));
    //declare array to store the data of database
    $row = []; 
  
    if ($result->num_rows > 0) 
    {
        // fetch all data from db into array 
        $row = $result->fetch_all(MYSQLI_ASSOC);  
    }   
?>
<!DOCTYPE html>
<html>
<link rel="icon" type="image/png" sizes="16x16" href="images/kafu.png">
<style>
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
  background-color: orange;
}
h1{
    font-family:sans-serif;
    color: orange;
  font-weight: bold;
  font-size: 20px;
    align: center;
    
}
        table{
        font-family: arial,sans-serif;
        border-collapse:collapse;
        width: 50%;
    }
    td,th{
        border: 1px solid #dddddd;
        text-align:left;
        padding: 8px;

    }
    tr:nth-child(even) {
        background-color:#dddddd;
    }
    .h{
        font-family: arial,sans-serif;
    }
    body{
        background-color:white;
        height:200vh;
    }

</style>
  
<body>
<h1 class="h1">KAFU ONLINE CLEARANCE SYSTEM</h1>
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
   <center> <table>
    <h4 class="h">Students who are eligible to clear for Graduation process</h4>
        <thead>
            <tr>
                <th>Id</th>
                <th>Registration No</th>
                <th>Name</th>
                <th>Academic Year</th>
                <th>Faculty</th>
            
            
            </tr>
        </thead>
        <tbody>
            <?php
               if(!empty($row))
               foreach($row as $rows)
              { 
            ?>
            <tr >
                <td><?php echo $rows['id']; ?></td>
                <td><?php echo $rows['reg_no']; ?></td>
                <td><?php echo $rows['name']; ?></td>
                <td><?php echo $rows['year']; ?></td>
                <td><?php echo $rows['faculty']; ?></td>
                
            </tr>
            <?php } ?>
        </tbody>
    </table></center>
</body>
</html>
  
<?php   
    mysqli_close($conn);
?>