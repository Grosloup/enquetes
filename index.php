<?php
/**
 * Created by PhpStorm.
 * User: Nicolas
 * Date: 27/03/2014
 * Time: 19:13
 */

defined("DS") || define("DS", DIRECTORY_SEPARATOR);
defined("ROOT") || define("ROOT", realpath(__DIR__));

include_once ROOT . DS ."datas" . DS ."depts.php";
include_once ROOT . DS ."datas" . DS ."pays.php";

include_once ROOT . DS . "templates/header.php";
?>
<div id="main">
    <div class="container">
        <form action="" method="post">
            <div id="questions">
                <!-- ################################################################################################### -->
                <!-- ################################################################################################### -->
                <!-- ####                                                                                           #### -->
                <!-- ####                          Question 1                                                       #### -->
                <!-- ####                                                                                           #### -->
                <!-- ################################################################################################### -->
                <!-- ################################################################################################### -->
                <div class="question">
                    <div class="head">
                        <h2>Q1. Quelle était la date de votre visite au ZooParc de Beauval ? - SAISIR AU FORMAT JJ/MM <span class="arrow "><i class="fa fa-chevron-circle-up"></i></span></h2>
                    </div>
                    <div class="body">
                        <div class="row">
                            <div class="col col2"></div>
                            <div class="col col2">
                                <div class="field">
                                    <input type="text" placeholder="JJ/MM" name="form[q_1]" maxlength="5"/>
                                </div>
                            </div>
                            <div class="col col2"></div>

                        </div>
                        <div class="row">
                            <div class="col col4"></div>
                            <div class="col col2 text-right">
                                <div class="field">
                                    <button class="prevBtn"><i class="fa fa-hand-o-up"></i></button>
                                    <button class="nextBtn"><i class="fa fa-hand-o-down"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ################################################################################################### -->
                <!-- ################################################################################################### -->
                <!-- ####                                                                                           #### -->
                <!-- ####                          Question 2 + pays                                                #### -->
                <!-- ####                                                                                           #### -->
                <!-- ################################################################################################### -->
                <!-- ################################################################################################### -->
                <div class="question">
                    <div class="head">
                        <h2>Q2. Quel est le numéro de votre département d'habitation ? (100 pour Pays étranger) <span class="arrow "><i class="fa fa-chevron-circle-up"></i></span></h2>
                    </div>
                    <div class="body">
                        <div class="row">
                            <div class="col col1"></div>
                            <div class="col col3">
                                <div class="field">
                                    <select name="form[q_2]" id="q_2">
                                        <?php foreach($departements as $num=>$nom): ?>
                                            <option value="<?php echo $num." - ".$nom; ?>"><?php echo $num." - ".$nom; ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                            </div>
                            <div class="col col2"></div>
                        </div>
                        <div class="row">
                            <div class="col col1"></div>
                            <div class="col col3">
                                <h4>Si étranger précisez</h4>
                                    <div class="field">
                                        <select name="form[q_2_1]" id="q_2_1">
                                            <?php foreach($pays as $num=>$nom): ?>
                                                <option value="<?php echo $nom; ?>"><?php echo $nom; ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                            </div>
                            <div class="col col2"></div>
                        </div>
                        <div class="row">
                            <div class="col col4"></div>
                            <div class="col col2 text-right">
                                <div class="field">
                                    <button class="prevBtn"><i class="fa fa-hand-o-up"></i></button>
                                    <button class="nextBtn"><i class="fa fa-hand-o-down"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ################################################################################################### -->
                <!-- ################################################################################################### -->
                <!-- ####                                                                                           #### -->
                <!-- ####                          Question 3                                                       #### -->
                <!-- ####                                                                                           #### -->
                <!-- ################################################################################################### -->
                <!-- ################################################################################################### -->
                <div class="question">
                    <div class="head">
                        <h2>Q3. Combien de temps avez-vous passé au ZooParc ? <span class="arrow "><i class="fa fa-chevron-circle-up"></i></span></h2>
                    </div>
                    <div class="body">
                        <div class="row">
                            <div class="col col1"></div>
                            <div class="col col3">
                                <div class="field">
                                    <label for="q_3_a"><input type="radio" name="form[q_3]" id="q_3_a" value="1 jour"/> 1 jour</label>
                                </div>
                                <div class="field">
                                    <label for="q_3_b"><input type="radio" name="form[q_3]" id="q_3_b" value="2 jours"/> 2 jours</label>
                                </div>
                            </div>
                            <div class="col col2"></div>
                        </div>
                        <div class="row">
                            <div class="col col4"></div>
                            <div class="col col2 text-right">
                                <div class="field">
                                    <button class="prevBtn"><i class="fa fa-hand-o-up"></i></button>
                                    <button class="nextBtn"><i class="fa fa-hand-o-down"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ################################################################################################### -->
                <!-- ################################################################################################### -->
                <!-- ####                                                                                           #### -->
                <!-- ####                          Question 4a                                                      #### -->
                <!-- ####                                                                                           #### -->
                <!-- ################################################################################################### -->
                <!-- ################################################################################################### -->
                <div class="question">
                    <div class="head">
                        <h2>Q4a. Quel est le contexte de votre visite  : <span class="arrow "><i class="fa fa-chevron-circle-up"></i></span></h2>
                    </div>
                    <div class="body">
                        <div class="row">
                            <div class="col col4">
                                <div class="field">
                                    <label for="q_4_1_a"><input type="radio" name="form[q_4_1]" id="q_4_1_a" value="Vous habitez près de Beauval, dans un rayon de 20 km"/> Vous habitez près de Beauval, dans un rayon de 20 km</label>
                                </div>
                                <div class="field">
                                    <label for="q_4_1_b"><input type="radio" name="form[q_4_1]" id="q_4_1_b" value="Vous êtes venu exprès à Beauval pour la journée ou le week-end"/> Vous êtes venu exprès à Beauval pour la journée ou le week-end</label>
                                </div>
                                <div class="field">
                                    <label for="q_4_1_c"><input type="radio" name="form[q_4_1]" id="q_4_1_c" value="Vous étiez déjà près de Beauval de passage ou en vacances"/> Vous étiez déjà près de Beauval de passage ou en vacances</label>
                                </div>
                            </div>
                            <div class="col col2"></div>
                        </div>
                        <div class="row">
                            <div class="col col4"></div>
                            <div class="col col2 text-right">
                                <button class="prevBtn"><i class="fa fa-hand-o-up"></i></button>
                                <button class="nextBtn"><i class="fa fa-hand-o-down"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ################################################################################################### -->
                <!-- ################################################################################################### -->
                <!-- ####                                                                                           #### -->
                <!-- ####                          Question 4b et 4c                                                #### -->
                <!-- ####                                                                                           #### -->
                <!-- ################################################################################################### -->
                <!-- ################################################################################################### -->
                <div class="question">
                    <div class="head">
                        <h2>Q4b et Q4c. Combien de temps dure votre séjour (si vous n'habitez pas ici) ? <span class="arrow "><i class="fa fa-chevron-circle-up"></i></span></h2>
                    </div>
                    <div class="body">
                        <div class="row">
                            <div class="col col1"></div>
                            <div class="col col3">
                                <div class="field">
                                    <label for="q_4_2_a"><input type="radio" name="form[q_4_2]" id="q_4_2_a" value="1 jour"/> 1 jour</label>
                                </div>
                                <div class="field">
                                    <label for="q_4_2_b"><input type="radio" name="form[q_4_2]" id="q_4_2_b" value="1 week-end"/> 1 week-end</label>
                                </div>
                                <div class="field">
                                    <label for="q_4_2_c"><input type="radio" name="form[q_4_2]" id="q_4_2_c" value="2 à 3 nuits"/> 2 à 3 nuits</label>
                                </div>
                                <div class="field">
                                    <label for="q_4_2_d"><input type="radio" name="form[q_4_2]" id="q_4_2_d" value="1 semaine"/> 1 semaine</label>
                                </div>
                                <div class="field">
                                    <label for="q_4_2_e"><input type="radio" name="form[q_4_2]" id="q_4_2_e" value="Plus d'une semaine"/> Plus d'une semaine</label>
                                </div>
                            </div>
                            <div class="col col2"></div>

                        </div>
                        <div class="row">
                            <div class="col col1"></div>
                            <div class="col col3">
                                <h4>(Si plus de 1 jour en Qab) Q4c. Durant ce séjour, où résidez-vous principalement ?</h4>
                                <div class="field">
                                    <label for="q_4_3_a"><input type="radio" name="form[q_4_3]" id="q_4_3_a" value="Dans votre résidence principale"/> Dans votre résidence principale</label>
                                </div>
                                <div class="field">
                                    <label for="q_4_3_b"><input type="radio" name="form[q_4_3]" id="q_4_3_b" value="Dans votre résidence secondaire"/> Dans votre résidence secondaire</label>
                                </div>
                                <div class="field">
                                    <label for="q_4_3_c"><input type="radio" name="form[q_4_3]" id="q_4_3_c" value="Chez des amis"/> Chez des amis</label>
                                </div>
                                <div class="field">
                                    <label for="q_4_3_d"><input type="radio" name="form[q_4_3]" id="q_4_3_d" value="A l'hôtel Les Jardins de Beauval"/> A l'hôtel Les Jardins de Beauval</label>
                                </div>
                                <div class="field">
                                    <label for="q_4_3_e"><input type="radio" name="form[q_4_3]" id="q_4_3_e" value="Dans un autre hôtel ou en chambre d'hôtes"/> Dans un autre hôtel ou en chambre d'hôtes</label>
                                </div>
                                <div class="field">
                                    <label for="q_4_3_f"><input type="radio" name="form[q_4_3]" id="q_4_3_f" value="Dans un camping"/> Dans un camping</label>
                                </div>
                                <div class="field">
                                    <label for="q_4_3_g"><input type="radio" name="form[q_4_3]" id="q_4_3_g" value="Autre endroit"/> Autre endroit</label>
                                </div>
                            </div>
                            <div class="col col2"></div>
                        </div>
                        <div class="row">
                            <div class="col col4"></div>
                            <div class="col col2 text-right">
                                <button class="prevBtn"><i class="fa fa-hand-o-up"></i></button>
                                <button class="nextBtn"><i class="fa fa-hand-o-down"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ################################################################################################### -->
                <!-- ################################################################################################### -->
                <!-- ####                                                                                           #### -->
                <!-- ####                          Question 5                                                       #### -->
                <!-- ####                                                                                           #### -->
                <!-- ################################################################################################### -->
                <!-- ################################################################################################### -->
                <div class="question">
                    <div class="head">
                        <h2>Q5. Combien de temps a duré votre trajet jusqu'à Beauval ? <span class="arrow "><i class="fa fa-chevron-circle-up"></i></span></h2>
                    </div>
                    <div class="body">
                        <div class="row">
                            <div class="col col1"></div>
                            <div class="col col3">
                                <div class="field">
                                    <label for="q_5_a"><input type="radio" name="form[q_5]" id="q_5_a" value="Moins d'1 heure"/> Moins d'1 heure</label>
                                </div>
                                <div class="field">
                                    <label for="q_5_b"><input type="radio" name="form[q_5]" id="q_5_b" value="de 1 heure à 2 heures"/> de 1 heure à 2 heures</label>
                                </div>
                                <div class="field">
                                    <label for="q_5_c"><input type="radio" name="form[q_5]" id="q_5_c" value="Plus de 2 heures de trajet"/> Plus de 2 heures de trajet</label>
                                </div>
                            </div>
                            <div class="col col2"></div>
                        </div>
                        <div class="row">
                            <div class="col col4"></div>
                            <div class="col col2 text-right">
                                <button class="prevBtn"><i class="fa fa-hand-o-up"></i></button>
                                <button class="nextBtn"><i class="fa fa-hand-o-down"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ################################################################################################### -->
                <!-- ################################################################################################### -->
                <!-- ####                                                                                           #### -->
                <!-- ####                          Question 6a 6b et 6c                                             #### -->
                <!-- ####                                                                                           #### -->
                <!-- ################################################################################################### -->
                <!-- ################################################################################################### -->
                <div class="question">
                    <div class="head">
                        <h2>Q6a et Q6b et Q6c. Personnellement, étiez vous déjà venu au ZooParc de Beauval ? <span class="arrow "><i class="fa fa-chevron-circle-up"></i></span></h2>
                    </div>
                    <div class="body">
                        <div class="row">
                            <div class="col col1"></div>
                            <div class="col col3">
                                <div class="field">
                                    <label for="q_6_a"><input type="radio" name="form[q_6]" id="q_6_a" value="Moins d'1 heure"/> Oui</label>
                                </div>
                                <div class="field">
                                    <label for="q_6_b"><input type="radio" name="form[q_6]" id="q_6_b" value="de 1 heure à 2 heures"/> Non</label>
                                </div>
                            </div>
                            <div class="col col2"></div>
                        </div>
                        <div class="row">
                            <div class="col col1"></div>
                            <div class="col col3">
                                <h4>(si oui) Q6b. Combien de fois êtes-vous déjà venu, en comptant la visite que vous venez d'effectuer ?</h4>
                                <div class="field">
                                    <label for="q_6_1_a"><input type="radio" name="form[q_6_1]" id="q_6_1_a" value="2 fois"/> 2 fois</label>
                                </div>
                                <div class="field">
                                    <label for="q_6_1_b"><input type="radio" name="form[q_6_1]" id="q_6_1_b" value="3 fois"/> 3 fois"</label>
                                </div>
                                <div class="field">
                                    <label for="q_6_1_c"><input type="radio" name="form[q_6_1]" id="q_6_1_c" value="4 fois"/> 4 fois</label>
                                </div>
                                <div class="field">
                                    <label for="q_6_1_d"><input type="radio" name="form[q_6_1]" id="q_6_1_d" value="5 fois ou plus"/> 5 fois ou plus</label>
                                </div>
                            </div>
                            <div class="col col2"></div>
                        </div>
                        <div class="row">
                            <div class="col col1"></div>
                            <div class="col col3">
                                <h4>(si oui) Q6c. Et à  quand remonte votre précédente visite du ZooParc de Beauval ?</h4>
                                <div class="field">
                                    <label for="q_6_2_a"><input type="radio" name="form[q_6_2]" id="q_6_2_a" value="Il y a moins de 1 an"/> Il y a moins de 1 an</label>
                                </div>
                                <div class="field">
                                    <label for="q_6_2_b"><input type="radio" name="form[q_6_2]" id="q_6_2_b" value="Il y a 1 an environ"/> Il y a 1 an environ</label>
                                </div>
                                <div class="field">
                                    <label for="q_6_2_c"><input type="radio" name="form[q_6_2]" id="q_6_2_c" value="Il y a 2 ans environ"/> Il y a 2 ans environ</label>
                                </div>
                                <div class="field">
                                    <label for="q_6_2_d"><input type="radio" name="form[q_6_2]" id="q_6_2_d" value="Il y a entre 3 et 5 ans"/> Il y a entre 3 et 5 ans</label>
                                </div>
                                <div class="field">
                                    <label for="q_6_2_e"><input type="radio" name="form[q_6_2]" id="q_6_2_e" value="Il y a plus de 5 ans"/> Il y a plus de 5 ans</label>
                                </div>
                                <div class="field">
                                    <label for="q_6_2_f"><input type="radio" name="form[q_6_2]" id="q_6_2_f" value="Je ne me souviens pas"/> Je ne me souviens pas</label>
                                </div>
                            </div>
                            <div class="col col2"></div>
                        </div>
                        <div class="row">
                            <div class="col col4"></div>
                            <div class="col col2 text-right">
                                <button class="prevBtn"><i class="fa fa-hand-o-up"></i></button>
                                <button class="nextBtn"><i class="fa fa-hand-o-down"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ################################################################################################### -->
                <!-- ################################################################################################### -->
                <!-- ####                                                                                           #### -->
                <!-- ####                          Question 7a et 7b                                                #### -->
                <!-- ####                                                                                           #### -->
                <!-- ################################################################################################### -->
                <!-- ################################################################################################### -->
                <div class="question">
                    <div class="head">
                        <h2>Q7a et Q7b. Concernant votre visite d'aujourd'hui, vous êtes-vous décidé au dernier moment ou l'aviez-vous programmée à l'avance ? <span class="arrow "><i class="fa fa-chevron-circle-up"></i></span></h2>
                    </div>
                    <div class="body">
                        <div class="row">
                            <div class="col col1"></div>
                            <div class="col col3">
                                <div class="field">
                                    <label for="q_7_a"><input type="radio" name="form[q_7]" id="q_7_a" value="Visite décidée au plus 2-3 jours avant"/> Visite décidée au plus 2-3 jours avant</label>
                                </div>
                                <div class="field">
                                    <label for="q_7_b"><input type="radio" name="form[q_7]" id="q_7_b" value="Visite programmée à l'avance"/> Visite programmée à l'avance</label>
                                </div>
                            </div>
                            <div class="col col2"></div>
                        </div>
                        <div class="row">
                            <div class="col col1"></div>
                            <div class="col col3">
                                <h4>Q7b. Combien de semaines à l’avance ?</h4>
                                <div class="field">
                                    <input type="text" name="form[q_7_1]" id="q_7_1" value="" placeholder="1" maxlength="2"/>
                                </div>
                            </div>
                            <div class="col col2"></div>
                        </div>
                        <div class="row">
                            <div class="col col4"></div>
                            <div class="col col2 text-right">
                                <button class="prevBtn"><i class="fa fa-hand-o-up"></i></button>
                                <button class="nextBtn"><i class="fa fa-hand-o-down"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ################################################################################################### -->
                <!-- ################################################################################################### -->
                <!-- ####                                                                                           #### -->
                <!-- ####                          Question 8a et 8b                                                #### -->
                <!-- ####                                                                                           #### -->
                <!-- ################################################################################################### -->
                <!-- ################################################################################################### -->
                <div class="question">
                    <div class="head">
                        <h2>Q8a et Q8b. Saviez-vous avant de venir que le ZooParc de Beauval avait accueilli 2 pandas géants ? <span class="arrow "><i class="fa fa-chevron-circle-up"></i></span></h2>
                    </div>
                    <div class="body">
                        <div class="row">
                            <div class="col col1"></div>
                            <div class="col col3">
                                <div class="field">
                                    <label for="q_8_a"><input type="radio" name="form[q_8]" id="q_8_a" value="Moins d'1 heure"/> Oui</label>
                                </div>
                                <div class="field">
                                    <label for="q_8_b"><input type="radio" name="form[q_8]" id="q_8_b" value="de 1 heure à 2 heures"/> Non</label>
                                </div>
                            </div>
                            <div class="col col2"></div>
                        </div>
                        <div class="row">
                            <div class="col col1"></div>
                            <div class="col col3">
                                <h4>(si oui) Q8b. Cela a-t-il influencé votre décision de venir aujourd'hui ?</h4>
                                <div class="field">
                                    <label for="q_8_1_a"><input type="radio" name="form[q_8_1]" id="q_8_1_a" value="Moins d'1 heure"/> Oui</label>
                                </div>
                                <div class="field">
                                    <label for="q_8_1_b"><input type="radio" name="form[q_8_1]" id="q_8_1_b" value="de 1 heure à 2 heures"/> Non</label>
                                </div>
                            </div>
                            <div class="col col2"></div>
                        </div>
                        <div class="row">
                            <div class="col col4"></div>
                            <div class="col col2 text-right">
                                <button class="prevBtn"><i class="fa fa-hand-o-up"></i></button>
                                <button class="nextBtn"><i class="fa fa-hand-o-down"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ################################################################################################### -->
                <!-- ################################################################################################### -->
                <!-- ####                                                                                           #### -->
                <!-- ####                          Question 9                                                       #### -->
                <!-- ####                                                                                           #### -->
                <!-- ################################################################################################### -->
                <!-- ################################################################################################### -->
                <div class="question">
                    <div class="head">
                        <h2>Q9. Quels sont tous les moyens qui vous ont permis d'entendre parler du ZooParc de Beauval et vous ont décidé à venir ? <span class="arrow"><i class="fa fa-chevron-circle-up"></i></span></h2>
                    </div>
                    <div class="body">
                        <div class="row">
                            <div class="col col5">
                                <div class="field">
                                    <label for="q_9_a"><input type="checkbox" name="[q_9][]" id="q_9_a"/> Bouche à oreille (famille, amis, etc)</label>
                                </div>
                            </div>
                            <div class="col col1"></div>
                        </div>
                        <div class="row">
                            <div class="col col5">
                                <div class="field">
                                    <label for="q_9_b"><input type="checkbox" name="[q_9][]" id="q_9_b"/> Affichage publicitaire</label>
                                </div>
                                <div class="row">
                                    <div class="col col1"></div>
                                    <div class="col col5">
                                        <h4>Quel types d'affichages ?</h4>

                                        <div class="field">
                                            <label for="q_9_1_a"><input type="checkbox" name="form[q_9_1][]" id="q_9_1_a" value="Grandes affiches"/> Grandes affiches</label>
                                        </div>
                                        <div class="row">
                                            <div class="col col1"></div>
                                            <div class="col col5">
                                                <h4>Où était-ce ?</h4>
                                                <div class="field"><label for="q_9_1_1_a"><input type="checkbox" name="form[q_9_1_1][]" id="q_9_1_1_a" value="Paris/Banlieue"/> Paris/Banlieue</label></div>
                                                <div class="field"><label for="q_9_1_1_b"><input type="checkbox" name="form[q_9_1_1][]" id="q_9_1_1_b" value="Province"/> Province</label></div>
                                            </div>
                                        </div>
                                        <div class="field">
                                            <label for="q_9_1_b"><input type="checkbox" name="form[q_9_1][]" id="q_9_1_b" value="Affiches sur les portes des magasins"/> Affiches sur les portes des magasins</label>
                                        </div>
                                        <div class="row">
                                            <div class="col col1"></div>
                                            <div class="col col5">
                                                <h4>Où était-ce ?</h4>
                                                <div class="field"><label for="q_9_1_2_a"><input type="checkbox" name="form[q_9_1_2][]" id="q_9_1_2_a" value="Paris/Banlieue"/> Paris/Banlieue</label></div>
                                                <div class="field"><label for="q_9_1_2_b"><input type="checkbox" name="form[q_9_1_2][]" id="q_9_1_2_b" value="Province"/> Province</label></div>
                                            </div>
                                        </div>
                                        <div class="field">
                                            <label for="q_9_1_c"><input type="checkbox" name="form[q_9_1][]" id="q_9_1_c" value="Affiches sur les arrières de bus"/> Affiches sur les arrières de bus</label>
                                        </div>
                                        <div class="row">
                                            <div class="col col1"></div>
                                            <div class="col col5">
                                                <h4>Où était-ce ?</h4>
                                                <div class="field"><label for="q_9_1_3_a"><input type="checkbox" name="form[q_9_1_3][]" id="q_9_1_3_a" value="Paris/Banlieue"/> Paris/Banlieue</label></div>
                                                <div class="field"><label for="q_9_1_3_b"><input type="checkbox" name="form[q_9_1_3][]" id="q_9_1_3_b" value="Province"/> Province</label></div>
                                            </div>
                                        </div>
                                        <div class="field">
                                            <label for="q_9_1_d"><input type="checkbox" name="form[q_9_1][]" id="q_9_1_d" value="Dans les centres commerciaux"/> Dans les centres commerciaux</label>
                                        </div>
                                        <div class="row">
                                            <div class="col col1"></div>
                                            <div class="col col5">
                                                <h4>Où était-ce ?</h4>
                                                <div class="field"><label for="q_9_1_4_a"><input type="checkbox" name="form[q_9_1_4][]" id="q_9_1_4_a" value="Paris/Banlieue"/> Paris/Banlieue</label></div>
                                                <div class="field"><label for="q_9_1_4_b"><input type="checkbox" name="form[q_9_1_4][]" id="q_9_1_4_b" value="Province"/> Province</label></div>
                                            </div>
                                        </div>
                                        <div class="field">
                                            <label for="q_9_1_e"><input type="checkbox" name="form[q_9_1][]" id="q_9_1_e" value="Affichages animés (vidéo) dans les centres commerciaux de la région parisienne"/> Affichages animés (vidéo) dans les centres commerciaux de la région parisienne</label>
                                        </div>
                                        <div class="field">
                                            <label for="q_9_1_f"><input type="checkbox" name="form[q_9_1][]" id="q_9_1_f" value="Affichage dans le metro parisien"/> Affichage dans le metro parisien</label>
                                        </div>
                                        <div class="field">
                                            <label for="q_9_1_g"><input type="checkbox" name="form[q_9_1][]" id="q_9_1_g" value="Affichage sur le périphérique parisien"/> Affichage sur le périphérique parisien</label>
                                        </div>
                                        <div class="field">
                                            <label for="q_9_1_h"><input type="checkbox" name="form[q_9_1][]" id="q_9_1_h" value="Affichage sur les quais de RER/trains de banlieue"/> Affichage sur les quais de RER/trains de banlieue</label>
                                        </div>
                                        <div class="field">
                                            <label for="q_9_1_i"><input type="checkbox" name="form[q_9_1][]" id="q_9_1_i" value="Bus entièrement recouvert à l'éffigie du ZooParc de Beauval en province"/> Bus entièrement recouvert à l'éffigie du ZooParc de Beauval en province</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col col1"></div>
                        </div>
                        <div class="row">
                            <div class="col col5">
                                <div class="field">
                                    <label for="q_9_c"><input type="checkbox" name="[q_9][]" id="q_9_c"/> Publicité dans les médias</label>
                                </div>
                                <div class="row">
                                    <div class="col col1"></div>
                                    <div class="col col5">
                                        <h4>Quel type de média ?</h4>
                                        <div class="field">
                                            <label for="q_9_2_a"><input type="checkbox" name="form[q_9_2][]" id="q_9_2_a" value="Publicité à la télévision"/> Publicité à la télévision</label>
                                        </div>
                                        <div class="field">
                                            <label for="q_9_2_b"><input type="checkbox" name="form[q_9_2][]" id="q_9_2_b" value="Lancement météo à la télévision"/> Lancement météo à la télévision</label>
                                        </div>
                                        <div class="field">
                                            <label for="q_9_2_c"><input type="checkbox" name="form[q_9_2][]" id="q_9_2_c" value="Jeu, publicité à la radio"/> Jeu, publicité à la radio</label>
                                        </div>
                                        <div class="field">
                                            <label for="q_9_2_d"><input type="checkbox" name="form[q_9_2][]" id="q_9_2_d" value="Publicité dans la presse écrite, un guide touristique"/> Publicité dans la presse écrite, un guide touristique</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col col1"></div>
                        </div>
                        <div class="row">
                            <div class="col col5">
                                <div class="field">
                                    <label for="q_9_d"><input type="checkbox" name="[q_9][]" id="q_9_d"/> Articles/émissions dans les médias</label>
                                </div>
                                <div class="row">
                                    <div class="col col1"></div>
                                    <div class="col col5">
                                        <h4>Merci de préciser</h4>
                                        <div class="field">
                                            <label for="q_9_3_a"><input type="checkbox" name="form[q_9_3][]" id="q_9_3_a" value="Emission de télévision"/> Emission de télévision</label>
                                        </div>
                                        <div class="field">
                                            <label for="q_9_3_b"><input type="checkbox" name="form[q_9_3][]" id="q_9_3_b" value="Emission de radio"/> Emission de radio</label>
                                        </div>
                                        <div class="field">
                                            <label for="q_9_3_c"><input type="checkbox" name="form[q_9_3][]" id="q_9_3_c" value="Article dans la presse écrite (journal, magazine...)"/> Article dans la presse écrite (journal, magazine...)</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col col1"></div>
                        </div>
                        <div class="row">
                            <div class="col col5">
                                <div class="field">
                                    <label for="q_9_e"><input type="checkbox" name="[q_9][]" id="q_9_e"/> Prospectus</label>
                                </div>
                                <div class="row">
                                    <div class="col col1"></div>
                                    <div class="col col5">
                                        <h4>Où avez-vous vu/obtenu ce(s) prospectus</h4>
                                        <div class="field">
                                            <label for="q_9_4_a"><input type="checkbox" name="form[q_9_4]" id="q_9_4_a" value="Dans un hôtel, un restaurant, un Office de tourisme"/> Dans un hôtel, un restaurant, un Office de tourisme</label>
                                        </div>
                                        <div class="field">
                                            <label for="q_9_4_b"><input type="checkbox" name="form[q_9_4]" id="q_9_4_b" value="Dans une station-service/un resturant d'autoroute"/> Dans une station-service/un resturant d'autoroute</label>
                                        </div>
                                        <div class="field">
                                            <label for="q_9_4_c"><input type="checkbox" name="form[q_9_4]" id="q_9_4_c" value="un super/hypermarché"/> un super/hypermarché</label>
                                        </div>
                                        <div class="field">
                                            <label for="q_9_4_d"><input type="checkbox" name="form[q_9_4]" id="q_9_4_d" value="Dans votre boîte aux lettres"/> Dans votre boîte aux lettres</label>
                                        </div>
                                        <div class="field">
                                            <label for="q_9_4_e"><input type="checkbox" name="form[q_9_4]" id="q_9_4_e" value="Sur le part-brise de votre voiture"/> Sur le part-brise de votre voiture</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col col1"></div>
                        </div>
                        <div class="row">
                            <div class="col col5">
                                <div class="field">
                                    <label for="q_9_f"><input type="checkbox" name="[q_9][]" id="q_9_f"/> Promotion dans un supermarché</label>
                                </div>
                            </div>
                            <div class="col col1"></div>
                        </div>
                        <div class="row">
                            <div class="col col5">
                                <div class="field">
                                    <label for="q_9_g"><input type="checkbox" name="[q_9][]" id="q_9_g"/> Ecole de votre enfant</label>
                                </div>
                            </div>
                            <div class="col col1"></div>
                        </div>
                        <div class="row">
                            <div class="col col5">
                                <div class="field">
                                    <label for="q_9_h"><input type="checkbox" name="[q_9][]" id="q_9_h"/> Affichage/billets dans votre entreprise (CE)</label>
                                </div>
                            </div>
                            <div class="col col1"></div>
                        </div>
                        <div class="row">
                            <div class="col col5">
                                <div class="field">
                                    <label for="q_9_i"><input type="checkbox" name="[q_9][]" id="q_9_i"/> Guides touristiques</label>
                                </div>
                            </div>
                            <div class="col col1"></div>
                        </div>
                        <div class="row">
                            <div class="col col5">
                                <div class="field">
                                    <label for="q_9_j"><input type="checkbox" name="[q_9][]" id="q_9_j"/> Site web du ZooParc de Beauval</label>
                                </div>
                            </div>
                            <div class="col col1"></div>
                        </div>
                        <div class="row">
                            <div class="col col5">
                                <div class="field">
                                    <label for="q_9_k"><input type="checkbox" name="[q_9][]" id="q_9_k"/> Publicité sur un site internet</label>
                                </div>
                            </div>
                            <div class="col col1"></div>
                        </div>
                        <div class="row">
                            <div class="col col4"></div>
                            <div class="col col2 text-right">
                                <button class="prevBtn"><i class="fa fa-hand-o-up"></i></button>
                                <button class="nextBtn"><i class="fa fa-hand-o-down"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ################################################################################################### -->
                <!-- ################################################################################################### -->
                <!-- ####                                                                                           #### -->
                <!-- ####                          Question 10                                                      #### -->
                <!-- ####                                                                                           #### -->
                <!-- ################################################################################################### -->
                <!-- ################################################################################################### -->
                <div class="question">
                    <div class="head">
                        <h2>Q10. Avant de venir au ZooParc de Beauval: <span class="arrow"><i class="fa fa-chevron-circle-up"></i></span> </h2>
                    </div>
                    <div class="body">
                        <div class="row">
                            <div class="col col1"></div>
                            <div class="col col3">
                                <h4>Vous êtes-vous connecté à notre site www.zoobeauval.com ?</h4>
                                <label for="q_10_a"><input type="radio" name="form[q_10]" id="q_10_a" value="oui"/> Oui</label>
                                <label for="q_10_b"><input type="radio" name="form[q_10]" id="q_10_b" value="non"/> Non</label>
                            </div>
                            <div class="col col2"></div>
                        </div>
                        <div class="row">
                            <div class="col col1"></div>
                            <div class="col col3">
                                <h4>Avez-vous téléphoné au ZooParc de Beauval pour obtenir des renseignements ?</h4>
                                <label for="q_10_1_a"><input type="radio" name="form[q_10_1]" id="q_10_1_a" value="oui"/> Oui</label>
                                <label for="q_10_1_b"><input type="radio" name="form[q_10_1]" id="q_10_1_b" value="non"/> Non</label>
                            </div>
                            <div class="col col2"></div>
                        </div>
                        <div class="row">
                            <div class="col col4"></div>
                            <div class="col col2 text-right">
                                <button class="prevBtn"><i class="fa fa-hand-o-up"></i></button>
                                <button class="nextBtn"><i class="fa fa-hand-o-down"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ################################################################################################### -->
                <!-- ################################################################################################### -->
                <!-- ####                                                                                           #### -->
                <!-- ####                          Question 11                                                      #### -->
                <!-- ####                                                                                           #### -->
                <!-- ################################################################################################### -->
                <!-- ################################################################################################### -->
                <div class="question">
                    <div class="head">
                        <h2>Q11. Globalement, en ce qui concerne la visite du ZooParc de Beauval, diriez-vous que vous avez : <span class="arrow"><i class="fa fa-chevron-circle-up"></i></span></h2>
                    </div>
                    <div class="body">
                        <div class="row">
                            <div class="col col1"></div>
                            <div class="col col3">
                                <div class="field">
                                    <label for="q_11_a"><input type="radio" name="form[q_11]" id="q_11_a" value="Beaucoup aimé"/> Beaucoup aimé</label>
                                </div>
                                <div class="field">
                                    <label for="q_11_b"><input type="radio" name="form[q_11]" id="q_11_b" value="Aimé"/> Aimé</label>
                                </div>
                                <div class="field">
                                    <label for="q_11_c"><input type="radio" name="form[q_11]" id="q_11_c" value="Peu aimé"/> Peu aimé</label>
                                </div>
                                <div class="field">
                                    <label for="q_11_d"><input type="radio" name="form[q_11]" id="q_11_d" value="Pas du tout aimé"/> Pas du tout aimé</label>
                                </div>
                            </div>
                            <div class="col col2"></div>
                        </div>
                        <div class="row">
                            <div class="col col4"></div>
                            <div class="col col2 text-right">
                                <button class="prevBtn"><i class="fa fa-hand-o-up"></i></button>
                                <button class="nextBtn"><i class="fa fa-hand-o-down"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ################################################################################################### -->
                <!-- ################################################################################################### -->
                <!-- ####                                                                                           #### -->
                <!-- ####                          Question 12a 12b 12c                                             #### -->
                <!-- ####                                                                                           #### -->
                <!-- ################################################################################################### -->
                <!-- ################################################################################################### -->
                <div class="question">
                    <div class="head">
                        <h2>Q12a Q12b q12c. Vous êtes-vous arrêté dans un point de restauration ? <span class="arrow"><i class="fa fa-chevron-circle-up"></i></span></h2>
                    </div>
                    <div class="body">
                        <div class="row">
                            <div class="col col1"></div>
                            <div class="col col3">
                                <div class="field"><label for="q_12_a"><input type="radio" name="form[q_12]" id="q_12_a" value="Oui"/></label> Oui</div>
                                <div class="field"><label for="q_12_b"><input type="radio" name="form[q_12]" id="q_12_b" value="Non"/></label> Non</div>
                            </div>
                            <div class="col col2"></div>
                        </div>
                        <div class="row">
                            <div class="col col1"></div>
                            <div class="col col3">
                                <h4>Q12b. (si oui) Lequel ?</h4>
                                <div class="field"><label for="q_12_1_a"><input type="radio" name="form[q_12_1]" id="q_12_1_a" value="Self-service Le Tropical"/> Self-service Le Tropical</label></div>
                                <div class="field"><label for="q_12_1_b"><input type="radio" name="form[q_12_1]" id="q_12_1_b" value="Crêperie La Roseraie"/> Crêperie La Roseraie</label></div>
                                <div class="field"><label for="q_12_1_c"><input type="radio" name="form[q_12_1]" id="q_12_1_c" value="L'Eucalyptus"/> L'Eucalyptus</label></div>
                                <div class="field"><label for="q_12_1_d"><input type="radio" name="form[q_12_1]" id="q_12_1_d" value="Les Lamentins"/> Les Lamentins</label></div>
                                <div class="field"><label for="q_12_1_e"><input type="radio" name="form[q_12_1]" id="q_12_1_e" value="Les Chats-pêcheurs"/> Les Chats-pêcheurs</label></div>
                                <div class="field"><label for="q_12_1_f"><input type="radio" name="form[q_12_1]" id="q_12_1_f" value="La Savane"/> La Savane</label></div>
                                <div class="field"><label for="q_12_1_g"><input type="radio" name="form[q_12_1]" id="q_12_1_g" value="Les Orangs-outans"/> Les Orangs-outans</label></div>
                                <div class="field"><label for="q_12_1_h"><input type="radio" name="form[q_12_1]" id="q_12_1_h" value="La Pagode"/> La Pagode</label></div>
                                <div class="field"><label for="q_12_1_i"><input type="radio" name="form[q_12_1]" id="q_12_1_i" value="Un chalet"/> Un chalet</label></div>
                            </div>
                            <div class="col col2"></div>
                        </div>
                        <div class="row">
                            <div class="col col1"></div>
                            <div class="col col3">
                                <h4>Q12c. Concernant la qualité de la restauration, êtes-vous :</h4>
                                <div class="field"><label for="q_12_2_a"><input type="radio" name="form[q_12_2]" id="q_12_2_a" value="Très satisfait(e)"/> Très satisfait(e)</label></div>
                                <div class="field"><label for="q_12_2_b"><input type="radio" name="form[q_12_2]" id="q_12_2_b" value="Satisfait(e)"/> Satisfait(e)</label></div>
                                <div class="field"><label for="q_12_2_c"><input type="radio" name="form[q_12_2]" id="q_12_2_c" value="Peu satisfait(e)"/> Peu satisfait(e)</label></div>
                                <div class="field"><label for="q_12_2_d"><input type="radio" name="form[q_12_2]" id="q_12_2_d" value="Pas du tout satisfait(e)"/> Pas du tout satisfait(e)</label></div>
                            </div>
                            <div class="col col2"></div>
                        </div>
                        <div class="row">
                            <div class="col col4"></div>
                            <div class="col col2 text-right">
                                <button class="prevBtn"><i class="fa fa-hand-o-up"></i></button>
                                <button class="nextBtn"><i class="fa fa-hand-o-down"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ################################################################################################### -->
                <!-- ################################################################################################### -->
                <!-- ####                                                                                           #### -->
                <!-- ####                          Question 13                                                      #### -->
                <!-- ####                                                                                           #### -->
                <!-- ################################################################################################### -->
                <!-- ################################################################################################### -->
                <div class="question">
                    <div class="head">
                        <h2>Q13. Remarques et suggestions <span class="arrow"><i class="fa fa-chevron-circle-up"></i></span></h2>
                    </div>
                    <div class="body">
                        <div class="row">
                            <div class="col col1"></div>
                            <div class="col col4">
                                <textarea name="form[q_13]" id="q_13"></textarea>
                            </div>
                            <div class="col col1"></div>
                        </div>
                        <div class="row">
                            <div class="col col4"></div>
                            <div class="col col2 text-right">
                                <button class="prevBtn"><i class="fa fa-hand-o-up"></i></button>
                                <button class="nextBtn"><i class="fa fa-hand-o-down"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ################################################################################################### -->
                <!-- ################################################################################################### -->
                <!-- ####                                                                                           #### -->
                <!-- ####                          Question 14a 14b                                                 #### -->
                <!-- ####                                                                                           #### -->
                <!-- ################################################################################################### -->
                <!-- ################################################################################################### -->
                <div class="question">
                    <div class="head">
                        <h2>Q14a et Q14b. Aimeriez-vous recevoire 2 ou 3 fois par an des informations sur le ZooParc de
                            Beauval (nouveautés, offres promotionnelles...) ? <span class="arrow"><i class="fa fa-chevron-circle-up"></i></span></h2>
                    </div>
                    <div class="body">
                        <div class="row">
                            <div class="col col1"></div>
                            <div class="col col3">
                                <div class="field">
                                    <label for="q_14_a"><input type="radio" name="form[q_14]" id="q_14_a" value="oui"/> Oui</label>
                                </div>
                                <div class="field">
                                    <label for="q_14_b"><input type="radio" name="form[q_14]" id="q_14_b" value="non"/> Non</label>
                                </div>
                            </div>
                            <div class="col col2"></div>
                        </div>
                        <div class="row">
                            <div class="col col1"></div>
                            <div class="col col3">
                                <h4>Q14b. Et sur l'hôtel Les Jardins de Beauval ?</h4>
                                <div class="field">
                                    <label for="q_14_1_a"><input type="radio" name="form[q_14_1]" id="q_14_1_a" value="oui"/> Oui</label>
                                </div>
                                <div class="field">
                                    <label for="q_14_1_b"><input type="radio" name="form[q_14_1]" id="q_14_1_b" value="non"/> Non</label>
                                </div>
                            </div>
                            <div class="col col2"></div>
                        </div>
                        <div class="row">
                            <div class="col col4"></div>
                            <div class="col col2 text-right">
                                <button class="prevBtn"><i class="fa fa-hand-o-up"></i></button>
                                <button class="nextBtn"><i class="fa fa-hand-o-down"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ################################################################################################### -->
                <!-- ################################################################################################### -->
                <!-- ####                                                                                           #### -->
                <!-- ####                          Question civilités                                               #### -->
                <!-- ####                                                                                           #### -->
                <!-- ################################################################################################### -->
                <!-- ################################################################################################### -->
                <div class="question">
                    <div class="head">
                        <h2>Civilités <span class="arrow"><i class="fa fa-chevron-circle-up"></i></span></h2>
                    </div>
                    <div class="body">
                        <div class="row">
                            <div class="col col1"></div>
                            <div class="col col4">
                                <div class="field">
                                    <label for="q_15_1_a"><input type="radio" name="form[q_15_1]" value="Mme, Mlle" id="q_15_1_a"/> Mme, Mlle</label>
                                    <label for="q_15_1_b"><input type="radio" name="form[q_15_1]" value="Mr" id="q_15_1_b" /> Mr</label>
                                </div>
                                <div class="field">
                                    <label for="nom">Nom</label><input type="text" name="form[q_15_2]" id="nom"/>
                                </div>
                                <div class="field">
                                    <label for="prenom">Prenom</label><input type="text" name="form[q_15_3]" id="prenom"/>
                                </div>
                                <div class="field">
                                    <label for="email">Email</label><input type="text" name="form[q_15_4]" id="email"/>
                                </div>
                            </div>
                            <div class="col col1"></div>
                        </div>
                    </div>
                </div>
                <!-- ################################################################################################### -->
                <!-- ################################################################################################### -->
                <!-- ####                                                                                           #### -->
                <!-- ####                          validation                                                       #### -->
                <!-- ####                                                                                           #### -->
                <!-- ################################################################################################### -->
                <!-- ################################################################################################### -->
                <div class="question">
                    <div class="head">
                        <h2>Validation <span class="arrow"><i class="fa fa-chevron-circle-up"></i></span></h2>
                    </div>
                    <div class="body">
                        <div class="row">
                            <div class="col col1"></div>
                            <div class="col col2 text-center">
                                <button type="submit" class="btn">Enregistrer</button>
                            </div>
                            <div class="col col2 text-center">
                                <button type="reset" class="btn">Annuler</button>
                            </div>
                            <div class="col col1"></div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
<?php
include_once ROOT . DS . "templates/footer.php";




