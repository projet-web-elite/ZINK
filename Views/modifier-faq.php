<?php

include "../config.php";
$db=config::getConnexion();

if (isset($_GET['edit']))
{
$id = $_GET['edit'];
if (isset($_POST['question'])||isset($_POST['reponse'])||(isset($_POST['question'])&&isset($_POST['reponse'])))
{
    
    $emps=$db->query("SELECT * FROM  faq WHERE id='$id'");
           while ($row = $emps->fetch())
            {
            
            $question = $_POST['question'];
            $reponse =$_POST['reponse'];

 $abcd=$db->prepare("UPDATE  faq SET question=:question,reponse=:reponse WHERE id='$id' ");
 $abcd->bindValue(":question",$question);
 $abcd->bindValue(":reponse",$reponse);
 $abcd->execute();
    
}
        }
        }

?>



<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="en">
<!--<![endiff]-->

 <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Foodmin : Client</title>
    
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
    <link href="assets/css/lib/datatable/buttons.bootstrap.min" rel="stylesheet">
    <link href="assets/css/lib/datatable/dataTables.bootstrap.min" rel="stylesheet">


    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>
</head>

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
                                    <li><a href="#">App </a></li>
                                    <li class="active">Calendar</li>
                                </ol>
                            </div>
                        </div>
                    </div><!-- /# column -->
                </div><!-- /# row -->
                <div class="main-content">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card alert">
                                <div class="card-header">
                                    <h4></h4>
                                </div>
                                <div class="card-body">
                                    <div class="row">










<form action="modifier-faq.php?edit=<?php echo $id; ?>" method="POST" name="faqf" class="form-horizontal">
                                                <div class="row form-group">
                                                                <div class="col col-md-3"><label for="password-input" class=" form-control-label">Question </label></div>
                                                                <div class="col-12 col-md-9"><textarea id="question" name="question" rows="5" cols="40"></textarea> </div>
                                                            </div>
                                                            <div class="row form-group">
                                                                <div class="col col-md-3"><label for="password-input" class=" form-control-label">Réponse </label></div>
                                                                <div class="col-12 col-md-9"><textarea id="reponse" name="reponse" rows="5" cols="40"></textarea> </div>
                                                            </div>
																
                                                        <button type="submit" class="btn btn-primary btn-sm">
                                                            <i class="fa fa-dot-circle-o"></i> Submit
                                                        </button>
                                                        <button type="reset" class="btn btn-danger btn-sm">
                                                            <i class="fa fa-ban"></i> Reset
                                                        </button>
                                                        </form>
   				                                                                                      
</body>


<script src="assets/js/lib/jquery.min.js"></script><!-- jquery vendor -->
    <script src="assets/js/lib/jquery.nanoscroller.min.js"></script><!-- nano scroller -->
    <script src="assets/js/lib/sidebar.js"></script><!-- sidebar -->
    <script src="assets/js/lib/bootstrap.min.js"></script><!-- bootstrap -->
    <script src="assets/js/lib/mmc-common.js"></script>
    <script src="assets/js/lib/mmc-chat.js"></script>
    
    <script src="assets/js/lib/jquery-ui/jquery-ui.min.js"></script>
    <script src="assets/js/lib/moment/moment.js"></script>
    <script src="assets/js/lib/calendar/fullcalendar.min.js"></script>
    <script src="assets/js/lib/calendar/fullcalendar-init.js"></script>

</html>