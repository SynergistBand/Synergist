<!doctype html>
<html>
<head>
<?php
 require($_SERVER['DOCUMENT_ROOT'] . "/Synergist/inc/head.html");
 ?>
<script type="text/javascript" src="http://synergistband.tumblr.com/api/read/json"></script>
<script type="text/javascript" src="js/expand.js"></script>
<link href="css/expand.css" rel="stylesheet" type="text/css">
</head>

<body>

<div class="container">

<?php
 require($_SERVER['DOCUMENT_ROOT'] . "/Synergist/inc/nav.html");
 ?>
  
  <article class="content">
    <h1>Recent News</h1>
    <section class="newsPost">    
        <!--Title of Post--> 
        <h2><script type="text/javascript">if (tumblr_api_read['posts'][0]['regular-title'] != undefined){
        document.write(tumblr_api_read['posts'][0]['regular-title']); }</script></h2>
        <hr>
        <!--Date of Post-->
        <span class="newsDate"><script type="text/javascript"> 
        document.write(tumblr_api_read['posts'][0]['date']);</script></span>

    <div class="wrap">
        <div>
            <!--Post Image-->
            <script type="text/javascript">
                if (tumblr_api_read['posts'][0]['photo-url-1280'] != undefined){ 
                    if (tumblr_api_read['posts'][0]['regular-body'] != undefined){
                        document.write('<img src=' + tumblr_api_read['posts'][0]['photo-url-1280'] + ' class=newsPhoto />');}
                    else {document.write('<img src=' + tumblr_api_read['posts'][0]['photo-url-1280'] + ' class=newsPhotoBig />');}
                }</script>  
    

            <!--Body of Post-->
            <script type="text/javascript">if (tumblr_api_read['posts'][0]['regular-body'] != undefined){
            document.write(tumblr_api_read['posts'][0]['regular-body']);}</script>

        </div>
        <div class="gradient">&nbsp;</div>
    </div>
    <div class="read-more"></div>    
    </section>

    <section class="newsPost">    
        <!--Title of Post--> 
        <h2><script type="text/javascript">if (tumblr_api_read['posts'][1]['regular-title'] != undefined){
        document.write(tumblr_api_read['posts'][1]['regular-title']); }</script></h2>
        <hr>
        <!--Date of Post-->
        <span class="newsDate"><script type="text/javascript"> 
        document.write(tumblr_api_read['posts'][1]['date']);</script></span>

    <div class="wrap">
        <div>
            <!--Post Image-->
            <script type="text/javascript">
                if (tumblr_api_read['posts'][1]['photo-url-1280'] != undefined){ 
                    if (tumblr_api_read['posts'][1]['regular-body'] != undefined){
                        document.write('<img src=' + tumblr_api_read['posts'][1]['photo-url-1280'] + ' class=newsPhoto />');}
                    else {document.write('<img src=' + tumblr_api_read['posts'][1]['photo-url-1280'] + ' class=newsPhotoBig />');}
                }</script>  
    

            <!--Body of Post-->
            <script type="text/javascript">if (tumblr_api_read['posts'][1]['regular-body'] != undefined){
            document.write(tumblr_api_read['posts'][1]['regular-body']);}</script>

        </div>
        <div class="gradient">&nbsp;</div>
    </div>
    <div class="read-more"></div>    
    </section>
    
    
    <section class="newsPost">    
        <!--Title of Post--> 
        <h2><script type="text/javascript">if (tumblr_api_read['posts'][2]['regular-title'] != undefined){
        document.write(tumblr_api_read['posts'][2]['regular-title']); }</script></h2>
        <hr>
        <!--Date of Post-->
        <span class="newsDate"><script type="text/javascript"> 
        document.write(tumblr_api_read['posts'][2]['date']);</script></span>

    <div class="wrap">
        <div>
            <!--Post Image-->
            <script type="text/javascript">
                if (tumblr_api_read['posts'][2]['photo-url-1280'] != undefined){ 
                    if (tumblr_api_read['posts'][2]['regular-body'] != undefined){
                        document.write('<img src=' + tumblr_api_read['posts'][2]['photo-url-1280'] + ' class=newsPhoto />');}
                    else {document.write('<img src=' + tumblr_api_read['posts'][2]['photo-url-1280'] + ' class=newsPhotoBig />');}
                }</script>  
    

            <!--Body of Post-->
            <script type="text/javascript">if (tumblr_api_read['posts'][2]['regular-body'] != undefined){
            document.write(tumblr_api_read['posts'][2]['regular-body']);}</script>

        </div>
        <div class="gradient">&nbsp;</div>
    </div>
    <div class="read-more"></div>    
    </section>
   
  <!-- end .content --></article>
  <aside>
    <?php
 require($_SERVER['DOCUMENT_ROOT'] . "/Synergist/inc/album.html");
 ?>
  </aside>
<?php
 require($_SERVER['DOCUMENT_ROOT'] . "/Synergist/inc/footer.html");
 ?>
  <!-- end .container --></div>
</body>
</html>
