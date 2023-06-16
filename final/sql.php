<?php
    include 'top.php';
?>


<main>
    <h1>SQL</h1>
    <h2>Create Table for About Page</h2>
    <p>Create Table SQL</p>

    <pre> 
    CREATE TABLE tblBestTravels
    (
        pmkBestTravels INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
        fldRank varchar(20),
        fldName varchar(50)
    )
    </pre>

    <h2>Insert Data</h2>
    <pre>
    INSERT INTO tblBestTravels(fldRank, fldName) VALUES 
    ('1', 'Lisbon / Porto, Portugal'),
    ('2', 'Lucknow, India'),
    ('3', 'Hawaii / Maui, USA'),
    ('4', 'Toronto, Canada'),
    ('5', 'Singapore, Republic of Singapore')
    </pre>

    <h3>Select Records</h3>
    <pre>
    SELECT fldRank, fldName FROM tblBestTravels
    </pre>


    <h2>Create Table for Form Page</h2>
    <pre>
    CREATE TABLE tblFormAnswers(
            pmkAnswers int(15)NOT NULL AUTO_INCREMENT PRIMARY KEY,
            fldEmail varchar(50) DEFAULT NULL,
            fldTips varchar(300) DEFAULT NULL,
            fldStory varchar(300) DEFAULT NULL,
            fldcostaRica tinyint(1)DEFAULT 0,
            fldmaldives tinyint(1)DEFAULT 0,
            fldpuertoRico tinyint(1) DEFAULT 0,
            fldCity varchar(30) DEFAULT NULL
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
