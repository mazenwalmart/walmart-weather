class WalmartWeather {
    constructor() {
        this.events();
    }
    events () {
        const selectCity = document.querySelector( 'select[name=select_city]' );
        selectCity.addEventListener( 'change', () => {
            console.log(selectCity.value);
            jQuery.post(
                wwp.ajaxurl,
                {
                    action : 'getWeatherArray',
                    city   : selectCity.value
                },
                (res) => {
                    let arr      = JSON.parse(res);
                    const result = document.querySelector( 'div#result' );

                    result.querySelector( '#City' ).innerHTML = arr.city.toString();
                    result.querySelector( '#Humidity' ).innerHTML = arr.humidity.toString() + '%';
                    result.querySelector( '#Temp' ).innerHTML = arr.temp.toString() + "&#176;C";
                    result.querySelector( '#TempMax' ).innerHTML = arr.tempMax.toString() + "&#176;C";
                    result.querySelector( '#TempMin' ).innerHTML = arr.tempMin.toString() + "&#176;C";
                    result.querySelector( '#FeelsLike' ).innerHTML = arr.feelsLike.toString() + "&#176;C";
                }
            );

        } );
    }
}

window.addEventListener('DOMContentLoaded', (event) => {
    console.log( 'init walmart weather' );
    new WalmartWeather();
});
