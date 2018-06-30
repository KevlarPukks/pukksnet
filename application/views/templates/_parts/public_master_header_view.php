<?php defined('BASEPATH') OR exit('No direct script access allowed');?>
<!DOCTYPE html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<title><?php echo $page_title;?></title>
	<meta name="description" value="<?php echo $page_description;?>" />
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>

   
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <!-- Bootstrap core CSS -->
        <link href="<?= base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet">
        <!-- Material Design Bootstrap -->
        <link href="<?= base_url(); ?>assets/css/mdb.min.css" rel="stylesheet">
        <!-- Your custom styles (optional) -->
        <link href="<?= base_url(); ?>assets/css/style.min.css" rel="stylesheet">
        <link href="<?= base_url(); ?>assets/css/compiled.min.css" rel="stylesheet">



    <?php echo $before_closing_head;?>
</head>
<body>
<?php $this->load->view('templates/_parts/main_navbar');?>