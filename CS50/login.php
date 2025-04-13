<?php include("conection.php");?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<style>
    body{
        background-color: whitesmoke;
}
    .container{
        padding: 5%;
        margin: 150px auto;
        box-shadow: 15px 2px 10px rgb(0, 0, 0, 0.9);
        max-width: 500px;
        width: 100%;
        background-color: rgb(130, 39, 39);
        font-size: 20px;
        font-weight: 400;
}
.from{
    padding: 10px  20px 15px 25px; 
   color: whitesmoke;
}
.title{
    font-size: xx-large;
    
    font-weight: 900;
    margin-bottom: 25px;
    color: whitesmoke;
    text-align: center;
    text-transform: uppercase;
}
input{
    width: 100%;
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
.fpass{
    padding-top: 1%;
   padding-left: 25px;

}
.login{
    
    font-size: medium;
    padding: 5px;
    text-align: right;
    color: black;
}

</style>
<body>
    <div class="container" >
    <form action="#" method="POST">
    <div class="title">Login ID</div>
   <label> Name </label><br><input type="text" placeholder="Username" name="user" required><Br><br>
   <label> E-mail ID </label><br><input type="email" placeholder="Email" name="id" required><Br><br>
   <label> Password </label><br><input type="password" placeholder="password" name="pass" maxlength="6" required><br><br>
   <input type="submit" value="Log in" name="login" class="btn">
   <br><br>
 
  </div>
 
    </div>
    
</form>
</body>
</html>
<?php 
if(isset( $_POST["login"]))
    {
   $name = $_POST['user'];
   $email = $_POST['id'];
    $password = $_POST['pass'];
    $query = "SELECT * FROM  USER WHERE Email ='$email' && password='$password' ";
   $data = mysqli_query($con, $query); 
  $total= mysqli_num_rows($data);
  
  if($total == 1)
  {
    //header('location:E-book2.php');
    ?>
   
   <meta http-equiv = "refresh" content="0; url =http://localhost:3000/E-book2.php"/>
<?php 
}
else{
    echo "Login Failed";
}
    }

 ?>
  