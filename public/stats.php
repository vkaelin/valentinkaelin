<?php
//error_reporting(E_ALL);
//ini_set('display_errors', 1);  

include "session.php";

/* DB */
require 'database.php';
$bdd = Database::connect();

/* GET USERS */
/*$req = $bdd->query('SELECT pseudo,date_inscription FROM membres');
$nbUsers = 0;
$lastUser = '';
$lastUserDate = '';
while ($donnees = $req->fetch()) {
    $nbUsers++;
    $lastUser = $donnees['pseudo'];
    $lastUserDate = $donnees['date_inscription'];
}*/

/* GET MSG */
/*$req2 = $bdd->query('SELECT pseudo, COUNT(*) AS nbMsg FROM minichat GROUP BY pseudo ORDER BY nbMsg DESC LIMIT 1');
$mostMSg = $req2->fetch();*/

/* GET TOTAL VISITORS */
$req4 = $bdd->query('SELECT id FROM totalview WHERE id=(SELECT max(id) FROM totalview)');
$donnees = $req4->fetch();
$nbVisitors = $donnees['id'];

/* Get today visitors */
$req5 = $bdd->query('SELECT COUNT(id) AS count_visitors FROM totalview WHERE date > CURDATE()');
$donnees = $req5->fetch();
$ajd = $donnees['count_visitors'];

/* Get per day visitors */
$req6 = $bdd->query('SELECT DATE(date) as day, COUNT(id) as visitors FROM totalview GROUP BY day ORDER BY day DESC LIMIT 24')->fetchAll(PDO::FETCH_ASSOC);

//var_dump($req6);

/* Date actuelle */
date_default_timezone_set('Europe/Paris');
$date = date('d/m/Y H:i:s');

?>

<!DOCTYPE html>
<html>

<head>
  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-113251543-2"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag() { dataLayer.push(arguments); }
    gtag('js', new Date());

    gtag('config', 'UA-113251543-2');
  </script>
  <meta charset="utf-8">
  <meta name="robots" content="index,follow">
  <meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, viewport-fit=cover">
  <title>Stats - Valentin Kaelin</title>
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss/dist/tailwind.min.css" rel="stylesheet">
</head>

<body style="background: linear-gradient(to right, #a8c0ff, #3f2b96);">

  <div class="container mx-auto flex items-center h-screen font-sans font-light leading-normal">

    <div class="max-w-sm w-full mx-auto px-3">
      <h1 class="font-light uppercase text-grey-lightest text-2xl mt-3 mb-2">Stats</h1>
      <div class="px-6 py-4 bg-white rounded flex flex-col">
        <p>Nombre total de visiteurs : <span class="font-medium"><?= $nbVisitors ?></span></p>
        <p>Visiteurs aujourd'hui : <span class="font-medium"><?= $ajd ?></span></p>
        <a href="https://valentinkaelin.ch"
          class="self-end no-underline text-xs font-semibold rounded-full px-4 py-1 border border-indigo text-indigo hover:bg-indigo hover:text-white">Retour
          site</a>
      </div>
      <div class="text-grey-lighter text-center p-4">
        Statistiques mises à jour le <?= $date ?>
      </div>
    </div>
  </div>

</body>

</html>

<? /*<p>Nombre d'utilisateurs inscrits : <b><?= $nbUsers ?></b></p>
<p>Dernier membre inscrit : <b><?= $lastUser . ' - ' . date('d/m/Y', strtotime($lastUserDate)) ?></b></p>
<p>Membre le plus actif sur la chatbox : <b><?= $mostMSg['pseudo'] . ' - ' . $mostMSg['nbMsg'] . ' messages'?></b></p>
*/?>