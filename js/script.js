// fancybox
jQuery.fn.getTitle = function() { // Copy the title of every IMG tag and add it to its parent A so that fancybox can show titles
  var arr = jQuery("a.fancybox");
  jQuery.each(arr, function() {
    var title = jQuery(this).children("img").attr("title");
    jQuery(this).attr('title',title);
  })
}
var thumbnails = jQuery("a:has(img)").not(".nolightbox").filter( function() { return /\.(jpe?g|png|gif|bmp)$/i.test(jQuery(this).attr('href')) }); // Find .post>a>img and create fancybox image gallery
var posts = jQuery(".images"); //find post
posts.each(function() {
  jQuery(this).find(thumbnails).addClass("fancybox").attr("rel","fancybox"+posts.index(this)).getTitle()
});
jQuery("a.fancybox").fancybox({ // fancybox on
  helpers : {
    overlay : {
      locked : false // try changing to true and scrolling around the page
    }
  }
});

// main slider
$('.slider-main').slick({
  infinite: true,
  slidesToShow: 4,
  slidesToScroll: 1,
	dots: false,
	autoplay: true,
	autoplaySpeed: 7000,
	arrows: true,
	responsive: [
		{
			breakpoint: 1201,
			settings: {
				slidesToShow: 3
			}
		},
		{
			breakpoint: 993,
			settings: {
				slidesToShow: 2
			}
		},
		{
			breakpoint: 769,
			settings: {
				slidesToShow: 1
			}
		},
	]
});

// burger menu
$('.burger-menu').click(function () {
  $(this).toggleClass('active');
  $('.menu-container').slideToggle();
});

// forms
function sendMyForm(myclass, myfile, mytext) {
  jQuery(document).ready(function($) {
    $('#'+myclass).submit(function() {
      var str = $(this).serialize();
      $.ajax({
        type: 'POST',
        url: '/mail/'+myfile+'.php',
        data: str,
        success: function(msg){
          if(msg == 'OK'){
            result = '<h3 class="centered">'+mytext+'</h3>';
            $('#'+myclass).html(result);
          }else{
            result = 'нее';
            $('#'+myclass).html(result);
          }
        }
      });
      return false;
    });
  });
};

sendMyForm('fformid', 'call', 'Спасибо, скоро мы с Вами свяжемся!');

function fform(title) {
	$('.fform-modal .title').html(title);
	$('#form-modal-title').val(title);
}
