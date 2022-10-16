jQuery(function($) {
   // Set Image for different devices
    function _set_image( selector, photo, photo_tablet, photo_phone ) {
        var _screen = $( document ).width();

        if( _screen < 768 ) {
            if( photo_phone && photo_phone.length > 0 ) {
                $( selector ).attr( 'src', photo_phone );
            }
        } else if( _screen < 981 && _screen > 767 ) {
            if( photo_tablet && photo_tablet.length > 0 ) {
                $( selector ).attr( 'src', photo_tablet );
            }
        } else {
            $( selector ).attr( 'src', photo );
        }
    }


    var swapped_img_parent = $('.ba-swapped-img-selector');

    if( swapped_img_parent.length > 0 ) {
        swapped_img_parent.each( function() {

            var swapped_img  = $(this).find('.ba-swapped-img'),
                img_schema   = swapped_img.data('schema');

            if( img_schema && typeof( img_schema ) === 'object' ) {

                var photo        = img_schema['desktop'],
                    photo_hover  = img_schema['hover'],
                    photo_tablet = img_schema['tablet'],
                    photo_phone  = img_schema['phone'];

                if( photo_hover && photo_hover.length > 0 ){

                    $( this ).on( 'hover', function() {
                        $( swapped_img ).attr( 'src', photo_hover );
                        $( swapped_img ).addClass( 'ba-img-hovered' );
                    } )

                    $( this ).on( 'mouseleave', function() {
                        _set_image( swapped_img, photo, photo_tablet, photo_phone );
                        $( swapped_img ).removeClass( 'ba-img-hovered' );
                    } )
                }

                _set_image( swapped_img, photo, photo_tablet, photo_phone );

                if( photo_tablet && photo_tablet.length > 0 || photo_tablet && photo_phone.length > 0 ) {
                    $(window).on('resize', function() {
                        _set_image( swapped_img, photo, photo_tablet, photo_phone );
                    } )
                }
            }

        } );
    }

    var ba_img_lightbox = $('.ba-lightbox');
    if( ba_img_lightbox ) {

        try {
            ba_img_lightbox.magnificPopup({
                type: 'image',
                mainClass: 'mfp-with-zoom',
                gallery: { enabled:false },
                zoom: {
                    enabled: true,
                    duration: 300,
                    easing: 'ease-in-out',
                }
            } );

        } catch(e) {
            return;
        }
    }

    var ba_carousel = $( '.ba-carousel' );

    if ( ba_carousel ) {

        var _pre_settings = {
            swipeToSlide   : true,
            edgeFriction   : .35,
            useTransform   : true,
            touchThreshold : 600,
        };

        ba_carousel.each( function() {
            var _user_settings = $(this).data('settings');
            var _settings = Object.assign( _pre_settings, _user_settings );

            $( this ).slick( _settings );
        } );
    }
});