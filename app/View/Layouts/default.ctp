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

	<?php 
				$tema = 1;//$this->Session->read("User.theme");
				if($tema == 1){ echo $this->Html->css('tema1'); } 
				elseif($tema == 2){ echo $this->Html->css('tema2'); } 
				elseif($tema == 3){ echo $this->Html->css('tema3'); } 
				elseif($tema == 4){ echo $this->Html->css('tema4'); } 
	?>

	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

	

</head>
<body>

	<div id="fb-root"></div>
		<!-- solution for resizing ! *0* -->
	<script type="text/javascript">  
		   window.fbAsyncInit = function() {
		    FB.init({
		     appId: '163480813810636', 
		     status: true, 
		     cookie: true, 
		     xfbml: true,
		     frictionlessRequests: true,
		     display: 'popup'
		    });
		    
		    //this resizes the the i-frame 
		    //on an interval of 100ms 
		    //FB.Canvas.setAutoGrow();
		 	<?php	if( strpos($_SERVER['REQUEST_URI'], 'welcome') == TRUE ){  ?>
				FB.Canvas.setSize({height:1000});
			<?php } elseif(strpos($_SERVER['REQUEST_URI'], 'fangate') == TRUE){ ?>
				FB.Canvas.setSize({height:870});		
			<?php } else { ?>
			console.log('chekin g ..');
			//FB.Canvas.setSize({height:800});
			setTimeout("FB.Canvas.setAutoGrow()",500);
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
							strpos($_SERVER['REQUEST_URI'], 'welcome') == FALSE && 
						  strpos($_SERVER['REQUEST_URI'], 'fangate') == FALSE &&
						  strpos($_SERVER['REQUEST_URI'], 'cover') == FALSE  ){ 
		?>

			<div class="header">	
				<ul class="menu">
					<li class="ask">FAQ</li>
					<li class="settings">Settings</li>
					<li class="home">Home</li>
				</ul>
			</div>

		<?php } ?>
		<?php echo $this->Session->flash(); ?>
		<?php echo $this->fetch('content'); ?>
		<?php if( strpos($_SERVER['REQUEST_URI'], 'profiles') == FALSE &&
							strpos($_SERVER['REQUEST_URI'], 'welcome') == FALSE && 
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
