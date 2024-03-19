// script to run a jquery plugin in for slider
// link: https://www.jqueryscript.net/slider/Elegant-Banner-Slider-Carousel-Plugin-jQuery-kaiBanner.html
	$('.kai_banner_container').kaiBanner({
		minWidth:1200,
		intervalTime:2000,
		highlightClass:'highlight'
	});

	$('.kai_banner2_container').kaiBanner();

	$('.kai_banner3_container').kaiBanner({
		speed:1000,
		intervalTime:3000,
		fixedWidth:true,
		minWidth:980,
		highlightClass:'highlight'
	});




  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-36251023-1']);
  _gaq.push(['_setDomainName', 'jqueryscript.net']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();
