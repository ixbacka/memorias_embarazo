<style type="text/css">
body{
	height: 1170px;
}
.footer{
	position: absolute;
	top: 970px;
	left: 0px;
}

.congratsPages{
	position: absolute;
top: 150px;
}

.title_page p{
	margin-top: -10px;
}
.title_page span{
	top: 42px;
position: absolute;
left: 320px;
}

</style>

<script type="text/javascript">


</script>

	<div class="header">	
		<ul class="menu">
			<li class="ask">FAQ</li>
			<li class="settings">Settings</li>
			<li class="home">Home</li>
		</ul>
	</div>

<ul class="vertical_menu_1">
	<li>
	<?php 
		//congrats
		echo $this->Html->link(
				    'Felicidades',
				    array('controller' => 'congrats_pages', 'action' => 'add')
				);
		?>
	</li>
	<li>
		<?php
		echo $this->Html->link(
				    'Primer Visita',
				    array('controller' => 'first_visit_pages', 'action' => 'add')
				); ?>
		</li>
		<li>
		<?php
		echo $this->Html->link(
				    'Quién soy',
				    array('controller' => 'whoami_pages', 'action' => 'add')
				);
		?>
		</li>
		<li>
		<?php
		echo $this->Html->link(
				    'Primeros síntomas',
				    array('controller' => 'sintom_pages', 'action' => 'add')
				);
		?>
		</li>
		<li>
			<?php
		echo $this->Html->link(
				    'Ultrasonido',
				    array('controller' => 'ultrasound_pages', 'action' => 'add')
				);
		?>
		</li>
		<li>
		<?php
		echo $this->Html->link(
				    'Mi pancita',
				    array('controller' => 'belly_pages', 'action' => 'add')
				);
		?>
		</li>
		<li>
		<?php
		echo $this->Html->link(
				    'Mi ánimo',
				    array('controller' => 'animo_pages', 'action' => 'add')
				);
		?>
		</li>
</ul>
<?php
		echo $this->Html->link(
				    'Add Moment',
				    array('controller' => 'moment_pages', 'action' => 'add'),
				    array('class' => 'add_moment')
				);
	?>

<div class="content">
	<div class="menu_trims">
		<?php 
			echo $this->Html->link(
				    'Primer Trimestre',
				    array('controller' => 'familytree_pages', 'action' => 'add'),
				    array('class' => 'first_trim_current')
				);
			echo $this->Html->link(
				    'Segundo Trimestre',
				    array('controller' => 'familytree_pages', 'action' => 'add'),
				    array( 'class' => 'second_trim')
				);
			echo $this->Html->link(
				    'Tercer Trimestre',
				    array('controller' => 'familytree_pages', 'action' => 'add'),
				    array('class' => 'third_trim')
				);
		?>
	</div>

<div class="page_title">
	<div class="ant">Anterior</div>
	<div class="title_page"><p>&iexcl;Felicidades!</p><br> <span>La prueba es positiva</span></div>
	<?php

			echo $this->Html->link(
				    'Siguiente',
				    array('controller' => 'first_visit_pages', 'action' => 'add'),
				    array('class' => 'sig')
				);
	?>
</div>

	<div class="congratsPages form">
<?php echo $this->Form->create('CongratsPage'); ?>
	
	<?php
		echo $this->Form->input('sospeche', array('label' => 'Sospeché que estaba embarazada cuando: '));
		echo $this->Form->input('prueba', array('label' => 'Me hice una prueba de embarazo el día: '));
		echo $this->Form->input('firstfeeling', array('label' => 'Lo primero que sentí fue: '));
		echo $this->Form->input('babycoming', array('label' => 'Tenía '));
		echo $this->Form->input('howishare', array('label' => 'semanas de embarazo cuando me enteré que venía el bebé en camino, ahh que emoción!. Compartí la gran noticia con el papá de mi bebé de esta manera: '));
		echo $this->Form->input('babynum', array('label' => 'Éste es mi bebé número: '));
		echo $this->Form->input('babybros',array('label' => 'Los hermanitos del bebé reaccionaron así: '));
		echo $this->Form->input('details',array('label' => 'Anota todos los detalles que se te olviden! Cómo y dónde celebraste saber que estabas embarazada? Con quién compartiste el momento? Cómo reaccionaron tus familiares?, La primera compra que hiciste! o regalo que te dieron para el bebé.'));
	?>

		<?php
			echo $this->Form->input('profile_id', array('type' => 'hidden', 'value' => $profileid));
		?>
<?php echo $this->Form->end(__('Submit')); ?>
</div>

</div>
	<div class="footer">
		<div class="footer_mtm">Mom to mom , Consintiendo mi piel de mam&aacute;</div>
		<a href="http://www.momtomom.com.mx/" class="footer_link" target="_blank">www.momtomom.mx</a>
		<a href="https://twitter.com/momtomommx" class="footer_twitter" target="_blank">@momtomommx</a>
	</div>