<?php include "includes/header.php";?>

<div id="contact-left">
<h3> Email Us!</h3>

 <?php
        /*
         * Below are 2 different forms to be re-used       
         * 
         * Only use one at a time, comment out the other!       
         *
         */

        include 'includes/contact_include.php'; #site keys & code here
    
        $toAddress = "keith.scarmato@seattlecentral.edu";  //place your/your client's email address here
        $toName = "Rachel Taylor"; //place your client's name here
        $website = "Taylor Renovations Contact Form ";  //place NAME of your client's website

        // echo loadContact('simple.php');#demonstrates a simple contact form
        echo loadContact('multiple.php');#demonstrates multiple form elements
?>

</div>



<!-- START RIGHT COL -->
<div id="contact-right">
        <h3>Send us your contact information or call us at:</h3>
        <a href="tel:555-444-4545"><h2>TAYLOR RENOVATIONS<br>555-444-4545</h2></a>
<div id="map">
        <h3> We serve the Mason County, WA area</h3>
        <img src="images/fp-contact/mason-county-map350x350.jpg" alt="Google map of Mason county, WA area" />
</div>
     
</div>
<!-- END RIGHT COL -->
 
<?php include "includes/footer.php";?>
