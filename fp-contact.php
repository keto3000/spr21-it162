<?php include "includes/header.php";?>

<div id="contact-left">
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
        <h3>If you would like to work with us, send us your contact information or call us at:</h3>
                <h2>TAYLOR RENOVATIONS</h2>
                <h2>Tel: 555-444-5555</h2>
<div id="map">
        <h3> We serve the Mason County, WA area</h3>
        <img src="images/fp-contact/mapofMasoncounty350x182.jpg" alt="Google map of Mason county, WA area" />
</div>
     
</div>
<!-- END RIGHT COL -->
 
<?php include "includes/footer.php";?>
