<html>
    <head>
        <title>jQuery post form data using .ajax() method by codeofaninja.com</title>

    </head>
<body>

<h1>jQuery post form data using .ajax() method</h1>
<div>Fill out and submit the form below to get response.</div>

<!-- our form -->
<form id='userForm'>
  <fieldset>
    <h3>Presentation</h3>
    <label>titre</label><br/>
    <input type="textarea" name="titre" /><br/> <!--auteurNom,auteurNom2, auteurNomReel2, auteurNom3, auteurNomReel3-->
    <label>Nom</label><br/>
    <input type="textarea" name="name" /><br/> <!--auteurNom,auteurNom2, auteurNomReel2, auteurNom3, auteurNomReel3-->
    <label>Prenom</label><br/>
    <input type="textarea" name="surname" /><br/> <!--auteurPrenom,auteurPrenomReel,auteurPrenom2, auteurPrenomReel2, auteurPrenom3, auteurPrenomReel3 -->
<!--  <label>Genre<input type="textarea" name="type" /></label> <!--natureTxt , int-->
  <label>Date de première mise en circulation</label><br/>
  <input type="textarea" name="dateTot" /><br/> <!--auteurNom,auteurNom2, auteurNomReel2, auteurNom3, auteurNomReel3-->
  <label>Date de dernière mise en circulation</label><br/>
  <input type="textarea" name="dateTard" /><br/>
  <label>Recherche Mot clé</label><br/>
  <input type="textarea" name="KeyW" /><br/>
</fieldset>
<br/>
<br/>

<fieldset>
  <h3>Etude du genre</h3>
  <label>Désignations génériques</label><br/>
  <input type="textarea" name="designation" /><br/> <!--auteurNom,auteurNom2, auteurNomReel2, auteurNom3, auteurNomReel3-->
  <label>Année de(s) designation(s)</label><br/>
  <input type="textarea" name="AnneeDebut" /><br/> <!--auteurNom,auteurNom2, auteurNomReel2, auteurNom3, auteurNomReel3-->
  <input type="textarea" name="AnneeFin" /><br/> <!--auteurPrenom,auteurPrenomReel,auteurPrenom2, auteurPrenomReel2, auteurPrenom3, auteurPrenomReel3 -->
<!--  <label>Genre<input type="textarea" name="type" /></label> <!--natureTxt , int-->
  <label>Filtrage sur les types de designations</label>
  <table>
  <tr>
    <td><input type="checkbox" name="boxFiltre[]" value='Discours auctorial'>Discours auctorial</td>
    <td><input type="checkbox" name="boxCFiltre[]" value='Dispositif éditorial'>Dispositif éditorial</td>
    <td><input type="checkbox" name="boxCFiltre[]" value='Réception critique'>Réception critique</td>
  </tr>
</table>

  <label>auteur Comparés</label><br/>
  <input type="textarea" name="auteurComp" /><br/> <!--auteurNom,auteurNom2, auteurNomReel2, auteurNom3, auteurNomReel3-->
  <label>Date du lien avec l'auteur</label><br/>
  <input type="textarea" name="dateADebut" /><br/>
  <input type="textarea" name="dateAFin" /><br/>
</fieldset>

<br/>
<br/>

<fieldset>
  <h3>Matériel</h3>
  <label>Support de publication</label><br/>
  <input type="textarea" name="support" /><br/> <!--auteurNom,auteurNom2, auteurNomReel2, auteurNom3, auteurNomReel3-->
  <label>Année de parution</label><br/>
  <input type="textarea" name="yearParutionDebut" /><br/> <!--auteurNom,auteurNom2, auteurNomReel2, auteurNom3, auteurNomReel3-->
  <input type="textarea" name="yearParutionFin" /><br/> <!--auteurNom,auteurNom2, auteurNomReel2, auteurNom3, auteurNomReel3-->
  <label>Catégorie</label><br/>
  <table>
  <tr>
    <td><input type="checkbox" name="boxC[]" value='Anticipation'>Anticipation</td>
    <td><input type="checkbox" name="boxC[]" value='Jeunesse'>Jeunesse</td>
    <td><input type="checkbox" name="boxC[]" value='Sentimental'>Sentimental</td>
  </tr>
  <tr>
    <td><input type="checkbox" name="boxC[]" value='Aventure'>Aventure</td>
    <td><input type="checkbox" name="boxC[]" value='Litterature'>Littérature générale</td>
    <td><input type="checkbox" name="boxC[]" value='SF'>SF</td>
  </tr>
  <tr>
    <td><input type="checkbox" name="boxC[]" value='Luxe'>Edition de luxe/bibliophilie</td>
    <td><input type="checkbox" name="boxC[]" value='Policier'>Policier</td>
    <td><input type="checkbox" name="boxC[]" value='Autre'>Autre</td>
  </tr>
  <tr>
    <td><input type="checkbox" name="boxC[]" value='Fantastique'>Fantastique</td>
    <td><input type="checkbox" name="boxC[]" value='Populaire'>Populaire</td>
    <td><input type="checkbox" name="boxC[]" value='Rien'>Rien</td>
  </tr>
</table>
<!--  <label>Genre<input type="textarea" name="type" /></label> <!--natureTxt , int-->
<label>Nom de l'illustrateur</label><br/>
<input type="textarea" name="nomIllus" /><br/> <!--auteurNom,auteurNom2, auteurNomReel2, auteurNom3, auteurNomReel3-->
<label>Langue de traduction</label><br/>
<input type="textarea" name="langueTrad" /><br/>
<label>Nature d'adaptation</label><br/>
<select name="natureAdaptation">
  <option>---Sélectionner un élément de la liste---</option>
  <option>BD</option>
  <option>Dance</option>
  <option>Film</option>
  <option>Livre Audio</option>
  <option>Musique</option>
  <option>Pièce Radiographique</option>
  <option>Radio</option>
  <option>Théâtre</option>
</select>
</fieldset>

<br/>
<br/>


<fieldset>
<h3>Poétique, temps, espace, personnage et esthétique </h3>
<label>Poétique</label><br/>
<table>
  <tr>
    <td><input type="checkbox" name="boxNaration[]" value='1st'>Naration à la 1ère personne</td>
    <td><input type="checkbox" name="boxNaration[]" value='3rd'>Naration à la 3ème personne</td>
  </tr>
  <tr>
    <td><input type="checkbox" name="boxNaration[]" value='multiple'>Naration multiple</td>
    <td><input type="checkbox" name="boxNaration[]" value='enchassee'>Naration enchâssée</td>
  </tr>
</table>
<label>Cadre spatial</label><br/>
<input type="textarea" name="cadreSpatial" /><br/> <!--auteurNom,auteurNom2, auteurNomReel2, auteurNom3, auteurNomReel3-->

<label>Date de l'histoire</label><br/>
<input type="textarea" name="dateHistoireDebut" /><br/>
<input type="textarea" name="dateHistoireFin" /><br/>

<label>Écart temporel</label><br/>
<table>
  <tr>
    <td><input type="checkbox" name="boxNaration2[]" value='passeLointain'>Passé lointain (+50 ans)</td>
    <td><input type="checkbox" name="boxNaration2[]" value='passeProche'>Passé proche (-50 ans)</td>
  </tr>
  <tr>
    <td><input type="checkbox" name="boxNaration2[]" value='present'>Présent</td>
    <td><input type="checkbox" name="boxNaration2[]" value='futurProche'>Futur proche (-50 ans)</td>
    <td><input type="checkbox" name="boxNaration2[]" value='futurLointain'>Futur lointain (+50 ans)</td>
  </tr>
</table>


<label>Rapport au temps</label><br/>
<table>
  <tr>
    <td><input type="checkbox" name="boxNaration[]" value='ageOr'>Âge d'or</td>
    <td><input type="checkbox" name="boxNaration[]" value='decadence'>Décadence</td>
    <td><input type="checkbox" name="boxNaration[]" value='eschatologie'>Eschatologie</td>
  </tr>
  <tr>
    <td><input type="checkbox" name="boxNaration[]" value='evolutionnisme'>Évolutionnisme</td>
    <td><input type="checkbox" name="boxNaration[]" value='histoireCyclique'>Histoire cyclique</td>
    <td><input type="checkbox" name="boxNaration[]" value='progres'>Progrès</td>
  </tr>
</table>

<label>Références intertextuelles (oeuvre ou auteur)</label><br/>
<input type="textarea" name="referencesInter" /><br/>

<label>Personnage scientifique</label><br/>
<input type="textarea" name="persoScientifique" /><br/>

<label>Profession</label><br/>
<input type="textarea" name="profession" /><br/>

<label>Genre</label><br/>
<table>
  <td><input type="checkbox" name="boxNaration4[]" value='masculin'>Masculin</td>
  <td><input type="checkbox" name="boxNaration4[]" value='feminin'>Féminin</td>
  <td><input type="checkbox" name="boxNaration4[]" value='indetermine'>Indéterminé</td>
</table>

<label>Valorisation</label><br/>
<table>
  <td><input type="checkbox" name="boxNaration5[]" value='positif'>Positif</td>
  <td><input type="checkbox" name="boxNaration5[]" value='negatif'>Negatif</td>
  <td><input type="checkbox" name="boxNaration5[]" value='problematique'>Probématique</td>
  <td><input type="checkbox" name="boxNaration5[]" value='neutre'>Neutre</td>
</table>

<label>caractéritique</label><br/>
<input type="textarea" name="caracteristiques" /><br/>

<label>Figure de l'altérité</label><br/>
<table>
  <tr>
    <td><input type="checkbox" name="boxNaration6[]" value='europe'>Européenne</td>
    <td><input type="checkbox" name="boxNaration6[]" value='extra-europe'>Extra-européenne</td>
    <td><input type="checkbox" name="boxNaration6[]" value='extra-terrestre'>Extra-terrestre</td>
  </tr>
  <tr>
    <td><input type="checkbox" name="boxNaration6[]" value='creature-artificielle'>Créature artificielle</td>
    <td><input type="checkbox" name="boxNaration6[]" value='mutante'>Mutante</td>
    <td><input type="checkbox" name="boxNaration6[]" value='autre'>Autre</td>
  </tr>
</table>

<label>Esthétique</label><br/>
<input type="textarea" name="esthetique" /><br/>

</fieldset>

<br/>
<br/>

<fieldset>
<h3> Sciences et sociétés </h3>
<label>Agronomie</label><br/>
<table>
  <td><input type="checkbox" name="boxScience[]" value='agriculture'>Agriculture</td>
  <td><input type="checkbox" name="boxScience[]" value='veterinaire'>Arts Vetérinaires</td>
  <td><input type="checkbox" name="boxScience[]" value='diet'>Diététique</td>
</table>
<!--Y A UN TRUC ICI OUBLIE PAS HARRY-->
<label>Chimie</label><br/>
<table>
  <td><input type="checkbox" name="boxScience1[]" value='chimieAnalytique'>Chimie analytique</td>
  <td><input type="checkbox" name="boxScience1[]" value='chimieIndustrielle'>Chimie industrielle</td>
  <td><input type="checkbox" name="boxScience1[]" value='chimieOrganique'>Chimie organique</td>
</table>

<label>Énergie</label><br/>
<table>
  <tr>
    <td><input type="checkbox" name="boxScience2[]" value='atomique'>Atomique</td>
    <td><input type="checkbox" name="boxScience2[]" value='electricite'>Électricité</td>
    <td><input type="checkbox" name="boxScience2[]" value='eolienne'>Éolienne</td>
    <td><input type="checkbox" name="boxScience2[]" value='ether'>Éther/solaire</td>
  </tr>
  <tr>
    <td><input type="checkbox" name="boxScience2[]" value='geothermique'>Géothermique</td>
    <td><input type="checkbox" name="boxScience2[]" value='hydraulique'>Hydraulique</td>
    <td><input type="checkbox" name="boxScience2[]" value='magnetisme'>Magnétisme</td>
    <td><input type="checkbox" name="boxScience2[]" value='thermodynamique'>Thermodynamique</td>
  </tr>
</table>

<label>Inventions/innovations techniques</label><br/>
<table>
  <td><input type="checkbox" name="boxScience3[]" value='eclairage'>Éclairage</td>
  <td><input type="checkbox" name="boxScience3[]" value='steampunk'>Machines à vapeur/moteurs életriques</td>
  <td><input type="checkbox" name="boxScience3[]" value='photo'>Photographie, cinématographie, phonographie</td>
  <td><input type="checkbox" name="boxScience3[]" value='tele'>Télégraphie, téléphone, radio</td>
</table>

<label>Médecine</label><br/>
<table>
  <tr>
    <td><input type="checkbox" name="boxScience4[]" value='anatomie'>Anatomie</td>
    <td><input type="checkbox" name="boxScience4[]" value='chirurgie'>Chirurgie</td>
    <td><input type="checkbox" name="boxScience4[]" value='histologie'>Histologie</td>
    <td><input type="checkbox" name="boxScience4[]" value='homeopathie'>Homéopathie</td>
  </tr>
  <tr>
    <td><input type="checkbox" name="boxScience4[]" value='hygiene'>Hygiène publique</td>
    <td><input type="checkbox" name="boxScience4[]" value='pathologie'>Pathologies</td>
    <td><input type="checkbox" name="boxScience4[]" value='physiologie'>Physiologie</td>
    <td><input type="checkbox" name="boxScience4[]" value='psychologie'>Psychologie</td>
    <td><input type="checkbox" name="boxScience4[]" value='therapeute'>Thérapeute</td>
  </tr>
</table>
<input type="checkbox" name="boxScienceAlt" value='paleon'>Paléontologie, préhistoire
<label>Physique</label><br/>
<table>
  <tr>
    <td><input type="checkbox" name="boxScience5[]" value='acoustique'>Acoustique</td>
    <td><input type="checkbox" name="boxScience5[]" value='electriciteMagn'>Électricité, magnétisme</td>
    <td><input type="checkbox" name="boxScience5[]" value='mecanique'>Mécanique, hydraulique</td>
    <td><input type="checkbox" name="boxScience5[]" value='optique'>Optique</td>
  </tr>
  <tr>
    <td><input type="checkbox" name="boxScience5[]" value='physiqueAtome'>Physique atomique, rayonnements</td>
    <td><input type="checkbox" name="boxScience5[]" value='thermodynamique'>Thermodynamique (chaleur)</td>
  </tr>
</table>
<label>Sciences biologiques</label><br/>
<table>
  <td><input type="checkbox" name="boxScience6[]" value='bacteriologie'>Bactériologie</td>
  <td><input type="checkbox" name="boxScience6[]" value='genetique'>Génétique/héréditarisme</td>
  <td><input type="checkbox" name="boxScience6[]" value='microbiologie'>Microbiologie/biochimie</td>
</table>
<label>Sciences naturelles</label><br/>
<table>
  <td><input type="checkbox" name="boxScience7[]" value='botanique'>Botanique</td>
  <td><input type="checkbox" name="boxScience7[]" value='entomologie'>Entomologie</td>
  <td><input type="checkbox" name="boxScience7[]" value='mycologie'>Mycologie</td>
  <td><input type="checkbox" name="boxScience7[]" value='zoologie'>Zoologie</td>
</table>
<label>Sciences de la terre</label><br/>
<table>
  <tr>
    <td><input type="checkbox" name="boxScience8[]" value='catastrophe'>Catastrophe naturelles</td>
    <td><input type="checkbox" name="boxScience8[]" value='ethnologie'>Ethnologie</td>
    <td><input type="checkbox" name="boxScience8[]" value='geographie'>Géographie, géodésie (voyages scientifiques d’exploration, expéditions)</td>
    <td><input type="checkbox" name="boxScience8[]" value='geologie'>Géologie / Minéralogie</td>
  </tr>
  <tr>
    <td><input type="checkbox" name="boxScience8[]" value='meteorologie'>Météorologie (ex : inondations)</td>
    <td><input type="checkbox" name="boxScience8[]" value='oceanologie'>Océanographie </td>
  </tr>
</table>
<label>Sociabilités scientifiques </label><br/>
<table>
  <td><input type="checkbox" name="boxScience9[]" value='mondeSavant'>Monde savant, communauté scientifique (académies, sociétés savantes, université)</td>
  <td><input type="checkbox" name="boxScience9[]" value='spectacles'>Spectacles scientifiques (expositions universelles, conférences et démonstrations publiques) </td>
</table>
<label>Transports</label><br/>
<table>
  <td><input type="checkbox" name="boxScience10[]" value='aerostats'>Aérostats, appareils aériens</td>
  <td><input type="checkbox" name="boxScience10[]" value='transportMaritime'>Transport maritime (bateaux à vapeur, sous-marins…)</td>
  <td><input type="checkbox" name="boxScience10[]" value='transportSouterrain'>Transport souterrain (métro…)</td>
  <td><input type="checkbox" name="boxScience10[]" value='transportTerrestre'>Transport terrestre (automobiles, chemin de fer…)</td>
</table>

<br/>

<h4>Références à des éléments scientifiques réels</h4>
<label>Théorie ou invention</label><br/>
<input type="textarea" name="theorie" /><br/>
<label>Personnalité scientifique</label><br/>
<input type="textarea" name="personaliteScientifique" /><br/>
<label>Discipline</label><br/>
<table>
  <tr>
    <td><input type="checkbox" name="boxNaration11[]" value='scienceVie'>Sciences de la vie (inclut biologie, botanique, zoologie)</td>
    <td><input type="checkbox" name="boxNaration11[]" value='scienceMedicale'>Sciences médicales</td>
  </tr>
  <tr>
    <td><input type="checkbox" name="boxNaration11[]" value='scienceTerre'>Sciences de la terre et de l’espace (astronomie, géologie, géographie)</td>
  </tr>
  <tr>
    <td><input type="checkbox" name="boxNaration11[]" value='sciencePhysique'>Physique, chimie et mathématiques</td>
    <td><input type="checkbox" name="boxNaration11[]" value='ingenieurie'>Ingénierie et technique</td>
    <td><input type="checkbox" name="boxNaration11[]" value='autree'>Autre</td>
  </tr>
</table>
<label>Modalité</label><br/>
<table>
  <td><input type="checkbox" name="boxNaration12[]" value='serieux'>Sérieux</td>
  <td><input type="checkbox" name="boxNaration12[]" value='satire'>Satire</td>
  <td><input type="checkbox" name="boxNaration12[]" value='hommage'>Hommage</td>
  <td><input type="checkbox" name="boxNaration12[]" value='refutation'>Réfutation</td>
</table>
<h4>Références à des éléments scientifiques imaginaires</h4>
<label>Termes utilisés dans la description</label><br/>
<input type="textarea" name="termeDescription" /><br/>
<label>Domaine des inventions techniques</label><br/>
<input type="textarea" name="inventionsTechniques" /><br/>
<label>Voyage(s)</label><br/>
<input type="textarea" name="voyages" /><br/>

<h4>Représentation de la société</h4>

<label>Représentation d'une société imaginaire</label><br/>  <!--IL FAUT VOIR COMMENT CA MARCHE DANS LA BDD-->
<table>
  <td><input type="checkbox" name="boxNaration13[]" value='presentTemp'>Présente</td>
  <td><input type="checkbox" name="boxNaration13[]" value='absentTemp'>Absente</td>
  <td><input type="checkbox" name="boxNaration13[]" value='plusieursTemp'>Plusieurs</td>
</table>
<label>Degré de technologie</label><br/>
<table>
  <td><input type="checkbox" name="boxNaration14[]" value='fortDegre'>Fort</td>
  <td><input type="checkbox" name="boxNaration14[]" value='neutreDegre'>Neutre</td>
  <td><input type="checkbox" name="boxNaration14[]" value='faibleDegre'>Faible</td>
  <td><input type="checkbox" name="boxNaration14[]" value='indetermiteDegre'>Indéterminé</td>
</table>
<label>Valeur</label><br/>
<table>
  <td><input type="checkbox" name="boxNaration15[]" value='positifValeur'>Positive</td>
  <td><input type="checkbox" name="boxNaration15[]" value='negatifValeur'>Négative</td>
  <td><input type="checkbox" name="boxNaration15[]" value='neutreValeur'>Neutre</td>
  <td><input type="checkbox" name="boxNaration15[]" value='ambivalenteValeur'>Ambivalente</td>
  <td><input type="checkbox" name="boxNaration15[]" value='indetermineValeur'>Indéterminée</td>
</table>
<label>Traits spécifiques de la société imaginaire</label><br/>
<input type="textarea" name="TraitsSocieteImaginaire" /><br/>
</fieldset>
    <div><input type='submit' value='Submit' /></div>
</form>

<!-- where the response will be displayed -->
<div id='response'></div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js "></script>
<script>
$(document).ready(function(){
    $('#userForm').submit(function(){

        // show that something is loading
        $('#response').html("<b>Loading response...</b>");

        /*
         * 'post_receiver.php' - where you will pass the form data
         * $(this).serialize() - to easily read form data
         * function(data){... - data contains the response from post_receiver.php
         */
        $.ajax({
            type: 'POST',
            url: 'searchBase.php',
            data: $(this).serialize()
        })
        .done(function(data){

            // show the response
            $('#response').html(data);

        })
        .fail(function() {

            // just in case posting your form failed
            alert( "Posting failed." );

        });

        // to prevent refreshing the whole page page
        return false;

    });
});
</script>

</body>
</html>
