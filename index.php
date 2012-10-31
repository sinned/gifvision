<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>GifVision.</title>
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
		<script src="js/jquery.backstretch.min.js"></script>
		<script type="text/javascript">
			var gifVision;
			var imagecount = 0;
			var GV = {};
			GV.images = [];
					
			$(document).ready(function() {
				$("#bottom").hide();

				function loadImages() {
					$.getJSON("images",
					  {
					    format: "json"
					  },
					  function(data) {
					    
					    // build the array of images
					    for (var i = 0; i < data.data.length; i++) {
						    GV.images[i] = [data.data[i].url];
					    }
					    startGifvision();
					  });					
				}

				function stretchImage() {
					var image;
				
					if (GV.images.length > 0) {
						//image = GV.images[Math.floor(Math.random()*GV.images.length)];
						image = GV.images[imagecount];	
						console.log("stretch: " + image );
						//$("#backstretch").remove();
						$.backstretch(image); 				
						$("#current-image").html('<a target="_blank" href="' + image + '">Link</a>');
					} else {
						console.log("no stretch");
					}
					
					imagecount++;
					if (imagecount == 7) {
						$("#bottom").slideDown();
					}
					
					// reset imagecount if it's bigger than the avail images.
					if (imagecount >= GV.images.length) {
						console.log("loading images");
						imagecount = 0;
						loadImages();
					} else {
						(new Image()).src = GV.images[imagecount]; // preload next image.
						if (imagecount+1 < GV.images.length) {
							(new Image()).src = GV.images[imagecount+1];
						}
						
					}
				}
				
				function startGifvision() {
					clearInterval(gifVision);
					stretchImage();
					gifVision = setInterval(function() {
						stretchImage();
					},2333);				
				}
				
				$("#click").on("click", function() {
					stretchImage();
				});
				
				
				$("button#play-gifvision").hide();
				$("button#pause-gifvision").on("click", function() {
					clearInterval(gifVision);
					$("button#pause-gifvision").hide();
					$("button#play-gifvision").show();
				});		
				
				$("button#play-gifvision").on("click", function() {
					startGifvision();
					$("button#play-gifvision").hide();
					$("button#pause-gifvision").show();
				});						
				
				$("button#close").on("click", function() {
					$("#bottom").slideUp();
				});		
				
				$("div#light").on("click", function () {
					$("#bottom").slideDown();
				});								
							
				loadImages();
			});
		</script>
		<script type="text/javascript">
		
		  var _gaq = _gaq || [];
		  _gaq.push(['_setAccount', 'UA-35961275-1']);
		  _gaq.push(['_trackPageview']);
		
		  (function() {
		    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
		    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
		    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
		  })();
		
		</script>
		<link href='http://fonts.googleapis.com/css?family=Old+Standard+TT' rel='stylesheet' type='text/css'>
		<style type="text/css">
			html {height:100%;}
			body {height:100%;background:#ffffff url('img/indian-head-test-pattern.jpg') no-repeat center;
					margin:0;padding:0;font-family:'Old Standard TT', Georgia, Times, serif;font-size:12px;}
			div#click {margin:0;padding:0;width:100%;height:100%;cursor:pointer;}
			div#bottom {position: absolute; bottom: 0; left: 0;width:100%;border-top: 3px solid #7a9391; background:#bfd2d0;
				min-width: 650px;
			}
			div#controls{margin:5px;}
			div#sponsor {float:right;margin: 7px 5px;font-size:12px;}
			div#light {position: absolute; bottom: 0; left: 0;cursor:pointer;margin:0 0 0 5px;}
		</style>
	</head>

  <body>
        <div id="click"></div>
       	<div id="light"><img src="img/plus-gray.png" alt="Open Controls" /></div>
        <div id="bottom">
	        <div id="sponsor">If you like this, please visit my sponsor, <a href="http://www.bureauoftrade.com/">Bureau of Trade</a>. Thanks!</div>
        	<div id="controls">
        		<button id="close">Close</button>
        		<button id="pause-gifvision">Pause GifVision</button><button id="play-gifvision">Play GifVision</button>
        		Current Image: <span id="current-image"></span>
        	</div>
        </div>
  </body>
</html>

