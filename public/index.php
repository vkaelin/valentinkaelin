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
                        <?php //<span id="openDiscord" class="mx-1 my-1 no-underline text-xs font-semibold rounded-full px-3 py-1 border border-indigo text-indigo cursor-pointer hover:bg-indigo hover:text-white cursor-pointer dark:border-indigo-light dark:bg-indigo-light dark:text-white btn">Discord</span> 
                        ?>
                        <a href="/docs/ValentinKaelin-Resume.pdf" class="mx-1 my-1 no-underline text-xs font-semibold rounded-full px-3 py-1 border border-indigo text-indigo cursor-pointer hover:bg-indigo hover:text-white cursor-pointer dark:border-indigo-light dark:bg-indigo-light dark:text-white btn">CV</a>
                        <a href="https://github.com/Kalaneee" target="_blank" class="mx-1 my-1 no-underline text-xs font-semibold rounded-full px-3 py-1 border border-grey-darkest text-grey-darkest hover:bg-grey-darkest hover:text-white dark:border-indigo-light dark:bg-indigo-light dark:text-white btn">GitHub</a>
                    </div> <!-- /Bottom of the card -->
                </div><!-- ./ About -->

                <!-- Formations -->
                <div class="w-full bg-white shadow rounded my-2 dark:bg-dark-2 dark:text-dark-primary">
                    <div class="px-6 py-4">
                        <div class="text-xl leading-tight mb-3">Formations</div>
                        <div class="flex flex-col bg-grey-lightest px-4 py-2 mt-2 mb-4 border border-grey-lighter rounded-lg dark:bg-dark-3 dark:border-transparent dark:shadow-md">
                            <div class="flex items-center mb-2">
                                <div class="mr-2 text-base">ETML</div>
                                <div class="text-sm leading-tight text-grey-dark mr-1 dark:text-dark-secondary">août 2018 - actuellement
                                </div>
                                <img src="img/etml.jpg" class="w-12 ml-auto mt-2 rounded-full" alt="ETML">
                            </div>
                            <p class="text-sm pt-2 mb-2 border-t border-grey-lighter w-4/5 dark:border-dark-4">
                                FPA (Formation Professionnelle accélérée) en informatique.
                            </p>
                            <a href="https://www.etml.ch/" target="_blank" class="self-end no-underline text-xs font-semibold rounded-full px-4 py-1 -mt-4 mb-1 border border-indigo text-indigo hover:bg-indigo hover:text-white dark:border-indigo-light dark:bg-indigo-light dark:text-white btn dark:border-indigo-light dark:bg-indigo-light dark:text-white btn">Site</a>
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
                            <a href="https://exts.epfl.ch/courses-programs/web-application-development" target="_blank" class="self-end no-underline text-xs font-semibold rounded-full px-4 py-1 -mt-4 mb-1 border border-indigo text-indigo hover:bg-indigo hover:text-white dark:border-indigo-light dark:bg-indigo-light dark:text-white btn dark:border-indigo-light dark:bg-indigo-light dark:text-white btn">Site</a>
                        </div>
                        <div class="flex flex-col bg-grey-lightest px-4 py-2 mt-2 mb-4 border border-grey-lighter rounded-lg dark:bg-dark-3 dark:border-transparent dark:shadow-md">
                            <div class="flex items-center mb-2">
                                <div class="mr-2 text-base">EPFL</div>
                                <div class="text-sm leading-tight text-grey-dark mr-1 dark:text-dark-secondary">septembre 2017 - février
                                    2018</div>
                                <img src="img/epfl.jpg" class="w-auto h-12 ml-auto mt-2 rounded-full" alt="EPFL">
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
                            <a href="http://www.gymnasedeburier.ch/site/" target="_blank" class="self-end no-underline text-xs font-semibold rounded-full px-4 py-1 -mt-4 mb-1 border border-indigo text-indigo hover:bg-indigo hover:text-white dark:border-indigo-light dark:bg-indigo-light dark:text-white btn">Site</a>
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
                            <div class="pl-2">
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
                                        <svg viewBox="0 0 128 128" class="text-indigo fill-current w-10 dark:text-indigo-light">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M16.934 1.719c-1.127.088-2.234.074-3.325.373-2.387.655-4.508 1.702-6.379 3.316-1.1.948-2.06 1.97-2.875 3.174-1.258 1.859-2.115 3.857-2.545 6.106.172.301.353.617.545.938 1.219 2.038 2.439 4.062 3.661 6.098l3.212 5.341c.988 1.646 1.974 3.293 2.96 4.939l4.608 7.688c1.047 1.748 2.095 3.497 3.143 5.244 1.527 2.545 3.058 5.088 4.583 7.634l5.609 9.371c1.617 2.699 3.237 5.396 4.857 8.093l.216.314c.235.075.422.011.616-.035 2.134-.512 4.268-1.021 6.402-1.531 3.461-.827 6.922-1.651 10.383-2.479l5.421-1.297c3.499-.836 6.999-1.67 10.498-2.508 3.537-.846 7.073-1.696 10.611-2.543 1.788-.429 3.576-.856 5.365-1.283 3.461-.826 6.922-1.65 10.383-2.474l11.308-2.693.611-.165-.167-.331-3.086-4.362-3.048-4.315-3.26-4.604-3.116-4.413-3.088-4.361-3.188-4.507c-1.041-1.47-2.084-2.938-3.126-4.407l-1.647-2.326c-.252-.357-.453-.742-.587-1.159-.326-1.011.046-1.684.636-2.181.382-.323.822-.56 1.298-.7.663-.195 1.332-.382 2.01-.51 1.359-.257 2.727-.475 4.091-.702l4.624-.754c.975-.161 1.949-.33 2.924-.495 1.325-.224 2.65-.449 3.976-.67 1.287-.216 2.574-.43 3.861-.642l4.213-.689 2.924-.491c1.112-.186 2.223-.371 3.334-.553 1.386-.226 2.771-.454 4.157-.671.826-.129 1.652-.174 2.472.062.615.177 1.175.465 1.696.833l.721.503c.072-.166-.032-.256-.08-.351-1.04-2.105-2.458-3.915-4.26-5.422-1.675-1.402-3.556-2.433-5.636-3.09-1.229-.389-2.492-.208-3.778-.305M55.689 127c-.062 0-.117-.45-.187-.569-1.5-2.56-3.016-5.308-4.498-7.877-1.867-3.238-3.717-6.486-5.557-9.74-1.965-3.478-3.913-6.966-5.863-10.452-1.854-3.314-3.702-6.631-5.549-9.948-1.115-2.005-2.223-4.014-3.337-6.02l-.296-.459-.542.107c-1.072.277-2.142.556-3.212.838-1.49.392-2.979.791-4.47 1.18-3.347.871-6.694 1.737-10.041 2.605-3.404.884-6.951 1.77-10.356 2.65-.207.053.219.071-.781.106v21.145c.412.656.373.347.399.563.079.626.207 1.257.317 1.877.412 2.31 1.339 4.425 2.679 6.351 1.965 2.826 4.582 4.846 7.788 6.082 1.145.44 2.34.75 3.562.9l1.241.328"></path>
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M4.976 77.742c3.939-.937 7.879-1.873 11.818-2.808 1.73-.41 3.461-.815 5.191-1.227.865-.206 1.732-.402 2.59-.634.764-.206.858-.459.465-1.148-.568-.996-1.146-1.986-1.721-2.979l-5.064-8.72-5.062-8.721c-1.717-2.958-3.436-5.916-5.154-8.873-1.471-2.53-2.942-5.06-4.412-7.59-.636-1.094-1.408-2.191-2.047-3.284-.119-.199.42-.437-.58-.543v47.396c0-.032.453-.059.606-.096l3.37-.773zM126.224 111.62c-1.544.549-3.089 1.102-4.632 1.655-3.515 1.26-7.03 2.52-10.545 3.781-1.953.701-3.902 1.41-5.856 2.108-3.982 1.421-7.966 2.837-11.949 4.255-2.308.822-4.617 1.838-6.924 2.664-.632.227-1.255.917-1.881.917h26.49l.57-.327c.674-.029 1.337-.229 1.999-.35 2.719-.497 5.154-1.673 7.311-3.392 1.657-1.321 3.005-2.936 4.061-4.778 1.086-1.896 1.731-3.947 2.041-6.101.027-.186.085-.397-.071-.589-.22-.017-.414.086-.614.157zM123.949 76.049c-1.168-1.598-2.339-3.193-3.505-4.792-1.609-2.207-3.215-4.416-4.822-6.624-.653-.896-1.315-1.785-1.952-2.691-.192-.273-.411-.346-.71-.265l-.171.049c-2.958.719-5.917 1.436-8.876 2.153l-5.302 1.287c-3.457.839-6.915 1.679-10.372 2.519-3.419.831-6.838 1.663-10.258 2.492l-10.662 2.582c-3.497.849-6.992 1.701-10.488 2.551l-10.142 2.462c-1.787.434-3.574.866-5.359 1.302-.263.064-.546.08-.826.292l.239.455c1.497 2.586 2.994 5.171 4.495 7.755 1.699 2.926 3.399 5.851 5.103 8.774 1.874 3.213 3.753 6.424 5.63 9.636 1.079 1.845 2.151 3.692 3.239 5.532 1.209 2.044 2.422 4.084 3.653 6.115.369.607.788 1.187 1.21 1.759.283.382.633.708 1.046.957.426.257.885.338 1.369.229.25-.057.495-.139.737-.223l.89-.33c3.237-1.107 6.473-2.214 9.711-3.317 2.526-.86 5.055-1.716 7.583-2.571 2.509-.851 5.02-1.698 7.53-2.545l7.474-2.524c2.548-.861 5.095-1.722 7.642-2.585 3.126-1.061 6.251-2.126 9.379-3.185 3.015-1.02 6.033-2.034 9.049-3.052.185-.062.389-.088.542-.291l.019-.439c.001-6.255-.001-12.511.006-18.766 0-.334-.089-.604-.289-.873-.948-1.269-1.877-2.551-2.812-3.828zM123.43 17.111c-.702-.889-1.596-1.171-2.692-.885-.477.125-.967.204-1.453.293-1.594.292-3.19.579-4.784.868-2.334.424-4.667.852-7.001 1.272-1.848.332-3.697.659-5.546.983l-7.418 1.298c-.311.054-.625.108-.925.204-.437.14-.563.414-.363.825.163.336.366.657.586.959 1.534 2.114 3.075 4.223 4.616 6.333 2.124 2.909 4.249 5.817 6.374 8.724 1.798 2.46 3.598 4.92 5.397 7.379 1.414 1.932 2.828 3.864 4.244 5.795l.279.338 12.271-3.033.029-.636c.001-8.511-.001-17.022.006-25.534 0-.376-.091-.678-.328-.976-1.032-1.303-2.045-2.621-3.066-3.933l-.226-.274zM126.731 58.352c-1.856.446-3.719.87-5.62 1.373.201.357 5.415 7.395 5.718 7.729l.19.105.021-.429.001-2.963c.001-1.719.005-3.438.001-5.157 0-.209.059-.434-.085-.646l-.226-.012z"></path>
                                        </svg>
                                    </a>
                                    <a class="skill mysql flex items-center justify-center p-4 rounded-full mb-1 mr-1" href="https://www.mysql.com" target="_blank">
                                        <span class="sr-only">MySQL</span>
                                        <svg viewBox="0 0 128 128" class="text-indigo fill-current w-10 dark:text-indigo-light">
                                            <path d="M125.477 122.783l-2.616-2.537c-2.479-3.292-5.668-6.184-9.015-8.585-2.669-1.916-8.661-4.504-9.775-7.609l-.205-.195c1.893-.214 4.103-.898 5.85-1.367 2.934-.786 5.356-.583 8.386-1.365 1.366-.39 2.899-.781 3.899-1.171v-.78c-1-1.571-2.427-3.651-4.097-5.073-4.369-3.72-9.041-7.437-13.951-10.537-2.723-1.718-6.041-2.835-8.926-4.292-.971-.491-2.652-.746-3.294-1.562-1.517-1.932-2.328-4.382-3.498-6.633-2.449-4.717-4.849-9.868-7.019-14.831-1.48-3.384-2.443-6.72-4.289-9.756-8.86-14.567-18.395-23.358-33.167-32-3.145-1.838-6.929-2.563-10.929-3.513-2.144-.129-4.291-.26-6.437-.391-1.311-.546-2.674-2.149-3.902-2.927-4.896-3.092-17.449-9.817-21.074-.975-2.289 5.581 3.42 11.025 5.462 13.854 1.435 1.982 3.27 4.207 4.293 6.438.675 1.467.79 2.938 1.367 4.489 1.418 3.822 2.651 7.98 4.487 11.511.927 1.788 1.949 3.67 3.122 5.268.718.981 1.95 1.413 2.145 2.927-1.204 1.686-1.273 4.304-1.95 6.44-3.05 9.615-1.898 21.567 2.537 28.683 1.36 2.186 4.566 6.871 8.975 5.073 3.856-1.57 3.226-6.438 4.329-10.732.249-.972-.185-1.688.815-2.341v.195c1 2.341 2.11 4.683 3.282 7.024 2.6 4.187 6.889 8.562 10.798 11.514 2.027 1.531 3.92 4.177 5.92 5.073v-.101h.221c-.507-1-1.302-1.167-1.95-1.804-1.527-1.496-3.226-3.382-4.487-5.097-3.556-4.827-6.698-10.122-9.561-15.622-1.368-2.626-2.557-5.529-3.709-8.201-.443-1.03-.438-2.592-1.364-3.125-1.263 1.958-3.122 3.54-4.099 5.853-1.561 3.696-1.762 8.204-2.341 12.877-.343.122-.19.038-.391.194-2.718-.655-3.672-3.452-4.683-5.853-2.555-6.07-3.029-15.843-.781-22.829.582-1.809 3.211-7.501 2.146-9.172-.508-1.665-2.184-2.63-3.121-3.903-1.161-1.574-2.319-3.646-3.123-5.464-2.091-4.731-3.066-10.044-5.268-14.828-1.053-2.287-2.832-4.602-4.293-6.634-1.617-2.253-3.429-3.912-4.684-6.635-.445-.968-1.051-2.518-.39-3.513.21-.671.507-.951 1.171-1.17 1.133-.873 4.283.29 5.463.779 3.129 1.3 5.741 2.5 8.392 4.256 1.271.844 2.559 1.89 4.097 2.89h1.756c2.747 0 5.824.232 8.391 1.012 4.535 1.379 8.6 3.542 12.292 5.873 11.246 7.102 20.441 17.22 26.732 29.278 1.012 1.942 1.45 3.799 2.341 5.858 1.798 4.153 4.064 8.428 5.853 12.489 1.786 4.053 3.526 8.142 6.05 11.514 1.327 1.772 6.451 2.724 8.78 3.709 1.633.689 4.308 1.409 5.854 2.34 2.953 1.782 5.814 3.904 8.586 5.855 1.384.974 5.64 3.114 5.853 4.878-6.863-.188-12.104.452-16.585 2.341-1.273.537-3.305.552-3.513 2.147.7.733.809 1.829 1.365 2.731 1.069 1.73 2.876 4.052 4.488 5.268 1.762 1.33 3.576 2.751 5.464 3.902 3.359 2.047 7.107 3.217 10.341 5.268 1.906 1.21 3.958 2.733 5.815 4.097.92.675.891 1.724 2.891 2.147v-.194c-.999-.795-.946-1.893-1.522-2.728zM29.514 23.465c-1.431-.027-2.514.157-3.514.389v.146h.198c.683 1 1.888 2.33 2.731 3.538l1.952 4.108.193-.187c1.209-.853 1.763-2.211 1.756-4.291-.483-.509-.556-1.146-.974-1.754-.558-.809-1.639-1.268-2.342-1.949z">
                                            </path>
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
                    <a href="https://github.com/Kalaneee/BikeGame-EPFL" target="_blank" class="sm:self-end no-underline text-xs font-semibold rounded-full px-4 py-1 border border-indigo text-indigo hover:bg-indigo hover:text-white dark:border-indigo-light dark:bg-indigo-light dark:text-white btn">
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