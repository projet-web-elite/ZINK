<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from zebratheme.com/html/fooadmin/restaurant-order-list.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 17 Feb 2019 15:04:00 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Foodmin : Order List</title>
	
	<!-- ================= Favicon ================== -->
    <!-- Standard -->
    <link rel="shortcut icon" href="http://placehold.it/64.png/000/fff">
    <!-- Retina iPad Touch Icon-->
    <link rel="apple-touch-icon" sizes="144x144" href="http://placehold.it/144.png/000/fff">
    <!-- Retina iPhone Touch Icon-->
    <link rel="apple-touch-icon" sizes="114x114" href="http://placehold.it/114.png/000/fff">
    <!-- Standard iPad Touch Icon--> 
    <link rel="apple-touch-icon" sizes="72x72" href="http://placehold.it/72.png/000/fff">
    <!-- Standard iPhone Touch Icon--> 
    <link rel="apple-touch-icon" sizes="57x57" href="http://placehold.it/57.png/000/fff">
	
	<!-- Styles -->
    <link href="assets/css/lib/font-awesome.min.css" rel="stylesheet">
    <link href="assets/css/lib/themify-icons.css" rel="stylesheet">
    <link href="assets/css/lib/mmc-chat.css" rel="stylesheet" />
    <link href="assets/css/lib/sidebar.css" rel="stylesheet">
    <link href="assets/css/lib/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/lib/unix.css" rel="stylesheet">

        <link href="dash.css" rel="stylesheet">
</head>

<body>

    <body>


    <div class="sidebar sidebar-hide-to-small sidebar-shrink sidebar-gestures">
        <div class="nano">
            <div class="nano-content">
                <ul>
                    <li class="label">Main</li>
                    <li class="active"><a href="index-2.html"><i class="ti-home"></i> Dashboard </a></li>                   
                    <li><a class="sidebar-sub-toggle"><i class="ti-cup"></i> Restaurant <span class="sidebar-collapse-icon ti-angle-down"></span></a>
                        <ul>
                            <li><a href="../ceevee/index.html">Resto</a></li>
                            <li><a href="restaurant-favourite-list.html">Favourite</a></li>
                            <li><a href="restaurant-order-list.html">Order List</a></li>
                            <li><a href="restaurant-upload-menu.html">Upload Menu</a></li>
                        </ul>
                    </li>
                    
                    <li class="label">Apps</li>
                    <li><a href="app-event-calender.html"><i class="ti-calendar"></i> Calender </a></li>
                    <li><a href="app-email.html"><i class="ti-email"></i> Email</a></li>
                    
                    
                    
                    <li><a class="sidebar-sub-toggle"><i class="ti-target"></i> Pages <span class="sidebar-collapse-icon ti-angle-down"></span></a>
                        <ul>
                           
                            <li><a href="page-reset-password.html">Forgot password</a></li>
                        </ul>
                    </li>
                    
                 <li><a href="page-login.html"><i class="ti-close"></i> Logout</a></li>

                </ul>
            </div>
        </div>
    </div><!-- /# sidebar -->




    <div class="header">
        <div class="pull-left">
            <div class="logo"><a href="index-2.html"><span>Foodmin</span></a></div>
            <div class="hamburger sidebar-toggle">
                <span class="line"></span>
                <span class="line"></span>
                <span class="line"></span>
            </div>
        </div>

        <div class="pull-right p-r-15">
            <ul>
                <li class="header-icon dib"><i class="ti-bell"></i>
                    <div class="drop-down">
                        <div class="dropdown-content-heading">
                            <span class="text-left">Recent Notifications</span>
                        </div>
                        <div class="dropdown-content-body">
                            <ul>
                               
                                <li class="text-center">
                                    <a href="" class="more-link">See All</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </li>
                <li class="header-icon dib"><i class="ti-email"></i>
                    <div class="drop-down">
                        <div class="dropdown-content-heading">
                            <a href="email.html"><i class="ti-pencil-alt pull-right"></i></a>
                        </div>
                        <div class="dropdown-content-body">
                            <ul>
                                
                                <li class="text-center">
                                    <a href="app-email.html" class="more-link">See All</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </li>
                
                <li class="header-icon dib"><span class="user-avatar">Lamia <i class="ti-angle-down f-s-10"></i></span>
                   
                     
                </li>
            </ul>
        </div>
    </div>
</div>
	
    <div class="content-wrap">
        <div class="main">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-8 p-0">
                        <div class="page-header">
                            <div class="page-title">
                                <h1>Dashboard 1</h1>
                            </div>
                        </div>
                    </div><!-- /# column -->
                    <div class="col-lg-4 p-0">
                        <div class="page-header">
                            <div class="page-title">
                                <ol class="breadcrumb text-right">
                                    <li><a href="#">Dashboard</a></li>
                                    <li class="active">Blank</li>
                                </ol>
                            </div>
                        </div>
                  <div class="topnav">
 
  <div class="search-container">

    <form method="post">
         <!--  <h4  style ="color:red"> Entrer le CIN :</h4> -->
      <input type="text" placeholder="Search.." name="search">
      <button "submit" name="submit" class="submit" ><i class="fa fa-search"></i></button>
    </form>
  </div>
</div>

<?PHP
include "../entites/Commande.php";
include "../cores/CommandeC.php";
$commande1C=new CommandeC();
$listeCommandes=$commande1C->afficherCommandes($commande1C);
?>

  </div><!-- /# column -->
                </div><!-- /# row -->
                <div class="main-content">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card alert">
                                <div class="order-list-item">

              
                                    <table class="table">
                                        <thead>
                                        <tr>
                                            <th>cin</th>
                                            <th>Nom</th>
                                            <th>Prenom</th>
                                            <th>Numero</th>
                                            <th>Email</th>
                                            <th>Heures</th>
                                            <th>Minutes</th>
                                            <th>Menu</th>
                                            <th>Prix</th>
                                            <th>Quantite</th>
                                              <th>Commande</th>
                                             <th>vallider </th>
                                            <th>Annuler</th>
                                             
                                           
                                        </tr>
                                        </thead>

                                               <tbody>
                                              
                                        
                                       
<?php 
foreach($listeCommandes as $row)
            
{ if (isset($_POST['submit'])){
   $commande1=new commande($row['cin'],$row['nom'],$row['prenom'],$row['numero'],$row['email'],$row['heures'],$row['minutes'],$row['produits'],$row['prix'],$row['quantite'],$row['etat']);
    $commande1C->validerCommande($commande1,$row['cin']); 
   // echo $_POST['cin_ini'];
  // header('Location: afficherEmploye.php');
} ?>                                 
                                            
                                            <tr>
                                            <td><?PHP echo $row['cin']; ?></td>
                                            <td><?PHP echo $row['nom']; ?></td>
                                            <td><?PHP echo $row['nom']; ?></td>
                                            <td><?PHP echo $row['numero']; ?></td>
                                            <td><?PHP echo $row['email']; ?></td>
                                            <td><?PHP echo $row['heures']; ?></td>
                                            <td><?PHP echo $row['minutes']; ?></td>
                                            <td><?PHP echo $row['produits']; ?></td>
                                            <td><?PHP echo $row['prix']; ?></td>
                                            <td><?PHP echo $row['quantite']; ?></td>
                                            <?php 
                                 if ($row['etat']==0)
                           {
                            echo "<p Commmande en cours de traitement</p>";
                            }
                            else
                            {
                            echo "<p Commmande Validee</p>";
                           }

?>
                                            <td><?PHP echo $row['etat']; ?></td>
                                            <form  method="post">  
                                            <td><input type="submit" name="submit" class="btn btn-success btn-rounded" value="√""></td>
                                            <input type="hidden"   name="cin1" value="<?PHP echo $row['cin'];?>">
                                               </form> 

                                            <form  method="post" action="supprimerCommandeAdmin.php" >    
                                            <td><button   type="submit" class="btn btn-primary btn-rounded">X</button></td>
                                               <input type="hidden" value="<?PHP echo $row['cin']; ?>" name="cin">
                                               </form>
                                     </tr>              
                                             
                                              </tbody>
                                            

                                                                      <?php 




}
 ?>                      
                                                

                                    </table> 
                                </div>
							</div><!-- /# card -->
						</div><!-- /# column -->
					</div><!-- /# row -->
                </div><!-- /# main content -->
            </div><!-- /# container-fluid -->
        </div><!-- /# main -->
    </div><!-- /# content wrap -->

    <script src="assets/js/lib/jquery.min.js"></script><!-- jquery vendor -->
    <script src="assets/js/lib/jquery.nanoscroller.min.js"></script><!-- nano scroller -->
    <script src="assets/js/lib/sidebar.js"></script><!-- sidebar -->
    <script src="assets/js/lib/bootstrap.min.js"></script><!-- bootstrap -->
    <script src="assets/js/lib/mmc-common.js"></script>
    <script src="assets/js/lib/mmc-chat.js"></script>
    <script src="assets/js/lib/rating1/jRate.min.js"></script><!-- scripit init-->
    <script src="assets/js/lib/rating1/jRate.init.js"></script><!-- scripit init-->
    <script src="assets/js/scripts.js"></script><!-- scripit init-->
</body>


<!-- Mirrored from zebratheme.com/html/fooadmin/restaurant-order-list.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 17 Feb 2019 15:04:06 GMT -->
</html>