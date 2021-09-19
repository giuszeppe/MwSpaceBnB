const searchWrapper = document.querySelector(".search-input");
const inputBox = searchWrapper.querySelector("input");
const suggBox = searchWrapper.querySelector(".autocom-box");
const icon = searchWrapper.querySelector(".icon");
let linkTag = searchWrapper.querySelector("a");
let webLink;

$(document).mouseup(function(e) 
{
    var container = $(".search-input");
    // if the target of the click isn't the container nor a descendant of the container
    if (!container.is(e.target) && container.has(e.target).length === 0) 
    {
        container.removeClass('active');
    } else {
        container.addClass('active');
    }
});

function place_if_exist(prop) {
  if (prop != undefined) return ',' + prop;
  else return '';
}

$("#search-box").keyup(function() {
  $.ajax({
    type: "GET",
    url: "https://photon.komoot.io/api/?q=" + $("#search-box").val() + "&lang=it" ,

    success: function(results) {
      suggBox.innerHTML = "";
      console.log(results);

      let aList = results.features;
      
      for (i = 0; i < aList.length; i++) {
        let elem = document.createElement('span');
        prop = aList[i].properties; 
        /*if(prop.osm_value == "country" ){ 
        optLabel = prop.country + ', ' + prop.countrycode;
        } else if(prop.osm_value == "city" || prop.osm_value == "administrative" ){
          optLabel = prop.name + ', ' +  prop.state + ', ' + prop.country + ' ' + prop.countrycode; 
        } else if (prop.osm_value == "locality") {
          optLabel = prop.name + ', ' + prop.country + ' ' + prop.countrycode;
        } else if (prop.osm_value == 'village') {
          optLabel = prop.name + ', ' + prop.county + ', ' + prop.country + ' ' + prop.countrycode;
        } else if (prop.osm_value == 'station') {
          optLabel = prop.name + ', ' + prop.street + ', ' + prop.county + ', ' + prop.country;
        } else {
          optLabel = prop.name + ', ' + prop.country + ' ' + prop.countrycode;
        }*/

        optLabel = prop.name + place_if_exist(prop.street) + place_if_exist(prop.district) + place_if_exist(prop.locality) + place_if_exist(prop.city) 
        + place_if_exist(prop.county) + place_if_exist(prop.state) + place_if_exist(prop.country) + place_if_exist(prop.countrycode);

        uniq = [...new Set(optLabel.split(','))].join(', ');

        let li = document.createElement('li')
        li.innerHTML = `${uniq}`;

        elem.appendChild(li);
        elem.setAttribute('onclick',"select(this)");
        suggBox.appendChild(elem);
        searchWrapper.classList.add('active')
      }
    }
  });
});

function select(element){
    let selectData = element.textContent;

    let parentNode = element.parentNode.parentNode;
    let wrapperNode = document.createElement('div');
    wrapperNode.setAttribute('id', 'coordinate');
    wrapperNode.setAttribute('style', 'display:none');
    console.log(parentNode);
    $.ajax({
      type:"GET",
      url:"https://photon.komoot.io/api/?q=" + element.textContent + "&limit=1" + "&lang=it",

      success: function (results) {
        childNode = document.getElementById('coordinate');
        if(childNode != undefined) parentNode.removeChild(childNode);
        list = results.features;
        coord = results.features[0].geometry.coordinates;
        console.log(coord);
        hiddenLat = document.createElement('input');
        hiddenLong  = document.createElement('input');
        let arr = [hiddenLong,hiddenLat];
        arr.map((elem,index) => {
          let name = index == 0 ? 'longitude' : 'latitude' ;
          elem.setAttribute('value', coord[index]);
          elem.setAttribute('type','hidden');
          elem.setAttribute('name',name);
          elem.classList.add('form-control')
          wrapperNode.appendChild(elem)
        });
        parentNode.appendChild(wrapperNode);

        inputBox.value = selectData;
        //hide autocom box
        searchWrapper.classList.remove('active');
      }
    })
}