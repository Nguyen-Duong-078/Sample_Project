var album = [];
for (var i = 0; i < 6; i++) {
    album[i] = new Image();
    album[i].src = "images/anh" + i + ".png"
}
var index = 0;

function slideShow() {
    index++;
    if (index >= 6) {
        index = 0;
    }
    document.getElementById("anh").src = album[index].src;
}
setInterval(slideShow, 2500);

function next() {
    index++;
    if (index >= 5) {
        index = 0;
    }
    document.getElementById("anh").src = album[index].src;

}
document.getElementById("next").onclick = next;

function pre() {
    index--;
    if (index < 0) {
        index = 5;
    }
    document.getElementById("anh").src = album[index].src;
}
document.getElementById("pre").onclick = pre;