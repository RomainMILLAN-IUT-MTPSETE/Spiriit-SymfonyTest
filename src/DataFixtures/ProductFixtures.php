<?php

namespace App\DataFixtures;

use App\Entity\Product;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class ProductFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $productsListToCreate = [
            ['HUB USB 4 PORTS NOIR -pour PC et Mac.', 'Transforme 1 port en 4 ports à grande vitesse Portable Slim Design avec gestion des câbles. Fonctionne avec tous les systèmes d\'exploitation et ne nécessite pas de drivers p'],
            ['Pâte thermique', 'Pâte thermique HTK 002 - Les composés thermoconducteurs Cooler Master HTK-002 sont des matériaux silicones graisseux - Favorise une conductivité thermique élevée et une stabilité à haute température - Résistent aux changements de température allant jusqu\'à 177 °C.'],
            ['Stylet Stylo vert pour écrans tactiles', 'Stylet Stylo vert pour écrans tactiles N989-1 Cadeau utile - Stylet Forme Stylo pour écrans tactiles N989-1 Apple Iphone-Ipod Touch-Ipad-Smartphone.Idéal pour manipuler'],
            ['Switch HDMI 5 PORTS COMPACT - AVEC TELECOMMANDE Boitier Métal - Switch Auto-Alimenté', 'Pour utiliser CINQ sources sur un même écran, comme par exemple une console de jeu, un PC et un lecteur DVD ou Bluray sur un écran plasma. Le switch fait passer l\'image'],
            ['Lecteur de Carte Mémoire, SD/Micro SD Lecteur de Carte et Micro USB OTG à USB 2.0 Adaptateur avec Standard USB Micro USB Connecteur', 'Connecteur pour PC, Notebook et Smartphone avec Fonction OTG, Lecteur de carte multifonction】La combinaison connecteur USB 2.0 (type A) et connecteur micro USB (type B) rend ce lecteur de carte compatible avec le port de chargement micro'],
            ['MCL Câble USB 3.0 - Type A Mâle / micro B Mâle - 1,80 m', 'Câble USB 3.0 type A mâle / micro B mâle - 1,80m'],
            ['Cable - Connectique Pour Peripherique - Câble d\'extension SATA 15 broches mâle vers 2 x 15 broches femelle, longueur: 15 cm','Description 1) SATA 15-Pin Male to 2 x 15-Pin Female Puissance Extension Cable 2) Length of the cable: 15cm.Approx. 3) Color: As pictue shows. 4) Poids: 22g Spécification: Conditionnement (si achat en grande quantité): Poids du produit individuel 0.03 kg / 0.07lb Quantité par carton 300 Poids du carton 8.00 kg / 17.64lb Taille du carton 35cm x 30cm x 25cm /'],
            ['Adaptateur data Usb A mâle / PS/2 femelle', 'Adaptateur data Usb A mâle / PS/2 femelle - Cette adaptateur permet de brancher un clavier ou une souris PS/2 sur un port USB'],
            ['Disque SSD Interne - 870 QVO - 1To - 2,5"', ''],
            ['Cartouches compatibles brother LC3219 xl / 2 noir, 2 jaune, 2 cyan, 2 magenta', '8 cartouches compatibles brother LC3219 xl - 2 noir, 2 jaune, 2 cyan, 2 magenta alternative pour Brother MFC-J5330DW, MFC-J5730DW, MFC-J5930DW, MFC-J6530DW, MFC-J6930DW, MFC-J6935DW'],
            ['Câble RJ11 10M - Cordon universelle pour modem ADSL D2 Diffusion 10 m Noir', 'Ce cordon universel de 10 m permet de relier votre modem ADSL au filtre ADSL de votre prise murale. La synchronisation et une réduction des pertes en décibels du signal sont ainsi améliorées. Compatible avec tous les opérateurs et modems.'],
            ['Câble Optique Audio - Câble Toslink vers Mini Toslink pour DVD, PS4, XBox, Lecteur Blu Ray, Wii, Ampli, Barre de Son', 'Ce câble numérique optique audio Toslink vers Mini Toslink vous offre un son de qualité supérieure qui ne passera pas inaperçu. Utilisez ce câble pratique pour connecter rapidement un lecteur CD, un lecteur Blu-ray, une console de jeu ou un autre composant audio à un préamplificateur, un système audio ou un home cinéma. Le câble numérique optique audio Toslink fonctionne avec la plupart des appareils standards']
        ];

        for($i=0; $i<12; $i++){
            $productCurrent = new Product();
            $productCurrent->setName($productsListToCreate[$i][0]);
            $productCurrent->setDescription($productsListToCreate[$i][1]);
            $productCurrent->setPrice((random_int(19,1999)+.99));

            $manager->persist($productCurrent);
        }

        $manager->flush();
    }
}
