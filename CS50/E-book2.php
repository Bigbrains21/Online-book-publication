<?php
include("conection.php");
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Information</title>
    <link rel="stylesheet" href="style2.css">
</head>

<body>
 <div class="container">
 <img  src="logo.png"  height="350px" width="450px"/>
 <div class="linkbtn">
    <b>Steps for Book Publication</b><br><br>
    <a href="Design.php">Book content</a><br>
     <a href="BookDistributionAndPrice.php">Book  Distribution</a> 
   </div>
      <h1>  Book Information</h1>
<br><br>
        <h3> Book Language * :</h3>
        <div class="lang" required>
             English<input type="checkbox" id="Language" value="English" name="Book">
             Marathi<input type="checkbox"id="Language" value="Marathi" name="Book">
            Gujrati<input type="checkbox" id="Language" value="Gujrati" name="Book">
            Hindi<input type="checkbox" id="Language"value="Hindi" name="Book">
            Tamil<input type="checkbox" id="Language" value="Tamil" name="Book">
            Bengali <input type="checkbox" id="Language" value="Bengali" name="Book">
            Kannada <input type="checkbox" id="Language" value="Kannada" name="Book">
        </div>
    <h3> Book Title * :</h3>
        <p1> Select a unique title.You can search on amazon.com to check if you are title has already been taken
        </p1 required>
        <div class="text">
            <input type="text" size="200%" placeholder="Enter You Are Book Title" spellcheck="true" required> 
        </div>
        <h4>Book Subtitle (optional)</h4>
        <p1> Subtitle gives more clarity about your book to readers. Recommended for Non-Fiction books</p1>
        <div class="text">
            <input type="text" size="200%" placeholder="Enter You Are Book Title" spellcheck="true">
        </div>
        <h5> Author Name *</h5>
        <p1> Author name that would go on the book cover. If you write under Pseudonym, mention that as the author
            name
            here.</p1>
        <div class="text">
            <input type="text" size="200%" placeholder="Enter You Are Book Title" spellcheck="true" required>
        </div>
        <h6> Enter Contributors (optional)</h6>
        <div class="contributors">
        <input type="radio" id="Add1" value="Co-author" name="btn">Co-author<br>
        <input type="radio" id="Add2" value="Editor" name="btn">Editor<br>
        <input type="radio" id="Add3" value="IIIustrator" name="btn"> IIIustrator<br>
        </div>
        <h6> Book Genre *</h6>
        <div class="Genre">
            Fiction<input type="radio" id="genre" value="Fiction" name="Genre">
            Non-Fiction<input type="radio" id="genre" value="Non-Fiction" name="Genre">
            Academic<input type="radio" id="genre" value="Academic" name="Genre">
            Poetry <input type="radio" id="genre" value="Poetry" name="Genre">
            Cook Book<input type="radio" id="genre" value="Cookbook" name="Genre">
            Children Book<input type="radio" id="genre" value="ChildrenBook" name="Genre">
            Others<input type="radio" id="genre" value="Others" name="Genre">
            <br>
            <br>
        </div>
 
   <a  href="Design.php" ><input type="submit" class="done" value="Continue" name="continue" onclick="MSG()"></a>
   <footer>  <a href="contact us.php" style="text-decoration:none">  
  Contact us -ebookpublication325@gmail</a>
  </footer>
 </div>
</body>

</html>
