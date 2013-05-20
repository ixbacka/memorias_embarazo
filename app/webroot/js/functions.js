$(document).ready(function(){
	
	$("li.home").click(function(){
		top.location.href = 'http://operacionxperia.com/momtomom/memorias_embarazo/profiles/cover';
	});

	$("li.ask").click(function(){
		//popup de instrucciones
	});

	$("li.settings").click(function(){
		//popup de settings
	});

  $( "#datepickerCongrats" ).datepicker({
		  onSelect: function(dateText) {
		    //display("Selected date: " + dateText + "; input's current value: " + this.value);
		    var n=dateText.split(" ");
		    var mes = '0';
		    
		    if(n[1] == 'Enero'){
		    	mes = '01';
		    } else if (n[1] == 'Febrero'){
		    	mes = '02';
		    } else if (n[1] == 'Marzo'){
		    	mes = '03';
		    } else if (n[1] == 'Abril'){
		    	mes = '04';
		    } else if (n[1] == 'Mayo'){
		    	mes = '05';
		    } else if (n[1] == 'Junio'){
		    	mes = '06';
		    } else if (n[1] == 'Julio'){
		    	mes = '07';
		    } else if (n[1] == 'Agosto'){
		    	mes = '08';
		    } else if (n[1] == 'Septiembre'){
		    	mes = '09';
		    } else if (n[1] == 'Octubre'){
		    	mes = '10';
		    } else if (n[1] == 'Noviembre'){
		    	mes = '11';
		    } else if (n[1] == 'Diciembre'){
		    	mes = '12';
		    }

		    $('#CongratsPagePruebaMonth').val(mes);
		    $('#CongratsPagePruebaDay').val(n[0]);
		    $('#CongratsPagePruebaYear').val(n[2]);
		  }
	});

  $( "#datepickerCongrats" ).datepicker( "option", "dateFormat", 'd MM yy' );
	$( "#datepickerCongrats" ).datepicker( "option", $.datepicker.regional['es']);

});

jQuery(function($){
        $.datepicker.regional['es'] = {
                closeText: 'Cerrar',
                prevText: '&#x3c;Ant',
                nextText: 'Sig&#x3e;',
                currentText: 'Hoy',
                monthNames: ['Enero','Febrero','Marzo','Abril','Mayo','Junio',
                'Julio','Agosto','Septiembre','Octubre','Noviembre','Diciembre'],
                monthNamesShort: ['Ene','Feb','Mar','Abr','May','Jun',
                'Jul','Ago','Sep','Oct','Nov','Dic'],
                dayNames: ['Domingo','Lunes','Martes','Mi&eacute;rcoles','Jueves','Viernes','S&aacute;bado'],
                dayNamesShort: ['Dom','Lun','Mar','Mi&eacute;','Juv','Vie','S&aacute;b'],
                dayNamesMin: ['Do','Lu','Ma','Mi','Ju','Vi','S&aacute;'],
                weekHeader: 'Sm',
                dateFormat: 'dd/mm/yy',
                firstDay: 1,
                isRTL: false,
                showMonthAfterYear: false,
                yearSuffix: ''};
        $.datepicker.setDefaults($.datepicker.regional['es']);
});