

<?php
    include 'top.php';
?>

        <main>


            <section>
                <h2>Background</h2>
                <p>
                Hello all. My name is Tushar Asthana, and I was born November 21, 2001 in Gorakhpur, India. 
                The first six years of my life were spent in Singapore, in a neighborhood called Chuan Park. At the age of 6, my family moved to Atlanta, Georgia, in the USA.
                The following year and half were spent learning what it meant to live in America, going to school and making new friends in the Dunwoody Complex in Jefferson County.  
                At the age of 7, my dad found a new job in a small town called South Burlington, Vermont. Vermont was not what we were used to at the time, but in the past 14 years, 
                my family and I have learned to call it home!   
                </p>
            </section>
            
            <section>
                <h2>Academics</h2>
                <p>
                Throughout my academic journey at the University of Vermont, I have developed a solid foundation in computer science principles, programming languages, and software development methodologies. 
                My coursework has equipped me with a diverse skill set, including proficiency in languages such as Java, C++, and Python, as well as experience with web development and database management. 
                Additionally, I have acquired knowledge in areas such as algorithms, data structures, and artificial intelligence, which have sharpened my problem-solving abilitiess. 
                </p>
            </section>


            <section>
                <h2>Intrapersonal Skills</h2>
                <p>
                My communication and teamwork skills have been honed through various group projects and extracurricular activities. 
                I thrive in collaborative environments and enjoy working with cross-functional teams to tackle complex challenges. 
                I have been on many sports teams between tennis and basketball, as a player and leader both, and I have no problem playing either part. 
                </p>
            </section>

            <section>
                <table>
                    <caption>Ranking My Favorites</caption>

                    <tr>
                        <th>Rank</th>
                        <th>Name</th>
                    </tr>
                    <?php
                    $sql = 'SELECT fldRank, fldName FROM tblBestTravels';

                    $statement = $pdo->prepare($sql);
                    $statement->execute() ;

                    $records = $statement->fetchAll();

                    foreach ($records as $record) {
                    print '<tr>' ;
                    print '<td>' . $record['fldRank'] . '</td>'; 
                    print '<td>' . $record['fldName'] . '</td>'; 
                    print '<tr>' . PHP_EOL; 
                    }
                    ?>
                </table>

            </section>


        </main>

    <?php
        include 'footer.php';
    ?>
</body>
</html>
