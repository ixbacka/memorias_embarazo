<?php
/**
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */

$cakeDescription = __d('cake_dev', 'CakePHP: the rapid development php framework');
?>
<!DOCTYPE html>
<html>
<head>
  <?php echo $this->Html->charset(); ?>
  <title>
    <?php echo $cakeDescription ?>:
    <?php echo $title_for_layout; ?>
  </title>
  <?php
    echo $this->Html->meta('icon');

    echo $this->Html->css('cake.generic');
    echo $this->fetch('meta');
    echo $this->fetch('script');
    echo $this->fetch('css');
  ?>


	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>


  <?php echo $this->Html->script('clickoutside'); ?>

	<?php echo $this->Html->script('script'); ?>
<script type="text/javascript">
  WebFontConfig = {
    google: { families: [ 'Open+Sans:400,700,600,300:latin' ] }
  };
  (function() {
    var wf = document.createElement('script');
    wf.src = ('https:' == document.location.protocol ? 'https' : 'http') +
      '://ajax.googleapis.com/ajax/libs/webfont/1/webfont.js';
    wf.type = 'text/javascript';
    wf.async = 'true';
    var s = document.getElementsByTagName('script')[0];
    s.parentNode.insertBefore(wf, s);
  })(); </script>

  <?php 
        $tema = $this->Session->read("User.theme");
        if($tema == 1){ echo $this->Html->css('tema1'); } 
        elseif($tema == 2){ echo $this->Html->css('tema2'); } 
        elseif($tema == 3){ echo $this->Html->css('tema3'); } 
        elseif($tema == 4){ echo $this->Html->css('tema4'); } 
  ?>  

</head>
<body>

  <div id="fb-root"></div>
    <!-- solution for resizing ! *0* -->
  <script type="text/javascript">  

  var UID;
  var uname;
       window.fbAsyncInit = function() {
        FB.init({
         appId: '163480813810636', 
         status: true, 
         cookie: true, 
         xfbml: true,
         frictionlessRequests: true,
         display: 'popup'
        });

        <?php $new_token = str_replace('|','&#124;',$this->Session->read("User.token")); ?>
        FB.api(unescape('/me?access_token='+"<?php echo $new_token;?>"), function (response) {
            console.log('Response :'+JSON.stringify(response));
            var neu_data = JSON.parse(JSON.stringify(response));
            UID = neu_data.id;
            uname = neu_data.username;

        });
        
        //this resizes the the i-frame 
        //on an interval of 100ms 
        //FB.Canvas.setAutoGrow();
       <?php  if( strpos($_SERVER['REQUEST_URI'], 'welcome') == TRUE ){  ?>
        FB.Canvas.setSize({height:1000});
      <?php } elseif(strpos($_SERVER['REQUEST_URI'], 'fangate') == TRUE){ ?>
        FB.Canvas.setSize({height:870});    
      <?php } else { ?>
      console.log('chekin g ..');
      FB.Canvas.setSize({height:1150});
      //setTimeout("FB.Canvas.setAutoGrow()",500);
     <?php } ?>
       };
       (function() {
        var e = document.createElement('script');
        e.async = true;
        e.src = document.location.protocol + 
         '//connect.facebook.net/en_US/all.js';
        document.getElementById('fb-root').appendChild(e);   
       }());

       // Load the SDK asynchronously
  // (function(d, s, id){
  //    var js, fjs = d.getElementsByTagName(s)[0];
  //    if (d.getElementById(id)) {return;}
  //    js = d.createElement(s); js.id = id;
  //    js.src = "//connect.facebook.net/en_US/all.js";
  //    fjs.parentNode.insertBefore(js, fjs);
  //  }(document, 'script', 'facebook-jssdk'));
    
      
      </script> 
    
    <?php if( strpos($_SERVER['REQUEST_URI'], 'profiles') == FALSE &&
              strpos($_SERVER['REQUEST_URI'], 'fangate') == FALSE &&
              strpos($_SERVER['REQUEST_URI'], 'cover') == FALSE  ){ 
    ?>

      <div class="header">  
        <ul class="menu">
          <a href="#" class="ask" id="instructions">FAQ</a>
          <a href="#" class="settings" id="themsettings">Settings</a>
          <li class="home">Home</li>          
        </ul>
      </div>

    <div id="toPopup">

        <div class="close"></div>
        <span class="ecs_tooltip">Press Esc to close <span class="arrow"></span></span>
        <div id="popup_instructions"> <!--your content start-->
          Instrucciones del popup            
        </div> <!--your content end-->

    </div> <!--toPopup end-->

    <div id="settings_popup">
        <div class="close_sets"></div>
        <span class="ecs_tooltip">Press Esc to close <span class="arrow"></span></span>
        <div id="popup_settings"> <!--your content start-->
          <ul class="ul_settings">
            <li class="personalizar"> Personalizar </li>
            <li class="vermemorias"> Ver Memorias </li>
            <li class="compartir"> Compartir </li>
          </ul>
        </div> <!--your content end-->

    </div> <!--toPopup end-->

    <div id="personalizar_popup">
       <ul class="lostemas">
            <li class="tema1"> Tema 1 </li>
            <li class="tema2"> Tema 2  </li>
            <li class="tema3"> Tema 3 </li>
            <li class="tema4"> Tema 4 </li>
        </ul>  
    </div>

  <div class="loader"></div>
    <div id="backgroundPopup"></div>

    <?php } ?>

    <?php echo $this->Session->flash(); ?>
    <?php echo $this->fetch('content'); ?>
    <?php if( strpos($_SERVER['REQUEST_URI'], 'profiles') == FALSE &&
              strpos($_SERVER['REQUEST_URI'], 'fangate') == FALSE &&
              strpos($_SERVER['REQUEST_URI'], 'cover') == FALSE  ){ 
    ?>
    <div class="footer">
      <div class="footer_mtm">Mom to mom , Consintiendo mi piel de mam&aacute;</div>
      <a href="http://www.momtomom.com.mx/" class="footer_link" target="_blank">www.momtomom.mx</a>
      <a href="https://twitter.com/momtomommx" class="footer_twitter" target="_blank">@momtomommx</a>
    </div>
  <?php } ?>
</body>
</html>
