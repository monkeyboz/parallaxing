<html>
	<head>
		<script src="js/jquery.js"></script>
		<script src="js/script.js"></script>
		<style>
			.sound{
				position: fixed;
				top: 10px;
				background: #fff;
				font-size: 12px;
				line-height: 4px;
				padding: 5px;
				z-index: 1000000;
				font-family: arial;
				color: #000;
				height: 25px;
			}
			.sound div{
				float: left;
				margin-top: 10px;
				margin-right: 5px;
			}
			.sound img{
				margin-top: 4px;
				float: left;
			}
			#crowd{
				height: 100%;
				z-index: 3; 
				position: relative; 
				top: 2000px;
			}
		</style>
		<style>
			@import url("css/main.css") all and (min-width: 901px);
			@import url("css/800.css") all and (min-width: 601px) and (max-width: 900px);
			@import url("css/600.css") all and (min-width: 301px) and (max-width: 600px);
			@import url("css/300.css") all and (max-width: 300px);
		</style>
		<script>
			$(window).load(function() {
				$('#info').parallax();
				$('#clouds').parallax({"disable":{"mouse":"true"}});
				$('#about').parallax({"disable":{"mouse":"true"}});
				$('#crowd').parallax({"disable":{"mouse":"true"}});
				
				var sound_enabled = true;
				var soundInterval = setInterval(function(){
					if(sound_enabled){
						$('navigation').find('a').each(function(){
							var info = $('a[name="'+$(this).attr('href').replace('#','')+'"]');
							if(info.offset().top < 2000 && info.offset().top > -2000){
								var audio = document.getElementById('audio_'+$(this).attr('href').replace('#',''));
								if(info.offset().top < 2000 && info.offset().top >= 0){
									audio.play();
									if(audio != null) audio.volume = (-1)*(info.offset().top-2000)/2000;
								
								} else if(info.offset().top < 0 && info.offset().top > -2000) {
									if(audio != null) audio.volume = (info.offset().top+2000)/2000;
								} else {
									if(audio != null) audio.pause();
								}
							}
						});
					}
				},1);
				
				
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
				$('.sound').click(function(){
					if(sound_enabled == false){
						sound_enabled = true;
						$(this).html('<div>sound on</div><img src="images/sound.png" />');
					} else {
						sound_enabled = false;
						$(this).html('<div>sound off</div>');
						$('navigation').find('a').each(function(){
							
							var audio = document.getElementById('audio_'+$(this).attr('href').replace('#',''));
							audio.pause();
						});
					}
				});
				$('navigation').find('a').each(function(){
					var audio = document.getElementById('audio_'+$(this).attr('href').replace('#',''));
					audio.pause();
				});
			});
		</script>
	</head>
	<body>
		<audio id="audio_home" src="" loop="true"></audio>
		<audio id="audio_services" src="audio/stormy_wind.mp3" loop="true"></audio>
		<audio id="audio_about" src="audio/rainforest.mp3" loop="true"></audio>
		<audio id="audio_contact" src="audio/city_sound.mp3" loop="true"></audio>
		<main>
		<navigation>
			<a href="#home">Home</a>
			<a href="#services">Services</a>
			<a href="#about">About</a>
			<a href="#contact">Contact</a>
		</navigation>
		<div class="sound">
			<div>sound on</div>
			<img src="images/sound.png"/>
		</div>
		<div id="audio-info"></div>
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
				<div class="white-background"></div>
				<div class="clouds layer looping seamless">
					<img src="images/clouds_layout.png" width="100%" height="600px"/>
				</div>
				<div class="clouds2 layer looping seamless">
					<img src="images/cloud_cover_remake.png"/>
				</div>
				<div class="clouds3 layer looping seamless">
					<img src="images/cloud_cover_remake.png"/>
				</div>
				<div class="airplane layer zoom rumble">
					<img src="images/jet.png"/>
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
			<div id="about">
				<a name="about"></a>
				<div id="rainforest-canopy" class="layer">
					<img src="images/rain-forest.jpg" style="width: 100%;"/>
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
						
					</p>
				</div>
				<div id="panther" class="layer">
					<img src="images/panther.png"/>
				</div>
				<div class="canopy1 layer"></div>
				<div class="canopy2 layer"></div>
				<div class="canopy layer">
					<img src="images/top-canopy.jpg" style="max-width: 1380px;"/>
				</div>
				<div class="rain layer">
					<img src="images/rain-drops.png"/>
				</div>
				<div class="paradise layer">
					<img src="images/paradise.jpeg" style="max-width: 1380px;"/>
				</div>
				<div class="bush layer"></div>
				<div class="bush1 layer"></div>
				<div class="soil layer">
				</div>
			</div>
			<style>
				#contact-text{
					background: #fff;
					padding: 10px;
					position: absolute;
					left: 30px;
					width: 600px;
					height: 400px;
					bottom: -200px;
					border-radius: 10px;
					z-index: 1000;
					border: 5px solid #fff;
					box-shadow: 0px 10px 25px rgba(0,0,0,.8);
				}
				#maps{
					background: rgba(255,255,255,.8);
					padding: 10px;
					width: 400px;
					overflow: hidden;
					position: absolute;
					right: 100px;
					bottom: 30px;
					border-radius: 20px;
					height: 300px;
					z-index: 200;
					box-shadow: 0px 5px 15px rgba(0,0,0,.8);
					border: 5px solid #fff;
				}
				#contact-text h2{
					margin: 0px;
					margin-bottom: 10px;
				}
				#contact-text input{
					border: 1px solid #ababab;
					padding: 10px;
					border-radius: 10px;
					width: 100%;
				}
				#contact-text div{
					margin-bottom: 10px;
				}
				#contact-text textarea{
					border: 1px solid #ababab;
					padding: 10px;
					border-radius: 10px;
					width: 100%;
					height: 100px;
				}
			</style>
			<script>
				function initialize() {
				  var mapOptions = {
				    zoom: 14,
				    center: new google.maps.LatLng(-34.397, 150.644),
				  };
				  
				  var geocoder = new google.maps.Geocoder();

				   geocoder.geocode({
				      'address': 'Eugene, OR'
				   }, 
				   function(results, status) {
				      if(status == google.maps.GeocoderStatus.OK) {
					 new google.maps.Marker({
					    position: results[0].geometry.location,
					    map: map
					 });
					 map.setCenter(results[0].geometry.location);
				      }
				   });

				  var map = new google.maps.Map(document.getElementById('maps'),
				      mapOptions);
				}

				function loadScript() {
				  var script = document.createElement('script');
				  script.type = 'text/javascript';
				  script.src = 'https://maps.googleapis.com/maps/api/js?v=3.exp&' +
				      'callback=initialize';
				  document.body.appendChild(script);
				}

				window.onload = loadScript;

			</script>
			<div id="crowd">
				<div class="clouds7 layer seamless looping">
					<img src="images/cloud_cover_remake.png"/>
				</div>
				<div class="water layer seamless looping">
					<img src="images/water.png"/>
				</div>
				<div id="contact-text" class="layer">
					<h2>Contact Us</h2>
					<form>
						<div>First Name <input name="" type=""/></div>
						<div>Last Name <input name="" type=""/></div>
						<div>Email <input name="" type=""/></div>
						<div>
							<textarea></textarea>
						</div>
						<div><input name="submit" type="submit" value="submit"/></div>
					</form>
				</div>
				<div id="maps" class="layer">
				</div>
				<div class="">
					<img src="images/farmers-market.jpg" style="width: 100%;"/>
				</div>
				<a name="contact"></a>
			</div>
		</main>
	</body>
</html>contact-textcontact-text
