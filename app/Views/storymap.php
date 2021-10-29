<!DOCTYPE html>
<html>

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <meta name="viewport" content="initial-scale=1, maximum-scale=1,user-scalable=no" />
  <link rel="icon" type="image/png" href="<?= base_url('public') ?>/favicon.png">
  <title><?= $title ?></title>

  <!-- Load Leaflet CSS and JS-->
  <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A==" crossorigin="" />
  <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js" integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA==" crossorigin=""></script>

  <!-- Load Leaflet basemap providers -->
  <!-- <script src="<?= base_url('public/storymaps') ?>/scripts/leaflet-providers.js"></script> -->

  <!-- Load jQuery  -->
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.min.js"></script>

  <!-- Load PapaParse -->
  <script src="https://cdn.jsdelivr.net/npm/papaparse@5.3.0/papaparse.min.js"></script>

  <!-- Load Lightbox -->
  <script src="<?= base_url('public/storymaps') ?>/scripts/lightbox/js/lightbox.js"></script>
  <link rel="stylesheet" href="<?= base_url('public/storymaps') ?>/scripts/lightbox/css/lightbox.css" />

  <!-- Load Font-Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
  <link rel="stylesheet" href="<?= base_url('public/storymaps') ?>/markers/leaflet.extra-markers.min.css">
  <link rel="stylesheet" href="<?= base_url('public/storymaps/lib') ?>/Leaflet.Basemap/L.Control.Basemaps.css">
  <link rel="stylesheet" href="<?= base_url('public/storymaps/lib') ?>/leaflet-defaultextent/leaflet.defaultextent.css">
  <link rel="stylesheet" href="<?= base_url('public/storymaps') ?>/css/style.css">
  <link rel="stylesheet" href="<?= base_url('public/storymaps') ?>/css/style-desktop.css">
  <link rel="stylesheet" href="<?= base_url('public/storymaps') ?>/css/loader.css">
</head>

<body>

  <div id="title">
    <div id="logo"></div>
    <div id="header"></div>
  </div>

  <div id="narration">
    <div id="contents">
      <div id="top"></div>
    </div>
  </div>

  <div class="loader">Loading...</div>
  <div id="map"></div>

  <script type="text/javascript">
    // Create the Leaflet map with a generic start point
    var map = L.map('map', {
      center: [-7.5474854,110.3680225],
      zoom: 14,
      scrollWheelZoom: true,
      zoomControl: false,
      tap: false
    });
  </script>

  <script type="text/javascript" src="<?= base_url('public/storymaps') ?>/google-doc-url.js"></script>
  <script type="text/javascript" src="<?= base_url('public/storymaps') ?>/markers/leaflet.extra-markers.min.js"></script>
  <script type="text/javascript" src="<?= base_url('public/storymaps/lib') ?>/Leaflet.Basemap/L.Control.Basemaps-min.js"></script>
  <script type="text/javascript" src="<?= base_url('public/storymaps/lib') ?>/leaflet-defaultextent/leaflet.defaultextent.js"></script>
  <script type="text/javascript" src="<?= base_url('public/storymaps') ?>/scripts/constants.js"></script>
  <script type="text/javascript" src="<?= base_url('public/storymaps') ?>/scripts/jquery.csv.js"></script>
  <!-- <script type="text/javascript" src="<?= base_url('public/storymaps') ?>/scripts/storymap.js"></script> -->

  <?= $this->include('js/js_storymap'); ?>

</body>

</html>