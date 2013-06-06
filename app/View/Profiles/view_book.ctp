<?php 
        $tema = $perfil['Profile']['theme'];
        if($tema == 1){ 
          echo $this->Html->css('tema1'); 
          echo $this->Html->css('book1'); 
        } 
        elseif($tema == 2){ 
          echo $this->Html->css('tema2'); 
             echo $this->Html->css('book2'); 
        } 
        elseif($tema == 3){ 
          echo $this->Html->css('tema3'); 
             echo $this->Html->css('book3'); 
        
        } 
        elseif($tema == 4){ 
          echo $this->Html->css('tema4'); 
             echo $this->Html->css('book4'); 
        }

        $font = $perfil['Profile']['font'];
        if($font == 1){ echo $this->Html->css('letra1'); } 
        elseif($font == 2){ echo $this->Html->css('letra2'); } 
        elseif($font == 3){ echo $this->Html->css('letra3'); } 
        elseif($font == 4){ echo $this->Html->css('letra4'); } 
  ?> 



<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js" type="text/javascript"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.10.1/jquery-ui.min.js" type="text/javascript"></script>
<?php echo $this->Html->script('jquery.easing.1.3'); ?>
<?php echo $this->Html->script('jquery.booklet.latest.min'); ?>
<?php echo $this->Html->css('jquery.booklet.latest');  ?>




<SCRIPT TYPE="text/javascript">
$(document).ready(function() {
  // Handler for .ready() called.
  $('#mybook').booklet({
        width:  900,
        height: 600,
        closed: true,
        covers: true
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
body{
  background-image: url(../../img/retina_wood.png);
}


.b-page-0, .b-page-7{
  opacity: 0;
}

#mybook{
  position: absolute;
  top: 3%;
  left: 50%;
  margin-left: -450px;
}

<?php if( isset($cover_pic) ){ ?>

.book-cover-photo{
  background-image: url(../../img/marco.png), url(../../img/cover_photos/<?php echo str_replace(' ', '%20', $cover_pic); ?>);
  background-position: top left, center center;
  background-size: 280px 200px,  235px 180px;
  background-repeat: no-repeat;
  text-indent: -9999px;
}
<?php }?>



<?php if( isset($whoami['WhoamiPage']['photo']) ){ ?>
.whoami_photo{
  background-image: url(../../img/marco_whoami.png), url(../../img/cover_photos/<?php echo str_replace(' ','%20',$whoami['WhoamiPage']['photo']); ?>);
  background-size: 190px, 170px;
}
<?php }?>



<?php if( isset($ultrasound['UltrasoundPage']['first_photo']) ){ ?>
#ultrasound_photo_1{
  background-image: url(../../img/marco.png), url(../../img/cover_photos/<?php echo str_replace(' ','%20',$ultrasound['UltrasoundPage']['first_photo']); ?>);
  background-size: 200px, 162px 133px;
  background-position: top left, center center;
  background-repeat: no-repeat;   
}
<?php }?>

<?php if( isset($ultrasound['UltrasoundPage']['second_photo']) ){ ?>
#ultrasound_photo_2{
  background-image: url(../../img/marco.png), url(../../img/cover_photos/<?php echo str_replace(' ','%20',$ultrasound['UltrasoundPage']['second_photo']); ?>);
  background-size: 200px, 162px 133px;
}
<?php }?>



  <?php if( isset($belly['BellyPage']['photo1']) ){ ?>
  #photo1{
    background-image: url(../../img/marco.png), url(../../img/cover_photos/<?php echo str_replace(' ','%20',$belly['BellyPage']['photo1']); ?>);
  }
  <?php }?>


  <?php if( isset($belly['BellyPage']['photo2']) ){ ?>
  #photo2{
    background-image: url(../../img/marco.png), url(../../img/cover_photos/<?php echo str_replace(' ','%20',$belly['BellyPage']['photo2']); ?>);
  }
  <?php }?>


  <?php if( isset($belly['BellyPage']['photo3']) ){ ?>
  #photo3{
    background-image: url(../../img/marco.png), url(../../img/cover_photos/<?php echo str_replace(' ','%20',$belly['BellyPage']['photo3']); ?>);
    
  }
  <?php }?>


<?php if( isset($firstkick['FirstkickPage']['photo']) ){ ?>

.firstkick_photo{
  background-image: url(../img/marco.png), url(../img/cover_photos/<?php echo str_replace(' ','%20',$firstkick['FirstkickPage']['photo']); ?>);
  background-size: 297px 392px, 225px 320px;
}

<?php }?>

</STYLE>



<div id="mybook">
  <div> 
     <div class="book-header"></div>
     <div class="book-cover-photo"></div>
     <div class="book-footer"></div>
    
  </div>
  <div> 
      <div class="book-header"></div>

      <div class="book-content">

      <div class="book-page-title">
        <div class="book-title-page"><p>&iexcl;Felicidades!</p><br> 
          <span>La prueba es positiva</span>
        </div>
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

           if(isset($congrats['CongratsPage']['firstfeeling'])){
            $firstfeeling = $congrats['CongratsPage']['firstfeeling'];
          } else{
            $firstfeeling = '';
          }

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

        <p>
          <label>Sospeché que estaba embarazada cuando:</label>
          <span><?php echo $sospeche; ?></span> 
        </p>
      
        <p>
          <label>Me hice una prueba de embarazo el día: </label>
          <span><?php echo $prueba; ?></span>
        </p>

        <p>
          <label>Lo primero que sentí fue:</label>
          <span><?php echo $firstfeeling; ?></span>
        </p>

        <p>
        <label for="CongratsPageBabycoming">Tenía <span><?php if( isset($congrats['CongratsPage']['babycoming'])){ echo $congrats['CongratsPage']['babycoming']; } ?></span> semanas de embarazo cuando me enteré que venía el bebé en camino, ahh que emoción!. Compartí la gran noticia con el  papá de mi bebé de esta manera: </label>
         <span><?php if(isset($congrats['CongratsPage']['howishare'])){ echo $congrats['CongratsPage']['howishare']; } ?></span>
        </p>

        <p>
          <label>Éste es mi bebé número: </label>
          <span><?php if($babynum != ''){ echo $babynum; } ?></span>
        </p>

        <p>
          <label>Los hermanitos del bebé reaccionaron así</label>
          <span><?php if($babybros != ''){ echo $babybros; } ?></span>
        </p>

        <p id="last_input">
          ¡Anota todos los detalles antes de que se te olviden!... ¿Cómo y dónde celebraste  saber que estabas embarazada? ¿Con quién compartiste el momento? ¿Cómo  reaccionaron tus familiares? ¿Cuál fue la primera compra que hiciste o regalo que te dieron para el bebé?
          <span>
          <?php if(isset($congrats['CongratsPage']['details'])){ echo $congrats['CongratsPage']['details']; }?>
          </span>
        </p>

      </div>
    </div>

     <div class="book-footer"></div>

  </div>
  <div> 
    <div class="book-header"></div>

      <div class="book-content">

      <div class="book-page-title">
        <div class="book-title-page">
          <p>Mi Primer visita</p><br> 
          <span>al ginec&oacute;logo</span>
        </div>
      </div>

      <div class="book-form"> 

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
          if(isset($firstvisit['FirstVisitPage']['weight'])){
            $weight = $firstvisit['FirstVisitPage']['weight'];
          } else{
            $weight = '';
          }
           if(isset($firstvisit['FirstVisitPage']['measurements'])){
            $measurements = $firstvisit['FirstVisitPage']['measurements'];
          } else{
            $measurements = '';
          }
          if(isset($firstvisit['FirstVisitPage']['firstvisit'])){
            $firstvisit = $firstvisit['FirstVisitPage']['firstvisit'];
          } else{
            $firstvisit = '';
          }
        ?>
        <p>
          <label>Mi ginecólogo es: </label>
          <span><?php echo $gin; ?></span>
        </p>
        <p>
          <label>Fecha estimada en que nacerás: </label>
          <span><?php echo $estimated;?></span>
        </p>
        <p>
         <label>Mi peso actual: </label>
         <span><?php echo $weight; ?></span>
        </p>

        <p>
          <label>Las medidas de mi pancita:</label>
          <span><?php echo $measurements; ?></span>
        </p>
        <p>
          <label>Lo que recuerdo de mi primera visita es:</label>
          <span><?php echo $firstvisit; ?></span>
        </p>
      </div>
    </div>

     <div class="book-footer"></div>        
 
  </div>
  <div> 

      <div class="book-header"></div>

      <div class="book-content">

        <div class="book-page-title">
          <div class="book-title-page">
            <p>Quien Soy Yo...</p>
          </div>
        </div>

        <div class="book-form"> 

          <div class="whoami_photo"> </div>

          <?php

            if(isset($whoami['WhoamiPage']['name'])){
              $name = $whoami['WhoamiPage']['name'];
            } else{
              $name = '';
            }
            if(isset($whoami['WhoamiPage']['age'])){
              $age = $whoami['WhoamiPage']['age'];
            } else{
              $age = '';
            }

            if(isset($whoami['WhoamiPage']['profesion'])){
              $profesion = $whoami['WhoamiPage']['profesion'];
            } else{
              $profesion = '';
            }

            if(isset($whoami['WhoamiPage']['location'])){
              $location = $whoami['WhoamiPage']['location'];
            } else{
              $location = '';
            }

            if(isset($whoami['WhoamiPage']['dadsname'])){
              $dadsname = $whoami['WhoamiPage']['dadsname'];
            } else{
              $dadsname = '';
            }

            if(isset($whoami['WhoamiPage']['remember'])){
              $remember = $whoami['WhoamiPage']['remember'];
            } else{
              $remember = '';
            }
          ?>
          <div class="whoami_rite">
            <p>
              <label>Yo soy:</label>
              <span><?php echo $name; ?></span>
            </p>
            <p>
              <label> Tengo </label>
              <span><?php echo $age; ?></span> a&ntilde;os
            </p>
            <p>
              <label> Me dedico a: </label>
              <span><?php echo $profesion; ?></span>
            </p>
            <p>
              <label>Vivo en: </label>
              <span><?php echo $location; ?></span>
            </p>
            <p>
              <label>Y el papá:</label>
              <span><?php echo $dadsname; ?></span>
            </p>
            <p>
              <label>El día de mañana quiero recordar que yo: </label>
              <span><?php echo $remember; ?></span>
            </p>
          </div>

        </div>
      
      </div>

     <div class="book-footer"></div>

  </div>
  <div> 

      <div class="book-header"></div>

      <div class="book-content">

        <div class="book-page-title">
          <div class="book-title-page">
            <p>Primeros</p> <br>
            <span>S&iacute;ntomas y malestares</span>
          </div>
        </div>

        <div class="book-form"> 
          <p class="middle_note" id="middle_note">
            Cariño me puedes detener el cabello SOS... no me siento tan bien!
          </p>

          <?php
            if(isset($sintoms['SintomPage']['matutinos'])){
              $matutinos = $sintoms['SintomPage']['matutinos'];
            } else{
              $matutinos = '';
            }

            if(isset($sintoms['SintomPage']['worst'])){
              $worst = $sintoms['SintomPage']['worst'];
            } else{
              $worst = '';
            }

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
            if(isset($sintoms['SintomPage']['weirdestcraving'])){
              $weirdestcraving = $sintoms['SintomPage']['weirdestcraving'];
            } else{
              $weirdestcraving = '';
            }
          ?>

            <p class="first_line">
              <label>Ouch, empiezan los malestares matutinos y yo me siento: </label>
              <span><?php echo $matutinos; ?></span>
            </p>
            <p>
              <label> Pero cuando me siento peor es:  </label>
              <span><?php echo $worst; ?></span>
            </p>

            <div class="cravings">
              <label>Antojos</label>
              <div>
                <span><?php echo $craving1; ?></span>
                <span><?php echo $craving2; ?></span>
                <span><?php echo $craving3; ?></span>
                <span><?php echo $craving4; ?></span>
                <span><?php echo $craving5; ?></span>
                <span><?php echo $craving6; ?></span>
              </div>
            </div>

            <div class="grossnes">
              <label>Ascos</label>
              <div>
                <span><?php echo $gross1; ?></span>
                <span><?php echo $gross2; ?></span>
                <span><?php echo $gross3; ?></span>
                <span><?php echo $gross4; ?></span>
                <span><?php echo $gross5; ?></span>
                <span><?php echo $gross6; ?></span>
              </div>
            </div>

            <p class="weirdest-craving">
              <label>
                Mmmm! cuando se trata de antojos<br>
                El antojito más raro que he tenido es: 
              </label>
              <span><?php echo $weirdestcraving; ?></span>
            </p>
            
            <p class="note_sintom">
              Hay que darle a la panza lo que pide. ¿No? Tengo que cuidar mi peso.
            </p>

          </div>

        </div>
     <div class="book-footer"></div>

  </div> 
  <div> 

      <div class="book-header"></div>

      <div class="book-content">

        <div class="book-page-title">
          <div class="book-title-page">
            <p>s&uacute;per cool</p>
            <br>
            <span>fotos del ultrasonido</span>
          </div>
        </div>

        <div class="book-form">

        <?php 

          if(isset($ultrasound['UltrasoundPage']['first_date'])){ 
          $source = $ultrasound['UltrasoundPage']['first_date'];
          $date = new DateTime($source);
          $letime = strtotime($source);

          $mes = get_date_spanish($letime, true, 'month'); # return Enero

          $dia = $date->format('d'); // 31.07.2012
          $ano = $date->format('Y'); // 31-07-2012
          //2013-05-16
          $first_date = $ano.'-'.$date->format('m').'-'.$dia;
          $monthi = ($date->format('m'))-1;
              $first_date_dia = $dia;
              $first_date_mes = $date->format('m');
              $first_date_ano = $ano;
          } else{
            $first_date = '';
          }
          if(isset($ultrasound['UltrasoundPage']['second_date'])){ 

            $source = $ultrasound['UltrasoundPage']['second_date'];
            $date = new DateTime($source);
            $letime = strtotime($source);

            $mes1 = get_date_spanish($letime, true, 'month'); # return Enero

            $dia1 = $date->format('d'); // 31.07.2012
            $ano1 = $date->format('Y'); // 31-07-2012

            $second_date = $ano1.'-'.$date->format('m').'-'.$dia1;
            $second_date_dia = $dia1;
            $second_date_mes = $date->format('m');
            $second_date_ano = $ano1;

            $monthi1 = ($date->format('m'))-1;
           } else{
            $second_date = '';
          }

            if(isset($ultrasound['UltrasoundPage']['first_notes'])){
              $first_notes = $ultrasound['UltrasoundPage']['first_notes'];
            } else{
              $first_notes = '';
            }

            if(isset($ultrasound['UltrasoundPage']['second_notes'])){
              $second_notes = $ultrasound['UltrasoundPage']['second_notes'];
            } else{
              $second_notes = '';
            }

          ?>
            
            <div id="ultrasound_photo_1">  </div>

            <div class='ultrasound-first'>
            <h3>Primer Ultrasonido</h3>
            <p>
              <label>Fu&iacute; el:</label>
              <span><?php echo $first_date; ?></span>
            </p>
            <p>
              <label> Ten&iacute;a </label>
              <span><?php if( isset($ultrasound['UltrasoundPage']['first_week'])){ echo $ultrasound['UltrasoundPage']['first_week']; }?></span> semanas de embarazo
            </p>
            <p>
              <label> Anotaci&oacute;n: </label>
              <span><?php echo $first_notes; ?></span>
            </p>
           </div>

            <div id="ultrasound_photo_2">  </div>

            <div class='ultrasound-second'>
            <h3>Segundo Ultrasonido</h3>
            <p>
              <label>Fu&iacute; el:</label>
              <span><?php echo $second_date; ?></span>
            </p>
            <p>
              <label> Ten&iacute;a </label>
              <span><?php if( isset($ultrasound['UltrasoundPage']['second_week'])){ echo $ultrasound['UltrasoundPage']['second_week']; }?></span> semanas de embarazo
            </p>
            <p>
              <label> Anotaci&oacute;n: </label>
              <span><?php echo $second_notes; ?></span>
            </p>
           </div>

        </div>
      
      </div>

     <div class="book-footer"></div>

  </div>
  <div> 
      <div class="book-header"></div>

      <div class="book-content">

        <div class="book-page-title">
          <div class="book-title-page">
            <p>Mi pancita</p><br>
            <span>mes a mes</span>
          </div>
        </div>

        <div class="book-form">

          <div id="photo1">
          </div>
          <p class="mes1">Mes 1</p>
          
          <div id="photo2">
          </div>
          <p class="mes2">Mes 2</p>
          
          <div id="photo3">
          </div>
          <p class="mes3">Mes 3</p>

        </div>
      
      </div>

     <div class="book-footer"></div>

  </div>
  <div> 

      <div class="book-header"></div>

      <div class="book-content">

        <div class="book-page-title">
          <div class="book-title-page">
            <p>Mi ánimo</p><br>
            <span>mes a mes</span>
          </div>
        </div>

        <div class="book-form">
          <?php
            if(isset($animo['AnimoPage']['month1_humor'])){
              $month1_humor = $animo['AnimoPage']['month1_humor'];
            } else{
              $month1_humor = '';
            }
            if(isset($animo['AnimoPage']['month2_humor'])){
              $month2_humor = $animo['AnimoPage']['month2_humor'];
            } else{
              $month2_humor = '';
            }
             if(isset($animo['AnimoPage']['month3_humor'])){
              $month3_humor = $animo['AnimoPage']['month3_humor'];
            } else{
              $month3_humor = '';
            }
            if(isset($animo['AnimoPage']['month1_energy'])){
              $month1_energy = $animo['AnimoPage']['month1_energy'];
            } else{
              $month1_energy = '';
            }
            if(isset($animo['AnimoPage']['month2_energy'])){
              $month2_energy = $animo['AnimoPage']['month2_energy'];
            } else{
              $month2_energy = '';
            }
            if(isset($animo['AnimoPage']['month3_energy'])){
              $month3_energy = $animo['AnimoPage']['month3_energy'];
            } else{
              $month3_energy = '';
            }
            if(isset($animo['AnimoPage']['month1_physical'])){
              $month1_physical = $animo['AnimoPage']['month1_physical'];
            } else{
              $month1_physical = '';
            }
            if(isset($animo['AnimoPage']['month2_physical'])){
              $month2_physical = $animo['AnimoPage']['month2_physical'];
            } else{
              $month2_physical = '';
            }
            if(isset($animo['AnimoPage']['month3_physical'])){
              $month3_physical = $animo['AnimoPage']['month3_physical'];
            } else{
              $month3_physical = '';
            }
             if(isset($animo['AnimoPage']['month1_other'])){
              $month1_other = $animo['AnimoPage']['month1_other'];
            } else{
              $month1_other = '';
            }
            if(isset($animo['AnimoPage']['month1_other_1'])){
              $month1_other_1 = $animo['AnimoPage']['month1_other_1'];
            } else{
              $month1_other_1 = '';
            }
            if(isset($animo['AnimoPage']['month2_other'])){
              $month2_other = $animo['AnimoPage']['month2_other'];
            } else{
              $month2_other = '';
            }
             if(isset($animo['AnimoPage']['month2_other_1'])){
              $month2_other_1 = $animo['AnimoPage']['month2_other_1'];
            } else{
              $month2_other_1 = '';
            }
             if(isset($animo['AnimoPage']['month3_other'])){
              $month3_other = $animo['AnimoPage']['month3_other'];
            } else{
              $month3_other = '';
            }
            if(isset($animo['AnimoPage']['month3_other_1'])){
              $month3_other_1 = $animo['AnimoPage']['month3_other_1'];
            } else{
              $month3_other_1 = '';
            }
          ?>

          <div class="meses cf">
            <h3>Mes 1</h3>
            <h3>Mes 2</h3>
            <h3>Mes 3</h3>
          </div>
          <div class="mi-humor cf">
            <!-- etiquetas de humor -->
            <div class="col1">
              <h4>Mi humor es: </h4>
              <p>Feliz y sonriente</p> <!-- value = 1 -->
              <p>Huracán Hormonal</p> <!-- value = 2 -->
              <p>Mitad soleado - Mitad lluvioso</p> <!-- value = 3 -->
            </div>

            <!-- mes 1 - humor -->
            <div class="col2">
              <input type="radio" name="data[AnimoPage][month1_humor]" value="1" <?php if($month1_humor == 1){
              echo 'checked="checked"'; } ?> />
              <input type="radio" name="data[AnimoPage][month1_humor]" value="2" <?php if($month1_humor == 2){
              echo 'checked="checked"'; } ?> />
              <input type="radio" name="data[AnimoPage][month1_humor]" value="3" <?php if($month1_humor == 3){
              echo 'checked="checked"'; } ?> />
            </div>

            <!-- mes 2 - humor -->
            <div class="col3">

              <input type="radio" name="data[AnimoPage][month2_humor]" value="1" <?php if($month2_humor == 1){
                echo  'checked="checked"'; } ?> />
              <input type="radio" name="data[AnimoPage][month2_humor]" value="2" <?php if($month2_humor == 2){
                echo  'checked="checked"'; } ?> />
              <input type="radio" name="data[AnimoPage][month2_humor]" value="3" <?php if($month2_humor == 3){
                echo  'checked="checked"'; } ?> />
            </div>

            <!-- mes 3 - humor -->
            <div class="col4">
              <input type="radio" name="data[AnimoPage][month3_humor]" value="1" <?php if($month3_humor == 1){
              echo  'checked="checked"'; } ?> />
              <input type="radio" name="data[AnimoPage][month3_humor]" value="2" <?php if($month3_humor == 2){
              echo  'checked="checked"'; } ?> />
              <input type="radio" name="data[AnimoPage][month3_humor]" value="3" <?php if($month3_humor == 3){
                echo  'checked="checked"'; } ?> />
            </div>
          </div>

          <div class="mi-energia cf">
            <div class="col1">
              <!-- etiquetas de energia -->
              <h4>Mi nivel de energía es:</h4>
              <p>Relativamente normal</p> <!-- value = 1 -->
              <p>Con un poco de sueño</p> <!-- value = 2 -->
            </div>
            <div class="col2">
              <!-- mes 1 - energia -->
             
              <input type="radio" name="data[AnimoPage][month1_energy]" value="1" <?php if($month1_energy == 1){
              echo  'checked="checked"'; } ?> />
              <input type="radio" name="data[AnimoPage][month1_energy]" value="2" <?php if($month1_energy == 2){
              echo  'checked="checked"'; } ?> />
            </div>
            <div class="col3">
              <!-- mes 2 - energia -->
              <input type="radio" name="data[AnimoPage][month2_energy]" value="1" <?php if($month2_energy == 1){
                echo  'checked="checked"'; } ?> />
              <input type="radio" name="data[AnimoPage][month2_energy]" value="2" <?php if($month2_energy == 2){
                echo  'checked="checked"'; } ?> />
            </div>
            <div class="col4">
              <!-- mes 3 - energia -->
              <?php

              ?>
              <input type="radio" name="data[AnimoPage][month3_energy]" value="1" <?php if($month3_energy == 1){
                echo  'checked="checked"'; } ?> />
              <input type="radio" name="data[AnimoPage][month3_energy]" value="2" <?php if($month3_energy == 2){
                echo  'checked="checked"'; } ?> />
            </div>
          </div>

          <div class="mi-fisico cf">
            <div class="col1">
              <!-- etiquetas de fisico -->
              <h4>El cambio físico que más he percibido: </h4>
              <p>Mis pantalones aún me quedan</p> <!-- value = 1 -->
              <p>¡Ups! medio me aprietan</p> <!-- value = 2 -->
              <p> ¡Auxilio! Traigan el costal de papas</p> <!-- value = 3 -->
            </div>

             <!-- mes 1 - fisico -->
            <div class="col2">

              <input type="radio" name="data[AnimoPage][month1_physical]" value="1" <?php if($month1_physical == 1){
              echo  'checked="checked"'; } ?> />
              <input type="radio" name="data[AnimoPage][month1_physical]" value="2" <?php if($month1_physical == 2){
              echo  'checked="checked"'; } ?> />
              <input type="radio" name="data[AnimoPage][month1_physical]" value="3" <?php if($month1_physical == 2){
              echo 'checked="checked"'; } ?> />
            </div>

            <div class="col3">
             <!-- mes 2 - fisico -->
              <input type="radio" name="data[AnimoPage][month2_physical]" value="1" <?php if($month2_physical == 1){
              echo  'checked="checked"'; } ?> />
              <input type="radio" name="data[AnimoPage][month2_physical]" value="2" <?php if($month2_physical == 2){
              echo  'checked="checked"'; } ?> />
              <input type="radio" name="data[AnimoPage][month2_physical]" value="3" <?php if($month2_physical == 2){
              echo  'checked="checked"'; } ?> />
            </div>

            <div class="col4">
             <!-- mes 3 - fisico -->
              <?php

              ?>
              <input type="radio" name="data[AnimoPage][month3_physical]" value="1" <?php if($month3_physical == 1){
              echo  'checked="checked"'; } ?> />
              <input type="radio" name="data[AnimoPage][month3_physical]" value="2" <?php if($month3_physical == 2){
              echo  'checked="checked"'; } ?> />
              <input type="radio" name="data[AnimoPage][month3_physical]" value="3" <?php if($month3_physical == 2){
                echo  'checked="checked"'; } ?> />
            </div>
          </div>

          <div class="mi-otros cf">
            <div class="col1">
              <p>Otro</p>
            </div>
            <!-- otros ......  -->
            <div class="col2">
              <!-- mes 1 -->
              <span><?php echo $month1_other; ?></span>
              <span><?php echo $month1_other_1; ?></span>
            </div>
            <div class="col3">
              <!-- mes 2 -->
              <span><?php echo $month2_other; ?></span>
              <span><?php echo $month2_other_1; ?></span>
            </div>
            <div class="col4">
              <!-- mes 3 -->
              <span><?php echo $month3_other; ?></span>
              <span><?php echo $month3_other_1; ?></span>
            </div>
          </div>

        </div>
      
      </div>

     <div class="book-footer"></div>

  </div>

  <div> 
      <div class="book-header"></div>

      <div class="book-content">

        <div class="book-page-title">
          <div class="book-title-page">
            <p>Amo a mi beb&eacute;</p>            
          </div>
        </div>

        <div class="book-form">

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
              } else{
                $today = '';
              }

              if(isset($ilovemybby['IlovemybabyPage']['heartbeat'])){
                $heartbeat = $ilovemybby['IlovemybabyPage']['heartbeat'];
              } else{
                $heartbeat = '';
              }

              if(isset($ilovemybby['IlovemybabyPage']['first_feeling'])){
                $first_feeling = $ilovemybby['IlovemybabyPage']['first_feeling'];
              } else{
                $first_feeling = '';
              }

          ?>


          <p>
            <label>Hoy </label>
            <span><?php echo $today;?>"/></span>
            nunca lo olvidaré porque oí tu corazón por primera vez
          </p>

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

          <p>
            <label>y lo primero que sentí fue: </label>
            <span><?php echo $first_feeling; ?></span>
          </p>

        </div>
      
      </div>

     <div class="book-footer"></div>

  </div>

   <div> 
      <div class="book-header"></div>

      <div class="book-content">

        <div class="book-page-title">
          <div class="book-title-page">
             <p>¿NIÑO O NIÑA?</p>            
          </div>
        </div>

        <div class="book-form">
          <div class="bebes">bebes</div>

          <?php
            if(isset($childsex['ChildsexPage']['theythink'])){
              $theythink = $childsex['ChildsexPage']['theythink'];
            } else{
              $theythink = '';
            }
            if(isset($childsex['ChildsexPage']['ithink'])){
              $ithink = $childsex['ChildsexPage']['ithink'];
            } else{
              $ithink = '';
            }
            if(isset($childsex['ChildsexPage']['decided'])){
              $decided = $childsex['ChildsexPage']['decided'];
            } else{
              $decided = '';
            }
            if(isset($childsex['ChildsexPage']['whyidecided'])){
              $whyidecided = $childsex['ChildsexPage']['whyidecided'];
            } else{
              $whyidecided = '';
            }
            if(isset($childsex['ChildsexPage']['nickname'])){
              $nickname = $childsex['ChildsexPage']['nickname'];
            } else{
              $nickname = '';
            }

          ?> 

        <div class="todomundo cf">
          <p>Todo el mundo piensa que mi bebé será: </p>
         
          <div class="opcion1">
            <label>Niño</label>
            <input type="radio" name="data[ChildsexPage][theythink]" value="1" <?php if($theythink == 1){ echo  'checked="checked"'; } ?> />
          </div>
          <div class="opcion2">
          <label>Cuates</label>
            <input type="radio" name="data[ChildsexPage][theythink]" value="2" <?php if($theythink == 2){ echo   'checked="checked"'; } ?> />
          </div>
          <div class="opcion3">
            <label>Niña</label>
            <input type="radio" name="data[ChildsexPage][theythink]" value="3" <?php if($theythink == 3){ echo   'checked="checked"'; } ?> />
          </div>
        </div>
        <div class="personalmente cf">
          <p>Yo personalmente pienso que eres: </p>
          <div class="opcion1">
            <input type="radio" name="data[ChildsexPage][ithink]" value="1" <?php if($ithink == 1){ echo  'checked="checked"'; } ?> />
            <label>Niño</label>
          </div>
          <div class="opcion2">
             <input type="radio" name="data[ChildsexPage][ithink]" value="2" <?php if($ithink == 2){ echo   'checked="checked"'; } ?> />
            <label>Cuates</label>
          </div>
          <div class="opcion3">
             <input type="radio" name="data[ChildsexPage][ithink]" value="3" <?php if($ithink == 3){ echo   'checked="checked"'; } ?> />
            <label>Niña</label>
          </div>
        </div>
        <div class="decidimos cf">
          <p>Decidimos
            <input type="radio" name="data[ChildsexPage][decided]" value="1" <?php if($decided == 1){ echo  'checked="checked"'; } ?> />
            <label>Si saber</label>
            <input type="radio" name="data[ChildsexPage][decided]" value="2" <?php if($decided == 2){ echo   'checked="checked"'; } ?> />
            <label>No saber, porque</label>
            <span> <?php if($whyidecided != ''){ echo $whyidecided; } ?></span>
          </p>
          <p>Tu papá y yo te llamamos de cariño
            <span> <?php if($nickname != ''){ echo $nickname; } ?> </span>
            ahora que estás dentro de mi pancita.
          </p>
        </div>

        </div>
      
      </div>

     <div class="book-footer"></div>

  </div>

  <div> 
      <div class="book-header"></div>

      <div class="book-content">

        <div class="book-page-title">
          <div class="book-title-page">
            <p>¡LAS PRIMERAS!</p> <br>
            <span>pataditas...</span>
          </div>
        </div>

        <div class="book-form">

          <?php 

              if(isset($firstkick['FirstkickPage']['firstkick_date'])){ 

                $source = $firstkick['FirstkickPage']['firstkick_date'];
                $date = new DateTime($source);
                $letime = strtotime($source);

                $mes = get_date_spanish($letime, true, 'month'); # return Enero

                $dia = $date->format('d'); // 31.07.2012
                $ano = $date->format('Y'); // 31-07-2012

                $firstkick_date = $dia.' '.$mes.' '.$ano;
                $monthi = ($date->format('m'))-1;
              } else{
                $firstkick_date = '';
              }
              if(isset($firstkick['FirstkickPage']['photo_date'])){ 

                $source = $firstkick['FirstkickPage']['photo_date'];
                $date = new DateTime($source);
                $letime = strtotime($source);

                $mes = get_date_spanish($letime, true, 'month'); # return Enero

                $dia = $date->format('d'); // 31.07.2012
                $ano = $date->format('Y'); // 31-07-2012

                $photo_date = $dia.' '.$mes.' '.$ano;
                $monthi = ($date->format('m'))-1;
              } else{
                $photo_date = '';
              }
              
              if(isset($firstkick['FirstkickPage']['week'])){
                $week = $firstkick['FirstkickPage']['week'];
              } else{
                $week = '';
              }
              if(isset($firstkick['FirstkickPage']['bigquestion'])){
                $bigquestion = $firstkick['FirstkickPage']['bigquestion'];
              } else{
                $bigquestion = '';
              }
              if(isset($firstkick['FirstkickPage']['craving1'])){
                $craving1 = $firstkick['FirstkickPage']['craving1'];
              } else{
                $craving1 = '';
              }
              if(isset($firstkick['FirstkickPage']['craving2'])){
                $craving2 = $firstkick['FirstkickPage']['craving2'];
              } else{
                $craving2 = '';
              }
              if(isset($firstkick['FirstkickPage']['craving3'])){
                $craving3 = $firstkick['FirstkickPage']['craving3'];
              } else{
                $craving3 = '';
              }
              if(isset($firstkick['FirstkickPage']['craving4'])){
                $craving4 = $firstkick['FirstkickPage']['craving4'];
              } else{
                $craving4 = '';
              }
              if(isset($firstkick['FirstkickPage']['gross1'])){
                $gross1 = $firstkick['FirstkickPage']['gross1'];
              } else{
                $gross1 = '';
              }
              if(isset($firstkick['FirstkickPage']['gross2'])){
                $gross2 = $firstkick['FirstkickPage']['gross2'];
              } else{
                $gross2 = '';
              }
              if(isset($firstkick['FirstkickPage']['gross3'])){
                $gross3 = $firstkick['FirstkickPage']['gross3'];
              } else{
                $gross3 = '';
              }
              if(isset($firstkick['FirstkickPage']['gross4'])){
                $gross4 = $firstkick['FirstkickPage']['gross4'];
              } else{
                $gross4 = '';
              }
              if(isset($firstkick['FirstkickPage']['photogenic'])){
                $photogenic = $firstkick['FirstkickPage']['photogenic'];
              } else{
                $photogenic = '';
              }
          ?>

          <p>Hay una sensación muy dificil de describir, y es cuando sentí a mi bebé revoloteando en mi pancita, pero lo intentaré:</p>
          <p>
            <label>Esta maravilla de la vida la sentí el </label>
            <span> <?php if($firstkick_date != ''){ echo $firstkick_date; } ?></span>
          </p>

          <p class="startkick">
            <label>Aay, la semana en que empezó a patear duro el bebé fue :</label>
            <span> <?php if($week != ''){ echo $week; } ?></span>
          </p>
          <div class="colL">
            <div class="firstkick_photo photo-v">
              
            </div>
            <span id="datepickerCongrats1"> 
              <?php if($photo_date != ''){ echo $photo_date; } ?>
            </span>
          </div>
          <div class="colR">
            <p class="photogenic">
              <label>Ahora qué eres más fotogénico, claramente pude ver:</label>
              <span>
                <?php if($photogenic != ''){ echo $photogenic; } ?>
              </span>
            </p>

            <p class="gran"><label>La GRAN pregunta: ¿el bebé es? </label></p>

            <div class="opciones cf">
              <div class="opcion nino">
                <input type="radio" name="data[FirstkickPage][bigquestion]" value="1" <?php if($bigquestion == 1){
                echo 'checked="checked"'; } ?> />
                <label>Niño</label>
              </div>
              <div class="opcion nina">
                <input type="radio" name="data[FirstkickPage][bigquestion]" value="2" <?php if($bigquestion == 2){
                echo 'checked="checked"'; } ?> />
                <label>Niña</label>
              </div>
              <div class="opcion nose">
                <input type="radio" name="data[FirstkickPage][bigquestion]" value="3" <?php if($bigquestion == 3){
                echo 'checked="checked"'; } ?> />
                <label>Todavía no se ve nada!</label>
              </div>
            </div>
            <div class="antojos">
              <label>Antojos</label>
              <span><?php if($craving1 != ''){ echo $craving1; } ?></span>
              <span><?php if($craving2 != ''){ echo $craving2; } ?></span>
              <span><?php if($craving3 != ''){ echo $craving3; } ?></span>
              <span><?php if($craving4 != ''){ echo $craving4; } ?></span>
            </div>
            <div class="antojos">
              <label>Ascos</label>
              <span><?php if($gross1 != ''){ echo $gross1; } ?></span>
              <span><?php if($gross2 != ''){ echo $gross2; } ?></span>
              <span><?php if($gross3 != ''){ echo $gross3; } ?></span>
              <span><?php if($gross4 != ''){ echo $gross4; } ?></span>
            </div>
          </div>

        </div>
      
      </div>

     <div class="book-footer"></div>

  </div>


</div><!-- FIN DEL LIBRO -->