<?php 
include('./components/head.php');
include('./components/header.php');


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

<main class="main mail">
    <section class="section">
        <h3> Bedankt voor uw mail </h3>
        <p> We bekijken uw mail zo snel mogelijk en voorzien een antwoord binnen de 2 werkdagen </p>
        <button class="btn-download">
            <a href="./contact.php"> Terug naar de website </a>
        </button>

    </section>
</main>


<?php include('./components/footer.php') ?>