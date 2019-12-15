<?php
  require('connexionV2.php');
  $conn = Connexion::getBD();
  //$bd = $conn->getData();
  if (isset($_POST['name']) or isset($_POST['surname']) or isset($_POST['titre']) or isset($_POST['date'])){
      //echo isset($_POST['surname']);
      //echo isset($_POST['name'])=='';
      echo 'YES';

      $check1=null;
      $check2=null;
      $check3=null;
      $check4=null;
      $check5=null;
//Première partie pour la Presentation
      if (isset($_POST['name']) and $_POST['name']!=null)
        $check1 = $_POST['name'];

      if (isset($_POST['surname']) and $_POST['surname']!=null)
        $check2 = $_POST['surname'];

      if (isset($_POST['titre']) and $_POST['titre']!=null)
        $check3 = $_POST['titre'];

      if (isset($_POST['dateTot']) and $_POST['dateTot']!=null)
        $check4 = $_POST['dateTot'];

      if (isset($_POST['dateTard']) and $_POST['dateTard']!=null)
        $check5 = $_POST['dateTard'];

      $tab_1 = $conn->getResearch($check1,$check2,$check3,$check4,$check5);

//Deuxième partie pour le Materiel
      $check1M=null;
      $check2M=null;
      $check3M=null;
      $check4M=null;
      $check5M=null;
      $tabChecked=array();
//Première partie pour la Presentation
      if (isset($_POST['nomIllus']) and $_POST['nomIllus']!=null)
        $check1M = $_POST['nomIllus'];

      if (isset($_POST['langueTrad']) and $_POST['langueTrad']!=null)
        $check2M = $_POST['langueTrad'];

      if (isset($_POST['natureAdaptation']) and $_POST['natureAdaptation']!=null)
        $check3M = $_POST['natureAdaptation'];

      if (isset($_POST['support']) and $_POST['support']!=null)
        $check4M = $_POST['support'];

      if (isset($_POST['yearParution']) and $_POST['yearParution']!=null)
        $check5M = $_POST['yearParution'];
      if(!empty($_POST['boxC'])){
         foreach ($_POST['boxC'] as $c => $v){
          if ($v!=null or $v!=0 or $v!=''){
            $tabChecked[]=$v;
          }
        }
      }
       //echo $_POST["boxC"];
       echo '<br/>';
       print_r($tabChecked);

      //$tab_2 = $conn->getResearch($check1,$check2,$check3,$check4,$check5);


      //print_r($tab_1);
      echo '<ul>';
      if ($tab_1!=null and count($tab_1)>0){
        $i=0;
        foreach ($tab_1 as $cle => $val){
        //print_r($val);
          if (isset($val)){
            if (isset($val['auteurNom']))
              echo '<li>'. $i. ' ' . $val['auteurNom'] . ' || '. $val['auteurPrenom'] . '</li>';
              $i++;
            }
          }
      }
      echo '</ul>';
      //print_r($tab_1);
      //$req = $conn->prepare("SELECT auteurNom FROM oeuvres where auteurNom = :name");
      //$req->bindValue(':name', $_POST['name']);
      //$req->execute();
      //$tabNom = $req->fetchAll(PDO::FETCH_ASSOC);
  }

      if (isset($_POST['KeyW'])){
        $tab_1 = $conn->getResearchWord($_POST['KeyW']);

      //print_r($tab_1);
      echo '<ul>';
      if (isset($tab_1)){
      foreach ($tab_1 as $cle => $val){
        //print_r($val);
        if (isset($val)){
            if (isset($val['auteurNom']))
              echo '<li>' . $val['titrePE'] . ' || ' .$val['auteurNom'] . ' || '. $val['auteurPrenom'] . '</li>';
        }
      }
    }
      echo '</ul>';
      //print_r($tab_1);
      //$req = $conn->prepare("SELECT auteurNom FROM oeuvres where auteurNom = :name");
      //$req->bindValue(':name', $_POST['name']);
      //$req->execute();
      //$tabNom = $req->fetchAll(PDO::FETCH_ASSOC);
  }

  // if (isset($_POST['surname'])){
  //     echo 'YES';
  //     $tab2 = $conn->getResearch($_POST['name'],$_POST['surname']);
  //     //$req = $conn->prepare("SELECT auteurNom FROM oeuvres where auteurNom = :surname");
  //     //$req->bindValue(':surname', $_POST['surname']);
  //     //$req->execute();
  //     //$tabNom = $req->fetchAll(PDO::FETCH_ASSOC);
  //     print_r($tab2);
  // }
?>
