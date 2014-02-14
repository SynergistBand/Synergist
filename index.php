<!doctype html>
<html bgcolor="#FFFFFF">
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
 
  <article id="article" class="content">
    
    <h1 id="recentNews">Recent&nbsp;News</h1>
    <div id="newsSocialBtns">
        <div class="newsSocialBtn" style="padding-bottom:5px; padding-top:1px;"><div class="fb-like" data-href="https://www.facebook.com/SynergistBand" data-layout="button" data-action="like" data-show-faces="false" data-share="false"></div></div>
        <div class="newsSocialBtn" style="padding-top:2px;"><a href="https://twitter.com/SynergistBand" class="twitter-follow-button" data-show-count="false" data-button="grey" data-text-color="#FFFFFF" data-link-color="#00AEFF" data-lang="en">Follow @SynergistBand</a></div>
        <div class="newsSocialBtn"><iframe class="btn" frameborder="0" border="0" scrolling="no" allowtransparency="true" height="25" width="113" src="http://platform.tumblr.com/v1/follow_button.html?button_type=2&tumblelog=synergistband&color_scheme=dark"></iframe></div>
    </div>
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
                if (tumblr_api_read['posts'][0]['photo-url-1280'] != undefined){ 
                    if (tumblr_api_read['posts'][0]['regular-body'] != undefined){ // float smaller if image goes with text
                        document.write('<img src=' + tumblr_api_read['posts'][0]['photo-url-1280'] + ' class=newsPhoto />');}
                    else {document.write('<img src=' + tumblr_api_read['posts'][0]['photo-url-1280'] + ' class=newsPhotoBig />');
                          $("#newsPost0").attr('class', 'noWrap'); // changes the "wrap class to noWrap so that images show without expandable <div>
                        }
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
                if (tumblr_api_read['posts'][1]['photo-url-1280'] != undefined){ 
                    if (tumblr_api_read['posts'][1]['regular-body'] != undefined){ // float smaller if image goes with text
                        document.write('<img src=' + tumblr_api_read['posts'][1]['photo-url-1280'] + ' class=newsPhoto />');}
                    else {document.write('<img src=' + tumblr_api_read['posts'][1]['photo-url-1280'] + ' class=newsPhotoBig />');
                          $("#newsPost1").attr('class', 'noWrap'); // changes the wrap class to noWrap so that images show without expandable <div>
                        }
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
                if (tumblr_api_read['posts'][2]['photo-url-1280'] != undefined){ 
                    if (tumblr_api_read['posts'][2]['regular-body'] != undefined){ // float smaller if image goes with text
                        document.write('<img src=' + tumblr_api_read['posts'][2]['photo-url-1280'] + ' class=newsPhoto />');}
                    else {document.write('<img src=' + tumblr_api_read['posts'][2]['photo-url-1280'] + ' class=newsPhotoBig />');
                          $("#newsPost2").attr('class', 'noWrap'); // changes the wrap class to noWrap so that images show without expandable <div>
                      }
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
    <?php require($_SERVER['DOCUMENT_ROOT'] . "/Synergist/inc/album.html"); ?>
  </aside>
<?php
 require($_SERVER['DOCUMENT_ROOT'] . "/Synergist/inc/footer.html");
 ?>
  


  <!-- end .container --></div>
</body>
</html>
