jQuery(document).ready(function($){
    $.fn.parallax = function(options){
    	if(options == undefined) options = {"disable":{"mouse":"false"}};
	//$(this).append('<div class="loading-screen"><div class="preloader"></div></div>');
    	    
	/*function loadScreen(test){
	    	/*
	         * These are the variables used to make sure that there are several options for keeping track of the loading of images.  
	         * There will be an automated loading screen created later down the line, but as for right now there will only be 
	         * the option to create your own loading screen.
	         */
	    	/*var images = new Array();
	    	test.find('img').each(function(){
	        	images.push($(this));
	        });
	    	
	        // this is the number of images on the screen. This will make sure that there are no latency issues when loading the parallaxing scripts.
	        var size = images.length;
		    for(var i = 0; i < size;++i){
		    	images[i].load(function(){
		    		--size;
		    		if(size == 0){
		    			test.find('.loading-screen').remove();
		    			for(var i = 0; i < images.length; ++i){
		    				images[i].css('display','block');
		    			}
		    		}
		    		$('.preloader').css('width', (size*100)+'%');
		    	});
	        }
	    }
	    
	loadScreen($(this));*/
	
        var offsets = $(this).offset();
	var mainholder = $(this);
	var info = new Array();
		
		/* --------------------------------------------------
		 * Function that creates the structure used in the animation function required to create the level of detail
		 * needed to make the decision for animating the parallax layers. There are several options that are redundant
		 * and used to store information based upon several 
		 * -------------------------------------------------- */
		$(this).find('.layer').each(function(){
			// top  - this is the top position used for the parallax animation
			// left - this is the left position used for the parallax animation
			var top = parseInt($(this).css('top').replace('px',''));
			var left = parseInt($(this).css('left').replace('px',''));
			var width = parseInt($(this).css('width').replace('px',''));
			var height = parseInt($(this).css('height').replace('px',''));
			
			// used to catch non-declared variables required for proper parallax animation
			if(top == 'auto' || isNaN(top)){
				top = $(this).offset().top;
			}
			if(left == 'auto' || isNaN(left)){
				left = $(this).offset().left;
			}
			
			/*
			* structure used to store both the object itself, its depth, and x and y variables,
			* this is required for looser declaration and quicker calls without changing the variables
			* on animation.
			*/
			info.push(
				{
				'object': $(this),
				'depth': $(this).css('z-index'),
				'x':parseInt(left),
				'y':parseInt(top),
				'width': parseInt(width),
				'height': parseInt(height),
				'offsetx':$(this).offset().left,
				'offsety':$(this).offset().top,
				'percents': {'x':parseInt($(this).css('left').replace('px',''))/mainholder.width(),
					     'y':parseInt($(this).css('left').replace('px',''))/mainholder.height()}}
			);	
		});
		
		/* ----------------------------------------------------
		Built in function used for looping animation binding to the looping layer this function does not take in any variables and 
		returns none it is used purely to create a looping animation.  There are other variables that are used in the element with 
		the looping class which include the seamless class which is used to create seamless animations for seamless textures.
		-----------------------------------------------------*/
		$.fn.loopingAnimation = function(){
			var holder = $(this);
			// find seamless for searching on seamless animations
			// required to create several seamless animations at once.
			holder.find('.seamless').each(function(){
				var width = 0;
				$(this).find(':nth-child(n)').each(function(){
					width += $(this).width();
					$(this).css('width', $(this).width()).css('height',$(this).height()).css('float','left');
				});
				while(width < ($(this).parent().width()*2)){
					$(this).append($(this).html());
					width += width;
				}
				$(this).css('width',width+300);
				$(this).css('left','0px');
			});
			setInterval(function(){
				looping(holder);
			},1);
		}
		
		/*
		 * Looping function used to loop the item(s) being passed through various options created through several layers, these layers are then 
		 * looped to create a seamless or constant loop.  There are several other looping functions required but as of right now these 
		 * are the variables that will be created to continue the looping of layers and objects.
		 */
		function looping(test){
			test.find('.looping').each(function(){
				if($(this).attr('class').search(/seamless/i) != -1){
					if($(this).css('left').replace('px','') > -$(this).find(':nth-child(1)').width()){
						$(this).css('left',$(this).css('left').replace('px','')-10*($(this).css('z-index')/1000));
					} else {
						
						$(this).css('left','0px');
					}
				} else {
					if($(this).css('left').replace('px','') > -$(this).width()){
						$(this).css('left',$(this).css('left').replace('px','')-10*($(this).css('z-index')/1000));
					} else {
						$(this).css('left',$(this).parent().width());
					}
				}
			});
		}
		
		/*
		 * calling of the looping functions
		 */
		$(this).loopingAnimation();
		
		/*
		 * 
		 */
		$(this).data('info',info);
		
		/*
		 * scrolling function used to check for various options required to make the most optimized scrolling animation with various 
		 * option and variables required to keep the items aligned. This is also used for creating the mouse over information 
		 * when scrolling is required.  There are numerous options outside of this function that will make it easier, but as 
		 * of right now these are jquery functions used. For more information about the
		 * scrolling options, please feel free to goolge javascript scroll.
		 */
		$(this).scrollCheck();
		if(options.disable.mouse == "false"){
	        	$(this).mousemove(function(e){
	            		var offset = {'x':e.clientX,'y':e.clientY};
	            		var xinfo = offset.x-(mainholder.width()/2);
	            		var yinfo = offset.y-(mainholder.height()/2);
			   	$(this).css('cursor','none');
				    if($(this).find('.mouse').html() == undefined){
				    	$(this).append('<div class="mouse"></div>');
				    } else {
				    	$('.mouse').css('left', e.clientX).css('top',e.clientY-$(this).offset().top);
				    }
		            
		            	var orientation = {'ofx':xinfo,'ofy':yinfo};
		
				for(var i = 0; i < $(this).data('info').length; ++i){
					var info = $(this).data('info')[i];
					var speed = info.depth/1000;
					if(info.object.attr('class').search(/looping/i) == -1){
						info.object.animateArea(e,speed,orientation,{'x':info.x,'y':info.y});
					}
				}
			});
		  }
	    }
	    
	    /*
	     * This is the optioned scroll check used to make sure that all objects are aligned as well as making sure that the tops of the layers being
	     * parallaxed are available for calculations.  If there is an issue with the parallaxing there will more than likely be an 
	     * issue with the scrolling option.
	     */
	    $.fn.scrollCheck = function(){
	    	var info = $(this);
	    	$('main').scroll(function(){
	    		var top = $('html body').scrollTop();
	    		for(var i = 0; i < info.data('info').length; ++i){
	    			var data = info.data('info')[i];
	    			var offset = info.offset();
	    			var position = (data.y)+((offset.top-top)*data.depth/1000);
	    			if(data.object.attr('class').search(/zoom/i) != -1){
	    				data.object.find('img').each(function(){
	    					$(this).css('width','100%');
	    				});
	    				data.object.css('width', (-1*offset.top+top+data.width));
	    			}
	    			data.object.css('top', position);
	    		}
	    	})
	    }
	    
	    function animate(obj,info){
	    	
	    }
	    
	    /*
	     * This is the animation function running for all options which include scrolling as well as mouse movement. They are used in 
	     * conjunction with various other options to make sure that the scrolling is aligned with the changes in the scrolling as 
	     * well as the options used in the scrolling information and various other options.
	     */
	    $.fn.animateArea = function(e,speed,or,start){
	    	var mainX = ((or.ofx*speed));
	        var mainY = ((or.ofy*speed));
		
	        var x = start.x+mainX;
	        var y = start.y+mainY;
	        $(this).css('left',x).css('top',y);
	    }
	});
