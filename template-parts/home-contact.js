(function($){
    ymaps.ready(init);

    function init(){
        myMap = new ymaps.Map("map", {
            center: [51.27138754, 30.22168257],
            zoom: 17,
        });

        myPlacemark = new ymaps.Placemark([51.27138754, 30.22168257], {
            hintContent: 'Чорнобильський спецкомбінат',
            balloonContent: 'Чорнобильський спецкомбінат'
        });

        myMap.geoObjects.add(myPlacemark);
    }
})(jQuery);