<?php
        echo $this->Html->css('print1');  
        
        $tema = $perfil['Profile']['theme'];
        
        if($tema == 2){ 
             echo $this->Html->css('print2'); 
        } 
        elseif($tema == 3){ 
             echo $this->Html->css('print3'); 
        } 
        elseif($tema == 4){ 
             echo $this->Html->css('print4'); 
        }


  ?> 

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js" type="text/javascript"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.10.1/jquery-ui.min.js" type="text/javascript"></script>


<SCRIPT TYPE="text/javascript">
  
  // Handler for .ready() called.
  $(document).ready(function() {

    <?php if($tema == 2){  ?>
      $(".print-header").attr("src", "http://operacionxperia.com/momtomom/memorias_embarazo/img/tema2/print-header.png");  
      $(".print-footer").attr("src", "http://operacionxperia.com/momtomom/memorias_embarazo/img/tema2/print-footer.png");  
      $(".marco").attr("src", "http://operacionxperia.com/momtomom/memorias_embarazo/img/tema2/marco.png");  
      $(".marco_vert").attr("src", "http://operacionxperia.com/momtomom/memorias_embarazo/img/tema2/marco_whoami.png");  
      $("#marco-fondo").attr("src", "http://operacionxperia.com/momtomom/memorias_embarazo/img/tema2/marco_fondo.png");  
      //marco-circular
      $(".marco-circular").attr("src", "http://operacionxperia.com/momtomom/memorias_embarazo/img/tema2/marco_circular.png");  

      $(".print-title-page").attr("src", "http://operacionxperia.com/momtomom/memorias_embarazo/img/tema2/titulo_back.png");  

      $("#caballo").attr("src", "http://operacionxperia.com/momtomom/memorias_embarazo/img/tema2/caballo.png");  
      $("#mar").attr("src", "http://operacionxperia.com/momtomom/memorias_embarazo/img/tema2/mar.png");  
      $("#tambor").attr("src", "http://operacionxperia.com/momtomom/memorias_embarazo/img/tema2/tambor.png");  
      $("#losbeibis").attr("src", "http://operacionxperia.com/momtomom/memorias_embarazo/img/tema2/bebesotes.png");  


    <?php } ?>

    <?php if($tema == 3){  ?>
      $(".print-header").attr("src", "http://operacionxperia.com/momtomom/memorias_embarazo/img/tema3/print-header.png");  
      $(".print-footer").attr("src", "http://operacionxperia.com/momtomom/memorias_embarazo/img/tema3/print-footer.png");  
      $(".marco").attr("src", "http://operacionxperia.com/momtomom/memorias_embarazo/img/tema3/marco.png");  
      $(".marco_vert").attr("src", "http://operacionxperia.com/momtomom/memorias_embarazo/img/tema3/marco_whoami.png");  
      $("#marco-fondo").attr("src", "http://operacionxperia.com/momtomom/memorias_embarazo/img/tema3/marco_fondo.png");  
      $(".print-title-page").attr("src", "http://operacionxperia.com/momtomom/memorias_embarazo/img/tema3/titulo_back.png");  
      $(".marco-circular").attr("src", "http://operacionxperia.com/momtomom/memorias_embarazo/img/tema3/marco_circular.png");  

      $("#caballo").attr("src", "http://operacionxperia.com/momtomom/memorias_embarazo/img/tema3/caballo.png");  
      $("#mar").attr("src", "http://operacionxperia.com/momtomom/memorias_embarazo/img/tema3/mar.png");  
      $("#tambor").attr("src", "http://operacionxperia.com/momtomom/memorias_embarazo/img/tema3/tambor.png");  
      $("#losbeibis").attr("src", "http://operacionxperia.com/momtomom/memorias_embarazo/img/tema3/bebesotes.png");  

    <?php } ?>

    <?php if($tema == 4){  ?>
      $(".print-header").attr("src", "http://operacionxperia.com/momtomom/memorias_embarazo/img/tema4/print-header.png");  
      $(".print-footer").attr("src", "http://operacionxperia.com/momtomom/memorias_embarazo/img/tema4/print-footer.png");  
      $(".marco").attr("src", "http://operacionxperia.com/momtomom/memorias_embarazo/img/tema4/marco.png");  
      $(".marco_vert").attr("src", "http://operacionxperia.com/momtomom/memorias_embarazo/img/tema4/marco_whoami.png");  
      $("#marco-fondo").attr("src", "http://operacionxperia.com/momtomom/memorias_embarazo/img/tema4/marco_fondo.png");  
      $(".print-title-page").attr("src", "http://operacionxperia.com/momtomom/memorias_embarazo/img/tema4/titulo_back.png");  
      $(".marco-circular").attr("src", "http://operacionxperia.com/momtomom/memorias_embarazo/img/tema4/marco_circular.png");  

      $("#caballo").attr("src", "http://operacionxperia.com/momtomom/memorias_embarazo/img/tema4/caballo.png");  
      $("#mar").attr("src", "http://operacionxperia.com/momtomom/memorias_embarazo/img/tema4/mar.png");  
      $("#tambor").attr("src", "http://operacionxperia.com/momtomom/memorias_embarazo/img/tema4/tambor.png");  
      $("#losbeibis").attr("src", "http://operacionxperia.com/momtomom/memorias_embarazo/img/tema4/bebesotes.png");  

    <?php } ?>

    setTimeout(function(){window.print()},6000);  
  
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

.b-page-0, .b-page-7{
  opacity: 0;
}
/*
#mybook{
  position: absolute;
  top: 3%;
  left: 50%;
  margin-left: -450px;
}
*/

</STYLE>


<input type="button" class="imprimir" onClick="window.print()" value="Print This"/>

  <div class="pagina"> 
     <img class="print-header" src="http://operacionxperia.com/momtomom/memorias_embarazo/img/print-header.png">
      <div class="print-content">
          <img class="marco" id="cover-photo" src="http://operacionxperia.com/momtomom/memorias_embarazo/img/marco.png">        
          <?php if( isset($cover_pic) ){ ?>
            <img id="cover-photo-" src="http://operacionxperia.com/momtomom/memorias_embarazo/img/cover_photos/<?php echo str_replace(' ', '%20', $cover_pic); ?>">
          <?php } else { ?>
            <img id="cover-photo- marco-fondo" class="cover-photo-fondo" src="http://operacionxperia.com/momtomom/memorias_embarazo/img/marco_fondo.png">
          <?php } ?>
      </div>
     <img class="print-footer" src="http://operacionxperia.com/momtomom/memorias_embarazo/img/print-footer.png">
  </div>

  <div class="pagina"> 
      <img class="print-header" src="http://operacionxperia.com/momtomom/memorias_embarazo/img/header.png">

      <div class="print-content">

      <div class="print-page-title">
        <img class="print-title-page" src="http://operacionxperia.com/momtomom/memorias_embarazo/img/titulo_back.png" >
        <p>&iexcl;Felicidades!</p><br> 
        <span>La prueba es positiva</span>
      </div>

      <div class="print-form"> 
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
          <span> <?php echo $sospeche; ?></span> 
        </p>
      
        <p>
          <label>Me hice una prueba de embarazo el día: </label>
          <span> <?php echo $prueba; ?></span>
        </p>

        <p>
          <label>Lo primero que sentí fue:</label>
          <span> <?php echo $firstfeeling; ?></span>
        </p>

        <p>
        <label for="CongratsPageBabycoming">Tenía <span><?php if( isset($congrats['CongratsPage']['babycoming'])){ echo $congrats['CongratsPage']['babycoming']; } ?></span> semanas de embarazo cuando me enteré que venía el bebé en camino, ahh que emoción!. Compartí la gran noticia con el  papá de mi bebé de esta manera: </label>
         <span> <?php if(isset($congrats['CongratsPage']['howishare'])){ echo $congrats['CongratsPage']['howishare']; } ?></span>
        </p>

        <p>
          <label>Éste es mi bebé número: </label>
          <span> <?php if($babynum != ''){ echo $babynum; } ?></span>
        </p>

        <p>
          <label>Los hermanitos del bebé reaccionaron así: </label>
          <span> <?php if($babybros != ''){ echo $babybros; } ?></span>
        </p>

        <p id="last_input">
          ¡Anota todos los detalles antes de que se te olviden!... ¿Cómo y dónde celebraste  saber que estabas embarazada? ¿Con quién compartiste el momento? ¿Cómo  reaccionaron tus familiares? ¿Cuál fue la primera compra que hiciste o regalo que te dieron para el bebé?
          <span>
           <?php if(isset($congrats['CongratsPage']['details'])){ echo $congrats['CongratsPage']['details']; }?>
          </span>
        </p>

      </div>
    </div>

     <img class="print-footer" src="http://operacionxperia.com/momtomom/memorias_embarazo/img/footer.png" width="100%" height="205">

  </div>

  <div class="pagina"> 
      <img class="print-header" src="http://operacionxperia.com/momtomom/memorias_embarazo/img/header.png">

      <div class="print-content">

      <div class="print-page-title">
        <img class="print-title-page" src="http://operacionxperia.com/momtomom/memorias_embarazo/img/titulo_back.png" >
        <p>Mi Primer visita</p><br> 
        <span>al ginec&oacute;logo</span>
      </div>

      <div class="print-form"> 
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
          <span> <?php echo $gin; ?></span>
        </p>
        <p>
          <label>Fecha estimada en que nacerás: </label>
          <span> <?php echo $estimated;?></span>
        </p>
        <p>
         <label>Mi peso actual: </label>
         <span> <?php echo $weight; ?></span>
        </p>

        <p>
          <label>Las medidas de mi pancita:</label>
          <span> <?php echo $measurements; ?></span>
        </p>
        <p>
          <label>Lo que recuerdo de mi primera visita es:</label>
          <span> <?php echo $firstvisit; ?></span>
        </p>

      </div>
    </div>

     <img class="print-footer" src="http://operacionxperia.com/momtomom/memorias_embarazo/img/footer.png" width="100%" height="205">

  </div>


    <div class="pagina"> 
      <img class="print-header" src="http://operacionxperia.com/momtomom/memorias_embarazo/img/header.png">

      <div class="print-content">

      <div class="print-page-title">
        <img class="print-title-page" src="http://operacionxperia.com/momtomom/memorias_embarazo/img/titulo_back.png" >
        <p>Yo Soy...</p>
      </div>

      <div class="print-form"> 

        <div class="whoami_photo"> 
          <img class="marco_vert" id="whoami-photo" src="https://operacionxperia.com/momtomom/memorias_embarazo/img/marco_whoami.png">

          <?php if( isset($whoami['WhoamiPage']['photo']) ){ ?>
            <img class="whoami-photo" src="https://operacionxperia.com/momtomom/memorias_embarazo/img/cover_photos/<?php echo str_replace(' ','%20',$whoami['WhoamiPage']['photo']); ?>">
          <?php } else { ?>
            <img class="whoami-photo" id="marco-fondo" src="https://operacionxperia.com/momtomom/memorias_embarazo/img/marco_fondo.png">
          <?php } ?>

        </div>

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

     <img class="print-footer" src="http://operacionxperia.com/momtomom/memorias_embarazo/img/footer.png" width="100%" height="205">

  </div>


    <div class="pagina"> 
      <img class="print-header" src="http://operacionxperia.com/momtomom/memorias_embarazo/img/header.png">

      <div class="print-content">

      <div class="print-page-title">
        <img class="print-title-page" src="http://operacionxperia.com/momtomom/memorias_embarazo/img/titulo_back.png" >
        <p>Primeros</p> 
        <span>S&iacute;ntomas y malestares</span>
      </div>

      <div class="print-form"> 

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
                <?php if( isset($sintoms['SintomPage']['craving1']) && !empty($sintoms['SintomPage']['craving1']) && !is_null($sintoms['SintomPage']['craving1']) ){ ?>
                  <span><?php echo $craving1; ?></span>
                <?php } ?>
                 <?php if(isset($sintoms['SintomPage']['craving2']) && !empty($sintoms['SintomPage']['craving2']) && !is_null($sintoms['SintomPage']['craving2']) ){ ?>
                  <span><?php echo $craving2; ?></span>
                <?php } ?>
                 <?php if(isset($sintoms['SintomPage']['craving3']) && !empty($sintoms['SintomPage']['craving3']) && !is_null($sintoms['SintomPage']['craving3']) ){ ?>
                  <span><?php echo $craving3; ?></span>
                <?php } ?>
                 <?php if(isset($sintoms['SintomPage']['craving4']) && !empty($sintoms['SintomPage']['craving4']) && !is_null($sintoms['SintomPage']['craving4']) ){ ?>
                  <span><?php echo $craving4; ?></span>
                <?php } ?>
                 <?php if(isset($sintoms['SintomPage']['craving5']) && !empty($sintoms['SintomPage']['craving5']) && !is_null($sintoms['SintomPage']['craving5']) ){ ?>
                  <span><?php echo $craving5; ?></span>
                <?php } ?>
                 <?php if(isset($sintoms['SintomPage']['craving6']) && !empty($sintoms['SintomPage']['craving6']) && !is_null($sintoms['SintomPage']['craving6']) ){ ?>
                  <span><?php echo $craving6; ?></span>
                <?php } ?>
              </div>
            </div>

            <div class="grossnes">
              <label>Ascos</label>
              <div>
                <?php if(isset($sintoms['SintomPage']['gross1']) && !empty($sintoms['SintomPage']['gross1']) && !is_null($sintoms['SintomPage']['gross1']) ){ ?>
                  <span><?php echo $gross1; ?></span>
                <?php } ?>
                 <?php if(isset($sintoms['SintomPage']['gross2']) && !empty($sintoms['SintomPage']['gross2']) && !is_null($sintoms['SintomPage']['gross2']) ){ ?>
                  <span><?php echo $gross2; ?></span>
                <?php } ?>
                 <?php if(isset($sintoms['SintomPage']['gross3']) && !empty($sintoms['SintomPage']['gross3']) && !is_null($sintoms['SintomPage']['gross3']) ){ ?>
                  <span><?php echo $gross3; ?></span>
                <?php } ?>
                 <?php if(isset($sintoms['SintomPage']['gross4']) && !empty($sintoms['SintomPage']['gross4']) && !is_null($sintoms['SintomPage']['gross4']) ){ ?>
                  <span><?php echo $gross4; ?></span>
                <?php } ?>
                 <?php if(isset($sintoms['SintomPage']['gross5']) && !empty($sintoms['SintomPage']['gross5']) && !is_null($sintoms['SintomPage']['gross5']) ){ ?>
                  <span><?php echo $gross5; ?></span>
                <?php } ?>
                 <?php if(isset($sintoms['SintomPage']['gross6']) && !empty($sintoms['SintomPage']['gross6']) && !is_null($sintoms['SintomPage']['gross6']) ){ ?>
                  <span><?php echo $gross6; ?></span>
                <?php } ?>
              </div>
            </div>

            <p class="weirdest-craving">
              <label>
                Mmmm! cuando se trata de antojos<br>
                El antojito más raro que he tenido es: 
              </label>
              <span><?php echo $weirdestcraving; ?></span>
            </p>

      </div>
    </div>

     <img class="print-footer" src="http://operacionxperia.com/momtomom/memorias_embarazo/img/footer.png" width="100%" height="205">

  </div>

  <div class="pagina"> 
      <img class="print-header" src="http://operacionxperia.com/momtomom/memorias_embarazo/img/header.png">

      <div class="print-content">

      <div class="print-page-title">
        <img class="print-title-page" src="http://operacionxperia.com/momtomom/memorias_embarazo/img/titulo_back.png" >
        <p>s&uacute;per cool</p>
        <span>fotos del ultrasonido</span>
      </div>

      <div class="print-form"> 
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

            if( isset($ultrasound['UltrasoundPage']['first_photo']) ){ 
              $first_photo = 'http://operacionxperia.com/momtomom/memorias_embarazo/img/cover_photos/'.$ultrasound['UltrasoundPage']['first_photo'];
            } else{
              if($tema == 1){ 
                $first_photo = 'http://operacionxperia.com/momtomom/memorias_embarazo/img/marco_fondo.png';
              }
              if($tema == 2){ 
                $first_photo = 'http://operacionxperia.com/momtomom/memorias_embarazo/img/tema2/marco_fondo.png';
              }
              if($tema == 3){ 
                $first_photo = 'http://operacionxperia.com/momtomom/memorias_embarazo/img/tema3/marco_fondo.png';
              }
              if($tema == 4){ 
                $first_photo = 'http://operacionxperia.com/momtomom/memorias_embarazo/img/tema4/marco_fondo.png';
              }
            }

            if( isset($ultrasound['UltrasoundPage']['second_photo']) ){ 
              $second_photo = 'http://operacionxperia.com/momtomom/memorias_embarazo/img/cover_photos/'.$ultrasound['UltrasoundPage']['second_photo'];
            } else{
              if($tema == 1){ 
                $second_photo = 'http://operacionxperia.com/momtomom/memorias_embarazo/img/marco_fondo.png';
              }
              if($tema == 2){ 
                $second_photo = 'http://operacionxperia.com/momtomom/memorias_embarazo/img/tema2/marco_fondo.png';
              }
              if($tema == 3){ 
                $second_photo = 'http://operacionxperia.com/momtomom/memorias_embarazo/img/tema3/marco_fondo.png';
              }
              if($tema == 4){ 
                $second_photo = 'http://operacionxperia.com/momtomom/memorias_embarazo/img/tema4/marco_fondo.png';
              }
            }

            ?>
            
            <img id="ultrasound_photo_1" class="marco marco-chico" src="http://operacionxperia.com/momtomom/memorias_embarazo/img/marco.png" />
            <img id="ultrasound_photo_1-back" src="<?php echo $first_photo;?>" />

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

            <img id="ultrasound_photo_2" class="marco  marco-chico" src="http://operacionxperia.com/momtomom/memorias_embarazo/img/marco.png" />
            <img id="ultrasound_photo_2-back" src="<?php echo $second_photo;?>" />

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

     <img class="print-footer" src="http://operacionxperia.com/momtomom/memorias_embarazo/img/footer.png" width="100%" height="205">

  </div>

  <div class="pagina"> 
      <img class="print-header" src="http://operacionxperia.com/momtomom/memorias_embarazo/img/header.png">

      <div class="print-content">

      <div class="print-page-title">
        <img class="print-title-page" src="http://operacionxperia.com/momtomom/memorias_embarazo/img/titulo_back.png" >
        <p>Mi pancita</p>
        <span>mes a mes</span>
      </div>

      <div class="print-form" id="pancitamesform"> 

         <?php 
            if( isset($belly['BellyPage']['photo1']) ){ 

              $photo1 = 'http://operacionxperia.com/momtomom/memorias_embarazo/img/cover_photos/'.$belly['BellyPage']['photo1'];
            } else{
              if($tema == 1){ 
                $photo1 = 'http://operacionxperia.com/momtomom/memorias_embarazo/img/marco_fondo.png';
              }
              if($tema == 2){ 
                $photo1 = 'http://operacionxperia.com/momtomom/memorias_embarazo/img/tema2/marco_fondo.png';
              }
              if($tema == 3){ 
                $photo1 = 'http://operacionxperia.com/momtomom/memorias_embarazo/img/tema3/marco_fondo.png';
              }
              if($tema == 4){ 
                $photo1 = 'http://operacionxperia.com/momtomom/memorias_embarazo/img/tema4/marco_fondo.png';
              }
            }

            if( isset($belly['BellyPage']['photo2']) ){ 
              $photo2 = 'http://operacionxperia.com/momtomom/memorias_embarazo/img/cover_photos/'.$belly['BellyPage']['photo2'];
            } else{
              if($tema == 1){ 
                $photo2 = 'http://operacionxperia.com/momtomom/memorias_embarazo/img/marco_fondo.png';
              }
              if($tema == 2){ 
                $photo2 = 'http://operacionxperia.com/momtomom/memorias_embarazo/img/tema2/marco_fondo.png';
              }
              if($tema == 3){ 
                $photo2 = 'http://operacionxperia.com/momtomom/memorias_embarazo/img/tema3/marco_fondo.png';
              }
              if($tema == 4){ 
                $photo2 = 'http://operacionxperia.com/momtomom/memorias_embarazo/img/tema4/marco_fondo.png';
              }
            }
            if( isset($belly['BellyPage']['photo3']) ){ 
              $photo3 = 'http://operacionxperia.com/momtomom/memorias_embarazo/img/cover_photos/'.$belly['BellyPage']['photo3'];
            } else{
              if($tema == 1){ 
                $photo3 = 'http://operacionxperia.com/momtomom/memorias_embarazo/img/marco_fondo.png';
              }
              if($tema == 2){ 
                $photo3 = 'http://operacionxperia.com/momtomom/memorias_embarazo/img/tema2/marco_fondo.png';
              }
              if($tema == 3){ 
                $photo3 = 'http://operacionxperia.com/momtomom/memorias_embarazo/img/tema3/marco_fondo.png';
              }
              if($tema == 4){ 
                $photo3 = 'http://operacionxperia.com/momtomom/memorias_embarazo/img/tema4/marco_fondo.png';
              }
            }
          ?>
          <div class="flotando_pancita">
            <img id="photo1" class="marco marco-chico" src="http://operacionxperia.com/momtomom/memorias_embarazo/img/marco.png">
            <img id="photo1-leback" src="<?php echo $photo1;?>">
            <p class="mes1">Mes 1</p>
          </div>
          <div class="flotando_pancita">
            <img id="photo2" class="marco marco-chico" src="http://operacionxperia.com/momtomom/memorias_embarazo/img/marco.png">
            <img id="photo2-leback" src="<?php echo $photo2;?>">
            <p class="mes2">Mes 2</p>
          </div>
          <div class="flotando_pancita">
            <img id="photo3" class="marco marco-chico" src="http://operacionxperia.com/momtomom/memorias_embarazo/img/marco.png">
            <img id="photo3-leback" src="<?php echo $photo3;?>">
            <p class="mes3">Mes 3</p>
          </div>
      </div>
    </div>

     <img class="print-footer" src="http://operacionxperia.com/momtomom/memorias_embarazo/img/footer.png" width="100%" height="205">

  </div>

  <div class="pagina"> 
      <img class="print-header" src="http://operacionxperia.com/momtomom/memorias_embarazo/img/header.png">

      <div class="print-content">

      <div class="print-page-title">
        <img class="print-title-page" src="http://operacionxperia.com/momtomom/memorias_embarazo/img/titulo_back.png" >
        <p>Mi ánimo</p>
        <span>mes a mes</span>
      </div>

      <div class="print-form"> 
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

     <img class="print-footer" src="http://operacionxperia.com/momtomom/memorias_embarazo/img/footer.png" width="100%" height="205">

  </div>


  <div class="pagina"> 
      <img class="print-header" src="http://operacionxperia.com/momtomom/memorias_embarazo/img/header.png">

      <div class="print-content">

      <div class="print-page-title">
        <img class="print-title-page" src="http://operacionxperia.com/momtomom/memorias_embarazo/img/titulo_back.png" >
        <p>Amo a mi beb&eacute;</p> 
      </div>

      <div class="print-form"> 

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
            <span><?php echo $today;?></span>
            nunca lo olvidaré porque oí tu corazón por primera vez
          </p>

          <p class="tac">Tac, tac, sonaba como: </p>

          <?php if($heartbeat == 1){ ?>
          <div class="opcion">
            <label>Caballos Galopantes</label>
            <img id="caballo" src="https://operacionxperia.com/momtomom/memorias_embarazo/img/caballo.png">
          </div>
          <?php } elseif($heartbeat == 2){ ?>
          <div class="opcion">
            <label>Como un tambor</label>
            <img id="tambor" src="https://operacionxperia.com/momtomom/memorias_embarazo/img/tambor.png">
          </div>
          <?php } elseif($heartbeat == 3){ ?>
          <div class="opcion">
            <label>Un mar de emociones</label>
            <img id="mar" src="https://operacionxperia.com/momtomom/memorias_embarazo/img/mar.png">
          </div>
          <?php } ?>

          <p>
            <label>y lo primero que sentí fue: </label>
            <span><?php echo $first_feeling; ?></span>
          </p>

      </div>
    </div>

     <img class="print-footer" src="http://operacionxperia.com/momtomom/memorias_embarazo/img/footer.png" width="100%" height="205">

  </div>


  <div class="pagina"> 
      <img class="print-header" src="http://operacionxperia.com/momtomom/memorias_embarazo/img/header.png">

      <div class="print-content">

      <div class="print-page-title">
        <img class="print-title-page" src="http://operacionxperia.com/momtomom/memorias_embarazo/img/titulo_back.png" >
        <p>¿NIÑO O NIÑA?</p>            
      </div>

      <div class="print-form" id="childsexform"> 

          <div class="bebes">
            <img id="losbeibis" src="http://operacionxperia.com/momtomom/memorias_embarazo/img/bebesotes.png">
          </div>

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

          <?php if($theythink == 1){ ?>      
          <div class="opcion">
            <label>Niño</label>
          </div>
          <?php } elseif($theythink == 2){ ?>
          <div class="opcion">
          <label>Gemelos</label>
          </div>
          <?php } elseif($theythink == 3) { ?>
          <div class="opcion">
            <label>Niña</label>
          </div>
          <?php } ?>

        </div>
        <div class="personalmente cf">
          <p>Yo personalmente pienso que eres: </p>
          <?php if($ithink == 1){ ?>
          <div class="opcion">
            <label>Niño</label>
          </div>
          <?php } elseif($ithink == 2){ ?>
          <div class="opcion">
            <label>Gemelos</label>
          </div>
          <?php } elseif($ithink == 3){ ?>
          <div class="opcion">
            <label>Niña</label>
          </div>
          <?php } ?>
        </div>
        <div class="decidimos cf">
          <p>Decidimos
            <?php if($decided == 1){  ?>
            <span>Si saber</span>, porque
            <?php } elseif($decided == 2){ ?>
            <span>No saber</span>, porque
            <?php } ?>
            <span> <?php if($whyidecided != ''){ echo $whyidecided; } ?></span>
          </p>
          <p>Tu papá y yo te llamamos de cariño
            <span> <?php if($nickname != ''){ echo $nickname; } ?> </span>
            ahora que estás dentro de mi pancita.
          </p>
        </div>

      </div>
    </div>

     <img class="print-footer" src="http://operacionxperia.com/momtomom/memorias_embarazo/img/footer.png" width="100%" height="205">

  </div>



  <div class="pagina"> 
      <img class="print-header" src="http://operacionxperia.com/momtomom/memorias_embarazo/img/header.png">

      <div class="print-content">

      <div class="print-page-title">
        <img class="print-title-page" src="http://operacionxperia.com/momtomom/memorias_embarazo/img/titulo_back.png" >
        <p>¡LAS PRIMERAS!</p> 
        <span>pataditas...</span>       
      </div>

      <div class="print-form"> 

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
               if(isset($firstkick['FirstkickPage']['ifeel'])){
                $ifeel = $firstkick['FirstkickPage']['ifeel'];
              } else{
                $ifeel = '';
              }
          ?>

          <p>Hay una sensación muy dificil de describir, y es cuando sentí a mi bebé revoloteando en mi pancita, pero lo intentaré:</p>
          <p>
            <label>Esta maravilla de la vida la sentí el </label>
            <span> <?php if($firstkick_date != ''){ echo $firstkick_date; } ?></span>
          </p>

          <br>
          
          <p class="startkick">
            <label>Ay, la semana en que empezó a patear duro el bebé fue :</label>
            <span> <?php if($week != ''){ echo $week; } ?></span>
          </p>
          <div class="colL">
            <img class="marco_vert" id="firstkick_photo" src="http://operacionxperia.com/momtomom/memorias_embarazo/img/marco_whoami.png">

            <?php if( isset($firstkick['FirstkickPage']['photo']) ){ ?>
              <img class="fondo-vert" id="first-kick-fondo" src="http://operacionxperia.com/momtomom/memorias_embarazo/img/cover_photos/<?php echo str_replace(' ','%20',$firstkick['FirstkickPage']['photo']); ?>" />
            <?php } else { ?>
              <img class="fondo-vert first-kick-fondo" id="marco-fondo first-kick-fondo" src="http://operacionxperia.com/momtomom/memorias_embarazo/img/marco_fondo.png" />            
            <?php } ?>

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
              <?php if($bigquestion == 1){ ?>
              <div class="opcion nino">
                <label>Niño</label>
              </div>
              <?php } elseif ($bigquestion == 2) {  ?>
              <div class="opcion nina">
                <label>Niña</label>
              </div>
              <?php } elseif ($bigquestion == 3 ) {  ?>
              <div class="opcion nose">
                <label>Todavía no se ve nada!</label>
              </div>
              <?php }   ?>
            </div>

            <p>
              <label>
                Yo me siento: 
              </label>
              <span><?php  if($ifeel != ''){ echo $ifeel; } ?></span>
            </p>
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

     <img class="print-footer" src="http://operacionxperia.com/momtomom/memorias_embarazo/img/footer.png" width="100%" height="205">

  </div>


  <div class="pagina"> 
      <img class="print-header" src="http://operacionxperia.com/momtomom/memorias_embarazo/img/header.png">

      <div class="print-content">

      <div class="print-page-title">
        <img class="print-title-page" src="http://operacionxperia.com/momtomom/memorias_embarazo/img/titulo_back.png" >
         <p>Mi pancita</p>
         <span>mes a mes</span>
      </div>

      <div class="print-form"> 

          <?php 

            if(isset($bellymonth['BellymonthPage']['photo_date'])){ 
              $source = $bellymonth['BellymonthPage']['photo_date'];
              $date = new DateTime($source);
              $letime = strtotime($source);

              $mes = get_date_spanish($letime, true, 'month'); # return Enero

              $dia = $date->format('d'); // 31.07.2012
              $ano = $date->format('Y'); // 31-07-2012

              $photo_date = $dia.' '.$mes.' '.$ano;
              $monthi = ($date->format('m'))-1;
              $mese = $date->format('m');
            } else{
              $photo_date = '';
            }
            if(isset($bellymonth['BellymonthPage']['actual_weight'])){
              $actual_weight = $bellymonth['BellymonthPage']['actual_weight'];
            } else{
              $actual_weight = '';
            }
            if(isset($bellymonth['BellymonthPage']['measurements'])){
              $measurements = $bellymonth['BellymonthPage']['measurements'];
            } else{
              $measurements = '';
            }
            if(isset($bellymonth['BellymonthPage']['apetite'])){
              $apetite = $bellymonth['BellymonthPage']['apetite'];
            } else{
              $apetite = '';
            }
            if(isset($bellymonth['BellymonthPage']['b4'])){
              $b4 = $bellymonth['BellymonthPage']['b4'];
            } else{
              $b4 = '';
            }
            if(isset($bellymonth['BellymonthPage']['sleep'])){
              $sleep = $bellymonth['BellymonthPage']['sleep'];
            } else{
              $sleep = '';
            }

          ?>

          <div class="colL">

            <img class="marco_vert belly_photo_back" id="firstkick_photo" src="http://operacionxperia.com/momtomom/memorias_embarazo/img/marco_whoami.png">

            <?php if( isset($bellymonth['BellymonthPage']['photo']) ){ ?>
              <img class="fondo-vert" id="bellymonth-fondo" src="http://operacionxperia.com/momtomom/memorias_embarazo/img/cover_photos/<?php echo str_replace(' ','%20',$bellymonth['BellymonthPage']['photo']); ?>" />
            <?php } else { ?>
              <img id="marco-fondo bellymonth-fondo" class="fondo-vert bellymonth-fondo" src="http://operacionxperia.com/momtomom/memorias_embarazo/img/marco_fondo.png" />            
            <?php } ?>

            <span  id="datepickerCongrats">
              <?php if($photo_date != ''){  echo $photo_date; } ?>
            </span>
          </div>

          <div class="colR">
            <p class="peso">
              <label>Mi peso actual: </label>
                <span>
                  <?php if($actual_weight != ''){ echo $actual_weight; } ?>
                </span>
            </p>
            <p class="medida">
              <label>Las medidas de mi pancita: </label>
              <span> 
                <?php if($measurements != ''){ echo $measurements; } ?>
              </span>
            </p>

            <p>Totalmente justificables considerando como me duele la espalda.</p>

            <div class="hungry">
              <p>Huy, mi apetito es del tamaño de un:</p>      
              <?php if($apetite == 1){ ?>
              <p class="opcion">
                <label>Elefante</label>
              </p>
              <?php } elseif($apetite == 2){ ?>
              <p class="opcion">
                <label>Le&oacute;n</label>
              </p>
              <?php } elseif($apetite == 3){ ?>
              <p class="opcion">
                <label>Raton</label>
              </p>
              <?php } ?>
            </div>

            <div class="miss">
              <p>Las cosas que más extraño de mi vida antes de estar embarazada son: </p> 
               <?php if($b4 == 1){ ?>    
              <p class="opcion">
                <label>¡Mmmmm! un buen vino y una rica cena</label>
              </p>
               <?php } elseif($b4 == 2){ ?>    
              <p class="opcion">
                <label>Mi vejiga de su tamaño normal</label>
              </p>
               <?php } elseif($b4 == 3){ ?>    
              <p class="opcion">
                <label>Mis tobillos</label>
              </p>
               <?php } elseif($b4 != "" && is_numeric($b4) == FALSE){ ?>    
              <label>Otro</label>
              <span>
                <?php echo $b4; ?>
              </span>
               <?php } ?>    
            </div>

          </div>

      </div>
    </div>

     <img class="print-footer" src="http://operacionxperia.com/momtomom/memorias_embarazo/img/footer.png" width="100%" height="205">

  </div>




  <div class="pagina"> 
      <img class="print-header" src="http://operacionxperia.com/momtomom/memorias_embarazo/img/header.png">

      <div class="print-content">

      <div class="print-page-title">
        <img class="print-title-page" src="http://operacionxperia.com/momtomom/memorias_embarazo/img/titulo_back.png" >
        <p>Se acerca</p>
        <span>el gran momento</span>
      </div>

      <div class="print-form" id="Gettingcloseform"> 

          <?php 

            if(isset($gettingclose['GettingclosePage']['named'])){
              $named = $gettingclose['GettingclosePage']['named'];
            } else{
              $named = '';
            }
            if(isset($gettingclose['GettingclosePage']['possiblename1'])){
              $possiblename1 = $gettingclose['GettingclosePage']['possiblename1'];
            } else{
              $possiblename1 = '';
            }
            if(isset($gettingclose['GettingclosePage']['possiblename2'])){
              $possiblename2 = $gettingclose['GettingclosePage']['possiblename2'];
            } else{
              $possiblename2 = '';
            }
            if(isset($gettingclose['GettingclosePage']['possiblename3'])){
              $possiblename3 = $gettingclose['GettingclosePage']['possiblename3'];
            } else{
              $possiblename3 = '';
            }
            if(isset($gettingclose['GettingclosePage']['possiblename4'])){
              $possiblename4 = $gettingclose['GettingclosePage']['possiblename4'];
            } else{
              $possiblename4 = '';
            }
            if(isset($gettingclose['GettingclosePage']['possiblename5'])){
              $possiblename5 = $gettingclose['GettingclosePage']['possiblename5'];
            } else{
              $possiblename5 = '';
            }
            if(isset($gettingclose['GettingclosePage']['favoritename'])){
              $favoritename = $gettingclose['GettingclosePage']['favoritename'];
            } else{
              $favoritename = '';
            }
            if(isset($gettingclose['GettingclosePage']['suggestedname1'])){
              $suggestedname1 = $gettingclose['GettingclosePage']['suggestedname1'];
            } else{
              $suggestedname1 = '';
            }
            if(isset($gettingclose['GettingclosePage']['suggestedname2'])){
              $suggestedname2 = $gettingclose['GettingclosePage']['suggestedname2'];
            } else{
              $suggestedname2 = '';
            }
            if(isset($gettingclose['GettingclosePage']['suggestedname3'])){
              $suggestedname3 = $gettingclose['GettingclosePage']['suggestedname3'];
            } else{
              $suggestedname3 = '';
            }
            if(isset($gettingclose['GettingclosePage']['suggestedname4'])){
              $suggestedname4 = $gettingclose['GettingclosePage']['suggestedname4'];
            } else{
              $suggestedname4 = '';
            }
            if(isset($gettingclose['GettingclosePage']['suggestedname5'])){
              $suggestedname5 = $gettingclose['GettingclosePage']['suggestedname5'];
            } else{
              $suggestedname5 = '';
            }
            if(isset($gettingclose['GettingclosePage']['inlaw'])){
              $inlaw = $gettingclose['GettingclosePage']['inlaw'];
            } else{
              $inlaw = '';
            } 
            if(isset($gettingclose['GettingclosePage']['parents'])){
              $parents = $gettingclose['GettingclosePage']['parents'];
            } else{
              $parents = '';
            } 
          ?>

          <p class="miedo">Estoy tomando un curso de preparación para el parto, ¡ay que miedo!</p>
          <p class="sorry">
            <label>Querido bebé, perdónanos pero te hemos llamado: </label>
            <span> 
              <?php if($named != ''){ echo $named; } ?>
            </span>
          </p>

          <div class="col uno">
            <p>Nombres reales qué estamos considerando:</p>
           
            
            <?php if($possiblename1 != ''){ echo '<span> '.$possiblename1.' </span>'; } ?>            
            <?php if($possiblename2 != ''){ echo '<span> '.$possiblename2.' </span>'; } ?>
            <?php if($possiblename3 != ''){ echo '<span> '.$possiblename3.' </span>'; } ?>
            <?php if($possiblename4 != ''){ echo '<span> '.$possiblename4.' </span>'; } ?>
            <?php if($possiblename5 != ''){ echo '<span> '.$possiblename5.' </span>'; } ?>

          </div>

          <div class="col dos">
            <p>Mi favorito:</p>            
            <input type="radio" name="data[GettingclosePage][favoritename]" value="1" <?php if($favoritename == 1){
            echo  'checked="checked"'; } ?> />
            <input type="radio" name="data[GettingclosePage][favoritename]" value="2" <?php if($favoritename == 2){
            echo   'checked="checked"'; } ?> />
            <input type="radio" name="data[GettingclosePage][favoritename]" value="3" <?php if($favoritename == 3){
            echo   'checked="checked"'; } ?> />
            <input type="radio" name="data[GettingclosePage][favoritename]" value="4" <?php if($favoritename == 3){
            echo   'checked="checked"'; } ?> />
            <input type="radio" name="data[GettingclosePage][favoritename]" value="5" <?php if($favoritename == 3){
            echo   'checked="checked"'; } ?> />
          </div>

          <div class="col tres">
             <p>Sugerencias de otras personas:</p>
             
              <?php if($suggestedname1 != ''){ echo ' <span> '.$suggestedname1.' </span> '; } ?>            
              <?php if($suggestedname2 != ''){ echo ' <span> '.$suggestedname2.' </span> '; } ?>           
              <?php if($suggestedname3 != ''){ echo ' <span> '.$suggestedname3.' </span> '; } ?>
              <?php if($suggestedname4 != ''){ echo ' <span> '.$suggestedname4.' </span> '; } ?>
              <?php if($suggestedname5 != ''){ echo ' <span> '.$suggestedname5.' </span> '; } ?>

          </div>

          <p class="suegros">
            <label> Mis suegros insisten que te llames: </label>
            <span>
              <?php if($inlaw != ''){ echo $inlaw; } ?>
            </span>
          </p>

          <p class="papas">
            <label> Mis papás opinan: </label> 
            <span>
              <?php if($parents != ''){ echo $parents; } ?>
            </span>
          </p>

      </div>
    </div>

     <img class="print-footer" src="http://operacionxperia.com/momtomom/memorias_embarazo/img/footer.png" width="100%" height="205">

  </div>




  <div class="pagina"> 
      <img class="print-header" src="http://operacionxperia.com/momtomom/memorias_embarazo/img/header.png">

      <div class="print-content">

      <div class="print-page-title">
        <img class="print-title-page" src="http://operacionxperia.com/momtomom/memorias_embarazo/img/titulo_back.png" >
        <p>Baby shower</p>
      </div>

      <div class="print-form" id="bbyshowerform"> 

          <?php 
            if(isset($bbyshower['BabyshowerPage']['bbyshower_date'])){ 

                $source = $bbyshower['BabyshowerPage']['bbyshower_date'];
                $date = new DateTime($source);
                $letime = strtotime($source);

                $mes = get_date_spanish($letime, true, 'month'); # return Enero

                $dia = $date->format('d'); // 31.07.2012
                $ano = $date->format('Y'); // 31-07-2012

                $bbyshower_date = $dia.' '.$mes.' '.$ano;
                $monthi = ($date->format('m'))-1;
                $mese = $date->format('m');
             } else{
                $bbyshower_date = '';
              }
              if(isset($bbyshower['BabyshowerPage']['present1'])){
                $present1 = $bbyshower['BabyshowerPage']['present1'];
              } else{
                $present1 = '';
              }
              if(isset($bbyshower['BabyshowerPage']['present2'])){
                $present2 = $bbyshower['BabyshowerPage']['present2'];
              } else{
                $present2 = '';
              }
              if(isset($bbyshower['BabyshowerPage']['present3'])){
                $present3 = $bbyshower['BabyshowerPage']['present3'];
              } else{
                $present3 = '';
              }
              if(isset($bbyshower['BabyshowerPage']['favoritepresent'])){
                $favoritepresent = $bbyshower['BabyshowerPage']['favoritepresent'];
              } else{
                $favoritepresent = '';
              }
               if(isset($bbyshower['BabyshowerPage']['guest1'])){
                $guest1 = $bbyshower['BabyshowerPage']['guest1'];
              } else{
                $guest1 = '';
              }
              if(isset($bbyshower['BabyshowerPage']['guest2'])){
                $guest2 = $bbyshower['BabyshowerPage']['guest2'];
              } else{
                $guest2 = '';
              }
              if(isset($bbyshower['BabyshowerPage']['guest3'])){
                $guest3 = $bbyshower['BabyshowerPage']['guest3'];
              } else{
                $guest3 = '';
              }

          ?>

           <p class="mibaby">
            <label>Mi baby shower fu&eacute;: </label>
            <span>
              <?php if($bbyshower_date != ''){ echo $bbyshower_date; } ?>
            </span>
          </p>

          <div class="col uno">
            <label>Los regalos que recib&iacute;: </label>
            <span class="losprimeros"> 
              <?php if($present1 != ''){ echo $present1; } ?>
            </span>
            
              <?php if($present2 != ''){ echo '<span>'.$present2.'</span>'; } ?>
              <?php if($present3 != ''){ echo '<span>'.$present3.'</span>'; } ?>

          </div>

          <div class="col dos">
            <p>El m&aacute;s divertido fue:</p>

            <input type="radio" name="data[BabyshowerPage][favoritepresent]" value="1" <?php if($favoritepresent == 1){ echo 'checked="checked"'; } ?> />
             <input type="radio" name="data[BabyshowerPage][favoritepresent]" value="2" <?php if($favoritepresent == 2){ echo 'checked="checked"'; } ?> />
             <input type="radio" name="data[BabyshowerPage][favoritepresent]" value="3" <?php if($favoritepresent == 3){ echo 'checked="checked"'; } ?> />
          </div>

          <div class="col tres">
            <label>Vinieron a conocerte dentro de mi panza: </label>
            <span class="losprimeros">
              <?php if($guest1 != ''){ echo $guest1; } ?>
            </span>
            
              <?php if($guest2 != ''){ echo '<span>'.$guest2.'</span>'; } ?>
              <?php if($guest3 != ''){ echo '<span>'.$guest3.'</span>'; } ?>
          </div>

          <?php if( isset($bbyshower['BabyshowerPage']['photo1']) ){ ?>
            <img id="photo1_back_bbyshower" src="https://operacionxperia.com/momtomom/memorias_embarazo/img/cover_photos/<?php echo str_replace(' ','%20',$bbyshower['BabyshowerPage']['photo1']); ?>">
          <?php } else { ?>
            <img id="photo1_back_bbyshower marco-fondo" class="photo1_back_bbyshower" src="https://operacionxperia.com/momtomom/memorias_embarazo/img/marco_fondo.png">
          <?php } ?> 
          <img id="photo1-bbyshower" class="marco" src="https://operacionxperia.com/momtomom/memorias_embarazo/img/marco.png">

          
          <?php if( isset($bbyshower['BabyshowerPage']['photo2']) ){ ?>
            <img id="photo2_back_bbyshower" src="https://operacionxperia.com/momtomom/memorias_embarazo/img/cover_photos/<?php echo str_replace(' ','%20',$bbyshower['BabyshowerPage']['photo2']); ?>">
          <?php } else { ?>
            <img id="photo2_back_bbyshower marco-fondo" class="photo2_back_bbyshower" src="https://operacionxperia.com/momtomom/memorias_embarazo/img/marco_fondo.png">
          <?php } ?> 
          <img id="photo2-bbyshower" class="marco" src="https://operacionxperia.com/momtomom/memorias_embarazo/img/marco.png">

      </div>
    </div>

     <img class="print-footer" src="http://operacionxperia.com/momtomom/memorias_embarazo/img/footer.png" width="100%" height="205">

  </div>



  <div class="pagina"> 
      <img class="print-header" src="http://operacionxperia.com/momtomom/memorias_embarazo/img/header.png">

      <div class="print-content">

      <div class="print-page-title">
        <img class="print-title-page" src="http://operacionxperia.com/momtomom/memorias_embarazo/img/titulo_back.png" >
         <p>S&uacute;per cool</p>
         <span>fotos del ultrasonido</span>
      </div>

      <div class="print-form"> 

          <?php 
            if(isset($cool['CoolultrasoundPage']['ultrasound_date'])){ 

              $source = $cool['CoolultrasoundPage']['ultrasound_date'];
              $date = new DateTime($source);
              $letime = strtotime($source);

              $mes = get_date_spanish($letime, true, 'month'); # return Enero

              $dia = $date->format('d'); // 31.07.2012
              $ano = $date->format('Y'); // 31-07-2012

              $ultrasound_date = $dia.' '.$mes.' '.$ano;
              $monthi = ($date->format('m'))-1;
              $mese = $date->format('m');
            
            } else{
              $ultrasound_date = '';
            }

            if(isset($cool['CoolultrasoundPage']['iwas'])){
              $iwas = $cool['CoolultrasoundPage']['iwas'];
            } else{
              $iwas = '';
            }
            if(isset($cool['CoolultrasoundPage']['doctorsaid'])){
              $doctorsaid = $cool['CoolultrasoundPage']['doctorsaid'];
            } else{
              $doctorsaid = '';
            }
            if(isset($cool['CoolultrasoundPage']['urdad'])){
              $urdad = $cool['CoolultrasoundPage']['urdad'];
            } else{
              $urdad = '';
            }
            if(isset($cool['CoolultrasoundPage']['urdadsays'])){
              $urdadsays = $cool['CoolultrasoundPage']['urdadsays'];
            } else{
              $urdadsays = '';
            }
            if(isset($cool['CoolultrasoundPage']['imiss'])){
              $imiss = $cool['CoolultrasoundPage']['imiss'];
            } else{
              $imiss = '';
            }
            if(isset($cool['CoolultrasoundPage']['theythink'])){
              $theythink = $cool['CoolultrasoundPage']['theythink'];
            } else{
              $theythink = '';
            }
          ?>

          <?php if( isset($cool['CoolultrasoundPage']['photo']) ){ ?>
            <img id="photo_back_coolultrasound" src="https://operacionxperia.com/momtomom/memorias_embarazo/img/cover_photos/<?php echo str_replace(' ','%20',$cool['CoolultrasoundPage']['photo']); ?>">
          <?php } else { ?>
            <img id="marco-fondo" class="photo_back_coolultrasound" src="https://operacionxperia.com/momtomom/memorias_embarazo/img/marco_fondo.png">
          <?php } ?> 

          <img id="photo-coolultrasound" class="marco" src="https://operacionxperia.com/momtomom/memorias_embarazo/img/marco.png">

          <div class="bloque uno">
            <h3>Ultrasonido</h3>
            <p class="fui">
              <label>Fu&iacute; el :</label>
              <span id="datepickerCongrats">
                <?php if($ultrasound_date != ''){ echo $ultrasound_date; } ?>
              </span>
            </p>

            <p class="semanas">
              <label>Ten&iacute;a </label>
              <span> <?php if($iwas != ''){ echo $iwas; } ?> </span>
              semanas de embarazo
            </p>

            <p class="doctor">
              <label>Lo que me dijo el doctor fue: </label>
              <span> 
                <?php if($doctorsaid != ''){ echo $doctorsaid; } ?>
              </span>
            </p>
          </div>

          <div class="bloque dos">
            <p>En este trimestre tu pap&aacute; est&aacute; un poco: </p>
            <div class="opciones">
              <?php if($urdad == 1){ ?>
              <div class="opcion cf">
                <label>Agobiado</label>
              </div>
              <?php } elseif($urdad == 2){ ?>
              <div class="opcion cf">
                <label>Sobreprotector</label>
              </div>
              <?php } elseif($urdad == 3){ ?>
              <div class="opcion cf">
                <label>Excluído</label>
              </div>
              <?php } elseif($urdad == 4){ ?>
              <div class="opcion cf">
                <label>Agobiado, sobreprotector y excluído.</label>
              </div>
              <?php } ?>
            </div>
            <span>
              <?php if($urdadsays != ""){ echo $urdadsays; } ?>
            </span>
          </div>

          <div class="bloque tres">
            <p>Las cosas que m&aacute;s extraño: </p>
            <div class="opciones">
              <?php if($imiss == 1){ ?>
              <div class="opcion cf">
                <label>Usar tacones</label>
              </div>
              <?php } elseif($imiss == 2){ ?>
              <div class="opcion cf">
                <label>Ropa interior normal</label>
              </div>
              <?php } elseif($imiss == 3){ ?>
              <div class="opcion cf">
                <label>Verme los pies</label>
              </div>
            <?php } elseif($imiss != ""){  ?>
            <p class="otro">
              <label>Otro </label>
              <span> 
                <?php if($imiss != ""){ echo $imiss; } ?>
              </span>
            </p>
              <?php } ?>
            </div>

            <p class="panza">La gente que opina de mi panza: </p>
            <div class="opciones">
              <?php if($theythink == 1){ ?>
              <div class="opcion cf">
                <label>Es muy discreta para el mes en el que estoy</label>
              </div>
              <?php } elseif($theythink == 2){ ?>
              <div class="opcion cf">
                <label>Corresponde a los meses que tengo de embarazo</label>
              </div>
              <?php } elseif($theythink == 3){ ?>
              <div class="opcion cf">  
                <label>Esta a punto de estallar</label>
              </div>
              <?php } elseif($theythink == 4){ ?>
              <div class="opcion cf">
                <label>¡Gigante! Parece de triates</label>
              </div>
              <?php } ?>
            </div>
          </div>

      </div>
    </div>

     <img class="print-footer" src="http://operacionxperia.com/momtomom/memorias_embarazo/img/footer.png" width="100%" height="205">

  </div>


  <div class="pagina"> 
      <img class="print-header" src="http://operacionxperia.com/momtomom/memorias_embarazo/img/header.png">

      <div class="print-content">

      <div class="print-page-title">
        <img class="print-title-page" src="http://operacionxperia.com/momtomom/memorias_embarazo/img/titulo_back.png" >
        <p>SÍNTOMAS</p>
        <span>de anidar</span>
      </div>

      <div class="print-form"> 

          <?php 
            if(isset($nesting['NestingPage']['nest'])){
              $nest = $nesting['NestingPage']['nest'];
            } else{
              $nest = '';
            }
            if(isset($nesting['NestingPage']['buy1'])){
              $buy1 = $nesting['NestingPage']['buy1'];
            } else{
              $buy1 = '';
            }
            if(isset($nesting['NestingPage']['buy2'])){
              $buy2 = $nesting['NestingPage']['buy2'];
            } else{
              $buy2 = '';
            }
            if(isset($nesting['NestingPage']['buy3'])){
              $buy3 = $nesting['NestingPage']['buy3'];
            } else{
              $buy3 = '';
            }
          ?>

          <p class="emociones">¡Muchas emociones! Me estoy preparando para tu llegada.</p>
          <p class="emociones">Oﬁcialmente estoy anidando.</p>

          <img class="anidar" src="https://operacionxperia.com/momtomom/memorias_embarazo/img/anidar.png">
          <div class="dado">
            <p>Me ha dado por:</p>
            
            <div class="opciones">
              <?php if($nest == 1){ ?>
              <div class="cf">
                <label>Limpiar toda la casa</label>
              </div>
              <?php } elseif($nest == 2){ ?>
              <div class="cf">
                <label>Lavar y acomodar tu ropita</label>
              </div>
              <?php } elseif($nest == 3){ ?>
              <div class="cf">
                <label>Tener nuestra maleta lista en la puerta</label>
              </div>
              <?php } elseif($nest == 4){ ?>
              <div class="cf">
                <label>Todas las anteriores</label>
              </div>
              <?php } ?>
            </div>
          </div>

          <div class="comprar">
            <p>Nos falta comprar: </p>
            
            
              <?php if($buy1 != ''){ echo '<span> '.$buy1.'</span>'; } ?>
              <?php if($buy2 != ''){ echo '<span> '.$buy2.'</span> '; } ?>
              <?php if($buy3 != ''){ echo '<span> '.$buy3.'</span> '; } ?>

          </div>
        
          <p class="cuarto"> As&iacute; ser&aacute; tu cuarto: </p>


          <?php if( isset($nesting['NestingPage']['room_photo']) ){ ?>
            <img id="room_photo_back" src="http://operacionxperia.com/momtomom/memorias_embarazo/img/cover_photos/<?php echo str_replace(' ','%20',$nesting['NestingPage']['room_photo']); ?>">
          <?php } else { ?>
            <img id="marco-fondo" class="room_photo_back" src="http://operacionxperia.com/momtomom/memorias_embarazo/img/marco_fondo.png">
          <?php } ?>

          <img id="room_photo" class="marco" src="http://operacionxperia.com/momtomom/memorias_embarazo/img/marco.png">
          
      </div>
    </div>

     <img class="print-footer" src="http://operacionxperia.com/momtomom/memorias_embarazo/img/footer.png" width="100%" height="205">

  </div>

  <div class="pagina"> 
      <img class="print-header" src="http://operacionxperia.com/momtomom/memorias_embarazo/img/header.png">

      <div class="print-content">

      <div class="print-page-title">
        <img class="print-title-page" src="http://operacionxperia.com/momtomom/memorias_embarazo/img/titulo_back.png" >
        <p>Adios pancita,</p>
        <span>bienvenido beb&eacute;</span>
      </div>

      <div class="print-form" id="adiospancitaform"> 

          <?php 
            if(isset($byebelly['ByebellyPage']['byebelly_date'])){ 
              $source = $byebelly['ByebellyPage']['byebelly_date'];
              $date = new DateTime($source);
              $letime = strtotime($source);

              $mes = get_date_spanish($letime, true, 'month'); # return Enero

              $dia = $date->format('d'); // 31.07.2012
              $ano = $date->format('Y'); // 31-07-2012

              $byebelly_date = $dia.' '.$mes.' '.$ano;
              $monthi = ($date->format('m'))-1;
              $mese = $date->format('m');
            } else {
              $byebelly_date = '';
            }
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
            if(isset($byebelly['ByebellyPage']['hours'])){
              $hours = $byebelly['ByebellyPage']['hours'];
            } else{
              $hours = '';
            }
            if(isset($byebelly['ByebellyPage']['iwas'])){
              $iwas = $byebelly['ByebellyPage']['iwas'];
            } else{
              $iwas = '';
            }
            if(isset($byebelly['ByebellyPage']['experience'])){
              $experience = $byebelly['ByebellyPage']['experience'];
            } else{
              $experience = '';
            }
          ?>

          <p class="contacciones">
            <label>El d&iacute;a:</label>
            <span>
              <?php if($byebelly_date != ''){ echo $byebelly_date; } ?>
            </span>
            comenzaron las contracciones.
          </p>
          
          <p> ¡Ay no, ay no, que nervios! mi labor de parto comenzó: </p>
       
          <div class="opciones">
            <?php if($itstarted == 1){ ?>
            <p class="opcion cf">
              <label>
                <span> <?php if($days1 != '' && $itstarted == 1){ echo $days1; } ?> </span> días antes de mi fecha programada
              </label>
            </p>
            <?php } elseif($itstarted == 2){ ?>
            <p class="opcion cf">
              <label>
                <?php if($days2 != '' ){ echo $days2; } ?> días tarde (¡Sáquenmelo!)
              </label>
            </p>
            <?php } elseif($itstarted == 3){ ?>
            <p class="opcion cf">
              <label>Justo a tiempo</label>
            </p>
            <?php } elseif($itstarted == 4 || $itstarted == 5){ ?>
            <p class="nota"> Ninguna de las anteriores: </p>    
            <?php if($itstarted == 4){ ?>
            <p class="opcion cf">
              <label>Fue inducido</label>
            </p>
            <?php } elseif($itstarted == 5){ ?>
            <p class="opcion cf">
              <label>Fue por ces&aacute;rea</label>
            </p>
            <?php 
                }
              } 
            ?>
          </div>
         
          <p class="horas">
            <label>Total de horas en labor de parto </label>
            <span>
              <?php if($hours != ''){ echo $hours; } ?>
            </span>
          </p>

          
          <div class="estaba">
            <label>Cuando comenzaron las contracciones yo estaba: </label>
            <span>
              <?php if($iwas != ''){ echo $iwas; } ?>
            </span>
          </div>

          <div class="exp">
            <label>La experiencia completa de la labor de parto: </label>
            <span> 
              <?php if($experience != ''){ echo $experience; } ?>
            </span>
          </div>
          
      </div>
    </div>

     <img class="print-footer" src="http://operacionxperia.com/momtomom/memorias_embarazo/img/footer.png" width="100%" height="205">

  </div>


  <div class="pagina"> 
      <img class="print-header" src="http://operacionxperia.com/momtomom/memorias_embarazo/img/header.png">

      <div class="print-content">

      <div class="print-page-title">
        <img class="print-title-page" src="http://operacionxperia.com/momtomom/memorias_embarazo/img/titulo_back.png" >
        <p>Entrega Especial:</p>
        <span>T&uacute;</span>
      </div>

      <div class="print-form"> 

          <?php 
            if(isset($special['SpecialdeliveryPage']['birthday'])){ 

              $source = $special['SpecialdeliveryPage']['birthday'];
              $date = new DateTime($source);
              $letime = strtotime($source);

              $mes = get_date_spanish($letime, true, 'month'); # return Enero

              $dia = $date->format('d'); // 31.07.2012
              $ano = $date->format('Y'); // 31-07-2012

              $birthday = $dia.' '.$mes.' '.$ano;
              $monthi = ($date->format('m'))-1;
              $mese = $date->format('m');
            } else{
              $birthday = '';
            }
            if(isset($special['SpecialdeliveryPage']['uare'])){
              $uare = $special['SpecialdeliveryPage']['uare'];
            } else{
              $uare = '';
            }
            if(isset($special['SpecialdeliveryPage']['hour'])){
              $hour = $special['SpecialdeliveryPage']['hour'];
            } else{
              $hour = '';
            }
            if(isset($special['SpecialdeliveryPage']['location'])){
              $location = $special['SpecialdeliveryPage']['location'];
            } else{
              $location = '';
            }
            if(isset($special['SpecialdeliveryPage']['itwas'])){
              $itwas = $special['SpecialdeliveryPage']['itwas'];
            } else{
              $itwas = '';
            }
            if(isset($special['SpecialdeliveryPage']['weightnmeasures'])){
              $weightnmeasures = $special['SpecialdeliveryPage']['weightnmeasures'];
            } else{
              $weightnmeasures = '';
            }
            if(isset($special['SpecialdeliveryPage']['urhairneyes'])){
              $urhairneyes = $special['SpecialdeliveryPage']['urhairneyes'];
            } else{
              $urhairneyes = '';
            }
          ?>


          <div class="todo">

          <?php if( isset($special['SpecialdeliveryPage']['photo']) ){ ?>

            <img id="photo-back-specialdel" src="http://operacionxperia.com/momtomom/memorias_embarazo/img/cover_photos/<?php echo str_replace(' ','%20',$special['SpecialdeliveryPage']['photo']); 
              ?>">

          <?php } else { ?>
            <img id="marco-fondo" class="photo-back-specialdel" src="http://operacionxperia.com/momtomom/memorias_embarazo/img/marco_fondo.png">
          <?php } ?>
          
          <img id="photo-specialdel" class="marco" src="http://operacionxperia.com/momtomom/memorias_embarazo/img/marco.png">

          <p class="eres">
            <label> Eres: </label>
            <span>
              <?php if($uare != ''){ echo $uare; } ?>
            </span>
          </p>
         
          <p class="bday">
            <label>Naciste el d&iacute;a: </label>
            <span>
              <?php if($birthday != ''){ echo $birthday; } ?>
            </span>
            a las:
            <span> 
              <?php if($hour != ''){ echo $hour; } ?>
            </span>
          </p>
        
          <p class="bplace">
            <label> Naciste en: </label>
            <span>
              <?php if($location != ''){ echo $location; } else { echo '<br>';} ?>
            </span>
          </p>
          <div class="parto">
            <p>El parto fue: </p>          
            <div class="opciones">
              <div class="cf">
                <input type="radio" name="data[SpecialdeliveryPage][itwas]" value="1" <?php if($itwas == 1){ echo 'checked="checked"'; } ?> />
                <label> Natural </label>
              </div>
              <div class="cf">
                <input type="radio" name="data[SpecialdeliveryPage][itwas]" value="2" <?php if($itwas == 2){ echo 'checked="checked"'; } ?> />
                <label> Epidural</label>
              </div>
              <div class="cf">
                <input type="radio" name="data[SpecialdeliveryPage][itwas]" value="3" <?php if($itwas == 3){ echo 'checked="checked"'; } ?> />
                <label> Ces&aacute;rea</label>
              </div>
            </div>
          </div>

      
          <p class="pesaste">
            <label> Pesaste y mediste: </label>
            <span> 
              <?php if($weightnmeasures != ''){ echo $weightnmeasures; } else { echo '<br>';}?>
            </span>
          </p>

   
          <p class="ojos">
            <label> Tu cabello y tus ojos son: </label>
            <span>
              <?php if($urhairneyes != ''){ echo $urhairneyes; } else { echo '<br>';} ?>
            </span>
          </p>

        </div>
         <p class="nota-foot"> ¡Apenas puedo creer que estabas en mi panza! </p>
         
         
          
      </div>
    </div>

     <img class="print-footer" src="http://operacionxperia.com/momtomom/memorias_embarazo/img/footer.png" width="100%" height="205">

  </div>


  <div class="pagina"> 
      <img class="print-header" src="http://operacionxperia.com/momtomom/memorias_embarazo/img/header.png">

      <div class="print-content">

      <div class="print-page-title">
        <img class="print-title-page" src="http://operacionxperia.com/momtomom/memorias_embarazo/img/titulo_back.png" >
        <p>M&aacute;s detalles</p>
        <span>de tu llegada</span>
      </div>

      <div class="print-form"> 

          <?php 

            if(isset($welcome['WelcomebbyPage']['ulooklike'])){
              $ulooklike = $welcome['WelcomebbyPage']['ulooklike'];
            } else{
              $ulooklike = '';
            }
            if(isset($welcome['WelcomebbyPage']['whocutit'])){
              $whocutit = $welcome['WelcomebbyPage']['whocutit'];
            } else{
              $whocutit = '';
            }
            if(isset($welcome['WelcomebbyPage']['ifelt'])){
              $ifelt = $welcome['WelcomebbyPage']['ifelt'];
            } else{
              $ifelt = '';
            }
            if(isset($welcome['WelcomebbyPage']['wheniholdu'])){
              $wheniholdu = $welcome['WelcomebbyPage']['wheniholdu'];
            } else{
              $wheniholdu = '';
            }
            if(isset($welcome['WelcomebbyPage']['metu'])){
              $metu = $welcome['WelcomebbyPage']['metu'];
            } else{
              $metu = '';
            }
            if(isset($welcome['WelcomebbyPage']['tilday'])){
              $tilday = $welcome['WelcomebbyPage']['tilday'];
            } else{
              $tilday = '';
            }
            if(isset($welcome['WelcomebbyPage']['nighttime'])){
              $nighttime = $welcome['WelcomebbyPage']['nighttime'];
            } else{
              $nighttime = '';
            }
            if(isset($welcome['WelcomebbyPage']['most'])){
              $most = $welcome['WelcomebbyPage']['most'];
            } else{
              $most = '';
            }

          ?>

          <p class="pareces">
            <label> Todo el mundo opina que te pareces a: </label>
            <span>
              <?php if($ulooklike != ''){ echo $ulooklike; } else { echo '<br>';} ?>
            </span>
          </p>
           <p class="cordon">
            <label> El cord&oacute;n umbilical lo cort&oacute;: </label>
            <span>
              <?php if($whocutit != ''){ echo $whocutit; } else { echo '<br>';} ?>
            </span>
          </p>
          <p class="tevi">
            <label> Cuando te vi por primera vez sentí: </label>
            <span>
              <?php if($ifelt != ''){ echo $ifelt; } else { echo '<br>';} ?>
            </span>
          </p>
          <p class="brazos">
            <label> Y cuando te pusieron en mis brazos, yo </label>
            <span> 
              <?php if($wheniholdu != ''){ echo $wheniholdu; } else { echo '<br>';} ?>
            </span>
          </p>
          <p class="conocer">
            <label> Te fueron a conocer: </label>
            <span> 
              <?php if($metu != ''){ echo $metu; }else { echo '<br>';} ?>
            </span>
          </p>
          <p class="hospital">
            <label> Estuvimos en el hospital hasta el día </label>
            <span> 
              <?php if($tilday != ''){ echo $tilday; } else { echo '<br>';} ?>
            </span>
          </p>
          <p class="noche">
            <label> y la experiencia de la primera noche en casa es digna de contarse: </label>           
            <span>
              <?php if($nighttime != ''){ echo $nighttime; } else { echo '<br>';} ?>
            </span>
          </p>
          
      </div>
    </div>

     <img class="print-footer" src="http://operacionxperia.com/momtomom/memorias_embarazo/img/footer.png" width="100%" height="205">

  </div>


  <div class="pagina"> 
      <img class="print-header" src="http://operacionxperia.com/momtomom/memorias_embarazo/img/header.png">

      <div class="print-content">

      <div class="print-page-title">
        <img class="print-title-page" src="http://operacionxperia.com/momtomom/memorias_embarazo/img/titulo_back.png" >
        <p>Ep&iacute;logo</p>
        <span>de la panza</span>
      </div>

      <div class="print-form" id="epilogform"> 

          <img id="epilogbackground" src="https://operacionxperia.com/momtomom/memorias_embarazo/img/epilogo.png">

          <?php 

            if(isset($epilog['EpilogPage']['belly'])){
              $belly = $epilog['EpilogPage']['belly'];
            } else{
              $belly = '';
            }
            if(isset($epilog['EpilogPage']['notes'])){
              $notes =$epilog['EpilogPage']['notes'];
            } else{
              $notes = '';
            }
            
          ?>

          <div class="opciones cf">
            <?php if($belly == 1){  ?>
            <div class="cf">
              <label>¡Ay! todavia parezco embarazada</label>
            </div>
            <?php } elseif($belly == 2){ ?>
            <div class="cf">
              <label>¡Eh!  Sorpresivamente mi panza regresó a su talla normal</label>
            </div>
            <?php } ?>
          </div>
          <p class="post-parto cf">
            <label> Notas despu&eacute;s de que llegaste y detalles que recordar: </label>
            <span>  
              <?php if($notes != ''){ echo $notes; } else { echo '<br>'; } ?>
            </span>
          </p>
          
      </div>
    </div>

     <img class="print-footer" src="http://operacionxperia.com/momtomom/memorias_embarazo/img/footer.png" width="100%" height="205">

  </div>


  <div class="pagina"> 
      <img class="print-header" src="http://operacionxperia.com/momtomom/memorias_embarazo/img/header.png">

      <div class="print-content">

      <div class="print-page-title">
        <img class="print-title-page" src="http://operacionxperia.com/momtomom/memorias_embarazo/img/titulo_back.png" >
        <p>La nueva familia</p>
      </div>

      <div class="print-form"> 
          <?php 

            if(isset($new['NewfamilyPage']['description'])){
              $description = $new['NewfamilyPage']['description'];
            } else{
              $description = '';
            }
            
          ?>

          <?php if( isset($new['NewfamilyPage']['photo']) ){ ?>
            <img class="newfamily-back-photo" src="http://operacionxperia.com/momtomom/memorias_embarazo/img/cover_photos/<?php echo str_replace(' ','%20',$new['NewfamilyPage']['photo']); ?>">            
          <?php } else { ?>
            <img class="newfamily-back-photo marco-fondo" src="http://operacionxperia.com/momtomom/memorias_embarazo/img/marco_fondo.png">    
          <?php } ?>
         <img class="newfamily-photo marco" src="http://operacionxperia.com/momtomom/memorias_embarazo/img/marco.png">

          <p class="newfamilypar">
            <span>
              <?php if($description != ''){ echo $description; } ?>
            </span>
          </p>
          
      </div>
    </div>

     <img class="print-footer" src="http://operacionxperia.com/momtomom/memorias_embarazo/img/footer.png" width="100%" height="205">

  </div>





  <div class="pagina"> 
      <img class="print-header" src="http://operacionxperia.com/momtomom/memorias_embarazo/img/header.png">

      <div class="print-content">

      <div class="print-page-title">
        <img class="print-title-page" src="http://operacionxperia.com/momtomom/memorias_embarazo/img/titulo_back.png" >
        <p>&aacute;rbol Familiar</p>
      </div>

      <div class="print-form" id="epilogform"> 

          <?php 
            if(isset($familytree['FamilytreePage']['dad'])){
              $dad = $familytree['FamilytreePage']['dad'];
            } else{
              $dad = '';
            }
            if(isset($familytree['FamilytreePage']['grandpa_dad'])){
              $grandpa_dad = $familytree['FamilytreePage']['grandpa_dad'];
            } else{
              $grandpa_dad = '';
            }
            if(isset($familytree['FamilytreePage']['grandpa_mom'])){
              $grandpa_mom = $familytree['FamilytreePage']['grandpa_mom'];
            } else{
              $grandpa_mom = '';
            }
            if(isset($familytree['FamilytreePage']['grandma_dad'])){
              $grandma_dad = $familytree['FamilytreePage']['grandma_dad'];
            } else{
              $grandma_dad = '';
            }
            if(isset($familytree['FamilytreePage']['grandma_mom'])){
              $grandma_mom = $familytree['FamilytreePage']['grandma_mom'];
            } else{
              $grandma_mom = '';
            }

            if(isset($familytree['FamilytreePage']['baby'])){
              $baby = $familytree['FamilytreePage']['baby'];
            } else{
              $baby = '';
            }
            if(isset($familytree['FamilytreePage']['mom'])){
              $mom = $familytree['FamilytreePage']['mom'];
            } else{
              $mom = '';
            }

            if($tema != 1){
              $elpath= 'tema'.$tema.'/';    
            } else {
              $elpath= '';
            }

          ?>

          <div class="familytree">
            <img class="familytreeFile marco-circular" id="grandpa_dad" src="http://operacionxperia.com/momtomom/memorias_embarazo/img/marco_circular.png">

            <?php if( isset($familytree['FamilytreePage']['grandpa_dad_img']) ){ ?>
              <img class="familytreeBackBack" id="grandpa_dad-back" src="http://operacionxperia.com/momtomom/memorias_embarazo/img/cover_photos/<?php echo str_replace(' ','%20',$familytree['FamilytreePage']['grandpa_dad_img']); ?>" >
            <?php } else { ?>
              <img class="familytreeBackBack" id="grandpa_dad-back" src="http://operacionxperia.com/momtomom/memorias_embarazo/img/<?php echo $elpath;?>marco_circular_back.png" >
            <?php } ?>

            <span class="spanfila1" id="first">
              <?php  echo $grandpa_dad; ?>
            </span>
          </div>

          <div class="familytree">
            <img class="familytreeFile marco-circular" id="grandpa_mom" src="http://operacionxperia.com/momtomom/memorias_embarazo/img/marco_circular.png">

            <?php if( isset($familytree['FamilytreePage']['grandpa_mom_img']) ){ ?>
              <img class="familytreeBackBack" id="grandpa_mom-back" src="http://operacionxperia.com/momtomom/memorias_embarazo/img/cover_photos/<?php echo str_replace(' ','%20',$familytree['FamilytreePage']['grandpa_mom_img']); ?>" >
            <?php } else { ?>
              <img  class="familytreeBackBack" id="grandpa_mom-back" src="http://operacionxperia.com/momtomom/memorias_embarazo/img/<?php echo $elpath;?>marco_circular_back.png" >
            <?php } ?>            

            <span class="spanfila1" id="sec">
              <?php  echo $grandpa_mom; ?>
            </span>
          </div>

          <div class="familytree">
            <img class="familytreeFile marco-circular" id="grandma_dad" src="http://operacionxperia.com/momtomom/memorias_embarazo/img/marco_circular.png">

            <?php if( isset($familytree['FamilytreePage']['grandma_dad_img']) ){ ?>
              <img class="familytreeBackBack" id="grandma_dad-back" src="http://operacionxperia.com/momtomom/memorias_embarazo/img/cover_photos/<?php echo str_replace(' ','%20',$familytree['FamilytreePage']['grandma_dad_img']); ?>" >
            <?php } else { ?>
              <img class="familytreeBackBack" id="grandma_dad-back" src="http://operacionxperia.com/momtomom/memorias_embarazo/img/<?php echo $elpath;?>marco_circular_back.png" >
            <?php } ?>            

            <span class="spanfila1" id="ter">
              <?php  echo $grandma_dad; ?>
            </span>

          </div>


          <div class="familytree">
            <img class="familytreeFile marco-circular" id="grandma_mom" src="http://operacionxperia.com/momtomom/memorias_embarazo/img/marco_circular.png">

            <?php if( isset($familytree['FamilytreePage']['grandma_mom_img']) ){ ?>
              <img class="familytreeBackBack" id="grandma_mom-back" src="http://operacionxperia.com/momtomom/memorias_embarazo/img/cover_photos/<?php echo str_replace(' ','%20',$familytree['FamilytreePage']['grandma_mom_img']); ?>" >
            <?php } else { ?>
              <img class="familytreeBackBack" id="grandma_mom-back" src="http://operacionxperia.com/momtomom/memorias_embarazo/img/<?php echo $elpath;?>marco_circular_back.png" >
            <?php } ?>            

            <span class="spanfila1" id="cuart">
              <?php  echo $grandma_mom; ?>
            </span>
            
          </div>


          <div class="familytree">
            <img class="familytreeFile marco-circular" id="dad" src="http://operacionxperia.com/momtomom/memorias_embarazo/img/marco_circular.png">

            <?php if( isset($familytree['FamilytreePage']['dad_img']) ){ ?>
              <img class="familytreeBackBack" id="dad-back" src="http://operacionxperia.com/momtomom/memorias_embarazo/img/cover_photos/<?php echo str_replace(' ','%20',$familytree['FamilytreePage']['dad_img']); ?>" >
            <?php } else { ?>
              <img class="familytreeBackBack" id="dad-back" src="http://operacionxperia.com/momtomom/memorias_embarazo/img/<?php echo $elpath;?>marco_circular_back.png" >
            <?php } ?>            

            <span class="spanfila2" id="first2">
              <?php  echo $dad; ?>
            </span>
            
          </div>


          <div class="familytree">
            <img class="familytreeFile marco-circular" id="mom" src="http://operacionxperia.com/momtomom/memorias_embarazo/img/marco_circular.png">

            <?php if( isset($familytree['FamilytreePage']['mom_img']) ){ ?>
              <img class="familytreeBackBack" id="mom-back" src="http://operacionxperia.com/momtomom/memorias_embarazo/img/cover_photos/<?php echo str_replace(' ','%20',$familytree['FamilytreePage']['mom_img']); ?>" >
            <?php } else { ?>
              <img class="familytreeBackBack" id="mom-back" src="http://operacionxperia.com/momtomom/memorias_embarazo/img/<?php echo $elpath;?>marco_circular_back.png" >
            <?php } ?>            

            <span class="spanfila2" id="sec2">
              <?php  echo $mom; ?>
            </span>
            
          </div>



          <div class="familytree">
            <img class="familytreeFile marco-circular" id="baby" src="http://operacionxperia.com/momtomom/memorias_embarazo/img/marco_circular.png">

            <?php if( isset($familytree['FamilytreePage']['baby_img']) ){ ?>
              <img class="familytreeBackBack" id="baby-back" src="http://operacionxperia.com/momtomom/memorias_embarazo/img/cover_photos/<?php echo str_replace(' ','%20',$familytree['FamilytreePage']['baby_img']); ?>" >
            <?php } else { ?>
              <img class="familytreeBackBack" id="baby-back" src="http://operacionxperia.com/momtomom/memorias_embarazo/img/<?php echo $elpath;?>marco_circular_back.png" >
            <?php } ?>            

            <span class="spanfila3" id="first3">
              <?php  echo $baby; ?>
            </span>
            
          </div>



      </div>
    </div>

     <img class="print-footer" src="http://operacionxperia.com/momtomom/memorias_embarazo/img/footer.png" width="100%" height="205">

  </div>

