jQuery(function () {
        
    var pull = $('#pull');
    menu = $('ul.mobile-menu');
    menuHeight = menu.height();
    $(pull).on('click', function(e) {
        e.preventDefault();
        menu.toggleClass('is-open');
        pull.toggleClass('rotate');
    });
    $(".mobile-submenu a").on('click', function(e) {
        e.preventDefault();
        $(this).parent().parent().find(".region-sidebar-left-first").toggleClass('show-dropdown');
    });
 
    $(function() {
        
       $("#banner ul.menu li.menu-mlid-1609").hover(function() { 
            if ($(window).width()>1050){
                $(this).find("ul").slideToggle("fast"); 
            }
       });
        $("#banner ul.menu li.menu-mlid-1615").hover(function() { 
            if ($(window).width()>1050){
                $(this).find("ul").slideToggle("fast"); 
            }
       });
         $("#banner ul.menu li.menu-mlid-1621").hover(function() { 
            if ($(window).width()>1050){
                $(this).find("ul").slideToggle("fast"); 
            }
       });
         $("#banner ul.menu li.menu-mlid-1678").hover(function() { 
            if ($(window).width()>1050){
                $(this).find("ul").slideToggle("fast"); 
            }
        });
         $("#banner ul.menu li.menu-mlid-1760").hover(function() { 
            if ($(window).width()>1050){
                $(this).find("ul").slideToggle("fast"); 
            }
        });
         

    });

    //End of mobile menu
    
    var win_height = $(window).height() - 75;
    var featured_f = win_height - $('.region-home-featured').height();
    var image_height = $('.item-img img').height() - 75;
    var featured_item = image_height - $('.region-home-featured').height()-25;
	
    featured_height = function(){
        if (image_height>win_height)
            return win_height;
        else
            return image_height;
    };

	$('.explore-science a').css({
	    top: featured_height() - 85 ,
	});
	$('.region-home-featured').css({
	    top: featured_height() - $('.region-home-featured').height(),
	});
    
	var box = featured_height() - $('.region-home-featured').height() + 10;
    $('.box').css({
        top: box,
    });
    
    var featured_science = $('.featured-area .views_slideshow_main').height();
    
    $('.featured-area .views-slideshow-controls-bottom').css({
	   height:featured_science,
    })
    
    var thumb_height = $('.views-slideshow-controls-bottom .views-slideshow-pager-field-item').height();
    
    $('.views-slideshow-controls-bottom .views-slideshow-pager-field-item .views-field-nid').css({
	   height: thumb_height,
    })
    
    var featured_explore = $('.featured-area .views_slideshow_main img').height();
    var explore_story = $('.featured-area .views_slideshow_main .item-content .explore-story a').height();
    $('.featured-area .views_slideshow_main .item-content .explore-story a').css({
	   top:featured_explore - explore_story -32,
    })

    var tabs_area = $('.content-bottom .views_slideshow_main').height();

    $('.content-bottom .views-slideshow-pager-fields').css({
            height:tabs_area+135,
    })
    $('.content-bottom .view-footer').css({
        top:tabs_area+135,
    })
    
    var slide_item = (tabs_area+135) / 4;
    $('.content-bottom .views-slideshow-controls-top .views-slideshow-pager-field-item').css({
        height: slide_item,
    })
    
    equalheight = function(carnegie_container){
        var currentTallest = 0,
             currentRowStart = 0,
             rowDivs = new Array(),
             $el,
             topPosition = 0;
         $(carnegie_container).each(function() {
        
           $el = $(this);
           $($el).height('auto')
           topPostion = $el.position().top;
        
           if (currentRowStart != topPostion) {
             for (currentDiv = 0 ; currentDiv < rowDivs.length ; currentDiv++) {
               rowDivs[currentDiv].height(currentTallest);
             }
             rowDivs.length = 0; // empty the array
             currentRowStart = topPostion;
             currentTallest = $el.height();
             rowDivs.push($el);
            } else {
             rowDivs.push($el);
             currentTallest = (currentTallest < $el.height()) ? ($el.height()) : (currentTallest);
            }
           for (currentDiv = 0 ; currentDiv < rowDivs.length ; currentDiv++) {
             rowDivs[currentDiv].height(currentTallest);
           }
         });
    }
    //End of equalheight function


    $(window).load(function() {
      equalheight('.panels-flexible-row-14-main-row .panel-pane');
      equalheight('.four-blocks-row');
      equalheight('.panels-flexible-row-14-3 .panel-pane');

      w = $(window).width();
      if ((w>640)&&(w<1060)){
        equalheight('#sidebar-right .block');
      }

        win_height = $(window).height() - 75;
        image_height = $('.item-img img').height() - 75;
        featured_item = image_height - $('.region-home-featured').height()-25;

        $('.explore-science a').css({
                    top: featured_height() - 85 ,

        });
        $('.region-home-featured').css({
            top: featured_height() - $('.region-home-featured').height(),
        });

        $('.panels-flexible-row-14-main-row .views-row').css({
            height: $('.panels-flexible-row-14-main-row .view-nodequeue-4.view-display-id-block_6 .panel-pane').height(),
        });

        var featured_science = $('.featured-area .views_slideshow_main').height();
    
    $('.featured-area .views-slideshow-controls-bottom').css({
       height:featured_science,
    })
    
    var thumb_height = $('.views-slideshow-controls-bottom .views-slideshow-pager-field-item').height();
    
    $('.views-slideshow-controls-bottom .views-slideshow-pager-field-item .views-field-nid').css({
       height: thumb_height,
    })
    
    var featured_explore = $('.featured-area .views_slideshow_main img').height();
    var explore_story = $('.featured-area .views_slideshow_main .item-content .explore-story a').height();
    $('.featured-area .views_slideshow_main .item-content .explore-story a').css({
       top:featured_explore - explore_story -32,
    })

      top = $('.banner-content').offset().top - parseFloat($('.banner-content').css('marginTop').replace(/auto/, 100));

      tabs_area = $('.content-bottom .views_slideshow_main').height();

        $('.content-bottom .views-slideshow-pager-fields').css({
                height:tabs_area+135,
        })
        $('.content-bottom .view-footer').css({
            top:tabs_area+135,
        })
        
        var slide_item = (tabs_area+135) / 4;
        $('.content-bottom .views-slideshow-controls-top .views-slideshow-pager-field-item').css({
            height: slide_item,
        })

    });

    $(window).resize(function(){
        var w = $(window).width();
        if(w > 1050) {
            menu.removeAttr('style');
            menu.removeClass('is-open');
            pull.removeClass('rotate');

        }
          if ((w>640)&&(w<1060)){
            equalheight('#sidebar-right .block');
          }
          else{
            $('#sidebar-right .block').css({'height':'auto'});
          }


        win_height = $(window).height() - 75;
        //featured_height = win_height - $('.region-home-featured').height();
        image_height = $('.item-img img').height() - 75;
        featured_item = image_height - $('.region-home-featured').height()-25;

       /* if (image_height>win_height) {
            boxx_height = win_height;
        }
        else{
            boxx_height = featured_height;
        }*/

        // console.log(featured_height());
        var $box = $('.box');
        
        if ( $('.box').hasClass('show-block')){
                
                var box1_height = featured_height() - $('.region-home-featured').height() - $('.box-1.show-block').height() - 60;
            
            var box2_height = featured_height() - $('.region-home-featured').height() - $('.box-2.show-block').height() - 85;
            var box2_left = ($(window).width()*0.1) + ($('.box-1.show-block').width()) + ($(window).width()*0.05);
            
            var box3_height = featured_height() - $('.region-home-featured').height() - $('.box-3.show-block').height() - 50 - 85;
            var box3_left = $('.region-home-featured .views-row').width() + $(window).width() * 0.35;
            
            var box4_height = featured_height() - $('.region-home-featured').height() + 10 - 85;
            var box4_left = $('.region-home-featured .views-row').width() + $(window).width() * 0.1;

            var box5_height = featured_height() - $('.region-home-featured').height() - 80 - 45;
            var box5_left = $('.region-home-featured .views-row').width() + $(window).width() * 0.1;

                $('.box-1.show-block').css({top:box1_height,left:w*0.1});
                $('.box-2.show-block').stop().animate({top:box2_height,left: box2_left},300);
                $('.box-3.show-block').stop().animate({top:box3_height,left: box3_left},300);
                $('.box-4.show-block').stop().animate({top:box4_height,left: box4_left},300);
                $('.box-5.show-block').stop().animate({top:box5_height,left: box5_left},300);
        }
	
    	
    	
    	$('.explore-science a').css({
            top: featured_height() - 85 ,
        });
        $('.region-home-featured').css({
            top: featured_height() - $('.region-home-featured').height(),
        });
	
    	equalheight('.panels-flexible-row-14-main-row .panel-pane');
        
    	equalheight('.four-blocks-row');
    	equalheight('.panels-flexible-row-14-3 .panel-pane');
    	
        var featured_explore;
         $(".featured-area .views_slideshow_main .views-slideshow-cycle-main-frame-row:visible").each(function(){
              featured_explore = $(this).find('.views-field-field-main-image img').height();
              $(this).parent().css({
                height:featured_explore
              })
        });

    	//var featured_explore = $('.featured-area .views_slideshow_main .views-slideshow-cycle-main-frame-row .views-field-field-main-image img').height();
        
    	$('.featured-area .views-slideshow-controls-bottom').css({
    	    height:featured_explore,
    	})

    	//var explore_story = $('.featured-area .views_slideshow_main .item-content .explore-story a').height();
        $(".featured-area .views_slideshow_main .views-slideshow-cycle-main-frame-row:visible").each(function(){
              explore_story = $(this).find('.item-content .explore-story a').height();
        });
    	$('.featured-area .views_slideshow_main .item-content .explore-story a').css({
    	    top:featured_explore - explore_story -32,
    	})
    	
    	var thumb_height = $('.views-slideshow-controls-bottom .views-slideshow-pager-field-item img').height();
    	
    	$('.views-slideshow-controls-bottom .views-slideshow-pager-field-item .views-field-nid').css({
    	    height: thumb_height,
    	})
	
	
    });  // end of resize

    $(function(){
        $('.not-front .banner-content a').data('size','big');
        $('.front .banner-content a').data('size','homebig');
    });

    var top = $('.banner-content').offset().top - parseFloat($('.banner-content').css('marginTop').replace(/auto/, 100));
    var offset = 350;
    var duration = 300;
    
    jQuery('.back-top').click(function(event) {
        event.preventDefault();
    	jQuery('html, body').animate({scrollTop: 0}, duration);
	   return false;
    })
    jQuery('.explore-science a').click(function(event) {
        //event.preventDefault();
    	$("html, body").animate({ scrollTop: $('#banner').offset().top }, 800);
    });
    
    $('.expand').on('click', function(e) {
        var w = $(window).width();
        //featured_height = $(window).height() - $('.region-home-featured').height();
        e.preventDefault();
        var classname= $(this).parents('.views-row').find('.item-flag').children().attr("class");
        classname = 'featured-'+classname;
	    var $box = $('.box');
        if ( $box.hasClass('show-block')){
            $('.expand').parents('.item-img').removeClass(classname);
    	    $box.removeClass('show-block');
    	    $box.removeAttr('style');
    	    $('.box-1').css({
    		  top: box,
    	    });
    	    $('.box-2').css({
    		  top: box,
    	    });
	    }
    	else{
            $(this).parents('.item-img').addClass(classname);
    	    $box.addClass('show-block');
    	    
    	    var box1_height = featured_height() - $('.region-home-featured').height() - $('.box-1.show-block').height() - 60;
    	    
    	    var box2_height = featured_height() - $('.region-home-featured').height() - $('.box-2.show-block').height() - 85;
    	    var box2_left = ($(window).width()*0.1) + ($('.box-1.show-block').width()) + ($(window).width()*0.05);
    	    
    	    var box3_height = featured_height() - $('.region-home-featured').height() - $('.box-3.show-block').height() - 50 - 85;
    	    var box3_left = $('.region-home-featured .views-row').width() + $(window).width() * 0.35;
    	    
            var box4_height = featured_height() - $('.region-home-featured').height() + 10 - 85;
    	    var box4_left = $('.region-home-featured .views-row').width() + $(window).width() * 0.1;

            var box5_height = featured_height() - $('.region-home-featured').height() - 80 - 45;

           /* if ((w<1250)&&(w>1050)){
                    box1_height = box1_height - 130;
                    box2_height = box2_height - 70;
                    box3_height = box3_height - 200;
            }*/
    	    
    	    $('.box-1.show-block').stop().animate({top:box1_height,left:'10%'},300);
    	    $('.box-2.show-block').stop().animate({top:box2_height,left: box2_left},300);
    	    $('.box-3.show-block').stop().animate({top:box3_height,left: box3_left},300);
    	    $('.box-4.show-block').stop().animate({top:box4_height, height:$('.region-home-featured').height()-35,left: box4_left},300);
            $('.box-5.show-block').stop().animate({top:box5_height,left: box4_left},300);
    	}
    })
    

    $(window).scroll(function (event) {
        win_height = $(window).height() - 75;
        image_height = $('.item-img img').height() - 75;
        featured_item = image_height - $('.region-home-featured').height()-25;

    	$('.explore-science a').css({
            top: featured_height() - 85 ,
        });
        $('.region-home-featured').css({
            top: featured_height() - $('.region-home-featured').height(),
        });
        var y = $(this).scrollTop();
        if (jQuery(this).scrollTop() > offset) {
            jQuery('.back-top').fadeIn(duration);
	    //jQuery('#header').fadeOut(duration);
	    
	   } else {
            jQuery('.back-top').fadeOut(duration);
	    //jQuery('#header').fadeIn(duration);
            
        }
    	if (jQuery(this).scrollTop() < featured_height() - 300) {
    	    $('.front #header').css({
                    position: 'fixed',
                    top: 0
                });
    	}
    	else{
    	$('.front #header').css({
                    position: 'absolute',
                    top: featured_height - 300
                });
    	}
        if ($(window).width()>1050){
            if (y >= top){
              $('.banner-content').addClass('fixed');
              if($('.not-front .banner-content a').data('size') == 'big')
                {
                    $('.not-front .banner-content a').data('size','small');
                    $('.not-front .banner-content a').stop().animate({
                        height:'65px'
                    },600);
                    $('.not-front .banner-content .block-menu-block a').stop().animate({
                        height:'75px',
                        
                    },600);
                }
                if($('.front .banner-content a').data('size') == 'homebig')
                {
                    $('.front .banner-content a').data('size','homesmall');
                    $('.front .banner-content a').stop().animate({
                        height:'65px'
                    },600);
                }
            } else {
              $('.banner-content').removeClass('fixed');
              if($('.not-front .banner-content a').data('size') == 'small')
                {
                    $('.not-front .banner-content a').data('size','big');
                    $('.not-front .banner-content a').stop().animate({
                        height:'90px'
                    },600);
                    $('.not-front .banner-content .block-menu-block a').stop().animate({
                        height:'75px',
                       
                    },600);
                }
                if($('.front .banner-content a').data('size') == 'homesmall')
                {
                    $('.front .banner-content a').data('size','homebig');
                    $('.front .banner-content a').stop().animate({
                        height:'190px'
                    },600);
                }  
            }
        }

        else {
            $('.banner-content').removeClass('fixed');
        }
    });
    //End of scroll function
});

// Fit Vids and Full Personell Page Table
(function($) {
    $(document).ready(function() {
        $(".embedded-video").fitVids();
        $('#giftRecurrence > option[value="One Time"]').attr('selected', 'selected');

        $('#node-1710>.content>.field').removeClass('field');

    });

}(jQuery));