// https://www.wunderground.com/weather/api/d/docs?d=resources/code-samples
$(function getWeather() {
      var url = 'https://api.wunderground.com/api/35d9c39ec27c86b6/geolookup/conditions/q/autoip.json';
      $.getJSON(url, function(data) {
        $('#city').append(data.location.city);
        $('#temp').append(data.current_observation.feelslike_f + '&deg;F');
        $('#icon').attr('src', data.current_observation.icon_url);
        $('#condition').append(data.current_observation.weather);
        /* photos based on conditions
        var $body = $('body');
        if(data.current_observation.weather === "Snow") {
           $body.removeClass().addClass('snow');
        }else if(data.current_observation.weather === "Rain") {
           $body.removeClass().addClass('rain');
        }else if(data.current_observation.weather === "Clear"){
           $body.removeClass().addClass('clear');
        }else {
           $body.removeClass();
        }*/
         $("#temp").html(data.current_observation.feelslike_c + '&deg;C');
    });
});

// use radio button without icons (http://jqueryui.com/checkboxradio/#no-icons) 
$(function() {
    $("input").checkboxradio({icon: false});
});