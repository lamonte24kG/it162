<?php
/**
 * simple.php is a postback application designed to provide a 
 * contact form for users to email our clients.  
 * 
 * simple.php provides a typical feedback form for a website
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
<?php include 'includes/header.php';?>
	<!-- START HTML FORM -->
	<form action="<?php echo basename($_SERVER['PHP_SELF']); ?>" method="post" class="form">
	<div>
	<fieldset class="fieldset">
	<legend>
            Contact Danny
            </legend>
        <div class="label">
		<label>
			Name:<br /><input type="text" name="Name" required="required" placeholder="Full Name (required)" title="Name is required" tabindex="10" size="44" autofocus />
		</label>
	</div>
	<div>	
		<label>
			Email:<br /><input type="email" name="Email" required="required" placeholder="Email (required)" title="A valid email is required" tabindex="20" size="44" />
		</label>
	</div>
	<!-- below change the HTML to your form elements - only 'Name' & 'Email' (above) are significant -->
	<div>	
	<label>Phone</label>
            <input type="tel" name="phone" aria-label="Please enter your phone number" placeholder="ex. (111)-111-1111" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}"/>

            <label>Age</label>

                <ul>
                    <li><input type="radio" name="age" value="child"<?php if(isset($_POST['age']) && $_POST['age'] == 'child') echo 'checked="checked"';?>>Children 8-12 yrs old</li>

                    <li><input type="radio" name="age" value="youth"<?php if(isset($_POST['age']) && $_POST['age'] == 'youth') echo 'checked="checked"';?>>Youth 13-17</li>    

                    <li><input type="radio" name="age" value="adult"<?php if(isset($_POST['age']) && $_POST['age'] == 'adult') echo 'checked="checked"';?>>Adult</li>
                </ul>

            <label>Instrument</label>
            <ul>
                <li><input type="checkbox" name="instrument[]" value="guitar">Guitar</li>

                <li><input type="checkbox" name="instrument[]" value="bass">Bass</li>

                <li><input type="checkbox" name="instrument[]" value="piano">Piano</li>

                <li><input type="checkbox" name="instrument[]" value="drum">Drums</li>

                <li><input type="checkbox" name="instrument[]" value="voice">Voice</li>
               
            </ul>    

        <label>Course location</label>    

            <select name="course_type">
                <option value=""
                <?php if(isset($_POST['course_type']) && is_null($_POST['course_type'])) echo 'selected="unselected"';?>>Select One!</option>

                <option value="online"<?php if(isset($_POST['course_type']) && $_POST['course_type'] =="online") echo 'selected="unselected"';?>>Online</option>

                <option value="in_person"<?php if(isset($_POST['course_type']) && $_POST['course_type'] =="in_person") echo 'selected="unselected"';?>>In-Person</option>
            </select>

		<label>
			Comments:<br /><textarea name="Comments" cols="36" rows="4" placeholder="Your comments are important to us!" tabindex="30"></textarea>
		</label>
	</div>	
    </div><!--end div label-->
	</fieldset>
    <div class="g-recaptcha" data-sitekey="<?=$siteKey;?>"></div> 
	<div>
		<input type="submit" value="submit" />
	</div>
    </form>
	<!-- END HTML FORM -->
    <?php include 'includes/footer.php';?>