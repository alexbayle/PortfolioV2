/**
 * Created with JetBrains PhpStorm.
 * User: Alexandre
 * Date: 04/08/2015
 * Time: 15:00
 */

jQuery(document).ready(function($){
    var $active = false;

    window.onhashchange = function(){
        if(window.location.hash.indexOf('projet-') < 0){
            return true;
        }

        var $work = $(window.location.hash);

        if($work.length < 1 || $work.hasClass('active')){
            return true;
        }
        var $detail = $work.parent().nextAll('.row-detail:first');
        var $work_detail = $('.work_detail', $work).clone();

        var showElement = function(){
            $detail.append($work_detail);
            $work_detail.slideDown();

            for(var i = 1; i <= 4; i++){
                $('.stagger' + i,$work_detail).css({opacity:0,marginLeft: -20}).delay(300 + 200 * i).animate({opacity:1,marginLeft: 0})
            }

            $active = $work_detail;
        }

        var hideActive = function(){
            var $el = $active;
            $el.slideUp(500,function(){
                $el.remove();
            })
        }

        var buildSlideshow = function(){
            $('.work_slideshow', $work_detail).nivoSlider({
                effect : 'boxRainGrow',
                directionNav : false,
                controlNav : false,
                pauseTime : 4000,
                animSpeed: 500
            });
        }

        $('.work').removeClass('active');
        $work.addClass('active');
        if($active){hideActive();}
        showElement();
        buildSlideshow();
    }

    $('.work').click(function(e){
        e.preventDefault();
        window.location.hash = $(this).attr('id')
    });
    window.onhashchange();

});

var scrollTo = function(cible){
    $('html','body').animate({scrollTop : cible.offset().top},750);
}