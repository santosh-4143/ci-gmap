<?php //print_r($name);die;?>
<!DOCTYPE html>
<html lang="en">

    <head>
        <?php echo $map['js']; ?>
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

        <!--table section-->
        <div class="table_wrapper">
            <div class="container">
                <div class="table_wrap">
                    <div class="table_head">
                        <h1> <?php echo $name[0]['place_name']?> To <?php echo $name[1]['place_name']?></h1>
                        <p>Its simple and easy! Whats more, avail exclusive discounts <span class="Modify"><a  href="javascript:void(0);" id="modify">Modify</a></span></p>
                        <div class="modify_wrap">
                            <form action=""  method="post">
                                <div class="form-group">
                                    <select class="form-control" name="source">

<!--                                        <option for="exampleInputEmail1"><?php //echo $source;  ?></option>-->
                                        <?php
                                        if (!empty($place)) {
                                            foreach ($place as $str) {
                                                ?>
                                                <option value="<?php echo $str['id'] ?>" <?php echo ($str['id'] == $source) ? 'selected="selected"' : ''; ?>><?php echo $str['place_name']; ?></option>
                                                <?php
                                            }
                                        }
                                        ?>
                                    </select> 
                                </div>


                                <div class="form-group">
                                    <select class="form-control" name="destination">


                                        <?php
                                        if (!empty($place)) {
                                            foreach ($place as $str) {
                                                ?>
                                                <option value="<?php echo $str['id'] ?>" <?php echo ($str['id'] == $destination) ? 'selected="selected"' : ''; ?>><?php echo $str['place_name']; ?></option>
                                                <?php
                                            }
                                        }
                                        ?>
                                    </select> 
                                </div>
                                <div class="form-group">
                                    <label for="date" class="sr-only">Departure Date</label>
                                    <div class='input-group date' id='datepicker'>
                                        <input type='text' class="form-control" value="<?php echo $date; ?>" />
                                        <span class="input-group-addon">
                                            <span class="glyphicon glyphicon-calendar"></span>
                                        </span>
                                    </div>
                                </div>
                                <input type="submit" name="search" value="search" class="btn btn-default"/>
                            </form>
                        </div>
                    </div>
                    <div class="table_box table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>Bus name</th>
                                    <th>Bus Type</th>
                                    <th>Departure</th>
                                    <th>Travel time</th>
                                    <th>Arrival</th>
                                    <th>Capacity</th>
                                    <th>Price</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                if (!empty($bus)) {

                                    foreach ($bus as $key => $value) {
                                        ?>

                                        <tr>
                                            <td><?php echo $value['bus_name']; ?><br><a href="<?php echo base_url(); ?>javascript:void();" data-toggle="modal" data-target="#myModal<?php echo $key; ?>"><?php echo $value['bus_no']; ?></a></td>
                                            <td><?php echo $value['bus_type'] ?></td>
                                            <?php $depar = strtotime($value['departure']) ?>
                                            <td class="bold"><?php echo date("g:i A", $depar); ?></td>
                                            <td><?php echo $value['total_time'] . "hour" ?></td>
                                            <?php $arr = strtotime($value['arrival']) ?>
                                            <td class="bold"><?php echo date("g:i A", $arr); ?></td>
                                            <td><span class="badge"><?php echo $value['seat'] . " seats" ?></span></td>
                                            <td class="price"><?php echo "Rs. " . $value['price'] ?></td>
                                        </tr>
                                        


                                        <?php
                                    }
                                }
                                ?>


                            </tbody>
                            <tfoot>
                                 <?php echo $map['html']; ?>
                                                <div id="directionsDiv"></div>
                            </tfoot>
                        </table>
                    </div>
                    <!-- Modal -->
                    <?php foreach ($bus as $key => $backup) { ?>
                        <div class="modal fade" id="myModal<?php echo $key; ?>" role="dialog">
                            <div class="modal-dialog">

                                <!-- Modal content-->
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        <h4 class="modal-title"><?php echo $backup['bus_name']; ?></h4>
                                        <p>It is a short desccription of bus owner and the map </p>
                                    </div>
                                    <div class="modal-body">
                                        <div class="table_modal table-responsive">
                                            <table class="table table-hover">
                                                <thead>
                                                    <tr>
                                                        <th>Owner Name</th>
                                                        <th>Owner Phone</th>
                                                        <th>Owner Address</th>
                                                        <th>Permit No.</th>
                                                        <th>Permit Type</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td><?php echo $backup['bus_owner_name'] ?></td>
                                                        <td class="bold"><?php echo $backup['owner_phone']; ?></td>
                                                        <td><?php echo $backup['owner_address']; ?></td>
                                                        <td><?php echo $backup['permit_no']; ?></td>
                                                        <td><?php echo $backup['permit_type']; ?></td>
                                                    </tr>
                                                  

      <!--<tfoot>
          <tr>
              <th colspan="2">Total</th>
              <th>30.5km</th>
              <th>$446.00</th>
          </tr>
      </tfoot>-->
                                                </tbody>
                                              
                                            </table>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <!--<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>-->
                                    </div>
                                </div>

                            </div>
                        </div>
                    <?php } ?>

                    <!-- /.table-responsive -->
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>

        <!--map section-->
        <!--<div class="map_wrapper">
            <div class="container">
                    <h3>Map route</h3>
                    <div class="map_wrap">
                        <div class="frame_wrap">
                            <iframe src="<?php echo base_url(); ?>https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3686.2525547279442!2d88.31054631443266!3d22.49470564149543!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a027a12f5cde13f%3A0x3f5e87855aeca44!2sMaps+hair+saloon!5e0!3m2!1sen!2sin!4v1467881503037" class="frame" allowfullscreen></iframe>
                        </div>
                    </div>
                <div class="clearfix"></div>
            </div>
        </div>-->

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
            $(document).ready(function () {

                $('#modify').click(function () {
                    $('.modify_wrap').slideToggle('slow');
                });
            });
        </script>
        <!--scroll to top-->
        <script src="<?php echo base_url(); ?>js/scroll_to_top.js"></script> 
        <!--custom js-->
        <script src="<?php echo base_url(); ?>js/custom.js" type="text/javascript"></script>

    </body>
</html>
