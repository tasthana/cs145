<?php
    include 'top.php';
?>

        <main>
            <section>
                <h2>Favorite City I've Been To</h2>
                <p>Lisbon, Portugal is by far the best city that I have personally experienced. 
                <input type="text" id="txtUrl" style="width: 300px" />
                <input type="button" id="btnPlay" value="Play" />
                    <hr />
                    <iframe id="video" width="420" height="315" frameborder="0" style="display: none"
                        allowfullscreen></iframe>
                    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
                    <script type="text/javascript">
                        $("body").on("click", "#btnPlay", function () {
                            var url = $("#txtUrl").val();
                            url = url.split('v=')[1];
                            $("#video")[0].src = "https://www.youtube.com/embed/" + url;
                            $("#video").show();
                        });
</script>
                </p>
            </section>
            
            <section>
                <h2>Night Life</h2>
                <p>Being a city in Europe, the drinking age was 18, and so all the other students I was with, decided to go out the very first night.
                    I went along with them! This program was from early July to late August, so it was peak tourist season, and there were many people our age out and about.
                    The main area where most of the night life happens is Bairro Alto, a collection of streets that holds the best food and bars in the city. 
                    For those interested in something a little nicer than dive bars, there are multiple streets that have high class restaurants with reservations pending months in advance.
                    The art museums were unlike anything I've seen anywhere else, and there was food within walking distance literally everywhere. 
                </p>
            </section>

            <section>
                <h2>Food Culture</h2>
                <p>Lisbon is located on the coast of Portugal, and along with that comes a focus on seafood. 
                    I was never a fan, but if you are, it is a great place to go!
                    There is a massive wine culture along with food, with Douro Valley located less than two hours away from Lisbon. 
                    The local port was excellent, and it was really nice to be able to appreciate how wine is supposed to be drunk/tasted! 
                </p>
            </section>

            <figure class="go-right">
                <img alt="Tushar Asthana circa- Summer 2022" src="images/skydive.jpg">
            <figcaption>Skydiving in Algarve, Portugal</figcaption>
            </figure>

            <figure class="go-left">
                <img alt="Favorite Night Out" src="images/group.jpeg">
            <figcaption>Favorite Night Out</figcaption>
            </figure>

            <figure class="center">
                <img alt="Beach Day" src="images/beach3.jpeg">
            <figcaption>Beach Day!</figcaption>
            </figure>
            
            <figure class="go-right">
                <img alt="Last Night" src="images/beach.jpg">
            <figcaption>Last Night in Cascias</figcaption>
            </figure>

            <figure class="go-left">
                <img alt="Castle" src="images/group2.jpeg">
            <figcaption>Favorite Attraction</figcaption>
            </figure>

            <figure class="center">
                <img alt="Skydiving" src="images/skydivedos.jpg">
            <figcaption>Suited Up!</figcaption>
            </figure>

            <figure class="go-right">
                <img alt="Surfing" src="images/beach2.jpeg">
            <figcaption>Surf Club</figcaption>
            </figure>

            <figure class="go-left">
                <img alt="favpic" src="images/favpic.jpeg">
            <figcaption>Favorite Pic</figcaption>
            </figure>

            <figure class="center">
                <img alt="Daily Fit Chk" src="images/fitcheck2.jpeg">
            <figcaption>Daily Elevator Fit Check</figcaption>
            </figure>

            <figure class="go-right">
                <img alt="Food" src="images/food1.jpeg">
            <figcaption>AND MORE FOOD!</figcaption>
            </figure>

            <figure class="go-left">
                <img alt="More food" src="images/food2.jpeg">
            <figcaption>Food!</figcaption>
            </figure>

            <figure class="center">
                <img alt="Even more food" src="images/food3.jpeg">
            <figcaption>More Food!</figcaption>
            </figure>

        </main>

    <?php
        include 'footer.php';
    ?>

</html>
