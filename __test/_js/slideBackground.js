
/*

    IMPORTANT NOTE:
    
    For demo purpose only.

    Except the Sin City Promotional Material and the downloadable Vegas plugin,
    any reproduction, even partial, of this design is strictly prohibited 
    without previous written authorisation from the author.

 */

/* jshint strict: false */

var $body       = $('body')

var backgrounds = [
    { src: '../_css/_imgs/_photos/domain.jpg', valign: 'top' },
    { src: '../_css/_imgs/_photos/fermenting-cellar.jpg', valign: 'top' },
    { src: '../_css/_imgs/_photos/tasting-cellar.jpg', delay: 6500 }
];

$('html').addClass('animated');

var displayBackdrops = false;

$body.vegas({
    preload: true,
    overlay: '/js/vegas/dist/overlays/01.png',
    transitionDuration: 4000,
    delay: 10000,
    slides: backgrounds,
    walk: function (nb, settings) {
        if (settings.video) {
            $('.logo').addClass('collapsed');
        } else {
            $('.logo').removeClass('collapsed');
        }
    }
});

