import { useState } from '#app'

// It will be available as useStudies() (pascalCase of file name without extension)
export default function () {
  return [
    {
      name: 'HEIG-VD',
      from: 'septembre 2020',
      to: 'actuellement',
      image: 'heig.svg',
      description: 'Bachelor en Informatique logicielle.',
      link: 'https://heig-vd.ch/',
    },
    {
      name: 'ETML',
      from: 'août 2018',
      to: 'juin 2020',
      image: 'etml.jpg',
      imageClasses: 'rounded-full',
      description: 'FPA (Formation Professionnelle accélérée) en informatique.',
      link: 'https://www.etml.ch/',
    },
    {
      name: 'EPFL Extension School',
      from: 'mai 2018',
      to: 'juillet 2018',
      image: 'exts.jpg',
      imageClasses: 'rounded-full',
      description: 'Certificate of Open Studies in Web Application Development.',
      link: 'https://exts.epfl.ch/courses-programs/web-application-development',
    },
    {
      name: 'EPFL',
      from: 'septembre 2017',
      to: 'février 2018',
      image: 'epfl.svg',
      description: "Cursus arrêté à la fin du premier semestre de l'année propédeutique en informatique.",
      link: 'https://www.epfl.ch/',
    },
    {
      name: 'Ecole 42',
      from: 'août 2017',
      image: '42.jpg',
      imageClasses: 'rounded-full h-12',
      description: "Piscine (test d'admission d'une période d'un mois) réussie.",
      link: 'http://www.42.fr/',
    },
    {
      name: 'Gymnase',
      from: 'août 201',
      to: 'juin 2016',
      image: 'burier.jpg',
      imageClasses: 'rounded-full h-12',
      description: 'Maturité fédérale en option maths et physique.',
      link: 'https://www.gymnasedeburier.ch/',
    }
  ]
}
