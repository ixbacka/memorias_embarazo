<?php

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

<?php echo $this->Html->script('jquery-ui/js/jquery-ui-1.10.3.custom.min'); ?>
<?php echo $this->Html->css('redmond/jquery-ui-1.10.3.custom.min'); ?>
<?php echo $this->Html->script('functions'); ?>


<?php if(isset($ilovemybby['IlovemybabyPage']['today'])){ 

      $source = $ilovemybby['IlovemybabyPage']['today'];
      $date = new DateTime($source);
      $letime = strtotime($source);

      $mes = get_date_spanish($letime, true, 'month'); # return Enero

      $dia = $date->format('d'); // 31.07.2012
      $ano = $date->format('Y'); // 31-07-2012

      $today = $dia.' '.$mes.' '.$ano;
      $monthi = ($date->format('m'))-1;
      $montha = $date->format('m');

    ?>
<script type="text/javascript">
$(document).ready(function(){

   $( "#datepickerCongrats" ).datepicker("setDate", new Date(<?php echo $ano.', '.$monthi.', '.$dia;?>));  
});

</script>
<?php } else{
      $today = '';
    }
?>


<a href="#" class="add_moment" id="my-moments">Moments</a>

    <div id="moments_popup">
        <div id="popup_moments"> <!--your content start-->
          <?php echo $this->element('moments'); ?>
          <a href="2" class="addnew-momento" id="mayiadd-moments" >Agrega un momento</a>
        </div> <!--your content end-->
    </div> <!--toPopup end-->

<div id="dialog-box-momento" class="dialog-popup"></div>


<?php echo $this->element('menu', array( "trimestre" => 2, "pag" => "ilovemybaby")); ?>

<div class="content">
<?php echo $this->element('trim_menu', array( 'trimestre' => 2)); ?>

<div class="page_title">
  <?php
      echo $this->Html->link(
            'Anterior',
            array('controller' => 'animo_pages', 'action' => 'add'),
            array('class' => 'ant')
        );
  ?>
  <div class="title_page">
    <p>Amo a mi beb&eacute;</p>
  </div>
  <?php 
    echo $this->Html->link(
            'Siguiente',
            array('controller' => 'childsex_pages', 'action' => 'add'),
            array('class' => 'sig')
        );
  ?>
</div>

  <div class="ilovemybabyPages form">
<?php echo $this->Form->create('IlovemybabyPage'); ?>
  <p>
    <label for="IlovemybabyPageToday">Hoy </label>
    <input type="text" id="datepickerCongrats" size="30" readonly="readonly"  class="fecha" value="<?php if($today != ''){
        echo $today; } ?>"/>
    <input type="hidden" name="data[IlovemybabyPage][today][month]" id="CongratsPagePruebaMonth" <?php if($today != ''){ ?>  value="<?php echo $montha; ?>" <?php } ?>  />
    <input type="hidden" name="data[IlovemybabyPage][today][day]" id="CongratsPagePruebaDay" <?php if($today != ''){ ?>  value="<?php echo $dia; ?>" <?php } ?>  />
    <input type="hidden" name="data[IlovemybabyPage][today][year]" id="CongratsPagePruebaYear" <?php if($today != ''){ ?>  value="<?php echo $ano; ?>" <?php } ?>  />
    nunca lo olvidaré porque oí tu corazón por primera vez
  </p>

  <?php
    if(isset($ilovemybby['IlovemybabyPage']['heartbeat'])){
      $heartbeat = $ilovemybby['IlovemybabyPage']['heartbeat'];
    } else{
      $heartbeat = '';
    }
  ?>
  <p>Tac, tac, sonaba como: </p>

  <div class="opcion">
    <label>Caballos Galopantes</label>  
    <input type="radio" name="data[IlovemybabyPage][heartbeat]" value="1" <?php if($heartbeat == 1){
      echo  'checked="checked"'; } ?> />
  </div>
  <div class="opcion">
    <label>Como un tambor</label>
    <input type="radio" name="data[IlovemybabyPage][heartbeat]" value="2" <?php if($heartbeat == 2){
      echo 'checked="checked"'; } ?> />
  </div>
  <div class="opcion">
    <label>Un mar de emociones</label>
    <input type="radio" name="data[IlovemybabyPage][heartbeat]" value="3" <?php if($heartbeat == 3){
      echo 'checked="checked"'; } ?> />
  </div>

  <?php
    if(isset($ilovemybby['IlovemybabyPage']['first_feeling'])){
      $first_feeling = $ilovemybby['IlovemybabyPage']['first_feeling'];
    } else{
      $first_feeling = '';
    }
  ?>
  <label for="IlovemybabyPageFirstFeeling">y lo primero que sentí fue: </label>
  <textarea name="data[IlovemybabyPage][first_feeling]" id="senti">
    <?php if($first_feeling != ''){ echo $first_feeling; } ?>
  </textarea>

    <?php
      echo $this->Form->input('profile_id', array('type' => 'hidden', 'value' => $profileid));
    ?>
<?php echo $this->Form->end(__('Submit')); ?>
</div>

</div>
