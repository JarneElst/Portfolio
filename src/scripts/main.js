//add sticky navbar on scroll
window.onscroll = function() {
  myFunction();
};

var navbar = document.getElementById("navbar");
var sticky = navbar.offsetTop;

function myFunction() {
  if (window.pageYOffset > sticky) {
    navbar.classList.add("sticky");
  } else {
    navbar.classList.remove("sticky");
  }
}

//smooth scroll homepage
$(".home-link").click(function() {
  var offset = $($.attr(this, "href")).offset().top - 45;
  $("html, body").animate(
    {
      scrollTop: offset
    },
    1500
  );
  return false;
});

//contactpage add lines textarea
function expandTextarea(id) {
  document.getElementById("validationTextarea").addEventListener(
    "keyup",
    function() {
      this.style.overflow = "hidden";
      this.style.height = 0;
      this.style.height = this.scrollHeight + "px";
    },
    false
  );
}
expandTextarea("txtarea");

//reload page = reset fields
$(document).ready(function() {
  //This condition will check if form with id 'contact-form' is exist then only form reset code will execute.
  if ($("#contact-form").length > 0) {
    $("#contact-form")[0].reset();
  }
});
