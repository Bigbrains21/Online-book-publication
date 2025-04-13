<?php include("conection.php"); 
$id = $_GET['Email'];
$query = "DELETE FROM USER WHERE Email='$id'";
$data = mysqli_query($con,$query);

if($data){
    echo"<script>alert('Record Deleted')</script>";
    ?>
     <meta http-equiv="refresh"content="0; url=http://localhost:3000/display.php">
    <?php
}
else {
    echo"<script>alert(' Failed Record Deleted')</script>";

}
?>
