<!-- add.ctp -->

<?php echo $this->Html->script('functions'); ?>
<?php echo $this->Html->script('jquery-ui/js/jquery-ui-1.10.3.custom.min'); ?>
<?php echo $this->Html->css('redmond/jquery-ui-1.10.3.custom.min'); ?>


<?php if(isset($firstvisit['FirstVisitPage']['estimated'])){ 

      $source = $firstvisit['FirstVisitPage']['estimated'];
      $date = new DateTime($source);
      $letime = strtotime($source);

      $mes = get_date_spanish($letime, true, 'month'); # return Enero

      $dia = $date->format('d'); // 31.07.2012
      $ano = $date->format('Y'); // 31-07-2012

      $estimated = $dia.' '.$mes.' '.$ano;
      $monthi = ($date->format('m'))-1;
      $mesuco = $date->format('m');
    ?>
<script type="text/javascript">
$(document).ready(function(){

   $( "#datepickerCongrats" ).datepicker("setDate", new Date(<?php echo $ano.', '.$monthi.', '.$dia;?>));  
});

</script>
<?php } else{
      $estimated = '';
    }
?>

<?php echo $this->element('menu', array( "trimestre" => 1, 'pag' => 'first_visit')); ?>

<?php
    echo $this->Html->link(
            'Add Moment',
            array('controller' => 'moment_pages', 'action' => 'add', 0,1),
            array('class' => 'add_moment')
        );
  ?>

<div class="content">
<?php echo $this->element('trim_menu', array( "trimestre" => 1)); ?>

<div class="page_title">
  <?php

      echo $this->Html->link(
            'Anterior',
            array('controller' => 'congrats_pages', 'action' => 'add'),
            array('class' => 'ant')
        );
  ?>
  <div class="title_page"><p>Mi Primer visita</p><br> <span>al ginec&oacute;logo</span></div>
  <?php

      echo $this->Html->link(
            'Siguiente',
            array('controller' => 'whoami_pages', 'action' => 'add'),
            array('class' => 'sig')
        );
  ?>
</div>

  <div class="congratsPages form">
<?php echo $this->Form->create('FirstVisitPage'); ?>
  
  <?php

  if(isset($firstvisit['FirstVisitPage']['gin'])){
    $gin = $firstvisit['FirstVisitPage']['gin'];
  } else{
    $gin = '';
  }
    echo $this->Form->input('gin', array('label' => 'Mi ginecólogo es: '
      , 'after' => '</span>','between' => '<span>', 'value' => $gin )); 

#Power by nicolaspar 2007 - especific proyect
function get_date_spanish( $time, $part = false, $formatDate = '' ){
    #Declare n compatible arrays
    $month = array("","enero", "febrero", "marzo", "abril", "mayo", "junio", "julio", "agosto", "septiempre", "diciembre");#n
    $month_execute = "n"; #format for array month

    $month_mini = array("","ENE", "FEB", "MAR", "ABR", "MAY", "JUN", "JUL", "AGO", "SEP", "DIC");#n
    $month_mini_execute = "n"; #format for array month

    $day = array("domingo","lunes","martes","miércoles","jueves","viernes","sábado"); #w
    $day_execute = "w";
    
    $day_mini = array("DOM","LUN","MAR","MIE","JUE","VIE","SAB"); #w
    $day_mini_execute = "w";

    #Content array exception print "HOY", position content the name array. Duplicate value and key for optimization in comparative
    $print_hoy = array("month"=>"month", "month_mini"=>"month_mini");

    if( $part === false ){
        return date("d", $time) . " de " . $month[date("n",$time)] . ", ". date("H:i",$time) ." hs";
    }elseif( $part === true ){
        if( ! empty( $print_hoy[$formatDate] ) && date("d-m-Y", $time ) == date("d-m-Y") ) return "HOY"; #Exception HOY
        if( ! empty( ${$formatDate} ) && !empty( ${$formatDate}[date(${$formatDate.'_execute'},$time)] ) ) return ${$formatDate}[date(${$formatDate.'_execute'},$time)];
        else return date($formatDate, $time);
    }else{
        return date("d-m-Y H:i", $time);
    }
}

  ?>

    <div class="input date">
      <label>Fecha estimada en que nacerás: </label>
      <span><input type="text" id="datepickerCongrats" size="30" readonly="readonly"  value="<?php if($estimated != ''){
        echo $estimated; } ?>"/></span>
      <input type="hidden" name="data[FirstVisitPage][estimated][month]" id="CongratsPagePruebaMonth" <?php if($estimated != ''){ ?>  value="<?php echo $mesuco; ?>" <?php } ?> />
      <input type="hidden" name="data[FirstVisitPage][estimated][day]" id="CongratsPagePruebaDay" <?php if($estimated != ''){ ?>  value="<?php echo $dia; ?>" <?php } ?> />
      <input type="hidden" name="data[FirstVisitPage][estimated][year]" id="CongratsPagePruebaYear" <?php if($estimated != ''){ ?>  value="<?php echo $ano; ?>" <?php } ?> />
    </div>
  <div class="row cf">
    <?php

    if(isset($firstvisit['FirstVisitPage']['weight'])){
      $weight = $firstvisit['FirstVisitPage']['weight'];
    } else{
      $weight = '';
    }
      echo $this->Form->input('weight', array('label' => 'Mi peso actual: ','after' => '</span>','between' => '<span>', 'value' => $weight, 'min' => 0));
      /*
      echo $this->Form->input('babycoming', array('label' => 'Tenía '));
      echo $this->Form->input('howishare', array('label' => 'semanas de embarazo cuando me enteré que venía el bebé en camino, ahh que emoción!. Compartí la gran noticia con el papá de mi bebé de esta manera: ', 'after' => '</span>','between' => '<span>',  'before' => '<p>semanas de embarazo cuando me enteré que venía el bebé en camino, ahh que emoción!. Compartí la gran noticia con el papá de mi bebé de esta manera:</p>', 'label' => false));
      */

        if(isset($firstvisit['FirstVisitPage']['measurements'])){
          $measurements = $firstvisit['FirstVisitPage']['measurements'];
        } else{
          $measurements = '';
        }

        echo $this->Form->input('measurements', array('label' => 'Las medidas de mi pancita: ','after' => '</span>','between' => '<span>', 'value' => $measurements));

        if(isset($firstvisit['FirstVisitPage']['firstvisit'])){
          $firstvisit = $firstvisit['FirstVisitPage']['firstvisit'];
        } else{
          $firstvisit = '';
        } ?>
  </div>
  <?php 
    echo $this->Form->input('firstvisit',array('label' => 'Lo que recuerdo de mi primera visita es: ', 'after' => '</span>','between' => '<span>', 'value' => $firstvisit));
    /*
    echo $this->Form->input('details',array('label' => '¡Anota todos los detalles antes de que se te olviden!... ¿Cómo y dónde celebraste  saber que estabas embarazada? ¿Con quién compartiste el momento? ¿Cómo  reaccionaron tus familiares? ¿Cuál fue la primera compra que hiciste o regalo que te dieron para el bebé?', 'after' => '</span>','between' => '<span>'));
    */
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
