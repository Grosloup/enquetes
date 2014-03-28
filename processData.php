<?php
/**
 * Created by PhpStorm.
 * User: grosloup
 * Date: 28/03/2014
 * Time: 09:33
 */
if(!empty($_POST)  && isset($_POST["form"])){

    $formArr = $_POST["form"];

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

    $stmt->bindValue(":date_visite","",SQLITE3_TEXT);
    $stmt->bindValue(":departement","",SQLITE3_TEXT);
    $stmt->bindValue(":pays","",SQLITE3_TEXT);
    $stmt->bindValue(":temps_passe","",SQLITE3_TEXT);
    $stmt->bindValue(":context_visite","",SQLITE3_TEXT);
    $stmt->bindValue(":temps_sejour","",SQLITE3_TEXT);
    $stmt->bindValue(":residence","",SQLITE3_TEXT);
    $stmt->bindValue(":temps_trajet","",SQLITE3_TEXT);
    $stmt->bindValue(":deja_venu","",SQLITE3_TEXT);
    $stmt->bindValue(":nbre_visite","",SQLITE3_TEXT);
    $stmt->bindValue(":derniere_visite","",SQLITE3_TEXT);
    $stmt->bindValue(":prog_visite","",SQLITE3_TEXT);
    $stmt->bindValue(":nbre_semaine","",SQLITE3_TEXT);
    $stmt->bindValue(":pandas","",SQLITE3_TEXT);
    $stmt->bindValue(":pandas_influence","",SQLITE3_TEXT);
    $stmt->bindValue(":connaissance_beauval","",SQLITE3_TEXT);
    $stmt->bindValue(":affiche_pub","",SQLITE3_TEXT);
    $stmt->bindValue(":affiche_grande","",SQLITE3_TEXT);
    $stmt->bindValue(":affiche_porte","",SQLITE3_TEXT);
    $stmt->bindValue(":affiche_bus","",SQLITE3_TEXT);
    $stmt->bindValue(":affiche_com","",SQLITE3_TEXT);
    $stmt->bindValue(":pub_media","",SQLITE3_TEXT);
    $stmt->bindValue(":article_media","",SQLITE3_TEXT);
    $stmt->bindValue(":prospectus","",SQLITE3_TEXT);
    $stmt->bindValue(":info_site","",SQLITE3_TEXT);
    $stmt->bindValue(":info_tel","",SQLITE3_TEXT);
    $stmt->bindValue(":aime_zoo","",SQLITE3_TEXT);
    $stmt->bindValue(":restaurer","",SQLITE3_TEXT);
    $stmt->bindValue(":resto_lequel","",SQLITE3_TEXT);
    $stmt->bindValue(":resto_satisfait","",SQLITE3_TEXT);
    $stmt->bindValue(":remarque","",SQLITE3_TEXT);
    $stmt->bindValue(":infos_sur_zoo","",SQLITE3_TEXT);
    $stmt->bindValue(":info_sur_hotel","",SQLITE3_TEXT);
    $stmt->bindValue(":genre","",SQLITE3_TEXT);
    $stmt->bindValue(":nom","",SQLITE3_TEXT);
    $stmt->bindValue(":prenom","",SQLITE3_TEXT);
    $stmt->bindValue(":email","",SQLITE3_TEXT);

    var_dump($formArr);

}