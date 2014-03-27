<?php
/**
 * Created by PhpStorm.
 * User: Nicolas
 * Date: 27/03/2014
 * Time: 19:13
 */

defined("DS") || define("DS", DIRECTORY_SEPARATOR);
defined("ROOT") || define("ROOT", realpath(__DIR__));


include_once ROOT . DS . "templates/header.php";
?>



<div id="main">
    <div class="container">
        <div id="questions">
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
            <div class="question">
                <div class="head">
                    <h2>Q2. Quel est le numéro de votre département d'habitation ? (100 pour Pays étranger) <span class="arrow "><i class="fa fa-chevron-circle-up"></i></span></h2>
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
            <div class="question">
                <div class="head">
                    <h2>Q3. Combien de temps avez-vous passé au ZooParc ? <span class="arrow "><i class="fa fa-chevron-circle-up"></i></span></h2>
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
            <div class="question">
                <div class="head">
                    <h2>Q4a. Quel est le contexte de votre visite  : <span class="arrow "><i class="fa fa-chevron-circle-up"></i></span></h2>
                </div>
                <div class="body">

                </div>

            </div>
            <div class="question">
                <div class="head">
                    <h2>Q4b. Combien de temps dure votre séjour (si vous n'habitez pas ici) ? <span class="arrow "><i class="fa fa-chevron-circle-up"></i></span></h2>
                </div>
                <div class="body">

                </div>

            </div>
            <div class="question">
                <div class="head">
                    <h2>Q4c. Durant ce séjour, où résidez-vous principalement ? <span class="arrow "><i class="fa fa-chevron-circle-up"></i></span></h2>
                </div>
                <div class="body">

                </div>

            </div>
            <div class="question">
                <div class="head">
                    <h2>Q5. Combien de temps a duré votre trajet jusqu'à Beauval ? <span class="arrow "><i class="fa fa-chevron-circle-up"></i></span></h2>
                </div>
                <div class="body">

                </div>

            </div>
            <div class="question">
                <div class="head">
                    <h2>Q6a. Personnellement, étiez vous déjà venu au ZooParc de Beauval ? <span class="arrow "><i class="fa fa-chevron-circle-up"></i></span></h2>
                </div>
                <div class="body">

                </div>

            </div>
            <div class="question">
                <div class="head">
                    <h2>Q6b. Combien de fois êtes-vous déjà venu, en comptant la visite que vous venez d'effectuer ? <span class="arrow "><i class="fa fa-chevron-circle-up"></i></span></h2>
                </div>
                <div class="body">

                </div>

            </div>
            <div class="question">
                <div class="head">
                    <h2>Q6c. Et à  quand remonte votre précédente visite du ZooParc de Beauval ? <span class="arrow "><i class="fa fa-chevron-circle-up"></i></span></h2>
                </div>
                <div class="body">

                </div>

            </div>
        </div>
    </div>
</div>



<?php
include_once ROOT . DS . "templates/footer.php";




