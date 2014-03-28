<?php
/**
 * Created by PhpStorm.
 * User: grosloup
 * Date: 28/03/2014
 * Time: 15:35
 */
include_once "datas/depts.php";
include_once "datas/pays.php";

ini_set("date.timezone", "Europe/Paris");
function rowGenerator(){
    global $departements;
    global $pays;
    $row = [];


//// date
    $dateEnd = new DateTime("2013-11-30", new DateTimeZone("Europe/Paris"));
    $timeStampEnd = $dateEnd->getTimestamp();
    $timeStampStart = $timeStampEnd - 15552000;
    $dateAleatoireSecond = $timeStampStart + rand(0, 15552000);
    $dateAleatoire = new DateTime();
    $dateAleatoire->setTimestamp($dateAleatoireSecond);
    $formated = $dateAleatoire->format("d/m");

    $row["q_1"] = $formated;
//// depart

    $num = rand(0, 99);
    $keys = array_keys($departements);
    $vals = array_values($departements);
    $row["q_2"] = $keys[$num] . " - " . $vals[$num];

    if($num == 99){
        //// if 100 => etranger
        $num = rand(0, 6);
        $row["q_2_1"] = $pays[$num];
    } else {
        $row["q_2_1"] = null;
    }
//// temps_passe
    $alea = [null,"1 jour","1 jour","1 jour","1 jour", "2 jours","1 jour","2 jours","2 jours","1 jour"];
    $row["q_3"] = $alea[rand(0, 9)];
//// context
    $alea = ["Vous êtes venu exprès à Beauval pour la journée ou le week-end",
        "Vous habitez près de Beauval, dans un rayon de 20 km",
        "Vous êtes venu exprès à Beauval pour la journée ou le week-end",
        "Vous étiez déjà près de Beauval de passage ou en vacances",
        "Vous habitez près de Beauval, dans un rayon de 20 km",
        "Vous êtes venu exprès à Beauval pour la journée ou le week-end",
        "Vous êtes venu exprès à Beauval pour la journée ou le week-end",
        "Vous habitez près de Beauval, dans un rayon de 20 km",
        "Vous êtes venu exprès à Beauval pour la journée ou le week-end",
        "Vous êtes venu exprès à Beauval pour la journée ou le week-end",
        null,
    ];
    $row["q_4_1"] = $alea[rand(0, 10)];
//// temps sejour residence
    $alea = ["1 jour","1 week-end","2 à 3 nuits","1 semaine","Plus d'une semaine", null];
    $row["q_4_2"] = $alea[rand(0, 5)];
    if($row["q_4_2"] != "1 jour"){
        $alea = ["Dans votre résidence principale",
            "Dans votre résidence secondaire","Chez des amis",
            "A l'hôtel Les Jardins de Beauval","Dans un autre hôtel ou en chambre d'hôtes","Dans un camping","Autre endroit",null];
        $row["q_4_3"] = $alea[rand(0, 7)];
    } else {
        $row["q_4_3"] = null;
    }
//// temps trajet
    $alea = ["Moins d'1 heure","de 1 heure à 2 heures",
        "Moins d'1 heure","de 1 heure à 2 heures","Plus de 2 heures de trajet","Moins d'1 heure","Plus de 2 heures de trajet","de 1 heure à 2 heures","de 1 heure à 2 heures", null];

//// deja venu
    $alea = ["Oui","Non","Oui","Non","Oui","Non","Oui","Non","Non",null];
    $row["q_6"] = $alea[rand(0,9)];
    if($row["q_6"] == "Oui"){
        $alea = ["2 fois","4 fois","3 fois",null,"5 fois ou plus","3 fois","2 fois","5 fois ou plus","4 fois",null];
        $row["q_6_1"] = $alea[rand(0,9)];
        $alea = ["Il y a moins de 1 an","Il y a 1 an environ","Il y a 2 ans environ","Il y a entre 3 et 5 ans","Il y a plus de 5 ans","Je ne me souviens pas",null];
        $row["q_6_2"] = $alea[rand(0,6)];
    } else{
        $row["q_6_1"] = null;
        $row["q_6_2"] = null;

    }
//// prog visite
    $alea = ["Visite décidée au plus 2-3 jours avant","Visite programmée à l'avance","Visite décidée au plus 2-3 jours avant","Visite programmée à l'avance",null];
    $row["q_7"] = $alea[rand(0,4)];
    if($row["q_7"] == "Visite programmée à l'avance"){
        $row["q_7_1"] = rand(1, 24);
    } else {
        $row["q_7_1"] = null;
    }
////
    $alea = ["Oui", "Non", null];
    $row["q_8"] = $alea[rand(0,2)];
    if($row["q_8"] == "Oui"){
        $row["q_8_1"] = $alea[rand(0,1)];
    } else {
        $row["q_8_1"] = null;
    }
////
    $alea = ["Bouche à oreille (famille, amis, etc)",
        "Affichage publicitaire",
        "Publicité dans les médias",
        "Articles/émissions dans les médias",
        "Bouche à oreille (famille, amis, etc)",
        "Publicité dans les médias","Prospectus","Ecole de votre enfant",
        "Bouche à oreille (famille, amis, etc)",
        "Articles/émissions dans les médias","Promotion dans un supermarché","Affichage/billets dans votre entreprise (CE)","Guides touristiques","Publicité sur un site internet",
        "Bouche à oreille (famille, amis, etc)",
        "Affichage publicitaire",
        "Publicité dans les médias",
        "Articles/émissions dans les médias","Ecole de votre enfant","Affichage/billets dans votre entreprise (CE)","Site web du ZooParc de Beauval",
        "Affichage publicitaire",null];
    $row["q_9"] = $alea[rand(0,22)];
    if( $row["q_9"]== "Affichage publicitaire"){
        $alea = ["Grandes affiches","Affiches sur les portes des magasins",
            "Affiches sur les arrières de bus","Dans les centres commerciaux",
            "Affichages animés (vidéo) dans les centres commerciaux de la région parisienne",
            "Affichage dans le metro parisien","Affichage sur le périphérique parisien","Affichage sur les quais de RER/trains de banlieue",
            "Bus entièrement recouvert à l'éffigie du ZooParc de Beauval en province",null];
        $row["q_9_1"] = $alea[rand(0,9)];
        if($row["q_9_1"] == "Grandes affiches"){
            $alea = ["Paris/Banlieue", "Province", null];
            $row["q_9_1_1"] =$alea[rand(0,2)];
        }else{
            $row["q_9_1_1"] = null;
        }
        if($row["q_9_1"] == "Affiches sur les portes des magasins"){
            $alea = ["Paris/Banlieue", "Province", null];
            $row["q_9_1_2"] = $alea[rand(0,2)];
        } else {
            $row["q_9_1_2"] = null;
        }

        if($row["q_9_1"] == "Affiches sur les arrières de bus"){
            $alea = ["Paris/Banlieue", "Province", null];
            $row["q_9_1_3"] = $alea[rand(0,2)];
        } else {
            $row["q_9_1_3"] = null;
        }
        if($row["q_9_1"] == "Dans les centres commerciaux"){
            $alea = ["Paris/Banlieue", "Province", null];
            $row["q_9_1_4"] = $alea[rand(0,2)];
        } else {
            $row["q_9_1_4"] = null;
        }
    } else {
        $row["q_9_1"] = null;
    }
    if($row["q_9"] == "Publicité dans les médias"){
        $alea = ["Publicité à la télévision","Lancement météo à la télévision","Jeu, publicité à la radio","Publicité dans la presse écrite, un guide touristique",null];
        $row["q_9_2"] = $alea[rand(0,4)];
    } else {
        $row["q_9_2"] = null;
    }
    if("Articles/émissions dans les médias"){
        $alea = ["Emission de télévision","Emission de radio","Article dans la presse écrite (journal, magazine...)",null];
        $row["q_9_3"] = $alea[rand(0,3)];
    } else {
        $row["q_9_3"] = null;
    }
    if($row["q_9"] == "Prospectus" ){
        $alea = ["Dans un hôtel, un restaurant, un Office de tourisme",
            "Dans une station-service/un resturant d'autoroute","un super/hypermarché",
            "Dans votre boîte aux lettres","Sur le part-brise de votre voiture",null];
        $row["q_9_4"] = $alea[rand(0,3)];
    } else {
        $row["q_9_4"] = null;
    }


////
    $alea = ["Oui", "Non", null];
    $row["q_10"] = $alea[rand(0,2)];

    $alea = ["Oui", "Non", null];
    $row["q_10_1"] = $alea[rand(0,2)];

////
    $alea = ["Beaucoup aimé","Aimé","Beaucoup aimé","Peu aimé","Beaucoup aimé","Pas du tout aimé","Peu aimé","Beaucoup aimé","Aimé",null];
    $row["q_11"] = $alea[rand(0,9)];

////
    $alea = ["Oui", "Non","Oui","Non","Non", null];
    $row["q_12"] = $alea[rand(0,5)];
////
    $alea= ["Self-service Le Tropical",
        "Crêperie La Roseraie",
        "L'Eucalyptus",
        "Les Lamentins","Crêperie La Roseraie",
        "La Savane",
        "Les Orangs-outans","Self-service Le Tropical","Les Orangs-outans",
        "Les Chats-pêcheurs","Crêperie La Roseraie","L'Eucalyptus","Les Orangs-outans","La Savane","Self-service Le Tropical","La Pagode","Un chalet","La Savane",null];
    $row["q_12_1"] = $alea[rand(0,18)];
////
    $alea= ["Très satisfait(e)","Satisfait(e)","Peu satisfait(e)","Pas du tout satisfait(e)","Très satisfait(e)","Peu satisfait(e)","Pas du tout satisfait(e)","Très satisfait(e)","Pas du tout satisfait(e)","Satisfait(e)","Très satisfait(e)","Peu satisfait(e)",null];
    $row["q_12_2"] = $alea[rand(0,12)];
////

    var_dump($row);



}