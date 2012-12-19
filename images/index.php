<?php
	
	$imagecategory = isset($_REQUEST['c']) ? urlencode(strtolower($_REQUEST['c'])) : '';
	$images = array (); // init the array

	switch ($imagecategory) {
		case 'dogs':
			array_push($images, array("url" => "http://s3-ec.buzzfed.com/static/enhanced/webdr01/2012/12/14/15/anigif_enhanced-buzz-4786-1355518306-2.gif"));
			array_push($images, array("url" => "http://s3-ec.buzzfed.com/static/enhanced/webdr03/2012/12/17/11/anigif_enhanced-buzz-12146-1355761237-13.gif"));
			array_push($images, array("url" => "http://s3-ak.buzzfeed.com/static/enhanced/webdr01/2012/12/14/15/anigif_enhanced-buzz-2851-1355518272-3.gif"));
			array_push($images, array("url" => "http://s3-ak.buzzfeed.com/static/enhanced/webdr01/2012/12/17/11/anigif_enhanced-buzz-13752-1355762809-25.gif"));
			array_push($images, array("url" => "http://s3-ak.buzzfeed.com/static/enhanced/webdr03/2012/12/14/15/anigif_enhanced-buzz-25730-1355518361-8.gif"));
			array_push($images, array("url" => "http://s3-ak.buzzfeed.com/static/enhanced/webdr01/2012/12/14/17/anigif_enhanced-buzz-23344-1355523483-8.gif"));
			array_push($images, array("url" => "http://s3-ak.buzzfeed.com/static/enhanced/webdr01/2012/12/15/16/anigif_enhanced-buzz-19342-1355608696-6.gif"));
			array_push($images, array("url" => "http://s3-ak.buzzfeed.com/static/enhanced/webdr02/2012/12/15/11/anigif_enhanced-buzz-7775-1355590544-1.gif"));
			array_push($images, array("url" => "http://s3-ak.buzzfeed.com/static/enhanced/webdr02/2012/12/15/16/anigif_enhanced-buzz-4258-1355608775-1.gif"));
			array_push($images, array("url" => "http://s3-ec.buzzfed.com/static/enhanced/webdr03/2012/12/17/13/anigif_enhanced-buzz-31981-1355769214-1.gif"));
			array_push($images, array("url" => "http://s3-ec.buzzfed.com/static/enhanced/webdr02/2012/12/17/13/anigif_enhanced-buzz-20207-1355769222-1.gif"));
			array_push($images, array("url" => "http://s3-ec.buzzfed.com/static/enhanced/webdr03/2012/12/17/11/anigif_enhanced-buzz-12202-1355761224-14.gif"));
			array_push($images, array("url" => "http://s3-ec.buzzfed.com/static/enhanced/webdr01/2012/12/17/11/anigif_enhanced-buzz-13752-1355761333-11.gif"));
			array_push($images, array("url" => "http://s3-ec.buzzfed.com/static/enhanced/webdr03/2012/12/17/11/anigif_enhanced-buzz-12178-1355761294-31.gif"));
			array_push($images, array("url" => "http://s3-ec.buzzfed.com/static/enhanced/webdr01/2012/12/17/11/anigif_enhanced-buzz-13613-1355761226-14.gif"));
			array_push($images, array("url" => "http://s3-ec.buzzfed.com/static/enhanced/webdr03/2012/12/17/11/anigif_enhanced-buzz-15621-1355761253-6.gif"));
			array_push($images, array("url" => "http://s3-ec.buzzfed.com/static/enhanced/webdr01/2012/12/17/13/anigif_enhanced-buzz-14719-1355769175-1.gif"));
			array_push($images, array("url" => "http://s3-ec.buzzfed.com/static/enhanced/webdr03/2012/12/17/11/anigif_enhanced-buzz-12180-1355761194-14.gif"));
			array_push($images, array("url" => "http://s3-ec.buzzfed.com/static/enhanced/webdr01/2012/12/17/13/anigif_enhanced-buzz-14847-1355769124-2.gif"));
			array_push($images, array("url" => "http://s3-ec.buzzfed.com/static/enhanced/webdr02/2012/12/17/11/anigif_enhanced-buzz-31689-1355761210-14.gif"));
			array_push($images, array("url" => "http://s3-ec.buzzfed.com/static/enhanced/webdr03/2012/12/17/10/anigif_enhanced-buzz-12162-1355759792-3.gif"));
			array_push($images, array("url" => "http://s3-ec.buzzfed.com/static/enhanced/webdr03/2012/12/17/11/anigif_enhanced-buzz-16177-1355761178-1.gif"));
			array_push($images, array("url" => "http://s3-ec.buzzfed.com/static/enhanced/webdr03/2012/12/17/10/anigif_enhanced-buzz-4720-1355757773-9.gif"));
			array_push($images, array("url" => "http://s3-ec.buzzfed.com/static/enhanced/webdr02/2012/12/15/17/anigif_enhanced-buzz-2774-1355609789-3.gif"));
			array_push($images, array("url" => "http://s3-ec.buzzfed.com/static/enhanced/webdr02/2012/12/15/17/anigif_enhanced-buzz-3720-1355609741-9.gif"));
			array_push($images, array("url" => "http://s3-ec.buzzfed.com/static/enhanced/webdr02/2012/12/15/17/anigif_enhanced-buzz-2771-1355609732-2.gif"));
			array_push($images, array("url" => "http://s3-ec.buzzfed.com/static/enhanced/webdr02/2012/12/15/17/anigif_enhanced-buzz-2659-1355609720-5.gif"));
			array_push($images, array("url" => "http://s3-ec.buzzfed.com/static/enhanced/webdr03/2012/12/17/13/anigif_enhanced-buzz-26482-1355767920-24.gif"));
			array_push($images, array("url" => "http://s3-ec.buzzfed.com/static/enhanced/webdr02/2012/12/15/17/anigif_enhanced-buzz-3237-1355608952-1.gif"));
			array_push($images, array("url" => "http://s3-ec.buzzfed.com/static/enhanced/webdr02/2012/12/15/17/anigif_enhanced-buzz-2223-1355608946-2.gif"));
			array_push($images, array("url" => "http://s3-ec.buzzfed.com/static/enhanced/webdr02/2012/12/15/17/anigif_enhanced-buzz-1752-1355608927-9.gif"));
			array_push($images, array("url" => "http://s3-ec.buzzfed.com/static/enhanced/webdr02/2012/12/15/17/anigif_enhanced-buzz-1751-1355608914-1.gif"));
			array_push($images, array("url" => "http://s3-ec.buzzfed.com/static/enhanced/webdr02/2012/12/15/17/anigif_enhanced-buzz-1752-1355608896-6.gif"));
			array_push($images, array("url" => "http://s3-ec.buzzfed.com/static/enhanced/webdr02/2012/12/15/17/anigif_enhanced-buzz-3732-1355608887-2.gif"));
			array_push($images, array("url" => "http://s3-ec.buzzfed.com/static/enhanced/webdr02/2012/12/15/17/anigif_enhanced-buzz-1752-1355608858-2.gif"));
			array_push($images, array("url" => "http://s3-ec.buzzfed.com/static/enhanced/webdr02/2012/12/15/17/anigif_enhanced-buzz-3799-1355608849-1.gif"));
			array_push($images, array("url" => "http://s3-ec.buzzfed.com/static/enhanced/webdr03/2012/12/17/13/anigif_enhanced-buzz-32537-1355769144-2.gif"));
			array_push($images, array("url" => "http://s3-ec.buzzfed.com/static/enhanced/webdr01/2012/12/17/13/anigif_enhanced-buzz-15518-1355769150-1.gif"));
			array_push($images, array("url" => "http://s3-ec.buzzfed.com/static/enhanced/webdr02/2012/12/15/17/anigif_enhanced-buzz-2740-1355608808-4.gif"));
			array_push($images, array("url" => "http://s3-ec.buzzfed.com/static/enhanced/webdr01/2012/12/14/17/anigif_enhanced-buzz-27747-1355523500-1.gif"));
			array_push($images, array("url" => "http://s3-ec.buzzfed.com/static/enhanced/webdr02/2012/12/15/16/anigif_enhanced-buzz-3238-1355608787-1.gif"));
			array_push($images, array("url" => "http://s3-ec.buzzfed.com/static/enhanced/webdr02/2012/12/15/16/anigif_enhanced-buzz-4258-1355608775-1.gif"));
			array_push($images, array("url" => "http://s3-ec.buzzfed.com/static/enhanced/webdr02/2012/12/15/11/anigif_enhanced-buzz-7775-1355590544-1.gif"));
			array_push($images, array("url" => "http://s3-ec.buzzfed.com/static/enhanced/webdr01/2012/12/15/16/anigif_enhanced-buzz-19342-1355608696-6.gif"));
			array_push($images, array("url" => "http://s3-ec.buzzfed.com/static/enhanced/webdr01/2012/12/14/17/anigif_enhanced-buzz-23344-1355523483-8.gif"));
			array_push($images, array("url" => "http://s3-ec.buzzfed.com/static/enhanced/webdr03/2012/12/14/15/anigif_enhanced-buzz-25730-1355518361-8.gif"));
			array_push($images, array("url" => "http://s3-ec.buzzfed.com/static/enhanced/webdr01/2012/12/17/11/anigif_enhanced-buzz-13752-1355762809-25.gif"));
		break;
		default:
			array_push($images, array("title" => "blow it up", "url" => "http://i.imgur.com/B5wj4.gif"));
			array_push($images, array("title" => "dancing sax kid", "url" => "http://mlkshk.com/r/KRXB"));
			array_push($images, array("url" => "http://mlkshk.com/r/KS7M"));
			array_push($images, array("url" => "http://mlkshk.com/r/KSGB"));
			array_push($images, array("url" => "http://24.media.tumblr.com/tumblr_maimzuSCCz1qgjlj8o1_500.gif"));
			array_push($images, array("url" => "http://i.imgur.com/brpgk.gif"));
			//array_push($images, array("url" => "http://donttrysohard.files.wordpress.com/2010/12/angry-dwight.gif"));
			array_push($images, array("url" => "http://i.minus.com/iblNcxynRn8sdR.gif"));
			array_push($images, array("url" => "http://i.imgur.com/UKlN7.gif"));
			array_push($images, array("url" => "http://i.imgur.com/4xGNI.gif"));
			array_push($images, array("url" => "http://i.imgur.com/XaYeD.gif"));
			array_push($images, array("url" => "http://24.media.tumblr.com/tumblr_m33adqW0RX1qacmz1o1_500.gif"));
			array_push($images, array("url" => "http://i.imgur.com/788bA.gif"));
			array_push($images, array("url" => "http://i.imgur.com/UzH7u.gif"));
			array_push($images, array("url" => "http://i.imgur.com/evSKD.gif"));
			array_push($images, array("url" => "http://24.media.tumblr.com/tumblr_m6eaadXP6h1rxbygso1_500.gif"));
			array_push($images, array("url" => "http://i.imgur.com/HMCnW.gif"));
			array_push($images, array("url" => "http://i.imgur.com/EPxax.gif"));
			array_push($images, array("url" => "http://25.media.tumblr.com/tumblr_m6gx1eWNF31qlpzbao1_250.gif"));
			array_push($images, array("url" => "http://25.media.tumblr.com/tumblr_m24b5cc0iw1qdpkl5o1_500.gif"));
			array_push($images, array("url" => "http://i.imgur.com/mrxrw.gif"));
			array_push($images, array("url" => "http://i.imgur.com/TnuJF.gif"));
			array_push($images, array("url" => "http://i.imgur.com/NL8Z7.gif"));
			array_push($images, array("url" => "http://i.imgur.com/9bgmY.gif"));
			array_push($images, array("url" => "http://i.imgur.com/jBMNX.gif"));
			array_push($images, array("url" => "http://i.imgur.com/iPOS6.gif"));
			array_push($images, array("url" => "http://i.imgur.com/PQgs4.gif"));
			array_push($images, array("url" => "http://i.imgur.com/SjEAu.gif"));
			array_push($images, array("url" => "http://i.imgur.com/xllQb.gif"));
			array_push($images, array("url" => "http://i.imgur.com/kYCOw.gif"));
			array_push($images, array("url" => "http://i.imgur.com/MMH35.gif"));
			array_push($images, array("url" => "http://24.media.tumblr.com/tumblr_m68rbaBv7P1qan85vo1_500.gif"));
			array_push($images, array("url" => "http://25.media.tumblr.com/tumblr_m7r9adlmSO1r3wgneo1_500.gif"));
			array_push($images, array("url" => "http://25.media.tumblr.com/tumblr_m6xa04YF5N1qc66bjo1_500.gif"));
			array_push($images, array("url" => "http://25.media.tumblr.com/tumblr_m7mnmzPWZv1qcd4g3o1_500.gif"));
			array_push($images, array("url" => "http://i.imgur.com/S6Xvp.gif"));
			array_push($images, array("url" => "http://static.tumblr.com/jsafxzh/qFYm7rcnj/thedarkknightrises_annehathaway_sidebar.gif"));
			array_push($images, array("url" => "http://25.media.tumblr.com/tumblr_lntfhb8am81qb7icgo1_500.gif"));
			array_push($images, array("url" => "http://i.imgur.com/NVPgz.gif"));
			array_push($images, array("url" => "http://24.media.tumblr.com/tumblr_m7jujzeXzD1qa20meo1_400.gif"));
			array_push($images, array("url" => "http://24.media.tumblr.com/tumblr_lxpp598zDG1r3ibruo1_500.gif"));
			array_push($images, array("url" => "http://24.media.tumblr.com/tumblr_m23cadVRuk1qanzneo1_400.gif"));
			array_push($images, array("url" => "http://25.media.tumblr.com/tumblr_m78rgb3nj41qdvrs8o1_500.gif"));
			array_push($images, array("url" => "http://24.media.tumblr.com/tumblr_m72qmx8Jb91r3gqu3o1_500.gif"));
			array_push($images, array("url" => "http://25.media.tumblr.com/tumblr_m6yxdjZEpm1rrj10do1_500.gif"));
			array_push($images, array("url" => "http://24.media.tumblr.com/tumblr_m45ay0x3td1qdvrs8o1_500.gif"));
			array_push($images, array("url" => "http://24.media.tumblr.com/tumblr_m7nfe5wGMZ1r8quyio1_500.gif"));
			array_push($images, array("url" => "http://25.media.tumblr.com/tumblr_m39tl1ZIil1qdq34io1_400.gif"));
			array_push($images, array("url" => "http://25.media.tumblr.com/tumblr_m5geerw57T1qbhetko1_500.gif"));
			array_push($images, array("url" => "http://25.media.tumblr.com/tumblr_m78p1oIKt61qdvrs8o1_500.gif"));
			array_push($images, array("url" => "http://24.media.tumblr.com/tumblr_m5671ip4DS1qg39ewo1_500.gif"));
			array_push($images, array("title" => "Mitt Shakin' it", "url" => "http://i.imgur.com/MbmpG.gif"));
			array_push($images, array("title" => "Slap It", "url" => "http://mlkshk.com/r/KST4"));
			array_push($images, array("title" => "Beach Dance", "url" => "http://mlkshk.com/r/KST7"));
			array_push($images, array("title" => "Betty Shake", "url" => "http://mlkshk.com/r/HFKZ"));
			array_push($images, array("title" => "Halp!", "url" => "http://mlkshk.com/r/5R4G"));	
			array_push($images, array("title" => "Trainy Trainy", "url" => "http://mlkshk.com/r/4ZX6"));
			array_push($images, array("title" => "Sparkly", "url" => "http://mlkshk.com/r/2DDN"));
			array_push($images, array("title" => "Cinemagraph", "url" => "http://mlkshk.com/r/1PIZ"));
			array_push($images, array("title" => "Nearsighted Kid to the Pool", "url" => "http://mlkshk.com/r/2DGN"));
			array_push($images, array("title" => "Close It", "url" => "http://mlkshk.com/r/UJF"));
			array_push($images, array("title" => "OMG hipsters", "url" => "http://mlkshk.com/r/CRK"));
			array_push($images, array("title" => "breakfast dance", "url" => "http://mlkshk.com/r/7UB"));		
			array_push($images, array("title" => "PSY trash dance", "url" => "http://i.imgur.com/4BpJF.gif"));
			array_push($images, array("url" => "http://25.media.tumblr.com/tumblr_mc85zg81eZ1qeyoxro1_500.gif"));


	}

				
	//shuffle the array
	shuffle($images);			
				
	$images_json = json_encode(
						array(
							"category" => $imagecategory,
							"data" => $images,
							"success" => "true",
							"status" => 200
						));
	
	header('Content-type: application/json;charset=utf-8');	
	echo $images_json;
