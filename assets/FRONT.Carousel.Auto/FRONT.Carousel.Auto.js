jQuery(function($) {
    var $s = $('.constant-simple-slider').slick({
          cssEase: 'linear',
          speed: 8000,
          autoPlay: false,
          pauseOnHover: false
      });
      $('.gotoright').click(function($) {
        $s.slick("setOption","speed",1,false)
      });
    $('.gotoleft').click(function($) {
      });
    });