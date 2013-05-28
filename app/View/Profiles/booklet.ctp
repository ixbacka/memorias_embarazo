<!-- booklet.ctp -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js" type="text/javascript"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.10.1/jquery-ui.min.js" type="text/javascript"></script>
<?php echo $this->Html->css('jquery.booklet.latest'); ?>
<?php echo $this->Html->script('jquery.easing.1.3'); ?>
<?php echo $this->Html->script('jquery.booklet.latest.min'); ?>

<script type="text/javascript">

$(function() {
    $('#mybook').booklet({
        closed: true
    });
});

</script>

<style type="text/css">
body { 
	-moz-transform: scale(1); 
	-moz-transform-origin: 0 0;
	transform: scale(0.3,0.3);
}
</style>

<div class="booklet" id="mybook">
    <div class="b-page b-page-0 b-p1">
        <div class="b-wrap b-wrap-left">
            <?php $this->extend('/Profiles/cover'); ?>
        </div>
    </div>
    <div class="b-page b-page-1 b-p2">
        <div class="b-wrap b-wrap-right">
            <?php $this->extend('/CongratsPages/add'); ?>
        </div>
    </div>
    <div class="b-page b-page-2 b-p3">
        <div class="b-wrap b-wrap-left">
            <?php $this->extend('/FirstVisitPages/add'); ?>
        </div>
    </div>
    <div class="b-page b-page-3 b-p4">
        <div class="b-wrap b-wrap-right">
            <?php $this->extend('/WhoamiPages/add'); ?>
        </div>
    </div>
</div>