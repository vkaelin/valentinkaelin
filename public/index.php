<?php
include "session.php";

/* DB */
require 'database.php';
$bdd = Database::connect();

/* ADD VISITORS */
$user_ip = $_SERVER['REMOTE_ADDR'];
$check_ip = $bdd->prepare('SELECT userip FROM totalview WHERE userip = :user_ip');
$check_ip->execute(array('user_ip' => $user_ip));

/* Calculate my age */
$dateOfBirth = "15-11-1997";
$today = date("Y-m-d");
$diff = date_diff(date_create($dateOfBirth), date_create($today));

$isKnown = $check_ip->fetch();
if (!$isKnown) {
    $req3 = $bdd->prepare('INSERT INTO totalview(userip) VALUES(:userip)');
    $req3->execute(array('userip' => $user_ip));
}
?>
<!DOCTYPE html>
<html lang="fr" class="">

<head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-113251543-2"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-113251543-2');
    </script>
    <meta charset="utf-8">
    <meta name="robots" content="index,follow">
    <meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Etudiant en informatique, développeur web et interessé par le design.">
    <meta name="keywords" content="Valentin, Kaelin, développeur, développeur web">
    <meta name="theme-color" content="#6574cd" />

    <title>Valentin Kaelin</title>
    <link rel="shortcut icon" type="image/png" href="img/favicon.ico" />
    <link rel="stylesheet" type="text/css" href="css/main.css">
</head>

<body>
    <div class="modal-background fixed w-full h-screen z-10 hidden" style="background-color: rgba(34, 41, 47, 0.5);">
    </div>

    <div class="modal-discord fixed w-full z-40 items-center h-screen px-2 hidden">
        <div class="relative max-w-sm mx-auto w-full bg-white rounded-lg px-6 py-10 dark:bg-dark-3">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="absolute pin-r pin-t text-indigo fill-current h-10 w-10 cursor-pointer rounded-full flex items-center justify-center hover:bg-indigo-lightest mr-1 mt-1" id="closeDiscord">
                <path fill-rule="evenodd" d="M15.78 14.36a1 1 0 0 1-1.42 1.42l-2.82-2.83-2.83 2.83a1 1 0 1 1-1.42-1.42l2.83-2.82L7.3 8.7a1 1 0 0 1 1.42-1.42l2.83 2.83 2.82-2.83a1 1 0 0 1 1.42 1.42l-2.83 2.83 2.83 2.82z" />
            </svg>
            <div class="bg-grey-lightest px-4 py-6 border border-grey-lighter rounded-lg my-2 dark:bg-dark-4 dark:border-transparent">
                <div class="flex items-center justify-center">
                    <div class="font-sans font-medium text-indigo text-3xl">My Discord: Kalane#4147</div>
                </div>
            </div>
        </div>
    </div>

    <div class="switch-theme">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="fixed pin-t pin-r w-6 text-white fill-current mr-2 mt-2 cursor-pointer opacity-75 light-on">
            <path class="primary" d="M5 8a7 7 0 1 1 10.62 6l-.64 3.2a1 1 0 0 1-.98.8h-4a1 1 0 0 1-.98-.8L8.38 14A7 7 0 0 1 5 8zm12 0a5 5 0 0 0-5-5 1 1 0 0 0 0 2 3 3 0 0 1 3 3 1 1 0 0 0 2 0z" />
            <path class="secondary" d="M15 21a2 2 0 0 1-2 2h-2a2 2 0 0 1-2-2 1 1 0 0 1 0-2h6a1 1 0 0 1 0 2z" />
        </svg>
    </div>

    <main class="h-screen">
        <div class="back-to-top fixed w-10 h-10 pin-b pin-r mr-4 mb-4 flex aligns-items justify-center bg-white border-2 border-indigo text-indigo opacity-0 dark:bg-dark-4 dark:text-dark-primary dark:border-indigo-light hover:bg-indigo-light hover:text-white" style="transform: rotate(45deg);">
            <span class="self-center font-sans font-light" style="transform: rotate(-45deg);">Top</span>
        </div>
        <div class="flex flex-col md:flex-row items-center md:items-start justify-center min-h-screen font-sans font-light leading-normal">

            <!-- First col -->
            <div class="flex flex-col flex-grow items-center max-w-sm w-full md:mb-8 px-3 pt-8">
                <h1 class="font-light uppercase text-grey-lightest text-2xl mt-3 mb-2">
                    <span class="text-3xl mr-1 opacity-50">À</span>
                    propos
                </h1>

                <!-- About -->
                <div class="w-full bg-white shadow rounded my-2 dark:bg-dark-2 dark:text-dark-primary">
                    <div class="sm:flex sm:items-center px-6 pt-4">
                        <img src="img/me.jpg" class="shadow block h-16 sm:h-24 rounded-full mx-auto mb-4 sm:mb-0 sm:mr-4 sm:ml-0 self-start" alt="Profile picture">
                        <div class="sm:flex-grow">
                            <div class="text-center sm:text-left mb-4">
                                <p class="text-xl leading-tight">Valentin Kaelin</p>
                                <p class="my-2 text-sm leading-tight text-grey-dark sm:text-justify dark:text-dark-secondary">
                                    Etudiant en informatique, développeur web et interessé par le design.
                                    <br> Me contacter de préfèrence à l'email suivante: <a class="text-grey-dark border-b border-dashed pb-px no-underline dark:text-dark-secondary" href="mailto:contact@valentinkaelin.ch">contact@valentinkaelin.ch</a>
                                </p>
                            </div>
                            <div class="flex justify-between mb-4">
                                <div class="flex flex-col">
                                    <span class="uppercase text-grey text-xs dark:text-dark-secondary">Âge</span>
                                    <span class="text-grey-darker dark:text-dark-disabled"><?= $diff->format('%y'); ?> ans</span>
                                </div>
                                <div class="flex flex-col">
                                    <span class="uppercase text-grey text-xs dark:text-dark-secondary">Localisation</span>
                                    <span class="text-grey-darker dark:text-dark-disabled">Vevey, VD</span>
                                </div>
                                <div class="flex flex-col">
                                    <span class="uppercase text-grey text-xs dark:text-dark-secondary">Disponibilité</span>
                                    <span class="text-grey-darker dark:text-dark-disabled">Sur temps libre</span>
                                </div>
                            </div>
                        </div>
                    </div> <!-- /Top of the card -->
                    <div class="flex flex-wrap justify-around px-3 py-3 border-t border-grey-lighter dark:border-dark-4">
                        <a href="mailto:contact@valentinkaelin.ch" class="mx-1 my-1 no-underline text-xs font-semibold rounded-full px-3 py-1 border border-blue-dark text-blue-dark hover:bg-blue-dark hover:text-white dark:border-indigo-light dark:bg-indigo-light dark:text-white btn">Email</a>
                        <a href="https://www.linkedin.com/in/valentin-kaelin-659759157/" target="_blank" class="mx-1 my-1 no-underline text-xs font-semibold rounded-full px-3 py-1 border border-blue text-blue hover:bg-blue hover:text-white dark:border-indigo-light dark:bg-indigo-light dark:text-white btn">LinkedIn</a>
                        <?php //<span id="openDiscord" class="mx-1 my-1 no-underline text-xs font-semibold rounded-full px-3 py-1 border border-indigo text-indigo cursor-pointer hover:bg-indigo hover:text-white dark:border-indigo-light dark:bg-indigo-light dark:text-white btn">Discord</span> 
                        ?>
                        <a href="/docs/ValentinKaelin-Resume.pdf" class="mx-1 my-1 no-underline text-xs font-semibold rounded-full px-3 py-1 border border-indigo text-indigo cursor-pointer hover:bg-indigo hover:text-white dark:border-indigo-light dark:bg-indigo-light dark:text-white btn">CV</a>
                        <a href="https://github.com/vkaelin" target="_blank" class="mx-1 my-1 no-underline text-xs font-semibold rounded-full px-3 py-1 border border-grey-darkest text-grey-darkest hover:bg-grey-darkest hover:text-white dark:border-indigo-light dark:bg-indigo-light dark:text-white btn">GitHub</a>
                    </div> <!-- /Bottom of the card -->
                </div><!-- ./ About -->

                <!-- Formations -->
                <div class="w-full bg-white shadow rounded my-2 dark:bg-dark-2 dark:text-dark-primary">
                    <div class="px-6 py-4">
                        <div class="text-xl leading-tight mb-3">Formations</div>
                        <div class="flex flex-col bg-grey-lightest px-4 py-2 mt-2 mb-4 border border-grey-lighter rounded-lg dark:bg-dark-3 dark:border-transparent dark:shadow-md">
                            <div class="flex items-center mb-2">
                                <div class="mr-2 text-base">HEIG-VD</div>
                                <div class="text-sm leading-tight text-grey-dark mr-1 dark:text-dark-secondary">septembre 2020 - actuellement
                                </div>
                                <img src="img/heig.svg" class="w-12 ml-auto mt-2" alt="HEIG">
                            </div>
                            <p class="text-sm pt-2 mb-2 border-t border-grey-lighter w-4/5 dark:border-dark-4">
                                Bachelor en Informatique logicielle.
                            </p>
                            <a href="https://heig-vd.ch/" target="_blank" class="self-end no-underline text-xs font-semibold rounded-full px-4 py-1 -mt-4 mb-1 border border-indigo text-indigo hover:bg-indigo hover:text-white dark:border-indigo-light dark:bg-indigo-light dark:text-white btn">Site</a>
                        </div>
                        <div class="flex flex-col bg-grey-lightest px-4 py-2 mt-2 mb-4 border border-grey-lighter rounded-lg dark:bg-dark-3 dark:border-transparent dark:shadow-md">
                            <div class="flex items-center mb-2">
                                <div class="mr-2 text-base">ETML</div>
                                <div class="text-sm leading-tight text-grey-dark mr-1 dark:text-dark-secondary">août 2018 - juin 2020
                                </div>
                                <img src="img/etml.jpg" class="w-12 ml-auto mt-2 rounded-full" alt="ETML">
                            </div>
                            <p class="text-sm pt-2 mb-2 border-t border-grey-lighter w-4/5 dark:border-dark-4">
                                FPA (Formation Professionnelle accélérée) en informatique.
                            </p>
                            <a href="https://www.etml.ch/" target="_blank" class="self-end no-underline text-xs font-semibold rounded-full px-4 py-1 -mt-4 mb-1 border border-indigo text-indigo hover:bg-indigo hover:text-white dark:border-indigo-light dark:bg-indigo-light dark:text-white btn">Site</a>
                        </div>
                        <div class="flex flex-col bg-grey-lightest px-4 py-2 mt-2 mb-4 border border-grey-lighter rounded-lg dark:bg-dark-3 dark:border-transparent dark:shadow-md">
                            <div class="flex items-center mb-2">
                                <div class="mr-2 text-base">EPFL Extension School</div>
                                <div class="text-sm leading-tight text-grey-dark mr-1 dark:text-dark-secondary">mai 2018 - juillet 2018
                                </div>
                                <img src="img/exts.jpg" class="w-auto h-12 ml-auto mt-2 rounded-full" alt="Extension School">
                            </div>
                            <p class="text-sm pt-2 mb-2 border-t border-grey-lighter w-4/5 dark:border-dark-4">
                                Certificate of Open Studies in Web Application Development.
                            </p>
                            <a href="https://www.extensionschool.ch/web-application-development" target="_blank" class="self-end no-underline text-xs font-semibold rounded-full px-4 py-1 -mt-4 mb-1 border border-indigo text-indigo hover:bg-indigo hover:text-white dark:border-indigo-light dark:bg-indigo-light dark:text-white btn">Site</a>
                        </div>
                        <div class="flex flex-col bg-grey-lightest px-4 py-2 mt-2 mb-4 border border-grey-lighter rounded-lg dark:bg-dark-3 dark:border-transparent dark:shadow-md">
                            <div class="flex items-center mb-2">
                                <div class="mr-2 text-base">EPFL</div>
                                <div class="text-sm leading-tight text-grey-dark mr-1 dark:text-dark-secondary">septembre 2017 - février
                                    2018</div>
                                <img src="img/epfl.svg" class="w-12 ml-auto mt-2" alt="EPFL">
                            </div>
                            <p class="text-sm pt-2 border-t border-grey-lighter w-4/5 dark:border-dark-4">Cursus arrêté à la fin du
                                premier semestre de
                                l'année propédeutique en informatique.</p>
                            <a href="https://www.epfl.ch/" target="_blank" class="self-end no-underline text-xs font-semibold rounded-full px-4 py-1 -mt-4 mb-1 border border-indigo text-indigo hover:bg-indigo hover:text-white dark:border-indigo-light dark:bg-indigo-light dark:text-white btn">Site</a>
                        </div>
                        <div class="flex flex-col bg-grey-lightest px-4 py-2 mt-2 mb-4 border border-grey-lighter rounded-lg dark:bg-dark-3 dark:border-transparent dark:shadow-md">
                            <div class="flex items-center mb-2">
                                <div class="mr-2 text-base">Ecole 42</div>
                                <div class="text-sm leading-tight text-grey-dark mr-1 dark:text-dark-secondary">août 2017</div>
                                <img src="img/42.jpg" class="w-12 h-12 ml-auto  mt-2 rounded-full" style="object-fit: cover;" alt="Ecole 42">
                            </div>
                            <p class="text-sm pt-2 mb-2 border-t border-grey-lighter w-4/5 dark:border-dark-4">
                                Piscine (test d'admission d'une période d'un mois) réussie.
                            </p>
                            <a href="http://www.42.fr/" target="_blank" class="self-end no-underline text-xs font-semibold rounded-full px-4 py-1 -mt-4 mb-1 border border-indigo text-indigo hover:bg-indigo hover:text-white dark:border-indigo-light dark:bg-indigo-light dark:text-white btn">Site</a>
                        </div>
                        <div class="flex flex-col bg-grey-lightest px-4 py-2 mt-2 mb-4 border border-grey-lighter rounded-lg dark:bg-dark-3 dark:border-transparent dark:shadow-md">
                            <div class="flex items-center mb-2">
                                <div class="mr-2 text-base">Gymnase</div>
                                <div class="text-sm leading-tight text-grey-dark mr-1 dark:text-dark-secondary">août 2013 - juin 2016
                                </div>
                                <img src="img/burier.jpg" class="w-auto h-12 ml-auto rounded-full mt-2" alt="Gymnase de Burier">
                            </div>
                            <p class="text-sm pt-2 mb-2 border-t border-grey-lighter w-4/5 dark:border-dark-4">
                                Maturité fédérale en option maths et physique.
                            </p>
                            <a href="https://www.gymnasedeburier.ch/" target="_blank" class="self-end no-underline text-xs font-semibold rounded-full px-4 py-1 -mt-4 mb-1 border border-indigo text-indigo hover:bg-indigo hover:text-white dark:border-indigo-light dark:bg-indigo-light dark:text-white btn">Site</a>
                        </div>

                    </div>
                </div>
                <!-- ./Formations -->

                <!-- Skills -->
                <div class="w-full bg-white shadow rounded my-2 dark:bg-dark-2 dark:text-dark-primary">
                    <div class="px-6 py-4">
                        <div class="text-xl leading-tight mb-3">Compétences</div>

                        <div class="px-4 py-2 bg-grey-lightest my-2 border border-grey-lighter rounded-lg dark:bg-dark-3 dark:border-transparent dark:shadow-md">
                            <div class="text-lg">Web</div>
                            <div class="pl-2 mb-2">
                                <div class="inline-block text-base text-grey-darker border-b border-dashed indigo-circle mb-1 dark:text-dark-secondary">
                                    Front-End</div>
                                <div class="flex flex-wrap">
                                    <a class="skill html flex items-center justify-center p-4 rounded-full mb-1 mr-1" href="https://www.w3.org/html/" target="_blank">
                                        <span class="sr-only">HTML</span>
                                        <svg viewBox="0 0 128 128" class="text-indigo fill-current w-10 dark:text-indigo-light">
                                            <path d="M9.032 2l10.005 112.093 44.896 12.401 45.02-12.387 10.015-112.107h-109.936zm89.126 26.539l-.627 7.172-.276 3.289h-52.665000000000006l1.257 14h50.156000000000006l-.336 3.471-3.233 36.119-.238 2.27-28.196 7.749v.002l-.034.018-28.177-7.423-1.913-21.206h13.815000000000001l.979 10.919 15.287 4.081h.043v-.546l15.355-3.875 1.604-17.579h-47.698l-3.383-38.117-.329-3.883h68.939l-.33 3.539z">
                                            </path>
                                        </svg>
                                    </a>
                                    <a class="skill css flex items-center justify-center p-4 rounded-full mb-1 mr-1" href="https://www.w3.org/Style/CSS/Overview.en.html" target="_blank">
                                        <span class="sr-only">CSS</span>
                                        <svg viewBox="0 0 128 128" class="text-indigo fill-current w-10 dark:text-indigo-light">
                                            <path d="M8.76 1l10.055 112.883 45.118 12.58 45.244-12.626 10.063-112.837h-110.48zm89.591 25.862l-3.347 37.605.01.203-.014.467v-.004l-2.378 26.294-.262 2.336-28.36 7.844v.001l-.022.019-28.311-7.888-1.917-21.739h13.883l.985 11.054 15.386 4.17-.004.008v-.002l15.443-4.229 1.632-18.001h-32.282999999999994l-.277-3.043-.631-7.129-.331-3.828h34.748999999999995l1.264-14h-52.926l-.277-3.041-.63-7.131-.332-3.828h69.281l-.331 3.862z">
                                            </path>
                                        </svg>
                                    </a>
                                    <a class="skill js flex items-center justify-center p-4 rounded-full mb-1 mr-1" href="https://developer.mozilla.org/en-US/docs/Web/JavaScript" target="_blank">
                                        <span class="sr-only">JavaScript</span>
                                        <svg viewBox="0 0 128 128" class="text-indigo fill-current w-10 dark:text-indigo-light">
                                            <path d="M2 1v125h125v-125h-125zm66.119 106.513c-1.845 3.749-5.367 6.212-9.448 7.401-6.271 1.44-12.269.619-16.731-2.059-2.986-1.832-5.318-4.652-6.901-7.901l9.52-5.83c.083.035.333.487.667 1.071 1.214 2.034 2.261 3.474 4.319 4.485 2.022.69 6.461 1.131 8.175-2.427 1.047-1.81.714-7.628.714-14.065-.001-10.115.046-20.188.046-30.188h11.709c0 11 .06 21.418 0 32.152.025 6.58.596 12.446-2.07 17.361zm48.574-3.308c-4.07 13.922-26.762 14.374-35.83 5.176-1.916-2.165-3.117-3.296-4.26-5.795 4.819-2.772 4.819-2.772 9.508-5.485 2.547 3.915 4.902 6.068 9.139 6.949 5.748.702 11.531-1.273 10.234-7.378-1.333-4.986-11.77-6.199-18.873-11.531-7.211-4.843-8.901-16.611-2.975-23.335 1.975-2.487 5.343-4.343 8.877-5.235l3.688-.477c7.081-.143 11.507 1.727 14.756 5.355.904.916 1.642 1.904 3.022 4.045-3.772 2.404-3.76 2.381-9.163 5.879-1.154-2.486-3.069-4.046-5.093-4.724-3.142-.952-7.104.083-7.926 3.403-.285 1.023-.226 1.975.227 3.665 1.273 2.903 5.545 4.165 9.377 5.926 11.031 4.474 14.756 9.271 15.672 14.981.882 4.916-.213 8.105-.38 8.581z">
                                            </path>
                                        </svg>
                                    </a>
                                    <a class="skill vuejs flex items-center justify-center p-4 rounded-full mb-1 mr-1" href="https://vuejs.org/" target="_blank">
                                        <span class="sr-only">Vue.js</span>
                                        <svg viewBox="0 0 128 128" class="text-indigo fill-current w-10 dark:text-indigo-light">
                                            <path d="m-2.3125e-8 8.9337 49.854 0.1586 14.167 24.47 14.432-24.47 49.547-0.1577-63.834 110.14zm126.98 0.6374-24.36 0.0207-38.476 66.052-38.453-66.052-24.749-0.0194 63.211 107.89zm-25.149-0.008-22.745 0.16758l-15.053 24.647-14.817-24.647-22.794-0.1679 37.731 64.476zM25.997 9.3929l23.002 0.0087M25.997 9.3929l23.002 0.0087" fill="none">
                                            </path>
                                            <path d="m25.997 9.3929 23.002 0.0087l15.036 24.958 14.983-24.956 22.982-0.0057-37.85 65.655z" fill="#5661B3">
                                            </path>
                                            <path d="m0.91068 9.5686 25.066-0.1711 38.151 65.658 37.852-65.654 25.11 0.0263-62.966 108.06z" fill="#6574cd">
                                            </path>
                                        </svg>
                                    </a>
                                    <a class="skill nuxtjs flex items-center justify-center p-4 rounded-full mb-1 mr-1" href="https://nuxtjs.org/" target="_blank">
                                        <span class="sr-only">Nuxt.js</span>
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 400 400" class="text-indigo fill-current w-10 dark:text-indigo-light">
                                            <g fill-rule="nonzero" transform="translate(0 50)" fill="none">
                                                <path d="M227.92099 83.45116l-13.6889 24.10141-46.8148-82.44693L23.7037 278.17052h97.3037c0 13.31084 10.61252 24.10142 23.70371 24.10142H23.70371c-8.46771 0-16.29145-4.59601-20.5246-12.05272-4.23315-7.4567-4.23272-16.64312.00114-24.0994L146.89383 13.05492c4.23415-7.45738 12.0596-12.05138 20.5284-12.05138 8.46878 0 16.29423 4.594 20.52839 12.05138l39.97037 70.39623z" fill="#6574cd" />
                                                <path d="M331.6642 266.11981l-90.05432-158.56724-13.6889-24.10141-13.68888 24.10141-90.04445 158.56724c-4.23385 7.45629-4.23428 16.64271-.00113 24.09941 4.23314 7.4567 12.05689 12.05272 20.5246 12.05272h166.4c8.46946 0 16.29644-4.591 20.532-12.04837 4.23555-7.45736 4.23606-16.64592.00132-24.10376h.01976zM144.7111 278.17052L227.921 131.65399l83.19012 146.51653h-166.4z" fill="#5661B3" />
                                                <path d="M396.04938 290.22123c-4.23344 7.45557-12.05656 12.0507-20.52345 12.0507H311.1111c13.0912 0 23.7037-10.79057 23.7037-24.10141h40.66173L260.09877 74.98553l-18.4889 32.56704L227.921 83.45116l11.65432-20.51634c4.23416-7.45738 12.0596-12.05138 20.5284-12.05138 8.46879 0 16.29423 4.594 20.52839 12.05138l115.41728 203.185c4.23426 7.457 4.23426 16.6444 0 24.1014z" fill="#6574cd" />
                                            </g>
                                        </svg>
                                    </a>
                                    <a class="skill sass flex items-center justify-center p-4 rounded-full mb-1 mr-1" href="https://sass-lang.com/" target="_blank">
                                        <span class="sr-only">SASS</span>
                                        <svg viewBox="0 0 128 128" class="text-indigo fill-current w-10 dark:text-indigo-light">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M1.219 56.156c0 .703.207 1.167.323 1.618.756 2.933 2.381 5.45 4.309 7.746 2.746 3.272 6.109 5.906 9.554 8.383 2.988 2.148 6.037 4.248 9.037 6.38.515.366 1.002.787 1.561 1.236-.481.26-.881.489-1.297.7-3.959 2.008-7.768 4.259-11.279 6.986-2.116 1.644-4.162 3.391-5.607 5.674-2.325 3.672-3.148 7.584-1.415 11.761.506 1.22 1.278 2.274 2.367 3.053.353.252.749.502 1.162.6 1.058.249 2.136.412 3.207.609l3.033-.002c3.354-.299 6.407-1.448 9.166-3.352 4.312-2.976 7.217-6.966 8.466-12.087.908-3.722.945-7.448-.125-11.153-.099-.344-.224-.681-.354-1.014-.13-.333-.283-.657-.463-1.072l6.876-3.954.103.088c-.125.409-.258.817-.371 1.23-.817 2.984-1.36 6.02-1.165 9.117.208 3.3 1.129 6.389 3.061 9.146 1.562 2.23 5.284 2.313 6.944.075.589-.795 1.16-1.626 1.589-2.513 1.121-2.315 2.159-4.671 3.23-7.011l.187-.428c-.077 1.108-.167 2.081-.208 3.055-.064 1.521.025 3.033.545 4.48.445 1.238 1.202 2.163 2.62 2.326.97.111 1.743-.333 2.456-.896 1.114-.879 2.019-1.965 2.691-3.199 1.901-3.491 3.853-6.961 5.576-10.54 1.864-3.871 3.494-7.855 5.225-11.792l.286-.698c.409 1.607.694 3.181 1.219 4.671.61 1.729 1.365 3.417 2.187 5.058.389.775.344 1.278-.195 1.928-2.256 2.72-4.473 5.473-6.692 8.223-.491.607-.98 1.225-1.389 1.888-.247.403-.411.894-.48 1.364-.133.898.422 1.764 1.383 1.971.878.189 1.813.259 2.708.193 3.097-.228 5.909-1.315 8.395-3.157 3.221-2.386 4.255-5.642 3.475-9.501-.211-1.047-.584-2.065-.947-3.074-.163-.455-.174-.774.123-1.198 2.575-3.677 4.775-7.578 6.821-11.569.081-.157.164-.314.306-.482.663 3.45 1.661 6.775 3.449 9.792-.912.879-1.815 1.676-2.632 2.554-1.799 1.934-3.359 4.034-4.173 6.595-.35 1.104-.619 2.226-.463 3.405.242 1.831 1.742 3.021 3.543 2.604 3.854-.892 7.181-2.708 9.612-5.925 1.636-2.166 1.785-4.582 1.1-7.113-.188-.688-.411-1.365-.651-2.154.951-.295 1.878-.649 2.837-.868 4.979-1.136 9.904-.938 14.702.86 2.801 1.05 5.064 2.807 6.406 5.571 1.639 3.379.733 6.585-2.452 8.721-.297.199-.637.356-.883.605-.151.153-.242.459-.205.67.021.123.346.277.533.275 1.047-.008 1.896-.557 2.711-1.121 2.042-1.413 3.532-3.314 3.853-5.817l.063-.188-.077-1.63c-.031-.094.023-.187.016-.258-.434-3.645-2.381-6.472-5.213-8.688-3.28-2.565-7.153-3.621-11.249-3.788-3.338-.136-6.619.36-9.765 1.503-.897.325-1.786.71-2.688 1.073-.121-.219-.251-.429-.358-.646-.926-1.896-2.048-3.708-2.296-5.882-.176-1.544-.392-3.086-.025-4.613.353-1.469.813-2.913 1.246-4.362.223-.746.066-1.164-.646-1.5-.248-.117-.518-.219-.786-.258-1.75-.254-3.476-.109-5.171.384-.6.175-1.036.511-1.169 1.175-.076.381-.231.746-.339 1.122-.443 1.563-.757 3.156-1.473 4.645-1.794 3.735-3.842 7.329-5.938 10.897-.227.385-.466.763-.752 1.23-.736-1.54-1.521-2.922-1.759-4.542-.269-1.832-.481-3.661-.025-5.479.339-1.356.782-2.687 1.19-4.025.193-.636.104-.97-.472-1.305-.291-.169-.62-.319-.948-.368-1.815-.269-3.603-.128-5.354.438-.543.176-.828.527-.994 1.087-.488 1.652-.904 3.344-1.589 4.915-2.774 6.36-5.628 12.687-8.479 19.013-.595 1.321-1.292 2.596-1.963 3.882-.17.326-.418.613-.63.919-.17-.201-.236-.339-.235-.477.005-.813-.092-1.65.063-2.436.469-2.378 1.009-4.743 1.578-7.099.47-1.946 1.017-3.874 1.538-5.807.175-.647.178-1.252-.287-1.796-.781-.911-2.413-1.111-3.381-.409l-.428.242.083-.69c.204-1.479.245-2.953-.161-4.41-.506-1.816-1.802-2.861-3.686-2.803-.878.027-1.8.177-2.613.497-3.419 1.34-6.048 3.713-8.286 6.568-.203.259-.471.495-.757.654-2.893 1.604-5.795 3.188-8.696 4.778l-3.229 1.769c-.866-.826-1.653-1.683-2.546-2.41-2.727-2.224-5.498-4.393-8.244-6.592-2.434-1.949-4.792-3.979-6.596-6.56-1.342-1.92-2.207-4.021-2.29-6.395-.105-3.025.753-5.789 2.293-8.362 1.97-3.292 4.657-5.934 7.611-8.327 3.125-2.53 6.505-4.678 10.008-6.639 4.901-2.743 9.942-5.171 15.347-6.774 5.542-1.644 11.165-2.585 16.965-1.929 2.28.258 4.494.78 6.527 1.895 1.557.853 2.834 1.97 3.428 3.716.586 1.718.568 3.459.162 5.204-.825 3.534-2.76 6.447-5.195 9.05-3.994 4.267-8.866 7.172-14.351 9.091-3.165 1.107-6.421 1.802-9.765 2.083-2.729.229-5.401-.013-7.985-.962-1.711-.629-3.201-1.591-4.399-2.987-.214-.25-.488-.521-.887-.287-.391.23-.46.602-.329.979.219.626.421 1.278.762 1.838.857 1.405 2.107 2.424 3.483 3.298 2.643 1.681 5.597 2.246 8.66 2.377 4.648.201 9.183-.493 13.654-1.74 6.383-1.78 11.933-4.924 16.384-9.884 3.706-4.13 6.353-8.791 6.92-14.419.277-2.747-.018-5.438-1.304-7.944-1.395-2.715-3.613-4.734-6.265-6.125-3.862-2.025-8.03-3.204-12.332-3.204h-4.31c-5.21 0-10.247 1.493-15.143 3.274-3.706 1.349-7.34 2.941-10.868 4.703-7.683 3.839-14.838 8.468-20.715 14.833-2.928 3.171-5.407 6.67-6.833 10.79-.417 1.206-.813 2.499-1.111 3.746m27.839 36.013c-.333 4.459-2.354 8.074-5.657 11.002-1.858 1.646-3.989 2.818-6.471 3.23-.9.149-1.821.185-2.694-.188-1.245-.532-1.524-1.637-1.548-2.814-.037-1.876.62-3.572 1.521-5.186 1.176-2.104 2.9-3.708 4.741-5.206 2.9-2.361 6.046-4.359 9.268-6.245l.243-.1c.498 1.84.735 3.657.597 5.507zm25.158-19.379c-.235 1.424-.529 2.849-.945 4.229-1.438 4.777-3.285 9.406-5.282 13.973-.369.845-.906 1.616-1.373 2.417-.072.124-.179.231-.283.334-.578.571-1.126.541-1.418-.206-.34-.868-.549-1.797-.729-2.716-.121-.617-.092-1.265-.13-1.897.039-4.494 1.41-8.578 3.736-12.38.959-1.568 2.003-3.062 3.598-4.054.49-.305 1.04-.55 1.595-.706.85-.239 1.372.154 1.231 1.006zm17.164 21.868l6.169-7.203c.257 2.675-4.29 8.015-6.169 7.203zm19.703-4.847c-.436.25-.911.43-1.358.661-.409.212-.544-.002-.556-.354-.008-.239.027-.489.093-.721.833-2.938 2.366-5.446 4.647-7.486l.16-.082c1.085 3.035-.169 6.368-2.986 7.982z">
                                            </path>
                                        </svg>
                                    </a>
                                    <a class="skill tailwind flex items-center justify-center p-4 rounded-full mb-1 mr-1" href="https://tailwindcss.com/docs/what-is-tailwind/" target="_blank">
                                        <span class="sr-only">TailwindCSS</span>
                                        <svg viewBox="0 0 64 64" class="text-indigo fill-current w-10 dark:text-indigo-light">
                                            <path d="m16.000001 25.600001c2.132798-8.532801 7.467198-12.799999 15.999999-12.799999 12.8 0 14.400001 9.599998 20.8 11.199999 4.267203 1.067202 7.999999-.5328 11.2-4.799999-2.132798 8.532799-7.4672 12.799998-15.999999 12.799998-12.800002 0-14.400001-9.600001-20.800002-11.2-4.267201-1.0672-7.999999.532802-11.199998 4.800001zm-16.000001 19.200001c2.1328-8.532801 7.467202-12.800002 16.000001-12.800002 12.799998 0 14.399999 9.6 20.799998 11.199998 4.267201 1.067201 8.000001-.532798 11.200002-4.799999-2.1328 8.5328-7.467202 12.799999-16.000001 12.799999-12.8 0-14.399999-9.6-20.800002-11.199998-4.267197-1.067203-7.999997.532801-11.199998 4.800002z" fill-rule="evenodd" stroke-width="1.6" />
                                        </svg>
                                    </a>
                                    <a class="skill bootstrap flex items-center justify-center p-4 rounded-full mb-1 mr-1" href="https://getbootstrap.com/" target="_blank">
                                        <span class="sr-only">Bootstrap</span>
                                        <svg viewBox="0 0 128 128" class="text-indigo fill-current w-10 dark:text-indigo-light">
                                            <path d="M75.701 65.603c-2.334-.768-5.694-.603-10.08-.603h-17.621v23h18.844c2.944 0 5.012-.315 6.203-.535 2.099-.376 3.854-1.104 5.264-1.982 1.409-.876 2.568-2.205 3.478-3.881.908-1.676 1.363-3.637 1.363-5.83 0-2.568-.658-4.54-1.975-6.436-1.316-1.896-3.141-2.965-5.476-3.733zM73.282 55.087c2.317-.688 4.064-1.89 5.239-3.487 1.176-1.598 1.763-3.631 1.763-6.044 0-2.286-.549-4.314-1.646-6.054s-2.662-2.413-4.699-3.056c-2.037-.641-5.53-.446-10.48-.446h-15.459v20h16.587c4.042 0 6.939-.38 8.695-.913zM126 18.625c0-9.182-7.443-16.625-16.625-16.625h-91.75c-9.182 0-16.625 7.443-16.625 16.625v91.75c0 9.182 7.443 16.625 16.625 16.625h91.75c9.182 0 16.625-7.443 16.625-16.625v-91.75zm-35.447 66.12c-1.362 2.773-3.047 4.911-5.052 6.415-2.006 1.504-4.521 2.78-7.544 3.548-3.022.769-6.728 1.292-11.113 1.292h-27.844v-69h27.42c5.264 0 9.485.609 12.665 2.002 3.181 1.395 5.671 3.497 7.474 6.395 1.801 2.898 2.702 5.907 2.702 9.071 0 2.945-.8 5.708-2.397 8.308-1.598 2.602-4.011 4.694-7.237 6.292 4.166 1.222 7.37 3.304 9.61 6.248 2.24 2.945 3.36 6.422 3.36 10.432 0 3.227-.681 6.225-2.044 8.997z">
                                            </path>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                            <div class="pl-2 mb-2">
                                <div class="inline-block text-base text-grey-darker border-b border-dashed indigo-circle mb-1 dark:text-dark-secondary">
                                    Back-End</div>
                                <div class="flex flex-wrap">
                                    <a class="skill php flex items-center justify-center p-4 rounded-full mb-1 mr-1" href="http://www.php.net/" target="_blank">
                                        <span class="sr-only">PHP</span>
                                        <svg viewBox="0 0 128 128" class="text-indigo fill-current w-10 dark:text-indigo-light">
                                            <path d="M64 33.039c-33.74 0-61.094 13.862-61.094 30.961s27.354 30.961 61.094 30.961 61.094-13.862 61.094-30.961-27.354-30.961-61.094-30.961zm-15.897 36.993c-1.458 1.364-3.077 1.927-4.86 2.507-1.783.581-4.052.461-6.811.461h-6.253l-1.733 10h-7.301l6.515-34h14.04c4.224 0 7.305 1.215 9.242 3.432 1.937 2.217 2.519 5.364 1.747 9.337-.319 1.637-.856 3.159-1.614 4.515-.759 1.357-1.75 2.624-2.972 3.748zm21.311 2.968l2.881-14.42c.328-1.688.208-2.942-.361-3.555-.57-.614-1.782-1.025-3.635-1.025h-5.79l-3.731 19h-7.244l6.515-33h7.244l-1.732 9h6.453c4.061 0 6.861.815 8.402 2.231s2.003 3.356 1.387 6.528l-3.031 15.241h-7.358zm40.259-11.178c-.318 1.637-.856 3.133-1.613 4.488-.758 1.357-1.748 2.598-2.971 3.722-1.458 1.364-3.078 1.927-4.86 2.507-1.782.581-4.053.461-6.812.461h-6.253l-1.732 10h-7.301l6.514-34h14.041c4.224 0 7.305 1.215 9.241 3.432 1.935 2.217 2.518 5.418 1.746 9.39zM95.919 54h-5.001l-2.727 14h4.442c2.942 0 5.136-.29 6.576-1.4 1.442-1.108 2.413-2.828 2.918-5.421.484-2.491.264-4.434-.66-5.458-.925-1.024-2.774-1.721-5.548-1.721zM38.934 54h-5.002l-2.727 14h4.441c2.943 0 5.136-.29 6.577-1.4 1.441-1.108 2.413-2.828 2.917-5.421.484-2.491.264-4.434-.66-5.458s-2.772-1.721-5.546-1.721z">
                                            </path>
                                        </svg>
                                    </a>
                                    <a class="skill laravel flex items-center justify-center p-4 rounded-full mb-1 mr-1" href="https://laravel.com/" target="_blank">
                                        <span class="sr-only">Laravel</span>
                                        <svg width="50" height="52" viewBox="0 0 50 52" class="text-indigo fill-current w-10 h-10 dark:text-indigo-light">
                                            <path d="M49.626 11.564a.809.809 0 0 1 .028.209v10.972a.8.8 0 0 1-.402.694l-9.209 5.302V39.25c0 .286-.152.55-.4.694L20.42 51.01c-.044.025-.092.041-.14.058-.018.006-.035.017-.054.022a.805.805 0 0 1-.41 0c-.022-.006-.042-.018-.063-.026-.044-.016-.09-.03-.132-.054L.402 39.944A.801.801 0 0 1 0 39.25V6.334c0-.072.01-.142.028-.21.006-.023.02-.044.028-.067.015-.042.029-.085.051-.124.015-.026.037-.047.055-.071.023-.032.044-.065.071-.093.023-.023.053-.04.079-.06.029-.024.055-.05.088-.069h.001l9.61-5.533a.802.802 0 0 1 .8 0l9.61 5.533h.002c.032.02.059.045.088.068.026.02.055.038.078.06.028.029.048.062.072.094.017.024.04.045.054.071.023.04.036.082.052.124.008.023.022.044.028.068a.809.809 0 0 1 .028.209v20.559l8.008-4.611v-10.51c0-.07.01-.141.028-.208.007-.024.02-.045.028-.068.016-.042.03-.085.052-.124.015-.026.037-.047.054-.071.024-.032.044-.065.072-.093.023-.023.052-.04.078-.06.03-.024.056-.05.088-.069h.001l9.611-5.533a.801.801 0 0 1 .8 0l9.61 5.533c.034.02.06.045.09.068.025.02.054.038.077.06.028.029.048.062.072.094.018.024.04.045.054.071.023.039.036.082.052.124.009.023.022.044.028.068zm-1.574 10.718v-9.124l-3.363 1.936-4.646 2.675v9.124l8.01-4.611zm-9.61 16.505v-9.13l-4.57 2.61-13.05 7.448v9.216l17.62-10.144zM1.602 7.719v31.068L19.22 48.93v-9.214l-9.204-5.209-.003-.002-.004-.002c-.031-.018-.057-.044-.086-.066-.025-.02-.054-.036-.076-.058l-.002-.003c-.026-.025-.044-.056-.066-.084-.02-.027-.044-.05-.06-.078l-.001-.003c-.018-.03-.029-.066-.042-.1-.013-.03-.03-.058-.038-.09v-.001c-.01-.038-.012-.078-.016-.117-.004-.03-.012-.06-.012-.09v-.002-21.481L4.965 9.654 1.602 7.72zm8.81-5.994L2.405 6.334l8.005 4.609 8.006-4.61-8.006-4.608zm4.164 28.764l4.645-2.674V7.719l-3.363 1.936-4.646 2.675v20.096l3.364-1.937zM39.243 7.164l-8.006 4.609 8.006 4.609 8.005-4.61-8.005-4.608zm-.801 10.605l-4.646-2.675-3.363-1.936v9.124l4.645 2.674 3.364 1.937v-9.124zM20.02 38.33l11.743-6.704 5.87-3.35-8-4.606-9.211 5.303-8.395 4.833 7.993 4.524z" fill="currentColor" fill-rule="evenodd" />
                                        </svg>
                                    </a>
                                    <a class="skill ror flex items-center justify-center p-4 rounded-full mb-1 mr-1" href="https://rubyonrails.org/" target="_blank">
                                        <span class="sr-only">Ruby on Rails</span>
                                        <svg viewBox="0 0 128 128" class="text-indigo fill-current w-10 dark:text-indigo-light">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M109.682 14.737c-12.206-6.023-24.708-6.636-37.508-2.111-11.779 4.164-21.175 11.615-28.16 21.763-11.819 17.172-20.404 35.909-25.215 56.263-2.464 10.417-4.06 21.466-3.631 32.224.035.873.165 1.124.251 3.124h60.366c-.173-2-.287-1.416-.437-1.797-3.175-8.106-5.689-16.666-7.428-25.198-2.498-12.251-3.806-24.729-1.226-37.093 3.611-17.313 13.48-29.805 30.117-36.283 9.424-3.667 18.369-2.624 26.214 4.262.072.063.22.025.412.056l2.565-3.883c-4.94-4.703-10.368-8.389-16.32-11.327zM3.336 94.394c-.46 3.923-.89 7.596-1.34 11.451l11.132 1.336 2.039-11.893c-4.055-.307-7.906-.598-11.831-.894zM25.186 60.208l-10.471-4.097-3.384 9.607 10.671 3.42c1.08-3.031 2.096-5.882 3.184-8.93zM74.605 113.867c3.575.266 7.157.449 11.103.679-1.433-2.979-2.706-5.673-4.039-8.335-.146-.289-.639-.568-.974-.573-3.033-.044-6.068-.025-9.291-.025.726 2.628 1.357 5.053 2.096 7.443.111.361.707.782 1.105.811zM42.933 31.103l-7.955-5.268c-2.132 2.383-4.188 4.68-6.359 7.105l8.178 5.496 6.136-7.333zM68.267 84.472c-.013.321.276.832.558.959 2.865 1.288 5.76 2.515 8.912 3.873-.131-2.492-.219-4.575-.368-6.654-.027-.374-.203-.912-.48-1.066-2.631-1.456-5.299-2.847-8.216-4.395-.159 2.665-.321 4.972-.406 7.283zM65.91 12.3l-5.446-6.181-7.499 3.898c1.876 2.286 3.647 4.443 5.455 6.644l7.49-4.361zM69.325 61.476c-.163.374.052 1.167.373 1.456 2.175 1.962 4.424 3.84 6.926 5.981.573-2.4 1.113-4.539 1.571-6.693.081-.383-.032-1.016-.298-1.23-1.946-1.569-3.955-3.063-6.037-4.651-.915 1.815-1.802 3.443-2.535 5.137zM81.775 9.052c2.78.075 5.563.042 8.499.042-.293-2.044-.433-3.593-.782-5.092-.104-.446-.775-1.04-1.228-1.078-2.787-.226-5.585-.313-8.651-.459.409 2.063.721 3.881 1.162 5.668.093.379.647.909 1 .919zM85.16 44.727c.142-.266.178-.749.029-.981-1.366-2.137-2.785-4.241-4.254-6.455l-4.76 4.372 6.582 7.294c.884-1.539 1.675-2.868 2.403-4.23zM90.295 30.2l2.843 5.281c4.449-2.438 4.875-3.32 3.3-6.834l-6.143 1.553zM111.582 13.927c1.851 1.142 3.806 2.115 5.792 3.185l1.33-2.07c-2.422-1.771-4.76-3.484-7.413-5.426-.104 1.104-.259 1.875-.219 2.637.032.581.129 1.44.51 1.674zM109 30.646c2 .217 5 .424 7 .643v-2.718c-2-.438-5-.872-7-1.323v3.398z">
                                            </path>
                                        </svg>
                                    </a>
                                    <a class="skill nodejs flex items-center justify-center p-4 rounded-full mb-1 mr-1" href="https://nodejs.org" target="_blank">
                                        <span class="sr-only">Node.js</span>
                                        <svg viewBox="0 0 128 128" class="text-indigo fill-current w-10 dark:text-indigo-light">
                                            <path d="M112.678 30.334l-44.143-25.605c-2.781-1.584-6.424-1.584-9.227 0l-44.488 25.605c-2.869 1.651-4.82 4.754-4.82 8.073v51.142c0 3.319 1.992 6.423 4.862 8.083l11.729 6.688c5.627 2.772 7.186 2.772 9.746 2.772 8.334 0 12.662-5.039 12.662-13.828v-50.49c.001-.713.446-1.774-.255-1.774h-5.622c-.712 0-2.122 1.061-2.122 1.773v50.49c0 3.896-3.616 7.773-10.202 4.48l-12.122-7.013c-.422-.23-.676-.693-.676-1.181v-51.142c0-.482.463-.966.891-1.213l44.378-25.561c.415-.235 1.002-.235 1.415 0l43.963 25.555c.421.253.354.722.354 1.219v51.142c0 .488.092.963-.323 1.198l-44.133 25.576c-.378.227-.87.227-1.285 0l-11.317-6.749c-.341-.198-.752-.269-1.08-.086-3.145 1.783-3.729 2.02-6.679 3.043-.727.253-1.799.692.408 1.929l14.798 8.754c1.416.82 3.027 1.246 4.647 1.246 1.642 0 3.249-.426 4.666-1.246l43.976-25.582c2.871-1.672 4.322-4.764 4.322-8.083v-51.142c-.001-3.319-1.452-6.414-4.323-8.073zM77.727 81.445c-11.727 0-14.309-3.235-15.17-9.066-.102-.628-.634-1.379-1.274-1.379h-5.73c-.709 0-1.28.86-1.28 1.566 0 7.466 4.06 16.512 23.454 16.512 14.038 0 22.088-5.455 22.088-15.109 0-9.572-6.467-12.084-20.082-13.886-13.762-1.819-15.16-2.738-15.16-5.962 0-2.658 1.184-6.203 11.374-6.203 9.104 0 12.46 1.954 13.841 8.091.119.577.646.991 1.241.991h5.754c.354 0 .691-.143.939-.396.241-.272.367-.613.336-.979-.893-10.569-7.913-15.494-22.112-15.494-12.632 0-20.166 5.334-20.166 14.275 0 9.698 7.497 12.378 19.622 13.577 14.505 1.422 15.633 3.542 15.633 6.395 0 4.956-3.978 7.067-13.308 7.067z">
                                            </path>
                                        </svg>
                                    </a>
                                    <a class="skill adonis flex items-center justify-center p-4 rounded-full mb-1 mr-1" href="https://adonisjs.com/" target="_blank">
                                        <span class="sr-only">AdonisJs</span>
                                        <svg viewBox="0 0 64 64" class="text-indigo fill-current w-10 h-10 dark:text-indigo-light" fill-rule="evenodd">
                                            <path d="M12.864 56.82h45.383l-22.7-45.26zm22.7-53.2L64 60.367H7.1z" fill-rule="nonzero" />
                                            <path d="M21.333 7.18l21.333 42.55H0z" />
                                        </svg>
                                    </a>
                                </div>
                            </div>
                            <div class="pl-2">
                                <div class="inline-block text-base text-grey-darker border-b border-dashed indigo-circle mb-1 dark:text-dark-secondary">
                                    Bases de données</div>
                                <div class="flex flex-wrap">
                                    <a class="skill mysql flex items-center justify-center p-4 rounded-full mb-1 mr-1" href="https://www.mysql.com" target="_blank">
                                        <span class="sr-only">MySQL</span>
                                        <svg viewBox="0 0 128 128" class="text-indigo fill-current w-10 dark:text-indigo-light">
                                            <path d="M125.477 122.783l-2.616-2.537c-2.479-3.292-5.668-6.184-9.015-8.585-2.669-1.916-8.661-4.504-9.775-7.609l-.205-.195c1.893-.214 4.103-.898 5.85-1.367 2.934-.786 5.356-.583 8.386-1.365 1.366-.39 2.899-.781 3.899-1.171v-.78c-1-1.571-2.427-3.651-4.097-5.073-4.369-3.72-9.041-7.437-13.951-10.537-2.723-1.718-6.041-2.835-8.926-4.292-.971-.491-2.652-.746-3.294-1.562-1.517-1.932-2.328-4.382-3.498-6.633-2.449-4.717-4.849-9.868-7.019-14.831-1.48-3.384-2.443-6.72-4.289-9.756-8.86-14.567-18.395-23.358-33.167-32-3.145-1.838-6.929-2.563-10.929-3.513-2.144-.129-4.291-.26-6.437-.391-1.311-.546-2.674-2.149-3.902-2.927-4.896-3.092-17.449-9.817-21.074-.975-2.289 5.581 3.42 11.025 5.462 13.854 1.435 1.982 3.27 4.207 4.293 6.438.675 1.467.79 2.938 1.367 4.489 1.418 3.822 2.651 7.98 4.487 11.511.927 1.788 1.949 3.67 3.122 5.268.718.981 1.95 1.413 2.145 2.927-1.204 1.686-1.273 4.304-1.95 6.44-3.05 9.615-1.898 21.567 2.537 28.683 1.36 2.186 4.566 6.871 8.975 5.073 3.856-1.57 3.226-6.438 4.329-10.732.249-.972-.185-1.688.815-2.341v.195c1 2.341 2.11 4.683 3.282 7.024 2.6 4.187 6.889 8.562 10.798 11.514 2.027 1.531 3.92 4.177 5.92 5.073v-.101h.221c-.507-1-1.302-1.167-1.95-1.804-1.527-1.496-3.226-3.382-4.487-5.097-3.556-4.827-6.698-10.122-9.561-15.622-1.368-2.626-2.557-5.529-3.709-8.201-.443-1.03-.438-2.592-1.364-3.125-1.263 1.958-3.122 3.54-4.099 5.853-1.561 3.696-1.762 8.204-2.341 12.877-.343.122-.19.038-.391.194-2.718-.655-3.672-3.452-4.683-5.853-2.555-6.07-3.029-15.843-.781-22.829.582-1.809 3.211-7.501 2.146-9.172-.508-1.665-2.184-2.63-3.121-3.903-1.161-1.574-2.319-3.646-3.123-5.464-2.091-4.731-3.066-10.044-5.268-14.828-1.053-2.287-2.832-4.602-4.293-6.634-1.617-2.253-3.429-3.912-4.684-6.635-.445-.968-1.051-2.518-.39-3.513.21-.671.507-.951 1.171-1.17 1.133-.873 4.283.29 5.463.779 3.129 1.3 5.741 2.5 8.392 4.256 1.271.844 2.559 1.89 4.097 2.89h1.756c2.747 0 5.824.232 8.391 1.012 4.535 1.379 8.6 3.542 12.292 5.873 11.246 7.102 20.441 17.22 26.732 29.278 1.012 1.942 1.45 3.799 2.341 5.858 1.798 4.153 4.064 8.428 5.853 12.489 1.786 4.053 3.526 8.142 6.05 11.514 1.327 1.772 6.451 2.724 8.78 3.709 1.633.689 4.308 1.409 5.854 2.34 2.953 1.782 5.814 3.904 8.586 5.855 1.384.974 5.64 3.114 5.853 4.878-6.863-.188-12.104.452-16.585 2.341-1.273.537-3.305.552-3.513 2.147.7.733.809 1.829 1.365 2.731 1.069 1.73 2.876 4.052 4.488 5.268 1.762 1.33 3.576 2.751 5.464 3.902 3.359 2.047 7.107 3.217 10.341 5.268 1.906 1.21 3.958 2.733 5.815 4.097.92.675.891 1.724 2.891 2.147v-.194c-.999-.795-.946-1.893-1.522-2.728zM29.514 23.465c-1.431-.027-2.514.157-3.514.389v.146h.198c.683 1 1.888 2.33 2.731 3.538l1.952 4.108.193-.187c1.209-.853 1.763-2.211 1.756-4.291-.483-.509-.556-1.146-.974-1.754-.558-.809-1.639-1.268-2.342-1.949z">
                                            </path>
                                        </svg>
                                    </a>
                                    <a class="skill postgres flex items-center justify-center p-4 rounded-full mb-1 mr-1" href="https://www.postgresql.org/" target="_blank">
                                        <span class="sr-only">PostgreSQL</span>
                                        <svg viewBox="0 0 128 128" class="text-indigo fill-current w-10 dark:text-indigo-light">
                                            <path d="M93.809 92.112c.785-6.533.55-7.492 5.416-6.433l1.235.108c3.742.17 8.637-.602 11.513-1.938 6.191-2.873 9.861-7.668 3.758-6.409-13.924 2.873-14.881-1.842-14.881-1.842 14.703-21.815 20.849-49.508 15.543-56.287-14.47-18.489-39.517-9.746-39.936-9.52l-.134.025c-2.751-.571-5.83-.912-9.289-.968-6.301-.104-11.082 1.652-14.709 4.402 0 0-44.683-18.409-42.604 23.151.442 8.841 12.672 66.898 27.26 49.362 5.332-6.412 10.484-11.834 10.484-11.834 2.558 1.699 5.622 2.567 8.834 2.255l.249-.212c-.078.796-.044 1.575.099 2.497-3.757 4.199-2.653 4.936-10.166 6.482-7.602 1.566-3.136 4.355-.221 5.084 3.535.884 11.712 2.136 17.238-5.598l-.22.882c1.474 1.18 1.375 8.477 1.583 13.69.209 5.214.558 10.079 1.621 12.948 1.063 2.868 2.317 10.256 12.191 8.14 8.252-1.764 14.561-4.309 15.136-27.985"></path>
                                            <path d="M75.458 125.256c-4.367 0-7.211-1.689-8.938-3.32-2.607-2.46-3.641-5.629-4.259-7.522l-.267-.79c-1.244-3.358-1.666-8.193-1.916-14.419-.038-.935-.064-1.898-.093-2.919-.021-.747-.047-1.684-.085-2.664-1.553.742-3.213 1.27-4.962 1.568-3.079.526-6.389.356-9.84-.507-2.435-.609-4.965-1.871-6.407-3.82-4.203 3.681-8.212 3.182-10.396 2.453-3.853-1.285-7.301-4.896-10.542-11.037-2.309-4.375-4.542-10.075-6.638-16.943-3.65-11.96-5.969-24.557-6.175-28.693-.648-12.945 2.837-22.203 10.356-27.514 11.861-8.378 29.832-3.451 36.384-1.214 4.402-2.653 9.581-3.944 15.433-3.851 3.143.051 6.136.327 8.916.823 2.9-.912 8.628-2.221 15.185-2.139 12.081.144 22.092 4.852 28.949 13.615 4.894 6.252 2.474 19.381.597 26.651-2.642 10.226-7.271 21.102-12.957 30.57 1.544.011 3.781-.174 6.961-.831 6.274-1.295 8.109 2.069 8.607 3.575 1.995 6.042-6.677 10.608-9.382 11.864-3.466 1.609-9.117 2.589-13.745 2.377l-.202-.013-1.216-.107-.12 1.014-.116.991c-.311 11.999-2.025 19.598-5.552 24.619-3.697 5.264-8.835 6.739-13.361 7.709-1.544.33-2.947.474-4.219.474zm-9.19-43.671c2.819 2.256 3.066 6.501 3.287 14.434.028.99.054 1.927.089 2.802.106 2.65.355 8.855 1.327 11.477.137.371.26.747.39 1.146 1.083 3.316 1.626 4.979 6.309 3.978 3.931-.843 5.952-1.599 7.534-3.851 2.299-3.274 3.585-9.86 3.821-19.575l4.783.116-4.75-.57.14-1.186c.455-3.91.783-6.734 3.396-8.602 2.097-1.498 4.486-1.353 6.389-1.01-2.091-1.58-2.669-3.433-2.823-4.193l-.399-1.965 1.121-1.663c6.457-9.58 11.781-21.354 14.609-32.304 2.906-11.251 2.02-17.226 1.134-18.356-11.729-14.987-32.068-8.799-34.192-8.097l-.359.194-1.8.335-.922-.191c-2.542-.528-5.366-.82-8.393-.869-4.756-.08-8.593 1.044-11.739 3.431l-2.183 1.655-2.533-1.043c-5.412-2.213-21.308-6.662-29.696-.721-4.656 3.298-6.777 9.76-6.305 19.207.156 3.119 2.275 14.926 5.771 26.377 4.831 15.825 9.221 21.082 11.054 21.693.32.108 1.15-.537 1.976-1.529 5.37-6.459 10.479-11.844 10.694-12.07l2.77-2.915 3.349 2.225c1.35.897 2.839 1.406 4.368 1.502l7.987-6.812-1.157 11.808c-.026.265-.039.626.065 1.296l.348 2.238-1.51 1.688-.174.196 4.388 2.025 1.836-2.301z"></path>
                                            <path fill="currentColor" d="M115.731 77.44c-13.925 2.873-14.882-1.842-14.882-1.842 14.703-21.816 20.849-49.51 15.545-56.287-14.47-18.488-39.519-9.745-39.937-9.518l-.135.024c-2.751-.571-5.83-.911-9.291-.967-6.301-.103-11.08 1.652-14.707 4.402 0 0-44.684-18.408-42.606 23.151.442 8.842 12.672 66.899 27.26 49.363 5.332-6.412 10.483-11.834 10.483-11.834 2.559 1.699 5.622 2.567 8.833 2.255l.25-.212c-.078.796-.042 1.575.1 2.497-3.758 4.199-2.654 4.936-10.167 6.482-7.602 1.566-3.136 4.355-.22 5.084 3.534.884 11.712 2.136 17.237-5.598l-.221.882c1.473 1.18 2.507 7.672 2.334 13.557-.174 5.885-.29 9.926.871 13.082 1.16 3.156 2.316 10.256 12.192 8.14 8.252-1.768 12.528-6.351 13.124-13.995.422-5.435 1.377-4.631 1.438-9.49l.767-2.3c.884-7.367.14-9.743 5.225-8.638l1.235.108c3.742.17 8.639-.602 11.514-1.938 6.19-2.871 9.861-7.667 3.758-6.408z"></path>
                                            <path fill="#fff" d="M75.957 122.307c-8.232 0-10.84-6.519-11.907-9.185-1.562-3.907-1.899-19.069-1.551-31.503.024-.881.754-1.577 1.64-1.55.881.024 1.575.758 1.55 1.639-.401 14.341.168 27.337 1.324 30.229 1.804 4.509 4.54 8.453 12.275 6.796 7.343-1.575 10.093-4.359 11.318-11.46.94-5.449 2.799-20.951 3.028-24.01.066-.878.828-1.539 1.71-1.472.878.066 1.537.832 1.472 1.71-.239 3.185-2.089 18.657-3.065 24.315-1.446 8.387-5.185 12.191-13.794 14.037-1.463.313-2.792.453-4 .454zM31.321 90.466c-.785 0-1.498-.145-2.116-.35-5.347-1.784-10.44-10.492-15.138-25.885-3.576-11.717-5.842-23.947-6.041-27.922-.589-11.784 2.445-20.121 9.02-24.778 13.007-9.216 34.888-.44 35.813-.062.815.333 1.207 1.265.873 2.081-.333.815-1.265 1.206-2.08.874-.211-.086-21.193-8.492-32.768-.285-5.622 3.986-8.203 11.392-7.672 22.011.167 3.349 2.284 15.285 5.906 27.149 4.194 13.742 8.967 22.413 13.096 23.79.648.216 2.62.873 5.439-2.517 5.305-6.382 10.178-11.476 10.227-11.526.61-.636 1.62-.657 2.256-.047.636.61.658 1.62.048 2.255-.048.05-4.847 5.067-10.077 11.359-2.477 2.979-4.851 3.853-6.786 3.853zM100.75 77.021c-.307 0-.617-.088-.891-.272-.73-.493-.924-1.484-.431-2.215 14.863-22.055 20.08-48.704 15.612-54.414-5.624-7.186-13.565-10.939-23.604-11.156-7.433-.16-13.341 1.738-14.307 2.069l-.243.099c-.971.305-1.716-.227-1.997-.849-.333-.736-.06-1.606.631-2.025.046-.027.192-.089.429-.176l-.021.006.021-.007c1.641-.601 7.639-2.4 15.068-2.315 11.108.118 20.284 4.401 26.534 12.388 2.957 3.779 2.964 12.485.019 23.887-3.002 11.625-8.651 24.118-15.497 34.277-.306.457-.81.703-1.323.703zM101.51 87.231c-2.538 0-4.813-.358-6.175-1.174-1.4-.839-1.667-1.979-1.702-2.584-.382-6.71 3.32-7.878 5.208-8.411-.263-.398-.637-.866-1.024-1.349-1.101-1.376-2.609-3.26-3.771-6.078-.182-.44-.752-1.463-1.412-2.648-3.579-6.418-11.026-19.773-6.242-26.612 2.214-3.165 6.623-4.411 13.119-3.716-1.911-5.822-11.011-24.034-32.604-24.388-6.494-.108-11.82 1.889-15.822 5.93-8.96 9.049-8.636 25.422-8.631 25.586.023.881-.672 1.614-1.553 1.637-.881.028-1.613-.672-1.637-1.553-.02-.727-.354-17.909 9.554-27.916 4.637-4.683 10.741-6.995 18.142-6.874 13.814.227 22.706 7.25 27.732 13.101 5.479 6.377 8.165 13.411 8.386 15.759.165 1.746-1.088 2.095-1.341 2.147l-.576.013c-6.375-1.021-10.465-.312-12.156 2.104-3.639 5.201 3.406 17.834 6.414 23.229.768 1.376 1.322 2.371 1.576 2.985.988 2.396 2.277 4.006 3.312 5.3.911 1.138 1.7 2.125 1.982 3.283.131.23 1.99 2.98 13.021.703 2.765-.57 4.423-.083 4.93 1.45.997 3.015-4.597 6.532-7.694 7.97-2.775 1.29-7.204 2.106-11.036 2.106zm-4.696-4.021c.35.353 2.101.962 5.727.806 3.224-.138 6.624-.839 8.664-1.786 2.609-1.212 4.351-2.567 5.253-3.492l-.5.092c-7.053 1.456-12.042 1.262-14.828-.577-.199-.131-.378-.267-.54-.401-.302.119-.581.197-.78.253-1.58.443-3.214.902-2.996 5.105zM51.252 92.125c-1.752 0-3.596-.239-5.479-.71-1.951-.488-5.24-1.957-5.19-4.37.057-2.707 3.994-3.519 5.476-3.824 5.354-1.103 5.703-1.545 7.376-3.67.488-.619 1.095-1.39 1.923-2.314 1.229-1.376 2.572-2.073 3.992-2.073.989 0 1.8.335 2.336.558 1.708.708 3.133 2.42 3.719 4.467.529 1.847.276 3.625-.71 5.006-3.237 4.533-7.886 6.93-13.443 6.93zm-7.222-4.943c.481.372 1.445.869 2.518 1.137 1.631.408 3.213.615 4.705.615 4.546 0 8.196-1.882 10.847-5.594.553-.774.387-1.757.239-2.274-.31-1.083-1.08-2.068-1.873-2.397-.43-.178-.787-.314-1.115-.314-.176 0-.712 0-1.614 1.009-.762.851-1.311 1.548-1.794 2.162-2.084 2.646-3.039 3.544-9.239 4.821-1.513.31-2.289.626-2.674.835zM56.299 79.822c-.774 0-1.454-.565-1.575-1.354-.04-.265-.066-.531-.08-.799-4.064-.076-7.985-1.82-10.962-4.926-3.764-3.927-5.477-9.368-4.699-14.927.845-6.037.529-11.366.359-14.229-.047-.796-.081-1.371-.079-1.769.003-.505.013-1.844 4.489-4.113 1.592-.807 4.784-2.215 8.271-2.576 5.777-.597 9.585 1.976 10.725 7.246 3.077 14.228.244 20.521-1.825 25.117-.385.856-.749 1.664-1.04 2.447l-.257.69c-1.093 2.931-2.038 5.463-1.748 7.354.134.871-.464 1.685-1.335 1.819l-.244.02zm-13.835-37.562l.062 1.139c.176 2.974.504 8.508-.384 14.86-.641 4.585.759 9.06 3.843 12.276 2.437 2.542 5.644 3.945 8.94 3.945h.068c.369-1.555.982-3.197 1.642-4.966l.255-.686c.329-.884.714-1.74 1.122-2.646 1.991-4.424 4.47-9.931 1.615-23.132-.565-2.615-1.936-4.128-4.189-4.627-4.628-1.022-11.525 2.459-12.974 3.837zM52.094 41.583c-.08.564 1.033 2.07 2.485 2.271 1.449.203 2.689-.975 2.768-1.539.079-.564-1.033-1.186-2.485-1.388-1.451-.202-2.691.092-2.768.656zM54.912 44.409l-.407-.028c-.9-.125-1.81-.692-2.433-1.518-.219-.29-.576-.852-.505-1.354.101-.736.999-1.177 2.4-1.177.313 0 .639.023.967.069.766.106 1.477.327 2.002.62.91.508.977 1.075.936 1.368-.112.813-1.405 2.02-2.96 2.02zm-2.289-2.732c.045.348.907 1.496 2.029 1.651l.261.018c1.036 0 1.81-.815 1.901-1.082-.096-.182-.762-.634-2.025-.81-.28-.04-.556-.059-.821-.059-.812 0-1.243.183-1.345.282zM96.228 40.432c.079.564-1.033 2.07-2.484 2.272-1.45.202-2.691-.975-2.771-1.539-.076-.564 1.036-1.187 2.486-1.388 1.45-.203 2.689.092 2.769.655zM93.409 42.992c-1.396 0-2.601-1.086-2.7-1.791-.115-.846 1.278-1.489 2.712-1.688.316-.044.629-.066.93-.066 1.238 0 2.058.363 2.14.949.053.379-.238.964-.739 1.492-.331.347-1.026.948-1.973 1.079l-.37.025zm.943-3.013c-.276 0-.564.021-.856.061-1.441.201-2.301.779-2.259 1.089.048.341.968 1.332 2.173 1.332l.297-.021c.787-.109 1.378-.623 1.66-.919.443-.465.619-.903.598-1.052-.028-.198-.56-.49-1.613-.49zM98.317 72.822c-.305 0-.613-.088-.886-.27-.732-.49-.929-1.481-.438-2.213 3.398-5.075 2.776-10.25 2.175-15.255-.257-2.132-.521-4.337-.453-6.453.07-2.177.347-3.973.614-5.71.317-2.058.617-4.002.493-6.31-.048-.88.627-1.631 1.507-1.679.883-.047 1.632.627 1.679 1.507.142 2.638-.197 4.838-.525 6.967-.253 1.643-.515 3.342-.578 5.327-.061 1.874.178 3.864.431 5.97.64 5.322 1.365 11.354-2.691 17.411-.308.459-.813.708-1.328.708z"></path>
                                            <path stroke="#fff" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" d="M4.335 19.029" fill="none"></path>
                                        </svg>
                                    </a>
                                    <a class="skill mongo flex items-center justify-center p-4 rounded-full mb-1 mr-1" href="https://www.mongodb.com/" target="_blank">
                                        <span class="sr-only">MongoDB</span>
                                        <svg viewBox="0 0 128 128" class="text-indigo fill-current w-10 dark:text-indigo-light">
                                            <path fill-rule="evenodd" clip-rule="evenodd" fill="currentColor" d="M88.038 42.812c1.605 4.643 2.761 9.383 3.141 14.296.472 6.095.256 12.147-1.029 18.142-.035.165-.109.32-.164.48-.403.001-.814-.049-1.208.012-3.329.523-6.655 1.065-9.981 1.604-3.438.557-6.881 1.092-10.313 1.687-1.216.21-2.721-.041-3.212 1.641-.014.046-.154.054-.235.08l.166-10.051c-.057-8.084-.113-16.168-.169-24.252l1.602-.275c2.62-.429 5.24-.864 7.862-1.281 3.129-.497 6.261-.98 9.392-1.465 1.381-.215 2.764-.412 4.148-.618z"></path>
                                            <path fill-rule="evenodd" clip-rule="evenodd" fill="currentColor" d="M61.729 110.054c-1.69-1.453-3.439-2.842-5.059-4.37-8.717-8.222-15.093-17.899-18.233-29.566-.865-3.211-1.442-6.474-1.627-9.792-.13-2.322-.318-4.665-.154-6.975.437-6.144 1.325-12.229 3.127-18.147l.099-.138c.175.233.427.439.516.702 1.759 5.18 3.505 10.364 5.242 15.551 5.458 16.3 10.909 32.604 16.376 48.9.107.318.384.579.583.866l-.87 2.969z"></path>
                                            <path fill-rule="evenodd" clip-rule="evenodd" fill="currentColor" d="M88.038 42.812c-1.384.206-2.768.403-4.149.616-3.131.485-6.263.968-9.392 1.465-2.622.417-5.242.852-7.862 1.281l-1.602.275-.012-1.045c-.053-.859-.144-1.717-.154-2.576-.069-5.478-.112-10.956-.18-16.434-.042-3.429-.105-6.857-.175-10.285-.043-2.13-.089-4.261-.185-6.388-.052-1.143-.236-2.28-.311-3.423-.042-.657.016-1.319.029-1.979.817 1.583 1.616 3.178 2.456 4.749 1.327 2.484 3.441 4.314 5.344 6.311 7.523 7.892 12.864 17.068 16.193 27.433z"></path>
                                            <path fill-rule="evenodd" clip-rule="evenodd" fill="currentColor" d="M65.036 80.753c.081-.026.222-.034.235-.08.491-1.682 1.996-1.431 3.212-1.641 3.432-.594 6.875-1.13 10.313-1.687 3.326-.539 6.652-1.081 9.981-1.604.394-.062.805-.011 1.208-.012-.622 2.22-1.112 4.488-1.901 6.647-.896 2.449-1.98 4.839-3.131 7.182-1.72 3.503-3.863 6.77-6.353 9.763-1.919 2.308-4.058 4.441-6.202 6.548-1.185 1.165-2.582 2.114-3.882 3.161l-.337-.23-1.214-1.038-1.256-2.753c-.865-3.223-1.319-6.504-1.394-9.838l.023-.561.171-2.426c.057-.828.133-1.655.168-2.485.129-2.982.241-5.964.359-8.946z"></path>
                                            <path fill-rule="evenodd" clip-rule="evenodd" fill="currentColor" d="M65.036 80.753c-.118 2.982-.23 5.964-.357 8.947-.035.83-.111 1.657-.168 2.485l-.765.289c-1.699-5.002-3.399-9.951-5.062-14.913-2.75-8.209-5.467-16.431-8.213-24.642-2.217-6.628-4.452-13.249-6.7-19.867-.105-.31-.407-.552-.617-.826l4.896-9.002c.168.292.39.565.496.879 2.265 6.703 4.526 13.407 6.768 20.118 2.916 8.73 5.814 17.467 8.728 26.198.116.349.308.671.491 1.062l.67-.78c-.056 3.351-.112 6.701-.167 10.052z"></path>
                                            <path fill-rule="evenodd" clip-rule="evenodd" fill="currentColor" d="M43.155 32.227c.21.274.511.516.617.826 2.248 6.618 4.483 13.239 6.7 19.867 2.746 8.211 5.463 16.433 8.213 24.642 1.662 4.961 3.362 9.911 5.062 14.913l.765-.289-.171 2.426-.155.559c-.266 2.656-.49 5.318-.814 7.968-.163 1.328-.509 2.632-.772 3.947-.198-.287-.476-.548-.583-.866-5.467-16.297-10.918-32.6-16.376-48.9-1.737-5.187-3.483-10.371-5.242-15.551-.089-.263-.34-.469-.516-.702 1.09-2.947 2.181-5.894 3.272-8.84z"></path>
                                            <path fill-rule="evenodd" clip-rule="evenodd" fill="currentColor" d="M65.202 70.702l-.67.78c-.183-.391-.375-.714-.491-1.062-2.913-8.731-5.812-17.468-8.728-26.198-2.242-6.711-4.503-13.415-6.768-20.118-.105-.314-.327-.588-.496-.879l6.055-7.965c.191.255.463.482.562.769 1.681 4.921 3.347 9.848 5.003 14.778 1.547 4.604 3.071 9.215 4.636 13.813.105.308.47.526.714.786l.012 1.045c.058 8.082.115 16.167.171 24.251z"></path>
                                            <path fill-rule="evenodd" clip-rule="evenodd" fill="currentColor" d="M65.021 45.404c-.244-.26-.609-.478-.714-.786-1.565-4.598-3.089-9.209-4.636-13.813-1.656-4.93-3.322-9.856-5.003-14.778-.099-.287-.371-.514-.562-.769 1.969-1.928 3.877-3.925 5.925-5.764 1.821-1.634 3.285-3.386 3.352-5.968.003-.107.059-.214.145-.514l.519 1.306c-.013.661-.072 1.322-.029 1.979.075 1.143.259 2.28.311 3.423.096 2.127.142 4.258.185 6.388.069 3.428.132 6.856.175 10.285.067 5.478.111 10.956.18 16.434.008.861.098 1.718.152 2.577z"></path>
                                            <path fill-rule="evenodd" clip-rule="evenodd" fill="#A9AA88" d="M62.598 107.085c.263-1.315.609-2.62.772-3.947.325-2.649.548-5.312.814-7.968l.066-.01.066.011c.075 3.334.529 6.615 1.394 9.838-.176.232-.425.439-.518.701-.727 2.05-1.412 4.116-2.143 6.166-.1.28-.378.498-.574.744l-.747-2.566.87-2.969z"></path>
                                            <path fill-rule="evenodd" clip-rule="evenodd" fill="#B6B598" d="M62.476 112.621c.196-.246.475-.464.574-.744.731-2.05 1.417-4.115 2.143-6.166.093-.262.341-.469.518-.701l1.255 2.754c-.248.352-.59.669-.728 1.061l-2.404 7.059c-.099.283-.437.483-.663.722l-.695-3.985z"></path>
                                            <path fill-rule="evenodd" clip-rule="evenodd" fill="#C2C1A7" d="M63.171 116.605c.227-.238.564-.439.663-.722l2.404-7.059c.137-.391.48-.709.728-1.061l1.215 1.037c-.587.58-.913 1.25-.717 2.097l-.369 1.208c-.168.207-.411.387-.494.624-.839 2.403-1.64 4.819-2.485 7.222-.107.305-.404.544-.614.812-.109-1.387-.22-2.771-.331-4.158z"></path>
                                            <path fill-rule="evenodd" clip-rule="evenodd" fill="#CECDB7" d="M63.503 120.763c.209-.269.506-.508.614-.812.845-2.402 1.646-4.818 2.485-7.222.083-.236.325-.417.494-.624l-.509 5.545c-.136.157-.333.294-.398.477-.575 1.614-1.117 3.24-1.694 4.854-.119.333-.347.627-.525.938-.158-.207-.441-.407-.454-.623-.051-.841-.016-1.688-.013-2.533z"></path>
                                            <path fill-rule="evenodd" clip-rule="evenodd" fill="#DBDAC7" d="M63.969 123.919c.178-.312.406-.606.525-.938.578-1.613 1.119-3.239 1.694-4.854.065-.183.263-.319.398-.477l.012 3.64-1.218 3.124-1.411-.495z"></path>
                                            <path fill-rule="evenodd" clip-rule="evenodd" fill="#EBE9DC" d="M65.38 124.415l1.218-3.124.251 3.696-1.469-.572z"></path>
                                            <path fill-rule="evenodd" clip-rule="evenodd" fill="#CECDB7" d="M67.464 110.898c-.196-.847.129-1.518.717-2.097l.337.23-1.054 1.867z"></path>
                                            <path fill-rule="evenodd" clip-rule="evenodd" fill="#4FAA41" d="M64.316 95.172l-.066-.011-.066.01.155-.559-.023.56z"></path>
                                        </svg>
                                    </a>
                                    <a class="skill redis flex items-center justify-center p-4 rounded-full mb-1 mr-1" href="https://www.postgresql.org/" target="_blank">
                                        <span class="sr-only">Redis</span>
                                        <svg viewBox="0 0 128 128" class="text-indigo fill-current w-10 dark:text-indigo-light">
                                            <g fill="currentColor">
                                                <path d="M6.2 52.7c6.7 3.2 43.7 18.1 49.5 20.9 5.8 2.8 10 2.8 17.4-1 7.4-3.9 42.2-18.1 48.9-21.6 3.4-1.8 4.9-3.2 4.9-4.4v-12.5c0-1.3-1.7-2.4-5-3.6-6.5-2.4-41.1-16.1-47.7-18.6-6.6-2.4-9.3-2.3-17.1.5-7.8 2.8-44.5 17.2-51.1 19.8-3.2 1.3-5 2.4-5 3.7h-.2v12.7c.2 1.2 2.1 2.5 5.4 4.1zm60.4 1.8l-20.3-8.4 29.1-4.5-8.8 12.9zm44.1-20l-17.2 6.8-1.9.7-17.2-6.8 19.1-7.5 17.2 6.8zm-50.6-12.5l-2.8-5.2 8.8 3.4 8.3-2.7-2.2 5.4 8.4 3.2-10.9 1.1-2.4 5.9-3.9-6.5-12.6-1.1 9.3-3.5zm-21.7 7.3c8.6 0 15.6 2.7 15.6 6s-7 6-15.6 6-15.6-2.7-15.6-6 7-6 15.6-6zM122 59.8c-6.7 3.5-41.4 17.8-48.8 21.6-7.4 3.9-11.5 3.8-17.3 1-5.8-2.8-43-17.7-49.6-20.9-3.4-1.6-5.3-2.9-5.3-4.2v12.7c0 1.3 1.9 2.6 5.2 4.2 6.7 3.2 43.7 18.1 49.5 20.9 5.8 2.8 10 2.8 17.4-1 7.4-3.9 42.2-18.1 48.9-21.6 3.4-1.8 4.9-3.2 4.9-4.4v-12.5c0 1.1-1.6 2.5-4.9 4.2zM122 80.5c-6.7 3.5-41.4 17.8-48.8 21.6-7.4 3.9-11.5 3.8-17.3 1-5.8-2.8-43-17.7-49.6-20.9-3.4-1.5-5.3-2.9-5.3-4.2v12.7c0 1.3 1.9 2.6 5.2 4.2 6.7 3.2 43.7 18.1 49.5 20.9 5.8 2.8 10 2.8 17.4-1 7.4-3.9 42.2-18.1 48.9-21.6 3.4-1.8 4.9-3.2 4.9-4.4v-12.5c0 1.2-1.6 2.5-4.9 4.2z"></path>
                                            </g>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div> <!-- ./Web-->

                        <div class="px-4 py-2 bg-grey-lightest my-2 border border-grey-lighter rounded-lg dark:bg-dark-3 dark:border-transparent dark:shadow-md">
                            <div class="text-lg">Développement</div>
                            <div class="pl-2">
                                <div class="flex flex-wrap">
                                    <a class="skill java flex items-center justify-center p-4 rounded-full mb-1 mr-1" href="https://docs.oracle.com/javase/7/docs/technotes/guides/language/index.html" target="_blank">
                                        <span class="sr-only">Java</span>
                                        <svg viewBox="0 0 128 128" class="text-indigo fill-current w-10 dark:text-indigo-light">
                                            <path d="M47.617 98.12c-19.192 5.362 11.677 16.439 36.115 5.969-4.003-1.556-6.874-3.351-6.874-3.351-10.897 2.06-15.952 2.222-25.844 1.092-8.164-.935-3.397-3.71-3.397-3.71zM80.806 87.66c-14.444 2.779-22.787 2.69-33.354 1.6-8.171-.845-2.822-4.805-2.822-4.805-21.137 7.016 11.767 14.977 41.309 6.336-3.14-1.106-5.133-3.131-5.133-3.131zM92.125 27.085c.001 0-42.731 10.669-22.323 34.187 6.024 6.935-1.58 13.17-1.58 13.17s15.289-7.891 8.269-17.777c-6.559-9.215-11.587-13.793 15.634-29.58zM102.123 108.229s3.529 2.91-3.888 5.159c-14.102 4.272-58.706 5.56-71.095.171-4.45-1.938 3.899-4.625 6.526-5.192 2.739-.593 4.303-.485 4.303-.485-4.952-3.487-32.013 6.85-13.742 9.815 49.821 8.076 90.817-3.637 77.896-9.468zM85 77.896c2.395-1.634 5.703-3.053 5.703-3.053s-9.424 1.685-18.813 2.474c-11.494.964-23.823 1.154-30.012.326-14.652-1.959 8.033-7.348 8.033-7.348s-8.812-.596-19.644 4.644c-12.812 6.195 31.691 9.019 54.733 2.957zM90.609 93.041c-.108.29-.468.616-.468.616 31.273-8.221 19.775-28.979 4.822-23.725-1.312.464-2 1.543-2 1.543s.829-.334 2.678-.72c7.559-1.575 18.389 10.119-5.032 22.286zM64.181 70.069c-4.614-10.429-20.26-19.553.007-35.559 25.271-19.947 12.304-32.923 12.304-32.923 5.23 20.608-18.451 26.833-26.999 39.667-5.821 8.745 2.857 18.142 14.688 28.815zM91.455 121.817c-19.187 3.612-42.854 3.191-56.887.874 0 0 2.874 2.38 17.646 3.331 22.476 1.437 57-.8 57.816-11.436.001 0-1.57 4.032-18.575 7.231z">
                                            </path>
                                        </svg>
                                    </a>
                                    <a class="skill csharp flex items-center justify-center p-4 rounded-full mb-1 mr-1" href="https://docs.microsoft.com/en-us/dotnet/csharp/index" target="_blank">
                                        <span class="sr-only">C#</span>
                                        <svg viewBox="0 0 128 128" class="text-indigo fill-current w-10 dark:text-indigo-light">
                                            <path d="M117.5 33.5l.3-.2c-.6-1.1-1.5-2.1-2.4-2.6l-48.3-27.8c-.8-.5-1.9-.7-3.1-.7-1.2 0-2.3.3-3.1.7l-48 27.9c-1.7 1-2.9 3.5-2.9 5.4v55.7c0 1.1.2 2.3.9 3.4l-.2.1c.5.8 1.2 1.5 1.9 1.9l48.2 27.9c.8.5 1.9.7 3.1.7 1.2 0 2.3-.3 3.1-.7l48-27.9c1.7-1 2.9-3.5 2.9-5.4v-55.8c.1-.8 0-1.7-.4-2.6zm-53.5 70c-21.8 0-39.5-17.7-39.5-39.5s17.7-39.5 39.5-39.5c14.7 0 27.5 8.1 34.3 20l-13 7.5c-4.2-7.5-12.2-12.5-21.3-12.5-13.5 0-24.5 11-24.5 24.5s11 24.5 24.5 24.5c9.1 0 17.1-5 21.3-12.4l12.9 7.6c-6.8 11.8-19.6 19.8-34.2 19.8zm51-41.5h-3.2l-.9 4h4.1v5h-5l-1.2 6h-4.9l1.2-6h-3.8l-1.2 6h-4.8l1.2-6h-2.5v-5h3.5l.9-4h-4.4v-5h5.3l1.2-6h4.9l-1.2 6h3.8l1.2-6h4.8l-1.2 6h2.2v5zM102.3 66h3.8l.9-4h-3.8z">
                                            </path>
                                        </svg>
                                    </a>
                                    <a class="skill typescript flex items-center justify-center p-4 rounded-full mb-1 mr-1" href="https://www.typescriptlang.org/" target="_blank">
                                        <span class="sr-only">TypeScript</span>
                                        <svg viewBox="0 0 128 128" class="text-indigo fill-current w-10 dark:text-indigo-light">
                                            <g id="original">
                                                <rect fill="transparent" x="22.67" y="47" width="99.67" height="73.67"></rect>
                                                <path id="original-2" data-name="original" fill="currentColor" d="M1.5,63.91v62.5h125V1.41H1.5Zm100.73-5a15.56,15.56,0,0,1,7.82,4.5,20.58,20.58,0,0,1,3,4c0,.16-5.4,3.81-8.69,5.85-.12.08-.6-.44-1.13-1.23a7.09,7.09,0,0,0-5.87-3.53c-3.79-.26-6.23,1.73-6.21,5a4.58,4.58,0,0,0,.54,2.34c.83,1.73,2.38,2.76,7.24,4.86,8.95,3.85,12.78,6.39,15.16,10,2.66,4,3.25,10.46,1.45,15.24-2,5.2-6.9,8.73-13.83,9.9a38.32,38.32,0,0,1-9.52-.1,23,23,0,0,1-12.72-6.63c-1.15-1.27-3.39-4.58-3.25-4.82a9.34,9.34,0,0,1,1.15-.73L82,101l3.59-2.08.75,1.11a16.78,16.78,0,0,0,4.74,4.54c4,2.1,9.46,1.81,12.16-.62a5.43,5.43,0,0,0,.69-6.92c-1-1.39-3-2.56-8.59-5-6.45-2.78-9.23-4.5-11.77-7.24a16.48,16.48,0,0,1-3.43-6.25,25,25,0,0,1-.22-8c1.33-6.23,6-10.58,12.82-11.87A31.66,31.66,0,0,1,102.23,58.93ZM72.89,64.15l0,5.12H56.66V115.5H45.15V69.26H28.88v-5A49.19,49.19,0,0,1,29,59.09C29.08,59,39,59,51,59L72.83,59Z"></path>
                                            </g>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div> <!-- ./Dev -->




                        <div class="px-4 py-2 bg-grey-lightest my-2 border border-grey-lighter rounded-lg dark:bg-dark-3 dark:border-transparent dark:shadow-md">
                            <div class="text-lg">Design</div>
                            <div class="pl-2">
                                <div class="flex flex-wrap">
                                    <a class="skill photoshop flex items-center justify-center p-4 rounded-full mb-1 mr-1" href="https://www.adobe.com/ch_fr/products/photoshop.html" target="_blank">
                                        <span class="sr-only">Photoshop</span>
                                        <svg viewBox="0 0 128 128" class="text-indigo fill-current w-10 dark:text-indigo-light">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M50.246 41.616c-3.682-.925-7.369-.628-11.26-.022 0 6.805-.014 13.427.037 20.05.002.339.511.929.841.974 4.243.573 8.463.619 12.431-1.315 4.105-2 6.196-6.182 5.654-11.092-.492-4.471-3.139-7.448-7.703-8.595zM127 63.963v-60.678c0-2.096.023-2.285-2.012-2.285h-121.509c-1.979 0-2.479.19-2.479 2.186v121.509c0 2.018.252 2.021 2.209 2.021 40.555.001 81.231-.009 121.786.037 1.573.002 1.995-.417 1.991-1.959-.054-20.277.014-40.556.014-60.831zm-70.648 5.84c-5.557 1.982-11.352 2.093-17.352 1.628v22.569h-11v-1.402c0-18.895-.087-37.788-.14-56.682-.006-1.569.243-2.327 2.011-2.507 8.332-.852 16.617-1.81 24.902.133 8.906 2.087 14.041 7.975 14.431 16.11.483 10.074-3.944 16.974-12.852 20.151zm44.31 12.754c-.424 5.771-3.678 9.56-9.015 11.392-7.142 2.452-14.245 1.883-21.225-.891-1.143-.455-1.364-1.031-.987-2.196.687-2.126 1.19-4.312 1.72-6.286 2.951.866 5.757 1.947 8.664 2.458 2.053.361 4.272.149 6.359-.178 1.871-.294 3.217-1.564 3.524-3.572.312-2.041-.303-3.809-2.105-4.895-1.432-.862-3.01-1.479-4.523-2.202-2.433-1.163-5.026-2.075-7.27-3.53-8.831-5.727-5.956-16.383-.063-20.396 3.153-2.146 6.642-3.098 10.377-3.229 4.393-.154 8.623.604 12.778 2.623l-2.195 7.789c-1.74-.616-3.36-1.416-5.07-1.734-2.029-.378-4.157-.589-6.205-.422-2.746.225-4.354 2.12-4.354 4.47 0 1.392.528 2.57 1.689 3.245 1.666.969 3.434 1.768 5.186 2.579 1.896.877 3.898 1.551 5.723 2.552 4.87 2.67 7.405 6.8 6.992 12.423z">
                                            </path>
                                        </svg>
                                    </a>
                                    <a class="skill xd flex items-center justify-center p-4 rounded-full mb-1 mr-1" href="https://www.adobe.com/ch_fr/products/xd.html" target="_blank">
                                        <span class="sr-only">Adobe Xd</span>
                                        <svg viewBox="0 0 240 234" class="text-indigo fill-current w-10 dark:text-indigo-light">
                                            <path d="M10 10h220v214H10z" />
                                            <path d="M0 0v234h240V0H0zm10 10h220v214H10V10z" />
                                            <path class="inside" d="M174.3 98.3c-1.5-.7-3.4-1-5.8-1-12.6 0-21 9.7-21 25.8 0 18.4 8.6 25.8 19.8 25.8 2.4 0 5-.3 6.9-1.1V98.3h.1zm-44.8 25.6c0-23.3 15-41.5 39.6-41.5 2.1 0 3.2 0 5.2.2v-26c0-.6.5-1 1-1h16.1c.8 0 1 .3 1 .8v91.4c0 2.7 0 6.1.5 9.8 0 .7 0 .8-.6 1.1-8.4 4-17.2 5.8-25.6 5.8-21.7 0-37.2-13.4-37.2-40.6zm-34.1-16.2l28 54.3c.5.8.2 1.6-.6 1.6h-17.4c-1.1 0-1.6-.3-2.1-1.3-6.4-13.2-12.9-26.9-19.6-41.1h-.2c-6 13.4-12.6 28-19 41.2-.5.8-1 1.1-1.8 1.1H46.1c-1 0-1.1-.8-.6-1.4l27.4-52.7L46.4 57c-.6-.8 0-1.5.7-1.5h17.2c1 0 1.5.2 1.8 1.1C72.4 69.9 78.8 83 84.8 96.4h.2c5.8-13.2 12.2-26.5 18.3-39.6.5-.8.8-1.3 1.8-1.3h16.1c.8 0 1.1.6.6 1.5l-26.4 50.7z" />
                                        </svg>
                                    </a>
                                    <a class="skill figma flex items-center justify-center p-4 rounded-full mb-1 mr-1" href="https://www.figma.com/" target="_blank">
                                        <span class="sr-only">Figma</span>
                                        <svg viewBox="0 0 250 375" class="text-indigo fill-current w-10 h-10 dark:text-indigo-light" transform="translate(2, 4)">
                                            <path d="M50 300c27.6 0 50-22.4 50-50v-50H50c-27.6 0-50 22.4-50 50s22.4 50 50 50z" />
                                            <path d="M0 150c0-27.6 22.4-50 50-50h50v100H50c-27.6 0-50-22.4-50-50z" />
                                            <path d="M0 50C0 22.4 22.4 0 50 0h50v100H50C22.4 100 0 77.6 0 50z" />
                                            <path d="M100 0h50c27.6 0 50 22.4 50 50s-22.4 50-50 50h-50V0z" />
                                            <path d="M200 150c0 27.6-22.4 50-50 50s-50-22.4-50-50 22.4-50 50-50 50 22.4 50 50z" />
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div> <!-- ./Design -->

                    </div>
                </div><!-- ./Skills -->

                <div class="hidden md:flex md:flex-row items-center text-xs sm:text-sm text-grey-lighter text-center justify-center py-4 max-w-sm w-full px-4 dark:text-dark-secondary">
                    <div>
                        <a href="https://valentinkaelin.ch" class="no-underline text-grey-lighter hover:text-grey hover:underline dark:text-dark-secondary">valentinkaelin.ch</a>
                        &copy; 2017 - <?= date("Y"); ?> | Tous droits réservés.
                    </div>
                </div>
            </div> <!-- ./First col -->


            <!-- Second col -->
            <div class="flex flex-col flex-grow items-center max-w-sm w-full md:mb-8 px-3 pt-8">
                <h1 class="font-light uppercase text-grey-lightest text-2xl mt-3 mb-2">
                    <span class="text-3xl mr-1 opacity-50">6</span>projets
                </h1>

                <!-- LeagueStats -->
                <div class="flex flex-col items-center w-full bg-white rounded shadow px-4 py-4 my-2 dark:bg-dark-2 dark:text-dark-primary">
                    <div class="flex items-center">
                        <img src="img/leaguestats.png" class="w-auto h-12 mr-2 rounded-full" alt="LeagueStats">
                        <span class="text-2xl font-light whitespace-no-wrap">LeagueStats</span>
                    </div>
                    <div class="w-full my-3">
                        <p class="text-sm text-justify mb-2 px-4 py-1 -mx-4 bg-grey-lightest dark:bg-dark-3">
                            Création d'un site de statistiques pour les joueurs du jeu League of Legends.
                        </p>
                        <div class="leading-loose">
                            <div class="text-sm">
                                Technologies utilisées :
                                <span class="text-grey-darker border-b border-dashed pb-px dark:text-dark-disabled dark:border-dark-disabled">Vue.js</span>,
                                <span class="text-grey-darker border-b border-dashed pb-px dark:text-dark-disabled dark:border-dark-disabled">AdonisJs</span>,
                                <span class="text-grey-darker border-b border-dashed pb-px dark:text-dark-disabled dark:border-dark-disabled">MongoDB</span>,
                                <span class="text-grey-darker border-b border-dashed pb-px dark:text-dark-disabled dark:border-dark-disabled">TailwindCSS</span>,
                                <span class="text-grey-darker border-b border-dashed pb-px dark:text-dark-disabled dark:border-dark-disabled">Redis</span>
                            </div>
                            <div class="text-sm">
                                Date :
                                <span class="text-grey-darker dark:text-dark-disabled">décembre 2018 - actuellement</span>
                            </div>
                        </div>
                    </div>
                    <a href="https://leaguestats.gg" target="_blank" class="sm:self-end no-underline text-xs font-semibold rounded-full px-4 py-1 border border-indigo text-indigo hover:bg-indigo hover:text-white dark:border-indigo-light dark:bg-indigo-light dark:text-white btn">
                        Voir le site
                    </a>

                </div> <!-- ./LeagueStats -->

                <!-- YouTogether -->
                <div class="flex flex-col items-center w-full bg-white rounded shadow px-4 py-4 my-2 dark:bg-dark-2 dark:text-dark-primary">
                    <div class="flex items-center">
                        <img src="img/youtogether.png" class="w-auto h-12 mr-2 rounded-full" alt="YouTogether">
                        <span class="text-2xl font-light whitespace-no-wrap">YouTogether</span>
                    </div>
                    <div class="w-full my-3">
                        <p class="text-sm text-justify mb-2 px-4 py-1 -mx-4 bg-grey-lightest dark:bg-dark-3">
                            Création d'un site permettant de regarder des vidéos YouTube en simultanés avec plusieurs personnes.
                        </p>
                        <div class="leading-loose">
                            <div class="text-sm">
                                Technologies utilisées :
                                <span class="text-grey-darker border-b border-dashed pb-px dark:text-dark-disabled dark:border-dark-disabled">Ruby
                                    on Rails</span>,
                                <span class="text-grey-darker border-b border-dashed pb-px dark:text-dark-disabled dark:border-dark-disabled">Action
                                    Cable</span>,
                                <span class="text-grey-darker border-b border-dashed pb-px dark:text-dark-disabled dark:border-dark-disabled">SASS</span>
                            </div>
                            <div class="text-sm">
                                Date :
                                <span class="text-grey-darker dark:text-dark-disabled">mai 2018 - juin 2018</span>
                            </div>
                        </div>
                    </div>
                    <a href="https://youtogether.herokuapp.com" target="_blank" class="sm:self-end no-underline text-xs font-semibold rounded-full px-4 py-1 border border-indigo text-indigo hover:bg-indigo hover:text-white dark:border-indigo-light dark:bg-indigo-light dark:text-white btn">
                        Voir le site
                    </a>

                </div> <!-- ./YouTogether -->

                <!-- CIAO -->
                <div class="flex flex-col items-center w-full bg-white rounded shadow px-4 py-4 my-2 dark:bg-dark-2 dark:text-dark-primary">
                    <div class="flex items-center">
                        <img src="img/ciao.png" class="w-auto h-12 mr-2" alt="Association CIAO">
                        <span class="text-xl sm:text-2xl font-light whitespace-no-wrap">Association CIAO</span>
                    </div>
                    <div class="w-full my-3">
                        <p class="text-sm text-justify mb-2 px-4 py-1 -mx-4 bg-grey-lightest dark:bg-dark-3">
                            Refonte complète du site de l'association romande CIAO (sans cahier des charges).
                        </p>
                        <div class="leading-loose">
                            <div class="text-sm">
                                Technologie utilisée :
                                <span class="text-grey-darker border-b border-dashed pb-px dark:text-dark-disabled dark:border-dark-disabled">WordPress</span>,
                                <span class="text-grey-darker border-b border-dashed pb-px dark:text-dark-disabled dark:border-dark-disabled">PHP</span>,
                                <span class="text-grey-darker border-b border-dashed pb-px dark:text-dark-disabled dark:border-dark-disabled">MySQL</span>,
                                <span class="text-grey-darker border-b border-dashed pb-px dark:text-dark-disabled dark:border-dark-disabled">Bootstrap</span>
                            </div>
                            <div class="text-sm">
                                Date :
                                <span class="text-grey-darker dark:text-dark-disabled">février 2018 - mai 2018</span>
                            </div>
                        </div>
                    </div>
                    <a href="https://associationciao.ch/" target="_blank" class="sm:self-end no-underline text-xs font-semibold rounded-full px-4 py-1 border border-indigo text-indigo hover:bg-indigo hover:text-white dark:border-indigo-light dark:bg-indigo-light dark:text-white btn">
                        Voir le site
                    </a>

                </div> <!-- ./CIAO -->

                <!-- 3lementair -->
                <div class="flex flex-col items-center w-full bg-white rounded shadow px-4 py-4 my-2 dark:bg-dark-2 dark:text-dark-primary">
                    <div class="flex items-center">
                        <img src="img/3lementair.png" class="w-auto h-12 elementair" alt="3lément'Air SA">
                    </div>
                    <div class="w-full my-3">
                        <p class="text-sm text-justify mb-2 px-4 py-1 -mx-4 bg-grey-lightest dark:bg-dark-3">
                            Refonte complète du site de la SA 3lément'Air, une entreprise spécialisée dans les clean rooms (sans
                            cahier des charges).
                        </p>
                        <div class="leading-loose">
                            <div class="text-sm">
                                Technologie utilisée :
                                <span class="text-grey-darker border-b border-dashed pb-px dark:text-dark-disabled dark:border-dark-disabled">TailwindCSS</span>,
                                <span class="text-grey-darker border-b border-dashed pb-px dark:text-dark-disabled dark:border-dark-disabled">PHP</span>
                            </div>
                            <div class="text-sm">
                                Date :
                                <span class="text-grey-darker dark:text-dark-disabled">janvier 2019 - février 2019</span>
                            </div>
                        </div>
                    </div>
                    <a href="http://3lementair.ch/" target="_blank" class="sm:self-end no-underline text-xs font-semibold rounded-full px-4 py-1 border border-indigo text-indigo hover:bg-indigo hover:text-white dark:border-indigo-light dark:bg-indigo-light dark:text-white btn">
                        Voir le site
                    </a>

                </div> <!-- ./3lementair -->

                <!-- Kryptonia -->
                <div class="flex flex-col items-center w-full bg-white rounded shadow px-4 py-4 my-2 dark:bg-dark-2 dark:text-dark-primary">
                    <div class="flex items-center">
                        <img src="img/krypto.png" class="w-auto h-12 mr-2 rounded-full" alt="Kryptonia">
                        <span class="text-2xl font-light whitespace-no-wrap">Kryptonia</span>
                    </div>
                    <div class="w-full my-3">
                        <p class="text-sm text-justify mb-2 px-4 py-1 -mx-4 bg-grey-lightest dark:bg-dark-3">
                            Gestion de projet d'un serveur Minecraft moddé disposant d'une base de joueurs de plus de 75'000 inscrits.
                        </p>
                        <div class="leading-loose">
                            <div class="text-sm">
                                Compétences acquises :
                                <span class="text-grey-darker border-b border-dashed pb-px dark:text-dark-disabled dark:border-dark-disabled">Gestion
                                    de projet</span>,
                                <span class="text-grey-darker border-b border-dashed pb-px dark:text-dark-disabled dark:border-dark-disabled">Communication</span>,
                                <span class="text-grey-darker border-b border-dashed pb-px dark:text-dark-disabled dark:border-dark-disabled">Graphisme</span>
                            </div>
                            <div class="text-sm">
                                Date :
                                <span class="text-grey-darker dark:text-dark-disabled">avril 2016 - octobre 2019</span>
                            </div>
                        </div>
                    </div>
                    <a href="https://kryptonia.fr" target="_blank" class="sm:self-end no-underline text-xs font-semibold rounded-full px-4 py-1 border border-indigo text-indigo hover:bg-indigo hover:text-white dark:border-indigo-light dark:bg-indigo-light dark:text-white btn">
                        Voir le site
                    </a>

                </div> <!-- ./Kryptonia -->

                <!-- BikeGame -->
                <div class="flex flex-col items-center w-full bg-white rounded shadow px-4 py-4 my-2 dark:bg-dark-2 dark:text-dark-primary">
                    <div class="flex items-center">
                        <img src="img/BikeGame.jpg" class="w-auto h-12 mr-2 rounded-full" alt="The BikeGame">
                        <span class="text-2xl font-light whitespace-no-wrap">The BikeGame</span>
                    </div>
                    <div class="w-full my-3">
                        <p class="text-sm text-justify mb-2 px-4 py-1 -mx-4 bg-grey-lightest dark:bg-dark-3">
                            Realisation d'un jeu de vélo comme projet lors du premier semestre du BA1 de l'EPFL.
                        </p>
                        <div class="leading-loose">
                            <div class="text-sm">
                                Technologies utilisées :
                                <span class="text-grey-darker border-b border-dashed pb-px dark:text-dark-disabled dark:border-dark-disabled">Java</span>,
                                <span class="text-grey-darker border-b border-dashed pb-px dark:text-dark-disabled dark:border-dark-disabled">jbox2d</span>
                            </div>
                            <div class="text-sm">
                                Date :
                                <span class="text-grey-darker dark:text-dark-disabled">décembre 2017</span>
                            </div>
                        </div>
                    </div>
                    <a href="https://github.com/vkaelin/BikeGame-EPFL" target="_blank" class="sm:self-end no-underline text-xs font-semibold rounded-full px-4 py-1 border border-indigo text-indigo hover:bg-indigo hover:text-white dark:border-indigo-light dark:bg-indigo-light dark:text-white btn">
                        Voir le code
                    </a>

                </div> <!-- ./BikeGame -->

                <div class="flex md:hidden md:flex-row items-center text-xs sm:text-sm text-grey-lighter text-center justify-center py-4 max-w-sm w-full px-4 dark:text-dark-secondary">
                    <div>
                        <a href="https://valentinkaelin.ch" class="no-underline text-grey-lighter hover:text-grey hover:underline dark:text-dark-secondary">valentinkaelin.ch</a>
                        &copy; 2017 - <?= date("Y"); ?> | Tous droits réservés.
                    </div>
                </div>

            </div> <!-- ./Second col -->
        </div>
    </main>
    <script src="js/app.js"></script>
</body>

</html>