<!-- welcome.ctp -->

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
		<div id="bienvenida_texto"></div>
		<div class="estilos">
			<div id="seleccionar_tema">Para comezar, selecciona el estilo que prefieras para guardar tus Memorias de Embarazo:</div>
			<div class="temas">
				<div id="tema1">Cute</div>
				<div id="tema2">Classy</div>
				<div id="tema3">Elegant</div>
				<div id="tema4">Hippie</div>
			</div>
		</div>
	</div>

</div>