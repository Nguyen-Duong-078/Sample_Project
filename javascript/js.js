// // Add active class to the current button (highlight it)
// var header = document.getElementById("myDIV");
// var btns = header.getElementsByClassName("btn");
// for (var i = 0; i < btns.length; i++) {
//     btns[i].addEventListener("click", function() {
//         var current = document.getElementsByClassName("active");
//         current[0].className = current[0].className.replace(" active", "");
//         this.className += " active";
//     });
// }

const power = location.href;
const menuItem = document.querySelectorAll('a');
const menuLength = menuItem.length
for (let i = 0; i < menuItem.length; i++) {
    if (menuItem[i].href === power) {
        menuItem[i].className = 'active'; // add
    } else {
        menuItem[i].className = ''; // xóa
    }
}