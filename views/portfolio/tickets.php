<p>Tickets</p>

<ul id="bxslider">
    <li><img src="/assets/img/tickets/slider-tickets-1.jpg" /></li>
    <li><img src="/assets/img/tickets/slider-tickets-2.jpg" /></li>
    <li><img src="/assets/img/tickets/slider-tickets-3.jpg" /></li>
    <li><img src="/assets/img/tickets/slider-tickets-4.jpg" /></li>
    <li><img src="/assets/img/tickets/slider-tickets-5.jpg" /></li>
</ul>

<div id="bxslider-pager">
    <li data-slideIndex="0"><a href=""><img src="/assets/img/tickets/thumb-tickets-1.jpg" /></a></li>
    <li data-slideIndex="1"><a href=""><img src="/assets/img/tickets/thumb-tickets-2.jpg" /></a></li>
    <li data-slideIndex="2"><a href=""><img src="/assets/img/tickets/thumb-tickets-3.jpg" /></a></li>
    <li data-slideIndex="3"><a href=""><img src="/assets/img/tickets/thumb-tickets-4.jpg" /></a></li>
    <li data-slideIndex="4"><a href=""><img src="/assets/img/tickets/thumb-tickets-5.jpg" /></a></li>
</div>

<script>
    $(document).ready(function(){

        var realSlider = $('#bxslider').bxSlider({
            hideControlOnEnd: true,
            adaptiveHeight: true,
            infiniteLoop: false,
            slideWidth: 960,
            pager: false,
            speed: 1000,
            onSlideBefore: function ($slideElement, oldIndex, newIndex) {
                changeRealThumb(realThumbSlider, newIndex);
            }
        });

        var realThumbSlider = $('#bxslider-pager').bxSlider({
            minSlides: 5,
            maxSlides: 5,
            slideWidth: 143,
            slideMargin: 12,
            pager: false,
            moveSlides: 1,
            speed: 1000,
            infiniteLoop: false,
            hideControlOnEnd: true
            /*
            nextText: '<span></span>',
            prevText: '<span></span>',
            onSlideBefore: function ($slideElement, oldIndex, newIndex) {
            }
            */
        });

        linkRealSliders(realSlider,realThumbSlider);

        if($("#bxslider-pager li").length<5){
            $("#bxslider-pager .bx-next").hide();
        }

        // sincronizza sliders realizzazioni
        function linkRealSliders (bigS, thumbS) {
            $("#bxslider-pager").on("click","a",function(event){
                event.preventDefault();
                var newIndex=$(this).parent().attr("data-slideIndex");
                bigS.goToSlide(newIndex);
            });
        }

        //slider!=$thumbSlider. slider is the realslider
        function changeRealThumb(slider,newIndex){
            var $thumbS=$("#bxslider-pager");
            $thumbS.find('.active').removeClass("active");
            $thumbS.find('li[data-slideIndex="'+newIndex+'"]').addClass("active");
            if(slider.getSlideCount()-newIndex>=4)slider.goToSlide(newIndex);
            else slider.goToSlide(slider.getSlideCount()-4);
        }

    });
</script>
