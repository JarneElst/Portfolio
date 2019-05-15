<?php 
$title = projecten;

include("./php/head.php");
include("./php/header.php");

?>


<!DOCTYPE html>
<html lang="nl">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Portfolio</title>

    <!-- Stylesheets -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.0/normalize.min.css" />
    <!-- icons -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
        integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous" />
    <!-- Bootstrap-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous" />
    <link rel="stylesheet" href="./styles/main.css" />

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Lato|Martel" rel="stylesheet" />
</head>

<body>
    <div class="container">
        <header class="row">
            <nav class="navbar fixed-top navbar-expand-md navbar-light bg-light color" id="navbar">
                <a class="navbar-brand" href="./index.html">Jarne Elst</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
                    aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav">
                        <li class="nav-item active">
                            <a class="nav-link" href="./index.php">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <!-- ID aanpassen aan section onder hero image!-->
                            <a class="nav-link" href="./index.php#ik">Over mij</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="./projecten.php">Projecten</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="./contact.php">Contact</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>

        <main>
            <section class="row">
                <div class="card wide">
                    <img src="./images/Proj-Chenesse.png" class="card-img-wide" alt="Website Chenesse" />
                    <div class="overlay">
                        <h2 class="card-title">CHENESSE</h2>
                        <a href="./Projecten/chenesse.html" class="card-btn">Lees meer!</a>
                    </div>
                </div>

                <div class="card">
                    <img src="./images/Proj-Fosdem.png" class="card-img" alt="Website Chenesse" />
                    <div class="overlay">
                        <h2 class="card-title">FOSDEM</h2>
                        <a href="./Projecten/fosdem.html" class="card-btn">Lees meer!</a>
                    </div>
                </div>

                <div class="card">
                    <img src="./images/Proj-Stage.png" class="card-img" alt="Website Chenesse" />
                    <div class="overlay">
                        <h2 class="card-title">FOSDEM</h2>
                        <a href="./Projecten/fosdem.html" class="card-btn">Lees meer!</a>
                    </div>
                </div>

                <div class="card wide">
                    <img src="./images/Proj-Komiktoneel.png" class="card-img-wide" alt="Website Chenesse" />
                    <div class="overlay">
                        <h2 class="card-title">CHENESSE</h2>
                        <a href="./Projecten/chenesse.html" class="card-btn">Lees meer!</a>
                    </div>
                </div>

                <div class="card wide">
                    <img src="./images/Proj-Grav.png" class="card-img-wide" alt="Website Chenesse" />
                    <div class="overlay">
                        <h2 class="card-title">CHENESSE</h2>
                        <a href="./Projecten/chenesse.html" class="card-btn">Lees meer!</a>
                    </div>
                </div>

                <div class="card">
                    <img src="./images/Proj-Logo Renowin.png" class="card-img" alt="Website Chenesse" />
                    <div class="overlay">
                        <h2 class="card-title">FOSDEM</h2>
                        <a href="./Projecten/fosdem.html" class="card-btn">Lees meer!</a>
                    </div>
                </div>

                <div class="card">
                    <img src="./images/Proj-Illustrator.jpg" class="card-img" alt="Website Chenesse" />
                    <div class="overlay">
                        <h2 class="card-title">FOSDEM</h2>
                        <a href="./Projecten/fosdem.html" class="card-btn">Lees meer!</a>
                    </div>
                </div>

                <div class="card wide">
                    <img src="./images/Proj-Olijftak.jpg" class="card-img-wide" alt="Website Chenesse" />
                    <div class="overlay">
                        <h2 class="card-title">CHENESSE</h2>
                        <a href="./Projecten/chenesse.html" class="card-btn">Lees meer!</a>
                    </div>
                </div>

                <div class="card wide">
                    <img src="./images/Proj-TedTalk.png" class="card-img-wide" alt="Website Chenesse" />
                    <div class="overlay">
                        <h2 class="card-title">CHENESSE</h2>
                        <a href="./Projecten/chenesse.html" class="card-btn">Lees meer!</a>
                    </div>
                </div>

                <div class="card">
                    <img src="./images/Proj-OneDrive.png" class="card-img" alt="Website Chenesse" />
                    <div class="overlay">
                        <h2 class="card-title">FOSDEM</h2>
                        <a href="./Projecten/fosdem.html" class="card-btn">Lees meer!</a>
                    </div>
                </div>
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
</body>

</html>