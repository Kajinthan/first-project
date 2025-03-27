<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Applight Template By W3 Template</title>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.css">
<link rel="stylesheet" href="css/animate.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="style.css"/>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
<!-- Font Google -->
<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>

<!-------Contact Start------->
<section class="contact section-padding" data-scroll-index='6'>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
          <div class="row card p-5 mx-auto" style="width: 40rem;">
            <div class="col-sm-12 col-md-12 col-lg-12">
              <div class="sectioner-header text-center">
                <h3>Chess Clash<br>University of Vavuniya</h3>
                <span class="line"></span>
                <p>Login</p>
              </div>
              <form id="contact_form"  action="controllers/login.php" method="POST">
                <input type="text" id="userName" class="form-input w-100" name="userName" placeholder="Username">
                <input type="text" id="userPassword" class="form-input w-100" name="userPassword" placeholder="User Password">
                <button href="./index.html" class="btn-grad w-100 text-uppercase" type="submit" name="button">Login</button>
              </form>
            </div>
          </div>
      </div>
    </div>
  </div>
</section>

<!-------Contact End-------> 



<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script> 
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script> 
<script src="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.min.js"></script> 
<!-- scrollIt js --> 
<script src="js/scrollIt.min.js"></script> 
<script src="js/wow.min.js"></script> 
<script>
	wow = new WOW();
	wow.init();
$(document).ready(function(e) {

	$('#video-icon').on('click',function(e){
	e.preventDefault();
	$('.video-popup').css('display','flex');
	$('.iframe-src').slideDown();
	});
	$('.video-popup').on('click',function(e){
	var $target = e.target.nodeName;
	var video_src = $(this).find('iframe').attr('src');
	if($target != 'IFRAME'){
	$('.video-popup').fadeOut();
	$('.iframe-src').slideUp();
	$('.video-popup iframe').attr('src'," ");
	$('.video-popup iframe').attr('src',video_src);
	}
	});

	$('.slider').bxSlider({
	pager: false
	});
});
    
$(window).on("scroll",function () {

	var bodyScroll = $(window).scrollTop(),
	navbar = $(".navbar");
	
	if(bodyScroll > 50){
	$('.navbar-logo img').attr('src','images/unilogo-black.png');
	navbar.addClass("nav-scroll");

}else{
	$('.navbar-logo img').attr('src','images/unilogo2.png');
	navbar.removeClass("nav-scroll");
}

});
$(window).on("load",function (){
	var bodyScroll = $(window).scrollTop(),
	navbar = $(".navbar");
	
	if(bodyScroll > 50){
	$('.navbar-logo img').attr('src','images/logo-black.png');
	navbar.addClass("nav-scroll");
	}else{
	$('.navbar-logo img').attr('src','images/logo-white.png');
	navbar.removeClass("nav-scroll");
	}

	$.scrollIt({
	
	easing: 'swing',      // the easing function for animation
	scrollTime: 900,       // how long (in ms) the animation takes
	activeClass: 'active', // class given to the active nav element
	onPageChange: null,    // function(pageIndex) that is called when page is changed
	topOffset: -63
	});
});

</script>
</body>
</html>
