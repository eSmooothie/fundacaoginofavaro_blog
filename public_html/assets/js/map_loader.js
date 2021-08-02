import url from './url.js';

async function getSites(){
  var response;
  return response = await $.ajax({
    type: 'get',
    url: url + "get/site/",
    success: function(data){
    },
    error: function(data){
    }
  });
}

function loadSites(siteList){
  var siteContainer = document.getElementById('siteList');

  siteList.forEach((item, i) => {
    var nodLI = document.createElement("LI");
    var nodA = document.createElement("A");
    var textNode = document.createTextNode(item["NAME"]);
    nodA.classList.add("dropdown-item");
    nodA.href = url+"explore/site/"+item['ID'];
    nodA.appendChild(textNode);
    nodLI.appendChild(nodA);
    siteContainer.appendChild(nodLI);
  });

}

async function getSiteImages(siteID){
  var response;
  return response = await $.ajax({
    type: 'get',
    url: url + "get/image/site/",
    data: {"ID": siteID},
  });
}

async function renderSite(site){
  document.getElementById('siteName').innerHTML = site['NAME'];
  document.getElementById('siteAddress').innerHTML = site['ADDRESS'];
  document.getElementById('siteDescription').innerHTML = site['DESCRIPTION'];
  document.getElementById('sitePhotos').classList.remove("d-none");
  document.getElementById('siteInfo').classList.remove("d-none");
  document.getElementById('siteDescDiv').classList.remove("d-none");
  var images = await getSiteImages(site['ID']);

  if(images.length != 0){
    console.log(images);
    document.getElementById('siteImage').src = url + "uploads/"+images[0]['NAME'];
    // <div class="col-sm-6 col-md-4 col-lg-3 item">
    //<a href="<?php echo base_url();?>/assets/img/desk.jpg">
    //<img class="img-fluid" src="<?php echo base_url();?>/assets/img/desk.jpg"></a></div>
    var siteGallery = document.getElementById('siteGallery');

    images.forEach((item, i) => {
      var imgURL = url + "uploads/"+item['NAME'];
      var nodDiv = document.createElement("DIV");
      var nodA = document.createElement("A");
      var nodImg = document.createElement("IMG");

      nodDiv.classList.add("item");
      nodA.href = imgURL;
      nodImg.classList.add("img-fluid");
      nodImg.src = imgURL;

      nodA.appendChild(nodImg);
      nodDiv.appendChild(nodA);
      siteGallery.appendChild(nodDiv);
    });

  }else{
    document.getElementById('siteImage').src = url + "image/no_image.png";
  }

}


$(document).ready(async function(){

  var sites = await getSites();

  var currentURL = window.location.href.split("/");
  loadSites(sites);

  if(currentURL.length == 6 && currentURL[4] == "site"){
    var siteID = currentURL[5];
    var site;
    sites.forEach(async (item, i) => {
      if(item["ID"] == siteID){
        site = item;
        await renderSite(site);
        return;
      }
    });
    var latLng = {lat: parseFloat(site["LAT"]), lon: parseFloat(site["LNG"])};
    var zoom = 17;
    $('#welcomeText').removeClass("d-block");
    $('#welcomeText').addClass("d-none");
  }else{
    $('#welcomeText').removeClass("d-none");
    $('#welcomeText').addClass("d-block");
    document.getElementById('siteImage').src = url + "image/flag.png";
    var latLng = {lon:125.7275, lat:-8.8742}; // location
    var zoom = 9;
  }

  mapboxgl.accessToken = 'pk.eyJ1IjoiZXNtb29vdGhpZWUiLCJhIjoiY2tydTYxYWU0M3BxajJ2cGV6MzdoOHZ0MCJ9._B7pyw5yyCO8B9qEiS7f_w';

  var map = new mapboxgl.Map({
    container: 'map',
    style: 'mapbox://styles/esmooothiee/ckru6el773i6218mn3dn0lav5',
    center: latLng,
    zoom: zoom,
    });
  map.addControl(new mapboxgl.NavigationControl(), 'bottom-left');
  sites.forEach((item, i) => {
    var latlng = {lat: parseFloat(item["LAT"]), lon: parseFloat(item["LNG"])};
    var marker = new mapboxgl.Marker({
      color: "#f86767",
      draggable: true
      }).setLngLat(latlng)
      .addTo(map);
    marker.getElement().addEventListener('click', () => {
      window.location.href = url + "explore/site/" + item['ID'];
    });
  });

});
