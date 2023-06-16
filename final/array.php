

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


        <h1>Lucknow, India</h1>

            <section>
                <h2>Home</h2>
                <p>Lucknow, Uttar Pradesh, India is where almost all of my extended family lives. 
                    It holds a very special place in my heart, as it represents family to me.
                    Being in America, it can be tough to have little to no connection with the people back home, especially when things are so different in India versus here.
                    Lucknow, and the state UP, represent a place where all my family gathers and comes together to celebrate and argue. 
                    I've spent much of my time between there and New Delhi, 
                    and it has always been a refresher, to be able to sink back into my culture, and be myself fully for a matter of time. 
                    The food is immaculate, from street vendors in the downtown areas, to the high end restaurants boasting some of the top chefs from around India. 
                    Considering there are a billion people in India, that is very much an accomplisment on it's own.  
                  </p>
            </section>
            
            <section>
                <h2>Things to Do</h2>
                <p>The past few times that I have visited Lucknow, each time has had its own peak activity that was done. 
                    This time around, my mom took me to an older part of the city, when her family used to live there.
                    An area called Hazratganj, fully populated with 1800's construction, the area had its own feel of history, of having seen things that I would only read about.
                    She showed me the way that she took to her private school, her favorite pastry shop, and shopped for a couple days around the area. 
                    Mind you, we went this past May, where the temperatures were upwards of 115 degrees. 
                    It was incredibly hot, and would not recommend it for people who don't do well in heat, or people in general. 
                    The funny thing is that as soon as people learn that we came from America, 
                    I would be forced to speak English, because over there, I'm the one with the accent. 
                    A couple other places to note are listed below :
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
