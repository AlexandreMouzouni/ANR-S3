<!DOCTYPE html>
<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <title>ANR Anticipation - Graphique</title>
        <link rel="icon" type="image/png" href="../images/logo_anticipation_logo.png" />

        <script src="../js/jquery-3.3.1.js?V=0.12"></script>
        <script src="../js/jquery-ui-1.12.1.js?V=0.12"></script>
        <script src="../js/jquery-ui-fr.js?V=0.12"></script>
        <script src="../js/popper-1.14.3.min.js?V=0.12"></script>
        <script src="../js/bootstrap-3.3.7.min.js?V=0.12"></script>
        <script src="../js/jquery.mCustomScrollbar-3.1.5.concat.min.js?V=0.12"></script>
        <!--  Quelques fonctions JS -->
        <script src="../js/divers.js?V=0.12"></script>

        <link rel="stylesheet" href="../css/bootstrap-4.1.1.css?V=0.6">
        <link rel="stylesheet" href="../css/bootstrap-3.3.7.css?V=0.6">

        <!-- Génération de graphiques -->
        <script src="https://cdn.plot.ly/plotly-latest.min.js"></script>
        <script src="https://cdn.plot.ly/plotly-locale-fr-latest.js"></script>

        <!-- Our Custom CSS -->
        <link rel="stylesheet" href="../css/style3.css?V=0.6">
        <link rel="stylesheet" href="../css/ihrim-anticipation.css?V=0.6">
        <!-- CSS graphique -->
        <link rel="stylesheet" href="../css/graphique.css">

        <!-- Scrollbar Custom CSS -->
        <link rel="stylesheet" href="../css/jquery.mCustomScrollbar-3.1.5.css">
        <link rel="stylesheet" href="../css/fonts.css?V=0.6">
        <link rel="stylesheet" href="../css/jquery-ui-1.12.1.css?V=0.6">
        <link rel="stylesheet" href="../css/jquery-ui-ajout.css?V=0.6">

    </head>
        <body data-spy="scroll" data-target=".scrollSpy">

      <div class="modal fade" id="modalInfo" tabindex="-1" role="dialog" aria-labelledby="labelInfo">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h3 id="labelInfo" class="modal-title">Pour information</h3>
            </div>
            <div id="bodyInfo" class="modal-body">
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">OK</button>
            </div>
          </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
      </div><!-- /.modal -->

      <div class="modal fade" id="Patience" tabindex="-1" role="dialog" aria-labelledby="labelPatience" data-backdrop="static" data-keyboard="false">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <!-- Bouton x à supprimer après les dev -->
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
              <h3 id="labelPatience">Travail en cours... merci de patienter.</h3>
            </div>
            <div class="modal-body">
              <div class="progress">
                <div class="progress-bar progress-bar-warning progress-bar-striped active" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%">
                </div>
              </div>
            </div>
          </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
      </div><!-- /.modal -->

        <!-- WRAPPER -->
        <div class="wrapper">
                        <!-- SIDEBAR MENU BURGER -->
            <nav id="sidebar" class="mCustomScrollbar _mCS_1 mCS-autoHide" style="overflow: visible;"><div id="mCSB_1" class="mCustomScrollBox mCS-minimal mCSB_vertical mCSB_outside" style="max-height: none;" tabindex="0"><div id="mCSB_1_container" class="mCSB_container" style="position:relative; top:0; left:0;" dir="ltr">
                <div id="dismiss">
                    <i class="glyphicon glyphicon-remove fermermenuprincipal"></i>
                </div>
                <div class="menuprincipal">
                    <ul class="list-unstyled components">
                        <li class="active itemmenuprincipal">
                            <div class="dropdown-divider dividermenuprincipal"></div>
                            <a href="https://anticipation-dev.huma-num.fr/?bRechercheAvancee=1#">Accueil</a>
                            <div class="dropdown-divider dividermenuprincipal"></div>
                        </li>
                        <li class="itemmenuprincipal">
                            <a href="https://anticipation-dev.huma-num.fr/?bRechercheAvancee=1#">Qu'est-ce que le récit d'anticipation ?</a>
                            <div class="dropdown-divider dividermenuprincipal"></div>
                        </li>
                        <li class="itemmenuprincipal">
                            <a href="https://anticipation-dev.huma-num.fr/?bRechercheAvancee=1#">Le récit d'anticipation en graphique</a>
                            <div class="dropdown-divider dividermenuprincipal"></div>
                        </li>
                        <li class="itemmenuprincipal">
                            <a href="https://anticipation-dev.huma-num.fr/?bRechercheAvancee=1#">L'ANR Anticipation</a>
                            <div class="dropdown-divider dividermenuprincipal"></div>
                        </li>
                        <li class="itemmenuprincipal">
                            <a href="https://anticipation-dev.huma-num.fr/?bRechercheAvancee=1#">Principes de sélection des oeuvres</a>
                            <div class="dropdown-divider dividermenuprincipal"></div>
                        </li>
                        <li class="itemmenuprincipal">
                            <a href="https://anticipation-dev.huma-num.fr/?bRechercheAvancee=1#">Les contributeurs</a>
                            <div class="dropdown-divider dividermenuprincipal"></div>
                        </li>
                        <li class="itemmenuprincipal">
                            <a href="https://anticipation-dev.huma-num.fr/?bRechercheAvancee=1#">Signaler une erreur</a>
                            <div class="dropdown-divider dividermenuprincipal"></div>
                        </li>
                        <li class="itemmenuprincipal">
                            <a href="https://anticipation-dev.huma-num.fr/?bRechercheAvancee=1">Recherche avancée</a>
                            <div class="dropdown-divider dividermenuprincipal"></div>
                        </li>
                        <li class="itemmenuprincipal">
                            <a href="https://anticipation-dev.huma-num.fr/?Index=O">Index des oeuvres</a>
                            <div class="dropdown-divider dividermenuprincipal"></div>
                        </li>
                        <li class="itemmenuprincipal">
                            <a href="https://anticipation-dev.huma-num.fr/?Index=A">Index des auteurs</a>
                            <div class="dropdown-divider dividermenuprincipal"></div>
                        </li>
                        <li class="itemmenuprincipal">
                            <a href="https://anticipation-dev.huma-num.fr/?Index=C">Index chronologique des œuvres</a>
                            <div class="dropdown-divider dividermenuprincipal"></div>
                        </li>
                        <li class="itemmenuprincipal">
                            <a href="https://anticipation-dev.huma-num.fr/?bAuHasard=1">Au hasard</a>
                            <div class="dropdown-divider dividermenuprincipal"></div>
                        </li>
                    </ul>
                    <div class="sponsors d-flex justify-content-center">
                        <a href="http://ihrim.ens-lyon.fr/"><img src="../images/logo_ihrim.png" class="logosSponsors mCS_img_loaded"></a>
                        <a href="https://anr.fr/"><img src="../images/logo_anr.png" class="logosSponsors mCS_img_loaded"></a>
                    </div>
                </div>
            </div></div><div id="mCSB_1_scrollbar_vertical" class="mCSB_scrollTools mCSB_1_scrollbar mCS-minimal mCSB_scrollTools_vertical" style="display: block;"><div class="mCSB_draggerContainer"><div id="mCSB_1_dragger_vertical" class="mCSB_dragger" style="position: absolute; min-height: 50px; display: block; height: 904px; max-height: 907.25px; top: 0px;"><div class="mCSB_dragger_bar" style="line-height: 50px;"></div></div><div class="mCSB_draggerRail"></div></div></div></nav>
            <!-- FIN SIDEBAR MENU BURGER -->
            <!-- FONCTIONS LATERALES DROITE -->
            <div class="btn-group-vertical fonctions_laterales">
                              </div>
            <!-- FIN FONCTIONS LATERALES DROITE -->
                        <!-- CONTENU DE LA PAGE -->
            <div id="content">
                                <!-- BARRE DE MENU SUPERIEURE -->
                <header class="navbar navbar-expand-lg navbar-light">
                    <div class="collapse navbar-collapse" id="navbarText2">
                        <a class="navbar-brand" href="https://anticipation-dev.huma-num.fr/">
                                                        <img class="logoAnticipation" src="../images/logo_anticipation.png" alt="logo">
                        </a>
                    </div>
                    <div class="d-none d-lg-flex shortcuts-top">
                                                <a class="nav-link" href="https://anticipation-dev.huma-num.fr/?bAuHasard=1">Au hasard</a>
                        <a class="nav-link" href="https://anticipation-dev.huma-num.fr/?Index=O">Index œuvres</a>
                        <a class="nav-link" href="https://anticipation-dev.huma-num.fr/?Index=A">Index auteurs</a>
                        <a class="nav-link" href="https://anticipation-dev.huma-num.fr/?Index=C">Chronologie œuvres</a>
                                                <a class="nav-link" href="https://anticipation-dev.huma-num.fr/?bRechercheAvancee=1">Recherche avancée</a>
                        <form class="form-inline my-2 my-lg-0 formRecherche">
                            <input type="hidden" name="bRechercheSimple" value="1">
                                                        <input class="form-control mr-sm-2 champRecherche" type="search" name="recherche" placeholder="Recherche simple..." aria-label="Search">
                            <button class="btn btn-outline-light my-2 my-sm-0" type="submit"><i class="glyphicon glyphicon-search"></i></button>
                        </form>
                        <div class="navbar-header">
                            <button type="button" id="sidebarCollapse" class="btn btn-info navbar-btn">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                        </div>
                    </div>
                </header>
                                <!-- FIN BARRE DE MENU SUPERIEURE -->
                <!-- DIV PRINCIPALE -->
                                  <div class="row_principale row col-sm-12">
                    <!-- BARRE DE MENU GAUCHE SCROLLSPY -->
                                      <div class="col-sm-2 list-group sidebarLeft d-md-none d-lg-block">
                                                <div class="sponsors d-flex align-content-center logosBottom">
                            <a href="http://ihrim.ens-lyon.fr/"><img src="../images/logo_ihrim.png"></a>
                            <a href="https://anr.fr/"><img src="../images/logo_anr.png"></a>
                        </div>
                    </div>
                    <!-- FIN BARRE DE MENU GAUCHE SCROLLSPY -->
                                        <!-- CONTENU DE LA FICHE -->
                    <div class="container_fiche col-md-10 col-sm-10">

                        <div class="contenuFiche">

                            <div class="metadata_fiche" style="text-align: unset;">
    <div class="bordure_top"></div>

    <div class="inline">
      <h1 class="name_book text-center">Le récit d'anticipation en graphique</h1>
    </div>


<form id="formRechAvance" class="form-horizontal">
  <div class="panel panel-anticipation">
    <div class="panel-heading" role="tab" id="pheadRechAvanc">
      <div class="row"><div class="col-md-11">

      <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" href="https://anticipation-dev.huma-num.fr/?bRechercheAvancee=1#idColpsRechAvance" aria-controls="idColpsRechAvance">
          <span id="idImgColpsRechAvanc" class="glyphicon glyphicon-chevron-up"></span> Formulaire de génération de graphiques
        </a>
      </h4>

      </div><!-- /col-md-11 -->

      </div><!-- /row -->
    </div><!-- /panel-heading -->

  <div id="idColpsRechAvance" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="pheadRechAvanc"><div class="panel-body">
        <div class="panel panel-anticipation">
      <div class="panel-heading" role="tab" id="pheadPresente">
        <h4 class="panel-title">
          <a class="collapsed" role="button" data-toggle="collapse" href="https://anticipation-dev.huma-num.fr/?bRechercheAvancee=1#idColpsPresente" aria-controls="idColpsPresente">
            <span id="idImgColpsPresente" class="glyphicon glyphicon-chevron-up"></span> Présentation
          </a>
        </h4>
      </div><!-- /panel-heading -->
      <div id="idColpsPresente" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="pheadPresente"><div class="panel-body">

        <script type="text/javascript">
          $('#idColpsPresente').on('shown.bs.collapse', function () { vSwitchChevron($('#idImgColpsPresente'), 'up'); })
          $('#idColpsPresente').on('hidden.bs.collapse', function () { vSwitchChevron($('#idImgColpsPresente'), 'down'); })
        </script>

        <div class="form-group">
          <label class="col-md-2 control-label">Titre de l'oeuvre</label>
          <div class="col-md-10">
            <div class="input-group">
              <input type="text" class="form-control" id="txtTitrePE" name="titre" placeholder="Titre de l&#39;oeuvre">
              <script>$('#txtTitrePE').focus();</script>
            </div><!-- /input-group -->
          </div><!-- /col-md- -->
        </div><!-- /form-group -->

        <div class="form-group">
          <label class="col-md-2 control-label">Nom de l'auteur</label>
          <div class="col-md-10">
            <div class="input-group">
              <input type="text" class="form-control" id="txtAuteur" name="name" placeholder="Nom de l&#39;auteur">
            </div><!-- /input-group -->
          </div><!-- /col-md- -->
        </div><!-- /form-group -->

        <div class="form-group">
          <label class="col-md-2 control-label">Prénom de l'auteur</label>
          <div class="col-md-10">
            <div class="input-group">
              <input type="text" class="form-control" id="txtAuteur" name="surname" placeholder="Prénom de l&#39;auteur">
            </div><!-- /input-group -->
          </div><!-- /col-md- -->
        </div><!-- /form-group -->

        <div class="form-group">
          <label class="col-md-2 control-label">Date de première édition</label>
          <div class="col-md-10">
            <div class="form-inline">
              <div class="input-group">
                <span class="input-group-addon">
                  <a id="spPODatePrEdit" title="" style="cursor:pointer;" role="button" tabindex="0" data-toggle="popover" data-trigger="focus" data-content="- Format de la date (année):AAAA&lt;br /&gt;- Pour filtrer sur une année unique, saisissez la même année dans les deux champs.&lt;br /&gt;- Pour filtrer les publications avant une année, saisissez l&#39;année dans le deuxième champ et laisser le premier vide.&lt;br /&gt;- Pour filtrer les publications après une année, saisissez l&#39;année dans le premier champ et laisser le deuxième vide." data-original-title="Info" data-html="true"><span class="glyphicon glyphicon-question-sign"></span></a>
                </span>
                <script type="text/javascript"> $('#spPODatePrEdit').popover()</script>
                <span class="input-group-addon"> De </span>
                <input type="text" class="form-control" id="txtAnneePEDeb" name="dateTot" placeholder="AAAA" title="Année au format AAAA" maxlength="4">
              </div><!-- /input-group -->
              <div class="input-group">
                <span class="input-group-addon" id="basic-addon1"> à </span>
                <input type="text" class="form-control" id="txtAnneePEFin" name="dateTard" placeholder="AAAA" title="Année au format AAAA" maxlength="4">
              </div><!-- /input-group -->
            </div><!-- /form-inline -->
          </div><!-- /col-md- -->
        </div><!-- /form-group -->

        <div class="form-group">
          <label class="col-md-2 control-label">Recherche par mot clé</label>
          <div class="col-md-10">
            <div class="input-group">
              <input type="text" class="form-control" id="txtMotCle" name="KeyW" placeholder="Mot clé">
            </div><!-- /input-group -->
          </div><!-- /col-md- -->
        </div><!-- /form-group -->

      </div></div><!-- /panel-body /panel-collapse -->
    </div><!-- /panel -->

    <div class="panel panel-anticipation">
      <div class="panel-heading" role="tab" id="pheadEtudeGenre">
        <h4 class="panel-title">
          <a class="collapsed" role="button" data-toggle="collapse" href="https://anticipation-dev.huma-num.fr/?bRechercheAvancee=1#idColpsEtudeGenre" aria-controls="idColpsEtudeGenre">
            <span id="idImgColpsEtudeGenre" class="glyphicon glyphicon-chevron-down"></span> Étude du genre
          </a>
        </h4>
      </div><!-- /panel-heading -->
      <div id="idColpsEtudeGenre" class="panel-collapse collapse" role="tabpanel" aria-labelledby="pheadEtudeGenre"><div class="panel-body">

        <script type="text/javascript">
          $('#idColpsEtudeGenre').on('shown.bs.collapse', function () { vSwitchChevron($('#idImgColpsEtudeGenre'), 'up'); })
          $('#idColpsEtudeGenre').on('hidden.bs.collapse', function () { vSwitchChevron($('#idImgColpsEtudeGenre'), 'down'); })
        </script>

        <div class="form-group">
          <label class="col-md-2 control-label">Désignations génériques</label>
          <div class="col-md-10">
            <div class="input-group">
              <input type="text" class="form-control" id="txtAuteur" name="designation" placeholder="Désignation du discours auctorial, du dispositif éditorial ou de la réception critique">
            </div><!-- /input-group -->
          </div><!-- /col-md- -->
        </div><!-- /form-group -->

        <div class="form-group">
          <label class="col-md-2 control-label">Année de la (des) désignation(s)</label>
          <div class="col-md-10">
            <div class="form-inline">
              <div class="input-group">
                <span class="input-group-addon">
                  <a id="spPODateDes" title="" style="cursor:pointer;" role="button" tabindex="0" data-toggle="popover" data-trigger="focus" data-content="- Format de la date (année):AAAA&lt;br /&gt;- Pour filtrer sur une année unique, saisissez la même année dans les deux champs.&lt;br /&gt;- Pour filtrer les publications avant une année, saisissez l&#39;année dans le deuxième champ et laisser le premier vide.&lt;br /&gt;- Pour filtrer les publications après une année, saisissez l&#39;année dans le premier champ et laisser le deuxième vide." data-original-title="Info" data-html="true"><span class="glyphicon glyphicon-question-sign"></span></a>
                </span>
                <script type="text/javascript"> $('#spPODateDes').popover()</script>
                <span class="input-group-addon"> De </span>
                <input type="text" class="form-control" id="txtAnneeDesignationDateDeb" name="AnneeDebut" placeholder="AAAA" title="Année au format AAAA" maxlength="4">
              </div><!-- /input-group -->
              <div class="input-group">
                <span class="input-group-addon" id="basic-addon1"> à </span>
                <input type="text" class="form-control" id="txtAnneeDesignationDateFin" name="AnneeFin" placeholder="AAAA" title="Année au format AAAA" maxlength="4">
              </div><!-- /input-group -->
            </div><!-- /form-inline -->
          </div><!-- /col-md- -->
        </div><!-- /form-group /col-lg -->

        <div class="form-group">
          <label class="col-md-2 control-label">Filtrage sur les types de désignations</label>
          <div class="col-md-10">
            <div class="input-group">
              <span class="input-group-addon">
                <div class="checkbox">
                  <label>
                    <input type="checkbox" id="chkTypeDes1" name="boxFiltre[]" value="Discours auctorial" checked=""> Discours auctorial
                  </label>
                </div>
              </span><!-- /input-group-addon -->
              <span class="input-group-addon">
                <div class="checkbox">
                  <label>
                    <input type="checkbox" id="chkTypeDes2" name="boxFiltre[]" value="Dispositif éditorial" checked=""> Dispositif éditorial
                  </label>
                </div>
              </span><!-- /input-group-addon -->
              <span class="input-group-addon">
                <div class="checkbox">
                  <label>
                    <input type="checkbox" id="chkTypeDes3" name="boxFiltre[]" value="Réception critique" checked=""> Réception critique
                  </label>
                </div>
              </span><!-- /input-group-addon -->
            </div><!-- /input-group -->
          </div><!-- /col-md- -->
        </div><!-- /form-group -->

        <hr>

        <div class="form-group">
          <label class="col-md-2 control-label">Auteurs comparés</label>
          <div class="col-md-10">
            <div class="input-group">
              <input type="text" class="form-control" id="txtAuteur" name="auteurComp" placeholder="Désignation du discours auctorial, du dispositif éditorial ou de la réception critique">
            </div><!-- /input-group -->
          </div><!-- /col-md- -->
        </div><!-- /form-group -->

        <div class="form-group">
          <label class="col-md-2 control-label">Date du lien avec l'auteur</label>
          <div class="col-md-10">
            <div class="form-inline">
              <div class="input-group">
                <span class="input-group-addon">
                  <a id="spPODateLienAut" title="" style="cursor:pointer;" role="button" tabindex="0" data-toggle="popover" data-trigger="focus" data-content="- Format de la date (année):AAAA&lt;br /&gt;- Pour filtrer sur une année unique, saisissez la même année dans les deux champs.&lt;br /&gt;- Pour filtrer les publications avant une année, saisissez l&#39;année dans le deuxième champ et laisser le premier vide.&lt;br /&gt;- Pour filtrer les publications après une année, saisissez l&#39;année dans le premier champ et laisser le deuxième vide." data-original-title="Info" data-html="true"><span class="glyphicon glyphicon-question-sign"></span></a>
                </span>
                <script type="text/javascript"> $('#spPODateLienAut').popover()</script>
                <span class="input-group-addon"> De </span>
                <input type="text" class="form-control" id="txtAnneeLienAAuteurDateDeb" name="dateADebut" placeholder="AAAA" title="Année au format AAAA" maxlength="4">
                <!-- <span class="input-group-addon" style="cursor:pointer;">
                  <a onClick="javascript:$('#dateLienAAuteurDateDeb').datepicker('show');" title="Calendrier"><span class="glyphicon glyphicon-calendar"></span></a>
                </span>
                <script type="text/javascript">
                  $(function() {
                    $.datepicker.setDefaults($.datepicker.regional["fr"]);
                    $("#dateLienAAuteurDateDeb").datepicker({
                      showOtherMonths: true,
                      selectOtherMonths: true,
                      changeYear: true
                    });
                  });
                </script> -->
              </div><!-- /input-group -->
              <div class="input-group">
                <span class="input-group-addon" id="basic-addon1"> à </span>
                <input type="text" class="form-control" id="txtAnneeLienAAuteurDateFin" name="dateAFin" placeholder="AAAA" title="Année au format AAAA" maxlength="4">
                <!-- <span class="input-group-addon" style="cursor:pointer;">
                  <a onClick="javascript:$('#dateLienAAuteurDateFin').datepicker('show');" title="Calendrier"><span class="glyphicon glyphicon-calendar"></span></a>
                </span>
                <script type="text/javascript">
                  $(function() {
                    $.datepicker.setDefaults($.datepicker.regional["fr"]);
                    $("#dateLienAAuteurDateFin").datepicker({
                      showOtherMonths: true,
                      selectOtherMonths: true,
                      changeYear: true
                    });
                  });
                </script> -->
              </div><!-- /input-group -->
            </div><!-- /form-inline -->
          </div><!-- /col-md- -->
        </div><!-- /form-group /col-lg -->


      </div></div><!-- /panel-body /panel-collapse -->
    </div><!-- /panel -->


    <div class="panel panel-anticipation">
      <div class="panel-heading" role="tab" id="pheadDescMat">
        <h4 class="panel-title">
          <a class="collapsed" role="button" data-toggle="collapse" href="https://anticipation-dev.huma-num.fr/?bRechercheAvancee=1#idColpsDescMat" aria-controls="idColpsDescMat">
            <span id="idImgColpsDescMat" class="glyphicon glyphicon-chevron-down"></span> Description matérielle
          </a>
        </h4>
      </div><!-- /panel-heading -->
      <div id="idColpsDescMat" class="panel-collapse collapse" role="tabpanel" aria-labelledby="pheadDescMat"><div class="panel-body">

        <script type="text/javascript">
          $('#idColpsDescMat').on('shown.bs.collapse', function () { vSwitchChevron($('#idImgColpsDescMat'), 'up'); })
          $('#idColpsDescMat').on('hidden.bs.collapse', function () { vSwitchChevron($('#idImgColpsDescMat'), 'down'); })
        </script>

    <div class="form-group">
      <label class="col-md-2 control-label">Support de publication</label>
      <div class="col-md-10">
        <div class="input-group">
          <input type="text" class="form-control" id="txtListeSupportPub-0" name="support" placeholder="Support de publication">
        </div><!-- /input-group -->
      </div><!-- /col-md- -->
    </div><!-- /form-group -->


        <div class="form-group">
          <label class="col-md-2 control-label">Année de parution</label>
          <div class="col-md-10">
            <div class="form-inline">
              <div class="input-group">
                <span class="input-group-addon">
                  <a id="spPODateSPAnParution" title="" style="cursor:pointer;" role="button" tabindex="0" data-toggle="popover" data-trigger="focus" data-content="- Format de la date (année):AAAA&lt;br /&gt;- Pour filtrer sur une année unique, saisissez la même année dans les deux champs.&lt;br /&gt;- Pour filtrer les publications avant une année, saisissez l&#39;année dans le deuxième champ et laisser le premier vide.&lt;br /&gt;- Pour filtrer les publications après une année, saisissez l&#39;année dans le premier champ et laisser le deuxième vide." data-original-title="Info" data-html="true"><span class="glyphicon glyphicon-question-sign"></span></a>
                </span>
                <script type="text/javascript"> $('#spPODateSPAnParution').popover()</script>
                <span class="input-group-addon"> De </span>
                <input type="text" class="form-control" id="txtSPAPAnneeDeb" name="yearParutionDebut" placeholder="AAAA" title="Année au format AAAA" maxlength="4">
              </div><!-- /input-group -->
              <div class="input-group">
                <span class="input-group-addon" id="basic-addon1"> à </span>
                <input type="text" class="form-control" id="txtSPAPAnneeFin" name="yearParutionFin" placeholder="AAAA" title="Année au format AAAA" maxlength="4">
              </div><!-- /input-group -->
            </div><!-- /form-inline -->
          </div><!-- /col-md- -->
        </div><!-- /form-group -->

        <div class="form-group">
          <label class="col-md-2 control-label">Catégories et collections spécialisées</label>
          <div class="col-md-10">
            <div class="input-group">
                            <span class="input-group-addon">
                <div class="checkbox">
                  <label>
              <input type="checkbox" id="chkSPCatColSpe273" name="boxC[]" value="Anticipation"> Anticipation                  </label>
                </div>
              </span><!-- /input-group-addon -->
                            <span class="input-group-addon">
                <div class="checkbox">
                  <label>
              <input type="checkbox" id="chkSPCatColSpe275" name="boxC[]" value="Aventure"> Aventure                  </label>
                </div>
              </span><!-- /input-group-addon -->
                            <span class="input-group-addon">
                <div class="checkbox">
                  <label>
              <input type="checkbox" id="chkSPCatColSpe271" name="boxC[]" value="Édition de luxe / bibliophilie"> Édition de luxe / bibliophilie                  </label>
                </div>
              </span><!-- /input-group-addon -->
                            <span class="input-group-addon">
                <div class="checkbox">
                  <label>
              <input type="checkbox" id="chkSPCatColSpe277" name="boxC[]" value="Fantastique"> Fantastique                  </label>
                </div>
              </span><!-- /input-group-addon -->
                          </div><!-- /input-group -->
            <div class="input-group">
                            <span class="input-group-addon">
                <div class="checkbox">
                  <label>
              <input type="checkbox" id="chkSPCatColSpe269" name="boxC[]" value="Jeunesse"> Jeunesse                  </label>
                </div>
              </span><!-- /input-group-addon -->
                            <span class="input-group-addon">
                <div class="checkbox">
                  <label>
              <input type="checkbox" id="chkSPCatColSpe272" name="boxC[]" value="Littérature générale"> Littérature générale                  </label>
                </div>
              </span><!-- /input-group-addon -->
                            <span class="input-group-addon">
                <div class="checkbox">
                  <label>
              <input type="checkbox" id="chkSPCatColSpe276" name="boxC[]" value="Policier"> Policier                  </label>
                </div>
              </span><!-- /input-group-addon -->
                            <span class="input-group-addon">
                <div class="checkbox">
                  <label>
              <input type="checkbox" id="chkSPCatColSpe270" name="boxC[]" value="Populaire"> Populaire                  </label>
                </div>
              </span><!-- /input-group-addon -->
                          </div><!-- /input-group -->
            <div class="input-group">
                            <span class="input-group-addon">
                <div class="checkbox">
                  <label>
              <input type="checkbox" id="chkSPCatColSpe278" name="boxC[]" value="Sentimental"> Sentimental                  </label>
                </div>
              </span><!-- /input-group-addon -->
                            <span class="input-group-addon">
                <div class="checkbox">
                  <label>
              <input type="checkbox" id="chkSPCatColSpe274" name="boxC[]" value="SF"> SF                  </label>
                </div>
              </span><!-- /input-group-addon -->
                            <span class="input-group-addon">
                <div class="checkbox">
                  <label>
              <input type="checkbox" id="chkSPCatColSpe279" name="boxC[]" value="Autre"> Autre                  </label>
                </div>
              </span><!-- /input-group-addon -->
                            <span class="input-group-addon">
                <div class="checkbox">
                  <label>
              <input type="checkbox" id="chkSPCatColSpe280" name="boxC[]" value="Rien"> Rien                  </label>
                </div>
              </span><!-- /input-group-addon -->
                          </div><!-- /input-group -->
          </div><!-- /col-md- -->
        </div><!-- /form-group -->

        <div class="form-group">
          <label class="col-md-2 control-label">Nom de l'illustrateur</label>
          <div class="col-md-10">
            <div class="input-group">
              <input type="text" class="form-control" id="txtListeIllustrAuteur-0" name="nomIllus" placeholder="Support de publication">
            </div><!-- /input-group -->
          </div><!-- /col-md- -->
        </div><!-- /form-group -->


        <hr>

        <div class="form-group">
          <label class="col-md-2 control-label">Langue de la traduction</label>
          <div class="col-md-10">
            <div class="input-group">
              <input type="text" class="form-control" id="txtListeLangue-0" name="langueTrad" placeholder="Langue de traduction">
            </div><!-- /input-group -->
          </div><!-- /col-md- -->
        </div><!-- /form-group -->


        <hr>

        <div class="form-group">
          <label class="col-md-2 control-label">Nature d'adaptation</label>
          <div class="col-md-10">
            <div class="row"><div class="col-md-12">
              <select id="selNatureAdapt" class="form-control" name="txtListeNatureAdapt-0" style="padding-top: 2px;padding-bottom: 2px; height:34px;">
              <option class="text-left" value="null" selected="">--- Sélectionnez un élément de la liste---</option><option value="BD">BD</option>
<option value="Danse">Danse</option>
<option value="Film">Film</option>
<option value="Livre Audio">Livre Audio</option>
<option value="Musique">Musique</option>
<option value="Pièce radiophonique">Pièce radiophonique</option>
<option value="Radio">Radio</option>
<option value="Théâtre">Théâtre</option>
              </select><!-- /form-control -->
          </div><!-- /col-md- -->
        </div><!-- /form-group /col-lg -->
      </div>
    </div>
  </div></div><!-- /panel-body /panel-collapse -->
</div><!-- /panel -->

    <div class="panel panel-anticipation">
      <div class="panel-heading" role="tab" id="pheadPoeteEtc">
        <h4 class="panel-title">
          <a class="collapsed" role="button" data-toggle="collapse" href="https://anticipation-dev.huma-num.fr/?bRechercheAvancee=1#idColpsPoeteEtc" aria-controls="idColpsPoeteEtc">
            <span id="idImgColpsPoeteEtc" class="glyphicon glyphicon-chevron-down"></span> Poétique, temps, espace, personnage et esthétique
          </a>
        </h4>
      </div><!-- /panel-heading -->
      <div id="idColpsPoeteEtc" class="panel-collapse collapse" role="tabpanel" aria-labelledby="pheadPoeteEtc"><div class="panel-body">

        <script type="text/javascript">
          $('#idColpsPoeteEtc').on('shown.bs.collapse', function () { vSwitchChevron($('#idImgColpsPoeteEtc'), 'up'); })
          $('#idColpsPoeteEtc').on('hidden.bs.collapse', function () { vSwitchChevron($('#idImgColpsPoeteEtc'), 'down'); })
        </script>

        <div class="form-group">
          <label class="col-md-2 control-label">Poétique</label>
          <div class="col-md-10">
            <div class="input-group">
              <span class="input-group-addon">
                <div class="checkbox">
                  <label>
                    <input type="checkbox" id="chkPoetique1" name="boxNaration[]" value="1st"> Narration à la 1ère personne
                  </label>
                </div>
              </span><!-- /input-group-addon -->
              <span class="input-group-addon">
                <div class="checkbox">
                  <label>
                    <input type="checkbox" id="chkPoetique2" name="boxNaration[]" value="3rd"> Narration à la 3ème personne
                  </label>
                </div>
              </span><!-- /input-group-addon -->
            </div><!-- /input-group -->
            <div class="input-group">
              <span class="input-group-addon">
                <div class="checkbox">
                  <label>
                    <input type="checkbox" id="chkPoetique3" name="boxNaration[]" value="multiple"> Narrateurs multiples
                  </label>
                </div>
              </span><!-- /input-group-addon -->
              <span class="input-group-addon">
                <div class="checkbox">
                  <label>
                    <input type="checkbox" id="chkPoetique4" name="boxNaration[]" value="enchassee"> Narration enchâssée
                  </label>
                </div>
              </span><!-- /input-group-addon -->
            </div><!-- /input-group -->
          </div><!-- /col-md- -->
        </div><!-- /form-group -->


        <div class="form-group">
          <label class="col-md-2 control-label">Cadre spatial</label>
          <div class="col-md-10">
            <div class="input-group">
              <input type="text" class="form-control" id="txtListeCadreSpat-0" name="cadreSpatial" placeholder="Cadre spatial">
            </div><!-- /input-group -->
          </div><!-- /col-md- -->
        </div><!-- /form-group -->


        <div class="form-group">
          <label class="col-md-2 control-label">Date de l'histoire</label>
          <div class="col-md-10">
            <div class="form-inline">
              <div class="input-group">
                <span class="input-group-addon">
                  <a id="spPODateHistoire" title="" style="cursor:pointer;" role="button" tabindex="0" data-toggle="popover" data-trigger="focus" data-content="- Format de la date (année):AAAA&lt;br /&gt;- Pour filtrer sur une année unique, saisissez la même année dans les deux champs.&lt;br /&gt;- Pour filtrer les publications avant une année, saisissez l&#39;année dans le deuxième champ et laisser le premier vide.&lt;br /&gt;- Pour filtrer les publications après une année, saisissez l&#39;année dans le premier champ et laisser le deuxième vide." data-original-title="Info" data-html="true"><span class="glyphicon glyphicon-question-sign"></span></a>
                </span>
                <script type="text/javascript"> $('#spPODateSPAnParution').popover()</script>
                <span class="input-group-addon"> De </span>
                <input type="text" class="form-control" id="txtDateHistoireDeb" name="dateHistoireDebut" placeholder="AAAA" title="Année au format AAAA" maxlength="4">
              </div><!-- /input-group -->
              <div class="input-group">
                <span class="input-group-addon" id="basic-addon1"> à </span>
                <input type="text" class="form-control" id="txtDateHistoireFin" name="dateHistoireFin" placeholder="AAAA" title="Année au format AAAA" maxlength="4">
              </div><!-- /input-group -->
            </div><!-- /form-inline -->
          </div><!-- /col-md- -->
        </div><!-- /form-group -->

        <div class="form-group">
          <label class="col-md-2 control-label">Écart temporel</label>
          <div class="col-md-10">
            <div class="input-group">
                            <span class="input-group-addon">
                <div class="checkbox">
                  <label>
              <input type="checkbox" id="chkEcartTemp1" name="boxNaration2[]" value="passeLointain"> Passé lointain (+ de 50 ans)                  </label>
                </div>
              </span><!-- /input-group-addon -->
                            <span class="input-group-addon">
                <div class="checkbox">
                  <label>
              <input type="checkbox" id="chkEcartTemp2" name="boxNaration2[]" value="passeProche"> Passé proche (- de 50 ans)                  </label>
                </div>
              </span><!-- /input-group-addon -->
                          </div>
            <div class="input-group">
                            <span class="input-group-addon">
                <div class="checkbox">
                  <label>
              <input type="checkbox" id="chkEcartTemp3" name="boxNaration2[]" value="present"> Présent                  </label>
                </div>
              </span><!-- /input-group-addon -->
                            <span class="input-group-addon">
                <div class="checkbox">
                  <label>
              <input type="checkbox" id="chkEcartTemp4" name="boxNaration2[]" value="futurProche"> Futur proche (- de 50 ans)                  </label>
                </div>
              </span><!-- /input-group-addon -->
                            <span class="input-group-addon">
                <div class="checkbox">
                  <label>
              <input type="checkbox" id="chkEcartTemp5" name="boxNaration2[]" value="futurLointain"> Futur lointain (+ de 50 ans)                  </label>
                </div>
              </span><!-- /input-group-addon -->
                          </div><!-- /input-group -->
          </div><!-- /col-md- -->
        </div><!-- /form-group -->

        <div class="form-group">
          <label class="col-md-2 control-label">Rapport au temps</label>
          <div class="col-md-10">
            <div class="input-group">
                            <span class="input-group-addon">
                <div class="checkbox">
                  <label>
              <input type="checkbox" id="chkRapTemps47" name="boxNaration[]" value="ageOr"> Âge d'or                  </label>
                </div>
              </span><!-- /input-group-addon -->
                            <span class="input-group-addon">
                <div class="checkbox">
                  <label>
              <input type="checkbox" id="chkRapTemps48" name="boxNaration[]" value="decadence"> Décadence                  </label>
                </div>
              </span><!-- /input-group-addon -->
                            <span class="input-group-addon">
                <div class="checkbox">
                  <label>
              <input type="checkbox" id="chkRapTemps46" name="boxNaration[]" value="eschatologie"> Eschatologie                  </label>
                </div>
              </span><!-- /input-group-addon -->
                          </div>
            <div class="input-group">
                            <span class="input-group-addon">
                <div class="checkbox">
                  <label>
              <input type="checkbox" id="chkRapTemps51" name="boxNaration[]" value="evolutionnisme"> Évolutionnisme                  </label>
                </div>
              </span><!-- /input-group-addon -->
                            <span class="input-group-addon">
                <div class="checkbox">
                  <label>
              <input type="checkbox" id="chkRapTemps49" name="boxNaration[]" value="histoireCyclique"> Histoire cyclique                  </label>
                </div>
              </span><!-- /input-group-addon -->
                            <span class="input-group-addon">
                <div class="checkbox">
                  <label>
              <input type="checkbox" id="chkRapTemps224" name="boxNaration[]" value="progres"> Progrès                  </label>
                </div>
              </span><!-- /input-group-addon -->
                          </div><!-- /input-group -->
          </div><!-- /col-md- -->
        </div><!-- /form-group -->


        <div class="form-group">
          <label class="col-md-2 control-label">Références intertextuelles (oeuvre ou auteur)</label>
          <div class="col-md-10">
            <div class="input-group">
              <input type="text" class="form-control ui-autocomplete-inpu" id="txtRefInterTxt" name="referencesInter" placeholder="Référence">
            </div><!-- /input-group -->
          </div><!-- /col-md- -->
        </div><!-- /form-group -->




        <hr>
        <div class="row"><div class="col-md-4">
          <blockquote>Personnages</blockquote>
        </div></div><!-- /col-md-4 /row -->

        <div class="form-group">
          <label class="col-md-2 control-label">Personnage scientifique</label>
          <div class="col-md-10">
            <div class="input-group">
              <input type="text" class="form-control ui-autocomplete-inpu" id="txtPersDiscip" name="persoScientifique" placeholder="Discipline d&#39;un personnage scientifique">
            </div><!-- /input-group -->
          </div><!-- /col-md- -->
        </div><!-- /form-group -->


        <div class="form-group">
          <label class="col-md-2 control-label">Profession</label>
          <div class="col-md-10">
            <div class="input-group">
              <input type="text" class="form-control ui-autocomplete-inpu" id="txtPersProf" name="profession" placeholder="Profession">
            </div><!-- /input-group -->
          </div><!-- /col-md- -->
        </div><!-- /form-group -->


        <div class="form-group">
          <label class="col-md-2 control-label">Genre</label>
          <div class="col-md-10">
            <div class="input-group">
                            <span class="input-group-addon">
                <div class="checkbox">
                  <label>
              <input type="checkbox" id="chkPersGenre1" name="boxNaration[]" value="masculin"> Masculin                  </label>
                </div>
              </span><!-- /input-group-addon -->
                            <span class="input-group-addon">
                <div class="checkbox">
                  <label>
              <input type="checkbox" id="chkPersGenre2" name="boxNaration[]" value="feminin"> Féminin                  </label>
                </div>
              </span><!-- /input-group-addon -->
                            <span class="input-group-addon">
                <div class="checkbox">
                  <label>
              <input type="checkbox" id="chkPersGenre3" name="boxNaration[]" value="indetermine"> Indéterminé                  </label>
                </div>
              </span><!-- /input-group-addon -->
                          </div><!-- /input-group -->
          </div><!-- /col-md- -->
        </div><!-- /form-group -->

        <div class="form-group">
          <label class="col-md-2 control-label">Valorisation</label>
          <div class="col-md-10">
            <div class="input-group">
                            <span class="input-group-addon">
                <div class="checkbox">
                  <label>
              <input type="checkbox" id="chkPersValo1" name="boxNaration[]" value="positif"> Positif                  </label>
                </div>
              </span><!-- /input-group-addon -->
                            <span class="input-group-addon">
                <div class="checkbox">
                  <label>
              <input type="checkbox" id="chkPersValo2" name="boxNaration[]" value="négatif"> Négatif                  </label>
                </div>
              </span><!-- /input-group-addon -->
                            <span class="input-group-addon">
                <div class="checkbox">
                  <label>
              <input type="checkbox" id="chkPersValo3" name="boxNaration[]" value="problématique"> Problématique                  </label>
                </div>
              </span><!-- /input-group-addon -->
                            <span class="input-group-addon">
                <div class="checkbox">
                  <label>
              <input type="checkbox" id="chkPersValo4" name="boxNaration[]" value="neutre"> Neutre                  </label>
                </div>
              </span><!-- /input-group-addon -->
                          </div><!-- /input-group -->
          </div><!-- /col-md- -->
        </div><!-- /form-group -->


        <div class="form-group">
          <label class="col-md-2 control-label">Caractéristiques</label>
          <div class="col-md-10">
            <div class="input-group">
              <input type="text" class="form-control ui-autocomplete-inpu" id="txtPersCaract" name="caracteristiques" placeholder="Caractéristique">
            </div><!-- /input-group -->
          </div><!-- /col-md- -->
        </div><!-- /form-group -->


        <div class="form-group">
          <label class="col-md-2 control-label">Figure de l'altérité</label>
          <div class="col-md-10">
            <div class="input-group">
                            <span class="input-group-addon">
                <div class="checkbox">
                  <label>
              <input type="checkbox" id="chkPersFigAlt1" name="boxNaration[]" value="europe"> Européenne                  </label>
                </div>
              </span><!-- /input-group-addon -->
                            <span class="input-group-addon">
                <div class="checkbox">
                  <label>
              <input type="checkbox" id="chkPersFigAlt2" name="boxNaration[]" value="extra-europe"> Extra-européenne                  </label>
                </div>
              </span><!-- /input-group-addon -->
                            <span class="input-group-addon">
                <div class="checkbox">
                  <label>
              <input type="checkbox" id="chkPersFigAlt3" name="boxNaration[]" value="extra-terrestre"> Extra-terrestre                  </label>
                </div>
              </span><!-- /input-group-addon -->
                          </div>
            <div class="input-group">
                            <span class="input-group-addon">
                <div class="checkbox">
                  <label>
              <input type="checkbox" id="chkPersFigAlt4" name="boxNaration[]" value="creature-artificielle"> Créature artificielle                  </label>
                </div>
              </span><!-- /input-group-addon -->
                            <span class="input-group-addon">
                <div class="checkbox">
                  <label>
              <input type="checkbox" id="chkPersFigAlt5" name="boxNaration[]" value="mutante"> Mutante                  </label>
                </div>
              </span><!-- /input-group-addon -->
                            <span class="input-group-addon">
                <div class="checkbox">
                  <label>
              <input type="checkbox" id="chkPersFigAlt6" name="boxNaration[]" value="autre"> Autre                  </label>
                </div>
              </span><!-- /input-group-addon -->
                          </div><!-- /input-group -->
          </div><!-- /col-md- -->
        </div><!-- /form-group -->

        <hr>

        <div class="form-group">
          <label class="col-md-2 control-label">Esthétique</label>
          <div class="col-md-10">
            <div class="row"><div class="col-md-12"><div class="input-group">
              <select name="esthetique" id="selImaginEsthetique" class="form-control" style="padding-top: 2px;padding-bottom: 2px; height:34px;">
              <option class="text-left" value="null" selected="">--- Sélectionnez un élément de la liste---</option><option value="29">Aucun</option>
<option value="21">Aventure</option>
<option value="244">Conte philosophique</option>
<option value="5">Didactique</option>
<option value="12">Dystopie</option>
<option value="7">Épique</option>
<option value="25">Érotique</option>
<option value="177">Ésotérique</option>
<option value="227">étiologique</option>
<option value="8">Fantastique</option>
<option value="293">historique </option>
<option value="10">Horreur</option>
<option value="17">Humoristique</option>
<option value="15">Ironique</option>
<option value="28">Journalistique</option>
<option value="209">Lyrique</option>
<option value="9">Merveilleux</option>
<option value="217">Mystérieux</option>
<option value="18">Parodique</option>
<option value="6">Pathétique</option>
<option value="249">patriotique</option>
<option value="26">Philosophie</option>
<option value="27">Poésie</option>
<option value="19">Policier</option>
<option value="23">Post-apocalyptique</option>
<option value="221">Psychologique</option>
<option value="24">Religieux</option>
<option value="22">Robinsonnade</option>
<option value="308">roman d'apprentissage</option>
<option value="220">Roman de moeurs</option>
<option value="243">Roman philosophique</option>
<option value="283">Roman préhistorique</option>
<option value="16">Satirique</option>
<option value="20">Sentimental</option>
<option value="178">Tragique</option>
<option value="13">Uchronie</option>
<option value="11">Utopie</option>
              </select><!-- /form-control -->
            </div></div></div><!-- /input-group /col-md-12 /row-->

          </div><!-- /col-md- -->
        </div><!-- /form-group -->

      </div></div><!-- /panel-body /panel-collapse -->
    </div><!-- /panel -->

    <div class="panel panel-anticipation">
      <div class="panel-heading" role="tab" id="pheadScieSoc">
        <h4 class="panel-title">
          <a class="collapsed" role="button" data-toggle="collapse" href="https://anticipation-dev.huma-num.fr/?bRechercheAvancee=1#idColpsScieSoc" aria-controls="idColpsScieSoc">
            <span id="idImgColpsScieSoc" class="glyphicon glyphicon-chevron-down"></span> Sciences et sociétés
          </a>
        </h4>
      </div><!-- /panel-heading -->
      <div id="idColpsScieSoc" class="panel-collapse collapse" role="tabpanel" aria-labelledby="pheadScieSoc"><div class="panel-body">

        <script type="text/javascript">
          $('#idColpsScieSoc').on('shown.bs.collapse', function () { vSwitchChevron($('#idImgColpsScieSoc'), 'up'); })
          $('#idColpsScieSoc').on('hidden.bs.collapse', function () { vSwitchChevron($('#idImgColpsScieSoc'), 'down'); })
        </script>

        <div class="form-group">
          <label class="col-md-2 control-label">Disciplines et thématiques</label>
          <div class="col-md-10">
            <div class="panel panel-anticipation">
              <div class="panel-heading" role="tab" id="pheadDiscThem">
                <h4 class="panel-title">
                  <a class="collapsed" role="button" data-toggle="collapse" href="https://anticipation-dev.huma-num.fr/?bRechercheAvancee=1#idColpsDiscThem" aria-controls="idColpsDiscThem">
                    <span id="idImgColpsDiscThem" class="glyphicon glyphicon-chevron-down"></span> Cliquez pour obtenir la liste des disciplines et thématiques
                  </a>
                </h4>
              </div><!-- /panel-heading -->
              <div id="idColpsDiscThem" class="panel-collapse collapse" role="tabpanel" aria-labelledby="pheadDiscThem"><div class="panel-body">


                <div class="panel panel-anticipation">
                                  <div class="panel-heading">
                    <div class="checkbox">
                      <label>
              Agronomie                      </label>
                    </div>
                  </div><!-- /panel-heading -->
                  <div class="panel-body"><div class="input-group">
                                  <span class="input-group-addon">
                    <div class="checkbox">
                      <label>
                <input type="checkbox" id="chkScSoDiscThem90" name="chkScSoDiscThem[]" value="90|Agriculture (ex : acclimatation d’espèces nouvelles)" idchkgroup="89"> Agriculture (ex : acclimatation d’espèces nouvelles)                      </label>
                    </div>
                  </span><!-- /input-group-addon -->
                                  <span class="input-group-addon">
                    <div class="checkbox">
                      <label>
                <input type="checkbox" id="chkScSoDiscThem91" name="chkScSoDiscThem[]" value="91|Arts vétérinaires (épizooties, maladies)" idchkgroup="89"> Arts vétérinaires (épizooties, maladies)                      </label>
                    </div>
                  </span><!-- /input-group-addon -->
                                  <span class="input-group-addon">
                    <div class="checkbox">
                      <label>
                <input type="checkbox" id="chkScSoDiscThem92" name="chkScSoDiscThem[]" value="92|Diététique (alimentation)" idchkgroup="89"> Diététique (alimentation)                      </label>
                    </div>
                  </span><!-- /input-group-addon -->
                                </div><!-- /input-group -->
                                </div></div><!-- /panel-body /panel -->
                <div class="panel panel-anticipation">
                                <div class="input-group">
                                  <span class="input-group-addon">
                    <div class="checkbox">
                      <label>
                <input type="checkbox" id="chkScSoDiscThem93" name="chkScSoDiscThem[]" value="93|Anthropologie"> Anthropologie                      </label>
                    </div>
                  </span><!-- /input-group-addon -->
                                  <span class="input-group-addon">
                    <div class="checkbox">
                      <label>
                <input type="checkbox" id="chkScSoDiscThem94" name="chkScSoDiscThem[]" value="94|Archéologie"> Archéologie                      </label>
                    </div>
                  </span><!-- /input-group-addon -->
                                  <span class="input-group-addon">
                    <div class="checkbox">
                      <label>
                <input type="checkbox" id="chkScSoDiscThem95" name="chkScSoDiscThem[]" value="95|Armement : applications aux arts militaires (explosifs, canons, machines…)"> Armement : applications aux arts militaires (explosifs, canons, machines…)                      </label>
                    </div>
                  </span><!-- /input-group-addon -->
                                  <span class="input-group-addon">
                    <div class="checkbox">
                      <label>
                <input type="checkbox" id="chkScSoDiscThem96" name="chkScSoDiscThem[]" value="96|Art des constructions (génie civil), grands travaux (canaux, isthmes)"> Art des constructions (génie civil), grands travaux (canaux, isthmes)                      </label>
                    </div>
                  </span><!-- /input-group-addon -->
                                </div><!-- /input-group -->
                <div class="input-group">
                                </div><!-- /input-group -->
                                <div class="input-group">
                                  <span class="input-group-addon">
                    <div class="checkbox">
                      <label>
                <input type="checkbox" id="chkScSoDiscThem97" name="chkScSoDiscThem[]" value="97|Astronomie / Astrophysique"> Astronomie / Astrophysique                      </label>
                    </div>
                  </span><!-- /input-group-addon -->
                                </div><!-- /input-group -->
                                </div><!-- /panel -->
                <div class="panel panel-anticipation">
                                  <div class="panel-heading">
                    <div class="checkbox">
                      <label>
                <input type="checkbox" id="chkScSoDiscThem98" name="chkScSoDiscThem[]" value="98|Chimie"> Chimie                      </label>
                    </div>
                  </div><!-- /panel-heading -->
                  <div class="panel-body"><div class="input-group">
                                  <span class="input-group-addon">
                    <div class="checkbox">
                      <label>
                <input type="checkbox" id="chkScSoDiscThem99" name="chkScSoDiscThem[]" value="99|Chimie analytique, classifications des éléments" idchkgroup="98"> Chimie analytique, classifications des éléments                      </label>
                    </div>
                  </span><!-- /input-group-addon -->
                                  <span class="input-group-addon">
                    <div class="checkbox">
                      <label>
                <input type="checkbox" id="chkScSoDiscThem100" name="chkScSoDiscThem[]" value="100|Chimie industrielle, procédés de fabrication (alliages, produits de synthèse)" idchkgroup="98"> Chimie industrielle, procédés de fabrication (alliages, produits de synthèse)                      </label>
                    </div>
                  </span><!-- /input-group-addon -->
                                  <span class="input-group-addon">
                    <div class="checkbox">
                      <label>
                <input type="checkbox" id="chkScSoDiscThem101" name="chkScSoDiscThem[]" value="101|Chimie organique" idchkgroup="98"> Chimie organique                      </label>
                    </div>
                  </span><!-- /input-group-addon -->
                                </div><!-- /input-group -->
                                </div><!-- /panel-body -->
                                </div><!-- /panel -->
                <div class="panel panel-anticipation">
                                  <div class="panel-heading">
                    <div class="checkbox">
                      <label>
                <input type="checkbox" id="chkScSoDiscThem102" name="chkScSoDiscThem[]" value="102|Énergie"> Énergie                      </label>
                    </div>
                  </div><!-- /panel-heading -->
                  <div class="panel-body"><div class="input-group">
                                  <span class="input-group-addon">
                    <div class="checkbox">
                      <label>
                <input type="checkbox" id="chkScSoDiscThem107" name="chkScSoDiscThem[]" value="107|Atomique" idchkgroup="102"> Atomique                      </label>
                    </div>
                  </span><!-- /input-group-addon -->
                                  <span class="input-group-addon">
                    <div class="checkbox">
                      <label>
                <input type="checkbox" id="chkScSoDiscThem104" name="chkScSoDiscThem[]" value="104|Électricité" idchkgroup="102"> Électricité                      </label>
                    </div>
                  </span><!-- /input-group-addon -->
                                  <span class="input-group-addon">
                    <div class="checkbox">
                      <label>
                <input type="checkbox" id="chkScSoDiscThem199" name="chkScSoDiscThem[]" value="199|Éolienne" idchkgroup="102"> Éolienne                      </label>
                    </div>
                  </span><!-- /input-group-addon -->
                                  <span class="input-group-addon">
                    <div class="checkbox">
                      <label>
                <input type="checkbox" id="chkScSoDiscThem106" name="chkScSoDiscThem[]" value="106|Éther / solaire" idchkgroup="102"> Éther / solaire                      </label>
                    </div>
                  </span><!-- /input-group-addon -->
                                </div><!-- /input-group -->
                <div class="input-group">
                                  <span class="input-group-addon">
                    <div class="checkbox">
                      <label>
                <input type="checkbox" id="chkScSoDiscThem197" name="chkScSoDiscThem[]" value="197|Géothermique" idchkgroup="102"> Géothermique                      </label>
                    </div>
                  </span><!-- /input-group-addon -->
                                  <span class="input-group-addon">
                    <div class="checkbox">
                      <label>
                <input type="checkbox" id="chkScSoDiscThem198" name="chkScSoDiscThem[]" value="198|Hydraulique" idchkgroup="102"> Hydraulique                      </label>
                    </div>
                  </span><!-- /input-group-addon -->
                                  <span class="input-group-addon">
                    <div class="checkbox">
                      <label>
                <input type="checkbox" id="chkScSoDiscThem105" name="chkScSoDiscThem[]" value="105|Magnétisme" idchkgroup="102"> Magnétisme                      </label>
                    </div>
                  </span><!-- /input-group-addon -->
                                  <span class="input-group-addon">
                    <div class="checkbox">
                      <label>
                <input type="checkbox" id="chkScSoDiscThem103" name="chkScSoDiscThem[]" value="103|Thermodynamique" idchkgroup="102"> Thermodynamique                      </label>
                    </div>
                  </span><!-- /input-group-addon -->
                                </div><!-- /input-group -->
                                </div><!-- /panel-body -->
                                </div><!-- /panel -->
                <div class="panel panel-anticipation">
                                  <div class="panel-heading">
                    <div class="checkbox">
                      <label>
                <input type="checkbox" id="chkScSoDiscThem108" name="chkScSoDiscThem[]" value="108|Inventions / innovations techniques"> Inventions / innovations techniques                      </label>
                    </div>
                  </div><!-- /panel-heading -->
                  <div class="panel-body"><div class="input-group">
                                  <span class="input-group-addon">
                    <div class="checkbox">
                      <label>
                <input type="checkbox" id="chkScSoDiscThem109" name="chkScSoDiscThem[]" value="109|Éclairage" idchkgroup="108"> Éclairage                      </label>
                    </div>
                  </span><!-- /input-group-addon -->
                                  <span class="input-group-addon">
                    <div class="checkbox">
                      <label>
                <input type="checkbox" id="chkScSoDiscThem110" name="chkScSoDiscThem[]" value="110|Machines à vapeur, moteurs électriques" idchkgroup="108"> Machines à vapeur, moteurs électriques                      </label>
                    </div>
                  </span><!-- /input-group-addon -->
                                  <span class="input-group-addon">
                    <div class="checkbox">
                      <label>
                <input type="checkbox" id="chkScSoDiscThem111" name="chkScSoDiscThem[]" value="111|Photographie (galvanoplastie), cinématographe, phonographe" idchkgroup="108"> Photographie (galvanoplastie), cinématographe, phonographe                      </label>
                    </div>
                  </span><!-- /input-group-addon -->
                                  <span class="input-group-addon">
                    <div class="checkbox">
                      <label>
                <input type="checkbox" id="chkScSoDiscThem112" name="chkScSoDiscThem[]" value="112|Télégraphe, téléphone, radio" idchkgroup="108"> Télégraphe, téléphone, radio                      </label>
                    </div>
                  </span><!-- /input-group-addon -->
                                </div><!-- /input-group -->
                                </div></div><!-- /panel-body /panel -->
                <div class="panel panel-anticipation">
                                <div class="input-group">
                                  <span class="input-group-addon">
                    <div class="checkbox">
                      <label>
                <input type="checkbox" id="chkScSoDiscThem113" name="chkScSoDiscThem[]" value="113|Mathématiques"> Mathématiques                      </label>
                    </div>
                  </span><!-- /input-group-addon -->
                                </div><!-- /input-group -->
                                </div><!-- /panel -->
                <div class="panel panel-anticipation">
                                  <div class="panel-heading">
                    <div class="checkbox">
                      <label>
                <input type="checkbox" id="chkScSoDiscThem114" name="chkScSoDiscThem[]" value="114|Médecine"> Médecine                      </label>
                    </div>
                  </div><!-- /panel-heading -->
                  <div class="panel-body"><div class="input-group">
                                  <span class="input-group-addon">
                    <div class="checkbox">
                      <label>
                <input type="checkbox" id="chkScSoDiscThem115" name="chkScSoDiscThem[]" value="115|Anatomie" idchkgroup="114"> Anatomie                      </label>
                    </div>
                  </span><!-- /input-group-addon -->
                                  <span class="input-group-addon">
                    <div class="checkbox">
                      <label>
                <input type="checkbox" id="chkScSoDiscThem116" name="chkScSoDiscThem[]" value="116|Chirurgie" idchkgroup="114"> Chirurgie                      </label>
                    </div>
                  </span><!-- /input-group-addon -->
                                  <span class="input-group-addon">
                    <div class="checkbox">
                      <label>
                <input type="checkbox" id="chkScSoDiscThem117" name="chkScSoDiscThem[]" value="117|Histologie" idchkgroup="114"> Histologie                      </label>
                    </div>
                  </span><!-- /input-group-addon -->
                                  <span class="input-group-addon">
                    <div class="checkbox">
                      <label>
                <input type="checkbox" id="chkScSoDiscThem118" name="chkScSoDiscThem[]" value="118|Homéopathie" idchkgroup="114"> Homéopathie                      </label>
                    </div>
                  </span><!-- /input-group-addon -->
                                </div><!-- /input-group -->
                <div class="input-group">
                                  <span class="input-group-addon">
                    <div class="checkbox">
                      <label>
                <input type="checkbox" id="chkScSoDiscThem119" name="chkScSoDiscThem[]" value="119|Hygiène publique" idchkgroup="114"> Hygiène publique                      </label>
                    </div>
                  </span><!-- /input-group-addon -->
                                  <span class="input-group-addon">
                    <div class="checkbox">
                      <label>
                <input type="checkbox" id="chkScSoDiscThem120" name="chkScSoDiscThem[]" value="120|Pathologies : épidémies, infections…" idchkgroup="114"> Pathologies : épidémies, infections…                      </label>
                    </div>
                  </span><!-- /input-group-addon -->
                                  <span class="input-group-addon">
                    <div class="checkbox">
                      <label>
                <input type="checkbox" id="chkScSoDiscThem122" name="chkScSoDiscThem[]" value="122|Physiologie" idchkgroup="114"> Physiologie                      </label>
                    </div>
                  </span><!-- /input-group-addon -->
                                  <span class="input-group-addon">
                    <div class="checkbox">
                      <label>
                <input type="checkbox" id="chkScSoDiscThem176" name="chkScSoDiscThem[]" value="176|Psychologie / psychiatrie (magnétisme, hypnose)" idchkgroup="114"> Psychologie / psychiatrie (magnétisme, hypnose)                      </label>
                    </div>
                  </span><!-- /input-group-addon -->
                                </div><!-- /input-group -->
                <div class="input-group">
                                  <span class="input-group-addon">
                    <div class="checkbox">
                      <label>
                <input type="checkbox" id="chkScSoDiscThem121" name="chkScSoDiscThem[]" value="121|Thérapeutiques : électrothérapies, inoculations, vaccinations" idchkgroup="114"> Thérapeutiques : électrothérapies, inoculations, vaccinations                      </label>
                    </div>
                  </span><!-- /input-group-addon -->
                                </div><!-- /input-group -->
                                </div></div><!-- /panel-body /panel -->
                <div class="panel panel-anticipation">
                                <div class="input-group">
                                  <span class="input-group-addon">
                    <div class="checkbox">
                      <label>
                <input type="checkbox" id="chkScSoDiscThem123" name="chkScSoDiscThem[]" value="123|Paléontologie, préhistoire"> Paléontologie, préhistoire                      </label>
                    </div>
                  </span><!-- /input-group-addon -->
                                </div><!-- /input-group -->
                                </div><!-- /panel -->
                <div class="panel panel-anticipation">
                                  <div class="panel-heading">
                    <div class="checkbox">
                      <label>
                <input type="checkbox" id="chkScSoDiscThem124" name="chkScSoDiscThem[]" value="124|Physique"> Physique                      </label>
                    </div>
                  </div><!-- /panel-heading -->
                  <div class="panel-body"><div class="input-group">
                                  <span class="input-group-addon">
                    <div class="checkbox">
                      <label>
                <input type="checkbox" id="chkScSoDiscThem125" name="chkScSoDiscThem[]" value="125|Acoustique" idchkgroup="124"> Acoustique                      </label>
                    </div>
                  </span><!-- /input-group-addon -->
                                  <span class="input-group-addon">
                    <div class="checkbox">
                      <label>
                <input type="checkbox" id="chkScSoDiscThem126" name="chkScSoDiscThem[]" value="126|Électricité, magnétisme" idchkgroup="124"> Électricité, magnétisme                      </label>
                    </div>
                  </span><!-- /input-group-addon -->
                                  <span class="input-group-addon">
                    <div class="checkbox">
                      <label>
                <input type="checkbox" id="chkScSoDiscThem127" name="chkScSoDiscThem[]" value="127|Mécanique, hydraulique" idchkgroup="124"> Mécanique, hydraulique                      </label>
                    </div>
                  </span><!-- /input-group-addon -->
                                  <span class="input-group-addon">
                    <div class="checkbox">
                      <label>
                <input type="checkbox" id="chkScSoDiscThem128" name="chkScSoDiscThem[]" value="128|Optique" idchkgroup="124"> Optique                      </label>
                    </div>
                  </span><!-- /input-group-addon -->
                                </div><!-- /input-group -->
                <div class="input-group">
                                  <span class="input-group-addon">
                    <div class="checkbox">
                      <label>
                <input type="checkbox" id="chkScSoDiscThem129" name="chkScSoDiscThem[]" value="129|Physique atomique, rayonnements" idchkgroup="124"> Physique atomique, rayonnements                      </label>
                    </div>
                  </span><!-- /input-group-addon -->
                                  <span class="input-group-addon">
                    <div class="checkbox">
                      <label>
                <input type="checkbox" id="chkScSoDiscThem130" name="chkScSoDiscThem[]" value="130|Thermodynamique (chaleur)" idchkgroup="124"> Thermodynamique (chaleur)                      </label>
                    </div>
                  </span><!-- /input-group-addon -->
                                </div><!-- /input-group -->
                                </div><!-- /panel-body -->
                                </div><!-- /panel -->
                <div class="panel panel-anticipation">
                                  <div class="panel-heading">
                    <div class="checkbox">
                      <label>
                <input type="checkbox" id="chkScSoDiscThem131" name="chkScSoDiscThem[]" value="131|Sciences biologiques"> Sciences biologiques                      </label>
                    </div>
                  </div><!-- /panel-heading -->
                  <div class="panel-body"><div class="input-group">
                                  <span class="input-group-addon">
                    <div class="checkbox">
                      <label>
                <input type="checkbox" id="chkScSoDiscThem190" name="chkScSoDiscThem[]" value="190|Bactériologie" idchkgroup="131"> Bactériologie                      </label>
                    </div>
                  </span><!-- /input-group-addon -->
                                  <span class="input-group-addon">
                    <div class="checkbox">
                      <label>
                <input type="checkbox" id="chkScSoDiscThem132" name="chkScSoDiscThem[]" value="132|Génétique / héréditarisme" idchkgroup="131"> Génétique / héréditarisme                      </label>
                    </div>
                  </span><!-- /input-group-addon -->
                                  <span class="input-group-addon">
                    <div class="checkbox">
                      <label>
                <input type="checkbox" id="chkScSoDiscThem134" name="chkScSoDiscThem[]" value="134|Microbiologie / biochimie" idchkgroup="131"> Microbiologie / biochimie                      </label>
                    </div>
                  </span><!-- /input-group-addon -->
                                </div><!-- /input-group -->
                                </div><!-- /panel-body -->
                                </div><!-- /panel -->
                <div class="panel panel-anticipation">
                                  <div class="panel-heading">
                    <div class="checkbox">
                      <label>
                <input type="checkbox" id="chkScSoDiscThem135" name="chkScSoDiscThem[]" value="135|Sciences naturelles"> Sciences naturelles                      </label>
                    </div>
                  </div><!-- /panel-heading -->
                  <div class="panel-body"><div class="input-group">
                                  <span class="input-group-addon">
                    <div class="checkbox">
                      <label>
                <input type="checkbox" id="chkScSoDiscThem136" name="chkScSoDiscThem[]" value="136|Botanique" idchkgroup="135"> Botanique                      </label>
                    </div>
                  </span><!-- /input-group-addon -->
                                  <span class="input-group-addon">
                    <div class="checkbox">
                      <label>
                <input type="checkbox" id="chkScSoDiscThem137" name="chkScSoDiscThem[]" value="137|Entomologie" idchkgroup="135"> Entomologie                      </label>
                    </div>
                  </span><!-- /input-group-addon -->
                                  <span class="input-group-addon">
                    <div class="checkbox">
                      <label>
                <input type="checkbox" id="chkScSoDiscThem138" name="chkScSoDiscThem[]" value="138|Mycologie" idchkgroup="135"> Mycologie                      </label>
                    </div>
                  </span><!-- /input-group-addon -->
                                  <span class="input-group-addon">
                    <div class="checkbox">
                      <label>
                <input type="checkbox" id="chkScSoDiscThem139" name="chkScSoDiscThem[]" value="139|Zoologie" idchkgroup="135"> Zoologie                      </label>
                    </div>
                  </span><!-- /input-group-addon -->
                                </div><!-- /input-group -->
                                </div><!-- /panel-body -->
                                </div><!-- /panel -->
                <div class="panel panel-anticipation">
                                  <div class="panel-heading">
                    <div class="checkbox">
                      <label>
                <input type="checkbox" id="chkScSoDiscThem140" name="chkScSoDiscThem[]" value="140|Sciences de la terre"> Sciences de la terre                      </label>
                    </div>
                  </div><!-- /panel-heading -->
                  <div class="panel-body"><div class="input-group">
                                  <span class="input-group-addon">
                    <div class="checkbox">
                      <label>
                <input type="checkbox" id="chkScSoDiscThem195" name="chkScSoDiscThem[]" value="195|Catastrophes naturelles" idchkgroup="140"> Catastrophes naturelles                      </label>
                    </div>
                  </span><!-- /input-group-addon -->
                                  <span class="input-group-addon">
                    <div class="checkbox">
                      <label>
                <input type="checkbox" id="chkScSoDiscThem141" name="chkScSoDiscThem[]" value="141|Ethnologie" idchkgroup="140"> Ethnologie                      </label>
                    </div>
                  </span><!-- /input-group-addon -->
                                  <span class="input-group-addon">
                    <div class="checkbox">
                      <label>
                <input type="checkbox" id="chkScSoDiscThem143" name="chkScSoDiscThem[]" value="143|Géographie, géodésie (voyages scientifiques d’exploration, expéditions)" idchkgroup="140"> Géographie, géodésie (voyages scientifiques d’exploration, expéditions)                      </label>
                    </div>
                  </span><!-- /input-group-addon -->
                                  <span class="input-group-addon">
                    <div class="checkbox">
                      <label>
                <input type="checkbox" id="chkScSoDiscThem142" name="chkScSoDiscThem[]" value="142|Géologie / Minéralogie" idchkgroup="140"> Géologie / Minéralogie                      </label>
                    </div>
                  </span><!-- /input-group-addon -->
                                </div><!-- /input-group -->
                <div class="input-group">
                                  <span class="input-group-addon">
                    <div class="checkbox">
                      <label>
                <input type="checkbox" id="chkScSoDiscThem144" name="chkScSoDiscThem[]" value="144|Météorologie (ex : inondations)" idchkgroup="140"> Météorologie (ex : inondations)                      </label>
                    </div>
                  </span><!-- /input-group-addon -->
                                  <span class="input-group-addon">
                    <div class="checkbox">
                      <label>
                <input type="checkbox" id="chkScSoDiscThem145" name="chkScSoDiscThem[]" value="145|Océanographie" idchkgroup="140"> Océanographie                      </label>
                    </div>
                  </span><!-- /input-group-addon -->
                                </div><!-- /input-group -->
                                </div><!-- /panel-body -->
                                </div><!-- /panel -->
                <div class="panel panel-anticipation">
                                  <div class="panel-heading">
                    <div class="checkbox">
                      <label>
                <input type="checkbox" id="chkScSoDiscThem146" name="chkScSoDiscThem[]" value="146|Sociabilités scientifiques"> Sociabilités scientifiques                      </label>
                    </div>
                  </div><!-- /panel-heading -->
                  <div class="panel-body"><div class="input-group">
                                  <span class="input-group-addon">
                    <div class="checkbox">
                      <label>
                <input type="checkbox" id="chkScSoDiscThem147" name="chkScSoDiscThem[]" value="147|Monde savant, communauté scientifique (académies, sociétés savantes, université)" idchkgroup="146"> Monde savant, communauté scientifique (académies, sociétés savantes, université)                      </label>
                    </div>
                  </span><!-- /input-group-addon -->
                                  <span class="input-group-addon">
                    <div class="checkbox">
                      <label>
                <input type="checkbox" id="chkScSoDiscThem148" name="chkScSoDiscThem[]" value="148|Spectacles scientifiques (expositions universelles, conférences et démonstrations publiques)" idchkgroup="146"> Spectacles scientifiques (expositions universelles, conférences et démonstrations publiques)                      </label>
                    </div>
                  </span><!-- /input-group-addon -->
                                </div><!-- /input-group -->
                                </div><!-- /panel-body -->
                                </div><!-- /panel -->
                <div class="panel panel-anticipation">
                                  <div class="panel-heading">
                    <div class="checkbox">
                      <label>
                <input type="checkbox" id="chkScSoDiscThem149" name="chkScSoDiscThem[]" value="149|Transports"> Transports                      </label>
                    </div>
                  </div><!-- /panel-heading -->
                  <div class="panel-body"><div class="input-group">
                                  <span class="input-group-addon">
                    <div class="checkbox">
                      <label>
                <input type="checkbox" id="chkScSoDiscThem150" name="chkScSoDiscThem[]" value="150|Aérostats, appareils aériens" idchkgroup="149"> Aérostats, appareils aériens                      </label>
                    </div>
                  </span><!-- /input-group-addon -->
                                  <span class="input-group-addon">
                    <div class="checkbox">
                      <label>
                <input type="checkbox" id="chkScSoDiscThem152" name="chkScSoDiscThem[]" value="152|Transport maritime (bateaux à vapeur, sous-marins…)" idchkgroup="149"> Transport maritime (bateaux à vapeur, sous-marins…)                      </label>
                    </div>
                  </span><!-- /input-group-addon -->
                                  <span class="input-group-addon">
                    <div class="checkbox">
                      <label>
                <input type="checkbox" id="chkScSoDiscThem154" name="chkScSoDiscThem[]" value="154|Transport souterrain (métro…)" idchkgroup="149"> Transport souterrain (métro…)                      </label>
                    </div>
                  </span><!-- /input-group-addon -->
                                  <span class="input-group-addon">
                    <div class="checkbox">
                      <label>
                <input type="checkbox" id="chkScSoDiscThem151" name="chkScSoDiscThem[]" value="151|Transport terrestre (automobiles, chemin de fer…)" idchkgroup="149"> Transport terrestre (automobiles, chemin de fer…)                      </label>
                    </div>
                  </span><!-- /input-group-addon -->
                                </div><!-- Pour le panel-body -->
                                </div></div><!-- /input-group /panel -->
              </div></div><!-- /panel-body /panel-collapse -->
            </div><!-- /panel -->
          </div><!-- /col-md- -->
        </div><!-- /form-group -->

        <hr>
        <div class="row"><div class="col-md-4">
          <blockquote>Références à des éléments scientifiques réels</blockquote>
        </div></div><!-- /col-md-4 /row -->

        <div class="form-group">
          <label class="col-md-2 control-label">Théorie ou invention</label>
          <div class="col-md-10">
            <div class="input-group">
                            <span class="input-group-addon"><input id="chkReelThInvTous" name="chkReelThInvTous" type="checkbox" value="tous" aria-label="..."> Toutes</span>
              <span id="btnAjoutReelThInv" class="input-group-addon btn-success" role="button"><span class="glyphicon glyphicon-plus"></span></span>
              <span class="input-group-addon"><span id="imgInfReelThInvAutocomp" class="glyphicon glyphicon-pencil"></span></span>
              <input type="text" class="form-control ui-autocomplete-input" id="txtReelThInv" name="txtReelThInv" placeholder="Sélectionnez une théorie ou une invention" autocomplete="off">
            </div><!-- /input-group -->
            <div id="listeReelThInv">
              <div class="row"><div class="col-md-12">
                <input type="text" class="form-control" id="txtListeReelThInv-0" name="txtListeReelThInv-0" value="Aucune saisie" readonly="">
              </div></div><!-- /col-md-12 /row-->
            </div>

            <script type="text/javascript">
              $('#chkReelThInvTous').click(function(){
                if (document.getElementById('chkReelThInvTous').checked === true) {
                  // On a coché Tous
                  alert('En sélectionnant cette case aucune saisie des "Théhorie ou invention" ne sera prise en compte dans la requête');
                  $('#listeReelThInv :input').each(function(){
                    $(this).attr('disabled', '');
                  });
                  $('#txtReelThInv').attr('disabled', '');
                } else {
                  $('#listeReelThInv :input').each(function(){
                    $(this).removeAttr('disabled');
                  });
                  $('#txtReelThInv').removeAttr('disabled');
                }
              });
              $('#btnAjoutReelThInv').click(function(){
                if ($('#txtReelThInv').val() != '') {
                  // Ajout d'un champ manuellement (sans le sélectionner dans la liste d'autocomplétion)
                  iNbReelThInv++;
                  vAjouteChamp('listeReelThInv', 'txtListeReelThInv', iNbReelThInv, $('#txtReelThInv'), 0);
                  // On vide le champ txtReelThInv
                  $('#txtReelThInv').val('');
                } else {
                  document.getElementById('bodyMessage').firstChild.nodeValue = 'Vous devez saisir un texte avant de l\'ajouter';
                  $('#Message').modal('show');
                }
                return false;
              });
              $(function () {
                $("#txtReelThInv").catcomplete({
                  source: function (request, response){
                    if ($('#imgInfReelThInvAutocomp').hasClass("glyphicon-warning-sign")) {
                      $('#imgInfReelThInvAutocomp').toggleClass("glyphicon-warning-sign");
                    }
                    if ($('#imgInfReelThInvAutocomp').hasClass("glyphicon-pencil")) {
                      $('#imgInfReelThInvAutocomp').toggleClass("glyphicon-pencil");
                    }
                    if (!$('#imgInfReelThInvAutocomp').hasClass("glyphicon-hourglass")) {
                      $('#imgInfReelThInvAutocomp').toggleClass("glyphicon-hourglass");
                    }
                    objData = { iCmd: 12, strReelThInv: request.term, maxLignes: 10 };
                    $.ajax({
                      url: "./ajax-recherche.php",
                      dataType: "json",
                      data: objData,
                      type: 'POST',
                      success: function (data) {
                        // if (data.size() == 0) {
                          // $('#imgInfReelThInvAutocomp').toggleClass("glyphicon-warning-sign");
                        // } else {
                          response($.map(data, function (item) {
                            return {
                              category: item.category,
                              label: item.reference,
                              value: item.reference
                            }
                          }
                        // }
                        ));
                        if ($('#imgInfReelThInvAutocomp').hasClass("glyphicon-hourglass")) {
                          $('#imgInfReelThInvAutocomp').toggleClass("glyphicon-hourglass");
                        }
                        if (!$('#imgInfReelThInvAutocomp').hasClass("glyphicon-pencil")) {
                          $('#imgInfReelThInvAutocomp').toggleClass("glyphicon-pencil");
                        }
                      },
                      error: function(data){
                        if ($('#imgInfReelThInvAutocomp').hasClass("glyphicon-hourglass")) {
                          $('#imgInfReelThInvAutocomp').toggleClass("glyphicon-hourglass");
                        }
                        if (!$('#imgInfReelThInvAutocomp').hasClass("glyphicon-warning-sign")) {
                          $('#imgInfReelThInvAutocomp').toggleClass("glyphicon-warning-sign");
                        }
                      }
                    });

                  },
                  select: function (event, ui) {
                    // Ajout de la valeur saisie dans la liste des liens
                    iNbReelThInv++;
                    vAjouteChamp('listeReelThInv', 'txtListeReelThInv', iNbReelThInv, ui, 0);
                    // $('#txtReelThInv').val('');
                  },
                  minLength: 3,
                  delay: 400
                });
              });
              var iNbReelThInv = 0;
            </script>
          </div><!-- /col-md- -->
        </div><!-- /form-group /col-lg -->

        <div class="form-group">
          <label class="col-md-2 control-label">Personnalité scientifique</label>
          <div class="col-md-10">
            <div class="input-group">
              <span class="input-group-addon"><input id="chkReelPersSciTous" name="chkReelPersSciTous" type="checkbox" value="tous" aria-label="..."> Toutes</span>
              <span id="btnAjoutReelPersSci" class="input-group-addon btn-success" role="button"><span class="glyphicon glyphicon-plus"></span></span>
              <span class="input-group-addon"><span id="imgInfReelPersSciAutocomp" class="glyphicon glyphicon-pencil"></span></span>
              <input type="text" class="form-control ui-autocomplete-input" id="txtReelPersSci" name="txtReelPersSci" placeholder="Sélectionnez une personnalité scientifique" autocomplete="off">
            </div><!-- /input-group -->
            <div id="listeReelPersSci">
              <div class="row"><div class="col-md-12">
                <input type="text" class="form-control" id="txtListeReelPersSci-0" name="txtListeReelPersSci-0" value="Aucune saisie" readonly="">
              </div></div><!-- /col-md-12 /row-->
            </div>

            <script type="text/javascript">
              $('#chkReelPersSciTous').click(function(){
                if (document.getElementById('chkReelPersSciTous').checked === true) {
                  // On a coché Tous
                  alert('En sélectionnant cette case aucune saisie des "Personnalité scientifique" ne sera prise en compte dans la requête');
                  $('#listeReelPersSci :input').each(function(){
                    $(this).attr('disabled', '');
                  });
                  $('#txtReelPersSci').attr('disabled', '');
                } else {
                  $('#listeReelPersSci :input').each(function(){
                    $(this).removeAttr('disabled');
                  });
                  $('#txtReelPersSci').removeAttr('disabled');
                }
              });
              $('#btnAjoutReelPersSci').click(function(){
                if ($('#txtReelPersSci').val() != '') {
                  // Ajout d'un champ manuellement (sans le sélectionner dans la liste d'autocomplétion)
                  iNbReelPersSci++;
                  vAjouteChamp('listeReelPersSci', 'txtListeReelPersSci', iNbReelPersSci, $('#txtReelPersSci'), 0);
                  // On vide le champ txtReelPersSci
                  $('#txtReelPersSci').val('');
                } else {
                  document.getElementById('bodyMessage').firstChild.nodeValue = 'Vous devez saisir un texte avant de l\'ajouter';
                  $('#Message').modal('show');
                }
                return false;
              });
              $(function () {
                // $("#txtReelPersSci").autocomplete
                $("#txtReelPersSci").catcomplete({
                  source: function (request, response){
                    if ($('#imgInfReelPersSciAutocomp').hasClass("glyphicon-warning-sign")) {
                      $('#imgInfReelPersSciAutocomp').toggleClass("glyphicon-warning-sign");
                    }
                    if ($('#imgInfReelPersSciAutocomp').hasClass("glyphicon-pencil")) {
                      $('#imgInfReelPersSciAutocomp').toggleClass("glyphicon-pencil");
                    }
                    if (!$('#imgInfReelPersSciAutocomp').hasClass("glyphicon-hourglass")) {
                      $('#imgInfReelPersSciAutocomp').toggleClass("glyphicon-hourglass");
                    }
                    objData = { iCmd: 19, strReelPersSci: request.term, maxLignes: 10 };
                    $.ajax({
                      url: "./ajax-recherche.php",
                      dataType: "json",
                      data: objData,
                      type: 'POST',
                      success: function (data) {
                        // if (data.size() == 0) {
                          // $('#imgInfReelPersSciAutocomp').toggleClass("glyphicon-warning-sign");
                        // } else {
                          response($.map(data, function (item) {
                            return {
                              category: item.category,
                              label: item.reference,
                              value: item.reference
                            }
                          }
                        // }
                        ));
                        if ($('#imgInfReelPersSciAutocomp').hasClass("glyphicon-hourglass")) {
                          $('#imgInfReelPersSciAutocomp').toggleClass("glyphicon-hourglass");
                        }
                        if (!$('#imgInfReelPersSciAutocomp').hasClass("glyphicon-pencil")) {
                          $('#imgInfReelPersSciAutocomp').toggleClass("glyphicon-pencil");
                        }
                      },
                      error: function(data){
                        if ($('#imgInfReelPersSciAutocomp').hasClass("glyphicon-hourglass")) {
                          $('#imgInfReelPersSciAutocomp').toggleClass("glyphicon-hourglass");
                        }
                        if (!$('#imgInfReelPersSciAutocomp').hasClass("glyphicon-warning-sign")) {
                          $('#imgInfReelPersSciAutocomp').toggleClass("glyphicon-warning-sign");
                        }
                      }
                    });

                  },
                  select: function (event, ui) {
                    // Ajout de la valeur saisie dans la liste des liens
                    iNbReelPersSci++;
                    vAjouteChamp('listeReelPersSci', 'txtListeReelPersSci', iNbReelPersSci, ui, 0);
                    // $('#txtReelPersSci').val('');
                  },
                  minLength: 3,
                  delay: 400
                });
              });
              var iNbReelPersSci = 0;
            </script>
          </div><!-- /col-md- -->
        </div><!-- /form-group /col-lg -->

        <div class="form-group">
          <label class="col-md-2 control-label">Discipline</label>
          <div class="col-md-10">
            <div class="input-group">
                            <span class="input-group-addon">
                <div class="checkbox">
                  <label>
              <input type="checkbox" id="chkReelDiscipline1" name="chkReelDiscipline[]" value="VIE|Sciences de la vie (inclut biologie, botanique, zoologie) "> Sciences de la vie (inclut biologie, botanique, zoologie)                   </label>
                </div>
              </span><!-- /input-group-addon -->
                            <span class="input-group-addon">
                <div class="checkbox">
                  <label>
              <input type="checkbox" id="chkReelDiscipline2" name="chkReelDiscipline[]" value="MED|Sciences médicales"> Sciences médicales                  </label>
                </div>
              </span><!-- /input-group-addon -->
                          </div><!-- /input-group -->
            <div class="input-group">
                            <span class="input-group-addon">
                <div class="checkbox">
                  <label>
              <input type="checkbox" id="chkReelDiscipline3" name="chkReelDiscipline[]" value="TER|Sciences  de la terre et de l’espace  (astronomie, géologie, géographie)"> Sciences  de la terre et de l’espace  (astronomie, géologie, géographie)                  </label>
                </div>
              </span><!-- /input-group-addon -->
                          </div><!-- /input-group -->
            <div class="input-group">
                            <span class="input-group-addon">
                <div class="checkbox">
                  <label>
              <input type="checkbox" id="chkReelDiscipline4" name="chkReelDiscipline[]" value="PCM|Physique, chimie et mathématiques"> Physique, chimie et mathématiques                  </label>
                </div>
              </span><!-- /input-group-addon -->
                            <span class="input-group-addon">
                <div class="checkbox">
                  <label>
              <input type="checkbox" id="chkReelDiscipline5" name="chkReelDiscipline[]" value="ING|Ingénierie et technique"> Ingénierie et technique                  </label>
                </div>
              </span><!-- /input-group-addon -->
                            <span class="input-group-addon">
                <div class="checkbox">
                  <label>
              <input type="checkbox" id="chkReelDiscipline6" name="chkReelDiscipline[]" value="AUT|Autre"> Autre                  </label>
                </div>
              </span><!-- /input-group-addon -->
                          </div><!-- /input-group -->
          </div><!-- /col-md- -->
        </div><!-- /form-group -->

        <div class="form-group">
          <label class="col-md-2 control-label">Modalité</label>
          <div class="col-md-10">
            <div class="input-group">
                            <span class="input-group-addon">
                <div class="checkbox">
                  <label>
              <input type="checkbox" id="chkReelModal1" name="chkReelModal[]" value="SER|Sérieux"> Sérieux                  </label>
                </div>
              </span><!-- /input-group-addon -->
                            <span class="input-group-addon">
                <div class="checkbox">
                  <label>
              <input type="checkbox" id="chkReelModal2" name="chkReelModal[]" value="SAT|Satire"> Satire                  </label>
                </div>
              </span><!-- /input-group-addon -->
                            <span class="input-group-addon">
                <div class="checkbox">
                  <label>
              <input type="checkbox" id="chkReelModal3" name="chkReelModal[]" value="HOM|Hommage"> Hommage                  </label>
                </div>
              </span><!-- /input-group-addon -->
                            <span class="input-group-addon">
                <div class="checkbox">
                  <label>
              <input type="checkbox" id="chkReelModal4" name="chkReelModal[]" value="REF|Réfutation"> Réfutation                  </label>
                </div>
              </span><!-- /input-group-addon -->
                          </div><!-- /input-group -->
          </div><!-- /col-md- -->
        </div><!-- /form-group -->

        <hr>
        <div class="row"><div class="col-md-4">
          <blockquote>Références à des éléments scientifiques imaginaires</blockquote>
        </div></div><!-- /col-md-4 /row -->

        <div class="form-group">
          <label class="col-md-2 control-label">Termes utilisés dans la description</label>
          <div class="col-md-10">
            <div class="input-group">
                            <span class="input-group-addon"><input id="chkImaginDescTous" name="chkImaginDescTous" type="checkbox" value="tous" aria-label="..."> Tous</span>
              <span id="btnAjoutImaginDesc" class="input-group-addon btn-success" role="button"><span class="glyphicon glyphicon-plus"></span></span>
              <span class="input-group-addon"><span id="imgInfImaginDescAutocomp" class="glyphicon glyphicon-pencil"></span></span>
              <input type="text" class="form-control ui-autocomplete-input" id="txtImaginDesc" name="txtImaginDesc" placeholder="Sélectionnez un terme dans les descriptions" autocomplete="off">
            </div><!-- /input-group -->
            <div id="listeImaginDesc">
              <div class="row"><div class="col-md-12">
                <input type="text" class="form-control" id="txtListeImaginDesc-0" name="txtListeImaginDesc-0" value="Aucune saisie" readonly="">
              </div></div><!-- /col-md-12 /row-->
            </div>

            <script type="text/javascript">
              $('#chkImaginDescTous').click(function(){
                if (document.getElementById('chkImaginDescTous').checked === true) {
                  // On a coché Tous
                  alert('En sélectionnant cette case aucune saisie des "Références (...)" ne sera prise en compte dans la requête');
                  $('#listeImaginDesc :input').each(function(){
                    $(this).attr('disabled', '');
                  });
                  $('#txtImaginDesc').attr('disabled', '');
                } else {
                  $('#listeImaginDesc :input').each(function(){
                    $(this).removeAttr('disabled');
                  });
                  $('#txtImaginDesc').removeAttr('disabled');
                }
              });
              $('#btnAjoutImaginDesc').click(function(){
                if ($('#txtImaginDesc').val() != '') {
                  // Ajout d'un champ manuellement (sans le sélectionner dans la liste d'autocomplétion)
                  iNbImaginDesc++;
                  vAjouteChamp('listeImaginDesc', 'txtListeImaginDesc', iNbImaginDesc, $('#txtImaginDesc'), 0);
                  // On vide le champ txtImaginDesc
                  $('#txtImaginDesc').val('');
                } else {
                  document.getElementById('bodyMessage').firstChild.nodeValue = 'Vous devez saisir un texte avant de l\'ajouter';
                  $('#Message').modal('show');
                }
                return false;
              });
              $(function () {
                // $("#txtImaginDesc").catcomplete
                $("#txtImaginDesc").autocomplete({
                  source: function (request, response){
                    if ($('#imgInfImaginDescAutocomp').hasClass("glyphicon-warning-sign")) {
                      $('#imgInfImaginDescAutocomp').toggleClass("glyphicon-warning-sign");
                    }
                    if ($('#imgInfImaginDescAutocomp').hasClass("glyphicon-pencil")) {
                      $('#imgInfImaginDescAutocomp').toggleClass("glyphicon-pencil");
                    }
                    if (!$('#imgInfImaginDescAutocomp').hasClass("glyphicon-hourglass")) {
                      $('#imgInfImaginDescAutocomp').toggleClass("glyphicon-hourglass");
                    }
                    objData = { iCmd: 13, strImaginDesc: request.term, maxLignes: 10 };
                    $.ajax({
                      url: "./ajax-recherche.php",
                      dataType: "json",
                      data: objData,
                      type: 'POST',
                      success: function (data) {
                        // if (data.size() == 0) {
                          // $('#imgInfImaginDescAutocomp').toggleClass("glyphicon-warning-sign");
                        // } else {
                          response($.map(data, function (item) {
                            return {
                              // category: item.category,
                              label: item.description,
                              value: item.description
                            }
                          }
                        // }
                        ));
                        if ($('#imgInfImaginDescAutocomp').hasClass("glyphicon-hourglass")) {
                          $('#imgInfImaginDescAutocomp').toggleClass("glyphicon-hourglass");
                        }
                        if (!$('#imgInfImaginDescAutocomp').hasClass("glyphicon-pencil")) {
                          $('#imgInfImaginDescAutocomp').toggleClass("glyphicon-pencil");
                        }
                      },
                      error: function(data){
                        if ($('#imgInfImaginDescAutocomp').hasClass("glyphicon-hourglass")) {
                          $('#imgInfImaginDescAutocomp').toggleClass("glyphicon-hourglass");
                        }
                        if (!$('#imgInfImaginDescAutocomp').hasClass("glyphicon-warning-sign")) {
                          $('#imgInfImaginDescAutocomp').toggleClass("glyphicon-warning-sign");
                        }
                      }
                    });

                  },
                  select: function (event, ui) {
                    // Ajout de la valeur saisie dans la liste des liens
                    iNbImaginDesc++;
                    vAjouteChamp('listeImaginDesc', 'txtListeImaginDesc', iNbImaginDesc, ui, 0);
                    // $('#txtImaginDesc').val('');
                  },
                  minLength: 3,
                  delay: 400
                });
              });
              var iNbImaginDesc = 0;
            </script>
          </div><!-- /col-md- -->
        </div><!-- /form-group /col-lg -->

        <div class="form-group">
          <label class="col-md-2 control-label">Domaine des inventions techniques</label>
          <div class="col-md-10">
            <div class="row"><div class="col-md-12"><div class="input-group">
              <span class="input-group-addon"><input id="chkImaginDomaineTous" name="chkImaginDomaineTous" type="checkbox" value="tous" aria-label="..."> Tous</span>
              <select id="selImaginDomaine" class="form-control" style="padding-top: 2px;padding-bottom: 2px; height:34px;">
              <option class="text-left" value="null" selected="">--- Sélectionnez un élément de la liste---</option><option value="258">Armes</option>
<option value="259">Communications, image/son</option>
<option value="250">Corps humain, pouvoirs psychiques, vie/mort</option>
<option value="254">Espace</option>
<option value="251">Formes de vie inconnue</option>
<option value="252">Modifications de la nature</option>
<option value="256">Sources d'énergie</option>
<option value="253">Temps</option>
<option value="260">Théories scientifiques</option>
<option value="257">Transports</option>
<option value="255">Vie quotidienne</option>
<option value="268">Autre</option>
              </select><!-- /form-control -->
              <script>
                $('#chkImaginDomaineTous').click(function(){
                  if (document.getElementById('chkImaginDomaineTous').checked === true) {
                    // On a coché Tous
                    alert('En sélectionnant cette case aucune saisie des "Domaine des inventions techniques" ne sera prise en compte dans la requête');
                    $('#listeImaginDomaine :input').each(function(){
                      $(this).attr('disabled', '');
                    });
                    $('#selImaginDomaine').attr('disabled', '');
                  } else {
                    $('#listeImaginDomaine :input').each(function(){
                      $(this).removeAttr('disabled');
                    });
                    $('#selImaginDomaine').removeAttr('disabled');
                  }
                });
                $('#selImaginDomaine').change(function(){
                  iNbImaginDomaine++;
                  vAjouteChamp('listeImaginDomaine', 'txtListeImaginDomaine', iNbImaginDomaine, this, 1);
                  this.selectedIndex = 0;
                });
                var iNbImaginDomaine = 0;
              </script>
            </div></div></div><!-- /input-group /col-md-12 /row-->
            <div id="listeImaginDomaine">
              <div class="row"><div class="col-md-12">
                <input type="text" class="form-control" id="txtListeImaginDomaine-0" name="txtListeImaginDomaine-0" value="Aucune saisie" readonly="">
              </div></div><!-- /col-md-12 /row-->
            </div>
          </div><!-- /col-md- -->
        </div><!-- /form-group /col-lg -->

        <div class="form-group">
          <label class="col-md-2 control-label">Voyage(s)</label>
          <div class="col-md-10">
            <div class="row"><div class="col-md-12"><div class="input-group">
              <span class="input-group-addon"><input id="chkImaginVoyageTous" name="chkImaginVoyageTous" type="checkbox" value="tous" aria-label="..."> Tous</span>
              <select id="selImaginVoyage" class="form-control" style="padding-top: 2px;padding-bottom: 2px; height:34px;">
              <option class="text-left" value="null" selected="">--- Sélectionnez un élément de la liste---</option><option value="81">Sur la Terre</option>
<option value="82">À l'intérieur de la Terre</option>
<option value="83">Dans l'espace</option>
<option value="84">Sur une autre planète</option>
<option value="85">Rêvé (par le personnage)</option>
<option value="86">Temporel</option>
<option value="87">À l’intérieur du corps humain</option>
<option value="223">Mondes parallèles et autres dimensions</option>
<option value="88">Aucun</option>
              </select><!-- /form-control -->
              <script>
                $('#chkImaginVoyageTous').click(function(){
                  if (document.getElementById('chkImaginVoyageTous').checked === true) {
                    // On a coché Tous
                    alert('En sélectionnant cette case aucune saisie des "Voyage" ne sera prise en compte dans la requête');
                    $('#listeImaginVoyage :input').each(function(){
                      $(this).attr('disabled', '');
                    });
                    $('#selImaginVoyage').attr('disabled', '');
                  } else {
                    $('#listeImaginVoyage :input').each(function(){
                      $(this).removeAttr('disabled');
                    });
                    $('#selImaginVoyage').removeAttr('disabled');
                  }
                });
                $('#selImaginVoyage').change(function(){
                  iNbImaginVoyage++;
                  vAjouteChamp('listeImaginVoyage', 'txtListeImaginVoyage', iNbImaginVoyage, this, 1);
                  this.selectedIndex = 0;
                });
                var iNbImaginVoyage = 0;
              </script>
            </div></div></div><!-- /input-group /col-md-12 /row-->
            <div id="listeImaginVoyage">
              <div class="row"><div class="col-md-12">
                <input type="text" class="form-control" id="txtListeImaginVoyage-0" name="txtListeImaginVoyage-0" value="Aucune saisie" readonly="">
              </div></div><!-- /col-md-12 /row-->
            </div>
          </div><!-- /col-md- -->
        </div><!-- /form-group /col-lg -->

        <hr>
        <div class="row"><div class="col-md-4">
          <blockquote>Représentation de la société</blockquote>
        </div></div><!-- /col-md-4 /row -->

        <div class="form-group">
          <label class="col-md-2 control-label">Représentation d'une société imaginaire</label>
          <div class="col-md-10">
            <div class="input-group">
              <span class="input-group-addon">
                <div class="checkbox">
                  <label>
                    <input type="checkbox" id="chkImaginSoci1" name="chkImaginSoci[]" value="P|Présente"> Présente
                  </label>
                </div>
              </span><!-- /input-group-addon -->
              <span class="input-group-addon">
                <div class="checkbox">
                  <label>
                    <input type="checkbox" id="chkImaginSoci2" name="chkImaginSoci[]" value="A|Absente"> Absente
                  </label>
                </div>
              </span><!-- /input-group-addon -->
              <span class="input-group-addon">
                <div class="checkbox">
                  <label>
                    <input type="checkbox" id="chkImaginSoci3" name="chkImaginSoci[]" value="M|Plusieurs"> Plusieurs
                  </label>
                </div>
              </span><!-- /input-group-addon -->
            </div><!-- /input-group -->
          </div><!-- /col-md- -->
        </div><!-- /form-group -->

        <div class="form-group">
          <label class="col-md-2 control-label">Degré de technologie</label>
          <div class="col-md-10">
            <div class="input-group">
                            <span class="input-group-addon">
                <div class="checkbox">
                  <label>
              <input type="checkbox" id="chkImaginTechno1" name="chkImaginTechno[]" value="F|Fort"> Fort                  </label>
                </div>
              </span><!-- /input-group-addon -->
                            <span class="input-group-addon">
                <div class="checkbox">
                  <label>
              <input type="checkbox" id="chkImaginTechno2" name="chkImaginTechno[]" value="N|Neutre"> Neutre                  </label>
                </div>
              </span><!-- /input-group-addon -->
                            <span class="input-group-addon">
                <div class="checkbox">
                  <label>
              <input type="checkbox" id="chkImaginTechno3" name="chkImaginTechno[]" value="B|Faible"> Faible                  </label>
                </div>
              </span><!-- /input-group-addon -->
                            <span class="input-group-addon">
                <div class="checkbox">
                  <label>
              <input type="checkbox" id="chkImaginTechno4" name="chkImaginTechno[]" value="I|Indéterminé"> Indéterminé                  </label>
                </div>
              </span><!-- /input-group-addon -->
                          </div><!-- /input-group -->
          </div><!-- /col-md- -->
        </div><!-- /form-group -->



        <div class="form-group">
          <label class="col-md-2 control-label">Valeur</label>
          <div class="col-md-10">
            <div class="input-group">
                            <span class="input-group-addon">
                <div class="checkbox">
                  <label>
              <input type="checkbox" id="chkImaginValeur1" name="chkImaginValeur[]" value="P|Positive"> Positive                  </label>
                </div>
              </span><!-- /input-group-addon -->
                            <span class="input-group-addon">
                <div class="checkbox">
                  <label>
              <input type="checkbox" id="chkImaginValeur2" name="chkImaginValeur[]" value="N|Négative"> Négative                  </label>
                </div>
              </span><!-- /input-group-addon -->
                            <span class="input-group-addon">
                <div class="checkbox">
                  <label>
              <input type="checkbox" id="chkImaginValeur3" name="chkImaginValeur[]" value="T|Neutre"> Neutre                  </label>
                </div>
              </span><!-- /input-group-addon -->
                            <span class="input-group-addon">
                <div class="checkbox">
                  <label>
              <input type="checkbox" id="chkImaginValeur4" name="chkImaginValeur[]" value="A|Ambivalente"> Ambivalente                  </label>
                </div>
              </span><!-- /input-group-addon -->
                            <span class="input-group-addon">
                <div class="checkbox">
                  <label>
              <input type="checkbox" id="chkImaginValeur5" name="chkImaginValeur[]" value="I|Indéterminée"> Indéterminée                  </label>
                </div>
              </span><!-- /input-group-addon -->
                          </div><!-- /input-group -->
          </div><!-- /col-md- -->
        </div><!-- /form-group -->

        <div class="form-group">
          <label class="col-md-2 control-label">Traits spécifiques de la société imaginaire</label>
          <div class="col-md-10">
            <div class="row"><div class="col-md-12"><div class="input-group">
              <span class="input-group-addon"><input id="chkSocImaginTraitsSpecTous" name="chkSocImaginTraitsSpecTous" type="checkbox" value="tous" aria-label="..."> Tous</span>
              <select id="selSocImaginTraitsSpec" class="form-control" style="padding-top: 2px;padding-bottom: 2px; height:34px;">
              <option class="text-left" value="null" selected="">--- Sélectionnez un élément de la liste---</option><option value="39">Anarchisme</option>
<option value="37">Aristocratie</option>
<option value="38">Démocratie</option>
<option value="34">Dictature</option>
<option value="35">Monarchie</option>
<option value="36">Ploutocratie</option>
<option value="33">Politique</option>
<option value="205">République</option>
<option value="204">Révolution</option>
<option value="43">Capitalisme</option>
<option value="40">Économie</option>
<option value="42">Marxisme</option>
<option value="41">Socialisme</option>
<option value="245">Géopolitique</option>
<option value="44">Guerre</option>
<option value="45">Religion</option>
<option value="50">Positivisme</option>
<option value="53">Agriculture</option>
<option value="54">Commerce</option>
<option value="52">Écologie</option>
<option value="55">Justice</option>
<option value="186">Presse</option>
<option value="213">habitat</option>
<option value="56">Industrie</option>
<option value="175">Langues</option>
<option value="58">Moyens de communication</option>
<option value="57">Transport</option>
<option value="59">Urbanisme</option>
<option value="63">Musique</option>
<option value="62">Peinture</option>
<option value="60">Poésie/littérature</option>
<option value="61">Sculpture</option>
<option value="68">Alimentation</option>
<option value="192">Climat</option>
<option value="64">Éducation</option>
<option value="67">Famille</option>
<option value="69">Habillement</option>
<option value="72">Loisirs</option>
<option value="66">Mariage</option>
<option value="70">Mort</option>
<option value="71">Santé</option>
<option value="65">Sexualité</option>
<option value="75">Classes sociales</option>
<option value="74">Colonialisme</option>
<option value="78">Handicap</option>
<option value="73">Place des femmes</option>
<option value="76">Races</option>
<option value="77">Vieillesse</option>
<option value="188">Animaux</option>
<option value="248">Science</option>
              </select><!-- /form-control -->
              <script>
                $('#chkSocImaginTraitsSpecTous').click(function(){
                  if (document.getElementById('chkSocImaginTraitsSpecTous').checked === true) {
                    // On a coché Tous
                    alert('En sélectionnant cette case aucune saisie des "Traits spécifiques de la société imaginaire" ne sera prise en compte dans la requête');
                    $('#listeSocImaginTraitsSpec :input').each(function(){
                      $(this).attr('disabled', '');
                    });
                    $('#selSocImaginTraitsSpec').attr('disabled', '');
                  } else {
                    $('#listeSocImaginTraitsSpec :input').each(function(){
                      $(this).removeAttr('disabled');
                    });
                    $('#selSocImaginTraitsSpec').removeAttr('disabled');
                  }
                });
                $('#selSocImaginTraitsSpec').change(function(){
                  iNbSocImaginTraitsSpec++;
                  vAjouteChamp('listeSocImaginTraitsSpec', 'txtListeSocImaginTraitsSpec', iNbSocImaginTraitsSpec, this, 1);
                  this.selectedIndex = 0;
                });
                var iNbSocImaginTraitsSpec = 0;
              </script>
            </div></div></div><!-- /input-group /col-md-12 /row-->
            <div id="listeSocImaginTraitsSpec">
              <div class="row"><div class="col-md-12">
                <input type="text" class="form-control" id="txtListeSocImaginTraitsSpec-0" name="txtListeSocImaginTraitsSpec-0" value="Aucune saisie" readonly="">
              </div></div><!-- /col-md-12 /row-->
            </div>
          </div><!-- /col-md- -->
        </div><!-- /form-group /col-lg -->

      </div></div><!-- /panel-body /panel-collapse -->
    </div><!-- /panel Sciences et sociétés -->

  </div></div><!-- /idColpsRechAvance /panel-body -->

  <div class="panel-footer">
    <div class="btn-group" role="group">
            <button id="btnRechAvanceReset" class="btn btn-default" type="reset">Réinitialiser</button>
            <button id="btnRechAvanceSubmit" class="btn btn-danger">Choisir le graphique le plus pertinent</button>

            <!-- Button trigger modal -->
            <button type="button" class="btn btn-default" data-toggle="modal" data-target="#guideModal">
              <span class="glyphicon glyphicon-question-sign"></span>

            </button>



    </div>
    <!-- Modal -->
    <div class="modal fade" id="guideModal" tabindex="-1" role="dialog" aria-labelledby="guideModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title" id="guideModalLabel">Guide d'utilisation</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <div>Pour générer un graphique il faut d'abord remplir les champs de recherches souhaités
            puis choisir le graphique souhaité en cliquant dessus.</div>
            <img title="La barre du menu" class="guide" src="../images/graphique/exemple_barre_plot.ly.png"/>

            <div>
            Tous les graphiques à l'exception du graphe réseaux, dispose d'une barre visible en haut à droite du graphique généré offrant plusieurs fonctionnalité à l'utilisateur :</br>
            <ul>
                <li>Sauvegarder l'image en .png</li>
                <li>Sauvegarder l'image en .svg</li>
                <li>Sélection rectangulaire</li>
                <li>Sélection lasso</li>
                <li>Activer/désactiver les pics</li>
                <li>Données les plus proches en survol</li>
                <li>Comparaison entre données en survol</li>
            </ul>
            Si il y a plusieurs données d'affichées sur un graphique, on peut également cliquer sur les cases colorées symbolisant la donnée pour la masquer. 

          </div>
            
            

          <div>
            Pour le graphe réseaux, Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
          </div>

          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-danger btn-dark-red" data-dismiss="modal">Fermer</button>
          </div>
        </div>
      </div>
    </div>
  </div>

<!-- rajouter des modaux si pas bon -->

</div><!-- /panel -->

  <script>
    $('#formRechAvance').on('submit', function() {
      return false;
    });
    $('#btnRechAvanceSubmit').on('click', function () {
      $('#idColpsRechAvance').collapse('hide');
      $('#Patience').modal('show');
      // Simulation de 5 secondes d'attente
      // window.setTimeout("$('#btnRechAvanceSubmit').button('reset');$('#Patience').modal('hide');$('#idColpsRechAvance').collapse('show');",5000);
      strTriChamp = '';
      strTriOrdre = '';
      // maxLignes = 20;
      maxLignes = 100000;
      vChargeRecherche(21);
      return false;
    })
    $('#Patience').on('hide.bs.modal', function() {
      $('#btnRechAvanceSubmit').button('reset');
    });
    $('#btnRechAvanceReset').on('click', function () {
      // On supprime tous les disabled du formulaire (pour l'instant, limité aux textes, select et checkbox)
      // PS: trouver éventuellement un moyen de faire ça dans une commande JQuery ;)
      $('#formRechAvance input:disabled[type="text"]').not('[id$="-0"]').each(function() { $(this).removeAttr('disabled'); });
      $('#formRechAvance input:disabled[type="checkbox"]').each(function() { $(this).removeAttr('disabled'); });
      $('#formRechAvance select:disabled').each(function() { $(this).removeAttr('disabled'); });
      // Suppression des div class="input-group" contenant les txtListe* (qui ne le sont pas avec un reset javascript du formulaire)
      // Récupération de la base de l'identifiant
      var OExpReguliere = /(txtListe.*)-\d*/
      $('#formRechAvance input[type="text"][id^="txtListe"]').not('[id$="-0"]').each(function() {
        // Sauvegarde de l'id pour ajout si besoin d'un élément vide
        OExpReguliere.exec($(this).attr('id'));
        var strId = RegExp.$1;
        if (!$("input[id^='"+strId+"-']").eq(1).is('input')) {
          // Il y n'y a plus qu'un élément dans la liste (celui qui sera supprimé) donc: création d'un élément pour indiqué "Aucune saisie")
          $(this).parent().parent().append('<div class="row"><div class="col-md-12"> <input type="text" class="form-control" id="'+strId+'-0" name="'+strId+'-0" value="Aucune saisie" readonly> </div></div>\n');
        }
        $(this).parent().remove();
      });
      // return false;
    });
  </script>

</form>

<div class="container-fluid" id="divRechercheResult">
</div><!-- /divRechercheResult -->


<script type="text/javascript">
  $('#Patience').modal('hide');
</script>

<!-- Pondération -->
<label id="information" data-toggle="tooltip" data-placement="bottom" title="Activer la pondération permet de générer des graphiques avec des données ajustées en fonction du nombre d'oeuvres au total sur la période et pas seulement celle représentée dans la base de donnée.">
<input id="ponderation" type="checkbox" name="ponderation" value="true" checked> <span id="underline">Activer la pondération ?</span></label>
<!-- Fin pondération -->

<!-- Sélection palette -->
<label class="on-right" id="information"><span data-toggle="tooltip" data-placement="bottom" title="Choisir le style des graphiques" id="underline">Palettes de couleur du graphique</span>
<select id="palette" name="palette">
<?php
include 'utils.php';
$obj = loadConfig('./config.json');
$nomPalettes = array_keys($obj["palette"]);
foreach ($nomPalettes as $nom):?>
  <option><?=$nom?></option>
<?php endforeach;?>
</select></label>
<!-- Fin sélection palette -->



<!-- Début espace graphique -->
<div id="graphique">

  <div id="choix-graphiques">
    <h2 id="titre" class="text-center">Choix du graphique à générer</h2>

    <div id="choix">

      <?php // à voir https://stackoverflow.com/questions/5164404/json-decode-to-array
      $allCharts = [
        // Name => [id, name of the file without the extention]
        "Diagramme à barres" => ["graphique-type1", "diagramme_a_barres"],
        "Circulaire" => ["graphique-type2", "circulaire"],
        "Lignes" => ["graphique-type3", "lignes"],
        "Radar" => ["graphique-type4", "radar"],
        "Nuage de mots" => ["graphique-type5", "nuage_de_mots"],
        "Réseau" => ["graphique-type6", "reseau"]//,
        //"Nuage de mots" => ["graphique-type6", "chart"]
      ];

      foreach($allCharts as $name => $chart):?>
        <div class="boite-graphique" id="<?=$chart[0]?>">
          <h4 id="titre-graphique"><?=$name?></h4>
          <img id="img-graphique" src="../images/graphique/<?=$chart[1]?>.svg"></img>
        </div>
      <?php endforeach; ?>
    </div>
  </div>

  <div id="display" style="display: none" class="alert alert-info alert-RechAvance">
    <strong>Information :</strong> Au vue du nombre d'oeuvres comprises dans le graphique généré, il serait peut-être plus pertinent d'effectuer une <a href="../?bRechercheAvancee=1" class="font-weight-bold">recherche avancée</a>.
  </div>

  <script src="../js/graphique.js"></script>

  <a name="espace-graphique"></a>
  <div id="generation-graphique">

  </div>
</div>


<!-- Fin espace graphique -->

    <div class="bordure_bottom"></div>
    <br>
  </div>
</div>
<!--Fin du Contenu Scrollspy -->
</div>
<!-- FIN CONTENU DE LA FICHE -->

                </div>
                <!-- FIN DIV PRINCIPALE -->
                                <!-- PIED DE PAGE -->
                <div class="footer col-sm-12">
                    <div class="menu_footer offset-sm-2 col-sm-9">
                        <!--<a class="nav-link" href="#">Accueil</a>
                        <a class="nav-link" href="#">Le récit d'anticipation</a>
                        <a class="nav-link" href="#">En graphique</a>-->
                        <a class="nav-link" href="https://anticipation-dev.huma-num.fr/?bRechercheAvancee=1#">L'ANR Anticipation</a>
                        <a class="nav-link" href="https://anticipation-dev.huma-num.fr/?bRechercheAvancee=1#">Principe de sélection des oeuvres</a>
                        <a class="nav-link" href="https://anticipation-dev.huma-num.fr/?bRechercheAvancee=1#">Les contributeurs</a>
                        <a class="nav-link" href="https://anticipation-dev.huma-num.fr/?bRechercheAvancee=1#">Signaler une erreur</a>
                        <a class="nav-link" href="https://anticipation-dev.huma-num.fr/?bRechercheAvancee=1#">Mentions légales</a>
                    </div>
                </div>
                <!-- FIN PIED DE PAGE -->
                            </div>
            <!-- FIN CONTENU DE LA PAGE -->
        </div>
        <!-- FIN WRAPPER -->
        <a id="back-to-top" href="https://anticipation-dev.huma-num.fr/?bRechercheAvancee=1#" class="btn btn-danger btn-lg back-to-top" role="button" title="" data-toggle="tooltip" data-placement="left" data-original-title="Click to return on the top page" style="display: inline;"><span class="glyphicon glyphicon-chevron-up"></span></a>


                <!--  Menu Burger -->
        <script type="text/javascript">
            $(document).ready(function () {
                $("#sidebar").mCustomScrollbar({
                    theme: "minimal"
                });

                $('#dismiss, .overlay').on('click', function () {
                    $('#sidebar').removeClass('active');
                    $('.overlay').fadeOut();
                });

                $('#sidebarCollapse').on('click', function () {
                    $('#sidebar').addClass('active');
                    $('.overlay').fadeIn();
                    $('.collapse.in').toggleClass('in');
                    $('a[aria-expanded=true]').attr('aria-expanded', 'false');
                });
            });
        </script>
        <!--  Couper les citations trop longues -->
        <script type="text/javascript">
        jQuery(function(){
            var minimized_elements = $('p.minimize');
            minimized_elements.each(function(){
                var t = $(this).text();
                if(t.length < 1000) return;
                $(this).html(
                    t.slice(0,1000)+'<span>... </span><a href="#" class="more">  Lire la suite</a>'+
                    '<span style="display:none;">'+ t.slice(1000,t.length)+' </br><a href="#" class="less" style="position: relative; z-index: 1000;">   Réduire</a></span>'
                );
            });
            $('a.more', minimized_elements).click(function(event){
                event.preventDefault();
                $(this).hide().prev().hide();
                $(this).next().show();
            });
            $('a.less', minimized_elements).click(function(event){
                event.preventDefault();
                $(this).parent().hide().prev().show().prev().show();
            });
            });
        </script>
        <!--  SCROLLBACK -->
        <script type="text/javascript">
            $(document).ready(function(){
                $(window).scroll(function () {
                        if ($(this).scrollTop() > 50) {
                            $('#back-to-top').fadeIn();
                        } else {
                            $('#back-to-top').fadeOut();
                        }
                    });
                    // scroll body to 0px on click
                    $('#back-to-top').click(function () {
                        // $('#back-to-top').tooltip('hide');
                        $('body,html').animate({
                            scrollTop: 0
                        }, 800);
                        return false;
                    });

                    // $('#back-to-top').tooltip('show');

            });
        </script>

<script type="text/javascript">
    $(function () {
        $('[data-toggle="tooltip"]').tooltip();
    })
    // Un peu de debuggage...

            strTypeRecherche = 'bRechercheAvancee=1';
        strRecherche = '';
    </script>





<ul id="ui-id-1" tabindex="0" class="ui-menu ui-widget ui-widget-content ui-autocomplete ui-front" style="display: none;"></ul><div role="status" aria-live="assertive" aria-relevant="additions" class="ui-helper-hidden-accessible"></div><ul id="ui-id-2" tabindex="0" class="ui-menu ui-widget ui-widget-content ui-autocomplete ui-front" style="display: none;"></ul><div role="status" aria-live="assertive" aria-relevant="additions" class="ui-helper-hidden-accessible"></div><ul id="ui-id-3" tabindex="0" class="ui-menu ui-widget ui-widget-content ui-autocomplete ui-front" style="display: none;"></ul><div role="status" aria-live="assertive" aria-relevant="additions" class="ui-helper-hidden-accessible"></div><ul id="ui-id-4" tabindex="0" class="ui-menu ui-widget ui-widget-content ui-autocomplete ui-front" style="display: none;"></ul><div role="status" aria-live="assertive" aria-relevant="additions" class="ui-helper-hidden-accessible"></div><ul id="ui-id-5" tabindex="0" class="ui-menu ui-widget ui-widget-content ui-autocomplete ui-front" style="display: none;"></ul><div role="status" aria-live="assertive" aria-relevant="additions" class="ui-helper-hidden-accessible"></div><ul id="ui-id-6" tabindex="0" class="ui-menu ui-widget ui-widget-content ui-autocomplete ui-front" style="display: none;"></ul><div role="status" aria-live="assertive" aria-relevant="additions" class="ui-helper-hidden-accessible"></div><ul id="ui-id-7" tabindex="0" class="ui-menu ui-widget ui-widget-content ui-autocomplete ui-front" style="display: none;"></ul><div role="status" aria-live="assertive" aria-relevant="additions" class="ui-helper-hidden-accessible"></div><ul id="ui-id-8" tabindex="0" class="ui-menu ui-widget ui-widget-content ui-autocomplete ui-front" style="display: none;"></ul><div role="status" aria-live="assertive" aria-relevant="additions" class="ui-helper-hidden-accessible"></div><ul id="ui-id-9" tabindex="0" class="ui-menu ui-widget ui-widget-content ui-autocomplete ui-front" style="display: none;"></ul><div role="status" aria-live="assertive" aria-relevant="additions" class="ui-helper-hidden-accessible"></div><ul id="ui-id-10" tabindex="0" class="ui-menu ui-widget ui-widget-content ui-autocomplete ui-front" style="display: none;"></ul><div role="status" aria-live="assertive" aria-relevant="additions" class="ui-helper-hidden-accessible"></div><ul id="ui-id-11" tabindex="0" class="ui-menu ui-widget ui-widget-content ui-autocomplete ui-front" style="display: none;"></ul><div role="status" aria-live="assertive" aria-relevant="additions" class="ui-helper-hidden-accessible"></div><ul id="ui-id-12" tabindex="0" class="ui-menu ui-widget ui-widget-content ui-autocomplete ui-front" style="display: none;"></ul><div role="status" aria-live="assertive" aria-relevant="additions" class="ui-helper-hidden-accessible"></div><ul id="ui-id-13" tabindex="0" class="ui-menu ui-widget ui-widget-content ui-autocomplete ui-front" style="display: none;"></ul><div role="status" aria-live="assertive" aria-relevant="additions" class="ui-helper-hidden-accessible"></div></body></html>
