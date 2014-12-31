<!doctype html>
<html>
<head>
<meta charset="utf-8">
<link rel="shortcut icon" href="css/images/logo.gif">
<link rel="stylesheet" href="css/MainFrame.css" />
<link rel="stylesheet" href="css/54Stars_Home.css" />
<link href='http://fonts.googleapis.com/css?family=Abel' rel='stylesheet' type='text/css'>
<script src="js/jquery.js"></script>
<title>54Stars|About Us</title>
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
    	<li><a href="#" title="about us"><img src="images/info_icon.png" width="30px" height="30px" style="margin-top: 10px;" /></a></li>
    	<!--<li><a href="#" title="Home"><img src="images/home_icon.png" width="30px" height="30px" style="margin-top: 10px;" /></a></li>-->
        <!--<div class="popup">Home</div>-->
        <li><a href="#" title="News"><img src="images/news_icon.png" width="30px" height="30px" style="margin-top: 10px;" /></a></li>
        <li><a href="#" title="Discography"><img src="images/headphone_icon.png" width="30px" height="30px" style="margin-top: 10px;" /></a></li>
    </ul></center>
</div>
<div class="members">
	<div class="subject">
    <!--Members of <img src="images/logo.gif" width="50" height="50" style="margin-bottom:-15px;"> Music Band-->
    <!--<div style="direction:rtl; font-family:'Neirizi' !important; border-top: 3px solid #457485; border-bottom: 3px solid #457485;">اعضای گروه موسیقی</div>-->
    </div>
	<center><ul>
    	<li id="first" style="overflow:hidden;"><img src="images/Music.png" width="100"></li>
        <li id="second" style="overflow:hidden;"><img src="images/63972519.jpg" width="100"></li>
        <li id="third" style="overflow:hidden;"><img src="images/Music.png" width="100"></li>
        <li id="fourth" style="overflow:hidden;"><img src="images/63972519.jpg" width="100"></li>
        <li id="fifth" style="overflow:hidden;"><img src="images/Music.png" width="100"></li>
    </ul></center>
</div>
<div class="defenition">
	<div id="back"></div>
    <div id="first">
    	<center><img src="images/Music.png" width="200" style="border-radius: 50%;overflow: hidden;box-shadow: 2px 2px 5px #000;margin-top: -100px;background-color: #666;"></center>
        <p>First Item<br>
fbbfb<br>
fbfb<br>
f</p>
	<input id="close" type="button" value="Close">
    </div>
    <div id="second">
    	<center><img src="images/63972519.jpg" width="200" style="border-radius: 50%;overflow: hidden;box-shadow: 2px 2px 5px #000;margin-top: -100px;background-color: #666;"></center>
        <p>Second Item<br>
fbbfb<br>
fbfb<br>
f</p>
	<input id="close" type="button" value="Close">
    </div>
    <div id="third">
    	<center><img src="images/Music.png" width="200" style="border-radius: 50%;overflow: hidden;box-shadow: 2px 2px 5px #000;margin-top: -100px;background-color: #666;"></center>
        <p>third Item<br>
fbbfb<br>
fbfb<br>
f</p>
	<input id="close" type="button" value="Close">
    </div>
    <div id="fourth">
    	<center><img src="images/63972519.jpg" width="200" style="border-radius: 50%;overflow: hidden;box-shadow: 2px 2px 5px #000;margin-top: -100px;background-color: #666;"></center>
        <p>Fourth Item<br>
fbbfb<br>
fbfb<br>
f</p>
	<input id="close" type="button" value="Close">
    </div>
    <div id="fifth">
    	<center><img src="images/Music.png" width="200" height="200" style="border-radius: 50%;overflow: hidden;box-shadow: 2px 2px 5px #000;margin-top: -100px;background-color: #666;"></center>
        <p>Fifth Item<br>
fbbfb<br>
fbfb<br>
f</p>
	<input id="close" type="button" value="Close">
    </div>
</div>
<div class="footer">
	<center><ul class="social">
    	<li><a href="#" title="facebook"><img src="images/facebook_icon.png" width="30px" height="30px" style="margin-top: 10px;" /></a></li>
        <li><a href="#" title="instagram"><img src="images/instagram_icon.png" width="30px" height="30px" style="margin-top: 10px;" /></a></li>
        <li><a href="#" title="twitter"><img src="images/twitter_icon.png" width="30px" height="30px" style="margin-top: 10px;" /></a></li>
    </ul></center>
	<p style="display:none;font-size: 9px;">54 Stars &reg;<br />2014</p>
</div>
</body>
<script type="text/javascript">
	/*$(window).load(function(e){
		$('div.loading').fadeOut(600);
	});*/
		$(window).load(function(){
			$('div.loading').fadeOut(600);
		});
		$('ul.menu').hide();
		$('ul.social').hide();
		$('div.footer p').hide();
		$('div.members ul').hide();
		$('div.members').hide();
		$('div.header').delay(600);
		$('div.footer').delay(600);
		$('ul.menu').delay(2000);
		$('ul.social').delay(2000);
		$('div.footer p').delay(2000);
		$('div.members').fadeIn();
		$('div.members').animate({'width':'100%'},2000);
		$('div.header').animate({'height':'25px'},1500);
		$('div.footer').animate({'height':'50px'},1500);
		$('div.members ul').delay(2500);
		$('div.members ul li').delay(2500);
		$('div.members ul').fadeIn(1000);
		$('div.members ul li').animate({'width':'100px','height':'100px'},600);
		/*$('div.members ul li').mouseenter(function(){
			$(this).animate({'width':'110px','height':'110px'},100);
			$('div.members ul li img').animate({'width':'110px','height':'110px'},100);
		});
		$('div.members ul li').mouseleave(function(){
			$(this).animate({'width':'100px','height':'100px'},100);
			$('div.members ul li img').animate({'width':'100px','height':'100px'},100);
		});*/
		$('div.members ul li').click(function(){
			$('div.defenition #back').fadeIn(1000);
			/*$('div.defenition #first').delay(1000);
			$('div.defenition #first').fadeIn(1000);*/
		});
		$('div.members ul li#first').click(function(){
			$('div.defenition #first').delay(1000);
			$('div.defenition #first').fadeIn(1000);
		});
		$('div.members ul li#second').click(function(){
			$('div.defenition #second').delay(1000);
			$('div.defenition #second').fadeIn(1000);
		});
		$('div.members ul li#third').click(function(){
			$('div.defenition #third').delay(1000);
			$('div.defenition #third').fadeIn(1000);
		});
		$('div.members ul li#fourth').click(function(){
			$('div.defenition #fourth').delay(1000);
			$('div.defenition #fourth').fadeIn(1000);
		});
		$('div.members ul li#fifth').click(function(){
			$('div.defenition #fifth').delay(1000);
			$('div.defenition #fifth').fadeIn(1000);
		});
		$('div input#close').click(function(){
			$('div.defenition #back').delay(1000);
			$('div.defenition #first,div.defenition #second,div.defenition #third,div.defenition #fourth,div.defenition #fifth').fadeOut(1000);
			$('div.defenition #back').fadeOut(1000);
		});
		$('div.subject').delay(2500);
		$('ul.menu').fadeIn(1000);
		$('ul.social').fadeIn(1000);
		$('div.footer p').fadeIn(1000);
		$('div.subject').fadeIn(1000);
	
</script>
<noscript>
<p>Your Browser Doesn't Support JavaScript!</p>
</noscript>
</html>
