<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>

<div class="form_block">
    <h2>Upgrade your home today?</h2>
    <p id="form-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Id risus vulputate tortor, risus ut <br> Viverra viverra aliquam, semper duis a aliquam.</p>
<form method="GET" action="#send" id="send">
    <div class="background">
    <input id="form-input" type="text" name="email" placeholder="Enter your email...">
    <input id="form-button" type="submit" value="Continue">
    </div>
    <p id="error"></p>
</form>
</div>
</body>
</html>

<?php
require("connect.php");


// $res = ('/[a-z0-9]{1,}@[a-z]\\.(ru|com/i');
$res = '/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/';

// if ($result) {
//     $query = mysqli_query($conn, "INSERT INTO `Users`(`Email`) VALUES ('$email')");
// } else {
    
//     echo "<script>
//     alert('ошибка');
//     </script>";
// }

if(isset($_GET['email'])){ 
 
    if ($_GET['email'] !="") { 
        $email = isset($_GET['email'])?$_GET['email']:false;
        if (preg_match($res, $email)) {
            $query = mysqli_query($conn, "INSERT INTO `Users`(`Email`) VALUES ('$email')");
        } else {
            echo "<script>
            let elem = document.getElementById('error')
            elem.innerText = 'Введите верные данные';
            elem.style.display = 'block';
            </script>";
        }
    }  
    else { 
        echo "<script>
        let elem = document.getElementById('error')
        elem.innerText = 'Введите данные';
        elem.style.display = 'block';
        </script>";  
    }}

?>

