$(document).ready(function(){
    $.fn.parallax = function(){
        var offsets = $(this).offset();
	var mainholder = $(this);
	var info = new Array();
	$(this).find('.layer').each(function(){
		var top = parseInt($(this).css('top').replace('px',''));
		var left = parseInt($(this).css('left').replace('px',''));
		if(top == 'auto' || isNaN(top)){
			top = $(this).offset().top;
		}
		if(left == 'auto' || isNaN(left)){
			left = $(this).offset().left;
		}
		info.push(
			{
			'object': $(this),
			'depth': $(this).css('z-index'),
			'x':parseInt(left),
			'y':parseInt(top),
			'offsetx':$(this).offset().left,
			'offsety':$(this).offset().top,
			'percents': {'x':parseInt($(this).css('left').replace('px',''))/mainholder.width(),
				     'y':parseInt($(this).css('left').replace('px',''))/mainholder.height()}}
		);	
	});
	
	$.fn.loopingAnimation = function(){
		var holder = $(this);
		setInterval(function(){
			looping(holder);
		},1);
	}
	
	function looping(test){
		test.find('.looping').each(function(){
			if($(this).css('left').replace('px','') > -$(this).width()){
				$(this).css('left',$(this).css('left').replace('px','')-10*($(this).css('z-index')/1000));
			} else {
				$(this).css('left',$(this).parent().width());
			}
		})
	}
	
	$(this).loopingAnimation();
	
	$(this).data('info',info);
	$(this).scrollCheck();
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
    
    $.fn.scrollCheck = function(){
    	var info = $(this);
    	$('main').scroll(function(){
    		var top = $('html body').scrollTop();
    		for(var i = 0; i < info.data('info').length; ++i){
    			var data = info.data('info')[i];
    			var offset = info.offset();
    			var position = (data.y)+((offset.top-top)*data.depth/1000);
    			//data.object.html(position+':parent-offset:'+(data.y+offset.top-top)*data.depth/1000+':'+data.depth/1000);
    			data.object.css('top', position);
    		}
    	})
    }
    
    $.fn.animateArea = function(e,speed,or,start){
    	var mainX = ((or.ofx*speed));
        var mainY = ((or.ofy*speed));
	
	var x = start.x+mainX;
	var y = start.y+mainY;
	$(this).css('left',x).css('top',y);
    }
});
