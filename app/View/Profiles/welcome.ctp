<!-- welcome.ctp -->
<style type="text/css">
body{
 position: fixed;
 width: 810px;
 height: 1200px;
}
</style>
<?php
  // Start Session Fix
  if( isset($_GET["start_session"]) ){
   session_start();
  }
  $page_url = "https://www.facebook.com/pages/Nativo-Desarrollo/514166771955164?id=514166771955164&sk=app_419722851452946";
  if (isset($_GET["start_session"]))
      die(header("Location:" . $page_url));
  $sid = session_id();
  if (!isset($_GET["sid"]))
  {
      if(isset($_POST["signed_request"]))
         $_SESSION["signed_request"] = $_POST["signed_request"];
      die(header("Location:?sid=" . $sid));
  }
  if (empty($sid) || $_GET["sid"] != $sid)
      die('<script>top.window.location="?start_session=true";</script>');
  // End Session Fix
?>

<SCRIPT TYPE="text/javascript">
  $(document).ready(function(){
    function switchmenu() {
      $('.wrapper').removeClass('zero');
    }
   setTimeout(switchmenu, 1000)
 });
</SCRIPT>

<div class="wrapper welcome zero">
  <div class="header">
    <ul class="menu">
      <li class="ask">FAQ</li>
      <li class="settings">Settings</li>
      <li class="home">Home</li>
    </ul>
  </div>
  <div class="like">
    <h3>Bienvenida mam&aacute;</h3>
    <p>Para comenzar da clic en <b>Me Gusta</b></p>
  </div>
  <div class="content">
    <div id="bienvenida_texto">Bienvenida mama!</div>
    <div class="estilos">
      <p>Para comezar, selecciona el estilo que prefieras para guardar tus Memorias de Embarazo:</p>
      <div class="temas">
        <?php
        echo $this->Html->link(
            'Cute',
            array('controller' => 'profiles', 'action' => 'cover', 1, 'full_base' => true), 
            array('id' => 'tema1')
          ); 
        echo $this->Html->link(
            'Classy',
            array('controller' => 'profiles', 'action' => 'cover', 2, 'full_base' => true), 
            array('id' => 'tema2')
          ); 
        echo $this->Html->link(
            'Elegant',
            array('controller' => 'profiles', 'action' => 'cover', 3, 'full_base' => true), 
            array('id' => 'tema3')
          ); 
        echo $this->Html->link(
            'Hippie',
            array('controller' => 'profiles', 'action' => 'cover', 4, 'full_base' => true), 
            array('id' => 'tema4')
          ); 
        ?>
      </div>
    </div>
  </div>
  <div class="footer"></div>
</div>

