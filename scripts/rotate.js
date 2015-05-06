//rotate.js
//Nathan Stengel and Heath Sias

//store info from JavaScript Date object
var today = new Date();


//store image file prefix
var pre = "images/";
switch (today.getDay())
{
    case 6:
        prefix += "weekend";
        break;
    default:
        prefix += "week";
}

//sequence images using a for loop. Store in imageArray
var imageArray = new Array(6);
for (i=0; i<imageArray.length; i++)
    imageArray[i] = prefix + (i+1) + ".jpg";

//Rotate the images in the array
var imageCounter = 0;
function rotate()
{
    var imageObject = document.getElementById('placeholder');
    imageObject.src = imageArray[imageCounter];
    ++imageCounter;
    if (imageCounter == 6) imageCounter = 0;
}

function startRotation()
{
    document.getElementById('placeholder').src=imageArray[5];
    setInterval('rotate()', 2000);
}
