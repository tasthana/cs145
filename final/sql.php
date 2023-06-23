<?php
    include 'top.php';
?>


<main>
    <h1>SQL</h1>
    

    <h2>Create Table for Form Page</h2>
    <pre>
    CREATE TABLE tblForm(
            pmkAnswers int(15)NOT NULL AUTO_INCREMENT PRIMARY KEY,
            fldEmail varchar(50) DEFAULT NULL,
            fldUsername varchar(300) DEFAULT NULL,
            fldPassword varchar(300) DEFAULT NULL,
            fldhot tinyint(1)DEFAULT 0,
            fldsuperHot tinyint(1)DEFAULT 0,
            fldew tinyint(1) DEFAULT 0,
            fldHire varchar(30) DEFAULT NULL
            )
    </pre>

    <pre>
    <h3>Insert Statement for Table in Form Page</h3>

    $sql ='INSERT INTO tblFormAnswers (fldEmail, fldTips, fldStory, fldcostaRica, fldmaldives, fldpuertoRico, fldCity) VALUES (?,?,?,?,?,?,?)';
        $statement = $pdo->prepare($sql);
        $data = array($email, $tips, $story, $costaRica, $maldives, $puertoRico, $city);

    </pre>


    <pre>
    <h3>Select Statement for Data in Form Page</h3>
    SELECT fldEmail, fldTips, fldStory, fldcostaRica, fldmaldives, fldpuertoRico, fldCity FROM tblFormAnswers
    </pre>





    </main>
<?php
    include 'footer.php';
?>
</body>
</html>
