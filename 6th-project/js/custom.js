jQuery(document).ready(function(){
	jQuery(".submit").click(function(){
		alert("admission form fill up successfully")
	});

	//.............. slide.html area.........

	var show = 3;
	var w = jQuery('#slider').width()/show;
	var l =jQuery('.slide').length;
	jQuery('.slide').width(w);
	jQuery('#slide-container').width(w * l);

	function slider(){
		jQuery('.slide:first-child').animate({
			'marginleft': -w
		},'slow',function(){
			jQuery(this).appendTo(jQuery(this).parent()).css({marginleft:0});

		});
	}

	var timer = setInterval(slider,2000);
	jQuery('#slider').hover(function(){
		clearInrval(timer)
	},function(){
		timer= setInterval(slider,2000);
	});


});