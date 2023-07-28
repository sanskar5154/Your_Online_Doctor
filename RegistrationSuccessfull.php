<?php

include 'connection.php';

$Name  = $_POST['name'];
$Age   = $_POST['age'];
$Gender   = $_POST['gender'];
$Mobile_No   = $_POST['mobilenumber'];
$Email   = $_POST['email'];
$FatherName   = $_POST['fathername'];
$Complication   = $_POST['symptoms'];


$query =  " insert into consultance_registration (Name, Age, Gender,
Mobile_No, Email, FatherName, Complication )
 values ('$Name','$Age','$Gender','$Mobile_No','$Email',
 '$FatherName','$Complication')";


$rest  = mysqli_query($cont,$query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration_Successfull</title>
    <link rel="stylesheet" href="home.css?v=1" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
</head>
<body>
    
    <header>
        <nav class="container">
            <div class="logo">
                <img src="./images/logo2.jpg" alt="home image"  style="width:200px;height:60px" />
            </div>
            <div class="logoafter">
                <ul>
                   <a href="home.php">
                        <li>Go Back</li>
                    </a>
                </ul>
            </div>
        </nav>
    </header>
    
<section id="home">
            <div class="container">
                <div class="hero_image animate__animated animate__bounceInLeft">
                    <img src="./images/clipart-doctor-person-1.png" alt="home image" style="width:400px;height:400px" />
                </div>
                <div class="homey_content">

                    <h1>
                        <span class="hi">Hi <?php echo $Name ?></span> ,
                    </h1>
                    <h1>
                         I am<span class="your"> Your Online Doctor </span>
                    </h1>
                    <h3>ThankYou for <span class="med">Registration </span></h3>
                    <h3>Your Contact Info : <span class="med"> </span></h3>
                    <h3><span class="med">Email : </span><?php echo $Email ?></h3>
                    <h3><span class="med">Contact No : </span><?php echo $Mobile_No ?></h3>
                    
                    <h3>Our team will <span class="med">Contact </span> you soon .</h3>
                    
                    
                </div>
            </div>
        </section>
        <footer>
        <div class="container">
        Our site content is for informational purposes only, and should not be taken as professional medical advice.<br>
            Created By Sanskar Jain
        </div>
    </footer>
</body>
</html>