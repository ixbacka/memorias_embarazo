<!-- add.ctp -->
<?php //echo $this->Html->script('functions'); ?>

<style type="text/css">


.footer{
  top: 970px;
}

body{
  width: 810px;
  height: 1170px;
}

</style>

<?php echo $this->element('menu', array( "trimestre" => 1, 'pag' => 'sintom')); ?>

<a href="#" class="add_moment" id="my-moments">Moments</a>

    <div id="moments_popup">
        <div id="popup_moments"> <!--your content start-->
          <?php echo $this->element('moments'); ?>
          <a href="1" class="addnew-momento" id="mayiadd-moments" >Agrega un momento</a>
        </div> <!--your content end-->
    </div> <!--toPopup end-->

<div id="dialog-box-momento" class="dialog-popup"></div>

<div class="content">
<?php echo $this->element('trim_menu', array( "trimestre" => 1)); ?>

<div class="page_title">
   <?php

      echo $this->Html->link(
            'Anterior',
            array('controller' => 'whoami_pages', 'action' => 'add'),
            array('class' => 'ant')
        );
  ?>
  <div class="title_page">
    <p>Primeros</p>
    <span>s&iacute;ntomas y malestares</span>
  </div>
  <p class="middle_note">Cariño me puedes detener el cabello SOS... no me siento tan bien!</p>
  <?php

      echo $this->Html->link(
            'Siguiente',
            array('controller' => 'ultrasound_pages', 'action' => 'add'),
            array('class' => 'sig')
        );
  ?>
</div>

  <div class="sintomPages form">
<?php echo $this->Form->create('SintomPage'); ?>
  <?php

  if(isset($sintoms['SintomPage']['matutinos'])){
    $matutinos = $sintoms['SintomPage']['matutinos'];
  } else{
    $matutinos = '';
  }
    echo $this->Form->input('matutinos', array('label' => 'Ouch, empiezan los malestares matutinos y yo me siento: ', 'value' => $matutinos )); 

  if(isset($sintoms['SintomPage']['worst'])){
    $worst = $sintoms['SintomPage']['worst'];
  } else{
    $worst = '';
  }
    echo $this->Form->input('worst', array('label' => 'Pero cuando me siento peor es: ','after' => '</span>','between' => '<span>', 'value' => $worst));?>
  <div class="sintom_left">
  <p class="title_form" id="cravings">Antojos</p>
  <div class="sintom_inputs" id="cravings_">
  <?php
  if(isset($sintoms['SintomPage']['craving1'])){
    $craving1 = $sintoms['SintomPage']['craving1'];
  } else{
    $craving1 = '';
  }
    if(isset($sintoms['SintomPage']['craving2'])){
    $craving2 = $sintoms['SintomPage']['craving2'];
  } else{
    $craving2 = '';
  }
    if(isset($sintoms['SintomPage']['craving3'])){
    $craving3 = $sintoms['SintomPage']['craving3'];
  } else{
    $craving3 = '';
  }
    if(isset($sintoms['SintomPage']['craving4'])){
    $craving4 = $sintoms['SintomPage']['craving4'];
  } else{
    $craving4 = '';
  }
    if(isset($sintoms['SintomPage']['craving5'])){
    $craving5 = $sintoms['SintomPage']['craving5'];
  } else{
    $craving5 = '';
  }
    if(isset($sintoms['SintomPage']['craving6'])){
    $craving6 = $sintoms['SintomPage']['craving6'];
  } else{
    $craving6 = '';
  }
      echo $this->Form->input('craving1', array('label' => false, 'div' => false, 'value' => $craving1));
      echo $this->Form->input('craving2', array('label' => false, 'div' => false, 'value' => $craving2));
      echo $this->Form->input('craving3', array('label' => false, 'div' => false, 'value' => $craving3));
      echo $this->Form->input('craving4', array('label' => false, 'div' => false, 'value' => $craving4));
      echo $this->Form->input('craving5', array('label' => false, 'div' => false, 'value' => $craving5));
      echo $this->Form->input('craving6', array('label' => false, 'div' => false, 'value' => $craving6));
  ?>
  </div>
  <p class="title_form" id="gross">Ascos</p>
  <div class="sintom_inputs"  id="gross_">
    <?php

    if(isset($sintoms['SintomPage']['gross1'])){
      $gross1 = $sintoms['SintomPage']['gross1'];
    } else{
      $gross1 = '';
    }
      if(isset($sintoms['SintomPage']['gross2'])){
      $gross2 = $sintoms['SintomPage']['gross2'];
    } else{
      $gross2 = '';
    }
      if(isset($sintoms['SintomPage']['gross3'])){
      $gross3 = $sintoms['SintomPage']['gross3'];
    } else{
      $gross3 = '';
    }
      if(isset($sintoms['SintomPage']['gross4'])){
      $gross4 = $sintoms['SintomPage']['gross4'];
    } else{
      $gross4 = '';
    }
      if(isset($sintoms['SintomPage']['gross5'])){
      $gross5 = $sintoms['SintomPage']['gross5'];
    } else{
      $gross5 = '';
    }
      if(isset($sintoms['SintomPage']['gross6'])){
      $gross6 = $sintoms['SintomPage']['gross6'];
    } else{
      $gross6 = '';
    }
        echo $this->Form->input('gross1', array('label' => false, 'div' => false, 'value' => $gross1));
        echo $this->Form->input('gross2', array('label' => false, 'div' => false, 'value' => $gross2));
        echo $this->Form->input('gross3', array('label' => false, 'div' => false, 'value' => $gross3));
        echo $this->Form->input('gross4', array('label' => false, 'div' => false, 'value' => $gross4));
        echo $this->Form->input('gross5', array('label' => false, 'div' => false, 'value' => $gross5));
        echo $this->Form->input('gross6', array('label' => false, 'div' => false, 'value' => $gross6));
    ?>
  </div>
</div>
<div class="sintom_rite">
<!--   <label>Mmmm! cuando se trata de antojos<br>El antojito más raro que he tenido es: </label>
 -->    <?php

    if(isset($sintoms['SintomPage']['weirdestcraving'])){
      $weirdestcraving = $sintoms['SintomPage']['weirdestcraving'];
    } else{
      $weirdestcraving = '';
    }
      echo $this->Form->input('weirdestcraving', array('type' => 'textarea', 'label' => 'Mmmm! cuando se trata de antojos<br>El antojito más raro que he tenido es: ', 'value' => $weirdestcraving )); 

  ?>
</div>
    <?php
      echo $this->Form->input('profile_id', array('type' => 'hidden', 'value' => $profileid));
    ?>  
    <?php echo $this->Form->end(array(
              'label' => 'Submit',
              'div' => array(
                  'id' => 'button_sintom',
              )
          ));
    ?>
</div>
</div>
  <div class="footer">
    <div class="footer_mtm">Mom to mom , Consintiendo mi piel de mam&aacute;</div>
    <a href="http://www.momtomom.com.mx/" class="footer_link" target="_blank">www.momtomom.mx</a>
    <a href="https://twitter.com/momtomommx" class="footer_twitter" target="_blank">@momtomommx</a>
  </div>
