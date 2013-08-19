<?php echo $this->element('menu', array( "trimestre" => 3, "pag" => "epilog")); ?>

<a href="#" class="add_moment" id="my-moments">Moments</a>

    <div id="moments_popup">
        <div id="popup_moments"> <!--your content start-->
          <?php echo $this->element('moments'); ?>
          <a href="3" class="addnew-momento" id="mayiadd-moments" >Agrega un momento</a>
        </div> <!--your content end-->
    </div> <!--toPopup end-->

<div id="dialog-box-momento" class="dialog-popup"></div>

<div class="content">
<?php echo $this->element('trim_menu', array( "trimestre" => 3)); ?>

<div class="page_title">
	<?php
			echo $this->Html->link(
				    'Anterior',
				    array('controller' => 'welcomebby_pages', 'action' => 'add'),
				    array('class' => 'ant')
				);
	?>
	<div class="title_page">
		<p>Ep&iacute;logo</p>
		<span>de la panza</span>
	</div>
	<?php 
		echo $this->Html->link(
				    'Siguiente',
				    array('controller' => 'newfamily_pages', 'action' => 'add'),
				    array('class' => 'sig')
				);
	?>
</div>

	
	<div class="epilogPages form">
	<?php echo $this->Form->create('EpilogPage'); ?>

 	<?php
		if(isset($epilog['EpilogPage']['belly'])){
			$belly = $epilog['EpilogPage']['belly'];
		} else{
			$belly = '';
		}
  ?>
  <div class="opciones cf">
    <div class="cf">
      <input type="radio" name="data[EpilogPage][belly]" value="1" <?php if($belly == 1){ echo 'checked="checked"'; } ?> />
      <label>¡Ay! todavia parezco embarazada</label>
    </div>
    <div class="cf">
      <input type="radio" name="data[EpilogPage][belly]" value="2" <?php if($belly == 2){ echo 'checked="checked"'; } ?> />
      <label>¡Eh!  Sorpresivamente mi panza regresó a su talla normal</label>
    </div>
  </div>
  	<?php
		if(isset($epilog['EpilogPage']['notes'])){
			$notes =$epilog['EpilogPage']['notes'];
		} else{
			$notes = '';
		}
    ?>
    <p class="post-parto cf">
    	<label> Notas despu&eacute;s de que llegaste y detalles que recordar: </label>
    	<!-- <input type="text" name="data[EpilogPage][notes]" value="<?php if($notes != ''){ echo $notes; } ?>" > -->
      <textarea name="data[EpilogPage][notes]"><?php if($notes != ''){ echo $notes; } ?></textarea>
    </p>
	<?php
		echo $this->Form->input('profile_id', array('type' => 'hidden', 'value' => $profileid));
	?>
<?php echo $this->Form->end(__('Submit')); ?>
</div>

</div>
