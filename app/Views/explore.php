<!DOCTYPE html>
<html class="h-100 w-100">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Explore - Fundação Gino Fávaro</title>
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic">
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/fonts/fontawesome-all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/Lightbox-Gallery.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/untitled.css">

    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css"
   integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A=="
   crossorigin=""/>
   <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"
   integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA=="
   crossorigin=""></script>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdn.polyfill.io/v2/polyfill.min.js?features=Promise"></script>
    <script src="<?php echo base_url(); ?>/assets/js/leaflet-bing-layer.js"></script>




    <script src='https://api.mapbox.com/mapbox-gl-js/v2.3.1/mapbox-gl.js'></script>
    <link href='https://api.mapbox.com/mapbox-gl-js/v2.3.1/mapbox-gl.css' rel='stylesheet' />

</head>

<body class="h-100 w-100" style="background: rgb(255,255,255);overflow-x: hidden;">
    <div class="row" style="height: 100%;">

        <div class="col-xl-2 col-sm-3 overflow-auto vh-100" style="background: #fcfcfc;padding: 0px 0px 0px 12px;">
          <div class="d-flex w-100">
            <a href="/" class="btn btn-white"><i class="fas fa-arrow-left" style="font-size: 12px;"></i></a>
          </div>
          <img id="siteImage" style="height: 200px;width: 100%;" height="200px" width="100%">
            <p id="welcomeText" class="mt-1 h5" style="padding-left: 15px;padding-top:15px;">Welcome to Timor Leste</p>
            <div class="dropdown w-100">
              <button class="btn btn-secondary dropdown-toggle text-wrap" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                Fundação Gino Fávaro Promotional Sites
              </button>
              <ul class="dropdown-menu w-100" aria-labelledby="dropdownMenuButton1" id="siteList">
                <li><a class="dropdown-item " href="/explore">All</a></li>
              </ul>
            </div>
            <p id="siteName" class="mt-5 h5" style="padding-left: 15px;padding-top:15px;"></p>
            <article class="text-break pt-2 mt-1 w-100 d-none" id="siteInfo" style="font-size: 16px;padding-left: 15px;text-align: justify;padding-right: 12px;">
                <div><span style="font-size: 18px;">Information:</span>
                    <div class="d-flex flex-row mt-2"><i class="fas fa-map-marker-alt" style="font-size: 25px;"></i>
                        <p class="m-0 w-100 " style="padding-left: 20px;" id="siteAddress"></p>
                    </div>
                </div>
                <div class="mt-4 d-none" id="siteDescDiv"><span style="font-size: 15px;">Description:</span><br>
                  <span id="siteDescription">
                    <br><br><br></span></div>
            </article>
            <div class="d-none" id="sitePhotos">
                <p style="padding-left: 15px;font-size: 18px;">Photos</p>
                <section class="photo-gallery">
                    <div class="container">
                        <div class="intro"></div>
                        <div class="row g-0 flex-row flex-grow-0 photos" data-bss-baguettebox="" id="siteGallery">


                        </div>
                    </div>
                </section>
                <div></div>
            </div>
        </div>
        <div class="col-xl-10 col-sm-9" id="map" style="padding: 0px;"></div>
    </div>

    <script src="<?php echo base_url();?>/assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.js"></script>
    <script type="module" src="<?php echo base_url();?>/assets/js/map_loader.js?v=1"></script>
    <script src="<?php echo base_url();?>/assets/js/Lightbox-Gallery.js"></script>

</body>

</html>
