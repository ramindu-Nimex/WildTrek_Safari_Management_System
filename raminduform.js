const header = document.querySelector("header");
window.addEventListener("scroll", function() {
    header.classList.toggle ("sticky", window.scrollY > 0);
}
);

function enableButton() {
   if(document.getElementById("checkBox").checked) {
       document.getElementById("submitBtn").disabled=false;
   }
   else {
       document.getElementById("submitBtn").disabled=true;
   }
}