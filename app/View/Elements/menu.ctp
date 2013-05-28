<!-- menu.ctp -->
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
<?php } elseif ($trimestre == 3) { ?>
	<li <?php if($pag == 'whoami'){ echo 'class="selected"'; } ?>>
	<?php 
		echo $this->Html->link(
				    'Mi pansita Mes a Mes',
				    array('controller' => 'bellymonth_pages', 'action' => 'add')

				);
	?>
	</li>
<?php } ?> 
</ul>
