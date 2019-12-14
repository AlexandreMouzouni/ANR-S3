<?php
/***********************************************************************************
 *
 *  connexion.php : contient la classe pour la connexion à la base de données
 *
 ***********************************************************************************/

class Connexion extends mysqli{
  private $bd;
  private static $instance = null;

  public function __construct() {
    $this->bd = new PDO("mysql:host=localhost;dbname=scibase","root","");
    $this->bd-> query("SET NAME utf8");
    $this->bd-> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  }

  public static function getBD() {
    if(self::$instance === null)
      self::$instance = new Connexion();
    return self::$instance;
    }

  public function getResearch($var, $var2, $var3, $var4, $var5){ //Fait pour la recherche dans la table ouevres
    echo '<br/>';
    echo $var==null;
    echo '<br/>';
    echo $var2==null;
    echo '<br/>';
    echo $var3==null;
    echo '<br/>';
    echo $var4==null;
    echo '<br/>';
    echo $var5;
    echo '<br/>';
    // echo "$var";
    // echo '<br/>';
    // echo "$var2";
    if($var!=null or $var2!=null or $var3!=null or $var4!=null or $var5!=null){
      $txt = 'SELECT titrePE,auteurNom, auteurPrenom FROM oeuvres WHERE';

      if ($var != null){ //Nom
        $txt = $txt.' auteurNom = :var or auteurNom2 = :var or auteurNom3 = :var';
        $txt = $txt.' or auteurNomReel = :var or auteurNomReel2 = :var or auteurNomReel3 = :var';
      }

      if ($var!=null and $var2!=null){
        $txt = $txt.' AND';
      }

      if($var2!=null){ //auteurPrenom
        $txt = $txt.' auteurPrenom = :var2 or auteurPrenom2 = :var2 or auteurPrenom3 = :var2';
        $txt = $txt.' or auteurPrenomReel = :var2 or auteurPrenomReel2 = :var2 or auteurPrenomReel3 = :var2';
      }

      if (($var!=null or $var2!=null) and $var3!=null){
        $txt = $txt.' AND';
      }

      if($var3!=null){ //Titre
        $txt = $txt." LOCATE(:var3, titrePE)";
      }

      if (($var!=null or $var2!=null or $var3!=null) and $var4!=null){
        $txt = $txt.' AND';
      }

      if($var4!=null){ //Année publication
        $txt = $txt.' anneePE> :var4';
      }

      if (($var!=null or $var2!=null or $var3!=null or $var4!=null) and $var5!=null){
        $txt = $txt.' AND';
      }

      if($var5!=null){ //Année publication
        $txt = $txt.' anneePE< :var5';
      }
      //$txtt = "SELECT auteurNom,auteurPrenom FROM oeuvres where auteurNom = :var and auteurPrenom = :var2 or auteurNomReel = :var and auteurPrenomReel= :var2 or auteurNom2 = :var and auteurPrenom2= :var2 or auteurNomReel2 = :var and auteurPrenomReel2= :var2 or auteurNom3 = :var and auteurPrenom3= :var2 or auteurNomReel3 = :var and auteurPrenomReel3= :var2";
      $req0 = $this->bd->prepare($txt);
      if ($var!=null){
        $req0->bindValue(':var', $var);
      }

      if ($var2!=null){
        $req0->bindValue(':var2', $var2);
      }

      if ($var3!=null){
        $req0->bindValue(':var3', $var3);
      }

      if ($var4!=null){
        $req0->bindValue(':var4', $var4);
      }

      if ($var5!=null){
        $req0->bindValue(':var5', $var5);
      }

      echo $txt;
      $req0->execute();
      $tabNom = $req0->fetchAll(PDO::FETCH_ASSOC);
      return $tabNom;
    }
    return null;
  }

  public function getResearchWord($var){
    // echo '<br/>';
    // echo "$var";
    // echo '<br/>';
    // echo "$var2";
    if ($var!=null){
      $req0 = $this->bd->prepare("SELECT titrePE,auteurNom,auteurPrenom FROM oeuvres WHERE LOCATE(resume, :var)");
      $req0->bindValue(':var', $var);
      $req0->execute();
      //$req0_bis = $this->bd->prepare("select * from view_1");
      //$req0_bis->execute();
      $tabNom = $req0->fetchAll(PDO::FETCH_ASSOC);

    return $tabNom;
  }

  }

}
?>
