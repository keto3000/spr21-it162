<?php
/**
 * multiple.php is a postback application designed to provide a 
 * contact form for users to email our clients.  
 * 
 * multiple.php provides a larger form with more elements to provide 
 * a richer example form.
 *
 * @package nmCAPTCHA2
 * @author Bill & Sara Newman <williamnewman@gmail.com>
 * @version 2 2019/10/13
 * @link http://www.newmanix.com/
 * @license http://www.apache.org/licenses/LICENSE-2.0
 * @see contact_include.php 
 * @todo none
 */
#--------------END CONFIG AREA ------------------------#
?>

<!-- START HTML FORM -->
<form action="<?php echo basename($_SERVER['PHP_SELF']); ?>" method="post">
<div>
    <label>
        Name:<br /><input type="text" name="Name" required="required" placeholder="Full Name (required)" title="Name is required" tabindex="10" size="44" autofocus />
    </label>
</div>
<div>	
    <label>
        Email:<br /><input type="email" name="Email" required="required" placeholder="Email (required)" title="A valid email is required" tabindex="20" size="44" />
    </label>
</div>
<!-- below form elements changed by Keith Scarmato to adapt for use as Client Questionnaire - only 'Name' & 'Email' (above) are significant -->
<div>	
    <label>
        How Did You Hear About Us?:<br />
        <select name="How_Did_You_Hear_About_Us?" required="required" title="How You Heard is required" tabindex="30">
            <option value="">Choose How You Heard</option>
            <option value="A Friend">A Friend</option>
            <option value="Business Referral">Business Referral</option>
            <option value="Social Media">Social Media</option>
            <option value="Web Search">Web Search</option>
            <option value="Printed Ad">Printed Ad</option>
            <option value="Other">Other</option>
        </select>
        <br /><textarea name="Comments" cols="36" rows="4" placeholder="Enter the name of the person/business/site that referred you" tabindex="31"></textarea>
    </label>
</div>

<div>	
    <fieldset>
        <legend>What Service Are You Interested In?</legend>
            <input type="checkbox" name="Interested_In[]" value="New Website" tabindex="40" /> New Website <br />
            <input type="checkbox" name="Interested_In[]" value="Website Redesign" /> Website Redesign <br />
            <input type="checkbox" name="Interested_In[]" value="Special Application" /> Mobile Application <br />
    </fieldset>
</div>
<div>
    <fieldset>
        <legend>Let's Get Acquainted!</legend>
            <label>
            What type of business?<br />
            <br /><textarea name="Type of business?" cols="36" rows="4" placeholder="Enter text here" tabindex="50"></textarea>
            </label>
            <label>
            Describe your company image/brand:<br />
            <br /><textarea name="Describe your company image/brand" cols="36" rows="4" placeholder="Enter text here" tabindex="51"></textarea>
            </label>
            <label>
            Who is your target audience?<br />
            <br /><textarea name="Who is your target audience?" cols="36" rows="4" placeholder="Enter text here" tabindex="52"></textarea>
            </label>
            <label>
            Why does your target audience need this website?:<br />
            <br /><textarea name="Why your target audience needs this website?" cols="36" rows="4" placeholder="Enter text here" tabindex="53"></textarea>
            </label>
            How are you and your business unique from other competitors?<br />
            <br /><textarea name="What makes you and your business unique?" cols="36" rows="4" placeholder="Enter text here" tabindex="54"></textarea>
            </label>
            <label>
            What geographical areas do you service?:<br />
            <br /><textarea name="What geographical areas do you cover?" cols="36" rows="4" placeholder="Enter text here" tabindex="55"></textarea>   
            </label>
    </fieldset>
</div>

<div>	
    <fieldset>
        <legend>Would you like to join our mailing list?</legend>
        <input type="radio" name="Join_Mailing_List?" value="Yes" 
        required="required" title="Mailing list is required" tabindex="60"  
        /> Yes <br />
        <input type="radio" name="Join_Mailing_List?" value="No" /> No <br />
    </fieldset>
</div>
<div>	
    <label>
        Comments:<br /><textarea name="Comments" cols="36" rows="4" placeholder="Your comments are important to us!" tabindex="70"></textarea>
    </label>
</div>	
<div class="g-recaptcha" data-sitekey="<?=$siteKey;?>"></div>
<div>
    <input type="submit" value="submit" />
</div>
</form>
<!-- END HTML FORM -->

