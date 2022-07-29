function theme(){
    var checkBox = document.getElementById("toggle");
    var body = document.getElementById("body");
    var text = document.getElementById("text");
    if(checkBox.checked === true){
        body.classList.add('dark');
        body.classList.remove('light');

        text.classList.add('dark');
        text.classList.remove('light, pudar');
    }else{
        body.classList.add('light');
        body.classList.remove('dark');

        text.classList.add('light');
        text.classList.remove('dark');
    }
}




const sections = document.querySelectorAll("section[id]");

window.addEventListener("scroll", navHighlighter);

function navHighlighter() {

let scrollY = window.pageYOffset;

sections.forEach(current => {
const sectionHeight = current.offsetHeight;
const sectionTop = current.offsetTop - 50;
sectionId = current.getAttribute("id");

if (
  scrollY > sectionTop &&
  scrollY <= sectionTop + sectionHeight
){
  document.querySelector(".navigation a[href*=" + sectionId + "]").classList.add("active");
} else {
  document.querySelector(".navigation a[href*=" + sectionId + "]").classList.remove("active");
}
});
}
