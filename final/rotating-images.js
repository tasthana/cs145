

//fill an array of images
var rotImages = new Array("images/skydive.jpg","images/sebbie.jpg","images/lanky.jpeg");
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

//window.onload = rotate; // this causes the rotate function to start
window.addEventListener('load', rotate(), false);



//fill an array of images
var image = new Array("images/food1.jpeg","images/food2.jpeg","images/food3.jpeg");
var thisPic2 = 0;


// this functions delays for three seconds and then changes the picture being
// displayed
function rotate2() {
    thisPic2++;
    if (thisPic2 == image.length) {  //reach the end and start at the first one
        thisPic2 = 0;
    }
    document.getElementById("rotatePictures2").src = image[thisPic];

    setTimeout("rotate2()", 3 * 1000);  // 3 seconds
}

//window.onload = rotate; // this causes the rotate function to start
window.addEventListener('load', rotate2(), false);



//fill an array of images
var images = new Array("images/family.jpeg","images/sax.jpeg","images/sath.jpeg");
var thisPic3 = 0;


// this functions delays for three seconds and then changes the picture being
// displayed
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