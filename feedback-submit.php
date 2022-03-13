<?php 
session_start();
include('session_check.php');


?>
<?php
include 'connection.php';
$id=$_SESSION['bio']['id'];
$food=$_POST['fq_name'];
$msg=$_POST['fq_msg'];
$q="INSERT INTO feedback(id,food,message) VALUES('$id','$food','$msg');";
$r=mysqli_query($conn,$q);
if($r==1)
{
    
        echo ' <script type="text/javascript">
        alert(" Sent Successfully!!");
        location="feedback.php";
        </script>';
    
}
else
{
    
        echo ' <script type="text/javascript">
        alert(" UnSuccessful :(");
        location="feedback.php";
        </script>';
    
}
?>