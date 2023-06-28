<!DOCTYPE html>
<html lang="en">

<head>
    <title>Extracurricular Page </title>
    <meta charset="utf-8">
    <meta name="author" content="Tushar Asthana">
    <link rel="stylesheet" href="css/custom-ajax.css" type="text/css">
    <meta name="description" content="Using Ajax to load simple text stories">

    <p>
        This is a list of the 5 published articles that I have written for the Vermont Cynic as a UVM student.
        Introduction : 
        My name is Tushar Asthana, a senior computer science student at UVM. 
        I am originally from the subcontinent of India and I’m a first generation immigrant. 
        I’ve lived in Vermont for 13 years, which allows me to have a unique perspective on the issues that stem from racism. 
        It also lets me serve as a spokesperson. 
        I can relate aspects of my life to other Black, Indigenous, People of Color that have similar experiences to mine. 
        These papers aim to amplify their voices on UVM’s campus.
    </p>

    <section id="putTextHere"></section>

    <p>
        <button onclick="loadDoc('papers/whitewashed.txt')">Whitewashed </button>
        <button onclick="loadDoc('papers/stereotypes.txt')">Stereotypes </button>
        <button onclick="loadDoc('papers/doubleCon.txt')"> Double Conciousness </button>
        <button onclick="loadDoc('papers/hypervis.txt')">Hyper Visibility </button>
        <button onclick="loadDoc('papers/crowd.txt')">Crowd Mentality </button>
    </p>

</head>

<body>
    <script>
    window.addEventListener("load", (event) => { loadDoc('whitewashed.txt'); });

    var ajax;

    function state_Change(url) {
        if (ajax.readyState == 4) { // 4 = "loaded"
            if (ajax.status == 200) { // 200 = "OK"
                document.getElementById('putTextHere').innerHTML = ajax.responseText;
            } else {
                alert("Problem retrieving data:" + ajax.statusText);
            }
        }
    }
    
    // this function gets the file specified in the url
    function loadDoc(url) {
        ajax = null;
        ajax = new XMLHttpRequest();
        if (ajax != null) {
            ajax.onreadystatechange = state_Change;
            ajax.open("GET", url, true);
            ajax.send(null);
        } else {
            alert("Your browser does not support XMLHTTP.");
        }
    }
    
</script>
    

</body>

<?php
        include 'footer.php';
    ?>

</html>