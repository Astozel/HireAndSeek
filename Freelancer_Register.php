<?php


/* if the user registed: check the registration status */
if(isset($_GET['data'])){

$data = $_GET['data'];
    echo"<script> alert('$data');</script>";

}
?>
<!DOCTYPE html>
    <html>
        <head>
            <link rel="stylesheet" href="Style.css" type="text/css">
            <script src="Scripts/Login.js"> </script>
            <meta name="viewport" content="width=device-width, initial-scale=1.0">

        </head>
        <body>

            <!-- Nav bar section -->
            <?php
            session_start();
            session_destroy();
            session_unset();
            include_once("includes/Header.php");
            ?>
            <!-- Php form-->  

            <div id="LoginForm">
               
            <form action="Backend/Freelancer_Register.backend.php" method="post" enctype = "multipart/form-data">
                <br> <br>
            <div id="Register_Layer1">

            <input type="text" name="Email" placeholder="Email"> <br>  
            <input type="text" name="UserName" placeholder="User Name "> <br>  
            <input type="password" name="UserPassword" placeholder="Password"> <br> 
            <input type="password" placeholder=" Confirm Password"> <br> <br> 


            <input type="text" name="FileEmail" placeholder="Files Email Address"> <br> 
            <input type="text" name="FirstName" placeholder="FIRST NAME" required> 
            <input type="text" name="LastName" placeholder="LAST NAME" required> 
            <input type="text" name="MiddleInitial" placeholder="MIDDLE NAME"> <br> 
            <input type="text" name="Birthdate" placeholder="BIRTH DATE"> <br> 
            <select name="Gender">  <br> 
                <option value="" disabled selected hidden> GENDER </option> 
            <option value="male"> MALE </option>
            <option value="female"> FEMALE </option>
            </select>

            <br><br>

            
            <input type="text" name="Contact" placeholder="Contact Number"> <br>  
            <input type="text" name="Address" placeholder="Address"> <br>  

            
          
            
            <br> <br>

            <input type="text" name="Description" placeholder="Description"> <br> 
            <input type="text" name="Language" placeholder="Language"> <br> 
            <input type="text" name="Occupation" placeholder="Occupation"> <br>

            <br> <br>

            <input type="text" name="Education" placeholder="Education"> <br> 
            <input type="text" name="Skills" placeholder="Skills"> <br> 
            <br> 
</div>

<div id="Register_Layer2">

            <select name="IDTYPE"> 
                <option value="" disabled selected hidden required> ID TYPE </option>
            <option value="Driving License"> Driving License </option>
            <option value="National ID"> National ID </option>
            <option value="School ID"> School ID </option>
            </select>

           <br><br>
           UPLOAD ID <br>
        <input type="file" name="IDFile" placeholder="ID " accept=".jpg,.png">

            <br> <br>

            <br> <br>
            <select name="IDTYPE2" required> 
                <option value="" disabled selected hidden> ID TYPE </option>
            <option value="Driving License"> Driving License </option>
            <option value="National ID"> National ID </option>
            <option value="School ID"> School ID </option>
            </select>

           <br><br>
           UPLOAD ID <br>
        <input type="file" name="IDFile2" placeholder="ID" accept=".jpg,.png">
</div>
<div id="Register_Layer3">

<input type="hidden"  id="UserSnapshot" name ="UserSnapshot">     

<canvas id="photocapture"> </canvas>
    <video autoplay id="video"> </video>
   
</div>
<div id="Register_Layer4">
    <h3>  Terms and Conditions Placeholder</h3>
            <input type="submit" value="Sign Up" >
</div>  
            </form>
            <br> 
            <button onclick="startvideo()" id="startvideo"> Open Camera </button>
            <button  id="CaptureImage"> Capture </button>
            <br>
            <button onclick="displayNext()" id="Next"> NEXT </button>
            </div>
        
            <br> <br>

        <!-- Footer -->
        <?php include_once('Includes/footer.php')?>

            
            <script src="Scripts/Register.js"> </script>
        </body>
    </html>  