
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js" type="text/javascript"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.10.1/jquery-ui.min.js" type="text/javascript"></script>
<?php echo $this->Html->script('jquery.easing.1.3'); ?>
<?php echo $this->Html->script('jquery.booklet.latest.min'); ?>


<SCRIPT TYPE="text/javascript">
$(document).ready(function() {
  // Handler for .ready() called.
  $('#mybook').booklet({
        width:  500,
        height: 900
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
    <div class="b-wrap b-wrap-left">

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




  <div class="title_page"><p>Soy Yo...</p></div>


  <div class="whoami_left">
    <div class="whoami_photo">
      <input type="hidden" name="data[WhoamiPage][url_photo]" id="photo_url_" value=""/>
      <div class="pick_fb">Elegir de Facebook</div>
      <?php
        echo $this->Form->file('photo', array('class' => 'upload_bt', 'onchange' => 'readURL(this);' ));
      ?>
    </div>
  </div>
  <div class="whoami_right">
  <?php

  if(isset($whoami['WhoamiPage']['name'])){
    $name = $whoami['WhoamiPage']['name'];
  } else{
    $name = '';
  }
    echo $this->Form->input('name', array('label' => 'Yo soy: '
      , 'after' => '</span>','between' => '<span>', 'value' => $name )); 

  if(isset($whoami['WhoamiPage']['age'])){
    $age = $whoami['WhoamiPage']['age'];
  } else{
    $age = '';
  }
    echo $this->Form->input('age', array('label' => 'Tengo ','after' => ' años </p>','between' => ' ', 'before'=> '<p>', 'value' => $age));


      if(isset($whoami['WhoamiPage']['profesion'])){
        $profesion = $whoami['WhoamiPage']['profesion'];
      } else{
        $profesion = '';
      }

      echo $this->Form->input('profesion', array('label' => 'Me dedico a: ','after' => '</span>','between' => '<span>', 'value' => $profesion));

      if(isset($whoami['WhoamiPage']['location'])){
        $location = $whoami['WhoamiPage']['location'];
      } else{
        $location = '';
      }
    echo $this->Form->input('location',array('label' => 'Vivo en: ', 'after' => '</span>','between' => '<span>', 'value' => $location));

      if(isset($whoami['WhoamiPage']['dadsname'])){
        $dadsname = $whoami['WhoamiPage']['dadsname'];
      } else{
        $dadsname = '';
      }
    echo $this->Form->input('dadsname',array('label' => 'Y el papá: ', 'after' => '</span>','between' => '<span>', 'value' => $dadsname));

      if(isset($whoami['WhoamiPage']['remember'])){
        $remember = $whoami['WhoamiPage']['remember'];
      } else{
        $remember = '';
      }
    echo $this->Form->input('remember',array('label' => 'El día de mañana quiero recordar que yo: ', 'value' => $remember));
  ?>
    <?php
      echo $this->Form->input('profile_id', array('type' => 'hidden', 'value' => $profileid));
    ?>  
    <?php echo $this->Form->end(__('Submit')); ?>
</div>
</div>
</div>
  <div class="footer">
    <div class="footer_mtm">Mom to mom , Consintiendo mi piel de mam&aacute;</div>
    <a href="http://www.momtomom.com.mx/" class="footer_link" target="_blank">www.momtomom.mx</a>
    <a href="https://twitter.com/momtomommx" class="footer_twitter" target="_blank">@momtomommx</a>
  </div>











  <!-- add.ctp -->

  <div class="title_page"><p>Súper cool</p>
    <span>fotos del ultrasonido</span>
  </div>
  <p class="middle_note">Cariño me puedes detener el cabello SOS... no me siento tan bien!</p>

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
    <?php

    if(isset($sintoms['SintomPage']['weirdestcraving'])){
      $weirdestcraving = $sintoms['SintomPage']['weirdestcraving'];
    } else{
      $weirdestcraving = '';
    }
      echo $this->Form->input('weirdestcraving', array('label' => 'Mmmm! cuando se trata de antojos<br>El antojito más raro que he tenido es: ', 'value' => $weirdestcraving )); 
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
<p class="note_sintom_">Hay que darle a la panza lo que pide. ¿No? Tengo que cuidar mi peso.</p>
</div>
  <div class="footer">
    <div class="footer_mtm">Mom to mom , Consintiendo mi piel de mam&aacute;</div>
    <a href="http://www.momtomom.com.mx/" class="footer_link" target="_blank">www.momtomom.mx</a>
    <a href="https://twitter.com/momtomommx" class="footer_twitter" target="_blank">@momtomommx</a>
  </div>
