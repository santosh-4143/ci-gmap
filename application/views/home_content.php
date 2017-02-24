<?php //print_r($place);die; ?>
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>Purba Medinipur</title>
        <!-- Bootstrap Core CSS -->
        <link href="<?php echo base_url(); ?>css/bootstrap.min.css" rel="stylesheet"/>
        <!--font-style-->
        <link rel="stylesheet" href="<?php echo base_url(); ?>fonts/font_style.css" type="text/css">
        <!--font-aswome-->
        <link rel="stylesheet" href="<?php echo base_url(); ?>css/font-awesome.min.css" type="text/css">
        <!-- SmartMenus jQuery Bootstrap Addon CSS -->
        <link href="<?php echo base_url(); ?>css/jquery_smartmenus_bootstrap.css" rel="stylesheet">
        <!--date pcker-->
        <link rel="stylesheet" href="<?php echo base_url(); ?>css/datepicker3.css">    
        <!-- Custom CSS -->
        <link href="<?php echo base_url(); ?>css/style.css" rel="stylesheet"/>
        <!--responsive css-->
        <link rel="stylesheet" href="<?php echo base_url(); ?>css/style_responsive.css" type="text/css"/>

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="<?php echo base_url(); ?>https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="<?php echo base_url(); ?>https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>

        <!--top header section-->
        <div class="topheader_wrapper">
            <div class="container">
                <div class="col-lg-9 col-sm-9">
                    <div class="top_left">
                        <ul>
                            <li><i class="fa fa-map-marker" aria-hidden="true"></i>91, Gruuss-Strooss  | L-9991</li>
                            <li><i class="fa fa-phone" aria-hidden="true"></i>(+352) 24 51 49 45</li>
                        </ul> 
                    </div>
                </div>
                <div class="col-lg-3 col-sm-3">
                    <div class="top_right">
                        <ul>
                            <li><a href="<?php echo base_url(); ?>#">Login</a></li>
                            <li>|</li>
                            <li><a href="<?php echo base_url(); ?>#">Signup</a></li>
                        </ul>
                    </div>
                </div>	    
                <div class="clearfix"></div>
            </div>
        </div>

        <!--header section-->
        <div class="header_wrapper" data-spy="affix" data-offset-top="60">
            <div class="container">
                <div class="col-lg-3 col-sm-3">
                    <div class="logo">
                        <a href="<?php echo base_url(); ?>"><img src="<?php echo base_url(); ?>images/icon/logo.png" alt="logo" class="img-responsive"></a>
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>
                </div>
                <div class="col-lg-9 col-sm-9">
                    <div class="main_nav">
                        <div class="navbar-collapse collapse">
                            <!-- nav -->   
                            <ul class="nav navbar-nav">
                                <li class="active"><a href="<?php echo base_url(); ?>">Home</a></li>                                                                                                                                                  
                                <li><a href="<?php echo base_url(); ?>">About</a></li>
                                <li><a href="<?php echo base_url(); ?>">Service</a></li>
                                <li><a href="<?php echo base_url(); ?>">Event<span class="caret"></span></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="<?php echo base_url(); ?>#">submenu_1</a></li>
                                        <li><a href="<?php echo base_url(); ?>#">submenu_2</a></li>
                                        <li><a href="<?php echo base_url(); ?>#">submenu_3</a></li>
                                        <li><a href="<?php echo base_url(); ?>#">sub menu_4 <span class="caret"></span></a>
                                            <ul class="dropdown-menu">
                                                <li><a href="<?php echo base_url(); ?>#">submenu_4.1</a></li>
                                                <li><a href="<?php echo base_url(); ?>#">submenu_4.2</a></li>
                                                <li><a href="<?php echo base_url(); ?>#">submenu_4.3</a></li>
                                                <li><a href="<?php echo base_url(); ?>#">submenu_4.4</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="<?php echo base_url(); ?>#">submenu_5</a></li>
                                    </ul>
                                </li>
                                <li><a href="<?php echo base_url(); ?>">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>

        <!--banner section-->
        <div class="banner_wrapper">
            <div class="">
                <div class="banner_wrap">
                    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                        <!-- Indicators -->
                        <!--<ol class="carousel-indicators">
                                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                        </ol> --> 
                        <!-- Wrapper for slides -->
                        <div class="carousel-inner" role="listbox">
                            <div class="item active">
                                <img src="<?php echo base_url(); ?>images/banner/slider1.jpg" alt="banner" class="img-responsive">
                                <div class="carousel-caption">
                                    <div class="search_wrapper">
                                        <div class="search_wrap">
                                            <ul class="nav nav-pills">
                                                <li class="active"><a data-toggle="pill" href="<?php echo base_url(); ?>#tab1"><i class="fa fa-bus" aria-hidden="true"></i>Bus</a></li>
                                                <li><a data-toggle="pill" href="<?php echo base_url(); ?>#tab2"><i class="fa fa-bus" aria-hidden="true"></i>Mini Bus</a></li>
                                                <li><a data-toggle="pill" href="<?php echo base_url(); ?>#tab3"><i class="fa fa-car" aria-hidden="true"></i>Cab</a></li>
                                                <li><a data-toggle="pill" href="<?php echo base_url(); ?>#tab4"><i class="fa fa-taxi" aria-hidden="true"></i>Taxi</a></li>
                                            </ul>
                                            <div class="tab-content">
                                                <div id="tab1" class="tab-pane fade in active">
                                                    
                                                    <?php
                                                    if($this->session->flashdata('message')){
                                                        echo $this->session->flashdata('message');
                                                    }
                                                    ?>
                                                    
                                                    <h6>Online Bus Tickets Booking</h6>
                                                    <div class="form_wrap">
                                                        <form action="/home/search"  method="post">
                                                            <div class="form-group f2">
                                                                <!--                                                                <label for="exampleInputEmail1">From</label>-->
                                                                        <!--                                                        <input type="text" class="form-control" id="" placeholder="Source">-->
                                                                <select class="form-control" name="source" id="source" >

                                                                    <option value="">From</option>
                                                                    <?php
                                                                    if (!empty($place)) {
                                                                        foreach ($place as $str) {
                                                                            ?>
                                                                            <option value="<?php echo $str['id']; ?>"><?php echo $str['place_name']; ?></option>
                                                                            <?php
                                                                        }
                                                                    }
                                                                    ?>
                                                                </select>       

                                                            </div>
                                                            <!--                                                            <div class="form-group f2">
                                                                                                                            <label for="exampleInputEmail1">To</label>
                                                                                                                            <input type="text" class="form-control" id="" placeholder="Destination">
                                                                                                                        </div>-->
                                                             <div class="form-group f2">
                                                            <select class="form-control" name="destination" id="destination">

                                                                <option value="">To</option>
                                                                <?php
                                                                if (!empty($place)) {
                                                                    foreach ($place as $str) {
                                                                        ?>
                                                                        <option value="<?php echo $str['id'];  ?>"><?php echo $str['place_name']; ?></option>
                                                                        <?php
                                                                    }
                                                                }
                                                                ?>
                                                            </select>  
                                                             </div>
                                                            <div class="form-group f2">
                                                                <label for="date">Departure Date</label>
                                                                <div class='input-group date' id='datepicker'>
                                                                    <input type='text' class="form-control" name="date" />
                                                                    <span class="input-group-addon">
                                                                        <span class="glyphicon glyphicon-calendar"></span>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                            <div class="clearfix"></div>
                                                            <input type="submit" name="search" value="search" class="btn btn-default"/>
                                                        </form>		
                                                    </div>
                                                    <div class="clearfix"></div>
                                                </div>
                                                <div id="tab2" class="tab-pane fade">
                                                    <h6>Heading</h6>
                                                    <p>UnderConstruction</p>
                                                </div>
                                                <div id="tab3" class="tab-pane fade">
                                                    <h6>Heading</h6>
                                                    <p>UnderConstruction</p>
                                                </div>
                                                <div id="tab4" class="tab-pane fade">
                                                    <h6>Heading</h6>
                                                    <p>UnderConstruction</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>	      	  	
                                </div>
                            </div>

                        </div>

                        <!-- Controls -->
                        <!--<a class="left carousel-control" href="<?php echo base_url(); ?>#carousel-example-generic" role="button" data-slide="prev">
                        <span class="banner_left_arrow" aria-hidden="true">
                          <img src="<?php echo base_url(); ?>images/icon/carousel_left.png" alt="left-arrow" class="img-responsive">
                        </span>
                        <span class="sr-only">Previous</span>
                        </a>
                        <a class="right carousel-control" href="<?php echo base_url(); ?>#carousel-example-generic" role="button" data-slide="next">
                        <span class="banner_right_arrow" aria-hidden="true">
                          <img src="<?php echo base_url(); ?>images/icon/carousel_right.png" alt="right-arrow" class="img-responsive">
                        </span>
                        <span class="sr-only">Next</span>
                        </a>-->
                    </div>
                </div>
            </div>
        </div> 

<!--        search-tab section-->
        <div class="search_tab_wrapper">
            <div class="container">
                <div class="search_tab_wrap">
                    <ul class="nav nav-pills">
                        <li class="active"><a data-toggle="pill" href="<?php echo base_url(); ?>#tab1"><i class="fa fa-bus" aria-hidden="true"></i>Bus</a></li>
                        <li><a data-toggle="pill" href="<?php echo base_url(); ?>#tab2"><i class="fa fa-bus" aria-hidden="true"></i>Mini Bus</a></li>
                        <li><a data-toggle="pill" href="<?php echo base_url(); ?>#tab3"><i class="fa fa-car" aria-hidden="true"></i>Cab</a></li>
                        <li><a data-toggle="pill" href="<?php echo base_url(); ?>#tab4"><i class="fa fa-taxi" aria-hidden="true"></i>Taxi</a></li>
                    </ul>
                    <div class="tab-content">
                        <div id="tab1" class="tab-pane fade in active">
                            <h6>Online Bus Tickets Booking</h6>
                            <div class="form_wrap">
                                <form action="/home/search"  method="post">
                                                            <div class="form-group f2">
                                                                <!--                                                                <label for="exampleInputEmail1">From</label>-->
                                                                        <!--                                                        <input type="text" class="form-control" id="" placeholder="Source">-->
                                                                <select class="form-control" name="source" id="source" >

                                                                    <option value="">From</option>
                                                                    <?php
                                                                    if (!empty($place)) {
                                                                        foreach ($place as $str) {
                                                                            ?>
                                                                            <option value="<?php echo $str['id']; ?>"><?php echo $str['place_name']; ?></option>
                                                                            <?php
                                                                        }
                                                                    }
                                                                    ?>
                                                                </select>       

                                                            </div>
                                                            <!--                                                            <div class="form-group f2">
                                                                                                                            <label for="exampleInputEmail1">To</label>
                                                                                                                            <input type="text" class="form-control" id="" placeholder="Destination">
                                                                                                                        </div>-->
                                                             <div class="form-group f2">
                                                            <select class="form-control" name="destination" id="destination">

                                                                <option value="">To</option>
                                                                <?php
                                                                if (!empty($place)) {
                                                                    foreach ($place as $str) {
                                                                        ?>
                                                                        <option value="<?php echo $str['id'];  ?>"><?php echo $str['place_name']; ?></option>
                                                                        <?php
                                                                    }
                                                                }
                                                                ?>
                                                            </select>  
                                                             </div>
                                                            <div class="form-group f2">
                                                                <label for="date">Departure Date</label>
                                                                <div class='input-group date' id='datepicker'>
                                                                    <input type='text' class="form-control" name="date" />
                                                                    <span class="input-group-addon">
                                                                        <span class="glyphicon glyphicon-calendar"></span>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                            <div class="clearfix"></div>
                                                            <input type="submit" name="search" value="search" class="btn btn-default"/>
                                                        </form>		
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div id="tab2" class="tab-pane fade">
                            <h6>Heading</h6>
                            <p>UnderConstruction</p>
                        </div>
                        <div id="tab3" class="tab-pane fade">
                            <h6>Heading</h6>
                            <p>UnderConstruction</p>
                        </div>
                        <div id="tab4" class="tab-pane fade">
                            <h6>Heading</h6>
                            <p>UnderConstruction</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>





        <!--footer section-->
        <div class="footer_wrapper">
            <div class="container">
                <div class="col-lg-6 col-sm-6">
                    <div class="footer_box">
                        <ul>
                            <li><a href="<?php echo base_url(); ?>#">Privacy Policy</a></li>
                            <li><a href="<?php echo base_url(); ?>#">Term & condition</a></li>
                            <li><a href="<?php echo base_url(); ?>#"> Feedback</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6 col-sm-6">
                    <div class="footer_box">
                        <p>Designed by <a href="<?php echo base_url(); ?>https://www.nisbusiness.com/">www.nisbusiness.com</a></p>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>

        <!-- jQuery -->
        <script src="<?php echo base_url(); ?>js/jquery-1.9.1.min.js"></script>
        <!-- Bootstrap Core JavaScript -->
        <script src="<?php echo base_url(); ?>js/bootstrap.min.js"></script>
        <!-- SmartMenus jQuery plugin -->
        <script type="text/javascript" src="<?php echo base_url(); ?>js/jquery_smartmenus.js"></script>
        <!-- SmartMenus jQuery Bootstrap Addon -->
        <script type="text/javascript" src="<?php echo base_url(); ?>js/jquery_smartmenus_bootstrap.js"></script>
        <!--date picker-->
        <script src="<?php echo base_url(); ?>js/bootstrap-datepicker.js" ></script>
        <script>
            $('#datepicker').datepicker({
                format: "dd-mm-yyyy"
            });
            $('#datepicker2').datepicker({
                format: "dd-mm-yyyy"
            });
        </script>
        <!--scroll to top-->
        <script src="<?php echo base_url(); ?>js/scroll_to_top.js"></script> 
        <!--custom js-->
        <script src="<?php echo base_url(); ?>js/custom.js" type="text/javascript"></script>

        
<!--        <script type="text/javascript">
        $(document).ready(function(){
            
            if($('#source').val()==""){
                alert("Please select source");
                return false;
            }else if($('#destination').val()==""){
                alert("Please select destination");
                return false;
            }else{
                return true;
            }
        });
        </script>-->
    </body>
</html>
