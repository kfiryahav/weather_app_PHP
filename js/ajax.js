$(document).ready(function () {
  $("button").on("click", function (e) {
    e.preventDefault();

    // make the API call
    let city = $("#city").val();
    let key = "6997b75981a4b0883848693f42f0e67c";
    $apiData = `https://api.openweathermap.org/data/2.5/weather?q=${city}&appid=${key}`;

    if (city) {
      // if we reteive an json
      $.ajax({
        url: $apiData,
        success: function (result) {
          console.log(result);

          $("#small").html("");

          //extract the relevant values from the json
          let city_name = result.name;
          let temp = result.main.temp - 273.15;
          let fix_temp = Math.floor(temp) + "&#176;";
          let description = result.weather[0].description;
          let country = result.sys.country;
          let icon = result.weather[0].icon;

          //change the background image according to the tempeture
          if (temp < 10) {
            $("body").css({
              background:
                "url(https://images.pexels.com/photos/436792/pexels-photo-436792.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260) no-repeat",
              "background-size": "cover",
            });
          } else if (temp < 20) {
            $("body").css({
              background:
                "url(https://images.pexels.com/photos/913807/pexels-photo-913807.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1) no-repeat",
              "background-size": "cover",
            });
          } else {
            $("body").css({
              background:
                "url(https://images.pexels.com/photos/296234/pexels-photo-296234.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1) no-repeat",
              "background-size": "cover",
            });
          }

          // implements the weather info to the html
          $("#city_name").html(city_name).hide().fadeIn(1000);
          $("#icon")
            .html(`<img src="https://openweathermap.org/img/wn/${icon}.png">`)
            .hide()
            .fadeIn(1000);
          $("#temp").html(fix_temp).hide().fadeIn(1000);
          $("#description").html(description).hide().fadeIn(1000);
          $("#country").html(country).hide().fadeIn(1000);
        },
        error: function () {
          $("#small").html("City does not exist!");
        },
      });
    }
    // if we don't retrive a json
    else if (!city) {
      $("#small").html("Pleas type a city");
    }
  });
});
