

<?php
include 'top.php';

$frenchOpenWinners = array(
    array(1, 'Hazratganj'),
    array(2, 'Mishra Park'),
    array(3, 'Chhota Lmambara'),
    array(4, 'Aminabad')  
);


?>

        <main>


        <h1>Job Experience</h1>

            <section>
                <h2>IXperience Business Developer</h2>
                <h4> IXperience, January 2023 - April 2023</h4>
                <p>
                Ixperience is a company based out of South Africa that hosts summer programs in Cape Town, SA and Lisbon, Portugal. I attended in the summer of '22.
                Selected as 1 of 10 in a group of 300+ students from the past summer program to represent IXperience's business development projects on the University of Vermont campus.
                Over 10 signups and 2000+ students reached for the ’23 summer utilizing Google Suite, posters, cards, and in-person presentations to spread the word for IXperience’s ’23 summer programs. 
                15+ clubs reached with the 3 pending partnerships with IX. Highlights my independent drive. 

                </p>
            </section>
            
            <section>
                <h2>Software Engineering Intern</h2>
                <h4>Heden Coworking, June 2022 - August 2022</h4>
                <p>
                This job was a full time position in Lisbon, Portugal. I helped develop a unique, custom-built meeting room booking system that integrates across the Heden app and website using Flutter.
                Worked with Heden’s lead developer from conceptualization to rollout. Allowed Heden to increase efficiency for their members
                to book faster, cleaning up their website so it takes < 5 clicks in order to book.
                Assigned numerical id’s to all members of Heden, using Firebase to store back end data for management.
                Hands on expereience with Flutter and Firebase has allowed me to add these skills to my portfolio. 
                I would also like to emphasize that I hit the ground running working in a foreign country and would love to continue to do so.
                </p>
            </section>

            <section>
                <h2>Software Engineer/Data Science Mining Intern </h2>
                <h4> Apex146, March 2021 - June 2021</h4> 
                <p>
                This position was located in Burlington, Vermont as I worked remotely for this company. I helped implement proposed solutions using development experience and integration knowledge on Amazon Web Services.
                I was responsible for development, implementation and maintenance of the organization's NFT-based gaming website. Using Github and Atom for both collaboration and coding. 
                </p>
            </section>

            <section>
            <h2>Best <?php echo count($frenchOpenWinners);?> Spots To Visit </h2>
                <table>
                    <tr>
                        <th>Rank</th>
                        <th>Name</th>
                    </tr>
                    
<?php 
foreach ($frenchOpenWinners as $frenchOpenWinner){
    print '<tr>';
    print '<td>' . $frenchOpenWinner[0] . '</td>';
    print '<td>' . $frenchOpenWinner[1] . '</td>';
    print '<td>' . $frenchOpenWinner[2] . '</td>';
    print '<td>' . $frenchOpenWinner[3] . '</td>';
    print '</tr>' . PHP_EOL;
} 
?>
    </table>
    </section>
        <video controls>
            <source src="https://lh3.googleusercontent.com/6THH-BT_Lw_QC56j_ZuQFJm6nEnlTNNzJIMiAPfQHC3FwRwai3YB8HdStDCpg-sBGUSHP8KrpOR2ghC2dYEx6ZWyg9Yu72AWRct4yfiZ6Ay3nsXkSziW_Rcr8x9LBqbCdYURG25YpA=m18" type="video/mp4">
        </video>

        <figure class="center">
                <img alt="Flying" src="images/plane.jpeg">
            <figcaption>Flying Out!</figcaption>
            </figure>

            <figure class="go-right">
                <img alt="Favorite Night Out" src="images/city.jpeg">
            <figcaption>Favorite Night</figcaption>
            </figure>

            <figure class="go-left">
                <img alt="Beach Day" src="images/fam.jpeg">
            <figcaption>Family!</figcaption>
            </figure>
            
            <figure class="center">
                <img alt="lil cousin" src="images/lilsis.jpg">
            <figcaption>Little Cousin is Grown Up!</figcaption>
            </figure>

            <figure class="go-left">
                <img alt="Mall" src="images/sax.jpeg">
            <figcaption>Malls! Shopping!</figcaption>
            </figure>
    </main>

<?php
    include 'footer.php';
?>
