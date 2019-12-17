<?php
class Controller_search extends Controller{

    public function action_search() {
        $this->render('search', []);
    }

    public function action_results() {
        if ($_GET['g'] === 'getAllAuteurNbFiche'){
            $this->render('results', []);
        }elseif($_GET['g'] === 'getAllAnneeNbOeuvres') {
            $this->render('results2', []);
        }
    }

    public function action_default() {
        $this->action_search();
    }
}