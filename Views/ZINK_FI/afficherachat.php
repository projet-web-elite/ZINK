<HTML>
<head>
</head>
<body>
  <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Panier Zink</title>
    
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
    <link href="assets/css/lib/calendar/fullcalendar.css" rel="stylesheet" />
    <link href="assets/css/lib/mmc-chat.css" rel="stylesheet" />
    <link href="assets/css/lib/sidebar.css" rel="stylesheet">
    <link href="assets/css/lib/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/lib/unix.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">
<form method="get" action="rech.php">
  RECHERCHE: <input type="text" value="" placeholder="rechercher une panier">
</form>





    </div> 
    <script src="assets/js/lib/jquery.nanoscroller.min.js"></script><!-- nano scroller -->
    <script src="assets/js/lib/sidebar.js"></script><!-- sidebar -->
    <script src="assets/js/lib/bootstrap.min.js"></script><!-- bootstrap -->
    <script src="assets/js/lib/mmc-common.js"></script>
    <script src="assets/js/lib/mmc-chat.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="assets/js/lib/jquery-ui/jquery-ui.min.js"></script>
    <script src="assets/js/lib/moment/moment.js"></script>
    <script src="assets/js/lib/calendar/fullcalendar.min.js"></script>
    <script src="assets/js/lib/calendar/fullcalendar-init.js"></script>  








   <body>


    <div class="sidebar sidebar-hide-to-small sidebar-shrink sidebar-gestures">
        <div class="nano">
            <div class="nano-content">
                <ul>
                    <li class="label">Main</li>
                    <li class="active"><a href="index-2.html"><i class="ti-home"></i> Dashboard </a></li>                   
                    <li><a class="sidebar-sub-toggle"><i class="ti-cup"></i> Restaurant <span class="sidebar-collapse-icon ti-angle-down"></span></a>
                        <ul>
                            <li><a href="ceevee/index.html">Resto</a></li>
                            //<li><a href="afficherachat.php">panier</a></li>/
                            <li><a href="restaurant-order-list.html">Order List</a></li>
                            <li><a href="restaurant-upload-menu.html">Upload Menu</a></li>
                        </ul>
                    </li>
                    
                    <li class="label">Apps</li>
                    <li><a href="app-event-calender.html"><i class="ti-calendar"></i> Calender </a></li>
                    <li><a href="app-email.html"><i class="ti-email"></i> Email</a></li>
                    <li><a href="annonces-produit.html"><i class="ti-calendar">Annonces produit</a></li>
                    <li><a href="carriere.html"><i class="ti-calendar">Carriere</a></li>
                    <li><a href="afficherachat.php"><i class="ti-calendar">achat</a></li>


                    
                    
                    
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
                                <h1>Dashboard</h1>
                            </div>
                        </div>
                    </div><!-- /# column -->
                    <div class="col-lg-4 p-0">
                        <div class="page-header">
                            <div class="page-title">
                                <ol class="breadcrumb text-right">
                                    <li><a href="#">Dashboard</a></li>
                                    <li class="active">Home</li>
                                </ol>
                            </div>
                        </div>
                    </div><!-- /# column -->
                </div><!-- /# row -->
                <?PHP
include "../core/AchatA.php";
$achat1C=new  AchatA();
$listeachat=$achat1C->afficherachats();
//var_dump($listeEmployes->fetchAll());
?>
<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">



    <link rel="stylesheet" href="assets/css/lib/bootstrap.min.css">



    <link rel="stylesheet" href="style.css">

        <div class="content mt-3">
            <div class="animated fadeIn">
                <div class="row">

                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">Panier</strong>
                            </div>
                            <div class="card-body">
                                <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th>refrence</th>
                                            <th>prix</th>
                                            <th>nombres de porduits</th>
                                            <th>supprimer</th>
                                            <th>modifier</th>
                                            <th>vider</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
<?PHP
foreach($listeachat as $row){
  ?>
  <tr>
  <td><?PHP echo $row['ref']; ?></td>
  <td><?PHP echo $row['prix']; ?></td>
  <td><?PHP echo $row['nbr']; ?></td>
  <td><form method="POST" action="supprimerachat.php">
  <input type="submit" name="supprimer" value="supprimer">
  <input type="hidden" value="<?PHP echo $row['ref']; ?>" name="ref">
  </form>
  </td>
  <td><a href="modifierachat.php?ref=<?PHP echo $row['ref']; ?>">
  Modifier</a></td>
  </form>
  </td>
  <td><form method="POST" action="rachat.php">
  <input type="submit" name="vider" value="vider">

  <?PHP
}
?>
</tr>
                                      

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>


                </div>
            </div><!-- .animated -->
        </div><!-- .content -->


                <div class="main-content">
          <div class="row">
            <div class="col-lg-6">
              <div class="row">
                <div class="col-lg-6">
                  <div class="card p-0">
                    <div class="stat-widget-three">
                      <div class="stat-icon bg-primary p-48">
                        <i class="ti-eye"></i>
                      </div>
                      <div class="stat-content p-30">
                        <div class="stat-text">Order Received</div>
                        <div class="stat-digit">6,250</div>
                      </div>
                    
                    </div>
                  </div>
                </div>
                
                <div class="col-lg-6">
                  <div class="card p-0">
                    <div class="stat-widget-three">
                      <div class="stat-icon bg-success p-48">
                        <i class="ti-bag"></i>
                      </div>
                      <div class="stat-content p-30">
                        <div class="stat-text">Today Delevered</div>
                        <div class="stat-digit">2,584</div>
                      </div>
                    
                    </div>
                  </div>
                </div>
                
                <div class="col-lg-6">
                  <div class="card p-0">
                    <div class="stat-widget-three">
                      <div class="stat-icon bg-warning p-48">
                        <i class="ti-user"></i>
                      </div>
                      <div class="stat-content p-30">
                        <div class="stat-text">New Customer</div>
                        <div class="stat-digit">9,874</div>
                      </div>
                    
                    </div>
                  </div>
                </div>
                
                <div class="col-lg-6">
                  <div class="card p-0">
                    <div class="stat-widget-three">
                      <div class="stat-icon bg-danger p-48">
                        <i class="ti-money"></i>
                      </div>
                      <div class="stat-content p-30">
                        <div class="stat-text">Net Earning</div>
                        <div class="stat-digit">3,5621</div>
                      </div>
                    
                    </div>
                  </div>
                </div>
                
                <div class="col-lg-6">
                  <div class="card bg-success">
                    <div class="stat-widget-six">
                      <div class="stat-icon p-15">
                        <i class="ti-stats-up"></i>
                      </div>
                      <div class="stat-content p-t-12 p-b-12">
                         <div class="text-left dib">
                        <div class="stat-heading">Daily sales</div>
                        <div class="stat-text">Total: 9765</div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                
                <div class="col-lg-6">
                  <div class="card bg-primary">
                    <div class="stat-widget-six">
                      <div class="stat-icon p-15">
                        <i class="ti-stats-down"></i>
                      </div>
                      <div class="stat-content p-t-12 p-b-12">
                         <div class="text-left dib">
                        <div class="stat-heading">Daily Expense</div>
                        <div class="stat-text">Total: 6765</div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div><!-- /# column -->
            <div class="col-lg-6">
              <div class="card alert">
                <div class="card-header">
                  <h4>Earning Graph</h4>
                  <div class="card-header-right-icon">
                    <ul>
                      <li class="card-close" data-dismiss="alert"><i class="ti-close"></i></li>
                      <li class="doc-link"><a href="#"><i class="ti-link"></i></a></li>
                    </ul>
                  </div>
                </div>
                <div class="sales-chart">
                  <canvas id="team-chart"></canvas>
                </div>
              </div>
            </div><!-- /# column -->
                    </div><!-- /# row -->
          <div class="row">
            <div class="col-lg-4">
                            <div class="card alert">
                                <div class="card-header">
                                    <h4>Menu List</h4>
                                </div>
                                <div class="card-body">
                                    <table class="table table-responsive table-hover ">
                                        <tbody>
                                            <tr>
                                                <td class="no-border">Chicken Burger</td>
                                                <td class="no-border"><span class="btn btn-primary">$21</span></td>
                                            </tr>
                                            <tr>
                                                <td>Hot Dog</td>
                                                <td><span class="btn btn-success">$15</span></td>
                                            </tr>
                                            <tr>
                                                <td>Soft Drinks</td>
                                                <td><span class="btn btn-danger">$30</span></td>
                                            </tr>
                                            <tr>
                                                <td>Nudulles</td>
                                                <td><span class="btn btn-primary">$25</span></td>
                                            </tr>
                                            <tr>
                                                <td>Thai Soup</td>
                                                <td><span class="btn btn-success">$29</span></td>
                                            </tr>
                                            <tr>
                                                <td>Fried Rice</td>
                                                <td><span class="btn btn-danger">$14</span></td>
                                            </tr>
                                            <tr>
                                                <td>Vegitables</td>
                                                <td><span class="btn btn-success">$18</span></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div><!-- /# column -->
            <div class="col-lg-8">
                            <div class="card alert">
                                <div class="card-header">
                                    <h4>Online Order List </h4>
                  <div class="card-header-right-icon">
                    <ul>
                      <li class="card-close" data-dismiss="alert"><i class="ti-close"></i></li>
                      <li class="card-option drop-menu"><i class="ti-settings" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" role="link"></i>
                        <ul class="card-option-dropdown dropdown-menu">
                          <li><a href="#"><i class="ti-loop"></i> Update data</a></li>
                          <li><a href="#"><i class="ti-menu-alt"></i> Detail log</a></li>
                          <li><a href="#"><i class="ti-pulse"></i> Statistics</a></li>
                          <li><a href="#"><i class="ti-power-off"></i> Clear ist</a></li>
                        </ul>
                      </li>
                      <li class="doc-link"><a href="#"><i class="ti-link"></i></a></li>
                    </ul>
                  </div>
                                </div>
                                <div class="card-body">
                                    <table class="table table-responsive table-hover ">
                                        <thead>
                                            <tr>
                                                <th>Name</th>
                                                <th>Order ID</th>
                                                <th>Product</th>
                                                <th>Quantity</th>
                                                <th>Price</th>
                                                <th>Delevery</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Saiful Islam</td>
                        <td>#12456</td>
                                                <td>Hot Dog</td>
                                                <td>3</td>
                                                <td class="color-success">$21.56</td>
                                                <td><span class="btn btn-success">Paid</span></td>
                                            </tr>
                                            <tr>
                                                <td>Jannatul Mariam</td>
                        <td>#12456</td>
                                                <td>Hot Dog</td>
                                                <td>3</td>
                                                <td class="color-warning">$21.56</td>
                                                <td><span class="btn btn-warning">Pending</span></td>
                                            </tr>
                                            <tr>
                                                <td>Anik Hasan</td>
                                                <td>#12456</td>
                                                <td>Hot Dog</td>
                                                <td>3</td>
                                                <td class="color-danger">$21.56</td>
                                                <td><span class="btn btn-danger">Cancel</span></td>
                                            </tr>
                                            <tr>
                                                <td>Micheal Qin</td>
                                                <td>#12456</td>
                                                <td>Hot Dog</td>
                                                <td>3</td>
                                                <td class="color-success">$21.56</td>
                                                <td><span class="btn btn-success">paid</span></td>
                                            </tr>
                                            <tr>
                                                <td>John Doe</td>
                                                <td>#12456</td>
                                                <td>Hot Dog</td>
                                                <td>3</td>
                                                <td class="color-success">$21.56</td>
                                                <td><span class="btn btn-success">Paid</span></td>
                                            </tr>
                                            <tr>
                                                <td>Jannatul Tasnim</td>
                                                <td>#12456</td>
                                                <td>Hot Dog</td>
                                                <td>3</td>
                                                <td class="color-warning">$21.56</td>
                                                <td><span class="btn btn-warning">Pending</span></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div><!-- /# column -->
          </div><!-- /# row -->
          <div class="row">
            <div class="col-lg-4">
              <div class="card alert">
                <div class="card-header">
                  <h4>Order Progress</h4>
                </div>
                <div class="card-body">
                  <div class="current-progress">
                    <div class="progress-content">
                      <div class="row">
                        <div class="col-lg-4">
                          <div class="progress-text">Birthday Cake</div>
                        </div>
                        <div class="col-lg-8">
                          <div class="current-progressbar">
                            <div class="progress">
                              <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width:40%">
                                40% progress
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="progress-content">
                      <div class="row">
                        <div class="col-lg-4">
                          <div class="progress-text">Chicken Burger</div>
                        </div>
                        <div class="col-lg-8">
                          <div class="current-progressbar">
                            <div class="progress">
                              <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width:60%">
                                60% progress
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="progress-content">
                      <div class="row">
                        <div class="col-lg-4">
                          <div class="progress-text">Kabab Masala</div>
                        </div>
                        <div class="col-lg-8">
                          <div class="current-progressbar">
                            <div class="progress">
                              <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:70%">
                                70% progress
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="progress-content">
                      <div class="row">
                        <div class="col-lg-4">
                          <div class="progress-text">Soft Drinks</div>
                        </div>
                        <div class="col-lg-8">
                          <div class="current-progressbar">
                            <div class="progress">
                              <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width:90%">
                                90% progress
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div><!-- /# column -->
            <div class="col-lg-4">
              <div class="card bg-primary">
                <div class="weather-widget">
                  <div id="weather-one" class="weather-one p-17"></div>
                </div>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="card bg-success">
                <div class="testimonial-widget-one p-17">
                  <div class="owl-carousel owl-theme">
                    <div class="item">
                      <div class="testimonial-content">
                        <div class="testimonial-text">
                        <i class="fa fa-quote-left"></i> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation <i class="fa fa-quote-right"></i>
                        </div>
                        <img class="testimonial-author-img" src="assets/images/avatar/1.jpg" alt="" />
                        <div class="testimonial-author">TYRION LANNISTER</div>
                        <div class="testimonial-author-position">Founder-Ceo. Dell Corp</div>
                      </div>
                    </div>
                    <div class="item">
                      <div class="testimonial-content">
                        <div class="testimonial-text">
                        <i class="fa fa-quote-left"></i> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation <i class="fa fa-quote-right"></i>
                        </div>
                        <img class="testimonial-author-img" src="assets/images/avatar/1.jpg" alt="" />
                        <div class="testimonial-author">TYRION LANNISTER</div>
                        <div class="testimonial-author-position">Founder-Ceo. Dell Corp</div>
                      </div>
                    </div>
                    <div class="item">
                      <div class="testimonial-content">
                        <div class="testimonial-text">
                        <i class="fa fa-quote-left"></i> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation <i class="fa fa-quote-right"></i>
                        </div>
                        <img class="testimonial-author-img" src="assets/images/avatar/1.jpg" alt="" />
                        <div class="testimonial-author">TYRION LANNISTER</div>
                        <div class="testimonial-author-position">Founder-Ceo. Dell Corp</div>
                      </div>
                    </div>
                    <div class="item">
                      <div class="testimonial-content">
                        <div class="testimonial-text">
                        <i class="fa fa-quote-left"></i> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation <i class="fa fa-quote-right"></i>
                        </div>
                        <img class="testimonial-author-img" src="assets/images/avatar/1.jpg" alt="" />
                        <div class="testimonial-author">TYRION LANNISTER</div>
                        <div class="testimonial-author-position">Founder-Ceo. Dell Corp</div>
                      </div>
                    </div>
                    <div class="item">
                      <div class="testimonial-content">
                        <div class="testimonial-text">
                        <i class="fa fa-quote-left"></i> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation <i class="fa fa-quote-right"></i>
                        </div>
                        <img class="testimonial-author-img" src="assets/images/avatar/1.jpg" alt="" />
                        <div class="testimonial-author">TYRION LANNISTER</div>
                        <div class="testimonial-author-position">Founder-Ceo. Dell Corp</div>
                      </div>
                    </div>
                    <div class="item">
                      <div class="testimonial-content">
                        <div class="testimonial-text">
                        <i class="fa fa-quote-left"></i> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation <i class="fa fa-quote-right"></i>
                        </div>
                        <img class="testimonial-author-img" src="assets/images/avatar/1.jpg" alt="" />
                        <div class="testimonial-author">TYRION LANNISTER</div>
                        <div class="testimonial-author-position">Founder-Ceo. Dell Corp</div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-4">
                            <div class="card alert">
                                <div class="card-header">
                                    <h4>Todo List</h4>
                                    <div class="card-header-right-icon">
                                        <ul>
                                            <li class="card-close" data-dismiss="alert"><i class="ti-close"></i></li>
                                            <li class="doc-link"><a href="#"><i class="ti-link"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="todo-list">
                                    <div class="tdl-holder">
                    <div class="tdl-content">
                      <ul>
                        <li><label><input type="checkbox"><i></i><span>Decorate Kitchen Room</span><a href='#' class="ti-close"></a></label></li>
                        <li><label><input type="checkbox" checked><i></i><span>Delevery Pizza</span><a href='#' class="ti-close"></a></label></li>
                        <li><label><input type="checkbox"><i></i><span>New Order </span><a href='#' class="ti-close"></a></label></li>
                        <li><label><input type="checkbox" checked><i></i><span>Home Delevery</span><a href='#' class="ti-close"></a></label></li>
                        <li><label><input type="checkbox" checked><i></i><span>New Chicken Receipe</span><a href='#' class="ti-close"></a></label></li>
                      </ul>
                    </div>
                    <input type="text" class="tdl-new form-control" placeholder="Write new item and hit 'Enter'...">
                  </div>
                                </div>
                            </div>
                        </div><!-- /# column -->
            <div class="col-lg-4">
                            <div class="card alert">
                                <div class="card-header">
                                    <h4>Customer Feed </h4>
                                    <div class="card-header-right-icon">
                                        <ul>
                                            <li class="card-close" data-dismiss="alert"><i class="ti-close"></i></li>
                                            <li class="doc-link"><a href="#"><i class="ti-link"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="recent-meaasge">
                  <div class="media">
                    <div class="media-left">
                      <a href="#"><img class="media-object" src="assets/images/avatar/1.jpg" alt="..."></a>
                    </div>
                    <div class="media-body">
                      <h5 class="media-heading">Saiful Islam</h5>
                      <div class="meaasge-date">15 minutes Ago</div>
                      <p>We are happy about your service </p>
                    </div>
                  </div>
                  <div class="media">
                    <div class="media-left">
                      <a href="#"><img class="media-object" src="assets/images/avatar/2.jpg" alt="..."></a>
                    </div>
                    <div class="media-body">
                      <h5 class="media-heading">Ishrat Jahan</h5>
                      <div class="meaasge-date">40 minutes ago</div>
                      <p>Quick service and good serve </p>
                    </div>
                  </div>
                  <div class="media">
                    <div class="media-left">
                      <a href="#"><img class="media-object" src="assets/images/avatar/3.jpg" alt="..."></a>
                    </div>
                    <div class="media-body">
                      <h5 class="media-heading">Mr. Saifun</h5>
                      <div class="meaasge-date">1 hour ago</div>
                      <p>Really tasty reciepe </p>
                    </div>
                  </div>
                  <div class="media">
                    <div class="media-left">
                      <a href="#"><img class="media-object" src="assets/images/avatar/3.jpg" alt="..."></a>
                    </div>
                    <div class="media-body">
                      <h5 class="media-heading">Mr. Saifun</h5>
                      <div class="meaasge-date">1 minutes ago</div>
                      <p>We like your birthday cake </p>
                    </div>
                  </div>
                  <div class="media no-border">
                    <div class="media-left">
                      <a href="#"><img class="media-object" src="assets/images/avatar/2.jpg" alt="..."></a>
                    </div>
                    <div class="media-body">
                      <h5 class="media-heading">Ishrat Jahan</h5>
                      <div class="meaasge-date">40 minutes ago</div>
                      <p>Quick service and good serve </p>
                    </div>
                  </div>
                </div>
              </div><!-- /# card -->
            </div><!-- /# column -->
            <div class="col-lg-4">
                            <div class="card alert">
                                <div class="card-header">
                                    <h4>Timeline</h4>
                                    <div class="card-header-right-icon">
                                        <ul>
                                            <li class="card-close" data-dismiss="alert"><i class="ti-close"></i></li>
                                            <li class="doc-link"><a href="#"><i class="ti-link"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <ul class="timeline">
                                        <li>
                                            <div class="timeline-badge primary"><i class="fa fa-smile-o"></i></div>
                                            <div class="timeline-panel">
                                                <div class="timeline-heading">
                                                    <h5 class="timeline-title">You deleted homepage.psd</h5>
                                                </div>
                                                <div class="timeline-body">
                                                    <p>10 minutes ago</p>
                                                </div>
                                            </div>
                                        </li>

                                        <li>
                                            <div class="timeline-badge warning"><i class="fa fa-sun-o"></i></div>
                                            <div class="timeline-panel">
                                                <div class="timeline-heading">
                                                    <h5 class="timeline-title">You change your profile picture</h5>
                                                </div>
                                                <div class="timeline-body">
                                                    <p>20 minutes ago</p>
                                                </div>
                                            </div>
                                        </li>

                                        <li>
                                            <div class="timeline-badge danger"><i class="fa fa-times-circle-o"></i></div>
                                            <div class="timeline-panel">
                                                <div class="timeline-heading">
                                                    <h5 class="timeline-title">You followed john doe</h5>
                                                </div>
                                                <div class="timeline-body">
                                                    <p>30 minutes ago</p>
                                                </div>
                                            </div>
                                        </li>

                                        <li>
                                            <div class="timeline-badge success"><i class="fa fa-check-circle-o"></i></div>
                                            <div class="timeline-panel">
                                                <div class="timeline-heading">
                                                    <h5 class="timeline-title">Some new content has been added. </h5>
                                                </div>
                                                <div class="timeline-body">
                                                    <p>15 minutes ago</p>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <!-- /# card -->
                        </div>
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
  <!--  Chart js -->
  <script src="assets/js/lib/chart-js/Chart.bundle.js"></script>
  <script src="assets/js/lib/chart-js/chartjs-init.js"></script>
  <!-- // Chart js -->
  
  <!--  Datamap -->
    <script src="assets/js/lib/datamap/d3.min.js"></script>
    <script src="assets/js/lib/datamap/topojson.js"></script>
    <script src="assets/js/lib/datamap/datamaps.world.min.js"></script>
    <script src="assets/js/lib/datamap/datamap-init.js"></script>
  <!-- // Datamap -->-->
    <script src="assets/js/lib/weather/jquery.simpleWeather.min.js"></script> 
    <script src="assets/js/lib/weather/weather-init.js"></script>
    <script src="assets/js/lib/owl-carousel/owl.carousel.min.js"></script>
    <script src="assets/js/lib/owl-carousel/owl.carousel-init.js"></script>
    <script src="assets/js/scripts.js"></script><!-- scripit init-->
</body>


<!-- Mirrored from zebratheme.com/html/fooadmin/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 17 Feb 2019 15:03:45 GMT -->
</html>









