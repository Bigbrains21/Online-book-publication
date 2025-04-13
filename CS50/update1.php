<?php include("conection.php"); 
$id = $_GET['book'];

$query = "SELECT * FROM book_img where  book = '$id'";
mysqli_query(mysql: $con, query:$query);
$data = mysqli_query(mysql: $con,query: $query);
$result = mysqli_fetch_assoc(result: $data);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Detail</title>
    
</head>
<style>
    body {
        background-color: whitesmoke;
        padding: 0 10px;
    }
  
    .container {
        padding: 10px;
        margin: 150px auto;
        box-shadow: 15px 2px 10px rgb(0, 0, 0, 0.9);
        max-width: 500px;
        width: 100%;
        background-color: rgb(130, 39, 39);
        font-size: 20px;
        font-weight: 400;
}
.title{
    font-size: 24px;
    font-weight: 800;
    margin-bottom: 25px;
    color: whitesmoke;
    text-align: center;
    text-transform: uppercase;
    
}
form{
   padding: 10px  20px 15px 25px; 
   color: whitesmoke;
}
label{
    width: 25px;
    margin-right: 10px;
    font-size: 15px;
}
input{
    width: 55%;
    outline: none;
    font-size: small;
    border-radius: 5px;
    transition: all 0.5s ease;
}
.btn{
    width: 100%;
    padding-left: 8px 10px;
    background-color: rgb(213, 205, 205);

    cursor: pointer;
    border-radius: 100px;
    outline: none;
}
.btn:hover{
    background-color: whitesmoke;

}
@media (max-width: 570px) {
    input{
        flex-direction: column;
        align-items: flex-start;
 }
 label{
    margin-bottom: 5px;
 }
}
.login{
    font-size: medium;
    padding: 5px;
    text-align: center;
    color: black;
}


</style>

<body>

    <div class="container">
    
    <div class="title">
            Update Details
    </div>
   <form action="#" method="POST">
        <div class="form" >
            <label>book</label>  <input type="text" value="<?php echo $result['book']?>"  spellcheck="true" maxlength="20"
                    name="user" required><br><br>
                     <label>size</label>  <input type="text" value="<?php echo $result['size']?>" spellcheck="true" maxlength="30"
                    name="book" required><br><br>
                    <label>type</label>  <input type="text" value="<?php echo $result['type']?>"  name="type"required><br><br>
                 <label>interior</label> <input type="text" value="<?php echo $result['interior']?>"name="interior"required ><br><br><br>
                    <label>paper</label> <input type="text" value="<?php echo $result['paper']?>" name="paper"required ><br><br><br>
                    <label>cover</label> <input type="text" value="<?php echo $result['cover']?>" name="cover"required ><br><br><br>
                    
                    
                    
                   
           <input type='submit' value="Update" class='btn' name='Update' onclick="message()"> 
       
        </div>
      
</form>
    </div>
    
</body>
</html>
<?php
    if($_POST['Update'])
    {
   $book     = $_POST['user'];
   $size      = $_POST['book'];
   $type   = $_POST['type'];
   $interior  = $_POST['interior'];
   $paper  = $_POST['paper'];
   $cover = $_POST['cover'];

 $query="UPDATE book_img SET book='$book',size='$size',type='$type',interior ='$interior ',paper='$paper',cover='$cover' WHERE book='$id'";
 $data= mysqli_query($con,$query);
if($data)
{
    echo"<script>alert('Record updated')</script>";
    ?>
    <meta http-equiv="refresh"content="0; url=http://localhost:3000/display1.php">
<?php
}
else{
        echo "Failed";
 }
    }
   
    
?>
