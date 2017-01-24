<!DOCTYPE html>
<html lang="en">
<head>
  <!-- meta-tag-begin -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="website exomatik">
  <meta name="author" content="Muhammad Juanda B">
  <!-- meta-tag-end -->
  <!-- title-begin-->
  <title><?=$umum['title']?></title>
  <!-- title-end -->
  <!-- style-basic-web-begin -->
  <link href="<?=base_url()?>assets/homepage/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?=base_url()?>assets/homepage/css/font-awesome.min.css" rel="stylesheet">
  <link href="<?=base_url()?>assets/homepage/css/animate.min.css" rel="stylesheet">
  <link href="<?=base_url()?>assets/homepage/css/prettyPhoto.css" rel="stylesheet">
  <link href="<?=base_url()?>assets/homepage/css/main.css" rel="stylesheet">
  <link href="<?=base_url()?>assets/homepage/css/responsive.css" rel="stylesheet">

  <link rel="icon" type="images/png" href="<?=base_url()?>assets/homepage/images/ico/icon.png">
  <link rel="shortcut icon" href="<?=base_url()?>assets/homepage/images/icon/ico.png">
  <!-- style-basic-end -->
  <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?=base_url()?>assets/homepage/images/ico/apple-touch-icon-144-precomposed.png">
  <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?=base_url()?>assets/homepage/images/ico/apple-touch-icon-114-precomposed.png">
  <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?=base_url()?>assets/homepage/images/ico/apple-touch-icon-72-precomposed.png">
  <link rel="apple-touch-icon-precomposed" href="<?=base_url()?>assets/homepage/images/ico/apple-touch-icon-57-precomposed.png">
  <!-- share-button-for-article-begin -->
  <script type="text/javascript">var switchTo5x=true;</script>
  <script type="text/javascript" src="http://w.sharethis.com/button/buttons.js"></script>
  <script type="text/javascript">stLight.options({publisher: "e3df7ed1-51b7-4fa9-9123-81af1943e756", doNotHash: false, doNotCopy: false, hashAddressBar: false});</script>
  <link rel="stylesheet" href="<?=base_url()?>assets/homepage/css/rrssb.css"/> 
  <script type="text/javascript" src="<?=base_url('assets/angular/angular.js')?>"></script>
  <!-- share-button-for-article-start -->
  <style type="text/css">
    [ng\:cloak], [ng-cloak], [data-ng-cloak], [x-ng-cloak], .ng-cloak, .x-ng-cloak {
      display: none !important;
    }
  </style>
</head>
<body class="homepage">
  <header id="header">
    <div class="top-bar">
      <div class="container">
        <div class="row">
          <div class="col-sm-6 col-xs-4">
            <div class="top-number"><p><i class="fa fa-phone-square"></i> <?=$umum['no_telp']?></p></div>
          </div>
          <div class="col-sm-6 col-xs-8">
              <div class="search pull-right">
                <form role="form">
                  <input type="text" class="search-form" autocomplete="off" placeholder="Search">
                  <i class="fa fa-search"></i>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <nav class="navbar navbar-inverse" role="banner">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.html"><img src="<?=base_url()?>assets/homepage/images/logo.png" alt="logo" class="logo"></a>
        </div>
      <div class="collapse navbar-collapse navbar-right">
        <ul class="nav navbar-nav">
        <?php $aktif=$this->uri->segment(1);?>
          <li class="<?php if($aktif==null){echo 'active';}?>"><a href="<?=base_url();?>">Beranda</a></li>
          <li class="dropdown <?php if($aktif=='struktur-organisasi'){echo 'active';}
                                    elseif ($aktif=='visi-misi') {echo 'active';}
                                    elseif ($aktif=='sejarah') {echo 'active';}
                                    elseif ($aktif=='program-kerja') {echo 'active';}?>">
            <a href="" class="dropdown-toggle" data-toggle="dropdown">Profil <i class="fa fa-angle-down"></i></a>
            <ul class="dropdown-menu">
              <li><a href="<?=base_url('sejarah');?>">Sejarah</a></li>
              <li><a href="<?=base_url('visi-misi');?>">Visi-Misi</a></li>
              <li><a href="<?=base_url('struktur-organisasi');?>">Struktur Organisasi</a></li>
              <li><a href="<?=base_url('program-kerja');?>">Program Kerja</a></li>
            </ul>
          </li>
          <li class="<?php if($aktif=='portfolio'){echo 'active';}?>"><a href="<?=base_url('portfolio');?>">Portfolio</a></li>
          <li class="<?php if($aktif=='tutorial'){echo 'active';}?>"><a href="<?=base_url('tutorial');?>">Tutorial</a></li>
          <li class="<?php if($aktif=='kontak'){echo 'active';}?>"><a href="<?=base_url('download');?>">Download</a></li>
        </ul>
      </div>
      </div>
    </nav>
  </header>