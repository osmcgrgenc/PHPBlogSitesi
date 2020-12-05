<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<!DOCTYPE html>
<html lang="en" data-safeMod="false" data-autoHideScrollbar="true" data-safeModPageInAnimation="fadeIn"
    data-inAnimation="fadeInUp" data-outAnimation="fadeOutDownBig" data-cover-h1-tune=".85" data-cover-h2-tune="2.3"
    data-cover-h3-tune=".6" data-cover-h3-span-tune=".8" data-twitter-name="pixelwarsdesign">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo $title; ?> - <?php echo html_escape($settings->site_title); ?></title>

    <meta name="description" content="<?php echo html_escape($description); ?>">
    <meta name="keywords" content="<?php echo html_escape($settings->site_keywords); ?>"/>
    <meta name="author" content="Codingest">
    <meta name="robots" content="all"/>
    <meta name="revisit-after" content="1 Days"/>

    <!-- FAV and TOUCH ICONS -->
    <?php if (empty($settings->favicon_path)): ?>
        <link rel="shortcut icon" type="image/png" href="<?php echo base_url(); ?>assets/img/favicon.png"/>
        <link rel="apple-touch-icon" href="<?php echo base_url(); ?>assets/img/favicon.png" />
    <?php else: ?>
        <link rel="shortcut icon" type="image/png" href="<?php echo base_url() . html_escape($settings->favicon_path); ?>"/>
        <link rel="apple-touch-icon" href="<?php echo base_url() . html_escape($settings->favicon_path); ?>" />
    <?php endif; ?>
    <!-- Template Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,400i,500,500i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,400i,600,600i,700" rel="stylesheet">

    <!-- Template CSS Files -->
    <link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/css/preloader.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/css/circle.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/css/font-awesome.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/css/fm.revealator.jquery.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/css/stylePersonal.css" rel="stylesheet">

    <!-- CSS Skin File -->
    <link href="<?php echo base_url(); ?>assets/css/skins/yellow.css" rel="stylesheet">



    <!-- Modernizr JS File -->
    <script src="<?php echo base_url(); ?>assets/js/jsPersonal/modernizr.custom.js"></script>
    <?php echo $settings->google_analytics; ?>
    <script>
        var csfr_token_name = '<?php echo $this->security->get_csrf_token_name(); ?>';
        var csfr_cookie_name = '<?php echo $this->config->item('csrf_cookie_name'); ?>';
        var csfr_token = '<?php echo $this->security->get_csrf_hash(); ?>';
    </script>
</head>





