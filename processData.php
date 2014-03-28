<?php
/**
 * Created by PhpStorm.
 * User: grosloup
 * Date: 28/03/2014
 * Time: 09:33
 */
if(!empty($_POST)  && isset($_POST["form"])){

    $formArr = $_POST["form"];

$formArr["q_1"]     = isset($formArr["q_1"]) ? $formArr["q_1"]: null;
$formArr["q_2"]     = isset($formArr["q_2"]) ? $formArr["q_2"]: null;
$formArr["q_2_1"]   = isset($formArr["q_2_1"]) ? $formArr["q_2_1"]: null;
$formArr["q_3"]     = isset($formArr["q_3"]) ? $formArr["q_3"]: null;
$formArr["q_4_1"]   = isset($formArr["q_4_1"]) ? $formArr["q_4_1"]: null;
$formArr["q_4_2"]   = isset($formArr["q_4_2"]) ? $formArr["q_4_2"]: null;
$formArr["q_4_3"]   = isset($formArr["q_4_3"]) ? $formArr["q_4_3"]: null;
$formArr["q_5"]     = isset($formArr["q_5"]) ? $formArr["q_5"]: null;
$formArr["q_6"]     = isset($formArr["q_6"]) ? $formArr["q_6"]: null;
$formArr["q_6_1"]   = isset($formArr["q_6_1"]) ? $formArr["q_6_1"]: null;
$formArr["q_6_2"]   = isset($formArr["q_6_2"]) ? $formArr["q_6_2"]: null;
$formArr["q_7"]     = isset($formArr["q_7"]) ? $formArr["q_7"]: null;
$formArr["q_7_1"]   = isset($formArr["q_7_1"]) ? $formArr["q_7_1"]: null;
$formArr["q_8"]     = isset($formArr["q_8"]) ? $formArr["q_8"]: null;
$formArr["q_8_1"]   = isset($formArr["q_8_1"]) ? $formArr["q_8_1"]: null;
$formArr["q_9"]     = isset($formArr["q_9"]) ? $formArr["q_9"]: null;
$formArr["q_9_1"]   = isset($formArr["q_9_1"]) ? $formArr["q_9_1"]: null;
$formArr["q_9_1_1"] = isset($formArr["q_9_1_1"]) ? $formArr["q_9_1_1"]: null;
$formArr["q_9_1_2"] = isset($formArr["q_9_1_2"]) ? $formArr["q_9_1_2"]: null;
$formArr["q_9_1_3"] = isset($formArr["q_9_1_3"]) ? $formArr["q_9_1_3"]: null;
$formArr["q_9_1_4"] = isset($formArr["q_9_1_4"]) ? $formArr["q_9_1_4"]: null;
$formArr["q_9_2"]   = isset($formArr["q_9_2"]) ? $formArr["q_9_2"]: null;
$formArr["q_9_3"]   = isset($formArr["q_9_3"]) ? $formArr["q_9_3"]: null;
$formArr["q_9_4"]   = isset($formArr["q_9_4"]) ? $formArr["q_9_4"]: null;
$formArr["q_10"]    = isset($formArr["q_10"]) ? $formArr["q_10"]: null;
$formArr["q_10_1"]  = isset($formArr["q_10_1"]) ? $formArr["q_10_1"]: null;
$formArr["q_11"]    = isset($formArr["q_11"]) ? $formArr["q_11"]: null;
$formArr["q_12"]    = isset($formArr["q_21"]) ? $formArr["q_12"]: null;
$formArr["q_12_1"]  = isset($formArr["q_12_1"]) ? $formArr["q_12_1"]: null;
$formArr["q_12_2"]  = isset($formArr["q_12_2"]) ? $formArr["q_12_2"]: null;
$formArr["q_13"]    = isset($formArr["q_13"]) ? $formArr["q_13"]: null;
$formArr["q_14"]    = isset($formArr["q_14"]) ? $formArr["q_14"]: null;
$formArr["q_14_1"]  = isset($formArr["q_14_1"]) ? $formArr["q_14_1"]: null;
$formArr["q_15_1"]  = isset($formArr["q_15_1"]) ? $formArr["q_15_1"]: null;
$formArr["q_15_2"]  = isset($formArr["q_15_2"]) ? $formArr["q_15_2"]: null;
$formArr["q_15_3"]  = isset($formArr["q_15_3"]) ? $formArr["q_15_3"]: null;
$formArr["q_15_4"]  = isset($formArr["q_15_4"]) ? $formArr["q_15_4"]: null;

    try{
        $pdo = new PDO("sqlite:db/enquete.sqlite3");
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) {
        die($e->getMessage());
    }

    $sql = "INSERT INTO datas
    (date_visite, departement, pays, temps_passe, context_visite, temps_sejour, residence, temps_trajet, deja_venu, nbre_visite, derniere_visite, prog_visite, nbre_semaine, pandas, pandas_influence, connaissance_beauval, affiche_pub, affiche_grande, affiche_porte, affiche_bus, affiche_com, pub_media, article_media, prospectus, info_site, info_tel, aime_zoo, restaurer, resto_lequel, resto_satisfait, remarque, infos_sur_zoo, info_sur_hotel, genre, nom, prenom, email)
    VALUES
    (:date_visite, :departement, :pays, :temps_passe, :context_visite, :temps_sejour, :residence, :temps_trajet, :deja_venu, :nbre_visite, :derniere_visite, :prog_visite, :nbre_semaine, :pandas, :pandas_influence, :connaissance_beauval, :affiche_pub, :affiche_grande, :affiche_porte, :affiche_bus, :affiche_com, :pub_media, :article_media, :prospectus, :info_site, :info_tel, :aime_zoo, :restaurer, :resto_lequel, :resto_satisfait, :remarque, :infos_sur_zoo, :info_sur_hotel, :genre, :nom, :prenom, :email)
";
    $stmt = $pdo->prepare($sql);

    foreach($formArr as $k=>$val){
        if(is_array($val) && count($val)){
            $tmp="";
            for($i=0;$i<count($val); $i++){
                $tmp .= $val[$i].";";
            }
            $tmp = substr($tmp, 0, strlen($tmp)-1);
            $formArr[$k] = $tmp;
        }
    }

    $stmt->bindValue(   ":date_visite",            $formArr["q_1"],       PDO::PARAM_STR);
    $stmt->bindValue(   ":departement",            $formArr["q_2"],       PDO::PARAM_STR);
    $stmt->bindValue(   ":pays",                   $formArr["q_2_1"],     PDO::PARAM_STR);
    $stmt->bindValue(   ":temps_passe",            $formArr["q_3"],       PDO::PARAM_STR);
    $stmt->bindValue(   ":context_visite",         $formArr["q_4_1"],     PDO::PARAM_STR);
    $stmt->bindValue(   ":temps_sejour",           $formArr["q_4_2"],     PDO::PARAM_STR);
    $stmt->bindValue(   ":residence",              $formArr["q_4_3"],     PDO::PARAM_STR);
    $stmt->bindValue(   ":temps_trajet",           $formArr["q_5"],       PDO::PARAM_STR);
    $stmt->bindValue(   ":deja_venu",              $formArr["q_6"],       PDO::PARAM_STR);
    $stmt->bindValue(   ":nbre_visite",            $formArr["q_6_1"],     PDO::PARAM_STR);
    $stmt->bindValue(   ":derniere_visite",        $formArr["q_6_2"],     PDO::PARAM_STR);
    $stmt->bindValue(   ":prog_visite",            $formArr["q_7"],       PDO::PARAM_STR);
    $stmt->bindValue(   ":nbre_semaine",           $formArr["q_7_1"],     PDO::PARAM_STR);
    $stmt->bindValue(   ":pandas",                 $formArr["q_8"],       PDO::PARAM_STR);
    $stmt->bindValue(   ":pandas_influence",       $formArr["q_8_1"],     PDO::PARAM_STR);
    $stmt->bindValue(   ":connaissance_beauval",   $formArr["q_9"],       PDO::PARAM_STR);
    $stmt->bindValue(   ":affiche_pub",            $formArr["q_9_1"],     PDO::PARAM_STR);
    $stmt->bindValue(   ":affiche_grande",         $formArr["q_9_1_1"],   PDO::PARAM_STR);
    $stmt->bindValue(   ":affiche_porte",          $formArr["q_9_1_2"],   PDO::PARAM_STR);
    $stmt->bindValue(   ":affiche_bus",            $formArr["q_9_1_3"],   PDO::PARAM_STR);
    $stmt->bindValue(   ":affiche_com",            $formArr["q_9_1_4"],   PDO::PARAM_STR);
    $stmt->bindValue(   ":pub_media",              $formArr["q_9_2"],     PDO::PARAM_STR);
    $stmt->bindValue(   ":article_media",          $formArr["q_9_3"],     PDO::PARAM_STR);
    $stmt->bindValue(   ":prospectus",             $formArr["q_9_4"],     PDO::PARAM_STR);
    $stmt->bindValue(   ":info_site",              $formArr["q_10"],      PDO::PARAM_STR);
    $stmt->bindValue(   ":info_tel",               $formArr["q_10_1"],    PDO::PARAM_STR);
    $stmt->bindValue(   ":aime_zoo",               $formArr["q_11"],      PDO::PARAM_STR);
    $stmt->bindValue(   ":restaurer",              $formArr["q_12"],      PDO::PARAM_STR);
    $stmt->bindValue(   ":resto_lequel",           $formArr["q_12_1"],    PDO::PARAM_STR);
    $stmt->bindValue(   ":resto_satisfait",        $formArr["q_12_2"],    PDO::PARAM_STR);
    $stmt->bindValue(   ":remarque",               $formArr["q_13"],      PDO::PARAM_STR);
    $stmt->bindValue(   ":infos_sur_zoo",          $formArr["q_14"],      PDO::PARAM_STR);
    $stmt->bindValue(   ":info_sur_hotel",         $formArr["q_14_1"],    PDO::PARAM_STR);
    $stmt->bindValue(   ":genre",                  $formArr["q_15_1"],    PDO::PARAM_STR);
    $stmt->bindValue(   ":nom",                    $formArr["q_15_2"],    PDO::PARAM_STR);
    $stmt->bindValue(   ":prenom",                 $formArr["q_15_3"],    PDO::PARAM_STR);
    $stmt->bindValue(   ":email",                  $formArr["q_15_4"],    PDO::PARAM_STR);

    $stmt->execute();

    var_dump($formArr);

}