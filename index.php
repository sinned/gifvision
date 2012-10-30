<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>GifVision.</title>
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
		<script src="js/jquery.backstretch.min.js"></script>
		<script type="text/javascript">
			var imagecount = 0;
			var GV = {};
			GV.images = [];
			
			function stretchImage() {
				if (GV.images.length > 0) {
					var image = GV.images[Math.floor(Math.random()*GV.images.length)]	
					console.log("stretch: " + image);
					$.backstretch(image); 				
				} else {
					console.log("no stretch");
				}
				imagecount++;
				if (imagecount == 10) {
					$("#sponsor").fadeIn();
				}
			}
			
			$(document).ready(function() {
				$("#sponsor").hide();
			
				$.getJSON("images",
				  {
				    format: "json"
				  },
				  function(data) {
				    
				    // build the array of images
				    for (var i = 0; i < data.data.length; i++) {
					    GV.images[i] = [data.data[i].url];
				    }
					stretchImage();
				  });
				
				$("#click").on("click", function() {
					stretchImage();
				});
			
				setInterval(function() {
					stretchImage();
				},2000);
			
			
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
			body {height:100%;background:silver;margin:0;padding:0;font-family:'Old Standard TT', Georgia, Times, serif;}
			div#click {margin:0;padding:0;width:100%;height:100%;cursor:pointer;}
			div#sponsor {border-top: 3px solid #7a9391; background:#bfd2d0;margin:0;padding:0;width:100%;position: absolute; bottom: 0; left: 0;text-align:center;}
			div#sponsor p {margin: auto; padding: 3px 0 6px 0;font-size:14px;}
		</style>
	</head>

  <body bgcolor="silver">
        <div id="click"></div>
        <div id="sponsor"><p>If you like this, please visit my sponsor, <a href="http://www.bureauoftrade.com/">Bureau of Trade</a>. Thanks!</p><div class="close" /></div>
  </body>
</html>

