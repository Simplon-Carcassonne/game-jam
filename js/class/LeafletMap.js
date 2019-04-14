
/*
This assume you have prepard HMTL/PHP page with css and js leaflet files
see more at : https://leafletjs.com/examples/quick-start/
Create access token at : https://www.mapbox.com/account/access-tokens

you must have a container like a <div> with an ID you'll pass to this object at creation
*/

class LeafletMap {

    constructor(latitude, longitude, zoom = 17, datas = null, ID = "mapid", isSymfony = false) {

        this.accessToken = "pk.eyJ1IjoiZ3dhZGFsZGVzaWduIiwiYSI6ImNqbGltcXh3cDAydXQzdm14cHJiNGs0aXIifQ.KNvsGgqyQgZJvYps6REW-A";

        this.latitude = latitude;
        this.longitude = longitude;
        this.zoom = zoom;
        //this.domElmt = document.querySelector('h1');
        //this.domElmt = document.getElementById(ID);
        /*this.domElmt.addEventListener('onDatasAvailable',  (e) => {
            this.onDatasAvailable(e.detail.infos);
          },true,true);*/

        //use PARENT to ensure event will be catch from EventBus
        document.addEventListener('onDatasAvailable', (e) => {
            this.onDatasAvailable(e.detail.infos);
        });

        /****  create leaflet map ***/
        this.mymap = L.map(ID).setView([this.latitude, this.longitude], zoom);
        L.tileLayer('https://api.tiles.mapbox.com/v4/{id}/{z}/{x}/{y}.png?access_token={accessToken}', {
            attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, <a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
            maxZoom: 17,
            id: 'mapbox.streets',
            accessToken: this.accessToken
        }).addTo(this.mymap);

        //add layer to the map
        if (isSymfony) {
            //get the token from twig
            let mapBoxToken = document.querySelector('.mapBoxToken');
            this.accessToken = mapBoxToken.dataset.isMaptoken;
        }
        else {
            console.log("not SF !!");
            //this.accessTokentoken = this.accessToken;
        }
        //custom Icons
        var simplonIcon = L.icon({
            iconUrl: 'img/Hornet_GJ.png',
            //shadowUrl: 'logoSimplon.png',

            iconSize: [38, 38], // size of the icon
            shadowSize: [38, 38], // size of the shadow
            //iconAnchor:   [7, 7], // point of the icon which will correspond to marker's location
            iconAnchor: [19, 5],
            shadowAnchor: [4, 62],  // the same for the shadow
            popupAnchor: [13, -10]//[-3, -76] // point from which the popup should open relative to the iconAnchor
        });
        this.marker = L.marker([43.21231926254244, 2.351224422454834], { icon: simplonIcon }).addTo(this.mymap);
        //this.mymap.on('click', this.onMapClick.bind(this));

        var popup = L.popup()
            .setLatLng([43.21231926254244, 2.351224422454834])
            .setContent("Salle Joe Bousquet, 39 rue aimé ramond, 11000 Carcassonne <br> Cliquez pour ouvrir l'application de guidage")
            .openOn(this.mymap);

        $(window).on('orientationchange pageshow resize',  () => {
            $(ID).height($(window).height());
            this.mymap.invalidateSize();
            this.mymap.setView([this.latitude,this.longitude], this.zoom);
        }).trigger('resize');

        this.marker.on('click', () => {
            this.onPopUpClick();
        });

    }
    onMapClick(e) {
        //alert("You clicked the map at " + e.latlng);
        //console.log(this);
        this.mymap.closePopup();
    }

    onMarkerClick() {
        alert("ok");
    }

    onPopUpClick() {
        let url = 'http://www.google.com/maps/place/' + this.latitude + ',' + this.longitude;
        let inAppBrowser = this.mapsSelector(url);

        //var inAppBrowser = window.open('geo:53,-9?z=8', '_blank', 'location=yes');
        //window.location = 'comgooglemaps://?center=43.056488,2.221891&zoom=17&views=traffic';

        //var url = 'http://www.google.com/maps/place/' + latitude ',' + longtitude;
        //var inAppBrowser = window.open(url, '_blank', 'location=yes');
    }

    mapsSelector(url) {
        if /* if we're on iOS, open in Apple Maps */
            ((navigator.platform.indexOf("iPhone") != -1) ||
            (navigator.platform.indexOf("iPad") != -1) ||
            (navigator.platform.indexOf("iPod") != -1))
            window.open("maps://maps.google.com/maps?daddr=<lat>,<long>&amp;ll=");
        else /* else use Google */
            //window.open("https://maps.google.com/maps?daddr=<lat>,<long>&amp;ll=");
            window.open(url, '_blank', 'location=yes');
    }

    onDatasAvailable(datas) {
        console.log("callback in MAP " + datas);

        //add the markers
        if (datas !== null && datas !== undefined) {
            //console.log(datas);

            for (let i = 0; i < datas.length; i++) {
                //console.log("Fabrique de :" +datas[i].fabriqueName+ " en GPS : "+datas[i].lat);
                let markerWrapper = new LeafletMarker(datas[i], this.mymap);
            }
        }
        else {
            console.log("ERROR : pas de data !");
        }
    }

}
