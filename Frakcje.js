function zmienZawartoscOrder(nr) {
    
    var obrazek = document.getElementById('ZdjecieOrder');
    var paragraf = document.getElementById('ParagrafOrder');
    var NazwaFrakcjiOrder = document.getElementById('FrakcjaOrder');
    
    if (nr === 1) {
      obrazek.src = 'FrakcjeStromcast2.png';
      paragraf.textContent = 'Stormcast Eternals to najpotężniejsi wojownicy Zakonu. Ci szlachetni wojownicy, wykuci w Azyrze ręką Sigmara, wyruszają do królestw, aby stoczyć bitwę. Jadąc na grzmotach, przybywają na pole wojny z rozdzierającym uszy grzmotem. Siły Stormcast Eternals to potężny młot miażdżący siły Chaosu i tarcza chroniąca bezbronnych obywateli królestw przed niezliczonymi nadciągającymi złem. Uzbrojeni w broń obdarzoną niebiańską energią, wściekłość i wiara tych nieśmiertelnych półbogów nie znają granic';
      NazwaFrakcjiOrder.textContent = 'Stormcast Eternals';
    } else if (nr === 2) {
      obrazek.src = 'FO22.png';
      paragraf.textContent = 'Miasta Sigmara to pogrążone w walkach metropolie założone przez wolnych śmiertelników we wszystkich krainach. Te odmienne sojusze ludzi, duardinów, elfów, a nawet ogorów walczą nie tylko o przetrwanie, ale także o organizowanie wielkich wypraw i zakładanie nowych twierdz w imieniu Sigmara. Walczą mieczem i piorunami, cudami technologii wojskowej i potężnymi burzami magii. Przede wszystkim Miasta Sigmara wygrywają wojny dzięki niezłomnemu duchowi. Niezależnie od tego, czy bronią swoich z trudem zdobytych miast-fortecy, czy maszerują na pustynię jako Krucjata Zwiastunów Świtu, spędzają życie, aby ponownie zapalić';
      NazwaFrakcjiOrder.textContent = 'Cites of Sigmar';
    } else if (nr === 3) {
      obrazek.src = 'FO3.PNG';
      paragraf.textContent = 'Niewiele armii jest bardziej chwalebnych do zobaczenia niż władcy Królestwa Lumineth. Mistrzowie magii i wzory sztuk wojskowych, te elfy walczą u boku duchów aelementorów w swoim domu, aby chronić Królestwa Śmiertelników przed groźbą zagłady. Wieki temu głód oświecenia Lumineth zapoczątkował apokalipsę. Teraz starają się zadośćuczynić, osiągając harmonię z mądrymi, naturalnymi duchami Hysh. Kiedy wojna wzywa, te elfy wzmacniają swoje niewysłowione umiejętności i waleczność w sztukach mistycznych dzięki mocy geomantycznej – i aby ocalić Krainy Śmiertelników, są gotowi zapłacić każdą cenę…';
      NazwaFrakcjiOrder.textContent = 'Lumineth Realm-Lords';
    } else if (nr === 4) {
      obrazek.src = 'FO4.PNG';
      paragraf.textContent = 'dziwne i baśniowe są Sylvaneth, dzieci bogini życia Alarielle. Te leśne duchy od dawna zamieszkują lasy Krain Śmiertelników, chroniąc miejsca mocy przed złymi intruzami i wypaczającym dotykiem Chaosu. Gdy skutki Rytuału Życia Wiecznej Królowej są odczuwalne w całym kosmosie, Sylvaneth ponownie wchodzą do ofensywy. Dzięki niezbędnej magii, zaczarowanemu ostrzu i dębowym szponom zapewnią, że moc wielkiego rytuału ich bogini zapanuje we wszystkich krainach.';
      NazwaFrakcjiOrder.textContent = 'Sylvaneth';
    } else if (nr === 5) {
      obrazek.src = 'FO5.PNG';
      paragraf.textContent = 'Serafoni niestrudzenie dążą do realizacji Wielkiego Planu Przedwiecznych, przywracając prawdziwy porządek i równowagę w krainach skażonych przez Niszczycielskie Moce. Prowadzeni przez starożytnych magów-płazów, którzy kształtują rzeczywistość za pomocą niezgłębionej magii, ich armie widzą zimnokrwiste jaszczury i dzikie gadzie bestie walczące razem jako jedna potężna siła. Niezależnie od tego, czy wyłaniają się z głębin upalnych dżungli, czy też wynurzają się z niebios w blasku gwiazd, Serafonowie toczą wojnę, łącząc drapieżną przemoc i ezoteryczną moc kosmiczną, której niewielu jest w stanie się oprzeć.';
      NazwaFrakcjiOrder.textContent = 'Serpahon';
    } else if (nr === 6) {
      obrazek.src = 'FO6.PNG';
      paragraf.textContent = 'Władcy Kharadron rządzą niebem, władcy imperium handlowego zbudowanego przez wielkie floty statków przemierzających chmury. Załoga ambitnego duardina, dla którego przede wszystkim liczy się zysk, te cuda sztuczności mogą poszczycić się wystarczającą siłą ognia, aby zrównać z ziemią fortece i okaleczyć narody – oczywiście, gdy okaże się, że dyplomacja zawodzi. Technologia Kharadronów jest napędzana eterowym złotem, a ich codzienne życie opiera się na gromadzeniu jak największej ilości tej tajemniczej substancji. Nawet teraz, gdy dawno nieobecny bóg przodek Grungni objawia się, by zjednoczyć rasy duardinów, pozostaje pytanie: w jaki sposób Kharadron może zyskać';
      NazwaFrakcjiOrder.textContent = 'Kharadron Overlords';
    } else if (nr === 7) {
      obrazek.src = 'FO7.PNG';
      paragraf.textContent = 'tak zabójcze, jak i pełne wdzięku, wojownicze elfy Córek Khaine starają się rozlewać tryskające strumieniami krwi w imię swojego brutalnego bóstwa. Ze skromnych początków kult Krwaworękiego zdominował rozległe połacie Krain Śmiertelników. Prowadzeni przez okrutnego geniusza nowo powstałej bogini Morathi-Khaine, te bezlitosne elfy wyruszają na przesiąknięte krwią kampanie podboju, pokonując wrogów wichrem ostrzy i biczami. Z każdą kroplą krwi rozpryskującą się na ich skórze ich mordercza moc osiąga nowy i przerażający poziom.';
      NazwaFrakcjiOrder.textContent = 'Doughters of Khaine';
    } else if (nr === 8) {
      obrazek.src = 'FO8.PNG';
      paragraf.textContent = 'Fyreslayers to kultura duardinów, których całe istnienie kręci się wokół bitwy, słynących ze swojego temperamentu i niezrównanej umiejętności władania toporem. Wielu wierzy, że ci siwi najemnicy to niewiele więcej niż chciwi barbarzyńcy, ponieważ będą walczyć za każdego, kto osiągnie ich cenę w złocie. Prawda jest o wiele dziwniejsza – nie pragną grabieży wyłącznie ze względu na bogactwo, ale aby zebrać rozproszoną esencję swojego dawno zaginionego bóstwa Grimnira, przodka boga bitwy.';
      NazwaFrakcjiOrder.textContent = 'Fyreslayers';
    } else if (nr === 9) {
      obrazek.src = 'FO9.PNG';
      paragraf.textContent = 'Idoneth Deepkin to tajemnicza rasa elfów zamieszkująca oceany Krain Śmiertelników, wychodząca z wodnego odosobnienia, aby plądrować dusze mieszkańców lądu – ponure żniwo, od którego zależy ich przetrwanie. Kiedy Idoneth wyruszają na wojnę, przynoszą ze sobą widmową manifestację swojego pelagicznego domu. Z tej lśniącej fali magii wypływają elfi wojownicy o zimnych sercach i dzikie bestie z otchłani, by pokonać zdezorientowaną ofiarę. Po nich pozostaje jedynie niesamowita cisza, gdyż wszyscy, którzy przeżyją, wpadają w odrętwienie z pustymi oczami pod wpływem zapomnienia';
      NazwaFrakcjiOrder.textContent = 'Idoneth Deepkin';
    }
  }


  function zmienZawartoscChaos(nr) {
    
    var obrazek = document.getElementById('ZdjecieChaos');
    var paragraf = document.getElementById('ParagrafChaos');
    var NazwaFrakcji = document.getElementById('FrakcjaChaos');
    
    if (nr === 1) {
      obrazek.src = 'FCH1.png';
      paragraf.textContent = 'Bestie Chaosu są najczystszym ucieleśnieniem pierwotnej przemocy. Ci ryczący zabójcy wychodzą ze swoich dzikich kryjówek w ogromnych stadach, chcąc dokonać rzezi i profanacji. Od zarania Krain Śmiertelników prześladują ich najbardziej odległe regiony, mordując każdego, kto jest na tyle głupi, by wkroczyć na ich terytorium. Potworne hybrydy człowieka i zwierzęcia, uważają się za prawdziwe dzieci Chaosu, napędzane dzikimi instynktami i głęboko zakorzenioną nienawiścią do cywilizacji. Pobudzeni do wojny, biegają po krainach, niszcząc miasta i fortece w gruzy';
      NazwaFrakcji.textContent = 'Beasts of Chaos';
    } else if (nr === 2) {
      obrazek.src = 'FCH2.png';
      paragraf.textContent = 'wyjąc jak oszalałe bestie, Ostrza Khorne rzucają się na swoją ofiarę. Ci dzicy zabójcy pragną oddać cześć Bogu Krwi, topiąc Królestwo Śmiertelników w przypływie krwi. Armie śmiertelników z bliznami i dzikimi oczami walczą u boku demonów zrodzonych z pierwotnej furii, wynurzających się jako jedna wielka i niepowstrzymana czerwona fala. Ci, którzy staną na drodze tego nieszczęścia, są szybko siekani i rozcinani, a ich odcięte głowy trzymane są w górze jako ofiary dla Pana Czaszek.';
      NazwaFrakcji.textContent = 'Blades of Khorne';
    } else if (nr === 3) {
      obrazek.src = 'FCH3.png';
      paragraf.textContent = 'burza mutującej magii zwiastuje uczniów Tzeentcha – dziwacznych wojowników w służbie Zmieniacza Ścieżek, rtęciowego bóstwa, które rozkoszuje się anarchią i manipulacją. Wśród ich szeregów można znaleźć zwierzoludzi z ptasich głowami, bełkoczące, ziejące ogniem demony i okrutnych kultystów ozdobionych bluźnierczymi tatuażami. Za pomocą płonących dusz zaklęć i wrzeszczących zaklęć ci amorficzni arkaniści starają się wyzwolić szaleństwo surowego Chaosu na rzeczywistość, przekształcając ciało i ziemię, ku uciesze ich strasznego patrona.';
      NazwaFrakcji.textContent = 'Disciples of Tzeentch';
    } else if (nr === 4) {
      obrazek.src = 'FCH4.png';
      paragraf.textContent = 'Hedonici ze Slaanesha włóczą się po królestwach podczas nikczemnych karnawałów grzechu i nadmiaru, szukając zapachu nieobecnego bóstwa, Mrocznego Księcia. Ci, którzy staną na drodze tych najeźdźców, skazani są na powolną i bolesną śmierć, gdyż Hedonici to bezkonkurencyjni poszukiwacze wrażeń, całkowicie oddani zaspokajaniu swoich sadystycznych pragnień na polu bitwy. Zastępy majestatycznych, krętych demonów torują pogardliwą ścieżkę przez wroga, podczas gdy odziani w jedwab śmiertelnicy starają się zadać najbardziej wyrafinowane agonie, jakie można sobie wyobrazić, udręczona dusza każdego zabitego wroga składana jest w hołdzie';
      NazwaFrakcji.textContent = 'Hedonites of Slaanesh';
    } else if (nr === 5) {
      obrazek.src = 'FCH5.png';
      paragraf.textContent = 'bijcie w zardzewiałe dzwony, Maggotkin sprowadzą choroby i rozpacz do królestw. Odrażający czciciele Nurgle’a, Boga Chaosu, plag i entropii, żyją po to, by przyciągnąć innych do swojej owczarni, dzieląc się z nimi swoimi plugawymi darami. Wzmocnione chorobami nękającymi ich ciała, Maggotkin służą Dziadkowi Nurgleowi z wściekłą gorliwością. Armie zarażonych śmiertelników walczą u boku brzęczących demonów zarazy, rozprzestrzeniając zarazę na wszystkich i na wszystkich. Nie chcieli jednak widzieć, jak królestwa płoną. Zamiast tego starają się przekształcić je w śmierdzące, duszące przedłużenia Ogrodu Nurgle’a,';
      NazwaFrakcji.textContent = 'Maggotkin of Nurgle';
    } else if (nr === 6) {
      obrazek.src = 'FCH6.png';
      paragraf.textContent = 'przez niezliczone wieki rasa złowrogich szczuroludzi, znana jako skaveni, nękała Krainy Śmiertelników. Aroganccy, chciwi i całkowicie bezlitosni, skaveni starają się unicestwić każdą inną rozumną istotę – rozprzestrzeniając się, rozmnażając i pochłaniając wszystko na swojej drodze, dopóki sami nie zapanują nad rozkładającą się skorupą rzeczywistości. Ci, którzy przeciwstawiają się tej wizji, zostają pokonani przez roje szalonych, czerwonookich wojowników, uzbrojone plagi, potworne bestie i plujące błyskawicami machiny wojenne. Powstańcie, dzieci Wielkiego Rogatego Szczura!';
      NazwaFrakcji.textContent = 'Skaven';
    } else if (nr === 7) {
      obrazek.src = 'FCH7.png';
      paragraf.textContent = 'Niewolnicy Ciemności dążą do władzy za wszelką cenę. Sprzedali swoje dusze Mrocznym Bogom, aby utorować sobie drogę do supremacji, a ich nieuczciwie zdobyta siła czyni ich naprawdę przerażającą siłą. Odziani w żelazną zbroję czempioni i diabelscy czarodzieje prowadzą bandy szaleńców, mutantów i potworów, które atakują każdego napotkanego wroga, ofiarowując każdą śmierć jako hołd swoim kapryśnym i wymagającym panom. Z kolei są sowicie nagradzani, chociaż dary od bogów nie zawsze są tym, o co prosino…';
      NazwaFrakcji.textContent = 'Slaves to Darkness';
    } 
  }


  function zmienZawartoscDeath(nr) {
    
    var obrazek = document.getElementById('ZdjecieDeath');
    var paragraf = document.getElementById('ParagrafDeath');
    var NazwaFrakcji = document.getElementById('FrakcjaDeath');
    
    if (nr === 1) {
      obrazek.src = 'FD1.png';
      paragraf.textContent = 'z Shyish, Królestwa Śmierci, przybywa eteryczny Nighthaunt – przerażające widma sprowadzone do morderstwa przez swoją zaciekłą nienawiść do żywych. Ci nieumarli są bronią terroru Wielkiego Nekromanty, zjednoczonego pod rządami najokrutniejszych i najbardziej torturowanych władców, którzy kiedykolwiek umrzeli. Ich zimny uścisk sięga po Krainy Śmiertelników, siejąc paraliż strachu wśród żywych dusz, które kiedyś nazywali krewnymi, wyjąc zastęp, który pozostawi po sobie jedynie nieskończony krajobraz trupów i zawodzących duchów.';
      NazwaFrakcji.textContent = 'Nighthaunt';
    } else if (nr === 2) {
      obrazek.src = 'FD2.png';
      paragraf.textContent = 'Stworzenia Dworów Mięsożerców dotyka klątwa, która zniekształca ich postrzeganie rzeczywistości. Chociaż uważają się za walecznych rycerzy i uczciwych żołnierzy, w rzeczywistości są nędznymi demonami, które łakną ciał swoich wrogów. W ruinach cywilizacji obalonych wojną upiorne istoty czają się na granicy życia i śmierci. Rządzeni przez bestialskie wampiry, ci mordanci są uwięzieni w tajemnej iluzji; postrzegają swoje plugawe legowiska jako majestatyczne zamki, a siebie jako pobożnych wojowników. Wraz z powrotem ich ukochanego Króla Padliny, Ushorana, uruchomili... ';
      NazwaFrakcji.textContent = 'Flesh-Eater Courts';
    } else if (nr === 3) {
      obrazek.src = 'FD3.png';
      paragraf.textContent = 'Żniwiarze z Ossiarch to mistrzowie wojny, zdyscyplinowane legiony konstruktów kostnych, które mordują żywych z kliniczną skutecznością. Stworzone, by służyć jako czołowi wojownicy Nagasha, tyrańskiego boga umarłych, są stworzeniami o magicznie wyrzeźbionych kościach i okrutnie połączonych duszach, zbudowanymi z zebranych szczątków śmiertelników, których zabijają. Ich imperium rozprzestrzeniło się daleko, a wszystko w służbie Mortarcha i geniusza wojskowego Orpheona Katakrosa. Oderwani i bezlitośni, Ossiarch Kości Żniwiarze miażdżą swoich wrogów z taktyczną przewagą, a następnie przejmują ich kości, aby stworzyć nowe legiony';
      NazwaFrakcji.textContent = 'Ossiarch Bonereapers';
    } else if (nr === 4) {
      obrazek.src = 'FD4.png';
      paragraf.textContent = 'Gravelordowie Soublight to wysysający krew władcy nocy, którzy rozkazują hordom nieumarłych, by uderzały w żywych. Te wampiry to nieumarli o wyjątkowej mocy i ambicjach, władcy nocy, którzy służą jako generałowie Nagasha, nawet jeśli drażnią go wbrew jego woli. Każda dynastia Soulblight ma swoje własne ambicje co do królestw i pragnie je osiągnąć wszelkimi sposobami, bez względu na to, jak mroczne. Prowadząc armie walących się zwłok, nekromanckich istot i okropności z najgłębszych grobów, wampiry rozszerzają swoje lenna i miażdżą śmiertelników pod piętami.';
      NazwaFrakcji.textContent = 'Soulblight Gravelords';
    } 
  }

  

function zmienZawartoscDest(nr) {
   
    var obrazek = document.getElementById('ZdjecieDest');
    var paragraf = document.getElementById('ParagrafDest');
    var NazwaFrakcji = document.getElementById('FrakcjaDest');
    
    if (nr === 1) {
      obrazek.src = 'FDE1.png';
      paragraf.textContent = 'W najciemniejszych zakamarkach Krain Śmiertelników czai się Gloomspite Gitz. Armia okrutnych zielonoskórych i troglodytycznych potworów wyłania się z głębin i ze świata na powierzchni pod złowrogim spojrzeniem Złego Księżyca, przepełniona fanatyczną żądzą plądrowania i siania spustoszenia. Stanąć twarzą w twarz z tymi maniakalnymi grotami oznacza ujrzeć wizję z najciemniejszych ludowych opowieści, ożywającą i wypełnioną morderczymi zamiarami. Rozwścieczone hordy grotów, squigów, troggotów i pająków zalewają pole, chcąc zniszczyć cywilizację. Wzmocnieni i ośmieleni przez tajemniczego księżycowego boga, Gloomspite Gitz to rechocząca siła, z którą należy się liczyć.';
      NazwaFrakcji.textContent = 'Gloomspite Gitz';
    } else if (nr === 2) {
      obrazek.src = 'FDE2.png';
      paragraf.textContent = 'Ogory Mawtribes przemierzają krainy i pożerają wszystko na swojej drodze migracyjnej, molochy z tłuszczu i mięśni, które miażdżą swoje ofiary maczugami, zardzewiałymi ostrzami i samą masą. Kiedy ogory znajdują się na Paszczy, ziemia dudni nawet nad ich niesamowitymi brzuchami. Kiedy szarżują, rozbrzmiewają ryki, bekania i grzmiący śmiech, a ich taran uderza w broń samą w sobie. Potężni warglutci słuchają zewów umazanych krwią szamanów, podczas gdy Najeźdźcy Bestii wyruszają do bitwy na potworach pochodzących z przeklętej zamieci Wiecznej Zimy. Stanąć im na drodze oznacza zostać pożartym.';
      NazwaFrakcji.textContent = 'Ogor Mawtribes';
    } else if (nr === 3) {
      obrazek.src = 'FDE3.png';
      paragraf.textContent = 'Orrukowie są wcieleniem Zniszczenia. Ta okrutna i pierwotna rasa urodzonych zabójców nie kocha niczego bardziej niż prowadzenie niekończącej się wojny. Ich społeczeństwo zbudowane jest wokół konfliktów, a ze wszystkich zakątków Krain Śmiertelników wybuchają ogromne inwazje migracyjne zwane Waaagh!, które zatapiają światy Porządku, Śmierci i Chaosu w zielonej fali przemocy. Stawienie czoła Klanom Wojennym Orruków oznacza całkowite unicestwienie, gdyż ich liczba jest niezliczona, a oni żyją wyłącznie dla dreszczyku krwawej walki.';
      NazwaFrakcji.textContent = 'Orruk Warclans';
    } else if (nr === 4) {
      obrazek.src = 'FDE4.png';
      paragraf.textContent = 'Synowie Behemata mogą się wcielić. Kiedy gigantyczne plemiona są w trudnej sytuacji, wszyscy inni powinni się schronić, jeśli chcą przetrwać. Ci porywczy tytani mogą zmiażdżyć wszystko na swojej drodze i rzucają wyzwanie każdemu, aby powiedział im inaczej. Żyją, aby walczyć i rozkoszować się swoją kolosalną siłą, bez wroga, którego nie zabiją bezsensownie, jeśli dadzą im połowę szansy. Prowadzeni przez największych, najbardziej gburowatych i najbardziej agresywnych ze swojego rodzaju, Synowie Behemata maszerują teraz zjednoczeni na wojnę, a ziemia trzęsie się pod każdym potwornym krokiem.';
      NazwaFrakcji.textContent = 'Sons of Behemat';
    } 
}


  