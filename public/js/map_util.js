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

$("#search-box").keyup(function() {
  $.ajax({
    type: "GET",
    url: "https://photon.komoot.io/api/?q=" + $("#search-box").val(),

    success: function(results) {

      var aList = results.features;
      var aOptions = [];
      let htmlVal = '';
      for (i = 0; i < aList.length; i++) {
        let elem = document.createElement('span');
        optKey = aList[i].geometry.coordinates[0] + ',' + aList[i].geometry.coordinates[1];
        optLabel = aList[i].properties.name + ', ' + aList[i].properties.city + ', ' + aList[i].properties.postcode;
        aOptions.push({
          "value": optKey,
          "label": optLabel
        });
        let li = document.createElement('li')
        li.innerHTML = `${optLabel}`;

        elem.appendChild(li); // add each value to htmlVal
        elem.setAttribute('onclick',"select(this)");
        suggBox.appendChild(elem);
        searchWrapper.classList.add('active')
      }
    }
  });
});

function select(element){
    let selectData = element.textContent;
    inputBox.value = selectData;
    //hide autocom box
    searchWrapper.classList.remove('active');
}