<?php
include "session.php";

/* DB */
require 'database.php';
$bdd = Database::connect();

/* ADD VISITORS */
$user_ip = $_SERVER['REMOTE_ADDR'];
$check_ip = $bdd->prepare('SELECT userip FROM totalview WHERE userip = :user_ip');
$check_ip->execute(array('user_ip' => $user_ip));


$isKnown = $check_ip->fetch();
if (!$isKnown) {
    $req3 = $bdd->prepare('INSERT INTO totalview(userip) VALUES(:userip)');
    $req3->execute(array('userip' => $user_ip));
}
?>
<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="utf-8">
  <meta name="robots" content="index,follow">
  <meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1" />
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, viewport-fit=cover">

  <title>Valentin Kaelin</title>
  <link rel="shortcut icon" type="image/png" href="img/favicon.ico" />
  <link rel="stylesheet" type="text/css" href="css/main.css">
</head>

<body style="background: linear-gradient(to right, rgb(96, 108, 136), rgb(63, 76, 107));">
  <main class="h-screen">
    <div class="back-to-top fixed w-10 h-10 pin-b pin-r mr-4 mb-4 hidden aligns-items justify-center bg-white border-2 border-indigo text-indigo hover:bg-indigo hover:text-white cursor-pointer" 
    style="transform: rotate(45deg);">
      <span class="self-center font-sans font-light" style="transform: rotate(-45deg);">Top</span>
    </div>
    <div class="flex flex-col md:flex-row items-center md:items-start justify-center min-h-screen font-sans font-light leading-normal">

      <!-- First col -->
      <div class="flex flex-col flex-grow items-center max-w-sm w-full md:mb-8 px-3 pt-8">
        <h1 class="font-light uppercase text-grey-lightest text-2xl mt-3 mb-2">
          <span class="text-3xl mr-1 opacity-50">À</span>
          propos
        </h1>

        <!-- First card -->
        <div class="w-full bg-white shadow rounded my-2">
          <div class="sm:flex sm:items-center px-6 pt-4">
            <img src="img/me.jpg" class="shadow block h-16 sm:h-24 rounded-full mx-auto mb-4 sm:mb-0 sm:mr-4 sm:ml-0 self-start">
            <div class="sm:flex-grow">
              <div class="text-center sm:text-left mb-4">
                <p class="text-xl leading-tight">Valentin Kaelin</p>
                <p class="my-2 text-sm leading-tight text-grey-dark sm:text-justify">
                  Etudiant en informatique, développeur web et interessé par le design.
                  <br> Me contacter via email
                </p>
              </div>
              <div class="flex justify-between mb-4">
                <div class="flex flex-col">
                  <span class="uppercase text-grey text-xs">Âge</span>
                  <span class="text-grey-darker">21 ans</span>
                </div>
                <div class="flex flex-col">
                  <span class="uppercase text-grey text-xs">Localisation</span>
                  <span class="text-grey-darker">Vevey, VD</span>
                </div>
                <div class="flex flex-col">
                  <span class="uppercase text-grey text-xs">Disponibilité</span>
                  <span class="text-grey-darker">Sur temps libre</span>
                </div>
              </div>
            </div>
          </div> <!-- /Top of the card -->
          <div class="flex flex-wrap justify-around px-3 py-3 border-t border-grey-lighter">
            <a href="mailto:kalanehd@gmail.com" class="mx-1 my-1 no-underline text-xs font-semibold rounded-full px-3 py-1 border border-blue-dark text-blue-dark hover:bg-blue-dark hover:text-white">Email</a>
            <a href="https://twitter.com/Valentinkln" target="_blank" class="mx-1 my-1 no-underline text-xs font-semibold rounded-full px-3 py-1 border border-blue-light text-blue-light hover:bg-blue-light hover:text-white">Twitter</a>
            <a href="https://www.linkedin.com/in/valentin-kaelin-659759157/" target="_blank" class="mx-1 my-1 no-underline text-xs font-semibold rounded-full px-3 py-1 border border-blue text-blue hover:bg-blue hover:text-white">LinkedIn</a>
            <a href="discord.html" target="_blank" class="mx-1 my-1 no-underline text-xs font-semibold rounded-full px-3 py-1 border border-indigo text-indigo hover:bg-indigo hover:text-white">Discord</a>
            <a href="https://github.com/Kalaneee" target="_blank" class="mx-1 my-1 no-underline text-xs font-semibold rounded-full px-3 py-1 border border-grey-darkest text-grey-darkest hover:bg-grey-darkest hover:text-white">GitHub</a>
          </div> <!-- /Bottom of the card -->
        </div><!-- /End first card -->

        <!-- Second card -->
        <div class="w-full bg-white shadow rounded my-2">
          <div class="px-6 py-4">
            <div class="text-xl leading-tight mb-3">Formations</div>
            <div class="flex flex-col bg-grey-lightest pl-4 pr-2 mt-2 mb-4 border border-grey-lighter rounded-lg">
              <div class="flex items-center mb-2">
                <div class="mr-2 text-base">EPFL Extension School</div>
                <div class="text-sm leading-tight text-grey-dark mr-1">mai 2018 - juillet 2018</div>
                <img src="img/exts.jpg" class="w-auto h-12 ml-auto mt-2 rounded-full">
              </div>
              <p class="text-sm pt-2 mb-2 border-t border-grey-lighter w-4/5">
                Cours en ligne de 450h "Web Application Development".
              </p>
              <a href="https://exts.epfl.ch/courses-programs/web-application-development" target="_blank" class="self-end no-underline text-xs font-semibold rounded-full px-4 py-1 -mt-4 mb-1 border border-indigo text-indigo hover:bg-indigo hover:text-white">Site</a>
            </div>
            <div class="flex flex-col bg-grey-lightest pl-4 pr-2 mt-2 mb-4 border border-grey-lighter rounded-lg">
              <div class="flex items-center mb-2">
                <div class="mr-2 text-base">EPFL</div>
                <div class="text-sm leading-tight text-grey-dark mr-1">septembre 2017 - février 2018</div>
                <img src="img/epfl-2.png" class="w-auto h-12 ml-auto mt-2 rounded-full">
              </div>
              <p class="text-sm pt-2 border-t border-grey-lighter w-4/5">Cursur arrêté à la fin du premier semestre de
                l'année propédeutique en informatique.</p>
              <a href="https://www.epfl.ch/" target="_blank" class="self-end no-underline text-xs font-semibold rounded-full px-4 py-1 -mt-4 mb-1 border border-indigo text-indigo hover:bg-indigo hover:text-white">Site</a>
            </div>
            <div class="flex flex-col bg-grey-lightest pl-4 pr-2 mt-2 mb-4 border border-grey-lighter rounded-lg">
              <div class="flex items-center mb-2">
                <div class="mr-2 text-base">Ecole 42</div>
                <div class="text-sm leading-tight text-grey-dark mr-1">août 2017</div>
                <img src="img/42.jpg" class="w-12 h-12 ml-auto  mt-2 rounded-full" style="object-fit: cover;">
              </div>
              <p class="text-sm pt-2 mb-2 border-t border-grey-lighter w-4/5">
                Piscine (test d'admission d'une période d'un mois) réussie.
              </p>
              <a href="http://www.42.fr/" target="_blank" class="self-end no-underline text-xs font-semibold rounded-full px-4 py-1 -mt-4 mb-1 border border-indigo text-indigo hover:bg-indigo hover:text-white">Site</a>
            </div>
            <div class="flex flex-col bg-grey-lightest pl-4 pr-2 mt-2 mb-4 border border-grey-lighter rounded-lg">
              <div class="flex items-center mb-2">
                <div class="mr-2 text-base">Gymnase</div>
                <div class="text-sm leading-tight text-grey-dark mr-1">août 2013 - juin 2016</div>
                <img src="img/burier-2.png" class="w-auto h-12 ml-auto rounded-full mt-2">
              </div>
              <p class="text-sm pt-2 mb-2 border-t border-grey-lighter w-4/5">
                Maturité fédérale en option maths et physique
              </p>
              <a href="http://www.gymnasedeburier.ch/site/" target="_blank" class="self-end no-underline text-xs font-semibold rounded-full px-4 py-1 -mt-4 mb-1 border border-indigo text-indigo hover:bg-indigo hover:text-white">Site</a>
            </div>

          </div>
        </div>
        <!-- /End second card -->

        <!-- Third card -->
        <div class="w-full bg-white shadow rounded my-2">
          <div class="px-6 py-4">
            <div class="text-xl leading-tight mb-3">Compétences</div>
            <p class="italic leading-tight text-sm text-grey-dark text-justify mb-4">
              A titre purement indicatif. Plus c'est coloré, plus je suis à l'aise sur la technologie!
            </p>
            <div class="flex items-center bg-grey-lightest pl-4 pr-2 my-2 border border-grey-lighter rounded-full">
              <div class="flex w-32 text-base">HTML - CSS</div>
              <div class="flex flex-grow w-full mt-px">
                <div class="flex flex-grow h-2 mx-1 rounded-full bg-indigo-light"></div>
                <div class="flex flex-grow h-2 mx-1 rounded-full bg-indigo-light"></div>
                <div class="flex flex-grow h-2 mx-1 rounded-full bg-indigo-light"></div>
                <div class="flex flex-grow h-2 mx-1 rounded-full bg-indigo-light"></div>
                <div class="flex flex-grow h-2 mx-1 rounded-full bg-indigo-light"></div>
                <div class="flex flex-grow h-2 mx-1 rounded-full bg-indigo-light"></div>
                <div class="flex flex-grow h-2 mx-1 rounded-full bg-indigo-light"></div>
              <div class="flex flex-grow h-2 mx-1 rounded-full bg-indigo-light"></div>
                <div class="flex flex-grow h-2 mx-1 rounded-full bg-grey-light"></div>
                <div class="flex flex-grow h-2 mx-1 rounded-full bg-grey-light"></div>
              </div>
            </div> <!-- /HTML CSS -->
            <div class="flex items-center bg-grey-lightest pl-4 pr-2 my-2 border border-grey-lighter rounded-full">
              <div class="flex w-32 text-base">JavaScript</div>
              <div class="flex flex-grow w-full mt-px">
                <div class="flex flex-grow h-2 mx-1 rounded-full bg-indigo-light"></div>
                <div class="flex flex-grow h-2 mx-1 rounded-full bg-indigo-light"></div>
                <div class="flex flex-grow h-2 mx-1 rounded-full bg-indigo-light"></div>
                <div class="flex flex-grow h-2 mx-1 rounded-full bg-indigo-light"></div>
                <div class="flex flex-grow h-2 mx-1 rounded-full bg-indigo-light"></div>
             	<div class="flex flex-grow h-2 mx-1 rounded-full bg-indigo-light"></div>
                <div class="flex flex-grow h-2 mx-1 rounded-full bg-grey-light"></div>
                <div class="flex flex-grow h-2 mx-1 rounded-full bg-grey-light"></div>
                <div class="flex flex-grow h-2 mx-1 rounded-full bg-grey-light"></div>
                <div class="flex flex-grow h-2 mx-1 rounded-full bg-grey-light"></div>
              </div>
            </div> <!-- /JS -->
            <div class="flex items-center bg-grey-lightest pl-4 pr-2 my-2 border border-grey-lighter rounded-full">
              <div class="flex w-32 text-base">PHP</div>
              <div class="flex flex-grow w-full mt-px">
                <div class="flex flex-grow h-2 mx-1 rounded-full bg-indigo-light"></div>
                <div class="flex flex-grow h-2 mx-1 rounded-full bg-indigo-light"></div>
                <div class="flex flex-grow h-2 mx-1 rounded-full bg-indigo-light"></div>
                <div class="flex flex-grow h-2 mx-1 rounded-full bg-indigo-light"></div>
                <div class="flex flex-grow h-2 mx-1 rounded-full bg-grey-light"></div>
                <div class="flex flex-grow h-2 mx-1 rounded-full bg-grey-light"></div>
                <div class="flex flex-grow h-2 mx-1 rounded-full bg-grey-light"></div>
                <div class="flex flex-grow h-2 mx-1 rounded-full bg-grey-light"></div>
                <div class="flex flex-grow h-2 mx-1 rounded-full bg-grey-light"></div>
                <div class="flex flex-grow h-2 mx-1 rounded-full bg-grey-light"></div>
              </div>
            </div> <!-- /PHP -->
            <div class="flex items-center bg-grey-lightest pl-4 pr-2 my-2 border border-grey-lighter rounded-full">
              <div class="flex w-32 text-base">MySQL</div>
              <div class="flex flex-grow w-full mt-px">
                <div class="flex flex-grow h-2 mx-1 rounded-full bg-indigo-light"></div>
                <div class="flex flex-grow h-2 mx-1 rounded-full bg-indigo-light"></div>
                <div class="flex flex-grow h-2 mx-1 rounded-full bg-indigo-light"></div>
                <div class="flex flex-grow h-2 mx-1 rounded-full bg-indigo-light"></div>
                <div class="flex flex-grow h-2 mx-1 rounded-full bg-grey-light"></div>
                <div class="flex flex-grow h-2 mx-1 rounded-full bg-grey-light"></div>
                <div class="flex flex-grow h-2 mx-1 rounded-full bg-grey-light"></div>
                <div class="flex flex-grow h-2 mx-1 rounded-full bg-grey-light"></div>
                <div class="flex flex-grow h-2 mx-1 rounded-full bg-grey-light"></div>
                <div class="flex flex-grow h-2 mx-1 rounded-full bg-grey-light"></div>
              </div>
            </div> <!-- /MySQL -->
            <div class="flex items-center bg-grey-lightest pl-4 pr-2 my-2 border border-grey-lighter rounded-full">
              <div class="flex w-32 text-base">Ruby on Rails</div>
              <div class="flex flex-grow w-full mt-px">
                <div class="flex flex-grow h-2 mx-1 rounded-full bg-indigo-light"></div>
                <div class="flex flex-grow h-2 mx-1 rounded-full bg-indigo-light"></div>
                <div class="flex flex-grow h-2 mx-1 rounded-full bg-indigo-light"></div>
                <div class="flex flex-grow h-2 mx-1 rounded-full bg-indigo-light"></div>
                <div class="flex flex-grow h-2 mx-1 rounded-full bg-indigo-light"></div>
                <div class="flex flex-grow h-2 mx-1 rounded-full bg-indigo-light"></div>
                <div class="flex flex-grow h-2 mx-1 rounded-full bg-grey-light"></div>
                <div class="flex flex-grow h-2 mx-1 rounded-full bg-grey-light"></div>
                <div class="flex flex-grow h-2 mx-1 rounded-full bg-grey-light"></div>
                <div class="flex flex-grow h-2 mx-1 rounded-full bg-grey-light"></div>
              </div>
            </div> <!-- /Ruby on Rails -->
            <div class="flex items-center bg-grey-lightest pl-4 pr-2 my-2 border border-grey-lighter rounded-full">
              <div class="flex w-32 text-base">Java</div>
              <div class="flex flex-grow w-full mt-px">
                <div class="flex flex-grow h-2 mx-1 rounded-full bg-indigo-light"></div>
                <div class="flex flex-grow h-2 mx-1 rounded-full bg-indigo-light"></div>
                <div class="flex flex-grow h-2 mx-1 rounded-full bg-indigo-light"></div>
                <div class="flex flex-grow h-2 mx-1 rounded-full bg-indigo-light"></div>
                <div class="flex flex-grow h-2 mx-1 rounded-full bg-indigo-light"></div>
                <div class="flex flex-grow h-2 mx-1 rounded-full bg-grey-light"></div>
                <div class="flex flex-grow h-2 mx-1 rounded-full bg-grey-light"></div>
                <div class="flex flex-grow h-2 mx-1 rounded-full bg-grey-light"></div>
                <div class="flex flex-grow h-2 mx-1 rounded-full bg-grey-light"></div>
                <div class="flex flex-grow h-2 mx-1 rounded-full bg-grey-light"></div>
              </div>
            </div> <!-- /Java -->
            <div class="flex items-center bg-grey-lightest pl-4 pr-2 my-2 border border-grey-lighter rounded-full">
              <div class="flex w-32 text-base">C#</div>
              <div class="flex flex-grow w-full mt-px">
                <div class="flex flex-grow h-2 mx-1 rounded-full bg-indigo-light"></div>
                <div class="flex flex-grow h-2 mx-1 rounded-full bg-indigo-light"></div>
                <div class="flex flex-grow h-2 mx-1 rounded-full bg-indigo-light"></div>
                <div class="flex flex-grow h-2 mx-1 rounded-full bg-indigo-light"></div>
                <div class="flex flex-grow h-2 mx-1 rounded-full bg-indigo-light"></div>
                <div class="flex flex-grow h-2 mx-1 rounded-full bg-grey-light"></div>
                <div class="flex flex-grow h-2 mx-1 rounded-full bg-grey-light"></div>
                <div class="flex flex-grow h-2 mx-1 rounded-full bg-grey-light"></div>
                <div class="flex flex-grow h-2 mx-1 rounded-full bg-grey-light"></div>
                <div class="flex flex-grow h-2 mx-1 rounded-full bg-grey-light"></div>
              </div>
            </div> <!-- /C# -->
          </div>
        </div><!-- /End Third card -->

        <div class="hidden md:flex md:flex-row items-center text-xs sm:text-sm text-grey-lighter text-center justify-center py-4 max-w-sm w-full px-4">
          <div>
            <a href="https://valentinkaelin.ch" class="no-underline text-grey-lighter hover:text-grey hover:underline">valentinkaelin.ch</a>
            &copy; 2017 - 2019 | Tous droits réservés.
          </div>
        </div>
      </div> <!-- End first col -->


      <!-- Second col -->
      <div class="flex flex-col flex-grow items-center max-w-sm w-full md:mb-8 px-3 pt-8">
        <h1 class="font-light uppercase text-grey-lightest text-2xl mt-3 mb-2">
          <span class="text-3xl mr-1 opacity-50">4</span>projets
        </h1>

        <!-- First card -->
        <div class="flex flex-col items-center w-full bg-white rounded shadow px-4 py-4 my-2">
          <div class="flex items-center">
            <img src="img/youtogether.png" class="w-auto h-12 mr-2 rounded-full">
            <span class="text-2xl font-light whitespace-no-wrap">YouTogether</span>
          </div>
          <div class="w-full my-3">
            <p class="text-sm text-justify mb-2 px-4 py-1 -mx-4 bg-grey-lightest">
              Création d'un site permettant de regarder des vidéos YouTube en simultanés avec plusieurs personnes.
            </p>
            <div class="leading-loose">
              <div class="text-sm">
                Technologies utilisées :
                <span class="text-grey-darker border-b border-dashed pb-px">Ruby on Rails</span>,
                <span class="text-grey-darker border-b border-dashed pb-px">Action Cable</span>,
                <span class="text-grey-darker border-b border-dashed pb-px">SASS</span>
              </div>
              <div class="text-sm">
                Date :
                <span class="text-grey-darker">mai 2018 - juin 2018</span>
              </div>
            </div>
          </div>
          <a href="https://youtogether.herokuapp.com" target="_blank" class="sm:self-end no-underline text-xs font-semibold rounded-full px-4 py-1 border border-indigo text-indigo hover:bg-indigo hover:text-white">
            Voir le site
          </a>

        </div> <!-- /End first card -->

        <!-- Second card -->
        <div class="flex flex-col items-center w-full bg-white rounded shadow px-4 py-4 my-2">
          <div class="flex items-center">
            <img src="https://pbs.twimg.com/profile_images/834902158579548160/afsfp7Pu_400x400.jpg" class="w-auto h-12 mr-2 rounded-full">
            <span class="text-2xl font-light whitespace-no-wrap">Kryptonia</span>
          </div>
          <div class="w-full my-3">
            <p class="text-sm text-justify mb-2 px-4 py-1 -mx-4 bg-grey-lightest">
              Gestion de projet d'un serveur Minecraft moddé disposant d'un base de joueurs de plus de 60'000 inscrits.
            </p>
            <div class="leading-loose">
              <div class="text-sm">
                Compétences acquises :
                <span class="text-grey-darker border-b border-dashed pb-px">Gestion de projet</span>,
                <span class="text-grey-darker border-b border-dashed pb-px">Communication</span>,
                <span class="text-grey-darker border-b border-dashed pb-px">Graphisme</span>
              </div>
              <div class="text-sm">
                Date :
                <span class="text-grey-darker">avril 2016 - aujourd'hui</span>
              </div>
            </div>
          </div>
          <a href="https://kryptonia.fr" target="_blank" class="sm:self-end no-underline text-xs font-semibold rounded-full px-4 py-1 border border-indigo text-indigo hover:bg-indigo hover:text-white">
            Voir le site
          </a>

        </div> <!-- /End Second card -->

        <!-- Third card -->
        <div class="flex flex-col items-center w-full bg-white rounded shadow px-4 py-4 my-2">
          <div class="flex items-center">
            <img src="img/ciao.png" class="w-auto h-12 mr-2 ">
            <span class="text-2xl font-light whitespace-no-wrap">Association CIAO</span>
          </div>
          <div class="w-full my-3">
            <p class="text-sm text-justify mb-2 px-4 py-1 -mx-4 bg-grey-lightest">
              Refonte complète du site de l'association romande CIAO (sans cahier des charges).
            </p>
            <div class="leading-loose">
              <div class="text-sm">
                Technologie utilisée :
                <span class="text-grey-darker border-b border-dashed pb-px">WordPress</span>,
                <span class="text-grey-darker border-b border-dashed pb-px">PHP</span>,
                <span class="text-grey-darker border-b border-dashed pb-px">MySQL</span>,
                <span class="text-grey-darker border-b border-dashed pb-px">Bootstrap</span>
              </div>
              <div class="text-sm">
                Date :
                <span class="text-grey-darker">février 2018 - mai 2018</span>
              </div>
            </div>
          </div>
          <a href="https://associationciao.ch/" target="_blank" class="sm:self-end no-underline text-xs font-semibold rounded-full px-4 py-1 border border-indigo text-indigo hover:bg-indigo hover:text-white">
            Voir le site
          </a>

        </div> <!-- /End Third card -->

        <!-- Fourth card -->
        <div class="flex flex-col items-center w-full bg-white rounded shadow px-4 py-4 my-2">
          <div class="flex items-center">
            <img src="img/BikeGame.png" class="w-auto h-12 mr-2 rounded-full">
            <span class="text-2xl font-light whitespace-no-wrap">The BikeGame</span>
          </div>
          <div class="w-full my-3">
            <p class="text-sm text-justify mb-2 px-4 py-1 -mx-4 bg-grey-lightest">
              Realisation d'un jeu de vélo comme projet lors du premier semestre du BA1 de l'EPFL.
            </p>
            <div class="leading-loose">
              <div class="text-sm">
                Technologies utilisées :
                <span class="text-grey-darker border-b border-dashed pb-px">Java</span>,
                <span class="text-grey-darker border-b border-dashed pb-px">jbox2d</span>
              </div>
              <div class="text-sm">
                Date :
                <span class="text-grey-darker">décembre 2017</span>
              </div>
            </div>
          </div>
          <a href="https://github.com/Kalaneee/BikeGame-EPFL" target="_blank" class="sm:self-end no-underline text-xs font-semibold rounded-full px-4 py-1 border border-indigo text-indigo hover:bg-indigo hover:text-white">
            Voir le code
          </a>

        </div> <!-- /End Fourth card -->

        <div class="flex md:hidden md:flex-row items-center text-xs sm:text-sm text-grey-lighter text-center justify-center py-4 max-w-sm w-full px-4">
          <div>
            <a href="https://valentinkaelin.ch" class="no-underline text-grey-lighter hover:text-grey hover:underline">valentinkaelin.ch</a>
            &copy; 2017 - 2019 | Tous droits réservés.
          </div>
        </div>

      </div> <!-- /End second col -->
    </div>
  </main>
  <script src="js/app.js"></script>
</body>
</body>

</html>