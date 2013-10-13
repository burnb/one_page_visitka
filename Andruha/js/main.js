/**
 * User: Burn
 * Date: 10.10.13
 * Time: 22:01
 */
//===========Localscroll===========//
$(document).ready(function(){$.localScroll({
    hash: true
})});

//===========Magnific-Popup Gallery Zoom===========//
$(document).ready(function() {
    $('.zoom-gallery').magnificPopup({
        delegate: 'a',
        type: 'image',
        closeOnContentClick: false,
        closeBtnInside: false,
        mainClass: 'mfp-with-zoom mfp-img-mobile',
        image: {
            verticalFit: true,
            titleSrc: function(item) {
                return '&middot; ' + item.el.attr('title') + ' &middot;';
            }
        },
        gallery: {
            enabled: true
        },
        zoom: {
            enabled: true,
            duration: 300, // don't foget to change the duration also in CSS
            opener: function(element) {
                return element.find('img');
            }
        }
    });
});

//===========Calculator===========//
function calcul(){
    $("#S").bind("slider:changed", function (event, data) {
    // The currently selected value of the slider
       alert(data.value);

    // The value as a ratio of the slider (between 0 and 1)
       alert(data.ratio);
});
}

//===========GMaps.js===========//
var map;
$(document).ready(function(){
    map = new GMaps({
        el: '#map',
        lat: 56.875951,
        lng: 53.211079
    });
    map.addMarker({
        lat: 56.875831,
        lng: 53.210788,
        title: 'Рога и копыта',
        infoWindow: {
            content: '<p>Рога и копыта</p>'
        }
    });
});