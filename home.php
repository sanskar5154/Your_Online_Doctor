<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Online Doctor</title>
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
                    <a href="#home">
                        <li>Home</li>
                    </a>
                    <a href="#prescription">
                        <li>Prescription</li>
                    </a>
                    <a href="#consultance">
                        <li>Consultance</li>
                    </a>
                    <a href="#blogs">
                        <li>Blogs</li>
                    </a>
                    <!-- <a href="#login">
                        <li>LogIn/SignUp</li>
                    </a> -->
                </ul>
            </div>
        </nav>
    </header>
    <main>
        <section id="home">
            <div class="container">
                <div class="hero_image animate__animated animate__bounceInLeft">
                    <img src="./images/clipart-doctor-person-1.png" alt="home image" style="width:400px;height:400px" />
                </div>
                <div class="home_content">

                    <h1>
                        <span class="hi">Hi</span> , I am
                        <span class="your"> Your Online Doctor </span>
                    </h1>
                    <h3>Get <span class="med">Medicine Prescription</span> of</h3>
                    <h3><span class="med">Common Disease</span> based on your </h3>
                    <h2>Health Complications </h2>
                </div>
            </div>
        </section>
        <section id="prescription">
            <div class="container">
                
                <div class="prescription_form">
                    <form class="p0" action="prescription.php" method="POST">
                        <h1 class="p1">Your Health Parameter</h1>
                        <p>Your Name*<input type="text" name="name1" required></p>
                        <div class="temp">
                            <p>Age*:<input type="number" name="age1" required></p>
                       
                        <p>
                            Gender*:
                            <select name="gender1" id="gender" required>
                                <option value="">--select your gender--</option>
                                <option value="male">Male</option>
                                <option value="female">Female</option>
                                <option value="other">Other</option>
                            </select>
                        </p>
                        </div>
                        <div class="temp2">
                            <p>Body Temperature(in F):<input type="number" name="Body_Temperature" value='-'></p>
                            <p>Blood Pressure :<input type="number" name="Blood_Pressure" value='-'></p>
                        </div>
                        <p>Following any Medicine:<input type="text" name="following"></p>

                        <h1 class="p1">Complications</h1>
                        <p>
                            1*:
                            <select name="complication1" id="complication1" required>
                                <option value="">--select your complication--</option>
                                <option value="Fever">Fever</option>
                                <option value="Headache">Headache</option>
                                <option value="Cough">Cough</option>
                                <option value="Cold">Cold</option>
                                <option value="Stomach_pain">Stomach Pain</option>
                                <option value="Loosemotion">Loose Motion (Diarrhoea)</option>
                                
                            </select>
                        </p>
                        <p>
                            2:
                            <select name="complication2" id="complication2" >
                            <option value="">--select your complication--</option>
                                <option value="Fever">Fever</option>
                                <option value="Headache">Headache</option>
                                <option value="Cough">Cough</option>
                                <option value="Cold">Cold</option>
                                <option value="Stomach_pain">Stomach Pain</option>
                                <option value="Loosemotion">Loose Motion (Diarrhoea)</option>
                            </select>
                        </p>
                        <p>
                            3:
                            <select name="complication3" id="complication3" >
                                
                                <option value="">--select your complication--</option>
                                <option value="Fever">Fever</option>
                                <option value="Headache">Headache</option>
                                <option value="Cough">Cough</option>
                                <option value="Cold">Cold</option>
                                <option value="Stomach_pain">Stomach Pain</option>
                                <option value="Loosemotion">Loose Motion (Diarrhoea)</option>
                            </select>
                        </p>

                        <p>Other Complication / Remarks:<textarea name="remarks" id="remarks" cols="100"
                                rows="2"></textarea></p>
                        
                            <!-- <a href = "prescription.php">
                            <button type="submit" name='get prescription'>Get Prescription</button>
                            </a> -->
                           <div class="button">
                           <input type="submit" name="submit" id="submit" value="get prescription">
                           </div>
                        
                    </form>
                </div>
                <div class="prescription_image">
                    <h1 class="p2">Prescription</h1>
                    <h2 class="p3">Get <span class="p4">Home Remedies</span>  and</h2>
                    <h2 class="p3">and  <span class="p4">Allopathic</span> Prescription </h2>
                    <h2 class="p3">based on your complications.</h2>
                    <img src="./images/prescription-unscreen.gif" alt="prescription image"
                        style="width:300px;height:400px" />
                </div>
            </div>

            </div>
        </section>
        <section id="consultance">
            <div class="container">
                <div class="hero_image animate__animated animate__bounceInLeft">
                    <img src="./images/consultant2-removebg-preview.png" alt="home image" style="width:400px;height:400px" />
                </div>
                <div class="consultance_content">

                    <h1>
                        <span class="hi">Skip the travel!</span> 
                        
                    </h1>
                    <h1>
                        <span class="your"> Take Online Doctor Consulation </span>
                        
                    </h1>
                    <h3>Register with <span class="med">Speciality</span> or <span class="med">Symptoms</span></h3>
                    <h3>Get Audio/Video call with a<span class="med">   Verified Doctors</span> </h3>
                    <h3>Get a<span class="med"> Digital Prescription</span> & a free follow-up</h3>
                </div>
            </div>
        </section>
        <section id="consultance2">
            <div class="container">
                
                <div class="consultance_form">
                    <form class="c0" action="RegistrationSuccessfull.php" method="POST">
                        <h1 class="c1">Registration Form</h1>
                        <p>Your Name<input type="text" name="name" required></p>
                        <div class="cemp">
                            <p>Age:<input type="number" name="age" required></p>
                       
                        <p>
                            Gender:
                            <select name="gender" id="gender" required>
                                <option value="">--select your gender--</option>
                                <option value="male">Male</option>
                                <option value="female">Female</option>
                                <option value="other">Other</option>
                            </select>
                        </p>
                        </div>
                        <div class="cemp2">
                            <p>Mobile Number:<input type="number" name="mobilenumber" required></p>
                        <p>E Mail ID:<input type="email" name="email" required></p>
                        </div>
                        <p>Father's Name:<input type="text" name="fathername"></p>
                        

                        <p>Complication / Symptoms:<textarea name="symptoms" id="symptoms" cols="100"
                                rows="2"></textarea></p>
                                <div class="button">
                                    <!-- <button type="submit" name="submit">Submit</button> -->
                                    <input type="submit" name="submit" id="submit" value="submit">
                                </div>
                                

                    </form>
                </div>
                <div class="consultance2_image">
                    <h1 class="c2">Register Now</h1>
                    <h2 class="c3">Fill the given  <span class="p4">Registration Form </span></h2>
                    
                    <img src="./images/th__1_-removebg-preview.png" alt="consultance2 image"
                        style="width:300px;height:400px" />
                </div>
            </div>

            </div>
        </section>
        <section id="blogs">
            <div class="container">
                <div class="blogs_image ">
                    <h1>
                        <span class="hi">Doctor's Blogs!</span> 
                        
                    </h1>
                    <h3>Get daily blogs related to <span class="med"> Medical Field.</span></h3>
                    <h3><span class="med"></span> </h3>
                   
                </div>
                <div class="blogs_content">

                    <h3>
                        <span class="med">Topic-</span> 
                        <span class=""> Doctors </span>
                    </h3>
                    
                    <h4 class="b1">In a world filled with remarkable individuals who dedicate their lives to serving humanity,
                         doctors stand tall as true unsung heroes. From the break of dawn until the late hours of the
                          night, these healthcare professionals commit themselves to saving lives, alleviating suffering,
                           and providing comfort to those in need. Let us delve into the remarkable world of doctors and shed
                            light on their unwavering dedication and invaluable contributions to society</h3>
                    <h4 class="b1"><span class="med2">Healing Hands:</span>
                        Doctors possess an exceptional ability to heal and restore hope in the lives of their patients. Through years of rigorous education, training, and experience, they acquire a deep understanding of the complexities of the human body and the diseases that afflict it. Armed with this knowledge, they navigate the intricate pathways of medical science to diagnose ailments accurately and prescribe effective treatments.
                        
                        </h4>
                        <h4 class="b1"><span class="med2">The Ultimate Lifesavers:</span>
                            When emergencies strike, doctors are often the first responders on the scene. Their quick thinking and decisive actions can mean the difference between life and death. Whether it's stabilizing a trauma patient, performing a critical surgery, or administering life-saving medications, doctors possess the skills and expertise to handle the most challenging situations with composure and precision.
                            </h4>
                        </div>
            </div>
        </section>
    </main>
    <footer>
        <div class="container">
        Our site content is for informational purposes only, and should not be taken as professional medical advice.<br>
            Created By Sanskar Jain
        </div>
    </footer>
</body>

</html>
<?php
// include 'connection.php';

// if(isset($_POST["submit"])){

//     $Name  = $_POST['name'];
//     $Age   = $_POST['age'];
//     $Gender   = $_POST['gender'];
//     $Mobile_No   = $_POST['mobilenumber'];
//     $Email   = $_POST['email'];
//     $FatherName   = $_POST['fathername'];
//     $Complication   = $_POST['symptoms'];
   
    
//     $query =  " insert into consultance_registration (Name, Age, Gender,
//     Mobile_No, Email, FatherName, Complication )
//      values ('$Name','$Age','$Gender','$Mobile_No','$Email',
//      '$FatherName','$Complication')";
    
    
//     $rest  = mysqli_query($cont,$query);
    
//     if($rest){
        ?>
        <!-- <script>
            alert("Thanku for Registration we will contact you soon ");
        </script>  -->
         
         
        <?php
        // session_start();
        // $_SESSION['name'] = $_POST['name'];
        // $_SESSION['email'] = $_POST['email'];
        // header('location:RegistrationSuccessfull.php');
    //}else{
        ?>
          <!-- <script>
              alert("data not inserted");
           </script> -->
        <?php
    // }
    
    // }
    

    ?> 