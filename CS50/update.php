<?php include("conection.php"); 
$id = $_GET['Email'];

$query = "SELECT * FROM USER where  Email = '$id'";
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
            <label>Name</label>  <input type="text" value="<?php echo $result['Name']?>"  placeholder="Username" spellcheck="true" maxlength="20"
                    name="user" required><br><br>
                     <label>Email ID</label>  <input type="email" value="<?php echo $result['Email']?>"placeholder="@gmail.com" spellcheck="true" maxlength="30"
                    name="id" required><br><br>
                    <label>Password</label>  <input type="password" value="<?php echo $result['password']?>" placeholder="password" maxlength="6" name="pass"required><br><br>
                 <label>Confirm Password</label> <input type="password" value="<?php echo $result['Cpassword']?>" placeholder="password" maxlength="6"
                    name="Cpass"required ><br><br><br>
                   
           <input type='submit' value="Update" class='btn' name='Update' onclick="message()"> 
       
        </div>
      
</form>
    </div>
    
</body>
</html>
<?php
    if($_POST['Update'])
    {
   $Name      = $_POST['user'];
   $email      = $_POST['id'];
   $password   = $_POST['pass'];
   $Cpassword  = $_POST['Cpass'];
 $query="UPDATE USER SET Name='$Name',Email='$email',password='$password',Cpassword='$Cpassword' WHERE Email='$id'";
 $data= mysqli_query($con,$query);
if($data)
{
    echo"<script>alert('Record updated')</script>";
    ?>
    <meta http-equiv="refresh"content="0; url=http://localhost:3000/display.php">
<?php
}
else{
        echo "Failed";
 }
    }
   
    
?>
