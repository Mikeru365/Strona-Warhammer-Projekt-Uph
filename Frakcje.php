<?php
session_start();
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <title>Frakcje</title>
    <link rel="stylesheet" href="stylewarhammer.css">
    <script src="Frakcje.js"></script>
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

     <div class="Order">

        <h1>Order</h1>

        <div class="WybórO">
    
            <button onclick="zmienZawartoscOrder(1)" class="Przymierze">Stormcast Eternals</button>
            <button onclick="zmienZawartoscOrder(2)" class="Przymierze">Cities of Sigmar</button>
            <button onclick="zmienZawartoscOrder(3)" class="Przymierze">Lumineth Realm-Lords</button>
            <button onclick="zmienZawartoscOrder(4)" class="Przymierze">Sylvaneth</button>
            <button onclick="zmienZawartoscOrder(5)" class="Przymierze">Serphon</button>
            <button onclick="zmienZawartoscOrder(6)" class="Przymierze">Kharadron Overlords</button>
            <button onclick="zmienZawartoscOrder(7)" class="Przymierze">Doughters of Khaine</button>
            <button onclick="zmienZawartoscOrder(8)" class="Przymierze">Fyreslayers</button>
            <button onclick="zmienZawartoscOrder(9)" class="Przymierze">Idoneth Deepkin</button>

        </div>

        <div id="Opis_Order" >

            <div id="NazwaFrakcjiOrder">
              <h1 id="FrakcjaOrder">Stormcast Eternals</h1>
            </div>

            <img id="ZdjecieOrder" src="FrakcjeStromcast2.png" >

             <p id="ParagrafOrder">Stormcast Eternals to najpotężniejsi wojownicy Zakonu. Ci szlachetni wojownicy, wykuci w Azyrze ręką Sigmara, wyruszają do królestw, aby stoczyć bitwę. 
                Jadąc na grzmotach, przybywają na pole wojny z rozdzierającym uszy grzmotem. Siły Stormcast Eternals to potężny młot miażdżący siły Chaosu i tarcza 
                chroniąca bezbronnych obywateli królestw przed niezliczonymi nadciągającymi złem. Uzbrojeni w broń obdarzoną niebiańską energią, wściekłość i wiara 
                tych nieśmiertelnych półbogów nie znają granic.</p>
          </div>

     </div>

     <div class="Chaos">

        <h1>Chaos</h1>
        <div class="WybórCH">
            
            <button onclick="zmienZawartoscChaos(1)" class="haos">Beasts of Chaos</button>
            <button onclick="zmienZawartoscChaos(2)" class="haos">Blades of Khorne</button>
            <button onclick="zmienZawartoscChaos(3)" class="haos">Disciples of Tzeentch</button>
            <button onclick="zmienZawartoscChaos(4)" class="haos">Hedonites of Slaanesh</button>
            <button onclick="zmienZawartoscChaos(5)" class="haos">Maggotkin of Nurgle</button>
            <button onclick="zmienZawartoscChaos(6)" class="haos">Skaven</button>
            <button onclick="zmienZawartoscChaos(7)" class="haos">Slaves to Darkness</button>
          
        </div>

        <div id="Opis_Chaos" >

            <div id="NazwaFrakcjiChaos">
              <h1 id="FrakcjaChaos">Beasts of Chaos</h1>
            </div>

            <img id="ZdjecieChaos" src="FCH1.png" >

             <p id="ParagrafChaos">Bestie Chaosu są najczystszym ucieleśnieniem pierwotnej przemocy. Ci ryczący zabójcy wychodzą ze swoich dzikich kryjówek w ogromnych 
                stadach, chcąc dokonać rzezi i profanacji. Od zarania Krain Śmiertelników prześladują ich najbardziej odległe regiony, mordując każdego, kto jest na tyle
                 głupi, by wkroczyć na ich terytorium. Potworne hybrydy człowieka i zwierzęcia, uważają się za prawdziwe dzieci Chaosu, napędzane dzikimi instynktami i
                  głęboko zakorzenioną nienawiścią do cywilizacji. Pobudzeni do wojny, biegają po krainach, niszcząc miasta i fortece w gruzy</p>
          </div>

     </div>


     </div>

     <div class="Death">

       <h1>Death</h1>

       <div class="WybórD">
            
        <button onclick="zmienZawartoscDeath(1)" class="deth">Nighthaunt</button>
        <button onclick="zmienZawartoscDeath(2)" class="deth">Flesh-Eater Courts</button>
        <button onclick="zmienZawartoscDeath(3)" class="deth">Ossiarch Bonereapers</button>
        <button onclick="zmienZawartoscDeath(4)" class="deth">Soulblight Gravelords</button>
        
       </div>

       <div id="Opis_Death" >

        <div id="NazwaFrakcjiDeath">
          <h1 id="FrakcjaDeath">Nighthaunt</h1>
        </div>

        <img id="ZdjecieDeath" src="FD1.png">

         <p id="ParagrafDeath">z Shyish, Królestwa Śmierci, przybywa eteryczny Nighthaunt – przerażające widma sprowadzone do morderstwa przez swoją zaciekłą nienawiść 
          do żywych. Ci nieumarli są bronią terroru Wielkiego Nekromanty, zjednoczonego pod rządami najokrutniejszych i najbardziej torturowanych władców, którzy 
          kiedykolwiek umrzeli. Ich zimny uścisk sięga po Krainy Śmiertelników, siejąc paraliż strachu wśród żywych dusz, które kiedyś nazywali krewnymi, wyjąc zastęp, 
          który pozostawi po sobie jedynie nieskończony krajobraz trupów i zawodzących duchów.</p>
      </div>

     </div>

     <div class="Destruction">
        <h1>Destruction</h1>

        <div class="WybórD">
             
         <button onclick="zmienZawartoscDest(1)" class="dest">Gloomspite Gitz</button>
         <button onclick="zmienZawartoscDest(2)" class="dest">Ogor Mawtribes</button>
         <button onclick="zmienZawartoscDest(3)" class="dest">Orruk Warclans</button>
         <button onclick="zmienZawartoscDest(4)" class="dest">Sons of Behemat</button>

         <div id="Opis_Dest" >

          <div id="NazwaFrakcjiDest">
            <h1 id="FrakcjaDest">Gloomspite Gitz</h1>
          </div>
  
          <img id="ZdjecieDest" src="FDE1.png">
  
           <p id="ParagrafDest">W najciemniejszych zakamarkach Krain Śmiertelników czai się Gloomspite Gitz. Armia okrutnych zielonoskórych i troglodytycznych 
            potworów wyłania się z głębin i ze świata na powierzchni pod złowrogim spojrzeniem Złego Księżyca, przepełniona fanatyczną żądzą plądrowania i siania 
            spustoszenia. Stanąć twarzą w twarz z tymi maniakalnymi grotami oznacza ujrzeć wizję z najciemniejszych ludowych opowieści, ożywającą i wypełnioną 
            morderczymi zamiarami. Rozwścieczone hordy grotów, squigów, troggotów i pająków zalewają pole, chcąc zniszczyć cywilizację. Wzmocnieni i ośmieleni przez 
            tajemniczego księżycowego boga, Gloomspite Gitz to rechocząca siła, z którą należy się liczyć.</p>
        </div>

        </div>

     </div>

     


</body>