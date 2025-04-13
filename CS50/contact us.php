<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact us</title>
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
    width: 50px;
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



</style>

<body>
<div class="container">
    
    <div class="title">
            Contact Us
    </div>
    <form action="https://api.web3forms.com/submit" method="POST">
        <input type="hidden" name="access_key" value="5361c22d-e001-47eb-9649-670a34b5dad4" />
        <div class="form" >
            <label>Name</label>  <input type="text" placeholder="Username" spellcheck="true" maxlength="20"
                    name="user" required><br><br>
                     <label>Email ID</label>  <input type="email" placeholder="@gmail.com" spellcheck="true" maxlength="30"
                    name="id" required><br><br>
                    <label>Complaint</label><br><textarea style="resize: none;" cols="55" rows="5">Enter your complaint here.... </textarea><br><br>
                
                   
           <input type='submit' value="Submit" class='btn' name='Register'> 
        
</form>
    </div>
    
</body>

</html>