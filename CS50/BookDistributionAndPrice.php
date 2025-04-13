<?php   include("conection.php");  ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Distribution and Price</title>
</head>
<style>
    body {
        background-color: whitesmoke;
        overflow-x: hidden;
    }

    .container {
        text-align: center;
        font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
    }

    img {
        padding-left: 35%;
        margin-top: -85px;
    }

    .linkbtn {
        text-align: center;
        border: dashed 3px;
        border-radius: 30px;
        width: 175px;
        margin: auto;
        background-color: rgba(128, 128, 128, 0.738);
    }

    .linkbtn:hover,
    .linkbtn:focus,
    .linkbtn:active {
        background-color: brown;
        -webkit-transform: scale(1.1);
        transform: scale(1.1);
    }

    a {
        text-decoration: none;
        color: black;
    }

    a:hover {
        color: blue;
    }

    h1 {
        color: brown;
        font-weight: 900;
    }

    .distribution {
        display: flex;
        flex-wrap: wrap;
       
    }

    .card {
        margin: auto;
        padding-inline: 80px;
        padding-top: 1%;
        font-size: small;
        border: solid 0.8px;
        width: 20%;
        border-radius: 50px;
        background-color: rgba(128, 128, 128, 0.629);
    }


    .card:hover {
        background-color: whitesmoke;
    }

    p1 {
        text-decoration: line-through;
    }

    p2 {
        padding-left: 6PX;
    }

    .btn {
        width: 100%;
        background-color: whitesmoke;
    }

    .btn:hover {
        background-color: rgba(128, 128, 128, 0.629);
    }


    .payment {
        border: solid 2px;
        border-radius: 100px;

        p3 {
            font-size: large;
        }
        p4 {
            font-size: small;
        }
    }
    #QRCODE {
        display: none;

    }
    .done {
        border: solid 2px;
        border-radius: 100px;
        width: 25%;

    }
    .done:hover,.done:focus,.done:active {
        -webkit-transform: scale(1.1);
        transform: scale(1.1);
        background-color: brown;
    }
</style>
<body>
    <img src="logo.png" height="350px" width="450px" />
    <div class="linkbtn">
        <b>Steps for Book Publication</b><br><br>
        <a href="E-book2.php">Book Information</a><br>
        <a href="Design.php">Book Content</a>
    </div>
    <form action="https://api.web3forms.com/submit" method="POST">
        <input type="hidden" name="access_key" value="5361c22d-e001-47eb-9649-670a34b5dad4" />
        <div class="container">
            <h1>Book Distribution </h1>
            <B> <p>Set your book Distribution to sell your book publish</p> </B>
            <br> <br> <br>
            <div class="distribution">
                <div class="card">
                    <h1>Global Distribution</h1>
                    <br><br>
                    <p1> Rs.6,690</p1>
                    <p2>RS.4,990<sup>+GST</sup></p2><br><br>
                    <img src="check2.png" height="30px" width="35px">One Time Fee + No Renewal Charges<br><br><br>
                    <input type="radio" id="select" name="Distribution" value="package Global Distribution ">Select
                <br><br><br>
                </div>
                <div class="card">
                    <h1>Global Distribution +<br>
                        Copyrights Registeration</h1>
                    <p1> Rs.11,690</p1>
                    <p2>RS.7,990<sup>+GST</sup></p2><br><br>
                    <img src="check2.png" height="30px" width="35px">One Time Fee + No Renewal Charges<br><br><br>
                    <input type="radio" id="select" name="Distribution"
                        value="package Global Distribution+Copyrights Registeration">Select
                </div>
                <div class="card">
                    <h1>Global Distribution + <br>Copyrights Registration + Ads</h1>
                    <p1> Rs.17,690</p1>
                    <p2>RS.11,990<sup>+GST</sup></p2><br><br>
                    <img src="check2.png" height="30px" width="35px">One Time Fee + No Renewal Charges<br><br><br>
                    <input type="radio" id="select" name="Distribution"
                        value="package Global Distribution+ Copyrights Registration+ Ads">Select
                </div>
            </div>
            <br> <br> <br> <br> <br>
            <div class="payment">
                <h1><b>Payment Method</b></h1>
                <hr>
                <p3> UPI Code
                    <br>
                    <input type="radio" id="code" name="code" value="QR code selected" style="cursor: pointer;"
                        onclick="show()">Yes<br>
                    <br>
                    <div id="QRCODE">
                        <img src="QRcode.png" height="150px" width="150px" style=" margin:10px; margin-right:35%;">
                    </div>
                    <input type="radio" id="code" name="code" value="QR code not selected" style="cursor: pointer;"
                        onclick="hide()">No<br>

                </p3>
                <hr>
                <p3> Credit/Debit Card </p3>
                <br><br>

                CARD TYPE
                <select name="Cards">

                    <option> Not Selected</option>
                    <option>Credit card </option>
                    <option>Debit card </option>
                </select>
                <br><br>
                <p4> CARD NUMBER <input type="number" placeholder="Valid Card number" name="card"
                        id="Cardnumber"><br><br>
                    VALID DATE <input type="number" placeholder="MM/YY" name="date" maxlength="6"
                        id="validdate"><br><br>
                    CVV CODE <input type="password" placeholder="CVV" name="cv" maxlength="3" id="cvc"><br><br>
                    CARD OWNER <input type="text" placeholder="Card Owner Name" name="Name" id="name"><br><br>
                   Amount RS.<input type="number" placeholder=" RS." name="RS" id="amount" required><br><br>
                </p4>
            </div>
            <br><br>
    </form>
    <input type="submit" value="Submit" name="Status" class="done">
</div>
<footer>  <a href="contact us.php" style="text-decoration:none">  
  Contact us -ebookpublication325@gmail</a>
  </footer>
</body>
<script src="ADD.js"></script>
</html>