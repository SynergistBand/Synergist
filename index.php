<!doctype html>
<html bgcolor="#FFFFFF">
<head>
<?php
 require("inc/head.html");
 ?>
<script type="text/javascript" src="http://synergistband.tumblr.com/api/read/json"></script>
<script type="text/javascript" src="js/expand.js"></script>
<link href="css/expand.css" rel="stylesheet" type="text/css">
</head>

<body>

<div class="container">

<?php
 require("inc/nav.html");
 ?>
 
  <article id="article" class="content">
    
    <h1 id="recentNews">Latest</h1>
    
    <section class="newsPost" style="clear:both;">    
        <!--Title of Post--> 
        <h2><script type="text/javascript">if (tumblr_api_read['posts'][0]['regular-title'] != undefined){
        document.write(tumblr_api_read['posts'][0]['regular-title']); }</script></h2>
        <hr>
        <!--Date of Post-->
        <span class="newsDate"><script type="text/javascript"> 
        document.write(tumblr_api_read['posts'][0]['date']);</script></span>

    <div class="wrap" id="newsPost0">
        <div>
            <!--Post Image-->
            <script type="text/javascript">
                if (tumblr_api_read['posts'][0]['photo-url-400'] != undefined){ 
                    if (tumblr_api_read['posts'][0]['regular-body'] != undefined){ // float smaller if image goes with text
                        document.write('<img src=' + tumblr_api_read['posts'][0]['photo-url-400'] + ' class=newsPhoto />');}
                    else {document.write('<img src=' + tumblr_api_read['posts'][0]['photo-url-400'] + ' class=newsPhotoBig />');
                          document.write(tumblr_api_read['posts'][0]['photo-caption']);
                          $("#newsPost0").attr('class', 'noWrap'); // changes the "wrap class to noWrap so that images show without expandable <div>
                        }
                }</script>  
            <!--Post Video-->
            <script type="text/javascript">
                if (tumblr_api_read['posts'][0]['video-player'] != undefined){ // if there is a video
                    if (window.innerWidth <= 500){ // smaller if mobile
                        document.write(tumblr_api_read['posts'][0]['video-player-250']);}

                    else if (window.innerWidth >= 1024){ // big video if browser is wide enough
                             document.write(tumblr_api_read['posts'][0]['video-player-500']);}  

                    else {document.write(tumblr_api_read['posts'][0]['video-player']); } // else regular size
                         
                    
                    document.write('<br>&nbsp;<br>' + tumblr_api_read['posts'][0]['video-caption']); // writes video caption below if available
                    $("#newsPost1").attr('class', 'noWrap'); // changes the wrap class to noWrap so that video shows without expandable <div>
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

    <div class="wrap"  id="newsPost1">
        <div>
            <!--Post Image-->
            <script type="text/javascript">
                if (tumblr_api_read['posts'][1]['photo-url-400'] != undefined){ 
                    if (tumblr_api_read['posts'][1]['regular-body'] != undefined){ // float smaller if image goes with text
                        document.write('<img src=' + tumblr_api_read['posts'][1]['photo-url-400'] + ' class=newsPhoto />');}
                    else {document.write('<img src=' + tumblr_api_read['posts'][1]['photo-url-400'] + ' class=newsPhotoBig />');
                          document.write(tumblr_api_read['posts'][1]['photo-caption']);
                          $("#newsPost1").attr('class', 'noWrap'); // changes the wrap class to noWrap so that images show without expandable <div>
                        }
                }</script>  
            <!--Post Video-->
            <script type="text/javascript">
                if (tumblr_api_read['posts'][1]['video-player'] != undefined){ // if there is a video
                    if (window.innerWidth <= 500){ // smaller if mobile
                        document.write(tumblr_api_read['posts'][1]['source_url']);}

                    else if (window.innerWidth >= 1024){ // big video if browser is wide enough
                             document.write(tumblr_api_read['posts'][1]['source_url']);}  

                    else {document.write(tumblr_api_read['posts'][1]['source_url']); } // else regular size
                         
                    
                    document.write('<br>&nbsp;<br>' + tumblr_api_read['posts'][1]['video-caption']); // writes video caption below if available
                    $("#newsPost1").attr('class', 'noWrap'); // changes the wrap class to noWrap so that video shows without expandable <div>
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

    <div class="wrap" id="newsPost2">
        <div>
            <!--Post Image-->
            <script type="text/javascript">
                if (tumblr_api_read['posts'][2]['photo-url-400'] != undefined){ 
                    if (tumblr_api_read['posts'][2]['regular-body'] != undefined){ // float smaller if image goes with text
                        document.write('<img src=' + tumblr_api_read['posts'][2]['photo-url-400'] + ' class=newsPhoto />');}
                    else {document.write('<img src=' + tumblr_api_read['posts'][2]['photo-url-400'] + ' class=newsPhotoBig />');
                          document.write(tumblr_api_read['posts'][2]['photo-caption']);
                          $("#newsPost2").attr('class', 'noWrap'); // changes the wrap class to noWrap so that images show without expandable <div>
                      }
                }</script>  
            <!--Post Video-->
            <script type="text/javascript">
                if (tumblr_api_read['posts'][2]['video-player'] != undefined){ // if there is a video
                    if (window.innerWidth <= 500){ // smaller if mobile
                        document.write(tumblr_api_read['posts'][2]['video-player-250']);}

                    else if (window.innerWidth >= 1024){ // big video if browser is wide enough
                             document.write(tumblr_api_read['posts'][2]['video-player-500']);}  

                    else {document.write(tumblr_api_read['posts'][2]['video-player']); } // else regular size
                         
                    
                    document.write('<br>&nbsp;<br>' + tumblr_api_read['posts'][2]['video-caption']); // writes video caption below if available
                    $("#newsPost1").attr('class', 'noWrap'); // changes the wrap class to noWrap so that video shows without expandable <div>
                }</script> 

            <!--Body of Post-->
            <script type="text/javascript">if (tumblr_api_read['posts'][2]['regular-body'] != undefined){
            document.write(tumblr_api_read['posts'][2]['regular-body']);}</script>

        </div>
        <div class="gradient">&nbsp;</div>
    </div>
    <div class="read-more"></div>    
    <hr>
    <a href="http://synergistband.tumblr.com/" target="_blank" class="menuLink">NewS Archive</a> <span class="smallText">(Tumblr)</span><br>&nbsp;
    </section>
   
  <!-- end .content --></article>
  <aside  class="centered">
    <?php require("inc/album.html"); ?>
    <?php require("inc/social.html"); ?>
  </aside>
<?php
 require("inc/footer.html");
 ?>
  


  <!-- end .container --></div>
</body>
</html>
