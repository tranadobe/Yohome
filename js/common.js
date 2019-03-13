
/* readyEvent
------------------------------------------------------------------------*/

$(function(){



	// smoothScroll ---------------------------//
	var	speed = 1000,
		easing = 'swing',
		pcPosition = -0,
		tabPosition = -0,
		spPosition = -0;

	$('a').not('.noscroll').click(function(){
		var href = $(this).attr('href'),
			case1 = href.charAt(0) == '#',
			case2 = location.href.split('#')[0] == href.split('#')[0];

		if(case1 || case2) {
			if(case2)
				href = '#'+href.split('#')[1];

			$target = $(href);

			if($target.length){
				$html.add($body).not(':animated').animate({scrollTop : String($target.offset().top + (abi.pc ? pcPosition : abi.tab ? tabPosition : spPosition))},speed,easing);

				return false;
			}
		}
	});

	// outerPageAnchorLink ---------------------------//
	if(window.location.href.split('#')[1] == undefined || window.location.href.split('#')[1].indexOf('=') == -1) {
		var $target = $('#'+window.location.href.split('#')[1]),
			adjust = (abi.pc) ? pcPosition : (abi.tab) ? tabPosition : spPosition;

		if($target.length) {
			$w.load(function(){
				var targetPosition = $target.offset().top;
				$html.add($body).animate({scrollTop: String(targetPosition + adjust)}, 10);
			});
		}
	}

    var $tab = $('#tab'),
        $li = $tab.find('li'),
        $select = $tab.find('select');
 
    $li.click(function(){
        var target = $(this).attr('data-target');
        if($(target).is(':hidden')) {
            $(target).fadeIn(300).siblings().hide();
            $(this).addClass('active').siblings().removeClass('active');
            $select.val(target);
        }
    });
 
    $select
    .prop('selectIndex',1)
    .change(function(){
        var i = $(this).prop('selectedIndex');
        $li.eq(i).trigger('click');
    });

	var showFlug = false;
		wH = $w.height();			    		    			    			
	var showFlug = false;

	$(window).scroll(function () {
		if ($(this).scrollTop() >= 550) {
			if (showFlug == false) {
				showFlug = true;		
				$('.header-layout').addClass('fixed');
			}
		} else {
			if (showFlug) {
				showFlug = false;
				$('.header-layout').removeClass('fixed');
			}
		}
	});

	$('.menuopen').click(function(){
		if($('body').hasClass('fix_active')) {
			$('body').removeClass('fix_active');
			$html.css({
				overflowY: '',
				height: '',
				margin:''
			});
		} else {
			$('body').addClass('fix_active');
			$html.css({
				overflowY: 'hidden',
				height: '100%',
			});		    
		}
	});	 

    $('.widget-title').click(function(){
        if(!$(this).is('.sp_only') || $(this).is('.sp_only') && abi.sp) {
            var $next = $(this).next();
            if(!$next.is(':animated')) $next.slideToggle(200).prev().toggleClass('active');		
        }
    });		
    $('.accodion').click(function(){
        if(!$(this).is('.sp_only') || $(this).is('.sp_only') && abi.sp) {
            var $next = $(this).next();
            if(!$next.is(':animated')) $next.slideToggle(200).prev().toggleClass('active');		
        }
    });   
	$w.on({
		//load
		'load' : function(){

		},
		//scroll
		'scroll' : function(){

		}
	}).superResize({
		//resize
		resizeAfter : function(){

		}
	}).firstLoad({
		//firstLoad
		pc_tab : function(){

		},
		sp : function(){
			$('#mainslider').slick({
			  dots: false,
			  infinite: true,
			  speed: 300,
			  autoplay:true,
			  slidesToShow: 1,
			  adaptiveHeight: false,
			  prevArrow:'<div type="button" class="slick-prev"></div>',
			  nextArrow:'<div type="button" class="slick-next"></div>',	
			    
			});
		}
	});        
});
