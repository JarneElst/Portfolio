<?php 
$title = "Jarne Elst";
include("./components/head.php"); 
?>

<body>
    <div class="container">
        <header class="row home-img">
            <nav class="navbar fixed-top navbar-expand-md navbar-light bg-light" id="navbar">
                <a class="navbar-brand" href="./index.php"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
                    aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav">
                        <li class="nav-item active">
                            <a class="nav-link white" href="./index.php">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link white" href="./projecten.php">Projecten</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link white" href="./blog.php">Blogpost</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link white" href="./contact.php">Contact</a>
                        </li>
                    </ul>
                </div>
            </nav>
            <article class="home-txt">
                <h1>Jarne Elst</h1>
                <a href="#ik" class="home-link">
                    <button class="home-btn">
                        <i class="fas fa-angle-double-down fa-lg"></i>
                    </button>
                </a>

            </article>
        </header>
        <main>
            <section class="section row" id="ik">
                <h3 class="col-12">Wie ben ik?</h3>

                <article class="col-md-12 col-lg-6">
                    <p class="me-txt">
                        Ik ben Jarne Elst, 22 jaar oud en.. uh? 22 jaar? En nu pas in een Se-n-Se richting?
                        Klopt.
                    </p>
                    <p class="me-txt">Voor ik gestart ben aan de opleiding Webontwikkeling en
                        Netwerkbeheer, heb ik op Thomas More Antwerpen een
                        bacheloropleiding Toegepaste Psychologie gevolgd. Ik ben in juni
                        2018 afgestudeerd als psychologisch consulent in het school-en
                        pedagogische werkveld. Ondanks het plezier en de voldoening die ik
                        hieruit haalde, voelde ik tijdens de stage dat dit werkveld niet
                        helemaal aansloot bij wat ik zocht. </p>
                    <p class="me-txt">
                        Daarom heb ik ervoor gekozen
                        om mijn tweede passie te volgen. Een passie die in de loop van de
                        jaren alleen maar gegroeid is: informatica. Meer bepaald het
                        ontwikkelen van websites en opzetten van netwerken was iets waar
                        ik meer over wilde leren. Na vier jaar hogeschool wilde
                        ik liefst een praktijkgerichte opleiding volgen die op één jaar tijd de
                        vaardigheden aanreikte die nodig zijn in het werkveld. De
                        opleiding Webontwikkeling & Netwerkbeheer op het
                        Scheppersinstituut in Antwerpen & Deurne sloot hier in mijn ogen perfect bij
                        aan.
                    </p>
                </article>
                <figure class="col-md-12 col-lg-6">
                    <img src="./images/Proclamatie .jpg" alt="Foto van mijn proclamatie" class="img-proclamatie" />
                </figure>
            </section>

            <section class="section row" id="me">
                <h3 class="col-12">Persoonlijk profiel</h3>
                <figure class="col-md-12 col-lg-6">
                    <img src="./images/Personal competences.png" alt="Persoonlijke competenties"
                        class="personal-comp" />
                </figure>
                <article class="col-md-12 col-lg-6">
                    <h4 class="progress-label">HTML</h4>
                    <div class="progress">
                        <div class="progress-bar html" role="progressbar" aria-valuenow="0" aria-valuemin="0"
                            aria-valuemax="100"></div>
                    </div>

                    <h4 class="progress-label">CSS</h4>
                    <div class="progress">
                        <div class="progress-bar css" role="progressbar" aria-valuenow="30" aria-valuemin="0"
                            aria-valuemax="100"></div>
                    </div>

                    <h4 class="progress-label">Bootstrap</h4>
                    <div class="progress">
                        <div class="progress-bar bootstrap" role="progressbar" aria-valuenow="100" aria-valuemin="0"
                            aria-valuemax="100"></div>
                    </div>

                    <h4 class="progress-label">PHP</h4>
                    <div class="progress">
                        <div class="progress-bar php" role="progressbar" aria-valuenow="100" aria-valuemin="0"
                            aria-valuemax="100"></div>
                    </div>

                    <h4 class="progress-label">Grav</h4>
                    <div class="progress">
                        <div class="progress-bar grav" role="progressbar" aria-valuenow="100" aria-valuemin="0"
                            aria-valuemax="100"></div>
                    </div>

                    <h4 class="progress-label">Illustrator</h4>
                    <div class="progress">
                        <div class="progress-bar illustrator" role="progressbar" aria-valuenow="50" aria-valuemin="0"
                            aria-valuemax="100"></div>
                    </div>

                    <h4 class="progress-label">Photoshop</h4>
                    <div class="progress">
                        <div class="progress-bar photoshop" role="progressbar" aria-valuenow="75" aria-valuemin="0"
                            aria-valuemax="100"></div>
                    </div>

                </article>

                <button class="btn-download">
                    <a href="./CV-ElstJarne-2019.pdf" download>
                        Download CV<i class="fas fa-download"></i>
                    </a>
                </button>
            </section>
        </main>

        <?php 
        include("./components/footer.php");
        ?>