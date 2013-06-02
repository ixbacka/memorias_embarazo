<!-- index.ctp -->
<!-- view.ctp -->

<style type="text/css">
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
  background: url("http://operacionxperia.com/momtomom/memorias_embarazo/img/loading.gif") no-repeat scroll 0 0 transparent;
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
    background: url("http://operacionxperia.com/momtomom/memorias_embarazo/img/closebox.png") no-repeat scroll 0 0 transparent;
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
  background-image: url(http://operacionxperia.com/momtomom/memorias_embarazo/img/pop_instrucciones.png);
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
  background-image: url(http://operacionxperia.com/momtomom/memorias_embarazo/img/pop_menu.png);
  text-indent: -9999px;
  width: 429px;
  height: 404px;
}

.personalizar:before {
  content: '';
  background-image: url(http://operacionxperia.com/momtomom/memorias_embarazo/img/personalizar.png);
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
  background-image: url(http://operacionxperia.com/momtomom/memorias_embarazo/img/vermemorias.png);
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
  background-image: url(http://operacionxperia.com/momtomom/memorias_embarazo/img/compartir.png);
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
  background-image: url(http://operacionxperia.com/momtomom/memorias_embarazo/img/pop_personalizar.png);
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
  background: url(http://operacionxperia.com/momtomom/memorias_embarazo/img/tema1.png);
  width: 165px;
height: 135px;
  text-indent: -9999px;
  padding-left: 15px;
  padding-bottom: 15px;
}

.tema2{
  float: left;
  background: url(http://operacionxperia.com/momtomom/memorias_embarazo/img/tema2.png);
  padding-left: 15px;
  width: 165px;
height: 135px;
  text-indent: -9999px;
  padding-bottom: 15px;
}

.tema3{
  float: left;
  background: url(http://operacionxperia.com/momtomom/memorias_embarazo/img/tema3.png);
 width: 165px;
height: 135px;
    padding-left: 15px;

  text-indent: -9999px;
  padding-bottom: 15px;
}

.tema4{
  float: left;
  background: url(http://operacionxperia.com/momtomom/memorias_embarazo/img/tema4.png);
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

body {
  width: 810px;
  height: 1200px;
  background-image: url(http://operacionxperia.com/momtomom/memorias_embarazo/img/back.png);
  margin: 0;
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



/** - fangate **/
.fangate{
  width: 810px;
}

.fangate .footer {
  top: 670px;
}

.header-fangate{
  position: absolute;
  top: 0;
  left: 0;
  width: 810px;
  height: 560px;
  background-image: url(http://operacionxperia.com/momtomom/memorias_embarazo/img/nube1.png), url(http://operacionxperia.com/momtomom/memorias_embarazo/img/titulo1.png),
  url(http://operacionxperia.com/momtomom/memorias_embarazo/img/titulo2.png), url(http://operacionxperia.com/momtomom/memorias_embarazo/img/nube2.png), url(http://operacionxperia.com/momtomom/memorias_embarazo/img/nube3.png);
  background-position: 0px -87px, center -46px, center 82px, 0px -102px, 0px -500px;
  background-repeat: no-repeat;

  /* Aqui colocamos la transicion para cada navegador */
  -webkit-transition:all 500ms ease-out;  /* Chrome y Safari */
  -o-transition:all 500ms ease-out;  /* Opera */
  -moz-transition:all 4s ease-out;  /* Mozilla Firefox */
  -ms-transition:all 4s ease-out;   /* Internet Explorer */
  transition:all 4s ease-out;  /* W3C */
}

.flecha {
  width: 265px;
  height: 490px;
  background: url(http://operacionxperia.com/momtomom/memorias_embarazo/img/fangate_flecha.png) 0 -20px no-repeat;
  position: absolute;
  right: 0px;
  opacity: 0;
  -webkit-transform: rotate(11deg);
  -moz-transform: rotate(11deg);
  -o-transform: rotate(11deg);
  -ms-transform: rotate(11deg);
  
}

.like{
  font-family: 'Open Sans', sans-serif;
  color: #F5979D;
  text-align: center;
  height: 440px;
  position: relative;
  top:-510px;
  margin: 0 auto;
  background-image: url(http://operacionxperia.com/momtomom/memorias_embarazo/img/nube3.png);
  opacity: 0;
}

.like  h3 {
  color: #F5979D;
  font-size: 48px;
  font-family: 'Open Sans';
  margin-bottom: 30px;
  padding-top: 100px;
}

.like p {
  color: #F5979D;
  font-size: 28px;
  font-family: 'Open Sans';
  width: 235px;
  margin: 0 auto;
}


#flecha_fangate{
  text-indent: -9999px;
  height: 470px;
  width: 232px;
  position: absolute;
  top: 12px;
  left: 540px;
  background-image: url(http://operacionxperia.com/momtomom/memorias_embarazo/img/fangate_flecha.png);
}

.fangate .content,
.welcome .content {
  width: 750px;
  height: 810px;
  background-image: url(http://operacionxperia.com/momtomom/memorias_embarazo/img/nube4.png),url(http://operacionxperia.com/momtomom/memorias_embarazo/img/nube5.png), url(http://operacionxperia.com/momtomom/memorias_embarazo/img/nube4.png);
  background-position: left bottom, 0px 6px, 0px -31px;
  background-repeat: no-repeat;
  padding: 0 35px;
}

.footer-fangate *, .header-fangate * {
  /* Aqui colocamos la transicion para cada navegador */
  -webkit-transition:all 4s ease-out;  /* Chrome y Safari */
  -o-transition:all 4s ease-out;  /* Opera */
  -moz-transition:all 4s ease-out;  /* Mozilla Firefox */
  -ms-transition:all 4s ease-out;   /* Internet Explorer */
  transition:all 4s ease-out;  /* W3C */
  /* Aqui colocamos la transicion para cada navegador */
  -webkit-transition:all 4s ease-out;  /* Chrome y Safari */
  -o-transition:all 4s ease-out;  /* Opera */
  -moz-transition:all 4s ease-out;  /* Mozilla Firefox */
  -ms-transition:all 4s ease-out;   /* Internet Explorer */
  transition:all 4s ease-out;  /* W3C */
}


#bienvenida_texto{
  background-image: url(http://operacionxperia.com/momtomom/memorias_embarazo/img/Bienvenida.png);
  width: 676px;
  height: 309px;
  position: absolute;
  top: 190px;
  left: 60px;
  text-indent: -9999px
;
  /* Aqui colocamos la transicion para cada navegador */
  -webkit-transition:all 4s ease-out;  /* Chrome y Safari */
  -o-transition:all 4s ease-out;  /* Opera *display: none;/
  -moz-transition:all 4s ease-out;  /* Mozilla Firefox */
  -ms-transition:all 4s ease-out;   /* Internet Explorer */
  transition:all 4s ease-out;  /* W3C */
}

.estilos{
  position: absolute;
  top: 623px;
  background: #fff;
}

.estilos p {
  text-align: center;
  font-family: 'Open Sans', sans-serif;
  font-size: 17px;
}

#seleccionar_tema{
  margin-left: 13px;
  background-image: url(http://operacionxperia.com/momtomom/memorias_embarazo/img/selecciona_tema.png);
  width: 707px;
  height: 20px;
  text-indent: -9999px;
}

.temas{
  opacity: 1;
  margin-top: 10px;
}

#tema1{
  float: left;
  background: url(http://operacionxperia.com/momtomom/memorias_embarazo/img/tema1.png);
  width: 181px;
  height: 149px;
  text-indent: -9999px;
}


#tema2{
  float: left;
  margin-left: 10px;
  background: url(http://operacionxperia.com/momtomom/memorias_embarazo/img/tema2.png);
  width: 181px;
  height: 149px;
  text-indent: -9999px;
}


#tema3{
  float: left;
    margin-left: 10px;

  background: url(http://operacionxperia.com/momtomom/memorias_embarazo/img/tema3.png);
  width: 181px;
  height: 149px;
  text-indent: -9999px;
}

#tema4{
  float: left;
  margin-left: 10px;
  background: url(http://operacionxperia.com/momtomom/memorias_embarazo/img/tema4.png);
  width: 181px;
  height: 149px;
  text-indent: -9999px;
}

#tema1:hover,
#tema2:hover,
#tema3:hover,
#tema4:hover {
  background-position-y: -153px;
}

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
  background-image: url(http://operacionxperia.com/momtomom/memorias_embarazo/img/ayuda.png);
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
  background-image: url(http://operacionxperia.com/momtomom/memorias_embarazo/ajustes.png);

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
  background-image: url(http://operacionxperia.com/momtomom/memorias_embarazo/img/home.png);
}

.home:hover{
  background-position-y: -20px;
}

#container {
  text-align: left;
}

#header{
  padding: 10px 20px;
}
#header h1 {
  line-height:20px;
  background: #003d4c url('../img/cake.icon.png') no-repeat left;
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

/** containers **/
div.form,
div.index,
div.view {
  /*float:right;
  width:76%;
  border-left:1px solid #666;
  padding:10px 2%;*/
  width: 76%;
}
div.actions {
  float:left;
  width:16%;
  padding:10px 1.5%;
}
div.actions h3 {
  padding-top:0;
  color:#777;
}


/** Tables **/
table {
  border-right:0;
  clear: both;
  color: #333;
  margin-bottom: 10px;
  width: 100%;
}
th {
  border:0;
  border-bottom:2px solid #555;
  text-align: left;
  padding:4px;
}
th a {
  display: block;
  padding: 2px 4px;
  text-decoration: none;
}
th a.asc:after {
  content: ' ⇣';
}
th a.desc:after {
  content: ' ⇡';
}
table tr td {
  padding: 6px;
  text-align: left;
  vertical-align: top;
  border-bottom:1px solid #ddd;
}
table tr:nth-child(even) {
  background: #f9f9f9;
}
td.actions {
  text-align: center;
  white-space: nowrap;
}
table td.actions a {
  margin: 0px 6px;
  padding:2px 5px;
}

/* SQL log */
.cake-sql-log {
  background: #fff;
}
.cake-sql-log td {
  padding: 4px 8px;
  text-align: left;
  font-family: Monaco, Consolas, "Courier New", monospaced;
}
.cake-sql-log caption {
  color:#fff;
}

/** Paging **/
.paging {
  background:#fff;
  color: #ccc;
  margin-top: 1em;
  clear:both;
}
.paging .current,
.paging .disabled,
.paging a {
  text-decoration: none;
  padding: 5px 8px;
  display: inline-block
}
.paging > span {
  display: inline-block;
  border: 1px solid #ccc;
  border-left: 0;
}
.paging > span:hover {
  background: #efefef;
}
.paging .prev {
  border-left: 1px solid #ccc;
  -moz-border-radius: 4px 0 0 4px;
  -webkit-border-radius: 4px 0 0 4px;
  border-radius: 4px 0 0 4px;
}
.paging .next {
  -moz-border-radius: 0 4px 4px 0;
  -webkit-border-radius: 0 4px 4px 0;
  border-radius: 0 4px 4px 0;
}
.paging .disabled {
  color: #ddd;
}
.paging .disabled:hover {
  background: transparent;
}
.paging .current {
  background: #efefef;
  color: #c73e14;
}

/** Scaffold View **/
dl {
  line-height: 2em;
  margin: 0em 0em;
  width: 60%;
}
dl dd:nth-child(4n+2),
dl dt:nth-child(4n+1) {
  background: #f4f4f4;
}

dt {
  font-weight: bold;
  padding-left: 4px;
  vertical-align: top;
  width: 10em;
}
dd {
  margin-left: 10em;
  margin-top: -2em;
  vertical-align: top;
}

/** Forms **/
form {
  clear: both;
  margin-right: 20px;
  padding: 0;
  width: 100%;
}
fieldset {
  border: none;
  margin-bottom: 1em;
  padding: 16px 10px;
}
fieldset legend {
  color: #e32;
  font-size: 160%;
  font-weight: bold;
}
fieldset fieldset {
  margin-top: 0;
  padding: 10px 0 0;
}
fieldset fieldset legend {
  font-size: 120%;
  font-weight: normal;
}
fieldset fieldset div {
  clear: left;
  margin: 0 20px;
}/*
form div {
  clear: both;
  margin-bottom: 1em;
  padding: .5em;
  vertical-align: text-top;
}*/
form .input {
  color: #444;
}
form .required {
  font-weight: bold;
}
form .required label:after {
  color: #e32;
  content: '*';
  display:inline;
}
form div.submit {
  border: 0;
  clear: both;
  margin-top: 10px;
}
label {
  display: block;
  margin-bottom:3px;
}
input, textarea {
  clear: both;
  font-size: 140%;
  font-family: 'Open Sans', "lucida grande", "verdana", sans-serif;
  padding: 1%;
  width:98%;
}
select {
  clear: both;
  font-size: 120%;
  vertical-align: text-bottom;
}
select[multiple=multiple] {
  width: 100%;
}
option {
  font-size: 120%;
  padding: 0 3px;
}
input[type=checkbox] {
  clear: left;
  float: left;
  margin: 0px 6px 7px 2px;
  width: auto;
}
div.checkbox label {
  display: inline;
}
input[type=radio] {
  float:left;
  width:auto;
  margin: 6px 0;
  padding: 0;
  line-height: 26px;
}
.radio label {
  margin: 0 0 6px 20px;
  line-height: 26px;
}
input[type=submit] {
  display: inline;
  font-size: 110%;
  width: auto;
}
form .submit input[type=submit] {
  background:#62af56;
  background-image: -webkit-gradient(linear, left top, left bottom, from(#76BF6B), to(#3B8230));
  background-image: -webkit-linear-gradient(top, #76BF6B, #3B8230);
  background-image: -moz-linear-gradient(top, #76BF6B, #3B8230);
  border-color: #2d6324;
  color: #fff;
  text-shadow: rgba(0, 0, 0, 0.5) 0px -1px 0px;
  padding: 8px 10px;
}
form .submit input[type=submit]:hover {
  background: #5BA150;
}
/* Form errors */
form .error {
  background: #FFDACC;
  -moz-border-radius: 4px;
  -webkit-border-radius: 4px;
  border-radius: 4px;
  font-weight: normal;
}
form .error-message {
  -moz-border-radius: none;
  -webkit-border-radius: none;
  border-radius: none;
  border: none;
  background: none;
  margin: 0;
  padding-left: 4px;
  padding-right: 0;
}
form .error,
form .error-message {
  color: #9E2424;
  -webkit-box-shadow: none;
  -moz-box-shadow: none;
  -ms-box-shadow: none;
  -o-box-shadow: none;
  box-shadow: none;
  text-shadow: none;
}

/** Notices and Errors **/
.message {
  clear: both;
  color: #fff;
  font-size: 140%;
  font-weight: bold;
  margin: 0 0 1em 0;
  padding: 5px;
}

.success,
.message,
.cake-error,
.cake-debug,
.notice,
p.error,
.error-message {
  background: #ffcc00;
  background-repeat: repeat-x;
  background-image: -moz-linear-gradient(top, #ffcc00, #E6B800);
  background-image: -ms-linear-gradient(top, #ffcc00, #E6B800);
  background-image: -webkit-gradient(linear, left top, left bottom, from(#ffcc00), to(#E6B800));
  background-image: -webkit-linear-gradient(top, #ffcc00, #E6B800);
  background-image: -o-linear-gradient(top, #ffcc00, #E6B800);
  background-image: linear-gradient(top, #ffcc00, #E6B800);
  text-shadow: 0 -1px 0 rgba(0, 0, 0, 0.25);
  border: 1px solid rgba(0, 0, 0, 0.2);
  margin-bottom: 18px;
  padding: 7px 14px;
  color: #404040;
  text-shadow: 0 1px 0 rgba(255, 255, 255, 0.5);
  -webkit-border-radius: 4px;
  -moz-border-radius: 4px;
  border-radius: 4px;
  -webkit-box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.25);
  -moz-box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.25);
  box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.25);
}
.success,
.message,
.cake-error,
p.error,
.error-message {
  clear: both;
  color: #fff;
  background: #c43c35;
  border: 1px solid rgba(0, 0, 0, 0.5);
  background-repeat: repeat-x;
  background-image: -moz-linear-gradient(top, #ee5f5b, #c43c35);
  background-image: -ms-linear-gradient(top, #ee5f5b, #c43c35);
  background-image: -webkit-gradient(linear, left top, left bottom, from(#ee5f5b), to(#c43c35));
  background-image: -webkit-linear-gradient(top, #ee5f5b, #c43c35);
  background-image: -o-linear-gradient(top, #ee5f5b, #c43c35);
  background-image: linear-gradient(top, #ee5f5b, #c43c35);
  text-shadow: 0 -1px 0 rgba(0, 0, 0, 0.3);
}
.success {
  clear: both;
  color: #fff;
  border: 1px solid rgba(0, 0, 0, 0.5);
  background: #3B8230;
  background-repeat: repeat-x;
  background-image: -webkit-gradient(linear, left top, left bottom, from(#76BF6B), to(#3B8230));
  background-image: -webkit-linear-gradient(top, #76BF6B, #3B8230);
  background-image: -moz-linear-gradient(top, #76BF6B, #3B8230);
  background-image: -ms-linear-gradient(top, #76BF6B, #3B8230);
  background-image: -o-linear-gradient(top, #76BF6B, #3B8230);
  background-image: linear-gradient(top, #76BF6B, #3B8230);
  text-shadow: 0 -1px 0 rgba(0, 0, 0, 0.3);
}
p.error {
  font-family: Monaco, Consolas, Courier, monospace;
  font-size: 120%;
  padding: 0.8em;
  margin: 1em 0;
}
p.error em {
  font-weight: normal;
  line-height: 140%;
}
.notice {
  color: #000;
  display: block;
  font-size: 120%;
  padding: 0.8em;
  margin: 1em 0;
}
.success {
  color: #fff;
}

/**  Actions  **/
.actions ul {
  margin: 0;
  padding: 0;
}
.actions li {
  margin:0 0 0.5em 0;
  list-style-type: none;
  white-space: nowrap;
  padding: 0;
}
.actions ul li a {
  font-weight: normal;
  display: block;
  clear: both;
}

/* Buttons and button links */
input[type=submit],
.actions ul li a,
.actions a {
  font-weight:normal;
  padding: 4px 8px;
  background: #dcdcdc;
  background-image: -webkit-gradient(linear, left top, left bottom, from(#fefefe), to(#dcdcdc));
  background-image: -webkit-linear-gradient(top, #fefefe, #dcdcdc);
  background-image: -moz-linear-gradient(top, #fefefe, #dcdcdc);
  background-image: -ms-linear-gradient(top, #fefefe, #dcdcdc);
  background-image: -o-linear-gradient(top, #fefefe, #dcdcdc);
  background-image: linear-gradient(top, #fefefe, #dcdcdc);
  color:#333;
  border:1px solid #bbb;
  -webkit-border-radius: 4px;
  -moz-border-radius: 4px;
  border-radius: 4px;
  text-decoration: none;
  text-shadow: #fff 0px 1px 0px;
  min-width: 0;
  -moz-box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.3), 0px 1px 1px rgba(0, 0, 0, 0.2);
  -webkit-box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.3), 0px 1px 1px rgba(0, 0, 0, 0.2);
  box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.3), 0px 1px 1px rgba(0, 0, 0, 0.2);
  -webkit-user-select: none;
  user-select: none;
}
.actions ul li a:hover,
.actions a:hover {
  background: #ededed;
  border-color: #acacac;
  text-decoration: none;
}
input[type=submit]:active,
.actions ul li a:active,
.actions a:active {
  background: #eee;
  background-image: -webkit-gradient(linear, left top, left bottom, from(#dfdfdf), to(#eee));
  background-image: -webkit-linear-gradient(top, #dfdfdf, #eee);
  background-image: -moz-linear-gradient(top, #dfdfdf, #eee);
  background-image: -ms-linear-gradient(top, #dfdfdf, #eee);
  background-image: -o-linear-gradient(top, #dfdfdf, #eee);
  background-image: linear-gradient(top, #dfdfdf, #eee);
  text-shadow: #eee 0px 1px 0px;
  -moz-box-shadow: inset 0 1px 4px rgba(0, 0, 0, 0.3);
  -webkit-box-shadow: inset 0 1px 4px rgba(0, 0, 0, 0.3);
  box-shadow: inset 0 1px 4px rgba(0, 0, 0, 0.3);
  border-color: #aaa;
  text-decoration: none;
}

/** Related **/
.related {
  clear: both;
  display: block;
}

/** Debugging **/
pre {
  color: #000;
  background: #f0f0f0;
  padding: 15px;
  -moz-box-shadow: 1px 1px 2px rgba(0, 0, 0, 0.3);
  -webkit-box-shadow: 1px 1px 2px rgba(0, 0, 0, 0.3);
  box-shadow: 1px 1px 2px rgba(0, 0, 0, 0.3);
}
.cake-debug-output {
  padding: 0;
  position: relative;
}
.cake-debug-output > span {
  position: absolute;
  top: 5px;
  right: 5px;
  background: rgba(255, 255, 255, 0.3);
  -moz-border-radius: 4px;
  -webkit-border-radius: 4px;
  border-radius: 4px;
  padding: 5px 6px;
  color: #000;
  display: block;
  float: left;
  -moz-box-shadow: inset 0 1px 0 rgba(0, 0, 0, 0.25), 0 1px 0 rgba(255, 255, 255, 0.5);
  -webkit-box-shadow: inset 0 1px 0 rgba(0, 0, 0, 0.25), 0 1px 0 rgba(255, 255, 255, 0.5);
  box-shadow: inset 0 1px 0 rgba(0, 0, 0, 0.25), 0 1px 0 rgba(255, 255, 255, 0.5);
  text-shadow: 0 1px 1px rgba(255, 255, 255, 0.8);
}
.cake-debug,
.cake-error {
  font-size: 16px;
  line-height: 20px;
  clear: both;
}
.cake-error > a {
  text-shadow: none;
}
.cake-error {
  white-space: normal;
}
.cake-stack-trace {
  background: rgba(255, 255, 255, 0.7);
  color: #333;
  margin: 10px 0 5px 0;
  padding: 10px 10px 0 10px;
  font-size: 120%;
  line-height: 140%;
  overflow: auto;
  position: relative;
  -moz-border-radius: 4px;
  -webkit-border-radius: 4px;
  border-radius: 4px;
}
.cake-stack-trace a {
  text-shadow: none;
  background: rgba(255, 255, 255, 0.7);
  padding: 5px;
  -moz-border-radius: 10px;
  -webkit-border-radius: 10px;
  border-radius: 10px;
  margin: 0px 4px 10px 2px;
  font-family: sans-serif;
  font-size: 14px;
  line-height: 14px;
  display: inline-block;
  text-decoration: none;
  -moz-box-shadow: inset 0px 1px 0 rgba(0, 0, 0, 0.3);
  -webkit-box-shadow: inset 0px 1px 0 rgba(0, 0, 0, 0.3);
  box-shadow: inset 0px 1px 0 rgba(0, 0, 0, 0.3);
}
.cake-code-dump pre {
  position: relative;
  overflow: auto;
}
.cake-context {
  margin-bottom: 10px;
}
.cake-stack-trace pre {
  color: #000;
  background-color: #F0F0F0;
  margin: 0px 0 10px 0;
  padding: 1em;
  overflow: auto;
  text-shadow: none;
}
.cake-stack-trace li {
  padding: 10px 5px 0px;
  margin: 0 0 4px 0;
  font-family: monospace;
  border: 1px solid #bbb;
  -moz-border-radius: 4px;
  -wekbkit-border-radius: 4px;
  border-radius: 4px;
  background: #dcdcdc;
  background-image: -webkit-gradient(linear, left top, left bottom, from(#fefefe), to(#dcdcdc));
  background-image: -webkit-linear-gradient(top, #fefefe, #dcdcdc);
  background-image: -moz-linear-gradient(top, #fefefe, #dcdcdc);
  background-image: -ms-linear-gradient(top, #fefefe, #dcdcdc);
  background-image: -o-linear-gradient(top, #fefefe, #dcdcdc);
  background-image: linear-gradient(top, #fefefe, #dcdcdc);
}
/* excerpt */
.cake-code-dump pre,
.cake-code-dump pre code {
  clear: both;
  font-size: 12px;
  line-height: 15px;
  margin: 4px 2px;
  padding: 4px;
  overflow: auto;
}
.cake-code-dump .code-highlight {
  display: block;
  background-color: rgba(255, 255, 0, 0.5);
}
.code-coverage-results div.code-line {
  padding-left:5px;
  display:block;
  margin-left:10px;
}
.code-coverage-results div.uncovered span.content {
  background:#ecc;
}
.code-coverage-results div.covered span.content {
  background:#cec;
}

.code-coverage-results div.ignored span.content {
  color:#aaa;
}
.code-coverage-results span.line-num {
  color:#666;
  display:block;
  float:left;
  width:20px;
  text-align:right;
  margin-right:5px;
}
.code-coverage-results span.line-num strong {
  color:#666;
}
.code-coverage-results div.start {
  border:1px solid #aaa;
  border-width:1px 1px 0px 1px;
  margin-top:30px;
  padding-top:5px;
}

.code-coverage-results div.end {
  border:1px solid #aaa;
  border-width:0px 1px 1px 1px;
  margin-bottom:30px;
  padding-bottom:5px;
}
.code-coverage-results div.realstart {
  margin-top:0px;
}
.code-coverage-results p.note {
  color:#bbb;
  padding:5px;
  margin:5px 0 10px;
  font-size:10px;
}
.code-coverage-results span.result-bad {
  color: #a00;
}
.code-coverage-results span.result-ok {
  color: #fa0;
}
.code-coverage-results span.result-good {
  color: #0a0;
}

/** Elements **/
#url-rewriting-warning {
  display:none;
}

.menu li,
.pick_fb,
.upload_bt,
form .submit input[type="submit"] {
  cursor: pointer;
  cursor: hand;
}


body {
	width: 810px;
	background-image: url(http://operacionxperia.com/momtomom/memorias_embarazo/img/back.png);
	color: #fff;
	font-family:'Open Sans', helvetica, arial, sans-serif;
	font-size: 14px;
	margin: 0;
	overflow: hidden;
  position: relative;
  -webkit-font-smoothing: antialiased;
}


.header{
  position: relative;
  top: 0;
  left: 0;
  width: 810px;
  height: 190px;
  background-image: url(http://operacionxperia.com/momtomom/memorias_embarazo/img/nube1.png), url(http://operacionxperia.com/momtomom/memorias_embarazo/img/titulo1.png), url(http://operacionxperia.com/momtomom/memorias_embarazo/img/img/titulo2.png), url(http://operacionxperia.com/momtomom/memorias_embarazo/img/nube2.png), url(http://operacionxperia.com/momtomom/memorias_embarazo/img/nube3.png);
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
  background-image: url(http://operacionxperia.com/momtomom/memorias_embarazo/img/marco.png), url(http://operacionxperia.com/momtomom/memorias_embarazo/img/marco_fondo.png);
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
  background-image: url(http://operacionxperia.com/momtomom/memorias_embarazo/img/marco.png), url(http://operacionxperia.com/momtomom/memorias_embarazo/img/marco_fondo.png);
  background-position: top left, center center;
  text-indent: -9999px;
  background-repeat: no-repeat;
}

.pick_fb{
  background-image: url(http://operacionxperia.com/momtomom/memorias_embarazo/img/bt_elegir.png);
  width: 107px;
  height: 20px;
  position: relative;
  top: 139px;
  left: 62px;
}

.upload_bt{
  background-image: url(http://operacionxperia.com/momtomom/memorias_embarazo/img/bt_subir_foto.png);
  width: 102px;
  height: 15px;
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

#send_OK input[type="submit"]{
	position: absolute;
	top: 187px;
	left: 159px;
	text-indent: -9999px;
	width: 54px;
	height: 54px;
	background-image: url(http://operacionxperia.com/momtomom/memorias_embarazo/img/bt_aceptar.png);
	background-color: transparent;
	border: none;
	border-radius: 0px;
	-webkit-border-radius: 0px;
	-moz-border-radius: 0px;
	border-radius: 0px;
	-moz-box-shadow: inset 0 0px 0 rgba(255, 255, 255, 0.3), 0px 0px 0px rgba(0, 0, 0, 0.2);
	-webkit-box-shadow: inset 0 0px 0 rgba(255, 255, 255, 0.3), 0px 0px 0px rgba(0, 0, 0, 0.2);
	box-shadow: inset 0 0px 0 rgba(255, 255, 255, 0.3), 0px 0px 0px rgba(0, 0, 0, 0.2);
}

p.whatdo{
  background-image: url(http://operacionxperia.com/momtomom/memorias_embarazo/img/que-quieres-hacer.png);
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
  background-image: url(http://operacionxperia.com/momtomom/memorias_embarazo/img/bt_escribir_up.png);
  width: 188px;
  height: 123px;
  text-indent: -9999px;
}

.write_bt:hover{
  background-image: url(http://operacionxperia.com/momtomom/memorias_embarazo/img/bt_escribir.png);
}


.share_bt{
  float: left;
  background-image: url(http://operacionxperia.com/momtomom/memorias_embarazo/img/bt_compartir_up.png);
  width: 188px;
  height: 130px;
  text-indent: -9999px;
}

.share_bt:hover{
  background-image: url(http://operacionxperia.com/momtomom/memorias_embarazo/img/bt_compartir.png);
}


.watch_bt{
  float: left;
  background-image: url(http://operacionxperia.com/momtomom/memorias_embarazo/img/bt_ver_up.png);
  width: 188px;
  height: 123px;
  text-indent: -9999px;
}

.watch_bt:hover{
  background-image: url(http://operacionxperia.com/momtomom/memorias_embarazo/img/bt_ver.png);
}

.instructions_bt{
  position: absolute;
  left: 287px;
  width: 236px;
  height: 76px;
  background-image: url(http://operacionxperia.com/momtomom/memorias_embarazo/img/bt_instrucciones_up.png);
  top: 520px;
  text-indent: -9999px;
  cursor: pointer;
}

.instructions_bt:hover{
  background-image: url(http://operacionxperia.com/momtomom/memorias_embarazo/img/bt_instrucciones.png);
  cursor: pointer;
}

.footer{
  position: absolute;
  bottom: 0;
  left: 0;
  width: 810px;
  height: 200px;
  background-image: url(http://operacionxperia.com/momtomom/memorias_embarazo/img/nube5.png), url(http://operacionxperia.com/momtomom/memorias_embarazo/img/nube4.png);
  background-position: 0px 4px, 0px 6px;
  background-repeat: no-repeat;
}


.welcome .footer  {
  background: none;
  display: none;
}

.footer_mtm{
  background-image: url(http://operacionxperia.com/momtomom/memorias_embarazo/img/footer_logo.png);
  width: 114px;
  height: 29px;
  text-indent: -9999px;
  position: relative;
  top: 157px;
  left: 42px;
}

.footer_link{
  background-image: url(http://operacionxperia.com/momtomom/memorias_embarazo/img/footer_site.png);
  width: 113px;
  height: 14px;
  text-indent: -9999px;
  position: absolute;
  top: 170px;
  right: 170px;
}

.footer_twitter{
  background-image: url(http://operacionxperia.com/momtomom/memorias_embarazo/img/footer_twitter.png);
  width: 100px;
  height: 18px;
  text-indent: -9999px;
  position: absolute;
  top: 170px;
  right: 20px;
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
  background-image: url(http://operacionxperia.com/momtomom/memorias_embarazo/img/marco_circular.png), url(http://operacionxperia.com/momtomom/memorias_embarazo/img/marco_circular_back.png);
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
  background-image: url(http://operacionxperia.com/momtomom/memorias_embarazo/img/marco_circular.png), url(http://operacionxperia.com/momtomom/memorias_embarazo/img/marco_circular_back.png);
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
  background-image: url(http://operacionxperia.com/momtomom/memorias_embarazo/img/bt_elegir.png);
  width: 107px;
  height: 20px;
  top: 55px;
  left: 29px;
}

.familytreeFile input[type="file"].upload_bt {
  background-image: url(http://operacionxperia.com/momtomom/memorias_embarazo/img/bt_subir_foto.png);
  width: 104px;
  height: 17px;
  text-indent: -9999px;
  top: 60px;
  left: 29px;
  position: relative;
}

.name_input{
  top:200px;
  color: #147cc1;
  position: relative;
  top: 100px;
  background: none;
  border: none;
  font-size: 16px;
  text-align: center;
}

.name_input::-webkit-input-placeholder{
  color: #147cc1;
}
.name_input::-moz-placeholder{
  color: #147cc1;
}
.name_input:-ms-input-placeholder{
  color: #147cc1;
}
.name_input:-moz-placeholder{
  color: #147cc1;
}
/*fixed*/

div.form, div.index, div.view {
  float: left;
  display: inline-block;
  width: 810px;
  border:none;
  padding: 0;
}

.familytreePages form{
  margin-top: 130px;
}

/* page_title - second header like */

.page_title{
  width: 810px;
  height: 100px;
  position: absolute;
  top: 30px;
}

.ant{
  background-image: url(http://operacionxperia.com/momtomom/memorias_embarazo/img/anterior.png);
  text-indent: -9999px;
  width: 143px;
  height: 40px;
  float: left;
}

.sig{
  background-image: url(http://operacionxperia.com/momtomom/memorias_embarazo/img/siguiente.png);
  text-indent: -9999px;
  width: 140px;
  height: 40px;
  float: right;
}

.title_page{
  background-image: url(http://operacionxperia.com/momtomom/memorias_embarazo/img/titulo_back.png);
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

form{
  padding-left: 50px;
}

label{
  color: #fff;
  float: left;
  padding-right: 5px;
}

form .input{
  padding-bottom: 30px;
  width: 640px;
}

form .input span{
  overflow: hidden;
  display: block;
}


input[type="text"]{
  background: none;
  border: none;
  border-bottom: 1px solid #fff;
  font-size: 14px;
  color: #ccc;
  padding: 3px;
  text-align: center;
}


input[type="number"]{
  background-color: #fff;
  border: none;
  border-bottom: 1px solid #fff;
  font-size: 14px;
  color: #147cc1;
  padding: 5px;
  padding-bottom: 2px;
  width: 35px;
  font-weight: bold;
  display: inline-block;
}

select{
  background: none;
  border: none;
  border-bottom: 1px solid #fff;
  font-size: 14px;
  color: #ccc;
  padding: 3px;
}

.input p{
  color: #fff;
  font-size: 14px;
  float: left;
  padding-right: 5px;
  margin-bottom: 30px;
}

form p{
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

form .submit input[type="submit"]{
  text-indent: -9999px;
  width: 55px;
  height: 54px;
  background-image: url(http://operacionxperia.com/momtomom/memorias_embarazo/img/img/bt_aceptar.png);
  background-color: transparent;
  border: none;
  border-radius: 0px;
  -webkit-border-radius: 0px;
  -moz-border-radius: 0px;
  border-radius: 0px;
  -moz-box-shadow: inset 0 0px 0 rgba(255, 255, 255, 0.3), 0px 0px 0px rgba(0, 0, 0, 0.2);
  -webkit-box-shadow: inset 0 0px 0 rgba(255, 255, 255, 0.3), 0px 0px 0px rgba(0, 0, 0, 0.2);
  box-shadow: inset 0 0px 0 rgba(255, 255, 255, 0.3), 0px 0px 0px rgba(0, 0, 0, 0.2);
}

form .submit input[type="submit"]:hover{
  text-indent: -9999px;
  width: 55px;
  height: 54px;
  background-image: url(http://operacionxperia.com/momtomom/memorias_embarazo/img/bt_aceptar.png);
  background-color: transparent;
  border: none;
  border-radius: 0px;
  -webkit-border-radius: 0px;
  -moz-border-radius: 0px;
  border-radius: 0px;
  -moz-box-shadow: inset 0 0px 0 rgba(255, 255, 255, 0.3), 0px 0px 0px rgba(0, 0, 0, 0.2);
  -webkit-box-shadow: inset 0 0px 0 rgba(255, 255, 255, 0.3), 0px 0px 0px rgba(0, 0, 0, 0.2);
  box-shadow: inset 0 0px 0 rgba(255, 255, 255, 0.3), 0px 0px 0px rgba(0, 0, 0, 0.2);
}

.whoami_left{
	float: left;
	width: 300px;
	height: 500px;
}

.whoami_photo{
	background-image: url(http://operacionxperia.com/momtomom/memorias_embarazo/img/marco_whoami.png);
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
	top: 100px;
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

.sintom_left input[type="text"]{
	width: 120px;
	margin-left: 15px;
}

.sintom_rite{
	width: 250px;
	float: left;
	padding-left: 30px;
}

.sintom_rite input[type="text"]{
	width: 250px;
	display: block;
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

.ultrasoundPages {
  position: absolute;
  top: 150px;
}

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
  right: 144px;
}

.ultra .info h3 {
  font: 23px 'Open Sans';
  color: #269CCC;
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
}

.info input {
  display: inline-block;
}

/* BELLY PAGES */

.mesuno {
    position: absolute;
    top: 170px;
    left: 81px;
}
.mesdos {
    position: absolute;
    top: 170px;
    left: 457px;
}
.mestres {
    position: absolute;
    top: 450px;
    left: 270px;
}

.mesuno>p, .mesdos>p, .mestres>p {
  position: absolute;
  top: 215px;
  text-align: center;
  width: 262px;
  color: #1082AC;
  font-size: 20px;
  font-family: 'Futura';
}

/* ANIMO */

#AnimoPageAddForm {
  padding-top: 120px;
}


#AnimoPageAddForm h3 {
  float: left;
  margin-left: 73px;
  font-family: 'Futura';
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
  margin: 4px 0;
}

.mi-humor, .mi-humor, .mi-energia, .mi-fisico, .mi-otros {
  font-size: 16px;
}

.col2 {
  margin-left: 33px;
}

.col1, .col2, .col3, .col4 {
  float: left;
  margin: 18px 0px;
}

.mi-fisico .col1, .mi-fisico .col2, .mi-fisico .col3, .mi-fisico .col4 {
  margin-bottom: 0;
}

.mi-otros .col2, .mi-otros .col3, .mi-otros .col4 {
  margin: 15px 24px 0;
  width: 90px;
}

.col2, .col3, .col4 {
  width: 20px;
  margin: 36px 60px;
}

.col1 {
  width: 300px;
}

.meses {
  margin: 30px 0 0 260px;
}

#AnimoPageAddForm .submit {
  position: absolute;
  bottom: -130px;
}


/* IlovemybabyPageAddForm */

#IlovemybabyPageAddForm {
  margin-top: 200px;
}

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
#IlovemybabyPageAddForm div.submit {
  margin-top: 30px;
}

/* #ChildsexPageAdd */

#ChildsexPageAddForm {
  top: 380px;
  position: absolute;
}

#ChildsexPageAddForm .submit{
  position: absolute;
  top: 350px;
}

.bebes {
  display: block;
  background: url(http://operacionxperia.com/momtomom/memorias_embarazo/img/bebesotes.png);
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
  top: 0;
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
  top: 100px;
  left: 263px;
  width: 276px;
  text-align: center;
}

.decidimos {
  position: absolute;
  top: 220px;
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

#FirstkickPageAddForm {
  width: 660px;
  position: absolute;
  top: 140px;
}

#datepickerCongrats {
  width: 140px;
}

/* #FirstkickPageAddForm */

#FirstkickPageAddForm {
  position: absolute;
  top: 120px;
  width: 710px;
}

#FirstkickPageAddForm p {
  float: none;
  margin: 30px 0;
  color: #fff;
}

#FirstkickPageAddForm .hasDatepicker {
  width: 120px;
}

.startkick input[type="text"] {
  width: 277:px;
}

#FirstkickPageAddForm .colL {
    float: left;
    width: 300px;
}

#FirstkickPageAddForm .colL .hasDatepicker {
    margin-top: 300px;
    margin-left: 60px;
}

#FirstkickPageAddForm .colR {
    float: left;
    width: 380px;
}

#FirstkickPageAddForm  .opcion {
  display: block;
  width: 190px;
  float: left;
}

#FirstkickPageAddForm .opcion label {
  line-height: 28px;
  margin-left: 6px;
}

#FirstkickPageAddForm .opcion.nino,
#FirstkickPageAddForm .opcion.nina {
  width: 90px;
}

.gran label {
  width: 100%;
}

.antojos {
  margin-top: 40px;
}

.antojos input[type="text"] {
  width: 144px;
  margin-left: 9px;
}

.antojos label {
  height: 50px;
  width: 50px;
}

/* bellymonthPages */

#BellymonthPageAddForm {
  position: absolute;
  top: 120px;
  width: 680px;
  height: 710px;
}

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
 margin: 1px 0;
 color: #fff;
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

#BellymonthPageAddForm .miss input[type="text"] {
  width: 350px;
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

#GettingclosePageAddForm {
  position: absolute;
  top: 120px;
  height: 700px;
  width: 710px;
}


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

.papas input[type="text"],
.suegros input[type="text"] {
  width: 250px;
}

.suegros {
  margin: 30px 0;
}

#GettingclosePageAddForm .submit input {
  margin-top: 80px;
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

#BabyshowerPageAddForm {
    position: absolute;
    top: 120px;
    height: 700px;
    width: 680px;
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

#BabyshowerPageAddForm .col input[type="text"] {
  line-height: 40px;
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

#BabyshowerPageAddForm .submit {
  position: absolute;
  bottom: 0;
}

/* Coolultrasound */

#CoolultrasoundPageAddForm {
  position: absolute;
  top: 120px;
  height: 700px;
  width: 710px;
}

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

#CoolultrasoundPageAddForm .submit {
  position: absolute;
  bottom: 0;
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

body{
	height: 1170px;
}
.footer{
	position: absolute;
	top: 970px;
	left: 0px;
}

@media print
{
	body {page-break-after:always}
}

@page {
            margin-top: 0em;
            margin-left: 0em;
        }


</style>

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
<?php echo $this->Form->create('CongratsPage'); ?>
	
	<?php

	if(isset($congrats['CongratsPage']['sospeche'])){
		$sospeche = $congrats['CongratsPage']['sospeche'];
	} else{
		$sospeche = '';
	}
		echo $this->Form->input('sospeche', array('label' => 'Sospeché que estaba embarazada cuando: '
			, 'after' => '</span>','between' => '<span>', 'value' => $sospeche )); 

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
    	<span><?php if($prueba != ''){ echo $prueba; } ?></span>

	<?php

	if(isset($congrats['CongratsPage']['firstfeeling'])){
		$firstfeeling = $congrats['CongratsPage']['firstfeeling'];
	} else{
		$firstfeeling = '';
	}
		echo $this->Form->input('firstfeeling', array('label' => 'Lo primero que sentí fue: ','after' => '</span>','between' => '<span>', 'value' => $firstfeeling));
	?>
		<div class="input number"><p>
		<label for="CongratsPageBabycoming">Tenía </label>
		<input name="data[CongratsPage][babycoming]" type="number" id="CongratsPageBabycoming" value="<?php if( isset($congrats['CongratsPage']['babycoming'])){ echo $congrats['CongratsPage']['babycoming']; }?>">
		 semanas de embarazo cuando me enteré que venía el bebé en camino, ahh que emoción!. Compartí la gran noticia con el papá de mi bebé de esta manera:
		 <input name="data[CongratsPage][howishare]" type="text" id="CongratsPageHowishare" value="<?php if(isset($congrats['CongratsPage']['howishare'])){ echo $congrats['CongratsPage']['howishare']; } ?>">
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
		echo $this->Form->input('babynum', array('label' => 'Éste es mi bebé número: ', 'value' => $babynum));
		echo $this->Form->input('babybros',array('label' => 'Los hermanitos del bebé reaccionaron así: ', 'after' => '</span>','between' => '<span>', 'value' => $babybros));
		/*
		echo $this->Form->input('details',array('label' => '¡Anota todos los detalles antes de que se te olviden!... ¿Cómo y dónde celebraste  saber que estabas embarazada? ¿Con quién compartiste el momento? ¿Cómo  reaccionaron tus familiares? ¿Cuál fue la primera compra que hiciste o regalo que te dieron para el bebé?', 'after' => '</span>','between' => '<span>'));
		*/
	?>
	<div class="input text">
	<p id="last_input">¡Anota todos los detalles antes de que se te olviden!... ¿Cómo y dónde celebraste  saber que estabas embarazada? ¿Con quién compartiste el momento? ¿Cómo  reaccionaron tus familiares? ¿Cuál fue la primera compra que hiciste o regalo que te dieron para el bebé?
	<span><input name="data[CongratsPage][details]" maxlength="400" type="text" id="CongratsPageDetails" value="<?php if(isset($congrats['CongratsPage']['details'])){ echo $congrats['CongratsPage']['details']; }?>"></span>
		<?php $this->Html->link('View as PDF', array('action'=>'view', 'ext'=>'pdf', $profileid)); ?></p>
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
<div class="footer">
        <div class="footer_mtm">Mom to mom , Consintiendo mi piel de mam&aacute;</div>
        <a href="http://www.momtomom.com.mx/" class="footer_link" target="_blank">www.momtomom.mx</a>
        <a href="https://twitter.com/momtomommx" class="footer_twitter" target="_blank">@momtomommx</a>
      </div>
</body> 








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
 
  <div class="title_page"><p>Mi Primer visita</p><br> <span>al ginec&oacute;logo</span></div>
 
</div>

  <div class="congratsPages form">
<?php echo $this->Form->create('FirstVisitPage'); ?>
  
  <?php

  if(isset($firstvisit['FirstVisitPage']['gin'])){
    $gin = $firstvisit['FirstVisitPage']['gin'];
  } else{
    $gin = '';
  }
    echo $this->Form->input('gin', array('label' => 'Mi ginecólogo es: '
      , 'after' => '</span>','between' => '<span>', 'value' => $gin )); 

  ?>

    <div class="input date">
      <label>Fecha estimada en que nacerás: </label>
      <span><input type="text" id="datepickerCongrats" size="30" readonly="readonly"  value="<?php if($estimated != ''){
        echo $estimated; } ?>"/></span>
     </div>

  <?php

  if(isset($firstvisit['FirstVisitPage']['weight'])){
    $weight = $firstvisit['FirstVisitPage']['weight'];
  } else{
    $weight = '';
  }
    echo $this->Form->input('weight', array('label' => 'Mi peso actual: ','after' => '</span>','between' => '<span>', 'value' => $weight));
   
      if(isset($firstvisit['FirstVisitPage']['measurements'])){
        $measurements = $firstvisit['FirstVisitPage']['measurements'];
      } else{
        $measurements = '';
      }

      echo $this->Form->input('measurements', array('label' => 'Las medidas de mi pancita: ','after' => '</span>','between' => '<span>', 'value' => $measurements));

      if(isset($firstvisit['FirstVisitPage']['firstvisit'])){
        $firstvisit = $firstvisit['FirstVisitPage']['firstvisit'];
      } else{
        $firstvisit = '';
      }

    echo $this->Form->input('firstvisit',array('label' => 'Lo que recuerdo de mi primera visita es: ', 'after' => '</span>','between' => '<span>', 'value' => $firstvisit));
   ?>
  
    <?php
      echo $this->Form->input('profile_id', array('type' => 'hidden', 'value' => $profileid));
    ?>
<?php echo $this->Form->end(__('Submit')); ?>
</div>

</div>
  <div class="footer">
    <div class="footer_mtm">Mom to mom , Consintiendo mi piel de mam&aacute;</div>
    <a href="http://www.momtomom.com.mx/" class="footer_link" target="_blank">www.momtomom.mx</a>
    <a href="https://twitter.com/momtomommx" class="footer_twitter" target="_blank">@momtomommx</a>
  </div>
</body>