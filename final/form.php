<?php
    include 'top.php';

    // initialize all values 

    $dataIsGood = false;

    $message = '';

    $email = '';
    $username = '';
    $password = '';

    $hot = false;
    $superhot = false;
    $ew = false;

    $hire = 'yes';

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


            <section>

            <?php
            if($_SERVER["REQUEST_METHOD"] == 'POST')
            {
                //sanitize start
                $email = getData('txtEmail');
                $username = getData('txtUsername');
                $password = getData('txtPassword');

                $hot = (int) getData('chkHot'); 
                $superhot = (int) getData('chkSuperHot'); 
                $ew = (int) getData('chkEw'); 

                $hire = getData('radHire');  
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
                } 
                
                if ($hire != "Yes" AND $hire != "No" AND $hire != "Maybe")
                {
                    print '<p class = "wrong"> Tell me if you would hire me! </p> ';
                    $dataIsGood = false; 
                }

                if($username =='')
                {
                    print '<p class = "wrong"> Please type in your username again. </p> ';
                    $dataIsGood = false;
                } 

                if($password =='')
                {
                    print '<p class = "wrong"> Please type in your password again. </p> ';
                    $dataIsGood = false;
                } 
                //end validation

                // validate check boxes
                $totalChecked = 0; 

                if($hot != 1) $hot = 0;
                $totalChecked += $hot; 

                if($superhot != 1) $superhot = 0;
                $totalChecked += $superhot; 

                if($ew != 1) $ew = 0;
                $totalChecked += $ew; 

                if($totalChecked == 0)
                {
                    print '<p class="wrong"> Please choose one place! </p>';
                    $dataIsGood = false; 
                }

                //save data 

                if($dataIsGood){

                    try{
                        $sql ='INSERT INTO tblForm (fldEmail, fldUsername, fldPassword, fldhot, fldsuperHot, fldew, fldHire) 
                        VALUES (?,?,?,?,?,?,?)';
                        $data = array($email, $username, $password, $hot, $superhot, $ew, $hire);
                        $sqlText = $sql;

                        $statement = $pdo->prepare($sql);

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

                    <fieldset class="password">
                        <legend>Choose your username:</legend>
                        <p>
                            <label class="password" for="txtUsername" ></label> 
                            <input id="txtUsername" maxlength="300" name="txtUsername"
                            onfocus="this.select()" tabindex="110" type="text" value="<?php print $tips; ?>"
                            required>
                        </p>
                    </fieldset>

                    <fieldset class="password">
                        <legend>Password:</legend>
                        <p>
                            <label class="password" for="txtPassword" ></label> 
                            <input id="txtPassword" maxlength="300" name="txtPassword"
                            onfocus="this.select()" tabindex="110" type="text" value="<?php print $story; ?>"
                            required>
                        </p>
                    </fieldset>

                    <fieldset class="checkbox">
                        <legend>How attractive is Tushar?</legend>
                        <p>
                            <input id="chkHot" name="chkHot" tabindex="510"
                            type="checkbox" value="1" <?php if($hot) print 'checked'; ?>>
                            <label for="chkHot">Hot</label>
                        </p>

                        <p>
                            <input id="chkSuperHot" name="chkSuperHot" tabindex="520"
                            type="checkbox" value="1" <?php if($superhot) print 'checked'; ?>>
                            <label for="chkSuperHot">Super Hot</label>
                        </p>

                        <p>
                            <input id="chkEw" name="chkEw" tabindex="530"
                            type="checkbox" value="1" <?php if($ew) print 'checked'; ?>>
                            <label for="chkEw">Ew</label>
                        </p>
                    </fieldset>

                    <fieldset class="radio">
                        <legend>Would you hire Tushar?</legend>
                        <p>
                            <input type="radio" id="radHireYes"
                            name="radHire" value="Yes" tabindex="410" required <?php if($radCity == "Yes") print 'checked';?>>
                            <label class="radio-field" for="radHireYes">Yes!</label>
                        </p>

                        <p>
                            <input type="radio" id="radHireMaybe"
                            name="radHire" value="Maybe" tabindex="420" required <?php if($radCity == "Maybe") print 'checked';?>>
                            <label class="radio-field" for="radHireMaybe">Maybe</label>
                        </p>

                        <p>
                            <input type="radio" id="radHireNo"
                            name="radHire" value="No" tabindex="430" required <?php if($radCity == "No") print 'checked';?>>
                            <label class="radio-field" for="radHireNo">No!</label>
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
