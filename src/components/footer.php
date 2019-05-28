<footer class="color-footer row">
    <p class="col-12">Jarne Elst</p>
    <p class="col-12">
        <a href="mailto:jarne.elst@hotmail.com"> jarne.elst@hotmail.com</a>
    </p>
    <a class="facebook" href="https://www.facebook.com/jarne.elst">
        <i class="fab fa-facebook-square fa-2x"></i></a>
    <a class="linkedin" href="https://www.linkedin.com/in/elstjarne/">
        <i class="fab fa-linkedin fa-2x"></i>
    </a>
</footer>
</div>
</body>

<!--Dit script genomen om de scroll te laten werken, het script in comment is het aanbevolen script voor deze versie bootstrap -->
<script src="https://code.jquery.com/jquery-2.2.3.min.js"></script>
<!--
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
</script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
</script>
<script>
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
    $("html, body").animate({
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
</script>

</html>