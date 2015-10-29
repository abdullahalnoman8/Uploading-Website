<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>A Complete Software</title>

<script type="text/javascript" src="./slideshow/js/jquery-1.3.1.min.js"></script>
<script type="text/javascript">

$(document).ready(function() {		
	
	//Execute the slideShow
	slideShow();

});

function slideShow() {

	//Set the opacity of all images to 0
	$('#gallery a').css({opacity: 0.0});
	
	//Get the first image and display it (set it to full opacity)
	$('#gallery a:first').css({opacity: 1.0});
	
	//Set the caption background to semi-transparent
	$('#gallery .caption').css({opacity: 0.7});

	//Resize the width of the caption according to the image width
	$('#gallery .caption').css({width: $('#gallery a').find('img').css('width')});
	
	//Get the caption of the first image from REL attribute and display it
	$('#gallery .content').html($('#gallery a:first').find('img').attr('rel'))
	.animate({opacity: 0.7}, 400);
	
	//Call the gallery function to run the slideshow, 6000 = change to next image after 6 seconds
	setInterval('gallery()',6000);
	
}

function gallery() {
	
	//if no IMGs have the show class, grab the first image
	var current = ($('#gallery a.show')?  $('#gallery a.show') : $('#gallery a:first'));

	//Get next image, if it reached the end of the slideshow, rotate it back to the first image
	var next = ((current.next().length) ? ((current.next().hasClass('caption'))? $('#gallery a:first') :current.next()) : $('#gallery a:first'));	
	
	//Get next image caption
	var caption = next.find('img').attr('rel');	
	
	//Set the fade in effect for the next image, show class has higher z-index
	next.css({opacity: 0.0})
	.addClass('show')
	.animate({opacity: 1.0}, 1000);

	//Hide the current image
	current.animate({opacity: 0.0}, 1000)
	.removeClass('show');
	
	//Set the opacity to 0 and height to 1px
	$('#gallery .caption').animate({opacity: 0.0}, { queue:false, duration:0 }).animate({height: '1px'}, { queue:true, duration:300 });	
	
	//Animate the caption, opacity to 0.7 and heigth to 100px, a slide up effect
	$('#gallery .caption').animate({opacity: 0.7},100 ).animate({height: '100px'},500 );
	
	//Display the content
	$('#gallery .content').html(caption);
	
	
}

</script>
<style type="text/css">
body{
	font-family:arial
}
h1{
    color: black;
    width: auto;
}
.clear {
	clear:both
}

#gallery {
	position:relative;
	height:360px
}
	#gallery a {
		float:left;
		position:absolute;
	}
	
	#gallery a img {
		border:none;
	}
	
	#gallery a.show {
		z-index:500
	}

	#gallery .caption {
		z-index:600; 
		background-color:#000; 
		color:#ffffff; 
		height:100px; 
		width:100%; 
		position:absolute;
		bottom:0;
	}

	#gallery .caption .content {
		margin:5px
	}
	
	#gallery .caption .content h3 {
		margin:0;
		padding:0;
		color:#1DCCEF;
	}
	

</style>
</head>
<body>
<h1>A Complete Demo Of Software</h1>
<div id="gallery">

	<a href="#" class="show">
		<img src="./slideshow/images/page_1.png" alt="home page" width="580" height="360" title="" alt="" rel="<h3>Home page</h3>. This first page of the software. "/>
	</a>
	
	<a href="#">
		<img src="./slideshow/images/page_2.png" alt="salary page" width="580" height="360" title="" alt="" rel="<h3>Salary</h3> This is the salary page and in here above application will be occur. "/>
	</a>
	
	<a href="#">
		<img src="./slideshow/images/page_3.png" alt="settings" width="580" height="360" title="" alt="" rel="<h3>Settings</h3> This is the settings page and in here above application will be occur."/>
	</a>

	<a href="#">
		<img src="./slideshow/images/page_4.png" alt="report" width="580" height="360" title="" alt="" rel="<h3>Report</h3> This is the report page and in here above application will be occur."/>
	</a>
	
	<!--
	<a href="#">
		<img src="images/mojave.jpg" alt="Mojave" width="580" height="360" title="" alt="" rel="<h3>Mojave</h3>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt."/>
	</a>
		
	<a href="#">
		<img src="images/pier.jpg" alt="Pier" width="580" height="360" title="" alt="" rel="<h3>Pier</h3>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua."/>
	</a>
	
	<a href="#">
		<img src="images/sea-mist.jpg" alt="Sea Mist" width="580" height="360" title="" alt="" rel="<h3>Sea Mist</h3>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat."/>
	</a>
	
	<a href="#">
		<img src="images/stones.jpg" alt="Stone" width="580" height="360" title="" alt="" rel="<h3>Stone</h3>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur."/>
	</a>
           -->
	<div class="caption"><div class="content"></div></div>
</div>
<div class="clear"></div>

<br/><br/>


</body>
</html>
