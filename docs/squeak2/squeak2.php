<?php
	// Start session.
	session_start();
	
	// Set a key, checked in mailer, prevents against spammers trying to hijack the mailer.
	$security_token = $_SESSION['security_token'] = uniqid(rand());
	
	if ( ! isset($_SESSION['formMessage'])) {
		$_SESSION['formMessage'] = '</br><h2>Please fill in the form below to send me an email.</h2><br />If you wish to send files, please send me a message and I will reply with an email address.<br />If you don\'t have an email address, please tell me, also how to get in touch with you.  (At the moment I can do the <a href="http://nocturn1.proboards56.com/index.cgi" rel="external" title="Forum">Nocturn Forum</a> or <a href="http://www.facebook.com" rel="external" title="Facebook">Facebook</a>).';	
	}
	
	if ( ! isset($_SESSION['formFooter'])) {
		$_SESSION['formFooter'] = '';
	}
	
	if ( ! isset($_SESSION['form'])) {
		$_SESSION['form'] = array();
	}
	
	function check($field, $type = '', $value = '') {
		$string = "";
		if (isset($_SESSION['form'][$field])) {
			switch($type) {
				case 'checkbox':
					$string = 'checked="checked"';
					break;
				case 'radio':
					if($_SESSION['form'][$field] === $value) {
						$string = 'checked="checked"';
					}
					break;
				case 'select':
					if($_SESSION['form'][$field] === $value) {
						$string = 'selected="selected"';
					}
					break;
				default:
					$string = $_SESSION['form'][$field];
			}
		}
		return $string;
	}
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="generator" content="RapidWeaver" />
		<link rel="icon" href="http://www.tempesttwins.co.uk/favicon.ico" type="image/x-icon" />
		<link rel="shortcut icon" href="http://www.tempesttwins.co.uk/favicon.ico" type="image/x-icon" />
		
		<title>Squeak To Me</title>
		<link rel="stylesheet" type="text/css" media="screen" href="../rw_common/themes/alpha/styles.css"  />
		<!--[if IE 6]><link rel="stylesheet" type="text/css" media="screen" href="../rw_common/themes/alpha/ie6.css"  /><![endif]-->
		<link rel="stylesheet" type="text/css" media="screen" href="../rw_common/themes/alpha/colourtag-theme-default.css"  />
		<link rel="stylesheet" type="text/css" media="print" href="../rw_common/themes/alpha/print.css"  />
		<link rel="stylesheet" type="text/css" media="handheld" href="../rw_common/themes/alpha/handheld.css"  />
		<!--[if IE 6]><style type="text/css" media="screen">body {behavior: url(../rw_common/themes/alpha/csshover.htc);}</style><![endif]-->
		<link rel="stylesheet" type="text/css" media="screen" href="../rw_common/themes/alpha/css/width/700.css" />
		<link rel="stylesheet" type="text/css" media="screen" href="../rw_common/themes/alpha/css/sidebar/sidebar_right.css" />
				
				
		<script type="text/javascript" src="../rw_common/themes/alpha/javascript.js"></script>
		
		<!--[if IE 6]><script type="text/javascript" charset="utf-8">
			var blankSrc = "../rw_common/themes/alpha/png/blank.gif";
		</script>	
		<style type="text/css">
			img.pngfix {
				behavior:	url("../rw_common/themes/alpha/png/pngbehavior.htc");
			}
		</style><![endif]-->
		
		
	</head>
<body>
<div id="bodyGrad">
	<img class="pngfix" src="../rw_common/themes/alpha/images/body_grad.png" alt="" style="width: 3000px; height: 400px;" />
</div>
<div id="container"><!-- Start container -->
	<div id="pageHeader"><!-- Start page header -->
		<div id="grad"><img class="pngfix" src="../rw_common/themes/alpha/images/header_top_grad.png" alt="" style="width: 3000px; height: 72px;" /></div>
		
		<h1></h1>
		<h2></h2>
	</div><!-- End page header -->
	<div id="navcontainer"><!-- Start Navigation -->
		<ul><li><a href="../index.html" rel="self">Home</a></li><li><a href="../books/books.html" rel="self">Books</a></li><li><a href="../sites/sites.html" rel="self">Web Sites</a><ul><li><a href="../sites/vampirates/vampirates.html" rel="external">Vampirates</a></li><li><a href="../sites/vampirateship/Vampirateship.html" rel="external">Vampirateship</a></li><li><a href="http://www.freewebs.com/thenocturn/" rel="external">The Nocturn</a></li><li><a href="http://nocturn1.proboards56.com/index.cgi" rel="external">Nocturn Forum</a></li><li><a href="http://www.freewebs.com/vampirateseverything/index.htm" rel="external">......... Everything</a></li></ul></li><li><a href="../news/news.html" rel="self">News</a><ul><li><a href="../news/swords/swords.html" rel="self">Swords</a></li></ul></li><li><a href="../justin/justin.html" rel="self">Justin Somper</a><ul><li><a href="../justin/youtube/youtube.html" rel="self">You Tube</a></li><li><a href="../justin/iw/iw.html" rel="self">IW Blog Tour</a></li><li><a href="../justin/newsround/newsround.html" rel="self">Hotseat</a></li><li><a href="../justin/pb/pb.html" rel="self">Pirate Books</a></li><li><a href="../justin/bbb/bbb.html" rel="self">Bitten By Books</a></li><li><a href="../justin/bluepeter/bluepeter.html" rel="self">Blue Peter Blog</a></li><li><a href="../justin/bwr/bwr.html" rel="self">Big Wild Read</a></li></ul></li><li><a href="../timeline/timeline.html" rel="self">Timeline</a></li><li><a href="../name/name.html" rel="self">Characters</a><ul><li><a href="../name/favourites/favourites.html" rel="self">Favourites</a></li></ul></li><li><a href="../ideas/ideas.html" rel="self">Your Ideas</a><ul><li><a href="../ideas/dolphin/dolphin.html" rel="self">Dirty Dolphin</a></li><li><a href="../ideas/short/short.html" rel="self">Short Stories</a><ul><li><a href="../ideas/short/stories/stories.html" rel="self">Stories</a></li><li><a href="../ideas/short/no3/no3.html" rel="self">After No3</a></li><li><a href="../ideas/short/no4/no4.html" rel="self">After No4</a></li></ul></li><li><a href="../ideas/tv/tv.html" rel="self">Film or TV</a><ul><li><a href="../ideas/tv/trailers/trailers.html" rel="self">Trailers</a></li></ul></li><li><a href="../ideas/quiz/quiz.html" rel="self">Quiz</a></li><li><a href="../ideas/lookalikes/lookalikes.html" rel="self">Lookalikes</a><ul><li><a href="../ideas/lookalikes/artwork/artwork.html" rel="self">Artwork</a></li><li><a href="../ideas/lookalikes/page47/page47.html" rel="self">Photos</a></li></ul></li><li><a href="../ideas/pics/pics.html" rel="self">Pictures</a><ul><li><a href="../ideas/pics/vampirate/vampirate.html" rel="self">Vampirates</a></li><li><a href="../ideas/pics/twilight/twilight.html" rel="self">Twilight</a></li><li><a href="../ideas/pics/newmoon/newmoon.html" rel="self">New Moon</a></li><li><a href="../ideas/pics/eclipse/eclipse.html" rel="self">Eclipse</a></li><li><a href="../ideas/pics/bd/bd.html" rel="self">Breaking Dawn</a></li><li><a href="../ideas/pics/duck/duck.html" rel="self">Little Duck</a></li></ul></li></ul></li><li><a href="../pirate/pirate.html" rel="self">Pirates</a><ul><li><a href="../pirate/webpirate/webpirate.html" rel="self">Websites</a></li><li><a href="../pirate/phrases/phrases.html" rel="self">Phrases</a></li><li><a href="../pirate/famous/famous.html" rel="self">Famous Pirates</a></li><li><a href="../pirate/song/song.html" rel="self">Song Lyrics</a></li><li><a href="../pirate/sq/sq.html" rel="self">Squares</a></li></ul></li><li><a href="../reviews/reviews.html" rel="self">Book Reviews</a><ul><li><a href="../reviews/cassieclare/cassieclare.html" rel="self">cassieclare</a></li></ul></li><li><a href="../ourcrew/ourcrew.html" rel="self">Our Crew</a><ul><li><a href="../ourcrew/where/where.html" rel="self">Where Are You</a></li></ul></li><li><a href="../blog/blog.php" rel="self">Blog</a><ul><li><a href="../blog/jan11/jan11.php" rel="self">Blog Jan 2011</a></li><li><a href="../blog/july10/july10.php" rel="self">Blog July 2010</a></li><li><a href="../blog/jan10/jan10.php" rel="self">Blog Jan 2010</a></li><li><a href="../blog/july09/july09.php" rel="self">Blog July 2009</a></li><li><a href="../blog/jan09/jan09.html" rel="self">Blog Jan 2009</a></li><li><a href="../blog/july08/july08.html" rel="self">Blog July 2008</a></li><li><a href="../blog/jan08/jan08.html" rel="self">Blog Jan 2008</a></li><li><a href="../blog/sept07/sept07.html" rel="self">Blog 2007</a></li></ul></li><li><a href="../who/who.html" rel="self">Who Am I ?</a><ul><li><a href="../who/reading/reading.html" rel="self">Reading</a></li><li><a href="../who/lesson/lesson.html" rel="self">Lessons</a></li><li><a href="../who/books/books.html" rel="self">Books</a></li></ul></li><li><a href="squeak2.php" rel="self" id="current">Squeak</a></li></ul>
	</div><!-- End navigation -->
	<div class="clearer"></div>
	<div id="sidebarContainer"><!-- Start Sidebar wrapper -->
		<div id="sidebar"><!-- Start sidebar content -->
			<h1 class="sideHeader"></h1><!-- Sidebar header -->
			<!-- sidebar content you enter in the page inspector -->
			 <!-- sidebar content such as the blog archive links -->
		</div><!-- End sidebar content -->
	</div><!-- End sidebar wrapper -->
	<div id="contentContainer"><!-- Start main content wrapper -->
		<div id="content"><!-- Start content -->
			
<div class="message-text"><?php echo $_SESSION['formMessage']; unset($_SESSION['formMessage']); ?></div><br />

<form action="./files/mailer.php" method="post" enctype="multipart/form-data">
	 <div>
		<label>Your Character Name:</label> *<br />
		<input class="form-input-field" type="text" value="<?php echo check('element0'); ?>" name="form[element0]" size="40"/><br /><br />

		<label>Your Email:</label> *<br />
		<input class="form-input-field" type="text" value="<?php echo check('element1'); ?>" name="form[element1]" size="40"/><br /><br />

		<label>Please re-type your email address:</label> *<br />
		<input class="form-input-field" type="text" value="<?php echo check('element2'); ?>" name="form[element2]" size="40"/><br /><br />

		<label>Page or Subject:</label> *<br />
		<input class="form-input-field" type="text" value="<?php echo check('element3'); ?>" name="form[element3]" size="40"/><br /><br />

		<label>Message:</label> *<br />
		<textarea class="form-input-field" name="form[element4]" rows="8" cols="38"><?php echo check('element4'); ?></textarea><br /><br />

		<div style="display: none;">
			<label>Spam Protection: Please don't fill this in:</label>
			<textarea name="comment" rows="1" cols="1"></textarea>
		</div>
		<input type="hidden" name="form_token" value="<?php echo $security_token; ?>" />
		<input class="form-input-button" type="reset" name="resetButton" value="Reset" />
		<input class="form-input-button" type="submit" name="submitButton" value="Submit" />
	</div>
</form>

<br />
<div class="form-footer"><?php echo $_SESSION['formFooter']; unset($_SESSION['formFooter']); ?></div><br />

<?php unset($_SESSION['form']); ?>
		</div><!-- End content -->
	</div><!-- End main content wrapper -->
	<div class="clearer"></div>
	<div id="footer"><!-- Start Footer -->
		<p></p>
		<div id="breadcrumbcontainer"><!-- Start the breadcrumb wrapper -->
			<ul><li><a href="../index.html">Home</a>&nbsp;>&nbsp;</li><li><a href="squeak2.php">Squeak</a>&nbsp;>&nbsp;</li></ul>
		</div><!-- End breadcrumb -->
	</div><!-- End Footer -->
</div><!-- End container -->
</body>
</html>
