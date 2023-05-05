<?php
session_start();
$nam=array("Sam Espino", "Shae Smith", "Third Lee");
$ema=array("sam@gmail.com", "shae@gmail.com", "third@gmailcom");
$pas=array("secret1", "secret2", "secret3");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    
    <div class="box">
        <img src="img/robot.png" alt="Robot">
            <form method="post" action="<?php $_SERVER['PHP_SELF']; ?>">
                <input type="email" id="emailadd" name="emailadd" placeholder="Email Address"><br><br>
                <input type="password" id="password" name="password" placeholder="Password"><br><br>
                <input name="submit" id="submit" type="submit" value="Sign In">
                <button type="reset" id="clear" value="Clear">Clear</button>
            </form>       
    </div>
    <style>
        body {
            background-color: #d0efff;
        }
        img{
            padding-top: 20px;
            width: 120px;
            height: 130px;
        }
        .box {
            background-color: white;
            text-align: center;
            position: relative;
            margin-top: 200px;  
            left: 33%;         
            width: 700px;
            height: 500px;
            border-radius: 20px;
        }
        form{           
            padding: 30px;
        }
        #emailadd {
            height: 35px;
            width: 600px;
            font-size: 12pt;
            border: 2px solid;
            border-radius: 10px;
        }

        #password {
            height: 35px;
            width: 600px;
            font-size: 12pt;
            border: 2px solid;
            border-radius: 10px;
        }
        #submit {
            background-color: #01ad7f;
            height: 40px;
            width: 150px;
            font-size: 12pt;
            border-radius: 10px;
        }
        #clear {
            background-color: #01ad7f;
            height: 40px;
            width: 150px;
            font-size: 12pt;
            border-radius: 10px;
        }
    </style>
    <?php
    if (isset($_POST['submit'])){
        $email = $_POST['emailadd'];
        $pass = $_POST['password'];
        
           if(in_array($email, $ema) && in_array($pass, $pas)){
            header("Location: profile.php");
           } else{
            header("Location: index.php");
           }
        }
    
    ?>
    
</body>

</html>