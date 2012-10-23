var work_container_scroll_pos = 0;

$(document).ready(function() {

	$.stellar();

	// Site Navigation links, smooth scrolling
	$('#site-navigation li a').each(function() {
		$(this).bind('click',function(event){
	        var anchor = $(this);

	        $('html, body').stop().animate({
	            scrollTop: $(anchor.attr('href')).offset().top
	        }, 350);
	        event.preventDefault();
	    });
    });			

	$('#control-left').click(function() {
		site_box_scroll('left');
	});
	$('#control-right').click(function() {
		site_box_scroll('right');
	});

	/*
	$('#work-container .wrapper-outer').scroll(function(event) {
		if ($(this).scrollLeft() > work_container_scroll_pos) { site_box_scroll('right'); }
		else { site_box_scroll('left'); }

		work_container_scroll_pos = $(this).scrollLeft();

		event.preventDefault();
//		site_box_scroll('right');
	});
	*/

	$('#work-container .site-box').each(function() {
		var boxWidth = $('#work-container').width();

		if ( ! $(this).hasClass('active')) {
			$(this).css('left', ((boxWidth + 20) + 'px'));
		};

	});

});

function site_box_scroll(direction) {
	var count = $('#work-container .site-box').length;
	var boxWidth = $('#work-container').width() + 20;
	var duration = 500;
	var current = $('#work-container .active').attr('id').split('-');
	current = current[1];

	if (direction == 'left') {
		var next = Number(current) - Number(1);
		if (current == 1) { return; }
	}
	if (direction == 'right') {
		var next = Number(current) + Number(1);
		if (current == count) { return; }
	}

	current = '#box-'+current;
	next = '#box-'+next;

	$(current).animate({
		//left: '+='+boxWidth,
		top: '+=500',
		zIndex: 0,
		opacity: 0
	}, duration, function() {
		$(current).removeClass('active');
		$(current).animate({ top: '-=500', left: '+='+boxWidth }, 10, function() {
			$(current).css({ opacity: 1 });
		});
	});

	$(next).animate({
		left: '-='+boxWidth,
		zIndex: 100,
		opacity: 1
	}, duration, function() {
		$(next).addClass('active');
	});

}
/*
// On your marks, get set...
$(document).ready(function(){
						
	// Cache the Window object
	$window = $(window);

	// Cache the Y offset and the speed of each sprite
	$('[data-type]').each(function() {	
		$(this).data('offsetY', parseInt($(this).attr('data-offsetY')));
		$(this).data('Xposition', $(this).attr('data-Xposition'));
		$(this).data('speed', $(this).attr('data-speed'));
	});
	
	// For each element that has a data-type attribute
	$('section[data-type="background"]').each(function(){
	
	
		// Store some variables based on where we are
		var $self = $(this),
			offsetCoords = $self.offset(),
			topOffset = offsetCoords.top;
		
		// When the window is scrolled...
	    $(window).scroll(function() {
	
			// If this section is in view
			if ( ($window.scrollTop() + $window.height()) > (topOffset) &&
				 ( (topOffset + $self.height()) > $window.scrollTop() ) ) {
	
				// Scroll the background at var speed
				// the yPos is a negative value because we're scrolling it UP!								
				var yPos = -($window.scrollTop() / $self.data('speed')); 
				
				// If this element has a Y offset then add it on
				if ($self.data('offsetY')) {
					yPos += $self.data('offsetY');
				}
				
				// Put together our final background position
				var coords = '50% '+ yPos + 'px';

				// Move the background
				$self.css({ backgroundPosition: coords });
				
				// Check for other sprites in this section	
				$('[data-type="sprite"]', $self).each(function() {
					
					// Cache the sprite
					var $sprite = $(this);
					
					// Use the same calculation to work out how far to scroll the sprite
					var yPos = -($window.scrollTop() / $sprite.data('speed'));					
					var coords = $sprite.data('Xposition') + ' ' + (yPos + $sprite.data('offsetY')) + 'px';
					
					$sprite.css({ backgroundPosition: coords });													
					
				}); // sprites
			
				// Check for any Videos that need scrolling
				$('[data-type="video"]', $self).each(function() {
					
					// Cache the video
					var $video = $(this);
					
					// There's some repetition going on here, so 
					// feel free to tidy this section up. 
					var yPos = -($window.scrollTop() / $video.data('speed'));					
					var coords = (yPos + $video.data('offsetY')) + 'px';
	
					$video.css({ top: coords });													
					
				}); // video	
			
			}; // in view
	
		}); // window scroll
			
	});	// each data-type




}); // document ready
*/