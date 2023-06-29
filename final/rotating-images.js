

//fill an array of images
var rotImages = new Array("images/skydivedos.jpg","images/lanky.jpeg","images/sath.jpeg");
var thisPic = 0;

function rotate() {
    thisPic++;
    if (thisPic == rotImages.length) {  
        thisPic = 0;
    }
    document.getElementById("rotatePictures").src = rotImages[thisPic];

    setTimeout("rotate()", 3 * 1000);  // 3 seconds
}

//window.onload = rotate; // this causes the rotate function to start
window.addEventListener('load', rotate(), false);



//fill an array of images
var image = new Array("images/food1.jpeg","images/food2.jpeg","images/food3.jpeg");
var thisPic2 = 0;

function rotate2() {
    thisPic2++;
    if (thisPic2 == image.length) { 
        thisPic2 = 0;
    }
    document.getElementById("rotatePictures2").src = image[thisPic];

    setTimeout("rotate2()", 3 * 1000);  // 3 seconds
}

//window.onload = rotate; // this causes the rotate function to start
window.addEventListener('load', rotate2(), false);



//fill an array of images
var images = new Array("images/family.jpeg","images/sax.jpeg","images/fam.jpeg");
var thisPic3 = 0;

function rotate3() {
    thisPic3++;
    if (thisPic3 == images.length) {  //reach the end and start at the first one
        thisPic3 = 0;
    }
    document.getElementById("rotatePictures3").src = images[thisPic];

    setTimeout("rotate3()", 3 * 1000);  // 3 seconds
}

//window.onload = rotate; // this causes the rotate function to start
window.addEventListener('load', rotate3(), false);