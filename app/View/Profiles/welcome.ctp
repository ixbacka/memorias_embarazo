<!-- welcome.ctp -->
<style type="text/css">
body{
	position: fixed;
	width: 810px;
	height: 1200px;
}
</style>
<?php
// Start Session Fix
if( isset($_GET["start_session"]) ){
	session_start();
}
$page_url = "https://www.facebook.com/pages/Nativo-Desarrollo/514166771955164?id=514166771955164&sk=app_419722851452946";
if (isset($_GET["start_session"]))
    die(header("Location:" . $page_url));
$sid = session_id();
if (!isset($_GET["sid"]))
{
    if(isset($_POST["signed_request"]))
       $_SESSION["signed_request"] = $_POST["signed_request"];
    die(header("Location:?sid=" . $sid));
}
if (empty($sid) || $_GET["sid"] != $sid)
    die('<script>top.window.location="?start_session=true";</script>');
// End Session Fix
?>


<SCRIPT TYPE="text/javascript">
	$(document).ready(function(){

		$('.menu').css('display','none');

		$('.footer-fangate').animate({
			top: 200,
			height: 800
		}, 1000);

		$('.like').animate({
			opacity:0,
		}, 500, function(){
			$('.like').css('display','none');
			$('.header-fangate').css('backgroundPosition', '0px -87px, center -46px, center 82px, 0px -102px, 0px -500px');
			$('.footer-fangate').css('backgroundImage','url(../img/nube4.png),url(../img/nube5.png), url(../img/nube4.png)');
			$('.footer-fangate').css('backgroundPosition','left bottom, 0px 6px, 0px -31px');
			$('#bienvenida_texto').css('display','block');

		});

		$(".temas").animate({
			opacity: 1
		}, 6000);

		/*

		$('.header-fangate').animate({
			//opacity: 0
		}, 2000, function() {
	        // Animation complete.  
	        
	        //0px -87px, center -46px, center 82px, 0px -102px, 0px -500px
	      
	    });

		$('.header-fangate').animate({
		  backgroundPosition:       
		}, 5000);

		$('.footer-fangate').animate({
		  backgroundImage: 'url(../img/nube4.png),url(../img/nube5.png), url(../img/nube4.png)',
		  backgroundPosition: 'left bottom, 0 6, 0 -31'      //left bottom,0px 6px, 0px -31px;
		}, 5000);

		*/


		

		$('.menu').show(5000);

		/*{opacity: 0}, 'slow', function() {
	        $(this)
	            .css({'background-image': 'url(1.jpg)'})
	            .animate({opacity: 1});
	    });*/

	});
</SCRIPT>

<div class="fangate">
	<div class="header-fangate">
		
		<div class="like">Bienvenida mama, Para comenzar da clic en Me Gusta</div>
		
		<ul class="menu">
			<li class="ask">FAQ</li>
			<li class="settings">Settings</li>
			<li class="home">Home</li>
		</ul>

	</div>
	
	<div class="footer-fangate">
		<div id="bienvenida_texto">Bienvenida mama!</div>
		<div class="estilos">
			<div id="seleccionar_tema">Para comezar, selecciona el estilo que prefieras para guardar tus Memorias de Embarazo:
			</div>
			<div class="temas">
				<?php
				echo $this->Html->link(
				    'Cute',
				    array('controller' => 'profiles', 'action' => 'cover', 1, 'full_base' => true), 
				    array('id' => 'tema1')
						); 
				?>
				<?php
				echo $this->Html->link(
				    'Classy',
				    array('controller' => 'profiles', 'action' => 'cover', 2, 'full_base' => true), 
				    array('id' => 'tema2')
						); 
				?>
				<?php
				echo $this->Html->link(
				    'Elegant',
				    array('controller' => 'profiles', 'action' => 'cover', 3, 'full_base' => true), 
				    array('id' => 'tema3')
						); 
				?>
				<?php
				echo $this->Html->link(
				    'Hippie',
				    array('controller' => 'profiles', 'action' => 'cover', 4, 'full_base' => true), 
				    array('id' => 'tema4')
						); 
				?>
				<!-- 
				<div id="tema1">Cute</div>
				<div id="tema2">Classy</div>
				<div id="tema3">Elegant</div>
				<div id="tema4">Hippie</div> 
				-->

			</div>
		</div>
	</div>

</div>