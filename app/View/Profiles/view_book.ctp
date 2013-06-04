
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js" type="text/javascript"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.10.1/jquery-ui.min.js" type="text/javascript"></script>
<?php echo $this->Html->script('jquery.easing.1.3'); ?>
<?php echo $this->Html->script('jquery.booklet.latest.min'); ?>
<?php echo $this->Html->css('jquery.booklet.latest');  ?>

<SCRIPT TYPE="text/javascript">
$(document).ready(function() {
  // Handler for .ready() called.
  $('#mybook').booklet({
        width:  500,
        height: 300
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

booklet{
  background-color: #000;
}

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
    PORTADA
    </div>
  </div>
<!-- PAGINA 1 -->
<div class="b-page b-page-1 b-p2">
  <div class="b-wrap b-wrap-right">
     PADSS DASDSADFsafasfsa

    </div>
  </div> 
<!-- PAGINA 2 -->
  <div class="b-page b-page-2 b-p3">
    <div class="b-page b-page-2 b-p3">
    POPOSDSDS
    </div>
  </div>

</div><!-- FIN DEL LIBRO -->