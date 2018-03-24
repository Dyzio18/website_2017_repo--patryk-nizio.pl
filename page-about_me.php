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
            <h2 class="h2 title"> Hello World! </h2>
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
                <li><a class="bold link" href="https://www.linkedin.com/in/patryk-nizio/">Linkedin</a></li>
                <li><a class="bold link" href="https://github.com/Dyzio18">Github</a></li>
                <li><span class="bold">patryk.nizio@gmail.com</span></li>
                <li class="bold">CV: <a class="bold link underline"  href="https://patryk-nizio.pl/files/work/cv/cv_patryk-nizio-pl.pdf">pl</a> </li>
            </ul>
        </div>
    </div>
</section>

<section class="container">
    <h3 class="title--awarded text--center"> Technologie </h3>
    <div class="technology">
        <div id="techDesc" class="technology__desc ">
            <h4 class="h3 title">Lorem ipsum </h4>
            <p>
                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptas dolorem nobis nihil quasi dolores accusantium
                modi non laborum rerum dolorum? Nam, laborum vero. Facilis incidunt, quod dolorem nostrum tenetur quaerat.
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
            techTarget.innerHTML = '<h4 class="h3 title">'+ techDesc[i].title +'</h4>' + '<p>' + techDesc[i].desc + '</p>';
        });
    }

</script>



<?php get_footer(); ?>