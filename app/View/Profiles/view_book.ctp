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
</div><!-- FIN DEL LIBRO -->