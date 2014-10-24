$(document).ready(function(){
    $.fn.parallax = function(){
        var offsets = $(this).offset();
	var mainholder = $(this);
	var info = new Array();
	$(this).find('.layer').each(function(){
		info.push(
			{
			'object': $(this),
			'depth': $(this).css('z-index'),
			'x':parseInt($(this).css('left').replace('px','')),
			'y':parseInt($(this).css('top').replace('px','')),
			'percents': {'x':parseInt($(this).css('left').replace('px',''))/mainholder.width(),
				     'y':parseInt($(this).css('left').replace('px',''))/mainholder.height()}}
		);	
	});
	$(this).data('info',info);
        $(this).mousemove(function(e){
            var offset = {'x':e.clientX,'y':e.clientY};
            var xinfo = offset.x-(mainholder.width()/2);
            var yinfo = offset.y-(mainholder.height()/2)
            
            var orientation = {'ofx':xinfo,'ofy':yinfo};

	    for(var i = 0; i < $(this).data('info').length; ++i){
		var info = $(this).data('info')[i];
		var speed = info.depth/1000;
		info.object.animateArea(e,speed,orientation,{'x':info.x,'y':info.y});
	    }
        });
    }
    
    $.fn.animateArea = function(e,speed,or,start){
	var mainX = ((or.ofx*speed));
        var mainY = ((or.ofy*speed));
	
	var x = start.x+mainX;
	var y = start.y+mainY;
	$(this).css('left',x).css('top',y);
    }
});
