<!-- menu.ctp -->
<?php $momentos = $this->requestAction('moment_pages/index'); ?>

<ul class="vertical_menu_1">
<?php if($trimestre == 1){ ?>
	<li <?php if($pag == 'congrats'){ echo 'class="selected"'; } ?> >
	<?php 
		//congrats
		echo $this->Html->link(
				    'Felicidades',
				    array('controller' => 'congrats_pages', 'action' => 'add')

				);
		?>
	</li>
	<li <?php if($pag == 'first_visit'){ echo 'class="selected"'; } ?>>
		<?php
		echo $this->Html->link(
				    'Primer Visita',
				    array('controller' => 'first_visit_pages', 'action' => 'add')
				); ?>
		</li>
		<li <?php if($pag == 'whoami'){ echo 'class="selected"'; } ?>>
		<?php
		echo $this->Html->link(
				    'Quién soy',
				    array('controller' => 'whoami_pages', 'action' => 'add')
				);
		?>
		</li>
		<li <?php if($pag == 'sintom'){ echo 'class="selected"'; } ?>>
		<?php
		echo $this->Html->link(
				    'Primeros síntomas',
				    array('controller' => 'sintom_pages', 'action' => 'add')
				);
		?>
		</li>
		<li <?php if($pag == 'ultrasound'){ echo 'class="selected"'; } ?>>
			<?php
		echo $this->Html->link(
				    'Ultrasonido',
				    array('controller' => 'ultrasound_pages', 'action' => 'add')
				);
		?>
		</li>
		<li <?php if($pag == 'whoami'){ echo 'class="belly"'; } ?>>
		<?php
		echo $this->Html->link(
				    'Mi pancita',
				    array('controller' => 'belly_pages', 'action' => 'add')
				);
		?>
		</li>
		<li <?php if($pag == 'animo'){ echo 'class="selected"'; } ?>>
		<?php
		echo $this->Html->link(
				    'Mi ánimo',
				    array('controller' => 'animo_pages', 'action' => 'add')
				);
		?>
		</li>
		<?php if(isset($momentos) && !empty($momentos)) { foreach ($momentos as $moment): ?>
		<?php if($moment['MomentPage']['trimester'] == 1){ ?>
      <li>
      	<?php
						echo $this->Html->link(
					    $moment['MomentPage']['title'],
					    array('controller' => 'moment_pages', 'action' => 'add', 
					    	$moment['MomentPage']['id'], $moment['MomentPage']['trimester'])
						);
				?>
			</li>
			<?php } ?>
		<?php endforeach; }?>


<?php } elseif ($trimestre == 2) { ?>
	<li <?php if($pag == 'ilovemybaby'){ echo 'class="selected"'; } ?>>
	<?php 
		echo $this->Html->link(
				    'Amo a mi bebé',
				    array('controller' => 'ilovemybaby_pages', 'action' => 'add')

				);
		?>
	</li>
	<li <?php if($pag == 'childsex'){ echo 'class="selected"'; } ?>>
	<?php 
		echo $this->Html->link(
				    'Niño o Niña',
				    array('controller' => 'childsex_pages', 'action' => 'add')

				);
		?>
	</li>
	<li <?php if($pag == 'firstkick'){ echo 'class="selected"'; } ?>>
	<?php 
		echo $this->Html->link(
				    'Las primeras pataditas',
				    array('controller' => 'firstkick_pages', 'action' => 'add')

				);
		?>
	</li>
	<li <?php if($pag == 'bellymonth'){ echo 'class="selected"'; } ?>>
	<?php 
		echo $this->Html->link(
				    'Mi pansita Mes a Mes',
				    array('controller' => 'bellymonth_pages', 'action' => 'add')

				);
	?>
	</li>
	<?php if(isset($momentos) && !empty($momentos)) { foreach ($momentos as $moment): ?>
		<?php if($moment['MomentPage']['trimester'] == 2){ ?>
      <li>
      	<?php
						echo $this->Html->link(
					    $moment['MomentPage']['title'],
					    array('controller' => 'moment_pages', 'action' => 'add', 
					    	$moment['MomentPage']['id'], $moment['MomentPage']['trimester'])
						);
				?>
			</li>
			<?php } ?>
		<?php endforeach; } ?>

<?php } elseif ($trimestre == 3) { ?>

	<li <?php if($pag == 'gettingclose'){ echo 'class="selected"'; } ?>>
	<?php 
		echo $this->Html->link(
				    'Se acerca',
				    array('controller' => 'gettingclose_pages', 'action' => 'add')

				);
	?>
	</li>
	<li <?php if($pag == 'babyshower'){ echo 'class="selected"'; } ?>>
	<?php 
		echo $this->Html->link(
				    'Baby shower',
				    array('controller' => 'babyshower_pages', 'action' => 'add')

				);
	?>
	</li>
	<li <?php if($pag == 'coolultrasound'){ echo 'class="selected"'; } ?>>
	<?php 
		echo $this->Html->link(
				    'Ultrasonido',
				    array('controller' => 'coolultrasound_pages', 'action' => 'add')

				);
	?>
	</li>
	<li <?php if($pag == 'nesting'){ echo 'class="selected"'; } ?>>
	<?php 
		echo $this->Html->link(
				    'Síntomas',
				    array('controller' => 'nesting_pages', 'action' => 'add')

				);
	?>
	</li>
	<li <?php if($pag == 'byebelly'){ echo 'class="selected"'; } ?>>
	<?php 
		echo $this->Html->link(
				    'Pancita',
				    array('controller' => 'byebelly_pages', 'action' => 'add')

				);
	?>
	</li>
	<li <?php if($pag == 'specialdelivery'){ echo 'class="selected"'; } ?>>
	<?php 
		echo $this->Html->link(
				    'Entrega',
				    array('controller' => 'specialdelivery_pages', 'action' => 'add')

				);
	?>
	</li>
	<li <?php if($pag == 'welcome'){ echo 'class="selected"'; } ?>>
	<?php 
		echo $this->Html->link(
				    'Bienvenido',
				    array('controller' => 'welcome_pages', 'action' => 'add')

				);
	?>
	</li>
	<li <?php if($pag == 'epilog'){ echo 'class="selected"'; } ?>>
	<?php 
		echo $this->Html->link(
				    'Epílogo',
				    array('controller' => 'epilog_pages', 'action' => 'add')

				);
	?>
	</li>
	<li <?php if($pag == 'newfamily'){ echo 'class="selected"'; } ?>>
	<?php 
		echo $this->Html->link(
				    'Familia',
				    array('controller' => 'newfamily_pages', 'action' => 'add')

				);
	?>
	</li>
	<li <?php if($pag == 'familytree'){ echo 'class="selected"'; } ?>>
	<?php 
		echo $this->Html->link(
				    'Árbol familiar',
				    array('controller' => 'familytree_pages', 'action' => 'add')

				);
	?>
	</li>
	<?php if(isset($momentos) && !empty($momentos)) { foreach ($momentos as $moment): ?>
		<?php if($moment['MomentPage']['trimester'] == 3){ ?>
      <li>
      	<?php
						echo $this->Html->link(
					    $moment['MomentPage']['title'],
					    array('controller' => 'moment_pages', 'action' => 'add', 
					    	$moment['MomentPage']['id'], $moment['MomentPage']['trimester'])
						);
				?>
			</li>
			<?php } ?>
		<?php endforeach; } ?>

<?php } ?> 
</ul>
