<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="./assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="./assets/img/favicon.png">
  <title>
    Freelancer
  </title>
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
  <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
  <!-- Nucleo Icons -->
  <link href="<?php echo base_url('assets/front/css/nucleo-icons.css')?>" rel="stylesheet"/>
  <link href="<?php echo base_url('assets/front/css/nucleo-svg.css')?>" rel="stylesheet"/>
  <!-- Font Awesome Icons -->
  <link href="<?php echo base_url('assets/front/css/font-awesome.css')?>" rel="stylesheet"/>
  <link href="<?php echo base_url('assets/front/css/nucleo-svg.css')?>" rel="stylesheet"/>
  <!-- CSS Files -->
  <link href="<?php echo base_url('assets/front/css/argon-design-system.css?v=1.2.2')?>" rel="stylesheet"/>
  <link href="<?php echo base_url('assets/front/css/style.css')?>" rel="stylesheet" />
  <link href="<?php echo base_url('assets/front/js/plugins/jsRapStar.css');?>" rel="stylesheet" />
  <link href="<?php echo base_url('assets/js/plugins/toastr.css')?>" rel="stylesheet" />
</head>

<body class="index-page">
  <!-- Navbar -->
  <nav id="navbar-main" class="navbar navbar-main navbar-expand-lg bg-white navbar-light position-sticky top-0 shadow py-2">
    <div class="container">
      <a class="navbar-brand mr-lg-5" href="/review">
        Review Logo
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar_global" aria-controls="navbar_global" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="navbar-collapse collapse" id="navbar_global">
        <div class="navbar-collapse-header">
          <div class="row">
            <div class="col-6 collapse-brand">
              <a href="/review">
                <img src="./assets/img/brand/blue.png">
              </a>
            </div>
            <div class="col-6 collapse-close">
              <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbar_global" aria-controls="navbar_global" aria-expanded="false" aria-label="Toggle navigation">
                <span></span>
                <span></span>
              </button>
            </div>
          </div>
        </div>
        <ul class="navbar-nav navbar-nav-hover align-items-lg-center">
          <li class="active">
            <a href="/review" >
              <span class="nav-link-inner--text">Reviews</span>
            </a>
          </li>
        </ul>
        <ul class="navbar-nav align-items-lg-center ml-lg-auto">
          <?php $userdata = $this->session->userdata("user");
          $is_admin = $userdata && isset($userdata->role) && $userdata->role == 1 ? true : false;
          $is_login = $userdata && isset($userdata->name) ? true : false;
          if ($is_admin ){ ?>
            <li class="nav-item d-none d-lg-block">
              <a href="/admin/category"  class="btn btn-primary btn-icon">
                <span class="btn-inner--icon">
                  <i class="fa fa-shopping-cart"></i>
                </span>
                <span class="nav-link-inner--text">Admin</span>
              </a>
            </li>
            <?php } 
          if (!$is_login ) {?>
          <li class="nav-item d-none d-lg-block">
            <a href="/user/login"  class="btn btn-primary btn-icon">
              <span class="btn-inner--icon">
                <i class="fa fa-shopping-cart"></i>
              </span>
              <span class="nav-link-inner--text">Login</span>
            </a>
          </li>
          <?php }else{ ?>
          <li class="nav-item d-none d-lg-block">
            <a href="/user/logout"  class="btn btn-icon">
              <span class="btn-inner--icon">
                <i class="fa fa-shopping-cart"></i>
              </span>
              <span class="nav-link-inner--text">Logout</span>
            </a>
          </li>
          <?php } ?>
          
        </ul>
      </div>
    </div>
  </nav>
  <!-- End Navbar -->
  <div class="wrapper">
    <div class="section section-hero section-shaped hide">
      <div class="shape shape-style-1 shape-primary">
        <span class="span-150"></span>
        <span class="span-50"></span>
        <span class="span-50"></span>
        <span class="span-75"></span>
        <span class="span-100"></span>
        <span class="span-75"></span>
        <span class="span-50"></span>
        <span class="span-100"></span>
        <span class="span-50"></span>
        <span class="span-100"></span>
      </div>
      <div class="page-header">
        <div class="container shape-container d-flex align-items-center py-lg">
          <div class="col px-0">
            <div class="row align-items-center justify-content-center">
              <div class="col-lg-6 text-center">
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="separator separator-bottom separator-skew zindex-100">
        <svg x="0" y="0" viewBox="0 0 2560 100" preserveAspectRatio="none" version="1.1" xmlns="http://www.w3.org/2000/svg">
          <polygon class="fill-white" points="2560 0 2560 100 0 100"></polygon>
        </svg>
      </div>
    </div>
    <div class="section section-components pb-0" id="section-components">
      <div class="container">