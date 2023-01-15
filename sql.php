<?php
$Name = $_POST['Name'];
$Email = $_POST['email'];
$Phone = $_POST['Number'];
$servername = "localhost";
$username = "root";
$password = "";
$database = "contact";

$conn = mysqli_connect($servername,$username,$password,$database);
if(!$conn){
    echo "Connection Not Set";
}
{
$query = "INSERT INTO `information` ( `Name`, `Email Id`, `Phone Number`) VALUES ( '$Name', '$Email', '$Phone');";
mysqli_query($conn,$query);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        div{ 
            display: block; 
            position: absolute; 
            width: 10px; 
            height: 10px; 
            left: calc(50% - 1em); 
            border-radius: 1em; 
            transform-origin: 1em 2em; 
            animation: rotate; 
            animation-iteration-count: infinite; 
            animation-duration: 1.6s; 
        } 
         @keyframes rotate {   
              0% { transform: rotate(0deg); }  
            100% { transform: rotate(360deg); }   
        }   
        .d1 {   
            animation-delay: 0.1s;   
            background-color: blue;   
        }   
        .d2 {   
            animation-delay: 0.2s;   
            background-color: red;   
        }   
        .d3 {   
            animation-delay: 0.3s;   
            background-color: yellow;   
        }   
        .d4 {   
            animation-delay: 0.4s;   
            background-color: green;   
        }   
        .d5 {   
            animation-delay: 0.5s;   
            background-color: magenta;   
        }   
    </style>
</head>
<body bgcolor="slate-188">
    <br><br>
            <div class='d1'></div>   
            <div class='d2'></div>   
            <div class='d3'></div>   
            <div class='d4'></div>   
            <div class='d5'></div>   

            <br><br>
            <br><br><br>
        <h1 class="text-white text-center">Still sending Packets of information</h1>
        <H1 class="text-white text-center">Your information is saved</H1>
</body>
</html>