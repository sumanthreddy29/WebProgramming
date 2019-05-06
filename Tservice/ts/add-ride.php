<?php 
    require('service.php'); 
    session_start();
    $username = $_SESSION['username'];  
    $email = $_SESSION['email'];
    $message = "";
    if(isset($_POST['addRide'])){
        $source =  $_POST['source'];
        $destination = $_POST['destination'];
        $date =  $_POST['event'];
        $time =  $_POST['time'];
        $seats = $_POST['seats'];
        $username = $_POST['username'];
        $email = $_POST['email'];
        
        $query = "INSERT INTO rides (riderName,emailid,source,destination,travelDate,travelTime,seats) VALUES ('$username','$email','$source','$destination','$date','$time','$seats')";
        $data = mysqli_query($conn,$query) or die(mysqli_error($conn));
        if($data){
            $message = 'Ride Details Added';
        }
    }
?>
<!DOCTYPE html>
<!--[if IE 7]>                  <html class="ie7 no-js" lang="en">     <![endif]-->
<!--[if lte IE 8]>              <html class="ie8 no-js" lang="en">     <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--> <html class="not-ie no-js" lang="en">  <!--<![endif]-->
    <head>

        <!-- Basic Page Needs -->
        <meta charset="utf-8">
        <title>T Service</title>
        <meta name="description" content="">
        <meta name="author" content="">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <!-- Mobile Specific Metas -->
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- Styles -->

        <!-- Bootstrap -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <!-- Forms -->
        <link href="css/jquery.idealforms.css" rel="stylesheet">
        <!-- Select  -->
        <link href="css/jquery.idealselect.css" rel="stylesheet">
        <!-- Slicknav  -->
        <link href="css/slicknav.css" rel="stylesheet">
        <!-- Main style -->
        <link href="css/style.css" rel="stylesheet">

        <!-- Modernizr -->
        <script src="js/modernizr.js"></script>

        <!-- Fonts -->
        <link href="css/font-awesome.min.css" rel="stylesheet">
        <link href='http://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'>

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

    </head>

    <body>

        <header class="header">

            <div class="top-menu">

                <section class="container">
                    <div class="row">

                        <div class="col-md-4 col-sm-4 col-xs-12">
                            <div class="user-log">
                                <a href="rides.php"><?php echo $username ?></a>/
                                <a href="index.html">Log out</a>
                            </div><!-- end .user-log -->
                        </div><!-- end .col-sm-4 -->

                    </div><!-- end .row -->
                </section><!-- end .container -->

            </div><!-- end .top-menu -->

            <div class="main-baner">

                <div class="background parallax clearfix" style="background-image:url('img/tumblr_n7yhhvUQtx1st5lhmo1_1280.jpg');" data-img-width="1600" data-img-height="1064">

                    <div class="main-parallax-content">

                        <div class="second-parallax-content">

                            <section class="container">

                                <div class="row">

                                    <div class="main-header-container clearfix">

                                        <div class="col-md-4 col-sm-12 col-xs-12">

                                            <div class="logo">
                                                <h1>T Service</h1>
                                            </div><!-- end .logo -->

                                        </div><!-- end .col-sm-4 -->

                                        <div class="col-md-8 col-sm-8 col-xs-12">

                                            <nav id="nav" class="main-navigation">

                                                <ul class="navigation">
                                                    <li>
                                                        <a href="rides.php">Rides</a>
                                                    </li>
                                                    <li>
                                                        <a href="add-ride.php">Add Rides</a>
                                                    </li>
                                                     <li>
                                                        <a href="couriers.php">Couriers</a>
                                                    </li>
                                                    <li>
                                                        <a href="add_courier.php">Add Couriers</a>
                                                    </li>
                                                </ul>

                                            </nav><!-- end .main-navigation -->

                                        </div><!-- end .col-md-8 -->

                                    </div><!-- end .main-header-container -->


                                </div><!-- end .row -->

                            </section><!-- end .container -->

                        </div><!-- end .second-parallax-content -->

                    </div><!-- end .main-parallax-content -->

                </div><!-- end .background .parallax -->

            </div><!-- end .main-baner -->

        </header><!-- end .header -->

        <section class="main-content">

            <div class="container">
                <div class="row">

                    <div class="col-sm-12 col-md-12 col-xs-12">

                        <div class="page-sub-title textcenter">
                            <h2>Add new ride</h2>
                            <div class="line"></div>
                        </div><!-- end .page-sub-title -->

                    </div><!-- end .col-lg-12 -->
                    <?php if($message != ''){echo $message;} ?>
                    <div class="col-sm-12 col-md-12 col-xs-12">

                        <div class="page-content add-new-ride">

                            <form action="#" method="post" novalidate autocomplete="off" class="idealforms add-ride">

                                <div class="field">
                                  <select id="destination" name="source">
                                    <option value="default">From</option>
                                    <option value="Charlotte">Charlotte</option>
                                    <option value="Virginia">Virginia</option>
                                    <option value="Florida">Florida</option>
                                    <option value="New York">New York</option>
                                    <option value="Texas">Texas</option>
                                    <option value="Atlanta">Atlanta</option>
                                  </select>
                                </div>

                                <div class="field">
                                    <select id="destination" name="destination">
                                        <option value="default">To</option>
                                        <option value="Charlotte">Charlotte</option>
                                        <option value="Virginia">Virginia</option>
                                        <option value="Florida">Florida</option>
                                        <option value="New York">New York</option>
                                        <option value="Texas">Texas</option>
                                        <option value="Atlanta">Atlanta</option>
                                    </select>
                                </div>

                                <div class="field">
                                    <input name="event" type="text" placeholder="Date" class="datepicker">
                                </div>

                                <div class="field">
                                    <input name="time" type="text" placeholder="Time">
                                </div>

                                <div class="field">
                                    <select id="destination" name="seats">
                                        <option value="default">Number of seats</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                    </select>
                                </div>
                                <input name="username" type="hidden" value="<?php echo $username;?>">
                                <input name="email" type="hidden" value="<?php echo $email; ?>">

                                <div class="field buttons">
                                    <button type="submit" name="addRide" class="btn btn-lg green-color">Submit</button>
                                </div>

                            </form>

                        </div><!-- end .page-content -->

                    </div><!-- end .col-sm-12 -->

                </div><!-- end .row -->
            </div><!-- end .container -->

        </section><!-- end .main-content -->

        <footer id="footer">

            <div class="footer-copyright">

                <div class="container">
                    <div class="row">

                        <div class="col-md-12 col-sm-12 col-xs-12">
                            Copyright by T Service
                        </div>

                    </div><!-- end .row -->
                </div><!-- end .container -->

            </div><!-- end .footer-copyright -->

        </footer><!-- end #footer -->
        <!-- Javascript -->
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <!-- Bootstrap -->
        <script type="text/javascript" src="js/bootstrap.min.js"></script>
        <!-- Main jQuery -->
        <script type="text/javascript" src="js/jquery.main.js"></script>
        <!-- Form -->
        <script type="text/javascript" src="js/jquery.idealforms.min.js"></script>
        <script type="text/javascript" src="js/jquery.idealselect.min.js"></script>
        <script type="text/javascript" src="js/jquery-ui-1.10.4.custom.min.js"></script>
        <!-- Menu -->
        <script type="text/javascript" src="js/hoverIntent.js"></script>
        <script type="text/javascript" src="js/superfish.js"></script>
        <!-- Counter-Up  -->
        <script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"></script>
        <script type="text/javascript" src="js/jquery.counterup.min.js"></script>
        <!-- Rating  -->
        <script type="text/javascript" src="js/bootstrap-rating-input.min.js"></script>
        <!-- Slicknav  -->
        <script type="text/javascript" src="js/jquery.slicknav.min.js"></script>

    </body>
</html>
