<?php
/*
 * Template Name: about_me
 * description: >-
  Strona o mnie
 */

 get_header(); ?>


<section class="container">
    <div class="profil">
        <img class="profil__img" src="http://localhost/wordpress/wp-content/uploads/2018/01/12735678_928109967238768_2114841407_n.jpg" alt="Zdjecie profilowe" />
        <div class="profil__desc">
            <h2 class="title"> Hello World! </h2>
            <p>
                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptas dolorem nobis nihil quasi dolores accusantium
                modi non laborum rerum dolorum? Nam, laborum vero. Facilis incidunt, quod dolorem nostrum tenetur quaerat.
                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptas dolorem nobis nihil quasi dolores accusantium
                modi non laborum rerum dolorum? Nam, laborum vero. Facilis incidunt, quod dolorem nostrum tenetur quaerat.
            </p>
            <p>
                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptas dolorem nobis nihil quasi dolores accusantium
                modi non laborum rerum dolorum? Nam, laborum vero. Facilis incidunt, quod dolorem nostrum tenetur quaerat.

            </p>
        </div>
    </div>
    <div class="profil__bar">
        <div class="profil__links">
            <ul>              
                <li><a class="link--clear bold" href="https://www.linkedin.com/in/patryk-nizio/">Linkedin</a></li> 
                <li><a class="link--clear bold" href="https://github.com/Dyzio18">Github</a></li>
                <li><span class="bold">patryk.nizio@gmail.com</span></li>
                <li>CV <a class="link--clear bold"  href="http://">pl</a> / <a class="link--clear bold" href="http://">eng</a></li>
            </ul>
        </div>
    </div>
</section>

<section class="container">
    <h3 class="title--awarded text--center"> Technologie </h3>
    <div class="technology">
        <div id="techDesc" class="technology__desc">
            <h4 class="title">Lorem ipsum </h4>
            <p>
                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptas dolorem nobis nihil quasi dolores accusantium
                modi non laborum rerum dolorum? Nam, laborum vero. Facilis incidunt, quod dolorem nostrum tenetur quaerat.
            </p>
        </div>
        <div class="technology__mesh">
            <div class="mesh__row"> 
                <div class="mesh__block"><img src="http://www.northeastjsconference.com/wp-content/themes/jsconf/images/learn-javascript.png" alt="javascript"></div>
                <div class="mesh__block"><img src="https://cdn2.iconfinder.com/data/icons/nodejs-1/512/nodejs-512.png" alt="node.js"></div>
                <div class="mesh__block"><img src="http://www.freepngimg.com/download/c++/2-2-c++-png-clipart.png" alt="c/cpp"></div>
            </div>
            <div class="mesh__row"> 
                <div class="mesh__block"><img src="https://www.shareicon.net/data/128x128/2016/08/01/640324_logo_512x512.png" alt="react"></div>
                <div class="mesh__block"><img src="https://www.python.org/static/opengraph-icon-200x200.png" alt="python"></div>
                <div class="mesh__block"><img src="https://sdtimes.com/wp-content/uploads/2015/12/1204.sdt-php.png" alt="php"></div>
            </div>
            <div class="mesh__row"> 
                <div class="mesh__block"><img src="https://digitalworkshopcenter.com/wp-content/uploads/2014/10/html.png" alt="html i css"></div>
                <div class="mesh__block"><img src="https://git-scm.com/images/logos/downloads/Git-Icon-1788C.png" alt="git"></div>
                <div class="mesh__block"><img src="http://www.freepngimg.com/download/database/1-2-database-png.png" alt="bazy danych"></div>
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
            'desc': "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptas dolorem nobis nihil quasi dolores accusantium  modi non laborum rerum dolorum? Nam, laborum vero. Facilis incidunt, quod dolorem nostrum tenetur quaerat.Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptas dolorem nobis nihil quasi dolores accusantium di non laborum rerum dolorum? Nam, laborum vero. Facilis incidunt, quod dolorem nostrum tenetur quaerat."
        },
        {
            'title':"Node.js",
            'desc': "Jest to moja lubiona technologia"
        },
        {
            'title':"C/C++",
            'desc': "Jest to moja lubiona technologia"
        },
        {
            'title':"React.js",
            'desc': "Jest to moja lubiona technologia"
        },
        {
            'title':"Python",
            'desc': "Jest to moja lubiona technologia"
        },
        {
            'title':"PHP",
            'desc': "Jest to moja lubiona technologia"
        },
        {
            'title':"HTML/CSS",
            'desc': "Jest to moja lubiona technologia"
        },
        {
            'title':"Git",
            'desc': "Jest to moja lubiona technologia"
        },
        {
            'title':"MongoDB / SQL",
            'desc': "Bazy danych ..."
        }
    ];

    for(let i = 0; i < techBox.length; i++){
        techBox[i].addEventListener('click', function () {
            techTarget.innerHTML = '<h4 class="title">'+ techDesc[i].title +'</h4>' + '<p>' + techDesc[i].desc + '</p>';
        });
    }

</script>



<?php get_footer(); ?>