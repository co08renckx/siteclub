<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Eilco - Responsable</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i" rel="stylesheet">
    
    <!-- Custom styles for this template -->
    <link href="css/business-casual.min.css" rel="stylesheet">
    <link rel="icon" type="image/png" href="img/logoo.png" />

    <style type="text/css">
      .row{width :900px ;}
      .col-xl-9{background-color: black; width: 300px; border-radius: 10px; padding-top: 10px; padding-bottom: 10px;}
      .cta-inner{width: 400px;}
      .col{margin-bottom: 220px;font-family:Raleway;margin-left: 300px;margin-top:-200px;}
       @media screen and (max-width: 900px){
        div[class=row]{width :100px ;}
        .col-xl-9{background-color: black; width: 150px; border-radius: 10px; padding-top: 10px; padding-bottom: 10px;}
        .cta-inner{width: 40px;}
        .col{margin-bottom: 20px;font-family:Raleway;margin-left:0px;margin-top:-0px;}
        div[class="row row-cols-1 row-cols-md-1"]{width: 350px;}
        .table{font-size: 10px;margin-left: -20px;}
        .card{width: 350px;}

       }
    </style>

  </head>

  <body>

    <h1 class="site-heading text-center text-white d-none d-lg-block">
    <span class="site-heading-upper text-primary mb-3">Vie associative </span>
    <span class="site-heading-lower">de l'EIL</span>
    </h1>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark py-lg-4" id="mainNav">
      <div class="container">
        <a class="navbar-brand text-uppercase text-expanded font-weight-bold d-lg-none" href="index.php">Eilco's Club</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav mx-auto">
            <li class="nav-item px-lg-4">
              <a class="nav-link text-uppercase text-expanded" href="index.php">Accueil
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item active px-lg-4">
              <a class="nav-link text-uppercase text-expanded" href="responsable.php">Mon espace</a>
            </li>
            <li class="nav-item px-lg-4">
              <a class="nav-link text-uppercase text-expanded" href="responsable_soutenance.php">Soutenance</a>
            </li>
            <li class="nav-item px-lg-4">
              <a class="nav-link text-uppercase text-expanded" href="calendrier.php">Calendrier</a>
            </li>
            <li class="nav-item  px-lg-4">
              <a class="nav-link text-uppercase text-expanded" href="deconnexion.php">Déconnexion</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
<?php
  session_start ();
  
  require'Club.php';
  require'type.php';
  require'specialite.php';
  require'promotion.php';
  require'Appartenance.php';
  require'Membre.php';
  require'Evenement_Classe.php';
?>
<section class="page-section">
  <div class="row" >
      <nav class="navbar-fixed-left" >
          <div class="col-xl-9 mx-auto" >
            <div class="cta-inner text-center rounded">
             <div class="row" >
              <div class="col-3 ">
                <div class="nav flex-column nav-pills " id="v-pills-tab" role="tablist" aria-orientation="vertical">
                  <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home"  style="font-weight: bold;font-family:Raleway" aria-selected="true">Clubs Non traités </a>
                  <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" style="font-weight: bold;font-family:Raleway" aria-selected="false">Clubs traités </a>
                  <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" style="font-weight: bold;font-family:Raleway" aria-selected="false">Evénements Non traités</a>
                  <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings"style="font-weight: bold;font-family:Raleway" aria-selected="false">Evénements traités</a>
                </div>
              </div>
            </div>
          </div>
         </div>
      </nav>
      <style type="text/css">b {color: #87CEFA;}</style>
      <div class="col-9" >
        <div class="tab-content" id="v-pills-tabContent">
          <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
             <div class="row row-cols-1 row-cols-md-1">
              <?php
                $club = new Club("",0,"","","",0,0,"","","","");
                $clubs = $club->FindClubUntreatedResponsable();
                $t = new Type(0,"");
                $s = new Specialite(0,"");
                $p = new Promotion(0,"");
                $a = new Appartenance(0,0,"");
                $me = new Membre("",0,0);
                $i = 0;
                foreach ($clubs as $c) {
                  $ty = $t->FindTypeByID($c['id_type']);
                  $sp = $s->FindSpecialiteByID($c['id_specialite']);
                  $pro = $p->FindPromotionByID($c['id_promotion']);
                  $membres = $a->FindAppartenanceByIDClub($c['id']);
               ?>
              <div class="col col-md-12 " >
                <div class="card border border-primary rounded"  style="width: 902px;margin-left: 250px">
                  <div class="card-body">
                    <h5 class="card-title" style="font-weight: bold;font-family:Raleway;color: #00BFFF;text-align: center;text-decoration: underline;"><?php echo $c['Nom']; ?></h5>
                    <p class="card-text" style="margin-bottom:-2px;"><?php echo "<b>Type : </b>".$ty['Type']; ?></p>
                    <p class="card-text" style="margin-bottom:-2px;"><?php echo "<b>Chef de projet : </b>".$c['chef_de_projet']; ?></p>
                    <p class="card-text" style="margin-bottom:-2px;"><?php echo "<b>Nom du Parrain ou marraine : </b>".$c['Nom_Parrain']; ?></p>
                    <p class="card-text"style="margin-bottom:-2px;"><?php echo "<b>Objectifs : </b>". $c['Objectif']; ?></p>
                    <p class="card-text" style="margin-bottom:-2px;"><?php echo "<b>Date de création : </b>".$c['Date_de_creation']; ?></p>
                    <p class="card-text"style="margin-bottom:-2px;"><?php echo "<b>Promotion : </b>".$pro['promotion']; ?></p>
                    <p class="card-text"style="margin-bottom:-2px;"><?php echo "<b>Spécialité : </b>".$sp['specialite']; ?></p>
                    <p class="card-text"style="margin-bottom:-2px;"><b>Les membres : </b></p>
                    <p class="card-text"style="margin-bottom:-2px;">
                       <table class="table" border="2" style="text-align: center; border-color: #87CEFA;">
                        <tr style="background-color: #87CEFA;"><th>Nom</th><th>Fonction</th><th>Promotion</th><th>Spécialité</th></tr>
                          <?php  foreach ($membres as $m) {
                            $mes = $me->FindMembreByID($m['id_membre']);
                            $pro1 = $p->FindPromotionByID($mes['id_promotion']);
                            $sp1 = $s->FindSpecialiteByID($mes['id_specialite']);
                          ?>
                        <tr><td><?php echo $mes['Nom']?></td><td><?php echo $m['fonctionmembre']?></td><td><?php echo $pro1['promotion']?></td><td><?php echo $sp1['specialite']?></td></tr>
                           <?php 
                              }
                           ?>
                      </table>
                    </p>
                    <p class="card-text" >
                        <div class="form-check form-check-inline">
                        <form action="treated.php" method="POST">
                        <input type="hidden" name="valider_club" value="<?php echo $c['id']; ?>">
                        <input type="hidden" name="validerr_club" value="<?php echo $c['Nom']; ?>">
                        <input class="btn btn-success " type="submit" id ="valider_club" name="v" value="Valider" ></form>
                      </div>
                      <div class="form-check form-check-inline" style="float: right;right: 0px" >
                        <input type="hidden" name="refuser_club" value="<?php echo $c['id']; ?>">
                        <input type="hidden" name="validerr_club" value="<?php echo $c['Nom']; ?>">
                        <input class="btn btn-danger " type="submit" id ="<?php echo "refuser_club".$i;?>" name="r" value="Refuser"  onclick="document.getElementById('<?php echo "Cible_club".$i;?>').style.visibility ='visible'; document.getElementById('<?php echo "refuser_club".$i;?>').style.visibility ='hidden'" style="visibility: visible;">
                        
                      </div>
                      <div class="form-check form-check-inline" style="float: right;right: 0px;visibility:hidden;"  id ="<?php echo "Cible_club".$i;?>">
                        <form action="treated.php" method="POST">
                        <input type="hidden" name="refuser_club" value="<?php echo $c['id']; ?>">
                        <input type="hidden" name="validerr_club" value="<?php echo $c['Nom']; ?>">
                        <input type="hidden" name="Email_club" value="<?php echo $c['Email']; ?>">
                        <textarea class="form-control" name="cause_club"  style="margin-bottom: 10px;"></textarea>
                        <input class="btn btn-danger " type="submit" id ="envoyer_club" name="envoyer_club"value="Envoyer"  >
                      </form>
                      </div>
                    </p>
                  </div>
                </div>
              </div>
              <?php $i++;
               }
              ?>
            </div>
          </div>
          <div class="tab-pane fade " id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
             <div class="row ">
              <?php
                $club = new Club("",0,"","","",0,0,"","","","");
                $clubs = $club->FindClubtreatedResponsable();
                $t = new Type(0,"");
                $s = new Specialite(0,"");
                $p = new Promotion(0,"");
                $a = new Appartenance(0,0,"");
                $me = new Membre("",0,0);
                foreach ($clubs as $c) {
                  $ty =$t->FindTypeByID($c['id_type']);
                  $sp = $s->FindSpecialiteByID($c['id_specialite']);
                  $pro = $p->FindPromotionByID($c['id_promotion']);
                  $membres = $a->FindAppartenanceByIDClub($c['id']);
               ?>
              <div class="col col-md-12 " >
                <div class="card border border-primary rounded"  style="width: 902px;margin-left: 250px">
                  <div class="card-body">
                    <h5 class="card-title h5" style="font-weight: bold;font-family:Raleway;color: #00BFFF;text-align: center;text-decoration: underline;"><?php echo $c['Nom']; ?></h5>
                    <p class="card-text" style="margin-bottom:-2px;"><?php echo "<b>Type : </b>".$ty['Type']; ?></p>
                    <p class="card-text" style="margin-bottom:-2px;"><?php echo "<b>Chef de projet : </b>".$c['chef_de_projet']; ?></p>
                    <p class="card-text" style="margin-bottom:-2px;"><?php echo "<b>Nom du Parrain ou marraine : </b>".$c['Nom_Parrain']; ?></p>
                    <p class="card-text"style="margin-bottom:-2px;"><?php echo "<b>Objectifs : </b>". $c['Objectif']; ?></p>
                    <p class="card-text" style="margin-bottom:-2px;"><?php echo "<b>Date de création : </b>".$c['Date_de_creation']; ?></p>
                    <p class="card-text"style="margin-bottom:-2px;"><?php echo "<b>Promotion : </b>".$pro['promotion']; ?></p>
                    <p class="card-text"style="margin-bottom:-2px;"><?php echo "<b>Spécialité : </b>".$sp['specialite']; ?></p>
                    <p class="card-text"style="margin-bottom:-2px;"><b>Les membres : </b></p>
                    <p class="card-text"style="margin-bottom:-2px;">
                       <table class="table" border="2" style="text-align: center; border-color: #87CEFA;">
                        <tr style="background-color: #87CEFA;"><th>Nom</th><th>Fonction</th><th>Promotion</th><th>Spécialité</th></tr>
                          <?php  
                            foreach ($membres as $m) {
                              $mes = $me->FindMembreByID($m['id_membre']);
                              $pro1 = $p->FindPromotionByID($mes['id_promotion']);
                              $sp1 = $s->FindSpecialiteByID($mes['id_specialite']);
                          ?>
                        <tr><td><?php echo $mes['Nom']?></td><td><?php echo $m['fonctionmembre']?></td><td><?php echo $pro1['promotion']?></td><td><?php echo $sp1['specialite']?></td></tr>
                          <?php 
                            }
                          ?>
                      </table>
                      <p class="card-text" >
                      <div class="form-check form-check-inline">
                        <form action="treated.php" method="POST">
                          <input type="hidden" name="supprimer_club" value="<?php echo $c['id']; ?>">
                        <input class="btn btn-danger " type="submit" id ="supprimer_club"  value="Supprimer">
                      </form>
                      </div>
                    </p>
                    </p>
                  </div>
                </div>
              </div>
              <?php 
               }
              ?>
            </div>
          </div>
          <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
             <div class="row row-cols-1 row-cols-md-1">
              <?php
                $event=new Evenement("","","",0,0,"","","","",0,"",0,0);
                $events = $event->FindEventUntreatedResponsable();
                $club = new Club("",0,"","","",0,0,"","","","");
                $i = 0;
                $t = new Type(0,"");
                $s = new Specialite(0,"");
                $p = new Promotion(0,"");
                $a = new Appartenance(0,0,"");
                $me = new Membre("",0,0);
                foreach ($events as $e) {
                  $clubs = $club->FindClub($e['id_club']);
                  foreach ($clubs as $c) {
                  $ty =$t->FindTypeByID($c['id_type']);
                  $sp = $s->FindSpecialiteByID($c['id_specialite']);
                  $pro = $p->FindPromotionByID($c['id_promotion']);
                  $club_Email = $c["Email"];
                  }
                  
                  $membres = $a->FindAppartenanceByIDClub($e['id_club']);
               ?>
              <div class="col col-md-auto" >
                <div class="card border border-primary rounded" style="width: auto;">
                  <div class="card-body" >
                    <h5 class="card-title" style="font-weight: bold;font-family:Raleway;color: #00BFFF;text-align: center;text-decoration: underline;"><?php echo $e['Nom']; ?></h5>
                    <p class="card-text" style="margin-bottom:-2px;"><?php echo "<b>Type : </b>".$e['Type_evenement']; ?></p>
                    <p class="card-text" style="margin-bottom:-2px;"><?php echo "<b>Responsable : </b>".$e['Responsable']; ?></p>
                    <p class="card-text"style="margin-bottom:-2px;"><?php echo "<b>Objectifs : </b>". $e['Objectif']; ?></p>
                    <p class="card-text" style="margin-bottom:-6px;"><?php echo "<b>Date : </b>".$e['date_evenement']; ?></p>
                    <p class="card-text"style="margin-bottom:-6px;"><?php echo "<b>Heure de début : </b>".$e['Horaire_debut'].",<b> Heure de fin : </b>".$e['Horaire_fin']; ?></p>
                    <p class="card-text"style="margin-bottom:-2px;"><?php echo "<b>Lieu : </b>".$e['Lieu']; ?></p>
                    <p class="card-text"style="margin-bottom:-2px;">
                       <table class="table" border="2" style="text-align: center; border-color: #87CEFA;">
                        <tr style="background-color: #87CEFA;"><th>Nom</th><th>Fonction</th><th>Promotion</th><th>Spécialité</th></tr>
                          <?php  foreach ($membres as $m) {
                            $mes = $me->FindMembreByID($m['id_membre']);
                            $pro1 = $p->FindPromotionByID($mes['id_promotion']);
                            $sp1 = $s->FindSpecialiteByID($mes['id_specialite']);
                          ?>
                        <tr><td><?php echo $mes['Nom']?></td><td><?php echo $m['fonctionmembre']?></td><td><?php echo $pro1['promotion']?></td><td><?php echo $sp1['specialite']?></td></tr>
                           <?php 
                              }
                           ?>
                      </table>
                    </p>
                    <p class="card-text" >
                      <div class="form-check form-check-inline">
                        <form action="treated.php" method="POST">
                        <input type="hidden" name="valider_event" value="<?php echo $e['id']; ?>">
                        <input type="hidden" name="validerr_event" value="<?php echo $e['Nom']; ?>">

                        <input class="btn btn-success " type="submit" id ="valider_event" name="v" value="Valider" ></form>
                      </div>
                      <div class="form-check form-check-inline" style="float: right;right: 0px" >
                        <input type="hidden" name="refuser_event" value="<?php echo $e['id']; ?>">
                        <input class="btn btn-danger " type="submit" id ="<?php echo'refuser_event'.$i;?>" name="r"value="Refuser"  onclick="document.getElementById('<?php echo "Cible_event".$i;?>').style.visibility ='visible'; document.getElementById('<?php echo "refuser_event".$i;?>').style.visibility ='hidden'" style="visibility: visible;">
                        
                      </div>
                      <div class="form-check form-check-inline" style="float: right;right: 0px;visibility:hidden;"  id ="<?php echo'Cible_event'.$i;?>">
                        <form action="treated.php" method="POST">
                        <input type="hidden" name="refuser_event" value="<?php echo $e['id']; ?>">
                        <input type="hidden" name="validerr_event" value="<?php echo $e['Nom']; ?>">
                        <input type="hidden" name="Email_club" value="<?php echo $club_Email; ?>">
                        <textarea class="form-control" name="cause_event"  style="margin-bottom: 10px;"></textarea>
                        <input class="btn btn-danger " type="submit" id ="envoyer_event" name="envoyer_event"value="Envoyer"  >
                      </form>
                      </div>
                    </p>
                  </div>
                </div>
              </div>
              <?php $i++;
               }
              ?>
            </div>
          </div>
          <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">
             <div class="row row-cols-1 row-cols-md-1">
              <?php
                $event=new Evenement("","","",0,0,"","","","",0,"",0,0);
                $events = $event->FindEventtreatedResponsable();
                $club = new Club("",0,"","","",0,0,"","","","");
                
                $t = new Type(0,"");
                $s = new Specialite(0,"");
                $p = new Promotion(0,"");
                $a = new Appartenance(0,0,"");
                $me = new Membre("",0,0);
                foreach ($events as $e) {
                  $clubs = $club->FindClub($e['id_club']);
                  foreach ($clubs as $c) {
                  $ty =$t->FindTypeByID($c['id_type']);
                  $sp = $s->FindSpecialiteByID($c['id_specialite']);
                  $pro = $p->FindPromotionByID($c['id_promotion']);
                  }
                  
                  $membres = $a->FindAppartenanceByIDClub($e['id_club']);
               ?>
              <div class="col col-md-auto" >
                <div class="card border border-primary rounded" style="width: auto;">
                  <div class="card-body">
                    <h5 class="card-title" style="font-weight: bold;font-family:Raleway;color: #00BFFF;text-align: center;text-decoration: underline;"><?php echo $e['Nom']; ?></h5>
                    <p class="card-text" style="margin-bottom:-2px;"><?php echo "<b>Type : </b>".$e['Type_evenement']; ?></p>
                    <p class="card-text" style="margin-bottom:-2px;"><?php echo "<b>Responsable : </b>".$e['Responsable']; ?></p>
                    <p class="card-text"style="margin-bottom:-2px;"><?php echo "<b>Objectifs : </b>". $e['Objectif']; ?></p>
                    <p class="card-text" style="margin-bottom:-6px;"><?php echo "<b>Date : </b>".$e['date_evenement']; ?></p>
                    <p class="card-text"style="margin-bottom:-6px;"><?php echo "<b>Heure de début : </b>".$e['Horaire_debut'].",<b> Heure de fin : </b>".$e['Horaire_fin']; ?></p>
                    <p class="card-text"style="margin-bottom:-2px;"><?php echo "<b>Lieu : </b>".$e['Lieu']; ?></p>
                    <p class="card-text"style="margin-bottom:-2px;">
                       <table class="table" border="2" style="text-align: center; border-color: #87CEFA;">
                        <tr style="background-color: #87CEFA;"><th>Nom</th><th>Fonction</th><th>Promotion</th><th>Spécialité</th></tr>
                          <?php  foreach ($membres as $m) {
                            $mes = $me->FindMembreByID($m['id_membre']);
                            $pro1 = $p->FindPromotionByID($mes['id_promotion']);
                            $sp1 = $s->FindSpecialiteByID($mes['id_specialite']);
                          ?>
                        <tr><td><?php echo $mes['Nom']?></td><td><?php echo $m['fonctionmembre']?></td><td><?php echo $pro1['promotion']?></td><td><?php echo $sp1['specialite']?></td></tr>
                           <?php 
                              }
                           ?>
                      </table>
                    </p>
                    <p class="card-text" >
                      <form action="treated.php" method="POST">
                          <input type="hidden" name="supprimer_event" value="<?php echo $e['id']; ?>">
                        <input type="submit" class="btn btn-danger " id ="supprimer_event"  value="Supprimer">
                      </form>
                    </p>
                  </div>
                </div>
              </div>
              <?php 
               }
              ?>
            </div>
          </div>
        </div>  
      </div>      
  </div>
</section>



    <?php include 'footer.php'; ?>
    <link rel="stylesheet" href="css/modif.css">

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>

  <!-- Script to highlight the active date in the hours list -->
  <script>
    $('.list-hours li').eq(new Date().getDay()).addClass('today');
  </script>

</html>
