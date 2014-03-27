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
                                <input type="text"/>
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
                    <h2>Q7a. Concernant votre visite d'aujourd'hui, vous êtes-vous décidé au dernier moment ou l'aviez-vous programmée à l'avance ? <span class="arrow "><i class="fa fa-chevron-circle-up"></i></span></h2>
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
                                <input type="text" name="form[q_7_1]" id="q_7_1" value=""/>
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
                    <h2>Q8a. Saviez-vous avant de venir que le ZooParc de Beauval avait accueilli 2 pandas géants ? <span class="arrow "><i class="fa fa-chevron-circle-up"></i></span></h2>
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







        </div>
    </div>
</div>



<?php
include_once ROOT . DS . "templates/footer.php";




