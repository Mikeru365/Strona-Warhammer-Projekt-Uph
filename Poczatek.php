<?php
session_start();
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <title>Początek</title>
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
     
  

     <div class="ZestawyStart">

        <div class="ZestawyStartWarrior">
            <h1>Zestawy Startowe Z Figurkami oraz Planszmi do gry wraz z Zasadami</h1>
            <a href="https://www.warhammer.com/en-PL/shop/Age-Of-Sigmar-Warrior-English-2021?queryID=a714f596e868cae206918ba887cca65d"><img  src="ZestawWarrior.png"></a>
            <a href="https://www.warhammer.com/en-PL/shop/Age-Of-Sigmar-Harbinger-English-2021?queryID=ba2d509bb89912ae4a3e6a73990be5c7"><img  src="ZestawHarbinger.png"></a>
            <a href="https://www.warhammer.com/en-PL/shop/Age-Of-Sigmar-Extremis-English-2021?queryID=2b8e18ab46b882a134a9760e5ac26bbc"><img  src="ZestawExtremis.png"></a> 
        </div>

        <div class="ZestawyFarby">
            <h1>Zestawy z Farbami, Pedzlem oraz Cążki</h1>
           <a href="https://vanaheim.pl/pl/zestawy-farb-citadel/34404-aos-stormcast-eternals-vindictors-paint-set.html"><img  src="PaintingSetSigmar.png"></a>
           <a href="https://shopgracz.pl/stormcast-eternals/20727-age-of-sigmar-stormcast-eternals-vindictors-paints-set-5011921191956.html"><img  src="PaintingSetGoblins.png"></a>
           <a href="https://shopgracz.pl/zestawy-farb/38989-age-of-sigmar-paint-tools-set-5011921191901.html"><img  src="PaintigTools.png"></a>
        </div>

    </div>

    <div class="Narzedzia">
       
        <div class="TytulNarzedzia"><h1>Niezbędne Przybory</h1></div>
        <div class="Bloki">
            <h1>Pedzle</h1>
            <img class="ZdjecieBloki" src="Pedzle.png">
            <p>Polecam modele z naturalnym bądź syntetycznym włosiem (w tym silikonowe). Zależnie od potrzeb można się zdecydować na warianty płaskie, okrągłe, a także ścięte.</p>
            <a href="https://www.fauxhammer.com/top-10/top-10-best-brushes-for-painting-miniatures-2019/?utm_content=cmp-true"><p>Przecztaj Artykujł o wyborze pedzli</p></a>
        </div>

        <div class="Bloki">
            <h1>Cązki</h1>
            <img  class="ZdjecieBloki" src="Cazki.png">
            <p>Narzędzia służące do wycinania elementów modeli plastikowych z wyprasek. Jest to jedno z podstawowych narzędzi w warsztacie modelarskim.</p>
        </div>

        <div class="Bloki">
            <h1>Klej</h1>
            <img class="ZdjecieBloki" src="Klej.png">
            <p>Klej jest niezbędny w Warhammerze. Niezależnie od tego, czy składasz swoją nową, błyszczącą plastikową armię, bawisz się podstawami, czy próbujesz skleić ze sobą ten nieznośny, stary, metalowy model – będziesz używać kleju.

                Posiadanie złego kleju może kosztować Cię dużo czasu i frustracji. Przez lata przeglądałem wiele różnych produktów klejących, aby znaleźć ten, który naprawdę dla mnie zadziałał. To są te, które obecnie polecam.</p>
                <a href="https://ageofminiatures.com/best-glues/"><p>Przecztaj Artykujł o wyborze Kleju</p></a>
            </div>

        <div class="Bloki">
            <h1>Farby</h1>
            <img class="ZdjecieBloki" src="Farby.png">
            <p>Moim zdaniem dobra farba akrylowa do malowania miniatur powinna mieć gładką konsystencję. Idzie to w parze z dobrymi właściwościami samopoziomującymi, 
                dzięki czemu można go łatwo nakładać bez smug. Nie powinien zbytnio się oddzielać i być gotowy do użycia po szybkim wstrząśnięciu, powinien dobrze 
                się wymieszać. Być może najważniejsze, dobra farba akrylowa powinna charakteryzować się wysokim stopniem krycia i pigmentacją.</p>
                <a href="https://taleofpainters.com/2023/08/stahlys-best-miniature-paints-warhammer-2024/"><p>Przecztaj Artykujł o polecanyc farbach</p></a>
        </div>

    </div>

    <div class="Sklepy">
       <div class="TytulSklepy">
       <h1>Polecane Sklepy Modelarskie</h1>  
       </div>
    <div class="LogoSklepy">
       <a href="https://www.mojehobby.pl/"><img src="MojeHobby.png" width="100px" height="100px"></a>
       <a href="https://agtom.eu/"><img src="Agtom.png"width="450px" height="100px"></a>
       <a href="https://vanaheim.pl/pl/"><img src="Vanheim.png" width="450px" height="100px"></a>
       <a href="https://www.rebel.pl/bitewniaki/5016-warhammer-age-of-sigmar"><img src="rebel.png" width="300px" height="170px"></a>
    </div>
 </div>

   

 
</body>