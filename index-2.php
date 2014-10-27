<html>
	<head>
		<script src="js/jquery.js"></script>
		<script src="js/script.js"></script>
		<style>
			body{
				margin: 0px;
				font-family: arial;		
			}
			navigation{
				position: fixed;
				top: 0px;
				right: 20px;
				z-index: 3000;
			}
			navigation a{
				display: block;
				text-decoration: none;
				color: #fff;
				padding: 10px;
				text-align: left;
				background: #000;
				text-transform: uppercase;
			}
			h1{
				margin: 0px;
				margin-bottom: 10px;			
			}
			#info{
				width: 100%;
				height: 1500px;
				position: relative;
				z-index: 1;
				top: 0px;
			}
			#clouds{
				position: relative;
				width: 100%;
				z-index: 4;
				height: 1000px;
				top: 200px;
			}
			#services{
				height: 900px; 
				background: #ababab; 
				position: relative;
				width: 100%;
				z-index: 4;
				top: 900px;
			}
			.clouds{
				position: absolute;
				z-index: 30;
				top: -700px;
				width: 100%;
			}
			.clouds2, .clouds3, .clouds4, .clouds5, .clouds6{
				position: absolute;
			}
			.clouds3{
				top: -50px;
				right: 200px;
				z-index: 140;
			}
			.clouds4{
				top: -100px;
				left: 220px;
				z-index: 310;
			}
			.clouds5{
				top: -90px;
				right: 707px;
				z-index: 100;
			}
			.clouds6{
				top: -90px;
				right: 20px;
				z-index: 20;
			}
			.main-text{
				background: rgba(255,255,255,.9);
				width: 300px;
				height: 300px;
				top: 100px;
				left: 100px;
				position: absolute;
				padding: 10px;
			}
			.logo{
				left: 350px;
				top: 100px;
				position: absolute;
				z-index: 10;
			}
			.foreground{
				top: 300px;
				right: 400px;
				width: 100px;
				height: 100px;
				position: absolute;
				z-index: 300;
			}
			.mainground{
				left: -300px;
				top: 300px;
				position: absolute;
				z-index: 90;	
			}
			.lightground{
				top: 300px;
				left: -350px;
				width: 2000px;
				height: 1000px;
				position: absolute;
				z-index: 91;	
			}
			main{
				overflow-x: hidden;
				overflow-y: scroll;
				width: 100%;
				height: 100%;
			}
			.background{
				width: 2000px;
				height: 1000px;
				position: absolute;
				z-index: 3;	
			}
			.text-info{
				color: #000;
			}
			#end .background{
				left: 300px;			
			}
			.highlight-background{
				background: rgba(255,255,255,.8);
				width: 100%;
				height: 100%;
				position: absolute;
				z-index: 100;			
			}
			#mouse{
				z-index: 1000000;
				position: absolute;
			}
			.white-backgroud{
				height: 290px;
				width: 100%;
				top: 290px;
				z-index: 1;
			}
		</style>
		<script type="text/javascript">
			$(document).ready(function(){
				$('#info').parallax();
				$('#clouds').parallax();
				/*$('main').hover(function(){ 
					$('main').css('cursor','none');
					$('main').append('<div id="mouse">testing</div>');
					$('main').mousemove(function(e){
						$('#mouse').css('top',e.clientY).css('left',e.clientX);				
					});
				},
				function(){ 
					$('#mouse').remove(); 
				});*/
				var curr = null;
				$('navigation a').click(function(){
					if(curr != null){
						curr.css('background','#ababab').css('color','#fff');
					}
					var position = $('a[name="'+$(this).attr('href').replace('#','')+'"]');
					curr = $(this);
					$('main').stop();
					$(this).css('background','#fff').css('color','#000');
					$('main').animate({scrollTop:$('a[name="'+$(this).attr('href').replace('#','')+'"]').offset().top + $('main').scrollTop()},2000);
					return false;
				});
			});
		</script>
	</head>
	<body>
		<main>
		<navigation>
			<a href="#home">Home</a>
			<a href="#about">About</a>
			<a href="#services">Services</a>
			<a href="#contact">Contact</a>
		</navigation>
		<iframe height="1" frameborder="0" width="1" src="/http://www.youtube.com/embed/vSMeYe-sLhs?autoplay=1" allowfullscreen=""></iframe>			
			<a name="home"></a>
			<div id="info">
				<div class="logo layer">
					<img src="images/logo.png"/>
				</div>
				<div class="foreground layer">
					<img src="images/satellite.png"/>
				</div>
				<div class="mainground layer">
					<img src="images/globe.png"/>
				</div>
				<div class="lightground layer">
					<img src="images/lightground"/>
				</div>
				<div class="background layer">
					<img src="images/starfield.jpg" width="100%" height="100%"/>
				</div>
			</div>
			<a name="about"></a>
			<div id="clouds">
				<div class="clouds layer">
					<img src="images/cloud.png" width="100%" height="100%"/>
				</div>
				<div class="white-backgroud layer"></div>
			</div>
			<div id="services"><a name="services"></a></div>
			<a name="contact"></a>
			<div style="height: 900px; background: #efefef;"></div>
		</main>
	</body>
</html>
