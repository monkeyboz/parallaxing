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
				background: #888a85; 
				position: relative;
				width: 100%;
				z-index: 1;
			}
			.clouds{
				position: absolute;
				z-index: 30;
				top: -92px;
				width: 100%;
			}
			.clouds2, .clouds3, .clouds4, .clouds5, .clouds6{
				position: absolute;
			}
			.clouds2{
				top: -150px;
				left: 800px;
				z-index: 40;
			}
			.clouds3{
				top: -150px;
				left: 200px;
				z-index: 140;
			}
			.clouds4{
				top: -180px;
				left: 220px;
				z-index: 310;
			}
			.clouds5{
				top: -90px;
				left: 707px;
				z-index: 100;
			}
			.clouds6{
				top: -90px;
				left: 20px;
				z-index: 120;
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
				position: absolute;
				z-index: 10;
			}
			.foreground{
				top: 300px;
				left: 400px;
				width: 100px;
				height: 100px;
				position: absolute;
				z-index: 300;
			}
			.mainground{
				left: -300px;
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
			.skyscrapers{
				bottom: -100px;
				position: absolute;
				left: -200px;
				z-index: 100;
				width: 120%;
			}
			.skyscrapers1{
				bottom: -150px;
				position: absolute;
				left: -200px;
				z-index: 150;
				width: 120%;
				opacity: .5;
			}
			.mouse{
				background: url(http://static.micheljansen.org/uploads/mac-osx-arrow-cursor.png);
				width: 100px;
				height: 200px;
				background-size: 50px 100px;
				background-repeat: no-repeat;		
			}
			.mouse{
				z-index: 140;
				position: absolute;
			}
			.white-backgroud{
				height: 290px;
				width: 100%;
				top: 290px;
				z-index: 1;
			}
			navigation .selected{
				border-left: 5px solid #000;
				background: #fff;
				color: #545454;
			}
			navigation .visited{
				background: #ababab;
				border-left: 5px solid #545454;
			}
		</style>
		<script type="text/javascript">
			$(document).ready(function(){
				$('#info').parallax();
				$('#clouds').parallax();
				
				var curr = null;
				$('navigation a').click(function(){
					if(curr != null){
						curr.removeClass('selected');
						curr.addClass('visited');
					}
					var position = $('a[name="'+$(this).attr('href').replace('#','')+'"]');
					curr = $(this);
					$('main').stop();
					$(this).addClass('selected');
					$(this).removeClass('visited');
					$('main').animate({scrollTop:$('a[name="'+$(this).attr('href').replace('#','')+'"]').offset().top + $('main').scrollTop()},2000);
					return false;
				});
			});
		</script>
		<style>
			.globe{
				background: #fff;
				padding: 10px;
				margin-bottom: 10px;
				width: 200px;
				text-align: center;
			}
			.links{
				padding: 10px;
				width: 200px;
			}
		</style>
	</head>
	<body>
		<main>
		<navigation>
			<div class="globe">
				
			</div>
			<div class="links">
				<a href="#home">Home</a>
				<a href="#services">Services</a>
				<a href="#about">About</a>
				<a href="#contact">Contact</a>
			</div>
		</navigation>
		<iframe height="1" frameborder="0" width="1" src="/http://www.youtube.com/embed/vSMeYe-sLhs?autoplay=1" allowfullscreen=""></iframe>			
			<a name="home"></a>
			<div id="info">
				<div class="logo layer">
					<img src="images/logo.svg" style="width: 700px; height: 500px;"/>
				</div>
				<div class="foreground layer">
					
				</div>
				<div class="mainground layer">
					<div>
						<img src="images/globe.svg" style="width: 2000px; height: 2000px;"/>
					</div>
				</div>
				<div class="lightground layer">
					<div>
					</div>
				</div>
				<div class="background layer">
				</div>
			</div>
			<a name="services"></a>
			<div id="clouds">
				<div style="position: absolute; z-index: 1000000; width: 1000px; height: 300px; background: #fff; border: 10px solid #545454; border-radius: 20px; padding: 10px; right: 30px; top: 20px; z-index: 130">
					<h1>Services</h1>
				</div>
				<div class="clouds layer looping">
					<img src="images/clouds.svg" width="20%" height="20%"/>
					<img src="images/clouds.svg" width="450px" height="250px"/>
				</div>
				<div class="clouds2 layer looping">
					<img src="images/clouds.svg" width="275px" height="150px"/>
				</div>
				<div class="clouds3 layer looping">
					<img src="images/clouds.svg" width="170px" height="110px"/>
				</div>
				<div class="clouds4 layer looping">
					<img src="images/clouds.svg" width="150px" height="90px"/>
				</div>
				<div class="clouds5 layer looping">
					<img src="images/clouds.svg" width="150px" height="90px"/>
				</div>
				<div class="clouds6 layer looping">
					<img src="images/clouds.svg" width="300px" height="200px"/>
				</div>
				<div class="skyscrapers layer">
					<img src="images/skyline.svg" width="100%"/>			
				</div>
				<div class="skyscrapers1 layer">
					<img src="images/skyline-background.svg" width="100%"/>				
				</div>
			</div>
			<div id="services"><a name="about"></a></div>
			<a name="contact"></a>
			<div style="height: 900px; background: #efefef;"></div>
		</main>
	</body>
</html>
