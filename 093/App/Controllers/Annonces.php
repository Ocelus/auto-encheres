<?php

namespace SYRADEV\AutoEncheres\Controllers;

// On utilisera ici la classe de manipulation de la base de données PdoDb.
use SYRADEV\AutoEncheres\Utils\Database\PdoDb;
use SYRADEV\AutoEncheres\Models\Login;

/*
 *  Classe de gestion des annonces étendue depuis la classe Controller.
 */

class Annonces extends Controller
{

    /*
    * Affiche la liste des annonces.
    */
    public function list(): array|string
    {
        // Requete de type SELECT * sur la table annonces.
        $sql = 'SELECT * FROM `annonces` ORDER BY `marque`';
        // Exécution de la requête
        $annonces = PdoDb::getInstance()->requete($sql);
        // Transmission des annonce à la vue (Layout + template).
        return $this->render('layouts.default', 'templates.annonces', $annonces);
    }

    // public function show($uid_annonce): array|string
    // {
    //     // On récupère l'id de l'annonce
    //     $sql = 'SELECT * FROM `annonces` WHERE `uid_annonce`=' . $uid_annonce;

    //     // Requête d'une seule annonce
    //     $annonce = PdoDb::getInstance()->requete($sql);

    //     // On affiche les informations d'une seule annonce par son uid
    //     return $this->render('layouts.default', 'templates.detail', $annonce);
    // }


    public function show($uid_annonce): array|string
    {
        $result = [];
        // Requete de type SELECT * sur la table annonces.
        $sql = 'SELECT * FROM `annonces` WHERE `uid_annonce` = ' . $uid_annonce;
        $cnx = PdoDb::getInstance();
        // Exécution de la requête
        $result['annonce'] = $cnx->requete($sql, 'fetch');
        // Requete de type SELECT * sur la table encheres.
        $sql = 'SELECT e.`uid_utilisateur`, e.`date`, e.`montant`, u.`nom`, u.`prenom` FROM `encheres` e JOIN `utilisateurs` u ON e.`uid_utilisateur` = u.`uid_utilisateur` WHERE `uid_annonce` = ' . $uid_annonce . ' ORDER BY e.`date` DESC';
        // Exécution de la requête
        $result['enchere'] = $cnx->requete($sql, 'fetch');
        // Transmission de l'annonce à la vue (Layout + template).
        return $this->render('layouts.default', 'templates.detail', $result);
    }

    public function form()
    {
        return $this->render('layouts.default', 'templates.formConnect');
    }

    public function valid(){
        return $this->render('layouts.default', 'templates.validConnect');
    }
}
