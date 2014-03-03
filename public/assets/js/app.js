var App = function() {
		
    return {
		
		init : function()
		{

			jQuery('.carousel').carousel({
				interval: 15000,
				pause: 'hover'
			});

			jQuery('.top').click(function(){
				jQuery('html,body').animate({scrollTop: jQuery('body').offset().top}, 'slow');
			}); //move to top navigator

			jQuery('.tooltips').tooltip();	
			jQuery('.popovers').popover();

			jQuery(".fancybox-button").fancybox({
				prevEffect		: 'none',
				nextEffect		: 'none',
				closeBtn		: true,
				helpers		: {
					title	: { type : 'inside' }
				}
			});
			
			//fix html5 placeholder attribute for ie7 & ie8
			if (jQuery.browser.msie && jQuery.browser.version.substr(0,1) < 9) { // ie7&ie8
				jQuery('input[placeholder], textarea[placeholder]').each(function(){          
			        var input = jQuery(this);        
			        
			        jQuery(input).val(input.attr('placeholder'));
			                
			        jQuery(input).focus(function(){
			             if (input.val() == input.attr('placeholder')) {
			                 input.val('');
			             }
			        });
			        
			        jQuery(input).blur(function(){
			            if (input.val() == '' || input.val() == input.attr('placeholder')) {
			                input.val(input.attr('placeholder'));
			            }
			        });
			    });
			}
		
		}
    	
    };
     
}();