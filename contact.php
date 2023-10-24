<?php include 'includes/header.php';?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=, initial-scale=1.0">
        <title>LaMonte's Contact Page</title>
        <link rel="stylesheet" href="css/forms.css" />
    </head>
    <body>
        
    
        <main>
        <?php
        /*
         * Below are 2 different forms to be re-used       
         * 
         * Only use one at a time, comment out the other!       
         *
         */

        include 'includes/contact_include.php'; #site keys & code here
    
        $toAddress = "lamonte_g@yahoo.com";  //place your/your client's email address here
        $toName = "LaMonte Golden"; //place your client's name here
        $website = "IT162 Contact Form";  //place NAME of your client's website

        //echo loadContact('simple.php');#demonstrates a simple contact form
        echo loadContact('multiple.php');#demonstrates multiple form elements

	?>  
        </main>

        <aside>
            <div class="my-pic">
            <img src="./images/portal_picIT162.jpg" alt="selfie">
            </div>
            <!--end div mamp-->
            <!--<img src=" images/G_Logo2.jpg" alt="bassface">-->

        </aside>
    </body>
    </html>
   <!--end wrapper-->
   <?php include 'includes/footer.php';?>