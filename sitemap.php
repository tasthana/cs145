


<!DOCTYPE HTML>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>CS 145 Site Map</title>
        <meta name="author" content="Tushar Asthana">
        <meta name="description" content="A site map to all my assignments for Web Client Programming Course at UVM.">

        <style>
            /* basic CSS */
            body{
                margin: auto;
                padding: 3%;
                width: 90%;
            }

            figure {
                border: thin solid darkslategray;
                border-radius: 3%;
                padding: 3%;
                text-align: center;
            }

            figcaption {
                color: #839e99;
                font-style: italic;
                text-align: center;
            }

            img{
                border-radius: 3%;
                max-width: 100%
            }

            .right{
                float: right;
                margin-left: 3%;
            }

            .small {
                width: 20%;
            }

            /* Setting up a grid layout for the main index page */
            .header{
                grid-area: header;
                grid-column: 1 / 3;
                padding: .5%;
                margin: .5%;
            }  
            .public-files{
                grid-area: public-files;
                padding: .5%;
                margin: .5%;
            }

            .supporting-files{
                grid-area: supporting-files;
                padding: .5%;
                margin: .5%;
            }
            .grader-notes{
                grid-area: grader-notes;
                padding: .5%;
                margin: .5%;
            }
            .grid-layout{
                border-bottom: thin dashed navy;
                display: inline-grid;
                grid-template-columns: 25% 25% 50%;
                grid-template-areas: "header header header"
                    "public-files supporting-files grader-notes"; 
                padding: .5%;
                margin: .5%;
                width: 100%;    
            }

            article {
                text-align: center;
            }

        </style>    
    
    <body>
        <figure class="right small">
            <img alt="Tushar Asthana circa- Summer 2022" src="images/smile.JPG">
            <figcaption>Flics at Cascias Beach, Portugal</figcaption>
        </figure>

        <h1>CS 145-<em>L1</em> Summer 2023</h1>
        <h2>Tushar Asthana - Site map</h2>
        <p><a href="ADMIN/code-view.php">My Admin Folder</a></p>
        <p><a href="ADMIN/table-viewer.php?getDatabase=">Database Viewer</a></p>

            <script>
                // JavaScript code to determine the greeting
                var currentHour = new Date().getHours();
                var greeting;
                if (currentHour >= 6 && currentHour < 12) {
                greeting = "Good Morning";
                } else if (currentHour >= 12 && currentHour < 18) {
                greeting = "Good Afternoon";
                } else if (currentHour >= 18 && currentHour < 24) {
                greeting = "Good Evening";
                } else {
                greeting = "Welcome to late night live";
                }

                // Function to update the greeting on the webpage
                function updateGreeting() {
                document.getElementById("greeting").textContent = greeting;
                }
            </script>

            <body onload="updateGreeting()">
            <h1 id="greeting"></h1>
        
        
        <section class="grid-layout">
            <h2 class="header">Module One</h2>
            <section class="public-files">
                <h3>Public Files</h3>
                <p><a href="pay.php">Pay Roll Base Activity</a></p>
            </section>

            <section class="supporting-files">
                 <h3>Supporting files</h3>
            </section>

            <section class="grader-notes">
                <h3>Notes to grader</h3>
                <p></p>
            </section>
        </section>

        <section class="grid-layout">
            <h2 class="header">Module Two</h2>
            <section class="public-files">
                <h3>Public Files</h3>
                <p><a href="image.php">Rotating Pictures</a></p>
                <p><a href="password.html">Password Verification</a></p>
                <p><a href="form.php">Starter Form</a></p>
                <p><a href="145final/index.php">Starter Form</a></p>
            </section>

            <section class="supporting-files">
                 <h3>Supporting files</h3>
            </section>

            <section class="grader-notes">
                <h3>Notes to grader</h3>
                <p></p>
            </section>
        </section>

        <section class="grid-layout">
            <h2 class="header">Final Project - Portfolio  Website</h2>
            <section class="public-files">
                <h3>Public Files</h3>
                <p><a href="final/array.php">Array.php</a></p>
                <p><a href="final/detail.php">Detail.php</a></p> 
                <p><a href="final/form.php">Form.php</a></p> 
                <p><a href="final/index.php">Index.php</a></p>  
                <p><a href="final/ajax.php"> Ajax.php </a></p>  
     
            </section>

            <section class="supporting-files">
                 <h3>Supporting files</h3>
                <p><a href="final/css/custom.css">custom.css</a> </p>
                <p><a href="final/css/custom-phone.css">custom-phone.css</a> </p>
                <p><a href="final/css/custom-tablet.css">custom-tablet.css</a> </p>
                <p><a href="final/css/custom-ajax.css">custom-ajax.css</a> </p>

                <p><a href="final/email.js"> Email-Validation.js </a></p>
                <p><a href="final/password.js"> Password-Validation.js </a></p>
                <p><a href="final/username.js"> Username-Validation.js </a></p>
                <p><a href="final/rotating-images.js"> Rotating-Images.js </a></p>
                <p><a href="final/checkbox.js"> Checkbox-Validation.js </a></p>
                <p><a href="final/radiobox.js"> Radiobox-Validation.js </a></p>

                
                <p><a href="final/sql.php">DB SQL Statements</a> </p>
                <p><a href="final/images/records.png">DB records</a> </p>
                
                <p><a href="final/footer.php">footer.php</a></p>
                <p><a href="final/header.php">header.php</a></p>
                <p><a href="final/nav.php">nav.php</a></p>
                <p><a href="final/top.php">top.php</a></p>
                
                <p><a href="final/images/wireframe-desktop.jpeg">wireframe desktop</a></p>
                <p><a href="final/images/wireframe-phone.jpeg">wireframe phone</a></p>
                <p><a href="final/images/wireframe-tablet.jpeg">wireframe tablet</a></p>
            </section>


            <section class="grader-notes">
                <h3> Notes to Graders</h3>
                <p>Linked JS files are for form validation and rotating pictures under supporting documents. Ajax file is under public files.
                    Also, did not have an enormous amount of commits because I used the existing CS 008 website as a base to build the CS 145 website.
                    JQuery used to add a hide button on detail page, as the videos may add an overwhelming amount of visual input, so it affects the DOM. 
                    I didn't use a specific source to get the fucntion(s), but used bits and pieces and put them all together, including Bob's lectures.
                    All links work, database is connected, admin folder works, and all css validation errors(around 15 total errors over 9 pages) are random one liners that 
                    i couldn't fix. 
                </p>
            </section>
        </section>

    </body>
</html>