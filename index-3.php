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
				background: #ffffff; /* Old browsers */
				background: -moz-linear-gradient(top, #ffffff 0%, #28a3d3 43%, #ffffff 84%); /* FF3.6+ */
				background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#ffffff), color-stop(43%,#28a3d3), color-stop(84%,#ffffff)); /* Chrome,Safari4+ */
				background: -webkit-linear-gradient(top, #ffffff 0%,#28a3d3 43%,#ffffff 84%); /* Chrome10+,Safari5.1+ */
				background: -o-linear-gradient(top, #ffffff 0%,#28a3d3 43%,#ffffff 84%); /* Opera 11.10+ */
				background: -ms-linear-gradient(top, #ffffff 0%,#28a3d3 43%,#ffffff 84%); /* IE10+ */
				background: linear-gradient(to bottom, #ffffff 0%,#28a3d3 43%,#ffffff 84%); /* W3C */
				filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#ffffff', endColorstr='#ffffff',GradientType=0 ); /* IE6-9 */
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
			.clouds3{
				top: 175px;
				left: 200x;
				position: absolute;
				z-index: 90;
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
				width: 200%;
				height: 1530px;
				position: absolute;
				z-index: 3;
				left: -50%;
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
				top: -20px;
				left: 100px;
				line-height: 30px;
				font-size: 14px;
				background: rgba(255,255,255,.3);
				text-align: justify;
				padding: 20px;
				z-index: 1000;
			}
			.click{
				border-radius: 10px;
				border: 2px solid #ababab;
				background: #545454;
				padding: 20px;
				color: #fff;
			}
			#about{
				height: 900px; 
				background: #ababab; 
				position: relative;
				width: 100%;
				z-index: 4;
				top: 1010px;
			}
			#about .background{
				position: absolute;
				top: 10px;
				left: -10px;
				z-index: 5;
			}
			#about .bush{
				position: absolute;
				bottom: 0px;
				left: -10px;
				z-index: 400;
				width: 200%;
				height: 450px;
				background: url(http://4.bp.blogspot.com/_VC5iSShRPRs/S9Ln9mh9Z8I/AAAAAAAABNo/ola0lt3qe3Q/s1600/Ixora03L.png);
				background-repeat: repeat-x;
			}
			#about .bush1{
				position: absolute;
				bottom: 0px;
				left: -50%;
				z-index: 600;
				width: 200%;
				height: 450px;
				background: url(http://4.bp.blogspot.com/_VC5iSShRPRs/S9Ln9mh9Z8I/AAAAAAAABNo/ola0lt3qe3Q/s1600/Ixora03L.png);
				background-repeat: repeat-x;
			}
			#about .soil{
				background: url(images/roots.png);
				position: absolute;
				bottom: 0px;
				left: -10px;
				z-index: 100;
				width: 100%;
				height: 325px;
			}
			#about .canopy{
				position: absolute;
				top: -900px;
				left: -10px;
				z-index: 100;
			}
			#about .canopy1{
				background: url(images/canopy-layout.png);
				background-size: 400px 400px;
				background-repeat: repeat-x;
				position: absolute;
				top: -240px;
				left: -20%;
				z-index: 400;
				width: 200%;
				height: 405px;
			}
			#about .canopy2{
				background: url(images/canopy-layout.png);
				background-size: 400px 400px;
				background-repeat: repeat-x;
				position: absolute;
				top: -260px;
				left: -60%;
				z-index: 450;
				width: 200%;
				height: 325px;
			}
			#about .rain{
				background: url(http://th03.deviantart.net/fs71/PRE/i/2010/271/9/6/rain_drops_condensation_png_by_madetobeunique-d2zp6ge.png);
				position: absolute;
				top: 0px;
				left: -50%;
				width: 200%;
				height: 200%;
				z-index: 300;
			}
			#about-text{
				background: #fff;
				padding: 10px;
				border-radius: 10px;
				position: absolute;
				top: 0px;
			}
			.airplane{
				top: 300px;
				left: 500px;
				position: absolute;
				z-index: 500;
			}
		</style>
		<script type="text/javascript">
			$(window).load(function() {
				$('#info').parallax();
				$('#clouds').parallax({"disable":{"mouse":"true"}});
				$('#about').parallax({"disable":{"mouse":"true"}});
				
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
			<a href="#services">Services</a>
			<a href="#about">About</a>
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
			<a name="services"></a>
			<div id="clouds">
				<div class="testing"></div>
				<div class="clouds layer looping seamless">
					<img src="images/clouds_layout.png" width="100%" height="600px"/>
				</div>
				<div class="clouds2 layer looping seamless">
					<img src="images/cloud_cover_remake.png"/>
				</div>
				<div class="clouds3 layer looping seamless">
					<img src="images/cloud_cover_remake.png"/>
				</div>
				<div class="airplane layer">
					<img src="images/767_header.png"/>
				</div>
				<div id="wording" class="layer">
					<h2>Serving You High Performance</h2>
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
				<style>
					#icons{
						background: rgba(255,255,255,.5);
						padding: 10px;
						position: absolute;
						top: 100px;
						right: 50px;
						width: 600px;
					}
					#icons div > div{
						display: block;
						float: left;
						padding: 10px;
						background: #000;
						margin: 5px;
						width: 70px;
						height: 70px;
					}
					#image-holder{
						float: left;
						width: 320px;
					}
					#text-holder{
						float: left;
						width: 230px;
					}
				</style>
				<div id="icons">
					<div id="image-holder">
						<div></div>
						<div></div>
						<div></div>
					</div>
					<div id="text-holder">
						<h3>Testing</h3>
						testing to see if this works or not.
					</div>
				</div>
				<div class="cloud-backgroud layer"></div>
			</div>
			<style>
				#rainforest-canopy{
					position: absolute;
					top: -1200px;
					z-index: 99;
					width: 100%;
				}
				#canopy-tree{
					top: -1400px;
					left: -15%;
					position: absolute;
					width: 200%;
					height: 550px;
					background: url(images/canopy-layout.png);
					background-size: 30%;
					z-index: 350;
				}
				#canopy-tree1{
					top: -1400px;
					left: -70%;
					position: absolute;
					width: 250%;
					height: 350px;
					background: url(images/canopy-layout.png);
					z-index: 300;
				}
				#canopy-tree2{
					position: absolute;
					top: -360px;
					z-index: 500;
					left: 150px;
				}
				#canopy-tree3{
					position: absolute;
					top: -760px;
					z-index: 560;
					left: 400px;
				}
				#canopy-tree4{
					position: absolute;
					top: -560px;
					z-index: 660;
					left: 700px;
				}
				#canopy-pines{
					position: absolute;
					top: -1860px;
					z-index: 660;
					left: 700px;
				}
				#canopy-pines1{
					position: absolute;
					top: -560px;
					z-index: 660;
					left: 10px;
				}
				#about-text{
					background: rgba(255,255,255,.8);
					position: absolute;
					top: 200px;
					right: 200px;
					width: 400px;
					height: 300px;
					z-index: 100;
				}
				#panther{
					position: absolute;
					bottom: 240px;
					left: 140px;
					z-index: 400;
				}
			</style>
			<div id="about">
				<a name="about"></a>
				<div id="rainforest-canopy" class="layer">
					<img src="http://static.panoramio.com/photos/large/81400839.jpg" style="width: 100%;"/>
				</div>
				<div id="canopy-tree" class="layer"></div>
				<div id="canopy-pines" class="layer">
					<img src="images/palm-trees.png"/>
				</div>
				<div id="canopy-pines1" class="layer">
					<img src="images/palm-trees.png"/>
				</div>
				<div id="canopy-tree1" class="layer"></div>
				<div id="canopy-tree2" class="layer">
					<img src="images/canopy-layout.png"/>
				</div>
				<div id="canopy-tree3" class="layer">
					<img src="images/canopy-layout.png"/>
				</div>
				<div id="canopy-tree4" class="layer">
					<img src="images/canopy-layout.png"/>
				</div>
				<div id="about-text">
					<h2>About Superior Global Marketing</h2>
					<p>
						information goes here
					</p>
				</div>
				<div id="panther" class="layer">
					<img src="http://www.officialpsds.com/images/thumbs/Black-Panther-psd20569.png"/>
				</div>
				<div class="canopy1 layer"></div>
				<div class="canopy2 layer"></div>
				<div class="canopy layer">
					<img src="http://blog.cincinnatizoo.org/wp-content/uploads/looking-down-on-the-canopy-from-above.jpg" style="max-width: 1380px;"/>
				</div>
				<div class="rain layer">
					<img src="http://th03.deviantart.net/fs71/PRE/i/2010/271/9/6/rain_drops_condensation_png_by_madetobeunique-d2zp6ge.png"/>
				</div>
				<div class="background layer">
					<img src="http://spi2uk.itvnet.lv/upload2/articles/69/694093/images/_origin_Paradise-6.jpeg" style="max-width: 1380px;"/>
				</div>
				<div class="bush layer">
					<img src="http://4.bp.blogspot.com/_VC5iSShRPRs/S9Ln9mh9Z8I/AAAAAAAABNo/ola0lt3qe3Q/s1600/Ixora03L.png"/>
				</div>
				<div class="bush1 layer"></div>
				<div class="soil layer">
				</div>
			</div>
			<div style="height: 900px; background: #efefef;"></div>
			<a name="contact"></a>
		</main>
	</body>
</html>
