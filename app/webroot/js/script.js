$(document).ready(function(){

	$("a#instructions").click(function() {
			console.log('a#instructions');
			loading(); // loading
			setTimeout(function(){ // then show popup, deley in .5 second
				loadPopup(); // function show popup
			}, 500); // .5 second
	return false;
	});

	// Hide the modal dialog when someone clicks outside of it.
	$("#toPopup").bind( "clickoutside", function(event){
	  //$(this).hide();
	  disablePopup();
	});

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
		window.location.href = 'https://operacionxperia.com/momtomom/memorias_embarazo/profiles/cover';
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

	$("li.personalizar").click(function() {
			disablePopup_settings();
			loading(); // loading
			setTimeout(function(){ // then show popup, deley in .5 second
				loadPopup_personalizar(); // function show popup
			}, 500); // .5 second
	return false;
	});

	// Hide the modal dialog when someone clicks outside of it.
	$("#settings_popup").bind( "clickoutside", function(event){
	  //$(this).hide();
	  disablePopup_settings();
	});

	$("#personalizar_popup").bind( "clickoutside", function(event){
	  //$(this).hide();
	  disablePopup_personalizar();
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
		window.location.href = 'https://operacionxperia.com/momtomom/memorias_embarazo/profiles/cover';
	});

	$('.tema1').click(function(){
		var url = "//operacionxperia.com/momtomom/memorias_embarazo/profiles/changeTheme/"+UID+"/1";
		$.getJSON(url, function(data, textStatus) {
			console.log(data+"  - "+textStatus);
			if(textStatus == 'success' && data == 'Success!'){
				window.location.href=window.location.href;
			} else {
				alert('Ha ocurrido un error! Intenta darle refresh a la página');
			}
		});
	});
	$('.tema2').click(function(){
		var url = "//operacionxperia.com/momtomom/memorias_embarazo/profiles/changeTheme/"+UID+"/2";
		$.getJSON(url, function(data, textStatus) {
			console.log(data+"  - "+textStatus);
			if(textStatus == 'success' && data == 'Success!'){
				window.location.href=window.location.href;
			} else {
				alert('Ha ocurrido un error! Intenta darle refresh a la página');
			}
		});
	});
	$('.tema3').click(function(){
		var url = "//operacionxperia.com/momtomom/memorias_embarazo/profiles/changeTheme/"+UID+"/3";
		$.getJSON(url, function(data, textStatus) {
			console.log(data+"  - "+textStatus);
			if(textStatus == 'success' && data == 'Success!'){
				window.location.href=window.location.href;
			} else {
				alert('Ha ocurrido un error! Intenta darle refresh a la página');
				
			}
		});
	});
	$('.tema4').click(function(){
		var url = "//operacionxperia.com/momtomom/memorias_embarazo/profiles/changeTheme/"+UID+"/4";
		$.getJSON(url, function(data, textStatus) {
			console.log(data+"  - "+textStatus);
			if(textStatus == 'success' && data == 'Success!'){
				window.location.href=window.location.href;
			} else {
				alert('Ha ocurrido un error! Intenta darle refresh a la página');
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
		}
	}

	function disablePopup() {
		if(popupStatus == 1) { // if value is 1, close popup
			$("#toPopup").fadeOut("normal");
			$("#backgroundPopup").fadeOut("normal");
			popupStatus = 0;  // and set value to 0
		}
	}
	/************** end: functions. **************/

	/************** start: functions for popup settings **************/
	var popupStatus_sets = 0; // set value

	function loadPopup_settings() {
		if(popupStatus_sets == 0) { // if value is 0, show popup
			closeloading(); // fadeout loading
			$("#settings_popup").fadeIn(0500); // fadein popup div
			$("#backgroundPopup").css("opacity", "0.7"); // css opacity, supports IE7, IE8
			$("#backgroundPopup").fadeIn(0001);
			popupStatus_sets = 1; // and set value to 1
		}
	}

	function disablePopup_settings() {
		if(popupStatus_sets == 1) { // if value is 1, close popup
			$("#settings_popup").fadeOut("normal");
			$("#backgroundPopup").fadeOut("normal");
			popupStatus_sets = 0;  // and set value to 0
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
		}
	}

	function disablePopup_personalizar() {
		console.log('popupStatus_pers '+popupStatus_pers);
		if(popupStatus_pers == 1) { // if value is 1, close popup
			$("#personalizar_popup").fadeOut("normal");
			$("#backgroundPopup").fadeOut("normal");
			popupStatus_pers = 0;  // and set value to 0
		}
	}
	/************** end: functions. **************/

	