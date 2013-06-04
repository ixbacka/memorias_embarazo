<?php echo $this->Html->script('jquery.booklet.latest.min'); ?>
<?php echo $this->Html->script('jquery.easing.1.3'); ?>
<SCRIPT TYPE="text/javascript">

$(function() {
    $('#mybook').booklet({
        width:  600,
        height: 200
    });
});

</SCRIPT>
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

<!-- cover.ctp -->
<STYLE TYPE="text/css">
<?php if( isset($cover_pic) ){ ?>

.book-cover_photo{
  width: 392px;
  height: 297px;
  position: absolute;
  left: 209px;
  background-image: url(https://operacionxperia.com/momtomom/memorias_embarazo/img/marco.png), url(https://operacionxperia.com/momtomom/memorias_embarazo/img/cover_photos/<?php echo str_replace(' ', '%20', $cover_pic); ?>);
  background-position: top left, center center;
  background-size: 392px 297px,  329px 265px;
  background-repeat: no-repeat;
  text-indent: -9999px;
}
<?php }?>

</STYLE>
<div class="booklet" id="mybook">
  <div class="b-page b-page-0 b-p1">
    <div class="b-page-cover b-wrap b-wrap-left">

    <div class="book-header">  
    </div>

    <div class="book-content">
      <div class="book-cover_photo">
      </div>
    </div>

    <div class="book-footer">
      <div class="book-footer_mtm">Mom to mom , Consintiendo mi piel de mam&aacute;</div>
    </div>

    </div>
  </div>
</div>
<!-- PAGINA 1 -->
<div class="b-page b-page-1 b-p2">
  <div class="b-wrap b-wrap-right">
    <div class="book-header">  
    </div>

    <div class="book-content">

      <div class="book-page_title">
        <div class="book-title_page"><p>&iexcl;Felicidades!</p><br> 
          <span>La prueba es positiva</span></div>
      </div>

      <div class="book-form"> 
        <?php 

          if(isset($congrats['CongratsPage']['prueba'])){ 
          $source = $congrats['CongratsPage']['prueba'];
          $date = new DateTime($source);
          $letime = strtotime($source);

          $mes = get_date_spanish($letime, true, 'month'); # return Enero

          $dia = $date->format('d'); // 31.07.2012
          $ano = $date->format('Y'); // 31-07-2012

          $prueba = $dia.' '.$mes.' '.$ano;
          $monthi = ($date->format('m'))-1;
          $month_prueba = $date->format('m');
          } else{
          $prueba = '';
          }

          if(isset($congrats['CongratsPage']['sospeche'])){
            $sospeche = $congrats['CongratsPage']['sospeche'];
          } else{
            $sospeche = '';
          }
        ?>

        <label>Sospeché que estaba embarazada cuando:</label>
        <?php echo $sospeche; ?>
      
        <label>Me hice una prueba de embarazo el día: </label>
        <span><?php echo $prueba; ?></span>

        <?php
          if(isset($congrats['CongratsPage']['firstfeeling'])){
            $firstfeeling = $congrats['CongratsPage']['firstfeeling'];
          } else{
            $firstfeeling = '';
          }
        ?>
        
        <label>Lo primero que sentí fue:</label>
        <span><?php echo $firstfeeling; ?></span>

        <p>
        <label for="CongratsPageBabycoming">Tenía <?php if( isset($congrats['CongratsPage']['babycoming'])){ echo $congrats['CongratsPage']['babycoming']; } ?> semanas de embarazo cuando me enteré que venía el bebé en camino, ahh que emoción!. Compartí la gran noticia con el  papá de mi bebé de esta manera: </label>
         <span><?php if(isset($congrats['CongratsPage']['howishare'])){ echo $congrats['CongratsPage']['howishare']; } ?></span>
        </p>

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
        ?>

        <label>Éste es mi bebé número: </label>
        <span><?php if($babynum != ''){ echo $babynum; } ?></span>

        <label>Los hermanitos del bebé reaccionaron así</label>
        <span><?php if($babybros != ''){ echo $babybros; } ?></span>


        <div class="input text">
        <p id="last_input">¡Anota todos los detalles antes de que se te olviden!... ¿Cómo y dónde celebraste  saber que estabas embarazada? ¿Con quién compartiste el momento? ¿Cómo  reaccionaron tus familiares? ¿Cuál fue la primera compra que hiciste o regalo que te dieron para el bebé?
        <span>
          <?php if(isset($congrats['CongratsPage']['details'])){ echo $congrats['CongratsPage']['details']; }?>
        </span>
        </p>
        </div>
      </div>
    </div>

    <div class="book-footer">
      <div class="book-footer_mtm">Mom to mom , Consintiendo mi piel de mam&aacute;</div>
    </div>

    </div>
  </div> 
<!-- PAGINA 2 -->
  <div class="b-page b-page-2 b-p3">
    <div class="b-page b-page-2 b-p3">
    <?php 
      if(isset($firstvisit['FirstVisitPage']['estimated'])){ 
        $source = $firstvisit['FirstVisitPage']['estimated'];
        $date = new DateTime($source);
        $letime = strtotime($source);

        $mes = get_date_spanish($letime, true, 'month'); # return Enero

        $dia = $date->format('d'); // 31.07.2012
        $ano = $date->format('Y'); // 31-07-2012

        $estimated = $dia.' '.$mes.' '.$ano;
        $monthi = ($date->format('m'))-1;
        $mesuco = $date->format('m');
      } else{
        $estimated = '';
      }
    ?>

<div class="content">

<div class="page_title">
 
  <div class="title_page"><p>Mi Primer visita</p><br> 
  <span>al ginec&oacute;logo</span></div>
 
</div>

  <div class="congratsPages form">
  
  <?php

  if(isset($firstvisit['FirstVisitPage']['gin'])){
    $gin = $firstvisit['FirstVisitPage']['gin'];
  } else{
    $gin = '';
  }
   if(isset($firstvisit['FirstVisitPage']['estimated'])){
    $estimated = $firstvisit['FirstVisitPage']['estimated'];
  } else{
    $estimated = '';
  }
  ?>
  <label>Mi ginecólogo es: </label>
  <span><?php echo $gin; ?></span>

    <div class="input date">
      <label>Fecha estimada en que nacerás: </label>
      <span><?php if($estimated != ''){ echo $estimated; } ?></span>
     </div>

  <?php

  if(isset($firstvisit['FirstVisitPage']['weight'])){
    $weight = $firstvisit['FirstVisitPage']['weight'];
  } else{
    $weight = '';
  }
   ?>
   <label>Mi peso actual: </label>
   <span><?php echo $weight; ?></span>
   <?php
      if(isset($firstvisit['FirstVisitPage']['measurements'])){
        $measurements = $firstvisit['FirstVisitPage']['measurements'];
      } else{
        $measurements = '';
      }
?>
  <label>Las medidas de mi pancita:</label>
  <span><?php echo $measurements; ?></span>
  <?php   
      if(isset($firstvisit['FirstVisitPage']['firstvisit'])){
        $firstvisit = $firstvisit['FirstVisitPage']['firstvisit'];
      } else{
        $firstvisit = '';
      }
   ?>
   <label>Lo que recuerdo de mi primera visita es:</label>
   <span><?php echo $firstvisit; ?></span>
</div>

</div>
  <div class="footer">
    <div class="footer_mtm">Mom to mom , Consintiendo mi piel de mam&aacute;</div>
    <a href="http://www.momtomom.com.mx/" class="footer_link" target="_blank">www.momtomom.mx</a>
    <a href="https://twitter.com/momtomommx" class="footer_twitter" target="_blank">@momtomommx</a>
  </div>
</div>
</div>



</div><!-- FIN DEL LIBRO -->