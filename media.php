<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN"
   "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
<?php
 require("inc/head.html");
 ?>

<script type='text/javascript' src='js/jquery.simplemodal.js'></script>
<link href="css/youmax.css" rel="stylesheet" type="text/css">
<link type='text/css' href='css/modal.css' rel='stylesheet' media='screen' />

<script type="text/javascript"> //YouMax Plugin  
  var youTubeChannelURL = "http://www.youtube.com/user/SynergistBand";
  
  //optional parameters-----------------------------------------------
  var youTubePlaylistURL = "";
  var youmaxDefaultTab = "uploads";
  var youmaxColumns = 3;  
  var youmaxWidgetWidth = 800;
  //var youmaxWidgetHeight = 1000;
  var showFeaturedVideoOnLoad = false;
  var showVideoInLightbox = true;

  
  function goClicked() {
    $('#youmax').empty().append(' loading ...');
    youTubeChannelURL=$('#youTubeChannelUrl').val();
    youTubePlaylistURL=$('#youTubePlaylistUrl').val();
    youmaxFeaturedPlaylistId = null;
    prepareYoumax();
  }
  //End of YouMax Plugin 
</script> 

</head>

<body>

<div class="container" id="media">
<?php
 require("inc/nav.html");
 ?>
  
  <article class="content">
    <h1>Media</h1>

      <h2>YouTube</h2>
      <div id="youmax"></div>
      <h2 class="instagram">Instagram</h2>

      <style>.ig-b- { display: inline-block; }
      .ig-b- img { visibility: hidden; }
      .ig-b-:hover { background-position: 0 -60px; } .ig-b-:active { background-position: 0 -120px; }
      .ig-b-48 { width: 48px; height: 48px; background: url(//badges.instagram.com/static/images/ig-badge-sprite-48.png) no-repeat 0 0; }
      @media only screen and (-webkit-min-device-pixel-ratio: 2), only screen and (min--moz-device-pixel-ratio: 2), only screen and (-o-min-device-pixel-ratio: 2 / 1), only screen and (min-device-pixel-ratio: 2), only screen and (min-resolution: 192dpi), only screen and (min-resolution: 2dppx) {
      .ig-b-48 { background-image: url(//badges.instagram.com/static/images/ig-badge-sprite-48@2x.png); background-size: 60px 178px; } }</style>
      <a href="http://instagram.com/synergistband?ref=badge" class="ig-b- ig-b-48"><img src="//badges.instagram.com/static/images/ig-badge-48.png" alt="Instagram" /></a>
      
    <div id="instagram"><!-- SnapWidget -->
        <!-- www.intagme.com -->
        <iframe src="http://www.intagme.com/in/?u=c3luZXJnaXN0YmFuZHxpbnwxMDB8M3wyfHx5ZXN8NXx1bmRlZmluZWQ=" allowTransparency="true" frameborder="0" scrolling="no" style="border:none; overflow:hidden; width:100%; height: 230px" ></iframe>
    </div>
<!-- Artwork section to be built here
    <div>
      <h2>Album Artwork</h2>
      
      

      <a href='#' class='albumArt'>Balanced</a>
      
        -->

    <!-- modal content 
    <div id="modal-content">


      <img src="images/AlbumArt/Balanced.jpg" style="max-height:100%; max-width:100%;"></div>
        <br>&nbsp;<br>
    </div>-->


    <!-- Removed this but saved code for later just in case

    <div class="album">
     <h2>The Catalyst Demos (2007)</h2>
      <img src="covers/catalyst_cover.jpg">
      <ol>
        <li>Greener (In the Comfort of Sun)</li>
        <li>the Itch</li>
        <li>Etre</li>
        <li>Conscious Cliche</li>
        <li>the Hourglass</li>
      </ol>
    </div>
    <div class="album">
      <h2>Synergist (2013)</h2>
      <img src="covers/synergist_cover.jpg">
      <ol>
        <li>Balanced</li>
        <li>Villain</li>
        <li>Etre</li>
        <li>the Hourglass</li>
        <li>Nightlights & Skylines</li>
        <li>Greener (In the Comfort of Sun)</li>
        <li>the Itch</li>
        <li>Method & Manipulation</li>
        <li>deNihilism</li>
        <li>Still</li>
        <li>A Scientist's Faith</li>
      </ol>
    </div>-->
  <!-- end .content --></article>
  <aside>
    <?php require("inc/album-listen.html"); ?>
  </aside>
<?php
 require("inc/footer.html");
 ?>
  <!-- end .container --></div>



<script type='text/javascript' src='js/media.js'></script>
<script type='text/javascript' src='js/youmax.min.js'></script>
</body>
</html>
