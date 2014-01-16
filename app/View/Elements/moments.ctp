<?php $momentos = $this->requestAction('moment_pages/index'); ?>
<?php if(isset($momentos) && !empty($momentos)) {  ?>
  <?php if( findit(1, $momentos) ){ ?>
    <h3>Primer Trimestre</h3>
  <?php } ?>
  <ul>
  	<?php foreach ($momentos as $moment){
		  if($moment['MomentPage']['trimester'] == 1){ ?>
			  <li>
			    <?php	echo $this->Html->link(
			      $moment['MomentPage']['title'],
			      array('controller' => 'moment_pages', 'action' => 'add',
			    	$moment['MomentPage']['id'], $moment['MomentPage']['trimester'])
		      ); ?>
  			</li>
      <?php }
    } ?>
  </ul>
  <?php if( findit(2, $momentos) ){ ?>
    <h3>Segundo Trimestre</h3>
  <?php } ?>
  <ul>
	  <?php foreach ($momentos as $moment) {
		  if($moment['MomentPage']['trimester'] == 2){ ?>
			  <li>
			    <?php	echo $this->Html->link(
			      $moment['MomentPage']['title'],
			      array('controller' => 'moment_pages', 'action' => 'add', 
			    	$moment['MomentPage']['id'], $moment['MomentPage']['trimester'])
				  ); ?>
  			</li>
		  <?php	}
    } ?>
  </ul>
  <?php if( findit(3,$momentos) ){ ?>
    <h3>Tercer Trimestre</h3>
  <?php } ?>
  <ul>
    <?php	foreach ($momentos as $moment) {
      if($moment['MomentPage']['trimester'] == 3){ ?>
        <li>
          <?php	echo $this->Html->link(
            $moment['MomentPage']['title'],
            array('controller' => 'moment_pages', 'action' => 'add', 
            $moment['MomentPage']['id'], $moment['MomentPage']['trimester'])
          ); ?>
        </li>
      <?php	}
    } ?>
  </ul>
<?php }?>
<?php  function findit( $ele , $momentos){
  $elreturn = false;
  foreach ($momentos as $moment) {
  	if($moment['MomentPage']['trimester'] == $ele){
			$elreturn = true;
		}
  }
	return $elreturn;
} ?>
