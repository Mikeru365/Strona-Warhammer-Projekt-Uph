<?php
session_start();
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <title>Malowanie</title>
    <link rel="stylesheet" href="stylewarhammer.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <link rel="icon" type="image/x-icon" href="Sigmarite_Icon.ico">
</head>

<body>

    <div class="navbar">
        <div class="logo">
         <img src="logo.png" width="200" height="43">
 
         </div>
         <a href="Strona Główna Warhammer.php">Strona Główne</a>
            <a href="Poczatek.php">Początek początków</a>
            <a href="Malowanie.php">Malowanie</a>
            <a href="Frakcje.php">Frakcje</a>
            <a href="Lore.php">Black Library/Lore</a>
            <a href="Wydarzenia.php">Wydarzenia</a>
            <?php if(isset($_SESSION["login"])): ?>
            <a href="myReviews.php">Moje recenzje</a>
            <?php if($_SESSION["rola"] == "admin"): ?>
            <a href="adminPanel.php">Panel Admina</a>
            <?php endif; ?>
            <a href="logout.php">Wyloguj</a>
        <?php else: ?>
            <a href="login.php" class="przyciskLogowania">Zaloguj się</a>
        <?php endif; ?>
    </div>

     <div class="Narzedzia" style="background-image: url(TłoFirmyFarb.jpg);">
        <div class="TytulNarzedzia"><h1>Polecane Marki Farb</h1></div>
        <div class="Bloki">
            <h1>Citadel</h1>
            <img class="ZdjecieBloki" src="FarbyCitadel.png">
            <p>Farba na początku jest nieco grubsza i można jej używać bezpośrednio z garnka. Tak naprawdę nie jest potrzebna żadna paleta (ważne dla dzieci).
                Farby, których używam z innych serii wymagają częstego wstrząśnięcia. Nawet samo potrząsanie tym frajerem przez 3 minuty nie
                 wystarczy. Jednak nie polecałbym ich osobie która właśnie kupiła swój peirwszy zestwa i nie jest pewna czy zostanie przy hobby bo mimi wszystko do 
                 najtańszych nie należą.</p>
            <a href="https://citadelcolour.com/"><p>Oficjalny sklep z Farbami</p></a>
        </div>

        <div class="Bloki">
            <h1>Vallejo</h1>
            <img  class="ZdjecieBloki" src="FarbyVallejo.png">
            <p>Niewiele tansze od citadeli jednak tak samo dobre. Bardzo dobrze przycepiają się do plastiku przez co nie musimy nakładać po kilka warstw tak jak w
             przypadku tańszych farb.Nie mają tak wygodnych dozownikoó jak citadel, przez co przyda nam sie mokra paleta (którą dla oszczedności polecam zrobic sam).</p>
            <a href="https://acrylicosvallejo.com/"><p>Oficjalny sklep z Farbami.</p></a>
        </div>

        <div class="Bloki">
            <h1>Revell</h1>
            <img class="ZdjecieBloki" src="FarbyRevell.png">
            <p>Farby w przystępnej cenie.duzym ich minusem a specyficzne opakowania którę do otwarcia wymagają wyłamania wieczka co powoduje trudniejsze przechowywanie.
            jednak polecałbym je na początek ponieważ sa łatwe w nakłdaniu i dzieki cenie bedzie mozna wypróbować wiele konbinacji kolorów i przy okazji nie bankrutując
             przy ich zakupie.Trzeba mieć też na uwadze to że farby przystosowane są pod modele czołgów,samolotów. </p>
                <a href="https://revell.com.pl/akcesoria-modelarskie/farby/"><p>Oficjalny sklep z Farbami</p></a>
            </div>

        <div class="Bloki">
            <h1>Hataka</h1>
            <img class="ZdjecieBloki" src="FarbyHataka.png">
            <p>Farby jeśli chodzi o cene poobne do farb firmy revell.Dużą roznicą są jednak opakowania zamiast metalowych trudnych do otwoarcia wieczek mamy plasikowe 
                butelacki otworane na korek dzieki temu nie wysychają szybko.Minusem Farb jest niestety bardzo szybkie trac pigment.Dużym plusem firmy jest wiele 
                róznorodnych zestawów farb.</p>
            <a href="https://www.hataka-hobby.com/"><p>Oficjalny sklep z Farbami</p></a>
        </div>
     </div>

     <div class="Narzedzia" style="background-image: url(TłoFarbyInne.jpg);">
        <div class="TytulNarzedzia"><h1>Przydatne Chemikalia</h1></div>
        <div class="Bloki">
            <h1>Podkład</h1>
            <img class="ZdjecieBloki" src="Podklad.png">
            <p>Bardzo przydatny rodzaj farby dzięki której nakładanie farb na figurki jest dużo łatwiejsze, Pomimo ze podkłady dostępno są w butelkach polecałbym zakup
                 ich w formie sprayu, jest to spowodowane tym że jest do doatkowa wersja farby które jeśli jes ich za dużo bądz osoba nie jesteś wprawiny w nakładaniu 
                 odpowiedniej jej ilość (co jest często spotykane u osób początkujących).</p>
            <a href="https://taleofpainters.com/2022/10/stahlys-best-primers-spray-paints-for-painting-warhammer-miniatures/"><p>Artykuł o Podkładach</p></a>
        </div>

        <div class="Bloki">
            <h1>Lakiery bezbarwne</h1>
            <img  class="ZdjecieBloki" src="Lakier.png">
            <p>Główny celem lakieru jest ochrona już pomalowanej figurki przed zarysowaniami i zschodzeniem farb spowodowany dotykiem podczas grania. 
                Lakiery mozna dakże wykorzystać do podkreslenia innej tekstury części figurki np:oka który bedzie bardziej szkliste od roszty figurki dzieki uzyciu
                 na oku błyszczącego lakieru</p>
            <a href="https://thearmypainter.com/blogs/explore/how-to-use-a-varnish"><p>Artykuł o lakierach</p></a>
        </div>

        <div class="Bloki">
            <h1>Efekty na figurki</h1>
            <img class="ZdjecieBloki" src="Efekty.png">
            <p>Efekty są bardzo przydatne kiedy chcemy uzyskać bardziej realistyczny efekt terenu poprze sztuczny śnieg czy wodę, albo uzyskanie efektu rdzy na zbroi,
                 obcji jest cała masa. Dla mnie najleszpą markę którę zajmuje sie efektami jest AK-interactive który ma szeroki rodzaj wybór efektów 
                 (farby też nie sa najgorsze). </p>
            <a href="https://ak-interactive.com/"><p>Strona AK interactive</p></a>
            </div>

        <div class="Bloki">
            <h1>Masy do rzeźbienia</h1>
            <img class="ZdjecieBloki" src="Masy.png">
            <p>Może nie pomogą w malowaniu ale pomogą w tworzeniu figurek unikatowych które na tle innych będą wyróznicz sie unikatowością i własnym stylem. Mas modelarskich jest cała masa ale w przypadku figurek najczęsciej używaną jest tzw: Green Stuff od Green Stuff World. </p>
            <a href="https://www.greenstuffworld.com/en/55-green-stuff#"><p>Strina GSWorld</p></a>
        </div>

</body>