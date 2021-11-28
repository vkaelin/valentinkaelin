import { useState } from '#app'

// It will be available as useProjects() (pascalCase of file name without extension)
export default function () {
  return [
    {
      title: 'LeagueStats',
      description:
        "Création d'un site de statistiques pour les joueurs du jeu League of Legends. Plusieurs millions de matchs analysés.",
      image: 'leaguestats.png',
      techs: ['Vue.js', 'AdonisJs', 'TailwindCSS', 'PostgreSQL', 'Redis'],
      from: 'décembre 2018',
      to: 'actuellement',
      codeLink: 'https://github.com/vkaelin/LeagueStats',
      websiteLink: 'https://leaguestats.gg/',
    },
    {
      title: 'WizardMC',
      description:
        "Création d'un site pour le serveur minecraft WizardMC. Quelques fonctionnalités: E-commerce, panel d'administration, profils pour les joueurs, système de news et autres.",
      image: 'wizardmc.png',
      techs: ['Nuxt.js', 'AdonisJs', 'TailwindCSS', 'PostgreSQL', 'Redis'],
      from: 'mars 2020',
      to: 'août 2020',
      codeLink: 'https://github.com/EvoWide/wizardmc.fr',
      websiteLink: 'https://wizardmc.fr/',
    },
    {
      title: 'YouTogether',
      description:
        "Création d'un site permettant de regarder des vidéos YouTube en simultanés avec plusieurs personnes.",
      image: 'youtogether.png',
      techs: ['Ruby on Rails', 'Action Cable', 'SASS'],
      from: 'mai 2018',
      to: 'juin 2018',
      websiteLink: 'https://youtogether.herokuapp.com/',
    },
    {
      title: 'Association CIAO',
      description:
        "Refonte complète du site de l'association romande CIAO (sans cahier des charges).",
      image: 'ciao.png',
      techs: ['WordPress', 'PHP', 'MySQL', 'Bootstrap'],
      from: 'février 2018',
      to: 'mai 2018',
      websiteLink: 'https://associationciao.ch/',
    },
    {
      title: '',
      description:
        "Refonte complète du site de la SA 3lément'Air, une entreprise spécialisée dans les clean rooms (sans cahier des charges).",
      image: '3lementair.png',
      techs: ['PHP', 'TailwindCSS'],
      from: 'janvier 2019',
      to: 'février 2019',
      websiteLink: 'http://3lementair.ch/',
    },
    {
      title: 'Kryptonia',
      description:
        "Gestion de projet d'un serveur Minecraft moddé disposant d'un base de joueurs de plus de 75'000 inscrits.",
      image: 'krypto.png',
      techs: ['Gestion de projet', 'Communication', 'Graphisme'],
      techsLabel: 'Compétences acquises: ',
      from: 'avril 2016',
      to: 'octobre 2019',
      websiteLink: 'https://kryptonia.fr/',
    },
    {
      title: 'The BikeGame',
      description:
        "Realisation d'un jeu de vélo comme projet lors du premier semestre du BA1 de l'EPFL.",
      image: 'BikeGame.jpg',
      imageRounded: true,
      techs: ['Java', 'jbox2d'],
      from: 'décembre 2017',
      codeLink: 'https://github.com/Kalaneee/BikeGame-EPFL',
    },
  ]
}
