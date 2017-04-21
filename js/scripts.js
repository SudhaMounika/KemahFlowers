$(document).ready(function(){
	
	var myAudio = document.getElementById("sound");
	var sympathyAudio = document.getElementById("sympathy_sound");
	myAudio.pause();
	sympathyAudio.pause();
	
	$('.navbar-default li a').click(function(){
		if($(window).width()<768)
			$('.navbar-default .navbar-toggle').trigger("click");
		$('.navbar-default li').removeClass('active');
		$(this).parent().addClass('active');
		$('.nav-container').hide();
		$('#'+$(this).attr('class')).show();
		myAudio.play();
		sympathyAudio.pause();
		if($(this).attr('class')=='gallery')
			$('#grid').next('.mediaBoxes-loadMore').click();
		else if($(this).attr('class')=='wedding')
			$('#grid2').next('.mediaBoxes-loadMore').click();
		else if($(this).attr('class')=='sympathy'){
			$('#grid3').next('.mediaBoxes-loadMore').click();
			myAudio.pause();
			sympathyAudio.play();
		}
	});
	
	
	
	/*if (myAudio.paused) {
		myAudio.play();
	} else {
		myAudio.pause();
	}*/

	$('.get-a-quote,.appointment').click(function(e){
		e.preventDefault();
		$('.navbar-default li').removeClass('active');
		$('.navbar-default li a.contact').parent().addClass('active');
		$('.nav-container').hide();
		$('#contact').show();
	});
	
	$(window).load(function(){
		var active_link=window.location.href.toString();
		if(active_link.indexOf('#')==-1){
			$('.navbar-default li a.home').parent().addClass('active');
			$('.nav-container').hide();
			$('#home').show();
			myAudio.play();
			sympathyAudio.pause();
		}
		else{
			active_link=active_link.substring(active_link.indexOf('#')+1,active_link.length);
			$('.navbar-default li').removeClass('active');
			$('.navbar-default li a.'+active_link).parent().addClass('active');
			$('.nav-container').hide();
			$('#'+active_link).show();
			if(active_link=="sympathy")
				sympathyAudio.play();
			else
				myAudio.play();
		}
	});
	
	$('.testimonial-images a').on('click',function(e){
		e.preventDefault();
		var slide_count=$(this).parent().index()+1;
		$('#testimonials .slider-wrapper img').hide();	
		$('#testimonials .slider-wrapper img:nth-child('+slide_count+')').fadeIn();	
	});
/*	$('a.modal-link').click(function(){
		$('a.modal-link').removeClass('active');
		$('.left-arrow,.right-arrow').show();
		$(this).addClass('active');
		$('.modal-body').html($(this).parents('div').html());
		$(this).removeClass('active');
		if($('.first-link').hasClass('active')){
			$('.left-arrow').hide();
		}
		if($('.last-link').hasClass('active')){
			$('.right-arrow').hide();
		}
		//$('.modal-img').attr('src',$(this).find('img').attr('src'));
	});
*/
	$('a.modal-link').click(function(){
		$('.modal-body a.modal-link').removeClass('active');
		$('.modal-body a.modal-link').hide();
		$('.left-arrow').hide();
		$('.right-arrow').show();
		$('.modal-body a.modal-link.first-link').addClass('active');
		$('.modal-body a.modal-link.active').show();
	});
	$('.left-arrow a').click(function(e){
		e.preventDefault();
		$('.left-arrow,.right-arrow').show();	
		$('.modal-body a.modal-link.active').hide();
		$('.modal-body a.modal-link.active').prev().show();
		$('.modal-body a.modal-link.active').prev().addClass('active');
		$('.modal-body a.modal-link.active').next('.active').removeClass('active');
		if($('.first-link').hasClass('active')){
			$('.left-arrow').hide();
		}
	});
	$('.right-arrow a').click(function(e){
		e.preventDefault();
		$('.left-arrow,.right-arrow').show();
		$('.modal-body a.modal-link.active').hide();
		$('.modal-body a.modal-link.active').next().show();
		$('.modal-body a.modal-link.active').next().addClass('active');
		$('.modal-body a.modal-link.active').prev('.active').removeClass('active');
		if($('.last-link').hasClass('active')){
			$('.right-arrow').hide();
		}
	});
	
	
	 $(document).keydown(function(e) {        
		switch(e.which) {
        case 37: // left
			if($('.first-link').hasClass('active'))
				break;
			else
				$( ".left-arrow a" ).trigger("click");
        break;

        case 39: // right
			if($('.last-link').hasClass('active'))
				break;
			else
				$( ".right-arrow a" ).trigger("click");
        break;

		case 27: // right
		$( ".btn-default" ).trigger("click");
        break;
		
        default: return; // exit this handler for other keys
		}
		e.preventDefault(); // prevent the default action (scroll / move caret)
	});
	
	$(window).load(function() {
		$('#slider,#slider1,#slider2').nivoSlider({
			effect: 'fade',
			animSpeed: 500,
			pauseTime: 2000,
			startSlide: 0,
			directionNav: true,
			controlNav: true,
			controlNavThumbs: false,
			pauseOnHover: true,
			manualAdvance: false,
			prevText: '<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>',
			nextText: '<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>',
			randomStart: false,
			beforeChange: function(){},
			afterChange: function(){},
			slideshowEnd: function(){},
			lastSlide: function(){},
			afterLoad: function(){}
		});
	});
	
	//INITIALIZE THE PLUGIN
	$('#grid').mediaBoxes({
		imagesToLoadStart: 16,
		imagesToLoad: 10,
	});

	//INITIALIZE THE PLUGIN
	$('#grid2').mediaBoxes({
		theme : 'theme2',
		captionType: 'grid-fade',
	});

	//INITIALIZE THE PLUGIN
	$('#grid3').mediaBoxes({
		theme : 'theme2',
		captionType: 'grid-fade',
	});
	
	//INITIALIZE THE PLUGIN
	$('#grid4').mediaBoxes({
		captionType: 'classic',
	});
	
	//INITIALIZE THE PLUGIN
	$('#grid5').mediaBoxes({
		captionType: 'classic',
	});
	
	//INITIALIZE THE PLUGIN
	$('#grid6').mediaBoxes({
		captionType: 'classic',
	});

	$.validator.setDefaults();
		
	$( "#registration-form" ).validate( {
	rules: {
		firstName: "required",
		phoneNumber: "required",
		email: "required",
		subject: "required",
		message: "required",
		firstName: {
			required: true,
			minlength: 6
		},
		phoneNumber: {
			required: true,
			minlength: 10
		},
		email: {
			required: true,
			email: true
		},
		subject: {
			required: true,
			minlength: 5,
		},
		message: {
			required: true,
			minlength: 2,
		}
	},
	messages: {
		firstName: "Please enter your Name",
		phoneNumber: {
			required: "Please enter your Phone Number",
			minlength: "Please enter valid Phone Number"
		},
		email1: "Please enter a valid email address",
		subject: "Please enter a Subject",
		message: "Please enter a Message"
	},
	errorElement: "em",
	errorPlacement: function ( error, element ) {
		// Add the `help-block` class to the error element
		error.addClass( "help-block" );

		// Add `has-feedback` class to the parent div.form-group
		// in order to add icons to inputs
		element.parents( ".col-sm-9" ).addClass( "has-feedback" );

		if ( element.prop( "type" ) === "checkbox" ) {
			error.insertAfter( element.parent( "label" ) );
		} else {
			error.insertAfter( element );
		}

		// Add the span element, if doesn't exists, and apply the icon classes to it.
		if ( !element.next( "span" )[ 0 ] ) {
			$( "<span class='glyphicon glyphicon-remove form-control-feedback'></span>" ).insertAfter( element );
		}
	},
	success: function ( label, element ) {
		// Add the span element, if doesn't exists, and apply the icon classes to it.
		if ( !$( element ).next( "span" )[ 0 ] ) {
			$( "<span class='glyphicon glyphicon-ok form-control-feedback'></span>" ).insertAfter( $( element ) );
		}
	},
	highlight: function ( element, errorClass, validClass ) {
		$( element ).parents( ".col-sm-9" ).addClass( "has-error" ).removeClass( "has-success" );
		$( element ).next( "span" ).addClass( "glyphicon-remove" ).removeClass( "glyphicon-ok" );
	},
	unhighlight: function ( element, errorClass, validClass ) {
		$( element ).parents( ".col-sm-9" ).addClass( "has-success" ).removeClass( "has-error" );
		$( element ).next( "span" ).addClass( "glyphicon-ok" ).removeClass( "glyphicon-remove" );
	}
} );
	
});