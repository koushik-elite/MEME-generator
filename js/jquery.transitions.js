/**
 * jquery.transitions.js
 * CSS3 Animations for Image Transitions
 * http://www.codrops.com
 *
 * Copyright 2011, Pedro Botelho / Codrops
 * Free to use under the MIT license.
 *
 * Date: Mon Dec 19 2011
 */
$(function() {
	
	var TransitionEffects	= (function() {

		var $teWrapper		= $('#te-wrapper'),
			$teCover		= $teWrapper.find('div.te-cover'),
			$teImages		= $teWrapper.find('div.te-images > img'),
			imagesCount		= $teImages.length,
			currentImg		= 0,
			$navNext		= $('#te-next'),
			$type			= $('#type'),
			type			= $type.val(),
			$teTransition	= $teWrapper.find('.te-transition'),
			
			animated		= false,
			// check for support
			
			init			= function() {
				
				$teTransition.addClass( type );
				$navNext.on( 'click', function( event ) {
					
					if(  animated )
						return false;
						
					animated = true;	
					showNext();
					return false;
					
				});
				
				
				
					$teWrapper.on({
						'webkitAnimationStart' : function( event ) {
							
						},
						'webkitAnimationEnd'   : function( event ) {
						
							$teCover.removeClass('te-hide');							
							$teTransition.removeClass('te-show');
							animated = false;
							$type.prop( 'disabled', false );
							
						}
					});
				
				
				
			
			},
			showNext = function() {
				
				
				
					$teTransition.addClass('te-show');
					$teCover.addClass('te-hide');			
				
				
				
				updateImages();
				
			},
			updateImages = function() {
				
				var $back 	= $teTransition.find('div.te-back'),
					$front	= $teTransition.find('div.te-front');
				
				( currentImg === imagesCount - 1 ) ? 
					( last_img = imagesCount - 1, currentImg = 0 ) : 
					( last_img = currentImg, ++currentImg );
				
				var $last_img 	= $teImages.eq( last_img ),
					$currentImg	= $teImages.eq( currentImg );
				
				$front.empty().append('<img src="' + $last_img.attr('src') + '">');
				$back.empty().append('<img src="' + $currentImg.attr('src') + '">');
				
				$teCover.find('img').attr( 'src', $currentImg.attr('src') );
			
			};
			
		return { init : init };

	})();
	
	TransitionEffects.init();
	
});