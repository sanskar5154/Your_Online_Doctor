<?php
include "connection.php";
$Name  = $_POST['name1'];
$Age   = $_POST['age1'];
// $Gender   = $_POST['gender1'];
$BP  = $_POST['Blood_Pressure'];
$BT   = $_POST['Body_Temperature'];
$following   = $_POST['following'];
$complication1  = $_POST['complication1'];
$complication2   = $_POST['complication2'];
$complication3   = $_POST['complication3'];


$A1 = "select * from prescription where Disease='$complication1'";
$B1 = mysqli_query($cont,$A1);
$C1 = mysqli_fetch_array($B1);
$prescription1A  = $C1[2];
$prescription1R  = $C1[3];
$prescription1P  = $C1[4];

if($complication2==''){
    $prescription2A ='';
    $prescription2R ='';
    $prescription2P ='';
}else{
    $A2 = "select * from prescription where Disease='$complication2'";
    $B2 = mysqli_query($cont,$A2);
    $C2 = mysqli_fetch_array($B2);
    $prescription2A = $C2[2];
    $prescription2R = $C2[3];
    $prescription2P = $C2[4];
}
if($complication3==''){
    $prescription3A ='';
    $prescription3R ='';
    $prescription3P ='';
}else{
    $A3 = "select * from prescription where Disease='$complication3'";
    $B3 = mysqli_query($cont,$A3);
    $C3 = mysqli_fetch_array($B3);
    $prescription3A = $C3[2];
    $prescription3R = $C3[3]; 
    $prescription3P = $C3[4];
}

if($BT==''){
    $BT1 = "";
    $BT2 = "";
    $BT3 = "";
    $BT4 = "";
    $BT5 = "";
}
else if($BT<95){
    $BT1 = "Your";
    $BT2 = "Body Temperature";
    $BT3 = "is Low";
    $BT4 = ": There are no specific medications that can be recommended for self-treatment of hypothermia.
    The treatment for hypothermia typically involves rewarming the body gradually under medical supervision.
     Healthcare professionals may use various techniques such as warm blankets, warm intravenous fluids, heated humidified oxygen, and other medical interventions to raise the body temperature safely.  ";
    $BT5 = ": Move to a Warm Environment: If possible, move to a warm location, away from cold and wet conditions.
    Remove Wet Clothing: Remove any wet clothing and replace it with dry clothing or blankets.
    Use Warm Coverings: Cover the person with warm blankets or layers of clothing to help trap body heat.";
}
else if($BT<=99.5 && $BT>=95){
    $BT1 = "Your";
    $BT2 = "Body Temperature";
    $BT3 = "is Normal";
    $BT4 = ": Your Body Temperature is Normal not to take any medicine";
    $BT5 = ": Your Body Temperature is Normal not to take any Remedies";
}
else{
   
    $BT1 = "Your";
    $BT2 = "Body Temperature";
    $BT3 = "is High";
    $BT4 = ": Acetaminophen (paracetamol): It is an effective fever reducer and pain reliever.
    Nonsteroidal anti-inflammatory drugs (NSAIDs): Medications like ibuprofen and naproxen sodium can help reduce fever and alleviate associated symptoms.";
    $BT5 = ": Stay Hydrated: Drink plenty of fluids, such as water, herbal tea, clear broths, and electrolyte-rich beverages, to prevent dehydration.
    Herbal Remedies: Certain herbal teas or infusions may help promote relaxation and provide relief from fever symptoms. Examples include chamomile tea, peppermint tea, ginger tea, or elderflower tea. Consult with a healthcare professional or herbalist for guidance.";
}



if($BP>130){
    $BP1 = "Your";
    $BP2 = "Blood Pressure";
    $BP3 = "is High";
    $BP4 = ": Amlodipine 5mg is a calcium channel blocker that helps relax and widen blood vessels, making it easier for the heart to pump blood. It is commonly prescribed for high blood pressure and can also be used for other heart-related conditions. Some commonly available brands of amlodipine in India include Amlopres, Stamlo, Amlokind, and Amlong.";
    $BP5 = ": Eat a balanced diet rich in fruits, vegetables, whole grains, lean proteins, and low-fat dairy products.
    Reduce sodium (salt) intake by avoiding processed foods, canned goods, and adding less salt to meals.
    Increase potassium intake by consuming foods like bananas, oranges, spinach, and tomatoes.";
}
else if($BP<90 && $BP>0){
    $BP1 = "Your";
    $BP2 = "Blood Pressure";
    $BP3 = "is Low";
    $BP4 = ": Fludrocortisone medication is a synthetic steroid that helps increase sodium and fluid retention, which can raise blood volume and subsequently blood pressure.";
    $BP5 = ": Increase Fluid Intake: Drink plenty of fluids, such as water, herbal tea, and electrolyte-rich beverages, to help maintain hydration and increase blood volume.
    Add More Salt to Your Diet: Sodium can help increase blood pressure. Consult with your doctor about adding a moderate amount of salt to your meals or incorporating foods naturally high in sodium, like pickles or olives.";
}
else if($BP<=130 && $BP>=90){
    $BP1 = "Your";
    $BP2 = "Blood Pressure";
    $BP3 = "is Normal";
    $BP4 = ": Your Blood Pressure is Normal not to take any medicine";
    $BP5 = ": Your Blood Pressure is Normal not to take any Remedies";
}
else{
    $BP1 = "";
    $BP2 = "";
    $BP3 = ""; 
    $BP4 = "";
    $BP5 = "";
}
 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prescription Result</title>
    <link rel="stylesheet" href="prescriptionresult.css?v=1" />
</head>
<body>
    <header>
        <nav class="container">
            <div class="logo">
                <img src="./images/logo2.jpg" alt="home image"  style="width:200px;height:60px" />
            </div>
            <div class="logoafter">
                <ul>
                    <a href="#phome">
                        <li>Home</li>
                    </a>
                    <a href="#allopathic">
                        <li>Allopathic Prescription </li>
                    </a>
                    <a href="#Remedies">
                        <li>Home Remedies</li>
                    </a>
                    <a href="#Remedies2">
                        <li>Prevention</li>
                    <a href="home.php">
                        <li>Go Back</li>
                    </a>
                    
                    <!-- <a href="#login">
                        <li>LogIn/SignUp</li>
                    </a> -->
                </ul>
            </div>
        </nav>
    </header>
    <main>
        <section id="phome">
            <div class="container">
            <img src="./images/clipart-doctor-person-1.png" alt="home image" style="width:200px;height:200px" />
                <div class="phome_content">
        
                    <h1>
                        <span class="pmed">Hi <?php echo $Name; ?> </span> , 
                    </h1>
                    <h1>I am Your Online Doctor</h1>
                    <!-- <h3>Your <span class="med">Body Temperature</span> is Normal</h3> -->
                    <h3><?php echo $BT1; ?> <span class="p2med"><?php echo $BT2; ?></span> <?php echo $BT3; ?></h3>
                    <!-- <h3>Your <span class="med">Blood Pressure</span> is Normal</h3> -->
                    <h3><?php echo $BP1; ?> <span class="p2med"><?php echo $BP2; ?></span> <?php echo $BP3 ; ?></h3>
                    <h3>Scroll down to see Prescription </h3>
                </div>
            </div>
        </section>
        <section id="allopathic">
            <div class="container">
                <div class="allopathic_image">
                <img src="./images/consultant2-removebg-preview.png" alt="home image" style="width:300px;height:300px" />
                
                </div>
                <div class="allopathic_content">
                    <h1><span class="pmed">Allopathic Prescription</h1>
                    <h3><span class="p2med"><?php echo $complication1; ?>  </span> <?php echo $prescription1A ; ?></h3>
                    <h3><span class="p2med"><?php echo $complication2; ?>  </span> <?php echo $prescription2A ; ?></h3>
                    <h3><span class="p2med"><?php echo $complication3; ?>  </span> <?php echo $prescription3A ; ?></h3>
                    <h3><span class="p2med"><?php echo $BT2; ?></span> <?php echo $BT4 ; ?></h3>
                    <h3><span class="p2med"><?php echo $BP2; ?></span> <?php echo $BP4 ; ?></h3>
                </div>
                
            </div>
        </section>
        <section id="Remedies">
            <div class="container">
            <div class="remedies_image">
              <img src="./images/recetas[1].png" alt="home image" style="width:300px;height:300px" />
              
            </div>
                <div class="Remedies_content">
                    <h1><span class="pmed">Home Remedies</h1>
                    <h3><span class="p2med"><?php echo $complication1; ?>  </span> <?php echo $prescription1R ; ?></h3>
                    <h3><span class="p2med"><?php echo $complication2; ?>  </span> <?php echo $prescription2R ; ?></h3>
                    <h3><span class="p2med"><?php echo $complication3; ?>  </span> <?php echo $prescription3R ; ?></h3>
                    <h3><span class="p2med"><?php echo $BT2; ?></span> <?php echo $BT5 ; ?></h3>
                    <h3><span class="p2med"><?php echo $BP2; ?></span> <?php echo $BP5 ; ?></h3>
                </div>
            </div>
        </section>
        <section id="Remedies2">
            <div class="container">
            <div class="remedies_image">
              <img src="./images/2-man-discussing-with-doctor-cartoon-clipart-removebg-preview.png" alt="home image" style="width:300px;height:300px" />
              
            </div>
                <div class="Remedies2_content">
                    <h1><span class="pmed">Prevention To Take</h1>
                    <h3><span class="p2med"><?php echo $complication1; ?>  </span> <?php echo $prescription1P ; ?></h3>
                    <h3><span class="p2med"><?php echo $complication2; ?>  </span> <?php echo $prescription2P ; ?></h3>
                    <h3><span class="p2med"><?php echo $complication3; ?>  </span> <?php echo $prescription3P ; ?></h3>
                    
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
