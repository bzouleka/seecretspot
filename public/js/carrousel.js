$('document').ready(function() {



    var image = $('.imagesCarrousel'),
         i = 0,
         j = image.length - 1;


    $('.secondImages').hide();

    $('#0').on('click', function(){
        image.eq(0).fadeIn();
        $('.secondImages').fadeOut();
    });
    
    for (j; j > 0 ; j--) {
        $('<i class="fa fa-circle" aria-hidden="true"></i>').insertAfter($('#0')).css({'marginLeft': '3px','marginTop': '7px'}).attr({'id': j}).on('click', function () {
            image.fadeOut();
            image.eq(this.id).fadeIn();
        });
    }

    function carrousel() {
        if (i < image.length-1) {
            i++;
            image.eq(i).fadeIn();
            image.eq(i - 1).fadeOut();
        } else {
            i = 0;
            image.eq(i).fadeIn();
            image.eq(image.length - 1).fadeOut();
        }
    }

    function repetition () {
        setTimeout(function () {
            carrousel();
            repetition();
        }, 7000);
        
    }

    $('#prec').on('click', function () {
        if (i > 0) {
            i--;
            image.eq(i).fadeIn();
            image.eq(i + 1).fadeOut();
        } else {
            i = image.length - 1;
            image.eq(i).fadeIn();
            image.eq(0).fadeOut();
        }
    });

    $('#suivant').on('click', function() {
        carrousel ();
    });

    repetition ();


});

