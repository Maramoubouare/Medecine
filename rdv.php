<!DOCTYPE html>
<html>
<head>
  <?php
  session_start();
  include('connexion_db/cnx.php');
    ?>
    <?php
    if(!isset($_SESSION['User'])){
    	echo '<SCRIPT LANGUAGE="JavaScript">document.location.href="sign-in.php" </SCRIPT>';
    	exit;
    }
    ?>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
<title>:: Swift - Hospital Admin ::</title>
<link rel="icon" href="favicon.ico" type="image/x-icon">
<link href="assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">
<link href="assets/css/main.css" rel="stylesheet">
<!-- Custom Css -->

<!-- Swift Themes. You can choose a theme from css/themes instead of get all themes -->
<link href="assets/css/themes/all-themes.css" rel="stylesheet" />
</head>

<body class="theme-cyan">
<!-- Page Loader -->
<div class="page-loader-wrapper">
    <div class="loader">
        <div class="preloader">
            <div class="spinner-layer pl-red">
                <div class="circle-clipper left">
                    <div class="circle"></div>
                </div>
                <div class="circle-clipper right">
                    <div class="circle"></div>
                </div>
            </div>
        </div>
        <p>Please wait...</p>
    </div>
</div>
<!-- #END# Page Loader -->
<!-- Overlay For Sidebars -->
<div class="overlay"></div>
<!-- #END# Overlay For Sidebars -->
      <?php include ("en-tete.php")?>
        <!-- Menu -->
       <?php include ("menu.php")?>
        <!-- #Menu -->
    </aside>
    <!-- #END# Left Sidebar -->
    <!-- Right Sidebar -->
    <aside id="rightsidebar" class="right-sidebar">
        <ul class="nav nav-tabs tab-nav-right" role="tablist">
            <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#skins">Skins</a></li>
            <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#chat">Chat</a></li>
            <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#settings">Setting</a></li>
        </ul>
        <div class="tab-content">
            <div role="tabpanel" class="tab-pane in active in active" id="skins">
                <ul class="demo-choose-skin">
                    <li data-theme="red">
                        <div class="red"></div>
                        <span>Red</span> </li>
                    <li data-theme="purple">
                        <div class="purple"></div>
                        <span>Purple</span> </li>
                    <li data-theme="blue">
                        <div class="blue"></div>
                        <span>Blue</span> </li>
                    <li data-theme="cyan" class="active">
                        <div class="cyan"></div>
                        <span>Cyan</span> </li>
                    <li data-theme="green">
                        <div class="green"></div>
                        <span>Green</span> </li>
                    <li data-theme="deep-orange">
                        <div class="deep-orange"></div>
                        <span>Deep Orange</span> </li>
                    <li data-theme="blue-grey">
                        <div class="blue-grey"></div>
                        <span>Blue Grey</span> </li>
                    <li data-theme="black">
                        <div class="black"></div>
                        <span>Black</span> </li>
                    <li data-theme="blush">
                        <div class="blush"></div>
                        <span>Blush</span> </li>
                </ul>
            </div>
            <div role="tabpanel" class="tab-pane" id="chat">
                <div class="demo-settings">
                    <div class="search">
                        <div class="input-group">
                            <div class="form-line">
                                <input type="text" class="form-control" placeholder="Search..." required autofocus>
                            </div>
                        </div>
                    </div>
                    <h6>Recent</h6>
                    <ul>
                        <li class="online">
                            <div class="media">
                                <a  role="button" tabindex="0"> <img class="media-object " src="assets/images/xs/avatar1.jpg" alt=""> </a>
                                <div class="media-body">
                                    <span class="name">Claire Sassu</span> <span class="message">Can you share the...</span> <span class="badge badge-outline status"></span>
                                </div>
                            </div>
                        </li>
                        <li class="online">
                            <div class="media"> <a  role="button" tabindex="0"> <img class="media-object " src="assets/images/xs/avatar2.jpg" alt=""> </a>
                                <div class="media-body">
                                    <span class="name">Maggie jackson</span> <span class="message">Can you share the...</span> <span class="badge badge-outline status"></span>
                                </div>
                            </div>
                        </li>
                        <li class="online">
                            <div class="media"> <a  role="button" tabindex="0"> <img class="media-object " src="assets/images/xs/avatar3.jpg" alt=""> </a>
                                <div class="media-body">
                                    <span class="name">Joel King</span> <span class="message">Ready for the meeti...</span> <span class="badge badge-outline status"></span>
                                </div>
                            </div>
                        </li>
                    </ul>
                    <h6>Contacts</h6>
                    <ul>
                        <li class="offline">
                            <div class="media"> <a  role="button" tabindex="0"> <img class="media-object " src="assets/images/xs/avatar4.jpg" alt=""> </a>
                                <div class="media-body">
                                    <span class="name">Joel King</span> <span class="badge badge-outline status"></span>
                                </div>
                            </div>
                        </li>
                        <li class="online">
                            <div class="media"> <a  role="button" tabindex="0"> <img class="media-object " src="assets/images/xs/avatar1.jpg" alt=""> </a>
                                <div class="media-body">
                                    <span class="name">Joel King</span> <span class="badge badge-outline status"></span>
                                </div>
                            </div>
                        </li>
                        <li class="offline">
                            <div class="media"> <a class="pull-left " role="button" tabindex="0"> <img class="media-object " src="assets/images/xs/avatar2.jpg" alt=""> </a>
                                <div class="media-body">
                                    <span class="name">Joel King</span> <span class="badge badge-outline status"></span>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <div role="tabpanel" class="tab-pane" id="settings">
                <div class="demo-settings">
                    <p>GENERAL SETTINGS</p>
                    <ul class="setting-list">
                        <li> <span>Report Panel Usage</span>
                            <div class="switch">
                                <label>
                                    <input type="checkbox" checked>
                                    <span class="lever"></span></label>
                            </div>
                        </li>
                        <li> <span>Email Redirect</span>
                            <div class="switch">
                                <label>
                                    <input type="checkbox">
                                    <span class="lever"></span></label>
                            </div>
                        </li>
                    </ul>
                    <p>SYSTEM SETTINGS</p>
                    <ul class="setting-list">
                        <li> <span>Notifications</span>
                            <div class="switch">
                                <label>
                                    <input type="checkbox" checked>
                                    <span class="lever"></span></label>
                            </div>
                        </li>
                        <li> <span>Auto Updates</span>
                            <div class="switch">
                                <label>
                                    <input type="checkbox" checked>
                                    <span class="lever"></span></label>
                            </div>
                        </li>
                    </ul>
                    <p>ACCOUNT SETTINGS</p>
                    <ul class="setting-list">
                        <li> <span>Offline</span>
                            <div class="switch">
                                <label>
                                    <input type="checkbox">
                                    <span class="lever"></span></label>
                            </div>
                        </li>
                        <li> <span>Location Permission</span>
                            <div class="switch">
                                <label>
                                    <input type="checkbox" checked>
                                    <span class="lever"></span></label>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </aside>
    <!-- #END# Right Sidebar -->
</section>

<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <h2>Liste des Rendez-Vous</h2>
            <small class="text-muted">Bienvenue sur Hopharm application</small>
            <?php
								  if(isset($_GET['mod'])){
									  $mod=$_GET['mod'];
									  if ($mod==1)
									  {

									  echo '<SCRIPT LANGUAGE="JavaScript">alert("email dacceptation envoyé") </SCRIPT>';

									   }
								  }
								   ?>
        </div>
<script>
  function supprimer(id){
    if(confirm('confirmer vous la suppression?')){
      document.location.href="fresh.php?ID="+id+"&num=rdv";
    }
  }
</script>
        <div class="box-body">
					<div class="table-responsive">
					  <table id="example5" class="table table-bordered table-striped" style="width:100%">
						<thead>
							<tr>
                <th>Date Ajou</th>
								<th>Date RDV</th>
								<th>Nom</th>
								<th>Prenom</th>
								<th>Email</th>
								<th>Telephone</th>
                <th>Sexe</th>
                <th></th>
                <th></th>

							</tr>
						</thead>
						<tbody>
			<?php
				$NOM="";
				$PRENOM="";
				$UNITE="";
				$TYPE="";
				$PHARMACIE="";
				$DATEAJOUT="";
        $id="";
        $etats=0;
				$req="select * from rdv  where ID_CABINET='".$_SESSION['ID']."' and ETAT='".$etats."'";
				$query=mysqli_query($connect, $req);
				while($enreg=mysqli_fetch_array($query)){
					$NOM	=	$enreg['NOM'];
					$PRENOM		=	$enreg['PRENOM'];
					$EMAIL		=	$enreg['EMAIL'];
					$ID_CABINET		=	$enreg['ID_CABINET'];
					$SEXE	=	$enreg['SEXE'];
          $DATE_RDV	=	$enreg['DATE_RDV'];
					$DATEAJOUT	=	$enreg['DATEAJOUT'];
          $id	=	$enreg['id'];
          $TEL	=	$enreg['TELEPHONE'];

          $nom_cabinet="";
          $rec="select * from cabinet where id=".$ID_CABINET;
          $query1=mysqli_query($connect, $rec);
          while ($res=mysqli_fetch_array($query1)) {
          $nom_cabinet= $res["NOM"];
         }

       ?>

					<tr>
							<td style="color:#333"><?php echo $DATEAJOUT; ?></td>
              <td style="color:#333"><?php echo $DATE_RDV; ?></td>
							<td style="color:#333"><?php echo $NOM; ?></td>
							<td style="color:#333"><?php echo $PRENOM; ?></td>
							<td style="color:#333"><?php echo $EMAIL; ?></td>
							<td style="color:#333"><?php echo $TEL; ?></td>
							<td style="color:#333"><?php echo $SEXE; ?></td>
              <td><a href="JavaScript:supprimer(<?php echo $id ;?>)" class="label label-danger">Supprimer</a></td>
              <td><a href="accepte.php?id=(<?php echo $id ;?>)" class="label label-success">Accepter</a></td>


					</tr>

			<?php
			}
      ?>

			</tbody></table>
			</div>

			</div>
    </div>
</section>

<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <h2>Liste des Rendez-Vous Accepter</h2>
        </div>
<script>
  function supprimer(id){
    if(confirm('confirmer vous la suppression?')){
      document.location.href="fresh.php?ID="+id+"&num=rdv";
    }
  }
</script>
        <div class="box-body">
					<div class="table-responsive">
					  <table id="example5" class="table table-bordered table-striped" style="width:100%">
						<thead>
							<tr>
                <th>Date Ajou</th>
								<th>Date RDV</th>
								<th>Nom</th>
								<th>Prenom</th>
								<th>Email</th>
								<th>Telephone</th>
                <th>Sexe</th>
                <th></th>
                <th></th>

							</tr>
						</thead>
						<tbody>
			<?php
				$NOM="";
				$PRENOM="";
				$UNITE="";
				$TYPE="";
				$PHARMACIE="";
				$DATEAJOUT="";
        $id="";
        $etat=1;
				$req="select * from rdv  where ID_CABINET='".$_SESSION['ID']."' and ETAT='".$etat."'";
				$query=mysqli_query($connect, $req);
				while($enreg=mysqli_fetch_array($query)){
					$NOM	=	$enreg['NOM'];
					$PRENOM		=	$enreg['PRENOM'];
					$EMAIL		=	$enreg['EMAIL'];
					$ID_CABINET		=	$enreg['ID_CABINET'];
					$SEXE	=	$enreg['SEXE'];
          $DATE_RDV	=	$enreg['DATE_RDV'];
					$DATEAJOUT	=	$enreg['DATEAJOUT'];
          $id	=	$enreg['id'];
          $TEL	=	$enreg['TELEPHONE'];

       ?>

					<tr>
							<td style="color:#333"><?php echo $DATEAJOUT; ?></td>
              <td style="color:#333"><?php echo $DATE_RDV; ?></td>
							<td style="color:#333"><?php echo $NOM; ?></td>
							<td style="color:#333"><?php echo $PRENOM; ?></td>
							<td style="color:#333"><?php echo $EMAIL; ?></td>
							<td style="color:#333"><?php echo $TEL; ?></td>
							<td style="color:#333"><?php echo $SEXE; ?></td>
              <td><a href="JavaScript:supprimer(<?php echo $id ;?>)" class="label label-danger">Supprimer</a></td>


					</tr>

			<?php
			}
      ?>

			</tbody></table>
			</div>

			</div>
    </div>
</section>

<div class="color-bg"></div>
<!-- Jquery Core Js -->
<script src="assets/bundles/libscripts.bundle.js"></script> <!-- Lib Scripts Plugin Js -->
<script src="assets/bundles/morphingsearchscripts.bundle.js"></script> <!-- morphing search Js -->
<script src="assets/bundles/vendorscripts.bundle.js"></script> <!-- Lib Scripts Plugin Js -->

<script src="assets/bundles/mainscripts.bundle.js"></script><!-- Custom Js -->
<script src="assets/bundles/morphingscripts.bundle.js"></script><!-- morphing search page js -->
</body>
</html>
