<h1>Mondo Autmated Parallaxing</h1>
Parallaxing script which allows for several different automated options for the parallaxing screen.

Used in conjunction with jquery, you can make as many parallaxing effects on your screen whenever you'd like.  The only limitation to worry about are the type of effects you'd be interested in creating using this parallaxing script.

Catered towards a simplified parallaxing experience, please feel free to add in your own effects to this script when desired.

Current usages include, basic mouse movement parallaxing follow, custom mouse cursor for parallaxing effect, custom parallaxing animations.

Usage is very basic. Include the file and create the parallax layers yourself. Make sure that your z-indexes are setup correctly so that the overlays match the correct z-index placement. From there add a layer class to your parallaxing layers.

example:
<pre>
<code>
  <script src="js/script.js"></script>
  <script>
    $(document).ready(function(){
      $('#public').parallax();
    });
  </script>
  
  <style>
    #public{
      position: relative;
    }
    #mario{
      position: absolute;
      bottom: 90px;
      left: 200px;
      z-index: 40;
    }
    #clouds{
      position: absolute;
      top: 30px;
      left: 20px;
      z-index: 100;
      width: 90px;
      height: 90px;
    }
    #ground{
      position: absolute;
      bottom: 90px;
      left: 0px;
      width: 100%;
      height: 90px;
      z-index: 90;
    }
  </style>
  
  <div id="public">
    <div id="clouds" class="layer looping"> <!-- for animation include looping -->
      <img src="images/clouds.png"/>
    </div>
    <div id="mario" class="layer">
      <img src="images/mario.png"/>
    </div>
    <div id="ground" class="layer">
      <img src="images/clouds.png"/>
    </div>
  </div>
</code>
</pre>
