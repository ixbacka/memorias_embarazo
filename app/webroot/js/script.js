$(document).ready(function(){

	$("a#instructions").click(function() {
			console.log('a#instructions');
			loading(); // loading
			setTimeout(function(){ // then show popup, deley in .5 second
				loadPopup(); // function show popup
			}, 500); // .5 second
	return false;
	});

	$( "#mayiadd-moments" ).attr( "oncontextmenu", "return false;" );

	/* event for close the popup */
	$("div.close").hover(
					function() {
						$('span.ecs_tooltip').show();
					},
					function () {
    					$('span.ecs_tooltip').hide();
  					}
				);

	$("div.close").click(function() {
		disablePopup();  // function close pop up
		disablePopup_settings();
	});

	$(this).keyup(function(event) {
		if (event.which == 27) { // 27 is 'Ecs' in the keyboard
			disablePopup();  // function close pop up
		}
	});

	$('a.livebox').click(function() {
		alert('Hello World!');
	return false;
	});

	$("li.home").click(function(){
		window.location.href = 'https://momtomom.mx/apps/memorias_embarazo/profiles/cover';
	});

	////////////////////////////////////////////////////////////////////////////////

	$("a#themsettings").click(function() {
			console.log('a#themsettings');
			loading(); // loading
			setTimeout(function(){ // then show popup, deley in .5 second
				loadPopup_settings(); // function show popup
			}, 500); // .5 second
	return false;
	});

	$("a#my-moments").click(function() {
			console.log('a#my-moments');
			loading(); // loading
			setTimeout(function(){ // then show popup, deley in .5 second
				loadPopup_moments(); // function show popup
			}, 500); // .5 second
	return false;
	});

	$("li.personalizar").click(function() {
			disablePopup_settings();
			loading(); // loading
			setTimeout(function(){ // then show popup, deley in .5 second
				loadPopup_personalizar(); // function show popup
			}, 500); // .5 second
	return false;
	});

	

	/* event for close the popup */
	$("div.close_sets").hover(
					function() {
						$('span.ecs_tooltip').show();
					},
					function () {
    					$('span.ecs_tooltip').hide();
  					}
				);

	$("div.close_sets").click(function() {
		disablePopup_settings();  // function close pop up
	});

	///////////////////////////////////////////////////////////////////////////////////////

	$("li.home").click(function(){
		window.location.href = 'https://momtomom.mx/apps/memorias_embarazo/profiles/cover';
	});

	$('.tema1').click(function(){
		var url = "//momtomom.mx/apps/memorias_embarazo/profiles/changeTheme/"+UID+"/1";
		$.getJSON(url, function(data, textStatus) {
			console.log(data+"  - "+textStatus);
			if(textStatus == 'success' && data == 'Success!'){
				//window.location.href=window.location.href;
				//window.location.reload();
				window.parent.location.href='//www.facebook.com/pages/Nativo-Desarrollo/514166771955164?id=514166771955164&sk=app_163480813810636';
			} else {
				alert('Ha ocurrido un error! Intenta darle refresh a la página');
			}
		});
	});
	$('.tema2').click(function(){
		var url = "//momtomom.mx/apps/memorias_embarazo/profiles/changeTheme/"+UID+"/2";
		$.getJSON(url, function(data, textStatus) {
			console.log(data+"  - "+textStatus);
			if(textStatus == 'success' && data == 'Success!'){
				//window.location.reload();
				window.parent.location.href='//www.facebook.com/pages/Nativo-Desarrollo/514166771955164?id=514166771955164&sk=app_163480813810636';
			} else {
				alert('Ha ocurrido un error! Intenta darle refresh a la página');
			}
		});
	});
	$('.tema3').click(function(){
		var url = "//momtomom.mx/apps/memorias_embarazo/profiles/changeTheme/"+UID+"/3";
		$.getJSON(url, function(data, textStatus) {
			console.log(data+"  - "+textStatus);
			if(textStatus == 'success' && data == 'Success!'){
				window.parent.location.href='//www.facebook.com/pages/Nativo-Desarrollo/514166771955164?id=514166771955164&sk=app_163480813810636';
			} else {
				alert('Ha ocurrido un error! Intenta darle refresh a la página');
				
			}
		});
	});
	$('.tema4').click(function(){
		var url = "//momtomom.mx/apps/memorias_embarazo/profiles/changeTheme/"+UID+"/4";
		$.getJSON(url, function(data, textStatus) {
			console.log(data+"  - "+textStatus);
			if(textStatus == 'success' && data == 'Success!'){
				window.parent.location.href='//www.facebook.com/pages/Nativo-Desarrollo/514166771955164?id=514166771955164&sk=app_163480813810636';
			} else {
				alert('Ha ocurrido un error! Intenta darle refresh a la página');
			}
		});
	});


	$('.font1').click(function(){
		console.log('entrando en font 1 ....');
		var url = "//momtomom.mx/apps/memorias_embarazo/profiles/changeFont/"+UID+"/1";
		$.getJSON(url, function(data, textStatus) {
			console.log(data+"  - "+textStatus);
			if(textStatus == 'success' && data == 'Success!'){
				window.parent.location.href='//www.facebook.com/pages/Nativo-Desarrollo/514166771955164?id=514166771955164&sk=app_163480813810636';
			} else {
				alert('Ha ocurrido un error! Intenta darle refresh a la página');
			}
		});
	});

	$('.font2').click(function(){
		var url = "//momtomom.mx/apps/memorias_embarazo/profiles/changeFont/"+UID+"/2";
		$.getJSON(url, function(data, textStatus) {
			console.log(data+"  - "+textStatus);
			if(textStatus == 'success' && data == 'Success!'){
				window.parent.location.href='//www.facebook.com/pages/Nativo-Desarrollo/514166771955164?id=514166771955164&sk=app_163480813810636';
			} else {
				alert('Ha ocurrido un error! Intenta darle refresh a la página');
			}
		});
	});

	$('.font3').click(function(){
		var url = "//momtomom.mx/apps/memorias_embarazo/profiles/changeFont/"+UID+"/3";
		$.getJSON(url, function(data, textStatus) {
			console.log(data+"  - "+textStatus);
			if(textStatus == 'success' && data == 'Success!'){
				window.parent.location.href='//www.facebook.com/pages/Nativo-Desarrollo/514166771955164?id=514166771955164&sk=app_163480813810636';
			} else {
				alert('Ha ocurrido un error! Intenta darle refresh a la página');
			}
		});
	});

	$('.font4').click(function(){
		var url = "//momtomom.mx/apps/memorias_embarazo/profiles/changeFont/"+UID+"/4";
		$.getJSON(url, function(data, textStatus) {
			console.log(data+"  - "+textStatus);
			if(textStatus == 'success' && data == 'Success!'){
				window.parent.location.href='//www.facebook.com/pages/Nativo-Desarrollo/514166771955164?id=514166771955164&sk=app_163480813810636';
			} else {
				alert('Ha ocurrido un error! Intenta darle refresh a la página');
			}
		});
	});



	$('#share-this').click(function(e){
		e.preventDefault();
			//var url = '//www.nativo-digital.mx/clientes/testing/products/postLook'; 
			var loginBox = $(this).attr('href');

			var url = '//momtomom.mx/apps/memorias_embarazo/profiles/midiario/'+UID; 
			//
			 console.log(' mm ... ' + url);
			$.getJSON(url, function(data, textStatus)
			{
				 console.log(' ohoho ! ~ STATUS: '+textStatus);

				if (data.mensaje == 'successfully'){
					max++;
					linkpic = data.imagen;
					imagename = data.nombre;
					laid = data.usuarioid;
					if(max == 1){
					console.log(' asd '+linkpic);
					$('#dialog-box').addClass('share-pop').append(
						'<a href="#" class="close">'+
						'<img src="../img/tacha.png" class="btn_close" onClick="cerrarventana()" title="Close Window" alt="Close" /></a>'+
  	        '<img class="share-img" src="'+linkpic+'" width="190px"/>'+              				        
            '<fieldset class="textbox">'+
            '<img class="pop-logo" src="../img/logo_pop.png">' +
            '<label class="username">'+
            '<span>Comparte con tus amigas y familia tus incre&iacute;bles Memorias de Embarazo</span>'+
            '<input id="msg" name="msg" type="text" placeholder="Mis memorias de embarazo">'+
            '</label>'+
            '<input type="hidden" id="ellinkd" value="'+imagename+'" ><br>'+
            '<input type="hidden" id="laid" value="'+laid+'" >'+
            '<button class="botochon" onclick="compartirmidiario()" type="button">Compartir</button>'+
            '</fieldset>'
            );
					}
					$(loginBox).fadeIn(300);
					//Set the center alignment padding + border see css style
				    var popMargTop = 320; 
				    var popMargLeft = 145; 
				    
				    $(loginBox).css({ 
				        'margin-top' : -popMargTop,
				        'margin-left' : -popMargLeft
				    });
				    
				    // Add the mask to body
				    $('body').append('<div id="mask"></div>');
				    $('#mask').fadeIn(300);
					
					
				} else {
					alert('Ha ocurrido un error al tratar de publicar tu wishlist, inténtalo más tarde.');
				}		
			});
		});	

		$('#mayiadd-moments').click(function(e){
			e.preventDefault();
			var trim = $(this).attr('href');

			var url = '//momtomom.mx/apps/memorias_embarazo/moment_pages/howmanymoments/'+UID; 
			//
			 console.log(' mm ... ' + url);
			$.getJSON(url, function(data, textStatus)
			{
				console.log(' ohoho ! ~ STATUS: '+textStatus);

				if (data.mensaje == 'successfully'){
					window.location.href= '//momtomom.mx/apps/memorias_embarazo/moment_pages/add/0/'+trim;
				} else {
					$('#dialog-box-momento').append(
						'<p> No puedes agregar otro momento! </p>'
					);

					$('#dialog-box-momento').fadeIn(300);
					//Set the center alignment padding + border see css style
				    var popMargTop = 320; 
				    var popMargLeft = 145; 
				    
				    $('#dialog-box-momento').css({ 
				        'margin-top' : -popMargTop,
				        'margin-left' : -popMargLeft
				    });
				    
				    // Add the mask to body
				    $('body').append('<div id="mask"></div>');
				    $('#mask').fadeIn(300);

				    $('#mask , #dialog-box-momento').fadeOut(8000 , function() {
						$('#mask').remove();  
					}); 

				}
			});
		});

		$('#sharepopo').click(function(e){
			e.preventDefault();
			console.log('popopopopopop');
			var loginBox = $(this).attr('href');

			var url = '//momtomom.mx/apps/memorias_embarazo/profiles/midiario/'+UID; 
			//
			 console.log(' mm ... ' + url);
			$.getJSON(url, function(data, textStatus)
			{
				 console.log(' ohoho ! ~ STATUS: '+textStatus);

				if (data.mensaje == 'successfully'){
					max++;
					linkpic = data.imagen;
					imagename = data.nombre;
					laid = data.usuarioid;
					if(max == 1){
					console.log(' asd '+linkpic);
					$('#dialog-box').addClass('share-pop').append(
				        '<a href="#" class="close">'+
						'<img src="../img/tacha.png" class="btn_close" onClick="cerrarventana()" title="Close Window" alt="Close" /></a>'+
			  	        '<img class="share-img" src="'+linkpic+'" width="190px"/>'+              				        
			            '<fieldset class="textbox">'+
			            '<img class="pop-logo" src="../img/logo_pop.png">' +
			            '<label class="username">'+
			            '<span>Comparte con tus amigas y familia tus incre&iacute;bles Memorias de Embarazo</span>'+
			            '<input id="msg" name="msg" type="text" placeholder="Mis memorias de embarazo">'+
			            '</label>'+
			            '<input type="hidden" id="ellinkd" value="'+imagename+'" ><br>'+
			            '<input type="hidden" id="laid" value="'+laid+'" >'+
			            '<button class="botochon" onclick="compartirmidiario()" type="button">Compartir</button>'+
			            '</fieldset>'
				        );

						
					}
					$(loginBox).fadeIn(300);
					//Set the center alignment padding + border see css style
				    var popMargTop = 320; 
				    var popMargLeft = 145; 
				    
				    $(loginBox).css({ 
				        'margin-top' : -popMargTop,
				        'margin-left' : -popMargLeft
				    });
				    
				    // Add the mask to body
				    $('body').append('<div id="mask"></div>');
				    $('#mask').fadeIn(300);
					
					
				} else {
					alert('Ha ocurrido un error al tratar de publicar tu wishlist, inténtalo más tarde.');
				}		
			});
		});

	



});// jQuery End

/************** start: functions for popup instructions **************/
	function loading() {
		$("div.loader").show();
	}
	function closeloading() {
		$("div.loader").fadeOut('normal');
	}

	var popupStatus = 0; // set value

	function loadPopup() {
		if(popupStatus == 0) { // if value is 0, show popup
			closeloading(); // fadeout loading
			$("#toPopup").fadeIn(0500); // fadein popup div
			$("#backgroundPopup").css("opacity", "0.7"); // css opacity, supports IE7, IE8
			$("#backgroundPopup").fadeIn(0001);
			popupStatus = 1; // and set value to 1
			// Hide the modal dialog when someone clicks outside of it.
			$("#toPopup").bind( "clickoutside", function(event){
			  //$(this).hide();
			  disablePopup();
			});
		}
	}

	function disablePopup() {
		if(popupStatus == 1) { // if value is 1, close popup
			$("#toPopup").fadeOut("normal");
			$("#backgroundPopup").fadeOut("normal");
			popupStatus = 0;  // and set value to 0
			$("#toPopup").unbind( "clickoutside");
		}
	}
	/************** end: functions. **************/

	/************** start: functions for popup settings **************/
	var popupStatus_sets = 0; // set value
	var popupStatus_mms = 0; // set value

	function loadPopup_settings() {
		if(popupStatus_sets == 0) { // if value is 0, show popup
			closeloading(); // fadeout loading
			$("#settings_popup").fadeIn(0500); // fadein popup div
			$("#backgroundPopup").css("opacity", "0.7"); // css opacity, supports IE7, IE8
			$("#backgroundPopup").fadeIn(0001);
			popupStatus_sets = 1; // and set value to 1
			// Hide the modal dialog when someone clicks outside of it.
			$("#settings_popup").bind( "clickoutside", function(event){
			  //$(this).hide();
			  disablePopup_settings();
			});
		}
	}

	function loadPopup_moments() {
		if(popupStatus_mms == 0) { // if value is 0, show popup
			closeloading(); // fadeout loading
			$("#moments_popup").fadeIn(0500); // fadein popup div
			$("#backgroundPopup").css("opacity", "0.7"); // css opacity, supports IE7, IE8
			$("#backgroundPopup").fadeIn(0001);
			popupStatus_mms = 1; // and set value to 1
			// Hide the modal dialog when someone clicks outside of it.
			$("#moments_popup").bind( "clickoutside", function(event){
			  //$(this).hide();
			  disablePopup_moments();
			});
		}
	}

	function disablePopup_settings() {
		if(popupStatus_sets == 1) { // if value is 1, close popup
			$("#settings_popup").fadeOut("normal");
			$("#backgroundPopup").fadeOut("normal");
			popupStatus_sets = 0;  // and set value to 0
			$("#settings_popup").unbind( "clickoutside");
		}
	}

	function disablePopup_moments() {
		if(popupStatus_mms == 1) { // if value is 1, close popup
			$("#moments_popup").fadeOut("normal");
			$("#backgroundPopup").fadeOut("normal");
			popupStatus_mms = 0;  // and set value to 0
			$("#moments_popup").unbind( "clickoutside");
		}
	}
	
	var popupStatus_pers = 0; // set value
	function loadPopup_personalizar() {
		if(popupStatus_pers == 0) { // if value is 0, show popup
			closeloading(); // fadeout loading
			$("#personalizar_popup").fadeIn(0500); // fadein popup div
			$("#backgroundPopup").css("opacity", "0.7"); // css opacity, supports IE7, IE8
			$("#backgroundPopup").fadeIn(0001);
			popupStatus_pers = 1; // and set value to 1
			console.log('popupStatus_pers '+popupStatus_pers);

			$("#personalizar_popup").bind( "clickoutside", function(event){
			  //$(this).hide();
			  disablePopup_personalizar();
			});
		}


	}

	function disablePopup_personalizar() {
		console.log('popupStatus_pers '+popupStatus_pers);
		if(popupStatus_pers == 1) { // if value is 1, close popup
			$("#personalizar_popup").fadeOut("normal");
			$("#backgroundPopup").fadeOut("normal");
			popupStatus_pers = 0;  // and set value to 0

			$("#personalizar_popup").unbind( "clickoutside");
		}
	}
	/************** end: functions. **************/
	var max = 0;
	function compartirmidiario(){
		msg = $('#msg').val();
		picurl = $('#ellinkd').val();
		laid= $('#laid').val();

		if(msg == ''){
			msg="Mi diario de Embarazo"
		} else {

			if (! /^[a-zA-Z0-9 ]+$/.test(msg)) {
			    // Validation failed
			      alert("Solo números o letras por favor.");

			} else {
				var url = '//momtomom.mx/apps/memorias_embarazo/profiles/postDiary/'+msg+'/'+picurl+'/'+laid+'/'+UID; 
				//
				console.log(' mm ... ' + url);
				$.getJSON(url, function(data, textStatus)
				{
					console.log(' ohoho ! ~ STATUS: '+textStatus);
					// //var neu_data = JSON.parse(JSON.stringify(data));
					// console.log(JSON.stringify(data));
					// console.log(' ohoho ! ~ '+data+'    '+textStatus);

					if (data.mensaje == 'successfully'){
						linkpic = data.imagen;
						console.log(linkpic);
						 $('#mask , .dialog-popup').fadeOut(300 , function() {
						    $('#mask').remove();  
						}); 
						
					} else {
						alert('Ha ocurrido un error al tratar de publicar tu wishlist, inténtalo más tarde.');
					}		
				});
			}
			
		}
		
	}

function cerrarventana(){
		$('#mask , .dialog-popup').fadeOut(300 , function() {
				    $('#mask').remove();  
				}); 
	}

function fakeClick(event, anchorObj) {
  if (anchorObj.click) {
    anchorObj.click()
  } else if(document.createEvent) {
    if(event.target !== anchorObj) {
      var evt = document.createEvent("MouseEvents"); 
      evt.initMouseEvent("click", true, true, window, 
          0, 0, 0, 0, 0, false, false, false, false, 0, null); 
      var allowDefault = anchorObj.dispatchEvent(evt);
      // you can check allowDefault for false to see if
      // any handler called evt.preventDefault().
      // Firefox will *not* redirect to anchorObj.href
      // for you. However every other browser will.
    }
  }
}
