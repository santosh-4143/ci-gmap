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
    <link href="<?php echo base_url();?>css/bootstrap.min.css" rel="stylesheet"/>
    <!--font-style-->
    <link rel="stylesheet" href="<?php echo base_url();?>fonts/font_style.css" type="text/css">
    <!--font-aswome-->
    <link rel="stylesheet" href="<?php echo base_url();?>css/font-awesome.min.css" type="text/css">
    <!-- SmartMenus jQuery Bootstrap Addon CSS -->
	<link href="<?php echo base_url();?>css/jquery_smartmenus_bootstrap.css" rel="stylesheet">
    <!--date pcker-->
    <link rel="stylesheet" href="<?php echo base_url();?>css/datepicker3.css">    
    <!-- Custom CSS -->
    <link href="<?php echo base_url();?>css/style.css" rel="stylesheet"/>
    <!--responsive css-->
    <link rel="stylesheet" href="<?php echo base_url();?>css/style_responsive.css" type="text/css"/>
    
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
    
     <?php echo $footer ;?>
    <?php echo $content ;?>
    <?php echo $footer ;?>
    
    
    
    
    	<!-- jQuery -->
    <script src="js/jquery-1.9.1.min.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
    <!-- SmartMenus jQuery plugin -->
	<script type="text/javascript" src="js/jquery_smartmenus.js"></script>
    <!-- SmartMenus jQuery Bootstrap Addon -->
	<script type="text/javascript" src="js/jquery_smartmenus_bootstrap.js"></script>
    <!--date picker-->
    <script src="js/bootstrap-datepicker.js" ></script>
    <script>
    $('#datepicker').datepicker({
         format: "dd-mm-yyyy"
    });
	$('#datepicker2').datepicker({
         format: "dd-mm-yyyy"
    });
    </script>
   	<!--scroll to top-->
	<script src="js/scroll_to_top.js"></script> 
    <!--custom js-->
    <script src="js/custom.js" type="text/javascript"></script>

</body>
</html>
