<?php echo $this->Html->script('functions'); ?>
<?php echo $this->Html->script('jquery-ui/js/jquery-ui-1.10.3.custom.min'); ?>
<?php echo $this->Html->css('redmond/jquery-ui-1.10.3.custom.min'); ?>
<style type="text/css">

.ant{
	background-image: none;
	background: transparent;
}

</style>

<?php if(isset($congrats['CongratsPage']['prueba'])){ 

			$source = $congrats['CongratsPage']['prueba'];
			$date = new DateTime($source);
			$letime = strtotime($source);

			$mes = get_date_spanish($letime, true, 'month'); # return Enero

			$dia = $date->format('d'); // 31.07.2012
			$ano = $date->format('Y'); // 31-07-2012

			$prueba = $dia.' '.$mes.' '.$ano;
			$monthi = ($date->format('m'))-1;
			$month_prueba = $date->format('m');
		?>
<script type="text/javascript">
$(document).ready(function(){

	 $( "#datepickerCongrats" ).datepicker("setDate", new Date(<?php echo $ano.', '.$monthi.', '.$dia;?>));	
});

</script>
<?php } else{
			$prueba = '';
		}
?>

<?php echo $this->element('menu', array( "trimestre" => 1, 'pag' => 'congrats')); ?>

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

	if(isset($congrats['CongratsPage']['sospeche'])){
		$sospeche = $congrats['CongratsPage']['sospeche'];
	} else{
		$sospeche = '';
	}
		echo $this->Form->input('sospeche', array('label' => 'Sospeché que estaba embarazada cuando: '
			, 'after' => '</span>','between' => '<span>', 'value' => $sospeche, 'maxlength' => '48' )); 

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
    	<label>Me hice una prueba de embarazo el día: </label>
    	<span><input type="text" id="datepickerCongrats" size="30" readonly="readonly"  value="<?php if($prueba != ''){
    		echo $prueba; } ?>"/></span>
    	<input type="hidden" name="data[CongratsPage][prueba][month]" id="CongratsPagePruebaMonth" <?php if($prueba != ''){ ?>  value="<?php echo $month_prueba; ?>" <?php } ?>/>
			<input type="hidden" name="data[CongratsPage][prueba][day]" id="CongratsPagePruebaDay" <?php if($prueba != ''){ ?>  value="<?php echo $dia; ?>" <?php } ?> />
			<input type="hidden" name="data[CongratsPage][prueba][year]" id="CongratsPagePruebaYear" <?php if($prueba != ''){ ?>  value="<?php echo $ano; ?>" <?php } ?> />
		</div>

	<?php

	if(isset($congrats['CongratsPage']['firstfeeling'])){
		$firstfeeling = $congrats['CongratsPage']['firstfeeling'];
	} else{
		$firstfeeling = '';
	}
		echo $this->Form->input('firstfeeling', array('label' => 'Lo primero que sentí fue: ','after' => '</span>','between' => '<span>', 'value' => $firstfeeling, 'maxlength' => '61'));
		/*
		echo $this->Form->input('babycoming', array('label' => 'Tenía '));
		echo $this->Form->input('howishare', array('label' => 'semanas de embarazo cuando me enteré que venía el bebé en camino, ahh que emoción!. Compartí la gran noticia con el papá de mi bebé de esta manera: ', 'after' => '</span>','between' => '<span>',  'before' => '<p>semanas de embarazo cuando me enteré que venía el bebé en camino, ahh que emoción!. Compartí la gran noticia con el papá de mi bebé de esta manera:</p>', 'label' => false));
		*/?>
		<div class="input number"><p>
		<label for="CongratsPageBabycoming">Tenía </label>
		<input name="data[CongratsPage][babycoming]" type="number" min="0" max="41" id="CongratsPageBabycoming" value="<?php if( isset($congrats['CongratsPage']['babycoming'])){ echo $congrats['CongratsPage']['babycoming']; }?>">
		 semanas de embarazo cuando me enteré que venía el bebé en camino, ahh que emoción!. Compartí la gran noticia con el papá de mi bebé de esta manera:
		 <input name="data[CongratsPage][howishare]" maxlength="81" type="text" id="CongratsPageHowishare" value="<?php if(isset($congrats['CongratsPage']['howishare'])){ echo $congrats['CongratsPage']['howishare']; } ?>">
		</p>
		</div>
		<?php


	if(isset($congrats['CongratsPage']['babynum'])){
		$babynum = $congrats['CongratsPage']['babynum'];
	} else{
		$babynum = '';
	}
	if(isset($congrats['CongratsPage']['babybros'])){
		$babybros = $congrats['CongratsPage']['babybros'];
	} else{
		$babybros = '';
	}
		echo $this->Form->input('babynum', array('label' => 'Éste es mi bebé número: ', 'value' => $babynum, 'min' => 0, 'max' => '41'));
		echo $this->Form->input('babybros',array('label' => 'Los hermanitos del bebé reaccionaron así: ', 'after' => '</span>','between' => '<span>', 'value' => $babybros,'maxlength' =>
'50')));
		/*
		echo $this->Form->input('details',array('label' => '¡Anota todos los detalles antes de que se te olviden!... ¿Cómo y dónde celebraste  saber que estabas embarazada? ¿Con quién compartiste el momento? ¿Cómo  reaccionaron tus familiares? ¿Cuál fue la primera compra que hiciste o regalo que te dieron para el bebé?', 'after' => '</span>','between' => '<span>'));
		*/
	?>
	<div class="input text">
	<p id="last_input">¡Anota todos los detalles antes de que se te olviden!... ¿Cómo y dónde celebraste  saber que estabas embarazada? ¿Con quién compartiste el momento? ¿Cómo  reaccionaron tus familiares? ¿Cuál fue la primera compra que hiciste o regalo que te dieron para el bebé?
	<span>

		<!-- <input name="data[CongratsPage][details]" maxlength="400" type="text" id="CongratsPageDetails" value="<?php if(isset($congrats['CongratsPage']['details'])){ echo $congrats['CongratsPage']['details']; }?>"> -->

		<textarea name="data[CongratsPage][details]" maxlength="600" id="CongratsPageDetails"><?php if(isset($congrats['CongratsPage']['details'])){ echo $congrats['CongratsPage']['details']; }?></textarea>

	</span></p>
	</div>
		<?php
			echo $this->Form->input('profile_id', array('type' => 'hidden', 'value' => $profileid));
		?>
<?php echo $this->Form->end(__('Submit')); ?>
</div>

<p class="aux_text">
 Aquí puedes escribir todo lo que sientas y quieras recordar cuando tengas a tu bebé. 
</p>

</div>
