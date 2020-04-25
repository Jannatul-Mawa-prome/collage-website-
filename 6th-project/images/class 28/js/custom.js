

jQuery(document).ready(function(){
	// jQuery(".box").draggable({
	// 	'axis' : 'x',
	// 	'cursor':'pointer'
	// });

	// jQuery('.big-box').droppable({
	// 	'drop' : function(){
	// 		alert("work is done");
	// }});


// 	jQuery('.resizeable').resizable( {'animate': false,
// 									'maxHeight': 500,
// 									'minHeight': 200,
// 									'maxWidth': 500,
// 									'minWidth': 200
// });

	// jQuery('.selectable').selectable();

	// jQuery('#id1 , #id2').sortable({'connectWith':'.selectable'});
	// jQuery('#accordion').accordion({'collapsible':true});

	   //  function refreshSwatch() {
    //   var red = jQuery( ".red" ).slider( "value" ),
    //     green = jQuery( ".green" ).slider( "value" ),
    //     blue = jQuery( ".blue" ).slider( "value" ),
    //     hex = hexFromRGB( red, green, blue );
    //   jQuery( ".box1" ).css( "background-color", "#" + hex );
    // // }
 
    // jQuery( ".red, .green, .blue" ).slider({
    //   orientation: "horizontal",
    //   range: "min",
    //   max: 255,
    //   slide: refreshSwatch,
    //   change: refreshSwatch
    // });


    function changeHover(){
    	var red=jQuery('.red').slider('value');
    	var green=jQuery('.green').slider('value');
    	var blue=jQuery('.blue').slider('value');
    	var rgb = 'rgb(' + red + ','+ green + ',' + blue + ' )';

    	jQuery('.box2').text(rgb);
    	jQuery('.box2').css({'background-color': rgb });
    }

    jQuery('.slider').slider({
    	'max':255,
    	'change':changeHover,
    	'slide': changeHover
    });

 jQuery(".red" ).slider({ 'value':10,
'range': 'max'});
    jQuery( ".green" ).slider({ 'value':50,
'range': 'max'});
    jQuery( ".blue" ).slider({ 'value':80,
'range': 'max','animate':true});



 jQuery('.slider2').slider({
'range':true,
'min':0,
'max':100,
'values': [30,70],
'slide':function(event,ui){
	jQuery('.range').text('$'+ ui.values[0] + ' - '+ '$'+ ui.values[1])
}
});
 	jQuery('.range').text('$'+30 + ' - ' + '$'+70);

});

