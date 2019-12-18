<?php
class Controller_search extends Controller{

    /** 
     * Table de hash qui contient toutes les requêtes possibles.
     * On utilisera cette table pour dispatcher les propriétés nécéssaires.
     * Une table pour les bar graph.
     */
    private $table_bar = [
        'auteurs' => 'getAllAuteurNbFiche',
        'oeuvres' => 'getAllAnneeNbOeuvres'
    ];

    public function action_search() {
        $this->render('search', []);
    }

    public function action_results() {
        // On récupère uniquement les noms dispo
        $table_bar_noms = array_keys($this->table_bar);
        $type_x = $_GET['g']; // Type de la donnée a mettre en relation

        // Est-ce que le param est dans la table?
        if (! isset($type_x) or ! in_array($type_x, $table_bar_noms)) { 
            $this->action_error(
                'Erreur',
                "Il n'y a pas de graphe pour cette donnée");
        }

        // Choix de la bonne méthode du modèle
        $m = Model::getModel();
        $nom_methode = $this->table_bar[$type_x];
        $json_req = $m->$nom_methode();

        $this->render('results', [
            // Type de la donnée x
           'type_x' => $this->table_bar[$type_x],
           'json_req' => $json_req
        ]);
    }

    public function action_default() {
        $this->action_search();
    }
}