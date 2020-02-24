var countPreviewChange=1;

var period=1;

$(document).ready(function(){



    period=$('#periodoTransicion').val();

    $('#indicadores').slick({
        centerMode: true,
        centerPadding: '1%',
        infinite: true,
        autoplay: true,
        autoplaySpeed: $('#periodoTransicion').val(),
        slidesToShow: 5,
        focusOnSelect: true,
        responsive: [
        {
          breakpoint: 768,
          settings: {
            arrows: true,
            centerMode: true,
            centerPadding: '40px',
            slidesToShow: 3
          }
        },
        {
          breakpoint: 480,
          settings: {
            arrows: true,
            centerMode: true,
            centerPadding: '40px',
            slidesToShow: 1
          }
        }
        ]
    });

    // On before slide change
    $('#indicadores').on('afterChange', function(event, slick, currentSlide, nextSlide){
        $('.slick-center').find(".tabPreviewIndicador").first().find('a').trigger('click')
        $('.slick-center').find(".unBadgeImgAlternative").removeClass('hidden');
        $('.slick-center').find(".unBadgeImgOriginal").addClass('hidden');


    })

    $('#indicadores').on('beforeChange', function(event, slick, currentSlide, nextSlide){
        $(".slick-slide").find(".unBadgeImgAlternative").addClass('hidden');
        $(".slick-slide").find(".unBadgeImgOriginal").removeClass('hidden');

    })


    $('.slick-center').first().find('a').trigger('click')


    function setHeightsTabPreviewIndicador(){

        var maxHeight=0;
        $('.tabPreviewIndicador').css({"height": "auto"})

        $('.tabPreviewIndicador').each(function( index ) {
            if($(this).height()>maxHeight){
                maxHeight=$(this).height()
            }
        });

        $('.tabPreviewIndicador').each(function( index ) {
            $(this).height(maxHeight);
        });

        console.log(maxHeight)


    }

    //setHeightsTabPreviewIndicador();

    $( window ).resize(function() {
        //setHeightsTabPreviewIndicador();
    });


});
