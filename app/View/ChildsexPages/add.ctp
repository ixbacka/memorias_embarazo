
<?php echo $this->element('menu', array( "trimestre" => 2, "pag" => "childsex")); ?>

<?php
    echo $this->Html->link(
            'Add Moment',
            array('controller' => 'moment_pages', 'action' => 'add'),
            array('class' => 'add_moment')
        );
  ?>

<div class="content">
<?php echo $this->element('trim_menu', array( "trimestre" => 2)); ?>

<div class="page_title">
  <?php
      echo $this->Html->link(
            'Anterior',
            array('controller' => 'ilovemybaby_pages', 'action' => 'add'),
            array('class' => 'ant')
        );
  ?>
  <div class="title_page">
    <p>¿NIÑO O NIÑA?</p>
  </div>
  <?php 
    echo $this->Html->link(
            'Siguiente',
            array('controller' => 'firstkick_pages', 'action' => 'add'),
            array('class' => 'sig')
        );
  ?>
</div>

<div class="bebes">bebes</div>

<div class="childsexPages form">

  <?php echo $this->Form->create('ChildsexPage'); ?>
  <div class="todomundo cf">
    <p>Todo el mundo piensa que mi bebé será: </p>
    <?php
      if(isset($childsex['ChildsexPage']['theythink'])){
        $theythink = $childsex['ChildsexPage']['theythink'];
      } else{
        $theythink = '';
      }
    ?> 
    <div class="opcion1">
      <label>Niño</label>
      <input type="radio" name="data[ChildsexPage][theythink]" value="1" <?php if($theythink == 1){ echo  'checked="checked"'; } ?> />
    </div>
    <div class="opcion2">
    <label>Cuates</label>
      <input type="radio" name="data[ChildsexPage][theythink]" value="2" <?php if($theythink == 2){ echo   'checked="checked"'; } ?> />
    <div class="opcion3">
    <label>Niña</label>
    <input type="radio" name="data[ChildsexPage][theythink]" value="3" <?php if($theythink == 3){
      echo   'checked="checked"'; } ?> />

  </div>
  <div class="personalmente cf">
    <label>Yo personalmente pienso que eres: </label>  
    <?php
      if(isset($childsex['ChildsexPage']['ithink'])){
        $ithink = $childsex['ChildsexPage']['ithink'];
      } else{
        $ithink = '';
      }
    ?> 
    <input type="radio" name="data[ChildsexPage][ithink]" value="1" <?php if($ithink == 1){
    echo  'checked="checked"'; } ?> />
    <label>Niño</label>
     <input type="radio" name="data[ChildsexPage][ithink]" value="2" <?php if($ithink == 2){
    echo   'checked="checked"'; } ?> />
    <label>Cuates</label>
     <input type="radio" name="data[ChildsexPage][ithink]" value="3" <?php if($ithink == 3){
    echo   'checked="checked"'; } ?> />
    <label>Niña</label>
  </div>
  <div class="decidimos cf">
    <label>Decidimos</label>  
    <?php
      if(isset($childsex['ChildsexPage']['decided'])){
        $decided = $childsex['ChildsexPage']['decided'];
      } else{
        $decided = '';
      }
    ?> 
    <input type="radio" name="data[ChildsexPage][decided]" value="1" <?php if($decided == 1){
    echo  'checked="checked"'; } ?> />
     <label>Si saber</label> 
     <input type="radio" name="data[ChildsexPage][decided]" value="2" <?php if($decided == 2){
    echo   'checked="checked"'; } ?> />
     <label>No saber, porque</label> 
    
    <?php
      if(isset($childsex['ChildsexPage']['whyidecided'])){
        $whyidecided = $childsex['ChildsexPage']['whyidecided'];
      } else{
        $whyidecided = '';
      }
    ?>
    <input type="text" name="data[ChildsexPage][whyidecided]" value="<?php if($whyidecided != ''){ echo $whyidecided; } ?>"/> 
    <p>Tu papá y yo te llamamos de cariño </p>
    <?php
        if(isset($childsex['ChildsexPage']['nickname'])){
          $nickname = $childsex['ChildsexPage']['nickname'];
        } else{
          $nickname = '';
        }
      ?>
    <input type="text" name="data[ChildsexPage][nickname]" value="<?php if($nickname != ''){ echo $nickname; } ?>"/> 

    <p>ahora que estás dentro de mi pancita. </p>
  </div>
  <?php echo $this->Form->input('profile_id', array('type' => 'hidden', 'value' => $profileid)); ?>
  <?php echo $this->Form->end(__('Submit')); ?>
</div>

</div>
