<?php include("conection.php"); ?>

<html>
  <head>
    <title> Display</title>
    </head>
  <style>
    body{
      background-color: whitesmoke;
      color: brown;
    }
    table{
      background-color:gainsboro;
      color:brown;
    }
    .update{
      background-color:gainsboro ;
      color: brown;
      border: solid 2px;
      border-radius: 5px;
      width: 100%;
    }
    .update:hover{
      background-color: whitesmoke;
    }
    .delete{
      background-color:gainsboro ;
      color: brown;
      border: solid 2px;
      border-radius: 5px;
      width: 100%;


    }
    .delete:hover{
      background-color: whitesmoke;
    }
    .btn{
    width: 25%;
    padding-left: 8px 10px;
    background-color: rgb(213, 205, 205);
    cursor: pointer;
    border-radius: 100px;
    outline: none;
    margin-left: 40%;
}
.btn:hover{
    background-color: whitesmoke;
}
.bnt{
    width: 10%;
    padding-left: 8px 10px;
    background-color: rgb(213, 205, 205);
    cursor: pointer;
    border-radius: 100px;
    outline: none;
    margin-left: 90%;
}
.bnt:hover{
    background-color: whitesmoke;
}

  </style>
  <body>
<?php 
   
  error_reporting(error_level: 0);
    $query = "SELECT * FROM USER";
    mysqli_query(mysql: $con, query:$query);
    $data = mysqli_query(mysql: $con,query: $query);

   $total =  mysqli_num_rows(result: $data);
  //echo $total;
   if($total != 0)

   {
    ?>
 <h2> <align="center"><br><marquee>Display Register Records</marquee></h2>
<br><br><br><br><br>
<a href="E-Book Publication.php">
<input type="button" value="Log out"  class="bnt"></a>
</a>
<br><br>
 <center> <table border="1px" cellspacing="5" width="100%">
    <tr>  
    <th widht="20%">Name</th>
   <th  widht="20%">Email</th>
    <th widht="20%">password</th>
    <th widht="20%">Cpassword</th>
    <th widht="20%">Operations</th>
  </tr>
<?php
   while($result = mysqli_fetch_assoc(result: $data))
   {
    echo"<tr> 
        <td>".$result["Name"]."</td>
         <td>".$result["Email"]."</td>
      <td>".$result["password"]."</td>
      <td>".$result["Cpassword"]."</td>
      <td><a href='update.php?Email=$result[Email]'><input type='submit' value='Update' class='update'></a>
      <a href='delete.php?Email=$result[Email]'><input type='submit' value='Delete' class='delete' onclick='deletemsg()'></a></td>
      </tr>
      ";
   }
}
else{
    echo "table has no records";
}
?>
</table></center>
<br><br><a href="display1.php">
<input type="button" value="Next"  class="btn"></a>
<script>
function deletemsg(){
  return alert('Are you want to delete record?');
}
</script>

  </body>
  </html>