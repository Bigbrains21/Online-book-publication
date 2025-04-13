<?php include("conection.php"); ?>
<!-- <?php session_start(); ?> -->
<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Design Book Content</title>
   <link rel="stylesheet" href="style3.css">
</head>

<body>

<img  src="logo.png"  height="350px" width="450px"/>
<div class="linkbtn">
<b>Steps for Book Publication</b><br><br>
    <a href="E-book2.php">Book Information</a><br>
     <a href="BookDistributionAndPrice.php">Book  Distribution</a> 
   </div>

   <div class="type">
         <h1>Book Interior Design</h1>
         <form action="#" enctype="multipart/form-data" method="POST">
         <div class="upload">
         <input type="file" name="uploadfile"><br><br>
         <!-- <input type="submit" value="Upload File" name="uploadfile"> -->
       
        <?php
$filename =  $_FILES["uploadfile"]["name"] ;
$tempname = $_FILES["uploadfile"]["tmp_name"];

$folder = "img/".$filename;

move_uploaded_file(from: $tempname ,to: $folder);


?>  
        
            <h3><input type="checkbox" name="file" required>Upload print ready file PDF format</h3>
           <p1> Works best for books that contain a loat of <br>imges, tables or if books require a custmized<br>
               layout</p1>
            <br><br>
          </div>
<br><br>
      <h2>Book Content</h2><br><br>
      <P>Select your specification and design your book cover</P>
      <br><br><br><br>
      <h2>Book Size</h2>
      <div class="size">

         <div class="card">
            <input type="radio" value="5 X 8" id="book" name="btn"  required>5 X 8 <br>Fiction,poetry and Non-fiction<BR>
            less than 50,000 words</br>
         </div>
         <div class="card">
            <input type="radio" value="5.5 X 8.5" id="book" name="btn" required>5.5 X 8.5<br>Fiction,poetry and
            Non-fiction<br> less than 50,000 words</br>
         </div>
         <div class="card">
            <input type="radio" value="6 X 9" id="book" name="btn" required>6 X 9<br>Self-help, Biography,Business<br>
            and Academic less than 75,000 words<br>
         </div>
         <div class="card"> <input type="radio" value="8.5 X 8.5" id="book" name="btn" required>8.5 X 8.5<br>Coffee
            table books,IIIustrator, Children <br>Book and Cook books</br>
         </div>
         <div class="card"> <input type="radio" value="8.5 X 11" id="book" name="btn" required>8.5 X 11<br>Academic
            Books more than <br>75,000 words</br></div>

      </div>
      <div class="type">
         <h2>Binding Type</h2>
         <div class="back">
            <input type="checkbox" name="case"  required> Paperback and Hardcase
         </div>
      </div>
      <div class="type">
         <h2>Book Interior</h2>
         <div class="black" required>
            <br> <input type="radio" value="black" id="color" name="black">Black and White <br><br>
            <a href="blackndwhitecolorpage.png" style="color:red">What is the difference</a><br><br>
             <input type="radio" value="color" id="color" name="black"> Color</br>
         </div>
      </div>

      <div class="type">
         <h2>Paper Type</h2>
         <div class="black" required>
            <br> <input type="radio" value="Cream Paper" id="paper" name="paper">Cream Paper </br><br>
            <a href="paperimg.png" style="color:red">What is the difference</a><br>
      
            <br> <input type="radio" value="White Paper" id="paper" name="paper"> White Paper </br>
         </div>
      </div>
      <div class="type">
         <h2>Book Cover Lamination</h2>
         <div class="black">
            <br> <input type="radio" value="Matte" id="lamination" name="matte">Matte Lamination </br><br>
            <a href="coverimg.jpg" style="color:red">What is the difference</a><br>
            <br> <input type="radio" value="Gloss" id="lamination" name="matte"> Gloss lamination </br>
         </div>
      </div>
          <br><br>

         <div class="info">
            <img src="check.png" height="4%" width="4%"><i>Get Published in 7 days</i><br><br>
            <img src="check.png" height="4%" width="4%"><i>Publish Print Book</i><br><br>
            <img src="check.png" height="4%" width="4%"><i>Publish in all India</i><br>

         </div>

         <br><br>
       
          </div>
          
          <a href="BookDistributionAndPrice.php"><input type="submit" value="Submit" name="bnt" class="done"></a>
          </form>
          <footer>  <a href="contact us.php" style="text-decoration:none">  
  Contact us -ebookpublication325@gmail</a>
  </footer>
     
</body>
<script src="ADD.js"></script>
</html>
<?php
    if($_POST['bnt'])
    {
      
   $book     = $_POST['uploadfile'];
   $size     = $_POST['btn'];
   $type   = $_POST['case'];
   $interior  = $_POST['black'];
   $paper = $_POST['paper'];
   $cover  = $_POST['matte'];
 $query = "INSERT INTO book_img VALUES('$folder','$size','$type','$interior','$paper','$cover')";
 $data= mysqli_query($con,$query);
if($data)
{
    echo"Data inserted succesfully";
  
?>
    <meta http-equiv = "refresh" content="0; url =http://localhost:3000/BookDistributionAndPrice.php"/>
  <?php
   }
else{
        echo "Failed";
 }
    }
   
    
?>


 

