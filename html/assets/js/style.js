
(function($){
    "use strict"; // Start of use strict
    
    /* ---------------------------------------------
     TOP BAR DROPDOWN
     --------------------------------------------- */
     $('#top-bar .dropdown').on('show.bs.dropdown', function () {
        $(this).find('.dropdown-menu').addClass('topbar-animated slideInUp');
     })
     $('#top-bar .dropdown').on('hide.bs.dropdown', function () {
        $(this).find('.dropdown-menu').removeClass('topbar-animated slideInUp');
     })
    /* ---------------------------------------------
     SELECT CATEGORY 
     --------------------------------------------- */
     if($('#category-select').length >0){
        $('#category-select').selectmenu().addClass( "overflow" );
     }
    
    $(document).ready(function(){

    })
    /* ---------------------------------------------
     HOME SLIDER 
     --------------------------------------------- */
    $('#home-slider .sliders').owlCarousel({
        autoplay:true,
        margin:0,
        nav:true,
        items:1,
        smartSpeed:700,
        animateOut:'slideOutDown',
        animateIn:'zoomIn',
        navText:['<i class="fa fa-angle-left"></i>','<i class="fa fa-angle-right"></i>']
    })
    /* ---------------------------------------------
     OWL 
     --------------------------------------------- */
    $(".owl-carousel").each(function(index, el) {
      var config = $(this).data();
      console.log(config);
      config.navText = ['<i class="fa fa-angle-left"></i>','<i class="fa fa-angle-right"></i>'];
      config.smartSpeed="500";
      $(this).owlCarousel(config);
    });
    /* ---------------------------------------------
     COUNT DOWN
     --------------------------------------------- */
    $('[data-countdown]').each(function() {
       var $this = $(this),
       finalDate = $(this).data('countdown');

       $this.countdown(finalDate, function(event) {
         //var fomat ='<span>%H</span><b></b><span>%M</span><b></b><span>%S</span>';
         var fomat ='<span>%D days %H : %M :%S</span>';
         $this.html(event.strftime(fomat));
       });
    });

})(jQuery); // End of use strict