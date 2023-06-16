<?php
    include 'top.php';

    // initialize all values 

    $dataIsGood = false;

    $message = '';

    $email = '';
    $tips = '';
    $story = '';

    $costaRica = false;
    $maldives = false;
    $puertoRico = false;

    $city = 'Toronto';

    // post back function push thru special chars
    function getData($field) {
        if (!isset ($_POST[$field])) {
            $data = "";
        } else {
            $data = trim($_POST[$field]);
            $data = htmlspecialchars($data);
        }
        return $data;
    }

    function verifyAlphaNum($testString) {
        // Check for letters, numbers and dash, period, space and single quote only.
        // added & ; and # as a single quote sanitized with html entities will have 
        // this in it bob's will be come bob's
        return (preg_match ("/^([[:alnum:]]|-|\.| |\'|&|;|#)+$/", $testString));
    }
?>

        <main>
        <h2>Feedback is always appreciated!</h2>

            <section>

            <?php
            if($_SERVER["REQUEST_METHOD"] == 'POST')
            {
                //sanitize start
                $email = getData('txtEmail');
                $tips = getData('txtTips');
                $story = getData('txtStory');

                $costaRica = (int) getData('chkCostaRica'); 
                $maldives = (int) getData('chkMaldives'); 
                $puertoRico = (int) getData('chkPuertoRico'); 

                $city = getData('radCity');  
                //sanitize end 


                //validate form
                $dataIsGood = true;

                if($email =='')
                {
                    print '<p class = "wrong"> Please type in your email again. </p> ';
                    $dataIsGood = false;
                } elseif(!filter_var($email, FILTER_VALIDATE_EMAIL))
                {
                    print '<p class = "wrong"> Email must be wrong, try again! </p> ';
                    $dataIsGood = false; 
                } if ($city != "Toronto" AND $city != "Hawaii" AND $dedicated != "Singapore")
                {
                    print '<p class = "wrong"> Please tell me which city to blog about next! </p> ';
                    $dataIsGood = false; 
                }

                if($tips =='')
                {
                    print '<p class = "wrong"> Please type in your tips again. </p> ';
                    $dataIsGood = false;
                } 

                if($story =='')
                {
                    print '<p class = "wrong"> Please type in your story again. </p> ';
                    $dataIsGood = false;
                } 
                //end validation

                // validate check boxes
                $totalChecked = 0; 

                if($costaRica != 1) $costaRica = 0;
                $totalChecked += $costaRica; 

                if($maldives != 1) $maldives = 0;
                $totalChecked += $maldives; 

                if($puertoRico != 1) $puertoRico = 0;
                $totalChecked += $puertoRico; 

                if($totalChecked == 0)
                {
                    print '<p class="wrong"> Please choose one place! </p>';
                    $dataIsGood = false; 
                }

                //save data 
                if($dataIsGood){
                    try{
                        $sql ='INSERT INTO tblFormAnswers (fldEmail, fldTips, fldStory, fldcostaRica, fldmaldives, fldpuertoRico, fldCity) 
                        VALUES (?,?,?,?,?,?,?)';
                        $statement = $pdo->prepare($sql);
                        $data = array($email, $tips, $story, $costaRica, $maldives, $puertoRico, $city);

                        if($statement->execute($data))
                        {
                            $message = '<h2> Thank you, your feedback is always appreciated!</h2>';

                            //email code 
                            $to = $email;
                            $from = 'Personal Travel Blog <tasthana@uvm.edu>';
                            $subject = 'Confirmation Email'; 

                            $headers = "MIME-Version: 1.0\r\n";
                            $headers .= "Content-type: text/html; charset=utf-8\r\n";
                            $headers .= "From: " . $from . "\r\n"; 

                            $mailMessage = '<p style= "background-color:rgb(8, 75, 14); font: 12pt serif; color: #009;"> I really do appreciate the feedback ';
                            $mailMessage .= 'that you have provided me, and I will take it as guidance! I closely read every response that I recieve!';
                            $mailMessage .= 'and if I have any every questions!</p>';
                            $mailMessage .= '<p style= "background-color:rgb(8, 75, 14); font: 12pt serif; color: #009;"> Wish you well on your future travels, <br><span "padding-left: 5em;"> </span>'; 
                            $mailMessage .= 'Tushar Asthana </p>';

                            $mailSent = mail($to, $subject, $mailMessage, $headers);

                            if($mailSent)
                            {
                                print "<p> A copy has been emailed to you for your records!</p>";
                            }

                        } else{
                            $message = '<p> Something went wrong, records were not saved. </p>';
                        }
                    }catch(PDOException $e){
                        $message = '<p> Something went wrong, contact your administrator. </p>';
                    }
                }//data is good 
                
            } //ends form submitted
            ?>

                <h3>Fill out the information to contact me, and I'll get back to you as soon as I can :)</h3>

                <form action="#" id= "frmNext" method="post">

                    <fieldset class="contact">
                        <legend>What's your email?</legend>
                        <p>
                            <label class="required" for="txtEmail" >Email</label> 
                            <input id="txtEmail" maxlength="50" name="txtEmail"
                            onfocus="this.select()" tabindex="110" type="text" value="<?php print $email; ?>"
                            required>
                        </p>
                    </fieldset>

                    <fieldset class="tips">
                        <legend>Any suggestions or tips?</legend>
                        <p>
                            <label class="tips" for="txtTips" ></label> 
                            <input id="txtTips" maxlength="300" name="txtTips"
                            onfocus="this.select()" tabindex="110" type="text" value="<?php print $tips; ?>"
                            required>
                        </p>
                    </fieldset>

                    <fieldset class="story">
                        <legend>Drop your best travel story below!</legend>
                        <p>
                            <label class="story" for="txtStory" ></label> 
                            <input id="txtStory" maxlength="300" name="txtStory"
                            onfocus="this.select()" tabindex="110" type="text" value="<?php print $story; ?>"
                            required>
                        </p>
                    </fieldset>

                    <fieldset class="checkbox">
                        <legend>What's your dream island vacation?</legend>
                        <p>
                            <input id="chkCostaRica" name="chkCostaRica" tabindex="510"
                            type="checkbox" value="1" <?php if($costaRica) print 'checked'; ?>>
                            <label for="chkCostaRica">Costa Rica</label>
                        </p>

                        <p>
                            <input id="chkMaldives" name="chkMaldives" tabindex="520"
                            type="checkbox" value="1" <?php if($maldives) print 'checked'; ?>>
                            <label for="chkMaldives">Maldives</label>
                        </p>

                        <p>
                            <input id="chkPuertoRico" name="chkPuertoRico" tabindex="530"
                            type="checkbox" value="1" <?php if($puertoRico) print 'checked'; ?>>
                            <label for="chkPuertoRico">Puerto Rico</label>
                        </p>
                    </fieldset>

                    <fieldset class="radio">
                        <legend>Which city should I post next?</legend>
                        <p>
                            <input type="radio" id="radCityToronto"
                            name="radCity" value="Toronto" tabindex="410" required <?php if($radCity == "Toronto") print 'checked';?>>
                            <label class="radio-field" for="radCityToronto">Toronto</label>
                        </p>

                        <p>
                            <input type="radio" id="radCityHawaii"
                            name="radCity" value="Hawaii" tabindex="420" required <?php if($radCity == "Hawaii") print 'checked';?>>
                            <label class="radio-field" for="radCityHawaii">Hawaii</label>
                        </p>

                        <p>
                            <input type="radio" id="radCitySingapore"
                            name="radCity" value="Singapore" tabindex="430" required <?php if($radCity == "Singapore") print 'checked';?>>
                            <label class="radio-field" for="radCitySingapore">Singapore</label>
                        </p>

                        <fieldset class="button">
                            <input id="btnSubmit" name="btnSubmit" tabindex="900"
                            type="submit" value="Submit">
                        </fieldset>
                    </fieldset> 

                </form>
            </section>

            <section>
                <?php 
                print '<h3>'. $message . '</h3>'
                ?>
            </section>
        </main>
    
    <?php
        include 'footer.php';
    ?>
        

</html>
