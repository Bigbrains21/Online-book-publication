<?php include("conection.php"); 
$id = $_GET['book'];
$query = "DELETE FROM book_img WHERE book='$id'";
$data = mysqli_query($con,$query);

if($data){
    echo"<script>alert('Record Deleted')</script>";
    ?>
     <meta http-equiv="refresh"content="0; url=http://localhost:3000/display1.php">
    <?php
}
else {
    echo"<script>alert(' Failed Record Deleted')</script>";

}
?>
