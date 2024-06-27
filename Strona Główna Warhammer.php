<?php
session_start();
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <title>Strona Główna</title>
    <link rel="stylesheet" href="stylewarhammer.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <link rel="icon" type="image/x-icon" href="Sigmarite_Icon.ico">
</head>

<body>

    <div class="navbar">
       <div class="logo">
        <img src="logo.png" width="200" height="43" >

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

    <div class="Start">
         <div class="TekstGlowny">
            <h1>Dołącz do najwiekszych bitew świata Warhammer age of sigmar</h1>
              <p>Warhammer Age of Sigmar to ekscytująca gra bitewna, w której armie fantastycznych wojowników walczą o dominację w magicznych krainach. Jeśli dopiero 
                zaczynasz swoją przygodę z Age of Sigmar, oto kilka informacji, które pomogą Ci postawić pierwsze kroki w tej fascynującej grze.
                Warhammer Age of Sigmar (AoS) to gra figurkowa, w której gracze dowodzą armiami złożonymi z pieczołowicie malowanych modeli, przedstawiających 
                bohaterów, potwory i żołnierzy różnych frakcji. Każda frakcja ma swoją unikalną historię, taktyki i zdolności specjalne, co sprawia, że gra jest
                niezwykle różnorodna i wciągająca. 
                Kreatywność: Budowanie i malowanie własnej armii to świetna zabawa, która pozwala na twórcze wyrażenie siebie.
                Strategia: Każda gra to wyzwanie taktyczne, które wymaga przemyślanej strategii i umiejętności planowania.
                Społeczność: Gra w Age of Sigmar to nie tylko rywalizacja, ale też okazja do poznania nowych ludzi i nawiązania przyjaźni.
                Lore: Bogata i fascynująca historia świata Age of Sigmar sprawia, że każda bitwa ma dodatkowy wymiar narracyjny.
                Nie czekaj dłużej – wejdź do świata Warhammer Age of Sigmar i rozpocznij swoją epicką przygodę!</p>
        </div>
    </div>

    
        <div class="Poczatek" >

            <div id="PoczatekBlok1" onclick="location.href='Poczatek.php'">

              <img src="SSET.png">

              <div id="tytulP">
                <h1>Poczatki Poczatków</h1>
              </div>

               <p>Na tej podstronie znajdziesz wszystko, czego potrzebujesz, aby rozpocząć swoją przygodę z Warhammer Age of Sigmar:
                Zestawy Startowe: Komplety zawierające modele figur, podręcznik z zasadami, kości, miarki oraz podstawki, idealne dla początkujących graczy.
                Podstawowe Przybory Modelarskie: Niezbędne narzędzia takie jak cążki, klej modelarski, pędzle, farby, pilniki i nożyki, które ułatwią Ci składanie i malowanie modeli.
                Polecane Sklepy Modelarskie: Lista rekomendowanych sklepów, gdzie możesz zakupić zestawy startowe i przybory, zarówno online, jak i stacjonarnie.</p>
            </div>

            <div id="PoczatekBlok1" onclick="location.href='Malowanie.php'">
            
            <div id="tytulM">
              <h1>Malowanie</h1>
            </div>

             <p>Na tej podstronie znajdziesz starannie wyselekcjonowane produkty, które pomogą Ci w doskonaleniu Twojego warsztatu modelarskiego:
              Polecane Marki Farb: Prezentujemy najlepsze marki farb akrylowych, które zapewniają doskonałe krycie i trwałość. Wśród nich znajdziesz:
              Citadel: Farby renomowanej firmy Games Workshop, znane z wysokiej jakości i szerokiej gamy kolorów.
              Vallejo: Popularne farby akrylowe oferujące bogaty wybór odcieni.
              Podkłady: Specjalistyczne podkłady w sprayu i butelkach, które przygotowują powierzchnię modeli do malowania, zapewniając lepszą przyczepność farby.
              Masy do Rzeźbienia: Materiały takie jak Green Stuff i Milliput, używane do naprawy, modyfikacji i rzeźbienia dodatkowych detali na modelach.</p>
               <img src="Paint.png">
          </div>

          <div id="PoczatekBlok1" onclick="location.href='Frakcje.php'">

            <img src="Frakcje.jpg">

            <div id="tytulF">
              <h1>Frakcje</h1>
            </div>

             <p>Na tej podstronie znajdziesz szczegółowe opisy wszystkich frakcji dostępnych w Warhammer Age of Sigmar.Poznaj i wybierz frakcję, która najbardziej Ci odpowiada:
              Order (Ład): Bohaterskie armie walczące o pokój i cywilizację w Mortal Realms, w tym Stormcast Eternals, Seraphon i Sylvaneth.
              Chaos: Potężne siły zniszczenia i zła, zjednoczone pod sztandarami bogów Chaosu, takie jak Khorne Bloodbound, Tzeentch Arcanites i Nurgle Rotbringers.
              Death (Śmierć): Armie nieumarłych, które pragną pochłonąć żywe krainy, w tym Legions of Nagash, Nighthaunt i Ossiarch Bonereapers.
              Destruction (Zniszczenie): Dzikość i nieokiełznana siła, reprezentowana przez Orruk Warclans, Gloomspite Gitz i Ogor Mawtribes.</p>
          </div>

          <div id="PoczatekBlok1" onclick="location.href='Lore.php'">
            
            <div id="tytulB">
              <h1>Black Library/Lore</h1>
            </div>

             <p>Na tej podstronie znajdziesz wybór książek, które pogłębią Twoją wiedzę i doświadczenie w świecie Warhammer Age of Sigmar. Oferujemy różnorodne rodzaje 
              literatury, od podręczników z zasadami po wciągające powieści i przewodniki: Podręczniki z Zasadami: Niezbędne książki zawierające szczegółowe zasady gry, 
              opisy jednostek, taktyki. Warhammer Age of Sigmar Core Book Battletome dla poszczególnych frakcji Powieści i Opowiadania: Epickie historie i sagami
               osadzone w świecie Age of Sigmar, które pozwolą Ci lepiej zrozumieć lore i bohaterów tej niesamowitej gry.  Polecajki Aby ułatwić wybór, przygotowaliśmy
                listę polecanych książek,gier które warto przeczytać, bądz zagrać.</p>
               <img src="MapaAOS.jpg">
          </div>
         
      </div> 

</body>