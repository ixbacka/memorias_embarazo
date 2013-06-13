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
<?php echo $this->Html->script('functions'); ?>
<?php echo $this->Html->css('redmond/jquery-ui-1.10.3.custom.min'); ?>

<script type="text/javascript">

  $(document).ready(function(){

	<?php if(isset($byebelly['ByebellyPage']['byebelly_date'])){ 

			$source = $byebelly['ByebellyPage']['byebelly_date'];
			$date = new DateTime($source);
			$letime = strtotime($source);

			$mes = get_date_spanish($letime, true, 'month'); # return Enero

			$dia = $date->format('d'); // 31.07.2012
			$ano = $date->format('Y'); // 31-07-2012

			$byebelly_date = $dia.' '.$mes.' '.$ano;
			$monthi = ($date->format('m'))-1;
      $mese = $date->format('m');
		?>
	 $( "#datepickerCongrats" ).datepicker("setDate", new Date(<?php echo $ano.', '.$monthi.', '.$dia;?>));	
	<?php } else{
				$byebelly_date = '';
			}
	?>

	});

</script>

<?php echo $this->element('menu', array( "trimestre" => 3, "pag" => "byebelly")); ?>

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
				    array('controller' => 'nesting_pages', 'action' => 'add'),
				    array('class' => 'ant')
				);
	?>
	<div class="title_page">
		<p>Adios pancita,</p>
		<span>bienvenido beb&eacute;</span>
	</div>
	<?php 
		echo $this->Html->link(
				    'Siguiente',
				    array('controller' => 'specialdelivery_pages', 'action' => 'add'),
				    array('class' => 'sig')
				); 
  ?>
  </div>
	<div class="byebellyPages form">
    <?php echo $this->Form->create('ByebellyPage'); ?>

    <p class="contacciones">
      <label>El d&iacute;a:</label>
      <input type="text" id="datepickerCongrats" size="30" readonly="readonly"  value="<?php if($byebelly_date != ''){ echo $byebelly_date; } ?>"/>
      <input type="hidden" name="data[ByebellyPage][byebelly_date][month]" id="CongratsPagePruebaMonth" <?php if($byebelly_date != ''){ ?>  value="<?php echo $mese; ?>" <?php } ?>  />
      <input type="hidden" name="data[ByebellyPage][byebelly_date][day]" id="CongratsPagePruebaDay" <?php if($byebelly_date != ''){ ?>  value="<?php echo $dia; ?>" <?php } ?>  />
      <input type="hidden" name="data[ByebellyPage][byebelly_date][year]" id="CongratsPagePruebaYear" <?php if($byebelly_date != ''){ ?>  value="<?php echo $ano; ?>" <?php } ?>  />
      comenzaron las contracciones.
    </p>
    <p> ¡Ay no, ay no, que nervios! mi labor de parto comenzó: </p>
    <?php
      if(isset($byebelly['ByebellyPage']['itstarted'])){
        $itstarted = $byebelly['ByebellyPage']['itstarted'];
      } else{
        $itstarted = '';
      }
      if(isset($byebelly['ByebellyPage']['days1'])){
        $days1 = $byebelly['ByebellyPage']['days1'];
      } else{
        $days1 = '';
      }
       if(isset($byebelly['ByebellyPage']['days2'])){
        $days2 = $byebelly['ByebellyPage']['days2'];
      } else{
        $days2 = '';
      }
     ?>
    <div class="opciones">
      <p class="opcion cf">
        <input type="radio" name="data[ByebellyPage][itstarted]" value="1" <?php if($itstarted == 1){ echo 'checked="checked"'; } ?> />
        <label>
          <input type="number" min="0" value="<?php if($days1 != '' && $itstarted == 1){ echo $days1; } ?>" name="data[ByebellyPage][days1]"> días antes de mi fecha programada
        </label>
      </p>
      <p class="opcion cf">
        <input type="radio" name="data[ByebellyPage][itstarted]" value="2" <?php if($itstarted == 2){ echo 'checked="checked"'; } ?> />
        <label>
          <input type="number" min="0" value="<?php if($days2 != '' && $itstarted == 2 ){ echo $days2; } ?>" name="data[ByebellyPage][days2]"> días tarde (¡Sáquenmelo!)
        </label>
      </p>
      <p class="opcion cf">
        <input type="radio" name="data[ByebellyPage][itstarted]" value="3" <?php if($itstarted == 3){ echo 'checked="checked"'; } ?> />
        <label>Justo a tiempo</label>
      </p>
      <p class="nota"> Ninguna de las anteriores: </p>
      <p class="opcion cf">
        <input type="radio" name="data[ByebellyPage][itstarted]" value="4" <?php if($itstarted == 4){ echo 'checked="checked"'; } ?> />
        <label>Fue inducido</label>
      </p>
      <p class="opcion cf">
        <input type="radio" name="data[ByebellyPage][itstarted]" value="5" <?php if($itstarted == 5){ echo 'checked="checked"'; } ?> />
        <label>Por ces&aacute;rea</label>
      </p>
    </div>
    <?php
      if(isset($byebelly['ByebellyPage']['hours'])){
        $hours = $byebelly['ByebellyPage']['hours'];
      } else{
        $hours = '';
    }	?>
    <p class="horas">
      <label>Total de horas en labor de parto </label>
      <input type="text" name="data[ByebellyPage][hours]" value="<?php if($hours != ''){ echo $hours; } ?>" >
    </p>

    <?php if(isset($byebelly['ByebellyPage']['iwas'])){
        $iwas = $byebelly['ByebellyPage']['iwas'];
      } else{
        $iwas = '';
    } ?>
    <div class="estaba">
      <label>Cuando comenzaron las contracciones yo estaba: </label>
      <input type="text" name="data[ByebellyPage][iwas]" value="<?php if($iwas != ''){ echo $iwas; } ?>" >
    </div>

    <?php if(isset($byebelly['ByebellyPage']['experience'])){
        $experience = $byebelly['ByebellyPage']['experience'];
      } else{
        $experience = '';
      } ?>
    <div class="exp">
      <label>La experiencia completa de la labor de parto: </label>
      <input type="text" name="data[ByebellyPage][experience]" value="<?php if($experience != ''){ echo $experience; } ?>" >
    </div>

    <?php echo $this->Form->input('profile_id', array('type' => 'hidden', 'value' => $profileid)); ?>
    <?php echo $this->Form->end(__('Submit')); ?>
  </div>
</div>
