<html>
	<head>
		<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
		<script src="js/script.js"></script>
		<link href="css/style.css" rel="stylesheet" type="text/css"/>
		<style>
			#info, #logo{
				width: 100%;
				height: 900px;
				overflow: hidden;
				position: relative;
			}
			#logo{
				background: #ababab;			
			}
			.text{
							
			}
		</style>
		<script type="text/javascript">
			$(document).ready(function(){
				$('#info').parallax();
				$('#logo').parallax();
			});
		</script>
	</head>
	<body>
		<header>
			<navigation id=""></navigation>
		</header>
		<main>
			<div id="info">
				<div class="text layer">
					<h1>Testing</h1>
				</div>
				<div class="foreground layer">
					<img src="http://doginstructions.com/wp-content/uploads/2014/07/birds-flying-in-the-sky-silhouettebird-silhouette-wallpaper---wallpaper-panda-hphkjhzu.png" style="width: 1200px; height: 900px;"/>
				</div>
				<div class="mainground layer">
					<div>
						<div class="content" style="width: 640px; height: 400px;"><img src="http://www.savannahskydiving.com/images/slides/savannah-tandem-skydiving.png"/></div>
					</div>
				</div>
				<div class="background layer">
					<img src="http://pngimg.com/upload/cloud_PNG4.png" style="width: 1200px; height: 900px;"/>
				</div>
			</div>
			<div id="logo">
				<div class="foreground layer">
					<img src="http://doginstructions.com/wp-content/uploads/2014/07/birds-flying-in-the-sky-silhouettebird-silhouette-wallpaper---wallpaper-panda-hphkjhzu.png" style="width: 1200px; height: 900px;"/>
				</div>
				<div class="mainground layer">
					<div>
						<div class="content" style="width: 640px; height: 400px;"><img src="images/logo.png"/></div>
					</div>
				</div>
				<div class="background layer">
					<img src="http://pngimg.com/upload/cloud_PNG4.png" style="width: 1200px; height: 900px;"/>
				</div>
			</div>
		</main>
	</body>
</html>
