<!doctype html>
<html>
<head>
<meta charset="utf-8">
<link rel="shortcut icon" href="images/logo.gif">
<link rel="stylesheet" href="MainFrame.css" />
<script src="jquery.js"></script>
<title>Musics</title>
</head>

<body>
<div class="loading">
	<div style="height: 50%; position: fixed; width: 100%; text-align: center;z-index:4;padding:0px;margin:0px;">
    <p style="font-family:'Neirizi';font-size:30px;color:#FFF;width:100%;text-align:center;position:absolute;bottom:150px;direction:rtl;">لطفا صبر کنید ...</p>
    <center><div id="1" style="bottom:-100px;position:absolute;z-index:5;background-image:url(images/logo.gif);width:100%;height:200px;background-size: 200px auto;background-repeat: no-repeat;background-position:center;"></div></center>
    <!--<div id="1" style="bottom:-200px;position:absolute;z-index:5;background-image:url(images/loading.gif);width:100%;height:50px;background-size: 50px auto;background-repeat: no-repeat;background-position:center;"></div>-->
    </div>
</div>
<div class="header">
	<center><ul class="menu">
    	<li><a href="#" title="Home"><img src="images/home_icon.png" width="30px" height="30px" style="margin-top: 10px;" /></a></li>
        <!--<div class="popup">Home</div>-->
        <li><a href="#" title="News"><img src="images/news_icon.png" width="30px" height="30px" style="margin-top: 10px;" /></a></li>
        <li><a href="#" title="Discography"><img src="images/headphone_icon.png" width="30px" height="30px" style="margin-top: 10px;" /></a></li>
        <li><a href="#" title="about us"><img src="images/info_icon.png" width="30px" height="30px" style="margin-top: 10px;" /></a></li>
    </ul></center>
</div>

<div class="footer">
	<center><ul class="social">
    	<li><a href="#" title="facebook"><img src="images/facebook_icon.png" width="30px" height="30px" style="margin-top: 10px;" /></a></li>
        <li><a href="#" title="instagram"><img src="images/instagram_icon.png" width="30px" height="30px" style="margin-top: 10px;" /></a></li>
        <li><a href="#" title="twitter"><img src="images/twitter_icon.png" width="30px" height="30px" style="margin-top: 10px;" /></a></li>
    </ul></center>
	<p style="display:none;">54 Stars &reg;<br />2014</p>
</div>
</body>
<script type="text/javascript">
	/*$(window).load(function(e){
		$('div.loading').fadeOut(600);
	});*/
	$(document).ready(function(e) {
		$('img').load(function(){
			$('div.loading').fadeOut(600);
		});
		$('ul.menu').hide();
		$('ul.social').hide();
		$('div.footer p').hide();
		//$('div.members ul').hide();
		//$('div.members').hide();
		$('div.header').delay(600);
		$('div.footer').delay(600);
		$('ul.menu').delay(2000);
		$('ul.social').delay(2000);
		$('div.footer p').delay(2000);
		//$('div.members').fadeIn();
		//$('div.members').animate({'width':'100%'},2000);
		$('div.header').animate({'height':'50px'},1500);
		$('div.footer').animate({'height':'60px'},1500);
		//$('div.members ul').delay(2500);
		//$('div.members ul').fadeIn(1000);
		//$('div.subject').delay(2500);
		$('ul.menu').fadeIn(1000);
		$('ul.social').fadeIn(1000);
		$('div.footer p').fadeIn(1000);
		//$('div.subject').fadeIn(1000);
	});
</script>
<noscript>
<p>Your Browser Doesn't Support JavaScript!</p>
</noscript>
</html>
