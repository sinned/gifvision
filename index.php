<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Yeehaw.</title>
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
  <script src="js/jquery.backstretch.min.js"></script>
  <script type="text/javascript">
	$(document).ready(function() {
		var images = [
			"http://mlkshk.com/r/KRXB",
			"http://mlkshk.com/r/KS7M",
			"http://mlkshk.com/r/KSGB",
			"http://24.media.tumblr.com/tumblr_maimzuSCCz1qgjlj8o1_500.gif",
			"http://i.imgur.com/brpgk.gif",
			"http://donttrysohard.files.wordpress.com/2010/12/angry-dwight.gif",
			"http://i.minus.com/iblNcxynRn8sdR.gif",
			"http://i.imgur.com/UKlN7.gif",
			"http://i.imgur.com/4xGNI.gif",
			"http://www.yapfiles.ru/files/478176/20d7d2ba21a9f90ea7121a7616362668.gif",
			"http://i.imgur.com/XaYeD.gif",
			"http://24.media.tumblr.com/tumblr_m33adqW0RX1qacmz1o1_500.gif",
			"http://i.imgur.com/788bA.gif",
			"http://i.imgur.com/UzH7u.gif",
			"http://i.imgur.com/evSKD.gif",
			"http://24.media.tumblr.com/tumblr_m6eaadXP6h1rxbygso1_500.gif",
			"http://i.imgur.com/HMCnW.gif",
			"http://i.imgur.com/EPxax.gif",
			"http://25.media.tumblr.com/tumblr_m6gx1eWNF31qlpzbao1_250.gif",
			"http://25.media.tumblr.com/tumblr_m24b5cc0iw1qdpkl5o1_500.gif",
			"http://i.imgur.com/mrxrw.gif",
			"http://i.imgur.com/TnuJF.gif",
			"http://i.imgur.com/NL8Z7.gif",
			"http://i.imgur.com/9bgmY.gif",
			"http://i.imgur.com/jBMNX.gif",
			"http://i.imgur.com/iPOS6.gif",
			"http://i.imgur.com/PQgs4.gif",
			"http://i.imgur.com/SjEAu.gif",
			"http://i.imgur.com/xllQb.gif",
			"http://i.imgur.com/kYCOw.gif",
			"http://i.imgur.com/MMH35.gif",
			"http://24.media.tumblr.com/tumblr_m68rbaBv7P1qan85vo1_500.gif",
			"http://25.media.tumblr.com/tumblr_m7r9adlmSO1r3wgneo1_500.gif",
			"http://25.media.tumblr.com/tumblr_m6xa04YF5N1qc66bjo1_500.gif",
			"http://25.media.tumblr.com/tumblr_m7mnmzPWZv1qcd4g3o1_500.gif",
			"http://i.imgur.com/S6Xvp.gif",
			"http://static.tumblr.com/jsafxzh/qFYm7rcnj/thedarkknightrises_annehathaway_sidebar.gif",
			"http://25.media.tumblr.com/tumblr_lntfhb8am81qb7icgo1_500.gif",
			"http://i.imgur.com/NVPgz.gif",
			"http://24.media.tumblr.com/tumblr_m7jujzeXzD1qa20meo1_400.gif",
			"http://24.media.tumblr.com/tumblr_lxpp598zDG1r3ibruo1_500.gif",
			"http://24.media.tumblr.com/tumblr_m23cadVRuk1qanzneo1_400.gif",
			"http://25.media.tumblr.com/tumblr_m78rgb3nj41qdvrs8o1_500.gif",
			"http://24.media.tumblr.com/tumblr_m72qmx8Jb91r3gqu3o1_500.gif",
			"http://25.media.tumblr.com/tumblr_m6yxdjZEpm1rrj10do1_500.gif",
			"http://24.media.tumblr.com/tumblr_m45ay0x3td1qdvrs8o1_500.gif",
			"http://24.media.tumblr.com/tumblr_m7nfe5wGMZ1r8quyio1_500.gif",
			"http://25.media.tumblr.com/tumblr_m39tl1ZIil1qdq34io1_400.gif",
			"http://25.media.tumblr.com/tumblr_m5geerw57T1qbhetko1_500.gif",
			"http://25.media.tumblr.com/tumblr_m78p1oIKt61qdvrs8o1_500.gif",
			"http://24.media.tumblr.com/tumblr_m5671ip4DS1qg39ewo1_500.gif"
		
		
			];
		
		function stretchImage() {
			var image = images[Math.floor(Math.random()*images.length)]	
			console.log("stretch: " + image);
			$.backstretch(image); 
		}
		
	$("#click").on("click", function() {
	        stretchImage();
	});

	setInterval(function() {
	        stretchImage();
	},2000);

//$.backstretch("http://upload.wikimedia.org/wikipedia/commons/thumb/1/1b/RCA_Indian_Head_test_pattern.JPG/800px-RCA_Indian_Head_test_pattern.JPG");
stretchImage();

});
</script>
  </head>

  <body bgcolor="silver">
        <div id="click" style="margin:0;padding:0;width:100%;height:200px;cursor:pointer;"></div>
  </body>
</html>

