<?php
session_start();
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <title>Black Library/Lore</title>
    <link rel="stylesheet" href="stylewarhammer.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <link rel="icon" type="image/x-icon" href="Sigmarite_Icon.ico">
    <style>
        .TytyulNarzedzia{
          left: 300px;
        }

        .Bloki{
            background-color: transparent;
            margin-left: 150px;
        }

        h1,p{
            color: white;
        }

        a:hover{
           color: yellow;
        }

    </style>
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
            <a href="logout.php">Wyloguj</a>
        <?php else: ?>
            <a href="login.php" class="przyciskLogowania">Zaloguj się</a>
        <?php endif; ?>
     </div>

     
       <div class="Narzedzia" style="background-image: url(TłoLore.jpg);">
            <h1 class="TytulNarzedzia" style="color: white;">Przydatne Książki</h1>
          <div class="Bloki">
                 <h1>Książki zawierające historie świata</h1>

                 <img  class="ZdjecieBloki"  style="height: 290px;" src="Lore1.png">
            <p>Black Library koncentruje się na dostarczaniu fanom wysokiej jakości literatury, która rozwija i pogłębia światy tych popularnych gier stołowych. 
                W ofercie wydawnictwa znajdują się powieści, opowiadania, komiksy oraz audiobooki, tworzone przez wielu utalentowanych autorów.</p>
            <a href="https://www.blacklibrary.com/prod-home/new/ebook-war-for-the-mortal-realms-eng-2024.html"><p>Strona Główna Black Library</p></a>
          </div>

          <div class="Bloki">
                 <h1>Core Book</h1>

                 <img  class="ZdjecieBloki"  style="height: 350px; width: 320px; "  src="Lore2.png">
            <p>Core book, czyli podręcznik podstawowy, to fundamentalna książka w każdej grze fabularnej (RPG), która zawiera wszystkie niezbędne zasady i informacje 
            potrzebne do prowadzenia gry. W takim podręczniku można znaleźć opisy mechaniki gry, zasady dotyczące walki, magii.</p>
            <a href="https://www.warhammer.com/shop/Age-Of-Sigmar-Core-Book-EN-2021"><p>Core Book</p></a>
          </div>

          <div class="Bloki">
                 <h1>Battletomy</h1>
                 <img  class="ZdjecieBloki"  style="height: 340px;" src="Lore3.png">
                 <p>Każdy battletome koncentruje się na jednej konkretnej frakcji lub armii w grze, dostarczając szczegółowych informacji na temat jej historii,
                     struktur, bohaterów i jednostek. W takich książkach znajdują się również zasady specjalne, unikalne zdolności oraz opcje dostosowywania armii.</p>
                 <a href="https://ageofsigmar.lexicanum.com/wiki/Battletome"><p>Zbiór Battletomów</p></a>
          </div>
       </div>


       <div class="Poczatek" style="background-image: url(TłoLore1.jpg);">
          <h1>Polecajki<h1>

              <div id="PoczatekBlok1">  

              <img src="Lore1.png">

                    <div id="tytulN">
                        <h1>Najlepsza Książka na początek</h1>
                    </div>

                  <p id="parag">Warhammer Age of Sigmar Omnibus Mam wam do opowiedzenia historię… Zacznę od wybuchu Burzy, gdzie zaczyna się historia… PRZECZYTAJ, PONIEWAŻ
                  Śledź burzliwą sagę o Krainach Śmiertelników w jednym tomie – od bitew z siłami Chaosu, przez Wojny Dusz przeciwko hordom Nagasha, po wybranych wojowników Sigmara walczących w Erze Bestii.HISTORIA
                  Krainy Śmiertelników zostały utracone.
                  Z popiołów Świata, który Był, Bóg-Król Sigmar wyrywa z zapomnienia dusze wojowników, którzy umierają w jego imieniu, i na Kowadle Apoteozy przekuwa je na nowo. Ci odważni, ale uszkodzeni Wieczni Burzy stają w obliczu niemal nieprzezwyciężonych szans, aby sprowadzić światło Sigmara z powrotem do Krain Śmiertelników i odzyskać je z uścisku wznoszących się Niszczycielskich Potęg Chaosu.
                  ZAWARTOŚĆ:
                  The Gates of Azyr (Novella) by Chris Wraight,
                  Soul Wars (Novel) by Josh Reynolds,
                  Dominion (Novel) by Darius Hinks.</p>
        </div>


        <div id="PoczatekBlok1">  

            <img src="Lore4.jpg" style="width: 300px; height: 170px; margin-top: 55px;">

                <div id="tytulN">
                    <h1>Total War: WARHAMMER III</h1>
                </div>

             <p id="parag">Total War: Warhammer III to strategiczna gra komputerowa opracowana przez Creative Assembly i wydana przez Sega. Jest to trzecia część serii
                 osadzonej w fantastycznym świecie Warhammer, łącząca elementy strategii turowej z bitwami w czasie rzeczywistym. W grze gracze mogą kontrolować różne 
                 frakcje z uniwersum Warhammera, w tym demoniczne hordy z domeny Chaosu, szlachetne królestwa Kislevu, oraz mistyczne siły Cathay. Każda z frakcji 
                 posiada unikalne jednostki, bohaterów oraz mechaniki rozgrywki, co wymaga od graczy opracowania różnorodnych strategii. Kampania fabularna opowiada o 
                 walce różnych sił o przejęcie władzy nad demonicznymi siłami i zdobycie dominacji w świecie. Total War: Warhammer III oferuje także tryb wieloosobowy, 
                 pozwalając graczom na zmagania w epickich bitwach online. Dzięki pięknej grafice, bogatemu światu i głębokiej mechanice gry, stanowi gratkę dla
                  miłośników strategii oraz fanów uniwersum Warhammer.</p>

        </div>

        <div id="PoczatekBlok1">  

          <img src="Lore5.jpg" style="width: 300px; height: 170px; margin-top: 55px;">

                <div id="tytulN">
                  <h1>warhammer age of sigmar tempestfall vr</h1>
                </div>

            <p id="parag">Warhammer Age of Sigmar: Tempestfall to przygodowa gra akcji opracowana przez studio Carbon Studio, osadzona w bogatym uniwersum Warhammer 
                Age of Sigmar. Gra przenosi graczy do mrocznego i tajemniczego świata fantasy, gdzie wcielają się w postać potężnego Lorda Arcanum, wojownika-maga 
                należącego do Zakonu Stormcast Eternals. Gracze eksplorują ponure krainy zniszczone przez śmiercionośną plagę, znaną jako Nekrokwestia, walcząc z
                 hordami nieumarłych i potężnymi wrogami, aby ocalić Królestwa Śmiertelnych. Rozgrywka koncentruje się na dynamicznych starciach z użyciem broni 
                 białej oraz magii, a także na odkrywaniu tajemnic i rozwiązywaniu zagadek, które napotykają na swojej drodze. Warhammer Age of Sigmar: Tempestfall
                  wyróżnia się immersyjnym doświadczeniem, wykorzystującym technologię VR, co pozwala graczom poczuć się jak prawdziwi bohaterowie walczący w epickich
                   bitwach.</p>

        </div>

       </div>

</body>