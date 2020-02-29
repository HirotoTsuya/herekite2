
const options = {
    // Required: API key
    key: '5xdXZsOOWNIyOnCcmKmtrWK7guqfAxxg', // REPLACE WITH YOUR KEY !!!

    // Put additional console output
    verbose: true,

    // Optional: Initial state of the map
    lat: 35.3,
    lon: 139.7,
    zoom: 5,
};

// Initialize Windy API
windyInit(options, windyAPI => {
    // windyAPI is ready, and contain 'map', 'store',
    // 'picker' and other usefull stuff

    const { map } = windyAPI;
    // .map is instance of Leaflet map


   var icondate = L.icon({
    iconRetinaUrl:"../images/mapicon.png",
    iconUrl:"../images/mapicon.png",
    iconSize: [20, 20],
    iconAnchor: [0, 20],
    popupAnchor: [0, -15],  
    });

    for(var i = 0; i < markerDate.length; i++){
    var mapMarker = L.marker([markerDate[i]['lat'],markerDate[i]['lang']],{icon:icondate}).addTo(map);
    var comment = "<a href='/windinfospot/" + markerDate[i]['url'] + "' >" + markerDate[i]['name'] + "</a>";
    mapMarker.bindPopup(comment);

    }});






//////map状に表示するマーカーデータ ここから//////////////////////////////////////////////////////////
var markerDate = [
  {
    name:'富津岬',
    url:'futtsumisaki',
    id:'1',
    lat:35.312782,
    lang:139.784725
  },{
    name:'那古船形',
    url:'nakohunakata',
    lat:35.021802,
    lang:139.853211 
  },{
    name:'盤州',
    url:'banzu',
    lat:35.431516,
    lang:139.907885
  }
];
//////マーカーデータ ここまで/////////////////////////////////////////////////////////////////////////
