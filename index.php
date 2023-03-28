<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Dynamic Website</title>
    <link rel="stylesheet" href="css/style.css"/>
</head>
<body>
    <header class="main">
        <nav>
            <a href="#" class="logo">
                <img src="images/logo.png"/>
            </a>

            <ul class="menu">
                <li><a href="#" class="active">Start</a></li>
                <li><a href="#one">Samochody</a></li>
                <li><a href="#two">O Nas</a></li>
                <li><a href="#three">Kontakt</a></li>
            </ul>
        </nav>
        <div class="main-heading">
            <h1>Znajdź ulubioną markę w naszym komisie samochodowym</h1> 
            <p>Wybierz samochód według swoich preferencji i skontaktuj się!</p>
            <a class="main-btn" href="#three">Kontakt</a>
        </div>
    </header>

    <section class="features" id="one">
        <div class="feature-container">

            <div class="feature-box">
                <div class="f-img">
                    <img src="images/fiat.jpg"/>
                </div>
                <div class="f-text">
                    <h4>Fiat 126p</h4>
                    <p>6 900zł</p>
                    <a href="#three" class="main-btn">Kup</a>
                </div>
            </div>

            <div class="feature-box">
                <div class="f-img">
                    <img src="images/bmw.jpg"/>
                </div>
                <div class="f-text">
                    <h4>BMW E36</h4>
                    <p>10 700zł</p>
                    <a href="#three" class="main-btn">Kup</a>
                </div>
            </div>

            <div class="feature-box">
                <div class="f-img">
                    <img src="images/opel.jpg"/>
                </div>
                <div class="f-text">
                    <h4>Opel Insignia</h4>
                    <p>23 900zł</p>
                    <a href="#three" class="main-btn">Kup</a>
                </div>
            </div>
        </div>
    </section>

    <section class="about" id="two">
        <div class="about-img">
            <img src="images/about.png">
        </div>
        <div class="about-text">
            <h2>Kilka słów o naszej firmie</h2>
            <p>Nasza firma to komis samochodowy, specjalizujący się w sprzedaży używanych pojazdów. Nasza firma oferuje szeroki wybór samochodów różnych marek i modeli, co pozwala klientom znaleźć odpowiedni pojazd dla siebie. Dodatkowo, firma oferuje również usługi serwisowe oraz doradztwo przy zakupie samochodu. Dzięki temu klienci mają pewność, że ich zakup będzie odpowiednio przemyślany i dopasowany do ich potrzeb. Z pewnością profesjonalne podejście do klientów i wysoka jakość usług to cechy, które wyróżniają naszą firmę na rynku.</p>
            <hr>
        </div>
    </section>

    <footer class="contact">
        <section id="three">
        <div class="contact-heading">
            <h1>Kontakt</h1>
            <p>Skontaktuj się z nami w celu zakupu samochodu.</p>
        </div>
        <form action="userinformation.php" method="post">
            <input type="text" name="user" placeholder="Twoję Imię i Nazwisko"/>
            <input type="email" name="email" placeholder="Twój E-mail"/>
            <textarea name="message" placeholder="Wpisz Treść Swojej Wiadomości.........."></textarea>
            <button class="main-btn contact-btn" type="submit" >Kontynuuj</button>
        </form>
        <div class="contact-heading">
            <p> &copy 2023 Strona zrobiona w celach edukacyjnych </p>
            <p> Wykonał: Kacper Leśny</p> 
        </div>
        </section>
    </footer>
</body>
</html>