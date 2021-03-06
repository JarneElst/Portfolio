<?php $title = contact; 

include("./components/head.php");
include("./components/header.php");


    $name = $_POST['naam'];
    $from= $_POST['email'];
    $message= $_POST['onderwerp'];

    $formcontent = "From: $name \n Message: $message";
    $receiver = "jarne.elst@hotmail.com";
    $subject = $_POST['onderwerp'];
    $mailheader = "From: $from \r\n";
    mail($receiver, $subject, $formcontent, $mailheader) or die ("Error!");

if ($_POST['human'] == '4') {
    if (mail ($receiver, $subject, $message, $from)) { 
        echo "Uw bericht werd verzonden!";
    }
    else {
        echo "Er is iets mis gegaan, kijk uw gegevens na en probeer nog een keer."; 
    }
    }
    else if ($_POST['human'] != '4') {
        echo "De anti spam vraag is foutief ingevuld. Vul het juiste antwoord in en probeer opnieuw."; 
    }
?>

<main class="contact-page">
    <section class="section">
        <article class="form-row">
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
        </article>
    </section>
    <section class="section">
        <h3>Get In Touch</h3>

        <span style="text-align: center">
            <p>
                Of het nu gaat over een project, een vraag, een interesse of een
                simpele 'hallo'. Aarzel niet en stuur een berichtje!
            </p>
        </span>
        <form action="./mail.php" method="POST" class="form-center" id="contact-form" name="contactpage">
            <div class="form-row">
                <div class="form-group col-md-6">
                    <input type="text" name="naam" class="form-control" placeholder="Typ hier je naam*" required />
                </div>
                <div class="form-group col-md-6">
                    <input type="email" name="email" class="form-control" id="inputEmail" placeholder="Email*"
                        required />
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <input type="text" name="onderwerp" class="form-control" id="Onderwerp"
                        placeholder="Geef een onderwerp op*" required />
                </div>
                <div class="form-group col-md-6">
                    <input type="tel" name="tel" class="form-control" id="Onderwerp" placeholder="Telefoonnummer"
                        minlength="8" maxlength="15" />
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-12">
                    <textarea class="form-control" name="bericht" id="validationTextarea" placeholder="Typ uw bericht*"
                        rows="2" required></textarea>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-4">
                    <label for="human" class="vraag"> Hoeveel is 2+2?</label>
                    <input type="text" name="human" class="form-control" placeholder="2+2=?*" required />
                </div>
            </div>

            <input type="submit" value="verzenden" class="btn btn-download" />
        </form>
    </section>
</main>


<?php 
        include("./components/footer.php");
        ?>