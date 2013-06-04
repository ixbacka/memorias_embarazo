<!-- index.ctp -->
<!-- view.ctp -->

<style type="text/css">
@charset "utf-8";
/**
 *
 * CSS Tema 1 / Memorias de Embarazo
 *
 * 
 */

/*for the popups */
#backgroundPopup {
  z-index:6000;
  position: fixed;
  display:none;
  height:100%;
  width:100%;
  background: rgba(0, 0, 0, 0.6);
  top:0px;
  left:0px;
}

#toPopup {
    background: transparent;
    display: none;
    left: 50%;
    margin-left: -395px;
    position: fixed;
    top: 10%;
    width: 791px;
    height: 854px;
    z-index: 9000;
}

div.loader {
  background: url("https://operacionxperia.com/momtomom/memorias_embarazo/img/loading.gif") no-repeat scroll 0 0 transparent;
  height: 32px;
  width: 32px;
  display: none;
  z-index: 9999;
  top: 40%;
  left: 50%;
  position: absolute;
  margin-left: -10px;
}
div.close {
    background: url("https://operacionxperia.com/momtomom/memorias_embarazo/img/closebox.png") no-repeat scroll 0 0 transparent;
    bottom: 24px;
    cursor: pointer;
    float: right;
    height: 30px;
    left: 27px;
    position: relative;
    width: 30px;
}
span.ecs_tooltip {
    background: none repeat scroll 0 0 #000000;
    border-radius: 2px 2px 2px 2px;
    color: #FFFFFF;
    display: none;
    font-size: 11px;
    height: 16px;
    opacity: 0.7;
    padding: 4px 3px 2px 5px;
    position: absolute;
    right: -62px;
    text-align: center;
    top: -51px;
    width: 93px;
}
span.arrow {
    border-left: 5px solid transparent;
    border-right: 5px solid transparent;
    border-top: 7px solid #000000;
    display: block;
    height: 1px;
    left: 40px;
    position: relative;
    top: 3px;
    width: 1px;
}

#popup_instructions{
  background-image: url(https://operacionxperia.com/momtomom/memorias_embarazo/img/pop_instrucciones.png);
  text-indent: -9999px;
  width: 791px;
  height: 854px;
}

#settings_popup{
  background: transparent;
  display: none;
  left: 333px;
  position: fixed;
  top: 83px;
  width: 429px;
  height: 404px;
  z-index: 9000;
}

#popup_settings{
  background-image: url(https://operacionxperia.com/momtomom/memorias_embarazo/img/pop_menu.png);
  text-indent: -9999px;
  width: 429px;
  height: 404px;
}

.personalizar:before {
  content: '';
  background-image: url(https://operacionxperia.com/momtomom/memorias_embarazo/img/personalizar.png);
position: absolute;
top: 0px;
width: 50px;
height: 40px;
left: 5px;
}

.personalizar:hover, 
.vermemorias:hover,
.compartir:hover {
  color: #147cc1;
}

.personalizar:hover:before{
  background-position-y: 41px;
}

.vermemorias:before{
  content: '';
  background-image: url(https://operacionxperia.com/momtomom/memorias_embarazo/img/vermemorias.png);
width: 50px;
height: 28px;
position: absolute;
top: 55px;
left: 5px;
}

.vermemorias:hover:before{
  background-position-y: 28px;
}

.compartir:before{
  content: '';
  background-image: url(https://operacionxperia.com/momtomom/memorias_embarazo/img/compartir.png);
  width: 40px;
height: 35px;
position: absolute;
top: 98px;
left: 11px;
}

.compartir:hover:before{
  background-position-y: 35px;
}

.ul_settings{
position: fixed;
top: 224px;
color: #aeaeae;
font-size: 20px;
line-height: 45px;
list-style: none;
left: 395px;
}

#personalizar_popup{
  background: transparent;
  display: none;
  left: 110px;
  position: fixed;
  top: 100px;
  width: 544px;
  height: 504px;
  z-index: 9000;
  background-image: url(https://operacionxperia.com/momtomom/memorias_embarazo/img/pop_personalizar.png);
}

.lostemas{
 position: fixed;
top: 200px;
left: 127px;
width: 435px;
height: 340px;
}

.tema1{
  float: left;
  background: url(https://operacionxperia.com/momtomom/memorias_embarazo/img/tema1.png);
  width: 165px;
height: 135px;
  text-indent: -9999px;
  padding-left: 15px;
  padding-bottom: 15px;
}

.tema2{
  float: left;
  background: url(https://operacionxperia.com/momtomom/memorias_embarazo/img/tema2.png);
  padding-left: 15px;
  width: 165px;
height: 135px;
  text-indent: -9999px;
  padding-bottom: 15px;
}

.tema3{
  float: left;
  background: url(https://operacionxperia.com/momtomom/memorias_embarazo/img/tema3.png);
 width: 165px;
height: 135px;
    padding-left: 15px;

  text-indent: -9999px;
  padding-bottom: 15px;
}

.tema4{
  float: left;
  background: url(https://operacionxperia.com/momtomom/memorias_embarazo/img/tema4.png);
  width: 165px;
height: 135px;
  text-indent: -9999px;
  padding-left: 15px;
  padding-bottom: 15px;
}


.tema1:hover,
.tema2:hover,
.tema3:hover,
.tema4:hover {
  background-position-y: -153px;
}


/****************************************************************************8/

* {
  margin:0;
  padding:0;
  -webkit-font-smoothing: antialiased;
}

/** General Style Info **/

html{
  width: 810px;
}

/* clearfix */

.cf:before, .cf:after {
  content: "\0020";
  display: block;
  height: 0;
  overflow: hidden;
}

.cf:after {
  clear: both;
}

.cf {
  zoom: 1;
}

a {
  color: #003d4c;
  text-decoration: underline;
  font-weight: bold;
}
a:hover {
  color: #367889;
  text-decoration:none;
}
a img {
  border:none;
}

h1 {
  background:#fff;
  color: #003d4c;
  font-size: 100%;
}
h2 {
  background:#fff;
  color: #e32;
  font-size: 190%;
}
h3 {
  color: #2c6877;
  font-size: 165%;
}
h4 {
  color: #993;
  font-weight: normal;
}
ul, li {
  margin: 0 12px;
}


/* DEFAULTS */
/** Layout **/
.menu{
  width: 129px;
  height: 20px;
  position: absolute;
  top: 30px;
  right: 10px;
}

.ask{
  height: 20px;
  width: 23px;
  background-repeat: no-repeat;
  text-indent: -9999px;
  float: left;
  margin: 0;
  background-image: url(https://operacionxperia.com/momtomom/memorias_embarazo/img/ayuda.png);
}

.ask:hover{
  background-position-y: -21px;
}

.settings{
  height: 20px;
  width: 23px;
  background-repeat: no-repeat;
  text-indent: -9999px;
  float: left;
  margin: 0px 15px;
  background-image: url(https://operacionxperia.com/momtomom/memorias_embarazo/img/ajustes.png);

}

.settings:hover{
  background-position-y: -22px;
}

.home{
  height: 20px;
  width: 23px;
  background-repeat: no-repeat;
  text-indent: -9999px;
  float: left;
  margin: 0;
  background-image: url(https://operacionxperia.com/momtomom/memorias_embarazo/img/home.png);
}

.home:hover{
  background-position-y: -20px;
}

#container {
  text-align: left;
}

#header{
/*  padding: 10px 20px;*/
}
#header h1 {
  line-height:20px;
  background: #003d4c url('https://operacionxperia.com/momtomom/memorias_embarazo/img/cake.icon.png') no-repeat left;
  color: #fff;
  padding: 0px 30px;
}
#header h1 a {
  color: #fff;
  background: #003d4c;
  font-weight: normal;
  text-decoration: none;
}
#header h1 a:hover {
  color: #fff;
  background: #003d4c;
  text-decoration: underline;
}
#content{
  background: #fff;
  clear: both;
  color: #333;
  padding: 10px 20px 40px 20px;
  overflow: auto;
}
#footer {
  clear: both;
  padding: 6px 10px;
  text-align: right;
}


body {
  width: 810px;
  height: 1150px;
  background-image: url(https://operacionxperia.com/momtomom/memorias_embarazo/img/back.png);
  color: #fff;
  font-family:'Open Sans', helvetica, arial, sans-serif;
  font-size: 14px;
  margin: 0;
  overflow: hidden;
  position: relative;
  -webkit-font-smoothing: antialiased;
}


.header{
  position: fixed;
  top: 0;
  left: 0;
  width: 810px;
  height: 190px;
  background-image: url(https://operacionxperia.com/momtomom/memorias_embarazo/img/nube1.png), url(https://operacionxperia.com/momtomom/memorias_embarazo/img/titulo1.png), url(https://operacionxperia.com/momtomom/memorias_embarazo/img/titulo2.png), url(https://operacionxperia.com/momtomom/memorias_embarazo/img/nube2.png), url(https://operacionxperia.com/momtomom/memorias_embarazo/img/nube3.png);
  background-position: 0px -87px, center -46px, center 82px, 0px -102px, 0px -500px;
  background-repeat: no-repeat;
  z-index: 1000;
}

.menu{
  position: absolute;
  top: 95px;
  right: -12px;
}

.content{
  position: absolute;
  top: 190px;
  left: 0px;
}

.photo-up, .photo-v {
  width: 280px;
  height: 215px;
  position: absolute;
  background-image: url(https://operacionxperia.com/momtomom/memorias_embarazo/img/marco.png), url(https://operacionxperia.com/momtomom/memorias_embarazo/img/marco_fondo.png);
  background-position: top left, center center;
  text-indent: -9999px;
  background-repeat: no-repeat;
  background-size: 280px 215px;
}

.photo-v {
  width: 260px;
  height: 300px;
  background-size: 260px 300px;
}

.photo-v .pick_fb {
    top: 170px;
    left: 70px;
}

.cover_photo{
  width: 392px;
  height: 297px;
  position: absolute;
  left: 209px;
  background-image: url(https://operacionxperia.com/momtomom/memorias_embarazo/img/marco.png), url(https://operacionxperia.com/momtomom/memorias_embarazo/img/marco_fondo.png);
  background-position: top left, center center;
  text-indent: -9999px;
  background-repeat: no-repeat;
}

.pick_fb{
  background-image: url(https://operacionxperia.com/momtomom/memorias_embarazo/img/bt_elegir.png);
  width: 107px;
  height: 20px;
  position: relative;
  top: 139px;
  left: 62px;
}

.upload_bt{
  background-image: url(https://operacionxperia.com/momtomom/memorias_embarazo/img/bt_subir_foto.png);
  width: 107px;
  height: 20px;
  position: absolute;
  top: 156px;
  left: 200px;
  text-indent: -9999px;
  color: transparent;
}

.photo-up .upload_bt {
  top: 140px;
  left: 80px;
}

.photo-v .upload_bt {
  top: 200px;
  left: 70px;
}

.photo-up .pick_fb {
  left: 80px;
  top: 109px;
}

p.whatdo{
  background-image: url(https://operacionxperia.com/momtomom/memorias_embarazo/img/que-quieres-hacer.png);
  width: 285px;
  height: 34px;
  position: absolute;
  left: 262px;
  text-indent: -9999px;
  top: 300px;
}

.cover_menu{
  width: 600px;
  position: absolute;
  left: 105px;
  top: 350px;
}

.write_bt{
  float: left;
  background-image: url(https://operacionxperia.com/momtomom/memorias_embarazo/img/bt_escribir_up.png);
  width: 188px;
  height: 123px;
  text-indent: -9999px;
}

.write_bt:hover{
  background-image: url(https://operacionxperia.com/momtomom/memorias_embarazo/img/bt_escribir.png);
}


.share_bt{
  float: left;
  background-image: url(https://operacionxperia.com/momtomom/memorias_embarazo/img/bt_compartir_up.png);
  width: 188px;
  height: 130px;
  text-indent: -9999px;
}

.share_bt:hover{
  background-image: url(https://operacionxperia.com/momtomom/memorias_embarazo/img/bt_compartir.png);
}


.watch_bt{
  float: left;
  background-image: url(https://operacionxperia.com/momtomom/memorias_embarazo/img/bt_ver_up.png);
  width: 188px;
  height: 123px;
  text-indent: -9999px;
}

.watch_bt:hover{
  background-image: url(https://operacionxperia.com/momtomom/memorias_embarazo/img/bt_ver.png);
}

.instructions_bt{
  position: absolute;
  left: 287px;
  width: 236px;
  height: 76px;
  background-image: url(https://operacionxperia.com/momtomom/memorias_embarazo/img/bt_instrucciones_up.png);
  top: 520px;
  text-indent: -9999px;
  cursor: pointer;
}

.instructions_bt:hover{
  background-image: url(https://operacionxperia.com/momtomom/memorias_embarazo/img/bt_instrucciones.png);
  cursor: pointer;
}

.footer{
  position: absolute;
  bottom: 0;
  left: 0;
  width: 810px;
  height: 200px;
  background-image: url(https://operacionxperia.com/momtomom/memorias_embarazo/img/nube5.png), url(https://operacionxperia.com/momtomom/memorias_embarazo/img/nube4.png);
  background-position: 0px 4px, 0px 6px;
  background-repeat: no-repeat;
}


.welcome .footer  {
  background: none;
  display: none;
}

.footer_mtm{
  background-image: url(https://operacionxperia.com/momtomom/memorias_embarazo/img/footer_logo.png);
  width: 114px;
  height: 29px;
  text-indent: -9999px;
  position: relative;
  top: 157px;
  left: 42px;
}

.footer_link{
  background-image: url(https://operacionxperia.com/momtomom/memorias_embarazo/img/footer_site.png);
  width: 113px;
  height: 14px;
  text-indent: -9999px;
  position: absolute;
  top: 170px;
  right: 170px;
}

.footer_twitter{
  background-image: url(https://operacionxperia.com/momtomom/memorias_embarazo/img/footer_twitter.png);
  width: 100px;
  height: 18px;
  text-indent: -9999px;
  position: absolute;
  top: 170px;
  right: 20px;
}

/* trimestres menu */

.menu_trims{
  width: 810px;
  height: 30px;
  position: absolute;
  top: -30px;
  z-index: 1001;
}

.first_trim{
  background-image: url(https://operacionxperia.com/momtomom/memorias_embarazo/img/bt_primer.png);
  width: 165px;
  height: 30px;
  text-indent: -9999px;
  position: absolute;
  top: 0;
  left: 60px;
}

.first_trim:hover{
  background-image: url(https://operacionxperia.com/momtomom/memorias_embarazo/img/bt_primer_up.png);
}

.first_trim_current{  
  background-image: url(https://operacionxperia.com/momtomom/memorias_embarazo/img/bt_primer_up.png);
  width: 168px;
  height: 30px;
  text-indent: -9999px;
  position: absolute;
  top: 0;
  left: 60px;
  padding-bottom: 5px;
  padding-right: 10px;
  border-bottom: 2px solid #fff;
}

.second_trim{
  background-image: url(https://operacionxperia.com/momtomom/memorias_embarazo/img/bt_segundo.png);
  width: 177px;
  height: 30px;
  text-indent: -9999px;
  position: absolute;
  top: 0;
  left: 300px;

}

.second_trim:hover{
  background-image: url(https://operacionxperia.com/momtomom/memorias_embarazo/img/bt_segundo_up.png);
}


.second_trim_current{  
  background-image: url(https://operacionxperia.com/momtomom/memorias_embarazo/img/bt_segundo_up.png);
  width: 177px;
  height: 30px;
  text-indent: -9999px;
  position: absolute;
  top: 0;
  left: 300px;
  padding-bottom: 5px;
  padding-right: 10px;
  border-bottom: 2px solid #fff;
}

.third_trim{
  background-image: url(https://operacionxperia.com/momtomom/memorias_embarazo/img/bt_tercer.png);
  width: 165px;
  height: 30px;
  text-indent: -9999px;
  position: absolute;
top: 0;
left: 547px;

}

.third_trim:hover{
  background-image: url(https://operacionxperia.com/momtomom/memorias_embarazo/img/bt_tercer_up.png);
}


.third_trim_current{  
  background-image: url(https://operacionxperia.com/momtomom/memorias_embarazo/img/bt_tercer_up.png);
  width: 165px;
  height: 30px;
  text-indent: -9999px;
  position: absolute;
  top: 0;
  left: 547px;
  padding-bottom: 5px;
  padding-right: 10px;
  border-bottom: 2px solid #fff;
}


/** menu vertical ;S **/

ul.vertical_menu_1{
  width: 700px;
  -webkit-transform: rotate(-270deg);
  -moz-transform: rotate(-270deg);
  -ms-transform: rotate(-270deg);
  -o-transform: rotate(-270deg);
  filter: progid:DXImageTransform.Microsoft.BasicImage(rotation=3);
  position: fixed;
  top: 593px;
  z-index: 1000;
  margin: 0;
  list-style: none;
  right: -340px;
}

ul.vertical_menu_1 li{
  color: #197490;
  float: left;
  border-right: 1px solid #fff;
  border-bottom: 1px solid #fff;
  padding: 20px 7px;
  margin: 0;
}

ul.vertical_menu_1 li.selected{
  color: #fff;
}

ul.vertical_menu_1 li{
  color: #fff;
}

ul.vertical_menu_1 li a{
  text-decoration: none;
  color: #197490;
}

.add_moment{
  background-image: url(https://operacionxperia.com/momtomom/memorias_embarazo/img/bt_agregar.png);
  text-indent: -9999px;
  width: 42px;
  height: 42px;
  position: absolute;
  top: 992px;
  left: 758px;
  z-index: 9999;
}


/** ARBOL GENEALOGICO **/

form#familytreePageAddForm{
  position: absolute;
  top: 100px;
  left: 0px;
  width: 810px;
  text-align: center;

}


.congratsPages{
  position: absolute;
  top: 150px;
}

.familytreeFile{
  width: 172px;
  height: 171px;
  left: 10px;
  background-image: url(https://operacionxperia.com/momtomom/memorias_embarazo/img/marco_circular.png), url(https://operacionxperia.com/momtomom/memorias_embarazo/img/marco_circular_back.png);
  background-position: center center, center center;
  text-indent: -9999px;
  background-repeat: no-repeat;  
  float: left;
}

.familytreeFile{
  width: 172px;
  height: 171px;
  left: 10px;
  margin-top: 30px;
  background-image: url(https://operacionxperia.com/momtomom/memorias_embarazo/img/marco_circular.png), url(https://operacionxperia.com/momtomom/memorias_embarazo/img/marco_circular_back.png);
  background-position: center center, center center;
  text-indent: -9999px;
  background-repeat: no-repeat;  
  float: left;
  display: inline-block;
}

#grandpa_dad{
  margin-left: 20px;
}

#grandma_dad{
  margin-left: 40px;  
}

#dad{
  margin-left: 190px;
}

#mom{
  margin-left: 40px;
}

#baby{
  margin-left: 300px;
}

.familytreeFile div.pick_fb{
  background-image: url(https://operacionxperia.com/momtomom/memorias_embarazo/img/bt_elegir.png);
  width: 107px;
  height: 20px;
  top: 55px;
  left: 29px;
}
/*fixed*/

div.index, div.view {
  float: left;
  display: inline-block;
  width: 810px;
  border:none;
  padding: 0;
}

.familytreePages form{
  margin-top: 130px;
}

.form {
  width: 650px;
  border: none;
  padding: 0 50px;
}

.form form {
  width: 710px;
  height: 680px;
}

/* page_title - second header like */

.page_title{
  width: 810px;
  height: 100px;
  position: absolute;
  top: 30px;
}

.ant{
  background-image: url(https://operacionxperia.com/momtomom/memorias_embarazo/img/anterior.png);
  text-indent: -9999px;
  width: 143px;
  height: 40px;
  float: left;
}

.sig{
  background-image: url(https://operacionxperia.com/momtomom/memorias_embarazo/img/siguiente.png);
  text-indent: -9999px;
  width: 140px;
  height: 40px;
  float: right;
}

.title_page{
  background-image: url(https://operacionxperia.com/momtomom/memorias_embarazo/img/titulo_back.png);
  text-align: center;
  padding-top: 40px;
  font-size: 30px;
  width: 283px;
  height: 70px;
  float: left;
  text-transform: uppercase;
  margin-left: 120px;
  margin-top: -20px;
  padding-right: 20px;
  background-repeat: no-repeat;
}


.title_page p{
  margin-top: -10px;
  color: #fff;
}

.title_page span{
  font-size: 15px;
  position: absolute;
  top: 45px;
  left: 265px;
  width: 278px;
}

/* FORM STYLE */


.form {
  border: none;
  padding: 0 35px;
  position: absolute;
  top: 140px;
  height: 680px;
  width: 690px;
}


label{
  color: #fff;
  float: left;
}

#datepickerCongrats:after{
  content: "día   mes   año";

}

#last_input{
  color: #269ccc;
  text-align: center;
}

.aux_text{
  color: #269ccc;
  position: absolute;
  top: 780px;
  left: 500px;
  width: 220px;
  text-align: center;
}

.submit {
  position: absolute;
  bottom: 60px;
  left: 50px;
}
.whoami_left{
  float: left;
  width: 300px;
  height: 500px;
}

.whoami_photo{
  background-image: url(https://operacionxperia.com/momtomom/memorias_embarazo/img/marco_whoami.png);
  background-position: center center;
  width: 297px;
  height: 392px;
  background-repeat: no-repeat;
}

.whoami_right{
  float: left;
  width: 315px;
  height: 500px;
  padding-top: 25px;
}

p.middle_note{
  color: #269ccc;
  font-size: 20px;
  text-align: center;
  width: 700px;
  position: absolute;
  top: 120px;
  left: 19px;
}


.sintomPages{
  top: 200px;
  position: absolute;
}

.sintom_left{
  width: 350px;
  float: left;
}

.sintom_inputs{
  width: 300px;
height: 80px;
}

#cravings_{
position: absolute;
top: 130px;
left: 105px;
}


.sintom_rite{
  width: 250px;
  float: left;
  padding-left: 30px;
}

.sintom_rite label{
  width: 257px;
  text-align: center;
}

#gross_{
  position: absolute;
  top: 230px;
  left: 105px;
}
#gross{
  position: absolute;
top: 235px;
}

#button_sintom {
position: absolute;
top: 250px;
left: 500px;
}

.note_sintom_{
  position: absolute;
width: 750px;
  color: #269ccc;
font-size: 20px;
top: 560px;
text-align: center;
}

/* ULTRASONIDO */

.ultra {
  height: 215px;
  margin-bottom: 40px;
}

.ultra .hasDatepicker {
  width: 268px;
}
.ultra .info {
  width: 320px;
  position: absolute;
  left: 334px;
}

.ultra .info h3 {
  font: 23px 'Open Sans';
  color: #269CCC;
  margin: 0 0 12px;
}

.ultra .info label {
  display: inline;
  line-height: 25px;
}

.ultra .info p {
  display: inline-block;
  float: none;
  padding-bottom: 12px;
  line-height: 26px;
  margin: 0 0 10px;
}

.info input {
  display: inline-block;
}

/* BELLY PAGES */

.mesuno {
    position: absolute;
    left: 81px;
}
.mesdos {
    position: absolute;
    left: 457px;
}
.mestres {
    position: absolute;
    top: 310px;
    left: 270px;
}

.mesuno>p, .mesdos>p, .mestres>p {
  position: absolute;
  top: 215px;
  text-align: center;
  width: 262px;
  color: #1082AC;
  font-size: 20px;
}

/* ANIMO */

#AnimoPageAddForm h3 {
  float: left;
  margin: 0 0 0 73px;
  color: #1392C2;
  font-size: 22px;
}

#AnimoPageAddForm p {
  float: none;
  color: #1392C2;
}

#AnimoPageAddForm h4 {
  color: #FFF;
}

#AnimoPageAddForm input[type=radio] {
  margin: 0 0 20px 0;
}

.mi-humor, .mi-humor, .mi-energia, .mi-fisico, .mi-otros {
  font-size: 16px;
}

.col2 {
  margin-left: 33px;
}

.col1, .col2, .col3, .col4 {
  float: left;
}

.mi-fisico .col1, .mi-fisico .col2, .mi-fisico .col3, .mi-fisico .col4 {
  margin-bottom: 0;
}

.mi-otros .col2, .mi-otros .col3, .mi-otros .col4 {
  margin: 12px 20px 0 17px;
  width: 97px;
}

.mi-otros .col2 input, .mi-otros .col3 input, .mi-otros .col4 input {
    width: 90px;
}

.col2, .col3, .col4 {
  width: 20px;
  margin: 63px 58px 0 57px;
}

.col1 {
  width: 300px;
}

.meses {
  margin-left: 252px;
}

/* IlovemybabyPageAddForm */


#IlovemybabyPageAddForm p {
  float: none;
  margin-bottom: 60px;
  color: #fff;
}

.fecha {
  width: 160px;
}

#IlovemybabyPageAddForm .opcion {
    display: block;
    width: 230px;
    height: 80px;
    float: left;
    margin-bottom: 40px;
}

#IlovemybabyPageAddForm .opcion input {
    margin-left: 110px;
}

#IlovemybabyPageAddForm .opcion label {
    width: 100%;
    text-align: center;
}

#senti {
  width: 460px;
}

/* #ChildsexPageAdd */

.bebes {
  display: block;
  background: url(https://operacionxperia.com/momtomom/memorias_embarazo/img/bebesotes.png);
  width: 589px;
  height: 348px;
  position: absolute;
  top: 160px;
  left: 120px;
  text-indent: -10000px;
}

.todomundo {
  width: 276px;
  position: absolute;
  left: 263px;
  top: 210px;
  text-align: center;
}
.todomundo label,
.personalmente label {
  margin: 0;
  padding: 0;
  text-align: center;
  width: 100px;
  top: 30px;
  position: relative;
}

.todomundo p,
.personalmente p {
  float: none;
  color: #fff;
}

.todomundo input[type="radio"],
.personalmente input[type="radio"] {
  position: absolute;
  top: 0;
  left: 42px;
}

.personalmente .opcion1,
.personalmente .opcion2,
.personalmente .opcion3,
.todomundo .opcion1,
.todomundo .opcion2,
.todomundo .opcion3 {
  position: relative;
  width: 90px;
  height: 60px;
  float: left;
}

.personalmente {
  position: absolute;
  top: 310px;
  left: 263px;
  width: 276px;
  text-align: center;
}

.decidimos {
  position: absolute;
  top: 430px;
}

.decidimos p {
  margin: 20px 0;
  color: #fff;
}

.decidimos input[type=radio],
.decidimos label {
  float: none;
  display: inline-block;
}

.decidimos .decid {
  width: 350px;
}

.decidimos .nick {
  width: 140px;
}


/* #FirstkickPageAddForm */


#datepickerCongrats {
  width: 140px;
}

/* #FirstkickPageAddForm */

#FirstkickPageAddForm p {
  float: none;
  margin: 0 0 30px 0;
  color: #fff;
}

#FirstkickPageAddForm .hasDatepicker {
  width: 120px;
}

#FirstkickPageAddForm .colL {
    float: left;
    width: 280px;
}

#FirstkickPageAddForm .colL .hasDatepicker {
    margin-top: 300px;
    margin-left: 60px;
}

#FirstkickPageAddForm .colR {
    float: left;
    width: 400px;
}

#FirstkickPageAddForm  .opcion {
  display: block;
  width: 187px;
  float: left;
  margin: 31px 12px 0;
}

#FirstkickPageAddForm .opcion label {
  line-height: 22px;
  margin-left: 6px;
  padding: 0;
}

#FirstkickPageAddForm .opcion.nino,
#FirstkickPageAddForm .opcion.nina {
  width: 65px;
}

.gran label {
  width: 100%;
}

.antojos {
  margin-top: 40px;
}


.antojos label {
  height: 50px;
  width: 50px;
}

/* bellymonthPages */


.bellymonthPages .colL,
.bellymonthPages .colR {
  float: left;
}

.bellymonthPages .colR {
  width: 410px;
}

.bellymonthPages .colL {
  width: 270px;
}

#BellymonthPageAddForm .colR p {
 margin: 0 0 5px;
 color: #fff;
 width: 100%;
}

#BellymonthPageAddForm .peso label,
#BellymonthPageAddForm .medida label {
  display: inline-block;
}

#BellymonthPageAddForm .peso input {
  width: 296px;
}

#BellymonthPageAddForm .medida input {
  width: 214px;
}

#BellymonthPageAddForm .hungry label,
#BellymonthPageAddForm .miss label,
#BellymonthPageAddForm .comfy label {
  line-height: 28px;
  margin-left: 10px;
}

#BellymonthPageAddForm .hungry {
  position: absolute;
  top: 120px;
}

#BellymonthPageAddForm .comfy {
  position: absolute;
  top: 430px;
}

#BellymonthPageAddForm .miss {
  position: absolute;
  top: 250px;
}

#BellymonthPageAddForm .cerca {
  position: absolute;
  bottom: 0;
  text-align: center;
  color: #0f7491;
}

/* GettingclosePageAddForm */


.miedo {
  font-size: 20px;
  text-align: center;
  width: 100%;
  color: #0f7491;
}

.sorry input {
  width: 325px;
}

.sorry {
  line-height: 25px;
}


#GettingclosePageAddForm .col.uno {
  width: 297px;
  margin: 0;
}


#GettingclosePageAddForm .col {
  float: left;
  margin-left: 31px;
}


#GettingclosePageAddForm .col.dos {
  width: 78px;
  text-align: center;
}


#GettingclosePageAddForm .col.dos input {
  margin: 6px 32px 7px;
}


#GettingclosePageAddForm .col.dos p {
  margin-bottom: 24px;
}


#GettingclosePageAddForm .col.tres {
  width: 242px;
}

.suegros {
  margin: 30px 0;
}


/* #BabyshowerPageAddForm */

#BabyshowerPageAddForm .col.uno {
  width: 297px;
  margin: 0;
}


#BabyshowerPageAddForm .col {
  float: left;
  margin-left: 31px;
}


#BabyshowerPageAddForm .col.dos {
  width: 78px;
  text-align: center;
}


#BabyshowerPageAddForm .col.dos input {
  margin: 6px 32px 7px;
}


#BabyshowerPageAddForm .col.dos p {
  margin-bottom: 24px;
}


#BabyshowerPageAddForm .col.tres {
  width: 242px;
}

.mibaby {
  width: 100%;
}

.mibaby #datepickerCongrats {
  width: 205px;
}

#BabyshowerPageAddForm .col.uno {
  width: 220px;
}


#BabyshowerPageAddForm .col.dos {
  width: 138px;
}

#BabyshowerPageAddForm .col.tres {
  width: 283px;
}

#BabyshowerPageAddForm .col.dos p {
  margin-top: 0;
  margin-bottom: 42px;
}

#BabyshowerPageAddForm .col.dos input {
  margin: 0 63px 36px;
}

#BabyshowerPageAddForm .col {
  margin-left: 19px;
}

#BabyshowerPageAddForm .photo-up {
  top: 290px;
}

#BabyshowerPageAddForm .photo-up.dos {
  right: 0;
}


/* Coolultrasound */

#CoolultrasoundPageAddForm .bloque {
  display: block;
  width: 320px;
  position: absolute;
}

#CoolultrasoundPageAddForm .bloque.uno {
  left: 410px;
}

#CoolultrasoundPageAddForm .bloque.dos {
  top: 280px;
}

#CoolultrasoundPageAddForm .bloque.tres {
  top: 280px;
  left: 410px;
  width: 370px;
}

#CoolultrasoundPageAddForm .uno h3 {
  color: #379dca;
  font-weight: 400;
  margin: 0;
  margin-bottom: 10px;
}

#CoolultrasoundPageAddForm .bloque p {
  margin: 0;
  margin-bottom: 20px;
  line-height: 30px;
  width: 100%;
}

#CoolultrasoundPageAddForm .opciones label, .opciones input {
  line-height: 27px;
  margin-left: 8px;
}

#CoolultrasoundPageAddForm .otro input {
  width: 286px;
  width: 270px;
}


/* NestingPageAddForm */

#NestingPageAddForm .emociones {
  float: none;
  font-size: 20px; text-align: center; width: 100%; color: #0F7491;
  margin: 0;
}

#NestingPageAddForm .anidar {
  width: 244px;
  height: 170px;
  overflow: hidden;
  background: url(https://operacionxperia.com/momtomom/memorias_embarazo/img/anidar.png) no-repeat center;
  text-indent: -9999px;
  position: absolute;
  left: 100px;
  top: 70px;
}

#NestingPageAddForm .dado {
  width: 300px;
  display: block;
  position: absolute;
  right: 130px;
  top: 80px;
}

#NestingPageAddForm .opciones label {
    line-height: 28px;
}

#NestingPageAddForm .comprar {
  width: 220px;
  position: absolute;
  top: 300px;
  left: 100px;
}

#NestingPageAddForm .comprar input {
  margin: 15px 0;
}

#room_photo {
  top: 350px;
  right: 70px;
}

#NestingPageAddForm .cuarto {
  position: absolute;
  top: 300px;
  right: 220px;
}

/* ByebellyPageAddForm */

#ByebellyPageAddForm p {
  margin: 0 0 20px 0;
  line-height: 28px;
  float: none;
  position: relative;
  display: block;
}
#ByebellyPageAddForm  .horas {
  position: absolute;
  width: 325px;
  right: 0;
  top: 254px;
}

#ByebellyPageAddForm .horas input {
  width: 90px;
}

#ByebellyPageAddForm .opciones p {
  margin: 0;
}

#ByebellyPageAddForm .opciones p {
  margin: 0;
}

#ByebellyPageAddForm .opciones input[type="radio"] {
  margin-right: 13px;
}

#ByebellyPageAddForm .opciones p {
  margin: 0;
}

#ByebellyPageAddForm .opciones p {
  margin: 0;
}

#ByebellyPageAddForm .opciones input[type="radio"] {
  margin-right: 13px;
}

#ByebellyPageAddForm .nota {
  color: #0F7491;
}

#ByebellyPageAddForm .estaba, .exp {
  margin-bottom: 30px;
}

#ByebellyPageAddForm .opciones {
  margin-bottom: 40px;
}

/* #SpecialdeliveryPageAddForm */

#SpecialdeliveryPageAddForm .photo-up {
    left: 120px;
    top: 20px;
}

#SpecialdeliveryPageAddForm p {
    line-height: 27px;
    float: none;
    margin-bottom: 20px;
}
#SpecialdeliveryPageAddForm .eres input {
    width: 385px;
}
#SpecialdeliveryPageAddForm .eres {
    margin-top: 260px;
}

#SpecialdeliveryPageAddForm .bday input {
    width: 134px;
}

#SpecialdeliveryPageAddForm .bplace input {
    width: 140px;
}

#SpecialdeliveryPageAddForm .parto {
    position: absolute;
    right: 0;
    width: 175px;
    top: 359px;
}

#SpecialdeliveryPageAddForm .parto p,
#SpecialdeliveryPageAddForm .parto .opciones {
    float: left;
    margin: 0;
}

#SpecialdeliveryPageAddForm .opciones label {
    line-height: 27px;
    margin-left: 8px;
}

#SpecialdeliveryPageAddForm .pesaste input {
    width: 90px;
}

#SpecialdeliveryPageAddForm .ojos input {
    width: 250px;
}

#SpecialdeliveryPageAddForm .nota-foot {
    color: #269CCC; font-size: 20px;
    width: 100%;
    text-align: center;
    margin-top: 80px;
}

/* #WelcomebbyPageAddForm */

#WelcomebbyPageAddForm .pareces input {
    width: 435px;
}
#WelcomebbyPageAddForm p {
    float: none;
    line-height: 27px;
    margin: 0 0 25px 0;
}
#WelcomebbyPageAddForm .cordon input {
    width: 511px;
}
#WelcomebbyPageAddForm .tevi input {
    width: 463px;
}
#WelcomebbyPageAddForm .brazos input {
    width: 436px;
}
#WelcomebbyPageAddForm .conocer input {
    width: 560px;
}
#WelcomebbyPageAddForm .hospital input {
    width: 120px;
}

/* EpilogPageAddForm  */

#EpilogPageAddForm {
    background: url(https://operacionxperia.com/momtomom/memorias_embarazo/img/epilogo.png) 80px 20px no-repeat;
}

#EpilogPageAddForm p {
    float: none;
}

#EpilogPageAddForm .opciones {
    width: 440px;
    margin: 180px auto 20px;
}

#EpilogPageAddForm .post-parto {
    width: 440px;
    margin: 100px auto;
}


/* NewfamilyPageAddForm  */

#NewfamilyPageAddForm {
    background: url(https://operacionxperia.com/momtomom/memorias_embarazo/img/newfam.png) center 180px no-repeat;
}

#NewfamilyPageAddForm .photo-up {
    position: absolute;
    top: 230px;
    left: 260px;
}


/* ESTADOS */

#bienvenida_texto, .estilos, .welcome .content, .like, .flecha {
  /* Aqui colocamos la transicion para cada navegador */
  -webkit-transition:all 4s ease-out;  /* Chrome y Safari */
  -o-transition:all 4s ease-out;  /* Opera */
  -moz-transition:all 4s ease-out;  /* Mozilla Firefox */
  -ms-transition:all 4s ease-out;   /* Internet Explorer */
  transition:all 4s ease-out;  /* W3C */
}

.zero .content {
  margin-top: 620px;
}
.zero .like {
  opacity: 0.99;
  top: -90px;
}

.zero .flecha {
  opacity: 0.99;
}

/*


body{
	height: 1170px;
}
.footer{
	position: absolute;
	top: 970px;
	left: 0px;
}



*/

@media print
{
	body {page-break-after:always}
}

@page {
            margin-top: 0em;
            margin-left: 0em;
        }


</style>

<!-- LA COVER -->
<body>

<!-- cover.ctp -->
<STYLE TYPE="text/css">
<?php if( isset($cover_pic) ){ ?>

.cover_photo{
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

<div class="cover">
  <div class="header">  
  </div>
  <div class="content">
    <div class="cover_photo">
      <p>Pon una foto de portada aqu&iacute;</p>   
    </div>
  </div>
  <div class="footer">
    <div class="footer_mtm">Mom to mom , Consintiendo mi piel de mam&aacute;</div>
    <a href="http://www.momtomom.com.mx/" class="footer_link" target="_blank">www.momtomom.mx</a>
    <a href="https://twitter.com/momtomommx" class="footer_twitter" target="_blank">@momtomommx</a>
  </div>

</div>




</body>


<!-- PAGINA 1 -->
<body>
   <div class="header">  
    </div>

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
   } else{
      $prueba = '';
    }
?>

<div class="content">

<div class="page_title">
  <div class="title_page"><p>&iexcl;Felicidades!</p><br> <span>La prueba es positiva</span></div>
</div>

  <div class="congratsPages form"> 
  <?php
    if(isset($congrats['CongratsPage']['sospeche'])){
      $sospeche = $congrats['CongratsPage']['sospeche'];
    } else{
      $sospeche = '';
    }
    ?>

      <label>Sospeché que estaba embarazada cuando:</label>
      <?php echo $sospeche; ?>
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
      <label>Me hice una prueba de embarazo el día: </label>
      <span><?php if($prueba != ''){ echo $prueba; } ?></span>

  <?php

  if(isset($congrats['CongratsPage']['firstfeeling'])){
    $firstfeeling = $congrats['CongratsPage']['firstfeeling'];
  } else{
    $firstfeeling = '';
  }
    // echo $this->Form->input('firstfeeling', array('label' => ' ','after' => '</span>','between' => '<span>', 'value' => $firstfeeling));
  ?>
  <label>Lo primero que sentí fue:</label>
      <span><?php if($firstfeeling != ''){ echo $firstfeeling; } ?></span>

      <p>
    <label for="CongratsPageBabycoming">Tenía <?php if( isset($congrats['CongratsPage']['babycoming'])){ echo $congrats['CongratsPage']['babycoming']; } ?>
     semanas de embarazo cuando me enteré que venía el bebé en camino, ahh que emoción!. Compartí la gran noticia con el papá de mi bebé de esta manera: </label>
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

<div class="footer">
        <div class="footer_mtm">Mom to mom , Consintiendo mi piel de mam&aacute;</div>
        <a href="http://www.momtomom.com.mx/" class="footer_link" target="_blank">www.momtomom.mx</a>
        <a href="https://twitter.com/momtomommx" class="footer_twitter" target="_blank">@momtomommx</a>
      </div>
</body> 



<!-- PAGINA 2 -->
<body>

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
    //echo $this->Form->input('weight', array('label' => 'Mi peso actual: ','after' => '</span>','between' => '<span>', 'value' => $weight));
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
</body>