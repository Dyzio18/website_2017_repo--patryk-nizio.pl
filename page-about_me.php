<?php
/*
 * Template Name: about_me
 * description: >-
  Strona o mnie
 */

 get_header(); ?>


<section class="container">
    <div class="profil">
        <img class="profil__img" src="https://avatars0.githubusercontent.com/u/18214998?s=460&v=4" alt="Zdjecie profilowe" />
        <div class="profil__desc">
            <h2 class="h2 title"> Cześć! </h2>
        
            <p>
                Nazywam się Patryk, od zawsze chciałem mieć swoje miejsce w&nbsp;sieci. Prowadzę&nbsp;bloga na&nbsp;temat technologi webowych (czasem czegoś innego). <span class="bold"> Super&nbsp;że&nbsp;mogę&nbsp;Cię&nbsp;tutaj&nbsp;powitać!</span>
            </p>
            <p>
                Obecnie mieszkam w&nbsp;Krakowie, lubie przygody dlatego czasem podróżuje (nie&nbsp;tylko&nbsp;przez&nbsp;Nową&nbsp;Hute). Studiuje Informatyke na&nbsp;AGH. W&nbsp;wolnych chwilach programuje, czytam książki i&nbsp;spotykam&nbsp;się ze&nbsp;znajomymi. Interesuję się technologiami webowymi, ciekawostkami ze&nbsp;świata&nbsp;IT i&nbsp;niskobudżetowymi&nbsp;podróżami.

            </p>


        </div>
    </div>
    <div class="profil__bar">
        <div class="profil__links">
            <ul>              
                <li><a class="bold link" href="https://www.linkedin.com/in/patryk-nizio/" target="_blank">Linkedin</a></li>
                <li><a class="bold link" href="https://github.com/Dyzio18" target="_blank">Github</a></li>
                <li><span class="bold">patryk.nizio@gmail.com</span></li>
                <li class="bold">CV: <a class="bold link underline"  href="https://patryk-nizio.pl/files/work/cv/cv_patryk-nizio-pl.pdf" target="_blank">pl</a> </li>
            </ul>
        </div>
    </div>
</section>

<section class="container">
    <h3 class="title--awarded text--center"> Technologie </h3>
    <div class="technology">
        <div id="techDesc" class="technology__desc ">
            <h4 class="h3 title">Ogólnie</h4>
            <p>
                Lubie poznawać nowe rzeczy, po&nbsp;prawej masz liste znanych i&nbsp;lubianych przeze mnie technologi. 
                <br><span class='bold'> Kliknij na&nbsp;jakąś by&nbsp;dowiedzieć&nbsp;się więcej.</span><br>
                Dzieki studiom miałem okazje poznać wiele języków i&nbsp;nauczyć sie szerszego spojrzenia na&nbsp;IT&nbsp;dzięki różnym technologiom.
                Dodatkowo miałem styczność z&nbsp;systemami Linux. Znam Bash'a, AWK, Grep oraz&nbsp;podstawy administracji. Obecnie jestem w&nbsp;trakcie nauki&nbsp;Javy.
            </p>
        </div>
        <div class="technology__mesh">
            <div class="mesh__row"> 
                <div class="mesh__block"><i class="fab fa-js fa-5x"></i></div>
                <div class="mesh__block"><i class="fab fa-node fa-5x"></i></div>
                <div class="mesh__block"><i class="fab fa-codiepie fa-5x"></i></div>
            </div>
            <div class="mesh__row"> 
                <div class="mesh__block"><i class="fab fa-react fa-5x"></i></div>
                <div class="mesh__block"><i class="fab fa-python fa-5x"></i></div>
                <div class="mesh__block"><i class="fab fa-php fa-5x"></i></div>
            </div>
            <div class="mesh__row"> 
                <div class="mesh__block"><i class="fab fa-css3 fa-5x"></i></div>
                <div class="mesh__block"><i class="fab fa-git fa-5x"></i></div>
                <div class="mesh__block"><i class="fas fa-database fa-5x"></i></div>
            </div>
        </div>
    </div>
</section>


<script>
// About-me (choose technology)
const techBox = document.getElementsByClassName('mesh__block')
    const techTarget = document.getElementById('techDesc');
    const techDesc = [ 
        {
            'title':"JavaScript",
            'desc': "Moja ulubiona technologia, pokochałem JS z&nbsp;wprowadzeniem ecma2015 (ES6). Od&nbsp;ponad roku poznaje ten język i&nbsp;jego pochodne. Znam dosyć dobrze sam język, pojęcia takie jak hoisting, obiektowość, promises nie są mi obce. Często używam JS w&nbsp;swoich prywatnych projektach. Jeżeli chodzi o komercyjne doświadczenie używałem go do budowy chat-bota z&nbsp;wykorzystaniem Google i&nbsp;Watson API "
        },
        {
            'title':"Node.js",
            'desc': "Node.js czyli środowisko uruchomieniowe dla JS. Wiem jak utworzyć serwer, zrobić routingi czy połączenie z&nbsp;bazą danych. Korzystam z&nbsp;Node.js razem z&nbsp;Express. Mam w&nbsp;planach rozwój w&nbsp;strone back-endu gdyż interesuje mnie ten obszar i&nbsp;budowa aplikacji z&nbsp;wykorzystaniem Node.js. w&nbsp;najbliższym czasie chcę nauczyć się Hapi.js by postawić swoje pierwsze REST API. Dodatkowo umiem korzystać z&nbsp;menadżerów paczek jak Yarn czy npm"
        },
        {
            'title':"C/C++",
            'desc': "Technologia którą poznalem jeszcze przed studiami. Jest to&nbsp;jezyk który nauczył mnie najwięcej, od&nbsp;zarządzania pamięcia i&nbsp;programowania systemowego po nauke obiektowości. Pisałem w&nbsp;nim proste algorytmy i&nbsp;programy systemowe na&nbsp;potrzeby studiów. Miałem również epizod z&nbsp;wykorzystaniem frameworku QT i&nbsp;prostymi testami jednostkowego z&nbsp;użyciem GoogleTest. "
        },
        {
            'title':"React.js",
            'desc': "React jest biblioteką do tworzenia front-endu z&nbsp;pomocą komponentów. Umiem stworzyć widoki i&nbsp;znam pojęcia takie jak shadow-DOM, cykl komponentu czy przepływ danych. Obecnie uczę się połączenia Reacta z&nbsp;Node.js oraz Reduxa. "
        },
        {
            'title':"Python",
            'desc': "Bardzo polubiłem Pythona za swoją prostą składnie i&nbsp;moge polecić go każdemu kto chce nauczyć sie programować (bez stresu). Nie pisałem w&nbsp;tym języko nic większego niż desktopowy kalkulator czy prostą apke w&nbsp;Django ale jest to&nbsp;technologia w&nbsp;której mógłbym pracować. Pisanie w&nbsp;Pythonie to&nbsp;dla mnie przyjemność. W&nbsp;przyszłości chciałbym poznać go od&nbsp;strony data-science."
        },
        {
            'title':"PHP",
            'desc': "Nie jestem wielkim miłośnikiem PHP ale od&nbsp;czasu do czasu korzystam z&nbsp;niego przy okazji tworzenia szablonu do Wordpressa czy tworzeniu skryptu do strony www. Znam na&nbsp;średnim poziomie framework Laravel i&nbsp;composer."
        },
        {
            'title':"HTML/CSS",
            'desc': "Stronami internetowymi zajmuję sie hobbystycznie od&nbsp;2 lat. Myślę że dosyć dobrze opanowałem CSS i&nbsp;jego prekompilator SASS. Interesuję się sematyką języka, staram sie by moje strony były zgodne ze standarnami. W&nbsp;pracy wykorzystuje metodyke BEM. Wykonywałem również landing page dla jednego z&nbsp;operatorów komórkowych oraz mniejsze zlecenia na&nbsp;strony www dla znajomych i&nbsp;organizacji studenckich."
        },
        {
            'title':"Git",
            'desc': "Dziś nie moge sobie wyobrazić życia bez GITa. Serio. Gdy zaczynam jakiś projekt to&nbsp;najpierw tworze repozytorium, lubie gdy mój kod jest trzymany w&nbsp;jednym bezpiecznym miejsu."
        },
        {
            'title':"MongoDB / SQL",
            'desc': "Bazy danych, rzecz którą powinien znać każdy web-developer i&nbsp;nie tylko. Nie jestem specjalistą od&nbsp;BD ale nie mam problemu z&nbsp;prostymi zapytaniamii&nbsp;tworzeniem baz. Jeżeli chodzi o bazy danych poznałem i&nbsp;używałem (NoSQL) MongoDB oraz (SQL) PostgreSQL i&nbsp;MySQL."
        }
    ];

    for(let i = 0; i < techBox.length; i++){
        techBox[i].addEventListener('click', function () {
            techTarget.innerHTML = '<h4 class="h3 title">'+ techDesc[i].title +'</h4>' + '<p>' + techDesc[i].desc + '</p>';
        });
    }

</script>



<?php get_footer(); ?>