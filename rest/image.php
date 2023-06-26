<style>
        body {
            background-color: #efefef;
        }

        article {
            text-align: center;
        }

        #rotatePictures {
            padding: 1em;
            border: medium #737373 ridge;
        }
    </style>

    <script>
  //<!--
        
        window.onload = rotate; // this causes the rotate function to start

        //fill an array of images
        var rotImages = new Array("images/smile.JPG", "images/lank.jpeg", "images/face.jpeg", "images/marcoKaties.jpeg",
"images/celtics.jpeg");
        var thisPic = 0;


        // this functions delays for three seconds and then changes the picture being
        // displayed
        function rotate() {
            thisPic++;
            if (thisPic == rotImages.length) {  //reach the end and start at the first one
                thisPic = 0;
            }
            document.getElementById("rotatePictures").src = rotImages[thisPic];

            setTimeout("rotate()", 3 * 1000);  // 3 seconds
        }
//-->
    </script>
</head>

    <body id="rotating">
        <article>
            <h1>The many photos of Tushar Asthana</h1>
            <figure>
                <img id="rotatePictures" alt="rotating image of ansel adam prints" src="images/aspens_t.jpg">
            </figure>
        </article>
    </body>
