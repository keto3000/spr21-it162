<?php include "includes/header.php"?>
 
 <?php
        /*
         * Below are 2 different forms to be re-used       
         * 
         * Only use one at a time, comment out the other!       
         *
         */

        include 'includes/contact_include.php'; #site keys & code here
    
        $toAddress = "keith.scarmato@seattlecentral.edu";  //place your/your client's email address here
        $toName = "Keith"; //place your client's name here
        $website = "it162 Client Questionnaire Form ";  //place NAME of your client's website

        // echo loadContact('simple.php');#demonstrates a simple contact form
        echo loadContact('multiple.php');#demonstrates multiple form elements
?>

</section>
<!-- END LEFT COL -->

<!-- START RIGHT COL -->
<aside>
 <h3>Basic Website Design Cycle</h3>
    <p><a href="https://github.com/NorthPaulo/research/tree/master/Frontend-books%26research/4%20-%20Miscellaneous/Usability%20and%20User%20Experience" target="top">Usability and User Experience- Curated Books on Github</a></p>
    <p><a href="https://www.lucidchart.com/pages/" target="top">Whiteboarding, Diagrams, Wireframes</a></p>
    <p><a href="https://embedresponsively.com" target="top">Transform Fixed Width Embedded Media Content Into Responsive Objects</a></p>
    <p><a href="https://coolors.co" target="top">Color Schemes and Custom Palette Creation</a></p>
    <p><a href="https://fonts.google.com" target="top">An Open-Source Collection of Highly Popular Type Fonts</a></p>
 
</aside>
<!-- END RIGHT COL -->
 
<?php include "includes/footer.php"?>
