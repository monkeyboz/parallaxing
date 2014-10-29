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
				top: 90px;
				background: #fffcfc;
				background: -moz-linear-gradient(top, #fffcfc 0%, #2989d8 57%, #1e5799 100%);
				background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#fffcfc), color-stop(57%,#2989d8), color-stop(100%,#1e5799));
				background: -webkit-linear-gradient(top, #fffcfc 0%,#2989d8 57%,#1e5799 100%);
				background: -o-linear-gradient(top, #fffcfc 0%,#2989d8 57%,#1e5799 100%);
				background: -ms-linear-gradient(top, #fffcfc 0%,#2989d8 57%,#1e5799 100%);
				background: linear-gradient(to bottom, #fffcfc 0%,#2989d8 57%,#1e5799 100%);
				filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#fffcfc', endColorstr='#1e5799',GradientType=0 );
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
				z-index: 100;
				top: -750px;
				width: 100%;
			}
			.cloud-backgroud{
				background: #1e5799; /* Old browsers */
				background: -moz-linear-gradient(top, #1e5799 0%, #7db9e8 100%); /* FF3.6+ */
				background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#1e5799), color-stop(100%,#7db9e8)); /* Chrome,Safari4+ */
				background: -webkit-linear-gradient(top, #1e5799 0%,#7db9e8 100%); /* Chrome10+,Safari5.1+ */
				background: -o-linear-gradient(top, #1e5799 0%,#7db9e8 100%); /* Opera 11.10+ */
				background: -ms-linear-gradient(top, #1e5799 0%,#7db9e8 100%); /* IE10+ */
				background: linear-gradient(to bottom, #1e5799 0%,#7db9e8 100%); /* W3C */
				filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#1e5799', endColorstr='#7db9e8',GradientType=0 ); /* IE6-9 */
			}
			.clouds2{
				top: -375px;
				left: 200x;
				position: absolute;
				z-index: 175;
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
				right: 100px;
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
				top: 500px;
				position: absolute;
				z-index: 90;
				left: 100px;
				width: 1200px;
				height: 1200px;
			}
			.lightground{
				top: 300px;
				right: -350px;
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
				height: 1530px;
				position: absolute;
				z-index: 3;
				background: #000 url(images/star_field.jpg);
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
			.mouse{
				background: url(images/cursor.png);
				background-repeat: no-repeat;
				background-size: 35px 50px;
				width: 100px;
				height: 200px;
				z-index: 10000;
				position: absolute;
			}
			.preloader{
				width: 100%;
				height: 20px;
				background: #000;
				float: right;
				position: absolute;
				top: 30px;
				left: 30px;
			}
			.loading-screen{
				width: 100%;
				height: 100%;
				z-index: 1000000;
				position: absolute;
				top: 0px;
				left: 0px;
			}
			#wording{
				width: 500px;
				height: 700px;
				position: absolute;
				top: 30px;
				left: 100px;
				line-height: 30px;
				font-size: 14px;
				background: rgba(255,255,255,.3);
				text-align: justify;
				padding: 20px;
			}
			.click{
				border-radius: 10px;
				border: 2px solid #ababab;
				background: #545454;
				padding: 20px;
				color: #fff;
			}
		</style>
		<script type="text/javascript">
			$(document).ready(function(){
				$('#info').parallax();
				$('#clouds').parallax({"disable":{"mouse":"true"}});
				
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
				<div class="testing"></div>
				<div class="logo layer">
					<img src="images/logo.png"/>
				</div>
				<div class="foreground layer">
					<img src="images/satellite.png"/>
				</div>
				<div class="mainground layer">
					<img src="images/globe_glow.png" width="100%" height="100%"/>
				</div>
				<div class="background layer"></div>
			</div>
			<a name="about"></a>
			<div id="clouds">
				<div class="testing"></div>
				<div class="clouds layer looping seamless">
					<img src="images/clouds_layout.png" width="100%" height="600px"/>
				</div>
				<div class="clouds2 layer looping seamless">
					<img src="images/cloud_cover_remake.png"/>
				</div>
				<div class="sun layer">
					<img src="http://synermaxx.com/wp-content/uploads/2013/09/0_sun.png"/>
				</div>
				<div class="clouds3 layer looping seamless">
					<img src="images/cloud_layout.png"/>
				</div>
				<div id="wording" class="layer">
					<h2>About Superior Global Marketing</h2>
					<p>
						Working with lorem ipsum is great fun and works well with ipsum plurus, but the 
						plurus ipsum is lorem upso do to the lack of ipsum rumble. Working with lorem ipsum is great 
						fun and works well with ipsum plurus, but the plurus ipsum is lorem upso do to the lack of 
						ipsum rumble. Working with lorem ipsum is great fun and works well with ipsum plurus, but the 
						plurus ipsum is lorem upso do to the lack of ipsum rumble. 
					</p>
					<p>
						Working with lorem ipsum is great fun and works well with ipsum plurus, but the 
						plurus ipsum is lorem upso do to the lack of ipsum rumble. Working with lorem ipsum is great 
						fun and works well with ipsum plurus, but the plurus ipsum is lorem upso do to the lack of 
						ipsum rumble.
					</p>
					<span class="click">CLICK</span>
				</div>
				<div class="cloud-backgroud layer"></div>
			</div>
			<div id="services">
				<a name="services"></a>
			</div>
			<a name="contact"></a>
			<div style="height: 900px; background: #efefef;"></div>
		</main>
	</body>
</html>
