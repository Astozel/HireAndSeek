<?php
session_start();
   $_SESSION['SessionName'];
if(isset($_SESSION['SessionName'])){

    echo "welcome, ".$_SESSION['SessionName'];
}
else{
    echo "Session name invalid";
}
//echo $_SESSION['SessionName'];
?>

<!DOCTYPE html>
<html>
    <head>

        <script src= "Scripts/AvailService.js"></script>
        <link rel="stylesheet" href="Style.css" type="text/css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

    </head>

    <body>
        
            <!-- Nav bar section -->
            <?php
          
            if(isset($_SESSION['SessionName'])){

                include_once("LoggedIn_Header.php");
                
            }
            else{
                include_once("Header.php");
            }
            ?>
            
                <!-- Carousel-->
                <div id="AvailService_Carousel">

                     <h1> Carousel Placeholder</h1>
                </div>

                <!-- functions (grid container) -->
                <div id="ServiceContainer"> 

                    <div id="ServiceDescription" class="ServiceContainerChild"> 
                        <h2 id="ServiceTitle"> Service Title Placeholder</h2>
                         <h3> About the Service </h3>
                         <p Id="AvailService_Description"> This is a Description Placeholder</p>
                    </div>


                    <div id="MessageTheFreelancer" class="ServiceContainerChild"> 
                        <center>
                        <img class="AccountProfilePicture" src="WebsiteImages/profilepic-placeholder.jpg"> 
                        <h4 class="AccountName">Account Name </h4> 
                       

                       <p class="AccountLevel">Level </p>

                       <p class="AccountDescription"> Account Description Placeholder</p>
                       <input type="text" id="MessageToFreelancer" placeholder="Leave a Message...">
                        <br>
                        <br>
                        <button id="SendButton" >  SEND  </button>
                    </center>

                    </div>



                    <div id="ServicePlans" class="ServiceContainerChild"> 
                        
                        <div id="Plan_Basic" class="Plan"> <h3>BASIC </h3></div>
                        <div id="Plan_Standard" class="Plan" > <h3> STANDARD  </h3> </div>
                        <div id="Plan_Premium" class="Plan"> <h3> PREMIUM </h3> </div>

                        <div id="Plan_DescriptionContainer"> 

                            <h4 id="Plan_Description"> Plan Description Placeholder </h4>
                            <button id = "Buy">Price Php 000.00</button>
                        </div>
                   
                    </div>


                    <div id="ServiceRatings" class="ServiceContainerChild"> <h3>Ratings </h3> 
                    <h2 id="totalRatings"> TOTAL RATINGS: 5.0 </h2>
                    <br>
                    <h3 id="5starRatingsTotal"> 5 Star Ratings: </h3>
                    <h3 id="4starRatingsTotal"> 4 Star Ratings:</h3>
                    <h3 id="5starRatingsTotal"> 3 Star Ratings:</h3>
                    <h3 id="6starRatingsTotal"> 2 Star Ratings:</h3>
                    <h3 id="7starRatingsTotal"> 1 Star Ratings:</h3>

                    </div>


                    <div id="Rate" class="ServiceContainerChild"> 
                        <center>

                        <div id="1Star" class="StarRatings"></div>
                        <div id="2Star" class="StarRatings"></div>
                        <div id="3Star" class="StarRatings"></div>
                        <div id="4Star" class="StarRatings"></div>
                        <div id="5Star" class="StarRatings"></div>

                        </center>
                    
                    
                    </div>

                </div>

            <!-- Footer -->
            <footer>
                
            </footer>

     
    </body>
</html>