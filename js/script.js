var frameIndex = 0;
showFrames(frameIndex);

function currentFrame(n) {
    showFrames(frameIndex = n);
}

function showFrames(n) {
    var i;
    var frames = document.getElementsByClassName("frame");
    var dots = document.getElementsByClassName("buttom-article");

    for (i = 0; i < frames.length; i++) {
        frames[i].style.display = "none";
    }
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    frames[frameIndex].style.display = "block";
    dots[frameIndex].className += " active";
}