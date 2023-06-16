
<!DOCTYPE html>
<html lang="en">

<title>Form Page Starter Code</title>
<!-- <script src= "password.js" defer></script>
<script src= "username.js" defer></script> -->
<h1>Form Starter Page Code<h1>

    <body>
        <form>
            <form action="#" id="strenght"  method="post">

                <section>
                <script src= "password.js" defer></script>
                    <label for="txtUser">Username :</label>
                    <input type="text" id="txtUser" name="textUser">
                    <span id="strength"></span>
                </section>

                <section>
                <script src= "username.js" defer></script>
                    <label for="txtPass">Password :</label>
                    <input type="text" id="txtPass" name="textPass">
                    <span id="strength"></span>
                </section>

                <input id="btnSubmit" name="btnSubmit" tabindex="900" type="submit" value="Submit">

            <?php
            print'<p>Post Array:</p><pre>';
            print_r($_POST);
            print '</pre>';
            ?>
        </form>

    </body> 
    


