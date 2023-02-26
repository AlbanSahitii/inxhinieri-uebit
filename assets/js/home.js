function openNav() {
    document.getElementById("home_navbar_items_phone").style.width = "100%";
}
function closeNav() {
    document.getElementById("home_navbar_items_phone").style.width = "0";
}

var i = 0;
var imgArray = [ "assets/image/onepiece.jpg", "assets/image/demonslayer.jpg", "assets/image/chainsawman.jpg", "assets/image/attackontitan.webp", "assets/image/deathnote.webp"
];
function ndrroImg() { document.getElementById('home_up_slideshow').src = imgArray[i];
    if (i < imgArray.length - 1) { i++;
    } else {
        i = 0;
    }
    setTimeout("ndrroImg()", 2600)
}
document.body.addEventListener('load', ndrroImg());