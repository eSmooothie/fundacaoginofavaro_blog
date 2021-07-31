let map;
let url = "http://192.168.254.104:9092/";
$(document).ready(function(){


});

async function getSites(){
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
  if(images){
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

async function initMap() {
    var sites = await getSites();
    var currentURL = window.location.href.split("/");
    loadSites(sites);

    if(currentURL.length == 6 && currentURL[4] === "site"){
      var siteID = currentURL[5];
      var site;
      sites.forEach(async (item, i) => {
        if(item["ID"] == siteID){
          site = item;
          await renderSite(site);
          return;
        }
      });
      var loc = new google.maps.LatLng(parseFloat(site["LAT"]),parseFloat(site["LNG"]));
      var zoom = 16;

    }else{
      document.getElementById('siteImage').src = url + "image/no_image.png";
      var loc = new google.maps.LatLng(-8.8742, 125.7275 ); // location
      var zoom = 8;
    }

    var mapOptions = {
        zoom: zoom,
        center: loc,
        disableDefaultUI: true,
    };

    var map = new google.maps.Map(document.getElementById("map"), mapOptions);

    const infoWindow = new google.maps.InfoWindow();

    sites.forEach((item, i) => {
      var position = {lat:parseFloat(item["LAT"]),lng:parseFloat(item["LNG"])};
      const marker = new google.maps.Marker({
        position,
        map,
        title: `${item['NAME']}`,
        optimized: false,
      });

      marker.addListener("click", ()=>{
        infoWindow.close();
        infoWindow.setContent(marker.getTitle());
        infoWindow.open(marker.getMap(), marker);
      });
    });

}
