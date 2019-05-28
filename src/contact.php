<?php $title = contact; 

include("./components/head.php");
include("./components/header.php");

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

<?php 
        include("./components/footer.php");
        ?>