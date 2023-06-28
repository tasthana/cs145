



$(document).ready(function(){

var images = Array("http://placekitten.com/500/200",
               "http://placekitten.com/499/200",
               "http://placekitten.com/501/200",
               "http://placekitten.com/500/199");
var currimg = 0;


function loadimg(){

   $('#background').animate({ opacity: 1 }, 500,function(){

        //finished animating, minifade out and fade new back in           
        $('#background').animate({ opacity: 0.7 }, 100,function(){

            currimg++;

            if(currimg > images.length-1){

                currimg=0;

            }

            var newimage = images[currimg];

            //swap out bg src                
            $('#background').css("background-image", "url("+newimage+")"); 

            //animate fully back in
            $('#background').animate({ opacity: 1 }, 400,function(){

                //set timer for next
                setTimeout(loadimg,5000);

            });

        });

    });

  }
  setTimeout(loadimg,5000);

});