<?php $title = contact; 

include("./php/head.php");
include("./php/header.php");

?>
<main>
    <section class="section">
        <div class="form-row">
            <div class="form-group col-md-4 txt-align">
                <i class="fas fa-street-view fa-7x"> </i>
                <p class="icon-txt">
                    Gooreind, Antwerpen
                </p>
            </div>

            <div class="form-group col-md-4 txt-align">
                <i class="far fa-envelope fa-7x"></i>
                <p class="icon-txt">
                    <a href="mailto:jarne.elst@hotmail.com"><span
                            style="color:#0d0d0d">jarne.elst@hotmail.com</span></a>
                </p>
            </div>

            <div class="form-group col-md-4 txt-align">
                <i class="fab fa-linkedin fa-7x"> </i>
                <p class="icon-txt">
                    <a href="https://www.linkedin.com/elstjarne"><span
                            style="color:#0d0d0d">linkedin/elstjarne</span></a>
                </p>
            </div>
        </div>
    </section>
    <section class="section">
        <h3>Get In Touch</h3>

        <span style="text-align: center">
            <p>
                Of het nu gaat over een project, een vraag, een interesse of een
                simpele 'hallo'. Aarzel niet en stuur een berichtje!
            </p>
        </span>
        <form action="./php/mail.php" method="POST" class="form-center" id="contact-form">
            <div class="form-row">
                <div class="form-group col-6">
                    <input type="text" name="naam" class="form-control" placeholder="Typ hier je naam*" />
                </div>
                <div class="form-group col-6">
                    <input type="email" name="email" class="form-control" id="inputEmail4" placeholder="Email*" />
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <input type="text" name="onderwerp" class="form-control" id="Onderwerp"
                        placeholder="Geef een onderwerp op*" />
                </div>
                <div class="form-group col-md-6">
                    <input type="text" name="tel" class="form-control" id="Onderwerp" placeholder="Telefoonnummer" />
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-12">
                    <textarea class="form-control" name="bericht" id="validationTextarea" placeholder="Typ uw bericht*"
                        rows="2"></textarea>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-4">
                    <input type="text" name="human" class="form-control" placeholder="2+2=?*" />
                </div>
            </div>

            <input type="submit" value="verzenden" class="btn btn-primary" />
        </form>
    </section>
</main>

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
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
</script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
</script>
<script>
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

$(document).ready(function() {
    //This condition will check if form with id 'contact-form' is exist then only form reset code will execute.
    if ($("#contact-form").length > 0) {
        $("#contact-form")[0].reset();
    }
});
</script>
</body>

</html>