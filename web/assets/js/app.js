var map;
var defaultLatLng = new google.maps.LatLng(-25.428954,-49.267137);
var myLatlng  = defaultLatLng;

function initialize() {
    if(navigator.geolocation) {
        success = function(position) {
            lat = position.coords.latitude;
            lng = position.coords.longitude;
            myLatlng = new google.maps.LatLng(lat, lng);
            map.setCenter(myLatlng);
            zoom = ((lat > -25.439) && (lat < -25.415) && (lng > -49.275) && (lng < -49.262))?16:13;
            map.setZoom(zoom);

            var marker = new google.maps.Marker({
               map: map,
               position: new google.maps.LatLng(lat,lng),
               title: 'Você esta aqui!',
               icon: 'assets/img/you.png',
           });

        };
        error = function() { console.log('Geocoding failure'); }

        navigator.geolocation.getCurrentPosition(success,error);
    }

    var myStyles =[
    {
        featureType: "poi",
        elementType: "labels",
        stylers: [
        { visibility: "off" }
        ]
    },
    {
        featureType: "landscape.man_made",
        elementType: "labels",
        stylers: [
        { visibility: "off" }
        ]
    }
    ];

    var mapOptions = {
        zoom: 11,
        center: myLatlng,
        mapTypeId: google.maps.MapTypeId.ROADMAP,
        panControl: false,
        scaleControl: false,
        scrollwheel: false,
        mapTypeControlOptions: {
            style: google.maps.MapTypeControlStyle.HORIZONTAL_BAR,
            position: google.maps.ControlPosition.BOTTOM_RIGHT
        },
        styles: myStyles,
    }

    map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);

    // Icons
    var iconPosto = 'assets/img/posto.png';
    var iconVenda = 'assets/img/venda.png';

    // Each posto
    Object.keys(document.postos).forEach(function (key) {
        var posto = document.postos[key];
        drawMarker(key, posto[0], posto[1], posto[2],posto[3],iconPosto,34,49,0.7);
    });

    // Each venda
    Object.keys(document.vendas).forEach(function (key) {
        var venda = document.vendas[key];
        drawMarker(key, venda[0], venda[1], venda[2],venda[3],iconVenda,28,55,0.8);
    });
}

var windowopen;

function drawMarker(title,address,lat,lng,openhours,icon,width,height,ratio) {
    var myIcon = new google.maps.MarkerImage(icon, null, null, null, new google.maps.Size(width*ratio,height*ratio));
    //myIcon = icon;
    var marker = new google.maps.Marker({
        map: map,
        position: new google.maps.LatLng(lat,lng),
        title: title,
        icon: myIcon,
    });

    content = '<div id="content"><h3>' + title + '</h3><p>' + address;

    link = 'http://maps.google.com/maps?dirflg=w&daddr=' + lat + ',' + lng;
    link = '<br><a class="link-map" target="map" href="' + link + '">Como ir?</a>';

    if (openhours) content = content + '<br/>Aberto ' + openhours;
    content = content + link + '</p>' + '</div>';

    var infowindow = new google.maps.InfoWindow({
        content:  content,
    });

    google.maps.event.addListener(infowindow, 'domready', function() {
        $('.link-map').each(function() {
            this.href = this.href + '&saddr=' + myLatlng.lat() + ',' + myLatlng.lng();
        });
    });

    google.maps.event.addListener(marker, 'click', function() {
        if (windowopen) windowopen.close();
        infowindow.open(map,marker);
        windowopen = infowindow;
    });

    function closeSideBar(e) {
        $("#menu-close").click();
    }

    map.addListener('click', closeSideBar);

    $('#sidebar-wrapper').on('swiperight',closeSideBar)
}

google.maps.event.addDomListener(window, 'load', initialize);
